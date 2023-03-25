<link rel="stylesheet" type="text/css" href="css/other-profile-style.css">
<?php require_once("includes/dbsmain.inc.php");?>
<?php include("site-main-query.php") ?>
<?php
$reg_id=$_GET['id'];
$sql="SELECT * FROM tbl_registration WHERE reg_status='Active' AND reg_id='$reg_id'";
$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
$recMember=mysqli_fetch_array($dataMember);
}


//////////  ADDING IN VIEWD CONTACT /////////
$sql="SELECT pro_id FROM tbl_profile_view WHERE pro_view_by_mem_id='$_SESSION[userLoginId]' AND pro_view_to_mem_id='$reg_id' ";
$isExist=db_scalar($sql);

if(empty($isExist)){
$sql="INSERT INTO tbl_profile_view SET 
pro_view_by_mem_id='$_SESSION[userLoginId]',
pro_view_to_mem_id='$reg_id',
pro_date='".date("Y-m-d")."'
";
$res=db_query($sql);
}
/////////////////////////////////////////////



$matchCount=0;


if($recMember['reg_preference_marital_status']!="" && $userDATA['reg_marital_status']!="" && $userDATA['reg_marital_status']==$recMember['reg_marital_status']){
$matchCount++;	
}

if($recMember['reg_preference_age']!="0" && $userDATA['reg_age']!="0" && $userDATA['reg_age']==$recMember['reg_preference_age']){
$matchCount++;	
}

if($recMember['reg_preference_height']!="" && $userDATA['reg_height']!="" && $userDATA['reg_height']==$recMember['reg_preference_height']){
$matchCount++;	
}

if($recMember['reg_preference_mother_tongue']!="" && $userDATA['reg_mother_tongue']!="" && $userDATA['reg_mother_tongue']==$recMember['reg_preference_mother_tongue']){
$matchCount++;	
}

if($recMember['reg_preference_religion']!="" && $userDATA['reg_religion']!="" && $userDATA['reg_religion']==$recMember['reg_preference_religion']){
$matchCount++;	
}

if($recMember['reg_preference_gotra']!="" && $userDATA['reg_gotra']!="" && $userDATA['reg_gotra']==$recMember['reg_preference_gotra']){
$matchCount++;	
}

if($recMember['reg_preference_namaz']!="" && $userDATA['reg_namaz']!="" && $userDATA['reg_namaz']==$recMember['reg_preference_namaz']){
$matchCount++;	
}

if($recMember['reg_preference_zakaat']!="" && $userDATA['reg_zakaat']!="" && $userDATA['reg_zakaat']==$recMember['reg_preference_zakaat']){
$matchCount++;	
}

if($recMember['reg_preference_fasting']!="" && $userDATA['reg_fasting']!="" && $userDATA['reg_fasting']==$recMember['reg_preference_fasting']){
$matchCount++;	
}


if($recMember['reg_preference_dosh']!="" && $userDATA['reg_dosh']!="" && $userDATA['reg_dosh']==$recMember['reg_preference_dosh']){
$matchCount++;	
}

if($recMember['reg_preference_star']!="" && $userDATA['reg_star']!="" && $userDATA['reg_star']==$recMember['reg_preference_star']){
$matchCount++;	
}

if($recMember['reg_preference_dastar']!="" && $userDATA['reg_dastar']!="" && $userDATA['reg_dastar']==$recMember['reg_preference_dastar']){
$matchCount++;	
}

if($recMember['reg_preference_dastar']!="" && $userDATA['reg_dastar']!="" && $userDATA['reg_dastar']==$recMember['reg_preference_dastar']){
$matchCount++;	
}

if($recMember['reg_preference_sub_cast']!="" && $userDATA['reg_sub_cast']!="" && $userDATA['sub_cast']==$recMember['reg_preference_sub_cast']){
$matchCount++;	
}

if($recMember['reg_preference_country_name']!="" && $userDATA['reg_country_name']!="" && $userDATA['reg_country_name']==$recMember['reg_preference_country_name']){
$matchCount++;	
}

if($recMember['reg_preference_state_name']!="" && $userDATA['reg_state_name']!="" && $userDATA['reg_state_name']==$recMember['reg_preference_state_name']){
$matchCount++;	
}

if($recMember['reg_preference_city']!="" && $userDATA['reg_city']!="" && $userDATA['reg_city']==$recMember['reg_preference_city']){
$matchCount++;	
}

if($recMember['reg_preference_highest_edu']!="" && $userDATA['reg_highest_edu']!="" && $userDATA['reg_highest_edu']==$recMember['reg_preference_highest_edu']){
$matchCount++;	
}

