<?php 
ob_start();

require_once("includes/dbsmain.inc.php"); 
include("site-main-query.php");
?>
<?php
if($_REQUEST['msgID']!=""){


//////////  MAKING Cancelled START ///////////
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];
$MemID=$_REQUEST['MemID'];

if($act=="Cancelled"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="UPDATE tbl_msg_box SET msg_status='$act' WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>
<?php

$sql="SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]')";
$checkReq=db_query($sql);
$recReq=mysqli_fetch_array($checkReq);

$countReq=mysqli_num_rows($checkReq);
$currStatus="";
$currMsgID="";

if($countReq>0){
$currStatus=$recReq['msg_status'];

}else{
////// CROSS CHECK ///////
$sql="SELECT * FROM tbl_msg_box WHERE (msg_from_mem_id='$MemID' AND msg_to_mem_id='$userDATA[reg_id]')";
$checkReq2=db_query($sql);
$recReq2=mysqli_fetch_array($checkReq2);
$countReq2=mysqli_num_rows($checkReq2);

if($countReq2>0){
$currStatus=$recReq2['msg_status'];
$currMsgID=$recReq2['msg_id'];
}else{
$currStatus="None";	
}

}

//echo $currStatus;
?>
<?php
$sql="SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]')";
$checkReq=db_query($sql);
$recReq=mysqli_fetch_array($checkReq);

$countReq=mysqli_num_rows($checkReq);
$currStatus="";
$currMsgID="";



if($countReq>0){
$currStatus=$recReq['msg_status'];
$currMsgID=$recReq['msg_id'];
}else{
////// CROSS CHECK ///////
$sql="SELECT * FROM tbl_msg_box WHERE (msg_from_mem_id='$MemID' AND msg_to_mem_id='$userDATA[reg_id]')";
$checkReq2=db_query($sql);
$recReq2=mysqli_fetch_array($checkReq2);
$countReq2=mysqli_num_rows($checkReq2);



if($countReq2>0){
$currStatus=$recReq2['msg_status'];
$currMsgID=$recReq2['msg_id'];
}else{
$currStatus="None";	
}

}

//echo $currMsgID;
//echo $currStatus;
?>

<?php 
  $sql_title=db_query("SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]') OR (msg_to_mem_id='$userDATA[reg_id]' AND msg_from_mem_id='$MemID')");
   $disp_title=mysqli_fetch_array($sql_title);
   if($disp_title['msg_status']=="Accepted"){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-link" style="color:#7ba76d;"></i> Connected</h4>
  <?php }else if($disp_title['msg_status']=="Pending" || $disp_title['msg_status']=="PendingAgain"){
   $cond=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$MemID' AND msg_to_mem_id='$userDATA[reg_id]')");
   if($cond!=0){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-user-plus" style="color:#7ba76d;"></i> Received Invitation</h4>
   <?php }else{?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-spinner" style="color:#7ba76d;"></i> Request In Process</h4>

<?php }}else if($disp_title['msg_status']=="Declined"){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-user-plus" style="color:#7ba76d;"></i> Received Invitation</h4>
<?php }else if($disp_title['msg_status']=="Cancelled"){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-paper-plane-o" style="color:#7ba76d;"></i> Send Invitation</h4>
<?php }else{?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-paper-plane-o" style="color:#7ba76d;"></i> Send Invitation</h4>
 <?php } ?> 
<br>

<?php if($currStatus!="None" && $currStatus=='Pending' || $currStatus=='PendingAgain' ){?>
<a href="Javascript:void(0)" onClick="alert('Request is already sent.')" class="btn btn-warning btn-sm no-radius ml5 mb5 f14"><i class="fa fa-check-circle" aria-hidden="true"></i> Request In Process</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Cancelled','<?=$MemID?>')" class="btn btn-danger btn-sm no-radius mb5 f14"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancel</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Reminder','<?=$MemID?>')" class="btn btn-primary btn-sm no-radius mb5 f14"><i class="fa fa-bell" aria-hidden="true"></i> Send Reminder</a>

<?php }else if($currStatus!="None" && $currStatus=='Cancelled'){?>
<a href="Javascript:void(0)" onClick="alert('Request is already cancelled by you.')" id="dcln" class="btn no-radius ml5 mb5 f14"><i class="fa fa-exclamation-triangle" id="dcln_icon" aria-hidden="true"></i> Cancelled</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Send-Again','<?=$MemID?>')" id="sndAgain_btn" class="btn no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" id="sndAgain_icon" aria-hidden="true">&nbsp;&nbsp;</i>Send Again</a>


<?php }else if($currStatus!="None" && $currStatus=='Accepted'){?>
<a href="Javascript:void(0)" onClick="alert('Request is already accepted')" class="btn btn-success btn-sm no-radius ml5 mb5 f14"><i class="fa fa-check-circle" aria-hidden="true"></i> Request Acceped</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Cancelled','<?=$MemID?>')" class="btn btn-danger btn-sm no-radius mb5 f14"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancel Request</a>

<?php }else{?>
<a href="Javascript:void(0)" onClick="send_request('<?=$MemID?>')" class="btn btn-primary btn-sm no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" aria-hidden="true">&nbsp;&nbsp;</i>Yes</a>
<?php }?>

