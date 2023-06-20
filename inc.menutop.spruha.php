<?php include "inc.header.php"; ?>
		<!-- Sidemenu -->
		<div class="sticky">
			<div class="main-menu main-sidebar main-sidebar-sticky side-menu">
				<div class="main-sidebar-header main-container-1 active">
					<div class="sidemenu-logo">
						<a class="main-logo" href="index.html">
							<img src="spruha/assets/img/brand/logo-light.png" class="header-brand-img desktop-logo" alt="logo">
							<img src="spruha/assets/img/brand/icon-light.png" class="header-brand-img icon-logo" alt="logo">
							<img src="spruha/assets/img/brand/logo.png" class="header-brand-img desktop-logo theme-logo" alt="logo">
							<img src="spruha/assets/img/brand/icon.png" class="header-brand-img icon-logo theme-logo" alt="logo">
						</a>
					</div>
				<!-- BEGIN menu -->
				<div class="main-sidebar-body main-body-1">
				<div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
				<div class="slide-right" id="slide-right"><i class="fe fe-chevron-right"></i></div>
				<ul class="menu-nav nav">
					<li class="nav-header"><span class="nav-label">OVERVIEW</span></li>
					<?php if($is_nms){?>
					<li class="nav-item">
						<a class="nav-link with-sub" href="javascript:void(0)">
							<span class="shape1"></span>
							<span class="shape2"></span>
							<i class="fa fa-server sidemenu-icon menu-icon "></i>
							<span class="sidemenu-label">Monitoring</span>
						</a>
						<ul class="nav-sub">
							<li class="side-menu-label1"><a href="javascript:void(0)">Monitoring</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link home" href="home<?php echo $ext?>">Dashboard</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link ncategory" href="n_category<?php echo $ext?>">Category View</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link org" href="org<?php echo $ext?>">Business View</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link topo" href="topo<?php echo $ext?>">Topology View</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link maps" href="maps<?php echo $ext?>">Map View</a></li>
						</ul>
					</li>
					<?php }?>
					<?php if($is_ticket){?>
					<li class="nav-item">
						<a class="nav-link with-sub" href="javascript:void(0)">
							<span class="shape1"></span>
							<span class="shape2"></span>
							<i class="fa fa-newspaper-o sidemenu-icon menu-icon "></i>
							<span class="sidemenu-label">Ticketing</span>
						</a>
						<ul class="nav-sub">
							<li class="side-menu-label1"><a href="javascript:void(0)">Ticketing</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link ticks" href="tick_hom<?php echo $ext?>">Dashboard</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link tickloc" href="tick_mapsx<?php echo $ext?>">Map View</a></li>
						</ul>
					</li>
					<?php }?>
					<?php if($is_asset){?>
					<li class="nav-item">
						<a class="nav-link with-sub" href="javascript:void(0)">
							<span class="shape1"></span>
							<span class="shape2"></span>
							<i class="fa fa-cubes sidemenu-icon menu-icon "></i>
							<span class="sidemenu-label">Asset</span>
						</a>
						<ul class="nav-sub">
							<li class="side-menu-label1"><a href="javascript:void(0)">Asset</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link ass" href="ass_hom<?php echo $ext?>">Dashboard</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link asetloc" href="ass_mapsx<?php echo $ext?>">Map View</a></li>
						</ul>
					</li>
					<?php }?>
					<?php if($is_nms){?>
					<li class="nav-header"><span class="nav-label">&nbsp;</span></li>
					<li class="nav-header"><span class="nav-label">MONITORING</span></li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="javascript:void(0)">
							<span class="shape1"></span>
							<span class="shape2"></span>
							<i class="fa fa-server sidemenu-icon menu-icon "></i>
							<span class="sidemenu-label">Objects</span>
						</a>
						<ul class="nav-sub">
							<li class="side-menu-label1"><a href="javascript:void(0)">Objects</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link ndevice" href="n_devicex<?php echo $ext?>">Devices</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link nlocation" href="n_location<?php echo $ext?>">Locations</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link papp" href="p_snmpd<?php echo $ext?>">SNMP</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link papp" href="p_app<?php echo $ext?>">Application</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="javascript:void(0)">
							<span class="shape1"></span>
							<span class="shape2"></span>
							<i class="fa fa-file-text sidemenu-icon menu-icon "></i>
							<span class="sidemenu-label">Reports</span>
						</a>
						<ul class="nav-sub">
							<li class="side-menu-label1"><a href="javascript:void(0)">Reports</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link rdevice" href="r_device<?php echo $ext?>">Devices</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link rlocation" href="r_location<?php echo $ext?>">Locations</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link rperf" href="r_perf<?php echo $ext?>">Performance</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link rsla" href="r_sla<?php echo $ext?>">SLA</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link rseverity" href="r_severity<?php echo $ext?>">Severity</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link rupdown" href="r_updown<?php echo $ext?>">UP/Down</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link rtraffic" href="r_traffic<?php echo $ext?>">Traffic</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="javascript:void(0)">
							<span class="shape1"></span>
							<span class="shape2"></span>
							<i class="fa fa-gears sidemenu-icon menu-icon "></i>
							<span class="sidemenu-label">Setup</span>
						</a>
						<ul class="nav-sub">
							<li class="side-menu-label1"><a href="javascript:void(0)">Setup</a></li>
							<?php if($s_LVL==0){?>
							<li class="nav-sub-item"><a class="nav-sub-link mlov" href="m_lov<?php echo $ext?>">LoV</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="m_user<?php echo $ext?>">User</a></li>
							<?php }?>
							<li class="nav-sub-item"><a class="nav-sub-link mlov" href="m_device<?php echo $ext?>">Devices</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="m_loc<?php echo $ext?>">Locations</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link mlov" href="m_topo<?php echo $ext?>">Topology</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="m_sla<?php echo $ext?>">SLA</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link mlov" href="m_severity<?php echo $ext?>">Severity</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="m_events<?php echo $ext?>">Events</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="m_bg<?php echo $ext?>">Controls</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="javascript:void(0)">
							<span class="shape1"></span>
							<span class="shape2"></span>
							<i class="fa fa-wrench sidemenu-icon menu-icon "></i>
							<span class="sidemenu-label">Tools</span>
						</a>
						<ul class="nav-sub">
							<li class="side-menu-label1"><a href="javascript:void(0)">Tools</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link mlov" href="t_ping<?php echo $ext?>">Ping</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="t_trace<?php echo $ext?>">Trace</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="t_snmp<?php echo $ext?>">SNMP</a></li>
						</ul>
					</li>
					<?php }?>
					<?php if($is_ticket){?>
					<li class="nav-header"><span class="nav-label">&nbsp;</span></li>
					<li class="nav-header"><span class="nav-label">TICKETING</span></li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="javascript:void(0)">
							<span class="shape1"></span>
							<span class="shape2"></span>
							<i class="fa fa-database sidemenu-icon menu-icon "></i>
							<span class="sidemenu-label">Master</span>
						</a>
						<ul class="nav-sub">
							<li class="side-menu-label1"><a href="javascript:void(0)">Master</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link mlov" href="tick_loc<?php echo $ext?>">Locations</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="m_serv<?php echo $ext?>">Services</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="m_ticat<?php echo $ext?>">Categories</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="javascript:void(0)">
							<span class="shape1"></span>
							<span class="shape2"></span>
							<i class="fa fa-newspaper-o sidemenu-icon menu-icon "></i>
							<span class="sidemenu-label">Tickets</span>
						</a>
						<ul class="nav-sub">
							<li class="side-menu-label1"><a href="javascript:void(0)">Tickets</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link mlov" href="tickets<?php echo $ext?>">All</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="tickets<?php echo $ext?>?o=1">Open</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="javascript:void(0)">
							<span class="shape1"></span>
							<span class="shape2"></span>
							<i class="fa fa-file-text sidemenu-icon menu-icon "></i>
							<span class="sidemenu-label">Reports</span>
						</a>
						<ul class="nav-sub">
							<li class="side-menu-label1"><a href="javascript:void(0)">Reports</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link mlov" href="r_ticksum<?php echo $ext?>">Summary</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="r_tick<?php echo $ext?>?o=1">Tickets</a></li>
						</ul>
					</li>
					<?php }?>
					<?php if($is_asset){?>
					<li class="nav-header"><span class="nav-label">&nbsp;</span></li>
					<li class="nav-header"><span class="nav-label">ASSET</span></li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="javascript:void(0)">
							<span class="shape1"></span>
							<span class="shape2"></span>
							<i class="fa fa-database sidemenu-icon menu-icon "></i>
							<span class="sidemenu-label">Master</span>
						</a>
						<ul class="nav-sub">
							<li class="side-menu-label1"><a href="javascript:void(0)">Master</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link mlov" href="ass_loc<?php echo $ext?>">Locations</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="m_brand<?php echo $ext?>">Brand</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="m_ascat<?php echo $ext?>">Categories</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="m_ass<?php echo $ext?>">Assets</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="javascript:void(0)">
							<span class="shape1"></span>
							<span class="shape2"></span>
							<i class="fa fa-file-text sidemenu-icon menu-icon "></i>
							<span class="sidemenu-label">Reports</span>
						</a>
						<ul class="nav-sub">
							<li class="side-menu-label1"><a href="javascript:void(0)">Reports</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link mlov" href="r_asssum<?php echo $ext?>">Summary</a></li>
							<li class="nav-sub-item"><a class="nav-sub-link muser" href="r_ass<?php echo $ext?>?o=1">Asset</a></li>
						</ul>
					</li>
					<?php }?>
					
				</ul>
				<!-- END menu -->
				</div>
			</div>
		</div>
		<!-- End Sidemenu -->
		
			<!-- Main Content-->
			<div class="main-content side-content pt-0">
