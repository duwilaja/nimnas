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
					<div class="card custom-card">
						<div class="card-header justify-content-between" style="display: flex;">
							 <div class="card-title main-content-label mb-1"> Device Location </div> 
							 <span><a title="all locations" href="petagugel<?php echo $ext?>" target="_blank"> <i class="fe fe-copy"></i> </a>&nbsp;&nbsp;
							 <!--a href="javascript:void(0);" data-bs-toggle="card-fullscreen"> <i class="fe fe-maximize"></i> </a--></span>
						</div>
						<div class="card-body">
							<!--div>
								<h6 class="main-content-label mb-1">Device Location</h6>
							</div-->
							<div class="mapcontainer1">
								<div id="map" style="height:450px; z-index: 1;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<!--Row-->
			<div class="row">
				<div class="col-xl-6 col-xxl-6 col-md-12 col-lg-6">

					<div class="card custom-card wallet-1" style="min-height: 440px;">
						<div class="card custom-card card-dashboard-calendar pb-0">
							<label class="main-content-label mb-2 pt-1">Highest Latency</label>
							<span class="d-block tx-12 mb-2 text-muted"></span>
							<table class="table table-hover m-b-0 transcations mt-2">
								<tbody id="isi-speed">
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
				<div class="col-xl-6 col-xxl-6 col-md-12 col-lg-6">
					<div class="card custom-card wallet-1" style="min-height: 440px;">
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
			<!-- row closed -->
						
			<!--Row-->
			<div class="row">
				<div class="col-xl-12 col-xxl-12 col-md-12 col-lg-12">
					<div class="card custom-card">
						<div class="card-header justify-content-between" style="display: flex;">
							 <div class="card-title main-content-label mb-1"> Highest Average Usage </div> 
							 <span><a title="all locations" href="bwall<?php echo $ext?>" target="_blank"> <i class="fe fe-copy"></i> </a>&nbsp;&nbsp;
							 <!--a href="javascript:void(0);" data-bs-toggle="card-fullscreen"> <i class="fe fe-maximize"></i> </a--></span>
						</div>
						<div class="card-body pt-2 pb-0">
							<div class="table-responsive tasks">
								<table class="table card-table table-vcenter text-nowrap border">
									<thead>
										<tr>
											<th>Host</th>
											<th>Name</th>
											<th>BW</th>
											<th>In</th>
											<th>Usage</th>
											<th>Out</th>
											<th>Usage</th>
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
			<!--End Row-->

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
var myCenter={lat: -2,lng: 118};
var myZoom=5;
const mylocs='<?php echo $s_LOC?>';

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
	//get_content("home-band<?php echo $ext?>",{ord:'asc'},".ldr-ketam","#isi-bandx");
	
	//widget_map();
	
});

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

function loadLoc(map){
	var err='';
	$.ajax({
		type: 'POST',
		url: 'dataget'+ext,
		data: {q:'map',id:-1},
		success: function(datax){
			var locations=JSON.parse(datax)["msgs"];
			var bounds = new google.maps.LatLngBounds();
			var err='';
			   for (var i = 0; i < locations.length; i++) {
					var a = locations[i];
					var title = a['name']+'\nTotal: '+a['cnt']+'\nON: '+a['onoff']+'\nOFF: '+a['off']+'\VPN: '+a['lnk']+'\nInternet: '+a['bw'];
					var color = a['onoff']=="0"?"0":"1";
					
					if(isNaN(a['lat'])||isNaN(a['lng'])){
						err+=a['name']+'/';
					}else{
						const myLatLng = new google.maps.LatLng(a['lat'], a['lng']);
						
						if(color=='0'){
							const iconImage = "img/"+color+".png";
							const marker = new google.maps.Marker({
							  position: myLatLng,
							  map,
							  icon: iconImage,//pinGlyph.element,
							  title: title,
							});
						}
						
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
			  if(locations.length>1) {
				//now fit the map to the newly inclusive bounds
				map.fitBounds(bounds);
				/*var listener = google.maps.event.addListener(map, "idle", function() { 
				  myCenter = bounds.getCenter();
				  myZoom=7;
				  map.setZoom(myZoom); 
				  google.maps.event.removeListener(listener); 
				});*/
			  }
			
		},
		error: function(xhr){
			console.log(xhr);
		}
	});
}

function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
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
  });*/
  loadLoc(map);
  
}


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
	//var markers = L.markerClusterGroup();
		
		for (var i = 0; i < data.length; i++) {
			var a = data[i];
			var title = a['name']+'\nTotal: '+a['cnt']+'\nON: '+a['onoff']+'\nOFF: '+a['off']+'\nLink: '+a['lnk']+'\nBW: '+a['bw'];
			var color = a['onoff']>0?"1":"0";
			//var icon = L.AwesomeMarkers.icon({icon: 'server', prefix: 'fa', markerColor: color});
			var icon = L.icon({iconUrl:'img/'+color+'.png',iconSize:[30,30],iconAnchor:[15,30]});
			
			if(isNaN(data[i]['lat'])||isNaN(data[i]['lng'])){
				err+=data[i]['name']+'/';
			}else{
				var marker = L.marker(new L.LatLng(a['lat'], a['lng']), { title: title, icon: icon });
				
				var fn=markerClickFunction(a['locid']);
				marker.on('click', fn);
				
				marker.addTo(map);
				//markers.addLayer(marker);
			}
		}

		//map.addLayer(markers);
		
		if(err!='') {
			alert('Error: '+err);
		}
}

</script>

  </body>
</html>