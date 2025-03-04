<?php
$redirect=false;
$datatable=true;

include 'inc.session.php';
include 'inc.common.php';
include 'inc.db.php';

$conn = connect();

$x=post("x",$conn,"");
if($x==""){
	$output = array(
          "draw"=>1,
          "recordsTotal"=>0, // total number of records 
          "recordsFiltered"=>0, // if filtered data used then tot after filter
          "data"=>array(),
		  "msgs"=>"X is blank"
        );
	echo json_encode($output);
	
	exit;
}
$tname=base64_decode(post("tname",$conn));
$cols=base64_decode(post("cols",$conn));
$where=base64_decode(post("where",$conn));
$csrc=base64_decode(post("csrc",$conn));
$cseq=base64_decode(post("cseq",$conn));
$date=post("date",$conn);

$grpcol=base64_decode(post("grpcol",$conn));
$grpby=base64_decode(post("grpby",$conn));
$grpcol=$grpcol==""?$grpby:$grpcol;
$grpby=$grpby!=""?" group by $grpby":"";

$having=base64_decode(post("having",$conn));
$having=$having!=""?" having $having":"";

//filters
$where=get_params($where,$conn,explode(",",post("filtereq")),"=");
$where=get_params($where,$conn,explode(",",post("filtergt")),">");
$where=get_params($where,$conn,explode(",",post("filtergteq")),">=");
$where=get_params($where,$conn,explode(",",post("filterlt")),"<");
$where=get_params($where,$conn,explode(",",post("filterlteq")),"<=");
$where=get_params($where,$conn,explode(",",post("filterlike")),"like");
$where=get_params($where,$conn,explode(",",post("filterin")),"in");
$where=get_params($where,$conn,explode(",",post("filternotin")),"not in");

//specific param with col modif
$param=isset($_POST['fdf']) ? $_POST['fdf']:"";
	if($param!=""){
		$where=$where!=""?"$where and dt>='$param'":"dt>='$param'";
	}
$param=isset($_POST['fdt']) ? $_POST['fdt']:"";
	if($param!=""){
		$where=$where!=""?"$where and dt<='$param'":"dt<='$param'";
	}
$param=isset($_POST['fdtmf']) ? $_POST['fdtmf']:"";
	if($param!=""){
		$where=$where!=""?"$where and dtm>='$param 00:00:00'":"dtm>='$param 00:00:00'";
	}
$param=isset($_POST['fdtmt']) ? $_POST['fdtmt']:"";
	if($param!=""){
		$where=$where!=""?"$where and dtm<='$param 23:59:59'":"dtm<='$param 23:59:59'";
	}

/*group implementation*/
$param=($s_GRP=='')?"":"(grp='$s_GRP')";
$applicable=explode(",","ndevice,nlocation,-,mdevice");
	if($param!=""&&in_array($x,$applicable)){
		$where=$where!=""?"$where and $param":"$param";
	}

/*tablename is tname plus where*/
$tablename=$tname;
if($where!=""){
	$tablename.=" where ($where)";
}

/*get field name*/
$result = exec_qry($conn,"select ".$cols." from ".$tablename." ".$grpby." limit 0");
$acol=array();
while($field = fetch_field($result)){
	$acol[]=$field->name;
}
$col=count($acol);

/*total record, use select count(), faster than recordcount from result*/
$sqlcount=$grpcol==""?"select count(*) as cntstar from $tablename":"select count(*) as cntstar from (select distinct $grpcol from $tablename) mytbl";
$result = exec_qry($conn,$sqlcount);
$iTotal = 0;
while($row=fetch_row($result)){
	$iTotal+=$row[0];
}
$iFilteredTotal = $iTotal;

/*limit*/
$draw = $_POST["draw"];
$limit="";
if ( isset($_POST['start']) && $_POST['length'] != -1 ) {
	$limit = "LIMIT ".intval($_POST['start']).", ".intval($_POST['length']);
}