<span class="text-success bold text-center" style="display:none" id="msg-other"><i class="fa fa-check font-black"></i> Request has been sent successfully.</span>

<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING Cancelled END ///////////
?>

<?php
//////////  MAKING Declined START ///////////
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];
$MemID=$_REQUEST['MemID'];

if($act=="Declined"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="UPDATE tbl_msg_box SET msg_status='$act' WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>
<?php

$sql="SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]')";
$checkReq=db_query($sql);
$recReq=mysqli_fetch_array($checkReq);

$countReq=mysqli_num_rows($checkReq);
$currStatus="";
$currMsgID="";

if($countReq>0){
$currStatus=$recReq['msg_status'];

}else{
////// CROSS CHECK ///////
$sql="SELECT * FROM tbl_msg_box WHERE (msg_from_mem_id='$MemID' AND msg_to_mem_id='$userDATA[reg_id]')";
$checkReq2=db_query($sql);
$recReq2=mysqli_fetch_array($checkReq2);
$countReq2=mysqli_num_rows($checkReq2);

if($countReq2>0){
$currStatus=$recReq2['msg_status'];
$currMsgID=$recReq2['msg_id'];
}else{
$currStatus="None";	
}

}

//echo $currStatus;
?>
<?php
$sql="SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]')";
$checkReq=db_query($sql);
$recReq=mysqli_fetch_array($checkReq);

$countReq=mysqli_num_rows($checkReq);
$currStatus="";
$currMsgID="";



if($countReq>0){
$currStatus=$recReq['msg_status'];
$currMsgID=$recReq['msg_id'];
}else{
////// CROSS CHECK ///////
$sql="SELECT * FROM tbl_msg_box WHERE (msg_from_mem_id='$MemID' AND msg_to_mem_id='$userDATA[reg_id]')";
$checkReq2=db_query($sql);
$recReq2=mysqli_fetch_array($checkReq2);
$countReq2=mysqli_num_rows($checkReq2);



if($countReq2>0){
$currStatus=$recReq2['msg_status'];
$currMsgID=$recReq2['msg_id'];
}else{
$currStatus="None";	
}

}

//echo $currMsgID;
//echo $currStatus;
?>
<?php 
  $sql_title=db_query("SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]') OR (msg_to_mem_id='$userDATA[reg_id]' AND msg_from_mem_id='$MemID')");
   $disp_title=mysqli_fetch_array($sql_title);
   if($disp_title['msg_status']=="Accepted"){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-link" style="color:#7ba76d;"></i> Connected</h4>
  <?php }else if($disp_title['msg_status']=="Pending" || $disp_title['msg_status']=="PendingAgain"){
   $cond=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$MemID' AND msg_to_mem_id='$userDATA[reg_id]')");
   if($cond!=0){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-user-plus" style="color:#7ba76d;"></i> Received Invitation</h4>
   <?php }else{?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-spinner" style="color:#7ba76d;"></i> Request In Process</h4>

<?php }}else if($disp_title['msg_status']=="Declined"){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-user-plus" style="color:#7ba76d;"></i> Received Invitation</h4>
<?php }else if($disp_title['msg_status']=="Cancelled"){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-paper-plane-o" style="color:#7ba76d;"></i> Send Invitation</h4>
<?php }else{?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-paper-plane-o" style="color:#7ba76d;"></i> Send Invitation</h4>
 <?php } ?> 
<br>

<?php if($currStatus!="None" && $currStatus=='Pending' || $currStatus=='PendingAgain' ){?>
<a href="Javascript:void(0)" onClick="alert('Request is already sent.')" class="btn btn-warning btn-sm no-radius ml5 mb5 f14"><i class="fa fa-check-circle" aria-hidden="true"></i> Request In Process</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Cancelled','<?=$MemID?>')" class="btn btn-danger btn-sm no-radius mb5 f14"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancel</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Reminder','<?=$MemID?>')" class="btn btn-primary btn-sm no-radius mb5 f14"><i class="fa fa-bell" aria-hidden="true"></i> Send Reminder</a>

<?php }else if($currStatus!="None" && $currStatus=='Cancelled'){?>
<a href="Javascript:void(0)" onClick="alert('Request is already cancelled by you.')" class="btn btn-danger btn-sm no-radius ml5 mb5 f14"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Cancelled</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Send-Again','<?=$MemID?>')"  class="btn btn-primary btn-sm no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" aria-hidden="true">&nbsp;&nbsp;</i>Send Again</a>

<?php }else if($currStatus!="None" && $currStatus=='Declined'){
$is_decl=db_scalar("SELECT is_declined_after_accept FROM tbl_msg_box WHERE (msg_from_mem_id='$MemID' AND msg_to_mem_id='$userDATA[reg_id]')");
$cond=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$MemID' AND msg_to_mem_id='$userDATA[reg_id]')");
if($cond!=0){
 if($is_decl=='Yes'){?>

<a class="btn no-radius mb5 f14" id="dcln" href="Javascript:void(0)" onClick="alert('You are declined the request')" ><i class="fa fa-exclamation-triangle" id="dcln_icon" aria-hidden="true"></i> Declined</a>
    <a class="btn no-radius mb5 f14" id="acpt_btn" href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Accepted','<?=$MemID?>','','')"><i class="fa fa-check" id="acpt_icon" aria-hidden="true"></i> Accept Again</a>
<?php }else if($is_decl=='No'){?>

<a class="btn no-radius mb5 f14" id="dcln" href="Javascript:void(0)" onclick="alert('Request is declined by you')" ><i class="fa fa-exclamation-triangle" id="dcln_icon" aria-hidden="true"></i> Declined</a>
<a class="btn no-radius mb5 f14" id="acpt_btn" href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Accepted','<?=$MemID?>','','')" ><i class="fa fa-check" id="acpt_icon" aria-hidden="true"></i> Accept</a>

<?php }}else{?>

<a href="Javascript:void(0)" id="dcln" onClick="alert('Request is declined by receiver')" class="btn no-radius ml5 mb5 f14"><i class="fa fa-check-circle" id="dcln_icon" aria-hidden="true"></i> Declined</a>

<a href="Javascript:void(0)" id="sndAgain_btn" onClick="change_status('<?=$currMsgID?>','Send-Again','<?=$MemID?>','','')"  class="btn no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" id="sndAgain_icon" aria-hidden="true">&nbsp;&nbsp;</i>Send Again</a>

<?php }?>


<?php }else if($currStatus!="None" && $currStatus=='Accepted'){?>
<a href="Javascript:void(0)" onClick="alert('Request is already accepted')" class="btn btn-success btn-sm no-radius ml5 mb5 f14"><i class="fa fa-check-circle" aria-hidden="true"></i> Request Acceped</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Cancelled','<?=$MemID?>')" class="btn btn-danger btn-sm no-radius mb5 f14"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancel Request</a>

<?php }else{?>
<a href="Javascript:void(0)" onClick="send_request('<?=$MemID?>')" class="btn btn-primary btn-sm no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" aria-hidden="true">&nbsp;&nbsp;</i>Yes</a>
<?php }?>

