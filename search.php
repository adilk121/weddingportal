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
<!doctype html>
<head>
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
  <!---important-style--->
  <style>
  .arrow-r {
    margin-top: 1%;
}
.collapse-container>:nth-child(even) {padding: 0px 0px; }
.bgmsf1 {
   margin: 0px 0px 0px 0px !important;
}
.sb-db-hdg h2 {
    background-color: #d6d6d9;
    padding: 7px 10px !important;
    font-size: 16px;
    color: #525252 !important;
}
.collapse-container>:nth-child(odd) {
    padding: 6px 10px !important;}

  </style>
  <section style="background-color:#f1f1f2;">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 all-sec">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 addv hidden-sm hidden-xs">
        <img src="images/marr-banner1.png">
        </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd_3 mp_2mso">
       <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg_1">
       <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
      <h2>Shortlisted</h2>
      </div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 mp_db_00 text-right">
<a target="_blank" href="<?=SITE_WS_PATH?>/match-profile-listing.php?match=short" class="vew-all">View All</a>
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
   
<h5><a href="other-profile.php?mem=<?=$recMember['reg_id']?>" target="_blank"  class="Sui-name">(R<?=$recMember['reg_id']?>) | <?=$recMember['reg_age']?> Yrs</a></h5>
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
      <!----------->
    </div>
      <!---end-images--->
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp_db_00">
<section class="sec-bg form-sec">
<input type="radio" id="profile" value="s" name="tractor" checked='checked' /> 
<input type="radio" id="settings" value="2" name="tractor" /> 
<input type="radio" id="posts" value="3" name="tractor" />
<input type="radio" id="books" value="4" name="tractor" />

  
<nav class="navd_1">   
<label class="msg-box" for="profile">Basic Search</label>
<label class="msg-box" for="settings">Advance Search</label>
<label class="msg-box" for="posts">Search by ID</label>
<label class="msg-box" for="books">Search By Name</label>
</nav>
  
  <article class='uno'>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
    
<form action="search-result.php" method="post" enctype="multipart/form-data" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Marital Status</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_marital_status" id="search_marital_status" >
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
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
Age</div>
<div class="ccol-lg-9 col-md-9 col-sm-12 col-xs-12 mp_03">
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_age_from"  id="search_age_from" >
<?php for($i=18;$i<=60;$i++){?>
<option value="<?=$i?>"><?=$i?></option>
<?php }?>
</select>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center mp_db_00 frm-hdg_db">
<p>to</p>
</div>

<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_age_to"  id="search_age_to" >
<?php for($i=18;$i<=60;$i++){?>
<option value="<?=$i?>"><?=$i?></option>
<?php }?>
</select>
</div>
<div class="clearfix"></div>
</div>
</div>
<!-------->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">   
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Height</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp_0 mp_03">
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_height_from" id="search_height_from">
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
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center mp_db_00 frm-hdg_db">
<p>to</p>
</div>
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_height_to" id="search_height_to">
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
6' 9'' - 205cm</option></select>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Mother Tongue</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_mother_toung" id="search_mother_toung" >
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

</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Religion</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_religion" id="search_religion" onChange="byReligion1(this.value)">
<option value="">----Select Religion----</option>
<?php
$sql="SELECT * FROM tbl_community WHERE c_status='Active' AND c_parent_id='0'";
$dataCommunity=db_query($sql);
$countCommunity=mysqli_num_rows($dataCommunity);
if($countCommunity){
?>
<?php while($recCommunity=mysqli_fetch_array($dataCommunity)){ ?>
<option value="<?=$recCommunity['c_title']?>"><?=$recCommunity['c_title']?></option>
<?php }?>
<?php 
}
?>
</select>
</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof" id="community_load_area1" 
<?php if($recData['reg_religion']=="Parsi" || $recData['reg_religion']=="Buddhist" || $recData['reg_religion']=="Jewish" ){?> style="display:none" <?php }?>  >
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
Caste</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_cast" id="search_cast">
<option  value="0">----Select Cast----</option>      
<?php if(!empty($recData['reg_cast'])){?>
<option value="<?=$recData['reg_cast']?>" selected><?=$recData['reg_cast']?></option>
<?php }?>
</select>

</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Country</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_country" id="search_country" >
<option value="" selected="selected">----Select Country----</option>
<?php
$sql="SELECT * FROM  tbl_country_master WHERE status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<?php while($recMarital=mysqli_fetch_array($dataMarital)){ ?>
<option value="<?=$recMarital['contName']?>"><?=$recMarital['contName']?></option>
<?php }?>
</ul>
</li>
<?php 
}
?>
</select>

