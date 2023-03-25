<?php require_once("includes/dbsmain.inc.php");?>
<?php include("site-main-query.php");
if(empty($_SESSION['userLoginId'])){
  header("location:index.html");  
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
<!doctype html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>ApniMatrimony</title>
<meta name="robots" content="index, follow" />

<!-- Stylesheets -->
<link href="<?=SITE_WS_PATH?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style1.css" rel="stylesheet">


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
<!--------pie-chart-----skill------>
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/progress-circle.css">
<!----->
</head>
<!--------->
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
  <!---button--->
  <style>
	  .pro-bg1{background-color:#f1f7f0; margin:0px; padding: 0px; box-shadow: 1px 1px 10px #ccc; height: 302px!important; width:100%!important; padding:5px; vertical-align: middle; display: table-cell;}
	  
  .pro-bg1 img{width:auto; height:auto;}
	  .view-sty {
    display: block;
    color: #000 !important;
    font-size: 14px;
}
	  .my-pro img{border: solid 0px #efefef;}
	  /***.my-pro img {
    width: 100%;
    border: solid 1px #efefef;
    box-shadow: 1px 1px 10px #ccc;****/
		  
}
	  .syb {
    font-size: 20px;
    color: #000 !important;
}
	  .mp0myp2{margin:0px; padding:0px;}
	  .mpsd3pr{margin:0px; padding:0px;}
	  .mpsd4pr{}
@media (min-width:320px) and (max-width:767px) 
{
.pro-bg1 {
    height:auto !important;
		width: auto;}
	 .pro-bg1 img{width:auto; height:auto;}
	 .mpsd3pr{margin:auto; padding:15px;}
	.mpsd4pr{margin:0; padding:0px; margin-top:10px;}
 .mp0myp2{margin: 0px; padding-right: 0px !important; padding:15px;}
	.bg-clrd2 h4 {
    padding: 8px 0px 0px 0px;
    font-size: 17px;
}
.mp0myp, .mp0myp1{margin:0px !important; padding:0px !important;}
	.mp03-mfres {
    margin-right:0px !important;
}
	.progress-circle {right:15px;}
	.vrfyd {
		left: 230px;}
	.wd-btn{margin:0; padding:0px;}
	.edit-btn {left: 0px; font-size: 10px;}
}
 </style>
  <section style="background-color:#f1f1f2;">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 all-sec">
			
			
			
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 my-pro text-center">
		   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pro-bg1 text-center">
        <?php 
        $check_photo=$userDATA['reg_profile_photo'];
        if(empty($check_photo) && $userDATA['reg_gender']=="Female"){?>
        <center><img src="<?=SITE_WS_PATH?>/images/1.ico" style="width: 200px; height:200px !important; border-radius:200px; margin-top:53px; margin-bottom: 10px; background:url("images/frame.jpg");">
       <?php }else if(empty($check_photo) && $userDATA['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" style="width: 200px; !important; border-radius:200px; margin-top:53px; margin-bottom: 10px; background:url("images/frame.jpg");">
       <?php }else if(!empty($check_photo)){?>
        <img src="<?=SITE_WS_PATH?>/upload_images/<?=$userDATA['reg_profile_photo']?>"></center>
       <?php }?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pro-bg" style="background-color:#f1f7f0;  padding: 4px;">
        
    <?    
    if($userDATA['reg_profile_photo']=="")
        {?>    
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp03 text-center mp03-mfres"><a href="Javascript:void(0)" onClick ="PopupWindowCenter('manage-profile-photo.php?memId=<?=$userDATA['reg_id']?>', 'PopupWindowCenter',800,500);" class="view-sty"><i class="fa fa-plus-square-o"></i> Add Profile Photo</a></div>
        <?}else{?>
        <div style="position: relative; left:14px;">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right mp03 mp03-mfres"><a href="Javascript:void(0)" data-toggle="modal" data-target="#ProfilePhotoModal" class="view-sty"><i class="fa fa-camera"></i> View Photo</a></div>
			
        
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1  syb" style="margin: 0px; padding: 0px;">|</div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 mp03 text-left"><a href="Javascript:void(0)" onClick ="PopupWindowCenter('manage-photo.php?memId=<?=$userDATA['reg_id']?>', 'PopupWindowCenter',800,500);" class="view-sty"><i class="fa fa-plus-square-o"></i> Add Photo</a></div></div>
    
    
      <!--   Change Profile photo section   
      
      
      <div class="col-md-12 col-xs-12 mp03 text-center"><a href="Javascript:void(0)" onClick ="PopupWindowCenter('manage-profile-photo.php?memId=<?=$userDATA['reg_id']?>', 'PopupWindowCenter',800,500);" class="view-sty"><i class="fa fa-plus-square-o"></i> Change Profile Photo</a></div>
      
      -->
      
        <?}?>
        
  
    </div>
			   
  </div>
      <!---end-images--->
      
       <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mpsd3pr">
       
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bg-wth b-dtl" style="margin-top:0px; margin-right:0px; padding-top:2px;">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="border-right:solid 1px #efefef; margin-bottom:8px;">
       <h3 style="padding:10px; color:#009aae; padding:0px 0px; margin:0px;"><?=$userDATA['reg_name']?></h3>
       <p class="m-styd">Profile Created By : <?=$userDATA['reg_profile_manage_by']?></p>
       <p class="m-styd"><i class="fa fa-user sze_icn ft01"></i> <?=$userDATA['reg_age']?> yrs</p>
        <?php 
          $user_height=$userDATA['reg_height'];
         ?>
       <p class="m-styd"><i class="fa fa-arrows sze_icn ft01" ></i> <?=str_replace(".", "'", $user_height)?>" , Capricorn</p>
      
       <p class="m-styd"><img src="images/ring.png" style="width:15px;"> <?=$userDATA['reg_marital_status']?></p>
       
       
       <p class="m-styd"><img src="images/book.png" class="ft01" style="width:15px;"> <?=$userDATA['reg_preference_religion']?></p>
       <p class="m-styd"><i class="fa fa-black-tie sze_icn ft01"></i> <?=$userDATA['reg_occupation']?></p>
        <p class="m-styd"><i class="fa fa-money  sze_icn ft01"></i> <?=$userDATA['reg_annual_income']?></p>
         <p class="m-styd"><i class="fa fa-map-marker sze_icn ft01"></i> <?=$userDATA['reg_working_location']?></p>
    </div>
      
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
          <a target="_blank" href="profile-preview.php?id=<?=$userDATA['reg_id']?>" title="profile Preview"><i class="fa fa-eye-slash" style="font-size:20px;"></i></a>
      </div>
       
        <div class="clearfix"></div>
      
  </div>
  
  <!--Profile Completion calculation Start-->
  
          <?php
        $points=0;
        $calculate_profile=db_query("select * from tbl_registration where reg_id='$userDATA[reg_id]'");
        while($calc=mysqli_fetch_array($calculate_profile)){
         if($calc['reg_religion']=="Muslim"){
            
            if($calc['reg_height']!=""){
                $points+=2.39;
            }
            if($calc['reg_marital_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_mother_tongue']!=""){
                $points+=2.39;
            }
            if($calc['reg_is_any_disability']!=""){
                $points+=2.39;
            }
            if($calc['reg_aadhar_number']!=""){
                $points+=2.39;
            }
            if($calc['reg_blood_group']!=""){
                $points+=2.39;
            }
            if($calc['reg_father_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_mother_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_family_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_family_type']!=""){
                $points+=2.39;
            }
            if($calc['reg_family_values']!=""){
                $points+=2.39;
            }
            if($calc['reg_annual_income']!=""){
                $points+=2.39;
            }
            if($calc['reg_family_living_in']!=""){
                $points+=2.39;
            }
            if($calc['reg_edu_detail']!=""){
                $points+=2.39;
            }
            if($calc['reg_occupation']!=""){
                $points+=2.39;
            }
            if($calc['reg_member_annual_income']!=""){
                $points+=2.39;
            }
            if($calc['reg_organization_name']!=""){
                $points+=2.39;
            }
            if($calc['reg_working_location']!=""){
                $points+=2.39;
            }
            if($calc['reg_sub_cast']!=""){
                $points+=2.39;
            }
            if($calc['reg_namaz']!="0"){
                $points+=2.39;
            }
            if($calc['reg_zakaat']!="undefined"){
                $points+=2.39;
            }
            if($calc['reg_fasting']!="undefined"){
                $points+=2.39;
            }
            if($calc['reg_living_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_eating_habits']!=""){
                $points+=2.39;
            }
            if($calc['reg_smoking_habits']!=""){
                $points+=2.39;
            }
            if($calc['reg_drinking_habits']!=""){
                $points+=2.39;
            }
            if($calc['reg_hobbies']!=""){
                $points+=2.39;
            }
            if($calc['reg_interests']!=""){
                $points+=2.39;
            }
            if($calc['reg_favourite_music']!=""){
                $points+=2.39;
            }
            if($calc['reg_favourite_book']!=""){
                $points+=2.39;
            }
            if($calc['reg_dress_style']!=""){
                $points+=2.39;
            }
            if($calc['reg_tv_shows']!=""){
                $points+=2.39;
            }
            if($calc['reg_member_alt_mobile']!=""){
                $points+=2.39;
            }
            if($calc['reg_member_verified_mobile']!=""){
                $points+=2.39;
            }
            if($calc['reg_profile_photo']!=""){
                $points+=2.39;
            }
            if($calc['reg_city']!=""){
                $points+=2.39;
            }
            if($calc['reg_annual_income']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_city']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_member_annual_income']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_working_location']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_living_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_eating_habits']!=""){
                $points+=2.39;
            }
            
            
            
         }
         else if($calc['reg_religion']=="Hindu"){
             
            if($calc['reg_height']!=""){
                $points+=2.39;
            }
            if($calc['reg_marital_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_mother_tongue']!=""){
                $points+=2.39;
            }
            if($calc['reg_is_any_disability']!=""){
                $points+=2.39;
            }
            if($calc['reg_aadhar_number']!=""){
                $points+=2.39;
            }
            if($calc['reg_blood_group']!=""){
                $points+=2.39;
            }
            if($calc['reg_father_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_mother_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_family_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_family_type']!=""){
                $points+=2.39;
            }
            if($calc['reg_family_values']!=""){
                $points+=2.39;
            }
            if($calc['reg_annual_income']!=""){
                $points+=2.39;
            }
            if($calc['reg_family_living_in']!=""){
                $points+=2.39;
            }
            if($calc['reg_edu_detail']!=""){
                $points+=2.39;
            }
            if($calc['reg_occupation']!=""){
                $points+=2.39;
            }
            if($calc['reg_member_annual_income']!=""){
                $points+=2.39;
            }
            if($calc['reg_organization_name']!=""){
                $points+=2.39;
            }
            if($calc['reg_working_location']!=""){
                $points+=2.39;
            }
            if($calc['reg_sub_cast']!=""){
                $points+=2.39;
            }
            if($calc['reg_gotra']!="undefined"){
                $points+=2.39;
            }
            if($calc['reg_dosh']!="undefined"){
                $points+=2.39;
            }
            if($calc['reg_star']!="undefined"){
                $points+=2.39;
            }
            if($calc['reg_living_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_eating_habits']!=""){
                $points+=2.39;
            }
            if($calc['reg_smoking_habits']!=""){
                $points+=2.39;
            }
            if($calc['reg_drinking_habits']!=""){
                $points+=2.39;
            }
            if($calc['reg_hobbies']!=""){
                $points+=2.39;
            }
            if($calc['reg_interests']!=""){
                $points+=2.39;
            }
            if($calc['reg_favourite_music']!=""){
                $points+=2.39;
            }
            if($calc['reg_favourite_book']!=""){
                $points+=2.39;
            }
            if($calc['reg_dress_style']!=""){
                $points+=2.39;
            }
            if($calc['reg_tv_shows']!=""){
                $points+=2.39;
            }
            if($calc['reg_member_alt_mobile']!=""){
                $points+=2.39;
            }
            if($calc['reg_member_verified_mobile']!=""){
                $points+=2.39;
            }
            if($calc['reg_profile_photo']!=""){
                $points+=2.39;
            }
            if($calc['reg_city']!=""){
                $points+=2.39;
            }
            if($calc['reg_annual_income']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_city']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_member_annual_income']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_working_location']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_living_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_eating_habits']!=""){
                $points+=2.39;
            }
            
         }else if($calc['reg_religion']=="Sikh") {
             
            if($calc['reg_height']!=""){
                $points+=2.5;
            }
            if($calc['reg_marital_status']!=""){
                $points+=2.5;
            }
            if($calc['reg_mother_tongue']!=""){
                $points+=2.5;
            }
            if($calc['reg_is_any_disability']!=""){
                $points+=2.5;
            }
            if($calc['reg_aadhar_number']!=""){
                $points+=2.5;
            }
            if($calc['reg_blood_group']!=""){
                $points+=2.5;
            }
            if($calc['reg_father_status']!=""){
                $points+=2.5;
            }
            if($calc['reg_mother_status']!=""){
                $points+=2.5;
            }
            if($calc['reg_family_status']!=""){
                $points+=2.5;
            }
            if($calc['reg_family_type']!=""){
                $points+=2.5;
            }
            if($calc['reg_family_values']!=""){
                $points+=2.5;
            }
            if($calc['reg_annual_income']!=""){
                $points+=2.5;
            }
            if($calc['reg_family_living_in']!=""){
                $points+=2.5;
            }
            if($calc['reg_edu_detail']!=""){
                $points+=2.5;
            }
            if($calc['reg_occupation']!=""){
                $points+=2.5;
            }
            if($calc['reg_member_annual_income']!=""){
                $points+=2.5;
            }
            if($calc['reg_organization_name']!=""){
                $points+=2.5;
            }
            if($calc['reg_working_location']!=""){
                $points+=2.5;
            }
            if($calc['reg_sub_cast']!=""){
                $points+=2.5;
            }
            if($calc['reg_dastar']!="undefined"){
                $points+=2.5;
            }
            if($calc['reg_living_status']!=""){
                $points+=2.5;
            }
            if($calc['reg_eating_habits']!=""){
                $points+=2.5;
            }
            if($calc['reg_smoking_habits']!=""){
                $points+=2.5;
            }
            if($calc['reg_drinking_habits']!=""){
                $points+=2.5;
            }
            if($calc['reg_hobbies']!=""){
                $points+=2.5;
            }
            if($calc['reg_interests']!=""){
                $points+=2.5;
            }
            if($calc['reg_favourite_music']!=""){
                $points+=2.5;
            }
            if($calc['reg_favourite_book']!=""){
                $points+=2.5;
            }
            if($calc['reg_dress_style']!=""){
                $points+=2.5;
            }
            if($calc['reg_tv_shows']!=""){
                $points+=2.5;
            }
            if($calc['reg_member_alt_mobile']!=""){
                $points+=2.5;
            }
            if($calc['reg_member_verified_mobile']!=""){
                $points+=2.5;
            }
            if($calc['reg_profile_photo']!=""){
                $points+=2.5;
            }
            if($calc['reg_city']!=""){
                $points+=2.5;
            }
            if($calc['reg_annual_income']!=""){
                $points+=2.5;
            }
            if($calc['reg_preference_city']!=""){
                $points+=2.5;
            }
            if($calc['reg_preference_member_annual_income']!=""){
                $points+=2.5;
            }
            if($calc['reg_preference_working_location']!=""){
                $points+=2.5;
            }
            if($calc['reg_preference_living_status']!=""){
                $points+=2.5;
            }
            if($calc['reg_preference_eating_habits']!=""){
                $points+=2.5;
            }
             
         }else if($calc['reg_religion']=="Jain"){
            if($calc['reg_height']!=""){
                $points+=2.39;
            }
            if($calc['reg_marital_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_mother_tongue']!=""){
                $points+=2.39;
            }
            if($calc['reg_is_any_disability']!=""){
                $points+=2.39;
            }
            if($calc['reg_aadhar_number']!=""){
                $points+=2.39;
            }
            if($calc['reg_blood_group']!=""){
                $points+=2.39;
            }
            if($calc['reg_father_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_mother_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_family_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_family_type']!=""){
                $points+=2.39;
            }
            if($calc['reg_family_values']!=""){
                $points+=2.39;
            }
            if($calc['reg_annual_income']!=""){
                $points+=2.39;
            }
            if($calc['reg_family_living_in']!=""){
                $points+=2.39;
            }
            if($calc['reg_edu_detail']!=""){
                $points+=2.39;
            }
            if($calc['reg_occupation']!=""){
                $points+=2.39;
            }
            if($calc['reg_member_annual_income']!=""){
                $points+=2.39;
            }
            if($calc['reg_organization_name']!=""){
                $points+=2.39;
            }
            if($calc['reg_working_location']!=""){
                $points+=2.39;
            }
            if($calc['reg_sub_cast']!=""){
                $points+=2.39;
            }
            if($calc['reg_gotra']!="undefined"){
                $points+=2.39;
            }
            if($calc['reg_dosh']!="undefined"){
                $points+=2.39;
            }
            if($calc['reg_star']!="undefined"){
                $points+=2.39;
            }
            if($calc['reg_living_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_eating_habits']!=""){
                $points+=2.39;
            }
            if($calc['reg_smoking_habits']!=""){
                $points+=2.39;
            }
            if($calc['reg_drinking_habits']!=""){
                $points+=2.39;
            }
            if($calc['reg_hobbies']!=""){
                $points+=2.39;
            }
            if($calc['reg_interests']!=""){
                $points+=2.39;
            }
            if($calc['reg_favourite_music']!=""){
                $points+=2.39;
            }
            if($calc['reg_favourite_book']!=""){
                $points+=2.39;
            }
            if($calc['reg_dress_style']!=""){
                $points+=2.39;
            }
            if($calc['reg_tv_shows']!=""){
                $points+=2.39;
            }
            if($calc['reg_member_alt_mobile']!=""){
                $points+=2.39;
            }
            if($calc['reg_member_verified_mobile']!=""){
                $points+=2.39;
            }
            if($calc['reg_profile_photo']!=""){
                $points+=2.39;
            }
            if($calc['reg_city']!=""){
                $points+=2.39;
            }
            if($calc['reg_annual_income']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_city']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_member_annual_income']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_working_location']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_living_status']!=""){
                $points+=2.39;
            }
            if($calc['reg_preference_eating_habits']!=""){
                $points+=2.39;
            }
            
         }
         else if($calc['reg_religion']=="Christian"){
             
            if($calc['reg_height']!=""){
                $points+=2.57;
            }
            if($calc['reg_marital_status']!=""){
                $points+=2.57;
            }
            if($calc['reg_mother_tongue']!=""){
                $points+=2.57;
            }
            if($calc['reg_is_any_disability']!=""){
                $points+=2.57;
            }
            if($calc['reg_aadhar_number']!=""){
                $points+=2.57;
            }
            if($calc['reg_blood_group']!=""){
                $points+=2.57;
            }
            if($calc['reg_father_status']!=""){
                $points+=2.57;
            }
            if($calc['reg_mother_status']!=""){
                $points+=2.57;
            }
            if($calc['reg_family_status']!=""){
                $points+=2.57;
            }
            if($calc['reg_family_type']!=""){
                $points+=2.57;
            }
            if($calc['reg_family_values']!=""){
                $points+=2.57;
            }
            if($calc['reg_annual_income']!=""){
                $points+=2.57;
            }
            if($calc['reg_family_living_in']!=""){
                $points+=2.57;
            }
            if($calc['reg_edu_detail']!=""){
                $points+=2.57;
            }
            if($calc['reg_occupation']!=""){
                $points+=2.57;
            }
            if($calc['reg_member_annual_income']!=""){
                $points+=2.57;
            }
            if($calc['reg_organization_name']!=""){
                $points+=2.57;
            }
            if($calc['reg_working_location']!=""){
                $points+=2.57;
            }
            if($calc['reg_sub_cast']!=""){
                $points+=2.57;
            }
            if($calc['reg_living_status']!=""){
                $points+=2.57;
            }
            if($calc['reg_eating_habits']!=""){
                $points+=2.57;
            }
            if($calc['reg_smoking_habits']!=""){
                $points+=2.57;
            }
            if($calc['reg_drinking_habits']!=""){
                $points+=2.57;
            }
            if($calc['reg_hobbies']!=""){
                $points+=2.57;
            }
            if($calc['reg_interests']!=""){
                $points+=2.57;
            }
            if($calc['reg_favourite_music']!=""){
                $points+=2.57;
            }
            if($calc['reg_favourite_book']!=""){
                $points+=2.57;
            }
            if($calc['reg_dress_style']!=""){
                $points+=2.57;
            }
            if($calc['reg_tv_shows']!=""){
                $points+=2.57;
            }
            if($calc['reg_member_alt_mobile']!=""){
                $points+=2.57;
            }
            if($calc['reg_member_verified_mobile']!=""){
                $points+=2.57;
            }
            if($calc['reg_profile_photo']!=""){
                $points+=2.57;
            }
            if($calc['reg_city']!=""){
                $points+=2.57;
            }
            if($calc['reg_annual_income']!=""){
                $points+=2.57;
            }
            if($calc['reg_preference_city']!=""){
                $points+=2.57;
            }
            if($calc['reg_preference_member_annual_income']!=""){
                $points+=2.57;
            }
            if($calc['reg_preference_working_location']!=""){
                $points+=2.57;
            }
            if($calc['reg_preference_living_status']!=""){
                $points+=2.57;
            }
            if($calc['reg_preference_eating_habits']!=""){
                $points+=2.57;
            }
             
         }else{
            
            if($calc['reg_height']!=""){
                $points+=2.64;
            }
            if($calc['reg_marital_status']!=""){
                $points+=2.64;
            }
            if($calc['reg_mother_tongue']!=""){
                $points+=2.64;
            }
            if($calc['reg_is_any_disability']!=""){
                $points+=2.64;
            }
            if($calc['reg_aadhar_number']!=""){
                $points+=2.64;
            }
            if($calc['reg_blood_group']!=""){
                $points+=2.64;
            }
            if($calc['reg_father_status']!=""){
                $points+=2.64;
            }
            if($calc['reg_mother_status']!=""){
                $points+=2.64;
            }
            if($calc['reg_family_status']!=""){
                $points+=2.64;
            }
            if($calc['reg_family_type']!=""){
                $points+=2.64;
            }
            if($calc['reg_family_values']!=""){
                $points+=2.64;
            }
            if($calc['reg_annual_income']!=""){
                $points+=2.64;
            }
            if($calc['reg_family_living_in']!=""){
                $points+=2.64;
            }
            if($calc['reg_edu_detail']!=""){
                $points+=2.64;
            }
            if($calc['reg_occupation']!=""){
                $points+=2.64;
            }
            if($calc['reg_member_annual_income']!=""){
                $points+=2.64;
            }
            if($calc['reg_organization_name']!=""){
                $points+=2.64;
            }
            if($calc['reg_working_location']!=""){
                $points+=2.64;
            }
            if($calc['reg_living_status']!=""){
                $points+=2.64;
            }
            if($calc['reg_eating_habits']!=""){
                $points+=2.64;
            }
            if($calc['reg_smoking_habits']!=""){
                $points+=2.64;
            }
            if($calc['reg_drinking_habits']!=""){
                $points+=2.64;
            }
            if($calc['reg_hobbies']!=""){
                $points+=2.64;
            }
            if($calc['reg_interests']!=""){
                $points+=2.64;
            }
            if($calc['reg_favourite_music']!=""){
                $points+=2.64;
            }
            if($calc['reg_favourite_book']!=""){
                $points+=2.64;
            }
            if($calc['reg_dress_style']!=""){
                $points+=2.64;
            }
            if($calc['reg_tv_shows']!=""){
                $points+=2.64;
            }
            if($calc['reg_member_alt_mobile']!=""){
                $points+=2.64;
            }
            if($calc['reg_member_verified_mobile']!=""){
                $points+=2.64;
            }
            if($calc['reg_profile_photo']!=""){
                $points+=2.64;
            }
            if($calc['reg_city']!=""){
                $points+=2.64;
            }
            if($calc['reg_annual_income']!=""){
                $points+=2.64;
            }
            if($calc['reg_preference_city']!=""){
                $points+=2.64;
            }
            if($calc['reg_preference_member_annual_income']!=""){
                $points+=2.64;
            }
            if($calc['reg_preference_working_location']!=""){
                $points+=2.64;
            }
            if($calc['reg_preference_living_status']!=""){
                $points+=2.64;
            }
            if($calc['reg_preference_eating_habits']!=""){
                $points+=2.64;
            }
             
         }
               
        }
        $percentage = ($points*100)/100;
        
        ?>
  
  <!--Profile Completion calculation End-->
  
  
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mpsd4pr">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp0myp" style="margin-right:0px; padding:0px;">
         <div class="SkillBar-stripescol-md-12 my-pro1 text-center mp0myp1" style="padding:0px 0px;">
    
        <div id="doughnutChart" class="chart"></div>
        <!-------->
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-center prostd" style="padding:15px 0px;">
      <h4 style="font-size:12px; font-size:45px; color:#b10a0a;"><?=number_format($percentage,0)?>%</h4>
      <p style="color:#039; margin-bottom:0px; font-size:18px;">Profile completion</p>
      <!---<p>Last Edited on <?//=date("d M",strtotime($userDATA['reg_last_edit_date']))?>, <?//=date("Y",strtotime($userDATA['reg_last_edit_date']))?><br>
                      Profile Views 0</p>----->
  </div>
        <!----------->
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-center prostd">
          <div class="progress-circle progress-<?=number_format($percentage,0)?>"><span><?=number_format($percentage,0)?></span></div>
