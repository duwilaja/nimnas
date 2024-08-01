<?php 
$restrict_lvl=array("0","1","2","11");

include "inc.common.php";
include "inc.session.php";

$page_icon="fa fa-home";
$page_title="Asset";
$modal_title="Title of Modal";
$menu="ass";

$breadcrumb="Overview/$page_title";

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
			
			<!-- Row -->
			<div class="row row-sm">
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3"><a href="m_ass<?php echo $ext?>">
					<div class="card custom-card">
						<div class="card-body">
							<div class="card-order ">
								<label class="main-content-label mb-3 pt-1">Total Device</label>
								<h2 class="text-end card-item-icon card-icon">
								<i class="fa fa-cubes icon-size float-start text-primary"></i><span class="font-weight-bold xtot">0</span></h2>
								<!--p class="mb-0 mt-4 text-muted">Monthly users<span class="float-end">50%</span></p-->
							</div>
						</div>
					</div></a>
				</div>
				<!-- COL END -->
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3"><a href="m_ass<?php echo $ext?>?stt=active">
					<div class="card custom-card">
						<div class="card-body">
							<div class="card-order">
								<label class="main-content-label mb-3 pt-1">Total Device Active</label>
								<h2 class="text-end"><i class="fa fa-hdd icon-size float-start text-success"></i><span class="font-weight-bold xactive">0</span></h2>
								<!--p class="mb-0 mt-4 text-muted">Monthly Income<span class="float-end">$7,893</span></p-->
							</div>
						</div>
					</div></a>
				</div>
				<!-- COL END -->
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3"><a href="m_ass<?php echo $ext?>?stt=standby">
					<div class="card custom-card">
						<div class="card-body">
							<div class="card-order">
								<label class="main-content-label mb-3 pt-1">Total Device Active Standby</label>
								<h2 class="text-end"><i class="icon-size fa fa-hdd float-start text-warning"></i><span class="font-weight-bold xstandby">0</span></h2>
								<!--p class="mb-0 mt-4 text-muted">Monthly Profit<span class="float-end">$4,678</span></p-->
							</div>
						</div>
					</div></a>
				</div>
				<!-- COL END -->
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3"><a href="m_ass<?php echo $ext?>?stt=inactive" style="color:white;">
					<div class="card custom-card blink bg-danger">
						<div class="card-body">
							<div class="card-order">
								<label class="main-content-label mb-3 pt-1 text-light">Total Device Inactive</label>
								<h2 class="text-end"><i class="fa fa-hdd icon-size float-start text-danger"></i><span class="font-weight-bold xinactive">0</span></h2>
								<!--p class="mb-0 mt-4 text-muted">Monthly Sales<span class="float-end">3,756</span></p-->
							</div>
						</div>
					</div></a>
				</div>
				<!-- COL END -->
			</div>
			<!-- End Row -->
		
			<div class="row">
				<!-- BEGIN col-4 -->
				<div class="col-lg-6 col-md-12">
					<!-- BEGIN card -->
					<div class="card mb-3" style="min-height: 458px;">
						<div class="card-header border-bottom-0">
							<label class="main-content-label my-auto pt-2 mb-1">JUMLAH ASET</label>
							<span class="d-block tx-12 mb-0 mt-1 text-muted"></span>
						</div>
						<!-- BEGIN card-body -->
						<div class="card-body crypto-wallet" style="padding:10px !important" >
							<div class=""><canvas id="ass-cat" class="ht-180" style="max-height:270px !important"></canvas></div>
							<div class="chart-circle-value circle-style" style="top:79px; !important">
								<h6 style="padding-top: 10px; margin-bottom: 0px;!important">Total</h6>
								<div class="tx-20 font-weight-bold xtot" style="line-height:30px; !important">0</div>
							</div>
							<div class="table-responsive border-0">
								<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
									<tbody id="ascat">
										<!--tr>
											<td class="d-flex">
											<div class="bg-primary my-auto me-2"></div>
												<div class="my-auto me-2">
													<p class="mb-0 d-flex justify-content-center "><span class="legend bg-primary brround"></span>Network</p>
												</div>
											</td>
											<td class="">30</td>
											<td>+12.85% </td>
										</tr>
										<tr>
											<td class="d-flex">
											<div class="bg-primary my-auto me-2"></div>
												<div class="my-auto me-2">
													<p class="mb-0 d-flex justify-content-center "><span class="legend bg-primary brround"></span>Electrical</p>
												</div>
											</td>
											<td class="">30</td>
											<td>+12.85% </td>
										</tr>
										<tr>
											<td class="d-flex">
											<div class="bg-primary my-auto me-2"></div>
												<div class="my-auto me-2">
													<p class="mb-0 d-flex justify-content-center "><span class="legend bg-primary brround"></span>Electrical</p>
												</div>
											</td>
											<td class="">30</td>
											<td>+12.85% </td>
										</tr>
										<tr>
											<td class="d-flex">
											<div class="bg-primary my-auto me-2"></div>
												<div class="my-auto me-2">
													<p class="mb-0 d-flex justify-content-center "><span class="legend bg-primary brround"></span>Electrical</p>
												</div>
											</td>
											<td class="">30</td>
											<td>+12.85% </td>
										</tr>
										<tr>
											<td class="d-flex">
											<div class="bg-primary my-auto me-2"></div>
												<div class="my-auto me-2">
													<p class="mb-0 d-flex justify-content-center "><span class="legend bg-primary brround"></span>Electrical</p>
												</div>
											</td>
											<td class="">30</td>
											<td>+12.85% </td>
										</tr>
										<tr>
											<td class="d-flex">
											<div class="bg-primary my-auto me-2"></div>
												<div class="my-auto me-2">
													<p class="mb-0 d-flex justify-content-center "><span class="legend bg-primary brround"></span>Electrical</p>
												</div>
											</td>
											<td class="">30</td>
											<td>+12.85% </td>
										</tr-->
										
									</tbody>
								</table>
							</div>
						</div>
						<!-- END card-body -->
						
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
				<!-- BEGIN col-4 -->
				<div class="col-lg-6 col-md-12">
					<!-- BEGIN card -->
					<div class="card mb-3" style="min-height: 458px;">
						
						<div class="card-header border-bottom-0">
							<label class="main-content-label my-auto pt-2 mb-1">jumlah aset rusak</label>
							<span class="d-block tx-12 mb-0 mt-1 text-muted"></span>
						</div>

						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN table -->
							<div class="overflow-hidden">
								<canvas id="break-ass-class" style="height:300px;"></canvas>
							</div>
							<!-- END table -->
						</div>
						<!-- END card-body -->
						
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header justify-content-between border-bottom-0" style="display: flex;">
							 <div class="card-title main-content-label mb-1">MAPPING DEVICE</div> 
							 <!--a href="javascript:void(0);" data-bs-toggle="card-fullscreen"> <i class="fe fe-maximize"></i> </a-->
						</div>
						<div class="card-body">
							<div id="map" style="height:450px; z-index: 1;"></div>
						</div>
					</div>
				</div>
			</div>
			<br /><br />
			<div class="row">
				<!-- BEGIN col-4 -->
				<div class="col-xl-4 hidden">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">Oldest Assets</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN table -->
							<div class="table-responsive">
								<table id="topold" class="table table-striped table-borderless mb-2px small text-nowrap">
									<thead>
										<tr>
											<th>Name</th>
											<th>Location</th>
											<th>Purchased</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
							<!-- END table -->
						</div>
						<!-- END card-body -->
						
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
				<!-- BEGIN col-4 -->
				<div class="col-xl-7">
					<!-- BEGIN card -->
					<div class="card mb-3" style="min-height: 320px;max-height: 320px;">
						<div class="card-header border-bottom-0 d-flex">
							<div>
								<label class="main-content-label mb-2 pt-1">TOP 5 LOCATION WITH PROBLEM</label>
							</div>
						</div>
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN table -->
							<div class="table-responsive" style="max-height: 225px;">
								<table id="toppro" class="table table-striped table-borderless mb-2px small text-nowrap">
									<thead>
										<tr>
											<th>Location</th>
											<th>Total</th>
											<th>BROKEN</th>
											<th>%</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
							<!-- END table -->
						</div>
						<!-- END card-body -->
						
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
				<!-- BEGIN col-4 -->
				<div class="col-xl-5">
					<!-- BEGIN card -->
					<div class="card mb-3" style="min-height: 320px; max-height: 320px;">
						<div class="card-header border-bottom-0 d-flex">
							<div>
								<label class="main-content-label mb-2 pt-1">TOP 5 WARRANTY WARNING</label>
							</div>
						</div>
						
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN table -->
							<div class="table-responsive" style="max-height: 225px;">
								<table id="topwar" class="table table-striped table-borderless mb-2px small text-nowrap">
									<thead>
										<tr>
											<th>Name</th>
											<th>Location</th>
											<th>Expired</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
							<!-- END table -->
						</div>
						<!-- END card-body -->
						
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
			</div>
			<br /><br />
			
			
		</div>
	</div><!-- end app-content-->
				
