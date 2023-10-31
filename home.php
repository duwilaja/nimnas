<?php 
include "inc.common.php";
include "inc.session.php";

$page_icon="fa fa-home";
$page_title="Monitoring Dashboard";
$modal_title="Title of Modal";
$menu="home";

$breadcrumb="Overview/Dashboard";

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

			</div>
			<!--End Page header-->
			
			<!-- ROW OPEN -->
			<div class="row hidden">
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
					<div class="card mb-3">
						<div class="card-body">
							<div class="card-order">
								<div class="row">
									<div class="col">
										<div class="">Total Device</div>
										<div class="h3 mt-2 mb-2 dtot">0 <span class="text-success fs-13 ml-2">(0%)</span></div>
									</div>
									<div class="feature">
										<a href="n_device<?php echo $ext?>">
											<i class="si si-screen-desktop primary feature-icon bg-secondary"></i>
										</a>
									</div>
								</div>
								<!--
								<p class="mb-0 text-muted">Monthly users</p>
								-->
							</div>
						</div>
					</div>
				</div><!-- COL END -->
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
					<div class="card mb-3">
						<div class="card-body">
							<div class="card-order">
								<div class="row">
									<div class="col">
										<div class="">Device Up</div>
										<div class="h3 mt-2 mb-2 don">0 <span class="text-success fs-13 ml-2">(0%)</span></div>
									</div>
									<div class="feature">
										<a href="n_device<?php echo $ext?>?status=1">
											<i class="si si-arrow-up-circle success feature-icon bg-success"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- COL END -->
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
					<div class="card mb-3">
						<div class="card-body">
							<div class="card-order">
								<div class="row">
									<div class="col">
										<div class="">Device Down</div>
										<div class="h3 mt-2 mb-2 doff">0 <span class="text-success fs-13 ml-2">(0%)</span></div>
									</div>
									<div class="feature">
										<a href="n_device<?php echo $ext?>?status=0">
											<i class="si si-arrow-down-circle danger feature-icon bg-danger"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- COL END -->
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
					<div class="card mb-3">
						<div class="card-body">
							<div class="card-order">
								<div class="row">
									<div class="col">
										<div id="tglx" class="">January 1, 1970</div>
										<div class="h3 mt-2 mb-2"><b id="jamx">00:00:00</b><span id="zone" class="text-success fs-13 ml-2">UTC</span></div>
									</div>
									<div class="feature">
										<i class="si si-clock secondary feature-icon bg-primary"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- COL END -->
			</div>
			<!-- End Row -->
			
			<!--Row-->
				<div class="row row-sm">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4"><a href="n_device<?php echo $ext?>">
						<div class="card custom-card">
							<div class="card-body">
								<div class="card-order">
									<label class="main-content-label mb-3 pt-1">Total Device</label>
									<h2 class="text-end card-item-icon card-icon">
										<span class="font-weight-bold dtot"></span>
									<i class="fe fe-server icon-size float-start text-info"></i></h2>
									
								</div>
							</div>
						</div></a>
					</div>
					<!-- COL END -->
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4"><a href="n_device<?php echo $ext?>?status=1">
						<div class="card custom-card">
							<div class="card-body">
								<div class="card-order">
									<label class="main-content-label mb-3 pt-1">Device ON</label>
									<h2 class="text-end"><i class="fe fe-arrow-up-circle icon-size float-start text-success"></i><span class="font-weight-bold don">0</span></h2>
								</div>
							</div>
						</div></a>
					</div>
					<!-- COL END -->
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4"><a href="n_device<?php echo $ext?>?status=0">
						<div class="card custom-card">
							<div class="card-body">
								<div class="card-order">
									<label class="main-content-label mb-3 pt-1">Device OFF</label>
									<h2 class="text-end"><i class="icon-size fe fe-arrow-down-circle float-start text-danger"></i><span class="font-weight-bold doff">0</span></h2>
								</div>
							</div>
						</div></a>
					</div>
					<!-- COL END -->
				</div>
			<!--End row-->
	
			<div class="row row-sm">
				<div class="col-lg-12">
					<div class="card custom-card overflow-hidden">
						<div class="card-body">
							<div>
								<h6 class="main-content-label mb-1">Device Location</h6>
							</div>
							<div class="mapcontainer1">
								<div id="map" style="height:450px; z-index: 1;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<!--Row-->
			<div class="row">
				<div class="col-xl-5 col-xxl-5 col-md-12 col-lg-5">

					<div class="card custom-card wallet-1">
						<div class="card custom-card card-dashboard-calendar pb-0">
							<label class="main-content-label mb-2 pt-1">Highest RTT</label>
							<span class="d-block tx-12 mb-2 text-muted"></span>
							<table class="table table-hover m-b-0 transcations mt-2">
								<tbody id="isi-speed">
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
				<div class="col-xl-7 col-xxl-7 col-md-12 col-lg-7">
					<div class="card custom-card">
						<div class="card-header border-bottom-0">
							<label class="main-content-label my-auto pt-2">Highest Bandwidth Usage</label>
							<span class="d-block tx-12 mb-3 mt-1 text-muted"></span>
						</div>
						<div class="card-body pt-2 pb-0">
							<div class="table-responsive tasks">
								<table class="table card-table table-vcenter text-nowrap border">
									<thead>
										<tr>
											<th class="wd-lg-10p">#</th>
											<th class="wd-lg-10p">Host</th>
											<th class="wd-lg-20p">Name</th>
											<th class="wd-lg-20p">Location</th>
											<th class="wd-lg-20p">Bandwidth</th>
											<th class="wd-lg-20p">Type</th>
										</tr>
									</thead>
									<tbody id="isi-band">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- row closed -->
						
			<!--Row-->
			<div class="row">
				<div class="col-xl-7 col-xxl-7 col-md-12 col-lg-7">
					<div class="card custom-card">
						<div class="card-header border-bottom-0">
							<label class="main-content-label my-auto pt-2">Lowest Bandwidth Usage</label>
							<span class="d-block tx-12 mb-3 mt-1 text-muted"></span>
						</div>
						<div class="card-body pt-2 pb-0">
							<div class="table-responsive tasks">
								<table class="table card-table table-vcenter text-nowrap border">
									<thead>
										<tr>
											<th class="wd-lg-10p">#</th>
											<th class="wd-lg-10p">Host</th>
											<th class="wd-lg-20p">Name</th>
											<th class="wd-lg-20p">Location</th>
											<th class="wd-lg-20p">Bandwidth</th>
											<th class="wd-lg-20p">Type</th>
										</tr>
									</thead>
									<tbody id="isi-bandx">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-xxl-5 col-md-12 col-lg-5">
					<div class="card custom-card wallet-1">
						<div class="card custom-card card-dashboard-calendar pb-0">
							<label class="main-content-label mb-2 pt-1">Longest Down</label>
							<span class="d-block tx-12 mb-2 text-muted"></span>
							<table class="table table-hover m-b-0 transcations mt-2">
								<tbody id="isi-ketam">
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--End Row-->

		</div>
	</div><!-- end app-content-->
				
