<?php 
include "inc.common.php";
include "inc.session.php";

$page_icon="fa fa-home";
$page_title="Ticketing Dashboard";
$modal_title="Title of Modal";
$menu="ticks";

$breadcrumb="Ticketing/Dashboard";

include "inc.head.php";
include "inc.menutop.php";
?>

	<div class="app-content page-body">
		<div class="">

			<!--Page header-->
			<div class="page-header">
				<div class="page-leftheader">
					<h4 class="page-title"><?php echo $page_title ?></h4>
					<ol class="breadcrumb pl-0">
						<?php echo breadcrumb($breadcrumb)?>
					</ol>
				</div>
				<div class="d-flex">
					<div class="justify-content-center">
						<div class="d-flex mt-4 mt-lg-0">
							<form action="form-validation.html" id="selectForm" name="selectForm">
								<div class="d-sm-flex">
									<div class="parsley-select wd-sm-250" id="slWrapper">
										<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="DAERAH" required="">
											<option label="DAERAH">
											</option>
											<option value="ALL">
												ALL
											</option>
											<option value="JABAR">
												JAWA BARAT
											</option>
											<option value="JATENG">
												JAWA TENGAH
											</option>
											<option value="JATIM">
												JAWA TIMUR
											</option>
											<option value="ACEH">
												ACEH
											</option>
											<option value="SUMSEL">
												SUMATERA SELATAN
											</option>
										</select>
										<div id="slErrorContainer"></div>
									</div>
									<div class="parsley-select wd-sm-250" id="slWrapper">
										<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="LOKASI" required="">
											<option label="">
											</option>
											<option value="ALL">
												ALL
											</option>
											<option value="Firefox">
												BBGP BANDUNG
											</option>
											<option value="Chrome">
												BBGP BOGOR
											</option>
											<option value="Safari">
												BBGP DEPOK
											</option>
											<option value="Opera">
												BBGP PURWAKARTA
											</option>
											<option value="Internet Explorer">
												BBGP CIANJUR
											</option>
										</select>
										<div id="slErrorContainer"></div>
									</div>
									<div class="mg-sm-l-10 mg-t-10 mg-sm-t-0 ">
										<button class="btn ripple btn-primary pd-x-20" type="submit" value="5">Filter</button>
									</div>
								</div>
							</form>
						</div>
						
					</div>
					
				</div>
							
			</div>
			<!--End Page header-->
			
		
			<!-- row opened -->
			<div class="row row-sm">
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
					<div class="card custom-card bg-danger blink">
						<div class="card-body">
							<div class="card-order">
								<label class="main-content-label mb-3 pt-1 text-light">New Tickets</label>
								<h2 class="text-end card-item-icon">
									<span class="font-weight-bold xnew">0</span>
								<i class="fe fe-alert-triangle icon-size float-start text-danger"></i></h2>
								
							</div>
						</div>
					</div>
				</div>
				<!-- COL END -->
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
					<div class="card custom-card">
						<div class="card-body">
							<div class="card-order">
								<label class="main-content-label mb-3 pt-1">Progress</label>
								<h2 class="text-end"><i class="fe fe-trending-up icon-size float-start text-info"></i>
								<span class="font-weight-bold xprogres">0</span></h2>
							</div>
						</div>
					</div>
				</div>
				<!-- COL END -->
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
					<div class="card custom-card">
						<div class="card-body">
							<div class="card-order">
								<label class="main-content-label mb-3 pt-1">Pending</label>
								<h2 class="text-end"><i class="icon-size fe fe-clock float-start text-warning"></i>
								<span class="font-weight-bold xpending">0</span></h2>
							</div>
						</div>
					</div>
				</div>
				<!-- COL END -->
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
					<div class="card custom-card">
						<div class="card-body">
							<div class="card-order">
								<label class="main-content-label mb-3 pt-1">Closed</label>
								<h2 class="text-end"><i class="fe fe-thumbs-up icon-size float-start text-success"></i>
								<span class="font-weight-bold xclosed">0</span></h2>
							</div>
						</div>
					</div>
				</div>
				<!-- COL END -->
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
					<div class="card custom-card bg-primary">
						<div class="card-body">
							<div class="card-order">
								<label class="main-content-label mb-3 pt-1 text-light" id="tgl">27 Sep 2023</label>
								<h2><span class="font-weight-bold" id="jam">10:00:00</span></h2>
							</div>
						</div>
					</div>
				</div>
				<!-- COL END -->
			</div>
			<!-- row closed -->
			<br />
			
			<!-- row opened -->
			<div class="row row-sm">
				<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
					<div class="card custom-card wallet-1">
						<div class="card-header border-bottom-0">
							<label class="main-content-label my-auto pt-2 mb-1">Total Tickets</label>
						</div>
						<div class="card-body crypto-wallet" style="padding:10px !important" >
							<div class=""><canvas id="tick-cat" class="ht-180" style="max-height:270px !important"></canvas></div>
							<div class="chart-circle-value circle-style" style="top:79px; !important">
								<h6 style="padding-top: 10px; margin-bottom: 0px;!important">Total Tickets</h6>
								<div class="tx-20 font-weight-bold totik" style="line-height:30px; !important">0</div>
							</div>
						</div>
						<div class="table-responsive border-0">
							<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
								<tbody>
									<tr>
										<td class="d-flex">
										<div class="cryp-icon bg-danger my-auto me-2"> <i class="fe fe-activity"></i> </div>
											<div class="media-body ms-3">
												<!-- <p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin BTC</p> -->
												<span class="tx-15 font-weight-semibold my-auto">Problem Ticket </span>
											</div>
										</td>
										<td>( PT )</td>
										<td class="">2,500</td>
										<td>25%</td>
										<td>
											<div class="button-list">
												<a href="#" class="btn"><i class="fe fe-eye"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td class="d-flex">
										<div class="cryp-icon bg-danger my-auto me-2"> <i class="fe fe-refresh-cw"></i> </div>
											<div class="media-body ms-3">
												<!-- <p class="mb-1 text-muted font-weight-normal tx-15">Ethereum ETH</p> -->
												<span class="tx-15 font-weight-semibold my-auto">Change Request </span>
											</div>
										</td>
										<td>( CRT )</td>
										<td class="">2,500</td>
										<td>25%</td>
										<td>
											<div class="button-list">
												<a href="#" class="btn"><i class="fe fe-eye"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td class="d-flex">
										<div class="cryp-icon bg-danger my-auto me-2"> <i class="fe fe-info"></i> </div>
											<div class="media-body ms-3">
												<!-- <p class="mb-1 text-muted font-weight-normal tx-15">Dash DASH</p> -->
												<span class="tx-15 font-weight-semibold my-auto">Information</span>
											</div>
										</td>
										<td>( IRT )</td>
										<td class="">5,000</td>
										<td>50%</td>
										<td>
											<div class="button-list">
												<a href="#" class="btn"><i class="fe fe-eye"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					
					<div class="card custom-card">
						<div class="card-header  border-bottom-0 pb-0">
							<div class="d-flex">
								<label class="main-content-label my-auto pt-2">Top 3 Tickets</label>
							</div>
						</div>
						<div class="card-body">
							<div class="card-header border-bottom pt-0 ps-0 pe-0 d-flex"></div>
							<div class="table-responsive tasks">
								<table class="table card-table table-vcenter text-nowrap mb-0 ">
									<thead>
										<tr class="border-bottom">
											<th class="wd-lg-10p  text-bold">Location</th>
											<th class="wd-lg-20p  text-bold">Total</th>
											<th class="wd-lg-20p  text-bold">PT</th>
											<th class="wd-lg-20p  text-bold">CRT</th>
											<th class="wd-lg-20p  text-bold">IRT</th>
											<th class="wd-lg-20p  text-bold">Detail</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="font-weight-semibold d-flex"><span class="mt-1">BBGP JABAR</span></td>
											<td>35</td>
											<td>13</td>
											<td>2</td>
											<td>20</td>
											<td>
												<div class="button-list">
													<a href="#" class="btn"><i class="fe fe-eye"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td class="font-weight-semibold d-flex"><span class="mt-1">BBGP JATENG</span></td>
											<td>35</td>
											<td>13</td>
											<td>2</td>
											<td>20</td>
											<td>
												<div class="button-list">
													<a href="#" class="btn"><i class="fe fe-eye"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td class="font-weight-semibold d-flex"><span class="mt-1">BBGP JATIM</span></td>
											<td>35</td>
											<td>13</td>
											<td>2</td>
											<td>20</td>
											<td>
												<div class="button-list">
													<a href="#" class="btn"><i class="fe fe-eye"></i></a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-8 col-xl-8 col-md-12 col-lg-8">
					<div class="card custom-card">
						<div class="card-body">
							<div>
								<h6 class="main-content-label mb-1">Ticket Mapping</h6>
							</div>
							<div class="ht-300 ht-lg-400" style="height: 680px; !important;" id="map"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- row closed -->

			
			<div class="row hidden">
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
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div id="mapx" style="height:450px; z-index: 1;"></div>
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
	//getDataChart('tickstt');
	//getDataChart('ticksvc');
	//karousel();
	
	getDataChart('tickcat');
	
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
	var totik=0;
	//log(databar);
	for(var i=0;i<databar.length;i++){
		label.push(databar[i]['cat']);
		datas.push(parseInt(databar[i]['tot']));
		//colors.push(randomColor());
		colors.push(hexToRgba(myVarVal,(1-(i*0.1))));
		totik+=parseInt(databar[i]['tot']);
	}
	
	$(".totik").html(totik);
	
	var ctx5 = document.getElementById('tick-cat');
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
				if(q=='tickstt'){
					stackedbarChart(datachart);
				}
				if(q=='ticksvc'){
					pieChart(datachart);
				}
				if(q=='tickcat'){
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
					if(d['stts']!='new'&&d['stts']!='closed'&&d['stts']!='pending') tot+=parseInt(d['tot']);
				}
				if(parseInt($(".xnew").html())>0){
					if($(".blink").hasClass("bg-danger")) $(".blink").removeClass("bg-danger").addClass("blink-bg");
				}else{
					if($(".blink").hasClass("blink-bg")) $(".blink").addClass("bg-danger").removeClass("blink-bg");
				}
				$(".xprogres").html(tot);
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
var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
var err='';

function displayClock(){
	var d=new Date();
	var zone=d.toString().match(/([\+-][0-9]+)\s/)[1];
	$("#zone").text('('+zone+')');
	var tgl=d.getDate()+" "+months[d.getMonth()]+" "+d.getFullYear();
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
				
				var fn=markerClickFunction(a['locid'],a['stts']);
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
			location.href="tickets"+ext+"?loc="+id+"&s="+s;
		//}else{
		//	location.href="device.php?id="+id;
		//	}
	}}


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