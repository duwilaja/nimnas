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
			
			<div class="row">
				<div class="col-xl-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class=" col-xl-3 col-sm-6 d-flex mb-5 mb-xl-0">
									<div class="feature">
										<i class="si si-briefcase primary feature-icon bg-primary"></i>
									</div>
									<div class="ml-3">
										<small class=" mb-0">Total Orders</small><br>
										<h3 class="font-weight-semibold mb-0">5,643</h3>
										<small class="mb-0 text-muted"><span class="text-success font-weight-semibold"><i class="fa fa-caret-up  mr-1"></i> 0.67%</span> Last month</small>
									</div>
								</div>
								<div class=" col-xl-3 col-sm-6 d-flex mb-5 mb-xl-0">
									<div class="feature">
										<i class="si si-layers danger feature-icon bg-danger"></i>
									</div>
									<div class=" d-flex flex-column  ml-3"> <small class=" mb-0">Total Product</small>
										<h3 class="font-weight-semibold mb-0">2,536</h3>
										<small class="mb-0 text-muted"><span class="text-success font-weight-semibold"><i class="fa fa-caret-up  mr-1"></i> 0.25%</span> Last month</small>
									</div>
								</div>
								<div class=" col-xl-3 col-sm-6 d-flex  mb-5 mb-sm-0">
									<div class="feature">
										<i class="si si-note secondary feature-icon bg-secondary"></i>
									</div>
									<div class=" d-flex flex-column ml-3"> <small class=" mb-0">Total Feedback</small>
										<h3 class="font-weight-semibold mb-0">12,863</h3>
										<small class="mb-0 text-muted"><span class="text-success font-weight-semibold"><i class="fa fa-caret-up  mr-1"></i> 0.67%</span> Last month</small>
									</div>
								</div>
								<div class=" col-xl-3 col-sm-6 d-flex">
									<div class="feature">
										<i class="si si-basket-loaded success feature-icon bg-success"></i>
									</div>
									<div class=" d-flex flex-column  ml-3"> <small class=" mb-0">Total sold</small>
										<h3 class="font-weight-semibold mb-0">7,836</h3>
										<small class="mb-0 text-muted"><span class="text-danger font-weight-semibold"><i class="fa fa-caret-down  mr-1"></i> 0.32%</span> Last month</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xl-5 col-md-12 col-lg-5">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title mb-0">Sales Funnel &amp; Avg. Length of Sales Stages</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-4 text-center mb-4 mb-md-0">
									<p class="data-attributes mb-0">
										<span class="donut" data-peity="{ &quot;fill&quot;: [&quot;#4a32d4&quot;, &quot;#e5e9f2&quot;]}" style="display: none;">4/5</span><svg class="peity" height="50" width="50"><path d="M 25 0 A 25 25 0 1 1 1.223587092621159 17.274575140626318 L 13.11179354631058 21.13728757031316 A 12.5 12.5 0 1 0 25 12.5" fill="#4a32d4"></path><path d="M 1.223587092621159 17.274575140626318 A 25 25 0 0 1 24.999999999999996 0 L 24.999999999999996 12.5 A 12.5 12.5 0 0 0 13.11179354631058 21.13728757031316" fill="#e5e9f2"></path></svg>
									</p>
									<h4 class=" mb-0 font-weight-semibold">3,678</h4>
									<p class="mb-0 text-muted">Opportunities</p>
								</div>
								<div class="col-md-4 text-center mb-4 mb-md-0">
									<p class="data-attributes mb-0">
										<span class="donut" data-peity="{ &quot;fill&quot;: [&quot;#fb1c52&quot;, &quot;#e5e9f2&quot;]}" style="display: none;">226/360</span><svg class="peity" height="50" width="50"><path d="M 25 0 A 25 25 0 1 1 7.016504991533726 42.36645926147494 L 16.00825249576686 33.68322963073747 A 12.5 12.5 0 1 0 25 12.5" fill="#fb1c52"></path><path d="M 7.016504991533726 42.36645926147494 A 25 25 0 0 1 24.999999999999996 0 L 24.999999999999996 12.5 A 12.5 12.5 0 0 0 16.00825249576686 33.68322963073747" fill="#e5e9f2"></path></svg>
									</p>
									<h4 class=" mb-0 font-weight-semibold">398</h4>
									<p class="mb-0 text-muted">Proposal</p>
								</div>
								<div class="col-md-4 text-center">
									<p class="data-attributes mb-0">
										<span class="donut" data-peity="{ &quot;fill&quot;: [&quot;#f7be2d&quot;, &quot;#e5e9f2&quot;]}" style="display: none;">4,4</span><svg class="peity" height="50" width="50"><path d="M 25 0 A 25 25 0 0 1 25 50 L 25 37.5 A 12.5 12.5 0 0 0 25 12.5" fill="#f7be2d"></path><path d="M 25 50 A 25 25 0 0 1 24.999999999999996 0 L 24.999999999999996 12.5 A 12.5 12.5 0 0 0 25 37.5" fill="#e5e9f2"></path></svg>
									</p>
									<h4 class=" mb-0 font-weight-semibold">289</h4>
									<p class="mb-0 text-muted">Negotiation</p>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class=" ">
								<h5>Total earnings of this year</h5>
							</div>
							<h2 class="mb-2 font-weight-semibold">$6,3825<span class="sparkline_bar31 float-right"><canvas style="display: inline-block; width: 147px; height: 50px; vertical-align: top;" width="147" height="50"></canvas></span></h2>
							<div class="text-muted mb-0">
								<i class="fa fa-arrow-circle-o-up text-success"></i>
								<span>12.3% higher vs previous month</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-7 col-md-12 col-lg-7">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Yearly Sales Report</h3>
							<div class="card-options ">
								<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
								<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-12 mb-5">
									<p class=" mb-0 "> Total Sales</p>
									<h2 class="mb-0 font-weight-semibold">35,789<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.9%</span>last year</span></h2>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12 mb-5">
									<p class=" mb-0 ">Total Income</p>
									<h2 class="mb-0 font-weight-semibold">$9,265<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>0.15%</span>last year</span></h2>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12 mb-5">
									<p class=" mb-0 "> Total Profits</p>
									<h2 class="mb-0 font-weight-semibold">32%<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>1.04%</span>last year</span></h2>
								</div>
							</div>
							<div class="chart-wrapper"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
								<canvas id="sales" class="chartjs-render-monitor chart-dropshadow2 h-184" style="display: block; width: 486px; height: 184px;" width="486" height="184"></canvas>
							</div>
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
		<!-- Index js-->
		<script src="aronox/assets/js/index1.js"></script>

<script>
$(document).ready(function(){
	page_ready();
})
</script>

  </body>
</html>