</div>
      
      
        <div class="clearfix"></div>
</div>
   </div>
      
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl" style="padding:0px; padding-bottom:3px;">
<form action="" id="edit-contact-frm" method="post" enctype="multipart/form-data">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd1">
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 mrg0">
<h4><i class="fa fa-mobile"></i> Contact Details</h4>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 wd-btn">

<button type="submit" name="btn_save_contact" id="save-btn" class="edit-btn" style="position:relative; left:50px; top:2px;display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn" class="edit-btn" style="position:relative; left:50px; top:2px;"><i class="fa fa-pencil-square-o"></i> Edit</a>


</div>
</div>
<!------------>
<style type="text/css">
.vrfyd {
    height: 65px;
    width:20%;
    padding: 1px;
    position: absolute;
    left: 275px;
    top: -6px;
    z-index:1;
}
</style>
<!------------->


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp00_2" style="padding:5px 0px;" id="contact-detail">
<img src="images/verfied.png" alt="Verified" title="Verified" class="vrfyd">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Mobile No.</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>

<input type="text"  name="reg_member_mobile" id="reg_member_mobile" value="<?=$userDATA['reg_member_mobile']?>" readonly/> </p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Alternate No.</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_member_alt_mobile" id="reg_member_alt_mobile" value="<?=$userDATA['reg_member_alt_mobile']?>" readonly/></p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Email Id</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_member_email" id="reg_member_email" value="<?=$userDATA['reg_member_email']?>" readonly/></p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5 style="font-size:11px;">Suitable time to call</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_member_call_time" id="reg_member_call_time" value="<?=$userDATA['reg_member_call_time']?>" readonly/></p>
</div>
</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp00_2" style="padding:5px 0px;display:none" id="contact-detail-edit">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Mobile No.</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>

<input type="text"  name="reg_member_mobile" id="reg_member_mobile" value="<?=$userDATA['reg_member_mobile']?>" /> </p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Alternate No.</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_member_alt_mobile" id="reg_member_alt_mobile" value="<?=$userDATA['reg_member_alt_mobile']?>" /></p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Email Id</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_member_email" id="reg_member_email" value="<?=$userDATA['reg_member_email']?>" /></p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5 style="font-size:11px;">Suitable time to call</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_member_call_time" id="reg_member_call_time" value="<?=$userDATA['reg_member_call_time']?>" /></p>
</div>
</div>
</div>

<input type="hidden" name="edit_contact" value="edit-contact" />


</form>      
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
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 hidden-sm hidden-xs" style="margin-top:-10px;">
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
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 mp0myp2">
        
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl sdow">
      
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <?php 
      $profile_created_for=db_scalar("SELECT reg_for FROM tbl_registration WHERE reg_id='$userDATA[reg_id]'");
       ?>
      <h4>A Few Words About My <?=$profile_created_for?></h4>
  </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn">
      
<button type="submit" name="btn_save_myself" id="save-btn-myself" class="edit-btn sbmt" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-myself" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>


      
      <!--<a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a>-->
      
      
      </div>
      
  </div>
   
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="member-myself" >
<p style="text-align:justify;"><?=$userDATA['reg_mem_myself']?></p>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="member-myself-edit" style="display:none" >
<textarea name="reg_mem_myself" id="reg_mem_myself" class="form-control" ><?=$userDATA['reg_mem_myself']?></textarea>
</div>
 
<input type="hidden" name="edit_myself" value="edit-myself" />

  </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>Basic Details </h4>
  </div>

<form action="" id="edit-member-basic-frm" method="post" enctype="multipart/form-data">

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn">

<button type="submit" name="btn_save_basic" id="save-btn-basic" class="edit-btn" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-basic" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>



<!--<a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> -->


</div>
  </div>
       
       
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  no-padd" id="member-basic-detail" >
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Full Name</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_name']?></p>
</div>
</div>
       
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Gender</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_gender']?></p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Date of birth</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=date("d-m-Y",strtotime($userDATA['reg_dob']))?></p>
</div>
</div>


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Age</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_age']?></p>
</div>
</div>
<div class="clearfix"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Height</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=str_replace(".", "'", $user_height)?>"  (<?=number_format($userDATA['reg_height']*30.48,0)?>cm)</p>
</div>
</div>


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Marital Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_marital_status']?></p>
</div>
</div>
       
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Any Disability</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_is_any_disability']?></p>
</div>
</div>
       
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Aadhar Number</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_aadhar_number']?></p>
</div>
</div>


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Profile Management by</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_profile_manage_by']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Blood Group</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_blood_group']?></p>
</div>
</div>
</div>




<!-- EDIT -->

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-basic-detail-edit" style="display:none" >
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-md-sm col-xs-5 agd">
<h5>Full Name</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_name" id="reg_name" value="<?=$userDATA['reg_name']?>" /></p>
</div>
</div>
       
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-md-sm col-xs-5 agd">
<h5>Gender</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<input type="radio"  name="reg_gender" id="reg_gender" value="Male" <?php if($userDATA['reg_gender']=="Male"){?> checked<?php }?> /> Male
<input type="radio"  name="reg_gender" id="reg_gender" value="Female" <?php if($userDATA['reg_gender']=="Female"){?> checked<?php }?> /> Female
</p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-md-sm col-xs-5 agd">
<h5>Date of birth</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="date"  name="reg_dob" id="reg_dob" value="<?=date("Y-m-d",strtotime($userDATA['reg_dob']))?>" /></p>
</div>
</div>


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-md-sm col-xs-5 agd">
<h5>Age</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_age" id="reg_age" value="<?=$userDATA['reg_age']?>" /></p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-md-sm col-xs-5 agd">
<h5>Height</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_height" id="reg_height">
<option value="0" selected="selected">----Select Height----</option>
<option value="4.5" <?php if($userDATA['reg_height']=="4.5"){?> selected <?php }?>>4' 5'' - 134cm</option>
<option value="4.6" <?php if($userDATA['reg_height']=="4.6"){?> selected <?php }?>>4' 6'' - 137cm</option>
<option value="4.7" <?php if($userDATA['reg_height']=="4.7"){?> selected <?php }?>>4' 7'' - 139cm</option>
<option value="4.8" <?php if($userDATA['reg_height']=="4.8"){?> selected <?php }?>>4' 8'' - 142cm</option>
<option value="4.9" <?php if($userDATA['reg_height']=="4.9"){?> selected <?php }?>>4' 9'' - 144cm</option>
<option value="5" <?php if($userDATA['reg_height']=="5"){?> selected <?php }?>>5' - 152cm</option>
<option value="5.1" <?php if($userDATA['reg_height']=="5.1"){?> selected <?php }?>>5' 1'' - 154cm</option>
<option value="5.2" <?php if($userDATA['reg_height']=="5.2"){?> selected <?php }?>>5' 2'' - 157cm</option>
<option value="5.3" <?php if($userDATA['reg_height']=="5.3"){?> selected <?php }?>>5' 3'' - 160cm</option>
<option value="5.4" <?php if($userDATA['reg_height']=="5.4"){?> selected <?php }?>>5' 4'' - 162cm</option>
<option value="5.5" <?php if($userDATA['reg_height']=="5.5"){?> selected <?php }?>>5' 5'' - 165cm</option>
<option value="5.6" <?php if($userDATA['reg_height']=="5.6"){?> selected <?php }?>>5' 6'' - 167cm</option>
<option value="5.7" <?php if($userDATA['reg_height']=="5.7"){?> selected <?php }?>>5' 7'' - 170cm</option>
<option value="5.8" <?php if($userDATA['reg_height']=="5.8"){?> selected <?php }?>>5' 8'' - 172cm</option>
<option value="5.9" <?php if($userDATA['reg_height']=="5.9"){?> selected <?php }?>>5' 9'' - 175cm</option>
<option value="6" <?php if($userDATA['reg_height']=="6"){?> selected <?php }?>>6' - 182cm</option>
<option value="6.1" <?php if($userDATA['reg_height']=="6.1"){?> selected <?php }?>>6' 1'' - 185cm</option>
<option value="6.2" <?php if($userDATA['reg_height']=="6.2"){?> selected <?php }?>>6' 2'' - 187cm</option>
<option value="6.3" <?php if($userDATA['reg_height']=="6.3"){?> selected <?php }?>>6' 3'' - 190cm</option>
<option value="6.4" <?php if($userDATA['reg_height']=="6.4"){?> selected <?php }?>>6' 4'' - 193cm</option>
<option value="6.5" <?php if($userDATA['reg_height']=="6.5"){?> selected <?php }?>>6' 5'' - 195cm</option>
<option value="6.6" <?php if($userDATA['reg_height']=="6.6"){?> selected <?php }?>>6' 6'' - 198cm</option>
<option value="6.7" <?php if($userDATA['reg_height']=="6.7"){?> selected <?php }?>>6' 7'' - 200cm</option>
<option value="6.8" <?php if($userDATA['reg_height']=="6.8"){?> selected <?php }?>>6' 8'' - 203cm</option>
<option value="6.9" <?php if($userDATA['reg_height']=="6.9"){?> selected <?php }?>>6' 9'' - 205cm</option>
</select>
</p>
</div>
</div>


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-md-sm col-xs-5 agd">
<h5>Marital Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_marital_status" id="reg_marital_status" >

<option value="0" selected="selected">----Select Marital Status----</option>
<option value="Doesn't Matter" <?php if($userDATA['reg_marital_status']=="Doesn't Matter"){?> selected <?php }?> >Doesn't Matter</option>
<option value="Never Married"  <?php if($userDATA['reg_marital_status']=="Never Married"){?> selected <?php }?>>Never Married</option>
<option value="Divorced" <?php if($userDATA['reg_marital_status']=="Divorced"){?> selected <?php }?> >Divorced</option>
<option value="Widowed" <?php if($userDATA['reg_marital_status']=="Widowed"){?> selected <?php }?>>Widowed</option>
<option value="Awaiting Divorce" <?php if($userDATA['reg_marital_status']=="Awaiting Divorce"){?> selected <?php }?>>Awaiting Divorce</option>
<option value="Annulled" <?php if($userDATA['reg_marital_status']=="Annulled"){?> selected <?php }?> >Annulled</option>
</select>
</p>
</div>
</div>
  
  <div class="clearfix"></div>     
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-md-sm col-xs-5 agd">
<h5>Any Disability</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<input type="radio" name="reg_is_any_disability" id="reg_is_any_disability" value="No" <?php if($userDATA['reg_is_any_disability']=="No"){?> checked <?php }?>> Normal

<input type="radio" name="reg_is_any_disability" id="reg_is_any_disability" value="Yes" <?php if($userDATA['reg_is_any_disability']=="Yes"){?> checked <?php }?>> Physically Challenged

</p>
</div>
</div>
       
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-md-sm col-xs-5 agd">
<h5>Aadhar Number</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_aadhar_number" id="reg_aadhar_number" value="<?=$userDATA['reg_aadhar_number']?>" /></p>
</div>
</div>

 <div class="clearfix"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-md-sm col-xs-5 agd">
<h5>Profile Management by</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_profile_manage_by" id="reg_profile_manage_by" value="<?=$userDATA['reg_profile_manage_by']?>" /></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-md-sm col-xs-5 agd">
<h5>Blood Group</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_blood_group" id="reg_blood_group" value="<?=$userDATA['reg_blood_group']?>" /></p>
</div>
</div>
</div>

<input type="hidden" name="edit_basic" value="edit-basic" />

</form>




</div>
  
  
  
      
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
<form action="" name="edit-member-location-frm" id="edit-member-location-frm" method="post" enctype="multipart/form-data">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mrg0">
<img src="images/paper_pin.png" class="pin-styd">
<h4>Location Details</h4>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn">

<button type="submit" name="btn_save_location" id="save-btn-location" class="edit-btn" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-location" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>      
</div>
</div>
       
       
       
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-location">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Country</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_country_name']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>State</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_state_name']?></p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>District/City</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_city']?></p>
</div>
</div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-location-edit" style="display:none">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Country</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select name="reg_country_name" id="reg_country_name" onChange="showstate(this.value);">
<option value="0" selected="selected">----Select Country----</option>
<?php
if($userDATA['reg_country_id']!=""){
$sql_country=db_query("select * from tbl_country_master where 1 and status='Active'");
if(mysqli_num_rows($sql_country)>0){
while($data=mysqli_fetch_array($sql_country)){
@extract($data);
?>
<option value="<?=$data['contId']?>" <?php if($userDATA['reg_country_id']==$data['contId']){?> selected <?php }?>>
<?=$data['contName']?>
</option>
<?
}
}
}
?>
</select>
</p>

</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>State</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p id="constate">
<select name="reg_state_name" id="reg_state_name">
<option value="0" selected="selected">----Select State----</option>
<option value="<?=$userDATA['reg_state_id']?>" <?php if($userDATA['reg_state_id']!="" && $userDATA['reg_state_id']!=0){?> selected <?php }?>>
<?=$userDATA['reg_state_name']?>
</option>
</select>
</p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>District/City</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><input type="text"  name="reg_city" id="reg_city" value="<?=$userDATA['reg_city']?>" /></p>
</div>
</div>
</div>
 
<input type="hidden" name="edit_location" value="edit-location" />
      
</form>      
  </div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
<form action="" name="edit-member-family-frm" id="edit-member-family-frm" method="post" enctype="multipart/form-data">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mrg0">
<img src="images/paper_pin.png" class="pin-styd">
<h4>Family Details</h4>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn">
<button type="submit" name="btn_save_family" id="save-btn-family" class="edit-btn" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-family" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>      

</div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-family">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Father's Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_father_status']?></p>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Mother's Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_mother_status']?></p>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Siblings Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_siblings_bro']." <span style='font-size:12px; color:#333'>(Brother)</span>".", ".$userDATA['reg_siblings_sis']." <span style='font-size:12px; color:#333'>(Sister)</span>"?></p>
</div>
</div>

<div class="clearfix"></div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Siblings Maritial Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_siblings_marital_status_bro']." <span style='font-size:12px; color:#333'>(Brother)</span>".", ".$userDATA['reg_siblings_marital_status_sis']." <span style='font-size:12px; color:#333'>(Sister)</span>"?> </p>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Family Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_family_status']?></p>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Family type</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_family_type']?></p>
</div>
</div>

<div class="clearfix"></div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Family Values</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_family_values']?></p>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Annual income</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_annual_income']?></p>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Family living in</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_family_living_in']?></p>
</div>
</div>
</div>




