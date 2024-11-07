<?php
$redirect=false;
$cleartext=true;

include "inc.common.php";
include "inc.session.php";
include "inc.db.php";

$conn=connect();

$wherloc ='';

if($mys_LOC!=''){
	$sql="select host from core_node where loc in ('$mys_LOC')";
	$rs=fetch_alla(exec_qry($conn,$sql));
	$aho=array();
	for($i=0;$i<count($rs);$i++){
		$aho[]=$rs[$i]['host'];
	}
	$wherloc=count($aho)>0?" and host in ('".implode("','",$aho)."')":"";
}

$sql="select year(dt) as ydt,month(dt) mdt,monthname(dt) as mname,sum(uptime) as upt, sum(downtime) as dwt 
from core_status_sla where year(dt)=year(now()) $wherloc group by mname,mdt,ydt order by ydt,mdt";
$rs=fetch_alla(exec_qry($conn,$sql));

disconnect($conn);

$mt="3";
for($i=0;$i<count($rs);$i++){
	$d=$rs[$i];
	$tot=(intval($d['upt'])+intval($d['dwt']));
	$pct=$tot>0?round(intval($d['upt'])/$tot*100,2):0;
	$mod=(round($pct,0)/10);
	$mod=$mod>5?5:0;
	$div=intdiv(round($pct,0),10);
	$wd=($div*10)+$mod;
?>
													<div class="row mt-<?php echo $mt?>">
														<div class="col-4">
															<span class=""><?php echo $d['mname']?></span>
														</div>
														<div class="col-5 my-auto">
															<div class="progress ht-6 my-auto">
																<div class="progress-bar ht-6 wd-<?php echo $wd?>p" role="progressbar"
																	aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
																</div>
															</div>
														</div>
														<div class="col-2">
															<div class="d-flex">
																<span class="tx-13"><b><?php echo $pct?>%</b></span>
															</div>
														</div>
													</div>
<?php	
$mt="1";
}
?>

													<!--div class="row mt-3">
														<div class="col-3">
															<span class="">January</span>
														</div>
														<div class="col-6 my-auto">
															<div class="progress ht-6 my-auto">
																<div class="progress-bar ht-6 wd-95p" role="progressbar"
																	aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
																</div>
															</div>
														</div>
														<div class="col-3">
															<div class="d-flex">
																<span class="tx-13"><b>24.75%</b></span>
															</div>
														</div>
													</div>
													<div class="row mt-1">
														<div class="col-3">
															<span class="">Febuary</span>
														</div>
														<div class="col-6 my-auto">
															<div class="progress ht-6 my-auto">
																<div class="progress-bar ht-6 wd-70p" role="progressbar"
																	aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
																</div>
															</div>
														</div>
														<div class="col-3">
															<div class="d-flex">
																<span class="tx-13"><b>12.34%</b></span>
															</div>
														</div>
													</div>
													<div class="row mt-1">
														<div class="col-3">
															<span class="">Maret</span>
														</div>
														<div class="col-6 my-auto">
															<div class="progress ht-6 my-auto">
																<div class="progress-bar ht-6 wd-40p" role="progressbar"
																	aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
																</div>
															</div>
														</div>
														<div class="col-3">
															<div class="d-flex">
																<span class="tx-13"><b>12.75%</b></span>
															</div>
														</div>
													</div>
													<div class="row mt-1">
														<div class="col-3">
															<span class="">April</span>
														</div>
														<div class="col-6 my-auto">
															<div class="progress ht-6 my-auto">
																<div class="progress-bar ht-6 wd-70p" role="progressbar"
																	aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
																</div>
															</div>
														</div>
														<div class="col-3">
															<div class="d-flex">
																<span class="tx-13"><b>12.34%</b></span>
															</div>
														</div>
													</div>
													<div class="row mt-1">
														<div class="col-3">
															<span class="">May</span>
														</div>
														<div class="col-6 my-auto">
															<div class="progress ht-6 my-auto">
																<div class="progress-bar ht-6 wd-40p" role="progressbar"
																	aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
																</div>
															</div>
														</div>
														<div class="col-3">
															<div class="d-flex">
																<span class="tx-13"><b>12.75%</b></span>
															</div>
														</div>
													</div>
													<div class="row mt-1">
														<div class="col-3">
															<span class="">June</span>
														</div>
														<div class="col-6 my-auto">
															<div class="progress ht-6 my-auto">
																<div class="progress-bar ht-6 wd-40p" role="progressbar"
																	aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
																</div>
															</div>
														</div>
														<div class="col-3">
															<div class="d-flex">
																<span class="tx-13"><b>12.75%</b></span>
															</div>
														</div>
													</div-->
