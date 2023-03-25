<link rel="stylesheet" type="text/css" href="css/other-profile-style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
<?php require_once("includes/dbsmain.inc.php");?>
<?php include("site-main-query.php");
date_default_timezone_set("asia/kolkata");
$todays_date=date("Y-m-d");
?>
<?php
$sql="SELECT * FROM tbl_registration WHERE reg_status='Active' AND reg_id='$mem'";
$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
$recMember=mysqli_fetch_array($dataMember);
}


//////////  ADDING IN VIEWD CONTACT /////////
$sql="SELECT pro_id FROM tbl_profile_view WHERE pro_view_by_mem_id='$_SESSION[userLoginId]' AND pro_view_to_mem_id='$mem' ";
$isExist=db_scalar($sql);

if(empty($isExist)){
$sql="INSERT INTO tbl_profile_view SET 
pro_view_by_mem_id='$_SESSION[userLoginId]',
pro_view_to_mem_id='$mem',
pro_date='".date("Y-m-d")."'
";
$res=db_query($sql);
}
/////////////////////////////////////////////



$matchCount=0;

if($recMember['reg_preference_marital_status']!="" && $userDATA['reg_marital_status']!="" && $userDATA['reg_preference_marital_status']==$recMember['reg_marital_status'] || $userDATA['reg_preference_marital_status']=="Doesn't Matter"){
$matchCount++;	
}

if($userDATA['reg_preference_age']!="0" && $recMember['reg_age']!="0" ){
  $flag3=0;
 $age_from=$userDATA['reg_preference_age'];
 $age_to=$userDATA['reg_preference_age_to'];
 if($recMember['reg_age']>=$age_from && $recMember['reg_age']<=$age_to){
  $flag3=1;
 }
 if($flag3==1){
$matchCount++;
}	
}

if($userDATA['reg_preference_height']!="" && $recMember['reg_height']!="" ){
  $flag2=0;
 $height_from=$userDATA['reg_preference_height'];
 $height_to=$userDATA['reg_preference_height_to'];
 if($recMember['reg_height']>=$height_from && $recMember['reg_height']<=$height_to){
  $flag2=1;
 }
 if($flag2==1){
$matchCount++;
}
}

if($userDATA['reg_preference_mother_tongue']!="" && $recMember['reg_mother_tongue']!="" && $userDATA['reg_preference_mother_tongue']==$recMember['reg_mother_tongue']){
$matchCount++;	
}

if($userDATA['reg_preference_religion']!="" && $recMember['reg_religion']!="" && $userDATA['reg_preference_religion']==$recMember['reg_religion']){
$matchCount++;	
}

if($userDATA['reg_preference_gotra']!="" && $recMember['reg_gotra']!="" && $userDATA['reg_preference_gotra']==$recMember['reg_gotra'] && $userDATA['reg_preference_gotra']!="undefined"){
$matchCount++;	
}

if($userDATA['reg_preference_namaz']!="" && $recMember['reg_namaz']!="" && $userDATA['reg_preference_namaz']==$recMember['reg_namaz'] && $userDATA['reg_preference_namaz']!="undefined"){
$matchCount++;	
}

if($userDATA['reg_preference_zakaat']!="" && $recMember['reg_zakaat']!="" && $userDATA['reg_preference_zakaat']==$recMember['reg_zakaat'] && $userDATA['reg_preference_zakaat']!="undefined"){
$matchCount++;	
}

if($userDATA['reg_preference_fasting']!="" && $recMember['reg_fasting']!="" && $userDATA['reg_preference_fasting']==$recMember['reg_fasting'] && $userDATA['reg_preference_fasting']!="undefined"){
$matchCount++;	
}


if($userDATA['reg_preference_dosh']!="" && $recMember['reg_dosh']!="" && $userDATA['reg_preference_dosh']==$recMember['reg_dosh'] && $userDATA['reg_preference_dosh']!="undefined"){
$matchCount++;	
}

if($userDATA['reg_preference_star']!="" && $recMember['reg_star']!="" && $userDATA['reg_preference_star']==$recMember['reg_star'] && $userDATA['reg_preference_star']!="undefined"){
$matchCount++;	
}

if($userDATA['reg_preference_dastar']!="" && $recMember['reg_dastar']!="" && $userDATA['reg_preference_dastar']==$recMember['reg_dastar'] && $userDATA['reg_preference_dastar']!="undefined"){
$matchCount++;	
}

if($userDATA['reg_preference_cast']!="" && $recMember['reg_cast']!="" && $userDATA['reg_preference_cast']==$recMember['reg_cast']){
$matchCount++;	
}

if($userDATA['reg_preference_sub_cast']!="" && $recMember['reg_sub_cast']!="" && $userDATA['reg_sub_preference_cast']==$recMember['reg_sub_cast']){
$matchCount++;  
}

if($userDATA['reg_preference_country_name']!="" && $recMember['reg_country_name']!="" ){

$flag=0;
$reg_pre_country=array();
$get_pre_country=$userDATA['reg_preference_country_name'];
$reg_pre_country=explode(",", $get_pre_country);
$country_count=count($reg_pre_country);
for($j=0; $j<=$country_count; $j++){
if($reg_pre_country[$j]==$recMember['reg_country_name']){
  $flag=1;
}
}
if($flag==1){
$matchCount++;	
}
}

if($userDATA['reg_preference_state_name']!="" && $recMember['reg_state_name']!="" && $userDATA['reg_preference_state_name']==$recMember['reg_state_name']){
$matchCount++;	
}

if($userDATA['reg_preference_city']!="" && $recMember['reg_city']!="" && $userDATA['reg_preference_city']==$recMember['reg_city']){
$matchCount++;	
}

if($userDATA['reg_preference_highest_edu']!="" && $recMember['reg_highest_edu']!="" && $userDATA['reg_preference_highest_edu']==$recMember['reg_highest_edu']){
$matchCount++;	
}

if($userDATA['reg_preference_occupation']!="" && $recMember['reg_occupation']!="" && $userDATA['reg_preference_occupation']==$recMember['reg_occupation'] || $userDATA['reg_preference_occupation']=="Any"){
$matchCount++;	
}


