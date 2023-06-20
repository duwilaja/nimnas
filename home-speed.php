<?php
$redirect=false;
$cleartext=true;

include "inc.common.php";
include "inc.session.php";
include "inc.db.php";

$conn=connect();

$whr=($s_GRP=='')?"1=1":"(grp='$s_GRP')";

$sql="select hostname,ifname,ifinoctets_rate*8/1000 as inb,ifoutoctets_rate*8/1000 as outb,ifdescr from ports p join devices x on x.device_id=p.device_id 
 order by inb desc limit 5";

$sql="select n.host, name, rtt from core_node n join core_status s on s.host=n.host where rtt>0 and $whr order by rtt desc limit 5";
$rs=exec_qry($conn,$sql);
$lists=fetch_all($rs);

disconnect($conn);
?>
<div class="list-group list-group-flush ">
<?php
for($i=0;$i<count($lists);$i++){
	$list=$lists[$i];
?>



											<div class="list-group-item d-flex align-items-center">
												<div class="flex-1 text-break">
													<div><?php echo $list[1]?></div>
													<div class="text-white text-opacity-50 d-flex align-items-center">
														<i class="fa fa-circle fs-8px fa-fw text-danger me-1"></i> <?php echo $list[0]?>
													</div>
												</div>
												<div>
												<span class="badge border border-danger text-danger px-2 pt-5px pb-5px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> <?php echo $list[2]?> ms</span>
												</div>
											</div>

							

							

	 <!-- <div class="list-group-item d-flex  align-items-center">
		<div class="col-auto align-self-center pl-0">
			<div class="feature mt-0 mb-0">
				<i class="fe fe-cpu project bg-secondary-transparent text-secondary "></i>
			</div>
		</div>
		<div class="">
			<div class=" h6 mb-0"><?php echo $list[1]?></div>
			<small class="text-muted"><?php echo $list[0]?></small>
		</div>
		<div class="ml-auto">
			<div class=" h6 mb-0"><?php echo $list[2]?> ms</div>
		</div>
	</div>  -->
<?php
}
?>
</div>