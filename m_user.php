<?php 
$restrict_lvl=array("0");

include "inc.common.php";
include "inc.session.php";

$page_icon="fa fa-table";
$page_title="User";
$modal_title="User";
$card_title="Master $page_title";

$menu="user";

$breadcrumb="Setup/$page_title";

include "inc.head.php";
include "inc.menutop.php";

include "inc.db.php";
$conn=connect();
$rs=exec_qry($conn,"select val,txt from core_lov where typ='group' order by txt");
$o_grp=fetch_all($rs);
$rs=exec_qry($conn,"select locid,name from core_location order by name");
$o_loc=fetch_all($rs);
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
		
				<div class="card">
					<div class="card-header">
						<div class="card-title"><?php echo $card_title ?></div>
						<div class="card-options ">
							<!--a href="#" title="Batch" class=""><i class="fe fe-upload"></i></a-->
							<a href="#" onclick="openForm(0);" data-toggle="modal" data-target="#myModal" title="Add" class=""><i class="fe fe-plus"></i></a>
							<a href="#" title="Expand/Collapse" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
							<!--a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a-->
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="mytbl" class="table table-striped table-bordered w-100">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Mail</th>
										<th>Level</th>
										<!--th>NMS Group</th-->
										<th>Location</th>
										<th>Ticketing Group</th>
										<th>NIK</th>
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

<!-- Modal-->
<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left modal_form">
  <div role="document" class="modal-dialog modal-lg">
	<div class="modal-content">
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title"><?php echo $modal_title?></strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">x</span></button>
	  </div>
	  <div class="modal-body">
		<!--p>Lorem ipsum dolor sit amet consectetur.</p-->
		<form id="myf" class="form-horizontal">
<!--hidden-->
<input type="hidden" name="rowid" id="rowid" value="0">
<input type="hidden" name="mnu" value="<?php echo $menu?>">
<input type="hidden" id="sv" name="sv" />
<input type="hidden" name="cols" value="uid,uname,ulvl,ugrp,uloc,utick,umail,unik" />
<input type="hidden" name="tname" value="core_user" />
		
		  <div class="row">
			<div class="form-group col-md-6">
				<label>ID</label>
				<input type="text" id="uid" name="uid" placeholder="..." class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label>Name</label>
				<input type="text" id="uname" name="uname" placeholder="..." class="form-control">
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-8">
				<label>Location</label>
				<select class="form-control select2" multiple id="ulocx" name="ulocx">
					<option value="">All</option>
					<?php echo options($o_loc)?>
				</select>
				<input type="hidden" name="uloc" id="uloc" value="">
			</div>
			<div class="form-group col-md-4">
				<label>NIK</label>
				<input type="text" id="unik" name="unik" placeholder="..." class="form-control">
			</div>
			<div class="form-group col-md-6 hidden">
				<label>NMS Group</label>
				<select class="form-control " id="ugrp" name="ugrp">
					<option value=""></option>
					<?php echo options($o_grp)?>
				</select>
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-6">
				<label>Level</label>
				<select class="form-control " id="ulvl" name="ulvl">
					<option value="">-</option>
					<?php echo options($o_ulvl)?>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label>Ticketing Group</label>
				<select class="form-control " id="utick" name="utick">
					<option value="">-</option>
					<?php echo options($o_tikgrp)?>
				</select>
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-6">
				<label>Email</label>
				<input type="text" id="umail" name="umail" placeholder="..." class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label>Set Password</label>
				<input type="password" id="pwd" name="pwd" placeholder="..." class="form-control">
			</div>
		  </div>
		</form>
	  </div>
	  <div class="modal-footer">
	    <button type="button" class="btn btn-danger" id="bdel"  onclick="confirmDelete();">Delete</button>
		<button type="button" class="btn btn-success" onclick="mysave();">Save</button>
		<button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
		
	  </div>
	</div>
  </div>
</div>

<?php 
include "inc.foot.php";
include "inc.js.php";

$tname="core_user";
$cols="uid,uname,umail,case when ulvl='0' then 'Super' when ulvl='1' then 'Admin' when ulvl='11' then 'User' end,uloc,utick,unik,rowid";
$csrc="uid,uname";

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
		ajax: {
			type: 'POST',
			url: 'datatable<?php echo $ext?>',
			data: function (d) {
				d.cols= '<?php echo base64_encode($cols); ?>',
				d.tname= '<?php echo base64_encode($tname); ?>',
				d.csrc= '<?php echo base64_encode($csrc); ?>',
				d.x= '<?php echo $menu?>';
			}
		},
		initComplete: function(){
			//dttbl_buttons(); //for ajax call
		}
	});
	//dttbl_buttons(); //remark this if ajax dttbl call
	jvalidate = $("#myf").validate({
    ignore: ":hidden:not(.selectpicker)",
	rules :{
        "uid" : {
            required : true
        },
		"uname" : {
			required : true
		},
//		"umail" : {
//			required : true,
//			email: true
//		},
		"ulvl" : {
			required : true
		},
		"pwd" : {
			required : function(){
				if($("#rowid").val()=="0"){
					return true;
				}else{
					return false;
				}
			}
		}
    }});
	
	//datepicker();
	//timepicker();
	//selectpicker(true);
	$(".select2").select2({allowClear:true,closeOnSelect:false});
});

function reloadtbl(){
	mytbl.ajax.reload();
}

function mysave(){
	$("#uloc").val(getMultipleValues("#ulocx"));
	saveData();
}
function openformcallback(q='',json=''){
	$("#select2").val("");
	if(json!=''){
		$("#ulocx").val($("#uloc").val().split(","));
	}
	$(".select2").trigger("change");
}
</script>

  </body>
</html>