</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">State</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_state" id="search_state" >
<option value="" selected="selected">----Select State----</option>
<?php
$sql="SELECT * FROM tbl_search_state WHERE m_status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<?php while($recMarital=mysqli_fetch_array($dataMarital)){ ?>
<option value="<?=$recMarital['m_title']?>"><?=$recMarital['m_title']?></option>
<?php }?>
</ul>
</li>
<?php 
}
?>
</select>

</div>
</div>



</div>
<!----------2nd----------->

<!--------3rd----------->
<!--<div class="col-md-12 bgmsf">
<div class="col-md-12 pd-msof">
<div class="col-md-3">
Show profile</div>
<div class="col-md-9 mp_03">
<div class="col-md-6">
<input type="checkbox"> All</div>

<div class="col-md-6">
<input type="checkbox"> With Photo</div>

</div>
</div>

</div>
-->       <!----------4th-------->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<input type="submit" value="Submit" name="SearchBasic" id="SearchBasic" class="btn-sbmt">
<input type="reset" value="Reset" class="btn-Resetd">
</div>
</form>
  </div>
  </article>
  
<article class='dos'>
<form action="search-result.php" method="post" enctype="multipart/form-data" >
<div class="" style="width:100%; float:left;">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_bx">


<div>
<div id="collapse-menu" class="collapse-container" style="border:solid 1px #d6d6d9;">

<h3>Personal Details<span class="arrow-r"></span></h3>
                  
<div>
<div class="col-md-12 bgmsf1">
<!------>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="font-red">*</span>Marital Status</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_marital_status" id="search_marital_status" required>
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
</div>
<!------------>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="font-red">*</span>
Age</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp_03">
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_age_from"  id="search_age_from" >
<?php for($i=18;$i<=60;$i++){?>
<option value="<?=$i?>"><?=$i?></option>
<?php }?>
</select>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center mp_db_00 frm-hdg_db">
<p>to</p>
</div>

<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_age_to"  id="search_age_to" >
<?php for($i=18;$i<=60;$i++){?>
<option value="<?=$i?>"><?=$i?></option>
<?php }?>
</select>
</div>
<div class="clearfix"></div>
</div>
</div>
<!-------->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">   
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="font-red">*</span>Height</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12  mp_0 mp_03">
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_height_from" id="search_height_from">
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
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center mp_db_00 frm-hdg_db">
<p>to</p>
</div>
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
<select class="dsbo-fom-1" name="search_height_to" id="search_height_to">
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
6' 9'' - 205cm</option></select>
</div>
</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="font-red">*</span>Religion</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_religion" id="search_religion" onChange="byReligion2(this.value)" required>
<option value="">----Select Religion----</option>
<?php
$sql="SELECT * FROM tbl_community WHERE c_status='Active' AND c_parent_id='0'";
$dataCommunity=db_query($sql);
$countCommunity=mysqli_num_rows($dataCommunity);
if($countCommunity){
?>
<?php while($recCommunity=mysqli_fetch_array($dataCommunity)){ ?>
<option value="<?=$recCommunity['c_title']?>"><?=$recCommunity['c_title']?></option>
<?php }?>
<?php 
}
?>
</select>
</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof" id="community_load_area2" 
<?php if($recData['reg_religion']=="Parsi" || $recData['reg_religion']=="Buddhist" || $recData['reg_religion']=="Jewish" ){?> style="display:none" <?php }?>  >
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
Caste</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_cast" id="search_cast">
<option  value="0">----Select Cast----</option>      
<?php if(!empty($recData['reg_cast'])){?>
<option value="<?=$recData['reg_cast']?>" selected><?=$recData['reg_cast']?></option>
<?php }?>
</select>

</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Mother Tongue</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_mother_toung" id="search_mother_toung" required>
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

</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Physical Status</div>

<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
<input type="radio" name="search_physical_status" id="search_physical_status" value="No" checked> Normal
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<input type="radio" name="search_physical_status" id="search_physical_status" value="Yes"  > Physically Challenged
</div>

</div>

</div>
<div class="clearfix"></div>

</div>
                    
         <!-------2rd------->
