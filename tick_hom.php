<?php 
include "inc.common.php";
include "inc.session.php";

$page_icon="fa fa-home";
$page_title="Dashboard";
$modal_title="Title of Modal";
$menu="ticks";

$breadcrumb="Overview/Ticketing/$page_title";

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
			
		
			<!-- row opened -->
			<div class="row row-sm">
				<div class="owl-carousel  owl-theme">
					<div class="item">
						<div class="card custom-card">
							<div class="card-body">
								<div class="d-flex no-block align-items-center">
									<div>
										<span class="text-muted tx-13 mb-3">New</span>
										<h3 class="m-0 mt-2 xnew">0</h3>
									</div>
									<div class="ms-auto mt-auto">
										<img src="spruha/assets/img/svgs/crypto-currencies/btc.svg" class="wd-30 hd-30 me-2" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card custom-card">
							<div class="card-body">
								<div class="d-flex no-block align-items-center">
									<div>
										<span class="text-muted tx-13 mb-3">Progress</span>
										<h3 class="m-0 mt-2 xprogress">0</h3>
									</div>
									<div class="ms-auto mt-auto">
										<img src="spruha/assets/img/svgs/crypto-currencies/eth.svg" class="wd-30 hd-30 me-2" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card custom-card">
							<div class="card-body">
								<div class="d-flex no-block align-items-center">
									<div>
										<span class="text-muted tx-13 mb-3">Pending</span>
										<h3 class="m-0 mt-2 xpending">0</h3>
									</div>
									<div class="ms-auto mt-auto">
										<img src="spruha/assets/img/svgs/crypto-currencies/xrp.svg" class="wd-30 hd-30 me-2" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card custom-card">
							<div class="card-body">
								<div class="d-flex no-block align-items-center">
									<div>
										<span class="text-muted tx-13 mb-3">Solved</span>
										<h3 class="m-0 mt-2 xsolved">0</h3>
									</div>
									<div class="ms-auto mt-auto">
										<img src="spruha/assets/img/svgs/crypto-currencies/ltc.svg" class="wd-30 hd-30 me-2" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card custom-card">
							<div class="card-body">
								<div class="d-flex no-block align-items-center">
									<div>
										<span class="text-muted tx-13 mb-3">Closed</span>
										<h3 class="m-0 mt-2 xclosed">0</h3>
									</div>
									<div class="ms-auto mt-auto">
										<img src="spruha/assets/img/svgs/crypto-currencies/dash.svg" class="wd-30 hd-30 me-2" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--div class="item">
						<div class="card custom-card">
							<div class="card-body">
								<div class="d-flex no-block align-items-center">
									<div>
										<span class="text-muted tx-13 mb-3">Monero  XMR</span>
										<h3 class="m-0 mt-2">5,34578</h3>
									</div>
									<div class="ms-auto mt-auto">
										<img src="spruha/assets/img/svgs/crypto-currencies/xmr.svg" class="wd-30 hd-30 me-2" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card custom-card">
							<div class="card-body">
								<div class="d-flex no-block align-items-center">
									<div>
										<span class="text-muted tx-13 mb-3">Neo  NEO</span>
										<h3 class="m-0 mt-2">4,435456</h3>
									</div>
									<div class="ms-auto mt-auto">
										<img src="spruha/assets/img/svgs/crypto-currencies/neo.svg" class="wd-30 hd-30 me-2" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card custom-card">
							<div class="card-body">
								<div class="d-flex no-block align-items-center">
									<div>
										<span class="text-muted tx-13 mb-3">Steem STEEM</span>
										<h3 class="m-0 mt-2">2,345467</h3>
									</div>
									<div class="ms-auto mt-auto">
										<img src="spruha/assets/img/svgs/crypto-currencies/steem.svg" class="wd-30 hd-30 me-2" alt="">
									</div>
								</div>
							</div>
						</div>
					</div-->
				</div>
			</div>
			<!-- row closed -->
			<br />
			<div class="row">
				<!-- BEGIN col-4 -->
				<div class="col-xl-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">Ticket Status</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN table -->
							<div class="overflow-hidden">
								<canvas id="tick-cat"></canvas>
							</div>
							<!-- END table -->
						</div>
						<!-- END card-body -->
						
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
				<!-- BEGIN col-4 -->
				<div class="col-xl-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">Ticket By Service</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN table -->
							<div class="overflow-hidden">
								<canvas id="tick-svc" style="max-height:230px;"></canvas>
								<!--div id="donatsvc" style="max-height:230px;"></div-->
							</div>
							<!-- END table -->
						</div>
						<!-- END card-body -->
						
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
			</div>
			<div class="row hidden">
				<!-- BEGIN col-4 -->
				<div class="col-xl-4">
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
				<div class="col-xl-4">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">Brand Problem</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN table -->
							<div class="table-responsive">
								<table id="toppro" class="table table-striped table-borderless mb-2px small text-nowrap">
									<thead>
										<tr>
											<th>Brand</th>
											<th>Total</th>
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
				<div class="col-xl-4">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">Warranty Warning</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN table -->
							<div class="table-responsive">
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
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div id="map" style="height:450px; z-index: 1;"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div><!-- end app-content-->
				