<?php 
include "inc.foot.php";
include "inc.js.php";
?>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0LcVlAmmXMro8eH69aK6Wh4lUqttz-Zs&callback=initMap&v=weekly"
      defer
    ></script>

<script>
var mytbl1, mytbl2, mytbl3, mytbl4, mytbl5, mytbl6, mytbl7, mytbl8, mytbl9, barChart, pieChart;

var myCenter={lat: -2,lng: 118};
var myZoom=5;
const mylocs='<?php echo $s_LOC?>';
var maploaded=false;

function createCenterControl(map) {
  const controlButton = document.createElement("button");

  // Set CSS for the control.
  controlButton.style.backgroundColor = "#fff";
  controlButton.style.border = "2px solid #fff";
  controlButton.style.borderRadius = "3px";
  controlButton.style.boxShadow = "0 2px 6px rgba(0,0,0,.3)";
  controlButton.style.color = "rgb(25,25,25)";
  controlButton.style.cursor = "pointer";
  controlButton.style.fontFamily = "Roboto,Arial,sans-serif";
  controlButton.style.fontSize = "16px";
  controlButton.style.lineHeight = "38px";
  controlButton.style.margin = "8px 0 22px";
  controlButton.style.padding = "0 5px";
  controlButton.style.textAlign = "center";
  controlButton.textContent = "Center Map";
  controlButton.title = "Click to recenter the map";
  controlButton.type = "button";
  // Setup the click event listeners: simply set the map to Chicago.
  controlButton.addEventListener("click", () => {
    map.setCenter(myCenter);
	map.setZoom(myZoom);
  });
  return controlButton;
}
var markers=[];
function loadLoc(map){
	var err='';
	$.ajax({
		type: 'POST',
		url: 'dataget'+ext,
		data: {q:'asetloc',id:''},
		success: function(datax){
			if(markers.length>0){
				//cleanup here
				for (let i = 0; i < markers.length; i++) {
					markers[i].setMap(null);
				}
				markers=[];
			}
			var locations=JSON.parse(datax)["msgs"];
			var bounds = new google.maps.LatLngBounds();
			var err='';
			   for (var i = 0; i < locations.length; i++) {
					var a = locations[i];
					//var title = a['name']+'\nStatus: '+a['stts']+'\nTotal: '+a['cnt'];
					var title = a['name']+'\nTotal: '+a['cnt'];
					var color = "1";
					
					if(isNaN(a['lat'])||isNaN(a['lng'])){
						err+=a['name']+'/';
					}else{
						const myLatLng = new google.maps.LatLng(a['lat'], a['lng']);
						
						//if(color=='0'){
							const iconImage = "img/"+color+".png";
							const marker = new google.maps.Marker({
							  position: myLatLng,
							  map,
							  icon: iconImage,//pinGlyph.element,
							  title: title,
							});
							markers.push(marker);
						//}
						
						//extend the bounds to include each marker's position
						bounds.extend(myLatLng);
  
						// markers can only be keyboard focusable when they have click listeners
						// open info window when marker is clicked
						//marker.addListener("click", () => {
						  //infoWindow.setContent(position.lat + ", " + position.lng);
						  //infoWindow.open(map, marker);
						//});
							//return marker;
					}
			  }
			  if(locations.length>0) {
				//now fit the map to the newly inclusive bounds
				map.fitBounds(bounds);
				/*var listener = google.maps.event.addListener(map, "idle", function() { 
				  myCenter = bounds.getCenter();
				  myZoom=7;
				  map.setZoom(myZoom); 
				  google.maps.event.removeListener(listener); 
				});*/
			  }
			  if(err!='') console.log(err);
			  
			  maploaded=true;
			
		},
		error: function(xhr){
			console.log(xhr);
		}
	});
	
}

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: myZoom,
    center: myCenter,
  });
  
  // Create the DIV to hold the control.
  const centerControlDiv = document.createElement("div");
  // Create the control.
  const centerControl = createCenterControl(map);

  // Append the control to the DIV.
  centerControlDiv.appendChild(centerControl);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(centerControlDiv);
  