<h3>Education & Occupation Details<span class="arrow-r"></span></h3>
<div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf1">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
Education</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_highest_edu" id="search_highest_edu">
<option value="0" >-- Select Highest Education--</option>
<optgroup label="Engineering/Design">
<option value="B.E/B.Tech"  >-  B.E/B.Tech</option>
<option value="B.Pharma" >-  B.Pharma</option>
<option value="M.E/M.Tech" >-  M.E/M.Tech</option>
<option value="M.Pharma" >-  M.Pharma</option>
<option value="M.S. (Engineering)" >-  M.S. (Engineering)</option>
<option value="B.Arch" >-  B.Arch</option>
<option value="M.Arch" >-  M.Arch</option>
<option value="B.Des" <?php if($recData['reg_highest_edu']=="B.Des"){?> selected<?php }?>>-  B.Des</option>
<option value="M.Des" <?php if($recData['reg_highest_edu']=="M.Des"){?> selected<?php }?>>-  M.Des</option>

</optgroup>
<optgroup label="Computers:">
<option value="MCA/PGDCA" <?php if($recData['reg_highest_edu']=="MCA/PGDCA"){?> selected<?php }?> >-  MCA/PGDCA</option>
<option value="BCA" <?php if($recData['reg_highest_edu']=="BCA"){?> selected<?php }?> >-  BCA</option>
<option value="B.IT" <?php if($recData['reg_highest_edu']=="B.IT"){?> selected<?php }?> >-  B.IT</option>
</optgroup>

</optgroup>
<optgroup label="Finance/Commerce:">
<option value="B.Com" <?php if($recData['reg_highest_edu']=="B.Com"){?> selected<?php }?> >-   B.Com</option>
<option value="CA" <?php if($recData['reg_highest_edu']=="CA"){?> selected<?php }?>>-  CA</option>
<option value="CS" <?php if($recData['reg_highest_edu']=="CS"){?> selected<?php }?>>-   CS</option>
<option value="ICWA" <?php if($recData['reg_highest_edu']=="ICWA"){?> selected<?php }?>>-  ICWA</option>
<option value="M.Com" <?php if($recData['reg_highest_edu']=="M.Com"){?> selected<?php }?>>-   M.Com</option>
<option value="CFA" <?php if($recData['reg_highest_edu']=="CFA"){?> selected<?php }?>>-  CFA</option>
</optgroup>
<optgroup label="Management:">
<option value="MBA/PGDM" <?php if($recData['reg_highest_edu']=="MBA/PGDM"){?> selected<?php }?>>-  MBA/PGDM</option>
<option value="BBA" <?php if($recData['reg_highest_edu']=="BBA"){?> selected<?php }?>>-   BBA</option>
<option value="BHM" <?php if($recData['reg_highest_edu']=="BHM"){?> selected<?php }?>>-   BHM</option>
</optgroup>
<optgroup label="Medicine:">
<option value="MBBS" <?php if($recData['reg_highest_edu']=="MBBS"){?> selected<?php }?>>-  MBBS</option>
<option value="M.D." <?php if($recData['reg_highest_edu']=="M.D."){?> selected<?php }?>>-   M.D.</option>
<option value="BAMS" <?php if($recData['reg_highest_edu']=="BAMS"){?> selected<?php }?>>-  BAMS</option>

<option value="BHMS" <?php if($recData['reg_highest_edu']=="BHMS"){?> selected<?php }?>>-  BHMS</option>
<option value="BDS" <?php if($recData['reg_highest_edu']=="BDS"){?> selected<?php }?>>-  BDS</option>
<option value="M.S. (Medicine)" <?php if($recData['reg_highest_edu']=="M.S. (Medicine)"){?> selected<?php }?>>-  M.S. (Medicine)</option>
<option value="MVSc." <?php if($recData['reg_highest_edu']=="MVSc."){?> selected<?php }?>>-  MVSc.</option>
<option value="BVSc." <?php if($recData['reg_highest_edu']=="BVSc."){?> selected<?php }?>>-  BVSc.</option>
<option value="MDS" <?php if($recData['reg_highest_edu']=="MDS"){?> selected<?php }?>>-  MDS</option>
<option value="BPT" <?php if($recData['reg_highest_edu']=="BPT"){?> selected<?php }?>>-   BPT</option>
<option value="MPT" <?php if($recData['reg_highest_edu']=="MPT"){?> selected<?php }?>>-   MPT</option>
<option value="DM" <?php if($recData['reg_highest_edu']=="DM"){?> selected<?php }?>>-  DM</option>
<option value="MCh" <?php if($recData['reg_highest_edu']=="MCh"){?> selected<?php }?>>-  MCh</option>
</optgroup>
<optgroup label="Law:" >
<option value="BL /LLB" <?php if($recData['reg_highest_edu']=="BL /LLB"){?> selected<?php }?>>-   BL /LLB</option>
<option value="ML/LLM" <?php if($recData['reg_highest_edu']=="ML/LLM"){?> selected<?php }?>>-  ML/LLM</option>
</optgroup>
<optgroup label="Arts/Science:">
<option value="B.A." <?php if($recData['reg_highest_edu']=="B.A."){?> selected<?php }?>>-   B.A.</option>
<option value="B.Sc" <?php if($recData['reg_highest_edu']=="B.Sc"){?> selected<?php }?>>-  B.Sc</option>
<option value="M.Sc" <?php if($recData['reg_highest_edu']=="M.Sc"){?> selected<?php }?>>-  M.Sc</option>
<option value="B.Ed" <?php if($recData['reg_highest_edu']=="B.Ed"){?> selected<?php }?>>-   B.Ed</option>
<option value="M.Ed" <?php if($recData['reg_highest_edu']=="M.Ed"){?> selected<?php }?>>-  M.Ed</option>
<option value="MSW" <?php if($recData['reg_highest_edu']=="MSW"){?> selected<?php }?>>-  MSW</option>

