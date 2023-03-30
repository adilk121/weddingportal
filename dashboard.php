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
    header("location:index.php");
    exit;
}
?>
<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Thebestweddinghub</title>
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
<!-------slider----------->
<link href="<?=SITE_WS_PATH?>/css/horizontal-carousel.css" rel="stylesheet" type="text/css" media="screen" />
<style>
	.del-icon {
    position: absolute;
    z-index: 999;
    /* left: 235px; */
    top: 10px;
    right: 20px;
}
	.stb-bg-dsbord {
    border: solid 1px #efefef;
    margin-top: 10px;
    background-color: #f8f8f8;
    height: 113px;
    overflow: auto;
}
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
.next-prv p a{color:#009aae !important;}
p#lbl-credit {
   background: #fdf7bd;
    width: 130px;
    font-weight: 600;
    color: #000;
    margin: 5px 0 0 0px !important; 
}
	.text-lft{text-align: center;}
	.res-upimg{height:70px !important;}
	.dl-rcom {
		border:solid 1px #ccc;  vertical-align: middle; display: table-cell;}
	.dl-rcom img{width:auto; height:80px;}
	.int-rev {
    height: 200px;
    width: 100%;
   /***** border: solid 1px #ccc;****/
    vertical-align: middle;
    display: table-cell;
    /***background-color: #efefef;***/
    padding: 5px !important;
   margin-bottom: 5px !important;
}
.int-rev img {
    height: auto;
    width: auto; border:solid 1px #ccc;
}
	.pd01 {
    height: 60px; padding: 5px 0px;
}
	.or-smrh1{text-align:center !important; padding:5px 17px !important; border:solid 1px #c7c7c7 !important; color:#000 !important; background-color:#efefef !important; position:relative; top:3px; transition:all 1.5s;}
	.msop1{padding: 10px 2px 5px 2px;}
	.btnsrcdk{
   position: absolute;
   right: 10px;
}
@media (min-width:320px) and (max-width:767px) 
	{
.btnsrcdk{
   padding: 7px 22px;
   font-size: 16px;
}
		/***.ftszbms{font-size:13px;}****/
.vew-pro a, .btn-acp a, .btn-decl a {
    font-size: 14px;
    padding: 4px 5px;
}
		.msop1{padding: 10px;}
		.btn-acp, .btn-decl, .vew-pro {
    /* margin: 10px 20px 8px 0px; */
       margin: 10px 0px !important;
}
.int-rev {
    height: 100%;
}
		.pd01 {
    height: auto;
}
		.Sui img {
    height: 90px;
    width: auto;
}
		.del-icon {
    position: absolute;
    z-index: 999;
    left: 90%;
    top: 15px;
    right: 0px;
}
		.ser-db-for {
    height:40px;}
	.btn-ad-pr2 {
    padding: 5px;
    font-size: 18px;}
	.btn-ad-pr {margin-bottom: 15px!important;}
	.sb-db-hdg h2 {
	padding: 5px 10px;}
	.btn-ad-pr a {
	padding: 5px 10px;
	font-size: 18px;
	}
	.btn-ad-pr1 a {
    padding: 5px 20px;
	font-size: 18px;}
	.pdfo{padding:20px 10px;}
	.btn-srh-db{display: block !important;
    width: 100%;
    margin-left:10px;
}
	.res-upimg{height:80px;}
	.text-lft{text-align:left; padding:5px 15px;}
	.text-lft p{position: relative; top:5px;}
	p#lbl-credit{
    width:60%;
    background: #fdf7bd; margin:10px 15px 13px 15px !important; font-size:18px;}
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
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 all-sec">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 db-bg text-center" style="padding-bottom: 21px;">
      <p class="btn-ad-pr2"><img src="images/paid-member.png"> <a href="membership-up.php" class="upmbr">Upgrade Membership</a></p>
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



        <center><p id="lbl-credit">Credit :  <?=$userDATA['reg_membership_view_credit']?></p></center>

        <p class="btn-ad-pr"><a href="Javascript:void(0)" onClick ="PopupWindowCenter('manage-photo.php?memId=<?=$userDATA['reg_id']?>', 'PopupWindowCenter',800,500);"><i class="fa fa-plus"></i> Add Photo</a>  <a href="<?=SITE_WS_PATH?>/my-profile.php"><i class="fa fa-edit"></i> Edit Profile</a></p>
        
        

        
        <p class="btn-ad-pr1"><a href="<?=SITE_WS_PATH?>/my-profile.php">Edit Partner Preferences</a></p>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 db-bg">
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
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd_3" style="margin-bottom:20px;">
       <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg_1">
       <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
      <h2>Shortlisted</h2>
      </div>
      
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 mp_db_00 text-right">
<a href="<?=SITE_WS_PATH?>/match-profile-listing.php?match=short" class="vew-all">View All</a>
</div>
</div>
    
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg">
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
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00 stb-bg">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center sr-mpp">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Sui">
     <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-seq"></a></p>        
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/images/2.png" class="img-seq"></a></p>
       <?php }else if(!empty($check_photo)){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="img-seq"></a></p>
       <?php }?>

</div></div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 Sui-cnt">
    
<h5><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank"  class="Sui-name">(R<?=$recMember['reg_id']?>)</a></h5>
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

<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00 box-sdo">
<div class="col-md-12 next-prv text-center">
<p>2 of 8 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
</div>
</div>-->

      </div>
    </div>
    </div>
      <!---end-images--->
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp_db_00">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 db-bg">
      <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg_1">
      <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
      <h2><img src="images/Recent-Profile.png" class="img-sz1"> Daily Recommendation</h2>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 mp_db_00 text-right">
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
        <ul id="carousel-list" class="carousel-list text-center col-md-12">
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
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank"><img src="<?=SITE_WS_PATH?>/images/1.ico"></a></p>        
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank"><img src="<?=SITE_WS_PATH?>/images/2.png"></a></p>
       <?php }else if(!empty($check_photo)){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank"><img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>"></a></p>
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
<a href="Javascript:void(0)" onClick="alert('Interest is already sent.')" class="snd-inv"><i class="fa fa-check" aria-hidden="true"></i>
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
<a href="Javascript:void(0)" onClick="send_request('<?=$recMember['reg_id']?>')" class="snd-inv">Send Interest</a>
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
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mp_db_00">
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
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd_2" id="received-load-area">
      <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg_1">
       <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
      <h2><img src="images/heart.png" class="img-sz1" style="height:15px; width:15px;"> Invitation Recived : <a href="other-profile.php?mem=<?=$recInvitation['reg_id']?>" target="_blank" class="db-nm"><?=$recInvitation['reg_name']?></a></h2>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mp_db_00 text-right">
<a href="<?=SITE_WS_PATH?>/inbox.php" class="vew-all">View All</a>
<br>
<p style="color: #c94646; padding-right: 5px;">No of request: <b><?=$count?></b></p>
</div>
      </div>
		  
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
		  <div class="col-lg-12 col-md-4 col-sm-12 col-xs-12 int-rev text-center">
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
        </div>
         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mp-top1">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00">
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 hdg_1">
        <p> Age / Height</p>
         </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 hdg_2">
          <p>:</p>
          </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hdg_3">
         <?php 
          $user_height1=$recInvitation['reg_height'];
         ?>
         <p><?=str_replace(".", "'", $user_height1)?>" </p>
         </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00">
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 hdg_1">
        <p>Mother Tongue</p>
         </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  hdg_2">
          <p>:</p>
          </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hdg_3">
         <p><?=$recInvitation['reg_mother_tongue']?></p>
         </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00">
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 hdg_1">
        <p>Religion</p>
         </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 hdg_2">
          <p>:</p>
          </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hdg_3">
         <p><?=$recInvitation['reg_religion']?></p>
         </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00">
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 hdg_1">
        <p>Profession</p>
         </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 hdg_2">
          <p>:</p>
          </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hdg_3">
         <p><?=$recInvitation['reg_occupation']?></p>
         </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00">
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 hdg_1">
        <p>Marital Status</p>
         </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 hdg_2">
          <p>:</p>
          </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hdg_3">
         <p><?=$recInvitation['reg_marital_status']?></p>
         </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00">
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 hdg_1">
        <p>Location</p>
         </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 hdg_2">
          <p>:</p>
          </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hdg_3">
         <p><?=$recInvitation['reg_city']?>, <?=$recInvitation['reg_country_name']?></p>
         </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00">
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 hdg_1">
        <p>Education</p>
         </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 hdg_2">
          <p>:</p>
          </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hdg_3">
         <p><?=$recInvitation['reg_highest_edu']?></p>
         </div>
         </div>
         
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 som-cnt">
         <p class="pd01"><img src="images/quotation.png"> Hi, We found your profile to be interesting and would like to connect with you. If you like our'  <a href="other-profile.php?mem=<?=$recInvitation['reg_id']?>" target="_blank" >Read More &rarr;</a></p>
         </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00 box-sdo">
                  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp_db_00">
                  <div class="col-lg-5 col-md-5 col-sm-4 col-xs-4 vew-pro">
                  <a href="other-profile.php?mem=<?=$recInvitation['reg_id']?>" target="_blank">View Profile</a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 btn-acp">
                  <a href="Javascript:void(0)" onClick="change_status('<?=$recInvite['msg_id']?>','Accepted')">
                  Accept
                 </a>
                  </div>
                  
                  <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3 btn-decl">
                  <a href="javascript:void(0)" onClick="change_status('<?=$recInvite['msg_id']?>','Declined')">Decline</a>
                  </div>
                  
                  </div>
                <!--   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 next-prv text-right">
                   <p>2 of 8 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
                   </div>-->
                  </div>
      </div>
      
      <?php }else{
        ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd_2" id="received-load-area" style="text-align: center;">
          <h3 style="color: #fe0000;">Sorry ! you don't have any request.</h3>
        </div>
      <?php }?>
      
    
      
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd_2">
       <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg_1">
       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
      <h2><img src="images/Suitable.png" class="img-sz1"> Suitable For You </h2>
      </div>
      
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mp_db_00 text-right">
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
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<!--<div class="del-icon"><a href=""><i class="fa fa-times" title="Decline"></i></a></div>-->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00 stb-bg-dsbord">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center sr-mpp">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Sui">

        <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico">
	<img src="http://webkey.co.in/2.0-demo/apnimatrimony/upload_images/fc604fb02b5854.jpeg" class="img-seq">
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png">
       <?php }else if(!empty($check_photo)){?>
        <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>">
       <?php }?>

