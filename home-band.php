<?php
$redirect=false;
$cleartext=true;

include "inc.common.php";
include "inc.session.php";
include "lib_inc.db.php";

$conn=connect();

$whr=($mys_LOC=='')?"1=1":" loc in ('$mys_LOC')";

$ord=post("ord");

$sql="select n.host,name,loc,typ,round(sum(t.ifinoctets_delta)/1000000,2) as inb,round(sum(t.ifoutoctets_delta)/1000000,2) as outb 
from core_traffic t join nimdb.core_ports x on x.port=t.port_id join nimdb.core_node n on x.host=n.host 
where date(dtm)=date(now()) and traffic='Y' and t.ifoutoctets_delta<>t.ifinoctets_delta and $whr 
group by n.host,name,loc,typ 
 order by inb $ord limit 5";

$rs=exec_qry($conn,$sql);
$lists=fetch_alla($rs);

disconnect($conn);

for($i=0;$i<count($lists);$i++){
	$list=$lists[$i];
?>
		<tr>
			<!--td><?php echo ($i+1) ?></td-->
			<td class="coin_icon mt-2 d-flex">
				<span class=" my-auto"><?php echo $list['host'] ?></span>
			</td>
			<td><?php echo $list['name'] ?></td>
			<td><?php echo $list['loc'] ?></td>
			<td><?php echo $list['inb'] ?>MB</td>
			<td><?php echo $list['outb'] ?>MB</td>
			<!--td><a class="btn ripple btn-info" data-bs-target="#modaldemo3" data-bs-toggle="modal" href=""><?php echo $list['inb'] ?></a></td-->
			<td><?php echo $list['typ'] ?></td>
		</tr>
<?php }?>

										<!--tr>
											<td>2</td>
											<td class="coin_icon mt-2 d-flex">
												<span class=" my-auto">116.68.172.242</span>
											</td>
											<td>CMG5000-BIN-[MASTER]</td>
											<td>BIN - PEJATEN</td>
											<td><a class="btn ripple btn-info" data-bs-target="#modaldemo3" data-bs-toggle="modal" href="">View</a></td>
											<td>ROUTER</td>
										</tr>
										<tr>
											<td>3</td>
											<td class="coin_icon mt-2 d-flex">
												<span class=" my-auto">116.68.172.242</span>
											</td>
											<td>CMG5000-BIN-[MASTER]</td>
											<td>BIN - PEJATEN</td>
											<td><a class="btn ripple btn-info" data-bs-target="#modaldemo3" data-bs-toggle="modal" href="">View</a></td>
											<td>ROUTER</td>
										</tr>
										<tr>
											<td>4</td>
											<td class="coin_icon mt-2 d-flex">
												<span class=" my-auto">116.68.172.242</span>
											</td>
											<td>CMG5000-BIN-[MASTER]</td>
											<td>BIN - PEJATEN</td>
											<td><a class="btn ripple btn-info" data-bs-target="#modaldemo3" data-bs-toggle="modal" href="">View</a></td>
											<td>ROUTER</td>
										</tr>
										<tr>
											<td>5</td>
											<td class="coin_icon mt-2 d-flex">
												<span class=" my-auto">116.68.172.242</span>
											</td>
											<td>CMG5000-BIN-[MASTER]</td>
											<td>BIN - PEJATEN</td>
											<td><a class="btn ripple btn-info" data-bs-target="#modaldemo3" data-bs-toggle="modal" href="">View</a></td>
											<td>ROUTER</td>
										</tr-->