<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-family-edit" style="display:none" >
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Father's Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_father_status" id="reg_father_status">
<option  value="0">----Select Father's Status----</option>
<option value="Expired" <?php if($userDATA['reg_father_status']=="Expired"){?> selected<?php }?> >Expired</option>
<option value="Software Professional" <?php if($userDATA['reg_father_status']=="Software Professional"){?> selected<?php }?> >Software Professional</option>
<option value="Hardware Professional" <?php if($userDATA['reg_father_status']=="Hardware Professional"){?> selected<?php }?> >Hardware Professional</option>
<option value="Engineer - Non IT" <?php if($userDATA['reg_father_status']=="Engineer - Non IT"){?> selected<?php }?>>Engineer - Non IT</option>
<option value="Teaching / Academician" <?php if($userDATA['reg_father_status']=="Teaching / Academician"){?> selected<?php }?>>Teaching / Academician</option>
<option value="Professor / Lecturer" <?php if($userDATA['reg_father_status']=="Professor / Lecturer"){?> selected<?php }?> >Professor / Lecturer</option>
<option value="Education Professional" <?php if($userDATA['reg_father_status']=="Education Professional"){?> selected<?php }?> >Education Professional</option>
<option value="Chartered Accountant" <?php if($userDATA['reg_father_status']=="Chartered Accountant"){?> selected<?php }?> >Chartered Accountant</option>
<option value="Accounts/Finance Professional" <?php if($userDATA['reg_father_status']=="Accounts/Finance Professional"){?> selected<?php }?>>Accounts/Finance Professional</option>
<option value="Auditor" <?php if($userDATA['reg_father_status']=="Auditor"){?> selected<?php }?>>Auditor</option>
<option value="Company Secretary" <?php if($userDATA['reg_father_status']=="Company Secretary"){?> selected<?php }?> >Company Secretary</option>
<option value="Doctor" <?php if($userDATA['reg_father_status']=="Doctor"){?> selected<?php }?>>Doctor</option>
<option value="Nurse" <?php if($userDATA['reg_father_status']=="Nurse"){?> selected<?php }?> >Nurse</option>
<option value="Health Care Professional" <?php if($userDATA['reg_father_status']=="Health Care Professional"){?> selected<?php }?>>Health Care Professional</option>
<option value="Paramedical Professional" <?php if($userDATA['reg_father_status']=="Paramedical Professional"){?> selected<?php }?> >Paramedical Professional</option>
<option value="Banking Service Professional" <?php if($userDATA['reg_father_status']=="Banking Service Professional"){?> selected<?php }?> >Banking Service Professional</option>
<option value="Lawyer & Legal Professional" <?php if($userDATA['reg_father_status']=="Lawyer & Legal Professional"){?> selected<?php }?> >Lawyer & Legal Professional</option>
<option value="Law Enforcement Officer" <?php if($userDATA['reg_father_status']=="Law Enforcement Officer"){?> selected<?php }?>>Law Enforcement Officer</option>
<option value="Architect" <?php if($userDATA['reg_father_status']=="Architect"){?> selected<?php }?> >Architect</option>
<option value="Interior Designer" <?php if($userDATA['reg_father_status']=="Interior Designer"){?> selected<?php }?>>Interior Designer</option>
<option value="Advertising / PR Professional" <?php if($userDATA['reg_father_status']=="Advertising / PR Professional"){?> selected<?php }?> >Advertising / PR Professional</option>
<option value="Media Professional" <?php if($userDATA['reg_father_status']=="Media Professional"){?> selected<?php }?> >Media Professional</option>
<option value="Entertainment Professional" <?php if($userDATA['reg_father_status']=="Entertainment Professional"){?> selected<?php }?>>Entertainment Professional</option>
<option value="Fashion Designer" <?php if($userDATA['reg_father_status']=="Fashion Designer"){?> selected<?php }?> >Fashion Designer</option>
<option value="Event Management Professional" <?php if($userDATA['reg_father_status']=="Event Management Professional"){?> selected<?php }?> >Event Management Professional</option>
<option value="Journalist" <?php if($userDATA['reg_father_status']=="Journalist"){?> selected<?php }?> >Journalist</option>
<option value="Air Hostess" <?php if($userDATA['reg_father_status']=="Air Hostess"){?> selected<?php }?>  >Air Hostess</option>
<option value="Airline Professional" <?php if($userDATA['reg_father_status']=="Airline Professional"){?> selected<?php }?>>Airline Professional</option>
<option value="Pilot" <?php if($userDATA['reg_father_status']=="Pilot"){?> selected<?php }?> >Pilot</option>
<option value="Mariner / Merchant Navy" <?php if($userDATA['reg_father_status']=="Mariner / Merchant Navy"){?> selected<?php }?> >Mariner / Merchant Navy</option>
<option value="Beautician" <?php if($userDATA['reg_father_status']=="Beautician"){?> selected<?php }?>>Beautician</option>
<option value="Hotel / Hospitality Professional" <?php if($userDATA['reg_father_status']=="Hotel / Hospitality Professional"){?> selected<?php }?> >Hotel / Hospitality Professional</option>
<option value="Scientist / Researcher" <?php if($userDATA['reg_father_status']=="Scientist / Researcher"){?> selected<?php }?> >Scientist / Researcher</option>
<option value="Social Worker" <?php if($userDATA['reg_father_status']=="Social Worker"){?> selected<?php }?> >Social Worker</option>
<option value="Agriculture &amp; Farming Professional" <?php if($userDATA['reg_father_status']=="Agriculture &amp; Farming Professional"){?> selected<?php }?>>Agriculture & Farming Professional</option>
<option value="Arts &amp; Craftsman" <?php if($userDATA['reg_father_status']=="Arts &amp; Craftsman"){?> selected<?php }?>>Arts & Craftsman</option>
<option value="Administrative Professional" <?php if($userDATA['reg_father_status']=="Administrative Professional"){?> selected<?php }?> >Administrative Professional</option>
<option value="Customer Care Professional" <?php if($userDATA['reg_father_status']=="Customer Care Professional"){?> selected<?php }?> >Customer Care Professional</option>
<option value="CXO / President, Director, Chairman" <?php if($userDATA['reg_father_status']=="CXO / President, Director, Chairman"){?> selected<?php }?> >CXO / President, Director, Chairman</option>
<option value="Marketing Professional" <?php if($userDATA['reg_father_status']=="Marketing Professional"){?> selected<?php }?> >Marketing Professional</option>
<option value="Sales Professional" <?php if($userDATA['reg_father_status']=="Sales Professional"){?> selected<?php }?> >Sales Professional</option>
<option value="Technician" <?php if($userDATA['reg_father_status']=="Technician"){?> selected<?php }?>>Technician</option>
<option value="Consultant" <?php if($userDATA['reg_father_status']=="Consultant"){?> selected<?php }?>>Consultant</option>
<option value="Clerk" <?php if($userDATA['reg_father_status']=="Clerk"){?> selected<?php }?> >Clerk</option>
<option value="Officer" <?php if($userDATA['reg_father_status']=="Officer"){?> selected<?php }?>>Officer</option>
<option value="Supervisor" <?php if($userDATA['reg_father_status']=="Supervisor"){?> selected<?php }?> >Supervisor</option>
<option value="Manager" <?php if($userDATA['reg_father_status']=="Manager"){?> selected<?php }?> >Manager</option>
<option value="Executive" <?php if($userDATA['reg_father_status']=="Executive"){?> selected<?php }?>  >Executive</option>
<option value="Sportsman" <?php if($userDATA['reg_father_status']=="Sportsman"){?> selected<?php }?>  >Sportsman</option>
<option value="Civil Services (IAS/IPS/IRS/IES/IFS)" <?php if($userDATA['reg_father_status']=="Civil Services (IAS/IPS/IRS/IES/IFS)"){?> selected<?php }?> >Civil Services (IAS/IPS/IRS/IES/IFS)</option>
<option value="Army" <?php if($userDATA['reg_father_status']=="Army"){?> selected<?php }?> >Army</option>
<option value="Navy" <?php if($userDATA['reg_father_status']=="Navy"){?> selected<?php }?>>Navy</option>
<option value="Airforce" <?php if($userDATA['reg_father_status']=="Airforce"){?> selected<?php }?> >Airforce</option>
<option value="Human Resources Professional" <?php if($userDATA['reg_father_status']=="Human Resources Professional"){?> selected<?php }?> >Human Resources Professional</option>
<option value="Financial Analyst / Planning" <?php if($userDATA['reg_father_status']=="Financial Analyst / Planning"){?> selected<?php }?> >Financial Analyst / Planning</option>
<option value="Designer - IT & Engineering" <?php if($userDATA['reg_father_status']=="Designer - IT & Engineering"){?> selected<?php }?> >Designer - IT & Engineering</option>
<option value="Designer - Media & Entertainment" <?php if($userDATA['reg_father_status']=="Designer - Media & Entertainment"){?> selected<?php }?> >Designer - Media & Entertainment</option>
<option value="Student" <?php if($userDATA['reg_father_status']=="Student"){?> selected<?php }?> >Student</option>
<option value="Librarian" <?php if($userDATA['reg_father_status']=="Librarian"){?> selected<?php }?> >Librarian</option>
<option value="Financial Accountant" <?php if($userDATA['reg_father_status']=="Financial Accountant"){?> selected<?php }?> >Financial Accountant</option>
<option value="Business Analyst" <?php if($userDATA['reg_father_status']=="Business Analyst"){?> selected<?php }?> >Business Analyst</option>
<option value="Business Owner / Entrepreneur" <?php if($userDATA['reg_father_status']=="Business Owner / Entrepreneur"){?> selected<?php }?> >Business Owner / Entrepreneur</option>
<option value="Doctor" <?php if($userDATA['reg_father_status']=="Doctor"){?> selected<?php }?> >Doctor</option>
<option value="Engineer" <?php if($userDATA['reg_father_status']=="Engineer"){?> selected<?php }?> >Engineer</option>
<option value="Retired" <?php if($userDATA['reg_father_status']=="Retired"){?> selected<?php }?> >Retired</option>
<option value="Others" <?php if($userDATA['reg_father_status']=="Others"){?> selected<?php }?> >Others</option>
<option value="Business" <?php if($userDATA['reg_father_status']=="Business"){?> selected<?php }?>>Business</option>
<option value="Not working" <?php if($userDATA['reg_father_status']=="Not working"){?> selected<?php }?> >Not working</option>
</select>
</p>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Mother's Status</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p>
<select name="reg_mother_status" id="reg_mother_status" >
<option  value="0">----Select Mother's Status----</option>
<option value="Expired" <?php if($userDATA['reg_mother_status']=="Expired"){?> selected<?php }?> >Expired</option>
<option value="Software Professional" <?php if($userDATA['reg_mother_status']=="Software Professional"){?> selected<?php }?> >Software Professional</option>
<option value="Hardware Professional" <?php if($userDATA['reg_mother_status']=="Hardware Professional"){?> selected<?php }?> >Hardware Professional</option>
<option value="Engineer - Non IT" <?php if($userDATA['reg_mother_status']=="Engineer - Non IT"){?> selected<?php }?>>Engineer - Non IT</option>
<option value="Teaching / Academician" <?php if($userDATA['reg_mother_status']=="Teaching / Academician"){?> selected<?php }?>>Teaching / Academician</option>
<option value="Professor / Lecturer" <?php if($userDATA['reg_mother_status']=="Professor / Lecturer"){?> selected<?php }?> >Professor / Lecturer</option>
<option value="Education Professional" <?php if($userDATA['reg_mother_status']=="Education Professional"){?> selected<?php }?> >Education Professional</option>
<option value="Chartered Accountant" <?php if($userDATA['reg_mother_status']=="Chartered Accountant"){?> selected<?php }?> >Chartered Accountant</option>
<option value="Accounts/Finance Professional" <?php if($userDATA['reg_mother_status']=="Accounts/Finance Professional"){?> selected<?php }?>>Accounts/Finance Professional</option>
<option value="Auditor" <?php if($userDATA['reg_mother_status']=="Auditor"){?> selected<?php }?>>Auditor</option>
<option value="Company Secretary" <?php if($userDATA['reg_mother_status']=="Company Secretary"){?> selected<?php }?> >Company Secretary</option>
<option value="Doctor" <?php if($userDATA['reg_mother_status']=="Doctor"){?> selected<?php }?>>Doctor</option>
<option value="Nurse" <?php if($userDATA['reg_mother_status']=="Nurse"){?> selected<?php }?> >Nurse</option>
<option value="Health Care Professional" <?php if($userDATA['reg_mother_status']=="Health Care Professional"){?> selected<?php }?>>Health Care Professional</option>
<option value="Paramedical Professional" <?php if($userDATA['reg_mother_status']=="Paramedical Professional"){?> selected<?php }?> >Paramedical Professional</option>
<option value="Banking Service Professional" <?php if($userDATA['reg_mother_status']=="Banking Service Professional"){?> selected<?php }?> >Banking Service Professional</option>
<option value="Lawyer & Legal Professional" <?php if($userDATA['reg_mother_status']=="Lawyer & Legal Professional"){?> selected<?php }?> >Lawyer & Legal Professional</option>
<option value="Law Enforcement Officer" <?php if($userDATA['reg_mother_status']=="Law Enforcement Officer"){?> selected<?php }?>>Law Enforcement Officer</option>
<option value="Architect" <?php if($userDATA['reg_mother_status']=="Architect"){?> selected<?php }?> >Architect</option>
<option value="Interior Designer" <?php if($userDATA['reg_mother_status']=="Interior Designer"){?> selected<?php }?>>Interior Designer</option>
<option value="Advertising / PR Professional" <?php if($userDATA['reg_mother_status']=="Advertising / PR Professional"){?> selected<?php }?> >Advertising / PR Professional</option>
<option value="Media Professional" <?php if($userDATA['reg_mother_status']=="Media Professional"){?> selected<?php }?> >Media Professional</option>
<option value="Entertainment Professional" <?php if($userDATA['reg_mother_status']=="Entertainment Professional"){?> selected<?php }?>>Entertainment Professional</option>
<option value="Fashion Designer" <?php if($userDATA['reg_mother_status']=="Fashion Designer"){?> selected<?php }?> >Fashion Designer</option>
<option value="Event Management Professional" <?php if($userDATA['reg_mother_status']=="Event Management Professional"){?> selected<?php }?> >Event Management Professional</option>
<option value="Journalist" <?php if($userDATA['reg_mother_status']=="Journalist"){?> selected<?php }?> >Journalist</option>
<option value="Air Hostess" <?php if($userDATA['reg_mother_status']=="Air Hostess"){?> selected<?php }?>  >Air Hostess</option>
<option value="Airline Professional" <?php if($userDATA['reg_mother_status']=="Airline Professional"){?> selected<?php }?>>Airline Professional</option>
<option value="Pilot" <?php if($userDATA['reg_mother_status']=="Pilot"){?> selected<?php }?> >Pilot</option>
<option value="Mariner / Merchant Navy" <?php if($userDATA['reg_mother_status']=="Mariner / Merchant Navy"){?> selected<?php }?> >Mariner / Merchant Navy</option>
<option value="Beautician" <?php if($userDATA['reg_mother_status']=="Beautician"){?> selected<?php }?>>Beautician</option>
<option value="Hotel / Hospitality Professional" <?php if($userDATA['reg_mother_status']=="Hotel / Hospitality Professional"){?> selected<?php }?> >Hotel / Hospitality Professional</option>
<option value="Scientist / Researcher" <?php if($userDATA['reg_mother_status']=="Scientist / Researcher"){?> selected<?php }?> >Scientist / Researcher</option>
<option value="Social Worker" <?php if($userDATA['reg_mother_status']=="Social Worker"){?> selected<?php }?> >Social Worker</option>
<option value="Agriculture &amp; Farming Professional" <?php if($userDATA['reg_mother_status']=="Agriculture &amp; Farming Professional"){?> selected<?php }?>>Agriculture & Farming Professional</option>
<option value="Arts &amp; Craftsman" <?php if($userDATA['reg_mother_status']=="Arts &amp; Craftsman"){?> selected<?php }?>>Arts & Craftsman</option>
<option value="Administrative Professional" <?php if($userDATA['reg_mother_status']=="Administrative Professional"){?> selected<?php }?> >Administrative Professional</option>
<option value="Customer Care Professional" <?php if($userDATA['reg_mother_status']=="Customer Care Professional"){?> selected<?php }?> >Customer Care Professional</option>
<option value="CXO / President, Director, Chairman" <?php if($userDATA['reg_mother_status']=="CXO / President, Director, Chairman"){?> selected<?php }?> >CXO / President, Director, Chairman</option>
<option value="Marketing Professional" <?php if($userDATA['reg_mother_status']=="Marketing Professional"){?> selected<?php }?> >Marketing Professional</option>
<option value="Sales Professional" <?php if($userDATA['reg_mother_status']=="Sales Professional"){?> selected<?php }?> >Sales Professional</option>
<option value="Technician" <?php if($userDATA['reg_mother_status']=="Technician"){?> selected<?php }?>>Technician</option>
<option value="Consultant" <?php if($userDATA['reg_mother_status']=="Consultant"){?> selected<?php }?>>Consultant</option>
<option value="Clerk" <?php if($userDATA['reg_mother_status']=="Clerk"){?> selected<?php }?> >Clerk</option>
<option value="Officer" <?php if($userDATA['reg_mother_status']=="Officer"){?> selected<?php }?>>Officer</option>
<option value="Supervisor" <?php if($userDATA['reg_mother_status']=="Supervisor"){?> selected<?php }?> >Supervisor</option>
<option value="Manager" <?php if($userDATA['reg_mother_status']=="Manager"){?> selected<?php }?> >Manager</option>
<option value="Executive" <?php if($userDATA['reg_mother_status']=="Executive"){?> selected<?php }?>  >Executive</option>
<option value="Sportsman" <?php if($userDATA['reg_mother_status']=="Sportsman"){?> selected<?php }?>  >Sportsman</option>
<option value="Civil Services (IAS/IPS/IRS/IES/IFS)" <?php if($userDATA['reg_mother_status']=="Civil Services (IAS/IPS/IRS/IES/IFS)"){?> selected<?php }?> >Civil Services (IAS/IPS/IRS/IES/IFS)</option>
<option value="Army" <?php if($userDATA['reg_mother_status']=="Army"){?> selected<?php }?> >Army</option>
<option value="Navy" <?php if($userDATA['reg_mother_status']=="Navy"){?> selected<?php }?>>Navy</option>
<option value="Airforce" <?php if($userDATA['reg_mother_status']=="Airforce"){?> selected<?php }?> >Airforce</option>
<option value="Human Resources Professional" <?php if($userDATA['reg_mother_status']=="Human Resources Professional"){?> selected<?php }?> >Human Resources Professional</option>
<option value="Financial Analyst / Planning" <?php if($userDATA['reg_mother_status']=="Financial Analyst / Planning"){?> selected<?php }?> >Financial Analyst / Planning</option>
<option value="Designer - IT & Engineering" <?php if($userDATA['reg_mother_status']=="Designer - IT & Engineering"){?> selected<?php }?> >Designer - IT & Engineering</option>
<option value="Designer - Media & Entertainment" <?php if($userDATA['reg_mother_status']=="Designer - Media & Entertainment"){?> selected<?php }?> >Designer - Media & Entertainment</option>
<option value="Student" <?php if($userDATA['reg_mother_status']=="Student"){?> selected<?php }?> >Student</option>
<option value="Librarian" <?php if($userDATA['reg_mother_status']=="Librarian"){?> selected<?php }?> >Librarian</option>
<option value="Financial Accountant" <?php if($userDATA['reg_mother_status']=="Financial Accountant"){?> selected<?php }?> >Financial Accountant</option>
<option value="Business Analyst" <?php if($userDATA['reg_mother_status']=="Business Analyst"){?> selected<?php }?> >Business Analyst</option>
<option value="Business Owner / Entrepreneur" <?php if($userDATA['reg_mother_status']=="Business Owner / Entrepreneur"){?> selected<?php }?> >Business Owner / Entrepreneur</option>
<option value="Doctor" <?php if($userDATA['reg_mother_status']=="Doctor"){?> selected<?php }?> >Doctor</option>
<option value="Engineer" <?php if($userDATA['reg_mother_status']=="Engineer"){?> selected<?php }?> >Engineer</option>
<option value="Retired" <?php if($userDATA['reg_mother_status']=="Retired"){?> selected<?php }?> >Retired</option>
<option value="Others" <?php if($userDATA['reg_mother_status']=="Others"){?> selected<?php }?> >Others</option>
<option value="Business" <?php if($userDATA['reg_mother_status']=="Business"){?> selected<?php }?>>Business</option>



<option value="House Wife" <?php if($userDATA['reg_mother_status']=="House Wife"){?> selected<?php }?> >House Wife</option>


<option value="Not working" <?php if($userDATA['reg_mother_status']=="Not working"){?> selected<?php }?> >Not working</option>
</select>
</p>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Siblings Status</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">


<p>
<strong>B: </strong><input type="text" style="width:35%"  name="reg_siblings_bro" id="reg_siblings_bro" value="<?=$userDATA['reg_siblings_bro']?>" />

<strong>S: </strong><input type="text" style="width:35%"  name="reg_siblings_sis" id="reg_siblings_sis" value="<?=$userDATA['reg_siblings_sis']?>" />
</p>

</div>
</div>

<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Siblings Maritial Status</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">


<p>
<strong>B: </strong><input type="text" style="width:35%"  name="reg_siblings_marital_status_bro" id="reg_siblings_marital_status_bro" value="<?=$userDATA['reg_siblings_marital_status_bro']?>" />

<strong>S: </strong><input type="text" style="width:35%"  name="reg_siblings_marital_status_sis" id="reg_siblings_marital_status_sis" value="<?=$userDATA['reg_siblings_marital_status_sis']?>" />
</p>

</div>
</div>




<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Family Status</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p>
<select  name="reg_family_status" id="reg_family_status">
<option value="0" >----Select Family Status----</option>

<option value="Middle class" <?php if($userDATA['reg_family_status']=="Middle class"){?> selected<?php }?> >Middle class</option>
<option value="Upper middle class" <?php if($userDATA['reg_family_status']=="Upper middle class"){?> selected<?php }?> >Upper middle class</option>
<option value="Rich" <?php if($userDATA['reg_family_status']=="Rich"){?> selected<?php }?> >Rich</option>
<option value="Affluent" <?php if($userDATA['reg_family_status']=="Affluent"){?> selected<?php }?>>Affluent</option>
</select>
</p>

</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Family type</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p>
<select name="reg_family_type" id="reg_family_type">
<option  value="0">----Select Family type----</option>
<option  value="Joint Family" <?php if($userDATA['reg_family_type']=="Joint Family"){?> selected <?php }?>>Joint Family</option>
<option  value="Nuclear Family" <?php if($userDATA['reg_family_type']=="Nuclear Family"){?> selected <?php }?> >Nuclear Family</option>
<option  value="Others" <?php if($userDATA['reg_family_type']=="Others"){?> selected <?php }?> >Others</option>

</select>
</p>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Family Values</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p>
<select  name="reg_family_values" id="reg_family_values">
<option  value="Traditional" <?php if($userDATA['reg_family_values']=="Traditional"){?> selected <?php }?>>Traditional</option>
<option  value="Moderate" <?php if($userDATA['reg_family_values']=="Moderate"){?> selected <?php }?>>Moderate</option>
<option  value="Liberal" <?php if($userDATA['reg_family_values']=="Liberal"){?> selected <?php }?>>Liberal</option>
</select>
</p>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Annual income</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">

<p>
<select  name="reg_annual_income" id="reg_annual_income">
<option  value="0">----Select Annual income----</option>
<option  value="Upto INR 1 Lakh" <?php if($userDATA['reg_annual_income']=="Upto INR 1 Lakh"){?> selected <?php }?> >Upto INR 1 Lakh</option>

<option  value="INR 1 Lakh to 2 Lakh" <?php if($userDATA['reg_annual_income']=="INR 1 Lakh to 2 Lakh"){?> selected <?php }?> >INR 1 Lakh to 2 Lakh</option>

<option  value="INR 2 Lakh to 4 Lakh" <?php if($userDATA['reg_annual_income']=="INR 2 Lakh to 4 Lakh"){?> selected <?php }?> >INR 2 Lakh to 4 Lakh</option>

<option  value="INR 4 Lakh to 7 Lakh" <?php if($userDATA['reg_annual_income']=="INR 4 Lakh to 7 Lakh"){?> selected <?php }?> >INR 4 Lakh to 7 Lakh</option>


<option  value="INR 7 Lakh to 10 Lakh" <?php if($userDATA['reg_annual_income']=="INR 7 Lakh to 10 Lakh"){?> selected <?php }?> >INR 7 Lakh to 10 Lakh</option>