<span class="text-success bold text-center" style="display:none" id="msg-other"><i class="fa fa-check font-black"></i> Request has been sent successfully.</span>

<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING Declined END ///////////
?>

<?php
//////////  Send Again START ///////////
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Send-Again"){
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");
$act="PendingAgain";

if($checkReq){
$sql="UPDATE tbl_msg_box SET msg_status='$act' WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>
<?php
$sql="SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]')";
$checkReq=db_query($sql);
$recReq=mysqli_fetch_array($checkReq);

$countReq=mysqli_num_rows($checkReq);
$currStatus="";
$currMsgID="";



if($countReq>0){
$currStatus=$recReq['msg_status'];
$currMsgID=$recReq['msg_id'];
}else{
////// CROSS CHECK ///////
$sql="SELECT * FROM tbl_msg_box WHERE (msg_from_mem_id='$MemID' AND msg_to_mem_id='$userDATA[reg_id]')";
$checkReq2=db_query($sql);
$recReq2=mysqli_fetch_array($checkReq2);
$countReq2=mysqli_num_rows($checkReq2);



if($countReq2>0){
$currStatus=$recReq2['msg_status'];
$currMsgID=$recReq2['msg_id'];
}else{
$currStatus="None";	
}

}

//echo $currMsgID;
//echo $currStatus;
?>
<?php 
  $sql_title=db_query("SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]') OR (msg_to_mem_id='$userDATA[reg_id]' AND msg_from_mem_id='$MemID')");
   $disp_title=mysqli_fetch_array($sql_title);
   if($disp_title['msg_status']=="Accepted"){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-link" style="color:#7ba76d;"></i> Connected</h4>
  <?php }else if($disp_title['msg_status']=="Pending" || $disp_title['msg_status']=="PendingAgain"){
   $cond=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$MemID' AND msg_to_mem_id='$userDATA[reg_id]')");
   if($cond!=0){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-user-plus" style="color:#7ba76d;"></i> Received Invitation</h4>
   <?php }else{?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-spinner" style="color:#7ba76d;"></i> Request In Process</h4>

<?php }}else if($disp_title['msg_status']=="Declined"){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-user-plus" style="color:#7ba76d;"></i> Received Invitation</h4>
<?php }else if($disp_title['msg_status']=="Cancelled"){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-paper-plane-o" style="color:#7ba76d;"></i> Send Invitation</h4>
<?php }else{?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-paper-plane-o" style="color:#7ba76d;"></i> Send Invitation</h4>
 <?php } ?> 
<br>

<?php if($currStatus!="None" && $currStatus=='Pending' || $currStatus=='PendingAgain' ){?>

<a href="Javascript:void(0)" id="dcln" onClick="change_status('<?=$currMsgID?>','Cancelled','<?=$MemID?>')" class="btn no-radius mb5 f14"><i class="fa fa-times-circle" id="dcln_icon" aria-hidden="true"></i> Cancel</a>

<a href="Javascript:void(0)" id="sndR_btn" onClick="change_status('<?=$currMsgID?>','Reminder','<?=$MemID?>')" class="btn no-radius mb5 f14"><i class="fa fa-bell" id="sndR_icon" aria-hidden="true"></i> Send Reminder</a>

<?php }else if($currStatus!="None" && $currStatus=='Cancelled'){?>
<a href="Javascript:void(0)" onClick="alert('Request is already cancelled by you.')" class="btn btn-danger btn-sm no-radius ml5 mb5 f14"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Cancelled</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Send-Again','<?=$MemID?>')"  class="btn btn-primary btn-sm no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" aria-hidden="true">&nbsp;&nbsp;</i>Send Again</a>


<?php }else if($currStatus!="None" && $currStatus=='Accepted'){?>
<a href="Javascript:void(0)" onClick="alert('Request is already accepted')" class="btn btn-success btn-sm no-radius ml5 mb5 f14"><i class="fa fa-check-circle" aria-hidden="true"></i> Request Acceped</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Cancelled','<?=$MemID?>')" class="btn btn-danger btn-sm no-radius mb5 f14"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancel Request</a>

<?php }else{?>
<a href="Javascript:void(0)" onClick="send_request('<?=$MemID?>')" class="btn btn-primary btn-sm no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" aria-hidden="true">&nbsp;&nbsp;</i>Yes</a>
<?php }?>

<span class="text-success bold text-center" style="display:none" id="msg-other"><i class="fa fa-check font-black"></i> Request has been sent successfully.</span>


<?php 
}else{
echo "0";		
}

}

}
//////////  Send Again END ///////////
}
?>