/*  const image =
    "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png";
  const beachMarker = new google.maps.Marker({
    position: { lat: -33.89, lng: 151.274 },
    map,
    icon: image,
  });
  
  const legend = document.getElementById("legend");
  for(var i=0;i<2;i++){
	const div = document.createElement("div");
	const name = (i==0)? "Down" : "Up";
	div.innerHTML = '<img src="img/' + i + '.png"> ' + name;
	legend.appendChild(div);  
  }
	map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(legend);
	*/
  
  loadLoc(map);
  
}


$(document).ready(function(){
	page_ready();
	//displayClock();
	gettot();
	
	//mytbl1 = loadTable('#topold','<?php echo base64_encode("assname,loc,gr"); ?>','<?php echo base64_encode("ass_ets"); ?>','<?php echo base64_encode("");?>','<?php echo base64_encode("");?>',[[ 2, "asc" ]],'-');
	mytbl2 = loadTable('#toppro','<?php echo base64_encode("loc,count(loc) as cnt, sum(if(stts='inactive',1,0)) as brk,round(sum(if(stts='inactive',1,0))/count(loc),2) as pct"); ?>','<?php echo base64_encode("ass_ets"); ?>','<?php echo base64_encode("");?>','<?php echo base64_encode("loc");?>',[[ 3, "desc" ]],'-');
	mytbl3 = loadTable('#topwar','<?php echo base64_encode("assname,loc,warexp"); ?>','<?php echo base64_encode("ass_ets"); ?>','<?php echo base64_encode("");?>','<?php echo base64_encode("");?>',[[ 2, "asc" ]],'-');
	
	//markers=null;
	//getData('onoff','maps-onoff');
	//widget_map();
	getDataChart('asscat');
	getDataChart('brasscat');
	get_content("ass_hom_cat<?php echo $ext?>",{},".loader-img","#ascat");
});
function randomColor(){
	return "#"+(Math.random().toString(16)+"000000").slice(2, 8).toUpperCase();
}
// to check the value is hexa or not
const isValidHex = (hexValue) => /^#([A-Fa-f0-9]{3,4}){1,2}$/.test(hexValue)

