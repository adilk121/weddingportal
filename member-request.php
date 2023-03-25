<?php 
ob_start();
require_once("includes/dbsmain.inc.php"); 
include("site-main-query.php");
date_default_timezone_set("asia/kolkata");
?>
<?php
if($_REQUEST['MemID']!=""){
$MemID=$_REQUEST['MemID'];

$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_to_mem_id='$userDATA[reg_id]' AND msg_from_mem_id='$MemID' ");

$checkReq2=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]' ");

if(!$checkReq && !$checkReq2){
$sql="INSERT INTO tbl_msg_box SET msg_to_mem_id='$MemID',msg_from_mem_id='$userDATA[reg_id]',msg_req_sent_date='".date("Y-m-d")."',msg_req_sent_time='".date("H:i:s")."',msg_status='Pending' ";
$res=db_query($sql);

if($res){
?>
<a class="btn no-radius mb5 f14" id="req_btn" href="Javascript:void(0)" onClick="alert('Request is already sent.')" ><i class="fa fa-spinner" id="req_icon" aria-hidden="true"></i> Request In Process</a>
<?php 
}
}
else{
$sql="UPDATE tbl_msg_box SET msg_status='Pending',msg_from_mem_id='$userDATA[reg_id]',msg_to_mem_id='$MemID' WHERE msg_id='$checkReq' ";
$res=db_query($sql);
if($res){
?>
<a class="btn no-radius mb5 f14" id="req_btn" href="Javascript:void(0)" onClick="alert('Request is already sent.')" ><i class="fa fa-spinner" id="req_icon" aria-hidden="true"></i> Request In Process</a>
<?php }
}

}
?>