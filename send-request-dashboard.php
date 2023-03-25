<?php 
ob_start();
require_once("includes/dbsmain.inc.php"); 
include("site-main-query.php");
?>
<?php
if($_REQUEST['MemID']!=""){

$MemID=$_REQUEST['MemID'];


$sql="SELECT msg_id FROM tbl_msg_box WHERE msg_to_mem_id='$MemID' AND msg_from_mem_id='$userDATA[reg_id]' ";
$checkReq=db_scalar($sql);

if($checkReq){
echo "0";	
}else{

$sql="INSERT INTO tbl_msg_box SET msg_to_mem_id='$MemID',msg_from_mem_id='$userDATA[reg_id]',msg_req_sent_date='".date("Y-m-d")."',msg_req_sent_time='".date("H:i:s")."',msg_status='Pending' ";
$res=db_query($sql);	
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

$sql="SELECT * FROM tbl_registration WHERE reg_id='$MemID'";
$dataMem=db_query($sql);
$recMem=mysqli_fetch_array($dataMem);
?>

<?php if($currStatus!="None" && $currStatus=='Pending'){?>

R<?=$recMem['reg_id']?>  | <?=$recMem['reg_age']?>  Yrs, <?=$recMem['reg_height']?><br>
<a target="_blank" href="Javascript:void(0)" onClick="alert('Interest is sent successfully.')" class="snd-inv"><i class="fa fa-check" aria-hidden="true"></i>
 Interest Sent</a>
<?php }else if($currStatus!="None" && $currStatus=='Declined'){?>

R<?=$recMem['reg_id']?>  | <?=$recMem['reg_age']?>  Yrs, <?=$recMem['reg_height']?><br>
<a target="_blank" href="Javascript:void(0)" onClick="alert('Interest is decliend by you.')" class="snd-inv"><i class="fa fa-check" aria-hidden="true"></i>
 Interest Sent</a>
<?php }else if($currStatus!="None" && $currStatus=='Accepted'){?>

R<?=$recMem['reg_id']?>  | <?=$recMem['reg_age']?>  Yrs, <?=$recMem['reg_height']?><br>
<a target="_blank" href="Javascript:void(0)" onClick="alert('Request is already accepted')" class="snd-inv"><i class="fa fa-check" aria-hidden="true"></i>
 Request Accepted</a>
 
<?php }else{?> 

R<?=$recMem['reg_id']?>  | <?=$recMem['reg_age']?>  Yrs, <?=$recMem['reg_height']?><br>
<a target="_blank" href="Javascript:void(0)" onClick="send_request('<?=$recMem['reg_id']?>')" class="snd-inv">Send Interest</a>
<?php }?>


<?php 


}
}
?>






