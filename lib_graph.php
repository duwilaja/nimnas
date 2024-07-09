<?php 
$redirect=false;
$cleartext=true;

include "inc.common.php";
include "inc.session.php";

include "inc.db.php";

$lnk=post("lnk");
$tf=post("tf")==""?"00:00:00":post("tf");
$tt=post("tt")==""?"23:59:59":post("tt");
$df=post("df")." $tf";
$dt=post("dt")." $tt";

$b=strtotime($df);
$e=strtotime($dt);

$lnk=base64_decode(urldecode($lnk));
$ttd=strpos($lnk,"?")===false?"?":"&";
$lnk=urlencode(base64_encode($lnk.$ttd."from=$b&to=$e"));

echo '<img style="background:white;" width="100%" src="lib_api'.$ext.'?lnk='.$lnk.'">';
?>