<option  value="INR 10 Lakh to 15 Lakh" <?php if($userDATA['reg_annual_income']=="INR 10 Lakh to 15 Lakh"){?> selected <?php }?> >INR 10 Lakh to 15 Lakh</option>

<option  value="INR 15 Lakh to 20 Lakh" <?php if($userDATA['reg_annual_income']=="INR 15 Lakh to 20 Lakh"){?> selected <?php }?> >INR 15 Lakh to 20 Lakh</option>


<option  value="INR 20 Lakh to 30 Lakh" <?php if($userDATA['reg_annual_income']=="INR 20 Lakh to 30 Lakh"){?> selected <?php }?> >INR 20 Lakh to 30 Lakh</option>

<option  value="INR 30 Lakh to 50 Lakh" <?php if($userDATA['reg_annual_income']=="INR 30 Lakh to 50 Lakh"){?> selected <?php }?> >INR 30 Lakh to 50 Lakh</option>

<option  value="INR 50 Lakh to 75 Lakh" <?php if($userDATA['reg_annual_income']=="INR 50 Lakh to 75 Lakh"){?> selected <?php }?> >INR 50 Lakh to 75 Lakh</option>

<option  value="INR 75 Lakh to 1 Crore" <?php if($userDATA['reg_annual_income']=="INR 75 Lakh to 1 Crore"){?> selected <?php }?> >INR 75 Lakh to 1 Crore</option>

<option  value="INR 1 Crore &amp; above" <?php if($userDATA['reg_annual_income']=="INR 1 Crore &amp; above"){?> selected <?php }?> >INR 1 Crore &amp; above</option>

<option  value="Not applicable" <?php if($userDATA['reg_annual_income']=="Not applicable"){?> selected <?php }?> >Not applicable</option>

</select>
</p>



</div>
</div>

<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Family living in</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><input type="text"  name="reg_family_living_in" id="reg_family_living_in" value="<?=$userDATA['reg_family_living_in']?>" /></p>

</div>
</div>
</div>

<input type="hidden" name="edit_family" value="edit-family" />
</form>
</div> 


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
<form action="" name="edit-member-edu-frm" id="edit-member-edu-frm" method="post" enctype="multipart/form-data">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mrg0">
<img src="images/paper_pin.png" class="pin-styd">
<h4>Education & Career</h4>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn">
<button type="submit" name="btn_save_edu" id="save-btn-edu" class="edit-btn" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-edu" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>

</div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-edu" >
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Highest&nbsp;Education</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_highest_edu']?></p>
</div
>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Educational&nbsp;Details</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">&nbsp;:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_edu_detail']?></p>
</div
>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Occupation</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_occupation']?></p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Annual&nbsp;income</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_annual_income']?></p>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Organization&nbsp;Name</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_organization_name']?></p>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Working&nbsp;Location</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_working_location']?></p>
</div>
</div></div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-edu-edit" style="display:none" >
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Highest&nbsp;Education</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_highest_edu" id="reg_highest_edu">
<option value="0" >-- Select Highest Education--</option>
<optgroup label="Engineering/Design">
<option value="B.E/B.Tech" <?php if($userDATA['reg_highest_edu']=="B.E/B.Tech"){?> selected<?php }?> >-  B.E/B.Tech</option>
<option value="B.Pharma" <?php if($userDATA['reg_highest_edu']=="B.Pharma"){?> selected<?php }?>>-  B.Pharma</option>
<option value="M.E/M.Tech" <?php if($userDATA['reg_highest_edu']=="M.E/M.Tech"){?> selected<?php }?>>-  M.E/M.Tech</option>
<option value="M.Pharma" <?php if($userDATA['reg_highest_edu']=="M.Pharma"){?> selected<?php }?>>-  M.Pharma</option>
<option value="M.S. (Engineering)" <?php if($userDATA['reg_highest_edu']=="M.S. (Engineering)"){?> selected<?php }?>>-  M.S. (Engineering)</option>
<option value="B.Arch" <?php if($userDATA['reg_highest_edu']=="B.Arch"){?> selected<?php }?>>-  B.Arch</option>
<option value="M.Arch" <?php if($userDATA['reg_highest_edu']=="M.Arch"){?> selected<?php }?>>-  M.Arch</option>
<option value="B.Des" <?php if($userDATA['reg_highest_edu']=="B.Des"){?> selected<?php }?>>-  B.Des</option>
<option value="M.Des" <?php if($userDATA['reg_highest_edu']=="M.Des"){?> selected<?php }?>>-  M.Des</option>

</optgroup>
<optgroup label="Computers:">
<option value="MCA/PGDCA" <?php if($userDATA['reg_highest_edu']=="MCA/PGDCA"){?> selected<?php }?> >-  MCA/PGDCA</option>
<option value="BCA" <?php if($userDATA['reg_highest_edu']=="BCA"){?> selected<?php }?> >-  BCA</option>
<option value="B.IT" <?php if($userDATA['reg_highest_edu']=="B.IT"){?> selected<?php }?> >-  B.IT</option>
</optgroup>

</optgroup>
<optgroup label="Finance/Commerce:">
<option value="B.Com" <?php if($userDATA['reg_highest_edu']=="B.Com"){?> selected<?php }?> >-   B.Com</option>
<option value="CA" <?php if($userDATA['reg_highest_edu']=="CA"){?> selected<?php }?>>-  CA</option>
<option value="CS" <?php if($userDATA['reg_highest_edu']=="CS"){?> selected<?php }?>>-   CS</option>
<option value="ICWA" <?php if($userDATA['reg_highest_edu']=="ICWA"){?> selected<?php }?>>-  ICWA</option>
<option value="M.Com" <?php if($userDATA['reg_highest_edu']=="M.Com"){?> selected<?php }?>>-   M.Com</option>
<option value="CFA" <?php if($userDATA['reg_highest_edu']=="CFA"){?> selected<?php }?>>-  CFA</option>
</optgroup>
<optgroup label="Management:">
<option value="MBA/PGDM" <?php if($userDATA['reg_highest_edu']=="MBA/PGDM"){?> selected<?php }?>>-  MBA/PGDM</option>
<option value="BBA" <?php if($userDATA['reg_highest_edu']=="BBA"){?> selected<?php }?>>-   BBA</option>
<option value="BHM" <?php if($userDATA['reg_highest_edu']=="BHM"){?> selected<?php }?>>-   BHM</option>
</optgroup>
<optgroup label="Medicine:">
<option value="MBBS" <?php if($userDATA['reg_highest_edu']=="MBBS"){?> selected<?php }?>>-  MBBS</option>
<option value="M.D." <?php if($userDATA['reg_highest_edu']=="M.D."){?> selected<?php }?>>-   M.D.</option>
<option value="BAMS" <?php if($userDATA['reg_highest_edu']=="BAMS"){?> selected<?php }?>>-  BAMS</option>

<option value="BHMS" <?php if($userDATA['reg_highest_edu']=="BHMS"){?> selected<?php }?>>-  BHMS</option>
<option value="BDS" <?php if($userDATA['reg_highest_edu']=="BDS"){?> selected<?php }?>>-  BDS</option>
<option value="M.S. (Medicine)" <?php if($userDATA['reg_highest_edu']=="M.S. (Medicine)"){?> selected<?php }?>>-  M.S. (Medicine)</option>
<option value="MVSc." <?php if($userDATA['reg_highest_edu']=="MVSc."){?> selected<?php }?>>-  MVSc.</option>
<option value="BVSc." <?php if($userDATA['reg_highest_edu']=="BVSc."){?> selected<?php }?>>-  BVSc.</option>
<option value="MDS" <?php if($userDATA['reg_highest_edu']=="MDS"){?> selected<?php }?>>-  MDS</option>
<option value="BPT" <?php if($userDATA['reg_highest_edu']=="BPT"){?> selected<?php }?>>-   BPT</option>
<option value="MPT" <?php if($userDATA['reg_highest_edu']=="MPT"){?> selected<?php }?>>-   MPT</option>
<option value="DM" <?php if($userDATA['reg_highest_edu']=="DM"){?> selected<?php }?>>-  DM</option>
<option value="MCh" <?php if($userDATA['reg_highest_edu']=="MCh"){?> selected<?php }?>>-  MCh</option>
</optgroup>
<optgroup label="Law:" >
<option value="BL /LLB" <?php if($userDATA['reg_highest_edu']=="BL /LLB"){?> selected<?php }?>>-   BL /LLB</option>
<option value="ML/LLM" <?php if($userDATA['reg_highest_edu']=="ML/LLM"){?> selected<?php }?>>-  ML/LLM</option>
</optgroup>
<optgroup label="Arts/Science:">
<option value="B.A." <?php if($userDATA['reg_highest_edu']=="B.A."){?> selected<?php }?>>-   B.A.</option>
<option value="B.Sc" <?php if($userDATA['reg_highest_edu']=="B.Sc"){?> selected<?php }?>>-  B.Sc</option>
<option value="M.Sc" <?php if($userDATA['reg_highest_edu']=="M.Sc"){?> selected<?php }?>>-  M.Sc</option>
<option value="B.Ed" <?php if($userDATA['reg_highest_edu']=="B.Ed"){?> selected<?php }?>>-   B.Ed</option>
<option value="M.Ed" <?php if($userDATA['reg_highest_edu']=="M.Ed"){?> selected<?php }?>>-  M.Ed</option>
<option value="MSW" <?php if($userDATA['reg_highest_edu']=="MSW"){?> selected<?php }?>>-  MSW</option>

<option value="BFA" <?php if($userDATA['reg_highest_edu']=="BFA"){?> selected<?php }?>>-   BFA</option>
<option value="MFA" <?php if($userDATA['reg_highest_edu']=="MFA"){?> selected<?php }?>>-  MFA</option>
<option value="BJMC" <?php if($userDATA['reg_highest_edu']=="BJMC"){?> selected<?php }?>>-  BJMC</option>
<option value="MJMC" <?php if($userDATA['reg_highest_edu']=="MJMC"){?> selected<?php }?>>-  MJMC</option>
</optgroup>

<optgroup label="Doctorate:">
<option value="Ph. D" <?php if($userDATA['reg_highest_edu']=="Ph. D"){?> selected<?php }?>>-   Ph. D</option>
<option value="M.Phil" <?php if($userDATA['reg_highest_edu']=="M.Phil"){?> selected<?php }?>>-  M.Phil</option>
</optgroup>

<optgroup label="Non-Graduate:">
<option value="Diploma" <?php if($userDATA['reg_highest_edu']=="Diploma"){?> selected<?php }?>>-   Diploma</option>
<option value="High School" <?php if($userDATA['reg_highest_edu']=="High School"){?> selected<?php }?>>-  High School</option>
<option value="Trade School" <?php if($userDATA['reg_highest_edu']=="Trade School"){?> selected<?php }?>>-   Trade School</option>
<option value="Other" <?php if($userDATA['reg_highest_edu']=="Other"){?> selected<?php }?>>-  Other</option>
</optgroup>

</select>
</p>
</div
>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Educational&nbsp;Details</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_edu_detail" id="reg_edu_detail" value="<?=$userDATA['reg_edu_detail']?>" /></p>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Occupation</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_occupation" id="reg_occupation">
       <option  value="">----Select Occupation----</option>
<option value="Any" <?php if($userDATA['reg_occupation']=="Any"){?> selected<?php }?> >Any</option>
<option value="Software Professional" <?php if($userDATA['reg_occupation']=="Software Professional"){?> selected<?php }?> >Software Professional</option>
<option value="Hardware Professional" <?php if($userDATA['reg_occupation']=="Hardware Professional"){?> selected<?php }?> >Hardware Professional</option>
<option value="Engineer - Non IT" <?php if($userDATA['reg_occupation']=="Engineer - Non IT"){?> selected<?php }?>>Engineer - Non IT</option>
<option value="Teaching / Academician" <?php if($userDATA['reg_occupation']=="Teaching / Academician"){?> selected<?php }?>>Teaching / Academician</option>
<option value="Professor / Lecturer" <?php if($userDATA['reg_occupation']=="Professor / Lecturer"){?> selected<?php }?> >Professor / Lecturer</option>
<option value="Education Professional" <?php if($userDATA['reg_occupation']=="Education Professional"){?> selected<?php }?> >Education Professional</option>
<option value="Chartered Accountant" <?php if($userDATA['reg_occupation']=="Chartered Accountant"){?> selected<?php }?> >Chartered Accountant</option>
<option value="Accounts/Finance Professional" <?php if($userDATA['reg_occupation']=="Accounts/Finance Professional"){?> selected<?php }?>>Accounts/Finance Professional</option>
<option value="Auditor" <?php if($userDATA['reg_occupation']=="Auditor"){?> selected<?php }?>>Auditor</option>
<option value="Company Secretary" <?php if($userDATA['reg_occupation']=="Company Secretary"){?> selected<?php }?> >Company Secretary</option>
<option value="Doctor" <?php if($userDATA['reg_occupation']=="Doctor"){?> selected<?php }?>>Doctor</option>
<option value="Nurse" <?php if($userDATA['reg_occupation']=="Nurse"){?> selected<?php }?> >Nurse</option>
<option value="Health Care Professional" <?php if($userDATA['reg_occupation']=="Health Care Professional"){?> selected<?php }?>>Health Care Professional</option>
<option value="Paramedical Professional" <?php if($userDATA['reg_occupation']=="Paramedical Professional"){?> selected<?php }?> >Paramedical Professional</option>
<option value="Banking Service Professional" <?php if($userDATA['reg_occupation']=="Banking Service Professional"){?> selected<?php }?> >Banking Service Professional</option>
<option value="Lawyer & Legal Professional" <?php if($userDATA['reg_occupation']=="Lawyer & Legal Professional"){?> selected<?php }?> >Lawyer & Legal Professional</option>
<option value="Law Enforcement Officer" <?php if($userDATA['reg_occupation']=="Law Enforcement Officer"){?> selected<?php }?>>Law Enforcement Officer</option>
<option value="Architect" <?php if($userDATA['reg_occupation']=="Architect"){?> selected<?php }?> >Architect</option>
<option value="Interior Designer" <?php if($userDATA['reg_occupation']=="Interior Designer"){?> selected<?php }?>>Interior Designer</option>
<option value="Advertising / PR Professional" <?php if($userDATA['reg_occupation']=="Advertising / PR Professional"){?> selected<?php }?> >Advertising / PR Professional</option>
<option value="Media Professional" <?php if($userDATA['reg_occupation']=="Media Professional"){?> selected<?php }?> >Media Professional</option>
<option value="Entertainment Professional" <?php if($userDATA['reg_occupation']=="Entertainment Professional"){?> selected<?php }?>>Entertainment Professional</option>
<option value="Fashion Designer" <?php if($userDATA['reg_occupation']=="Fashion Designer"){?> selected<?php }?> >Fashion Designer</option>
<option value="Event Management Professional" <?php if($userDATA['reg_occupation']=="Event Management Professional"){?> selected<?php }?> >Event Management Professional</option>
<option value="Journalist" <?php if($userDATA['reg_occupation']=="Journalist"){?> selected<?php }?> >Journalist</option>
<option value="Air Hostess" <?php if($userDATA['reg_occupation']=="Air Hostess"){?> selected<?php }?>  >Air Hostess</option>
<option value="Airline Professional" <?php if($userDATA['reg_occupation']=="Airline Professional"){?> selected<?php }?>>Airline Professional</option>
<option value="Pilot" <?php if($userDATA['reg_occupation']=="Pilot"){?> selected<?php }?> >Pilot</option>
<option value="Mariner / Merchant Navy" <?php if($userDATA['reg_occupation']=="Mariner / Merchant Navy"){?> selected<?php }?> >Mariner / Merchant Navy</option>
<option value="Beautician" <?php if($userDATA['reg_occupation']=="Beautician"){?> selected<?php }?>>Beautician</option>
<option value="Hotel / Hospitality Professional" <?php if($userDATA['reg_occupation']=="Hotel / Hospitality Professional"){?> selected<?php }?> >Hotel / Hospitality Professional</option>
<option value="Scientist / Researcher" <?php if($userDATA['reg_occupation']=="Scientist / Researcher"){?> selected<?php }?> >Scientist / Researcher</option>
<option value="Social Worker" <?php if($userDATA['reg_occupation']=="Social Worker"){?> selected<?php }?> >Social Worker</option>
<option value="Agriculture &amp; Farming Professional" <?php if($userDATA['reg_occupation']=="Agriculture &amp; Farming Professional"){?> selected<?php }?>>Agriculture & Farming Professional</option>
<option value="Arts &amp; Craftsman" <?php if($userDATA['reg_occupation']=="Arts &amp; Craftsman"){?> selected<?php }?>>Arts & Craftsman</option>
<option value="Administrative Professional" <?php if($userDATA['reg_occupation']=="Administrative Professional"){?> selected<?php }?> >Administrative Professional</option>
<option value="Customer Care Professional" <?php if($userDATA['reg_occupation']=="Customer Care Professional"){?> selected<?php }?> >Customer Care Professional</option>
<option value="CXO / President, Director, Chairman" <?php if($userDATA['reg_occupation']=="CXO / President, Director, Chairman"){?> selected<?php }?> >CXO / President, Director, Chairman</option>
<option value="Marketing Professional" <?php if($userDATA['reg_occupation']=="Marketing Professional"){?> selected<?php }?> >Marketing Professional</option>
<option value="Sales Professional" <?php if($userDATA['reg_occupation']=="Sales Professional"){?> selected<?php }?> >Sales Professional</option>
<option value="Technician" <?php if($userDATA['reg_occupation']=="Technician"){?> selected<?php }?>>Technician</option>
<option value="Consultant" <?php if($userDATA['reg_occupation']=="Consultant"){?> selected<?php }?>>Consultant</option>
<option value="Clerk" <?php if($userDATA['reg_occupation']=="Clerk"){?> selected<?php }?> >Clerk</option>
<option value="Officer" <?php if($userDATA['reg_occupation']=="Officer"){?> selected<?php }?>>Officer</option>
<option value="Supervisor" <?php if($userDATA['reg_occupation']=="Supervisor"){?> selected<?php }?> >Supervisor</option>
<option value="Manager" <?php if($userDATA['reg_occupation']=="Manager"){?> selected<?php }?> >Manager</option>
<option value="Executive" <?php if($userDATA['reg_occupation']=="Executive"){?> selected<?php }?>  >Executive</option>
<option value="Sportsman" <?php if($userDATA['reg_occupation']=="Sportsman"){?> selected<?php }?>  >Sportsman</option>
<option value="Civil Services (IAS/IPS/IRS/IES/IFS)" <?php if($userDATA['reg_occupation']=="Civil Services (IAS/IPS/IRS/IES/IFS)"){?> selected<?php }?> >Civil Services (IAS/IPS/IRS/IES/IFS)</option>
<option value="Army" <?php if($userDATA['reg_occupation']=="Army"){?> selected<?php }?> >Army</option>
<option value="Navy" <?php if($userDATA['reg_occupation']=="Navy"){?> selected<?php }?>>Navy</option>
<option value="Airforce" <?php if($userDATA['reg_occupation']=="Airforce"){?> selected<?php }?> >Airforce</option>
<option value="Human Resources Professional" <?php if($userDATA['reg_occupation']=="Human Resources Professional"){?> selected<?php }?> >Human Resources Professional</option>
<option value="Financial Analyst / Planning" <?php if($userDATA['reg_occupation']=="Financial Analyst / Planning"){?> selected<?php }?> >Financial Analyst / Planning</option>
<option value="Designer - IT & Engineering" <?php if($userDATA['reg_occupation']=="Designer - IT & Engineering"){?> selected<?php }?> >Designer - IT & Engineering</option>
<option value="Designer - Media & Entertainment" <?php if($userDATA['reg_occupation']=="Designer - Media & Entertainment"){?> selected<?php }?> >Designer - Media & Entertainment</option>
<option value="Student" <?php if($userDATA['reg_occupation']=="Student"){?> selected<?php }?> >Student</option>
<option value="Librarian" <?php if($userDATA['reg_occupation']=="Librarian"){?> selected<?php }?> >Librarian</option>
<option value="Financial Accountant" <?php if($userDATA['reg_occupation']=="Financial Accountant"){?> selected<?php }?> >Financial Accountant</option>
<option value="Business Analyst" <?php if($userDATA['reg_occupation']=="Business Analyst"){?> selected<?php }?> >Business Analyst</option>
<option value="Business Owner / Entrepreneur" <?php if($userDATA['reg_occupation']=="Business Owner / Entrepreneur"){?> selected<?php }?> >Business Owner / Entrepreneur</option>
<option value="Retired" <?php if($userDATA['reg_occupation']=="Retired"){?> selected<?php }?> >Retired</option>
<option value="Others" <?php if($userDATA['reg_occupation']=="Others"){?> selected<?php }?> >Others</option>
<option value="Business" <?php if($userDATA['reg_occupation']=="Business"){?> selected<?php }?>>Business</option>
<option value="Not working" <?php if($userDATA['reg_occupation']=="Not working"){?> selected<?php }?> >Not working</option>
<option value="Doctor" <?php if($userDATA['reg_occupation']=="Doctor"){?> selected<?php }?> >Doctor</option>
<option value="Engineer" <?php if($userDATA['reg_occupation']=="Engineer"){?> selected<?php }?> >Engineer</option>

</select>
</p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Annual&nbsp;income</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_annual_income" id="reg_annual_income">
<option  value="0">----Select Annual income----</option>
<option  value="Upto INR 1 Lakh" <?php if($userDATA['reg_member_annual_income']=="Upto INR 1 Lakh"){?> selected <?php }?> >Upto INR 1 Lakh</option>

