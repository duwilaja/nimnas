<?php 
$restrict_lvl=array("0","1");

include "inc.common.php";
include "inc.session.php";

$page_icon="fa fa-table";
$page_title="Employee";
$modal_title="Employee";
$card_title="Master $page_title";

$menu="mkary";

$breadcrumb="Master/$page_title";

$o_elvl=[
	["staff","staff"],
	["leader_area","leader area"],
	["leader_pusat","leader pusat"]
];


include "inc.head.php";
include "inc.menutop.php";

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
						<div class="card-title"><?php echo $card_title?></div>
						<div class="card-options ">
							<a href="#" onclick="$('#datas').val('');" data-toggle="modal" data-target="#modal_batch" title="Batch" class=""><i class="fe fe-upload"></i></a>
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
										<th>NIK</th>
										<th>Name</th>
										<th>Job</th>
										<th>Leader</th>
										<th>Device</th>
										<th>Time Diff (minutes)</th>
										<th>Province</th>
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
  <div role="document" class="modal-dialog">
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
<input type="hidden" name="cols" value="nik,nama,job,lvl,device,leader,tmd,prov,phone" />
<input type="hidden" name="tname" value="hr_kary" />
		
		  <div class="row">
			<div class="form-group col-md-12">
				<label>NIK</label>
				<input type="text" id="nik" name="nik" placeholder="..." class="form-control">
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-12">
				<label>Name</label>
				<input type="text" id="nama" name="nama" placeholder="..." class="form-control">
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-6">
				<label>Job</label>
				<input type="text" id="job" name="job" placeholder="..." class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label>Province</label>
				<input type="text" id="prov" name="prov" placeholder="..." class="form-control">
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-6">
				<label>NIK Leader</label>
				<input type="text" id="leader" name="leader" placeholder="..." class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label>Time Diff. (minutes)</label>
				<input type="text" id="tmd" name="tmd" placeholder="..." class="form-control">
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-6">
				<label>Phone</label>
				<input type="text" id="phone" name="phone" placeholder="..." class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label>Device ID</label>
				<input readonly type="text" id="device" name="device" placeholder="..." class="form-control">
			</div>
		  </div>
		  
		</form>
	  </div>
	  <div class="modal-footer">
	    <button type="button" class="btn btn-warning hideme" onclick="$('#device').val('');">Reset Device</button>
		<button type="button" class="btn btn-danger" id="bdel"  onclick="confirmDelete();">Delete</button>
		<button type="button" class="btn btn-success" onclick="saveData();">Save</button>
		<button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
		
	  </div>
	</div>
  </div>
</div>

<!-- Modal Batch -->
<div class="modal fade modal_form" id="modal_batch" tabindex="-1" role="dialog" aria-labelledby="formModalLabelBatch" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModalLabelBatch">Batch <?php echo $modal_title ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!--div class="card"-->
					<form class="form-horizontal" id="myfx">
					<input type="hidden" name="rowid" id="rowid" value="0">
					<input type="hidden" name="mnu" value="<?php echo $menu?>_batch">
					<input type="hidden" id="svx" name="sv" />
					<input type="hidden" name="cols" value="" />
					<input type="hidden" name="tname" value="hr_kary" />
					
						<!--div class="card-body"-->
							<div class="form-group">
								<label class=""><b>Data :</b><br /> - Copy paste from spreadsheet<br /> - 1st row always header field<br /> -  need sample? click <a target="_blank" style="text-decoration:underline;" href="sample_employee.xlsx">here</a></label>
								<div class="">
									<textarea class="form-control" name="datas" rows="10" id="datas" placeholder="....."></textarea>
								</div>
							</div>
							
						<!--/div-->
					</form>
				<!--/div-->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="$('#svx').val('DEL');saveData('#myfx');">Delete</button>
				<button type="button" class="btn btn-warning" onclick="$('#svx').val('UPD');saveData('#myfx');">Update</button>
				<button type="button" class="btn btn-success" onclick="$('#svx').val('NEW');saveData('#myfx');">Insert</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- End Modal Batch -->

<?php 
include "inc.foot.php";
include "inc.js.php";

$tname="hr_kary";
$cols="nik,nama,job,leader,device,tmd,prov,rowid";
$csrc="nik,nama";

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
        "nik" : {
            required : true
        },
		"nama" : {
			required : true
		}
    }});
	
	//datepicker();
	//timepicker();
	//selectpicker(true);
});

function reloadtbl(){
	mytbl.ajax.reload();
}

function openformcallback(q,json){
	if($("#rowid").val()=="0"){
		$(".hideme").hide();
	}else{
		$(".hideme").show();
	}
}
</script>

  </body>
</html>