</div></div>


<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 Sui-cnt">
<h5><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" class="Sui-name">(R<?=$recMember['reg_id']?>) | <?=$recMember['reg_age']?> Yrs</a>      
</h5>
<?php 
$user_height2=$recMember['reg_height'];
?>
<p>From <?=$recMember['reg_city']?>, <?=str_replace(".", "'", $user_height2)?>" </p>


<p>
<a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" class="stb-btn">View Profile</a> 

<!--<a href="match-profile-listing.php?match=suitable-match">
<i class=" fa fa-envelope fa-lg inv-sen" title="Send Invitation"></i></a>--> 

</p>
</div>
</div>
</div>
<?php
}
}
}
?>
      
  

                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00 box-sdo">
                  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp_db_00 hidden-sm hidden-xs">
                  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 btn-acp">
                
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 btn-decl">
                 
                  </div>
                  </div>
                   <!--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 next-prv text-right">
                   <p>2 of 8 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
                   </div>-->
                  </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd_2">
       <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg_1">
       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
      <h2><i class="fa fa-external-link" aria-hidden="true" style="color:#009aae; text-shadow:1px 1px 10px #fff;"></i> New Profile</h2>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mp_db_00 text-right">
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
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center mp_00dr">
	<!---- style="height: 255px; position: relative;"---->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dl-rcom">

        <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico">
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png">
       <?php }else if(!empty($check_photo)){?>
        <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>">
       <?php }?>


