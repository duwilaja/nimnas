<?php 
$redirect=false;
$cleartext=true;

include "inc.common.php";
include "inc.session.php";

include "inc.db.php";

$lnk=post("lnk");
$df=post("df");//." 00:00:00";
$dt=post("dt");//." 23:59:59";

$b=strtotime($df);
$e=strtotime($dt);

$lnk=base64_decode(urldecode($lnk));
$ttd=strpos($lnk,"?")===false?"?":"&";
$lnk=urlencode(base64_encode($lnk.$ttd."from=$b&to=$e"));

echo '<img style="background:white;" width="100%" src="lib_api'.$ext.'?lnk='.$lnk.'">';
?>