if($recMember['reg_preference_occupation']!="" && $userDATA['reg_occupation']!="" && $userDATA['reg_occupation']==$recMember['reg_preference_occupation']){
$matchCount++;	
}


if($recMember['reg_preference_member_annual_income']!="" && $userDATA['reg_member_annual_income']!="" && $userDATA['reg_member_annual_income']==$recMember['reg_preference_member_annual_income']){
$matchCount++;	
}


if($recMember['reg_preference_working_location']!="" && $userDATA['reg_working_location']!="" && $userDATA['reg_working_location']==$recMember['reg_preference_working_location']){
$matchCount++;	
}


if($recMember['reg_preference_appearance']!="" && $userDATA['reg_appearance']!="" && $userDATA['reg_appearance']==$recMember['reg_preference_appearance']){
$matchCount++;	
}




if($recMember['reg_preference_living_status']!="" && $userDATA['reg_living_status']!="" && $userDATA['reg_living_status']==$recMember['reg_preference_living_status']){
$matchCount++;	
}

if($recMember['reg_preference_physical_status']!="" && $userDATA['reg_physical_status']!="" && $userDATA['reg_physical_status']==$recMember['reg_preference_physical_status']){
$matchCount++;	
}

if($recMember['reg_preference_eating_habits']!="" && $userDATA['reg_eating_habits']!="" && $userDATA['reg_eating_habits']==$recMember['reg_preference_eating_habits']){
$matchCount++;	
}

if($recMember['reg_preference_smoking_habits']!="" && $userDATA['reg_smoking_habits']!="" && $userDATA['reg_smoking_habits']==$recMember['reg_preference_smoking_habits']){
$matchCount++;	
}

if($recMember['reg_preference_drinking_habits']!="" && $userDATA['reg_drinking_habits']!="" && $userDATA['reg_drinking_habits']==$recMember['reg_preference_drinking_habits']){
$matchCount++;	
}




?> 
<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>ApniMatrimony</title>
<meta name="robots" content="index, follow" />