<option value="BFA" <?php if($recData['reg_highest_edu']=="BFA"){?> selected<?php }?>>-   BFA</option>
<option value="MFA" <?php if($recData['reg_highest_edu']=="MFA"){?> selected<?php }?>>-  MFA</option>
<option value="BJMC" <?php if($recData['reg_highest_edu']=="BJMC"){?> selected<?php }?>>-  BJMC</option>
<option value="MJMC" <?php if($recData['reg_highest_edu']=="MJMC"){?> selected<?php }?>>-  MJMC</option>
</optgroup>

<optgroup label="Doctorate:">
<option value="Ph. D" <?php if($recData['reg_highest_edu']=="Ph. D"){?> selected<?php }?>>-   Ph. D</option>
<option value="M.Phil" <?php if($recData['reg_highest_edu']=="M.Phil"){?> selected<?php }?>>-  M.Phil</option>
</optgroup>

<optgroup label="Non-Graduate:">
<option value="Diploma" <?php if($recData['reg_highest_edu']=="Diploma"){?> selected<?php }?>>-   Diploma</option>
<option value="High School" <?php if($recData['reg_highest_edu']=="High School"){?> selected<?php }?>>-  High School</option>
<option value="Trade School" <?php if($recData['reg_highest_edu']=="Trade School"){?> selected<?php }?>>-   Trade School</option>
<option value="Other" <?php if($recData['reg_highest_edu']=="Other"){?> selected<?php }?>>-  Other</option>
</optgroup>

</select>

</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
Occupation</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_occupation" id="search_occupation">
       <option  value="">----Select Occupation----</option>