const getChunksFromString = (st, chunkSize) => st.match(new RegExp(`.{${chunkSize}}`, "g"))
// convert hex value to 256
const convertHexUnitTo256 = (hexStr) => parseInt(hexStr.repeat(2 / hexStr.length), 16)
// get alpha value is equla to 1 if there was no value is asigned to alpha in function
const getAlphafloat = (a, alpha) => {
	if (typeof a !== "undefined") { return a / 255 }
	if ((typeof alpha != "number") || alpha < 0 || alpha > 1) {
		return 1
	}
	return alpha
}
// convertion of hex code to rgba code
function hexToRgba(hexValue, alpha) {
	if (!isValidHex(hexValue)) { return null }
	const chunkSize = Math.floor((hexValue.length - 1) / 3)
	const hexArr = getChunksFromString(hexValue.slice(1), chunkSize)
	const [r, g, b, a] = hexArr.map(convertHexUnitTo256)
	return `rgba(${r}, ${g}, ${b}, ${getAlphafloat(a, alpha)})`
}
function pieChart(databar){
	var label=[], datas=[], colors=[];
	var myVarVal="#6259ca";
	//log(databar);
	for(var i=0;i<databar.length;i++){
		label.push(databar[i]['cat']);
		datas.push(parseInt(databar[i]['tot']));
		//colors.push(randomColor());
		colors.push(hexToRgba(myVarVal,(1-(i*0.1))));
	}
	
	var ctx5 = document.getElementById('ass-cat');
	pieChart = new Chart(ctx5, {
		type: 'doughnut',
		data: {
			labels: label,//['Total Visitor', 'New Visitor', 'Returning Visitor'],
			datasets: [{
				data: datas,//[300, 50, 100],
				backgroundColor: colors,
				//backgroundColor: ['rgba('+ app.color.greenRgb +', .5)', 'rgba('+ app.color.whiteRgb +', .5)', 'rgba('+ app.color.gray500Rgb +', .5)'],
				//hoverBackgroundColor: ['rgba('+ app.color.greenRgb +', 1)', 'rgba('+ app.color.whiteRgb +', 1)', 'rgba('+ app.color.gray500Rgb +', 1)'],
				borderWidth: 0
			}]
		},
		options: {
			plugins: {
				legend: {
					display: false
				},
			}
		}
	});
}