<!-- Stylesheets -->
<link href="<?=SITE_WS_PATH?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style1.css" rel="stylesheet">
<!--------->
<link href="<?=SITE_WS_PATH?>/css/responsive.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style-res-nav.css" rel="stylesheet">
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/style-client.css">
<link href="<?=SITE_WS_PATH?>/css/style-res-nav.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/jPushMenu.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/jquery.fancybox.css" rel="stylesheet">
<!---------------->
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/style-customizer-rgt.css"/>
<!---social----->
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/style-social-1.css">
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/font-awesome/css/font-awesome.min.css">
<link href="<?=SITE_WS_PATH?>/css/collapsible1.css" rel="stylesheet" type="text/css">
<!----->
<style>
	.my-pro img {border:solid 0px #efefef;}
.match-sty{width:80px; height:80px; border-radius:80px;}
/*****
.my-pro img{width:100%; border:solid 1px #efefef; border:solid 1px #ccc; height:252px;}
	******/
</style>
</head>

<body id="amitabh">
<div class="page-wrapper" >
  <div class="preloader"></div>
<?php 
if($_SESSION['userLoginId']==""){
include("site-header.php");
}else{
include("site-header-login.php");	
}
?>  

<style>
    .view-sty {
    display: block;
    color: #000 !important;
    font-size: 14px;
}
	.pro-prvg1{height:274px; width: 100%; margin: 0px; padding: 10px; border:solid 1px #ccc;  vertical-align: middle; display: table-cell;}
	.pro-prvg1 img{width: auto; height:auto;}
	.mp0pp1{}
	.mp0pp2{margin:0px; padding:0px;}
	.mp-mprf3{}
	.mp0pp4{margin:0px; padding:0px;}
	@media (min-width:320px) and (max-width:767px) 
{   .mp0pp4{margin:auto; padding:15px;}
	.pro-prvg1{height:auto; width:auto;}
	.pro-prvg1 img {
    width: auto;
    height:auto;
}
	.mp0pp2{margin:auto; padding:15px; padding-right: 0px;}
	.mp0pp1{margin:0px; padding:0px;}
	.btn-sndagn{width:100%; margin-left:-4px;}
	/***.mp-mprf3{margin-bottom:20px;}****/
	
}

</style>
  <section style="background-color:#f1f1f2;">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 all-sec">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 my-pro" style="margin-left:0px; padding-left:10px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp03 mp-mprf3" style="background-color:#f1f7f0; box-shadow: 1px 1px 10px #ccc;">
    <a href="#" class="view-sty" style="color:#000;"><?="R".$recMember['reg_id']?></a>


    <!--    <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>"  >
        -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pro-prvg1 text-center">
           <?php 
        $check_photo=$userDATA['reg_profile_photo'];
        if(empty($check_photo) && $userDATA['reg_gender']=="Female"){?>
      <img src="<?=SITE_WS_PATH?>/images/1.ico">
       <?php }else if(empty($check_photo) && $userDATA['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png">
       <?php }else if(!empty($check_photo)){?>
        <img src="<?=SITE_WS_PATH?>/upload_images/<?=$userDATA['reg_profile_photo']?>">
       <?php }?>
        </div>
        
        
        
        <?
        if($userDATA['reg_profile_photo']!="")
        {?>
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pro-bg" style="background-color:#f1f7f0; box-shadow: 1px 1px 10px #ccc;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp03"><a href="Javascript:void(0)" data-toggle="modal" data-target="#ProfilePhotoModal" class="view-sty" style="color:#000 !imortant"><i class="fa fa-camera"></i> View</a></div>
			</div>
       
      </div>
      <?}?>
      
      
    </div>
      <!---end-images--->
      
       <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp0pp4">
       
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl" style="margin-top:0px; margin-right:0px; padding-top:0px;  width:98%;">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd1" style="padding:0px 15px;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mrg0">
      <h4>
<?=$recMember['reg_name']?> <span style="font-size:12px; color:#000;">Profile Created by | <span style="color:#063;"> <?=$recMember['reg_profile_manage_by']?></span> </span>

</h4></div>
      
      </div>
      
      <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11" style="margin:0px; padding:0px; border-right:solid 1px #efefef;">
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p><i class="fa fa-map-marker sze_icn" style="color:#00bbd4; width:20px; font-size:16px;"></i> <?=$recMember['reg_state_name']?>, <?=$recMember['reg_country_name']?></p>
    </div
       >
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <?php 
          $user_height=$userDATA['reg_height'];
           ?>
          <p><i class="fa fa-user sze_icn" style="color:#00bbd4"></i> <?=$userDATA['reg_age']?> yrs, <?=str_replace(".", "'", $user_height)?>" , Capricorn</p>
    </div>
     </div>
       <div class="clearfix"></div>
       
       
     
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p><i class="fa fa-graduation-cap" style="color:#00bbd4;"></i> <?=$recMember['reg_highest_edu']?></p>
    </div>
     </div>
     
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p><i class="fa fa-black-tie" style="color:#00bbd4;"></i> <?=$recMember['reg_occupation']?></p>
    </div>
     </div>
     
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p><img src="images/ring.png" style="width:20px;"> <?=$recMember['reg_marital_status']?></p>
    </div>
     </div>
     
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p><i class="fa fa-sitemap" style="color:#00bbd4;"></i> <?=$recMember['reg_religion']?></p>
    </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p><img src="images/book.png" style="width:20px;"> <?=$recMember['reg_mother_tongue']?></p>
    </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix"></div>
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <p><span style="color:#03C;">Online 
	   <?php if($recMember['reg_last_login']!="0000-00-00 00:00:00"){echo date("d M y",strtotime($recMember['reg_last_login']));}?></span> <a href="#"><i class="fa fa-commenting" style="font-size:20px; color:#00bbd4;"></i></a></p>
      </div>
     </div>
     <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center mp0pp1">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:10px 0px;"> 
<?php if($_SESSION['userLoginId']!=""){?>    
<a href="tel:<?=$recMember['reg_mobile_no']?>"><i class="fa fa-mobile" data-toggle="tooltip" data-placement="right" title="View Contact" style="font-size:25px; color:#03c1ed"></i></a>
<?php }else{?>
<a href="Javascript:void(0)" onClick="alert('Please login to view contact.')" ><i class="fa fa-mobile" data-toggle="tooltip" data-placement="right" title="View Contact" style="font-size:25px; color:#03c1ed"></i></a>
<?php }?>
<br><br>
<a href="Javascript:void(0)" ><i class="fa fa-ban" data-toggle="tooltip" data-placement="right" title="Block" style="font-size:18px; color:#03c1ed"></i></a>
<br><br>
</div>

<div id="short_load_area">
<?php 
/*  $sql_title3=db_query("SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$recMember[reg_id]' AND msg_from_mem_id='$userDATA[reg_id]') OR (msg_to_mem_id='$userDATA[reg_id]' AND msg_from_mem_id='$recMember[reg_id]')");
   $disp_title3=mysqli_fetch_array($sql_title3);
   if($disp_title3['msg_status']!="Accepted"){
    $sql="SELECT sl_id FROM tbl_shortlist WHERE sl_mem='$recMember[reg_id]' AND sl_by='$userDATA[reg_id]'";
    $checkShort=db_scalar($sql);
    if($checkShort!=""){*/
    ?>
    
    <?php //}else{?>
    <a href="Javascript:void(0)" ><i class="fa fa-list-alt" data-toggle="tooltip" data-placement="right" title="Short" style="font-size:18px; color:#03c1ed"></i></a>
    <?php //}}?> 
</div>

   </div>  
      
     
     <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-top:solid 1px #efefef; margin:0px; padding:0px; margin-top:10px;">


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5); margin-top:10px;"><i class="fa fa-paper-plane-o" style="color:#7ba76d;"></i> Send Invitation</h4>



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd btn-sndagn" id="action-load-area">
<?php
?>

<?php if($currStatus!="None" && $currStatus=='Pending'){?>
<a href="Javascript:void(0)" onClick="alert('Request is already sent.')" class="btn btn-warning btn-sm no-radius ml5 mb5 f14"><i class="fa fa-check-circle" aria-hidden="true"></i> Request In Process</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Declined','<?=$recMember['reg_id']?>')" class="btn btn-danger btn-sm no-radius mb5 f14"><i class="fa fa-times-circle" aria-hidden="true"></i> Ignore</a>

<?php }else if($currStatus!="None" && $currStatus=='Declined'){?>
<a href="Javascript:void(0)" onClick="alert('Request is already declined by you.')" class="btn btn-danger btn-sm no-radius ml5 mb5 f14"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Declined</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Send-Again','<?=$recMember['reg_id']?>')"  class="btn btn-primary btn-sm no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" aria-hidden="true">&nbsp;&nbsp;</i>Send Again</a>


<?php }else if($currStatus!="None" && $currStatus=='Accepted'){?>
<a href="Javascript:void(0)" onClick="alert('Request is already accepted')" class="btn btn-success btn-sm no-radius ml5 mb5 f14"><i class="fa fa-check-circle" aria-hidden="true"></i> Request Acceped</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Declined','<?=$recMember['reg_id']?>')" class="btn btn-danger btn-sm no-radius mb5 f14"><i class="fa fa-times-circle" aria-hidden="true"></i> Ignore</a>

<?php }else{?>
<a href="Javascript:void(0)" style="pointer-events: none;cursor: default;" id="sndAgain_btn" onClick="send_request('<?=$recMember['reg_id']?>')" class="btn btn-primary btn-sm no-radius ml5 mb5 f14"><i id="sndAgain_icon" class="fa fa-paper-plane-o" aria-hidden="true">&nbsp;&nbsp;</i>Yes</a>
<?php }?>

<span class="text-success bold text-center" style="display:none" id="msg-other"><i class="fa fa-check font-black"></i> Request has been sent successfully.</span>


<?php /*?><?php if($currStatus!="None" && $currStatus=='Pending'){?>
<a href="#" class="otprf-btn yesbtn mb5">Yes</a>
<?php }else{?>
<a href="Javascript:void(0)" onClick="alert('Request is already sent.')" class="btn btn-warning btn-sm no-radius ml5 mb5 f14"><i class="fa fa-check-circle" aria-hidden="true"></i> Request In Process</a>
<?php }else if($currStatus!="None" && $currStatus=='Accepted'){?>
<a class="btn-req-accepted" href="Javascript:void(0)" onClick="alert('Request is already accepted.')" ><i class="fa fa-check-circle" aria-hidden="true"></i> Request Acceped</a>
<?php }?>
<?php */?>
<!--<a href="#" class="otprf-btn">No</a>-->



</div>
<!--<form>
<select class="otprf-btn selskp">
<option>Skip</option>
<option>Ignor</option>
</select>
</form>-->
</div>
     
      <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12">
     
     
<!--<span id="short_req_load_area<?=$recMember['reg_id']?>" >

<?php
$sql="SELECT sl_id FROM tbl_shortlist WHERE sl_mem='$recMember[reg_id]' AND sl_by='$userDATA[reg_id]'";
$checkShort=db_scalar($sql);
if($checkShort!=""){
?>
<a href="Javascript:void(0)" onClick="alert('Request is already sent.')" class="otprf-btn"><i class="fa fa-check" aria-hidden="true"></i> Shorted</a>
<?php }else{?>
<a href="Javascript:void(0)" onClick="short_request('<?=$recMember['reg_id']?>')" class="otprf-btn" ><i class="fa fa-star" aria-hidden="true"></i> Short List</a>
<?php }?>

</span>-->
     
      <!-- <a href="#" class="otprf-btn"><i class="fa fa-star"></i> Short List</a>-->
       
       
       
     <!--   <a href="#" class="otprf-btn"><i class="fa fa-envelope"></i> Send Mail</a>
        <a href="#" class="otprf-btn"><i class="fa fa-lock" style="font-size:18px;"></i> Block</a>
        -->


<!--<?php if($_SESSION['userLoginId']!="" && $_SESSION['userMembership']>0){?>        
<a onClick="return confirm('You are about to spend a view credit, want to continue ?')" href="view-contact-detail.php?MID=<?=base64_encode($recMember['reg_id'])?>" class="otprf-btn pull-right"><i class="fa fa-envelope" style="font-size:18px;"></i> View Contact</a>
<?php }else{?>        
<a href="upgrade.php" class="otprf-btn pull-right"><i class="fa fa-envelope" style="font-size:18px;"></i> View Contact</a>
<?php }?>-->        
        </br>
         </div>
     </div>
    </div>
       </div>
         <!------------>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp-02 pd-left">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd1" style="margin:10px; width:99%">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mrg0">
            <h4><i class="fa fa-star"></i> Personal Details</h4>
      </div>
  </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 hidden-xs" style="margin-top:-10px;">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="brd-styd" style="height:30px;"></div>
      <i class="fa fa-pencil crcle-icon" style="color:#ef3079"></i>
      
      <div class="brd-styd" style="height:80px;"></div>
      <i class="fa fa-user crcle-icon" style="color:#C60"></i>
      
       <div style="border:solid 1px #C03; height:170px; width:1px;"></div>
       <i class="fa fa-map-marker crcle-icon" style="color:#00a838"></i>
      
       <div class="brd-styd" style="height:100px;"></div>
       <i class="fa fa-users crcle-icon" style="color:#00a838"></i>
       
        <div class="brd-styd" style="height:150px;"></div>
       <i class="fa fa-book crcle-icon" style="color:#c837cc"></i>
      
       <div class="brd-styd" style="height:130px;"></div>
			  <div class="crcle-icon">
				  <img src="images/book.png" style="width:30px; position:relative; top:-4px;">
			  </div>
       <div class="brd-styd" style="height:90px;"></div>
       <i class="fa fa-glass crcle-icon" style="color:#cc6017"></i>
      
       <div class="brd-styd" style="height:120px;"></div>
       <i class="fa fa-heart crcle-icon" style="color:#c1272d"></i>
  </div>
  </div>
        <!----->
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 mp0pp2">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl sdow">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>A Few Words About Myself</h4>
  </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn"><!--  <a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> --> </div>
      
  </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p style="text-align:justify;"><?=$recMember['reg_mem_myself']?></p>
  </div>
       
      
  </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>Basic Details </h4>
  </div>
      <!---<div class="col-md-2 col-xs-2 wd-btn"><!--<a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a>--> <!----</div>----->
  </div>
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Full Name</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_name']?></p>
  </div>
   </div>
       
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Gender</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><a href="" class="sthvr"><?=$recMember['reg_gender']?></a></p>
  </div>
   </div>
       <div class="clearfix"></div>
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Date of birth</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=date("d-m-Y",strtotime($recMember['reg_dob']))?></p>
  </div>
   </div>
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Age</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_age']?></p>
  </div>
   </div>
       <div class="clearfix"></div>
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Height</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_height']?></p>
  </div>
   </div>
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Marital Status</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_marital_status']?></p>
  </div>
   </div>
       
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Any Disability</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_is_any_disability']?></p>
  </div>
   </div>
       
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Aadhar Number</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_aadhar_number']?></p>
  </div>
   </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Profile Management by</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_profile_manage_by']?></p>
  </div>
   </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Blood Group</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_blood_group']?></p>
  </div>
   </div>
  </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>Location Details</h4>
  </div>
      <!---<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn"><!-- <a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> --> <!---</div>-->
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Country</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_country_name']?></p>
  </div>
   </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>State</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_state_name']?></p>
  </div>
    </div>
        <div class="clearfix"></div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>District/City</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_city']?></p>
  </div>
    </div>
        <div class="clearfix"></div>
      
  </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>Family Details</h4>
  </div>
      <!-- <div class="col-md-2 col-xs-2 wd-btn"><!-- <a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> -->  <!--</div>--> 
  </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Father's Status</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_father_status']?></p>
  </div>
  </div>
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Mother's Status</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_mother_status']?></p>
  </div>
   </div>
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Siblings Status</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
         <p><?=$recMember['reg_siblings_bro']." <span style='font-size:12px; color:#333'>(Brother)</span>".", ".$recMember['reg_siblings_sis']." <span style='font-size:12px; color:#333'>(Sister)</span>"?></p>

  </div>
   </div>
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Siblings Maritial Status</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_siblings_marital_status_bro']." <span style='font-size:12px; color:#333'>(Brother)</span>".", ".$recMember['reg_siblings_marital_status_sis']." <span style='font-size:12px; color:#333'>(Sister)</span>"?> </p>

  </div>
   </div>
      
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Family Status</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_family_status']?></p>
  </div>
   </div>
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Family type</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_family_type']?></p>
  </div>
   </div>
   
