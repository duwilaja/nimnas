<?php 
$restrict_lvl=array("0","1","2","22");

include "inc.common.php";
include "inc.session.php";

$page_icon="fa fa-table";
$page_title="Overtime";
$modal_title="Overtime";
$card_title="$page_title";

$menu="hrot";

$breadcrumb="HR/$page_title";

$o_ltyp=[
	["Cuti","Cuti"],
	["Ijin","Ijin"],
	["Sakit","Sakit"]
];
$o_remstt=[
	["pending","Pending"],
	["rejected","Rejected"],
	["approved","Approved"]
];


include "inc.head.php";
include "inc.menutop.php";

include "inc.db.php";

$conn=connect();
$wherloc=$mys_LOC==''?'':"where locid in ('$mys_LOC')";
$rs=exec_qry($conn,"select locid,name from core_location $wherloc order by name");
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
		<div class="row">
			<div class="col-xl-2">
				<div class="small text-opacity-50 mb-2 text-whitex"><b>TANGGAL</b></div>
				<div class="mg-b-20">
					<div class="input-group">
						<div class="input-group-text border-end-0">
							<i class="fe fe-calendar lh--9 op-6"></i>
						</div>
						<input class="form-control datepicker" id="dt" placeholder="" type="text">
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="small text-opacity-50 mb-2 text-whitex"><b>LOCATION</b></div>
				<select class="form-control select2" id="loc">
					<option value="">All LOCATION</option>
					<?php echo options($o_loc)?>
					</select>
			</div>
			<div class="col-xl-2 pt-3">
				<button type="button" class="btn btn-primary my-2 btn-icon-text">Filter</button>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-2">
				<div class="card custom-card">
					<div class="card-body text-center">
						<div class="icon-service bg-primary-transparent rounded-circle text-primary">
							<i class="fa fa-arrow-up"></i>
						</div>
						<p class="mb-1 text-muted">Request</p>
						<h3 class="mb-0 xtot">0</h3>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-2">
				<div class="card custom-card">
					<div class="card-body text-center">
						<div class="icon-service bg-success-transparent rounded-circle text-success">
							<i class="fa fa-check"></i>
						</div>
						<p class="mb-1 text-muted">Approve</p>
						<h3 class="mb-0 xapproved">0</h3>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-2">
				<div class="card custom-card">
					<div class="card-body text-center">
						<div class="icon-service bg-warning-transparent rounded-circle text-warning">
							<i class="fa fa-spinner"></i>
						</div>
						<p class="mb-1 text-muted">Pending</p>
						<h3 class="mb-0 xpending">0</h3>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-2">
				<div class="card custom-card">
					<div class="card-body text-center">
						<div class="icon-service bg-danger-transparent rounded-circle text-danger">
							<i class="fa fa-ban"></i>
						</div>
						<p class="mb-1 text-muted">Reject</p>
						<h3 class="mb-0 xrejected">0</h3>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4">
				<div class="card custom-card bg-success">
					<div class="card-body text-center">
						<div class="icon-service bg-success-transparent rounded-circle text-light">
							<i class="si si-clock"></i>
						</div>
						<p class="mb-1 text-whites">Total Hour</p>
						<h3 class="mb-0 mtot">0</h3>
					</div>
				</div>
			</div>
		</div>
				<div class="card">
					<div class="card-header hidden">
						<div class="card-title"><?php echo $card_title?></div>
						<div class="card-options ">
							<!--a href="#" onclick="$('#datas').val('');" data-toggle="modal" data-target="#modal_batch" title="Batch" class=""><i class="fe fe-upload"></i></a>
							<a href="#" onclick="openForm(0);" data-toggle="modal" data-target="#myModal" title="Add" class=""><i class="fe fe-plus"></i></a>
							<a href="#" title="Expand/Collapse" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
							<--a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a-->
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="mytbl" class="table table-striped table-bordered w-100">
								<thead>
									<tr>
										<th>NIK</th>
										<th>Name</th>
										<th>Status</th>
										<th>Submited</th>
										<th>From</th>
										<th>To</th>
										<th>Remark</th>
										<th>Attachment</th>
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
<input type="hidden" name="cols" value="tot" />
<input type="hidden" name="tname" value="hr_ot" />

