<?php require_once("includes/dbsmain.inc.php");?>
<?php include("site-main-query.php");
if(empty($_SESSION['userLoginId'])){
  header("location:index.html"); 
  exit;
}
$check_user=db_scalar("select reg_id from tbl_registration where reg_id='$_SESSION[userLoginId]' ");
$check_user_status=db_scalar("select reg_status from tbl_registration where reg_id='$_SESSION[userLoginId]' ");
if(empty($check_user) || $check_user_status=="Inactive"){
    unset($_SESSION['userLoginId'],$_SESSION['userLoginName']);
    session_destroy();
    header("location:index.php");
    exit;
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>ApniMatrimony</title>
<meta name="robots" content="index, follow" />
<link href="<?=SITE_WS_PATH?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style1.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/responsive.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style-res-nav.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/other-profile-style.css" rel="stylesheet">
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/style-client.css">
<link href="<?=SITE_WS_PATH?>/css/style-res-nav.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/jPushMenu.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/jquery.fancybox.css" rel="stylesheet">
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/style-customizer-rgt.css"/>
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/style-social-1.css">
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/font-awesome/css/font-awesome.min.css">
<link href="<?=SITE_WS_PATH?>/css/collapsible1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/styd1.css">
<style>
	.brd-rg{border-right:dotted 1px #efefef;}
	.mp03 {}
.pl-btn-gry a{display:block; background-color:#f1f1f2; color:#000; font-size:14px; padding:0px 2px; border:solid 1px #eaeaeb; text-align:center; transition:all 1.5s;  width:99%; transition:all 1.5s;}
/************
.molcht{color:#fff; transition:all 1.5s; padding:2px 6px; background-color:#056cbc;  transition:all 1.5s;  border:solid 1px #056cbc;}

.molcht:hover{color:#056cbc; transition:all 1.5s; border:solid 1px #056cbc; background-color:#fff;  transition:all 1.5s;}
************************/

.frmst0d p {
    position: relative;
    top: 5px !important;
    font-size: 14px;
    line-height: 15px;
    padding: 4px 0 4px 0!important;
}
	.mpp-rfol-sty{height:200px; width: 100%; border:solid 1px #ccc;  vertical-align: middle; display: table-cell; background-color: #efefef; padding:5px !important; margin-bottom:5px !important;}
	.txt-rg{text-align: right;}
	.onlsty-prls{font-size:12px; margin:0px; padding:4px;}
	.mpp-rfol-sty img{height:auto; width:auto;}
	.bg-pro1{height: 360px; overflow: auto;}
	.pd01 {
    padding-top: 10px;
    height: 60px;
}
	@media (min-width:320px) and (max-width:767px) 
{
	.pd01 {
    height: auto;}
	.mp-mypr{margin:0px; padding: 0px;}
	.mp03 {
    margin-right:0px !important;
}
	.bg-pro1{height:auto;}
	.brd-rg{border-right:dotted 0px #efefef;}
	.mpp-rfol-sty {/***height:150px;****/ height:100%}
	.txt-rg{text-align: left;}
	#req_load_area115{margin: 0px; padding:5px; position: relative; left: -5px;}
	.mp-btm1 {
    padding-top: 10px !important;
}
}
</style>

</head>
<body>
<?php if($_SESSION['userLoginId']==""){?>
<div id="myModal" class="modal">
<div class="modal-content" id="img01">
<div class="col-md-8 col-md-offset-2 bg_pof">
<h2 class="bg-clrd_f">Let's set up your account, while
we find Matches for you!<span class="close">&times;</span></h2>
<div class="col-md-12">
<form method="post" class="dzForm" action="#">
<input type="hidden" value="Contact" name="dzToDo" >
<div class="row">
<div class="col-md-12">
<div class="form-group">
<div class="input-group">
<p>Create Profile for</p>
<select class="form-control">
<option>----Select----</option>
<option>Son</option>
<option>Daughter</option>
<option>Brother</option>
<option>Sister</option>
<option>---Show More----</option>
</select>
</div>
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<div class="input-group"> 
<p>Mobile No.</p>
<input name="" type="email" class="form-control" required  placeholder="Phone" >
</div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<div class="input-group">
<p>Enter your email id</p>
<input name="" type="text" required class="form-control" placeholder="Your Email Id">
</div>
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<div class="input-group">
<p>Create a Password</p>
<input name="" type="password" required class="form-control" placeholder="Password">
</div>
</div>
</div>
<div class="col-md-12 text-center">
<button name="" type="submit" value="" class="site-button1"> <span>Continue</span> </button>
</div>
<div class="col-md-12 text-center">
<p> Already a Member? <a href="">Login</a></p>
</div>
</div>
</form>
</div>

</div>

</div>
</div>
<?php }?>

<div style="position:absolute; z-index:-0; width:100%;">
<div class="page-wrapper" id="myImg">
  <!--<div class="preloader"></div>-->
  
<?php include("site-header-login.php");?>  

<section class="bg-sec-sty">
    <div class="container">
       <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mp_pro mp-mypr">
          <?php include("member-filters-left.php");?>
        </div>
        <!--------->
         <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp_pro">
         
<?php
$mainCond="";
$cond1="";
$cond2="";
$cond3="";
$cond4="";
$cond5="";
$gender="";

if($userDATA['reg_gender']=="Male"){
$gender="Female";	
}
if($userDATA['reg_gender']=="Female"){
$gender="Male";	
}

$reg_preference_marital_status=mysqli_escape_string($GLOBALS['dbcon'],$userDATA['reg_preference_marital_status']);

$cond1="reg_gender='$gender'";	

$cond2=" reg_age LIKE '%$userDATA[reg_preference_age]'";	

$cond3=" AND reg_marital_status='$reg_preference_marital_status'";	

$cond4=" reg_religion ='$userDATA[reg_preference_religion]'";	

$cond5=" AND reg_state_name ='$userDATA[reg_preference_state_name]'";	

$cond6=" reg_height ='$userDATA[reg_preference_height]'";

$cond7=" reg_country_name IN('$userDATA[reg_preference_country_name]')";

$cond8=" OR reg_appearance ='$userDATA[reg_preference_appearance]'";

$cond9=" OR reg_physical_status ='$userDATA[reg_preference_physical_status]'";

$cond10=" OR reg_eating_habits ='$userDATA[reg_preference_eating_habits]'";

$mainCond="AND $cond1 AND $cond4";

$sql="SELECT * FROM tbl_registration WHERE reg_status='Active' $mainCond";

$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
while($recMember=mysqli_fetch_array($dataMember)){	
?>       
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-pro1">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-lstd1" style="margin:0px; padding:0px;">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 " style="margin:0px; padding:0px;">
<?php if($_SESSION['userLoginId']!=""){?>
<a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank"><h4> 
<span class="pcid">AMRGD<?=$recMember['reg_id']?> | Profile Created for <?=$recMember['reg_for']?></span></h4></a>
<?php
}else{
?>
<a href="Javascript:void(0)" class="molcht" ><h4><span class="pcid">
<?="AM".substr(strtoupper($recMember['reg_name']),0,2)?><span class="custom-star">****</span> | Profile Created for <?=$recMember['reg_for']?></span></h4></a>
<?php 
}
?>

</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 txt-rg">
<a <?php if($_SESSION['userLoginId']!=""){?> href="other-profile.php?mem=<?=$recMember['reg_id']?>" <?php }else{?> class="molcht" <?php }?> target="_blank"><h4><i class="fa fa-mobile"></i> +91-xxxxxxxxxx</h4></a>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:10px 0px 0px 0px; background-color:#fff; margin:0px;">

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mp-btm1 text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mpp-rfol-sty text-center">

    <?php 
      $check_photo=$recMember['reg_profile_photo'];
      if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
      <img src="<?=SITE_WS_PATH?>/images/1.ico">
     <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
      <img src="<?=SITE_WS_PATH?>/images/2.png">
     <?php }else{?>
<img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>">
     <?php }?>

</div>

<p class="onlsty-prls">Last Login On <?=date("d-M-y",strtotime($recMember['reg_last_login']))?></p>
<!-- <p style="margin:0px; padding:0px;"><a href="#" class="molcht"><i class="fa fa-commenting-o" aria-hidden="true"></i> Member Online</a></p>-->
</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp-btm1">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp-btm1 brd-rg">
<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5  prf-dtl">Age</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">:</div>
<div class="col-lg-6 col-md-6 col-sm-5 col-xs-5  prf-dtl2"><?=$recMember['reg_age']?>yrs</div>
<div class="clearfix"></div>

<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5  prf-dtl">Height</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">:</div>
<?php 
$user_height=$recMember['reg_height'];
?>
<div class="col-lg-6 col-md-6 col-sm-5 col-xs-5 prf-dtl2"><?=str_replace(".", "'", $user_height)?>" (<?=number_format($recMember['reg_height']*30.48,0)?>cm)</div>
<div class="clearfix"></div>

<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5  prf-dtl">Religion</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">:</div>
<div class="col-lg-6 col-md-6 col-sm-5 col-xs-5 prf-dtl2"><?=$recMember['reg_religion']?></div>
<div class="clearfix"></div>

<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5  prf-dtl">Caste</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">:</div>
<div class="col-lg-6 col-md-6 col-sm-5 col-xs-5 prf-dtl2"><?=$recMember['reg_cast']?></div>
<div class="clearfix"></div>

<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5  prf-dtl">Location</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">:</div>
<div class="col-lg-6 col-md-6 col-sm-5 col-xs-5 prf-dtl2"><?=$recMember['reg_state_name']?>, <?=$recMember['reg_country_name']?></div>
<div class="clearfix"></div>


<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 prf-dtl">Education</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">:</div>
<div class="col-lg-6 col-md-6 col-sm-5 col-xs-5 prf-dtl2"><?=$recMember['reg_highest_edu']?></div>
<div class="clearfix"></div>

<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 prf-dtl">Profession</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">:</div>
<div class="col-lg-6 col-md-6 col-sm-5 col-xs-5 prf-dtl2"><?=$recMember['reg_occupation']?></div>
<div class="clearfix"></div>

<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 prf-dtl">Annual Income</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">:</div>
<div class="col-lg-6 col-md-6 col-sm-5 col-xs-5 prf-dtl2"><?=$recMember['reg_member_annual_income']?></div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top:10px;">

<div class="clearfix"></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-btn-gry"><a href="#"><i class="fa fa-envelope"></i> Send Mail</a></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-btn-gry" style="margin-right:0px;"><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank"><i class="fa fa-volume-control-phone"></i> View Contact</a></div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-btn-gry">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="short_req_load_area<?=$recMember['reg_id']?>" >

<?php
$sql="SELECT sl_id FROM tbl_shortlist WHERE sl_mem='$recMember[reg_id]' AND sl_by='$userDATA[reg_id]'";
$checkShort=db_scalar($sql);
if($checkShort!=""){
?>
<a href="Javascript:void(0)" onClick="alert('Request is already sent.')" ><i class="fa fa-check" aria-hidden="true"></i> Shorted</a>
<?php }else{?>
<a href="Javascript:void(0)" onClick="short_request('<?=$recMember['reg_id']?>')" ><i class="fa fa-star" aria-hidden="true"></i> Short List</a>
<?php }?>

</div>


</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-btn-gry" style="margin-right:0px;"><a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>"><i class="fa fa-eye-slash" aria-hidden="true"></i> View Full Profile</a></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-btn-gry" style="width:100%;"><a href="#" class="molcht"><i class="fa fa-commenting-o" aria-hidden="true"></i> Member Online Chat Now</a></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="req_load_area<?=$recMember['reg_id']?>" >

<?php
$sql="SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$recMember[reg_id]' AND msg_from_mem_id='$userDATA[reg_id]')";
$checkReq=db_query($sql);
$recReq=mysqli_fetch_array($checkReq);

$countReq=mysqli_num_rows($checkReq);
$currStatus="";

if($countReq>0){
$currStatus=$recReq['msg_status'];
}else{
////// CROSS CHECK ///////
$sql="SELECT * FROM tbl_msg_box WHERE (msg_from_mem_id='$recMember[reg_id]' AND msg_to_mem_id='$userDATA[reg_id]')";
$checkReq2=db_query($sql);
$recReq2=mysqli_fetch_array($checkReq2);
$countReq2=mysqli_num_rows($checkReq2);

if($countReq2>0){
$currStatus=$recReq2['msg_status'];
}else{
$currStatus="None";	
}

}

//echo $currStatus;
if($currStatus!="None" && $currStatus=='Pending' || $currStatus=='PendingAgain'){
$cond=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$recMember[reg_id]' AND msg_to_mem_id='$userDATA[reg_id]')");
if($cond!=0){
$msg_id_query=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE (msg_from_mem_id='$recMember[reg_id]' AND msg_to_mem_id='$userDATA[reg_id]')");
?>  
  <a class="btn no-radius mb5 f14" style="width: 100%;" id="acpt_btn" href="Javascript:void(0)" onClick="change_status('<?=$msg_id_query?>','Accepted','<?=$recMember['reg_name']?>')"><i class="fa fa-check" id="acpt_icon" aria-hidden="true"></i> Accept</a>
   <a class="btn no-radius mb5 f14" style="width: 100%;" id="dcln" href="Javascript:void(0)" onClick="change_status('<?=$msg_id_query?>','Declined','<?=$recMember['reg_name']?>')"><i class="fa fa-times-circle" id="dcln_icon" aria-hidden="true"></i> Decline</a>
<?php }else{
?>
<!----<br>------>
<a class="btn no-radius mb5 f14" id="req_btn" href="Javascript:void(0)" onClick="alert('Request is already sent.')" ><i class="fa fa-spinner" id="req_icon" aria-hidden="true"></i> Request In Process</a>
<?php } ?>
<?php }else if($currStatus!="None" && $currStatus=='Accepted'){?>
  <!----<br>------>
<h4 style="font-weight:bold; text-align: center; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-link" style="color:#7ba76d;"></i> Connected Profile</h4>

<?php }else if($currStatus=='Declined'){
$cond_decline=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$recMember[reg_id]' AND msg_to_mem_id='$userDATA[reg_id]')");
if($cond_decline!=0){
?>
<a href="Javascript:void(0)" style="width: 100%;" onClick="alert('Request is declined by you')" class="btn no-radius mb5 f14" id="dcln"><i class="fa fa-check-circle" id="dcln_icon" aria-hidden="true"></i> Declined</a>
<?php }else{
?>
<a href="Javascript:void(0)" style="width: 100%;" onClick="alert('Request is declined by receiver')" class="btn no-radius mb5 f14" id="dcln"><i class="fa fa-check-circle" id="dcln_icon" aria-hidden="true"></i> Declined</a>

<?php }}else if($currStatus=='Cancelled'){
$cond_cancel=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$recMember[reg_id]' AND msg_to_mem_id='$userDATA[reg_id]')");
if($cond_cancel!=0){?>
  <a href="Javascript:void(0)" style="width: 100%;" onClick="send_request('<?=$recMember['reg_id']?>')" id="sndAgain_btn" class="btn no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" id="sndAgain_icon" aria-hidden="true">&nbsp;&nbsp;</i>Send Invitation</a>
<?php }else{
  ?>
<a href="Javascript:void(0)" id="dcln" style="width: 100%;" onClick="alert('Request is already cancelled by you.')" class="btn no-radius ml5 mb5 f14"><i class="fa fa-exclamation-triangle" id="dcln_icon" aria-hidden="true"></i> Cancelled</a>

<a href="send-search.php?send=<?=$recMember['reg_id']?>&user=<?=$userDATA['reg_id']?>" style="width: 100%;" class="btn no-radius ml5 mb5 f14" id="sndAgain_btn"><i class="fa fa-paper-plane-o" id="sndAgain_icon" aria-hidden="true">&nbsp;&nbsp;</i>Send Again</a>

<?php }}else{?>
<a href="Javascript:void(0)" style="width: 100%;" onClick="send_request('<?=$recMember['reg_id']?>')" id="sndAgain_btn" class="btn no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" id="sndAgain_icon" aria-hidden="true">&nbsp;&nbsp;</i>Send Invitation</a>
<?php } ?>  
</div>
<p class="text-success bold text-center" style="display:none" id="msg<?=$recMember['reg_id']?>"><i class="fa fa-check font-black"></i> Request has been sent successfully.</p>

<p class="text-success bold text-center" style="display:none" id="msg_short<?=$recMember['reg_id']?>"><i class="fa fa-check font-black"></i> Request has been sent successfully.</p>

</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:dashed thin #efefef; margin-top:10px; box-shadow: 4px 4px 4px #efefef;"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp-btm1">
<p class="pd01"> <img src="images/quotation.png" style="width:30px;">
<?php
$short_desc=(strlen($recMember['reg_mem_myself'])>250) ?substr($recMember['reg_mem_myself'],0,250)."...":substr($recMember['reg_mem_myself'],0,250);
?>
<?=$short_desc?>  
<a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" class="prof-mr">Read More &rarr;</a></p>
</div>
</div>
<div class="clearfix"></div>


</div> 
<?php 
}
}else{?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text-danger pt-20 pb-20">No record(s) found.</div>
<?php }?>




                   
            <div class="clearfix"></div>
                  
                   <!-------->         
                   
       
        
         </div>
         <div class="clearfix"></div>
         
         <!------visible-->
         
       </div>
    </div>
  </section>
  
  <!--Main Footer-->
<?php include("site-footer.php"); ?>

<!-------register----->
<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>
<script>
function send_request(memID){

$(document).ready(function(e) {
//alert(memID)
$.ajax({
	
url: "member-request.php?MemID="+memID,
type: "POST",
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$("#req_load_area"+memID).html(data);		
$("#msg"+memID).show("slow")
$("#msg"+memID).html("<i class='fa fa-check font-black'></i> Your request is sent successfully")
setInterval(function(){$("#msg"+memID).fadeOut("slow")},3000);

}else{
alert('Unable to sent request now, try again later.');	
}

},
error: function(){} 	        	   
	
});
    
});

}
</script>

<!-- change status -->

<script>
function change_status(msgID,act,mem){

$(document).ready(function(e) {
$.ajax({
  
url: "member-change-status.php?msgID="+msgID+"&act="+act,
type: "POST",
contentType: false,
processData:false,
success: function(data){

if(data!=0){

if(act=="Pending-Delete"){
$("#pending-load-area").html(data); 
document.getElementById('action-msg').innerHTML='Selected request is deleted.';   
}

if(act=="Cancelled"){
$("#pending-load-area").html(data);   
document.getElementById('action-msg').innerHTML='Selected request is cancelled';    
}


if(act=="Received-Delete"){
$("#received-load-area").html(data);
document.getElementById('action-msg').innerHTML='Selected request is deleted';    
}



if(act=="Accepted"){
//$("#received-load-area").html(data);
if(data!=""){
document.getElementById('action-msg').innerHTML='Selected request is accepted';
setTimeout(function(){ window.location.href="my-matches.php"; },1000);   

}
    
}


if(act=="Declined"){
//$("#received-load-area").html(data);
if(data!=""){
document.getElementById('action-msg').innerHTML='Selected request is declined'; 
setTimeout(function(){ window.location.href="my-matches.php"; },1000); 
}
   
}



document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);
  

}else{
alert('Unable to sent request now, try again later.');  
}

},
error: function(){}                
  
});
    
});

}
</script>