<div class="clearfix"></div>   
   
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Family Values</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_family_values']?></p>
  </div>
   </div>
      
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Annual income</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_annual_income']?></p>
  </div>
   </div>
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Family living in</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_family_living_in']?></p>
  </div>
   </div>
  </div> 
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>Education & Career</h4>
  </div>
     <!--  <div class="col-md-2 col-xs-2 wd-btn"><!-- <a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> --> <!--</div>----->
  </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Highest Education</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_highest_edu']?></p>
  </div
       >
  </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Educational Details</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_edu_detail']?></p>
  </div
       >
  </div>
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Occupation</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_occupation']?></p>
  </div>
   </div>
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Annual income</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_annual_income']?></p>
  </div>
   </div>
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Organization Name</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_organization_name']?></p>
  </div>
   </div>
      
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Working Location</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_working_location']?></p>
  </div>
   </div>
     
  </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>Religious Background</h4>
  </div>
      <!-- <div class="col-md-2 col-xs-2 wd-btn"><!-- <a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> --> <!-- </div> --> 
  </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Religion</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_religion']?></p>
  </div
       >
  </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Caste</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_cast']?></p>
  </div>
    </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Sub Caste</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_sub_cast']?></p>
  </div>
    </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Gotra</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_gotra']?></p>
  </div>
    </div>
      
      
  </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>Lifestyle And Habits</h4>
  </div>
      <!--<div class="col-md-2 col-xs-2 wd-btn"><!-- <a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> --> <!--</div>-->
  </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Appearance</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_appearance']?></p>
  </div>
  </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Living Status</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_living_status']?></p>
  </div>
    </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Physical Status</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_physical_status']?></p>
  </div>
    </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Eating Habits</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_eating_habits']?></p>
  </div>
    </div>
      
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Smoking Habits</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_smoking_habits']?></p>
  </div>
    </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Drinking Habits</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_drinking_habits']?></p>
  </div>
    </div>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>Likes & Interests</h4>
  </div>
      <!--<div class="col-md-2 col-xs-2 wd-btn"><!-- <a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> --> <!--</div>-->
  </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Hobbies</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_hobbies']?></p>
  </div>
  </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Interests</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_interests']?></p>
  </div>
    </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Favourite Music</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_favourite_music']?></p>
  </div>
    </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Favourite Book</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_favourite_book']?></p>
  </div>
    </div>
      
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Dress Style</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_dress_style']?></p>
  </div>
    </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>TV Shows</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_tv_shows']?></p>
  </div>
    </div>
  </div>
  </div>
 </div>
   <!----------->
