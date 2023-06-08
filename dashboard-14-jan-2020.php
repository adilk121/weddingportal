<?php require_once("includes/dbsmain.inc.php");?>
<?php include("site-main-query.php");
if(empty($_SESSION['userLoginId'])){
  header("location:index.html");  
  header("location:index.html");  
}
?>
<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>ApniMatrimony</title>
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
<!-------slider----------->
<link href="<?=SITE_WS_PATH?>/css/horizontal-carousel.css" rel="stylesheet" type="text/css" media="screen" />
<style>
	
.btn-ad-pr {
    margin-top: 10px !important;
    margin-bottom: 10px!important;
    margin-left: -20px !important;
}
	.btn-ad-pr1{margin-left: -21px !important;s}
.upmbr{font-weight:bold !important; ont-size:16px !important;}
  .sb-db-hdg_1 h2{color:#b10a0a; font-weight:bold !important; font-size:16px !important;}
.carousel-list h3 {
    position: absolute;
    z-index: 2;
    bottom: 0;
    /* left: 5px; */
    margin: 0;
    width: 230px;
    /* height: 70px; */
    line-height: 30px;
    background-color: #009aae;
    opacity: 0.7;
    filter: alpha(opacity=70);
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.inv-sen {color:#009aae;}
..next-prv p a{color:#009aae !important;}





p#lbl-credit {
   background: #fdf7bd;
    width: 130px;
    font-weight: 600;
    color: #000;
    margin: 5px 0 0 60px !important;
}
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
  <!---button--->
  
  <section style="background-color:#f1f1f2;">
    <div class="container">
      <div class="row">
        <div class="col-md-11 all-sec">
      <div class="col-md-3">
      <div class="col-md-12 db-bg text-center" style="padding-bottom: 21px;">
      <p class="btn-ad-pr2"><img src="images/paid-member.png"> <a href="#" class="upmbr">Upgrade Membership</a></p>
      <h5><?=$userDATA['reg_name']?> | <a href="other-profile.php?mem=<?=$recMember['reg_id']?>"><?="R".$userDATA['reg_id']?></a></h5>
        
        <?php 
        $check_photo=$userDATA['reg_profile_photo'];
        if(empty($check_photo) && $userDATA['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="pro-img">
       <?php }else if(empty($check_photo) && $userDATA['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="pro-img">
       <?php }else{?>
        <img src="<?=SITE_WS_PATH?>/upload_images/<?=$userDATA['reg_profile_photo']?>" class="pro-img">
       <?php }?>



<p id="lbl-credit">Credit :  <?=$userDATA['reg_membership_view_credit']?></p>

        <p class="btn-ad-pr"><a href="Javascript:void(0)" onClick ="PopupWindowCenter('manage-photo.php?memId=<?=$userDATA['reg_id']?>', 'PopupWindowCenter',800,500);"><i class="fa fa-plus"></i> Add Photo</a>  <a href="other-profile.php?mem=<?=$userDATA['reg_id']?>"><i class="fa fa-edit"></i> Edit Profile</a></p>
        
        

        
        <p class="btn-ad-pr1"><a href="other-profile.php?mem=<?=$userDATA['reg_id']?>">Edit Partner Preferences</a></p>
      </div>
      <div class="col-md-12 db-bg">
     <!----<h4 class="hdg-box"><img src="images/inbox.png" class="box-img"> Inbox</h4>----->
            <div>
  <?php include("inbox-links.php");?>
          </div>
      <!----------->
    </div>
      <!---<div class="col-md-12 addv">
        <img src="images/marr-banner1.png">
        </div>----->
      <!----------->
      <div class="col-md-12 bg-clrd_3" style="margin-bottom:20px;">
       <div  class="col-md-12 sb-db-hdg_1">
       <div class="col-md-7">
      <h2>Shortlisted</h2>
      </div>
      <div class="col-md-5 mp_db_00 text-right">
<a href="#" class="vew-all">View All</a>
</div>
      </div>
    
       <div class="col-md-12 sb-db-hdg">
<?php
$gender="";
$userGender=db_scalar("SELECT reg_gender FROM tbl_registration WHERE reg_id='$_SESSION[userLoginId]'");

if($userGender=="Female"){
$gender="Male";	
}

if($userGender=="Male"){
$gender="Female";	
}
		
	
$shortMem=array();
$sql="SELECT * FROM  tbl_shortlist WHERE sl_by='$_SESSION[userLoginId]'";
$dataShort=db_query($sql);
$countShort=mysqli_num_rows($dataShort);
if($countShort){

while($recShort=mysqli_fetch_array($dataShort)){
$shortMem[]=$recShort['sl_mem'];	
}
	
}

$shortCond="";

if(count($shortMem)>0){
$shortMemIds=@implode(",",$shortMem);
$shortCond="AND reg_id IN ($shortMemIds)";
}


$sql="SELECT * FROM tbl_registration WHERE reg_gender='$gender' AND reg_status='Active' $shortCond   ORDER BY rand() LIMIT 3";	
$dataMember=db_query($sql);
while($recMember=mysqli_fetch_assoc($dataMember)){
?>     
<div class="col-md-12 mp_db_00 stb-bg">
<div class="col-md-4 Sui">

     <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-seq"></a></p>        
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/images/2.png" class="img-seq"></a></p>
       <?php }else if(!empty($check_photo)){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="img-seq"></a></p>
       <?php }?>

</div>
<div class="col-md-8 Sui-cnt">
<h5><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank"  class="Sui-name"><?=$recMember['reg_name']?></a></h5>
<?php 
$user_height5=$recMember['reg_height'];
?>
<p><?=$recMember['reg_age']?> Yrs, <?=str_replace(".", "'", $user_height5)?>" </p>
<p>

<a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank"  class="stb-btn1">View Profile</a> 
</p>
</div>
</div>
<?php
}
?>



       
      
      
      <div class="col-md-12 mp_db_00 box-sdo">
                   <div class="col-md-12 next-prv text-center">
                   <p>2 of 8 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
                   </div>
                  </div>
      </div>
    </div>
    </div>
      <!---end-images--->
      <div class="col-md-9 mp_db_00">
      <div class="col-md-12 db-bg">
      <div  class="col-md-12 sb-db-hdg_1">
      <div class="col-md-10">
      <h2><img src="images/Recent-Profile.png" class="img-sz1"> Daily Recommendation</h2>
      </div>
      <div class="col-md-2 mp_db_00 text-right">
<a href="<?=SITE_WS_PATH?>/match-profile-listing.php?match=recommendation" class="vew-all">View All</a>
</div>
      </div>
      
<?php
$gender="";
$userGender=db_scalar("SELECT reg_gender FROM tbl_registration WHERE reg_id='$_SESSION[userLoginId]'");

if($userGender=="Female"){
$gender="Male";	
}

if($userGender=="Male"){
$gender="Female";	
}
$sql="SELECT * FROM tbl_registration WHERE reg_gender='$gender' AND reg_status='Active' ";
$dataMember=db_query($sql);
?>      
      
      <div id="carousel" class="carousel">
    <a title="Previous Page" id="carousel-prev-btn" class="carousel-prev-btn" href="#prev">&laquo;</a>
    <div id="carousel-container" class="carousel-container">
        <ul id="carousel-list" class="carousel-list">
<?php while($recMember=mysqli_fetch_assoc($dataMember)){?>

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

<li>
          <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/images/1.ico"></a></p>        
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/images/2.png"></a></p>
       <?php }else if(!empty($check_photo)){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>"></a></p>
       <?php }?>

<h3 class="clrd_1">

<span id="action-load-area<?=$recMember['reg_id']?>">
<?php 
$user_height=$recMember['reg_height'];
?>
<?php if($currStatus!="None" && $currStatus=='Pending'){
$cond=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE (msg_from_mem_id='$recMember[reg_id]' AND msg_to_mem_id='$userDATA[reg_id]')");
if($cond!=0){?>

R<?=$recMember['reg_id']?>  | <?=$recMember['reg_age']?>  Yrs, <?=str_replace(".", "'", $user_height)?>" <br>
<span style="background-color: lightblue; padding: 5px; font-size: 12px; border-radius: 3px; color: black;">Interest Received</span>

<?php }else{ ?>
R<?=$recMember['reg_id']?>  | <?=$recMember['reg_age']?>  Yrs, <?=str_replace(".", "'", $user_height)?>" <br>
<a target="_blank" href="Javascript:void(0)" onClick="alert('Interest is already sent.')" class="snd-inv"><i class="fa fa-check" aria-hidden="true"></i>
 Interest Sent</a>
<?php }?>

<?php }else if($currStatus!="None" && $currStatus=='Declined'){?>

R<?=$recMember['reg_id']?>  | <?=$recMember['reg_age']?>  Yrs, <?=str_replace(".", "'", $user_height)?>" <br>
<a target="_blank" href="Javascript:void(0)" onClick="alert('Interest is decliend by you.')" class="snd-inv"><i class="fa fa-check" aria-hidden="true"></i>
 Interest Sent</a>
<?php }else if($currStatus!="None" && $currStatus=='Accepted'){?>

R<?=$recMember['reg_id']?>  | <?=$recMember['reg_age']?>  Yrs, <?=str_replace(".", "'", $user_height)?>" <br>
<a target="_blank" href="Javascript:void(0)" onClick="alert('Request is already accepted')" class="snd-inv"><i class="fa fa-check" aria-hidden="true"></i>
 Request Accepted</a>
 
<?php }else{?> 

R<?=$recMember['reg_id']?>  | <?=$recMember['reg_age']?>  Yrs, <?=str_replace(".", "'", $user_height)?>" <br>
<a target="_blank" href="Javascript:void(0)" onClick="send_request('<?=$recMember['reg_id']?>')" class="snd-inv">Send Interest</a>
<?php }?>


</span>


</h3>


</li>
<?php
}
?>
</ul>
</div>
<a title="Next Page" id="carousel-next-btn" class="carousel-next-btn" href="#next">&raquo;</a>
</div>

      
       
      </div>
      <!--------------->
      <div class="col-md-8 mp_db_00">
<?php
$sql="SELECT * FROM tbl_msg_box WHERE  msg_to_mem_id='$userDATA[reg_id]' AND (msg_status='Pending' OR msg_status='PendingAgain') ORDER BY rand() LIMIT 1 ";
$dataInvite=db_query($sql);
$recInvite=mysqli_fetch_array($dataInvite);


$sql="SELECT * FROM tbl_registration WHERE  reg_id='$recInvite[msg_from_mem_id]' ";
$dataInvitation=db_query($sql);
$count=db_scalar("SELECT COUNT(*) FROM tbl_msg_box WHERE msg_to_mem_id='$recInvite[msg_to_mem_id]' AND msg_status='pending' OR msg_status='PendingAgain'");
if(mysqli_num_rows($dataInvitation)>0){
$recInvitation=mysqli_fetch_array($dataInvitation);
?>      
      <div class="col-md-12 bg-clrd_2" id="received-load-area">
      <div  class="col-md-12 sb-db-hdg_1">
       <div class="col-md-8">
      <h2><img src="images/heart.png" class="img-sz1" style="height:15px; width:15px;"> Invitation Recived : <a href="other-profile.php?mem=<?=$recInvitation['reg_id']?>" target="_blank" class="db-nm"><?=$recInvitation['reg_name']?></a></h2>
      </div>
      <div class="col-md-4 mp_db_00 text-right">
<a href="#" class="vew-all">View All</a>
<br>
<p style="color: #c94646; padding-right: 5px;">No of request: <b><?=$count?></b></p>
</div>
      </div>
      <div class="col-md-4 int-rev">

                <?php 
        $check_photo=$recInvitation['reg_profile_photo'];
        if(empty($check_photo) && $recInvitation['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico">
       <?php }else if(empty($check_photo) && $recInvitation['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png">
       <?php }else if(!empty($check_photo)){?>
        <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recInvitation['reg_profile_photo']?>">
       <?php }?>

        </div>
         <div class="col-md-8 mp-top1">
         <div class="col-md-12 mp_db_00">
         <div class="col-md-4 hdg_1">
        <p> Age / Height</p>
         </div>
          <div class="col-md-2 hdg_2">
          <p>:</p>
          </div>
         <div class="col-md-6 hdg_3">
         <?php 
          $user_height1=$recInvitation['reg_height'];
         ?>
         <p><?=str_replace(".", "'", $user_height1)?>" </p>
         </div>
         </div>
         <div class="col-md-12 mp_db_00">
         <div class="col-md-4 hdg_1">
        <p>Mother Tongue</p>
         </div>
          <div class="col-md-2 hdg_2">
          <p>:</p>
          </div>
         <div class="col-md-6 hdg_3">
         <p><?=$recInvitation['reg_mother_tongue']?></p>
         </div>
         </div>
         <div class="col-md-12 mp_db_00">
         <div class="col-md-4 hdg_1">
        <p>Religion</p>
         </div>
          <div class="col-md-2 hdg_2">
          <p>:</p>
          </div>
         <div class="col-md-6 hdg_3">
         <p><?=$recInvitation['reg_religion']?></p>
         </div>
         </div>
         <div class="col-md-12 mp_db_00">
         <div class="col-md-4 hdg_1">
        <p>Profession</p>
         </div>
          <div class="col-md-2 hdg_2">
          <p>:</p>
          </div>
         <div class="col-md-6 hdg_3">
         <p><?=$recInvitation['reg_occupation']?></p>
         </div>
         </div>
         <div class="col-md-12 mp_db_00">
         <div class="col-md-4 hdg_1">
        <p>Marital Status</p>
         </div>
          <div class="col-md-2 hdg_2">
          <p>:</p>
          </div>
         <div class="col-md-6 hdg_3">
         <p><?=$recInvitation['reg_marital_status']?></p>
         </div>
         </div>
         <div class="col-md-12 mp_db_00">
         <div class="col-md-4 hdg_1">
        <p>Location</p>
         </div>
          <div class="col-md-2 hdg_2">
          <p>:</p>
          </div>
         <div class="col-md-6 hdg_3">
         <p><?=$recInvitation['reg_city']?>, <?=$recInvitation['reg_country_name']?></p>
         </div>
         </div>
         <div class="col-md-12 mp_db_00">
         <div class="col-md-4 hdg_1">
        <p>Education</p>
         </div>
          <div class="col-md-2 hdg_2">
          <p>:</p>
          </div>
         <div class="col-md-6 hdg_3">
         <p><?=$recInvitation['reg_highest_edu']?></p>
         </div>
         </div>
         
         </div>
         <div class="col-md-12 som-cnt">
         <p><img src="images/quotation.png"> Hi, We found your profile to be interesting and would like to connect with you. If you like our'  <a href="other-profile.php?mem=<?=$recInvitation['reg_id']?>" target="_blank" >Read More &rarr;</a></p>
         </div>
                  <div class="col-md-12 mp_db_00 box-sdo">
                  <div class="col-md-9 mp_db_00">
                  <div class="col-md-5 vew-pro">
                  <a href="other-profile.php?mem=<?=$recInvitation['reg_id']?>" target="_blank">View Profile</a>
                  </div>
                  <div class="col-md-3 btn-acp">
                  <a href="#" onClick="change_status('<?=$recInvite['msg_id']?>','Accepted')">
                  <?php
                   if($recInvite['msg_status']=='PendingAgain'){
                    ?>
                    Accept&nbsp;Again
                   <?php }else{?>
                  Accept
                <?php }?>
              </a>
                  </div>
                  
                  <div class="col-md-1 btn-decl">
                  <a href="#" onClick="change_status('<?=$recInvite['msg_id']?>','Declined')">Decline</a>
                  </div>
                  
                  </div>
                   <div class="col-md-3 next-prv text-right">
                   <p>2 of 8 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
                   </div>
                  </div>
      </div>
      
      <?php }else{
        ?>
        <div class="col-md-12 bg-clrd_2" id="received-load-area" style="text-align: center;">
          <h3 style="color: #fe0000;">Sorry ! you don't have any request.</h3>
        </div>
      <?php }?>
      
    
      
      <div class="col-md-12 bg-clrd_2">
       <div  class="col-md-12 sb-db-hdg_1">
       <div class="col-md-8">
      <h2><img src="images/Suitable.png" class="img-sz1"> Suitable For You </h2>
      </div>
      
<div class="col-md-4 mp_db_00 text-right">
<a href="match-profile-listing.php?match=suitable-match" class="vew-all">View All</a>
</div>
      </div>
    
<!-- Check condition according to user preference -->

<?php

$pref_country_array=array();
$pref_country=$userDATA['reg_preference_country_name'];
$pref_country_array=explode(",", $pref_country);
$check_count=count($pref_country_array)-1;
$j=0;
for($i=0; $i<count($pref_country_array); $i++){
  if($j==$check_count){
$get_countries.="'".$pref_country_array[$i]."'";
  }else{
$get_countries.="'".$pref_country_array[$i]."',";
}
$j++;
}

$cond_religion="";
$cond_reg_mother_tongue="";
$cond_marital_status="";
$cond_reg_age="";
$cond_reg_country="";
$cond_reg_height="";
$cond_reg_appearence="";
$cond_reg_physical_status="";
$cond_reg_eating_habits="";
$cond_reg_cast="";
$cond_reg_smoking_habits="";
$cond_reg_drinking_habits="";

if($userDATA['reg_preference_religion']!=""){
$cond_religion="AND reg_religion='$userDATA[reg_preference_religion]'";
}
if($userDATA['reg_preference_mother_tongue']!=""){
$cond_reg_mother_tongue="AND reg_mother_tongue='$userDATA[reg_preference_mother_tongue]'";
}
if($userDATA['reg_preference_marital_status']!=""){
  if($userDATA['reg_preference_marital_status']=="Doesn't Matter"){
$cond_marital_status="";
  }else{
$cond_marital_status="AND reg_marital_status='$userDATA[reg_preference_marital_status]'";
}
}
if($userDATA['reg_preference_age']!="" && $userDATA['reg_preference_age_to']!=""){
$cond_reg_age="AND reg_age BETWEEN '$userDATA[reg_preference_age]' AND '$userDATA[reg_preference_age_to]'";
}
if($userDATA['reg_preference_country_name']!=""){
$cond_reg_country="AND reg_country_name IN($get_countries)";
}
if($userDATA['reg_preference_height']!="" && $userDATA['reg_preference_height_to']!=""){
$cond_reg_height="AND reg_height>='$userDATA[reg_preference_height]' AND reg_height<='$userDATA[reg_preference_height_to]'";
}
if($userDATA['reg_preference_appearance']!=""){
$cond_reg_appearence="AND reg_appearance='$userDATA[reg_preference_appearance]'";
}
if($userDATA['reg_preference_physical_status']!=""){
$cond_reg_physical_status="AND reg_physical_status='$userDATA[reg_preference_physical_status]'";
}
if($userDATA['reg_preference_eating_habits']!=""){
$cond_reg_eating_habits="AND reg_eating_habits='$userDATA[reg_preference_eating_habits]'";
}
if($userDATA['reg_preference_cast']!=""){
$cond_reg_cast="AND reg_cast='$userDATA[reg_preference_cast]'";
}
if($userDATA['reg_preference_smoking_habits']!=""){
$cond_reg_smoking_habits="AND reg_smoking_habits='$userDATA[reg_preference_smoking_habits]'";
}
if($userDATA['reg_preference_drinking_habits']!=""){
$cond_reg_drinking_habits="AND reg_drinking_habits='$userDATA[reg_preference_drinking_habits]'";
}
 ?>

<?php
$sql="SELECT * FROM tbl_registration WHERE reg_gender='$gender' AND reg_status='Active' $cond_religion $cond_reg_mother_tongue $cond_marital_status $cond_reg_height $cond_reg_country $cond_reg_age $cond_reg_appearence $cond_reg_physical_status $cond_reg_eating_habits $cond_reg_smoking_habits $cond_reg_drinking_habits ORDER BY rand() LIMIT 4 ";
$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
$c=0;
while($recMember=mysqli_fetch_assoc($dataMember)){
$matchCount=0;	

if($recMember['reg_marital_status']!="" && $userPreferDATA['reg_preference_marital_status']!="" && $userPreferDATA['reg_preference_marital_status']==$recMember['reg_marital_status']){
$matchCount++;	
}

if($recMember['reg_age']!="0" && $userPreferDATA['reg_preference_age']!="0" && $userPreferDATA['reg_preference_age']==$recMember['reg_age']){
$matchCount++;	
}

if($recMember['reg_height']!="" && $userPreferDATA['reg_preference_height']!="" && $userPreferDATA['reg_preference_height']==$recMember['reg_height']){
$matchCount++;	
}

if($recMember['reg_mother_tongue']!="" && $userPreferDATA['reg_preference_mother_tongue']!="" && $userPreferDATA['reg_preference_mother_tongue']==$recMember['reg_mother_tongue']){
$matchCount++;	
}

if($recMember['reg_religion']!="" && $userPreferDATA['reg_preference_religion']!="" && $userPreferDATA['reg_preference_religion']==$recMember['reg_religion']){
$matchCount++;	
}

if($recMember['reg_gotra']!="" && $userPreferDATA['reg_preference_gotra']!="" && $userPreferDATA['reg_preference_gotra']==$recMember['reg_gotra']){
$matchCount++;	
}

if($recMember['reg_namaz']!="" && $userPreferDATA['reg_preference_namaz']!="" && $userPreferDATA['reg_preference_namaz']==$recMember['reg_namaz']){
$matchCount++;	
}

if($recMember['reg_zakaat']!="" && $userPreferDATA['reg_preference_zakaat']!="" && $userPreferDATA['reg_preference_zakaat']==$recMember['reg_zakaat']){
$matchCount++;	
}

if($recMember['reg_fasting']!="" && $userPreferDATA['reg_preference_fasting']!="" && $userPreferDATA['reg_preference_fasting']==$recMember['reg_fasting']){
$matchCount++;	
}


if($recMember['reg_dosh']!="" && $userPreferDATA['reg_preference_dosh']!="" && $userPreferDATA['reg_preference_dosh']==$recMember['reg_dosh']){
$matchCount++;	
}

if($recMember['reg_star']!="" && $userPreferDATA['reg_preference_star']!="" && $userPreferDATA['reg_preference_star']==$recMember['reg_star']){
$matchCount++;	
}

if($recMember['reg_dastar']!="" && $userPreferDATA['reg_preference_dastar']!="" && $userPreferDATA['reg_preference_dastar']==$recMember['reg_dastar']){
$matchCount++;	
}

if($recMember['reg_cast']!="" && $userPreferDATA['reg_preference_dastar']!="" && $userPreferDATA['reg_preference_dastar']==$recMember['reg_cast']){
$matchCount++;	
}

if($recMember['reg_sub_cast']!="" && $userPreferDATA['reg_preference_sub_cast']!="" && $userPreferDATA['reg_preference_sub_cast']==$recMember['reg_sub_cast']){
$matchCount++;	
}

if($recMember['reg_country_name']!="" && $userPreferDATA['reg_preference_country_name']!="" && $userPreferDATA['reg_preference_country_name']==$recMember['reg_country_name']){
$matchCount++;	
}

if($recMember['reg_state_name']!="" && $userPreferDATA['reg_preference_state_name']!="" && $userPreferDATA['reg_preference_state_name']==$recMember['reg_state_name']){
$matchCount++;	
}

if($recMember['reg_city']!="" && $userPreferDATA['reg_preference_city']!="" && $userPreferDATA['reg_preference_city']==$recMember['reg_city']){
$matchCount++;	
}

if($recMember['reg_highest_edu']!="" && $userPreferDATA['reg_preference_highest_edu']!="" && $userPreferDATA['reg_preference_highest_edu']==$recMember['reg_highest_edu']){
$matchCount++;	
}

if($recMember['reg_occupation']!="" && $userPreferDATA['reg_preference_occupation']!="" && $userPreferDATA['reg_preference_occupation']==$recMember['reg_occupation']){
$matchCount++;	
}


if($recMember['reg_member_annual_income']!="" && $userPreferDATA['reg_preference_member_annual_income']!="" && $userPreferDATA['reg_preference_member_annual_income']==$recMember['reg_member_annual_income']){
$matchCount++;	
}


if($recMember['reg_working_location']!="" && $userPreferDATA['reg_preference_working_location']!="" && $userPreferDATA['reg_preference_working_location']==$recMember['reg_working_location']){
$matchCount++;	
}


if($recMember['reg_appearance']!="" && $userPreferDATA['reg_preference_appearance']!="" && $userPreferDATA['reg_preference_appearance']==$recMember['reg_appearance']){
$matchCount++;	
}



if($recMember['reg_living_status']!="" && $userPreferDATA['reg_preference_living_status']!="" && $userPreferDATA['reg_preference_living_status']==$recMember['reg_living_status']){
$matchCount++;	
}

if($recMember['reg_physical_status']!="" && $userPreferDATA['reg_preference_physical_status']!="" && $userPreferDATA['reg_preference_physical_status']==$recMember['reg_physical_status']){
$matchCount++;	
}

if($recMember['reg_eating_habits']!="" && $userPreferDATA['reg_preference_eating_habits']!="" && $userPreferDATA['reg_preference_eating_habits']==$recMember['reg_eating_habits']){
$matchCount++;	
}

if($recMember['reg_smoking_habits']!="" && $userPreferDATA['reg_preference_smoking_habits']!="" && $userPreferDATA['reg_preference_smoking_habits']==$recMember['reg_smoking_habits']){
$matchCount++;	
}

if($recMember['reg_drinking_habits']!="" && $userPreferDATA['reg_preference_drinking_habits']!="" && $userPreferDATA['reg_preference_drinking_habits']==$recMember['reg_drinking_habits']){
$matchCount++;	
}
//echo $matchCount;
if($matchCount>0){
?>
<div class="col-md-6 ">
<div class="del-icon"><a href=""><i class="fa fa-times" title="Decline"></i></a></div>
<div class="col-md-12 mp_db_00 stb-bg">
<div class="col-md-4 Sui">

        <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico">
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png">
       <?php }else if(!empty($check_photo)){?>
        <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>">
       <?php }?>

</div>
<div class="col-md-8 Sui-cnt">
<h5><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" class="Sui-name"><?=$recMember['reg_name']?></a>      
</h5>
<?php 
$user_height2=$recMember['reg_height'];
?>
<p>From <?=$recMember['reg_city']?>, <?=str_replace(".", "'", $user_height2)?>" </p>


<p>
<a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" class="stb-btn">View Profile</a> 

<a href="match-profile-listing.php?match=suitable-match">
<i class=" fa fa-envelope fa-lg inv-sen" title="Send Invitation"></i></a> 

</p>
</div>
</div>
</div>
<?php
}
}
}
?>
      
  

                  <div class="col-md-12 mp_db_00 box-sdo">
                  <div class="col-md-9 mp_db_00">
                  <div class="col-md-2 btn-acp">
                
                  </div>
                  <div class="col-md-2 btn-decl">
                 
                  </div>
                  </div>
                   <div class="col-md-3 next-prv text-right">
                   <p>2 of 8 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
                   </div>
                  </div>
      </div>
      <div class="col-md-12 bg-clrd_2">
       <div  class="col-md-12 sb-db-hdg_1">
       <div class="col-md-8">
      <h2><i class="fa fa-external-link" aria-hidden="true" style="color:#009aae; text-shadow:1px 1px 10px #fff;"></i> New Profile</h2>
      </div>
      <div class="col-md-4 mp_db_00 text-right">
<a href="match-profile-listing.php?match=new" class="vew-all">View All</a>
</div>
      </div>
      
      
      
<?php
$sql="SELECT * FROM tbl_registration WHERE reg_gender='$gender' AND reg_status='Active' ORDER BY reg_add_date DESC  LIMIT 4";	
$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
$c=0;
while($recMember=mysqli_fetch_assoc($dataMember)){
$matchCount=0;	
?>
<div class="col-md-3 text-center mp_00dr">
<div class="col-md-12 dl-rcom" style="height: 255px; position: relative;">

        <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico">
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png">
       <?php }else if(!empty($check_photo)){?>
        <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>">
       <?php }?>

<h5><?=$recMember['reg_name']?></h5>
<?php 
$user_height3=$recMember['reg_height'];
?>
<p><?=str_replace(".", "'", $user_height3)?>" , <?=$recMember['reg_religion']?></p>
<a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" style="position: absolute; left: 12px; top: 218px;">View Profile</a>
</div>

</div>
<?php 
}
}
?>
        

        
        <div class="col-md-12 mp_db_00 box-sdo">
                  <div class="col-md-9 mp_db_00">
                  <div class="col-md-2 btn-acp">
                
                  </div>
                  <div class="col-md-2 btn-decl">
                 
                  </div>
                  </div>
                   <div class="col-md-3 next-prv text-right">
                   <p>2 of 8 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
                   </div>
                  </div>
      </div>
      
      </div>
      <!-----right----->
      
      
      
      <div class="col-md-4 mp_db">
       <div class="col-md-12 bg-clrd_3" style="margin-bottom:20px;">
       <div  class="col-md-12 sb-db-hdg_1">
       <div class="col-md-9">
      <h2>Recently Updated</h2>
      </div>
      <div class="col-md-3 mp_db_00 text-right">
<a href="#" class="vew-all">View All</a>
</div>
      </div>
       <div class="col-md-12 sb-db-hdg">

<?php
$sql="SELECT * FROM tbl_registration WHERE reg_gender='$gender' AND reg_status='Active' ORDER BY reg_last_edit_date DESC  LIMIT 2";	
$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
$c=0;
while($recMember=mysqli_fetch_assoc($dataMember)){
$matchCount=0;	
?>
<div class="col-md-12 mp_db_00 stb-bg">
<div class="col-md-4 Sui">

     <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-crcl"></a></p>        
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/images/2.png" class="img-crcl"></a></p>
       <?php }else if(!empty($check_photo)){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="img-crcl"></a></p>
       <?php }?>


</div>
<div class="col-md-8 Sui-cnt">
<h5><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" class="Sui-name"><?=$recMember['reg_name']?></a> 
<a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank">
<i class=" fa fa-envelope inv-sen" title="Send Invitation"></i></a></h5>
<?php 
$user_height4=$recMember['reg_height'];
?>
<p>From <?=$recMember['reg_city']?>, <?=str_replace(".", "'", $user_height4)?>" </p>


<p>

<a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" class="stb-btn">View Profile</a> 
</p>
</div>
</div>
<?php
}
}
?>
       
    
      
      <div class="col-md-12 mp_db_00 box-sdo">
                   <div class="col-md-12 next-prv text-center">
                   <p>2 of 8 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
                   </div>
                  </div>
      </div>
    </div>
    
    
    
    </div>
       <div class="col-md-4 mp_db">
       <div class="col-md-12 bg-clrd_3">
       <div class="col-md-12 sb-db-hdg">
      <h2>Search by Id...</h2>
     
      
      
      <form>
      <div class="col-md-12">
       <input type="text" placeholder="Search" class="ser-db-for">
     
       </div>
      </form>
      
      
     
      </div>
    </div>
    <div class="col-md-12 bg-clrd_3"  style="margin-top:20px;">
       <div class="col-md-12 sb-db-hdg">
      <h2>Advance Search</h2>
      <form>
      
      <div class="col-md-12 frm-hdg_db1 mp_btms">
      <p>Marital Status</p>
      <select class="dsbo-fom">
       <option value="">Doesn't Matter</option>
    <option value="Never Married" selected="selected">Never Married</option>
    <option value="Divorced" >Divorced</option>
    <option value="Widowed">Widowed</option>
    <option value="Awaiting Divorce">Awaiting Divorce</option>
    <option value="Annulled">Annulled</option>
      </select>
      </div>
      
       <div class="col-md-12 frm-hdg_db1 mp_btms">
      <p>Mother Tongue</p>
      <select class="dsbo-fom">
       <option value="">Hindi</option>
	<option value="">Bengali</option>
	<option value="">Telugu</option>
	<option value="">Marathi</option>
	<option value="">Tamil</option>
	<option value="">Urdu</option>
	<option value="">Gujarati</option>
	<option value="">Kannada</option>
	<option value="">Malayalam</option>
	<option value="">Odia</option>
	<option value="">Punjabi</option>	
	<option value="">Assamese</option>
	<option value="">Maithili</option>
	<option value="">Bhili/Bhilodi</option>
	<option value="">Santali</option>
	<option value="">Kashmiri</option>
	<option value="">Nepali</option>
	<option value="">Gondi	</option>	
	<option value="">Sindhi</option>
	<option value="">Konkani</option>	
	<option value="">Dogri</option>	
	<option value="">Khandeshi</option>	
	<option value="">Kurukh	</option>
	<option value="">Tulu	</option>
	<option value="">Meitei (Manipuri)</option>
	<option value="">Bodo</option>
	<option value="">Khasi	</option>
	<option value="">Mundari</option>	
      </select>
      </div>
      <div class="col-md-12 frm-hdg_db1 mp_btms">
      <p>Country</p>
      <select class="dsbo-fom">
       <option value="" selected="selected">UK</option>
    <option value="" >UA</option>
    <option value="" >Canada</option>
      </select>
      </div>
      
      <div class="col-md-3 frm-hdg_db">
      <p>Age</p>
      </div>
       <div class="col-md-4">
      <select class="dsbo-fom">
       <option value="18">18</option>
        <option value="19">19</option>
         <option value="20">20</option>
          <option value="21">21</option>
           <option value="22">22</option>
            <option value="23">23</option>
             <option value="24">24</option>
              <option value="25">25</option>
               <option value="26">26</option>
                <option value="27">27</option>
                 <option value="28">28</option>
                  <option value="29">29</option>
                   <option value="30">30</option>
                    <option value="31">31</option>
                     <option value="32">32</option>
                      <option value="33">33</option>
                       <option value="34">34</option>
                        <option value="35">35</option>
                         <option value="36">36</option>
                          <option value="37">37</option>
                           <option value="38">38</option>
                            <option value="39">39</option>
                             <option value="40">40</option>
      </select>
      </div>
      <div class="col-md-1 text-center mp_db_00 frm-hdg_db">
      <p>to</p>
      </div>
      
      <div class="col-md-4">
      <select class="dsbo-fom">
       <option value="18">18</option>
        <option value="19">19</option>
         <option value="20">20</option>
          <option value="21">21</option>
           <option value="22">22</option>
            <option value="23">23</option>
             <option value="24">24</option>
              <option value="25">25</option>
               <option value="26">26</option>
                <option value="27">27</option>
                 <option value="28">28</option>
                  <option value="29">29</option>
                   <option value="30">30</option>
                    <option value="31">31</option>
                     <option value="32">32</option>
                      <option value="33">33</option>
                       <option value="34">34</option>
                        <option value="35">35</option>
                         <option value="36">36</option>
                          <option value="37">37</option>
                           <option value="38">38</option>
                            <option value="39">39</option>
                             <option value="40">40</option>
      </select>
      </div>
      <div class="clearfix"></div>
      
        <div class="col-md-3 frm-hdg_db">
      <p>Height</p>
      </div>
       <div class="col-md-4">
      <select class="dsbo-fom">
      <option value="53" selected="selected">4' 5'' - 134cm</option>
    <option value="54">4' 6'' - 137cm</option>
    <option value="55">4' 7'' - 139cm</option>
    <option value="56" >4' 8'' - 142cm</option>
    <option value="57">4' 9'' - 144cm</option>
    <option value="58">4' 10'' - 147cm</option>
    <option value="59" >4' 11'' - 149cm</option>
    <option value="60">5' - 152cm</option>
    <option value="61">5' 1'' - 154cm</option>
    <option value="62">5' 2'' - 157cm</option>
    <option value="63">5' 3'' - 160cm</option>
    <option value="64">5' 4'' - 162cm</option>
    <option value="65">5' 5'' - 165cm</option>
    <option value="66">5' 6'' - 167cm</option>
    <option value="67" >5' 7'' - 170cm</option>
    <option value="68">5' 8'' - 172cm</option>
    <option value="69">5' 9'' - 175cm</option>
    <option value="70">5' 10'' - 177cm</option>
    <option value="71">5' 11'' - 180cm</option>
    <option value="72">6' - 182cm</option>
    <option value="73">6' 1'' - 185cm</option>
    <option value="74">6' 2'' - 187cm</option>
    <option value="75">6' 3'' - 190cm</option>
    <option value="76">6' 4'' - 193cm</option>
    <option value="77">6' 5'' - 195cm</option>
    <option value="78">6' 6'' - 198cm</option>
    <option value="79">6' 7'' - 200cm</option>
    <option value="80">6' 8'' - 203cm</option>
    <option value="81">6' 9'' - 205cm</option>
    <option value="82">6' 10'' - 208cm</option>
    <option value="83">6' 11'' - 210cm</option>
      </select>
      </div>
      <div class="col-md-1 text-center mp_db_00 frm-hdg_db">
      <p>to</p>
      </div>
      
      <div class="col-md-4">
      <select class="dsbo-fom">
      <option value="53" selected="selected">4' 5'' - 134cm</option>
    <option value="54">4' 6'' - 137cm</option>
    <option value="55">4' 7'' - 139cm</option>
    <option value="56" >4' 8'' - 142cm</option>
    <option value="57">4' 9'' - 144cm</option>
    <option value="58">4' 10'' - 147cm</option>
    <option value="59" >4' 11'' - 149cm</option>
    <option value="60">5' - 152cm</option>
    <option value="61">5' 1'' - 154cm</option>
    <option value="62">5' 2'' - 157cm</option>
    <option value="63">5' 3'' - 160cm</option>
    <option value="64">5' 4'' - 162cm</option>
    <option value="65">5' 5'' - 165cm</option>
    <option value="66">5' 6'' - 167cm</option>
    <option value="67" >5' 7'' - 170cm</option>
    <option value="68">5' 8'' - 172cm</option>
    <option value="69">5' 9'' - 175cm</option>
    <option value="70">5' 10'' - 177cm</option>
    <option value="71">5' 11'' - 180cm</option>
    <option value="72">6' - 182cm</option>
    <option value="73">6' 1'' - 185cm</option>
    <option value="74">6' 2'' - 187cm</option>
    <option value="75">6' 3'' - 190cm</option>
    <option value="76">6' 4'' - 193cm</option>
    <option value="77">6' 5'' - 195cm</option>
    <option value="78">6' 6'' - 198cm</option>
    <option value="79">6' 7'' - 200cm</option>
    <option value="80">6' 8'' - 203cm</option>
    <option value="81">6' 9'' - 205cm</option>
    <option value="82">6' 10'' - 208cm</option>
    <option value="83">6' 11'' - 210cm</option>
      </select>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12">
      <p><input type="checkbox"> Only Profiles with photos</p>
      <p><input type="checkbox"> Hide Profiles that have Filtered me</p>
      </div>
     
      <div class="col-md-4 mp_db_00">
      <input type="submit" value="Search" class="btn-srh-db" style="display:block !important;">
      </div>
       <div class="col-md-8 mp_db_00">
       <a href="search.html" class="or-smrh1"  style="text-align:center !important; padding:5px 20px !important; border:solid 1px #c7c7c7 !important; color:#000 !important; background-color:#efefef !important; position:relative; top:3px; transition:all 1.5s;">More Search Option</a>
       </div>
      </form>
     
      </div>
    </div>
    
    
    <div class="col-md-12 bg-clrd_3" style="margin-top:20px;">
       <div  class="col-md-12 sb-db-hdg_1">
       <div class="col-md-6">
      <h2>Visitors(100)</h2>
      </div>
      <div class="col-md-6 mp_db_00 text-right">