<!-- Accepted Start -->

<?php
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];
$receive=$_REQUEST['receive'];
$memm=$_REQUEST['memm'];
if($act=="Accepted"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="UPDATE tbl_msg_box SET msg_status='$act',is_declined_after_accept='Yes' WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>
<?php
$sql="SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]')";
$checkReq=db_query($sql);
$recReq=mysqli_fetch_array($checkReq);

$countReq=mysqli_num_rows($checkReq);
$currStatus="";
$currMsgID="";



if($countReq>0){
$currStatus=$recReq['msg_status'];
$currMsgID=$recReq['msg_id'];
}else{
////// CROSS CHECK ///////
$sql="SELECT * FROM tbl_msg_box WHERE (msg_from_mem_id='$MemID' AND msg_to_mem_id='$userDATA[reg_id]')";
$checkReq2=db_query($sql);
$recReq2=mysqli_fetch_array($checkReq2);
$countReq2=mysqli_num_rows($checkReq2);



if($countReq2>0){
$currStatus=$recReq2['msg_status'];
$currMsgID=$recReq2['msg_id'];
}else{
$currStatus="None";	
}

}

//echo $currMsgID;
//echo $currStatus;
?>
<?php 
  $sql_title=db_query("SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]') OR (msg_to_mem_id='$userDATA[reg_id]' AND msg_from_mem_id='$MemID')");
   $disp_title=mysqli_fetch_array($sql_title);
   if($disp_title['msg_status']=="Accepted"){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-link" style="color:#7ba76d;"></i> Connected</h4>
  <?php }else if($disp_title['msg_status']=="Pending" || $disp_title['msg_status']=="PendingAgain"){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-link" style="color:#7ba76d;"></i> Received Invitation</h4>
<?php } ?>
<br>
<?php if($currStatus!="None" && $currStatus=='Pending' || $currStatus=='PendingAgain' ){?>
<a href="Javascript:void(0)" onClick="alert('Request is already sent.')" class="btn btn-warning btn-sm no-radius ml5 mb5 f14"><i class="fa fa-check-circle" aria-hidden="true"></i> Request In Process</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Cancelled','<?=$MemID?>')" class="btn btn-danger btn-sm no-radius mb5 f14"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancel</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Reminder','<?=$MemID?>')" class="btn btn-primary btn-sm no-radius mb5 f14"><i class="fa fa-bell" aria-hidden="true"></i> Send Reminder</a>

<?php }else if($currStatus!="None" && $currStatus=='Cancelled'){?>
<a href="Javascript:void(0)" onClick="alert('Request is already cancelled by you.')" class="btn btn-danger btn-sm no-radius ml5 mb5 f14"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Cancelled</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Send-Again','<?=$MemID?>')"  class="btn btn-primary btn-sm no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" aria-hidden="true">&nbsp;&nbsp;</i>Send Again</a>


<?php }else if($currStatus!="None" && $currStatus=='Accepted'){
$cond=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$MemID' AND msg_to_mem_id='$userDATA[reg_id]')");
if($cond!=0){?>
<a href="Javascript:void(0)" onClick="alert('Request is already accepted')" id="snd_msg" class="btn no-radius ml5 mb5 f14" style="width: 49%; padding: 10px;"><i class="fa fa-envelope" id="msg_icon" aria-hidden="true"></i> Send Message</a>

<a href="other-profile.php?mem=<?=$MemID?>" id="dcln" onClick="change_status('<?=$currMsgID?>','Declined','<?=$MemID?>')" class="btn btn-danger no-radius mb5 f14" style="width: 49%; padding: 10px;"><i class="fa fa-times-circle" id="dcln_icon" aria-hidden="true"></i> Decline Request</a>

<?php }else{ ?>
<a href="Javascript:void(0)" onClick="alert('Request is already accepted')" id="snd_msg" class="btn no-radius ml5 mb5 f14" style="width: 49%; padding: 10px;"><i class="fa fa-envelope" id="msg_icon" aria-hidden="true"></i> Send Message</a>

<a href="Javascript:void(0)" id="dcln" onClick="change_status('<?=$currMsgID?>','Cancelled','<?=$MemID?>','','')" class="btn no-radius mb5 f14" style="width: 49%; padding: 10px;"><i class="fa fa-times-circle" id="dcln_icon" aria-hidden="true"></i> Cancel Request</a>

<?php }}else{?>
<a href="Javascript:void(0)" onClick="send_request('<?=$MemID?>')" class="btn btn-primary btn-sm no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" aria-hidden="true">&nbsp;&nbsp;</i>Yes</a>
<?php }?>

<span class="text-success bold text-center" style="display:none" id="msg-other"><i class="fa fa-check font-black"></i> Request has been sent successfully.</span>


<?php 
}else{
echo "0";		
}

}

}

?>

<!-- Accepted End -->

<?php

//////////  Send Reminder Start ///////////

$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Reminder"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");
$checkDate=db_scalar("SELECT msg_req_sent_date FROM tbl_msg_box WHERE msg_id='$msgID'");
if($checkReq){
$counter=1;	
$curr_date=date("Y-m-d");

$date1=date_create($curr_date);
$date2=date_create($checkDate);
$diff=date_diff($date1,$date2);
$date_val=$diff->format("%a");
if($date_val==0){
echo "You can not send a reminder to this profile until 24 hours from interest sent";
}
else{	
$sql="UPDATE tbl_msg_box SET msg_req_sent_date='$curr_date',is_reminder='Yes',reminder_counter=reminder_counter+$counter WHERE msg_id='$msgID' ";
$res=db_query($sql);
echo "Reminder sent";
}
}}
?>


