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
						
			<!-- Main Content -->
             <div class="row row-sm">
							<div class="col-sm-12 col-lg-12 col-xl-8">

								<!--Row-->
								<div class="row row-sm">
									<!-- COL END -->
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
										<div class="card custom-card">
											<div class="card-body">
												<div class="card-order">
													<label class="main-content-label mb-3 pt-1">Total Device</label>
													<h2 class="text-end"><i class="fe fe-server icon-size float-start text-info"></i><span class="font-weight-bold devtot">0</span></h2>
												</div>
											</div>
										</div>
									</div>
									<!-- COL END -->
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
										<div class="card custom-card">
											<div class="card-body">
												<div class="card-order">
													<label class="main-content-label mb-3 pt-1">Device ON</label>
													<h2 class="text-end"><i class="fe fe-arrow-up-circle icon-size float-start text-success"></i></i><span class="font-weight-bold dev1">0</span></h2>
												</div>
											</div>
										</div>
									</div>
									<!-- COL END -->
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
										<div class="card custom-card" style="background-color: #C92B2C !important; color: #FFFFFF;">
											<div class="card-body">
												<div class="card-order">
													<label class="main-content-label mb-3 pt-1 text-light">Device OFF</label>
													<h2 class="text-end"><i class="icon-size fe fe-arrow-down-circle float-start text-danger"></i><span class="font-weight-bold dev0">0</span></h2>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--End row-->

								<!--row-->
								<div class="row row-sm">
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card custom-card overflow-hidden" style="padding-bottom: 1.3rem !important;">
											<div class="card-header border-bottom-0 pb-0">
												<div>
													<div class="d-md-flex">
														<label class="main-content-label my-auto pt-2">Usage Bandwidth Perday</label>
														<div class="ms-auto">
															<div class="apexcharts-menu-icon d-flex text-muted tx-13" title="Menu" style="fill: #6E8192; width: 20px;">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                                                </svg>
															</div>
														</div>
													</div>
													<div class="d-md-flex">
														<span class="d-block tx-12 mt-2 mb-0 text-muted"> Bandwidth JIK 100 Mbps. </span>
														<div class="ms-auto mt-2 d-flex">
															<div class="me-3 d-flex text-muted tx-13">
																<span class="legend bg-primary rounded-circle"></span> Usage
															</div>
															<div class="d-flex text-muted tx-13">
																<span class="legend bg-light rounded-circle"></span> Total Bw
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body mt-2">
												<div class="row">
													<div class="col-sm-6 my-auto">
														<h6 class="mb-3 font-weight-normal">Penggunaan</h6>
														<div class="text-start">
															<h3 class="font-weight-bold me-3 mb-2 text-primary">75 mbps</h3>
															<p class="tx-13 my-auto text-muted">Sep 27 2024</p>
														</div>
													</div>
													<div class="col-md-6 my-auto">
														<div class="forth circle">
															<div class="chart-circle-value circle-style">
																<div class="tx-16 font-weight-bold">75%</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="d-flex">
													<div class="d-flex flex-column">
														<label class="main-content-label my-auto">SLA per month</label>
														<span class="d-block tx-12 mt-1 text-muted"><?php echo date("Y")?></span>
													</div>
													<div class="ms-auto d-flex">
														<div class="apexcharts-menu-icon d-flex text-muted tx-13" title="Menu" style="fill: #6E8192; width: 20px;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                                            </svg>
														</div>
													</div>
												</div>
												<div id="slamonth">
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card custom-card overflow-hidden">
											<div class="card-header border-bottom-0 pb-0">
												<div class="d-flex">
													<label class="main-content-label my-auto pt-2">Traffic INTERNET</label>
												</div>
												<span class="d-block tx-12 mt-2 mb-0 text-muted"> project work involves a group of students investigating . </span>
											</div>
											<div class="card-body">
												<span id="sparkline1">3,4,4,7,5,9,10,6,4,4,7,5,10,5,8,9,12,4,7,13,6,12,4,5,9,10,6</span>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card custom-card overflow-hidden">
											<div class="card-header border-bottom-0 pb-0">
												<div class="d-flex">
													<label class="main-content-label my-auto pt-2">Traffic VPN</label>
												</div>
												<span class="d-block tx-12 mt-2 mb-0 text-muted"> project work involves a group of students investigating . </span>
											</div>
											<div class="card-body">
												<span id="sparkline2">3,4,4,7,5,9,10,6,4,4,7,5,10,5,8,9,12,4,7,13,6,12,4,5,9,10,6</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-12 col-xl-4">
								<div class="card custom-card" style="background-color: #f16d75 !important; color: #FFFFFF;">
									<div class="card-body">
										<div class="card-order">
											<label class="main-content-label mb-3 pt-1 text-light">New Tickets</label>
											<h2 class="text-end card-item-icon">
											<span class="font-weight-bold newtick">0</span>
											<i class="fe fe-alert-triangle icon-size float-start text-danger" style="color: #f16d75 !important;"></i></h2>
										</div>
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="card-order">
													<label class="main-content-label mb-3 pt-1">Pending</label>
													<h2 class="text-end"><i class="icon-size fe fe-clock float-start text-warning"></i><span class="font-weight-bold pendingtick">0</span></h2>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="card-order">
													<label class="main-content-label mb-3 pt-1">Progress</label>
													<h2 class="text-end"><i class="fe fe-trending-up icon-size float-start text-info"></i><span class="font-weight-bold progresstick">0</span></h2>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card wallet-1">
									<div class="card-header border-bottom-0">
										<div class="card-header border-bottom-0 pt-0 ps-0 pe-0 d-flex">
											<div>
												<label class="main-content-label mb-2">Total Tickets</label>
											</div>
										</div>
									</div>
									<div class="card-body crypto-wallet">
										<div class="">
											<canvas id="crypto-donut" class="ht-200"></canvas></div>
											<div class="chart-circle-value circle-style"><div class="tx-20 font-weight-bold ticktot">0</div>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-center px-3">
										<div class="d-flex align-items-center">
											<div class="cryp-icon bg-danger" style="background-color: #f16d75 !important; color: #FFFFFF;"> 
												<i class="fe fe-refresh-cw"></i> 
											</div>
											<div class="ms-2">
												<span class="tx-13 font-weight-semibold">CHANGE REQUEST</span>
											</div>
										</div>
										<div class="d-flex align-items-center">
											<div>( CR )</div>
											<div class="ms-4 crtick">0</div>
											<div class="ms-4 crtickpct">0%</div>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-center px-3 py-3">
										<div class="d-flex align-items-center">
											<div class="cryp-icon bg-danger" style="background-color: #f16d75 !important; color: #FFFFFF;"> 
												<i class="fe fe-info"></i>
											</div>
											<div class="ms-2">
												<span class="tx-13 font-weight-semibold">INFORMATION REQUEST</span>
											</div>
										</div>
										<div class="d-flex align-items-center">
											<div>( IR )</div>
											<div class="ms-4 irtick">0</div>
											<div class="ms-4 irtickpct">0%</div>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-center px-3" style="padding-bottom: 1.2rem !important">
										<div class="d-flex align-items-center">
											<div class="cryp-icon bg-danger" style="background-color: #f16d75 !important; color: #FFFFFF;"> 
												<i class="fe fe-activity"></i>
											</div>
											<div class="ms-2">
												<span class="tx-13 font-weight-semibold">PROBLEM TICKET</span>
											</div>
										</div>
										<div class="d-flex align-items-center">
											<div>( PT )</div>
											<div class="ms-4 pttick">0</div>
											<div class="ms-4 pttickpct">0%</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card custom-card card-dashboard-calendar pb-0">
							<label class="main-content-label mb-2 pt-1">EOS team on province</label>
							<span class="d-block tx-12 mb-2 text-muted">
								A task is accomplished by a set deadline, and must contribute toward work-related objectives.
							</span>
							<table id="emptbl" class="table table-hover m-b-0 transcations mt-2">
								<thead class="hidden"><tr><td>logo</td><td>logo</td><td>logo</td><td>logo</td><td>logo</td></tr></thead>
								<tbody id="isiemp">
								</tbody>
							</table>
							<!--div class="pb-4 text-center">
								<button type="button" class="btn btn-outline-primary btn-wave waves-effect waves-light">Load More</button>
							</div-->
						</div>
            <!-- End Main Content -->
		</div>
	</div><!-- end app-content-->
				
    <?php 
    include "inc.foot.php";
    include "inc.js.php";
    ?>

    <script src="spruha/assets/js/circle-progress.min.js"></script> <!-- Circle Progress js-->
	<script src="spruha/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Sparkline js-->
    <script src="spruha/assets/plugins/chart.js/Chart.bundle.min.js"></script> <!-- Chart js-->
    <!--script src="spruha/assets/js/crypto-dashboard.js"></script-->
    <script src="spruha/assets/js/themeColors.js"></script>
    <script>