<!--         <div class="col-md-12 mp-02 pd-left mp_04">
        <div class="col-md-12 bg-clrd1" style="margin:10px; width:99%;">
          <div class="col-md-12 col-xs-12 mrg0">
            <h4><i class="fa fa-star"></i> Partner Preference</h4>
        </div>
    </div>
        <div class="col-md-1" style="margin-top:-10px;">
          <div class="col-md-12">
       <div class="brd-styd" style="height:30px;"></div>
       <i class="fa fa-eye crcle-icon" style="color:#ef3079"></i>
    </div>
    </div>
       
        <div class="col-md-11" style="margin:0px; padding:0px;">
    <div class="col-md-12 bg-wth b-dtl bg-mrg sdow">
      <div class="col-md-12">
      <div class="col-md-10 col-xs-10 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
    </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
     <div class="col-md-3 mp_1">
    <div class="col-md-12">
      <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="match-sty">
      <h5 class="ptr-nm" >
      <?php if($recMember['reg_gender']=="Male"){?>            
      His
      <?php }?>
      
      <?php if($recMember['reg_gender']=="Female"){?>            
      Her 
      <?php }?>
      Preferences
      
      
      </h5>
      
      
      </div>
    </div>
    <div class="col-md-6 mp_1 text-center">
     <h2 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:25px; margin-top:32px;"><?=$matchCount?> out of <?=$countPrefer?> matching</h2>
     <img src="images/border1.png">
    </div>
    <div class="col-md-3 mp_1 text-right">
    <div class="col-md-12">
      <img src="<?=SITE_WS_PATH?>/upload_images/<?=$userDATA['reg_profile_photo']?>" class="match-sty">
      <h5 class="ptr-nm">You match</h5>
      </div>
    </div>
    <div class="clearfix"></div>
    
   
        