<option  value="INR 1 Lakh to 2 Lakh" <?php if($userDATA['reg_member_annual_income']=="INR 1 Lakh to 2 Lakh"){?> selected <?php }?> >INR 1 Lakh to 2 Lakh</option>

<option  value="INR 2 Lakh to 4 Lakh" <?php if($userDATA['reg_member_annual_income']=="INR 2 Lakh to 4 Lakh"){?> selected <?php }?> >INR 2 Lakh to 4 Lakh</option>

<option  value="INR 4 Lakh to 7 Lakh" <?php if($userDATA['reg_member_annual_income']=="INR 4 Lakh to 7 Lakh"){?> selected <?php }?> >INR 4 Lakh to 7 Lakh</option>


<option  value="INR 7 Lakh to 10 Lakh" <?php if($userDATA['reg_member_annual_income']=="INR 7 Lakh to 10 Lakh"){?> selected <?php }?> >INR 7 Lakh to 10 Lakh</option>

<option  value="INR 10 Lakh to 15 Lakh" <?php if($userDATA['reg_member_annual_income']=="INR 10 Lakh to 15 Lakh"){?> selected <?php }?> >INR 10 Lakh to 15 Lakh</option>

<option  value="INR 15 Lakh to 20 Lakh" <?php if($userDATA['reg_member_annual_income']=="INR 15 Lakh to 20 Lakh"){?> selected <?php }?> >INR 15 Lakh to 20 Lakh</option>


<option  value="INR 20 Lakh to 30 Lakh" <?php if($userDATA['reg_member_annual_income']=="INR 20 Lakh to 30 Lakh"){?> selected <?php }?> >INR 20 Lakh to 30 Lakh</option>

<option  value="INR 30 Lakh to 50 Lakh" <?php if($userDATA['reg_member_annual_income']=="INR 30 Lakh to 50 Lakh"){?> selected <?php }?> >INR 30 Lakh to 50 Lakh</option>

<option  value="INR 50 Lakh to 75 Lakh" <?php if($userDATA['reg_member_annual_income']=="INR 50 Lakh to 75 Lakh"){?> selected <?php }?> >INR 50 Lakh to 75 Lakh</option>

<option  value="INR 75 Lakh to 1 Crore" <?php if($userDATA['reg_member_annual_income']=="INR 75 Lakh to 1 Crore"){?> selected <?php }?> >INR 75 Lakh to 1 Crore</option>

<option  value="INR 1 Crore &amp; above" <?php if($userDATA['reg_member_annual_income']=="INR 1 Crore &amp; above"){?> selected <?php }?> >INR 1 Crore &amp; above</option>

<option  value="Not applicable" <?php if($userDATA['reg_member_annual_income']=="Not applicable"){?> selected <?php }?> >Not applicable</option>
</select>
</p>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Organization&nbsp;Name</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_organization_name" id="reg_organization_name" value="<?=$userDATA['reg_organization_name']?>" /></p>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Working&nbsp;Location</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_working_location" id="reg_working_location" value="<?=$userDATA['reg_working_location']?>" /></p>
</div>
</div>
</div>

<input type="hidden" name="edit_edu" value="edit-edu" />

</form>

</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
<form action="" name="edit-member-religion-frm" id="edit-member-religion-frm" method="post" enctype="multipart/form-data">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mrg0">
<img src="images/paper_pin.png" class="pin-styd">
<h4>Religious Background</h4>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn">

<button type="submit" name="btn_save_religion" id="save-btn-religion" class="edit-btn" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-religion" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>      
 </div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-religion">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Religion</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<?=$userDATA['reg_religion']?>
</p>
</div
>
</div>


<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mp_1" >

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Community</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_cast']?>
</div>
</div>


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pd-msof no-padd " id="show-hide-sub-community">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Sub&nbsp;Community</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">

<?=$userDATA['reg_sub_cast']?>

</div>
</div>

</div>


<div class="clearfix"></div>
<div <?php if(!empty($userDATA['reg_religion']) && $userDATA['reg_religion']=="Muslim"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?>  >      


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Namaaz(Salah)</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_namaz']?>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>&nbsp;&nbsp;&nbsp;&nbsp;Zakaat</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_zakaat']?>
</div>
</div>




<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Fasting&nbsp;in&nbsp;Ramadan</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">&nbsp;&nbsp;:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_fasting']?>
</div>

</div>
</div>



<div <?php if(!empty($userDATA['reg_religion']) && $userDATA['reg_religion']=="Hindu"){?>style="display:block" <?php }else{?>style="display:none"  <?php }?> >      


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Gotra</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_gotra']?>
</div>
</div>



<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Dosh</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_dosh_hindu']?>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Star</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_star_hindu']?>
</div>

</div>




</div>

<div <?php if(!empty($userDATA['reg_religion']) && $userDATA['reg_religion']=="Sikh"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> >      

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Wearing&nbsp;Dastar/Pagg</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_dastar']?>
</div>
</div>

</div>


<div <?php if(!empty($userDATA['reg_religion']) && $userDATA['reg_religion']=="Jain"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> >      



<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Gotra</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_gotra_jain']?>
</div>
</div>



<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Dosh</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_dosh_jain']?>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Star</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_star_jain']?>
</div>

</div>


</div>

</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-10 no-padd" id="member-religion-edit" style="display:none">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Religion</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_religion" id="reg_religion" onChange="byReligion(this.value)"> 
<option value="0">----Select Religion----</option>
<?php
$sql="SELECT * FROM tbl_community WHERE c_status='Active' AND c_parent_id='0'";
$dataCommunity=db_query($sql);
$countCommunity=mysqli_num_rows($dataCommunity);
if($countCommunity){
while($recCommunity=mysqli_fetch_array($dataCommunity)){	
?>
<option value="<?=$recCommunity['c_title']?>" <?php if($userDATA['reg_religion']==$recCommunity['c_title']){?> selected<?php }?> >
<?=$recCommunity['c_title']?></option>
<?php
}
}
?>
</select>
</p>
</div
>
</div>


<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mp_1" id="community_load_area" 
<?php if($userDATA['reg_religion']=="Parsi" || $userDATA['reg_religion']=="Buddhist" || $userDATA['reg_religion']=="Jewish" ){?> style="display:none" <?php }?>  >

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Community</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<select  name="reg_cast" id="reg_cast">
<option  value="0">----Select Community----</option>      
<?php if(!empty($userDATA['reg_cast'])){?>
<option value="<?=$userDATA['reg_cast']?>" selected><?=$userDATA['reg_cast']?></option>
<?php }?>
</select>
</div>
</div>




<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pd-msof no-padd " id="show-hide-sub-community">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Sub&nbsp;Community</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="text" placeholder="Enter Sub Community" name="reg_sub_cast" id="reg_sub_cast" value="<?=$userDATA['reg_sub_cast']?>" >
</div>
</div>


</div>










<!--///// -->

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" <?php ?><?php if(!empty($userDATA['reg_religion']) && $userDATA['reg_religion']=="Muslim"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?><?php ?> id="muslim">      


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Namaaz(Salah)</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">

<select   name="reg_namaz" id="reg_namaz">

<option  value="0">----Select Namaaz / Salaah----</option>
<option value="Five times" label="Five times" <?php if($userDATA['reg_namaz']=="Five times"){?> selected<?php }?>   >Five times</option>
<option value="Only on Jummah" label="Only on Jummah" <?php if($userDATA['reg_namaz']=="Only on Jummah"){?> selected<?php }?>>Only on Jummah</option>
<option value="During Ramadan" label="During Ramadan" <?php if($userDATA['reg_namaz']=="During Ramadan"){?> selected<?php }?> >During Ramadan</option>
<option value="Occasionally" label="Occasionally" <?php if($userDATA['reg_namaz']=="Occasionally"){?> selected<?php }?>  >Occasionally</option>

</select>

</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Zakaat</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_zakaat" id="reg_zakaat_yes" value="Yes" <?php if($userDATA['reg_zakaat']=="Yes"){?> checked <?php }?> > Yes

<input type="radio" name="reg_zakaat" id="reg_zakaat_no" value="No" <?php if($userDATA['reg_zakaat']=="No"){?> checked <?php }?>> No
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Fasting&nbsp;in&nbsp;Ramadan</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">&nbsp;&nbsp;:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_fasting" id="reg_fasting_yes" value="Yes" <?php if($userDATA['reg_fasting']=="Yes"){?> checked <?php }?> > Yes
<input type="radio" name="reg_fasting" id="reg_fasting_no" value="No" <?php if($userDATA['reg_fasting']=="No"){?> checked <?php }?>> No
</div>

</div>
</div>



<div <?php if(!empty($userDATA['reg_religion']) && $userDATA['reg_religion']=="Hindu"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="hindu">      


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Gotra</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">

<input type="text" placeholder=" Enter Your Gotra" name="reg_gotra_hindu" id="reg_gotra_hindu" value="<?=$userDATA['reg_gotra']?>" >

</div>
</div>



<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Dosh</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_dosh_hindu" id="reg_dosh_hindu_yes" value="Yes" <?php if($userDATA['reg_dosh']=="Yes"){?> checked <?php }?> > Yes
<input type="radio" name="reg_dosh_hindu" id="reg_dosh_hindu_no" value="No" <?php if($userDATA['reg_dosh']=="No"){?> checked <?php }?>> No
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Star</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_star_hindu" id="reg_star_hindu_yes" value="Yes" <?php if($userDATA['reg_star']=="Yes"){?> checked <?php }?> > Yes

<input type="radio" name="reg_star_hindu" id="reg_star_hindu_no" value="No" <?php if($userDATA['reg_star']=="No"){?> checked <?php }?>> No
</div>

</div>




</div>

<div <?php if(!empty($userDATA['reg_religion']) && $userDATA['reg_religion']=="Sikh"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="sikh">      

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Wearing&nbsp;Dastar/Pagg</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_dastar" id="reg_dastar_yes" value="Yes" <?php if($userDATA['reg_dastar']=="Yes"){?> checked <?php }?> > Yes
<input type="radio" name="reg_dastar" id="reg_dastar_no" value="No" <?php if($userDATA['reg_dastar']=="No"){?> checked <?php }?>> No
</div>
</div>

</div>


<div <?php if(!empty($userDATA['reg_religion']) && $userDATA['reg_religion']=="Jain"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="jain">      



<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Gotra</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">

<input type="text" placeholder=" Enter Your Gotra" name="reg_gotra_jain" id="reg_gotra_jain" value="<?=$userDATA['reg_gotra']?>" >

</div>
</div>



<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Dosh</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_dosh_jain" id="reg_dosh_jain_yes" value="Yes" <?php if($userDATA['reg_dosh']=="Yes"){?> checked <?php }?> > Yes
<input type="radio" name="reg_dosh_jain" id="reg_dosh_jain_no" value="No" <?php if($userDATA['reg_dosh']=="No"){?> checked <?php }?>> No
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Star</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_star_jain" id="reg_star_jain_yes" value="Yes" <?php if($userDATA['reg_star']=="Yes"){?> checked <?php }?> > Yes

<input type="radio" name="reg_star_jain" id="reg_star_jain_no" value="No" <?php if($userDATA['reg_star']=="No"){?> checked <?php }?>> No
</div>

</div>





</div>
<!--///-->









</div>

<input type="hidden" name="edit_religion" value="edit-religion" />
</form>

</div>



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
<form action="" name="edit-member-lifestyle-frm" id="edit-member-lifestyle-frm" method="post" enctype="multipart/form-data">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-xs-10 mrg0">
<img src="images/paper_pin.png" class="pin-styd">
<h4>Lifestyle And Habits</h4>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn">

<button type="submit" name="btn_save_lifestyle" id="save-btn-lifestyle" class="edit-btn" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-lifestyle" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>

</div>

</div>



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-lifestyle">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Appearance</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_appearance']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Living Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_living_status']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Physical Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_physical_status']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Eating Habits</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_eating_habits']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Smoking Habits</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_smoking_habits']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Drinking Habits</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_drinking_habits']?></p>
</div>
</div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-lifestyle-edit" style="display:none">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Appearance</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_appearance" id="reg_appearance">
<option  value="0">----Select Appearance----</option>
<option  value="Fair"  <?php if($userDATA['reg_appearance']=="Fair"){?> selected <?php }?>  >Fair</option>
<option  value="Wheatis" <?php if($userDATA['reg_appearance']=="Wheatis"){?> selected <?php }?> >Wheatis</option>
<option  value="Dark" <?php if($userDATA['reg_appearance']=="Dark"){?> selected <?php }?>  > Dark</option>
</select>
</p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Living Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_living_status" id="reg_living_status">
<option  value="0">----Select Living Status----</option>
<option  value="Traditional" <?php if($userDATA['reg_living_status']=="Traditional"){?> selected <?php }?>>Traditional</option>
<option  value="Moderate" <?php if($userDATA['reg_living_status']=="Moderate"){?> selected <?php }?>>Moderate</option>
<option  value="Liberal" <?php if($userDATA['reg_living_status']=="Liberal"){?> selected <?php }?>>Liberal</option>
</select>
</p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Physical Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_physical_status" id="reg_physical_status" >
<option  value="0">----Select Physical Status----</option>
<option  value="Slim" <?php if($userDATA['reg_physical_status']=="Slim"){?> selected <?php }?> >Slim</option>
<option  value="Average/Athletic" <?php if($userDATA['reg_physical_status']=="Average/Athletic"){?> selected <?php }?> >Average/Athletic</option>
<option  value="Heavy" <?php if($userDATA['reg_physical_status']=="Heavy"){?> selected <?php }?>>Heavy</option>
</select>
</p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Eating Habits</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_eating_habits" id="reg_eating_habits">
<option  value="0">----Select Eating Habits--</option>
<option  value="Veg" <?php if($userDATA['reg_eating_habits']=="Veg"){?> selected <?php }?>>Veg</option>
<option  value="Non-Veg" <?php if($userDATA['reg_eating_habits']=="Non-Veg"){?> selected <?php }?>>Non-Veg</option>
<option  value="Eggiterian" <?php if($userDATA['reg_eating_habits']=="Eggiterian"){?> selected <?php }?>>Eggiterian</option>
</select>
</p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Smoking Habits</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select name="reg_smoking_habits" id="reg_smoking_habits">
<option  value="0" >----Select Smoking Habits----</option>
<option  value="Non-smoker" <?php if($userDATA['reg_smoking_habits']=="Non-smoker"){?> selected <?php }?>>Non-smoker</option>
<option  value="Regular smoker" <?php if($userDATA['reg_smoking_habits']=="Regular smoker"){?> selected <?php }?>>Regular smoker</option>
</select>
</p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Drinking Habits</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_drinking_habits" id="reg_drinking_habits">
<option  value="0">----Select Drinking Habits----</option>
<option  value="Non-drinker"  <?php if($userDATA['reg_drinking_habits']=="Non-drinker"){?> selected <?php }?>>Non-drinker</option>
<option  value="Drinks Occasionally"  <?php if($userDATA['reg_drinking_habits']=="Drinks Occasionally"){?> selected <?php }?>>Drinks Occasionally</option>
</select>
</p>
</div>
</div>
</div>

<input type="hidden" name="edit_lifestyle" value="edit-lifestyle" />

</form>
</div>



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
<form action="" name="edit-member-like-frm" id="edit-member-like-frm" method="post" enctype="multipart/form-data">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-xs-10 mrg0">
<img src="images/paper_pin.png" class="pin-styd">
<h4>Likes & Interests</h4>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-xs-2 wd-btn">

<button type="submit" name="btn_save_like" id="save-btn-like" class="edit-btn" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-like" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>


</div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-like" >
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Hobbies</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_hobbies']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Interests</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_interests']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Favourite Music</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_favourite_music']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Favourite Book</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_favourite_book']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Dress Style</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_dress_style']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>TV Shows</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_tv_shows']?></p>
</div>
</div></div>



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-like-edit" style="display:none">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Hobbies</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<input type="text" placeholder=" Enter Your Hobbies" name="reg_hobbies" id="reg_hobbies" value="<?=$userDATA['reg_hobbies']?>" >
</p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Interests</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<input type="text" placeholder=" Enter Your Interests" name="reg_interests" id="reg_interests" value="<?=$userDATA['reg_interests']?>" >
</p>

</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Favourite Music</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<input type="text" placeholder=" Enter Your Favourite Music" name="reg_favourite_music" id="reg_favourite_music" value="<?=$userDATA['reg_favourite_music']?>" >
</p>

</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Favourite Book</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<input type="text" placeholder=" Enter Your Favourite Book" name="reg_favourite_book" id="reg_favourite_book" value="<?=$userDATA['reg_favourite_book']?>" >
</p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Dress Style</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p>
<input type="text" placeholder=" Enter Your Dress Style" name="reg_dress_style" id="reg_dress_style" value="<?=$userDATA['reg_dress_style']?>" >
</p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>TV Shows</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p>
<input type="text" placeholder=" Enter Your TV Shows" name="reg_tv_shows" id="reg_tv_shows" value="<?=$userDATA['reg_tv_shows']?>" >
</p>
</div>
</div></div>


<input type="hidden" name="edit_like" value="edit-like" />

</form>
</div>

  </div>
 </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp-02 pd-left">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd1" style="margin:10px; width:99%;">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xs-12 mrg0">
            <h4><i class="fa fa-star"></i> Partner Preference</h4>
      </div>
  </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 hidden-xs" style="margin-top:-10px;">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <div class="brd-styd" style="height:30px;"></div>
       <i class="fa fa-pencil crcle-icon" style="color:#ef3079"></i>
      
       <div class="brd-styd" style="height:80px;"></div>
       <i class="fa fa-user crcle-icon" style="color:#C60"></i>
       <div style="border:solid 1px #C03; height:170px; width:1px;"></div>
       <i class="fa fa-map-marker crcle-icon" style="color:#0a2d3c; font-size:25px;"></i>
      
       <div class="brd-styd" style="height:100px;"></div>
       <i class="fa fa-briefcase crcle-icon" style="color:#147a95;"></i>
      
       <div class="brd-styd" style="height:100px;"></div>
       <i class="fa fa-glass crcle-icon" style="color:#cc6017"></i>
     
      
  </div>
  </div>
        <!----->
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 mp0myp2">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl sdow">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mrg0">
<img src="images/paper_pin.png" class="pin-styd">
<h4>A few words about my preferred partner</h4>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn">
<button type="submit" name="btn_save_partner-myself" id="save-btn-partner-myself" class="edit-btn sbt" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-partner-myself" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>
</div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="member-partner-myself" >
<p style="text-align:justify;"><?=$userDATA['reg_preference_mem_myself']?></p>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb15" id="member-partner-myself-edit" style="display:none" >
<textarea name="reg_preference_mem_myself" id="reg_preference_mem_myself" class="form-control" ><?=$userDATA['reg_preference_mem_myself']?></textarea>
</div>


<input type="hidden" name="edit_partner_myself" value="edit-partner-myself" />

</div>



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
<form action="" name="edit-member-partner-basic-frm" id="edit-member-partner-basic-frm" method="post" enctype="multipart/form-data">



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-xs-10 mrg0">
<img src="images/paper_pin.png" class="pin-styd">
<h4>Basic Details </h4>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn">
<button type="submit" name="btn_save_partner_basic" id="save-btn-partner-basic" class="edit-btn" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-partner-basic" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>

</div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-partner-basic">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Marital Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_marital_status']?></p>
</div
>
</div>


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Age</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_age']?> to <?=$userDATA['reg_preference_age_to']?> Years</p>
</div
>
</div>
<div class="clearfix"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Height</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
  <?php 
$user_height=$userDATA['reg_preference_height'];
$user_height_to=$userDATA['reg_preference_height_to'];
 ?>
<p><?=str_replace(".", "'", $user_height)?>" to <?=str_replace(".", "'", $user_height_to)?>"</p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Mother Tongue</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_mother_tongue']?></p>
</div>
</div>



<?php /*?><div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Religion</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$userDATA['reg_preference_religion']?></p>
</div>
</div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Caste</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$userDATA['reg_preference_cast']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Sub Caste</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$userDATA['reg_preference_sub_cast']?></p>
</div>
</div><?php */?>


</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-partner-basic-edit" style="display:none">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Marital Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_preference_marital_status" id="reg_preference_marital_status" >
<option value="0" selected="selected">----Select Marital Status----</option>
<option value="Doesn't Matter" <?php if($userDATA['reg_preference_marital_status']=="Doesn't Matter"){?> selected <?php }?> >Doesn't Matter</option>
<option value="Never Married"  <?php if($userDATA['reg_preference_marital_status']=="Never Married"){?> selected <?php }?>>Never Married</option>
<option value="Divorced" <?php if($userDATA['reg_preference_marital_status']=="Divorced"){?> selected <?php }?> >Divorced</option>
<option value="Widowed" <?php if($userDATA['reg_preference_marital_status']=="Widowed"){?> selected <?php }?>>Widowed</option>
<option value="Awaiting Divorce" <?php if($userDATA['reg_preference_marital_status']=="Awaiting Divorce"){?> selected <?php }?>>Awaiting Divorce</option>
<option value="Annulled" <?php if($userDATA['reg_preference_marital_status']=="Annulled"){?> selected <?php }?> >Annulled</option>
</select>
</p>