<?php 
include "inc.foot.php";
include "inc.js.php";
?>
<script>
var mytbl1, mytbl2, mytbl3, mytbl4, mytbl5, mytbl6, mytbl7, mytbl8, mytbl9, barChart, pieChart;

$(document).ready(function(){
	page_ready();
	displayClock();
	
	gettot();
	
	//mytbl1 = loadTable('#topold','<?php echo base64_encode("assname,loc,gr"); ?>','<?php echo base64_encode("ass_ets"); ?>','<?php echo base64_encode("");?>','<?php echo base64_encode("");?>',[[ 2, "asc" ]],'-');
	//mytbl2 = loadTable('#toppro','<?php echo base64_encode("brand,count(brand) as cnt"); ?>','<?php echo base64_encode("ass_ets"); ?>','<?php echo base64_encode("stts='inactive'");?>','<?php echo base64_encode("brand");?>',[[ 1, "desc" ]],'-');
	//mytbl3 = loadTable('#topwar','<?php echo base64_encode("assname,loc,warexp"); ?>','<?php echo base64_encode("ass_ets"); ?>','<?php echo base64_encode("");?>','<?php echo base64_encode("");?>',[[ 2, "asc" ]],'-');
	
	markers=null;
	//getData('onoff','maps-onoff');
	widget_map();
	getDataChart('tickstt');
	getDataChart('ticksvc');
	karousel();
	
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
		label.push(databar[i]['svc']);
		datas.push(parseInt(databar[i]['tot']));
		//colors.push(randomColor());
		colors.push(hexToRgba(myVarVal,(1-(i*0.1))));
	}
	
	var ctx5 = document.getElementById('tick-svc');
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
				if(q=='tickstt'){
					stackedbarChart(datachart);
				}
				if(q=='ticksvc'){
					pieChart(datachart);
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
	if(databar!=null){
		var label=[], datas=[];
		var myVarVal="#6259ca";
		//log(databar);
		for(var i=0;i<databar.length;i++){
			label.push(databar[i]['cat']);
			datas.push(parseInt(databar[i]['tot']));
		}
		//log(label);
		//log(datas);
		var ctx2 = document.getElementById('tick-cat');
		barChart = new Chart(ctx2, {
			type: 'bar',
			data: {
				labels: label,//['Jan','Feb','Mar','Apr','May','Jun'],
				datasets: [{
					label: 'Total',
					data: datas,//[37,31,36,34,43,31],
					backgroundColor: myVarVal,
					//borderColor: randomColor(),
					borderWidth: 1.5
				}]
			}
		});
	}
}
function stackedbarChart(databar){
	if(databar!=null){
		var label=[], pending=[], progress=[], closed=[], lbl='', pnd=0, prg=0, cls=0;
		var myVarVal="#6259ca";
		log(databar);
		for(var i=0;i<databar.length;i++){
			var d=databar[i];
			if(d['bln']!=lbl) {
				if(lbl!='') {
					label.push(lbl);
					pending.push(pnd); pnd=0;
					progress.push(prg); prg=0;
					closed.push(cls); cls=0;
				}
				lbl=d['bln'];
			}
			switch(d['stts']){
				case "closed" : cls=(parseInt(d['tot'])); break;
				case "pending" : pnd=(parseInt(d['tot'])); break;
				case "progress" : prg=(parseInt(d['tot'])); break;
			}
		}
		label.push(lbl);
		pending.push(pnd);
		progress.push(prg);
		closed.push(cls);
		//log(label);
		//log(datas);
		var ctx2 = document.getElementById('tick-cat');
		barChart = new Chart(ctx2, {
			type: 'bar',
			data: {
				labels: label,//['Jan','Feb','Mar','Apr','May','Jun'],
				datasets: [
				{
					label: 'Progress',
					data: progress,//[37,31,36,34,43,31],
					backgroundColor: myVarVal,
					//borderColor: randomColor(),
					borderWidth: 1.5
				},
				{
					label: 'Pending',
					data: pending,//[37,31,36,34,43,31],
					backgroundColor: hexToRgba(myVarVal,0.6),
					//borderColor: randomColor(),
					borderWidth: 1.5
				},
				{
					label: 'Closed',
					data: closed,//[37,31,36,34,43,31],
					backgroundColor: hexToRgba(myVarVal,0.4),
					//borderColor: randomColor(),
					borderWidth: 1.5
				}]
			},
			  options: {
				plugins: {
				  title: {
					display: false,
					text: 'Chart.js Bar Chart - Stacked'
				  },
				},
				responsive: true,
				scales: {
				  x: {
					stacked: true,
				  },
				  y: {
					stacked: true
				  }
				}
			  }
		});
	}
}

function gettot(){
	$.ajax({
		type: 'POST',
		url: 'dataget'+ext,
		data: {q:'tikhom'},
		success: function(data){
			var json = JSON.parse(data);
			if(json['code']=='200'){
				var tot=0;
				for(var i=0;i<json['msgs'].length;i++){
					var d=json['msgs'][i];
					$(".x"+d['stts']).html(d['tot']);
					tot+=parseInt(d['tot']);
				}
				//$(".tot").html(tot);
			}else{
				log(json['msgs']);
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
		data: {q:'tikloc'},
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
			var title = a['name']+'\nStatus: '+a['stts']+'\nTotal: '+a['cnt'];
			var color = a['cnt']>0?"red":"green";
			var icon = L.AwesomeMarkers.icon({icon: 'newspaper-o', prefix: 'fa', markerColor: color});
			
			if(isNaN(data[i]['lat'])||isNaN(data[i]['lng'])){
				err+=data[i]['name']+'/';
			}else{
				var marker = L.marker(new L.LatLng(a['lat'], a['lng']), { title: title, icon: icon });
				
				//var fn=markerClickFunction(a['locid']);
				//marker.on('click', fn);
				
				markers.addLayer(marker);
			}
		}

		map.addLayer(markers);
		
		if(err!='') {
			alert('Error: '+err);
		}
}


function karousel(){
	jQuery('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    slideTransition: 'linear',
    autoplaySpeed: 6000,
    smartSpeed: 6000,
    center: true,
    margin: 22,
    dots: false,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 2,
        nav: true
      },
      992: {
        items: 3,
        nav: true
      },
      1300: {
        items: 4,
        nav: true
      },
      1500: {
        items: 4,
        nav: true
      },
    }
  });
  jQuery('.owl-carousel').trigger('play.owl.autoplay', [2000]);
  function setSpeed() {
    jQuery('.owl-carousel').trigger('play.owl.autoplay', [6000]);
  }
  $('.owl-nav').css('display', 'none');
  setTimeout(setSpeed, 1000);
}
</script>

  </body>
</html>