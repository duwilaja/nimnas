<?php
include "inc.common.php";
include "inc.session.php";


include "inc.db.php";


$conn=connect();
$tick=get("t",$conn);

$his=array();

$rs=fetch_alla(exec_qry($conn,"select * from tick_ets where ticketno='$tick'"));
if(count($rs)>0){
	$his=fetch_alla(exec_qry($conn,"select * from tick_note where ticketno='$tick' order by dtm"));
}
disconnect($conn);

if(count($rs)<1) die("Data not found");

//header('Content-Disposition: attachment; filename="'.$tick.'.xls"');
//header("Content-Type: application/vnd.ms-excel");
?>
<html>
<head><title>Ticket# <?php echo $tick?></title>
<body>
<button type="button" onclick="CreatePDFfromHTML();">Save As PDF</button>
<div id="prin">
<h3>Ticket</h3>
<table width="50%">
<tr><td>#</td><td><?php echo $tick?></td></tr>
<tr><td>Subject</td><td><?php echo $rs[0]["h"]?></td></tr>
<tr><td>Detail</td><td><?php echo $rs[0]["d"]?></td></tr>
<tr><td>Status</td><td><?php echo $rs[0]["stts"]?></td></tr>
<tr><td>Reported</td><td><?php echo $rs[0]["dtm"]?></td></tr>
<tr><td>Category</td><td><?php echo $rs[0]["cat"]?></td></tr>
<tr><td>Service</td><td><?php echo $rs[0]["svc"]?></td></tr>
</table>

<h4>History</h4>
<table width="80%" border="1" cellspacing="0">
<tr><td>Date/Time</td><td>Note</td><td>By</td><td>Status</td><td>Attc</td></tr>
<?php 
for($i=0;$i<count($his);$i++){
?>
<tr><td><?php echo $his[$i]["dtm"]?></td><td><?php echo $his[$i]["notes"]?></td>
<td><?php echo $his[$i]["updby"]?></td><td><?php echo $his[$i]["stts"]?></td>
<td>
<?php if($his[$i]["attc"]!=''){?>
	<img height="200px" src="tickattc/<?php echo $his[$i]["attc"] ?>" />
<?php }?>
</td></tr>
<?php }?>
</table>
</div>

<?php 
include "inc.js.php";
?>

<script type="text/javascript" src="vendor/pdf/jspdf.min.js"></script>
<script type="text/javascript" src="vendor/pdf/html2canvas.js"></script>

<script>

//Create PDf from HTML...
function CreatePDFfromHTML() {
	
    var HTML_Width = $("#prin").width();
    var HTML_Height = $("#prin").height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width + (top_left_margin * 2);
    var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    html2canvas($("#prin")[0]).then(function (canvas) {
        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
        for (var i = 1; i <= totalPDFPages; i++) { 
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
        }
        pdf.save("<?php echo $tick?>.pdf");
        //$(".html-content").hide();
    });
}

</script>

</body>
</html>