$(document).ready(function(){
	page_ready();
	
	gettot();
	
	get_content("dase-slamonth"+ext,{},'',"#slamonth");
	getkary("dase-kary"+ext,{},'',"#isiemp");
	
	get_content("dase-trf"+ext,{port:'wan1',df:'<?php echo date('Y-m-d')?>',dt:'<?php echo date('Y-m-d')?>'},'',"#sparkline1");
	get_content("dase-trf"+ext,{port:'wan2',df:'<?php echo date('Y-m-d')?>',dt:'<?php echo date('Y-m-d')?>'},'',"#sparkline2");
	
	circleit();
	//sparklineit();
});

function mappicker(lat,lng,ttl=''){
	window.open("mapgugel"+ext+"?ttl="+ttl+"&lat="+lat+"&lng="+lng,"MapWindow","width=830,height=500,location=no").focus();
}

function getkary(url,data,ldr,target,mthd='POST'){
	//$(target).hide();
	//$(ldr).show();
	$(target).html('<img src="spruha/assets/img/loader.svg" class="loader-img" alt="Loader">');
	$.ajax({
		type: mthd,
		url: url,
		data: data,
		success: function(result){
			$(ldr).hide();
			$(target).html(result).show();
			var mytbl=$("#emptbl").DataTable({
				lengthMenu: [[5,10,25,50,100,-1],["5","10","25","50","100","All"]]
			});
		},
		error: function(xhr){
			$(ldr).hide();
			alrt('Error loading content','error','Error');
		}
	});
}