<h5>(R<?=$recMember['reg_id']?>) | <?=$recMember['reg_age']?> Yrs</h5>
<?php 
$user_height3=$recMember['reg_height'];
?>
<p><?=str_replace(".", "'", $user_height3)?>" , <?=$recMember['reg_religion']?></p>
<a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank">View Profile</a>
</div>
<!----- style="position: absolute; left: 12px; top: 218px;"----->
</div>
<?php 
}
}
?>
        
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00 box-sdo">
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp_db_00 hidden-xs">
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 btn-acp">

</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 btn-decl">

</div>
</div>
<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 next-prv text-right">
<p>2 of 8 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
</div>-->
</div>
</div>

</div>
      <!-----right----->
      
      
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_db">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd_3" style="margin-bottom:20px;">
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg_1">
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
<h2>Recently Updated</h2>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mp_db_00 text-right">
<a href="<?=SITE_WS_PATH?>/match-profile-listing.php?match=recent" class="vew-all">View All</a>
</div>
      </div>
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg">

<?php
$sql="SELECT * FROM tbl_registration WHERE reg_gender='$gender' AND reg_status='Active' ORDER BY reg_last_edit_date DESC  LIMIT 2";	
$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
$c=0;
while($recMember=mysqli_fetch_assoc($dataMember)){
$matchCount=0;	
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00 stb-bg-reph">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center sr-mpp">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Sui">

     <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/images/1.ico" class="res-upimg"></a></p>        
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/images/2.png" class="res-upimg"></a></p>
       <?php }else if(!empty($check_photo)){?>
        <p><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" ><img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="res-upimg"></a></p>
       <?php }?>