function getDataChart(q=''){
	var datachart=null;
	$.ajax({
		type: 'POST',
		url: 'dataget'+ext,
		data: {q:q},
		success: function(data){
			var json = JSON.parse(data);
			if(json['code']=='200'){
				datachart=json['msgs'];
				if(q=='asscat'){
					pieChart(datachart);
				}
				if(q=='brasscat'){
					barChart(datachart);
				}
			}else{
				log(json['msgs']);
			}
		},
		error: function(xhr){
			log('Please check your connection'+xhr);
		}
	});
}
function barChart(databar){
	var myVarVal="#6259ca";
	if(databar!=null){
		var label=[], datas=[];
		//log(databar);
		for(var i=0;i<databar.length;i++){
			label.push(databar[i]['cat']);
			datas.push(parseInt(databar[i]['tot']));
		}
		//log(label);
		//log(datas);
		var ctx2 = document.getElementById('break-ass-class');
		barChart = new Chart(ctx2, {
			type: 'bar',
			data: {
				labels: label,//['Jan','Feb','Mar','Apr','May','Jun'],
				datasets: [{
					label: 'Total',
					data: datas,//[37,31,36,34,43,31],
					backgroundColor: hexToRgba(myVarVal,0.5),
					//borderColor: randomColor(),
					borderWidth: 1.5
				}]
			}
		});
	}
}

function gettot(){
	$.ajax({
		type: 'POST',
		url: 'dataget'+ext,
		data: {q:'asshom'},
		success: function(data){
			var json = JSON.parse(data);
			if(json['code']=='200'){
				var tot=0;
				for(var i=0;i<json['msgs'].length;i++){
					var d=json['msgs'][i];
					$(".x"+d['stts']).html(d['tot']);
					tot+=parseInt(d['tot']);
				}
				$(".xtot").html(tot);
			}else{
				log(json['msgs']);
			}
			if(parseInt($(".xinactive").html())>0){
				if($(".blink").hasClass("bg-danger")) $(".blink").removeClass("bg-danger").addClass("blink-bg");
			}else{
				if($(".blink").hasClass("blink-bg")) $(".blink").addClass("bg-danger").removeClass("blink-bg");
			}
		},
		error: function(xhr){
			log('Please check your connection'+xhr);
		}
	});
	//setTimeout(gettot,1000*300);
}

function loadTable(divid,cols,tname,where,grpby,ord,x){
var mytbl=$(divid).DataTable({
	buttons: [
            'copy', 'csv'
        ],
	searching: false,
	serverSide: true,
	processing: true,
	ordering: true,
	paging: false,
	lengthChange: false,
	info: false,
	order: ord,
		ajax: {
			type: 'POST',
			url: 'datatable'+ext,
			data: function (d) {
				d.cols= cols,
				d.tname= tname,
				d.csrc= '',
				d.where= where,
				d.grpby= grpby,
				d.df= $("#df").val(),
				d.dt= $("#dt").val(),
				d.x= x;
			}
		},
		initComplete: function(){
			//dttbl_buttons(); //for ajax call
		}
	});
	
	return mytbl;
}


var map, markers;
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var err='';

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
		data: {q:'asetloc',id:''},
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
	if(markers!=null)  {
		map.removeLayer(markers);
		markers.clearLayers();
	}
	markers = L.markerClusterGroup();
		
		for (var i = 0; i < data.length; i++) {
			var a = data[i];
			var title = a['name']+'\nTotal: '+a['cnt'];
			var color = a['cnt']>0?"green":"green";
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

markerClickFunction = function(id,s) {
		return function(e) {
			e.cancelBubble = true;
		e.returnValue = false;
		if (e.stopPropagation) {
		  e.stopPropagation();
		  e.preventDefault();
		}
		//if(id=="0"){
			location.href="m_ass"+ext+"?loc="+id;
		//}else{
		//	location.href="device.php?id="+id;
		//	}
	}}

</script>

  </body>
</html>