function gettot(){
	$.ajax({
		type: 'POST',
		url: 'dataget'+ext,
		data: {q:'excdash',id:0},
		success: function(data){
			var json = JSON.parse(data);
			if(json['code']=='200'){
				var i=0;
				var devtot=0;
				var ticktot=0;
				var tickpt=0;var tickir=0;var tickcr=0;
				var tickprog=0;var ticknew=0;var tickpend=0;
				for(i=0;i<json['msgs'].length;i++){
					var brs=json['msgs'][i];
					//log(brs);
					$('.'+brs['obj']+brs['stt']).html(brs['cnt']);
					if(brs['obj']=='dev') devtot+=parseInt(brs['cnt']);
					if(brs['obj']=='tick'){
						ticktot+=parseInt(brs['cnt']);
						switch(brs['stt']){
							case  'progress': tickprog+=parseInt(brs['cnt']); break;
							case  'new' : ticknew+=parseInt(brs['cnt']); break;
							case  'pending' : tickpend+=parseInt(brs['cnt']); break;
						}
						switch(brs['typ']){
							case  'PT': tickpt+=parseInt(brs['cnt']); break;
							case  'IR' : tickir+=parseInt(brs['cnt']); break;
							case  'CR' : tickcr+=parseInt(brs['cnt']); break;
						}
					}
				}
				$(".devtot").html(devtot); $(".ticktot").html(ticktot);
				$(".pttick").html(tickpt); $(".irtick").html(tickir); $(".crtick").html(tickcr); 
				$(".progresstick").html(tickprog); $(".newtick").html(ticknew); $(".pendingtick").html(tickpend);
				$(".pttickpct").html((tickpt/ticktot*100).toFixed()+"%"); $(".irtickpct").html((tickir/ticktot*100).toFixed()+"%"); 
				$(".crtickpct").html((tickcr/ticktot*100).toFixed(2)+"%"); 
				cryptodonut(tickpt,tickir,tickcr);
				
				/*$.each(json['msgs'][0],function (key,val){
					if(html) {
						$(selector+key).html(val);
					}else{
						$(selector+key).val(val);
					}
				});*/
				//log(json['msgs']);
			}else{
				log(json['msgs']);
			}
		},
		error: function(xhr){
			log('Server Error'+xhr);
		}
	});
}

        function circleit() {
            'use strict'
        
            var c4 = $('.forth.circle');
            c4.circleProgress({
                startAngle: -Math.PI / 2 * 9,
                value: 0.75,
                lineCap: 'round',
                emptyFill: 'rgba(204, 204, 204,0.2)',
                fill: { color: myVarVal },
                lineCap: 'round'
            }); 
        
            //setTimeout(function () { c4.circleProgress('value', 0.7); }, 1000);
            //setTimeout(function () { c4.circleProgress('value', 1.0); }, 1100);
            //setTimeout(function () { c4.circleProgress('value', 0.5); }, 2100);
        };

        function sparklineit() {
            'use strict'
            /***************** LINE CHARTS *****************/
            $('#sparkline1').sparkline('html', {
                width: 250,
                height: 180,
                lineColor: '#291AD1 ',
                fillColor: false,
                tooltipContainer: $('.main-content')
            });
            $('#sparkline2').sparkline('html', {
                width: 250,
                height: 180,
                lineColor: '#f3ca56',
                fillColor: false
            });
            
            
        }
		
		function cryptodonut(pt,ir,cr) {
		  /* Chartjs (#donut)  */
		  if ($('#crypto-donut').length) {
			var ctx = document.getElementById("crypto-donut").getContext("2d");
			new Chart(ctx, {
			  type: 'doughnut',
			  data: {
				labels: ["PT", 'IR', 'CR'],
				datasets: [{
				  data: [pt, ir, cr],
				  backgroundColor: [
					myVarVal, hexToRgba(myVarVal, 0.6), hexToRgba(myVarVal, 0.4)
				  ],
				  borderWidth: 0,
				}]
			  },
			  options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
				  display: false
				},
				cutoutPercentage: 73,
			  },

			});
		  }
		  /* Chartjs (#donut) closed */
		}
    </script>

    </body>
</html>