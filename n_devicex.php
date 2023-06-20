<?php 
include "inc.common.php";
include "inc.session.php";

$page_icon="fa fa-table";
$page_title="Devices";
$modal_title="";
$card_title="Devices Status";

$menu="ndevice";

$breadcrumb="Objects/$page_title";

include "inc.head.php";
include "inc.menutop.php";

include "inc.db.php";
$conn=connect();
$rs=exec_qry($conn,"select locid,name from core_location order by name");
$o_loc=fetch_all($rs);
$rs=exec_qry($conn,"select val,txt from core_lov where typ='group' order by txt");
$o_grp=fetch_all($rs);
$rs=exec_qry($conn,"select val,txt from core_lov where typ='devicetype' order by txt");
$o_typ=fetch_all($rs);
$rs=exec_qry($conn,"select val,txt from core_lov where typ='network' order by txt");
$o_net=fetch_all($rs);
disconnect($conn);
?>

<div class="app-content page-body">
	<div class="container">

		<!--Page header-->
		<div class="page-header">
			<div class="page-leftheader">
				<h4 class="page-title"><?php echo $page_title ?></h4>
				<ol class="breadcrumb pl-0">
					<?php echo breadcrumb($breadcrumb)?>
				</ol>
			</div>
			<!--div class="page-rightheader">
				<a href="#" class="btn btn-primary" onclick="" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Create</a>
			</div-->
		</div>
		<!--End Page header-->
			<div  class="row">
				<div class="col-xl-2">
					<div class="small text-white text-opacity-50 mb-2"><b>GROUP</b></div>
					<select class="form-select" id="grp">
						<option value="">All Group</option>
						<?php echo options($o_grp)?>
					</select>
				</div>
				<div class="col-xl-2">
					<div class="small text-white text-opacity-50 mb-2"><b>LOCATION</b></div>
					<select class="form-select" id="loc">
						<option value="">All Location</option>
						<?php echo options($o_loc)?>
					</select>
				</div>
				<div class="col-xl-2">
					<div class="small text-white text-opacity-50 mb-2"><b>NETWORK</b></div>
					<select class="form-select" id="net">
						<option value="">All Network</option>
						<?php echo options($o_net)?>
					</select>
				</div>
				<div class="col-xl-2">
					<div class="small text-white text-opacity-50 mb-2"><b>TYPE</b></div>
					<select class="form-select" id="typ">
						<option value="">All Type</option>
						<?php echo options($o_typ)?>
					</select>
				</div>
				<div class="col-xl-2">
					<div class="small text-white text-opacity-50 mb-2"><b>STATUS</b></div>
					<select class="form-select" id="status">
						<option value="">All STATUS</option>
						<option value="1">UP</option>
						<option value="0">DOWN</option>
					</select>
				</div>
				<div class="col-xl-2">
					<div class="small text-white text-opacity-50 mb-2"><b>&nbsp;</b></div>
					<button type="button" onclick="reloadtbl()" class="btn btn-success"><i class="fas fa-refresh"></i></button>
				</div>
			</div>
			<div>&nbsp;</div>
				<div class="card">
					<div class="card-header hidden">
						<div class="card-title"><?php echo $card_title?></div>
						<div class="card-options hidden">
							<a href="#" title="Refresh" onclick="reloadtbl();"><i class="fe fe-refresh-cw"></i></a>
							<a href="#" title="Expand/Collapse" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
							<!--a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a-->
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="mytbl" class="table table-striped table-bordered w-100">
								<thead>
									<tr>
										<th>Host</th>
										<th>Name</th>
										<th>Network</th>
										<th>Location</th>
										<th>Group</th>
										<th>Type</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>

	</div>
</div><!-- end app-content-->

<?php 
include "inc.foot.php";
include "inc.js.php";

//include "inc.db.php";

$loc=get("loc")==""?"1=1":"loc='".get("loc")."'";
$status=get("status")==""?"1=1":"status='".get("status")."'";
$prov=get("prov")==""?"1=1":"prov='".get("prov")."'";

$where = "$loc and $status and $prov";

$tname="core_node n left join core_status s on n.host=s.host left join core_location l on n.loc=l.locid";
$cols="n.host,n.name,net,loc,grp,typ,if(status=1,'UP','DOWN') as stt,n.rowid";
$csrc="n.host,n.name,net,loc,grp,typ";
$grpby="";


$cari=post("cari");

?>

<script>
var mytbl, jvalidate;
$(document).ready(function(){
	page_ready();
	mytbl = $("#mytbl").DataTable({
		serverSide: true,
		processing: true,
		searching: true,
		buttons: ['copy', 'csv'],
		lengthMenu: [[10,50,100,500,-1],["10","50","100","500","All"]],
		search: {
			search: "<?php echo $cari?>"
		},
		ajax: {
			type: 'POST',
			url: 'datatable<?php echo $ext?>',
			data: function (d) {
				d.cols= '<?php echo base64_encode($cols); ?>',
				d.tname= '<?php echo base64_encode($tname); ?>',
				d.csrc= '<?php echo base64_encode($csrc); ?>',
				d.where= '<?php echo base64_encode($where); ?>',
				d.grpby= '<?php echo base64_encode($grpby); ?>',
				d.status= $("#status").val(),
				d.net= $("#net").val(),
				d.loc= $("#loc").val(),
				d.typ= $("#typ").val(),
				d.grp= $("#grp").val(),
				d.filtereq= "status,net,loc,typ,grp",
				d.x= '<?php echo $menu?>';
			}
		},
		initComplete: function(){
			//dttbl_buttons(); //for ajax call
		}
	});
	//dttbl_buttons(); //remark this if ajax dttbl call
	//datepicker(true);
	//timepicker();
	jvalidate = $("#myf").validate({
    rules :{
        "tx" : {
            required : true
        },
		"tm" : {
			required : true
		}
    }});
});

function reloadtbl(){
	mytbl.ajax.reload();
}

</script>

  </body>
</html>