<a href="#" class="vew-all">View All</a>
</div>
      
      </div>
       <div class="col-md-12 sb-db-hdg">
     
      <div class="col-md-12 mp_db_00 stb-bg">
      <div class="col-md-3 Sui">
        <a href=""><img src="images/visible.jpg" class="img-seq2" title="View Profile"></a>
      </div>
      <div class="col-md-3 Sui">
        <a href=""><img src="images/15.jpg" class="img-seq2" title="View Profile"></a>
      </div>
      <div class="col-md-3 Sui">
        <a href=""><img src="images/profile1.jpg" class="img-seq2" title="View Profile"></a>
      </div>
      <div class="col-md-3 Sui">
        <a href=""><img src="images/visible.jpg" class="img-seq2" title="View Profile"></a>
      </div>
       
       </div>
       
      
       
      
      
      <div class="col-md-12 mp_db_00 box-sdo">
                   <div class="col-md-12 next-prv text-center">
                   <p>2 of 8 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
                   </div>
                  </div>
      </div>
    </div>
    </div>
      
       
    </div> 
    </div>
    </div>
    </div>
</section> 

<?php include("site-footer.php"); ?>
<!-------register----->
<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>
<script src="<?=SITE_WS_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_WS_PATH?>/js/script.js"></script>
<script src="<?=SITE_WS_PATH?>/js/menuzord.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jPushMenu.js"></script>
<script src="<?=SITE_WS_PATH?>/js/owl.js"></script>
<!-- validate -->
<script src="<?=SITE_WS_PATH?>/js/customcollection.js"></script>
<script src="<?=SITE_WS_PATH?>/js/custom1.js"></script>

