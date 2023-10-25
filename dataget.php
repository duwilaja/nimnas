<?php
$redirect=false;
include 'inc.common.php';
include 'inc.session.php';
include 'inc.db.php';

$conn = connect();

$q=post('q',$conn);
$id=post('id',$conn,'0');

$sql="";
$code="200";
$ttl="OK";

$whr="(1=1)";
if($mys_LOC!=''){ //session loc
	$whr= "loc in ('$mys_LOC')";
}

$wtik="(1=1)"; $wloc="";
if($mys_LOC!=''){
	$wtik.= " AND loc in ('$mys_LOC')";
	$wloc=" AND locid in ('$mys_LOC')";
}
if($s_TICK!=''){
	$wtik.= " AND grp='$s_TICK'";
}


switch($q){
	case 'user': $sql="select * from core_user where rowid='$id'"; break;
	case 'sla': $sql="select * from core_sla where rowid='$id'"; break;
	case 'location': $sql="select * from core_location where rowid='$id'"; break;
	case 'ip': $sql="select * from core_ipscan where rowid='$id'"; break;
	case 'severity': $sql="select * from core_severity where rowid='$id'"; break;
	case 'mdevice': $sql="select * from core_node where rowid='$id'"; break;
	case 'mtopo': $sql="select * from core_netdiagram where rowid='$id'"; break;
	case 'mlov': $sql="select * from core_lov where rowid='$id'"; break;
	case 'mbg': $sql="select *,if(running='1','Running',if(startnow='1','Starting','Stopped')) as status from core_bgjob where rowid='$id'"; break;
	case 'mev': $sql="select * from core_events where rowid='$id'"; break;
	
	case 'kabkot': $sql="select kabkotid as v,concat(name,' (',kabkot,')') as t from core_kabkot where prov='$id' order by name"; break;
	
	case 'mbrand': $sql="select * from ass_brand where rowid='$id'"; break;
	case 'mascat': $sql="select * from ass_cat where rowid='$id'"; break;
	case 'mass': $sql="select * from ass_ets where rowid='$id'"; break;
	case 'asetloc': 
			$tname="core_location l join ass_ets a on l.locid=a.loc";
			$grpby="lat,lng,concat(l.name,'\n',l.addr),locid";
			$where=$id==""?"lat<>'' and lng<>''":"lat<>'' and lng<>'' and stts='$id'";
		$sql="select lat,lng,concat(l.name,'\n',l.addr) as name,locid,count(a.stts) as cnt from $tname where $where group by $grpby"; break;
	case 'asshom': $sql="select stts,count(stts) as tot from ass_ets  group by stts"; break;
	case 'asscat': $sql="select cat,count(cat) as tot from ass_ets  group by cat"; break;
	case 'assno': $sql="select assid as v,assname as t from ass_ets where loc='$id' order by assname"; break;
	case 'brasscat': $sql="select cat,count(cat) as tot from ass_ets where stts='inactive' group by cat"; break;
	
	case 'tick': $sql="select * from tick_ets where rowid='$id'"; break;
	case 'mticat': $sql="select * from tick_cat where rowid='$id'"; break;
	case 'mserv': $sql="select * from tick_serv where rowid='$id'"; break;
	
	case 'tikhom': 
		$wtik.=post('prov')==''?'':" AND loc in (select locid from core_location where prov='".post('prov')."')";
		$wtik.=post('loc')==''?'':" AND loc='".post('loc')."'";
		$sql="select stts,count(stts) as tot from tick_ets where  $wtik group by stts"; break;
	case 'tikprov': $sql="select locid as v, name as t from core_location where prov like '$id' $wloc"; break;
	case 'tikloc': 
			$wtik="(1=1)";
			if($mys_LOC!=''){ $wtik.= " AND loc in ('$mys_LOC')"; }
			$wtik.=post('prov')==''?'':" AND prov='".post('prov')."'";
			$wtik.=post('loc')==''?'':" AND loc='".post('loc')."'";
			$tname="core_location l join tick_ets a on l.locid=a.loc";
			$grpby="lat,lng,concat(l.name,'\n',l.addr),stts,locid";
			$where="lat<>'' and lng<>'' and stts<>'closed' and $wtik";
		$sql="select lat,lng,concat(l.name,'\n',l.addr) as name,locid,count(a.stts) as cnt,a.stts from $tname where $where group by $grpby"; break;
	case 'tickcat': 
		$wtik.=post('prov')==''?'':" AND loc in (select locid from core_location where prov='".post('prov')."')";
		$wtik.=post('loc')==''?'':" AND loc='".post('loc')."'";
		$sql="select cat,count(cat) as tot from tick_ets  where  $wtik group by cat"; break;
	case 'ticksvc': $sql="select svc,count(svc) as tot from tick_ets where  $wtik group by svc"; break;
	case 'tickstt': $sql="select DATE_FORMAT(dtm,'%Y-%m') as bul,DATE_FORMAT(dtm,'%b-%Y') as bln,stts,count(stts) as tot from tick_ets 
				where stts in ('progress','pending','closed') and $wtik  and 
				dtm >= DATE_SUB(DATE_ADD(LAST_DAY(NOW()), INTERVAL 1 DAY), INTERVAL 1 YEAR) group by bul,bln,stts order by bul"; break;
	
	case 'profile': $sql="select * from core_user where uid='$id'"; break;
	
	case 'home1': $sql="select count(host) as tdev, sum(status) as tdup, count(host)-sum(status) as tdon from core_status"; 
			if($mys_LOC!='') $sql.=" where host in (select host from core_node where $whr)"; 
			break;
	
	case 'map': $tname="core_location l join core_node n on l.locid=n.loc join core_status s on n.host=s.host";
			$grpby="lat,lng,concat(l.name,'\n',l.addr),locid";
		$sql="select lat,lng,concat(l.name,'\n',l.addr) as name,locid,sum(s.status) as onoff,count(n.host) as cnt, (count(n.host)-sum(s.status)) as off from $tname where lat<>'' and lng<>'' and $whr group by $grpby"; break;
	
	case 'nodes': $sql="select n.rowid as id, n.host as label, concat(n.host,'/',name) as title, concat('icon/',lower(typ),'.png') as image, 'image' as shape,
					if(status=1,'#ffffff','#ff0000') as fc from core_node n join core_status s on s.host=n.host where $whr"; break;
	case 'edges': $sql="select n1.rowid as `from`, n2.rowid as `to`, 50 as `length` from core_netdiagram d 
				join core_node n1 on n1.host=d.dari join core_node n2 on n2.host=d.ke";
				if($mys_LOC!=''){
					$sql.=" where n1.loc in ('$mys_LOC') and n2.loc in ('$mys_LOC')";
				}
				break;
				
	case 'orgs': $sql="select distinct grp from core_node where grp<>'' and $whr"; break;
	case 'odatas': $sql="select rowid,host,name,grp from core_node where $whr"; break;
	
	case 'ticknot': $sql="select TRIM(umail) as v,uname as t from core_user where utick='$id' and uid<>'$s_ID' and TRIM(umail)<>''"; break;
	
	case 'notify': $sql="select DATE_FORMAT(created,'%a, %e %b %H:%i') as dtm,uname,uavatar as avatar,ticketno,
			concat('Ticket#',ticketno,'. ',h,'. status ',stts) as msg
			from tick_ets n left join core_user u on u.uid=n.creby where stts='new' and $wtik order by created desc"; break;
}

//echo $sql;
if($sql==""){
	$code="404";
	$ttl="Error";
	$output="Query not found";
}else{
	$result = exec_qry($conn,$sql);
	if(db_error($conn)==''){
		$output = fetch_alla($result);
	}else{
		$output = db_error($conn);
		if($production){$output="System Error. Please contact admin.";}
		$ttl = "Error";
		$code= "505";
	}
}

disconnect($conn);

echo json_encode(array('code'=>$code,'ttl'=>$ttl,'msgs'=>$output));
?>