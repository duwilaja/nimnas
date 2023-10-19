<?php
$redirect=false;
$cleartext=true;

include "inc.common.php";
include "inc.session.php";
include "inc.db.php";

$conn=connect();

$whr=($mys_LOC=='')?"1=1":" loc in ('$mys_LOC')";

$sql="select hostname,ifname,ifinoctets_rate*8/1000 as inb,ifoutoctets_rate*8/1000 as outb,ifdescr from ports p join devices x on x.device_id=p.device_id 
 order by inb desc limit 5";

$sql="select n.host, name, rtt from core_node n join core_status s on s.host=n.host where rtt>0 and $whr order by rtt desc limit 5";
$rs=exec_qry($conn,$sql);
$lists=fetch_all($rs);

disconnect($conn);
?>
<table class="table table-hover m-b-0 transcations mt-2">
<tbody>
<?php
for($i=0;$i<count($lists);$i++){
	$list=$lists[$i];
?>
	<tr>
		<td class="wd-5p">
			<div class="media-icon bg-warning crypto-icon my-auto me-2">
				<i class="fe fe-arrow-down-right tx-20"></i>
			</div>
		</td>
		<td>
			<div class="d-flex align-middle ms-3">
				<div class="d-inline-block">
					<h6 class="mb-1"><?php echo $list[1]?></h6>
					<span class="status bg-warning"></span> <?php echo $list[0]?>
				</div>
			</div>
		</td>
		<td class="text-end">
			<div class="d-inline-block">
				<h6 class="mb-2 tx-15 font-weight-semibold"><?php echo $list[2]?> ms</h6>
			</div>
		</td>
	</tr>

<?php
}
?>
</tbody>
</table>