</div></div>

<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 Sui-cnt">
<h5><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank" class="Sui-name">(R<?=$recMember['reg_id']?>) | <?=$recMember['reg_age']?> Yrs</a> 
<!--<a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank">
<i class=" fa fa-envelope inv-sen" title="Send Invitation"></i></a>--></h5>
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
       
    
      
 <!--     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00 box-sdo">
                   <div class="col-md-12 next-prv text-center">
                   <p>2 of 8 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
                   </div>
                  </div>-->
      </div>
    </div>
    
    
    
    </div>
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mp_db">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd_3">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg">
      <h2>Search by Id...</h2>
     
      
      
      <form action="search-result.php" method="post">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <input type="text" name="member_user_id" placeholder="Search" class="ser-db-for" required>
		  <button type="submit" value="Search" name="SearchById" class="btn-sbmt btnsrcdk">
			 <i class="fa fa-search" aria-hidden="true"></i>
		  </button>
			  
       </div>
      </form>
      
      
     
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd_3"  style="margin-top:20px;">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg">
      <h2>Advance Search</h2>
      <form action="search-result.php" method="post" class="pdfo">
      
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 frm-hdg_db1 mp_btms">
      <p>Marital Status</p>
<select class="dsbo-fom" name="search_marital_status" id="search_marital_status"  required>
<option value="" selected="selected">----Select Marital Status----</option>
<?php
$sql="SELECT * FROM tbl_marital WHERE m_status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<?php while($recMarital=mysqli_fetch_array($dataMarital)){ ?>
<option value="<?=$recMarital['m_title']?>"><?=$recMarital['m_title']?></option>
<?php }?>
<?php 
}
?>
</select>
      </div>
      
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 frm-hdg_db1 mp_btms">
      <p>Mother Tongue</p>
 <select class="dsbo-fom" name="search_mother_toung" id="search_mother_toung" required>
<option value="">----Select Mother Tongue----</option>
<?php
$sql="SELECT * FROM tbl_toung WHERE m_status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<?php while($recMarital=mysqli_fetch_array($dataMarital)){ ?>
<option value="<?=$recMarital['m_title']?>"><?=$recMarital['m_title']?></option>
<?php }?>
<?php 
}
?>
	
</select>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 frm-hdg_db1 mp_btms">
      <p>Country</p>
