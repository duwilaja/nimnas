<?php
$redirect=false;
$cleartext=true;

include "inc.common.php";
include "inc.session.php";
include "lib_inc.db.php";

$conn=connect();

$whr=($mys_LOC=='')?"1=1":" loc in ('$mys_LOC')";

$ord=post("ord");

$sql="select n.host,name,loc,typ,sum(t.ifinoctets_delta) as inb,sum(t.ifoutoctets_delta) as outb 
from core_traffic t join nimdb.core_ports x on x.port=t.port_id join nimdb.core_node n on x.host=n.host 
where date(dtm)=date(now()) and traffic='Y' and t.ifoutoctets_delta<>t.ifinoctets_delta and $whr 
group by n.host,name,loc,typ 
 order by inb $ord limit 5";

//look for the latest record
$sql="select max(t.rowid) as mrow,device_id from core_traffic t join nimdb.core_ports x on x.port=t.port_id where traffic='Y' group by device_id";
$rs=exec_qry($conn,$sql);
$maxs=fetch_alla($rs);
$rowids=array();
for($i=0;$i<count($maxs);$i++){
	$rowids[]=$maxs[$i]["mrow"];
}
$recs=implode(",",$rowids);

$sql="select n.host,name,n.bw,t.ifinoctets_delta as inb, t.ifoutoctets_delta as outb, device_id 
from core_traffic t join nimdb.core_ports x on x.port=t.port_id join nimdb.core_node n on x.host=n.host 
where t.rowid in ($recs) and t.ifoutoctets_delta<>t.ifinoctets_delta and $whr 
 order by inb $ord limit 5";

$rs=exec_qry($conn,$sql);
$lists=fetch_alla($rs);

disconnect($conn);

function urai($bit){
	$bit=$bit/300;
	$ret=round($bit/1000000000,2).'GB';
	if($bit<1000000000) $ret=round($bit/1000000,2).'MB';
	if($bit<1000000) $ret=round($bit/1000,2).'KB';
	
	return $ret;
}

for($i=0;$i<count($lists);$i++){
	$list=$lists[$i];
	$bw=trim(str_ireplace("gb","",str_ireplace("mb","",$list['bw']))); //cleanup letter
	$bw = (is_numeric($bw)) ? intval($bw):0;
	$h=$list['host'];
	$act='<a title="Overview" class="btn btn-sm btn-primary ripple" href="JavaScript:;" data-fancybox data-type="iframe" data-src="lib_device'.$ext.'?h='.$h.'&idx='.$idx.'">'.$h.'</a>';
	
?>
		<tr>
			<!--td><?php echo ($i+1) ?></td-->
			<td><?php echo $act ?></td>
			<td><?php echo $list['name'] ?></td>
			<td><?php echo $list['bw'] ?></td>
			<td><?php echo urai($list['inb']) ?></td>
			<td><?php echo $bw ?></td>
			<td><?php echo urai($list['outb']) ?></td>
			<td><?php echo $bw ?></td>
		</tr>
<?php }?>
