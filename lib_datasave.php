<?php
$redirect=false;
include "inc.common.php";
include "inc.session.php";
include 'lib_inc.db.php';

$code='404';
$ttl='Error';
$msgs='Action not found';

$conn = connect();

$mn=post('mnu',$conn);

if($mn=='mport'){
	$sql="INSERT IGNORE INTO nimdb.core_ports (host,device,port,ifname) SELECT hostname,p.device_id,port_id,ifname FROM ports p JOIN devices d ON p.device_id=d.device_id";
	$res=exec_qry($conn,$sql);
	if(db_error($conn)==""){
		$code="200"; $ttl="Success"; $msgs="Data loaded";
	}else{
		$code="500"; $msgs=db_error($conn);
	}
}

disconnect($conn);

echo json_encode(array('code'=>$code,'ttl'=>$ttl,'msgs'=>$msgs));
?>