if($userDATA['reg_preference_member_annual_income']!="" && $recMember['reg_member_annual_income']!="" && $userDATA['reg_preference_member_annual_income']==$recMember['reg_member_annual_income']){
$matchCount++;	
}


if($userDATA['reg_preference_working_location']!="" && $recMember['reg_working_location']!="" && $userDATA['reg_preference_working_location']==$recMember['reg_working_location']){
$matchCount++;	
}


if($userDATA['reg_preference_appearance']!="" && $recMember['reg_appearance']!="" && $userDATA['reg_preference_appearance']==$recMember['reg_appearance']){
$matchCount++;	
}


if($userDATA['reg_preference_living_status']!="" && $recMember['reg_living_status']!="" && $userDATA['reg_preference_living_status']==$recMember['reg_living_status']){
$matchCount++;	
}

if($userDATA['reg_preference_physical_status']!="" && $recMember['reg_physical_status']!="" && $userDATA['reg_preference_physical_status']==$recMember['reg_physical_status']){
$matchCount++;	
}

if($userDATA['reg_preference_eating_habits']!="" && $recMember['reg_eating_habits']!="" && $userDATA['reg_preference_eating_habits']==$recMember['reg_eating_habits']){
$matchCount++;	
}

if($userDATA['reg_preference_smoking_habits']!="" && $recMember['reg_smoking_habits']!="" && $userDATA['reg_preference_smoking_habits']==$recMember['reg_smoking_habits']){
$matchCount++;	
}

if($userDATA['reg_preference_drinking_habits']!="" && $recMember['reg_drinking_habits']!="" && $userDATA['reg_preference_drinking_habits']==$recMember['reg_drinking_habits']){
$matchCount++;	
}

$match_counter=0;
if($userDATA['reg_marital_status']!=""){
$match_counter++;
}

if($userDATA['reg_age']!=""){
$match_counter++;
}

if($userDATA['reg_height']!=""){
$match_counter++;
}

if($userDATA['reg_mother_tongue']!=""){
$match_counter++;
}

if($userDATA['reg_religion']!=""){
$match_counter++;
}

if($userDATA['reg_gotra']!=""){
$match_counter++;
}

if($userDATA['reg_namaz']!=""){
$match_counter++;
}

if($userDATA['reg_zakaat']!=""){
$match_counter++;
}

if($userDATA['reg_fasting']!=""){
$match_counter++;
}

if($userDATA['reg_dosh']!=""){
$match_counter++;
}

if($userDATA['reg_star']!=""){
$match_counter++;
}

if($userDATA['reg_dastar']!=""){
$match_counter++;
}

if($userDATA['reg_sub_cast']!=""){
$match_counter++;
}

if($userDATA['reg_country_name']!=""){
$match_counter++;
}

if($userDATA['reg_state_name']!=""){
$match_counter++;
}

if($userDATA['reg_city']!=""){
$match_counter++;
}

if($userDATA['reg_highest_edu']!=""){
$match_counter++;
}

if($userDATA['reg_occupation']!=""){
$match_counter++;
}

if($userDATA['reg_member_annual_income']!=""){
$match_counter++;
}

if($userDATA['reg_working_location']!=""){
$match_counter++;
}

if($userDATA['reg_appearance']!=""){
$match_counter++;
}

if($userDATA['reg_living_status']!=""){
$match_counter++;
}

if($userDATA['reg_physical_status']!=""){
$match_counter++;
}

if($userDATA['reg_eating_habits']!=""){
$match_counter++;
}

if($userDATA['reg_smoking_habits']!=""){
$match_counter++;
}