<option value="Any" <?php if($recData['reg_occupation']=="Any"){?> selected<?php }?> >Any</option>
<option value="Software Professional" <?php if($recData['reg_occupation']=="Software Professional"){?> selected<?php }?> >Software Professional</option>
<option value="Hardware Professional" <?php if($recData['reg_occupation']=="Hardware Professional"){?> selected<?php }?> >Hardware Professional</option>
<option value="Engineer - Non IT" <?php if($recData['reg_occupation']=="Engineer - Non IT"){?> selected<?php }?>>Engineer - Non IT</option>
<option value="Teaching / Academician" <?php if($recData['reg_occupation']=="Teaching / Academician"){?> selected<?php }?>>Teaching / Academician</option>
<option value="Professor / Lecturer" <?php if($recData['reg_occupation']=="Professor / Lecturer"){?> selected<?php }?> >Professor / Lecturer</option>
<option value="Education Professional" <?php if($recData['reg_occupation']=="Education Professional"){?> selected<?php }?> >Education Professional</option>
<option value="Chartered Accountant" <?php if($recData['reg_occupation']=="Chartered Accountant"){?> selected<?php }?> >Chartered Accountant</option>
<option value="Accounts/Finance Professional" <?php if($recData['reg_occupation']=="Accounts/Finance Professional"){?> selected<?php }?>>Accounts/Finance Professional</option>
<option value="Auditor" <?php if($recData['reg_occupation']=="Auditor"){?> selected<?php }?>>Auditor</option>
<option value="Company Secretary" <?php if($recData['reg_occupation']=="Company Secretary"){?> selected<?php }?> >Company Secretary</option>
<option value="Doctor" <?php if($recData['reg_occupation']=="Doctor"){?> selected<?php }?>>Doctor</option>
<option value="Nurse" <?php if($recData['reg_occupation']=="Nurse"){?> selected<?php }?> >Nurse</option>
<option value="Health Care Professional" <?php if($recData['reg_occupation']=="Health Care Professional"){?> selected<?php }?>>Health Care Professional</option>
<option value="Paramedical Professional" <?php if($recData['reg_occupation']=="Paramedical Professional"){?> selected<?php }?> >Paramedical Professional</option>
<option value="Banking Service Professional" <?php if($recData['reg_occupation']=="Banking Service Professional"){?> selected<?php }?> >Banking Service Professional</option>
<option value="Lawyer & Legal Professional" <?php if($recData['reg_occupation']=="Lawyer & Legal Professional"){?> selected<?php }?> >Lawyer & Legal Professional</option>
<option value="Law Enforcement Officer" <?php if($recData['reg_occupation']=="Law Enforcement Officer"){?> selected<?php }?>>Law Enforcement Officer</option>
<option value="Architect" <?php if($recData['reg_occupation']=="Architect"){?> selected<?php }?> >Architect</option>
<option value="Interior Designer" <?php if($recData['reg_occupation']=="Interior Designer"){?> selected<?php }?>>Interior Designer</option>
<option value="Advertising / PR Professional" <?php if($recData['reg_occupation']=="Advertising / PR Professional"){?> selected<?php }?> >Advertising / PR Professional</option>
<option value="Media Professional" <?php if($recData['reg_occupation']=="Media Professional"){?> selected<?php }?> >Media Professional</option>
<option value="Entertainment Professional" <?php if($recData['reg_occupation']=="Entertainment Professional"){?> selected<?php }?>>Entertainment Professional</option>
<option value="Fashion Designer" <?php if($recData['reg_occupation']=="Fashion Designer"){?> selected<?php }?> >Fashion Designer</option>
<option value="Event Management Professional" <?php if($recData['reg_occupation']=="Event Management Professional"){?> selected<?php }?> >Event Management Professional</option>
<option value="Journalist" <?php if($recData['reg_occupation']=="Journalist"){?> selected<?php }?> >Journalist</option>
<option value="Air Hostess" <?php if($recData['reg_occupation']=="Air Hostess"){?> selected<?php }?>  >Air Hostess</option>
<option value="Airline Professional" <?php if($recData['reg_occupation']=="Airline Professional"){?> selected<?php }?>>Airline Professional</option>
<option value="Pilot" <?php if($recData['reg_occupation']=="Pilot"){?> selected<?php }?> >Pilot</option>
<option value="Mariner / Merchant Navy" <?php if($recData['reg_occupation']=="Mariner / Merchant Navy"){?> selected<?php }?> >Mariner / Merchant Navy</option>
<option value="Beautician" <?php if($recData['reg_occupation']=="Beautician"){?> selected<?php }?>>Beautician</option>
<option value="Hotel / Hospitality Professional" <?php if($recData['reg_occupation']=="Hotel / Hospitality Professional"){?> selected<?php }?> >Hotel / Hospitality Professional</option>
<option value="Scientist / Researcher" <?php if($recData['reg_occupation']=="Scientist / Researcher"){?> selected<?php }?> >Scientist / Researcher</option>
<option value="Social Worker" <?php if($recData['reg_occupation']=="Social Worker"){?> selected<?php }?> >Social Worker</option>
<option value="Agriculture &amp; Farming Professional" <?php if($recData['reg_occupation']=="Agriculture &amp; Farming Professional"){?> selected<?php }?>>Agriculture & Farming Professional</option>
<option value="Arts &amp; Craftsman" <?php if($recData['reg_occupation']=="Arts &amp; Craftsman"){?> selected<?php }?>>Arts & Craftsman</option>
<option value="Administrative Professional" <?php if($recData['reg_occupation']=="Administrative Professional"){?> selected<?php }?> >Administrative Professional</option>
<option value="Customer Care Professional" <?php if($recData['reg_occupation']=="Customer Care Professional"){?> selected<?php }?> >Customer Care Professional</option>
<option value="CXO / President, Director, Chairman" <?php if($recData['reg_occupation']=="CXO / President, Director, Chairman"){?> selected<?php }?> >CXO / President, Director, Chairman</option>
<option value="Marketing Professional" <?php if($recData['reg_occupation']=="Marketing Professional"){?> selected<?php }?> >Marketing Professional</option>
<option value="Sales Professional" <?php if($recData['reg_occupation']=="Sales Professional"){?> selected<?php }?> >Sales Professional</option>
<option value="Technician" <?php if($recData['reg_occupation']=="Technician"){?> selected<?php }?>>Technician</option>
<option value="Consultant" <?php if($recData['reg_occupation']=="Consultant"){?> selected<?php }?>>Consultant</option>
<option value="Clerk" <?php if($recData['reg_occupation']=="Clerk"){?> selected<?php }?> >Clerk</option>
<option value="Officer" <?php if($recData['reg_occupation']=="Officer"){?> selected<?php }?>>Officer</option>
<option value="Supervisor" <?php if($recData['reg_occupation']=="Supervisor"){?> selected<?php }?> >Supervisor</option>
<option value="Manager" <?php if($recData['reg_occupation']=="Manager"){?> selected<?php }?> >Manager</option>
<option value="Executive" <?php if($recData['reg_occupation']=="Executive"){?> selected<?php }?>  >Executive</option>
<option value="Sportsman" <?php if($recData['reg_occupation']=="Sportsman"){?> selected<?php }?>  >Sportsman</option>
<option value="Civil Services (IAS/IPS/IRS/IES/IFS)" <?php if($recData['reg_occupation']=="Civil Services (IAS/IPS/IRS/IES/IFS)"){?> selected<?php }?> >Civil Services (IAS/IPS/IRS/IES/IFS)</option>
<option value="Army" <?php if($recData['reg_occupation']=="Army"){?> selected<?php }?> >Army</option>
<option value="Navy" <?php if($recData['reg_occupation']=="Navy"){?> selected<?php }?>>Navy</option>
<option value="Airforce" <?php if($recData['reg_occupation']=="Airforce"){?> selected<?php }?> >Airforce</option>
<option value="Human Resources Professional" <?php if($recData['reg_occupation']=="Human Resources Professional"){?> selected<?php }?> >Human Resources Professional</option>
<option value="Financial Analyst / Planning" <?php if($recData['reg_occupation']=="Financial Analyst / Planning"){?> selected<?php }?> >Financial Analyst / Planning</option>
<option value="Designer - IT & Engineering" <?php if($recData['reg_occupation']=="Designer - IT & Engineering"){?> selected<?php }?> >Designer - IT & Engineering</option>
<option value="Designer - Media & Entertainment" <?php if($recData['reg_occupation']=="Designer - Media & Entertainment"){?> selected<?php }?> >Designer - Media & Entertainment</option>
<option value="Student" <?php if($recData['reg_occupation']=="Student"){?> selected<?php }?> >Student</option>
<option value="Librarian" <?php if($recData['reg_occupation']=="Librarian"){?> selected<?php }?> >Librarian</option>
<option value="Financial Accountant" <?php if($recData['reg_occupation']=="Financial Accountant"){?> selected<?php }?> >Financial Accountant</option>
<option value="Business Analyst" <?php if($recData['reg_occupation']=="Business Analyst"){?> selected<?php }?> >Business Analyst</option>
<option value="Business Owner / Entrepreneur" <?php if($recData['reg_occupation']=="Business Owner / Entrepreneur"){?> selected<?php }?> >Business Owner / Entrepreneur</option>
<option value="Retired" <?php if($recData['reg_occupation']=="Retired"){?> selected<?php }?> >Retired</option>
<option value="Others" <?php if($recData['reg_occupation']=="Others"){?> selected<?php }?> >Others</option>
<option value="Business" <?php if($recData['reg_occupation']=="Business"){?> selected<?php }?>>Business</option>
<option value="Not working" <?php if($recData['reg_occupation']=="Not working"){?> selected<?php }?> >Not working</option>
<option value="Doctor" <?php if($recData['reg_occupation']=="Doctor"){?> selected<?php }?> >Doctor</option>
<option value="Engineer" <?php if($recData['reg_occupation']=="Engineer"){?> selected<?php }?> >Engineer</option>

