<?php 
include "inc.common.php";
include "inc.session.php";

$page_icon="fa fa-home";
$page_title="Summary";
$modal_title="Title of Modal";
$menu="home";

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
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card custom-card">
						<div class="card-body">
							<div class="card-item">
								<div class="card-item-icon card-icon">
									<svg class="text-primary" xmlns="http://www.w3.org/2000/svg"
										enable-background="new 0 0 24 24" height="24"
										viewBox="0 0 24 24" width="24">
										<g>
											<rect height="14" opacity=".3" width="14" x="5" y="5" />
											<g>
												<rect fill="none" height="24" width="24" />
												<g>
													<path
														d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z" />
													<rect height="5" width="2" x="7" y="12" />
													<rect height="10" width="2" x="15" y="7" />
													<rect height="3" width="2" x="11" y="14" />
													<rect height="2" width="2" x="11" y="10" />
												</g>
											</g>
										</g>
									</svg>
								</div>
								<div class="card-item-title mb-2">
									<label class="main-content-label tx-13 font-weight-bold mb-1">Total
										Device</label>
									<span class="d-block tx-12 mb-0 text-muted">All device monitored</span>
								</div>
								<div class="card-item-body">
									<div class="card-item-stat">
										<h4 class="font-weight-bold dtot">0</h4>
										<!--small><b class="text-success">55%</b> higher</small-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card custom-card">
						<div class="card-body">
							<div class="card-item">
								<div class="card-item-icon card-icon">
									<svg xmlns="http://www.w3.org/2000/svg" height="24"
										viewBox="0 0 24 24" width="24">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<path
											d="M12 4c-4.41 0-8 3.59-8 8 0 1.82.62 3.49 1.64 4.83 1.43-1.74 4.9-2.33 6.36-2.33s4.93.59 6.36 2.33C19.38 15.49 20 13.82 20 12c0-4.41-3.59-8-8-8zm0 9c-1.94 0-3.5-1.56-3.5-3.5S10.06 6 12 6s3.5 1.56 3.5 3.5S13.94 13 12 13z"
											opacity=".3" />
										<path
											d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z" />
									</svg>
								</div>
								<div class="card-item-title mb-2">
									<label class="main-content-label tx-13 font-weight-bold mb-1">On</label>
									<span class="d-block tx-12 mb-0 text-muted">Device On</span>
								</div>
								<div class="card-item-body">
									<div class="card-item-stat">
										<h4 class="font-weight-bold don">0</h4>
										<!--small><b class="text-success">5%</b> Increased</small-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
					<div class="card custom-card">
						<div class="card-body">
							<div class="card-item">
								<div class="card-item-icon card-icon">
									<svg class="text-primary" xmlns="http://www.w3.org/2000/svg"
										height="24" viewBox="0 0 24 24" width="24">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<path
											d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1.23 13.33V19H10.9v-1.69c-1.5-.31-2.77-1.28-2.86-2.97h1.71c.09.92.72 1.64 2.32 1.64 1.71 0 2.1-.86 2.1-1.39 0-.73-.39-1.41-2.34-1.87-2.17-.53-3.66-1.42-3.66-3.21 0-1.51 1.22-2.48 2.72-2.81V5h2.34v1.71c1.63.39 2.44 1.63 2.49 2.97h-1.71c-.04-.97-.56-1.64-1.94-1.64-1.31 0-2.1.59-2.1 1.43 0 .73.57 1.22 2.34 1.67 1.77.46 3.66 1.22 3.66 3.42-.01 1.6-1.21 2.48-2.74 2.77z"
											opacity=".3" />
										<path
											d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z" />
									</svg>
								</div>
								<div class="card-item-title  mb-2">
									<label class="main-content-label tx-13 font-weight-bold mb-1">Off</label>
									<span class="d-block tx-12 mb-0 text-muted">Device Off</span>
								</div>
								<div class="card-item-body">
									<div class="card-item-stat">
										<h4 class="font-weight-bold doff">0</h4>
										<!--small><b class="text-danger">12%</b> decrease</small-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--End row-->
	
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div id="map" style="height:450px; z-index: 1;"></div>
						</div>
					</div>
				</div>
			</div>
		
			<!--Row-->
			<div class="row">
				<div class="col-xl-4 col-md-12 col-lg-12">
					<div class="card mb-3">
						<div class="card-header">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small">
								<span class="flex-grow-1">SLOWEST RTT</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
						</div>
						<div class="card-body p-0">
							<div id="isi-speed"></div>
							<div class="dimmer active ldr-speed">
								<div class="sk-cube-grid">
									<div class="sk-cube sk-cube1"></div>
									<div class="sk-cube sk-cube2"></div>
									<div class="sk-cube sk-cube3"></div>
									<div class="sk-cube sk-cube4"></div>
									<div class="sk-cube sk-cube5"></div>
									<div class="sk-cube sk-cube6"></div>
									<div class="sk-cube sk-cube7"></div>
									<div class="sk-cube sk-cube8"></div>
									<div class="sk-cube sk-cube9"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-md-12 col-lg-12">
					<div class="card mb-3">
						<div class="card-header">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small">
								<span class="flex-grow-1">DEVICE LOCATION</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-100 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
						</div>
						<div class="card-body">
							<div class="card custom-card"><div class="card-body">
								<div id="lokation"></div>
							</div></div>
						</div>
					</div>
				</div>

			</div>
			<!-- row closed -->
			
			
			<!--Row-->
			<div class="row hidden">
				<div class="col-xl-5 col-md-12 col-lg-5">
					<div class="card mb-3">
						<div class="card-header">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small">
								<span class="flex-grow-1">CURRENT ALERT</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
						</div>
						<div class="card-body">
							<div class="row" id="isi-alert"></div>
							<div class="dimmer active ldr-alert">
								<div class="sk-cube-grid">
									<div class="sk-cube sk-cube1"></div>
									<div class="sk-cube sk-cube2"></div>
									<div class="sk-cube sk-cube3"></div>
									<div class="sk-cube sk-cube4"></div>
									<div class="sk-cube sk-cube5"></div>
									<div class="sk-cube sk-cube6"></div>
									<div class="sk-cube sk-cube7"></div>
									<div class="sk-cube sk-cube8"></div>
									<div class="sk-cube sk-cube9"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="card mb-3">
						<div class="card-body">
							<div class="">
								<h5>Total Critical</h5>
							</div>
							<h2 class="mb-2 font-weight-semibold"><span id="critthismonth">0</span>
							<span class="sparkline_bar31 float-right"></span></h2>
							<div class="text-muted mb-0">
								<i class="critsign"></i>
								<span id="critcompare">-</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-7 col-md-12 col-lg-7">
					<div class="card mb-3">
						<div class="card-header">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small">
								<span class="flex-grow-1">WEEKLY ALERT</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-12 mb-3">
									<p class=" mb-0 "> Critical</p>
									<h2 class="mb-0 font-weight-semibold"><span id="critthisweek">0</span></h2>
									<span id="critlastweek" class="fs-12 text-muted"><span class="text-success mr-1"> 0%</span>last week</span></h2>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12 mb-3">
									<p class=" mb-0 "> Major </p>
									<h2 class="mb-0 font-weight-semibold"><span id="majorthisweek">0</span></h2>
									<span id="majorlastweek" class="fs-12 text-muted"><span class="text-success mr-1"> 0%</span>last week</span>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12 mb-3">
									<p class=" mb-0 "> Minor</p>
									<h2 class="mb-0 font-weight-semibold"><span id="minorthisweek">0</span></h2>
									<span id="minorlastweek" class="fs-12 text-muted"><span class="text-success mr-1"> 0%</span>last week</span>
								</div>
							</div>
							<div class="chart-wrapper">
								<canvas id="salesx" class=" chartjs-render-monitor chart-dropshadow2 h-184"></canvas>
							</div>
							<div class="dimmer active ldr-alert">
								<div class="sk-cube-grid">
									<div class="sk-cube sk-cube1"></div>
									<div class="sk-cube sk-cube2"></div>
									<div class="sk-cube sk-cube3"></div>
									<div class="sk-cube sk-cube4"></div>
									<div class="sk-cube sk-cube5"></div>
									<div class="sk-cube sk-cube6"></div>
									<div class="sk-cube sk-cube7"></div>
									<div class="sk-cube sk-cube8"></div>
									<div class="sk-cube sk-cube9"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--End row-->
			
			
			<!--Row-->
			<div class="row">
				<div class="col-xl-8 col-md-12 col-lg-7">
					<div class="card mb-3">
						<div class="card-header">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small">
								<span class="flex-grow-1">SLA</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
						</div>
						<div class="card-body overflow-hidden">
							<!--div id="flotContainer2" class="chart-style"></div-->
							<canvas id="sales" class=" chartjs-render-monitor chart-dropshadow2 h-184"></canvas>
							<div class="row" id="isi-sla"></div>
							<div class="dimmer active ldr-sla">
								<div class="sk-cube-grid">
									<div class="sk-cube sk-cube1"></div>
									<div class="sk-cube sk-cube2"></div>
									<div class="sk-cube sk-cube3"></div>
									<div class="sk-cube sk-cube4"></div>
									<div class="sk-cube sk-cube5"></div>
									<div class="sk-cube sk-cube6"></div>
									<div class="sk-cube sk-cube7"></div>
									<div class="sk-cube sk-cube8"></div>
									<div class="sk-cube sk-cube9"></div>
								</div>
							</div>
						</div>
						<div class="card-footer p-4">
							<div class="row ">
								<div class="col-xl-4 col-lg-4 col-md-12">
									<h6 class=" mb-2 fw-light">OverAll Device</h6>
									<h2 class="mb-0"><span class="fw-bold sla_all">0</span>%</h2>
									<span class="fs-12 text-muted sla_all_perc"><span class="text-success mr-1"> 0%</span> vs yesterday</span>
									<!-- <div class="progress progress-xs mt-3 h-1 sla_all_progress">
										<div class="progress-bar bg-primary w-0 " role="progressbar"></div>
									</div> -->
									<div class="progress h-5px bg-white-transparent-2 mt-2 sla_all_progress">
										<div class="progress-bar bg-success" role="progressbar"></div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12  mt-5 mt-xl-0 mt-lg-0">
									<h6 class=" mb-2 fw-light">Online Device</h6>
									<h2 class="mb-0"><span class="font-weight-semibold sla_on">0</span>%</h2>
									<span class="fs-12 text-muted sla_on_perc"><span class="text-success mr-1"> 0%</span> vs yesterday</span>
									<!-- <div class="progress progress-xs mt-3 h-1 sla_on_progress">
										<div class="progress-bar bg-success w-0 " role="progressbar"></div>
									</div> -->
									<div class="progress h-5px bg-white-transparent-2 mt-2 sla_on_progress">
										<div class="progress-bar bg-theme" role="progressbar"></div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12  mt-5 mt-xl-0 mt-lg-0">
									<h6 class=" mb-2 fw-light">Offline Device</h6>
									<h2 class="mb-0"><span class="font-weight-semibold sla_off">0</span></h2>
									<span class="fs-12 text-muted sla_off_perc"><span class="text-success mr-1"> 0%</span> vs yesterday</span>
									<!-- <div class="progress progress-xs mt-3 h-1 sla_off_progress">
										<div class="progress-bar bg-danger w-0 " role="progressbar"></div>
									</div> -->
									<div class="progress h-5px bg-white-transparent-2 mt-2 sla_off_progress">
										<div class="progress-bar bg-danger" role="progressbar"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-12 col-lg-5 hidden">
					<div class="card mb-3">
						<div class="card-header pt-2 pb-0 border-bottom-0">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-4">
								<span class="flex-grow-1">BEST DEVICE PERFORMANCE</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-100 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<div class="card-options">
							</div>
						</div>
						<div class="card-body pt-0">
							<h2 class="mb-1 number-font"><span class="counter font-weight-semibold sla_max">0%</span></h2>
							<div class="d-flex">
								<small class="mb-0 number-font1 sla_max_perc"><span class="text-success">0%</span></small>
								<small class="text-muted ml-2 fs-12"> &nbsp vs Yesterday</small>
							</div>
							<div class="row mt-3 dash1">
								<div class="col  border-right">
									<h6 class="font-weight-500 number-font1 mb-0 sla_max_w">0%</h6>
									<span class="text-muted">Weekly</span>
								</div>
								<div class="col  border-right">
									<h6 class="font-weight-500 number-font1 mb-0 sla_max_m">0%</h6>
									<span class="text-muted">Monthly</span>
								</div>
								<div class="col ">
									<p class="font-weight-500 number-font1 mb-0 sla_max_y">0%</p>
									<span class="text-muted">Yearly</span>
								</div>
							</div>
						</div>
					</div>
					<div class="card ">
						<div class="card-header pt-2 pb-0 border-bottom-0">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-4">
								<span class="flex-grow-1">WORST DEVICE PERFORMANCE</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-100 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<div class="card-options">
							</div>
						</div>
						<div class="card-body pt-0">
							<h2 class="mb-1 number-font"><span class="counter font-weight-semibold sla_min">0%</span></h2>
							<div class="d-flex">
								<small class="mb-0 number-font1 sla_min_perc"><span class="text-success">0%</span></small>
								<small class="text-muted ml-2 fs-12"> &nbsp vs Yesterday</small>
							</div>
							<div class="row mt-3 dash1">
								<div class="col  border-right">
									<h6 class="font-weight-500 number-font1 mb-0 sla_min_w">0%</h6>
									<span class="text-muted">Weekly</span>
								</div>
								<div class="col  border-right">
									<h6 class="font-weight-500 number-font1 mb-0 sla_min_m">0%</h6>
									<span class="text-muted">Monthly</span>
								</div>
								<div class="col ">
									<p class="font-weight-500 number-font1 mb-0 sla_min_y">0%</p>
									<span class="text-muted">Yearly</span>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-xl-4 col-md-12 col-lg-12">
					<div class="card mb-3">
						<div class="card-header">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small">
								<span class="flex-grow-1">LONGEST DOWN</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
						</div>
						<div class="card-body p-0">
							<div id="isi-ketam"></div>
							<div class="dimmer active ldr-ketam">
								<div class="sk-cube-grid">
									<div class="sk-cube sk-cube1"></div>
									<div class="sk-cube sk-cube2"></div>
									<div class="sk-cube sk-cube3"></div>
									<div class="sk-cube sk-cube4"></div>
									<div class="sk-cube sk-cube5"></div>
									<div class="sk-cube sk-cube6"></div>
									<div class="sk-cube sk-cube7"></div>
									<div class="sk-cube sk-cube8"></div>
									<div class="sk-cube sk-cube9"></div>
								</div>
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
		
		<!-- ECharts js-->
		<!-- <script src="aronox/assets/plugins/echarts/echarts.js"></script> -->
		<!--Morris Charts js -->
		<!-- <script src="aronox/assets/plugins/morris/raphael-min.js"></script>
		<script src="aronox/assets/plugins/morris/morris.js"></script> -->
		<!-- Flot Charts js-->
		<!-- <script src="aronox/assets/plugins/flot/jquery.flot.js"></script>
		<script src="aronox/assets/plugins/flot/jquery.flot.fillbetween.js"></script>
		<script src="aronox/assets/plugins/flot/jquery.flot.pie.js"></script> -->
		<!-- Vector js -->
		<!-- <script src="aronox/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="aronox/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
		<script src="aronox/assets/js/vectormap.js"></script> -->
		
		<!-- Peitychart init demo js-->
		<!-- <script src="aronox/assets/plugins/peitychart/peitychart.init.js"></script> -->
		
		<!-- Apexchart js-->
		<!-- <script src="aronox/assets/js/apexcharts.js"></script> -->
		
		<!-- Index js-->
		<!--script src="aronox/assets/js/index4.js"></script>
		<script src="aronox/assets/js/index1.js"></script-->
<script>
$(document).ready(function(){
	page_ready();
	//displayClock();
	
	getData('home1','home-onoff');
	get_content("home-lok<?php echo $ext?>",{},".ldr-propinsi","#lokation");
	get_content("home-speed<?php echo $ext?>",{},".ldr-speed","#isi-speed");
	//get_content("home-alert<?php echo $ext?>",{},".ldr-alert","#isi-alert");
	//getData('sla','home-sla');
	get_content("home-sla-chart<?php echo $ext?>",{},".ldr-sla","#isi-sla");
	get_content("home-down<?php echo $ext?>",{},".ldr-ketam","#isi-ketam");
	
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