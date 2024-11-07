<?php
$redirect=false;
$cleartext=true;

include "inc.common.php";
include "inc.session.php";
include "inc.db.php";

$conn=connect();

$sql="select k.*,latin,lngin,status,u.uavatar from hr_kary k left join hr_attend a on a.nik=k.nik and dt=date(now()) 
left join core_user u on u.unik=k.nik WHERE uloc like '%$s_LOC%'";
$rs=fetch_alla(exec_qry($conn,$sql));

disconnect($conn);

for($i=0;$i<count($rs);$i++){
	$d=$rs[$i];
	$phn=str_ireplace(" ","",str_ireplace("-","",$d['phone']));
	$phn=substr($phn,0,1)=="0"?"+62".substr($phn,1):$phn;
	$bg="text-danger";
	if($d['status']=="offsite") $bg="text-warning";
	if($d['status']=="onsite") $bg="text-success";
	$avatar="logo.jpg";
	if(trim($d['uavatar'])!='' && file_exists('avatars/'.$d['uavatar'])) $avatar=$d['uavatar'];
?>
									<tr>
										<td class="wd-5p">
											<div class="main-img-user avatar-md">
												<img alt="avatar" class="rounded-circle me-3" src="avatars/<?php echo $avatar?>">
											</div>
										</td>
										<td>
											<div class="d-flex align-middle ms-3">
												<div class="d-inline-block">
													<h6 class="mb-1"><?php echo $d['nama']?></h6>
													<p class="mb-0 tx-13 text-muted"><?php echo $d['job']?></p>
												</div>
											</div>
										</td>
										<td><?php echo $d['prov']?> 
										<?php if(trim($d['latin'])!=''&&trim($d['lngin'])){?>
											&nbsp;&nbsp;<button class="btn btn-info" type="button" onclick="mappicker('<?php echo $d['latin']?>','<?php echo $d['lngin']?>','IN');"><i class="fa fa-map-pin"></i></button>
											<?php }?>
										</td>
										<td><span class="<?php echo $bg?>"><?php echo $d['status']?></span></td>
										<!--td><span class="badge bg-pill bg-warning-light">Pending</span></td-->
										<td><?php if(trim($d['phone'])!=''){?>
											<a  target="_blank" href="https://wa.me/<?php echo $phn ?>" class="btn btn-outline-success btn-sm">Whatsapp</a>
										<?php }?></td>
									</tr>
<?php }?>
									<!--tr>
										<td class="wd-5p">
											<div class="main-img-user avatar-md">
												<img alt="avatar" class="rounded-circle me-3" src="avatars/logo.jpg">
											</div>
										</td>
										<td>
											<div class="d-flex align-middle ms-3">
												<div class="d-inline-block">
													<h6 class="mb-1">Sukuro Kim</h6>
													<p class="mb-0 tx-13 text-muted">EOS</p>
												</div>
											</div>
										</td>
										<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</td>
										<td class="text-secondary">Normal</td>
										<td><span class="badge bg-pill bg-warning-light">Pending</span></td>
										<td><a href="#" class="btn btn-outline-success btn-sm">Whatsapp</a></td>
									</tr-->