</select>

</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
Annual income</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_annual_income" id="search_annual_income">
       <option  value="0">----Select Annual income----</option>
<option  value="Upto INR 1 Lakh" <?php if($recData['reg_member_annual_income']=="Upto INR 1 Lakh"){?> selected <?php }?> >Upto INR 1 Lakh</option>

<option  value="INR 1 Lakh to 2 Lakh" <?php if($recData['reg_member_annual_income']=="INR 1 Lakh to 2 Lakh"){?> selected <?php }?> >INR 1 Lakh to 2 Lakh</option>

<option  value="INR 2 Lakh to 4 Lakh" <?php if($recData['reg_member_annual_income']=="INR 2 Lakh to 4 Lakh"){?> selected <?php }?> >INR 2 Lakh to 4 Lakh</option>

<option  value="INR 4 Lakh to 7 Lakh" <?php if($recData['reg_member_annual_income']=="INR 4 Lakh to 7 Lakh"){?> selected <?php }?> >INR 4 Lakh to 7 Lakh</option>


<option  value="INR 7 Lakh to 10 Lakh" <?php if($recData['reg_member_annual_income']=="INR 7 Lakh to 10 Lakh"){?> selected <?php }?> >INR 7 Lakh to 10 Lakh</option>

<option  value="INR 10 Lakh to 15 Lakh" <?php if($recData['reg_member_annual_income']=="INR 10 Lakh to 15 Lakh"){?> selected <?php }?> >INR 10 Lakh to 15 Lakh</option>