<script>
function short_request(memID){

$(document).ready(function(e) {
//alert(memID)
$.ajax({
	
url: "short-request.php?MemID="+memID,
type: "POST",
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$("#short_req_load_area"+memID).html(data);		
$("#msg_short"+memID).show("slow")
$("#msg_short"+memID).html("<i class='fa fa-check font-black'></i> Your selection short listed successfully")
setInterval(function(){$("#msg_short"+memID).fadeOut("slow")},3000);

}else{
alert('Unable to sent request now, try again later.');	
}

},
error: function(){} 	        	   
	
});
    
});

}
</script>



<script src="<?=SITE_WS_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_WS_PATH?>/js/script.js"></script>
<script src="<?=SITE_WS_PATH?>/js/menuzord.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jPushMenu.js"></script>
<script src="<?=SITE_WS_PATH?>/js/owl.js"></script>
<!-- validate -->
<script src="<?=SITE_WS_PATH?>/js/customcollection.js"></script>
<script src="<?=SITE_WS_PATH?>/js/custom1.js"></script>
<!-------------->
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible-normal.js"></script> 
<script>
$('#collapse-menu').collapsible({
  contentOpen:["0","1", "2", "3", "4", "5", "6", "7", "8", "9",, "10", "11","12"]
});
</script>


<!--------------show & hidden------------>
<script>
	function showHide(shID,hdID,hdIDD){
		if(document.getElementById(shID).style.display=="none"){
			$("#"+shID).show(1200);
			$("#"+hdID).hide('fast');
			$("#"+hdIDD).show('fast');
		}else{
			$("#"+shID).hide(1200);
			$("#"+hdID).show('fast');
			$("#"+hdIDD).hide('fast');
		}
	}
</script>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<!--------->
<!----------change-pws---->

<?php if($_SESSION['userLoginId']==""){?>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<?php }?>

<a data-toggle="modal" data-target="#update-popup" id="for-update-popup"></a>
<div class="modal fade" id="update-popup" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content" id="update-popup-box">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle" aria-hidden="true" id="close-popup"></i>

</button>
<div class="modal-header" style="border-bottom:none">
<h4 class="modal-title text-center"> <span id="action-msg"></span>.</h4>
</div>

</div>
</div>
</div>