<!-----left-accordian--------->
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible-normal.js"></script> 
<script>
$('#collapse-menu').collapsible({
  contentOpen:["0",""]
});
</script>

<!----slider------------->
<script type="text/javascript" src="<?=SITE_WS_PATH?>/js/jquery-slider.js"></script>
<script type="text/javascript" src="<?=SITE_WS_PATH?>/js/jquery.simplecarousel.js"></script>
<script type="text/javascript">
    (function($){
		

        $("#carousel").simpleCarousel({
            // V - Vertical(Default)
            // H - Horizontal
            playDirection: 'H',
			autoPlay: true,
			pageSwitchDelay:2000,
			cyclePlay: true,

        });
    })(jQuery);
</script>

<script>
function send_request(memID){

$(document).ready(function(e) {

$.ajax({

url: "send-request-dashboard.php?MemID="+memID,
type: "POST",
contentType: false,
processData:false,
success: function(data){

//alert(data);

if(data!=0){

$("#action-load-area"+memID).html(data);		
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
function change_status(msgID,act){

$(document).ready(function(e) {
//alert(memID)
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
window.location.href="dashboard.php";
document.getElementById('action-msg').innerHTML='Selected request is acceped';    
}

if(act=="Declined"){
//$("#received-load-area").html(data);
window.location.href="dashboard.php";
document.getElementById('action-msg').innerHTML='Selected request is declined';   
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
</body>
</html>
