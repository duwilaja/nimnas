<?php
$redirect=false;
$cleartext=true;

include "inc.common.php";
include "inc.session.php";
include "lib_inc.db.php";

$conn=connect();

function urai($bit){
	$bit=$bit/300;
	$ret=round($bit/1000000000,2).' gbps';
	if($bit<1000000000) $ret=round($bit/1000000,2).' mbps';
	if($bit<1000000) $ret=round($bit/1000,2).' kbps';
	
	return $ret;
}
function mybw($sbw){
	$bw=trim(str_ireplace("gbps","",str_ireplace("mbps","",$sbw))); //cleanup letter
	$bw = (is_numeric($bw)) ? intval($bw):0;
	if(strpos($sbw,"gbps")!==false) $bw=$bw*1000000000;
	if(strpos($sbw,"mbps")!==false) $bw=$bw*1000000;
	return $bw;
}

$wherloc ='(1=1)';
$host='';
if($mys_LOC!=''){
	$wherloc="n.loc in ('$mys_LOC')";
}

$sql="select n.host,n.name,l.bw,t.ifinoctets_delta as inb, t.ifoutoctets_delta as outb, device_id 
from ports t join nimdb.core_ports x on x.port=t.port_id join nimdb.core_node n on x.host=n.host 
left join nimdb.core_location l on l.locid=n.loc 
where x.traffic='Y' and t.ifoutoctets_delta<>t.ifinoctets_delta and $wherloc limit 1";

$rs=fetch_alla(exec_qry($conn,$sql));

disconnect($conn);

$out=array(
		"bw"=>"-",
		"number"=>0,
		"percent"=>"-",
		"usage"=>"0",
		"tgl"=>date("M d Y")
	);
	
if(count($rs)>0){
	$list=$rs[0];
	$bw=mybw($list['bw']);
	$percent=($bw>0)?round(intval($list['inb'])/300/$bw,2)*100:0;
	$number=$percent/100;
	$usage=urai($list['inb']);
	$out=array(
		"bw"=>"Bandwidth JIK ".$list['bw'],
		"number"=>$number,
		"percent"=>$percent."%",
		"usage"=>$usage,
		"tgl"=>date("M d Y")
	);
}

echo json_encode($out);