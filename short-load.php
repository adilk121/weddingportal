<?php 
ob_start();
require_once("includes/dbsmain.inc.php"); 
include("site-main-query.php");
$msgid=$_GET['msgid'];
$memid=$_GET['memid'];
$userid=$_GET['userid'];
  $sql_title3=db_query("SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$memid' AND msg_from_mem_id='$userid') OR (msg_to_mem_id='$userid' AND msg_from_mem_id='$memid')");
   $disp_title3=mysqli_fetch_array($sql_title3);
   if($disp_title3['msg_status']!="Accepted"){
    $sql="SELECT sl_id FROM tbl_shortlist WHERE sl_mem='$memid' AND sl_by='$userid'";
    $checkShort=db_scalar($sql);
    if($checkShort!=""){
    ?>
    <a href="Javascript:void(0)" onClick="alert('Profile Shortlisted Already.')"><i class="fa fa-list-alt" data-toggle="tooltip" data-placement="right" title="Shortlisted" style="font-size:18px; color:#03c1ed"></i></a>
    <?php }else{?>
    <a href="Javascript:void(0)" onClick="short_request('<?=$recMember['reg_id']?>')" ><i class="fa fa-list-alt" data-toggle="tooltip" data-placement="right" title="Short" style="font-size:18px; color:#03c1ed"></i></a>
    <?php }}?>