<?php 
//$restrict_lvl=array("0");

include "inc.common.php";
include "inc.session.php";

$page_icon="fa fa-table";
$page_title="Attendance";
$modal_title="Attendance";
$card_title="$page_title";

$menu="myatt";

$breadcrumb="My Profile/$page_title";

$o_ltyp=[
	["Cuti","Cuti"],
	["Ijin","Ijin"],
	["Sakit","Sakit"],
	["Masuk","Masuk"],
	["Terlambat","Terlambat"]
];
$o_lstt=[
	["Approved","Approved"]
];

$myprof=1;

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
			<div class="page-rightheader">
				<a href="#" class="btn btn-primary" onclick="openForm(0);" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-check"></i> Check-In/Out</a>
			</div>
		</div>
		<!--End Page header-->
		
				<div class="mb-3">
					<div class="card-body">
						<form method="post" target="_blank" action="r_absenx<?php echo $ext?>">
						<div class="row">
							<div class="col-md-2"><div class="input-group">
								<input type="text" name="df" id="fdf" placeholder="From Date" class="form-control datepicker" value="<?php echo date('Y-m-d')?>">
								<div class="input-group-append"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
							</div></div>
							<div class="col-md-2"><div class="input-group">
								<input type="text" name="dt" id="fdt" placeholder="To Date" class="form-control datepicker">
								<div class="input-group-append"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
							</div></div>
							
							<div class="col-md-1">
							<button type="button" onclick="reloadtbl();" class="btn btn-primary">Refresh</button>
							</div>
							<div class="col-md-1">
							<button type="button" onclick="this.form.submit();" class="btn btn-info">Download</button>
							</div>
							<input type="hidden" id="tname">
						</div>
						</form>
					</div>
				</div>
				<div class="card">
					<div class="card-header" style="display: flex;">
						<div class="card-title"><?php echo $card_title?></div>
						<div class="card-options hidden">
							<button class="btn btn-sm btn-success" onclick="cek('in');">Check-In</button>&nbsp;&nbsp;
							<button class="btn btn-sm btn-danger" onclick="cek('out');">Check-Out</button>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="mytbl" class="table table-striped table-bordered w-100">
								<thead>
									<tr>
										<th>Date</th>
										<th>NIK</th>
										<th>Name</th>
										<th>IN</th>
										<th>Remark IN</th>
										<th>OUT</th>
										<th>Remark OUT</th>
										<th>Type</th>
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
		<input type="hidden" name="mnu" value="<?php echo $menu?>">
		  <div class="row">
			<div class="form-group col-md-6">
				<label>Latitude</label>
				<input readonly type="text" id="lat" name="lat" placeholder="..." class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label>Longitude</label>
				<input readonly type="text" id="lng" name="lng" placeholder="..." class="form-control">
			</div>
		  </div>
		  
		  <div class="row">
			<!--div class="form-group col-md-6">
				<button type="button" onclick="startCamera();">Camera</button><br />
				<video id="video" width="320" height="240" autoplay></video>
			</div-->
			<div class="form-group col-md-12">
				<label>Capture  Image</label><br />
				<!--canvas id="canvas" width="320" height="240"></canvas-->
				<input name="myFileInput" type="file" accept="image/*;capture=camera">
			</div>
		  </div>
		  
		</form>
	  </div>
	  <div class="modal-footer">
	  
		<!--button type="button" class="btn btn-danger" id="bdel"  onclick="confirmDelete();">Delete</button-->
		<button type="button" class="btn btn-warning" onclick="getLocation();">Get Location</button>
		<button type="button" class="btn btn-success" id="bsav" onclick="saveData()">Save</button>
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

$tname="hr_attend l left join hr_kary k on k.nik=l.nik";
$cols="dt,l.nik,nama,IF(TIME_TO_SEC(edin)>0,ADDTIME(edin,SEC_TO_TIME(tmd*60)),edin) as edin,reasonin,IF(TIME_TO_SEC(edout)>0,ADDTIME(edout,SEC_TO_TIME(tmd*60)),edout) as edout,reasonout,typ,l.rowid";
$csrc="l.nik,name,typ";
$where="(1=1)";
//if($_GET["stt"]!=""){
//	$where.=" and status='".$_GET["stt"]."'";
//}
//if($mys_LOC!=''){
	$where.=" and (l.nik='$s_NIK')";
//}
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
				d.where= '<?php echo base64_encode($where); ?>',
				d.csrc= '<?php echo base64_encode($csrc); ?>',
				d.fdf=$("#fdf").val(),
				d.fdt=$("#fdt").val(),
				d.x= '-';
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
        "edin" : {
            required : true
        },
		"edout" : {
			required : true
		},
		"reasonin" : {
			required : true
		},
		"reasonout" : {
			required : true
		},
		"myFileInput" : {
			required : true
		}
    }});
	
	datepicker();
	timepicker();
	//selectpicker(true);
});

function reloadtbl(){
	mytbl.ajax.reload();
}

function mappicker(lat,lng,ttl=''){
	window.open("mapgugel"+ext+"?ttl="+ttl+"&lat="+$(lat).val()+"&lng="+$(lng).val(),"MapWindow","width=830,height=500,location=no").focus();
}

function openformcallback(q,json){
	
}

function cek(x){
	$.ajax({
		type: 'POST',
		url: 'datasave'+ext,
		data: {mnu:'cek'+x},
		success: function(data){
			var json = JSON.parse(data);
			alrt(json['msgs'],json['ttl'].toLowerCase(),json['ttl']);
			reloadtbl();
		},
		error: function(xhr){
			//modal('Error','Server Error');
			alrt('Could not execute command '+q,'error','Error');
		}
	});
}

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
  } else {
    alrt("Geolocation is not supported by this browser.",'error');
  }
}

function showPosition(position) {
  $("#lat").val( position.coords.latitude );
  $("#lng").val( position.coords.longitude);
}
function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      alrt("User denied the request for Geolocation.",'warning');
      break;
    case error.POSITION_UNAVAILABLE:
      alrt("Location information is unavailable.",'error');
      break;
    case error.TIMEOUT:
      alrt("The request to get user location timed out.",'error');
      break;
    case error.UNKNOWN_ERROR:
      alrt("An unknown error occurred.",'error');
      break;
  }
} 

function startCamera(){
	let video = document.getElementById('video');
	navigator.mediaDevices
	  .getUserMedia({ video: true, audio: false })
	  .then((stream) => {
		video.srcObject = stream;
		video.play();
	  })
	  .catch((err) => {
		alrt(`An error occurred: ${err}`,'error');
	  });
}
function takePhoto(){
	
}
</script>

  </body>
</html>