<?php if($recMember['reg_preference_age']!="0" && $userDATA['reg_age']!="0" ){?>

<div class="col-md-12 pd_0d" style="margin-top:30px;">
<div class="col-md-3 mp_1">
<p>Age</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_age']?> Years</p>
</div>

<div class="col-md-2 text-center">
<?php if($recMember['reg_preference_age']==$userDATA['reg_age']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>
</div>
</div>
<?php }?>



<?php
if($recMember['reg_preference_marital_status']!="" && $userDATA['reg_marital_status']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Marital Status</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_marital_status']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_marital_status']==$userDATA['reg_marital_status']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>


<?php
if($recMember['reg_preference_height']!="" && $userDATA['reg_height']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Height</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_height']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_height']==$userDATA['reg_height']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>


<?php
if($recMember['reg_preference_highest_edu']!="" && $userDATA['reg_highest_edu']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Highest Education</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_highest_edu']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_highest_edu']==$userDATA['reg_highest_edu']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>



<?php
if($recMember['reg_preference_working_location']!="" && $userDATA['reg_working_location']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Working Location</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_working_location']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_working_location']==$userDATA['reg_working_location']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>

<?php
if($recMember['reg_preference_appearance']!="" && $userDATA['reg_appearance']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Appearance</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_appearance']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_appearance']==$userDATA['reg_appearance']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>


<?php
if($recMember['reg_preference_living_status']!="" && $userDATA['reg_living_status']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Living Status</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_living_status']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_living_status']==$userDATA['reg_living_status']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>


<?php
if($recMember['reg_preference_physical_status']!="" && $userDATA['reg_physical_status']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Physical Status</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_physical_status']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_physical_status']==$userDATA['reg_physical_status']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>




<?php
if($recMember['reg_preference_country_name']!="" && $userDATA['reg_country_name']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Country</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_country_name']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_country_name']==$userDATA['reg_country_name']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>


<?php
if($recMember['reg_preference_state_name']!="" && $userDATA['reg_state_name']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>State</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_state_name']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_state_name']==$userDATA['reg_state_name']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>

<?php
if($recMember['reg_preference_city']!="" && $userDATA['reg_city']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>City</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_city']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_city']==$userDATA['reg_city']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>





<?php
if($recMember['reg_preference_religion']!="" && $userDATA['reg_religion']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Religion</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_religion']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_religion']==$userDATA['reg_religion']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>


<?php 
if($recMember['reg_preference_cast']!="" && $userDATA['reg_cast']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Cast</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_cast']?> <?=$recMember['reg_cast']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_cast']==$userDATA['reg_cast']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>

<?php 
if($recMember['reg_preference_sub_cast']!="" && $userDATA['reg_sub_cast']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Sub Cast</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_sub_cast']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_sub_cast']==$userDATA['reg_sub_cast']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>



<?php
if($recMember['reg_preference_dosh']!="" && $userDATA['reg_dosh']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Dosh</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_dosh']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_dosh']==$userDATA['reg_dosh']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>

<?php
if($recMember['reg_preference_star']!="" && $userDATA['reg_star']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Star</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_star']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_star']==$userDATA['reg_star']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>


<?php
if($recMember['reg_preference_dastar']!="" && $userDATA['reg_dastar']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Dastar</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_dastar']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_dastar']==$userDATA['reg_dastar']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>





<?php
if($recMember['reg_preference_gotra']!="" && $userDATA['reg_gotra']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Gotra</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_gotra']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_gotra']==$userDATA['reg_gotra']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>



<?php
if($recMember['reg_preference_namaz']!="" && $userDATA['reg_namaz']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Namaz</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_namaz']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_namaz']==$userDATA['reg_namaz']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>


<?php
if($recMember['reg_preference_zakaat']!="" && $userDATA['reg_zakaat']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Zakaat</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_zakaat']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_zakaat']==$userDATA['reg_zakaat']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>


<?php
if($recMember['reg_preference_fasting']!="" && $userDATA['reg_fasting']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Fasting</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_fasting']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_fasting']==$userDATA['reg_fasting']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>





<?php
if($recMember['reg_preference_mother_tongue']!="" && $userDATA['reg_mother_tongue']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Mother tongue</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_mother_tongue']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_mother_tongue']==$userDATA['reg_mother_tongue']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>



<?php
if($recMember['reg_preference_occupation']!="" && $userDATA['reg_occupation']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Occupation</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_occupation']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_occupation']==$userDATA['reg_occupation']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>




<?php
if($recMember['reg_preference_member_annual_income']!="" && $userDATA['reg_member_annual_income']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Income</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_member_annual_income']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_member_annual_income']==$userDATA['reg_member_annual_income']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>



<?php
if($recMember['reg_preference_eating_habits']!="" && $userDATA['reg_eating_habits']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Diet</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_eating_habits']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_eating_habits']==$userDATA['reg_eating_habits']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>


<?php
if($recMember['reg_preference_smoking_habits']!="" && $userDATA['reg_smoking_habits']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Diet</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_smoking_habits']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_smoking_habits']==$userDATA['reg_smoking_habits']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>



<?php
if($recMember['reg_preference_drinking_habits']!="" && $userDATA['reg_drinking_habits']!="" ){
?>
<div class="col-md-12 pd_0d">
<div class="col-md-3 mp_1">
<p>Drink</p>
</div>

<div class="col-md-7 mp_1">
<p> <?=$recMember['reg_preference_drinking_habits']?></p>
</div>
<div class="col-md-2 text-center">

<?php if($recMember['reg_preference_drinking_habits']==$userDATA['reg_drinking_habits']){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>

</div>
</div>
<?php
}
?>









</div>

</div>
</div>


</div>-->

</div>
</div> 
</div>
</section> 


<?php include("site-footer.php"); ?>
<!-------register----->
<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>
<script>
function send_request(memID){

$(document).ready(function(e) {
//alert(memID)
$.ajax({

url: "member-other-profile-request.php?MemID="+memID,
type: "POST",
contentType: false,
processData:false,
success: function(data){

//alert(data);

if(data!=0){

$("#action-load-area").html(data);		
$("#msg-other").show("slow")
$("#msg-other").html("<i class='fa fa-check font-black'></i> Your request is sent successfully")
setInterval(function(){$("#msg-other").fadeOut("slow")},3000);

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
function change_status(msgID,act,MemID){

$(document).ready(function(e) {
//alert(msgID)
$.ajax({

url: "change-status-other-profile.php?msgID="+msgID+"&act="+act+"&MemID="+MemID,
type: "POST",
contentType: false,
processData:false,
success: function(data){

if(data!=0){


if(act=="Declined"){
$("#action-load-area").html(data);
document.getElementById('action-msg').innerHTML='Selected request is ignored';		
}

if(act=="Send-Again"){
$("#action-load-area").html(data);
document.getElementById('action-msg').innerHTML='Request is sent again';		
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

url: "short-request-profile-detail.php?MemID="+memID,
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

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
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
<!--<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> -->
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible.js"></script> 
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






<!-------  Profile Photo ----------->
<style>
a.carousel-control.profile-photo{
background:none !important;	
}

span.glyphicon.glyphicon-chevron-left.profile-photo{
color:#b10a0a !important;
}

span.glyphicon.glyphicon-chevron-right.profile-photo{
color:#b10a0a !important;
}


.profile-photo{
background-color:#fff !important;	
}
</style>


<div class="modal fade" id="ProfilePhotoModal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-body">

<div id="myCarousel" class="carousel slide" >

<div class="carousel-inner">
    <div class="item active profile-photo " style="text-align:-webkit-center">
<img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" style="width:354px;height:442px" />
</div>
 
<?php
$sql="select * from  tbl_member_image where 1 and mem_image_cat_id='".$recMember['reg_id']."'";		
$sql_fetch = db_query($sql);
$cntDATA=mysqli_num_rows($sql_fetch);
$cnt=0;
if($cntDATA > 0){	
while($DATA = mysqli_fetch_array($sql_fetch)) {
$cnt++;	
?>
<div class="item <?php //if($cnt==1){  active <?php }?>profile-photo " style="text-align:-webkit-center">
<img src="member_images/<?=$DATA['mem_image_name']?>" style="width:354px;height:442px" />
</div>
<? }} ?>    


</div>

    <!-- Left and right controls -->
    <a class="left carousel-control profile-photo" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left profile-photo"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control profile-photo " href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right profile-photo"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</div>
<div class="modal-footer" style="text-align:center">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>