<input type="hidden" name="fattc" id="attc" value="" />
		
		  <div class="row hideme">
			<div class="form-group col-md-6">
				<label>NIK</label>
				<input type="text" readonly id="nik" name="nik" placeholder="..." class="form-control">
			</div>
		    <div class="form-group col-md-6">
				<label>Name</label>
				<input type="text" readonly id="nama" name="nama" placeholder="..." class="form-control">
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-6">
				<label>From</label>
				<input type="text" id="dtf" name="dtf" placeholder="..." class="form-control datetimepicker">
			</div>
			<div class="form-group col-md-6">
				<label>To</label>
				<input type="text" id="dtt" name="dtt" placeholder="..." class="form-control datetimepicker">
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-6">
				<label>Total (hour)</label>
				<input type="text" id="tot" name="tot" placeholder="..." class="form-control">
			</div>
			<div class="form-group col-md-6 hideme">
				<label>Status</label>
				<!--input type="text" readonly id="status" name="status" placeholder="..." class="form-control"-->
				<select class="form-control reado" id="status" name="status">
					<option value="">-</option>
					<?php echo options($o_remstt)?>
				</select>
			</div>
		  </div>
		  <div class="row">
			<div class="form-group col-md-6">
				<label>Remark</label>
				<input type="text" id="ket" name="ket" placeholder="..." class="form-control">
			</div>
			<div class="form-group col-md-6 hidden">
				<label>Attachment</label>
				<input type="file" id="attcx" name="attc" placeholder="..." class="form-control">
			</div>
		  </div>
		  
		</form>
	  </div>
	  <div class="modal-footer">
		<?php if($s_LVL<2){?>
		<button type="button" class="btn btn-danger" id="bdel"  onclick="confirmDelete();">Delete</button>
		<button type="button" class="btn btn-success" id="bsav" onclick="saveData();">Save</button>
		<?php }?>
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

$tname="hr_ot l left join hr_kary k on k.nik=l.nik";
$cols="l.nik,nama,status,submitted,dtf,dtt,ket,attc,l.rowid";
$csrc="l.nik,nama,ket";
$where="";

if($s_LVL>1){
	//$menu="-";
}
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
        "tot" : {
            required : true
        },
		"dtt" : {
			required : true
		},
		"dtf" : {
			required : true
		},
		"ket" : {
			required : true
		}
    }});
	
	//datepicker();
	//timepicker();
	//selectpicker(true);
	datetimepicker();
	gettot();
});

function reloadtbl(){
	mytbl.ajax.reload();
}

function gettot(){
	$.ajax({
		type: 'POST',
		url: 'dataget'+ext,
		data: {q:'ottot',dt:$("#dt").val(),loc:$("#loc").val()},
		success: function(data){
			var json = JSON.parse(data);
			if(json['code']=='200'){
				var tot=0; var mtot=0;
				for(var i=0;i<json['msgs'].length;i++){
					var d=json['msgs'][i];
					$(".x"+d['stts']).html(d['ctot']);
					tot+=parseInt(d['ctot']);
					if(d['stts']=='approved') mtot+=parseInt(d['stot']);
				}
				$(".xtot").html(tot); $(".mtot").html(mtot);
			}else{
				log(json['msgs']);
			}
			/*if(parseInt($(".xinactive").html())>0){
				if($(".blink").hasClass("bg-danger")) $(".blink").removeClass("bg-danger").addClass("blink-bg");
			}else{
				if($(".blink").hasClass("blink-bg")) $(".blink").addClass("bg-danger").removeClass("blink-bg");
			}*/
		},
		error: function(xhr){
			log('Please check your connection'+xhr);
		}
	});
	//setTimeout(gettot,1000*300);
}


function openformcallback(q,json){
	$(".reado").attr("readonly",true);
	if($("#rowid").val()=="0"){
		$("#nik").val("<?php echo $s_NIK?>");
		$(".hideme").hide();
		$("#eprup").hide();
		$("#bsav").show();
	}else{
		if(json['msgs'][0]['leader']=='<?php echo $s_NIK?>'){
			$("#eprup").show();
			$(".reado").attr("readonly",false);
		}else{
			$("#eprup").hide();
		}
		$(".hideme").show();
		
		if(json['msgs'][0]['status']!='pending'&&json['msgs'][0]['status']!='reject') {
			$("#bdel").hide();
			$("#bsav").hide();
		}else{
			$("#bsav").show();
		}
	}
}
</script>

  </body>
</html>