</div>
</div>


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Age FROM - To</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_preference_age" id="reg_preference_age" value="<?=$userDATA['reg_preference_age']?>" />
<input type="text"  name="reg_preference_age_to" id="reg_preference_age_to" value="<?=$userDATA['reg_preference_age_to']?>" />
</p>
</div>
</div>
<div class="clearfix"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Height From - To</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_preference_height" id="reg_preference_height">
<option value="4.5" <?php if($userDATA['reg_preference_height']=="4.5"){?> selected <?php }?>>4' 5'' - 134cm</option>
<option value="4.6" <?php if($userDATA['reg_preference_height']=="4.6"){?> selected <?php }?>>4' 6'' - 137cm</option>
<option value="4.7" <?php if($userDATA['reg_preference_height']=="4.7"){?> selected <?php }?>>4' 7'' - 139cm</option>
<option value="4.8" <?php if($userDATA['reg_preference_height']=="4.8"){?> selected <?php }?>>4' 8'' - 142cm</option>
<option value="4.9" <?php if($userDATA['reg_preference_height']=="4.9"){?> selected <?php }?>>4' 9'' - 144cm</option>
<option value="5" <?php if($userDATA['reg_preference_height']=="5"){?> selected <?php }?>>5' - 152cm</option>
<option value="5.1" <?php if($userDATA['reg_preference_height']=="5.1"){?> selected <?php }?>>5' 1'' - 154cm</option>
<option value="5.2" <?php if($userDATA['reg_preference_height']=="5.2"){?> selected <?php }?>>5' 2'' - 157cm</option>
<option value="5.3" <?php if($userDATA['reg_preference_height']=="5.3"){?> selected <?php }?>>5' 3'' - 160cm</option>
<option value="5.4" <?php if($userDATA['reg_preference_height']=="5.4"){?> selected <?php }?>>5' 4'' - 162cm</option>
<option value="5.5" <?php if($userDATA['reg_preference_height']=="5.5"){?> selected <?php }?>>5' 5'' - 165cm</option>
<option value="5.6" <?php if($userDATA['reg_preference_height']=="5.6"){?> selected <?php }?>>5' 6'' - 167cm</option>
<option value="5.7" <?php if($userDATA['reg_preference_height']=="5.7"){?> selected <?php }?>>5' 7'' - 170cm</option>
<option value="5.8" <?php if($userDATA['reg_preference_height']=="5.8"){?> selected <?php }?>>5' 8'' - 172cm</option>
<option value="5.9" <?php if($userDATA['reg_preference_height']=="5.9"){?> selected <?php }?>>5' 9'' - 175cm</option>
<option value="6" <?php if($userDATA['reg_preference_height']=="6"){?> selected <?php }?>>6' - 182cm</option>
<option value="6.1" <?php if($userDATA['reg_preference_height']=="6.1"){?> selected <?php }?>>6' 1'' - 185cm</option>
<option value="6.2" <?php if($userDATA['reg_preference_height']=="6.2"){?> selected <?php }?>>6' 2'' - 187cm</option>
<option value="6.3" <?php if($userDATA['reg_preference_height']=="6.3"){?> selected <?php }?>>6' 3'' - 190cm</option>
<option value="6.4" <?php if($userDATA['reg_preference_height']=="6.4"){?> selected <?php }?>>6' 4'' - 193cm</option>
<option value="6.5" <?php if($userDATA['reg_preference_height']=="6.5"){?> selected <?php }?>>6' 5'' - 195cm</option>
<option value="6.6" <?php if($userDATA['reg_preference_height']=="6.6"){?> selected <?php }?>>6' 6'' - 198cm</option>
<option value="6.7" <?php if($userDATA['reg_preference_height']=="6.7"){?> selected <?php }?>>6' 7'' - 200cm</option>
<option value="6.8" <?php if($userDATA['reg_preference_height']=="6.8"){?> selected <?php }?>>6' 8'' - 203cm</option>
<option value="6.9" <?php if($userDATA['reg_preference_height']=="6.9"){?> selected <?php }?>>6' 9'' - 205cm</option>
</select>

<select  name="reg_preference_height_to" id="reg_preference_height_to">
<option value="4.7" <?php if($userDATA['reg_preference_height_to']=="4.7"){?> selected <?php }?>>4' 7'' - 139cm</option>
<option value="4.8" <?php if($userDATA['reg_preference_height_to']=="4.8"){?> selected <?php }?>>4' 8'' - 142cm</option>
<option value="4.9" <?php if($userDATA['reg_preference_height_to']=="4.9"){?> selected <?php }?>>4' 9'' - 144cm</option>
<option value="5" <?php if($userDATA['reg_preference_height_to']=="5"){?> selected <?php }?>>5' - 152cm</option>
<option value="5.1" <?php if($userDATA['reg_preference_height_to']=="5.1"){?> selected <?php }?>>5' 1'' - 154cm</option>
<option value="5.2" <?php if($userDATA['reg_preference_height_to']=="5.2"){?> selected <?php }?>>5' 2'' - 157cm</option>
<option value="5.3" <?php if($userDATA['reg_preference_height_to']=="5.3"){?> selected <?php }?>>5' 3'' - 160cm</option>
<option value="5.4" <?php if($userDATA['reg_preference_height_to']=="5.4"){?> selected <?php }?>>5' 4'' - 162cm</option>
<option value="5.5" <?php if($userDATA['reg_preference_height_to']=="5.5"){?> selected <?php }?>>5' 5'' - 165cm</option>
<option value="5.6" <?php if($userDATA['reg_preference_height_to']=="5.6"){?> selected <?php }?>>5' 6'' - 167cm</option>
<option value="5.7" <?php if($userDATA['reg_preference_height_to']=="5.7"){?> selected <?php }?>>5' 7'' - 170cm</option>
<option value="5.8" <?php if($userDATA['reg_preference_height_to']=="5.8"){?> selected <?php }?>>5' 8'' - 172cm</option>
<option value="5.9" <?php if($userDATA['reg_preference_height_to']=="5.9"){?> selected <?php }?>>5' 9'' - 175cm</option>
<option value="6" <?php if($userDATA['reg_preference_height_to']=="6"){?> selected <?php }?>>6' - 182cm</option>
<option value="6.1" <?php if($userDATA['reg_preference_height_to']=="6.1"){?> selected <?php }?>>6' 1'' - 185cm</option>
<option value="6.2" <?php if($userDATA['reg_preference_height_to']=="6.2"){?> selected <?php }?>>6' 2'' - 187cm</option>
<option value="6.3" <?php if($userDATA['reg_preference_height_to']=="6.3"){?> selected <?php }?>>6' 3'' - 190cm</option>
<option value="6.4" <?php if($userDATA['reg_preference_height_to']=="6.4"){?> selected <?php }?>>6' 4'' - 193cm</option>
<option value="6.5" <?php if($userDATA['reg_preference_height_to']=="6.5"){?> selected <?php }?>>6' 5'' - 195cm</option>
<option value="6.6" <?php if($userDATA['reg_preference_height_to']=="6.6"){?> selected <?php }?>>6' 6'' - 198cm</option>
<option value="6.7" <?php if($userDATA['reg_preference_height_to']=="6.7"){?> selected <?php }?>>6' 7'' - 200cm</option>
<option value="6.8" <?php if($userDATA['reg_preference_height_to']=="6.8"){?> selected <?php }?>>6' 8'' - 203cm</option>
<option value="6.9" <?php if($userDATA['reg_preference_height_to']=="6.9"){?> selected <?php }?>>6' 9'' - 205cm</option>
</select>
</p>
</div>

</div>


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Mother Tongue</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_preference_mother_tongue" id="reg_preference_mother_tongue" value="<?=$userDATA['reg_preference_mother_tongue']?>" /></p>
</div>
</div>


<?php /*?>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Religion</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$userDATA['reg_preference_religion']?></p>
</div>
</div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Caste</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$userDATA['reg_preference_cast']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Sub Caste</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$userDATA['reg_preference_sub_cast']?></p>
</div>
</div>
</div><?php */?>



</div>

<input type="hidden" name="edit_partner_basic" value="edit-partner-basic" />
</form>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow ">
<form action="" name="edit-member-partner-religion-frm" id="edit-member-partner-religion-frm" method="post" enctype="multipart/form-data">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-xs-10 mrg0">
<img src="images/paper_pin.png" class="pin-styd">
<h4>Religious Background</h4>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-xs-2 wd-btn">

<button type="submit" name="btn_save_partner_religion" id="save-btn-partner-religion" class="edit-btn" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-partner-religion" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>      
 </div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd mb-15" id="member-partner-religion">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Religion</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<?=$userDATA['reg_preference_religion']?>
</p>
</div
>
</div>


<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mp_1" <?php if($userDATA['reg_preference_religion']=="Parsi" || $userDATA['reg_preference_religion']=="Buddhist" || $userDATA['reg_preference_religion']=="Jewish" ){?> style="display:none" <?php }?>  >

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Community</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_preference_cast']?>
</div>
</div>


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pd-msof no-padd " id="show-hide-sub-community-partner">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Sub&nbsp;Community</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">

<?=$userDATA['reg_preference_sub_cast']?>

</div>
</div>

</div>


<div class="clearfix"></div>
<div <?php if(!empty($userDATA['reg_preference_religion']) && $userDATA['reg_preference_religion']=="Muslim"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> >      


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Namaaz(Salah)</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_preference_namaz']?>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>&nbsp;&nbsp;&nbsp;&nbsp;Zakaat</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_preference_zakaat']?>
</div>
</div>




<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Fasting&nbsp;in&nbsp;Ramadan</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">&nbsp;&nbsp;:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_preference_fasting']?>
</div>

</div>
</div>



<div <?php if(!empty($userDATA['reg_preference_religion']) && $userDATA['reg_preference_religion']=="Hindu"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> >      


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Gotra</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_preference_gotra']?>
</div>
</div>



<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Dosh</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_preference_dosh']?>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Star</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_preference_star']?>
</div>

</div>




</div>

