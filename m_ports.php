<?php 
$restrict_lvl=array("0","1");

include "inc.common.php";
include "inc.session.php";

$page_icon="fa fa-table";
$page_title="Ports";
$modal_title="Ports";
$card_title="Master $page_title";

$menu="mport";

$breadcrumb="Setup/$page_title";

$o_lovtyp=[
	["group","Group"],
	["network","Network"],
	["devicetype","Device Type"]
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
		<div class="row">
			<div class="col-md-3">
				<div class="mg-b-20">
					<div class="form-group">
						<label>Host</label>
						<input type="text" id="hos" placeholder="[blank] = All" class="form-control">
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="mg-b-20">
					<div class="form-group">
						<label>IfName</label>
						<input type="text" id="ifn" placeholder="[blank] = All" class="form-control">
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="mg-b-20">
					<div class="form-group">
						<label>Traffic?</label>
						<select id="tra" placeholder="..." class="form-control">
							<option value=""></option>
							<option value="Y">Y</option>
							<option value="N">N</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-xl-2 pt-3">
				<button type="button" class="btn btn-danger my-2 btn-icon-text" onclick="apdetall();">Update All</button>
			</div>
		</div>
		
				<div class="card">
					<div class="card-header">
						<div class="card-title"><?php echo $card_title?></div>
						<div class="card-options ">
							<!--a href="#" onclick="$('#datas').val('');" data-toggle="modal" data-target="#modal_batch" title="Batch" class=""><i class="fe fe-upload"></i></a>
							-->
							<a href="#" onclick="loaddatas();" title="Load" class=""><i class="fe fe-download"></i></a>
							<a href="#" onclick="openForm(0);" data-toggle="modal" data-target="#myModal" title="Add" class=""><i class="fe fe-plus"></i></a>
							<a href="#" onclick="reloadtbl();" title="Refresh" class=""><i class="fe fe-refresh-cw"></i></a>
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
										<th>Device ID</th>
										<th>Port ID</th>
										<th>IfName</th>
										<th>Traffic?</th>
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
<input type="hidden" name="cols" value="host,device,port,ifname,traffic" />
<input type="hidden" name="tname" value="core_ports" />
		
		  <div class="row">
			<div class="form-group col-md-12">
				<label>Host</label>
				<input type="text" id="host" name="host" placeholder="..." class="form-control">
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-12">
				<label>Device ID</label>
				<input type="text" id="device" name="device" placeholder="..." class="form-control">
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-12">
				<label>Port ID</label>
				<input type="text" id="port" name="port" placeholder="..." class="form-control">
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-12">
				<label>IfName</label>
				<input type="text" id="ifname" name="ifname" placeholder="..." class="form-control">
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-12">
				<label>Traffic</label>
				<select id="traffic" name="traffic" placeholder="..." class="form-control">
					<option value=""></option>
					<option value="Y">Y</option>
					<option value="N">N</option>
				</select>
			</div>
		  </div>
		</form>
	  </div>
	  <div class="modal-footer">
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
					<input type="hidden" name="tname" value="core_netdiagram" />
					
						<!--div class="card-body"-->
							<div class="form-group">
								<label class=""><b>Data :</b><br /> - Copy paste from spreadsheet<br /> - 1st row always header field<br /> -  need sample? click <a target="_blank" style="text-decoration:underline;" href="sample_topology.xlsx">here</a></label>
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

$tname="core_ports p left join core_node n on n.host=p.host";
$cols="p.host,name,device,port,ifname,traffic,p.rowid";
$csrc="p.host,name,ifname";

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
        "typ" : {
            required : true
        },
		"txt" : {
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

function loaddatas(){
	var url='lib_datasave'+ext;
	var mtd='POST';
	
	//alert(frmdata);
	
	$.ajax({
		type: mtd,
		url: url,
		data: {mnu:'mport'},
		success: function(data){
			var json = JSON.parse(data);
			//modal(json['ttl'],json['msgs']);
			if(json['code']=='200'){
				if(typeof(reloadtbl)=='function') reloadtbl();
				alrt(json['msgs'],'success',json['ttl']);
			}else{
				alrt(json['msgs'],'error',json['ttl']);
			}
		},
		error: function(xhr){
			//modal('Error','Please check your connection');
			alrt('Please check your connection','error','Error');
		}
	});
}

function apdetall(){
	var url='datasave'+ext;
	var mtd='POST';
	
	//alert(frmdata);
	
	$.ajax({
		type: mtd,
		url: url,
		data: {mnu:'mportall',host:$("#hos").val(),ifname:$("#ifn").val(),traffic:$("#tra").val()},
		success: function(data){
			var json = JSON.parse(data);
			//modal(json['ttl'],json['msgs']);
			if(json['code']=='200'){
				if(typeof(reloadtbl)=='function') reloadtbl();
				alrt(json['msgs'],'success',json['ttl']);
			}else{
				alrt(json['msgs'],'error',json['ttl']);
			}
		},
		error: function(xhr){
			//modal('Error','Please check your connection');
			alrt('Please check your connection','error','Error');
		}
	});
}

</script>

  </body>
</html>