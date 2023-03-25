<?php require_once("includes/dbsmain.inc.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">

<!---------------->

</head>
<body id="amitabh">
<div class="page-wrapper" >
  <div class="preloader"></div>
  <header class="main-header" id="main-header">
    	<!-- Header Top -->
<?php include("header-top.php"); ?>




        <!-- Header Lower -->
          <div class="header-lower">
        	<div class="auto-container clearfix">
              
                <div class="outer-box">
                    <div class="logo">
                        <a href="index.php"><img class="img-responsive" src="images/logo1.png" alt=""></a>
                  </div>
                   
                   
                   
                    <div class="appoinment-btn">
                     <a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1" href="#"><i class="fa fa-user"></i> LOGIN</a>
                        <!-- Modal: donate now Starts -->
                        <a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1" href="register.html"><i class="fa fa-paint-brush"></i> REGISTER FREE</a>
                    </div>
                    
              </div>
          </div>
      </div>
  </header>
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
	
	.bgmsf1{background-color:#FFF !important; padding: 0px 0px 10px 0px; }
	.img-seq{height:90px !important;}
	.ftsze{font-size:12px;}
	.clrd-str{color:#F00 !important;}
	.Suid img{margin:0px !important; padding-left:0px !important;}
	.Suid{padding-left:0px !important;}
  </style>
  
  

  
  
<?php
$sql="SELECT * FROM  tbl_registration WHERE reg_id='$_SESSION[regID]'";
$dataRegd=db_query($sql);
$recData=mysqli_fetch_array($dataRegd);
?>
  
  <section style="background-color:#f1f1f2;">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 all-sec">
         
      <div class="col-md-9 mp_db_00" style="margin-bottom:20px !important;">
      <div class="clearfix"></div>

<h1 class="text-center"> Expected Partner Details</h1>
          
  <div id="collapse-menu" class="collapse-container" style="border:solid 1px #e4e4e4;">

					<h3>Basic Details<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
						<div class="col-md-12 bgmsf1">
   
<input type="hidden" name="regID" id="regID"  value="<?=$_SESSION['regID']?>" />   
   
  <div class="col-md-12 pd-msof">
  <div class="col-md-3"><span class="font-red">*</span>Marital Status</div>
  <div class="col-md-9">
   <select class="dsbo-fom-1" name="join_preference_marital_status" id="join_preference_marital_status" >

<option value="0" selected="selected">----Select Marital Status----</option>

<option value="Doesn't Matter" <?php if($recData['reg_preference_marital_status']=="Doesn't Matter"){?> selected <?php }?> >Doesn't Matter</option>

<option value="Never Married" <?php if($recData['reg_preference_marital_status']=="Never Married"){?> selected <?php }?> >Never Married</option>
<option value="Divorced" <?php if($recData['reg_preference_marital_status']=="Divorced"){?> selected <?php }?>  >Divorced</option>
<option value="Widowed" <?php if($recData['reg_preference_marital_status']=="Widowed"){?> selected <?php }?>>Widowed</option>
<option value="Awaiting Divorce" <?php if($recData['reg_preference_marital_status']=="Awaiting Divorce"){?> selected <?php }?> >Awaiting Divorce</option>
<option value="Annulled" <?php if($recData['reg_preference_marital_status']=="Annulled"){?> selected <?php }?>  >Annulled</option>

</select>
  </div>
  </div>
       <div class="col-md-12 pd-msof">
  <div class="col-md-3"><span class="font-red">*</span>Age</div>
  <div class="col-md-9 mp_03">
  <div class="col-md-5">
<select class="dsbo-fom-1" name="join_preference_age_from" id="join_preference_age_from" >
<option value="" selected disabled>--- Select Age From ---</option>
<?php 
 for($age_counter_from=18; $age_counter_from<=70;$age_counter_from++){ ?>
<option value="<?=$age_counter_from?>" <?php if($recData['reg_preference_age_from']=="<?=$age_counter_from?>"){?> selected <?php }?>><?=$age_counter_from?></option>
<?php }?>

</select>
      </div>
      <div class="col-md-2 text-center mp_db_00 frm-hdg_db">
      to
      </div>
      
      <div class="col-md-5">
<select class="dsbo-fom-1" name="join_preference_age_to" id="join_preference_age_to" >
<option value="" selected disabled>--- Select Age To ---</option>
<?php 
 for($age_counter_to=20; $age_counter_to<=70;$age_counter_to++){ ?>
<option value="<?=$age_counter_to?>" <?php if($recData['reg_preference_age_to']=="<?=$age_counter_to?>"){?> selected <?php }?>><?=$age_counter_to?></option>
<?php }?>

</select>
      </div>



      <div class="clearfix"></div>
      </div>
      </div>
      
      <!-------->
     
            <div class="col-md-12 pd-msof">
  <div class="col-md-3"><span class="font-red">*</span>Height</div>
  <div class="col-md-9 mp_03">
  <div class="col-md-5">
      <select class="dsbo-fom-1" name="join_preference_height_from" id="join_preference_height_from">
        <option value selected disabled>--- Select Height From ---</option>
<option value="4.5" <?php if($recData['reg_preference_height_from']=="4.5"){?> selected <?php }?>>4' 5'' - 134cm</option>
<option value="4.6" <?php if($recData['reg_preference_height_from']=="4.6"){?> selected <?php }?>>4' 6'' - 137cm</option>
<option value="4.7" <?php if($recData['reg_preference_height_from']=="4.7"){?> selected <?php }?>>4' 7'' - 139cm</option>
<option value="4.8" <?php if($recData['reg_preference_height_from']=="4.8"){?> selected <?php }?>>4' 8'' - 142cm</option>
<option value="4.9" <?php if($recData['reg_preference_height_from']=="4.9"){?> selected <?php }?>>4' 9'' - 144cm</option>
<option value="5" <?php if($recData['reg_preference_height_from']=="5"){?> selected <?php }?>>5' - 152cm</option>
<option value="5.1" <?php if($recData['reg_preference_height_from']=="5.1"){?> selected <?php }?>>5' 1'' - 154cm</option>
<option value="5.2" <?php if($recData['reg_preference_height_from']=="5.2"){?> selected <?php }?>>5' 2'' - 157cm</option>
<option value="5.3" <?php if($recData['reg_preference_height_from']=="5.3"){?> selected <?php }?>>5' 3'' - 160cm</option>
<option value="5.4" <?php if($recData['reg_preference_height_from']=="5.4"){?> selected <?php }?>>5' 4'' - 162cm</option>
<option value="5.5" <?php if($recData['reg_preference_height_from']=="5.5"){?> selected <?php }?>>5' 5'' - 165cm</option>
<option value="5.6" <?php if($recData['reg_preference_height_from']=="5.6"){?> selected <?php }?>>5' 6'' - 167cm</option>
<option value="5.7" <?php if($recData['reg_preference_height_from']=="5.7"){?> selected <?php }?>>5' 7'' - 170cm</option>
<option value="5.8" <?php if($recData['reg_preference_height_from']=="5.8"){?> selected <?php }?>>5' 8'' - 172cm</option>
<option value="5.9" <?php if($recData['reg_preference_height_from']=="5.9"){?> selected <?php }?>>5' 9'' - 175cm</option>
<option value="6" <?php if($recData['reg_preference_height_from']=="6"){?> selected <?php }?>>6' - 182cm</option>
<option value="6.1" <?php if($recData['reg_preference_height_from']=="6.1"){?> selected <?php }?>>6' 1'' - 185cm</option>
<option value="6.2" <?php if($recData['reg_preference_height_from']=="6.2"){?> selected <?php }?>>6' 2'' - 187cm</option>
<option value="6.3" <?php if($recData['reg_preference_height_from']=="6.3"){?> selected <?php }?>>6' 3'' - 190cm</option>
<option value="6.4" <?php if($recData['reg_preference_height_from']=="6.4"){?> selected <?php }?>>6' 4'' - 193cm</option>
<option value="6.5" <?php if($recData['reg_preference_height_from']=="6.5"){?> selected <?php }?>>6' 5'' - 195cm</option>
<option value="6.6" <?php if($recData['reg_preference_height_from']=="6.6"){?> selected <?php }?>>6' 6'' - 198cm</option>
<option value="6.7" <?php if($recData['reg_preference_height_from']=="6.7"){?> selected <?php }?>>6' 7'' - 200cm</option>
<option value="6.8" <?php if($recData['reg_preference_height_from']=="6.8"){?> selected <?php }?>>6' 8'' - 203cm</option>
<option value="6.9" <?php if($recData['reg_preference_height_from']=="6.9"){?> selected <?php }?>>6' 9'' - 205cm</option>
      </select>
      </div>
      <div class="col-md-2 text-center mp_db_00 frm-hdg_db">
      to
      </div>
      
      <div class="col-md-5">
  <select class="dsbo-fom-1" name="join_preference_height_to" id="join_preference_height_to">
        <option value selected disabled>--- Select Height To ---</option>

<!-- <option value="4.5" <?php if($recData['reg_preference_height']=="4.5"){?> selected <?php }?>>4' 5'' - 134cm</option>
<option value="4.6" <?php if($recData['reg_preference_height']=="4.6"){?> selected <?php }?>>4' 6'' - 137cm</option>
 --><option value="4.7" <?php if($recData['reg_preference_height_to']=="4.7"){?> selected <?php }?>>4' 7'' - 139cm</option>
<option value="4.8" <?php if($recData['reg_preference_height_to']=="4.8"){?> selected <?php }?>>4' 8'' - 142cm</option>
<option value="4.9" <?php if($recData['reg_preference_height_to']=="4.9"){?> selected <?php }?>>4' 9'' - 144cm</option>
<option value="5" <?php if($recData['reg_preference_height_to']=="5"){?> selected <?php }?>>5' - 152cm</option>
<option value="5.1" <?php if($recData['reg_preference_height_to']=="5.1"){?> selected <?php }?>>5' 1'' - 154cm</option>
<option value="5.2" <?php if($recData['reg_preference_height_to']=="5.2"){?> selected <?php }?>>5' 2'' - 157cm</option>
<option value="5.3" <?php if($recData['reg_preference_height_to']=="5.3"){?> selected <?php }?>>5' 3'' - 160cm</option>
<option value="5.4" <?php if($recData['reg_preference_height_to']=="5.4"){?> selected <?php }?>>5' 4'' - 162cm</option>
<option value="5.5" <?php if($recData['reg_preference_height_to']=="5.5"){?> selected <?php }?>>5' 5'' - 165cm</option>
<option value="5.6" <?php if($recData['reg_preference_height_to']=="5.6"){?> selected <?php }?>>5' 6'' - 167cm</option>
<option value="5.7" <?php if($recData['reg_preference_height_to']=="5.7"){?> selected <?php }?>>5' 7'' - 170cm</option>
<option value="5.8" <?php if($recData['reg_preference_height_to']=="5.8"){?> selected <?php }?>>5' 8'' - 172cm</option>
<option value="5.9" <?php if($recData['reg_preference_height_to']=="5.9"){?> selected <?php }?>>5' 9'' - 175cm</option>
<option value="6" <?php if($recData['reg_preference_height_to']=="6"){?> selected <?php }?>>6' - 182cm</option>
<option value="6.1" <?php if($recData['reg_preference_height_to']=="6.1"){?> selected <?php }?>>6' 1'' - 185cm</option>
<option value="6.2" <?php if($recData['reg_preference_height_to']=="6.2"){?> selected <?php }?>>6' 2'' - 187cm</option>
<option value="6.3" <?php if($recData['reg_preference_height_to']=="6.3"){?> selected <?php }?>>6' 3'' - 190cm</option>
<option value="6.4" <?php if($recData['reg_preference_height_to']=="6.4"){?> selected <?php }?>>6' 4'' - 193cm</option>
<option value="6.5" <?php if($recData['reg_preference_height_to']=="6.5"){?> selected <?php }?>>6' 5'' - 195cm</option>
<option value="6.6" <?php if($recData['reg_preference_height_to']=="6.6"){?> selected <?php }?>>6' 6'' - 198cm</option>
<option value="6.7" <?php if($recData['reg_preference_height_to']=="6.7"){?> selected <?php }?>>6' 7'' - 200cm</option>
<option value="6.8" <?php if($recData['reg_preference_height_to']=="6.8"){?> selected <?php }?>>6' 8'' - 203cm</option>
<option value="6.9" <?php if($recData['reg_preference_height_to']=="6.9"){?> selected <?php }?>>6' 9'' - 205cm</option>
      </select>
      </div>


      
      <div class="clearfix"></div>
      </div>
      </div>
       
   <!--  -->    
       
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Mother Tongue</div>
<div class="col-md-9">
<select class="dsbo-fom-1" name="join_preference_mother_tongue" id="join_preference_mother_tongue">
<option value="0">----Select Mother Tongue----</option>

<option value="Bengali" <?php if($recData['reg_preference_mother_tongue']=="Bengali"){?> selected <?php }?>>Bengali</option>
<option value="Hindi" <?php if($recData['reg_preference_mother_tongue']=="Hindi"){?> selected <?php }?> >Hindi</option>
<option value="Telugu" <?php if($recData['reg_preference_mother_tongue']=="Telugu"){?> selected <?php }?>>Telugu</option>
<option value="Marathi" <?php if($recData['reg_preference_mother_tongue']=="Marathi"){?> selected <?php }?>>Marathi</option>
<option value="Tamil" <?php if($recData['reg_preference_mother_tongue']=="Tamil"){?> selected <?php }?> >Tamil</option>
<option value="Urdu" <?php if($recData['reg_preference_mother_tongue']=="Urdu"){?> selected <?php }?> >Urdu</option>
<option value="Gujarati" <?php if($recData['reg_preference_mother_tongue']=="Gujarati"){?> selected <?php }?> >Gujarati</option>
<option value="Kannada" <?php if($recData['reg_preference_mother_tongue']=="Kannada"){?> selected <?php }?>>Kannada</option>
<option value="Malayalam" <?php if($recData['reg_preference_mother_tongue']=="Malayalam"){?> selected <?php }?> >Malayalam</option>
<option value="Odia" <?php if($recData['reg_preference_mother_tongue']=="Odia"){?> selected <?php }?> >Odia</option>
<option value="Punjabi" <?php if($recData['reg_preference_mother_tongue']=="Punjabi"){?> selected <?php }?> >Punjabi</option>	
<option value="Assamese" <?php if($recData['reg_preference_mother_tongue']=="Assamese"){?> selected <?php }?> >Assamese</option>
<option value="Maithili" <?php if($recData['reg_preference_mother_tongue']=="Maithili"){?> selected <?php }?>>Maithili</option>
<option value="Bhili/Bhilodi" <?php if($recData['reg_preference_mother_tongue']=="Bhili/Bhilodi"){?> selected <?php }?> >Bhili/Bhilodi</option>
<option value="Santali" <?php if($recData['reg_preference_mother_tongue']=="Santali"){?> selected <?php }?>  >Santali</option>
<option value="Kashmiri" <?php if($recData['reg_preference_mother_tongue']=="Kashmiri"){?> selected <?php }?> >Kashmiri</option>
<option value="Nepali" <?php if($recData['reg_preference_mother_tongue']=="Nepali"){?> selected <?php }?> >Nepali</option>
<option value="Gondi" <?php if($recData['reg_preference_mother_tongue']=="Gondi"){?> selected <?php }?> >Gondi</option>	
<option value="Sindhi" <?php if($recData['reg_preference_mother_tongue']=="Sindhi"){?> selected <?php }?> >Sindhi</option>
<option value="Konkani" <?php if($recData['reg_preference_mother_tongue']=="Konkani"){?> selected <?php }?> >Konkani</option>	
<option value="Dogri" <?php if($recData['reg_preference_mother_tongue']=="Dogri"){?> selected <?php }?> >Dogri</option>	
<option value="Khandeshi" <?php if($recData['reg_preference_mother_tongue']=="Khandeshi"){?> selected <?php }?> >Khandeshi</option>	
<option value="Kurukh" <?php if($recData['reg_preference_mother_tongue']=="Kurukh"){?> selected <?php }?> >Kurukh</option>
<option value="Tulu" <?php if($recData['reg_preference_mother_tongue']=="Tulu"){?> selected <?php }?> >Tulu</option>
<option value="Meitei(Manipuri)" <?php if($recData['reg_preference_mother_tongue']=="Meitei(Manipuri)"){?> selected <?php }?> >Meitei(Manipuri)</option>
<option value="Bodo" <?php if($recData['reg_preference_mother_tongue']=="Bodo"){?> selected <?php }?> >Bodo</option>
<option value="Khasi" <?php if($recData['reg_preference_mother_tongue']=="Khasi"){?> selected <?php }?>>Khasi</option>
<option value="Mundari" <?php if($recData['reg_preference_mother_tongue']=="Mundari"){?> selected <?php }?> >Mundari</option>

    </select>
  </div>

      </div>
       


<!-- RELIGION NEW SECTION  -->

<div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Religion</div>
  <div class="col-md-9">
<select class="dsbo-fom-1" name="join_preference_religion" id="join_preference_religion" onChange="byReligion(this.value)"> 
<option value="0">----Select Religion----</option>
<?php
$sql="SELECT * FROM tbl_community WHERE c_status='Active' AND c_parent_id='0'";
$dataCommunity=db_query($sql);
$countCommunity=mysqli_num_rows($dataCommunity);
if($countCommunity){
while($recCommunity=mysqli_fetch_array($dataCommunity)){	
?>
<option value="<?=$recCommunity['c_title']?>" <?php if($recData['reg_preference_religion']==$recCommunity['c_title']){?> selected<?php }?> >
<?=$recCommunity['c_title']?></option>
<?php
}
}
?>
</select>
</div>
      </div>

      
      
</div>



<div class="col-lg-12 no-padd" id="community_load_area" 
<?php if($recData['reg_preference_religion']=="Parsi" || $recData['reg_preference_religion']=="Buddhist" || $recData['reg_preference_religion']=="Jewish" ){?> style="display:none" <?php }?>  >

<div class="col-md-12 pd-msof">

<div class="col-lg-12 no-padd" >

<div class="col-md-3">
<span class="font-red">*</span>Community</div>
<div class="col-md-9">
<select class="dsbo-fom-1" name="join_preference_cast" id="join_preference_cast">
<option  value="0">----Select Community----</option>      
<?php if(!empty($recData['reg_preference_cast'])){?>
<option value="<?=$recData['reg_preference_cast']?>" selected><?=$recData['reg_preference_cast']?></option>
<?php }?>
</select>
</div>
</div>

</div>


<div class="col-md-12 pd-msof">
<div class="col-md-3">
<span class="font-red">*</span>Sub Community</div>
<div class="col-md-9">
<input type="text" placeholder="Enter Sub Community" name="join_preference_sub_cast" id="join_preference_sub_cast" value="<?=$recData['reg_preference_sub_cast']?>" class="dsbo-fom-1">
</div>
</div>
</div>


<div <?php if(!empty($recData['reg_preference_religion']) && $recData['reg_preference_religion']=="Muslim"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="muslim">      


<div class="col-md-12 pd-msof" >
  <div class="col-md-3">
  <span class="font-red">*</span>Namaaz / Salaah</div>
  <div class="col-md-9">

<select class="dsbo-fom-1"  name="join_preference_namaz" id="join_preference_namaz">
    
<option  value="0">----Select Namaaz / Salaah----</option>
<option value="Five times" label="Five times" <?php if($recData['reg_preference_namaz']=="Five times"){?> selected<?php }?>   >Five times</option>
<option value="Only on Jummah" label="Only on Jummah" <?php if($recData['reg_preference_namaz']=="Only on Jummah"){?> selected<?php }?>>Only on Jummah</option>
<option value="During Ramadan" label="During Ramadan" <?php if($recData['reg_preference_namaz']=="During Ramadan"){?> selected<?php }?> >During Ramadan</option>
<option value="Occasionally" label="Occasionally" <?php if($recData['reg_preference_namaz']=="Occasionally"){?> selected<?php }?>  >Occasionally</option>

</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Zakaat</div>
   <div class="col-md-6">
<input type="radio" name="join_preference_zakaat" id="join_zakaat_yes" value="Yes" <?php if($recData['reg_preference_zakaat']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3">
<input type="radio" name="join_preference_zakaat" id="join_zakaat_no" value="No" <?php if($recData['reg_preference_zakaat']=="No"){?> checked <?php }?>> No
  </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Fasting in Ramadan</div>
  
<div class="col-md-6">
<input type="radio" name="join_preference_fasting" id="join_fasting_yes" value="Yes" <?php if($recData['reg_preference_fasting']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3">
  <input type="radio" name="join_preference_fasting" id="join_fasting_no" value="No" <?php if($recData['reg_preference_fasting']=="No"){?> checked <?php }?>> No
  </div>
  
      </div>
      </div>
      
      
      
      
<div <?php if(!empty($recData['reg_preference_religion']) && $recData['reg_preference_religion']=="Hindu"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="hindu">      


<div class="col-md-12 pd-msof" >
  <div class="col-md-3">
  <span class="font-red">*</span>Gotra</div>
  <div class="col-md-9">

 <input type="text" placeholder=" Enter Your Gotra" name="join_preference_gotra_hindu" id="join_preference_gotra_hindu" value="<?=$recData['reg_preference_gotra']?>" class="dsbo-fom-1">

      </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Dosh</div>
   <div class="col-md-6">
  <input type="radio" name="join_preference_dosh_hindu" id="join_dosh_hindu_yes" value="Yes" <?php if($recData['reg_preference_dosh']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3">
  <input type="radio" name="join_preference_dosh_hindu" id="join_dosh_hindu_no" value="No" <?php if($recData['reg_preference_dosh']=="No"){?> checked <?php }?>> No
  </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Star</div>
  
 <div class="col-md-6">
  <input type="radio" name="join_preference_star_hindu" id="join_star_hindu_yes" value="Yes" <?php if($recData['reg_preference_star']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3">
  <input type="radio" name="join_preference_star_hindu" id="join_star_hindu_no" value="No" <?php if($recData['reg_preference_star']=="No"){?> checked <?php }?>> No
  </div>
  
      </div>
      </div>
      
      
<div <?php if(!empty($recData['reg_preference_religion']) && $recData['reg_preference_religion']=="Sikh"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="sikh">      


  <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Wearing Dastar/Pagg</div>
   <div class="col-md-6">
  <input type="radio" name="join_preference_dastar" id="join_dastar_yes" value="Yes" <?php if($recData['reg_preference_dastar']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3">
  <input type="radio" name="join_preference_dastar" id="join_dastar_no" value="No" <?php if($recData['reg_preference_dastar']=="No"){?> checked <?php }?>> No
  </div>
      </div>
      
      </div>
      
      
<div <?php if(!empty($recData['reg_preference_religion']) && $recData['reg_preference_religion']=="Jain"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="jain">      


<div class="col-md-12 pd-msof" >
  <div class="col-md-3">
  <span class="font-red">*</span>Gotra</div>
  <div class="col-md-9">

 <input type="text" placeholder=" Enter Your Gotra" name="join_preference_gotra_jain" id="join_preference_gotra_jain" value="<?=$recData['reg_preference_gotra']?>" class="dsbo-fom-1">

      </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Dosh</div>
   <div class="col-md-6">
  <input type="radio" name="join_preference_dosh_jain" id="join_dosh_jain_yes" value="Yes" <?php if($recData['reg_preference_dosh']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3">
  <input type="radio" name="join_preference_dosh_jain" id="join_dosh_jain_no" value="No" <?php if($recData['reg_preference_dosh']=="No"){?> checked <?php }?>> No
  </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Star</div>
  
 <div class="col-md-6">
  <input type="radio" name="join_preference_star_jain" id="join_star_jain_yes" value="Yes" <?php if($recData['reg_preference_star']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3">
  <input type="radio" name="join_preference_star_jain" id="join_star_jain_no" value="No" <?php if($recData['reg_preference_star']=="No"){?> checked <?php }?>> No
  </div>
  
      </div>
      </div>                  
      





<!--  RELIGION NEW END --->



<!--- RELIGION PREVIOUS --->       
<?php /*?><div class="col-md-12 bgmsf1">
<div class="col-md-12 pd-msof">
<div class="col-md-3"><span class="font-red">*</span>Religion</div>
<div class="col-md-9">
<select class="dsbo-fom-1" name="join_preference_religion" id="join_preference_religion" onChange="byReligion(this.value)"> 
<option value="0">----Select Religion----</option>
<?php
$sql="SELECT * FROM tbl_community WHERE c_status='Active' AND c_parent_id='0'";
$dataCommunity=db_query($sql);
$countCommunity=mysqli_num_rows($dataCommunity);
if($countCommunity){
while($recCommunity=mysqli_fetch_array($dataCommunity)){	
?>
<option value="<?=$recCommunity['c_title']?>" <?php if($recData['reg_preference_religion']==$recCommunity['c_title']){?> selected<?php }?> >
<?=$recCommunity['c_title']?></option>
<?php
}
}
?>
</select>
</div>
</div>
</div><?php */?>       
       
       
<?php /*?><div class="col-lg-12 no-padd" id="community_load_area">

<div class="col-md-12 pd-msof">

<div class="col-lg-12 no-padd" >

<div class="col-md-3">
<span class="font-red">*</span>Community</div>
<div class="col-md-9">
<select class="dsbo-fom-1" name="join_preference_cast" id="join_preference_cast">
<option  value="0">----Select Community----</option>      
<?php if(!empty($recData['reg_preference_cast'])){?>
<option value="<?=$recData['reg_preference_cast']?>" selected><?=$recData['reg_preference_cast']?></option>
<?php }?>
</select>
</div>
</div>

</div>

<div class="col-md-12 pd-msof">
<div class="col-md-3">
<span class="font-red">*</span>Sub Community</div>
<div class="col-md-9">
<input type="text" placeholder="Enter Sub Community" name="join_preference_sub_cast" id="join_preference_sub_cast" value="<?=$recData['reg_preference_sub_cast']?>" class="dsbo-fom-1">
</div>
</div>
</div><?php */?>


      
     
      
<?php /*?><div <?php if(!empty($recData['reg_preference_religion']) && $recData['reg_preference_religion']=="Muslim"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="muslim">      


<div class="col-md-12 pd-msof" >
  <div class="col-md-3">
  <span class="font-red">*</span>Namaaz / Salaah</div>
  <div class="col-md-9">

<select class="dsbo-fom-1"  name="join_preference_namaz" id="join_preference_namaz">
    
<option  value="0">----Select Namaaz / Salaah----</option>
<option value="Five times" label="Five times" <?php if($recData['reg_preference_namaz']=="Five times"){?> selected<?php }?>   >Five times</option>
<option value="Only on Jummah" label="Only on Jummah" <?php if($recData['reg_preference_namaz']=="Only on Jummah"){?> selected<?php }?>>Only on Jummah</option>
<option value="During Ramadan" label="During Ramadan" <?php if($recData['reg_preference_namaz']=="During Ramadan"){?> selected<?php }?> >During Ramadan</option>
<option value="Occasionally" label="Occasionally" <?php if($recData['reg_preference_namaz']=="Occasionally"){?> selected<?php }?>  >Occasionally</option>

</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Zakaat</div>
   <div class="col-md-6">
  <input type="radio" name="join_preference_zakaat" id="join_preference_zakaat_yes" value="Yes" <?php if($recData['reg_preference_zakaat']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3">
  <input type="radio" name="join_preference_zakaat" id="join_preference_zakaat_no" value="No" <?php if($recData['reg_preference_zakaat']=="No"){?> checked <?php }?>> No
  </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Fasting in Ramadan</div>
  
 <div class="col-md-6">
  <input type="radio" name="join_preference_fasting" id="join_preference_fasting_yes" value="Yes" <?php if($recData['reg_preference_fasting']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3">
  <input type="radio" name="join_preference_fasting" id="join_preference_fasting_no" value="No" <?php if($recData['reg_preference_fasting']=="No"){?> checked <?php }?>> No
  </div>
  
      </div>
      </div><?php */?>
      

      
       </div>
       <div class="clearfix"></div>
      
					</div>
                    
                    
                    
                    
                    
                     <h3 onClick="validateAll('Basic')" id="location-spot" >Location Preference<span class="arrow-r"></span></h3>
					<div>
<p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
       <div class="col-md-12 bgmsf1">
        <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Country</div>
  <div class="col-md-9">
<select class="dsbo-fom-1 boot-multiselect-demo" multiple="multiple" name="join_preference_country_id" id="join_preference_country_id">
<?php
if($recData['reg_country_id']!=""){
$sql_country=db_query("select * from tbl_country_master where 1 and status='Active'");
if(mysqli_num_rows($sql_country)>0){
while($data=mysqli_fetch_array($sql_country)){
@extract($data);
?>
<option value="<?=$data['contId']?>"  <?php if($recData['reg_preference_country_id']==$data['contId']){?> selected <?php }else if($data['contId']==98 && empty($recData['reg_preference_country_id'])){?> selected <?php }?>>
<?=$data['contName']?>
</option>
<?
}
}
}
?>
</select>
</div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>State</div>
  <div class="col-md-9" id="constate">

    <input type="text" class="dsbo-fom-1" name="join_preference_state_name" id="join_preference_state_name" value="<?=$recData['reg_preference_state_name']?>">

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  District/City</div>
  <div class="col-md-9">
      <input type="text" placeholder="Enter city name" name="join_preference_city" id="join_preference_city" value="<?=$recData['reg_preference_city']?>" class="dsbo-fom-1">

      </div>
      </div>
       
       </div>
       <div class="clearfix"></div>
       </div>
                     <!------------------->
   
                    
         <!----------3rd----------->
<h3 onClick="validateAll('Location')" id="professional-spot" >Professional Preference<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Highest Education</div>
  <div class="col-md-9">
  
<select class="dsbo-fom-1" name="join_preference_highest_edu" id="join_preference_highest_edu">
<option value="0" >-- Select Highest Education--</option>
<optgroup label="Engineering/Design">
<option value="B.E/B.Tech" <?php if($recData['reg_preference_highest_edu']=="B.E/B.Tech"){?> selected<?php }?> >-  B.E/B.Tech</option>
<option value="B.Pharma" <?php if($recData['reg_preference_highest_edu']=="B.Pharma"){?> selected<?php }?>>-  B.Pharma</option>
<option value="M.E/M.Tech" <?php if($recData['reg_preference_highest_edu']=="M.E/M.Tech"){?> selected<?php }?>>-  M.E/M.Tech</option>
<option value="M.Pharma" <?php if($recData['reg_preference_highest_edu']=="M.Pharma"){?> selected<?php }?>>-  M.Pharma</option>
<option value="M.S. (Engineering)" <?php if($recData['reg_preference_highest_edu']=="M.S. (Engineering)"){?> selected<?php }?>>-  M.S. (Engineering)</option>
<option value="B.Arch" <?php if($recData['reg_preference_highest_edu']=="B.Arch"){?> selected<?php }?>>-  B.Arch</option>
<option value="M.Arch" <?php if($recData['reg_preference_highest_edu']=="M.Arch"){?> selected<?php }?>>-  M.Arch</option>
<option value="B.Des" <?php if($recData['reg_preference_highest_edu']=="B.Des"){?> selected<?php }?>>-  B.Des</option>
<option value="M.Des" <?php if($recData['reg_preference_highest_edu']=="M.Des"){?> selected<?php }?>>-  M.Des</option>

</optgroup>
<optgroup label="Computers:">
<option value="MCA/PGDCA" <?php if($recData['reg_preference_highest_edu']=="MCA/PGDCA"){?> selected<?php }?> >-  MCA/PGDCA</option>
<option value="BCA" <?php if($recData['reg_preference_highest_edu']=="BCA"){?> selected<?php }?> >-  BCA</option>
<option value="B.IT" <?php if($recData['reg_preference_highest_edu']=="B.IT"){?> selected<?php }?> >-  B.IT</option>
</optgroup>

</optgroup>
<optgroup label="Finance/Commerce:">
<option value="B.Com" <?php if($recData['reg_preference_highest_edu']=="B.Com"){?> selected<?php }?> >-   B.Com</option>
<option value="CA" <?php if($recData['reg_preference_highest_edu']=="CA"){?> selected<?php }?>>-  CA</option>
<option value="CS" <?php if($recData['reg_preference_highest_edu']=="CS"){?> selected<?php }?>>-   CS</option>
<option value="ICWA" <?php if($recData['reg_preference_highest_edu']=="ICWA"){?> selected<?php }?>>-  ICWA</option>
<option value="M.Com" <?php if($recData['reg_preference_highest_edu']=="M.Com"){?> selected<?php }?>>-   M.Com</option>
<option value="CFA" <?php if($recData['reg_preference_highest_edu']=="CFA"){?> selected<?php }?>>-  CFA</option>
</optgroup>
<optgroup label="Management:">
<option value="MBA/PGDM" <?php if($recData['reg_preference_highest_edu']=="MBA/PGDM"){?> selected<?php }?>>-  MBA/PGDM</option>
<option value="BBA" <?php if($recData['reg_preference_highest_edu']=="BBA"){?> selected<?php }?>>-   BBA</option>
<option value="BHM" <?php if($recData['reg_preference_highest_edu']=="BHM"){?> selected<?php }?>>-   BHM</option>
</optgroup>
<optgroup label="Medicine:">
<option value="MBBS" <?php if($recData['reg_preference_highest_edu']=="MBBS"){?> selected<?php }?>>-  MBBS</option>
<option value="M.D." <?php if($recData['reg_preference_highest_edu']=="M.D."){?> selected<?php }?>>-   M.D.</option>
<option value="BAMS" <?php if($recData['reg_preference_highest_edu']=="BAMS"){?> selected<?php }?>>-  BAMS</option>

<option value="BHMS" <?php if($recData['reg_preference_highest_edu']=="BHMS"){?> selected<?php }?>>-  BHMS</option>
<option value="BDS" <?php if($recData['reg_preference_highest_edu']=="BDS"){?> selected<?php }?>>-  BDS</option>
<option value="M.S. (Medicine)" <?php if($recData['reg_preference_highest_edu']=="M.S. (Medicine)"){?> selected<?php }?>>-  M.S. (Medicine)</option>
<option value="MVSc." <?php if($recData['reg_preference_highest_edu']=="MVSc."){?> selected<?php }?>>-  MVSc.</option>
<option value="BVSc." <?php if($recData['reg_preference_highest_edu']=="BVSc."){?> selected<?php }?>>-  BVSc.</option>
<option value="MDS" <?php if($recData['reg_preference_highest_edu']=="MDS"){?> selected<?php }?>>-  MDS</option>
<option value="BPT" <?php if($recData['reg_preference_highest_edu']=="BPT"){?> selected<?php }?>>-   BPT</option>
<option value="MPT" <?php if($recData['reg_preference_highest_edu']=="MPT"){?> selected<?php }?>>-   MPT</option>
<option value="DM" <?php if($recData['reg_preference_highest_edu']=="DM"){?> selected<?php }?>>-  DM</option>
<option value="MCh" <?php if($recData['reg_preference_highest_edu']=="MCh"){?> selected<?php }?>>-  MCh</option>
</optgroup>
<optgroup label="Law:" >
<option value="BL /LLB" <?php if($recData['reg_preference_highest_edu']=="BL /LLB"){?> selected<?php }?>>-   BL /LLB</option>
<option value="ML/LLM" <?php if($recData['reg_preference_highest_edu']=="ML/LLM"){?> selected<?php }?>>-  ML/LLM</option>
</optgroup>
<optgroup label="Arts/Science:">
<option value="B.A." <?php if($recData['reg_preference_highest_edu']=="B.A."){?> selected<?php }?>>-   B.A.</option>
<option value="B.Sc" <?php if($recData['reg_preference_highest_edu']=="B.Sc"){?> selected<?php }?>>-  B.Sc</option>
<option value="M.Sc" <?php if($recData['reg_preference_highest_edu']=="M.Sc"){?> selected<?php }?>>-  M.Sc</option>
<option value="B.Ed" <?php if($recData['reg_preference_highest_edu']=="B.Ed"){?> selected<?php }?>>-   B.Ed</option>
<option value="M.Ed" <?php if($recData['reg_preference_highest_edu']=="M.Ed"){?> selected<?php }?>>-  M.Ed</option>
<option value="MSW" <?php if($recData['reg_preference_highest_edu']=="MSW"){?> selected<?php }?>>-  MSW</option>

<option value="BFA" <?php if($recData['reg_preference_highest_edu']=="BFA"){?> selected<?php }?>>-   BFA</option>
<option value="MFA" <?php if($recData['reg_preference_highest_edu']=="MFA"){?> selected<?php }?>>-  MFA</option>
<option value="BJMC" <?php if($recData['reg_preference_highest_edu']=="BJMC"){?> selected<?php }?>>-  BJMC</option>
<option value="MJMC" <?php if($recData['reg_preference_highest_edu']=="MJMC"){?> selected<?php }?>>-  MJMC</option>
</optgroup>

<optgroup label="Doctorate:">
<option value="Ph. D" <?php if($recData['reg_preference_highest_edu']=="Ph. D"){?> selected<?php }?>>-   Ph. D</option>
<option value="M.Phil" <?php if($recData['reg_preference_highest_edu']=="M.Phil"){?> selected<?php }?>>-  M.Phil</option>
</optgroup>

<optgroup label="Non-Graduate:">
<option value="Diploma" <?php if($recData['reg_preference_highest_edu']=="Diploma"){?> selected<?php }?>>-   Diploma</option>
<option value="High School" <?php if($recData['reg_preference_highest_edu']=="High School"){?> selected<?php }?>>-  High School</option>
<option value="Trade School" <?php if($recData['reg_preference_highest_edu']=="Trade School"){?> selected<?php }?>>-   Trade School</option>
<option value="Other" <?php if($recData['reg_preference_highest_edu']=="Other"){?> selected<?php }?>>-  Other</option>
</optgroup>

</select>
  


      </div>
      </div>
      
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Occupation</div>
  <div class="col-md-9">
  
<select class="dsbo-fom-1" name="join_preference_occupation" id="join_preference_occupation">
       <option  value="">----Select Occupation----</option>
<option value="Any" <?php if($recData['reg_preference_occupation']=="Any"){?> selected<?php }?> >Any</option>
<option value="Software Professional" <?php if($recData['reg_preference_occupation']=="Software Professional"){?> selected<?php }?> >Software Professional</option>
<option value="Hardware Professional" <?php if($recData['reg_preference_occupation']=="Hardware Professional"){?> selected<?php }?> >Hardware Professional</option>
<option value="Engineer - Non IT" <?php if($recData['reg_preference_occupation']=="Engineer - Non IT"){?> selected<?php }?>>Engineer - Non IT</option>
<option value="Teaching / Academician" <?php if($recData['reg_preference_occupation']=="Teaching / Academician"){?> selected<?php }?>>Teaching / Academician</option>
<option value="Professor / Lecturer" <?php if($recData['reg_preference_occupation']=="Professor / Lecturer"){?> selected<?php }?> >Professor / Lecturer</option>
<option value="Education Professional" <?php if($recData['reg_preference_occupation']=="Education Professional"){?> selected<?php }?> >Education Professional</option>
<option value="Chartered Accountant" <?php if($recData['reg_preference_occupation']=="Chartered Accountant"){?> selected<?php }?> >Chartered Accountant</option>
<option value="Accounts/Finance Professional" <?php if($recData['reg_preference_occupation']=="Accounts/Finance Professional"){?> selected<?php }?>>Accounts/Finance Professional</option>
<option value="Auditor" <?php if($recData['reg_preference_occupation']=="Auditor"){?> selected<?php }?>>Auditor</option>
<option value="Company Secretary" <?php if($recData['reg_preference_occupation']=="Company Secretary"){?> selected<?php }?> >Company Secretary</option>
<option value="Doctor" <?php if($recData['reg_preference_occupation']=="Doctor"){?> selected<?php }?>>Doctor</option>
<option value="Nurse" <?php if($recData['reg_preference_occupation']=="Nurse"){?> selected<?php }?> >Nurse</option>
<option value="Health Care Professional" <?php if($recData['reg_preference_occupation']=="Health Care Professional"){?> selected<?php }?>>Health Care Professional</option>
<option value="Paramedical Professional" <?php if($recData['reg_preference_occupation']=="Paramedical Professional"){?> selected<?php }?> >Paramedical Professional</option>
<option value="Banking Service Professional" <?php if($recData['reg_preference_occupation']=="Banking Service Professional"){?> selected<?php }?> >Banking Service Professional</option>
<option value="Lawyer & Legal Professional" <?php if($recData['reg_preference_occupation']=="Lawyer & Legal Professional"){?> selected<?php }?> >Lawyer & Legal Professional</option>
<option value="Law Enforcement Officer" <?php if($recData['reg_preference_occupation']=="Law Enforcement Officer"){?> selected<?php }?>>Law Enforcement Officer</option>
<option value="Architect" <?php if($recData['reg_preference_occupation']=="Architect"){?> selected<?php }?> >Architect</option>
<option value="Interior Designer" <?php if($recData['reg_preference_occupation']=="Interior Designer"){?> selected<?php }?>>Interior Designer</option>
<option value="Advertising / PR Professional" <?php if($recData['reg_preference_occupation']=="Advertising / PR Professional"){?> selected<?php }?> >Advertising / PR Professional</option>
<option value="Media Professional" <?php if($recData['reg_preference_occupation']=="Media Professional"){?> selected<?php }?> >Media Professional</option>
<option value="Entertainment Professional" <?php if($recData['reg_preference_occupation']=="Entertainment Professional"){?> selected<?php }?>>Entertainment Professional</option>
<option value="Fashion Designer" <?php if($recData['reg_preference_occupation']=="Fashion Designer"){?> selected<?php }?> >Fashion Designer</option>
<option value="Event Management Professional" <?php if($recData['reg_preference_occupation']=="Event Management Professional"){?> selected<?php }?> >Event Management Professional</option>
<option value="Journalist" <?php if($recData['reg_preference_occupation']=="Journalist"){?> selected<?php }?> >Journalist</option>
<option value="Air Hostess" <?php if($recData['reg_preference_occupation']=="Air Hostess"){?> selected<?php }?>  >Air Hostess</option>
<option value="Airline Professional" <?php if($recData['reg_preference_occupation']=="Airline Professional"){?> selected<?php }?>>Airline Professional</option>
<option value="Pilot" <?php if($recData['reg_preference_occupation']=="Pilot"){?> selected<?php }?> >Pilot</option>
<option value="Mariner / Merchant Navy" <?php if($recData['reg_preference_occupation']=="Mariner / Merchant Navy"){?> selected<?php }?> >Mariner / Merchant Navy</option>
<option value="Beautician" <?php if($recData['reg_preference_occupation']=="Beautician"){?> selected<?php }?>>Beautician</option>
<option value="Hotel / Hospitality Professional" <?php if($recData['reg_preference_occupation']=="Hotel / Hospitality Professional"){?> selected<?php }?> >Hotel / Hospitality Professional</option>
<option value="Scientist / Researcher" <?php if($recData['reg_preference_occupation']=="Scientist / Researcher"){?> selected<?php }?> >Scientist / Researcher</option>
<option value="Social Worker" <?php if($recData['reg_preference_occupation']=="Social Worker"){?> selected<?php }?> >Social Worker</option>
<option value="Agriculture &amp; Farming Professional" <?php if($recData['reg_preference_occupation']=="Agriculture &amp; Farming Professional"){?> selected<?php }?>>Agriculture & Farming Professional</option>
<option value="Arts &amp; Craftsman" <?php if($recData['reg_preference_occupation']=="Arts &amp; Craftsman"){?> selected<?php }?>>Arts & Craftsman</option>
<option value="Administrative Professional" <?php if($recData['reg_preference_occupation']=="Administrative Professional"){?> selected<?php }?> >Administrative Professional</option>
<option value="Customer Care Professional" <?php if($recData['reg_preference_occupation']=="Customer Care Professional"){?> selected<?php }?> >Customer Care Professional</option>
<option value="CXO / President, Director, Chairman" <?php if($recData['reg_preference_occupation']=="CXO / President, Director, Chairman"){?> selected<?php }?> >CXO / President, Director, Chairman</option>
<option value="Marketing Professional" <?php if($recData['reg_preference_occupation']=="Marketing Professional"){?> selected<?php }?> >Marketing Professional</option>
<option value="Sales Professional" <?php if($recData['reg_preference_occupation']=="Sales Professional"){?> selected<?php }?> >Sales Professional</option>
<option value="Technician" <?php if($recData['reg_preference_occupation']=="Technician"){?> selected<?php }?>>Technician</option>
<option value="Consultant" <?php if($recData['reg_preference_occupation']=="Consultant"){?> selected<?php }?>>Consultant</option>
<option value="Clerk" <?php if($recData['reg_preference_occupation']=="Clerk"){?> selected<?php }?> >Clerk</option>
<option value="Officer" <?php if($recData['reg_preference_occupation']=="Officer"){?> selected<?php }?>>Officer</option>
<option value="Supervisor" <?php if($recData['reg_preference_occupation']=="Supervisor"){?> selected<?php }?> >Supervisor</option>
<option value="Manager" <?php if($recData['reg_preference_occupation']=="Manager"){?> selected<?php }?> >Manager</option>
<option value="Executive" <?php if($recData['reg_preference_occupation']=="Executive"){?> selected<?php }?>  >Executive</option>
<option value="Sportsman" <?php if($recData['reg_preference_occupation']=="Sportsman"){?> selected<?php }?>  >Sportsman</option>
<option value="Civil Services (IAS/IPS/IRS/IES/IFS)" <?php if($recData['reg_preference_occupation']=="Civil Services (IAS/IPS/IRS/IES/IFS)"){?> selected<?php }?> >Civil Services (IAS/IPS/IRS/IES/IFS)</option>
<option value="Army" <?php if($recData['reg_preference_occupation']=="Army"){?> selected<?php }?> >Army</option>
<option value="Navy" <?php if($recData['reg_preference_occupation']=="Navy"){?> selected<?php }?>>Navy</option>
<option value="Airforce" <?php if($recData['reg_preference_occupation']=="Airforce"){?> selected<?php }?> >Airforce</option>
<option value="Human Resources Professional" <?php if($recData['reg_preference_occupation']=="Human Resources Professional"){?> selected<?php }?> >Human Resources Professional</option>
<option value="Financial Analyst / Planning" <?php if($recData['reg_preference_occupation']=="Financial Analyst / Planning"){?> selected<?php }?> >Financial Analyst / Planning</option>
<option value="Designer - IT & Engineering" <?php if($recData['reg_preference_occupation']=="Designer - IT & Engineering"){?> selected<?php }?> >Designer - IT & Engineering</option>
<option value="Designer - Media & Entertainment" <?php if($recData['reg_preference_occupation']=="Designer - Media & Entertainment"){?> selected<?php }?> >Designer - Media & Entertainment</option>
<option value="Student" <?php if($recData['reg_preference_occupation']=="Student"){?> selected<?php }?> >Student</option>
<option value="Librarian" <?php if($recData['reg_preference_occupation']=="Librarian"){?> selected<?php }?> >Librarian</option>
<option value="Financial Accountant" <?php if($recData['reg_preference_occupation']=="Financial Accountant"){?> selected<?php }?> >Financial Accountant</option>
<option value="Business Analyst" <?php if($recData['reg_preference_occupation']=="Business Analyst"){?> selected<?php }?> >Business Analyst</option>
<option value="Business Owner / Entrepreneur" <?php if($recData['reg_preference_occupation']=="Business Owner / Entrepreneur"){?> selected<?php }?> >Business Owner / Entrepreneur</option>
<option value="Retired" <?php if($recData['reg_preference_occupation']=="Retired"){?> selected<?php }?> >Retired</option>
<option value="Others" <?php if($recData['reg_preference_occupation']=="Others"){?> selected<?php }?> >Others</option>
<option value="Business" <?php if($recData['reg_preference_occupation']=="Business"){?> selected<?php }?>>Business</option>
<option value="Not working" <?php if($recData['reg_preference_occupation']=="Not working"){?> selected<?php }?> >Not working</option>
<option value="Doctor" <?php if($recData['reg_preference_occupation']=="Doctor"){?> selected<?php }?> >Doctor</option>
<option value="Engineer" <?php if($recData['reg_preference_occupation']=="Engineer"){?> selected<?php }?> >Engineer</option>

</select>


</div>
</div>
<div class="col-md-12 pd-msof">
<div class="col-md-3">
 Annual income</div>
  <div class="col-md-9">
  
<select class="dsbo-fom-1" name="join_preference_member_annual_income" id="join_preference_member_annual_income">
<option  value="0">----Select Annual income----</option>
       

<option  value="Upto INR 1 Lakh" <?php if($recData['reg_preference_member_annual_income']=="Upto INR 1 Lakh"){?> selected <?php }?> >Upto INR 1 Lakh</option>

<option  value="INR 1 Lakh to 2 Lakh" <?php if($recData['reg_preference_member_annual_income']=="INR 1 Lakh to 2 Lakh"){?> selected <?php }?> >INR 1 Lakh to 2 Lakh</option>

<option  value="INR 2 Lakh to 4 Lakh" <?php if($recData['reg_preference_member_annual_income']=="INR 2 Lakh to 4 Lakh"){?> selected <?php }?> >INR 2 Lakh to 4 Lakh</option>

<option  value="INR 4 Lakh to 7 Lakh" <?php if($recData['reg_preference_member_annual_income']=="INR 4 Lakh to 7 Lakh"){?> selected <?php }?> >INR 4 Lakh to 7 Lakh</option>


<option  value="INR 7 Lakh to 10 Lakh" <?php if($recData['reg_preference_member_annual_income']=="INR 7 Lakh to 10 Lakh"){?> selected <?php }?> >INR 7 Lakh to 10 Lakh</option>

<option  value="INR 10 Lakh to 15 Lakh" <?php if($recData['reg_preference_member_annual_income']=="INR 10 Lakh to 15 Lakh"){?> selected <?php }?> >INR 10 Lakh to 15 Lakh</option>

<option  value="INR 15 Lakh to 20 Lakh" <?php if($recData['reg_preference_member_annual_income']=="INR 15 Lakh to 20 Lakh"){?> selected <?php }?> >INR 15 Lakh to 20 Lakh</option>


<option  value="INR 20 Lakh to 30 Lakh" <?php if($recData['reg_preference_member_annual_income']=="INR 20 Lakh to 30 Lakh"){?> selected <?php }?> >INR 20 Lakh to 30 Lakh</option>

<option  value="INR 30 Lakh to 50 Lakh" <?php if($recData['reg_preference_member_annual_income']=="INR 30 Lakh to 50 Lakh"){?> selected <?php }?> >INR 30 Lakh to 50 Lakh</option>

<option  value="INR 50 Lakh to 75 Lakh" <?php if($recData['reg_preference_member_annual_income']=="INR 50 Lakh to 75 Lakh"){?> selected <?php }?> >INR 50 Lakh to 75 Lakh</option>

<option  value="INR 75 Lakh to 1 Crore" <?php if($recData['reg_preference_member_annual_income']=="INR 75 Lakh to 1 Crore"){?> selected <?php }?> >INR 75 Lakh to 1 Crore</option>

<option  value="INR 1 Crore &amp; above" <?php if($recData['reg_preference_member_annual_income']=="INR 1 Crore &amp; above"){?> selected <?php }?> >INR 1 Crore &amp; above</option>

<option  value="Not applicable" <?php if($recData['reg_preference_member_annual_income']=="Not applicable"){?> selected <?php }?> >Not applicable</option>


      </select>
      


      </div>
      </div>
      
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Working Location</div>
  <div class="col-md-9">
  <input type="text" placeholder="----Enter Working Location----" name="join_preference_working_location" id="join_preference_working_location" value="<?=$recData['reg_preference_working_location']?>" class="dsbo-fom-1">
      </div>
      </div>
      
       </div>
         <div class="clearfix"></div>
       </div>
       <!----------->
      
<h3 onClick="validateAll('Profession')" id="lifestyle-spot">Lifestyle<span class="arrow-r"></span></h3>
					<div>
       <div class="col-md-12 bgmsf1">
       <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
       
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Appearance </div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_preference_appearance" id="join_preference_appearance">
       <option  value="0">----Select Appearance----</option>
       <option  value="Fair"  <?php if($recData['reg_preference_appearance']=="Fair"){?> selected <?php }?>  >Fair</option>
       <option  value="Wheatis" <?php if($recData['reg_preference_appearance']=="Wheatis"){?> selected <?php }?> >Wheatis</option>
       <option  value="Dark" <?php if($recData['reg_preference_appearance']=="Dark"){?> selected <?php }?>  > Dark</option>
      </select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Living Status</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_preference_living_status" id="join_preference_living_status">
       <option  value="0">----Select Living Status----</option>
<option  value="Traditional" <?php if($recData['reg_preference_living_status']=="Traditional"){?> selected <?php }?>>Traditional</option>
<option  value="Moderate" <?php if($recData['reg_preference_living_status']=="Moderate"){?> selected <?php }?>>Moderate</option>
<option  value="Liberal" <?php if($recData['reg_preference_living_status']=="Liberal"){?> selected <?php }?>>Liberal</option>
      </select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Physical Status</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_preference_physical_status" id="join_preference_physical_status" >
       <option  value="0">----Select Physical Status----</option>
       <option  value="Slim" <?php if($recData['reg_preference_physical_status']=="Slim"){?> selected <?php }?> >Slim</option>
       <option  value="Average/Athletic" <?php if($recData['reg_preference_physical_status']=="Average/Athletic"){?> selected <?php }?> >Average/Athletic</option>
       <option  value="Heavy" <?php if($recData['reg_preference_physical_status']=="Heavy"){?> selected <?php }?>>Heavy</option>
      </select>
      </div>
      </div>
       </div>
         <div class="clearfix"></div>
       </div>
       
       <h3 onClick="validateAll('Lifestyle')" id="habits-spot">Habits<span class="arrow-r"></span></h3>
					<div>
       <div class="col-md-12 bgmsf1">
<p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Eating Habits</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_preference_eating_habits" id="join_preference_eating_habits">
       <option  value="0">----Select Eating Habits--</option>
<option  value="Veg" <?php if($recData['reg_preference_eating_habits']=="Veg"){?> selected <?php }?>>Veg</option>
<option  value="Non-Veg" <?php if($recData['reg_preference_eating_habits']=="Non-Veg"){?> selected <?php }?>>Non-Veg</option>
<option  value="Eggiterian" <?php if($recData['reg_preference_eating_habits']=="Eggiterian"){?> selected <?php }?>>Eggiterian</option> 
      </select>
      </div>
      </div>
      
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Smoking Habits</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_preference_smoking_habits" id="join_preference_smoking_habits">
       <option  value="0" >----Select Smoking Habits----</option>
       <option  value="Non-smoker" <?php if($recData['reg_preference_smoking_habits']=="Non-smoker"){?> selected <?php }?>>Non-smoker</option>
       <option  value="Regular smoker" <?php if($recData['reg_preference_smoking_habits']=="Regular smoker"){?> selected <?php }?>>Regular smoker</option>
      </select>
      </div>
      </div>
      
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Drinking Habits</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_preference_drinking_habits" id="join_preference_drinking_habits">
       <option  value="0">----Select Drinking Habits----</option>
       <option  value="Non-drinker"  <?php if($recData['reg_preference_drinking_habits']=="Non-drinker"){?> selected <?php }?>>Non-drinker</option>
       <option  value="Drinks Occasionally"  <?php if($recData['reg_preference_drinking_habits']=="Drinks Occasionally"){?> selected <?php }?>>Drinks Occasionally</option>
      </select>
      </div>
      </div>
      

      
       </div>
         <div class="clearfix"></div>
       </div>
      
        <h3 onClick="validateAll('Habits')" id="about-spot">A Few Words About My Partner Preference<span class="arrow-r"></span></h3>
					<div>
<p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>

<div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
 <span class="font-red">*</span>About My Partner Preference</div>
  <div class="col-md-9">
  
  
<textarea onkeydown="textCounter(document.getElementById('join_preference_mem_myself'),document.getElementById('remLen'),100);" onkeyup="textCounter(document.getElementById('join_preference_mem_myself'),document.getElementById('remLen'),100); "  class="dsbo-fom-1 tex-area" name="join_preference_mem_myself" id="join_preference_mem_myself" placeholder="Prospective matches would like to know what you are like, as a person. Write about your partner. "><?=$recData['join_preference_mem_myself']?></textarea>

<p class="abt-me">
<span id="lbl-count-abt"><input name="remLen" type="text" id="remLen" value="0" readonly style="border:none; color:#DD0000; font-weight:bold; width:35px;margin:5px 0 0 0;text-align:center" />Characters</span>
<span class="pull-right"><span class="font-red">Note:</span> Minimum Character 100</span>
</p>  
  
  
  
  
<?php /*?><textarea onkeydown="textCounter(document.getElementById('join_preference_mem_myself'),document.getElementById('remLen'),100);" onkeyup="textCounter(document.getElementById('join_preference_mem_myself'),document.getElementById('remLen'),100); "  class="dsbo-fom-1 tex-area" name="join_preference_mem_myself" id="join_preference_mem_myself" placeholder="Prospective matches would like to know what you are like, as a person. Write about yourself. "><?=$recData['reg_preference_mem_myself']?></textarea>

<p class="abt-me">
              <input name="remLen" type="text" id="remLen" value="100" readonly style="border:none; color:#DD0000; font-weight:bold; width:35px;margin:5px 0 0 0" />Characters Remaining
              
      <span class="pull-right"><span class="font-red">Note:</span> Maximum Character 100</span>
      </p><?php */?>
      
      
      </div>
      </div>
       </div>


       
       
         <div class="clearfix"></div>
         
       </div>
       
       
       
				</div>
                
<div class="col-md-12 text-center  mt-15">
<a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1 " href="Javascript:void(0)" onClick="window.location='upload-photo.php'" ><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
Go Back</a>

<a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1 " href="Javascript:void(0)" onClick="validateAll('Myself')" ><i class="fa fa-floppy-o" aria-hidden="true"></i>
Save</a>
</div>
                

         
        </div>
        <!---end-images--->
      <div class="col-md-3">
    <div class="col-md-12 bg-clrd_3 mp_2mso">
       <div  class="col-md-12 sb-db-hdg_1">
       <div class="col-md-12">
      <h2>Recently Joined</h2>
      </div>
      
      </div>
       <div class="col-md-12 sb-db-hdg">
      <div class="col-md-12 mp_db_00 stb-bg">
      <div class="col-md-4 Sui">
        <a href=""><img src="images/visible.jpg" class="img-seq"></a>
      </div>
       <div class="col-md-8 Sui-cnt">
       <h5><a href="" class="Sui-name">Roby Roi</a></h5>
       <p>30 Yrs, 5 Ft 3 In</p>
    <p>
      
    <p class="ftsze">Lorem Ipsum is simply dummy text of the printing </p> 
     </p>
       </div>
       </div>
       <div class="col-md-12 mp_db_00 stb-bg">
      <div class="col-md-4 Sui">
        <a href=""><img src="images/15.jpg" class="img-seq"></a>
      </div>
       <div class="col-md-8 Sui-cnt">
       <h5><a href="" class="Sui-name">Seema</a></h5>
       <p>30 Yrs, 5 Ft 3 In</p>
    <p>
      
     <p class="ftsze">Lorem Ipsum is simply dummy text of the printing </p>  
     </p>
       </div>
       </div>
       <div class="col-md-12 mp_db_00 stb-bg">
      <div class="col-md-4 Sui">
        <a href=""><img src="images/profile1.jpg" class="img-seq"></a>
      </div>
       <div class="col-md-8 Sui-cnt">
       <h5><a href="" class="Sui-name">Rani Kumari</a></h5>
       <p>30 Yrs, 5 Ft 3 In</p>
    <p>
      
   <p class="ftsze">Lorem Ipsum is simply dummy text of the printing </p> 
     </p>
       </div>
       </div>
       <div class="col-md-12 mp_db_00 stb-bg">
      <div class="col-md-4 Sui">
        <a href=""><img src="images/15.jpg" class="img-seq"></a>
      </div>
       <div class="col-md-8 Sui-cnt">
       <h5><a href="" class="Sui-name">Seema</a></h5>
       <p>30 Yrs, 5 Ft 3 In</p>
    <p>
      
     <p class="ftsze">Lorem Ipsum is simply dummy text of the printing </p>  
     </p>
       </div>
       </div>
       <div class="col-md-12 mp_db_00 stb-bg">
      <div class="col-md-4 Sui">
        <a href=""><img src="images/visible.jpg" class="img-seq"></a>
      </div>
       <div class="col-md-8 Sui-cnt">
       <h5><a href="" class="Sui-name">Roby Roi</a></h5>
       <p>30 Yrs, 5 Ft 3 In</p>
    <p>
      
    <p class="ftsze">Lorem Ipsum is simply dummy text of the printing </p> 
     </p>
       </div>
       </div>
      
      <div class="col-md-12 mp_db_00 box-sdo">
                   <div class="col-md-12 next-prv text-center">
                   <p>2 of 8 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
                   </div>
                  </div>
      </div>
    </div>
    
      <!----------->
    </div>
     
    </div> 
    </div>
    </div>
</section> 

  <footer class="main-footer">
    <div class="footer-bottom">
      <div class="auto-container">
        <div class="copyright">All rights reserved � 2017 ApniMatrimony. &ensp;<span class="fa fa-heart" style="color:#fff;"></span>&ensp; Designed by : <a href="http://www.webkeyindia.com/" target="_blank">WebKeyIndia.Com - Best SEO Company In India</a></div>
    </div>
  </div>
</footer>
</div>
<div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>
<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>
<script src="<?=SITE_WS_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_WS_PATH?>/js/script.js"></script>
<script src="<?=SITE_WS_PATH?>/js/menuzord.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jPushMenu.js"></script>
<script src="<?=SITE_WS_PATH?>/js/owl.js"></script>
<script src="<?=SITE_WS_PATH?>/js/customcollection.js"></script>
<script src="<?=SITE_WS_PATH?>/js/custom1.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible.js"></script> 
<!-----left-accordian--------->
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible.js"></script> 
<script>
$('#collapse-menu').collapsible({
  contentOpen:["0",""]
});
</script>


<input type="hidden" name="validCond" id="validCond" value="0" />
<input type="hidden" name="vCount" id="vCount" value="0" />

<script>
function trim_input(str){return str.replace(/^\s*|\s*$/g,'');}

function validateAll(reqFrom){

// Basic Details
if(reqFrom=="Basic"){   // Conditional Updation

var evMarital = document.getElementById("join_preference_marital_status");
        var optionSelIndexMarital = evMarital.options[evMarital.selectedIndex].value;
        var optionSelectedTextMarital = evMarital.options[evMarital.selectedIndex].text;
		
var evTongue = document.getElementById("join_preference_mother_tongue");
        var optionSelIndexTongue = evTongue.options[evTongue.selectedIndex].value;
        var optionSelectedTextTongue = evTongue.options[evTongue.selectedIndex].text;
		


///////////////////////////  NEW SECTION START /////////////////////////////

// Religious Background

var evReligion = document.getElementById("join_preference_religion");
var optionSelIndexReligion = evReligion.options[evReligion.selectedIndex].value;
var optionSelectedTextReligion = evReligion.options[evReligion.selectedIndex].text;


//alert(optionSelIndexReligion)

var evCast= document.getElementById("join_preference_cast");
var optionSelIndexCast = evCast.options[evCast.selectedIndex].value;
var optionSelectedTextCast = evCast.options[evCast.selectedIndex].text;

var evNamaz = document.getElementById("join_preference_namaz");
var optionSelIndexNamaz = evNamaz.options[evNamaz.selectedIndex].value;
var optionSelectedTextNamaz = evNamaz.options[evNamaz.selectedIndex].text;


//////////  FOR ZAKAAT ///////////
var radios_zakaat = document.getElementsByName("join_preference_zakaat");
var zakaatValid = false;

var i = 0;
while (!zakaatValid && i < radios_zakaat.length) {
if (radios_zakaat[i].checked) zakaatValid = true;
i++;        
}
////////////////////////////////


//////////  FOR FASTING ///////////
var radios_fasting = document.getElementsByName("join_preference_fasting");
var fastingValid = false;

var i = 0;
while (!fastingValid && i < radios_fasting.length) {
if (radios_fasting[i].checked) fastingValid = true;
i++;        
}
////////////////////////////////


//////////  FOR Dosh Hindu ///////////
var radios_dosh_hindu = document.getElementsByName("join_preference_dosh_hindu");
var doshValidHindu = false;

var i = 0;
while (!doshValidHindu && i < radios_dosh_hindu.length) {
if (radios_dosh_hindu[i].checked) doshValidHindu = true;
i++;        
}
////////////////////////////////



//////////  FOR Star ///////////
var radios_star_hindu = document.getElementsByName("join_preference_star_hindu");
var starValidHindu = false;

var i = 0;
while (!starValidHindu && i < radios_star_hindu.length) {
if (radios_star_hindu[i].checked) starValidHindu = true;
i++;        
}
////////////////////////////////




//////////  FOR Dosh Jain ///////////
var radios_dosh_jain = document.getElementsByName("join_preference_dosh_jain");
var doshValidJain = false;

var i = 0;
while (!doshValidJain && i < radios_dosh_jain.length) {
if (radios_dosh_jain[i].checked) doshValidJain = true;
i++;        
}
////////////////////////////////



//////////  FOR Star JAIN ///////////
var radios_star_jain = document.getElementsByName("join_preference_star_jain");
var starValidJain = false;

var i = 0;
while (!starValidJain && i < radios_star_jain.length) {
if (radios_star_jain[i].checked) starValidJain = true;
i++;        
}
////////////////////////////////







//////////  FOR Wearing Dastar/Pagg  ///////////
var radios_dastar = document.getElementsByName("join_preference_dastar");
var dastarValid = false;

var i = 0;
while (!dastarValid && i < radios_dastar.length) {
if (radios_dastar[i].checked) dastarValid = true;
i++;        
}
////////////////////////////////



//////////////////////////  NEW SECTION END ///////////////////////////////



		
//var evReligion = document.getElementById("join_preference_religion");
//        var optionSelIndexReligion = evReligion.options[evReligion.selectedIndex].value;
//        var optionSelectedTextReligion = evReligion.options[evReligion.selectedIndex].text;	
//		
//		
//var evCast= document.getElementById("join_preference_cast");
//var optionSelIndexCast = evCast.options[evCast.selectedIndex].value;
//var optionSelectedTextCast = evCast.options[evCast.selectedIndex].text;
//
//var evNamaz = document.getElementById("join_preference_namaz");
//var optionSelIndexNamaz = evNamaz.options[evNamaz.selectedIndex].value;
//var optionSelectedTextNamaz = evNamaz.options[evNamaz.selectedIndex].text;
//
//var radios_zakaat = document.getElementsByName("join_preference_zakaat");
//var zakaatValid = false;
//
//var i = 0;
//while (!zakaatValid && i < radios_zakaat.length) {
//if (radios_zakaat[i].checked) zakaatValid = true;
//i++;        
//}
//
//
//var radios_fasting = document.getElementsByName("join_preference_fasting");
//var fastingValid = false;
//
//var i = 0;
//while (!fastingValid && i < radios_fasting.length) {
//if (radios_fasting[i].checked) fastingValid = true;
//i++;        
//}
			
		
		
if (optionSelIndexMarital == 0) {
			alert("Please choose your preference marital status !");
			document.getElementById("join_preference_marital_status").focus();
			return false;
}else if (trim_input(document.getElementById('join_preference_age_from').value)=="") {
			alert("Please enter your preference age !");
			document.getElementById("join_preference_age_from").focus();
			return false;
}else if (trim_input(document.getElementById('join_preference_age_to').value)=="") {
      alert("Please enter your preference age !");
      document.getElementById("join_preference_age_to").focus();
      return false;
}else if (trim_input(document.getElementById('join_preference_height_from').value)=="") {
      alert("Please enter your preference height !");
      document.getElementById("join_preference_height_from").focus();
      return false;
}else if (trim_input(document.getElementById('join_preference_height_to').value)=="") {
      alert("Please enter your preference height !");
      document.getElementById("join_preference_height_to").focus();
      return false;
}else if (optionSelIndexTongue == 0) {
			alert("Please choose your preference mother tongue !");
			document.getElementById("join_preference_mother_tongue").focus();
			return false;
}else 




//
if (optionSelIndexReligion == 0) {
alert("Please choose your preference religion !");
document.getElementById("join_preference_religion").focus();
return false;
}else if (optionSelIndexCast == 0) {
alert("Please choose your preference community !");
document.getElementById("join_preference_cast").focus();
return false;
}else if(trim_input(document.getElementById('join_preference_sub_cast').value)==""){
alert("Enter Your Preference Sub Community !");
document.getElementById('join_preference_sub_cast').focus();
return false;	
}else if (!document.getElementById('join_preference_sub_cast').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){
alert("Please enter only alphabets !");
document.getElementById('join_preference_sub_cast').focus();
return false;
}/*else if (optionSelIndexNamaz == 0 && optionSelIndexReligion=="Muslim") {   ////////  ========
alert("Please choose your preference namaz status!");
document.getElementById("join_preference_namaz").focus();
return false;
}else if((!zakaatValid) && optionSelIndexReligion=="Muslim"){
alert("Please choose preference zakaat status !");
document.getElementById("join_preference_zakaat").focus();	   
return false;
}else if((!fastingValid) && optionSelIndexReligion=="Muslim"){
alert("Please choose preference fasting status !");
document.getElementById("join_preference_fasting").focus();	   
return false;
}else if(trim_input(document.getElementById('join_preference_gotra_hindu').value)==""  && optionSelIndexReligion=="Hindu"){
alert("Enter Your Preference Gotra!");
document.getElementById('join_preference_gotra_hindu').focus();
return false;	
}else if (!document.getElementById('join_preference_gotra_hindu').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/) && optionSelIndexReligion=="Hindu" ){
alert("Please enter only alphabets !");
document.getElementById('join_preference_gotra_hindu').focus();
return false;
}else if(trim_input(document.getElementById('join_preference_gotra_jain').value)==""  && optionSelIndexReligion=="Jain"){
alert("Enter Your Preference Gotra!");
document.getElementById('join_preference_gotra_jain').focus();
return false;	
}else if (!document.getElementById('join_preference_gotra_jain').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/) && optionSelIndexReligion=="Jain" ){
alert("Please enter only alphabets !");
document.getElementById('join_preference_gotra_jain').focus();
return false;
}else if((!doshValidHindu) && (optionSelIndexReligion=="Hindu")){
alert("Please choose preference dosh status !");
document.getElementById("join_preference_dosh_hindu").focus();	   
return false;
}else if((!starValidHindu) && (optionSelIndexReligion=="Hindu")){
alert("Please choose preference star status !");
document.getElementById("join_preference_star_hindu").focus();	   
return false;
}else if((!doshValidJain) && (optionSelIndexReligion=="Jain")){
alert("Please choose preference dosh status !");
document.getElementById("join_preference_dosh_jain").focus();	   
return false;
}else if((!starValidJain) && (optionSelIndexReligion=="Jain")){
alert("Please choose preference star status !");
document.getElementById("join_preference_dosh_jain").focus();	   
return false;
}else if((!dastarValid) && (optionSelIndexReligion=="Sikh")){
alert("Please choose preference dastar/pagg status !");
document.getElementById("join_preference_dastar").focus();	   
return false;
//

//if (optionSelIndexReligion == 0) {
//			alert("Please choose your preference religion !");
//			document.getElementById("join_preference_religion").focus();
//			return false;
//}else if (optionSelIndexCast == 0) {
//			alert("Please choose your preference community !");
//			document.getElementById("join_preference_cast").focus();
//			return false;
//}else if(trim_input(document.getElementById('join_preference_sub_cast').value)==""){
//alert("Enter your preference sub community !");
//document.getElementById('join_preference_sub_cast').focus();
//return false;	
//}else if (!document.getElementById('join_preference_sub_cast').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){
//alert("Please enter only alphabets !");
//document.getElementById('join_sub_cast').focus();
//return false;
//}else if (optionSelIndexNamaz == 0) {
//alert("Please choose your preference namaz status!");
//document.getElementById("join_preference_namaz").focus();
//return false;
//}else if(!zakaatValid){
//alert("Please choose your preference zakaat status !");
//document.getElementById("join_preference_zakaat").focus();	   
//return false;
//}else if(!fastingValid){
//alert("Please choose your preference fasting status !");
//document.getElementById("join_preference_fasting").focus();	   
//return false;
}*/else {
// Main code start //



var join_preference_marital_status=document.getElementById('join_preference_marital_status').value;
var join_preference_age_from=document.getElementById('join_preference_age_from').value;
var join_preference_age_to=document.getElementById('join_preference_age_to').value;
var join_preference_height_from=document.getElementById('join_preference_height_from').value;
var join_preference_height_to=document.getElementById('join_preference_height_to').value;
var join_preference_mother_tongue=document.getElementById('join_preference_mother_tongue').value;

///
var join_preference_religion=document.getElementById('join_preference_religion').value;
var join_preference_cast=document.getElementById('join_preference_cast').value;
var join_preference_sub_cast=document.getElementById('join_preference_sub_cast').value;

//var join_gotra=document.getElementById('join_gotra').value;

var join_preference_gotra;
if(document.getElementById('join_preference_gotra_hindu').value!=""){
join_preference_gotra=document.getElementById('join_preference_gotra_hindu').value;
}

if(document.getElementById('join_preference_gotra_jain').value!=""){
join_preference_gotra=document.getElementById('join_preference_gotra_jain').value;
}


var join_preference_namaz=document.getElementById('join_preference_namaz').value;
//var join_zakaat=document.getElementById('join_zakaat').value;
//var join_fasting=document.getElementById('join_fasting').value;
var regID=document.getElementById('regID').value;

/// FOR ZAKAAT
var join_preference_zakaat;
if(document.getElementById('join_zakaat_yes').checked){
join_preference_zakaat=document.getElementById('join_zakaat_yes').value;
}

if(document.getElementById('join_zakaat_no').checked){
join_preference_zakaat=document.getElementById('join_zakaat_no').value;
}

// FOR FASTING
var join_preference_fasting;

if(document.getElementById('join_fasting_yes').checked){
join_preference_fasting=document.getElementById('join_fasting_yes').value;
}

if(document.getElementById('join_fasting_no').checked){
join_preference_fasting=document.getElementById('join_fasting_no').value;
}


// FOR DOSH Hindu
var join_preference_dosh;

if(document.getElementById('join_dosh_hindu_yes').checked){
join_preference_dosh=document.getElementById('join_dosh_hindu_yes').value;
}

if(document.getElementById('join_dosh_hindu_no').checked){
join_preference_dosh=document.getElementById('join_dosh_hindu_no').value;
}

if(document.getElementById('join_dosh_jain_yes').checked){
join_dosh=document.getElementById('join_dosh_jain_yes').value;
}

if(document.getElementById('join_dosh_jain_no').checked){
join_preference_dosh=document.getElementById('join_dosh_jain_no').value;
}



// FOR STAR
var join_preference_star;

if(document.getElementById('join_star_hindu_yes').checked){
join_preference_star=document.getElementById('join_star_hindu_yes').value;
}

if(document.getElementById('join_star_hindu_no').checked){
join_preference_star=document.getElementById('join_star_hindu_no').value;
}


if(document.getElementById('join_star_jain_yes').checked){
join_preference_star=document.getElementById('join_star_jain_yes').value;
}

if(document.getElementById('join_star_jain_no').checked){
join_preference_star=document.getElementById('join_star_jain_no').value;
}


// FOR dastar
var join_preference_dastar;

if(document.getElementById('join_dastar_yes').checked){
join_preference_dastar=document.getElementById('join_dastar_yes').value;
}

if(document.getElementById('join_dastar_no').checked){
join_preference_dastar=document.getElementById('join_dastar_no').value;
}

///




//var join_preference_religion=document.getElementById('join_preference_religion').value;
//var join_preference_cast=document.getElementById('join_preference_cast').value;
//var join_preference_sub_cast=document.getElementById('join_preference_sub_cast').value;
//var join_preference_namaz=document.getElementById('join_preference_namaz').value;


var regID=document.getElementById('regID').value;


//var join_preference_zakaat;
//
//if(document.getElementById('join_preference_zakaat_yes').checked){
//join_preference_zakaat=document.getElementById('join_preference_zakaat_yes').value;
//}
//
//if(document.getElementById('join_preference_zakaat_no').checked){
//join_preference_zakaat=document.getElementById('join_preference_zakaat_no').value;
//}
//
//var join_preference_fasting;
//
//if(document.getElementById('join_preference_fasting_yes').checked){
//join_preference_fasting=document.getElementById('join_preference_fasting_yes').value;
//}
//
//if(document.getElementById('join_preference_fasting_no').checked){
//join_preference_fasting=document.getElementById('join_preference_fasting_no').value;
//}

//alert(join_preference_age_to);
var param="join_preference_marital_status="+join_preference_marital_status+"&join_preference_age_from="+join_preference_age_from+"&join_preference_age_to="+join_preference_age_to+"&join_preference_height_from="+join_preference_height_from+"&join_preference_height_to="+join_preference_height_to+"&join_preference_mother_tongue="+join_preference_mother_tongue+"&join_preference_religion="+join_preference_religion+"&join_preference_cast="+join_preference_cast+"&join_preference_sub_cast="+join_preference_sub_cast+"&join_preference_namaz="+join_preference_namaz+"&join_preference_zakaat="+join_preference_zakaat+"&join_preference_fasting="+join_preference_fasting+"&join_preference_dosh="+join_preference_dosh+"&join_preference_star="+join_preference_star+"&join_preference_dastar="+join_preference_dastar+"&join_preference_gotra="+join_preference_gotra+"&regID="+regID;


	
//var param="join_preference_marital_status="+join_preference_marital_status+"&join_preference_age="+join_preference_age+"&join_preference_height="+join_preference_height+"&join_preference_mother_tongue="+join_preference_mother_tongue+"&join_preference_religion="+join_preference_religion+"&join_preference_namaz="+join_preference_namaz+"&join_preference_zakaat="+join_preference_zakaat+"&join_preference_fasting="+join_preference_fasting+"&join_preference_cast="+join_preference_cast+"&join_preference_sub_cast="+join_preference_sub_cast+"&regID="+regID;


	
	
//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=preference_basic&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
//alert(req.responseText);	
//document.getElementById("validCond").value=0;	

document.getElementById('area-title').innerHTML='Basic Detail';	
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);

//document.getElementById("validCond").value=0;

$("#validCond").val(1);
var vc=$("#vCount").val();
vc=parseInt(vc);
$("#vCount").val(vc+1);

$('html, body').animate({
        scrollTop: $("#location-spot").offset().top-50
}, 1000);

}


}

var countries_id=[];
// Location Detail Start
if(reqFrom=="Location"){  // Conditional Updation


var evCountry = document.getElementById("join_preference_country_id");
        var optionSelIndexCountry = evCountry.options[evCountry.selectedIndex].value;
        var optionSelectedTextCountry = evCountry.options[evCountry.selectedIndex].text;


/*
var evState= document.getElementById("join_preference_state_id");
        var optionSelIndexState = evState.options[evState.selectedIndex].value;
        var optionSelectedTextState = evState.options[evState.selectedIndex].text;	*/


if(optionSelIndexCountry == 0) {	
            alert("Please choose your preference country !");
			document.getElementById("join_preference_country_id").focus();
			return false;
}else if(document.getElementById("join_preference_state_name").value=="") {
            alert("Please enter your preference state !");
			document.getElementById("join_preference_state_name").focus();
			return false;
}else{


$.each($("#join_preference_country_id"),function(){
  countries_id.push($(this).val());
});
//var join_preference_country_id=document.getElementById('join_preference_country_id').value;
var join_preference_state_name=document.getElementById('join_preference_state_name').value;
var join_preference_city=document.getElementById('join_preference_city').value;
var regID=document.getElementById('regID').value;




var param="join_preference_country_id="+countries_id+"&join_preference_state_name="+join_preference_state_name+"&join_preference_city="+join_preference_city+"&regID="+regID;	

var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=preference_location&"+param;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

//alert(req.responseText)

if(req.responseText==0){
alert('Unable to save this detail.');
}else{	
document.getElementById('area-title').innerHTML='Location Detail';	
document.getElementById('for-update-popup').click();	
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);}
} 

}
}

req.open("GET",str,true);
req.send(null);

$("#validCond").val(1);
var vc=$("#vCount").val();
vc=parseInt(vc);
$("#vCount").val(vc+1);

$('html, body').animate({
        scrollTop: $("#professional-spot").offset().top-50
}, 1000);


}

}


if(reqFrom=="Profession"){  // Conditional Updation

var evHighest = document.getElementById("join_preference_highest_edu");
        var optionSelIndexHighest = evHighest.options[evHighest.selectedIndex].value;
        var optionSelectedTextHighest = evHighest.options[evHighest.selectedIndex].text;
		
		
var evOccupation = document.getElementById("join_preference_occupation");
        var optionSelIndexOccupation = evOccupation.options[evOccupation.selectedIndex].value;
        var optionSelectedTextOccupation = evOccupation.options[evOccupation.selectedIndex].text;		


if(optionSelIndexHighest == 0) {	
            alert("Please choose your preference highest education !");
			document.getElementById("join_preference_highest_edu").focus();
			return false;
}else if(optionSelIndexOccupation == 0) {	
            alert("Please choose your preference occupation !");
			document.getElementById("join_preference_occupation").focus();
			return false;
}else{

var join_preference_highest_edu=document.getElementById('join_preference_highest_edu').value;
var join_preference_occupation=document.getElementById('join_preference_occupation').value;
var join_preference_member_annual_income=document.getElementById('join_preference_member_annual_income').value;
var join_preference_working_location=document.getElementById('join_preference_working_location').value;
var regID=document.getElementById('regID').value;

var param="join_preference_highest_edu="+join_preference_highest_edu+"&join_preference_occupation="+join_preference_occupation+"&join_preference_member_annual_income="+join_preference_member_annual_income+"&join_preference_working_location="+join_preference_working_location+"&regID="+regID;

var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=preference_professional&"+param;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){


if(req.responseText==0){
	
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Professional Detail';	
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);

$("#validCond").val(1);
var vc=$("#vCount").val();
vc=parseInt(vc);
$("#vCount").val(vc+1);

$('html, body').animate({
        scrollTop: $("#lifestyle-spot").offset().top-50
}, 1000);


}
}



if(reqFrom=="Lifestyle"){  // Conditional Updation

//// Life Style & Habits
var evAppearance = document.getElementById("join_preference_appearance");
var optionSelIndexAppearance = evAppearance.options[evAppearance.selectedIndex].value;
var optionSelectedTextAppearance = evAppearance.options[evAppearance.selectedIndex].text;

var ev_physical_status = document.getElementById("join_preference_physical_status");
var optionSelIndex_physical_status = ev_physical_status.options[ev_physical_status.selectedIndex].value;
var optionSelectedText_physical_status = ev_physical_status.options[ev_physical_status.selectedIndex].text;


if (optionSelIndexAppearance == 0) {
alert("Please choose your preference appearance!");
document.getElementById("join_preference_appearance").focus();
return false;
}else if (optionSelIndex_physical_status == 0) {
alert("Please choose your preference physical status!");
document.getElementById("join_preference_physical_status").focus();
return false;
}else{

var join_preference_appearance=document.getElementById('join_preference_appearance').value;
var join_preference_living_status=document.getElementById('join_preference_living_status').value;
var join_preference_physical_status=document.getElementById('join_preference_physical_status').value;
var regID=document.getElementById('regID').value;

var param="join_preference_appearance="+join_preference_appearance+"&join_preference_living_status="+join_preference_living_status+"&join_preference_physical_status="+join_preference_physical_status+"&regID="+regID;

var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=preference_lifestyle&"+param;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Lifestyle Detail';	
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);

$("#validCond").val(1);
var vc=$("#vCount").val();
vc=parseInt(vc);
$("#vCount").val(vc+1);

$('html, body').animate({
        scrollTop: $("#habits-spot").offset().top-50
}, 1000);

}
}

if(reqFrom=="Habits"){  // Conditional Updation

var evSmoking = document.getElementById("join_preference_smoking_habits");
var optionSelIndexSmoking = evSmoking.options[evSmoking.selectedIndex].value;
var optionSelectedTextSmoking = evSmoking.options[evSmoking.selectedIndex].text

var evDrinking = document.getElementById("join_preference_drinking_habits");
var optionSelIndexDrinking = evDrinking.options[evDrinking.selectedIndex].value;
var optionSelectedTextDrinking = evDrinking.options[evDrinking.selectedIndex].text

if (optionSelIndexSmoking == 0) {
alert("Please choose your preference smoking habits!");
document.getElementById("join_preference_smoking_habits").focus();
return false;
}else if (optionSelIndexDrinking == 0) {
alert("Please choose your preference drinking habits!");
document.getElementById("join_preference_drinking_habits").focus();
return false;
}else{

var join_preference_eating_habits=document.getElementById('join_preference_eating_habits').value;
var join_preference_smoking_habits=document.getElementById('join_preference_smoking_habits').value;
var join_preference_drinking_habits=document.getElementById('join_preference_drinking_habits').value;
var regID=document.getElementById('regID').value;

var param="join_preference_eating_habits="+join_preference_eating_habits+"&join_preference_smoking_habits="+join_preference_smoking_habits+"&join_preference_drinking_habits="+join_preference_drinking_habits+"&regID="+regID;

var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=preference_habits&"+param;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Habit Detail';	
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);

$("#validCond").val(1);
var vc=$("#vCount").val();
vc=parseInt(vc);
$("#vCount").val(vc+1);

$('html, body').animate({
        scrollTop: $("#about-spot").offset().top-50
}, 1000);
	


}

}


if(reqFrom=="Myself"){  // Conditional Updation
var my_self=trim_input(document.getElementById('join_preference_mem_myself').value);
var res = my_self.toLowerCase();
var evDrinking = document.getElementById("join_preference_drinking_habits");
var optionSelIndexDrinking = evDrinking.options[evDrinking.selectedIndex].value;
var optionSelectedTextDrinking = evDrinking.options[evDrinking.selectedIndex].text

if (optionSelIndexDrinking == 0) {
alert("Enter previous detail !");
document.getElementById('join_preference_drinking_habits').focus();
return false;	
}else{

if(trim_input(document.getElementById('join_preference_mem_myself').value)==""){
alert("Enter few words about your preference  !");
document.getElementById('join_preference_mem_myself').focus();
return false;
}else if(trim_input(document.getElementById('join_preference_mem_myself').value).length<50){
alert("Enter enter at least 50 character about your preference !");
document.getElementById('join_preference_mem_myself').focus();
return false;
}else if(res.match(/[0-9]/g)){
alert("Numbers are not allowed !");
document.getElementById('join_preference_mem_myself').focus();
return false;
}else if(res.match(/one/g) || res.match(/two/g) || res.match(/three/g) || res.match(/four/g) || res.match(/five/g) || res.match(/six/g) || res.match(/seven/g) || res.match(/eight/g) || res.match(/nine/g) || res.match(/ten/g) || res.match(/eleven/g) || res.match(/twelve/g) || res.match(/thirteen/g) || res.match(/fourteen/g) || res.match(/fifteen/g) || res.match(/sixteen/g) || res.match(/seventeen/g) || res.match(/eighteen/g) || res.match(/nineteen/g) || res.match(/twenty/g)){
      alert('Invalid characters !');
document.getElementById('join_preference_mem_myself').focus();
      return false; 
    }else{
	
var join_preference_mem_myself=document.getElementById('join_preference_mem_myself').value;
var regID=document.getElementById('regID').value;

var param="join_preference_mem_myself="+join_preference_mem_myself+"&regID="+regID;

//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=preference_myself&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='About Partner Detail';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

window.location='welcome.php?id='+regID;		
}


} 
}
}
req.open("GET",str,true);
req.send(null);

$('html, body').animate({
        scrollTop: $("#about-myself-spot").offset().top-50
}, 1000);



	
	
}

window.location='upload-photo.php';

}

}



}
</script>

<script>
function update_preference_basic_details(){}


////////////////////  LOCATION UPDATE ///////////////////////////

function update_preference_location_details(){}



////////////////////  Professional Details UPDATE ///////////////////////////

function update_preference_professional_details(){}


////////////////////  LIFESTYLE Details UPDATE ///////////////////////////

function update_preference_lifestyle_details(){}


////////////////////  HABITS Details UPDATE ///////////////////////////

function update_preference_about_details(){}


//////////////////////  MYSELF DETAIL ///////////////////////

function update_preference_myself_details(){}




///// NEW  FUNCTION ///


function byReligion(religion){
	
if(religion=="Hindu"){

$("#jain").hide();	
$("#muslim").hide();
$("#sikh").hide();	
$("#community_load_area").show();		

document.getElementById('hindu').style.display='block'


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-prefrence.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	

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
var str="<?=SITE_WS_PATH?>/fill-community-prefrence.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	

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
var str="<?=SITE_WS_PATH?>/fill-community-prefrence.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	

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
var str="<?=SITE_WS_PATH?>/fill-community-prefrence.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	

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
	
	
}else{

$("#hindu").hide();	
$("#muslim").hide();	
$("#jain").hide();	
$("#sikh").hide();	
$("#community_load_area").show();	

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-prefrence.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	

}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////


	
}
	

} // END



function byReligionPRE(religion){
	

if(religion=="Hindu"){
//$("#hindu").show();	
$("#muslim").hide();	

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-prefrence.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	

}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////


}else if(religion=="Muslim"){
//$("#hindu").hide();	

document.getElementById('muslim').style.display='block'

//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-prefrence.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	

}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////

}
	
}