<div <?php if(!empty($userDATA['reg_preference_religion']) && $userDATA['reg_preference_religion']=="Sikh"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> >      

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Wearing&nbsp;Dastar/Pagg</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_preference_dastar']?>
</div>
</div>

</div>


<div <?php if(!empty($userDATA['reg_preference_religion']) && $userDATA['reg_preference_religion']=="Jain"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> >      



<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Gotra</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_preference_gotra']?>
</div>
</div>



<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Dosh</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_preference_dosh']?>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Star</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<?=$userDATA['reg_preference_star']?>
</div>

</div>


</div>

</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-15 no-padd" id="member-partner-religion-edit" style="display:none">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Religion</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_preference_religion" id="reg_preference_religion" onChange="byReligionPartner(this.value)"> 
<option value="0">----Select Religion----</option>
<?php
$sql="SELECT * FROM tbl_community WHERE c_status='Active' AND c_parent_id='0'";
$dataCommunity=db_query($sql);
$countCommunity=mysqli_num_rows($dataCommunity);
if($countCommunity){
while($recCommunity=mysqli_fetch_array($dataCommunity)){	
?>
<option value="<?=$recCommunity['c_title']?>" <?php if($userDATA['reg_preference_religion']==$recCommunity['c_title']){?> selected<?php }?> >
<?=$recCommunity['c_title']?></option>
<?php
}
}
?>
</select>
</p>
</div
>
</div>


<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mp_1" id="community_load_area_partner" 
<?php if($userDATA['reg_preference_religion']=="Parsi" || $userDATA['reg_preference_religion']=="Buddhist" || $userDATA['reg_preference_religion']=="Jewish" ){?> style="display:none" <?php }?>  >

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Community</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<select  name="reg_preference_cast" id="reg_preference_cast">
<option  value="0">----Select Community----</option>      
<?php if(!empty($userDATA['reg_preference_cast'])){?>
<option value="<?=$userDATA['reg_preference_cast']?>" selected><?=$userDATA['reg_preference_cast']?></option>
<?php }?>
</select>
</div>
</div>




<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pd-msof no-padd " id="show-hide-sub-community-partner">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Sub&nbsp;Community</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="text" placeholder="Enter Sub Community" name="reg_preference_sub_cast" id="reg_preference_sub_cast" value="<?=$userDATA['reg_preference_sub_cast']?>" >
</div>
</div>


</div>




<!--///// -->
<div class="clearfix"></div>
<div <?php if(!empty($userDATA['reg_preference_religion']) && $userDATA['reg_preference_religion']=="Muslim"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="muslim-partner">      


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Namaaz(Salah)</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">

<select   name="reg_preference_namaz" id="reg_preference_namaz">

<option  value="0">----Select Namaaz / Salaah----</option>
<option value="Five times" label="Five times" <?php if($userDATA['reg_preference_namaz']=="Five times"){?> selected<?php }?>   >Five times</option>
<option value="Only on Jummah" label="Only on Jummah" <?php if($userDATA['reg_preference_namaz']=="Only on Jummah"){?> selected<?php }?>>Only on Jummah</option>
<option value="During Ramadan" label="During Ramadan" <?php if($userDATA['reg_preference_namaz']=="During Ramadan"){?> selected<?php }?> >During Ramadan</option>
<option value="Occasionally" label="Occasionally" <?php if($userDATA['reg_preference_namaz']=="Occasionally"){?> selected<?php }?>  >Occasionally</option>

</select>

</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Zakaat</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_preference_zakaat" id="reg_preference_zakaat_yes" value="Yes" <?php if($userDATA['reg_preference_zakaat']=="Yes"){?> checked <?php }?> > Yes

<input type="radio" name="reg_preference_zakaat" id="reg_preference_zakaat_no" value="No" <?php if($userDATA['reg_preference_zakaat']=="No"){?> checked <?php }?>> No
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5><span class="font-red">*</span>Fasting&nbsp;in&nbsp;Ramadan</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">&nbsp;&nbsp;:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_preference_fasting" id="reg_preference_fasting_yes" value="Yes" <?php if($userDATA['reg_preference_fasting']=="Yes"){?> checked <?php }?> > Yes
<input type="radio" name="reg_preference_fasting" id="reg_preference_fasting_no" value="No" <?php if($userDATA['reg_preference_fasting']=="No"){?> checked <?php }?>> No
</div>

</div>
</div>



<div <?php if(!empty($userDATA['reg_preference_religion']) && $userDATA['reg_preference_religion']=="Hindu"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="hindu-partner">      


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Gotra</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">

<input type="text" placeholder=" Enter Your Gotra" name="reg_preference_gotra" id="reg_preference_gotra_hindu" value="<?=$userDATA['reg_preference_gotra']?>" >

</div>
</div>



<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Dosh</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_preference_dosh" id="reg_preference_dosh_yes" value="Yes" <?php if($userDATA['reg_preference_dosh']=="Yes"){?> checked <?php }?> > Yes
<input type="radio" name="reg_preference_dosh" id="reg_preference_dosh_no" value="No" <?php if($userDATA['reg_preference_dosh']=="No"){?> checked <?php }?>> No
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Star</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_preference_star" id="reg_preference_star_yes" value="Yes" <?php if($userDATA['reg_preference_star']=="Yes"){?> checked <?php }?> > Yes

<input type="radio" name="reg_preference_star" id="reg_preference_star_no" value="No" <?php if($userDATA['reg_preference_star']=="No"){?> checked <?php }?>> No
</div>

</div>




</div>

<div <?php if(!empty($userDATA['reg_preference_religion']) && $userDATA['reg_preference_religion']=="Sikh"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="sikh-partner">      

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Wearing&nbsp;Dastar/Pagg</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_preference_dastar" id="reg_preference_dastar_yes" value="Yes" <?php if($userDATA['reg_preference_dastar']=="Yes"){?> checked <?php }?> > Yes
<input type="radio" name="reg_preference_dastar" id="reg_preference_dastar_no" value="No" <?php if($userDATA['reg_preference_dastar']=="No"){?> checked <?php }?>> No
</div>
</div>

</div>


<div <?php if(!empty($userDATA['reg_preference_religion']) && $userDATA['reg_preference_religion']=="Jain"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="jain-partner">      



<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Gotra</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">

<input type="text" placeholder=" Enter Your Gotra" name="reg_preference_gotra" id="reg_preference_gotra_jain" value="<?=$userDATA['reg_preference_gotra']?>" >

</div>
</div>



<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Dosh</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_preference_dosh" id="reg_preference_dosh_jain_yes" value="Yes" <?php if($userDATA['reg_preference_dosh']=="Yes"){?> checked <?php }?> > Yes
<input type="radio" name="reg_preference_dosh" id="reg_preference_dosh_jain_no" value="No" <?php if($userDATA['reg_preference_dosh']=="No"){?> checked <?php }?>> No
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd"><h5>Star</h5></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<input type="radio" name="reg_preference_star" id="reg_preference_star_jain_yes" value="Yes" <?php if($userDATA['reg_preference_star']=="Yes"){?> checked <?php }?> > Yes

<input type="radio" name="reg_preference_star" id="reg_preference_star_jain_no" value="No" <?php if($userDATA['reg_preference_star']=="No"){?> checked <?php }?>> No
</div>

</div>





</div>
<!--///-->









</div>

<input type="hidden" name="edit_religion_partner" value="edit-religion-partner" />
</form>

</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
<form action="" name="edit-member-partner-location-frm" id="edit-member-partner-location-frm" method="post" enctype="multipart/form-data">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mrg0">
<img src="images/paper_pin.png" class="pin-styd">
<h4>Location Details</h4>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn">

<button type="submit" name="btn_save_partner_location" id="save-btn-partner-location" class="edit-btn" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-partner-location" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>      
</div>
</div>
       
       
       
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-partner-location">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Country</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_country_name']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>State</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_state_name']?></p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>District/City</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_city']?></p>
</div>
</div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-partner-location-edit" style="display:none">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Country</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select name="reg_preference_country_name" id="reg_preference_country_name" onChange="showstate(this.value);">
<option value="0" selected="selected">----Select Country----</option>
<?php
if($userDATA['reg_preference_country_id']!=""){
$sql_country=db_query("select * from tbl_country_master where 1 and status='Active'");
if(mysqli_num_rows($sql_country)>0){
while($data=mysqli_fetch_array($sql_country)){
@extract($data);
?>
<option value="<?=$data['contId']?>" <?php if($userDATA['reg_preference_country_id']==$data['contId']){?> selected <?php }?>>
<?=$data['contName']?>
</option>
<?
}
}
}
?>
</select>
</p>

</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>State</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p id="constate">
<select name="reg_preference_state_name" id="reg_preference_state_name">
<option value="0" selected="selected">----Select State----</option>
<option value="<?=$userDATA['reg_preference_state_id']?>" <?php if($userDATA['reg_preference_state_id']!="" && $userDATA['reg_preference_state_id']!=0){?> selected <?php }?>>
<?=$userDATA['reg_preference_state_name']?>
</option>
</select>
</p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>District/City</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_preference_city" id="reg_preference_city" value="<?=$userDATA['reg_preference_city']?>" /></p>
</div>
</div>
</div>
 
<input type="hidden" name="edit_partner_location" value="edit-partner-location" />
      
</form>      
  </div>


<?php /*?><div class="col-md-12 bg-wth b-dtl bg-mrg sdow">
<div class="col-md-12 bg-clrd2">
<div class="col-md-10 col-xs-10 mrg0">
<img src="images/paper_pin.png" class="pin-styd">
<h4>Location Preference</h4>
</div>
<div class="col-md-2 col-xs-2 wd-btn"><a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> </div>
</div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Country</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$userDATA['reg_preference_country_name']?></p>
</div>
</div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>State</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$userDATA['reg_preference_state_name']?></p>
</div>
</div>
<div class="clearfix"></div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>District/City</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$userDATA['reg_preference_city']?></p>
</div>
</div>

<div class="clearfix"></div>

</div>
<?php */?>      



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
<form action="" name="edit-member-partner-professional-frm" id="edit-member-partner-professional-frm" method="post" enctype="multipart/form-data">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mrg0">
<img src="images/paper_pin.png" class="pin-styd">
<h4>Professional Preference</h4>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn">

<button type="submit" name="btn_save_partner_professional" id="save-btn-partner-professional" class="edit-btn" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-partner-professional" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>     
</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-partner-professional" >
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Highest Education</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_highest_edu']?></p>
</div >
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Occupation</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_occupation']?></p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Annual income</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_member_annual_income']?></p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Working Location</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_working_location']?></p>
</div>
</div>
</div>



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd profile-common-edit" id="member-partner-professional-edit" style="display:none" >
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Highest Education</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_preference_highest_edu" id="reg_preference_highest_edu">
<option value="0" >-- Select Highest Education--</option>
<optgroup label="Engineering/Design">
<option value="B.E/B.Tech" <?php if($userDATA['reg_preference_highest_edu']=="B.E/B.Tech"){?> selected<?php }?> >-  B.E/B.Tech</option>
<option value="B.Pharma" <?php if($userDATA['reg_preference_highest_edu']=="B.Pharma"){?> selected<?php }?>>-  B.Pharma</option>
<option value="M.E/M.Tech" <?php if($userDATA['reg_preference_highest_edu']=="M.E/M.Tech"){?> selected<?php }?>>-  M.E/M.Tech</option>
<option value="M.Pharma" <?php if($userDATA['reg_preference_highest_edu']=="M.Pharma"){?> selected<?php }?>>-  M.Pharma</option>
<option value="M.S. (Engineering)" <?php if($userDATA['reg_preference_highest_edu']=="M.S. (Engineering)"){?> selected<?php }?>>-  M.S. (Engineering)</option>
<option value="B.Arch" <?php if($userDATA['reg_preference_highest_edu']=="B.Arch"){?> selected<?php }?>>-  B.Arch</option>
<option value="M.Arch" <?php if($userDATA['reg_preference_highest_edu']=="M.Arch"){?> selected<?php }?>>-  M.Arch</option>
<option value="B.Des" <?php if($userDATA['reg_preference_highest_edu']=="B.Des"){?> selected<?php }?>>-  B.Des</option>
<option value="M.Des" <?php if($userDATA['reg_preference_highest_edu']=="M.Des"){?> selected<?php }?>>-  M.Des</option>

</optgroup>
<optgroup label="Computers:">
<option value="MCA/PGDCA" <?php if($userDATA['reg_preference_highest_edu']=="MCA/PGDCA"){?> selected<?php }?> >-  MCA/PGDCA</option>
<option value="BCA" <?php if($userDATA['reg_preference_highest_edu']=="BCA"){?> selected<?php }?> >-  BCA</option>
<option value="B.IT" <?php if($userDATA['reg_preference_highest_edu']=="B.IT"){?> selected<?php }?> >-  B.IT</option>
</optgroup>

</optgroup>
<optgroup label="Finance/Commerce:">
<option value="B.Com" <?php if($userDATA['reg_preference_highest_edu']=="B.Com"){?> selected<?php }?> >-   B.Com</option>
<option value="CA" <?php if($userDATA['reg_preference_highest_edu']=="CA"){?> selected<?php }?>>-  CA</option>
<option value="CS" <?php if($userDATA['reg_preference_highest_edu']=="CS"){?> selected<?php }?>>-   CS</option>
<option value="ICWA" <?php if($userDATA['reg_preference_highest_edu']=="ICWA"){?> selected<?php }?>>-  ICWA</option>
<option value="M.Com" <?php if($userDATA['reg_preference_highest_edu']=="M.Com"){?> selected<?php }?>>-   M.Com</option>
<option value="CFA" <?php if($userDATA['reg_preference_highest_edu']=="CFA"){?> selected<?php }?>>-  CFA</option>
</optgroup>
<optgroup label="Management:">
<option value="MBA/PGDM" <?php if($userDATA['reg_preference_highest_edu']=="MBA/PGDM"){?> selected<?php }?>>-  MBA/PGDM</option>
<option value="BBA" <?php if($userDATA['reg_preference_highest_edu']=="BBA"){?> selected<?php }?>>-   BBA</option>
<option value="BHM" <?php if($userDATA['reg_preference_highest_edu']=="BHM"){?> selected<?php }?>>-   BHM</option>
</optgroup>
<optgroup label="Medicine:">
<option value="MBBS" <?php if($userDATA['reg_preference_highest_edu']=="MBBS"){?> selected<?php }?>>-  MBBS</option>
<option value="M.D." <?php if($userDATA['reg_preference_highest_edu']=="M.D."){?> selected<?php }?>>-   M.D.</option>
<option value="BAMS" <?php if($userDATA['reg_preference_highest_edu']=="BAMS"){?> selected<?php }?>>-  BAMS</option>

<option value="BHMS" <?php if($userDATA['reg_preference_highest_edu']=="BHMS"){?> selected<?php }?>>-  BHMS</option>
<option value="BDS" <?php if($userDATA['reg_preference_highest_edu']=="BDS"){?> selected<?php }?>>-  BDS</option>
<option value="M.S. (Medicine)" <?php if($userDATA['reg_preference_highest_edu']=="M.S. (Medicine)"){?> selected<?php }?>>-  M.S. (Medicine)</option>
<option value="MVSc." <?php if($userDATA['reg_preference_highest_edu']=="MVSc."){?> selected<?php }?>>-  MVSc.</option>
<option value="BVSc." <?php if($userDATA['reg_preference_highest_edu']=="BVSc."){?> selected<?php }?>>-  BVSc.</option>
<option value="MDS" <?php if($userDATA['reg_preference_highest_edu']=="MDS"){?> selected<?php }?>>-  MDS</option>
<option value="BPT" <?php if($userDATA['reg_preference_highest_edu']=="BPT"){?> selected<?php }?>>-   BPT</option>
<option value="MPT" <?php if($userDATA['reg_preference_highest_edu']=="MPT"){?> selected<?php }?>>-   MPT</option>
<option value="DM" <?php if($userDATA['reg_preference_highest_edu']=="DM"){?> selected<?php }?>>-  DM</option>
<option value="MCh" <?php if($userDATA['reg_preference_highest_edu']=="MCh"){?> selected<?php }?>>-  MCh</option>
</optgroup>
<optgroup label="Law:" >
<option value="BL /LLB" <?php if($userDATA['reg_preference_highest_edu']=="BL /LLB"){?> selected<?php }?>>-   BL /LLB</option>
<option value="ML/LLM" <?php if($userDATA['reg_preference_highest_edu']=="ML/LLM"){?> selected<?php }?>>-  ML/LLM</option>
</optgroup>
<optgroup label="Arts/Science:">
<option value="B.A." <?php if($userDATA['reg_preference_highest_edu']=="B.A."){?> selected<?php }?>>-   B.A.</option>
<option value="B.Sc" <?php if($userDATA['reg_preference_highest_edu']=="B.Sc"){?> selected<?php }?>>-  B.Sc</option>
<option value="M.Sc" <?php if($userDATA['reg_preference_highest_edu']=="M.Sc"){?> selected<?php }?>>-  M.Sc</option>
<option value="B.Ed" <?php if($userDATA['reg_preference_highest_edu']=="B.Ed"){?> selected<?php }?>>-   B.Ed</option>
<option value="M.Ed" <?php if($userDATA['reg_preference_highest_edu']=="M.Ed"){?> selected<?php }?>>-  M.Ed</option>
<option value="MSW" <?php if($userDATA['reg_preference_highest_edu']=="MSW"){?> selected<?php }?>>-  MSW</option>

<option value="BFA" <?php if($userDATA['reg_preference_highest_edu']=="BFA"){?> selected<?php }?>>-   BFA</option>
<option value="MFA" <?php if($userDATA['reg_preference_highest_edu']=="MFA"){?> selected<?php }?>>-  MFA</option>
<option value="BJMC" <?php if($userDATA['reg_preference_highest_edu']=="BJMC"){?> selected<?php }?>>-  BJMC</option>
<option value="MJMC" <?php if($userDATA['reg_preference_highest_edu']=="MJMC"){?> selected<?php }?>>-  MJMC</option>
</optgroup>

<optgroup label="Doctorate:">
<option value="Ph. D" <?php if($userDATA['reg_preference_highest_edu']=="Ph. D"){?> selected<?php }?>>-   Ph. D</option>
<option value="M.Phil" <?php if($userDATA['reg_preference_highest_edu']=="M.Phil"){?> selected<?php }?>>-  M.Phil</option>
</optgroup>

<optgroup label="Non-Graduate:">
<option value="Diploma" <?php if($userDATA['reg_preference_highest_edu']=="Diploma"){?> selected<?php }?>>-   Diploma</option>
<option value="High School" <?php if($userDATA['reg_preference_highest_edu']=="High School"){?> selected<?php }?>>-  High School</option>
<option value="Trade School" <?php if($userDATA['reg_preference_highest_edu']=="Trade School"){?> selected<?php }?>>-   Trade School</option>
<option value="Other" <?php if($userDATA['reg_preference_highest_edu']=="Other"){?> selected<?php }?>>-  Other</option>
</optgroup>

</select>
</p>
</div >
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Occupation</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_preference_occupation" id="reg_preference_occupation">
       <option  value="">----Select Occupation----</option>
<option value="Any" <?php if($userDATA['reg_preference_occupation']=="Any"){?> selected<?php }?> >Any</option>
<option value="Software Professional" <?php if($userDATA['reg_preference_occupation']=="Software Professional"){?> selected<?php }?> >Software Professional</option>
<option value="Hardware Professional" <?php if($userDATA['reg_preference_occupation']=="Hardware Professional"){?> selected<?php }?> >Hardware Professional</option>
<option value="Engineer - Non IT" <?php if($userDATA['reg_preference_occupation']=="Engineer - Non IT"){?> selected<?php }?>>Engineer - Non IT</option>
<option value="Teaching / Academician" <?php if($userDATA['reg_preference_occupation']=="Teaching / Academician"){?> selected<?php }?>>Teaching / Academician</option>
<option value="Professor / Lecturer" <?php if($userDATA['reg_preference_occupation']=="Professor / Lecturer"){?> selected<?php }?> >Professor / Lecturer</option>
<option value="Education Professional" <?php if($userDATA['reg_preference_occupation']=="Education Professional"){?> selected<?php }?> >Education Professional</option>
<option value="Chartered Accountant" <?php if($userDATA['reg_preference_occupation']=="Chartered Accountant"){?> selected<?php }?> >Chartered Accountant</option>
<option value="Accounts/Finance Professional" <?php if($userDATA['reg_preference_occupation']=="Accounts/Finance Professional"){?> selected<?php }?>>Accounts/Finance Professional</option>
<option value="Auditor" <?php if($userDATA['reg_preference_occupation']=="Auditor"){?> selected<?php }?>>Auditor</option>
<option value="Company Secretary" <?php if($userDATA['reg_preference_occupation']=="Company Secretary"){?> selected<?php }?> >Company Secretary</option>
<option value="Doctor" <?php if($userDATA['reg_preference_occupation']=="Doctor"){?> selected<?php }?>>Doctor</option>
<option value="Nurse" <?php if($userDATA['reg_preference_occupation']=="Nurse"){?> selected<?php }?> >Nurse</option>
<option value="Health Care Professional" <?php if($userDATA['reg_preference_occupation']=="Health Care Professional"){?> selected<?php }?>>Health Care Professional</option>
<option value="Paramedical Professional" <?php if($userDATA['reg_preference_occupation']=="Paramedical Professional"){?> selected<?php }?> >Paramedical Professional</option>
<option value="Banking Service Professional" <?php if($userDATA['reg_preference_occupation']=="Banking Service Professional"){?> selected<?php }?> >Banking Service Professional</option>
<option value="Lawyer & Legal Professional" <?php if($userDATA['reg_preference_occupation']=="Lawyer & Legal Professional"){?> selected<?php }?> >Lawyer & Legal Professional</option>
<option value="Law Enforcement Officer" <?php if($userDATA['reg_preference_occupation']=="Law Enforcement Officer"){?> selected<?php }?>>Law Enforcement Officer</option>
<option value="Architect" <?php if($userDATA['reg_preference_occupation']=="Architect"){?> selected<?php }?> >Architect</option>
<option value="Interior Designer" <?php if($userDATA['reg_preference_occupation']=="Interior Designer"){?> selected<?php }?>>Interior Designer</option>
<option value="Advertising / PR Professional" <?php if($userDATA['reg_preference_occupation']=="Advertising / PR Professional"){?> selected<?php }?> >Advertising / PR Professional</option>
<option value="Media Professional" <?php if($userDATA['reg_preference_occupation']=="Media Professional"){?> selected<?php }?> >Media Professional</option>
<option value="Entertainment Professional" <?php if($userDATA['reg_preference_occupation']=="Entertainment Professional"){?> selected<?php }?>>Entertainment Professional</option>
<option value="Fashion Designer" <?php if($userDATA['reg_preference_occupation']=="Fashion Designer"){?> selected<?php }?> >Fashion Designer</option>
<option value="Event Management Professional" <?php if($userDATA['reg_preference_occupation']=="Event Management Professional"){?> selected<?php }?> >Event Management Professional</option>
<option value="Journalist" <?php if($userDATA['reg_preference_occupation']=="Journalist"){?> selected<?php }?> >Journalist</option>
<option value="Air Hostess" <?php if($userDATA['reg_preference_occupation']=="Air Hostess"){?> selected<?php }?>  >Air Hostess</option>
<option value="Airline Professional" <?php if($userDATA['reg_preference_occupation']=="Airline Professional"){?> selected<?php }?>>Airline Professional</option>
<option value="Pilot" <?php if($userDATA['reg_preference_occupation']=="Pilot"){?> selected<?php }?> >Pilot</option>
<option value="Mariner / Merchant Navy" <?php if($userDATA['reg_preference_occupation']=="Mariner / Merchant Navy"){?> selected<?php }?> >Mariner / Merchant Navy</option>
<option value="Beautician" <?php if($userDATA['reg_preference_occupation']=="Beautician"){?> selected<?php }?>>Beautician</option>
<option value="Hotel / Hospitality Professional" <?php if($userDATA['reg_preference_occupation']=="Hotel / Hospitality Professional"){?> selected<?php }?> >Hotel / Hospitality Professional</option>
<option value="Scientist / Researcher" <?php if($userDATA['reg_preference_occupation']=="Scientist / Researcher"){?> selected<?php }?> >Scientist / Researcher</option>
<option value="Social Worker" <?php if($userDATA['reg_preference_occupation']=="Social Worker"){?> selected<?php }?> >Social Worker</option>
<option value="Agriculture &amp; Farming Professional" <?php if($userDATA['reg_preference_occupation']=="Agriculture &amp; Farming Professional"){?> selected<?php }?>>Agriculture & Farming Professional</option>
<option value="Arts &amp; Craftsman" <?php if($userDATA['reg_preference_occupation']=="Arts &amp; Craftsman"){?> selected<?php }?>>Arts & Craftsman</option>
<option value="Administrative Professional" <?php if($userDATA['reg_preference_occupation']=="Administrative Professional"){?> selected<?php }?> >Administrative Professional</option>
<option value="Customer Care Professional" <?php if($userDATA['reg_preference_occupation']=="Customer Care Professional"){?> selected<?php }?> >Customer Care Professional</option>
<option value="CXO / President, Director, Chairman" <?php if($userDATA['reg_preference_occupation']=="CXO / President, Director, Chairman"){?> selected<?php }?> >CXO / President, Director, Chairman</option>
<option value="Marketing Professional" <?php if($userDATA['reg_preference_occupation']=="Marketing Professional"){?> selected<?php }?> >Marketing Professional</option>
<option value="Sales Professional" <?php if($userDATA['reg_preference_occupation']=="Sales Professional"){?> selected<?php }?> >Sales Professional</option>
<option value="Technician" <?php if($userDATA['reg_preference_occupation']=="Technician"){?> selected<?php }?>>Technician</option>
<option value="Consultant" <?php if($userDATA['reg_preference_occupation']=="Consultant"){?> selected<?php }?>>Consultant</option>
<option value="Clerk" <?php if($userDATA['reg_preference_occupation']=="Clerk"){?> selected<?php }?> >Clerk</option>
<option value="Officer" <?php if($userDATA['reg_preference_occupation']=="Officer"){?> selected<?php }?>>Officer</option>
<option value="Supervisor" <?php if($userDATA['reg_preference_occupation']=="Supervisor"){?> selected<?php }?> >Supervisor</option>
<option value="Manager" <?php if($userDATA['reg_preference_occupation']=="Manager"){?> selected<?php }?> >Manager</option>
<option value="Executive" <?php if($userDATA['reg_preference_occupation']=="Executive"){?> selected<?php }?>  >Executive</option>
<option value="Sportsman" <?php if($userDATA['reg_preference_occupation']=="Sportsman"){?> selected<?php }?>  >Sportsman</option>
<option value="Civil Services (IAS/IPS/IRS/IES/IFS)" <?php if($userDATA['reg_preference_occupation']=="Civil Services (IAS/IPS/IRS/IES/IFS)"){?> selected<?php }?> >Civil Services (IAS/IPS/IRS/IES/IFS)</option>
<option value="Army" <?php if($userDATA['reg_preference_occupation']=="Army"){?> selected<?php }?> >Army</option>
<option value="Navy" <?php if($userDATA['reg_preference_occupation']=="Navy"){?> selected<?php }?>>Navy</option>
<option value="Airforce" <?php if($userDATA['reg_preference_occupation']=="Airforce"){?> selected<?php }?> >Airforce</option>
<option value="Human Resources Professional" <?php if($userDATA['reg_preference_occupation']=="Human Resources Professional"){?> selected<?php }?> >Human Resources Professional</option>
<option value="Financial Analyst / Planning" <?php if($userDATA['reg_preference_occupation']=="Financial Analyst / Planning"){?> selected<?php }?> >Financial Analyst / Planning</option>
<option value="Designer - IT & Engineering" <?php if($userDATA['reg_preference_occupation']=="Designer - IT & Engineering"){?> selected<?php }?> >Designer - IT & Engineering</option>
<option value="Designer - Media & Entertainment" <?php if($userDATA['reg_preference_occupation']=="Designer - Media & Entertainment"){?> selected<?php }?> >Designer - Media & Entertainment</option>
<option value="Student" <?php if($userDATA['reg_preference_occupation']=="Student"){?> selected<?php }?> >Student</option>
<option value="Librarian" <?php if($userDATA['reg_preference_occupation']=="Librarian"){?> selected<?php }?> >Librarian</option>
<option value="Financial Accountant" <?php if($userDATA['reg_preference_occupation']=="Financial Accountant"){?> selected<?php }?> >Financial Accountant</option>
<option value="Business Analyst" <?php if($userDATA['reg_preference_occupation']=="Business Analyst"){?> selected<?php }?> >Business Analyst</option>
<option value="Business Owner / Entrepreneur" <?php if($userDATA['reg_preference_occupation']=="Business Owner / Entrepreneur"){?> selected<?php }?> >Business Owner / Entrepreneur</option>
<option value="Retired" <?php if($userDATA['reg_preference_occupation']=="Retired"){?> selected<?php }?> >Retired</option>
<option value="Others" <?php if($userDATA['reg_preference_occupation']=="Others"){?> selected<?php }?> >Others</option>
<option value="Business" <?php if($userDATA['reg_preference_occupation']=="Business"){?> selected<?php }?>>Business</option>
<option value="Not working" <?php if($userDATA['reg_preference_occupation']=="Not working"){?> selected<?php }?> >Not working</option>
<option value="Doctor" <?php if($userDATA['reg_preference_occupation']=="Doctor"){?> selected<?php }?> >Doctor</option>
<option value="Engineer" <?php if($userDATA['reg_preference_occupation']=="Engineer"){?> selected<?php }?> >Engineer</option>

</select>
</p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Annual income</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select name="reg_preference_member_annual_income" id="reg_preference_member_annual_income">
<option  value="0">----Select Annual income----</option>


<option  value="Upto INR 1 Lakh" <?php if($userDATA['reg_preference_member_annual_income']=="Upto INR 1 Lakh"){?> selected <?php }?> >Upto INR 1 Lakh</option>

<option  value="INR 1 Lakh to 2 Lakh" <?php if($userDATA['reg_preference_member_annual_income']=="INR 1 Lakh to 2 Lakh"){?> selected <?php }?> >INR 1 Lakh to 2 Lakh</option>

<option  value="INR 2 Lakh to 4 Lakh" <?php if($userDATA['reg_preference_member_annual_income']=="INR 2 Lakh to 4 Lakh"){?> selected <?php }?> >INR 2 Lakh to 4 Lakh</option>

<option  value="INR 4 Lakh to 7 Lakh" <?php if($userDATA['reg_preference_member_annual_income']=="INR 4 Lakh to 7 Lakh"){?> selected <?php }?> >INR 4 Lakh to 7 Lakh</option>


<option  value="INR 7 Lakh to 10 Lakh" <?php if($userDATA['reg_preference_member_annual_income']=="INR 7 Lakh to 10 Lakh"){?> selected <?php }?> >INR 7 Lakh to 10 Lakh</option>

<option  value="INR 10 Lakh to 15 Lakh" <?php if($userDATA['reg_preference_member_annual_income']=="INR 10 Lakh to 15 Lakh"){?> selected <?php }?> >INR 10 Lakh to 15 Lakh</option>

<option  value="INR 15 Lakh to 20 Lakh" <?php if($userDATA['reg_preference_member_annual_income']=="INR 15 Lakh to 20 Lakh"){?> selected <?php }?> >INR 15 Lakh to 20 Lakh</option>


<option  value="INR 20 Lakh to 30 Lakh" <?php if($userDATA['reg_preference_member_annual_income']=="INR 20 Lakh to 30 Lakh"){?> selected <?php }?> >INR 20 Lakh to 30 Lakh</option>

<option  value="INR 30 Lakh to 50 Lakh" <?php if($userDATA['reg_preference_member_annual_income']=="INR 30 Lakh to 50 Lakh"){?> selected <?php }?> >INR 30 Lakh to 50 Lakh</option>

<option  value="INR 50 Lakh to 75 Lakh" <?php if($userDATA['reg_preference_member_annual_income']=="INR 50 Lakh to 75 Lakh"){?> selected <?php }?> >INR 50 Lakh to 75 Lakh</option>

<option  value="INR 75 Lakh to 1 Crore" <?php if($userDATA['reg_preference_member_annual_income']=="INR 75 Lakh to 1 Crore"){?> selected <?php }?> >INR 75 Lakh to 1 Crore</option>

<option  value="INR 1 Crore &amp; above" <?php if($userDATA['reg_preference_member_annual_income']=="INR 1 Crore &amp; above"){?> selected <?php }?> >INR 1 Crore &amp; above</option>

<option  value="Not applicable" <?php if($userDATA['reg_preference_member_annual_income']=="Not applicable"){?> selected <?php }?> >Not applicable</option>


</select>
</p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Working Location</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<input type="text" placeholder=" Enter Your Preference Working Location" name="reg_preference_working_location" id="reg_preference_working_location" value="<?=$userDATA['reg_preference_working_location']?>" >
</p>
</div>
</div>
</div>


<input type="hidden" name="edit_partner_professional" value="edit-partner-professional" />

</form>
</div> 
      
      
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl bg-mrg sdow">
<form action="" name="edit-member-partner-lifestyle-frm" id="edit-member-partner-lifestyle-frm" method="post" enctype="multipart/form-data">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd2">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mrg0">
<img src="images/paper_pin.png" class="pin-styd">
<h4>Lifestyle And Habits</h4>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 wd-btn">

<button type="submit" name="btn_save_partner_lifestyle" id="save-btn-partner-lifestyle" class="edit-btn" style="display:none"><i class="fa fa-floppy-o"></i> Save</button>

<a href="Javascript:void(0)" id="edit-btn-partner-lifestyle" class="edit-btn" ><i class="fa fa-pencil-square-o"></i> Edit</a>

</div>

</div>



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-partner-lifestyle">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Appearance</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_appearance']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Living Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_living_status']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Physical Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_physical_status']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Eating Habits</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_eating_habits']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Smoking Habits</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_smoking_habits']?></p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Drinking Habits</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><?=$userDATA['reg_preference_drinking_habits']?></p>
</div>
</div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="member-partner-lifestyle-edit" style="display:none">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Appearance</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_preference_appearance" id="reg_preference_appearance">
<option  value="0">----Select Appearance----</option>
<option  value="Fair"  <?php if($userDATA['reg_preference_appearance']=="Fair"){?> selected <?php }?>  >Fair</option>
<option  value="Wheatis" <?php if($userDATA['reg_preference_appearance']=="Wheatis"){?> selected <?php }?> >Wheatis</option>
<option  value="Dark" <?php if($userDATA['reg_preference_appearance']=="Dark"){?> selected <?php }?>  > Dark</option>
</select>
</p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Living Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_preference_living_status" id="reg_preference_living_status">
<option  value="0">----Select Living Status----</option>
<option  value="Traditional" <?php if($userDATA['reg_preference_living_status']=="Traditional"){?> selected <?php }?>>Traditional</option>
<option  value="Moderate" <?php if($userDATA['reg_preference_living_status']=="Moderate"){?> selected <?php }?>>Moderate</option>
<option  value="Liberal" <?php if($userDATA['reg_preference_living_status']=="Liberal"){?> selected <?php }?>>Liberal</option>
</select>
</p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Physical Status</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_preference_physical_status" id="reg_preference_physical_status" >
<option  value="0">----Select Physical Status----</option>
<option  value="Slim" <?php if($userDATA['reg_preference_physical_status']=="Slim"){?> selected <?php }?> >Slim</option>
<option  value="Average/Athletic" <?php if($userDATA['reg_preference_physical_status']=="Average/Athletic"){?> selected <?php }?> >Average/Athletic</option>
<option  value="Heavy" <?php if($userDATA['reg_preference_physical_status']=="Heavy"){?> selected <?php }?>>Heavy</option>
</select>
</p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Eating Habits</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_preference_eating_habits" id="reg_preference_eating_habits">
<option  value="0">----Select Eating Habits--</option>
<option  value="Veg" <?php if($userDATA['reg_preference_eating_habits']=="Veg"){?> selected <?php }?>>Veg</option>
<option  value="Non-Veg" <?php if($userDATA['reg_preference_eating_habits']=="Non-Veg"){?> selected <?php }?>>Non-Veg</option>
<option  value="Eggiterian" <?php if($userDATA['reg_preference_eating_habits']=="Eggiterian"){?> selected <?php }?>>Eggiterian</option>
</select>
</p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Smoking Habits</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select name="reg_preference_smoking_habits" id="reg_preference_smoking_habits">
<option  value="0" >----Select Smoking Habits----</option>
<option  value="Non-smoker" <?php if($userDATA['reg_preference_smoking_habits']=="Non-smoker"){?> selected <?php }?>>Non-smoker</option>
<option  value="Regular smoker" <?php if($userDATA['reg_preference_smoking_habits']=="Regular smoker"){?> selected <?php }?>>Regular smoker</option>
</select>
</p>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Drinking Habits</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>
<select  name="reg_preference_drinking_habits" id="reg_preference_drinking_habits">
<option  value="0">----Select Drinking Habits----</option>
<option  value="Non-drinker"  <?php if($userDATA['reg_preference_drinking_habits']=="Non-drinker"){?> selected <?php }?>>Non-drinker</option>
<option  value="Drinks Occasionally"  <?php if($userDATA['reg_preference_drinking_habits']=="Drinks Occasionally"){?> selected <?php }?>>Drinks Occasionally</option>
</select>
</p>
</div>
</div>
</div>

<input type="hidden" name="edit_partner_lifestyle" value="edit-partner-lifestyle" />

</form>
</div>      
      
      <?php /*?><div class="col-md-12 bg-wth b-dtl bg-mrg sdow">
      <div class="col-md-12 bg-clrd2">
      <div class="col-md-10 col-xs-10 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>Lifestyle</h4>
  </div>
      <div class="col-md-2 col-xs-2 wd-btn"><a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> </div>
  </div>
      <div class="col-md-6 mp_1">
        <div class="col-md-5 agd">
          <h5>Appearance</h5>
    </div>
        <div class="col-md-1 ft-wgt mp_1">:</div>
        <div class="col-md-6 mp_1">
          <p><?=$userDATA['reg_preference_appearance']?></p>
  </div>
  </div>
        <div class="col-md-6 mp_1">
        <div class="col-md-5 agd">
          <h5>Living Status</h5>
    </div>
        <div class="col-md-1 ft-wgt mp_1">:</div>
        <div class="col-md-6 mp_1">
          <p><?=$userDATA['reg_preference_living_status']?></p>
  </div>
    </div>
        <div class="col-md-6 mp_1">
        <div class="col-md-5 agd">
          <h5>Physical Status</h5>
    </div>
        <div class="col-md-1 ft-wgt mp_1">:</div>
        <div class="col-md-6 mp_1">
          <p><?=$userDATA['reg_preference_physical_status']?></p>
  </div>
    </div>
       
  </div><?php */?>
  
  
  <?php /*?><div class="col-md-12 bg-wth b-dtl bg-mrg sdow">
      <div class="col-md-12 bg-clrd2">
      <div class="col-md-10 col-xs-10 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>Habits</h4>
  </div>
      <div class="col-md-2 col-xs-2 wd-btn"><a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> </div>
  </div>
      <div class="col-md-6 mp_1">
        <div class="col-md-5 agd">
          <h5>Eating Habits</h5>
    </div>
        <div class="col-md-1 ft-wgt mp_1">:</div>
        <div class="col-md-6 mp_1">
          <p><?=$userDATA['reg_preference_eating_habits']?></p>
  </div>
  </div>
        <div class="col-md-6 mp_1">
        <div class="col-md-5 agd">
          <h5>Smoking Habits</h5>
    </div>
        <div class="col-md-1 ft-wgt mp_1">:</div>
        <div class="col-md-6 mp_1">
          <p><?=$userDATA['reg_preference_smoking_habits']?></p>
  </div>
    </div>
        <div class="col-md-6 mp_1">
        <div class="col-md-5 agd">
          <h5>Drinking Habits</h5>
    </div>
        <div class="col-md-1 ft-wgt mp_1">:</div>
        <div class="col-md-6 mp_1">
          <p><?=$userDATA['reg_preference_drinking_habits']?></p>
  </div>
    </div>
       
  </div><?php */?>
  
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
<script>
$(document).ready(function(e) {


//////// CONTACT DETAIL EDIT START /////////    
$("#edit-btn").on("click",function(){

$("#contact-detail").hide("fast");
$("#contact-detail-edit").show("fast");
$("#edit-btn").hide("fast");	
$("#save-btn").show("fast");	
	
});	


$("#edit-contact-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#contact-detail').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#contact-detail-edit").hide("fast");
$("#edit-btn").show("fast");	
$("#save-btn").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// CONTACT DETAIL EDIT END /////////  


//////// MEMBER MYSELF EDIT START /////////    
$("#edit-btn-myself").on("click",function(){

$("#member-myself").hide("fast");
$("#member-myself-edit").show("fast");
$("#edit-btn-myself").hide("fast");	
$("#save-btn-myself").show("fast");	
	
});	

$(".sbmt").on('click',function(){
 var my_self=$('#reg_mem_myself').val();
 var res=my_self.toLowerCase();
 var edit_myself1="edit-myself";
if(res==""){
alert("Enter few words about your preference  !");
}else if(res.length<50){
alert("Enter enter at least 50 character about your preference !");
}else if(res.match(/[0-9]/g)){
alert("Numbers are not allowed !");
}else if(res.match(/one/g) || res.match(/two/g) || res.match(/three/g) || res.match(/four/g) || res.match(/five/g) || res.match(/six/g) || res.match(/seven/g) || res.match(/eight/g) || res.match(/nine/g) || res.match(/ten/g) || res.match(/eleven/g) || res.match(/twelve/g) || res.match(/thirteen/g) || res.match(/fourteen/g) || res.match(/fifteen/g) || res.match(/sixteen/g) || res.match(/seventeen/g) || res.match(/eighteen/g) || res.match(/nineteen/g) || res.match(/twenty/g)){
      alert('Invalid characters !');
}else{
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  {edit_myself1:edit_myself1,res:res},
success: function(data){

if(data!=0){

$('#member-myself').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-myself-edit").hide("fast");
$("#edit-btn-myself").show("fast"); 
$("#save-btn-myself").hide("fast"); 

},
error: function(){}           

});
}

});

	
//});	

//////// MEMBER MYSELF EDIT END /////////    



//////// MEMBER BASIC EDIT START ///////// 
   
$("#edit-btn-basic").on("click",function(){

$("#member-basic-detail").hide("fast");
$("#member-basic-detail-edit").show("fast");
$("#edit-btn-basic").hide("fast");	
$("#save-btn-basic").show("fast");	
	
});	


$("#edit-member-basic-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-basic-detail').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-basic-detail-edit").hide("fast");
$("#edit-btn-basic").show("fast");	
$("#save-btn-basic").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// MEMBER BASIC EDIT END /////////    


//////// MEMBER LOCATION EDIT START ///////// 
   
$("#edit-btn-location").on("click",function(){

$("#member-location").hide("fast");
$("#member-location-edit").show("fast");
$("#edit-btn-location").hide("fast");	
$("#save-btn-location").show("fast");	
	
});	


$("#edit-member-location-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-location').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-location-edit").hide("fast");
$("#edit-btn-location").show("fast");	
$("#save-btn-location").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// MEMBER LOCATION EDIT END /////////   


//////// MEMBER FAMILY EDIT START ///////// 
   
$("#edit-btn-family").on("click",function(){

$("#member-family").hide("fast");
$("#member-family-edit").show("fast");
$("#edit-btn-family").hide("fast");	
$("#save-btn-family").show("fast");	
	
});	


$("#edit-member-family-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-family').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-family-edit").hide("fast");
$("#edit-btn-family").show("fast");	
$("#save-btn-family").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER FAMILY EDIT END /////////  


//////// MEMBER EDUCATION EDIT START ///////// 
   
$("#edit-btn-edu").on("click",function(){

$("#member-edu").hide("fast");
$("#member-edu-edit").show("fast");
$("#edit-btn-edu").hide("fast");	
$("#save-btn-edu").show("fast");	
	
});	


$("#edit-member-edu-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-edu').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-edu-edit").hide("fast");
$("#edit-btn-edu").show("fast");	
$("#save-btn-edu").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER EDUCATION EDIT END /////////  



//////// MEMBER RELIGION EDIT START ///////// 
   
$("#edit-btn-religion").on("click",function(){

$("#member-religion").hide("fast");
$("#member-religion-edit").show("fast");
$("#edit-btn-religion").hide("fast");	
$("#save-btn-religion").show("fast");	
	
});	


$("#edit-member-religion-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-religion').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-religion-edit").hide("fast");
$("#edit-btn-religion").show("fast");	
$("#save-btn-religion").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER RELIGION EDIT END /////////  


//////// MEMBER LIFESTYLE EDIT START ///////// 
   
$("#edit-btn-lifestyle").on("click",function(){

$("#member-lifestyle").hide("fast");
$("#member-lifestyle-edit").show("fast");
$("#edit-btn-lifestyle").hide("fast");	
$("#save-btn-lifestyle").show("fast");	
	
});	


$("#edit-member-lifestyle-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-lifestyle').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-lifestyle-edit").hide("fast");
$("#edit-btn-lifestyle").show("fast");	
$("#save-btn-lifestyle").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER LIFESTYLE EDIT END /////////    


//////// MEMBER LIKE EDIT START ///////// 
   
$("#edit-btn-like").on("click",function(){

$("#member-like").hide("fast");
$("#member-like-edit").show("fast");
$("#edit-btn-like").hide("fast");	
$("#save-btn-like").show("fast");	
	
});	


$("#edit-member-like-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-like').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-like-edit").hide("fast");
$("#edit-btn-like").show("fast");	
$("#save-btn-like").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER LIKE EDIT END /////////   



//////// MEMBER PARTNER MYSELF EDIT START ///////// 
   
$("#edit-btn-partner-myself").on("click",function(){

$("#member-partner-myself").hide("fast");
$("#member-partner-myself-edit").show("fast");
$("#edit-btn-partner-myself").hide("fast");	
$("#save-btn-partner-myself").show("fast");	
	
});	


$(".sbt").on('click',function(){
 var my_self=$('#reg_preference_mem_myself').val();
 var res=my_self.toLowerCase();
 var edit_partner_myself1="edit-partner-myself";
if(res==""){
alert("Enter few words about your preference  !");
}else if(res.length<50){
alert("Enter enter at least 50 character about your preference !");
}else if(res.match(/[0-9]/g)){
alert("Numbers are not allowed !");
}else if(res.match(/one/g) || res.match(/two/g) || res.match(/three/g) || res.match(/four/g) || res.match(/five/g) || res.match(/six/g) || res.match(/seven/g) || res.match(/eight/g) || res.match(/nine/g) || res.match(/ten/g) || res.match(/eleven/g) || res.match(/twelve/g) || res.match(/thirteen/g) || res.match(/fourteen/g) || res.match(/fifteen/g) || res.match(/sixteen/g) || res.match(/seventeen/g) || res.match(/eighteen/g) || res.match(/nineteen/g) || res.match(/twenty/g)){
      alert('Invalid characters !');
}else{
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  {edit_partner_myself1:edit_partner_myself1,res:res},
success: function(data){

if(data!=0){

$('#member-partner-myself').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-myself-edit").hide("fast");
$("#edit-btn-partner-myself").show("fast"); 
$("#save-btn-partner-myself").hide("fast"); 

},
error: function(){alert('error')}                      

});
}

});



	
//});	

//////// MEMBER PARTNER MYSELF EDIT END /////////  


//////// MEMBER PARTNER BASIC DETAIL EDIT START ///////// 
   
$("#edit-btn-partner-basic").on("click",function(){

$("#member-partner-basic").hide("fast");
$("#member-partner-basic-edit").show("fast");
$("#edit-btn-partner-basic").hide("fast");	
$("#save-btn-partner-basic").show("fast");	
	
});	


$("#edit-member-partner-basic-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-basic').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-basic-edit").hide("fast");
$("#edit-btn-partner-basic").show("fast");	
$("#save-btn-partner-basic").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER PARTNER BASIC DETAIL EDIT END /////////   



//////// MEMBER RELIGION PARTNER EDIT START ///////// 
   
$("#edit-btn-partner-religion").on("click",function(){

$("#member-partner-religion").hide("fast");
$("#member-partner-religion-edit").show("fast");
$("#edit-btn-partner-religion").hide("fast");	
$("#save-btn-partner-religion").show("fast");	
	
});	


$("#edit-member-partner-religion-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-religion').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-religion-edit").hide("fast");
$("#edit-btn-partner-religion").show("fast");	
$("#save-btn-partner-religion").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER RELIGION PARTNER EDIT END ///////// 




//////// MEMBER PARTNER LOCATION EDIT START ///////// 
   
$("#edit-btn-partner-location").on("click",function(){

$("#member-partner-location").hide("fast");
$("#member-partner-location-edit").show("fast");
$("#edit-btn-partner-location").hide("fast");	
$("#save-btn-partner-location").show("fast");	
	
});	


$("#edit-member-partner-location-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-location').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-location-edit").hide("fast");
$("#edit-btn-partner-location").show("fast");	
$("#save-btn-partner-location").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// MEMBER PARTNER LOCATION EDIT END ///////// 


//////// MEMBER PARTNER LIFESTYLE EDIT START ///////// 
   
$("#edit-btn-partner-lifestyle").on("click",function(){

$("#member-partner-lifestyle").hide("fast");
$("#member-partner-lifestyle-edit").show("fast");
$("#edit-btn-partner-lifestyle").hide("fast");	
$("#save-btn-partner-lifestyle").show("fast");	
	
});	


$("#edit-member-partner-lifestyle-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-lifestyle').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-lifestyle-edit").hide("fast");
$("#edit-btn-partner-lifestyle").show("fast");	
$("#save-btn-partner-lifestyle").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER PARTNER LIFESTYLE EDIT END ///////// 
  


//////// MEMBER PARTNER PROFFESION EDIT START ///////// 
   
$("#edit-btn-partner-professional").on("click",function(){

$("#member-partner-professional").hide("fast");
$("#member-partner-professional-edit").show("fast");
$("#edit-btn-partner-professional").hide("fast");	
$("#save-btn-partner-professional").show("fast");	
	
});	


$("#edit-member-partner-professional-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-professional').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-professional-edit").hide("fast");
$("#edit-btn-partner-professional").show("fast");	
$("#save-btn-partner-professional").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// MEMBER PARTNER PROFFESION EDIT END ///////// 
	
});
</script>
<script>
function showstate(stateid){
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/"+"findstate-profile.php?id="+stateid;
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){
document.getElementById('constate').innerHTML=req.responseText;
  } 
 }
}
req.open("GET",str,true);
req.send(null);
}
</script>







