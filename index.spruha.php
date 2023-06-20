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
	$sql="select uid, uname, ulvl, ugrp, uprof, uavatar from core_user where (md5(uid)=md5('$user')) and upwd=MD5('$passwd')";
	$rs = exec_qry($conn,$sql);
	if ($row = fetch_row($rs)) {
		session_start();
		
		$_SESSION['s_ID'] = $user;
		$_SESSION['s_NAME'] = $row[1];
		$_SESSION['s_LVL'] = $row[2];
		$_SESSION['s_GRP'] = $row[3];
		$_SESSION['s_PROF'] = $row[4];
		$_SESSION['s_AVATAR'] = $row[5];
		
		$loggedin=true;
	}else{
		$m='Wrong username/password';
		$x='error';
	}
	disconnect($conn);
}
if($loggedin){
	$hom='';
	if($is_asset) {$hom="ass_hom$ext";}
	if($is_ticket) {$hom="tick_hom$ext";}
	if($is_nms) {$hom="home$ext";}
	
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
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-5 pt-4 p-2 pos-absolute">
									<img src="spruha/assets/img/brand/logo-light.png" class="d-lg-none header-brand-img text-start float-start mb-4 error-logo-light" alt="logo">
									<img src="spruha/assets/img/brand/logo.png" class=" d-lg-none header-brand-img text-start float-start mb-4 error-logo" alt="logo">
									<div class="clearfix"></div>
									<img src="spruha/assets/img/svgs/user.svg" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">Create Your Account</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="main-container container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="spruha/assets/img/brand/logo.png" class=" d-lg-none header-brand-img text-start float-start mb-4" alt="logo">
											<div class="clearfix"></div>
											<form action="" method="POST" name="login_form" id="login_form">
												<h5 class="text-start mb-2">Signin to Your Account</h5>
												<p class="mb-4 text-muted tx-13 ms-0 text-start">Signin to create, discover and connect with the global community</p>
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
			</div>
			<!-- End Row -->
<?php
include "inc.foot.php";
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