/*function showstate(stateid){
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/"+"findstate-prefer.php?id="+stateid;
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){
document.getElementById('constate').innerHTML=req.responseText;
  } 
 }
}
req.open("GET",str,true);
req.send(null);
}*/



function saveAllDetail(){

update_preference_basic_details();
update_preference_location_details();
update_preference_professional_details();
update_preference_lifestyle_details();
update_preference_about_details();
update_preference_myself_details();

}

</script>


<script type="text/javascript" language="javascript">
function textCounter(field, countfield, maxlimit) {
	
if (field.value.length > maxlimit){ // if the current length is more than allowed
countfield.style.color='green'
countfield.value = 0 + field.value.length;
//field.value =field.value.substring(0, maxlimit); // don't allow further input
}else{
countfield.style.color='red'
countfield.value = 0 + field.value.length;
}

} // set the display field to remaining number

</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
 <script type="text/javascript">
        $(document).ready(function() {
            $('.boot-multiselect-demo').multiselect({
            includeSelectAllOption: true,
            buttonWidth: 475,
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            maxHeight: 300
        });
        });
    </script>
<!--
<script type="text/javascript" language="javascript">
function textCounter(field, countfield, maxlimit) {
	
if (field.value.length > maxlimit) // if the current length is more than allowed
field.value =field.value.substring(0, maxlimit); // don't allow further input
else
countfield.value = maxlimit - field.value.length;} // set the display field to remaining number

</script>-->
 </body>
</html>

<a data-toggle="modal" data-target="#update-popup" id="for-update-popup"></a>
<div class="modal fade" id="update-popup" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="update-popup-box">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle" aria-hidden="true" id="close-popup"></i>

</button>
      <div class="modal-header" style="border-bottom:none">
        <h4 class="modal-title text-center"><span id="area-title">Detail</span> is updated and saved.</h4>
      </div>
      
      
      
   
    </div>
  </div>
</div>