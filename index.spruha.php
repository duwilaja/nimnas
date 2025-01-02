<?php
//include "inc.common.php";
include 'inc.db.php';

$user=post('user');
$passwd=post('passwd');
$loggedin=false;
$m=get('m');
$x=get('x');

if($user!=''&&$passwd!=''){
	$conn=connect();
	$sql="select uid, uname, ulvl, ugrp, uprof, uavatar, uloc, utick, unik from core_user where (md5(uid)=md5('$user')) and upwd=MD5('$passwd')";
	$rs = exec_qry($conn,$sql);
	if ($row = fetch_row($rs)) {
		session_start();
		
		$_SESSION['s_ID'] = $user;
		$_SESSION['s_NAME'] = $row[1];
		$_SESSION['s_LVL'] = $row[2];
		$_SESSION['s_GRP'] = $row[3];
		$_SESSION['s_PROF'] = $row[4];
		$_SESSION['s_AVATAR'] = $row[5];
		$_SESSION['s_LOC'] = $row[6];
		$_SESSION['s_TICK'] = $row[7];
		$_SESSION['s_NIK'] = $row[8];
		
		$loggedin=true;
	}else{
		$m='Wrong username/password';
		$x='error';
	}
	disconnect($conn);
}
if($loggedin){
	$hom='';
	if($_SESSION['s_LVL']=="22"||$_SESSION['s_LVL']=="21"){//HR
		$is_bai=false;
		$is_nms=false;
		$is_ticket=false;
		$is_asset=false;
	}

	if($is_asset) {$hom="ass_hom$ext";}
	if($is_ticket) {$hom="tick_hom$ext";}
	if($is_hr) {$hom="hr_hom$ext";}
	if($is_nms) {$hom="home$ext";}
	if($_SESSION['s_LVL']==12) {$hom="dash-executive$ext";}
	if($_SESSION['s_LVL']==22) {$hom="hr_hom$ext";}
	
	if($hom!=''){
		header("Location: $hom");
	}else{
		session_unset();
		session_destroy();
		
		$m="Module disabled";
	}
}

include "inc.head.php";
$menu="";
?>
			<!-- Row -->
			<!-- <div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center" style="background: #EBF0F9;">
								<div class="mt-5 pt-4 p-2 pos-absolute">
									<div class="clearfix"></div>
									<br /><br />
									<img src="img/logo_smjt-removebg-preview.png" class="" alt="user">
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="main-container container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="img/logo_smjt-removebg-preview.png" class=" d-lg-none header-brand-img text-start float-start mb-4" alt="logo">
											<div class="clearfix"></div>
											<form action="" method="POST" name="login_form" id="login_form">
												<h5 class="text-start mb-2">Signin to Your Account</h5>
												<p class="mb-4 text-muted tx-13 ms-0 text-start">Sistem Monitoring Jaringan Terpadu</p>
												<div class="form-group text-start">
													<label>Username</label>
													<input type="text" name="user" class="form-control" placeholder="" value="<?php echo $user?>">
												</div>
												<div class="form-group text-start">
													<label>Password</label>
													<input type="password" name="passwd" class="form-control" placeholder="" value="<?php echo $passwd?>">
												</div>
												<button type="submit" onclick="if($('#login').valid()){this.form.submit();}" class="btn ripple btn-main-primary btn-block">Sign In</button>
											</form>
											<div class="text-start mt-5 ms-0">
												<div class="mb-1 hidden"><a href="">Forgot password?</a></div>
												<div class=" hidden">Don't have an account? <a href="#">Register Here</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- End Row -->
			<div class="row">
				<div class="col-lg-7 col-xl-7 login-page">
					<img src="./img/item-wave-1.png" style="position: absolute; width: 100%; height: 40%; bottom: 0;" id="wave-left-1" />
					<img src="./img/item-wave-2.png" style="position: absolute; width: 60%; height: 20%; bottom: 0;" id="wave-left-2" />
					<img src="./img/item-wave-3.png" style="position: absolute; width: 60%; height: 20%; top: 0; right: 0;" id="wave-left-3" />
					<div class="content-login-1">
						<div class="d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
							<h1 style="color: #F7A31C; font-size: 60px; font-weight: 700; z-index: 4;">SMJT</h1>
							<img src="img/img-login.png" width="55%" class="py-2" alt="user" style="z-index: 4;">
							<p class="text-muted text-center" style="z-index: 4;"><span style="color: #FFFFFF; font-size: 30px; font-weight: 600;">Sistem Monitoring Jaringan Terpadu</span> </br> Be Responsive Dan Responsible</p>
						</div>
					</div>
					<div class="d-flex flex-column justify-content-end ps-4 content-login-2">
						<p class="text-muted"><span class="sub-text lh-1">Sistem Monitoring Jaringan Terpadu</span> </br> Be Responsive Dan Responsible</p>
					</div>
				</div>
				<div class="col-lg-5 col-xl-5 form-login">
					<img src="./img/item-wave-3.png" style="position: absolute; width: 80%; height: 20%; top: 0; left: 0; transform: scaleX(-1); opacity: 50%" id="wave-right-1" />
					<img src="./img/item-wave-5.png" style="position: absolute; width: 100%; height: 40%; bottom: 0; transform: scaleX(-1);" id="wave-right-2" />
					<div class="d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
						<img src="img/logo.png" width="20%" alt="logo" class="pb-5" style="z-index: 4;">
						<form action="" method="POST" name="login_form" id="login_form" style="z-index: 4;" class="w-75">
							<h5 class="text-center mb-2">Welcome Back!</h5>
							<p class="mb-4 text-muted tx-13 ms-0 text-center">Centralized Management Distributed Operational</p>
							<div class="form-group text-start">
								<label>Username</label>
								<input type="text" name="user" class="form-control" placeholder="Enter Your Username" value="<?php echo $user?>">
							</div>
							<div class="form-group text-start">
								<label>Password</label>
								<input type="password" name="passwd" class="form-control" placeholder="Enter Your Password" value="<?php echo $passwd?>">
							</div>
							<div class="d-flex justify-content-between align-items-center mb-2">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
									<label class="form-check-label tx-13" for="disabledFieldsetCheck">Remember me</label>
								</div>
								<a href="index.spruha.forgot.php" class="tx-13">Forgot Password</a>
							</div>
							<button type="submit" onclick="if($('#login').valid()){this.form.submit();}" class="btn ripple btn-main-primary btn-block">Sign In</button>
						</form>
					</div>
				</div>
			</div>			
<?php
//include "inc.foot.php";
include "inc.js.php";
?>
<script>
var x="<?php echo $x?>";
var m="<?php echo $m?>";
var jvalidate;
$(document).ready(function (){
	$(".page-main").addClass("page-single");
	jvalidate = $("#login_form").validate({
    rules :{
        "user" : {
            required : true
        },
		"passwd" : {
			required : true
		}
    }});
	showAlert();
	$("#app").addClass("app-full-height app-without-header");
});

function showAlert(){
	if(m!=""){
		alrt(m,x);
	}
}

</script>
  </body>
</html>