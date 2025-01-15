<?php 
include "inc.common.php";
include "inc.session.php";

$tick=$_GET["id"];

$page_icon="fa fa-home";
$page_title="History Ticket #$tick";
$modal_title="Note";
$menu="tickhis";

$breadcrumb="Ticket/History";

include "inc.head.php";
//include "inc.menutop.php";
include "inc.db.php";

$conn=connect();
$sql="select DATE_FORMAT(dtm,'%a, %e %b') as d,DATE_FORMAT(dtm,'%H:%i') as t,uname,uavatar,notes,stts,attc,n.rowid 
from tick_note n left join core_user u on u.uid=n.updby where ticketno='$tick' order by dtm desc";
$recs=fetch_alla(exec_qry($conn,$sql));
disconnect($conn);
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
							<div class="d-flex">
								<a target="_blank" href="tickdown<?php echo $ext?>?t=<?php echo $tick?>" class="btn btn-primary"> <i class="fe fe-download-cloud me-2"></i> Download </a>
							</div>
						</div>
						<!--End Page header-->
						
						<ul class="notification">
						<?php foreach($recs as  $rec){?>
							<li>
								<div class="notification-time text-white"> <span class="date"><?php echo $rec['d']?></span> <span class="time"><?php echo $rec['t']?></span> </div> 
								<div class="notification-icon">
								<?php if($s_LVL==0){
	echo '<a href="#" title="Open" onclick="$(\'#modalku\').modal(\'show\'); openForm(\''.$menu.'\',\''.$rec['rowid'].'\');"></a>';
								}else{
								echo '<a href="javascript:void(0);"></a>';
								}?>
								</div> 
								<div class="notification-time-date mb-2 d-block d-md-none text-white"> 
									<span class="date"><?php echo $rec['d']?></span> <span class="time ms-2"><?php echo $rec['t']?></span> 
								</div> 
								<div class="notification-body"> 
									<div class="media mt-0"> 
										<div class="avatar-md">
											<img alt="avatar" class="rounded-6" src="avatars/<?php echo ($rec['uavatar']=='')?'logo.jpg':$rec['uavatar'];?>">
										</div> 
										<div class="media-body ms-3 d-flex"> 
											<div class=""> 
												<p class="tx-14 text-dark mb-0 tx-semibold"><?php echo $rec['uname']?></p>
												<p class="mb-0 tx-13 text-muted"><?php echo $rec['notes']?></p><br />
												<p><?php if($rec['attc']<>'') echo '<img src="tickattc/'.$rec['attc'].'" />';?></p>
											</div> 
											<div class="notify-time"> <p class="mb-0 tx-11 <?php echo $rec['stts']?>x"><?php echo $rec['stts']?></p></div> 
										</div> 
									</div> 
								</div> 
							</li>
						<?php }?>
						</ul>
						
					</div>
				</div><!-- end app-content-->
				
<!-- Modal Batch -->
<div class="modal fade modal_form" id="modalku" tabindex="10" role="dialog" aria-labelledby="formModalLabelBatch" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModalLabelBatch"><?php echo $modal_title ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!--div class="card"-->
					<form class="form-horizontal" id="myf">
					<input type="hidden" name="rowid" id="rowid" value="0">
					<input type="hidden" name="mnu" value="<?php echo $menu?>">
					<input type="hidden" id="sv" name="sv" />
					<input type="hidden" name="cols" value="dtm" />
					<input type="hidden" name="tname" value="tick_note" />
					<input type="hidden" id="attc" name="attc" />
					
				<div class="row mb-3 hideme">
					<div class="form-group col-md-6">
						<label>Date/Time</label>
						<input type="text" id="dtm" name="dtm" placeholder="..." class="form-control datetimepicker">
					</div>
					<div class="form-group col-md-6">
						<label>Attachment</label>
						<input type="file" id="fattc" name="fattc" placeholder="..." class="form-control">
					</div>
				</div>

						
					</form>
				<!--/div-->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" id="bdel"  onclick="sendDataFile('DEL');">Delete</button>
				<button type="button" class="btn btn-success" onclick="saveData();">Save</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- End Modal Batch -->

				
			<!-- Main Content-->
			<div class="main-content side-content pt-0">
<?php 
include "inc.foot.php";
include "inc.js.php";
?>
<script>
var jvalidate;
$(document).ready(function(){
	page_ready();
	
	jvalidate = $("#myf").validate({
    ignore: ":hidden:not(.selectpicker)",
	rules :{
		"dtm" : {
			required : true
		}
    }});
	datetimepicker();
	
})
</script>

  </body>
</html>