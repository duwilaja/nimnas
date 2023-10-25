<?php
$redirect=false;

include "inc.common.php";
include "inc.session.php";
include "inc.db.php";

$conn=connect();

$wtik="(1=1)";
if($mys_LOC!=''){
	$wtik.= " AND loc in ('$mys_LOC')";
}
$wtik.=post('prov')==''?'':" AND prov='".post('prov')."'";
$wtik.=post('loc')==''?'':" AND loc='".post('loc')."'";
$sql="select loc,name,count(loc) as tot from tick_ets t left join core_location l on t.loc=l.locid where $wtik group by loc,name order by tot desc";

$rs=fetch_alla(exec_qry($conn,$sql));

disconnect($conn);

$tot=0;
for($i=0;$i<count($rs);$i++){

echo	'<tr>
			<td class="font-weight-semibold d-flex"><span class="mt-1">'.$rs[$i]['name'].'</span></td>
			<td>'.$rs[$i]['tot'].'</td>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td>
				<div class="button-list">
					<a href="#" class="btn"><i class="fe fe-eye"></i></a>
				</div>
			</td>
		</tr>';
}
?>
<!--
		<tr>
			<td class="font-weight-semibold d-flex"><span class="mt-1">BBGP JABAR</span></td>
			<td>35</td>
			<td>13</td>
			<td>2</td>
			<td>20</td>
			<td>
				<div class="button-list">
					<a href="#" class="btn"><i class="fe fe-eye"></i></a>
				</div>
			</td>
		</tr>
		<tr>
			<td class="font-weight-semibold d-flex"><span class="mt-1">BBGP JATENG</span></td>
			<td>35</td>
			<td>13</td>
			<td>2</td>
			<td>20</td>
			<td>
				<div class="button-list">
					<a href="#" class="btn"><i class="fe fe-eye"></i></a>
				</div>
			</td>
		</tr>
		<tr>
			<td class="font-weight-semibold d-flex"><span class="mt-1">BBGP JATIM</span></td>
			<td>35</td>
			<td>13</td>
			<td>2</td>
			<td>20</td>
			<td>
				<div class="button-list">
					<a href="#" class="btn"><i class="fe fe-eye"></i></a>
				</div>
			</td>
		</tr>
-->