<option  value="INR 15 Lakh to 20 Lakh" <?php if($recData['reg_member_annual_income']=="INR 15 Lakh to 20 Lakh"){?> selected <?php }?> >INR 15 Lakh to 20 Lakh</option>


<option  value="INR 20 Lakh to 30 Lakh" <?php if($recData['reg_member_annual_income']=="INR 20 Lakh to 30 Lakh"){?> selected <?php }?> >INR 20 Lakh to 30 Lakh</option>

<option  value="INR 30 Lakh to 50 Lakh" <?php if($recData['reg_member_annual_income']=="INR 30 Lakh to 50 Lakh"){?> selected <?php }?> >INR 30 Lakh to 50 Lakh</option>

<option  value="INR 50 Lakh to 75 Lakh" <?php if($recData['reg_member_annual_income']=="INR 50 Lakh to 75 Lakh"){?> selected <?php }?> >INR 50 Lakh to 75 Lakh</option>

<option  value="INR 75 Lakh to 1 Crore" <?php if($recData['reg_member_annual_income']=="INR 75 Lakh to 1 Crore"){?> selected <?php }?> >INR 75 Lakh to 1 Crore</option>

<option  value="INR 1 Crore &amp; above" <?php if($recData['reg_member_annual_income']=="INR 1 Crore &amp; above"){?> selected <?php }?> >INR 1 Crore &amp; above</option>

<option  value="Not applicable" <?php if($recData['reg_member_annual_income']=="Not applicable"){?> selected <?php }?> >Not applicable</option>
      </select>
</div>
</div>

</div>
<div class="clearfix"></div>
</div>
        <!------3nd------>
					<h3>Location Details<span class="arrow-r"></span></h3>
<div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf1">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
Country</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="search_country" id="search_country" onChange="showstate(this.value);">
<option value="0" selected="selected">----Select Country----</option>
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
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
State</div>

<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" id="constate">
<select class="dsbo-fom-1" name="join_state" id="join_state">
<option value="0" selected="selected">----Select State----</option>
<option value="<?=$recData['reg_state_name']?>" <?php if($recData['reg_state_id']!="" && $recData['reg_state_id']!=0){?> selected <?php }?>>
<?=$recData['reg_state_name']?>
</option>
</select>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
District/City</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
 <input type="text" placeholder="Enter your city" name="search_city" id="search_city" value="<?=$recData['reg_city']?>" class="dsbo-fom-1">
</div>
</div>

</div>
<div class="clearfix"></div>
</div>

<h3>Lifestyle And Habits<span class="arrow-r"></span></h3>
<div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf1">


<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 pd-msof no-padd">
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 bld-sty ari">Eating Habits</div>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 filter-options">
<input type="checkbox" value="Doesnot matter" name="search_eating" > Doesn't matter
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 filter-options">
<input type="checkbox" value="Veg" name="search_eating" > Veg
</div>

<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 filter-options">
<input type="checkbox" value="Non-Veg" name="search_eating"  > Non-Veg
</div>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 filter-options">
<input type="checkbox" value="Eggiterian" name="search_eating"   > Eggiterian
</div>

</div>
<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 pd-msof no-padd">
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 bld-sty ari">Skin Colour</div>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 filter-options">
<input type="checkbox"  name="search_skin_color" value="Doesnot matter" > Doesn't matter
</div>

<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 filter-options">
<input type="checkbox"  name="search_skin_color" value="Fair" > Fair
</div>