<script>
function byReligion(religion){
	
//alert(religion)	
	
if(religion=="Hindu"){


$("#jain").hide();	
$("#muslim").hide();
$("#sikh").hide();	
$("#community_load_area").show();

document.getElementById('hindu').style.display='block'


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	

//$("#show-hide-sub-community").show();			
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////


}else if(religion=="Muslim"){

$("#hindu").hide();	
$("#jain").hide();	
$("#sikh").hide();	
$("#community_load_area").show();	



document.getElementById('muslim').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	
$("#show-hide-sub-community").show();	
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Jain"){

$("#hindu").hide();	
$("#muslim").hide();	
$("#sikh").hide();	
$("#community_load_area").show();


document.getElementById('jain').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	
$("#show-hide-sub-community").hide();		
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Sikh"){

$("#hindu").hide();	
$("#muslim").hide();	
$("#jain").hide();	
$("#community_load_area").show();


document.getElementById('sikh').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	
$("#show-hide-sub-community").hide();			
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Parsi" || religion=="Buddhist" || religion=="Jewish"){

$("#hindu").hide();	
$("#muslim").hide();	
$("#jain").hide();	
$("#sikh").hide();	
$("#community_load_area").hide();	
$("#show-hide-sub-community").hide();		
	
	
}else{

$("#hindu").hide();	
$("#muslim").hide();	
$("#jain").hide();	
$("#sikh").hide();	
$("#community_load_area").show();	


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	
$("#show-hide-sub-community").hide();		
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////


	
}
	
}
</script>




<script>
function byReligionPartner(religion){
	
//alert(religion)	
	
if(religion=="Hindu"){


$("#jain-partner").hide();	
$("#muslim-partner").hide();
$("#sikh-partner").hide();	
$("#community_load_area_partner").show();

document.getElementById('hindu-partner').style.display='block'


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	

//$("#show-hide-sub-community").show();			
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////


}else if(religion=="Muslim"){

$("#hindu-partner").hide();	
$("#jain-partner").hide();	
$("#sikh-partner").hide();	
$("#community_load_area_partner").show();	



document.getElementById('muslim-partner').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	
$("#show-hide-sub-community-partner").show();	
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Jain"){

$("#hindu-partner").hide();	
$("#muslim-partner").hide();	
$("#sikh-partner").hide();	
$("#community_load_area_partner").show();


document.getElementById('jain-partner').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	
$("#show-hide-sub-community-partner").hide();		
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Sikh"){

$("#hindu-partner").hide();	
$("#muslim-partner").hide();	
$("#jain-partner").hide();	
$("#community_load_area_partner").show();


document.getElementById('sikh-partner').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	
$("#show-hide-sub-community-partner").hide();			
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Parsi" || religion=="Buddhist" || religion=="Jewish"){

$("#hindu-partner").hide();	
$("#muslim-partner").hide();	
$("#jain-partner").hide();	
$("#sikh-partner").hide();	
$("#community_load_area_partner").hide();	
$("#show-hide-sub-community-partner").hide();		
	
	
}else{

$("#hindu-partner").hide();	
$("#muslim-partner").hide();	
$("#jain-partner").hide();	
$("#sikh-partner").hide();	
$("#community_load_area_partner").show();	


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	
$("#show-hide-sub-community-partner").hide();		
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////


	
}
	
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
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible.js"></script> 
<!------pie---------->


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
   
   <div class="item   active profile-photo " style="text-align:-webkit-center">
<img src="<?=SITE_WS_PATH?>/upload_images/<?=$userDATA['reg_profile_photo']?>" style="width:354px;height:442px" />
</div>

<?php
$sql="select * from  tbl_member_image where 1 and mem_image_cat_id='".$userDATA['reg_id']."'";		
$sql_fetch = db_query($sql);
$cntDATA=mysqli_num_rows($sql_fetch);
$cnt=0;
if($cntDATA > 0){	
while($DATA = mysqli_fetch_array($sql_fetch)) {
$cnt++;	
?>
<div class="item profile-photo " style="text-align:-webkit-center">
<img src="member_images/<?=$DATA['mem_image_name']?>" style="width:354px;height:442px" />
</div>
<? }} 

 
?>    


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