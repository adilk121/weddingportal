<?php 
ob_start();
require_once("includes/dbsmain.inc.php"); 
include("site-main-query.php");
?>
<?php
if($_REQUEST['MemID']!=""){

$MemID=$_REQUEST['MemID'];

$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_to_mem_id='$userDATA[reg_id]' AND msg_from_mem_id='$MemID' ");

$checkReq2=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]' ");
?>
<!-- /*$sql="SELECT msg_id FROM tbl_msg_box WHERE msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]' ";
$checkReq=db_scalar($sql);*/ -->

<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-spinner" style="color:#7ba76d;"></i> Request In Process</h4>
<br>
<?php
if(!$checkReq && !$checkReq2){
$sql="INSERT INTO tbl_msg_box SET msg_to_mem_id='$MemID',msg_from_mem_id='$userDATA[reg_id]',msg_req_sent_date='".date("Y-m-d")."',msg_req_sent_time='".date("H:i:s")."',msg_status='Pending' ";
$res=db_query($sql);
if($res){
	$id=db_scalar("SELECT MAX(msg_id) FROM tbl_msg_box");
?>

<a href="Javascript:void(0)" id="dcln" onClick="change_status('<?=$id?>','Cancelled','<?=$MemID?>','','')" class="btn no-radius mb5 f14"><i class="fa fa-times-circle" id="dcln_icon" aria-hidden="true"></i> Cancel</a>

<a href="Javascript:void(0)" id="sndR_btn" onClick="change_status('<?=$id?>','Reminder','<?=$MemID?>','','')" class="btn no-radius mb5 f14"><i class="fa fa-bell" id="sndR_icon" aria-hidden="true"></i> Send Reminder</a>
<?php 
}
}
else{
$sql="UPDATE tbl_msg_box SET msg_status='Pending',msg_from_mem_id='$userDATA[reg_id]',msg_to_mem_id='$MemID' WHERE msg_id='$checkReq' ";
$res=db_query($sql);
if($res){
?>

<a href="Javascript:void(0)" id="dcln" onClick="change_status('<?=$checkReq?>','Cancelled','<?=$MemID?>','','')" class="btn no-radius mb5 f14"><i class="fa fa-times-circle" id="dcln_icon" aria-hidden="true"></i> Cancel</a>

<a href="Javascript:void(0)" id="sndR_btn" onClick="change_status('<?=$checkReq?>','Reminder','<?=$MemID?>','','')" class="btn no-radius mb5 f14"><i class="fa fa-bell" id="sndR_icon" aria-hidden="true"></i> Reminder</a>
<?php }
}}?>