/*search*/
$str = esc_str($conn,$_POST["search"]["value"]);
$search = "";
if($str!=""){
	if($csrc!=""){
		$acs=explode(",",$csrc);
		for($j=0;$j<count($acs);$j++){
			$search.=" or ".$acs[$j]." like '%".$str."%'";
		}
	}
	if($cseq!=""){
		$acseq=explode(",",$cseq);
		for($j=0;$j<count($acseq);$j++){
			$search.=" or ".$acseq[$j]." = '".$str."'";
		}
	}
	if($where==""){
		$search=" where 1=0".$search;
	}else{
		$search=" and (1=0".$search.")";
	}
}

if($date!=""){
	$search=" and DATE(created) = '".$date."'";
}

/*total record, after search*/
if($search!=""){
$sqlcount=$grpcol==""?"select count(*) as cntstar from $tablename $search":"select count(*) as cntstar from (select distinct $grpcol from $tablename $search) mytbl";
$result = exec_qry($conn,$sqlcount);
if($row=fetch_row($result)){
	$iFilteredTotal=$row[0];
}
}

/*sorting*/
$order="";
$ordercol=$_POST["order"][0]["column"];
$orderdir=$_POST["order"][0]["dir"];
if($ordercol<=$col){
	$order=" order by ".$acol[$ordercol]." ".$orderdir;
}

/*construct sql, exec and build output*/
$sql = "select ".$cols." from ". $tablename ." ".$search." ".$grpby." ".$having." ".$order." ".$limit;
//echo $sql;

$result = exec_qry($conn,$sql);

$output = array(
          "draw"=>$draw,
          "recordsTotal"=>$iTotal, // total number of records 
          "recordsFiltered"=>$iFilteredTotal, // if filtered data used then tot after filter
          "data"=>array(),
		  "msgs"=>""
        );
if(!$production){ $output["msgs"] = $sql;} //debug for dev