<select class="dsbo-fom" name="search_country" id="search_country" onChange="showstate(this.value);" required>
<option value="" selected="selected">----Select Country----</option>
<?php
//if($recData['reg_country_id']!=""){
$sql_country=db_query("select * from tbl_country_master where 1 and status='Active'");
if(mysqli_num_rows($sql_country)>0){
while($data=mysqli_fetch_array($sql_country)){
@extract($data);
?>
<option value="<?=$data['contName']?>"><?=$data['contName']?></option>
<?
}
}
//}
?>
</select>
      </div>
      
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 frm-hdg_db">
<p>Age</p>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<select class="dsbo-fom" name="search_age_from"  id="search_age_from" >
<?php for($i=18;$i<=60;$i++){?>
<option value="<?=$i?>"><?=$i?></option>
<?php }?>
</select>
</div>
<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 text-lft mp_db_00 frm-hdg_db">
<p>to</p>
</div>
      
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<select class="dsbo-fom" name="search_age_to"  id="search_age_to" >
<?php for($i=19;$i<=60;$i++){?>
<option value="<?=$i?>"><?=$i?></option>
<?php }?>
</select>
      </div>
      <div class="clearfix"></div>
      
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 frm-hdg_db">
      <p>Height</p>
      </div>
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<select class="dsbo-fom" name="search_height_from" id="search_height_from">
<option selected value="4.5" >
4' 5'' - 134cm</option>
<option value="4.6" >
4' 6'' - 137cm</option>
<option value="4.7" >
4' 7'' - 139cm</option>
<option value="4.8" >
4' 8'' - 142cm</option>
<option value="4.9" >
4' 9'' - 144cm</option>
<option value="5" >
5' - 152cm</option>
<option value="5.1" >
5' 1'' - 154cm</option>
<option value="5.2" >
5' 2'' - 157cm</option>
<option value="5.3" >
5' 3'' - 160cm</option>
<option value="5.4" >
5' 4'' - 162cm</option>
<option value="5.5" >
5' 5'' - 165cm</option>
<option value="5.6" >
5' 6'' - 167cm</option>
<option value="5.7" >
5' 7'' - 170cm</option>
<option value="5.8" >
5' 8'' - 172cm</option>
<option value="5.9" >
5' 9'' - 175cm</option>
<option value="6" >
6' - 182cm</option>
<option value="6.1" >
6' 1'' - 185cm</option>
<option value="6.2" >
6' 2'' - 187cm</option>
<option value="6.3" >
6' 3'' - 190cm</option>
<option value="6.4" >
6' 4'' - 193cm</option>
<option value="6.5" >
6' 5'' - 195cm</option>
<option value="6.6" >
6' 6'' - 198cm</option>
<option value="6.7" >
6' 7'' - 200cm</option>
<option value="6.8" >
6' 8'' - 203cm</option>
<option value="6.9" >
6' 9'' - 205cm</option>
</select>
      </div>
      <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 text-lft mp_db_00 frm-hdg_db">
      <p>to</p>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<select class="dsbo-fom" name="search_height_to" id="search_height_to">

<option value="4.6" >
4' 6'' - 137cm</option>
<option value="4.7" >
4' 7'' - 139cm</option>
<option value="4.8" >
4' 8'' - 142cm</option>
<option value="4.9" >
4' 9'' - 144cm</option>
<option value="5" >
5' - 152cm</option>
<option value="5.1" >
5' 1'' - 154cm</option>
<option value="5.2" >
5' 2'' - 157cm</option>
<option value="5.3" >
5' 3'' - 160cm</option>
<option value="5.4" >
5' 4'' - 162cm</option>
<option value="5.5" >
5' 5'' - 165cm</option>
<option value="5.6" >
5' 6'' - 167cm</option>
<option value="5.7" >
5' 7'' - 170cm</option>
<option value="5.8" >
5' 8'' - 172cm</option>
<option value="5.9" >
5' 9'' - 175cm</option>
<option value="6" >
6' - 182cm</option>
<option value="6.1" >
6' 1'' - 185cm</option>
<option value="6.2" >
6' 2'' - 187cm</option>
<option value="6.3" >
6' 3'' - 190cm</option>
<option value="6.4" >
6' 4'' - 193cm</option>
<option value="6.5" >
6' 5'' - 195cm</option>
<option value="6.6" >
6' 6'' - 198cm</option>
<option value="6.7" >
6' 7'' - 200cm</option>
<option value="6.8" >
6' 8'' - 203cm</option>
<option value="6.9" >
6' 9'' - 205cm</option></select>
      </div>
      <div class="clearfix"></div>
      <div class="clearfix"></div>
     
     
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mp_db_00 text-center msop1">
      <input type="submit" value="Search" name="SearchAdvanceShort" class="btn-srh-db ftszbms" style="display:block !important;">
      </div>
       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 mp_db_00 text-center msop1">
       <a href="search.php" class="or-smrh1 ftszbms">More Search Option</a>
       </div>
      </form>
     
      </div>
    </div>
    
    
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd_3 mp_2mso" style="margin-top:20px;">
    <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg_1">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
    <?php
    $recJoined=db_query("select reg_id,reg_profile_photo from tbl_registration where reg_status='Active' and reg_profile_photo!='' and reg_gender='$gender' order by reg_id desc limit 4");
    ?>           
    <h2 style="font-size:15px !important;">Recently Joined(<?=db_scalar("select COUNT(reg_id) from tbl_registration where reg_status='Active' and reg_profile_photo!='' and reg_gender='$gender' order by reg_id desc")?>)</h2>
    </div>
    
    
    </div>
       
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00 stb-bg-reph">
<?php
while($recRow=mysqli_fetch_array($recJoined)){?>
    <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3 sr-mpp text-center">
    <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recRow['reg_profile_photo']?>" class="img-seq2" title="View Profile">
    </div> 
<?php }?>    
    

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