if($userDATA['reg_drinking_habits']!=""){
$match_counter++;
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
.match-sty{width:80px; height:80px; border-radius:80px;}
/***.my-pro img{width:100%; border:solid 1px #efefef; border:solid 1px #ccc; height:271px;}***/
	.my-pro img{border:solid 0px #efefef;}
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
<!------------------>
<style type="text/css">
  .my-pro img {height:301px;}
	.pro-bg1{background-color:#f1f7f0; margin:0px; padding: 0px; box-shadow: 1px 1px 10px #ccc; height: 301px!important; width:100%!important; padding:5px; vertical-align: middle; display: table-cell;}
	.pro-bg1 img{width:auto; height:auto;}
	.mp0pp2{margin: 0px; padding: 0px;}
	.mp1opr{margin-left:0px; padding-left:10px;}
	.mp-0pp3{margin:0px; padding:0px;}
	.bg-clr-op{background-color:#00bbd4; padding:2px;}
	.mrpr-0s{}
	.outof-mach{font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:25px; margin-top:32px;}
		@media (min-width:320px) and (max-width:767px) 
		{  .outof-mach{font-size:16px; margin-top:10px;}
			.mrpr-0s{margin:0px; padding:0px;}
			.view-sty{font-size:18px;}
			.mp1opr{margin:auto; padding:15px;}
			.mp-0pp3{margin:auto; padding:15px;}
	.mp0pp2{margin:auto; padding:15px; padding-right: 0px;}
	.pro-bg1 {
    height:auto !important;
		width: auto;}
	 .pro-bg1 img{width:auto; height:auto;}}
</style> 
<!------------------->
  <section style="background-color:#f1f1f2;">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 all-sec">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 my-pro mp1opr">
    <!---<div class="col-md-12 col-xs-12 text-center mp03" style="background-color:#000">
    <a href="#" class="view-sty"><?="R".$recMember['reg_id']?></a></div>---->
    <div id="photo-req-loading" class="pro-bg1 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
		
      <?php
      $check_msg=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_to_mem_id='$recMember[reg_id]' AND msg_from_mem_id='$userDATA[reg_id]'");
        if(empty($check_msg)){
          $check_photo=$recMember['reg_profile_photo'];
          if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
            <img src="<?=SITE_WS_PATH?>/images/1.ico">
         <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
            <img src="<?=SITE_WS_PATH?>/images/2.png">
        <?php }else if(!empty($check_photo)){?>
          <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>">
		 
           <!-------<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pro-bg" style="background-color:#03c1ed;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp03"><a href="Javascript:void(0)" data-toggle="modal" data-target="#ProfilePhotoModal" class="view-sty"><i class="fa fa-camera"></i> View</a></div>
       </div>------>
       <?php }}else{
        $check_msgStatus=db_scalar("SELECT msg_status FROM tbl_msg_box WHERE msg_to_mem_id='$recMember[reg_id]' AND msg_from_mem_id='$userDATA[reg_id]'");
        
         if(empty($recMember['reg_profile_photo']) && $recMember['reg_gender']=="Female" && $check_msgStatus=="Accepted"){?>
            <img src="<?=SITE_WS_PATH?>/images/1.ico">
            <?php 
            $chk_photo_req=db_scalar("SELECT request_to FROM tbl_request WHERE request_to='$recMember[reg_id]'");
            if(empty($chk_photo_req)){?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pro-bg" style="background-color:#333232;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp03"><a href="Javascript:void(0)" onClick="photo_req('<?=$recMember[reg_id]?>','<?=$userDATA[reg_id]?>');" class="view-sty"><i class="fa fa-camera"></i> Photo Request</a></div>
       </div>
           <?php }else if(!empty($chk_photo_req)){?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pro-bg" style="background-color:#333232;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp03"><a href="Javascript:void(0)" class="view-sty"><i class="fa fa-camera"></i> Photo Requested</a></div>
       </div>
           <?php }?>
            
        
        <?php }else if(empty($recMember['reg_profile_photo']) && $recMember['reg_gender']=="Male" && $check_msgStatus=="Accepted"){?>
            <img src="<?=SITE_WS_PATH?>/images/2.png">
          
            <?php 
            $chk_photo_req=db_scalar("SELECT request_to FROM tbl_request WHERE request_to='$recMember[reg_id]'");
            if(empty($chk_photo_req)){?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pro-bg" style="background-color:#333232;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp03"><a href="Javascript:void(0)" onClick="photo_req('<?=$recMember[reg_id]?>','<?=$userDATA[reg_id]?>');" class="view-sty"><i class="fa fa-camera"></i> Photo Request</a></div>
       </div>
           <?php }else if(!empty($chk_photo_req)){?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pro-bg" style="background-color:#333232;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp03"><a href="Javascript:void(0)" class="view-sty"><i class="fa fa-camera"></i> Photo Requested</a></div>
       </div>
           <?php }?>

       <?php }else if(empty($recMember['reg_profile_photo']) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico">

      
      <?php }else if(empty($recMember['reg_profile_photo']) && $recMember['reg_gender']=="Male"){?>
            <img src="<?=SITE_WS_PATH?>/images/2.png">
         
     <?php }else if(!empty($recMember['reg_profile_photo'])){?>
      <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>">
          
      <?php }}?>
      </div>
		  <!----->
		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pro-bg bg-clr-op">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp03"><a href="Javascript:void(0)" data-toggle="modal" data-target="#ProfilePhotoModal" class="view-sty"><i class="fa fa-camera"></i> View</a></div>
       </div>
		  <!--------->
    </div>
      <!---end-images--->
      
       <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp-0pp3">
       
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl" style="margin-top:0px; margin-right:0px; padding-top:0px;  width:98%;">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd1" style="padding:0px 15px;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mrg0">
      <h4>
<?php
$reqAccepted=db_scalar("select msg_status from tbl_msg_box where (msg_from_mem_id='$recMember[reg_id]' and msg_to_mem_id='$userDATA[reg_id]') OR (msg_from_mem_id='$userDATA[reg_id]' and msg_to_mem_id='$recMember[reg_id]')");
?>          
          
<?php if(!empty($reqAccepted)){ echo $recMember['reg_name'];}?> (<?="R".$recMember['reg_id']?>) <span style="font-size:12px; color:#000;">Profile Created by | <span style="color:#063;"> <?=$recMember['reg_profile_manage_by']?></span> </span>

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
        <div class="col-md-12">
          <?php 
          $user_height=$recMember['reg_height'];
           ?>
          <p><i class="fa fa-user sze_icn" style="color:#00bbd4"></i> <?=$recMember['reg_age']?> yrs, <?=str_replace(".", "'", $user_height)?>" , Capricorn</p>
    </div>
     </div>
       <div class="clearfix"></div>
       
<?php
if(!empty($recMember['reg_highest_edu'])){?>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<p><i class="fa fa-graduation-cap" style="color:#00bbd4;"></i> <?=$recMember['reg_highest_edu']?></p>
</div>
</div>  
<?php }?>       
    
<?php
if(!empty($recMember['reg_occupation'])){?>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<p><i class="fa fa-black-tie" style="color:#00bbd4;"></i> <?=$recMember['reg_occupation']?></p>
</div>
</div> 
<?php }?>     
  
<?php
if(!empty($recMember['reg_marital_status'])){?>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<p><img src="images/ring.png" style="width:20px;"> <?=$recMember['reg_marital_status']?></p>
</div>
</div> 
<?php }?>
     
<?php
if(!empty($recMember['reg_religion'])){?>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<p><i class="fa fa-sitemap" style="color:#00bbd4;"></i> <?=$recMember['reg_religion']?></p>
</div>
</div> 
<?php }?>
     
<?php
if(!empty($recMember['reg_mother_tongue'])){?>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<p><img src="images/book.png" style="width:20px;"> <?=$recMember['reg_mother_tongue']?></p>
</div>
</div>  
<?php }?>   
    

<?php
$contact_view=db_scalar("select count(*) from tbl_contact_view where cv_view_by_mem_id='$userDATA[reg_id]' and  cv_view_to_mem_id='$recMember[reg_id]'");
if($contact_view>0){?>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1" id="member_mobile" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<p><i class="fa fa-mobile" style="font-size:24px; color:#03c1ed"></i> 
&nbsp;<?=$recMember['reg_member_verified_mobile']?>
</p>
</div>
</div>
<?php }else{?>
   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1" id="member_mobile" style="display:none;">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<p><i class="fa fa-mobile" style="font-size:24px; color:#03c1ed"></i> 
&nbsp;<span id="show_number"></span>
</p>
</div>
</div>
<?php }?>
     

     
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix"></div>
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <p><span style="color:#03C;">Online 
	   <?php if($recMember['reg_last_login']!="0000-00-00 00:00:00"){echo date("d M y",strtotime($recMember['reg_last_login']));}?></span> <a href="#"><i class="fa fa-commenting" style="font-size:20px; color:#00bbd4;"></i></a></p>
      </div>
     </div>
     <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center mrpr-0s">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:10px 0px;"> 
<?php if($_SESSION['userLoginId']!=""){
if($todays_date>=$userDATA['reg_membership_start_date'] && $todays_date<=$userDATA['reg_membership_expiry_date']){
    
 if($userDATA['reg_membership_view_credit']>0){
  if($contact_view==0){
   if(!empty($recMember['reg_member_verified_mobile'])){?>
      <a href="javascript:void(0)" id="view_contact_show"><i class="fa fa-mobile" data-toggle="tooltip" data-placement="right" title="View Contact" style="font-size:25px; color:#03c1ed"></i></a>
 <?php }else if(empty($recMember['reg_member_verified_mobile'])){?>
 
  <a href="javascript:void(0)" id="view_contact_not_avail"><i class="fa fa-mobile" data-toggle="tooltip" data-placement="right" title="View Contact" style="font-size:25px; color:#03c1ed"></i></a>
 
<?php }}else{?> 
 
    <a href="javascript:void(0)" id="view_contact_disable"><i class="fa fa-mobile" data-toggle="tooltip" data-placement="right" title="Contact Viewed" style="font-size:25px; color:#03c1ed"></i></a>
 
 <?php }?>
     
<?php }else{?> 
 <a href="javascript:void(0)" id="view_contact_hide"><i class="fa fa-mobile" data-toggle="tooltip" data-placement="right" title="View Contact" style="font-size:25px; color:#03c1ed"></i></a>

<?php }}else{?> 
 <a href="javascript:void(0)" id="view_contact_membership_expired"><i class="fa fa-mobile" data-toggle="tooltip" data-placement="right" title="View Contact" style="font-size:25px; color:#03c1ed"></i></a>
 
 <?php }?>    

<?php }else{?>
<a href="javascript:void(0)"><i class="fa fa-mobile" data-toggle="tooltip" data-placement="right" title="Please login to view contact" style="font-size:25px; color:#03c1ed"></i></a>
<?php }?>
<br><br>
<a href="Javascript:void(0)" ><i class="fa fa-ban" data-toggle="tooltip" data-placement="right" title="Block" style="font-size:18px; color:#03c1ed"></i></a>
<br><br>
</div>

<div id="short_load_area">
<?php 
  $sql_title3=db_query("SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$recMember[reg_id]' AND msg_from_mem_id='$userDATA[reg_id]') OR (msg_to_mem_id='$userDATA[reg_id]' AND msg_from_mem_id='$recMember[reg_id]')");
   $disp_title3=mysqli_fetch_array($sql_title3);
   if($disp_title3['msg_status']!="Accepted"){
    $sql="SELECT sl_id FROM tbl_shortlist WHERE sl_mem='$recMember[reg_id]' AND sl_by='$userDATA[reg_id]'";
    $checkShort=db_scalar($sql);
    if($checkShort!=""){
    ?>
    <a href="Javascript:void(0)" onClick="alert('Profile Shortlisted Already.')"><i class="fa fa-list-alt" data-toggle="tooltip" data-placement="right" title="Shortlisted" style="font-size:18px; color:#03c1ed"></i></a>
    <?php }else{?>
    <a href="Javascript:void(0)" onClick="short_request('<?=$recMember['reg_id']?>')" ><i class="fa fa-list-alt" data-toggle="tooltip" data-placement="right" title="Short" style="font-size:18px; color:#03c1ed"></i></a>
    <?php }}?> 
</div>
     </div>
     <div class="clearfix col-md-12" style="border-top:solid 1px #efefef; margin:0px; padding:0px; margin-top:10px;">


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd btop-10" id="action-load-area">
  <?php 
  $sql_title=db_query("SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$recMember[reg_id]' AND msg_from_mem_id='$userDATA[reg_id]') OR (msg_to_mem_id='$userDATA[reg_id]' AND msg_from_mem_id='$recMember[reg_id]')");
   $disp_title=mysqli_fetch_array($sql_title);
   if($disp_title['msg_status']=="Accepted"){?>
<h4 style="font-weight:bold; padding: 5px; border-radius: 5px; color:#4ba379; background-color: rgba(187,187,187,0.5);"><i class="fa fa-link" style="color:#7ba76d;"></i> Connected</h4>
  <?php }else if($disp_title['msg_status']=="Pending" || $disp_title['msg_status']=="PendingAgain"){
   $cond=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$recMember[reg_id]' AND msg_to_mem_id='$userDATA[reg_id]')");
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

<?php
$sql="SELECT * FROM tbl_msg_box WHERE (msg_to_mem_id='$recMember[reg_id]' AND msg_from_mem_id='$userDATA[reg_id]')";
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
$sql="SELECT * FROM tbl_msg_box WHERE (msg_from_mem_id='$recMember[reg_id]' AND msg_to_mem_id='$userDATA[reg_id]')";
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
if(isset($_REQUEST['receiver']) && isset($_REQUEST['mem'])){
  $receiv=$_REQUEST['receiver'];
  $memm=$_REQUEST['mem'];
  $sql_receiver=db_query("SELECT * FROM tbl_msg_box WHERE msg_from_mem_id='$_REQUEST[mem]' AND msg_to_mem_id='$_REQUEST[receiver]'");
  if(mysqli_num_rows($sql_receiver)>0){
    $receiver_data=mysqli_fetch_array($sql_receiver);
    $receiver_msg_status=$receiver_data['msg_status'];
    $message_id=$receiver_data['msg_id'];
    $is_declined=$receiver_data['is_declined_after_accept'];
    if($receiver_msg_status=="Pending" || $receiver_msg_status=="PendingAgain"){
    ?>  
    <a class="btn no-radius mb5 f14" id="acpt_btn" href="Javascript:void(0)" onClick="change_status('<?=$message_id?>','Accepted','<?=$recMember['reg_id']?>','<?=$receiv?>','<?=$memm?>')" ><i class="fa fa-check" id="acpt_icon" aria-hidden="true"></i> Accept</a>
    <a class="btn no-radius mb5 f14" id="dcln" href="other-profile.php?mem=<?=$memm?>&receiver=<?=$receiv?>" onClick="change_status('<?=$message_id?>','Declined','<?=$recMember['reg_id']?>','<?=$receiv?>','<?=$memm?>')" ><i class="fa fa-times-circle" id="dcln_icon" aria-hidden="true"></i> Decline</a>
   <?php }
   else if($is_declined=='Yes' && $receiver_msg_status=='Declined'){
    ?>
    <a class="btn no-radius mb5 f14" id="dcln" href="Javascript:void(0)" onClick="alert('You are declined the request')" ><i class="fa fa-exclamation-triangle" id="dcln_icon" aria-hidden="true"></i> Declined</a>
    <a class="btn no-radius mb5 f14" id="acpt_btn" href="Javascript:void(0)" onClick="change_status('<?=$message_id?>','Accepted','<?=$recMember['reg_id']?>','<?=$receiv?>','<?=$memm?>')" ><i class="fa fa-check" id="acpt_icon" aria-hidden="true"></i> Accept Again</a>
<?php }
    else if($is_declined=='No' && $receiver_msg_status=='Declined'){
    ?>  
    <a class="btn no-radius mb5 f14" id="dcln" href="Javascript:void(0)" onclick="alert('Request is Declined')" ><i class="fa fa-exclamation-triangle" id="dcln_icon" aria-hidden="true"></i> Declined</a>
    <a class="btn no-radius mb5 f14" id="acpt_btn" href="Javascript:void(0)" onClick="change_status('<?=$message_id?>','Accepted','<?=$recMember['reg_id']?>','<?=$receiv?>','<?=$memm?>')" ><i class="fa fa-check" id="acpt_icon" aria-hidden="true"></i> Accept</a>
   <?php }
    else if($receiver_msg_status=="Accepted"){?>
<a href="Javascript:void(0)" onClick="alert('Request is already accepted')" id="snd_msg" class="btn no-radius ml5 mb5 f14"><i class="fa fa-envelope" id="msg_icon" aria-hidden="true"></i> Send Message</a>

<a href="other-profile.php?mem=<?=$memm?>&receiver=<?=$receiv?>" id="dcln" onClick="change_status('<?=$message_id?>','Declined','<?=$recMember['reg_id']?>','<?=$receiv?>','<?=$memm?>')" class="btn no-radius mb5 f14"><i class="fa fa-times-circle" id="dcln_icon" aria-hidden="true"></i> Decline Request</a>
 <?php }
   else if($receiver_msg_status=="Cancelled"){
   ?>  
  <script type="text/javascript">
    window.location.href="pending.php";
  </script>    
  <?php }}}
else{
?>
<?php if($currStatus!="None" && $currStatus=='Pending' || $currStatus=='PendingAgain' ){
$cond=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$recMember[reg_id]' AND msg_to_mem_id='$userDATA[reg_id]')");
if($cond!=0){?>
      <a class="btn no-radius mb5 f14" id="acpt_btn" href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Accepted','<?=$recMember['reg_id']?>','','')"><i class="fa fa-check" id="acpt_icon" aria-hidden="true"></i> Accept</a>
    <a class="btn no-radius mb5 f14" id="dcln" href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Declined','<?=$recMember['reg_id']?>','','')" ><i class="fa fa-times-circle" id="dcln_icon" aria-hidden="true"></i> Decline</a>

<?php }else{ ?>

<a href="Javascript:void(0)" id="dcln" onClick="change_status('<?=$currMsgID?>','Cancelled','<?=$recMember['reg_id']?>','','')" class="btn no-radius mb5 f14"><i class="fa fa-times-circle" id="dcln_icon" aria-hidden="true"></i> Cancel</a>

<a href="Javascript:void(0)" id="sndR_btn" onClick="change_status('<?=$currMsgID?>','Reminder','<?=$recMember['reg_id']?>','','')" class="btn no-radius mb5 f14"><i class="fa fa-bell" id="sndR_icon" aria-hidden="true"></i> Send Reminder</a>

<?php } ?>

<?php }else if($currStatus!="None" && $currStatus=='Cancelled'){
$cond=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$recMember[reg_id]' AND msg_to_mem_id='$userDATA[reg_id]')");
if($cond!=0){ ?>
<a href="Javascript:void(0)" onClick="send_request('<?=$recMember['reg_id']?>')" id="sndAgain_btn" class="btn no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" id="sndAgain_icon" aria-hidden="true">&nbsp;&nbsp;</i>Send Invitation</a>
<?php }else{ ?>

<a href="Javascript:void(0)" onClick="alert('Request is already cancelled by you.')" id="dcln" class="btn no-radius ml5 mb5 f14"><i class="fa fa-exclamation-triangle" id="dcln_icon" aria-hidden="true"></i> Cancelled</a>

<a href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Send-Again','<?=$recMember['reg_id']?>','','')" id="sndAgain_btn" class="btn no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" id="sndAgain_icon" aria-hidden="true">&nbsp;&nbsp;</i>Send Again</a>

<?php }}else if($currStatus!="None" && $currStatus=='Declined'){
$is_decl=db_scalar("SELECT is_declined_after_accept FROM tbl_msg_box WHERE (msg_from_mem_id='$recMember[reg_id]' AND msg_to_mem_id='$userDATA[reg_id]')");  
$cond=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$recMember[reg_id]' AND msg_to_mem_id='$userDATA[reg_id]')");
if($cond!=0){
 if($is_decl=='Yes'){ ?>
    <a class="btn no-radius mb5 f14" id="dcln" href="Javascript:void(0)" onClick="alert('You are declined the request')" ><i class="fa fa-exclamation-triangle" id="dcln_icon" aria-hidden="true"></i> Declined</a>
    <a class="btn no-radius mb5 f14" id="acpt_btn" href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Accepted','<?=$recMember['reg_id']?>','','')"><i class="fa fa-check" id="acpt_icon" aria-hidden="true"></i> Accept Again</a>
<?php }else if($is_decl=='No'){ ?>
<a class="btn no-radius mb5 f14" id="dcln" href="Javascript:void(0)" onclick="alert('Request is declined by you')" ><i class="fa fa-exclamation-triangle" id="dcln_icon" aria-hidden="true"></i> Declined</a>
<a class="btn no-radius mb5 f14" id="acpt_btn" href="Javascript:void(0)" onClick="change_status('<?=$currMsgID?>','Accepted','<?=$recMember['reg_id']?>','','')" ><i class="fa fa-check" id="acpt_icon" aria-hidden="true"></i> Accept</a>

<?php }}else{ ?>
<a href="Javascript:void(0)" id="dcln" onClick="alert('Request is declined by receiver')" class="btn no-radius ml5 mb5 f14"><i class="fa fa-check-circle" id="dcln_icon" aria-hidden="true"></i> Declined</a>

<a href="Javascript:void(0)" id="sndAgain_btn" onClick="change_status('<?=$currMsgID?>','Send-Again','<?=$recMember['reg_id']?>','','')"  class="btn no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" id="sndAgain_icon" aria-hidden="true">&nbsp;&nbsp;</i>Send Again</a>

<?php }}else if($currStatus!="None" && $currStatus=='Accepted'){
$cond=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$recMember[reg_id]' AND msg_to_mem_id='$userDATA[reg_id]')");
if($cond!=0){?>
<a href="Javascript:void(0)" onClick="alert('Request is already accepted')" id="snd_msg" class="btn no-radius ml5 mb5 f14"><i class="fa fa-envelope" id="msg_icon" aria-hidden="true"></i> Send Message</a>

<a href="other-profile.php?mem=<?=$recMember['reg_id']?>" id="dcln" onClick="change_status('<?=$currMsgID?>','Declined','<?=$MemID?>')" class="btn btn-danger no-radius mb5 f14" ><i class="fa fa-times-circle" id="dcln_icon" aria-hidden="true"></i> Decline Request</a>

<?php }else{ ?>
<a href="Javascript:void(0)" onClick="alert('Request is already accepted')" id="snd_msg" class="btn no-radius mb5 f14"><i class="fa fa-envelope" id="msg_icon" aria-hidden="true"></i> Send Message</a>

<a href="Javascript:void(0)" id="dcln" onClick="change_status('<?=$currMsgID?>','Cancelled','<?=$recMember['reg_id']?>','','')" class="btn no-radius mb5 f14"><i class="fa fa-times-circle" id="dcln_icon" aria-hidden="true"></i> Cancel Request</a>

<?php }}else{?>
<a href="Javascript:void(0)" onClick="send_request('<?=$recMember['reg_id']?>')" id="sndAgain_btn" class="btn no-radius ml5 mb5 f14"><i class="fa fa-paper-plane-o" id="sndAgain_icon" aria-hidden="true">&nbsp;&nbsp;</i>Yes</a>
<?php }?>

<span class="text-success bold text-center" style="display:none" id="msg-other"><i class="fa fa-check font-black"></i> Request has been sent successfully.</span>

<?php }?>

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
     
     
     
      <!-- <a href="#" class="otprf-btn"><i class="fa fa-star"></i> Short List</a>-->
       
       
       
<!--         <a href="#" class="otprf-btn"><i class="fa fa-envelope"></i> Send Mail</a>
        <a href="#" class="otprf-btn"><i class="fa fa-lock" style="font-size:18px;"></i> Block</a> -->
        


  <!-- <?php if($_SESSION['userLoginId']!="" && $_SESSION['userMembership']>0){?>        
  <a onClick="return confirm('You are about to spend a view credit, want to continue ?')" href="view-contact-detail.php?MID=<?=base64_encode($recMember['reg_id'])?>" class="otprf-btn pull-right"><i class="fa fa-envelope" style="font-size:18px;"></i> View Contact</a>
  <?php }else{?>        
  <a href="upgrade.php" class="otprf-btn pull-right"><i class="fa fa-envelope" style="font-size:18px;"></i> View Contact</a>
  <?php }?>   -->      
        <br>
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
        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 hidden-xs" style="margin-top:-10px;">
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
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>A Few Words About Myself</h4>
  </div>
      <!--<div class="col-md-2 col-xs-2 wd-btn"><!--  <a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> --> <!--</div>-->
      
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
      <!--<div class="col-md-2 col-xs-2 wd-btn"><!--<a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a>--> <!--</div>-->
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
          <p><?=$recMember['reg_gender']?></p>
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
      <?php 
      $user_height=$recMember['reg_height'];
      ?>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=str_replace(".", "'", $user_height)?>"  (<?=number_format($recMember['reg_height']*30.48,0)?>cm)</p>
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
      <!--<div class="col-md-2 col-xs-2 wd-btn"><!-- <a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> --> <!--</div>-->
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
      <!--<div class="col-md-2 col-xs-2 wd-btn"><!-- <a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> --> <!--</div>-->
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
      <!--<div class="col-md-2 col-xs-2 wd-btn"><!-- <a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> --> <!--</div>---->
  </div>
   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Highest Education</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_highest_edu']?></p>
  </div>
  </div>
     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
          <h5>Educational Details</h5>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
          <p><?=$recMember['reg_edu_detail']?></p>
  </div>
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
      <!--<div class="col-md-2 col-xs-2 wd-btn"><!-- <a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> --> <!--</div>-->
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
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp-02 pd-left mp_04">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd1" style="margin:10px; width:99%;">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mrg0">
            <h4><i class="fa fa-star"></i> Partner Preference</h4>
        </div>
    </div>
        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 hidden-sm hidden-xs" style="margin-top:-10px;">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <div class="brd-styd" style="height:30px;"></div>
       <i class="fa fa-eye crcle-icon" style="color:#ef3079"></i>
    </div>
    </div>
        <!----->
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 mp0pp2">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
    </div>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <img src="<?=SITE_WS_PATH?>/upload_images/<?=$userDATA['reg_profile_photo']?>"  class="match-sty mach-imgs">
		<style>
			
			.mprt30{margin-right: 30px;}
			.ptr-nmd1{}
			.mach-imgs{
    width: 80px;
    height: 80px;
    border-radius:100%;
}
			.btop-10{margin-top: 10px;}
			@media (min-width:320px) and (max-width:767px) 
			{
				.mach-imgs{border-radius:100%; height: 60px; width: 60px;}
				.m0p0r{margin:0px; padding:0px;}
	.mprt30{margin:auto;}
				.ptr-nmd1{text-align: left;}
}</style>
      <h5 class="ptr-nm mprt30">Your Preferences</h5>
      
      </div>
    </div>
		 
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1 text-center">
     <h2 class="outof-mach"><?=$matchCount?> out of <?=$match_counter?> matching</h2>
     <img src="images/border1.png">
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1 text-right">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="match-sty mach-imgs">
      <h5 class="ptr-nm ptr-nmd1">
      <?php if($recMember['reg_gender']=="Male"){?>            
      His
      <?php }?>
      
      <?php if($recMember['reg_gender']=="Female"){?>            
      Her 
      <?php }?>
      Match
        
      </h5>
      </div>
    </div>
    <div class="clearfix"></div>
    
<?php 
$flag3=0;
if($userDATA['reg_preference_age']!="0" && $recMember['reg_age']!="0" ){
 $age_from=$userDATA['reg_preference_age'];
 $age_to=$userDATA['reg_preference_age_to'];
 if($recMember['reg_age']>=$age_from && $recMember['reg_age']<=$age_to){
  $flag3=1;
 }?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d" style="margin-top:30px;">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Age</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_age']?> - <?=$userDATA['reg_preference_age_to']?> Years</p>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">
<?php if($flag3==1){?>
<img src="images/right.png" class="mtch-icn pd_1"> 
<?php }else{?>
<img src="images/close.png" class="not-match"> 
<?php }?>
</div>
</div>
<?php }?>



<?php
if($userDATA['reg_preference_marital_status']!="" && $recMember['reg_marital_status']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Marital Status</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_marital_status']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_marital_status']==$recMember['reg_marital_status'] || $userDATA['reg_preference_marital_status']=="Doesn't Matter"){?>
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
$flag2=0;
if($userDATA['reg_preference_height']!="" && $recMember['reg_height']!="" ){
 $height_from=$userDATA['reg_preference_height'];
 $height_to=$userDATA['reg_preference_height_to'];
 if($recMember['reg_height']>=$height_from && $recMember['reg_height']<=$height_to){
  $flag2=1;
 }?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Height</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<?php 
$user_height=$userDATA['reg_preference_height'];
$user_height_to=$userDATA['reg_preference_height_to'];

 ?>
<p><?=str_replace(".", "'", $user_height)?>" -  <?=str_replace(".", "'", $user_height_to)?>" </p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($flag2==1){?>
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
if($userDATA['reg_preference_highest_edu']!="" && $recMember['reg_highest_edu']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Highest Education</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_highest_edu']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_highest_edu']==$recMember['reg_highest_edu']){?>
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
if($userDATA['reg_preference_working_location']!="" && $recMember['reg_working_location']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Working Location</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_working_location']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_working_location']==$recMember['reg_working_location']){?>
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
if($userDATA['reg_preference_appearance']!="" && $recMember['reg_appearance']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Appearance</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_appearance']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_appearance']==$recMember['reg_appearance']){?>
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
if($userDATA['reg_preference_living_status']!="" && $recMember['reg_living_status']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Living Status</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_living_status']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_living_status']==$recMember['reg_living_status']){?>
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
if($userDATA['reg_preference_physical_status']!="" && $recMember['reg_physical_status']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Physical Status</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_physical_status']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_physical_status']==$recMember['reg_physical_status']){?>
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
if($userDATA['reg_preference_country_name']!="" && $recMember['reg_country_name']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Country</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_country_name']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">
<?php 
$flag=0;
$reg_pre_country=array();
$get_pre_country=$userDATA['reg_preference_country_name'];
$reg_pre_country=explode(",", $get_pre_country);
$country_count=count($reg_pre_country);
for($j=0; $j<=$country_count; $j++){
if($reg_pre_country[$j]==$recMember['reg_country_name']){
  $flag=1;
}
}

if($flag==1){?>
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
if($userDATA['reg_preference_state_name']!="" && $recMember['reg_state_name']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>State</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_state_name']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_state_name']==$recMember['reg_state_name']){?>
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
if($userDATA['reg_preference_city']!="" && $recMember['reg_city']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>City</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_city']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_city']==$recMember['reg_city']){?>
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
if($userDATA['reg_preference_religion']!="" && $recMember['reg_religion']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Religion</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_religion']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_religion']==$recMember['reg_religion']){?>
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
if($userDATA['reg_preference_cast']!="" && $recMember['reg_cast']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Cast</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_cast']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_cast']==$recMember['reg_cast']){?>
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
if($userDATA['reg_preference_sub_cast']!="" && $recMember['reg_sub_cast']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Sub Cast</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_sub_cast']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_sub_cast']==$recMember['reg_sub_cast']){?>
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
if($userDATA['reg_preference_dosh']!="" && $recMember['reg_dosh']!="" && $userDATA['reg_preference_dosh']!="undefined"){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Dosh</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_dosh']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_dosh']==$recMember['reg_dosh']){?>
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
if($userDATA['reg_preference_star']!="" && $recMember['reg_star']!="" && $userDATA['reg_preference_star']!="undefined"){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Star</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_star']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_star']==$recMember['reg_star']){?>
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
if($userDATA['reg_preference_dastar']!="" && $recMember['reg_dastar']!=""  && $userDATA['reg_preference_dastar']!="undefined"){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Dastar</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_dastar']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_dastar']==$recMember['reg_dastar']){?>
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
if($userDATA['reg_preference_gotra']!="" && $recMember['reg_gotra']!=""  && $userDATA['reg_preference_gotra']!="undefined"){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Gotra</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_gotra']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_gotra']==$recMember['reg_gotra']){?>
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
if($userDATA['reg_preference_namaz']!="" && $recMember['reg_namaz']!=""  && $userDATA['reg_preference_namaz']!="undefined"){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Namaz</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_namaz']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_namaz']==$recMember['reg_namaz']){?>
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
if($userDATA['reg_preference_zakaat']!="" && $recMember['reg_zakaat']!=""  && $userDATA['reg_preference_zakaat']!="undefined"){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Zakaat</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_zakaat']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_zakaat']==$recMember['reg_zakaat']){?>
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
if($userDATA['reg_preference_fasting']!="" && $recMember['reg_fasting']!=""  && $userDATA['reg_preference_fasting']!="undefined"){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Fasting</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_fasting']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_fasting']==$recMember['reg_fasting']){?>
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
if($userDATA['reg_preference_mother_tongue']!="" && $recMember['reg_mother_tongue']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Mother tongue</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_mother_tongue']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_mother_tongue']==$recMember['reg_mother_tongue']){?>
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
if($userDATA['reg_preference_occupation']!="" && $recMember['reg_occupation']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Occupation</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_occupation']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_occupation']==$recMember['reg_occupation'] || $userDATA['reg_preference_occupation']=="Any"){?>
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
if($userDATA['reg_preference_member_annual_income']!="" && $recMember['reg_member_annual_income']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Income</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_member_annual_income']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_member_annual_income']==$recMember['reg_member_annual_income']){?>
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
if($userDATA['reg_preference_eating_habits']!="" && $recMember['reg_eating_habits']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Diet</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_eating_habits']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_eating_habits']==$recMember['reg_eating_habits']){?>
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
if($userDATA['reg_preference_smoking_habits']!="" && $recMember['reg_smoking_habits']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Diet</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_smoking_habits']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_smoking_habits']==$recMember['reg_smoking_habits']){?>
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
if($userDATA['reg_preference_drinking_habits']!="" && $recMember['reg_drinking_habits']!="" ){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd_0d">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_1">
<p>Drink</p>
</div>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mp_1">
<p> <?=$userDATA['reg_preference_drinking_habits']?></p>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 m0p0r text-center">

<?php if($userDATA['reg_preference_drinking_habits']==$recMember['reg_drinking_habits']){?>
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
<!----life-style------->

</div>

</div>
</div> 
</div>
</section> 


<?php include("site-footer.php"); ?>
<!-------register----->
<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script>

$(document).ready(function(){
    
    
    $('#view_contact_disable').css({"cursor":"none"});
    
    $('#view_contact_not_avail').click(function(){
        swal("Sorry!", " Contact number is not available.", "warning");
    });
    
    $('#view_contact_hide').click(function(){
        swal("Sorry!", " As a Free Member you cannot see contact details of other users.", "warning");
    });
    
    $('#view_contact_membership_expired').click(function(){
        swal("Sorry!", " To see contact details of other users you need to upgrade membership.", "error");
    });
    
    $('#view_contact_show').click(function(){
        swal("Great!", " Now you are able to see this profile contact number.", "success");
        var view_by_memid='<?=$userDATA[reg_id]?>';
        var view_to_memid='<?=$recMember[reg_id]?>';
        
        $.ajax({
            url:"ajaxContactView.php",
            type:"post",
            data:{view_by_memid:view_by_memid,view_to_memid:view_to_memid},
            success:function(data){
               $('#member_mobile').fadeIn("slow");
               $('#view_contact_show').fadeOut("slow");
               $('#show_number').html(data.trim());
               
            }
        });
        
    });
});

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

<!-- Photo Request -->
<script type="text/javascript">
  function photo_req(MemID,userid){
    $(document).ready(function(e){
      $.ajax({
      url:"photo-req.php",
      type:"POST",
      data:{MemID:MemID,userid:userid},
      success:function(data){
        if(data!=0){
document.getElementById('action-msg').innerHTML='Photo Request Sent';    
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);
$('#photo-req-loading').load("photo-req-load.php?MemID=<?=$recMember['reg_id']?>&userid=<?=$userDATA['reg_id']?>");

        }else{
alert('Unable to sent request now, try again later.');
        }       
      }
      });

    });
  }

</script>


<script>
function change_status(msgID,act,MemID,receive,memm){

$(document).ready(function(e) {
//alert(act)

$.ajax({

url: "change-status-other-profile.php?msgID="+msgID+"&act="+act+"&MemID="+MemID+"&receive="+receive+"&memm="+memm,
type: "POST",
contentType: false,
processData:false,
success: function(data){

if(data!=0){


if(act=="Cancelled"){
$("#action-load-area").html(data);
document.getElementById('action-msg').innerHTML='Selected request is cancelled';		
}

if(act=="Send-Again"){
$("#action-load-area").html(data);
document.getElementById('action-msg').innerHTML='Request is sent again';		
}

if(act=="Reminder"){
//$("#action-load-area").html(data);
document.getElementById('action-msg').innerHTML=data;    
}

if(act=="Accepted"){
$("#action-load-area").html(data);
document.getElementById('action-msg').innerHTML="Request Accepted";    
}

if(act=="Declined"){
$("#action-load-area").html(data);
document.getElementById('action-msg').innerHTML="Request Declined";    
}

document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);


}else{
alert('Unable to sent request now, try again later.');	
}

},
error: function(){} 	        	   

});

$('#short_load_area').load("short-load.php?msgid=<?=$currMsgID?>&memid=<?=$recMember['reg_id']?>&userid=<?=$userDATA['reg_id']?>");

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

/*$("#short_req_load_area"+memID).html(data);		
$("#msg_short"+memID).show("slow")
$("#msg_short"+memID).html("<i class='fa fa-check font-black'></i> Your selection short listed successfully")
setInterval(function(){$("#msg_short"+memID).fadeOut("slow")},3000);*/
document.getElementById('action-msg').innerHTML="Profile Shortlisted.";    

document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);
}else{
document.getElementById('action-msg').innerHTML="Profile Shortlisted Already.";
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);
  
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
    
<?php
$sql="select * from  tbl_member_image where 1 and mem_image_cat_id='".$recMember['reg_id']."'";		
$sql_fetch = db_query($sql);
$cntDATA=mysqli_num_rows($sql_fetch);
$cnt=0;
if($cntDATA > 0){	
while($DATA = mysqli_fetch_array($sql_fetch)) {
$cnt++;	
?>
<div class="item <?php if($cnt==1){?>  active <?php }?>profile-photo " style="text-align:-webkit-center">
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