<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 filter-options">
<input type="checkbox" name="search_skin_color" value="Wheatis" > Wheatis
</div>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 filter-options">
<input type="checkbox"  name="search_skin_color" value="Dark" > Dark
</div>



</div>

<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 pd-msof no-padd">
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 bld-sty ari">Smoke</div>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 filter-options">
<input type="checkbox"  name="search_smoke" value="Doesnot matter" > Doesn't matter
</div>

<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 filter-options">
<input type="checkbox"  name="search_smoke" value="Non-smoker" > Non-smoker
</div>

<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 filter-options">
<input type="checkbox"  name="search_smoke" value="Regular smoker" > Regular smoker
</div>




</div>
<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 pd-msof no-padd">
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 bld-sty ari">Drink</div>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 filter-options">
<input type="checkbox"  name="search_drink" value="Doesnot matter" > Doesn't matter
</div>

<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 filter-options">
<input type="checkbox"  name="search_drink" value="Non-drinker" > Non-drinker
</div>

<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 filter-options">
<input type="checkbox" name="search_drink" value="Drinks Occasionally" > Drinks Occasionally
</div>

</div>


</div>
<div class="clearfix"></div>

</div> 
</div>
</div>
</div>
            <!--------3rd----------->


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<input type="submit" value="Submit" name="SearchAdvance" class="btn-sbmt">
<input type="reset" value="Reset" class="btn-Resetd">
</div>
</div>
        
</form>        
</article>
  
   <article class='tres'>
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  


<form action="search-result.php" method="post" enctype="multipart/form-data" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-btm">
<h4>Find profiles based in ID. <span class="clrd-spn">If you're looking for very specific results</span>, try ID option </h4></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_03 sh-key1">
<!--<input type="checkbox">  Show profiles with photo-->
<div class="clearfix"></div>
<input type="text" placeholder="Enter Member ID to search" name="member_user_id" required class="dsbo-fom-1 txt-styd">
</div>
<div class="clearfix"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<input type="submit" value="Search" name="SearchById" class="btn-sbmt">
</div>
</div>
</div>
</form>

  </div>
</article>
  
  
  
<article class='cuatro'>
<form action="search-result.php" method="post" enctype="multipart/form-data" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-btm">
<h4>Find profiles based on Name. <span class="clrd-spn">If you're looking for very specific results</span>, try Name option</h4></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_03 sh-key1">
<!-- <input type="checkbox">  Show profiles with photo-->
<div class="clearfix"></div>
<input type="text" placeholder="Enter Member Name to search" name="member_user_name" required  class="dsbo-fom-1 txt-styd">
</div>
<div class="clearfix"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<input type="submit" value="Search" name="SearchByName" class="btn-sbmt">
</div>
<!--<div class="col-md-12 brd-sty-sk"></div>-->

<!--------3rd----------->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<!--<div class="col-md-3">
Show profile</div>
<div class="col-md-9 mp_03">
<div class="col-md-6">
<input type="checkbox"> All</div>
<div class="col-md-6">
<input type="checkbox"> With Photo</div>
<div class="col-md-6">
<input type="checkbox"> With Horoscope</div>
<div class="col-md-6">
<input type="checkbox"> With Photo & Horoscope</div>
</div>-->
</div>
</div>

</div>
</div>
</form>
</article>



</section>
    </div> 
    </div>
    </div>
    </div>
</section>
 <?php include("site-footer.php"); ?>


</div>
<!-- Side Menu-->

<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>
<script src="<?=SITE_WS_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_WS_PATH?>/js/script.js"></script>
<script src="<?=SITE_WS_PATH?>/js/menuzord.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jPushMenu.js"></script>
<script src="<?=SITE_WS_PATH?>/js/owl.js"></script>
<!-- validate -->
<script src="<?=SITE_WS_PATH?>/js/customcollection.js"></script>
<script src="<?=SITE_WS_PATH?>/js/custom1.js"></script>
<!-------------->

<!-----left-accordian--------->
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible-normal.js"></script> 
<script>
$('#collapse-menu').collapsible({
  contentOpen:["0",""]
});
</script>

<script>
function byReligion1(religion){

var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/search-fill-community.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area1').innerHTML=req.responseText;	

}

} 
}
}
req.open("GET",str,true);
req.send(null);

}

function byReligion2(religion){

var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/search-fill-community.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area2').innerHTML=req.responseText;	

}

} 
}
}
req.open("GET",str,true);
req.send(null);

}
</script>

<script>
function showstate(stateid){
    
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/"+"findstate.php?id="+stateid;
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

</body>
</html>