$i=0;
$xx="";
while($row = fetch_row($result)){
	$i++;
	$act="";
	
	//$act='<a title="Edit" href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal_large" onclick="openForm(\''.$row[$col-1].'\');"><i class="fa fa-pencil"></i></a>';
	//$act.='&nbsp;<a title="Delete" href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal_delete" onclick="openDelete(\''.$row[$col-1].'\');"><i class="fa fa-trash"></i></a>';
	
	if($x=='project'){
		$act='<a title="Overview" style="padding-top:0;padding-bottom:0;" class="btn btn-outline-secondary" href="JavaScript:;" data-fancybox data-type="iframe" data-src="overview'.$ext.'?id='.$row[0].'"><i class="fa fa-th-large"></i></a>';
		$row[$col-2]=$act;
	}
	
	if($x=="rsla"){
		$row[7]=$row[9]==0?0:round(($row[8]/$row[9]*100),2);
		$xx='-';
	}
	if($x=="nlocation"){
		$act='<a title="Devices" class="btn btn-sm btn-primary ripple" href="n_device'.$ext.'?loc='.$row[0].'">'.$row[0].'</a>';
		$row[0]=$act;
		$xx='-';
	}
	if($x=="ncategory"){
		$act='<a title="Devices" class="btn btn-sm btn-primary ripple" href="n_device'.$ext.'?typ='.$row[0].'">'.$row[0].'</a>';
		$row[0]=$act;
		$xx='-';
	}
	if($x=="ndevice"){
		$act='<a title="Overview" class="btn btn-sm btn-primary ripple" href="JavaScript:;" data-fancybox data-type="iframe" data-src="device'.$ext.'?h='.$row[0].'">'.$row[0].'</a>';
		$act.='&nbsp;&nbsp;<a title="Manage" target="_blank" href="https://'.$row[0].'"><i class="fas fa-desktop" style="color:orange;"></i></a>';
		$row[2].=($is_ticket&&$row[2]=='DOWN')?' <a href="#" title="Create Ticket" class="btn" onclick="ticks(\''.$row[1].'\',\''.$row[4].'\');"><i class="fas fa-arrow-right"></i></a>':'';
		
		$row[0]=$act;
		$xx='-';
	}
	
	if($x=="ticknotes"){
		$act='<a title="Attachment" class="btn btn-sm btn-primary ripple" href="JavaScript:;" data-fancybox data-type="iframe" data-src="tickattc/'.$row[4].'">'.$row[4].'</a>';
		$row[4]=$act;
		$xx='-';
	}
	if($x=="tick"){
		$color="yellow";
		if($row[2]=="high") $color="orange";
		if($row[2]=="critical") $color="red";
		$row[2]="<span class='btn-sm btn-$color'>".$row[2]."</span>";
	}
	if($x=='rgen'){
		$act='<a title="View" class="dttbl" href="JavaScript:;" data-fancybox data-type="iframe" data-src="r_genshow'.$ext.'?j='.$row[7].'">'.$row[7].'</a>';
		if($row[6]=='done') $row[7]=$act;
	}
	if($x=='rperf'){
		$act='<a title="Overview" class="btn btn-sm btn-primary ripple" href="JavaScript:;" data-fancybox data-type="iframe" data-src="device'.$ext.'?h='.$row[0].'">'.$row[0].'</a>';
		$row[0]=$act;
		$xx='-';
	}
	if($x=="hrrem"||$x=='myrem'||$x=='rreim'){
		if($row[7]!=''){
			$act='<a title="Attachment" class="btn btn-sm btn-primary ripple" href="JavaScript:;" data-fancybox data-type="iframe" data-src="remattc/'.$row[7].'"><i class="fa fa-paperclip"</i></a>';
			if($x=='rreim') $act='<a target="_blank" href="'.$app_url.'remattc/'.$row[7].'">'.$row[7].'</a>';
			$row[7]=$act;
		}
		if($x=='myrem'||$x=='rreim') $xx='-';
	}
	if($x=="hrot"||$x=='myot'){
		if($row[8]!=''){
			$act='<a title="Attachment" class="btn btn-sm btn-primary ripple" href="JavaScript:;" data-fancybox data-type="iframe" data-src="otattc/'.$row[8].'"><i class="fa fa-paperclip"</i></a>';
			$row[8]=$act;
		}
		if($x=='myot') $xx='-';
	}
	if($x=="hratt"){
		$act='<span class="badge" style="background-color:'.$row[9].'">'.$row[4].'</span>';
		$row[4]=$act;
		if(trim($row[10])!=''){
			$phn=str_ireplace(" ","",str_ireplace("-","",$row[10]));
			$phn=substr($phn,0,1)=="0"?"+62".substr($phn,1):$phn;
			$act='&nbsp;&nbsp;<a title="Whatsapp" target="_blank" href="https://wa.me/'.$phn.'"><i class="fab fa-whatsapp" style="color:orange;"></i></a>';
			$row[2]=$row[2].$act;
		}
		if($x=='myatt') $xx='-';
	}
	if($x=="hrleav"||$x=='myleav'){
		if($row[7]!=''){
			$act='<a title="Attachment" class="btn btn-sm btn-primary ripple" href="JavaScript:;" data-fancybox data-type="iframe" data-src="leavattc/'.$row[7].'"><i class="fa fa-paperclip"</i></a>';
			$row[7]=$act;
		}
		if($x=='myleav') $xx='-';
	}
	if($x=='rstory'){
		$potos=explode(";",$row[4]); $act="";
		for($ix=0;$ix<count($potos);$ix++){
			$act.='<a title="View" href="JavaScript:;" data-fancybox data-type="iframe" data-src="story/'.$potos[$ix].'">'.$potos[$ix].'</a><br />';
		}
		$row[4]=$act;
		$xx='-';
	}
	
	if($x!="-"&&$xx!="-"){ //- means no need to modify first column
		if($template=="aronox"){
			$row[0]='<a href="#" class="dttbl"  title="Open" data-toggle="modal" data-target="#myModal" onclick="openForm(\''.$x.'\',\''.$row[$col-1].'\');">'.$row[0].'&nbsp;</a>';
		}elseif($template=='spruha'){
			$row[0]='<a href="#" class="btn btn-sm btn-primary ripple"  title="Open" data-bs-toggle="modal" data-bs-target="#myModal" onclick="openForm(\''.$x.'\',\''.$row[$col-1].'\');">'.$row[0].'&nbsp;</a>';
		}else{
			$row[0]='<a href="#" class="dttbl"  title="Open" data-bs-toggle="modal" data-bs-target="#myModal" onclick="openForm(\''.$x.'\',\''.$row[$col-1].'\');">'.$row[0].'&nbsp;</a>';
		}
	}
	
	$output["data"][] = $row ;
}

disconnect($conn);

echo json_encode( $output );
?>