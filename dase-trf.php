<?php
$redirect=false;
$cleartext=true;

include "inc.common.php";
include "inc.session.php";
include "lib_inc.db.php";

$conn=connect();

$wherloc ='where hostname in (select host from nimdb.core_node)';
$host='';
if($mys_LOC!=''){
	$sql="select host from nimdb.core_node where loc in ('$mys_LOC')";
	$rs=fetch_alla(exec_qry($conn,$sql));
	$aho=array();
	for($i=0;$i<count($rs);$i++){
		$aho[]=$rs[$i]['host'];
	}
	$wherloc.=count($aho)>0?" and hostname in ('".implode("','",$aho)."')":"";
}
$sql="select hostname from devices $wherloc";
$rs=fetch_alla(exec_qry($conn,$sql));

disconnect($conn);

if(count($rs)>0){
	$host=$rs[0]['hostname'];
	$name=post('port');
	$df=post("df");
	$dt=post("dt");
	$dfdt=($df!=''&&$dt!='')?"from=".strtotime("$df 00:00:00")."&to=".strtotime("$dt 23:59:59"):"";
	$endpoint="devices/".$host."/ports/";
	$lnk=urlencode(base64_encode($endpoint.urlencode($name).'/port_bits'));
	$lnkimg=urlencode(base64_encode($endpoint.urlencode($name).'/port_bits?'.$dfdt));
?>	
		<a href="JavaScript:;" data-fancybox="" data-type="iframe" data-src="lib_device_graph<?php echo $ext?>?l=<?php echo $lnk?>&h=<?php echo $host?>&g=<?php echo $name?>&f=<?php echo base64_encode($df)?>&t=<?php echo base64_encode($dt)?>">
			<img style="background:white;" width="100%" src="lib_api<?php echo $ext?>?lnk=<?php echo $lnkimg?>" />
		</a>
<?php	
}else{
	echo "No device found.";
}