<?php 
include "inc.foot.php";
include "inc.js.php";
?>		
<script>
$(document).ready(function(){
	page_ready();
	//displayClock();
	
	getData('home1','home-onoff');
	//get_content("home-lok<?php echo $ext?>",{},".ldr-propinsi","#lokation");
	get_content("home-speed<?php echo $ext?>",{},".ldr-speed","#isi-speed");
	//get_content("home-alert<?php echo $ext?>",{},".ldr-alert","#isi-alert");
	//getData('sla','home-sla');
	//get_content("home-sla-chart<?php echo $ext?>",{},".ldr-sla","#isi-sla");
	get_content("home-down<?php echo $ext?>",{},".ldr-ketam","#isi-ketam");
	get_content("home-band<?php echo $ext?>",{ord:'desc'},".ldr-ketam","#isi-band");
	get_content("home-band<?php echo $ext?>",{ord:'asc'},".ldr-ketam","#isi-bandx");
	
	widget_map();
	
});

var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

function displayClock(){
	var d=new Date();
	var zone=d.toString().match(/([\+-][0-9]+)\s/)[1];
	$("#zone").text('('+zone+')');
	var tgl=months[d.getMonth()]+" "+d.getDate()+", "+d.getFullYear();
	$("#tgl").text(tgl);
	var jam=d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();
	$("#jam").text(jam);
	
	
	setTimeout(displayClock,1000);
}

markerClickFunction = function(id) {
		return function(e) {
			e.cancelBubble = true;
		e.returnValue = false;
		if (e.stopPropagation) {
		  e.stopPropagation();
		  e.preventDefault();
		}
		//if(id=="0"){
			location.href="n_device"+ext+"?loc="+id;
		//}else{
		//	location.href="device.php?id="+id;
		//	}
	}}

var map;
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var err='';

function widget_map(){
	map = L.map('map').setView([-2, 118], 5);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);
	
	//L.geoJSON(indonesia).addTo(map);
	get_loc();
}

function get_loc(){
	$.ajax({
		type: 'POST',
		url: 'dataget'+ext,
		data: {q:'map',id:0},
		success: function(data){
			var json = JSON.parse(data);
			if(json['code']=='200'){
				draw_map(json['msgs']);
			}else{
				log(json['msgs']);
			}
		},
		error: function(xhr){
			log('Please check your connection'+xhr);
		}
	});
}

function draw_map(data){
	var markers = L.markerClusterGroup();
		
		for (var i = 0; i < data.length; i++) {
			var a = data[i];
			var title = a['name']+'\nTotal: '+a['cnt']+'\nON: '+a['onoff']+'\nOFF: '+a['off'];;
			var color = a['onoff']>0?"green":"red";
			var icon = L.AwesomeMarkers.icon({icon: 'server', prefix: 'fa', markerColor: color});
			
			if(isNaN(data[i]['lat'])||isNaN(data[i]['lng'])){
				err+=data[i]['name']+'/';
			}else{
				var marker = L.marker(new L.LatLng(a['lat'], a['lng']), { title: title, icon: icon });
				
				var fn=markerClickFunction(a['locid']);
				marker.on('click', fn);
				
				markers.addLayer(marker);
			}
		}

		map.addLayer(markers);
		
		if(err!='') {
			alert('Error: '+err);
		}
}

</script>

  </body>
</html>