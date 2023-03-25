<?php require_once("includes/dbsmain.inc.php");?>
<!doctype html>
<head>
    <meta name="robots" content="index, follow" />
    
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Thebestweddinghub.Com No 1 Matrimony Portal in India - Register</title>
<meta name="keywords" content="Thebestweddinghub.Com No 1 Matrimony Portal in India - Register" />
<meta name="description" content="Thebestweddinghub.Com No 1 Matrimony Portal in India - Register" />


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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
select.ui-datepicker-month {
    color: #000;
}

select.ui-datepicker-year {
    color: #000;
}
	.txt-hgt{text-align:center;}
	@media (min-width:320px) and (max-width:767px) 
{.txt-hgt{text-align:left;}
	.mp_db_00 {
    margin: 0px;
    padding: 15px;
}
}	
</style>



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
					<div class="col-lg-3 col-md-3 col-sm-7 col-xs-7">
                    <div class="logo">
<a href="index.php"><img class="img-responsive" src="images/logo1.png" alt=""></a>
                  </div>
                   </div>
                   
                   <div class="col-lg-9 col-md-9 col-sm-5 col-xs-5 text-right">
                    <div class="appoinment-btn">
                     <a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1" href="<?=SITE_WS_PATH?>"><i class="fa fa-user"></i> LOGIN</a>
                        <!-- Modal: donate now Starts -->
                        <!--<a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1" href="register.html"><i class="fa fa-paint-brush"></i> REGISTER FREE</a>-->
                    </div>
					   
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
	/****.img-seq{height:90px !important;}***/
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
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-md-offset-1 all-sec">
         
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp_db_00" style="margin-bottom:20px !important;">
      <div class="clearfix"></div>
<input type="hidden" name="regID" id="regID"  value="<?=$_SESSION['regID']?>" />



          
<div id="collapse-menu" class="collapse-container" style="border:solid 1px #e4e4e4;">

<h3>Basic Details    <span class="arrow-r"></span></h3>
<div>
<p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf1">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 "><span class="font-red">*</span>Full Name</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
   <input type="text" placeholder="Enter Full Name" name="join_name" id="join_name" value="<?=$recData['reg_name']?>" class="dsbo-fom-1">
  </div>
  </div>                   
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="font-red">*</span>Gender</div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
<input type="radio" name="join_gender" id="join_gender_male" value="Male" <?php if($recData['reg_gender']=="Male"){?> checked <?php }?>> Male
  </div>
  
  <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
<input type="radio" name="join_gender" id="join_gender_female" value="Female" <?php if($recData['reg_gender']=="Female"){?> checked <?php }?>> Female 
  </div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
  &nbsp;
</div>
      </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="font-red">*</span>Date of birth</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

   <div class='input-group date' >
<input type='text' name="join_dob" readonly class="form-control dob" placeholder=" Enter your date of birth" id="join_dob" value="<?php if($recData['reg_dob']!="" && $recData['reg_dob']!="0000-00-00"){echo date("d/m/Y",strtotime($recData['reg_dob']));}?>" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                
                
                
  <?php /*?><input type="date" data-date-format="DD/MM/YYYY"  placeholder="Enter Date of birth" name="join_dob" id="join_dob" value="<?=$recData['reg_dob']?>" class="dsbo-fom-1"><?php */?>
  </div>
  </div>
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <span class="font-red">*</span>Age</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp_03">
  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
  
<input type="text" placeholder="Enter your age" name="join_age" id="join_age" value="<?=$recData['reg_age']?>" class="dsbo-fom-1">  
  
<?php /*?><select class="dsbo-fom-1" name="join_age" id="join_age">


<?php for($i=18;$i<=70;$i++){?>      
<option value="<?=$i?>" <?php if($recData['reg_age']==$i){?> selected <?php }?>      ><?=$i?></option>
<?php }?>       
</select><?php */?>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_db_00 frm-hdg_db txt-hgt">
      <span class="font-red">*</span>Height
      </div>
      
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="join_height" id="join_height">
<option value="0" selected="selected">----Select Height----</option>
<option value="4.5" <?php if($recData['reg_height']=="4.5"){?> selected <?php }?>>4' 5'' - 134cm</option>
<option value="4.6" <?php if($recData['reg_height']=="4.6"){?> selected <?php }?>>4' 6'' - 137cm</option>
<option value="4.7" <?php if($recData['reg_height']=="4.7"){?> selected <?php }?>>4' 7'' - 139cm</option>
<option value="4.8" <?php if($recData['reg_height']=="4.8"){?> selected <?php }?>>4' 8'' - 142cm</option>
<option value="4.9" <?php if($recData['reg_height']=="4.9"){?> selected <?php }?>>4' 9'' - 144cm</option>
<option value="5" <?php if($recData['reg_height']=="5"){?> selected <?php }?>>5' - 152cm</option>
<option value="5.1" <?php if($recData['reg_height']=="5.1"){?> selected <?php }?>>5' 1'' - 154cm</option>
<option value="5.2" <?php if($recData['reg_height']=="5.2"){?> selected <?php }?>>5' 2'' - 157cm</option>
<option value="5.3" <?php if($recData['reg_height']=="5.3"){?> selected <?php }?>>5' 3'' - 160cm</option>
<option value="5.4" <?php if($recData['reg_height']=="5.4"){?> selected <?php }?>>5' 4'' - 162cm</option>
<option value="5.5" <?php if($recData['reg_height']=="5.5"){?> selected <?php }?>>5' 5'' - 165cm</option>
<option value="5.6" <?php if($recData['reg_height']=="5.6"){?> selected <?php }?>>5' 6'' - 167cm</option>
<option value="5.7" <?php if($recData['reg_height']=="5.7"){?> selected <?php }?>>5' 7'' - 170cm</option>
<option value="5.8" <?php if($recData['reg_height']=="5.8"){?> selected <?php }?>>5' 8'' - 172cm</option>
<option value="5.9" <?php if($recData['reg_height']=="5.9"){?> selected <?php }?>>5' 9'' - 175cm</option>
<option value="6" <?php if($recData['reg_height']=="6"){?> selected <?php }?>>6' - 182cm</option>
<option value="6.1" <?php if($recData['reg_height']=="6.1"){?> selected <?php }?>>6' 1'' - 185cm</option>
<option value="6.2" <?php if($recData['reg_height']=="6.2"){?> selected <?php }?>>6' 2'' - 187cm</option>
<option value="6.3" <?php if($recData['reg_height']=="6.3"){?> selected <?php }?>>6' 3'' - 190cm</option>
<option value="6.4" <?php if($recData['reg_height']=="6.4"){?> selected <?php }?>>6' 4'' - 193cm</option>
<option value="6.5" <?php if($recData['reg_height']=="6.5"){?> selected <?php }?>>6' 5'' - 195cm</option>
<option value="6.6" <?php if($recData['reg_height']=="6.6"){?> selected <?php }?>>6' 6'' - 198cm</option>
<option value="6.7" <?php if($recData['reg_height']=="6.7"){?> selected <?php }?>>6' 7'' - 200cm</option>
<option value="6.8" <?php if($recData['reg_height']=="6.8"){?> selected <?php }?>>6' 8'' - 203cm</option>
<option value="6.9" <?php if($recData['reg_height']=="6.9"){?> selected <?php }?>>6' 9'' - 205cm</option>
</select>
      </div>
      <div class="clearfix"></div>
      </div>
      </div>
      
      <!-------->
     
       
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="font-red">*</span>Marital Status</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
   <select class="dsbo-fom-1" name="join_marital_status" id="join_marital_status" >

<option value="0" selected="selected">----Select Marital Status----</option>
<?php 
if($recData['reg_for']!='Self'){
?>
<option value="Doesn't Matter" <?php if($recData['reg_marital_status']=="Doesn't Matter"){?> selected <?php }?> >Doesn't Matter</option>
<?php }?>
<option value="Never Married"  <?php if($recData['reg_marital_status']=="Never Married"){?> selected <?php }?>>Never Married</option>
<option value="Divorced" <?php if($recData['reg_marital_status']=="Divorced"){?> selected <?php }?> >Divorced</option>
<option value="Widowed" <?php if($recData['reg_marital_status']=="Widowed"){?> selected <?php }?>>Widowed</option>
<option value="Awaiting Divorce" <?php if($recData['reg_marital_status']=="Awaiting Divorce"){?> selected <?php }?>>Awaiting Divorce</option>
<option value="Annulled" <?php if($recData['reg_marital_status']=="Annulled"){?> selected <?php }?> >Annulled</option>
      </select>
  </div>
  </div>
       
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="font-red">*</span>Mother Tongue</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
   <select class="dsbo-fom-1" name="join_mother_tongue" id="join_mother_tongue">
 <option value="0">----Select Mother Tongue----</option>

<option value="Bengali" <?php if($recData['reg_mother_tongue']=="Bengali"){?> selected <?php }?>>Bengali</option>
<option value="Hindi" <?php if($recData['reg_mother_tongue']=="Hindi"){?> selected <?php }?> >Hindi</option>
<option value="Telugu" <?php if($recData['reg_mother_tongue']=="Telugu"){?> selected <?php }?>>Telugu</option>
<option value="Marathi" <?php if($recData['reg_mother_tongue']=="Marathi"){?> selected <?php }?>>Marathi</option>
<option value="Tamil" <?php if($recData['reg_mother_tongue']=="Tamil"){?> selected <?php }?> >Tamil</option>
<option value="Urdu" <?php if($recData['reg_mother_tongue']=="Urdu"){?> selected <?php }?> >Urdu</option>
<option value="Gujarati" <?php if($recData['reg_mother_tongue']=="Gujarati"){?> selected <?php }?> >Gujarati</option>
<option value="Kannada" <?php if($recData['reg_mother_tongue']=="Kannada"){?> selected <?php }?>>Kannada</option>
<option value="Malayalam" <?php if($recData['reg_mother_tongue']=="Malayalam"){?> selected <?php }?> >Malayalam</option>
<option value="Odia" <?php if($recData['reg_mother_tongue']=="Odia"){?> selected <?php }?> >Odia</option>
<option value="Punjabi" <?php if($recData['reg_mother_tongue']=="Punjabi"){?> selected <?php }?> >Punjabi</option>	
<option value="Assamese" <?php if($recData['reg_mother_tongue']=="Assamese"){?> selected <?php }?> >Assamese</option>
<option value="Maithili" <?php if($recData['reg_mother_tongue']=="Maithili"){?> selected <?php }?>>Maithili</option>
<option value="Bhili/Bhilodi" <?php if($recData['reg_mother_tongue']=="Bhili/Bhilodi"){?> selected <?php }?> >Bhili/Bhilodi</option>
<option value="Santali" <?php if($recData['reg_mother_tongue']=="Santali"){?> selected <?php }?>  >Santali</option>
<option value="Kashmiri" <?php if($recData['reg_mother_tongue']=="Kashmiri"){?> selected <?php }?> >Kashmiri</option>
<option value="Nepali" <?php if($recData['reg_mother_tongue']=="Nepali"){?> selected <?php }?> >Nepali</option>
<option value="Gondi" <?php if($recData['reg_mother_tongue']=="Gondi"){?> selected <?php }?> >Gondi</option>	
<option value="Sindhi" <?php if($recData['reg_mother_tongue']=="Sindhi"){?> selected <?php }?> >Sindhi</option>
<option value="Konkani" <?php if($recData['reg_mother_tongue']=="Konkani"){?> selected <?php }?> >Konkani</option>	
<option value="Dogri" <?php if($recData['reg_mother_tongue']=="Dogri"){?> selected <?php }?> >Dogri</option>	
<option value="Khandeshi" <?php if($recData['reg_mother_tongue']=="Khandeshi"){?> selected <?php }?> >Khandeshi</option>	
<option value="Kurukh" <?php if($recData['reg_mother_tongue']=="Kurukh"){?> selected <?php }?> >Kurukh</option>
<option value="Tulu" <?php if($recData['reg_mother_tongue']=="Tulu"){?> selected <?php }?> >Tulu</option>
<option value="Meitei(Manipuri)" <?php if($recData['reg_mother_tongue']=="Meitei(Manipuri)"){?> selected <?php }?> >Meitei(Manipuri)</option>
<option value="Bodo" <?php if($recData['reg_mother_tongue']=="Bodo"){?> selected <?php }?> >Bodo</option>
<option value="Khasi" <?php if($recData['reg_mother_tongue']=="Khasi"){?> selected <?php }?>>Khasi</option>
<option value="Mundari" <?php if($recData['reg_mother_tongue']=="Mundari"){?> selected <?php }?> >Mundari</option>	
</select>
  </div>

      </div>
      
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="font-red">*</span>Any Disability</div>
  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">
  <input type="radio" name="join_is_any_disability" id="join_is_any_disability_yes" value="No" <?php if($recData['reg_is_any_disability']=="No"){?> checked <?php }?>> Normal
  </div>
<div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
  <input type="radio" name="join_is_any_disability" id="join_is_any_disability_no" value="Yes" <?php if($recData['reg_is_any_disability']=="Yes"){?> checked <?php }?>> Physically Challenged
</div>

      </div>
      
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Aadhar Number</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <input type="text" placeholder="Enter Aadhar Number" name="join_aadhar_number" id="join_aadhar_number" class="dsbo-fom-1" value="<?=$recData['reg_aadhar_number']?>" >
  </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="font-red">*</span>Profile&nbsp;Management&nbsp;by</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <select class="dsbo-fom-1" name="join_profile_manage_by" id="join_profile_manage_by" >
  <option value="0">----Select Profile Management by----</option>
<option value="Self" <?php if($recData['reg_profile_manage_by']=="Self"){?> selected <?php }?> >Self</option>
<option value="Sibling" <?php if($recData['reg_profile_manage_by']=="Sibling"){?> selected <?php }?>  >Sibling</option>
<option value="Parent" <?php if($recData['reg_profile_manage_by']=="Parent"){?> selected <?php }?> >Parent</option>
<option value="Friend" <?php if($recData['reg_profile_manage_by']=="Friend"){?> selected <?php }?>  >Friend</option>
    </select>
  </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Blood Group</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <select class="dsbo-fom-1" name="join_blood_group" id="join_blood_group">
  
  
  
    <option value="0" selected="selected">----Select Blood Group----</option>
  
<option value="Don't Know" <?php if($recData['reg_blood_group']=="Don't Know"){?> selected <?php }?> >Don't Know</option>
<option value="A plus" <?php if($recData['reg_blood_group']=="A plus"){?> selected <?php }?>  >A+</option>
<option value="A minus" <?php if($recData['reg_blood_group']=="A minus"){?> selected <?php }?>  >A-</option>
<option value="B plus" <?php if($recData['reg_blood_group']=="B plus"){?> selected <?php }?>  >B+</option>
<option value="B minus" <?php if($recData['reg_blood_group']=="B minus"){?> selected <?php }?>  >B-</option>
<option value="AB plus" <?php if($recData['reg_blood_group']=="AB plus"){?> selected <?php }?>  >AB+</option>
<option value="AB minus" <?php if($recData['reg_blood_group']=="AB minus"){?> selected <?php }?>  >AB-</option>
<option value="O plus" <?php if($recData['reg_blood_group']=="O plus"){?> selected <?php }?>  >O+</option>
<option value="O minus" <?php if($recData['reg_blood_group']=="O minus"){?> selected <?php }?>  >O-</option>
</select>          
  </div>
      </div>
       </div>
       <div class="clearfix"></div>
      
					</div>
<h3 id="location-spot" onClick="validateAll('Basic')">Location Details<span class="arrow-r"></span></h3>
					<div id="sec-2">
                     <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf1">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <span class="font-red">*</span>Country</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="join_country" id="join_country" onChange="showstate(this.value);">
<option value="0" selected="selected">----Select Country----</option>
<?php
if($recData['reg_country_id']!=""){
$sql_country=db_query("select * from tbl_country_master where 1 and status='Active'");
if(mysqli_num_rows($sql_country)>0){
while($data=mysqli_fetch_array($sql_country)){
@extract($data);
?>
<option value="<?=$data['contId']?>"  <?php if($recData['reg_country_id']==$data['contId']){?> selected <?php }else if($data['contId']==98 && empty($recData['reg_country_id'])){?> selected <?php }?>>
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
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
  <span class="font-red">*</span>State</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" id="constate">
<select class="dsbo-fom-1" name="join_state" id="join_state">
<option value="0" selected="selected">----Select State----</option>
  <?php
  if($recData['reg_state_id']=="" || empty($recData['reg_state_id']))
  { 
  $state_fetch=db_query("SELECT * FROM tbl_state WHERE country_id=98 and status='Active' order by state asc");
  if(mysqli_num_rows($state_fetch)>0){
    while($state=mysqli_fetch_array($state_fetch)){
      ?>
      <option value="<?=$state['state_id']?>"><?=$state['state']?></option>
    <?php }
  }}else{ 
 ?>
 <option value="<?=$recData['reg_state_id']?>" <?php if($recData['reg_state_id']!="" && $recData['reg_state_id']!=0){?> selected <?php }?>>
<?=$recData['reg_state_name']?>

  <?php }?>
</option>
</select>

      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  District/City</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <input type="text" placeholder="Enter your city" name="join_city" id="join_city" value="<?=$recData['reg_city']?>" class="dsbo-fom-1">

      </div>
      </div>
       
       </div>
       <div class="clearfix"></div>
       </div>
                     <!------------------->
       
       <h3 id="family-spot" onClick="validateAll('Location')">Famliy Details<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf1">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
 <span class="font-red">*</span> Father's Status</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="join_father_status" id="join_father_status">
<option  value="0">----Select Father's Status----</option>
<option value="Expired" <?php if($recData['reg_father_status']=="Expired"){?> selected<?php }?> >Expired</option>
<option value="Software Professional" <?php if($recData['reg_father_status']=="Software Professional"){?> selected<?php }?> >Software Professional</option>
<option value="Hardware Professional" <?php if($recData['reg_father_status']=="Hardware Professional"){?> selected<?php }?> >Hardware Professional</option>
<option value="Engineer - Non IT" <?php if($recData['reg_father_status']=="Engineer - Non IT"){?> selected<?php }?>>Engineer - Non IT</option>
<option value="Teaching / Academician" <?php if($recData['reg_father_status']=="Teaching / Academician"){?> selected<?php }?>>Teaching / Academician</option>
<option value="Professor / Lecturer" <?php if($recData['reg_father_status']=="Professor / Lecturer"){?> selected<?php }?> >Professor / Lecturer</option>
<option value="Education Professional" <?php if($recData['reg_father_status']=="Education Professional"){?> selected<?php }?> >Education Professional</option>
<option value="Chartered Accountant" <?php if($recData['reg_father_status']=="Chartered Accountant"){?> selected<?php }?> >Chartered Accountant</option>
<option value="Accounts/Finance Professional" <?php if($recData['reg_father_status']=="Accounts/Finance Professional"){?> selected<?php }?>>Accounts/Finance Professional</option>
<option value="Auditor" <?php if($recData['reg_father_status']=="Auditor"){?> selected<?php }?>>Auditor</option>
<option value="Company Secretary" <?php if($recData['reg_father_status']=="Company Secretary"){?> selected<?php }?> >Company Secretary</option>
<option value="Doctor" <?php if($recData['reg_father_status']=="Doctor"){?> selected<?php }?>>Doctor</option>
<option value="Nurse" <?php if($recData['reg_father_status']=="Nurse"){?> selected<?php }?> >Nurse</option>
<option value="Health Care Professional" <?php if($recData['reg_father_status']=="Health Care Professional"){?> selected<?php }?>>Health Care Professional</option>
<option value="Paramedical Professional" <?php if($recData['reg_father_status']=="Paramedical Professional"){?> selected<?php }?> >Paramedical Professional</option>
<option value="Banking Service Professional" <?php if($recData['reg_father_status']=="Banking Service Professional"){?> selected<?php }?> >Banking Service Professional</option>
<option value="Lawyer & Legal Professional" <?php if($recData['reg_father_status']=="Lawyer & Legal Professional"){?> selected<?php }?> >Lawyer & Legal Professional</option>
<option value="Law Enforcement Officer" <?php if($recData['reg_father_status']=="Law Enforcement Officer"){?> selected<?php }?>>Law Enforcement Officer</option>
<option value="Architect" <?php if($recData['reg_father_status']=="Architect"){?> selected<?php }?> >Architect</option>
<option value="Interior Designer" <?php if($recData['reg_father_status']=="Interior Designer"){?> selected<?php }?>>Interior Designer</option>
<option value="Advertising / PR Professional" <?php if($recData['reg_father_status']=="Advertising / PR Professional"){?> selected<?php }?> >Advertising / PR Professional</option>
<option value="Media Professional" <?php if($recData['reg_father_status']=="Media Professional"){?> selected<?php }?> >Media Professional</option>
<option value="Entertainment Professional" <?php if($recData['reg_father_status']=="Entertainment Professional"){?> selected<?php }?>>Entertainment Professional</option>
<option value="Fashion Designer" <?php if($recData['reg_father_status']=="Fashion Designer"){?> selected<?php }?> >Fashion Designer</option>
<option value="Event Management Professional" <?php if($recData['reg_father_status']=="Event Management Professional"){?> selected<?php }?> >Event Management Professional</option>
<option value="Journalist" <?php if($recData['reg_father_status']=="Journalist"){?> selected<?php }?> >Journalist</option>
<option value="Air Hostess" <?php if($recData['reg_father_status']=="Air Hostess"){?> selected<?php }?>  >Air Hostess</option>
<option value="Airline Professional" <?php if($recData['reg_father_status']=="Airline Professional"){?> selected<?php }?>>Airline Professional</option>
<option value="Pilot" <?php if($recData['reg_father_status']=="Pilot"){?> selected<?php }?> >Pilot</option>
<option value="Mariner / Merchant Navy" <?php if($recData['reg_father_status']=="Mariner / Merchant Navy"){?> selected<?php }?> >Mariner / Merchant Navy</option>
<option value="Beautician" <?php if($recData['reg_father_status']=="Beautician"){?> selected<?php }?>>Beautician</option>
<option value="Hotel / Hospitality Professional" <?php if($recData['reg_father_status']=="Hotel / Hospitality Professional"){?> selected<?php }?> >Hotel / Hospitality Professional</option>
<option value="Scientist / Researcher" <?php if($recData['reg_father_status']=="Scientist / Researcher"){?> selected<?php }?> >Scientist / Researcher</option>
<option value="Social Worker" <?php if($recData['reg_father_status']=="Social Worker"){?> selected<?php }?> >Social Worker</option>
<option value="Agriculture &amp; Farming Professional" <?php if($recData['reg_father_status']=="Agriculture &amp; Farming Professional"){?> selected<?php }?>>Agriculture & Farming Professional</option>
<option value="Arts &amp; Craftsman" <?php if($recData['reg_father_status']=="Arts &amp; Craftsman"){?> selected<?php }?>>Arts & Craftsman</option>
<option value="Administrative Professional" <?php if($recData['reg_father_status']=="Administrative Professional"){?> selected<?php }?> >Administrative Professional</option>
<option value="Customer Care Professional" <?php if($recData['reg_father_status']=="Customer Care Professional"){?> selected<?php }?> >Customer Care Professional</option>
<option value="CXO / President, Director, Chairman" <?php if($recData['reg_father_status']=="CXO / President, Director, Chairman"){?> selected<?php }?> >CXO / President, Director, Chairman</option>
<option value="Marketing Professional" <?php if($recData['reg_father_status']=="Marketing Professional"){?> selected<?php }?> >Marketing Professional</option>
<option value="Sales Professional" <?php if($recData['reg_father_status']=="Sales Professional"){?> selected<?php }?> >Sales Professional</option>
<option value="Technician" <?php if($recData['reg_father_status']=="Technician"){?> selected<?php }?>>Technician</option>
<option value="Consultant" <?php if($recData['reg_father_status']=="Consultant"){?> selected<?php }?>>Consultant</option>
<option value="Clerk" <?php if($recData['reg_father_status']=="Clerk"){?> selected<?php }?> >Clerk</option>
<option value="Officer" <?php if($recData['reg_father_status']=="Officer"){?> selected<?php }?>>Officer</option>
<option value="Supervisor" <?php if($recData['reg_father_status']=="Supervisor"){?> selected<?php }?> >Supervisor</option>
<option value="Manager" <?php if($recData['reg_father_status']=="Manager"){?> selected<?php }?> >Manager</option>
<option value="Executive" <?php if($recData['reg_father_status']=="Executive"){?> selected<?php }?>  >Executive</option>
<option value="Sportsman" <?php if($recData['reg_father_status']=="Sportsman"){?> selected<?php }?>  >Sportsman</option>
<option value="Civil Services (IAS/IPS/IRS/IES/IFS)" <?php if($recData['reg_father_status']=="Civil Services (IAS/IPS/IRS/IES/IFS)"){?> selected<?php }?> >Civil Services (IAS/IPS/IRS/IES/IFS)</option>
<option value="Army" <?php if($recData['reg_father_status']=="Army"){?> selected<?php }?> >Army</option>
<option value="Navy" <?php if($recData['reg_father_status']=="Navy"){?> selected<?php }?>>Navy</option>
<option value="Airforce" <?php if($recData['reg_father_status']=="Airforce"){?> selected<?php }?> >Airforce</option>
<option value="Human Resources Professional" <?php if($recData['reg_father_status']=="Human Resources Professional"){?> selected<?php }?> >Human Resources Professional</option>
<option value="Financial Analyst / Planning" <?php if($recData['reg_father_status']=="Financial Analyst / Planning"){?> selected<?php }?> >Financial Analyst / Planning</option>
<option value="Designer - IT & Engineering" <?php if($recData['reg_father_status']=="Designer - IT & Engineering"){?> selected<?php }?> >Designer - IT & Engineering</option>
<option value="Designer - Media & Entertainment" <?php if($recData['reg_father_status']=="Designer - Media & Entertainment"){?> selected<?php }?> >Designer - Media & Entertainment</option>
<option value="Student" <?php if($recData['reg_father_status']=="Student"){?> selected<?php }?> >Student</option>
<option value="Librarian" <?php if($recData['reg_father_status']=="Librarian"){?> selected<?php }?> >Librarian</option>
<option value="Financial Accountant" <?php if($recData['reg_father_status']=="Financial Accountant"){?> selected<?php }?> >Financial Accountant</option>
<option value="Business Analyst" <?php if($recData['reg_father_status']=="Business Analyst"){?> selected<?php }?> >Business Analyst</option>
<option value="Business Owner / Entrepreneur" <?php if($recData['reg_father_status']=="Business Owner / Entrepreneur"){?> selected<?php }?> >Business Owner / Entrepreneur</option>
<option value="Doctor" <?php if($recData['reg_father_status']=="Doctor"){?> selected<?php }?> >Doctor</option>
<option value="Engineer" <?php if($recData['reg_father_status']=="Engineer"){?> selected<?php }?> >Engineer</option>
<option value="Retired" <?php if($recData['reg_father_status']=="Retired"){?> selected<?php }?> >Retired</option>
<option value="Others" <?php if($recData['reg_father_status']=="Others"){?> selected<?php }?> >Others</option>
<option value="Business" <?php if($recData['reg_father_status']=="Business"){?> selected<?php }?>>Business</option>
<option value="Not working" <?php if($recData['reg_father_status']=="Not working"){?> selected<?php }?> >Not working</option>
</select>

      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
 <span class="font-red">*</span>Mother's Status</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <select class="dsbo-fom-1" name="join_mother_status" id="join_mother_status" >
       <option  value="0">----Select Mother's Status----</option>
<option value="Expired" <?php if($recData['reg_mother_status']=="Expired"){?> selected<?php }?> >Expired</option>
<option value="Software Professional" <?php if($recData['reg_mother_status']=="Software Professional"){?> selected<?php }?> >Software Professional</option>
<option value="Hardware Professional" <?php if($recData['reg_mother_status']=="Hardware Professional"){?> selected<?php }?> >Hardware Professional</option>
<option value="Engineer - Non IT" <?php if($recData['reg_mother_status']=="Engineer - Non IT"){?> selected<?php }?>>Engineer - Non IT</option>
<option value="Teaching / Academician" <?php if($recData['reg_mother_status']=="Teaching / Academician"){?> selected<?php }?>>Teaching / Academician</option>
<option value="Professor / Lecturer" <?php if($recData['reg_mother_status']=="Professor / Lecturer"){?> selected<?php }?> >Professor / Lecturer</option>
<option value="Education Professional" <?php if($recData['reg_mother_status']=="Education Professional"){?> selected<?php }?> >Education Professional</option>
<option value="Chartered Accountant" <?php if($recData['reg_mother_status']=="Chartered Accountant"){?> selected<?php }?> >Chartered Accountant</option>
<option value="Accounts/Finance Professional" <?php if($recData['reg_mother_status']=="Accounts/Finance Professional"){?> selected<?php }?>>Accounts/Finance Professional</option>
<option value="Auditor" <?php if($recData['reg_mother_status']=="Auditor"){?> selected<?php }?>>Auditor</option>
<option value="Company Secretary" <?php if($recData['reg_mother_status']=="Company Secretary"){?> selected<?php }?> >Company Secretary</option>
<option value="Doctor" <?php if($recData['reg_mother_status']=="Doctor"){?> selected<?php }?>>Doctor</option>
<option value="Nurse" <?php if($recData['reg_mother_status']=="Nurse"){?> selected<?php }?> >Nurse</option>
<option value="Health Care Professional" <?php if($recData['reg_mother_status']=="Health Care Professional"){?> selected<?php }?>>Health Care Professional</option>
<option value="Paramedical Professional" <?php if($recData['reg_mother_status']=="Paramedical Professional"){?> selected<?php }?> >Paramedical Professional</option>
<option value="Banking Service Professional" <?php if($recData['reg_mother_status']=="Banking Service Professional"){?> selected<?php }?> >Banking Service Professional</option>
<option value="Lawyer & Legal Professional" <?php if($recData['reg_mother_status']=="Lawyer & Legal Professional"){?> selected<?php }?> >Lawyer & Legal Professional</option>
<option value="Law Enforcement Officer" <?php if($recData['reg_mother_status']=="Law Enforcement Officer"){?> selected<?php }?>>Law Enforcement Officer</option>
<option value="Architect" <?php if($recData['reg_mother_status']=="Architect"){?> selected<?php }?> >Architect</option>
<option value="Interior Designer" <?php if($recData['reg_mother_status']=="Interior Designer"){?> selected<?php }?>>Interior Designer</option>
<option value="Advertising / PR Professional" <?php if($recData['reg_mother_status']=="Advertising / PR Professional"){?> selected<?php }?> >Advertising / PR Professional</option>
<option value="Media Professional" <?php if($recData['reg_mother_status']=="Media Professional"){?> selected<?php }?> >Media Professional</option>
<option value="Entertainment Professional" <?php if($recData['reg_mother_status']=="Entertainment Professional"){?> selected<?php }?>>Entertainment Professional</option>
<option value="Fashion Designer" <?php if($recData['reg_mother_status']=="Fashion Designer"){?> selected<?php }?> >Fashion Designer</option>
<option value="Event Management Professional" <?php if($recData['reg_mother_status']=="Event Management Professional"){?> selected<?php }?> >Event Management Professional</option>
<option value="Journalist" <?php if($recData['reg_mother_status']=="Journalist"){?> selected<?php }?> >Journalist</option>
<option value="Air Hostess" <?php if($recData['reg_mother_status']=="Air Hostess"){?> selected<?php }?>  >Air Hostess</option>
<option value="Airline Professional" <?php if($recData['reg_mother_status']=="Airline Professional"){?> selected<?php }?>>Airline Professional</option>
<option value="Pilot" <?php if($recData['reg_mother_status']=="Pilot"){?> selected<?php }?> >Pilot</option>
<option value="Mariner / Merchant Navy" <?php if($recData['reg_mother_status']=="Mariner / Merchant Navy"){?> selected<?php }?> >Mariner / Merchant Navy</option>
<option value="Beautician" <?php if($recData['reg_mother_status']=="Beautician"){?> selected<?php }?>>Beautician</option>
<option value="Hotel / Hospitality Professional" <?php if($recData['reg_mother_status']=="Hotel / Hospitality Professional"){?> selected<?php }?> >Hotel / Hospitality Professional</option>
<option value="Scientist / Researcher" <?php if($recData['reg_mother_status']=="Scientist / Researcher"){?> selected<?php }?> >Scientist / Researcher</option>
<option value="Social Worker" <?php if($recData['reg_mother_status']=="Social Worker"){?> selected<?php }?> >Social Worker</option>
<option value="Agriculture &amp; Farming Professional" <?php if($recData['reg_mother_status']=="Agriculture &amp; Farming Professional"){?> selected<?php }?>>Agriculture & Farming Professional</option>
<option value="Arts &amp; Craftsman" <?php if($recData['reg_mother_status']=="Arts &amp; Craftsman"){?> selected<?php }?>>Arts & Craftsman</option>
<option value="Administrative Professional" <?php if($recData['reg_mother_status']=="Administrative Professional"){?> selected<?php }?> >Administrative Professional</option>
<option value="Customer Care Professional" <?php if($recData['reg_mother_status']=="Customer Care Professional"){?> selected<?php }?> >Customer Care Professional</option>
<option value="CXO / President, Director, Chairman" <?php if($recData['reg_mother_status']=="CXO / President, Director, Chairman"){?> selected<?php }?> >CXO / President, Director, Chairman</option>
<option value="Marketing Professional" <?php if($recData['reg_mother_status']=="Marketing Professional"){?> selected<?php }?> >Marketing Professional</option>
<option value="Sales Professional" <?php if($recData['reg_mother_status']=="Sales Professional"){?> selected<?php }?> >Sales Professional</option>
<option value="Technician" <?php if($recData['reg_mother_status']=="Technician"){?> selected<?php }?>>Technician</option>
<option value="Consultant" <?php if($recData['reg_mother_status']=="Consultant"){?> selected<?php }?>>Consultant</option>
<option value="Clerk" <?php if($recData['reg_mother_status']=="Clerk"){?> selected<?php }?> >Clerk</option>
<option value="Officer" <?php if($recData['reg_mother_status']=="Officer"){?> selected<?php }?>>Officer</option>
<option value="Supervisor" <?php if($recData['reg_mother_status']=="Supervisor"){?> selected<?php }?> >Supervisor</option>
<option value="Manager" <?php if($recData['reg_mother_status']=="Manager"){?> selected<?php }?> >Manager</option>
<option value="Executive" <?php if($recData['reg_mother_status']=="Executive"){?> selected<?php }?>  >Executive</option>
<option value="Sportsman" <?php if($recData['reg_mother_status']=="Sportsman"){?> selected<?php }?>  >Sportsman</option>
<option value="Civil Services (IAS/IPS/IRS/IES/IFS)" <?php if($recData['reg_mother_status']=="Civil Services (IAS/IPS/IRS/IES/IFS)"){?> selected<?php }?> >Civil Services (IAS/IPS/IRS/IES/IFS)</option>
<option value="Army" <?php if($recData['reg_mother_status']=="Army"){?> selected<?php }?> >Army</option>
<option value="Navy" <?php if($recData['reg_mother_status']=="Navy"){?> selected<?php }?>>Navy</option>
<option value="Airforce" <?php if($recData['reg_mother_status']=="Airforce"){?> selected<?php }?> >Airforce</option>
<option value="Human Resources Professional" <?php if($recData['reg_mother_status']=="Human Resources Professional"){?> selected<?php }?> >Human Resources Professional</option>
<option value="Financial Analyst / Planning" <?php if($recData['reg_mother_status']=="Financial Analyst / Planning"){?> selected<?php }?> >Financial Analyst / Planning</option>
<option value="Designer - IT & Engineering" <?php if($recData['reg_mother_status']=="Designer - IT & Engineering"){?> selected<?php }?> >Designer - IT & Engineering</option>
<option value="Designer - Media & Entertainment" <?php if($recData['reg_mother_status']=="Designer - Media & Entertainment"){?> selected<?php }?> >Designer - Media & Entertainment</option>
<option value="Student" <?php if($recData['reg_mother_status']=="Student"){?> selected<?php }?> >Student</option>
<option value="Librarian" <?php if($recData['reg_mother_status']=="Librarian"){?> selected<?php }?> >Librarian</option>
<option value="Financial Accountant" <?php if($recData['reg_mother_status']=="Financial Accountant"){?> selected<?php }?> >Financial Accountant</option>
<option value="Business Analyst" <?php if($recData['reg_mother_status']=="Business Analyst"){?> selected<?php }?> >Business Analyst</option>
<option value="Business Owner / Entrepreneur" <?php if($recData['reg_mother_status']=="Business Owner / Entrepreneur"){?> selected<?php }?> >Business Owner / Entrepreneur</option>
<option value="Doctor" <?php if($recData['reg_mother_status']=="Doctor"){?> selected<?php }?> >Doctor</option>
<option value="Engineer" <?php if($recData['reg_mother_status']=="Engineer"){?> selected<?php }?> >Engineer</option>
<option value="Retired" <?php if($recData['reg_mother_status']=="Retired"){?> selected<?php }?> >Retired</option>
<option value="Others" <?php if($recData['reg_mother_status']=="Others"){?> selected<?php }?> >Others</option>
<option value="Business" <?php if($recData['reg_mother_status']=="Business"){?> selected<?php }?>>Business</option>



<option value="House Wife" <?php if($recData['reg_mother_status']=="House Wife"){?> selected<?php }?> >House Wife</option>


<option value="Not working" <?php if($recData['reg_mother_status']=="Not working"){?> selected<?php }?> >Not working</option>
</select>
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
 <span class="font-red">*</span>Siblings</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padd">
<select class="dsbo-fom-1" name="join_siblings_bro" id="join_siblings_bro" style="width:98%" onChange="toggleBroSis()"  >
<option  value="" selected >---- Brother ----</option>
<option  value="0" >0</option>
<?php for($i=1;$i<=20;$i++){ ?>
<option  value="<?=$i?>" <?php if($recData['reg_siblings_bro']==$i){?> selected <?php }?> ><?=$i?></option>
<?php }?>
</select></div>


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padd"><select class="dsbo-fom-1 pull-right" name="join_siblings_sis" id="join_siblings_sis" style="width:98%" onChange="toggleBroSis()" >
<option  value="" selected >---- Sister ----</option>
<option  value="0" >0</option>
<?php for($i=1;$i<=20;$i++){ ?>
<option  value="<?=$i?>" <?php if($recData['reg_siblings_sis']==$i){?> selected <?php }?> ><?=$i?></option>
<?php }?>
</select>
</div>
</div>
      </div>
      
      

      
      
      
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof" id="show-bro-sis" 
style="display:<?php if($recData['reg_siblings_marital_status_bro']!="" or $recData['reg_siblings_marital_status_sis']!=""){?>block<?php }else{?>none<?php }?>">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
Siblings Maritial Status</div>

<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padd" id="show-bro">
<span class="b bro-sis-num">No. of brother married</span>
<select class="dsbo-fom-1" name="join_siblings_marital_status_bro" id="join_siblings_marital_status_bro" style="width:98%" >
<?php if($recData['reg_siblings_marital_status_bro']>0){?>
<option  value="<?=$recData['reg_siblings_marital_status_bro']?>" selected ><?=$recData['reg_siblings_marital_status_bro']?></option>
<?php }else{?>
<option  value="0" selected >---- Brother ----</option>
<?php }?>

</select>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padd" id="show-sis">
<span class="b bro-sis-num">No. of sister married</span>
<select class="dsbo-fom-1 pull-right" name="join_siblings_marital_status_sis" id="join_siblings_marital_status_sis" style="width:98%" >
<?php if($recData['reg_siblings_marital_status_sis']>0){?>
<option  value="<?=$recData['reg_siblings_marital_status_sis']?>" selected ><?=$recData['reg_siblings_marital_status_sis']?></option>
<?php }else{?>
<option  value="0" selected >---- Sister ----</option>
<?php }?>

</select>
</div>

</div>
      
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Family Status</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
   <select class="dsbo-fom-1" name="join_family_status" id="join_family_status">
   <option value="0" >----Select Family Status----</option>

<option value="Middle class" <?php if($recData['reg_family_status']=="Middle class"){?> selected<?php }?> >Middle class</option>
<option value="Upper middle class" <?php if($recData['reg_family_status']=="Upper middle class"){?> selected<?php }?> >Upper middle class</option>
<option value="Rich" <?php if($recData['reg_family_status']=="Rich"){?> selected<?php }?> >Rich</option>
<option value="Affluent" <?php if($recData['reg_family_status']=="Affluent"){?> selected<?php }?>>Affluent</option>
</select>
  </div>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  Family type</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <select class="dsbo-fom-1" name="join_family_type" id="join_family_type">
<option  value="0">----Select Family type----</option>
<option  value="Joint Family" <?php if($recData['reg_family_type']=="Joint Family"){?> selected <?php }?>>Joint Family</option>
<option  value="Nuclear Family" <?php if($recData['reg_family_type']=="Nuclear Family"){?> selected <?php }?> >Nuclear Family</option>
<option  value="Others" <?php if($recData['reg_family_type']=="Others"){?> selected <?php }?> >Others</option>

      </select>
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  Family Values</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <select class="dsbo-fom-1" name="join_family_values" id="join_family_values">
        <option selected disabled> -- Choose Family Values -- </option>
<option  value="Traditional" <?php if($recData['reg_family_values']=="Traditional"){?> selected <?php }?>>Traditional</option>
<option  value="Moderate" <?php if($recData['reg_family_values']=="Moderate"){?> selected <?php }?>>Moderate</option>
<option  value="Liberal" <?php if($recData['reg_family_values']=="Liberal"){?> selected <?php }?>>Liberal</option>
      </select>
      </div>
      </div>
      <!--<div class="col-md-12 pd-msof">
     
  <div class="col-md-3">
  <span class="pos-sty1">Siblings Status</span></div>
  <div class="col-md-9 mp_03">
  <div class="col-md-6">
  <p>Brother</p>
      <input type="text" placeholder="" class="dsbo-fom-1">
      </div>
      
      <div class="col-md-6">
     <p> Sister</p>
       <input type="text" placeholder="" class="dsbo-fom-1">
      </div>
      <div class="clearfix"></div>
      </div>
      </div>-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
 Annual income</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  
<select class="dsbo-fom-1" name="join_annual_income" id="join_annual_income">
<option  value="0">----Select Annual income----</option>
<option  value="Upto INR 1 Lakh" <?php if($recData['reg_annual_income']=="Upto INR 1 Lakh"){?> selected <?php }?> >Upto INR 1 Lakh</option>

<option  value="INR 1 Lakh to 2 Lakh" <?php if($recData['reg_annual_income']=="INR 1 Lakh to 2 Lakh"){?> selected <?php }?> >INR 1 Lakh to 2 Lakh</option>

<option  value="INR 2 Lakh to 4 Lakh" <?php if($recData['reg_annual_income']=="INR 2 Lakh to 4 Lakh"){?> selected <?php }?> >INR 2 Lakh to 4 Lakh</option>

<option  value="INR 4 Lakh to 7 Lakh" <?php if($recData['reg_annual_income']=="INR 4 Lakh to 7 Lakh"){?> selected <?php }?> >INR 4 Lakh to 7 Lakh</option>


<option  value="INR 7 Lakh to 10 Lakh" <?php if($recData['reg_annual_income']=="INR 7 Lakh to 10 Lakh"){?> selected <?php }?> >INR 7 Lakh to 10 Lakh</option>

<option  value="INR 10 Lakh to 15 Lakh" <?php if($recData['reg_annual_income']=="INR 10 Lakh to 15 Lakh"){?> selected <?php }?> >INR 10 Lakh to 15 Lakh</option>

<option  value="INR 15 Lakh to 20 Lakh" <?php if($recData['reg_annual_income']=="INR 15 Lakh to 20 Lakh"){?> selected <?php }?> >INR 15 Lakh to 20 Lakh</option>


<option  value="INR 20 Lakh to 30 Lakh" <?php if($recData['reg_annual_income']=="INR 20 Lakh to 30 Lakh"){?> selected <?php }?> >INR 20 Lakh to 30 Lakh</option>

<option  value="INR 30 Lakh to 50 Lakh" <?php if($recData['reg_annual_income']=="INR 30 Lakh to 50 Lakh"){?> selected <?php }?> >INR 30 Lakh to 50 Lakh</option>

<option  value="INR 50 Lakh to 75 Lakh" <?php if($recData['reg_annual_income']=="INR 50 Lakh to 75 Lakh"){?> selected <?php }?> >INR 50 Lakh to 75 Lakh</option>

<option  value="INR 75 Lakh to 1 Crore" <?php if($recData['reg_annual_income']=="INR 75 Lakh to 1 Crore"){?> selected <?php }?> >INR 75 Lakh to 1 Crore</option>

<option  value="INR 1 Crore &amp; above" <?php if($recData['reg_annual_income']=="INR 1 Crore &amp; above"){?> selected <?php }?> >INR 1 Crore &amp; above</option>

<option  value="Not applicable" <?php if($recData['reg_annual_income']=="Not applicable"){?> selected <?php }?> >Not applicable</option>

</select>  
  
  
<?php /*?><select class="dsbo-fom-1" name="join_annual_income" id="join_annual_income">
<option  value="0">----Select Annual income----</option>

<option  value="Any" <?php if($recData['reg_annual_income']=="Any"){?> selected <?php }?> >Any</option>
<option  value="Less than Rs.50 thousand" <?php if($recData['reg_annual_income']=="Less than Rs.50 thousand"){?> selected <?php }?> >Less than Rs.50 thousand</option>
<option  value="Rs.50 thousand" <?php if($recData['reg_annual_income']=="Rs.50 thousand"){?> selected <?php }?> >Rs.50 thousand</option>
<option  value="Rs 1 Lakh" <?php if($recData['reg_annual_income']=="Rs 1 Lakh"){?> selected <?php }?> >Rs 1 Lakh</option>
<option  value="Rs 2 Lakh" <?php if($recData['reg_annual_income']=="Rs 2 Lakh"){?> selected <?php }?>  >Rs 2 Lakh</option>
<option  value="Rs 3 Lakh" <?php if($recData['reg_annual_income']=="Rs 3 Lakh"){?> selected <?php }?>>Rs 3 Lakh</option>
<option  value="Rs 4 Lakh" <?php if($recData['reg_annual_income']=="Rs 4 Lakh"){?> selected <?php }?> >Rs 4 Lakh</option>
<option  value="Rs 5 Lakh" <?php if($recData['reg_annual_income']=="Rs 5 Lakh"){?> selected <?php }?>>Rs 5 Lakh</option>
<option  value="Rs 6 Lakh" <?php if($recData['reg_annual_income']=="Rs 6 Lakh"){?> selected <?php }?>>Rs 6 Lakh</option>
<option  value="Rs 7 Lakh" <?php if($recData['reg_annual_income']=="Rs 7 Lakh"){?> selected <?php }?>>Rs 7 Lakh</option>
<option  value="Rs 8 Lakh" <?php if($recData['reg_annual_income']=="Rs 8 Lakh"){?> selected <?php }?>>Rs 8 Lakh</option>
<option  value="Rs 9 Lakh" <?php if($recData['reg_annual_income']=="Rs 9 Lakh"){?> selected <?php }?>>Rs 9 Lakh</option>
<option  value="Rs 10 Lakh" <?php if($recData['reg_annual_income']=="Rs 10 Lakh"){?> selected <?php }?>>Rs 10 Lakh</option>
<option  value="Rs 11 Lakh" <?php if($recData['reg_annual_income']=="Rs 11 Lakh"){?> selected <?php }?>>Rs 11 Lakh</option>
<option  value="Rs 12 Lakh" <?php if($recData['reg_annual_income']=="Rs 12 Lakh"){?> selected <?php }?>>Rs 12 Lakh</option>
<option  value="Rs 13 Lakh" <?php if($recData['reg_annual_income']=="Rs 13 Lakh"){?> selected <?php }?>>Rs 13 Lakh</option>
<option  value="Rs 14 Lakh" <?php if($recData['reg_annual_income']=="Rs 14 Lakh"){?> selected <?php }?>>Rs 14 Lakh</option>
<option  value="Rs 15 Lakh" <?php if($recData['reg_annual_income']=="Rs 15 Lakh"){?> selected <?php }?>>Rs 15 Lakh</option>
<option  value="Rs 16 Lakh" <?php if($recData['reg_annual_income']=="Rs 16 Lakh"){?> selected <?php }?>>Rs 16 Lakh</option>
<option  value="Rs 17 Lakh" <?php if($recData['reg_annual_income']=="Rs 17 Lakh"){?> selected <?php }?>>Rs 17 Lakh</option>
<option  value="Rs 18 Lakh" <?php if($recData['reg_annual_income']=="Rs 18 Lakh"){?> selected <?php }?>>Rs 18 Lakh</option>
<option  value="Rs 19 Lakh" <?php if($recData['reg_annual_income']=="Rs 19 Lakh"){?> selected <?php }?> >Rs 19 Lakh</option>
<option  value="Rs 20 Lakh" <?php if($recData['reg_annual_income']=="Rs 20 Lakh"){?> selected <?php }?> >Rs 20 Lakh</option>
<option  value="Rs 25 Lakh" <?php if($recData['reg_annual_income']=="Rs 25 Lakh"){?> selected <?php }?>>Rs 25 Lakh</option>
<option  value="Rs 30 Lakh" <?php if($recData['reg_annual_income']=="Rs 30 Lakh"){?> selected <?php }?>>Rs 30 Lakh</option>
<option  value="Rs 35 Lakh" <?php if($recData['reg_annual_income']=="Rs 35 Lakh"){?> selected <?php }?>>Rs 35 Lakh</option>
<option  value="Rs 40 Lakh" <?php if($recData['reg_annual_income']=="Rs 40 Lakh"){?> selected <?php }?>>Rs 40 Lakh</option>
<option  value="Rs 45 Lakh" <?php if($recData['reg_annual_income']=="Rs 45 Lakh"){?> selected <?php }?> >Rs 45 Lakh</option>
<option  value="Rs 50 Lakh" <?php if($recData['reg_annual_income']=="Rs 50 Lakh"){?> selected <?php }?> >Rs 50 Lakh</option>
<option  value="Rs 55 Lakh" <?php if($recData['reg_annual_income']=="Rs 55 Lakh"){?> selected <?php }?>>Rs 55 Lakh</option>
<option  value="Rs 60 Lakh" <?php if($recData['reg_annual_income']=="Rs 60 Lakh"){?> selected <?php }?>>Rs 60 Lakh</option>
<option  value="Rs 65 Lakh" <?php if($recData['reg_annual_income']=="Rs 65 Lakh"){?> selected <?php }?>>Rs 65 Lakh</option>
<option  value="Rs 70 Lakh" <?php if($recData['reg_annual_income']=="Rs 70 Lakh"){?> selected <?php }?>>Rs 70 Lakh</option>
<option  value="Rs 75 Lakh" <?php if($recData['reg_annual_income']=="Rs 75 Lakh"){?> selected <?php }?>>Rs 75 Lakh</option>
<option  value="Rs 80 Lakh" <?php if($recData['reg_annual_income']=="Rs 80 Lakh"){?> selected <?php }?> >Rs 80 Lakh</option>
<option  value="Rs 90 Lakh" <?php if($recData['reg_annual_income']=="Rs 90 Lakh"){?> selected <?php }?>>Rs 90 Lakh</option>
<option  value="Rs 1 Crore" <?php if($recData['reg_annual_income']=="Rs 1 Crore"){?> selected <?php }?>>Rs 1 Crore</option>
<option  value="Rs 1 Crore & Above" <?php if($recData['reg_annual_income']=="Rs 1 Crore & Above"){?> selected <?php }?>>Rs 1 Crore & Above</option>
      </select><?php */?>

      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
 Family living in</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <input type="text" placeholder="Enter Family living in" name="join_family_living_in" id="join_family_living_in" value="<?=$recData['reg_family_living_in']?>" class="dsbo-fom-1">
      </div>
      </div>
      
       </div>
         <div class="clearfix"></div>
       </div>	
                    
         <!----------3rd----------->
<h3 id="edu-spot" onClick="validateAll('Family')">Education & Career<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf1">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <span class="font-red">*</span>Highest Education</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="join_highest_edu" id="join_highest_edu">
<option value="0" >-- Select Highest Education--</option>
<optgroup label="Engineering/Design">
<option value="B.E/B.Tech" <?php if($recData['reg_highest_edu']=="B.E/B.Tech"){?> selected<?php }?> >-  B.E/B.Tech</option>
<option value="B.Pharma" <?php if($recData['reg_highest_edu']=="B.Pharma"){?> selected<?php }?>>-  B.Pharma</option>
<option value="M.E/M.Tech" <?php if($recData['reg_highest_edu']=="M.E/M.Tech"){?> selected<?php }?>>-  M.E/M.Tech</option>
<option value="M.Pharma" <?php if($recData['reg_highest_edu']=="M.Pharma"){?> selected<?php }?>>-  M.Pharma</option>
<option value="M.S. (Engineering)" <?php if($recData['reg_highest_edu']=="M.S. (Engineering)"){?> selected<?php }?>>-  M.S. (Engineering)</option>
<option value="B.Arch" <?php if($recData['reg_highest_edu']=="B.Arch"){?> selected<?php }?>>-  B.Arch</option>
<option value="M.Arch" <?php if($recData['reg_highest_edu']=="M.Arch"){?> selected<?php }?>>-  M.Arch</option>
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
 Educational Details</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <input type="text" placeholder="Enter Educational Details" name="join_edu_detail" id="join_edu_detail" value="<?=$recData['reg_edu_detail']?>" class="dsbo-fom-1">
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <span class="font-red">*</span>Occupation</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <select class="dsbo-fom-1" name="join_occupation" id="join_occupation">
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
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
 Annual income</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
      <select class="dsbo-fom-1" name="join_member_annual_income" id="join_member_annual_income">
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
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
  Working Sector</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
<select class="dsbo-fom-1" name="join_organization_name" id="join_organization_name" >
<option  value="0">----Select Working Sector----</option>
<option  value="Government" <?php if($recData['reg_organization_name']=="Government"){?> selected <?php }?>>Government</option>
<option  value="Private" <?php if($recData['reg_organization_name']=="Private"){?> selected <?php }?>>Private</option>
<option  value="Business" <?php if($recData['reg_organization_name']=="Business"){?> selected <?php }?>>Business</option>
<option  value="Defence" <?php if($recData['reg_organization_name']=="Defence"){?> selected <?php }?>>Defence</option>
<option  value="Self Employed" <?php if($recData['reg_organization_name']=="Self Employed"){?> selected <?php }?>>Self Employed</option>
<option  value="Not working" <?php if($recData['reg_organization_name']=="Not working"){?> selected <?php }?>>Not working</option>
</select>
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
  Working Location</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
  <input type="text" placeholder="----Enter Working Location----" name="join_working_location" id="join_working_location" value="<?=$recData['reg_working_location']?>" class="dsbo-fom-1">
      </div>
      </div>
      
       </div>
         <div class="clearfix"></div>
       </div>
       <!----------->
       <h3 id="religious-spot" onClick="validateAll('Edu')" >Religious Background <span class="arrow-r"></span></h3>
					<div>
                  <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
       
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf1">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="font-red">*</span>Religion</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="join_religion" id="join_religion" onChange="byReligion(this.value)"> 
<option value="0">----Select Religion----</option>
<?php
$sql="SELECT * FROM tbl_community WHERE c_status='Active' AND c_parent_id='0'";
$dataCommunity=db_query($sql);
$countCommunity=mysqli_num_rows($dataCommunity);
if($countCommunity){
while($recCommunity=mysqli_fetch_array($dataCommunity)){	
?>
<option value="<?=$recCommunity['c_title']?>" <?php if($recData['reg_religion']==$recCommunity['c_title']){?> selected<?php }?> >
<?=$recCommunity['c_title']?></option>
<?php
}
}
?>
</select>
</div>
      </div>
      
</div>

       
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="community_load_area" 
<?php if($recData['reg_religion']=="Parsi" || $recData['reg_religion']=="Buddhist" || $recData['reg_religion']=="Jewish" ){?> style="display:none" <?php }?>  >

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" >

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
<span class="font-red">*</span>Community</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="join_cast" id="join_cast">
<option  value="0">----Select Community----</option>      
<?php if(!empty($recData['reg_cast'])){?>
<option value="<?=$recData['reg_cast']?>" selected><?=$recData['reg_cast']?></option>
<?php }?>
</select>
</div>
</div>

</div>




<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
Sub Community</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<input type="text" placeholder="Enter Sub Community" name="join_sub_cast" id="join_sub_cast" value="<?=$recData['reg_sub_cast']?>" class="dsbo-fom-1">
</div>
</div>
</div>
      
<?php /*?><div  <?php if($recData['reg_namaz']!=""){?> class="col-lg-12 dsp-block"  <?php }else{?> class="col-lg-12 dsp-non" <?php }?>  id="muslim">      
<?php */?>      


<div <?php if(!empty($recData['reg_religion']) && $recData['reg_religion']=="Muslim"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="muslim">      


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof" >
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  Namaaz / Salaah</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">

<select class="dsbo-fom-1"  name="join_namaz" id="join_namaz">
    
<option  value="0">----Select Namaaz / Salaah----</option>
<option value="Five times" label="Five times" <?php if($recData['reg_namaz']=="Five times"){?> selected<?php }?>   >Five times</option>
<option value="Only on Jummah" label="Only on Jummah" <?php if($recData['reg_namaz']=="Only on Jummah"){?> selected<?php }?>>Only on Jummah</option>
<option value="During Ramadan" label="During Ramadan" <?php if($recData['reg_namaz']=="During Ramadan"){?> selected<?php }?> >During Ramadan</option>
<option value="Occasionally" label="Occasionally" <?php if($recData['reg_namaz']=="Occasionally"){?> selected<?php }?>  >Occasionally</option>

</select>

      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Zakaat</div>
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
  <input type="radio" name="join_zakaat" id="join_zakaat_yes" value="Yes" <?php if($recData['reg_zakaat']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
  <input type="radio" name="join_zakaat" id="join_zakaat_no" value="No" <?php if($recData['reg_zakaat']=="No"){?> checked <?php }?>> No
  </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Fasting in Ramadan</div>
  
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
  <input type="radio" name="join_fasting" id="join_fasting_yes" value="Yes" <?php if($recData['reg_fasting']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
  <input type="radio" name="join_fasting" id="join_fasting_no" value="No" <?php if($recData['reg_fasting']=="No"){?> checked <?php }?>> No
  </div>
  
      </div>
      </div>
      
      
<div <?php if(!empty($recData['reg_religion']) && $recData['reg_religion']=="Hindu"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="hindu">      


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof" >
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  Gotra</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

 <input type="text" placeholder=" Enter Your Gotra" name="join_gotra_hindu" id="join_gotra_hindu" value="<?=$recData['reg_gotra']?>" class="dsbo-fom-1">

      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Dosh</div>
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
  <input type="radio" name="join_dosh_hindu" id="join_dosh_hindu_yes" value="Yes" <?php if($recData['reg_dosh']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
  <input type="radio" name="join_dosh_hindu" id="join_dosh_hindu_no" value="No" <?php if($recData['reg_dosh']=="No"){?> checked <?php }?>> No
  </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Star</div>
  
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
  <input type="radio" name="join_star_hindu" id="join_star_hindu_yes" value="Yes" <?php if($recData['reg_star']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
  <input type="radio" name="join_star_hindu" id="join_star_hindu_no" value="No" <?php if($recData['reg_star']=="No"){?> checked <?php }?>> No
  </div>
  
      </div>
      </div>
      
      

<div <?php if(!empty($recData['reg_religion']) && $recData['reg_religion']=="Sikh"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="sikh">      


  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Wearing Dastar/Pagg</div>
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
  <input type="radio" name="join_dastar" id="join_dastar_yes" value="Yes" <?php if($recData['reg_dastar']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
  <input type="radio" name="join_dastar" id="join_dastar_no" value="No" <?php if($recData['reg_dastar']=="No"){?> checked <?php }?>> No
  </div>
      </div>
      
      </div>
            
      
      
<div <?php if(!empty($recData['reg_religion']) && $recData['reg_religion']=="Jain"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="jain">      


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof" >
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
  Gotra</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">

 <input type="text" placeholder=" Enter Your Gotra" name="join_gotra_jain" id="join_gotra_jain" value="<?=$recData['join_gotra']?>" class="dsbo-fom-1">

      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Dosh</div>
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
  <input type="radio" name="join_dosh_jain" id="join_dosh_jain_yes" value="Yes" <?php if($recData['reg_dosh']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
  <input type="radio" name="join_dosh_jain" id="join_dosh_jain_no" value="No" <?php if($recData['reg_dosh']=="No"){?> checked <?php }?>> No
  </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Star</div>
  
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
  <input type="radio" name="join_star_jain" id="join_star_jain_yes" value="Yes" <?php if($recData['reg_star']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
  <input type="radio" name="join_star_jain" id="join_star_jain_no" value="No" <?php if($recData['reg_star']=="No"){?> checked <?php }?>> No
  </div>
  
      </div>
      </div>            
      
      
      
  <div class="clearfix"></div>
       </div>
       <!--------->
       
       					<h3 id="lifestyle-spot" onClick="validateAll('Religion')">Lifestyle And Habits<span class="arrow-r"></span></h3>
					<div>
       <div class="col-md-12 bgmsf1">
      <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
       
       
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <span class="font-red">*</span>Appearance </div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <select class="dsbo-fom-1" name="join_appearance" id="join_appearance">
       <option  value="0">----Select Appearance----</option>
       <option  value="Fair"  <?php if($recData['reg_appearance']=="Fair"){?> selected <?php }?>  >Fair</option>
       <option  value="Wheatis" <?php if($recData['reg_appearance']=="Wheatis"){?> selected <?php }?> >Wheatis</option>
       <option  value="Dark" <?php if($recData['reg_appearance']=="Dark"){?> selected <?php }?>  > Dark</option>
      </select>
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  Living Status</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <select class="dsbo-fom-1" name="join_living_status" id="join_living_status">
       <option  value="0">----Select Living Status----</option>
<option  value="Traditional" <?php if($recData['reg_living_status']=="Traditional"){?> selected <?php }?>>Traditional</option>
<option  value="Moderate" <?php if($recData['reg_living_status']=="Moderate"){?> selected <?php }?>>Moderate</option>
<option  value="Liberal" <?php if($recData['reg_living_status']=="Liberal"){?> selected <?php }?>>Liberal</option>
      </select>

      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <span class="font-red">*</span>Physical Status</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <select class="dsbo-fom-1" name="join_physical_status" id="join_physical_status" >
       <option  value="0">----Select Physical Status----</option>
       <option  value="Slim" <?php if($recData['reg_physical_status']=="Slim"){?> selected <?php }?> >Slim</option>
       <option  value="Average/Athletic" <?php if($recData['reg_physical_status']=="Average/Athletic"){?> selected <?php }?> >Average/Athletic</option>
       <option  value="Heavy" <?php if($recData['reg_physical_status']=="Heavy"){?> selected <?php }?>>Heavy</option>
      </select>
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  Eating Habits</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<select class="dsbo-fom-1" name="join_eating_habits" id="join_eating_habits">
<option  value="0">----Select Eating Habits--</option>
<option  value="Veg" <?php if($recData['reg_eating_habits']=="Veg"){?> selected <?php }?>>Veg</option>
<option  value="Non-Veg" <?php if($recData['reg_eating_habits']=="Non-Veg"){?> selected <?php }?>>Non-Veg</option>
<option  value="Eggiterian" <?php if($recData['reg_eating_habits']=="Eggiterian"){?> selected <?php }?>>Eggiterian</option>       
       
        
      </select>
      </div>
      </div>
      
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  Smoking Habits</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <select class="dsbo-fom-1" name="join_smoking_habits" id="join_smoking_habits">
       <option  value="0" >----Select Smoking Habits----</option>
       <option  value="Non-smoker" <?php if($recData['reg_smoking_habits']=="Non-smoker"){?> selected <?php }?>>Non-smoker</option>
       <option  value="Regular smoker" <?php if($recData['reg_smoking_habits']=="Regular smoker"){?> selected <?php }?>>Regular smoker</option>
      </select>
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  Drinking Habits</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <select class="dsbo-fom-1" name="join_drinking_habits" id="join_drinking_habits">
       <option  value="0">----Select Drinking Habits----</option>
       <option  value="Non-drinker"  <?php if($recData['reg_drinking_habits']=="Non-drinker"){?> selected <?php }?>>Non-drinker</option>
       <option  value="Drinks Occasionally"  <?php if($recData['reg_drinking_habits']=="Drinks Occasionally"){?> selected <?php }?>>Drinks Occasionally</option>
      </select>
      </div>
      </div>
      

      
       </div>
         <div class="clearfix"></div>
       </div>

       
            
     <h3 onClick="validateAll('Life')" id="like-spot">Likes & Interests<span class="arrow-r"></span></h3>
					<div>
                    
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf1">
       <p class="fld-mntr"><!--(All Fields are Mandatory. )-->&nbsp;</p>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  Hobbies</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <input type="text" placeholder="Enter your Hobbies" name="join_hobbies" id="join_hobbies" value="<?=$recData['reg_hobbies']?>" class="dsbo-fom-1">
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  Interests</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <input type="text" placeholder="Enter your Interests" name="join_interests" id="join_interests" value="<?=$recData['reg_interests']?>" class="dsbo-fom-1">
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  Favourite Music</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <input type="text" placeholder="Enter your Favourite Music" name="join_favourite_music" id="join_favourite_music" value="<?=$recData['reg_favourite_music']?>" class="dsbo-fom-1">
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  Favourite Book</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <input type="text" placeholder="Enter your Favourite Book" class="dsbo-fom-1" name="join_favourite_book" id="join_favourite_book" value="<?=$recData['reg_favourite_book']?>">
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  Dress Style</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <input type="text" placeholder="Enter your Dress Style" class="dsbo-fom-1" name="join_dress_style" id="join_dress_style" value="<?=$recData['reg_dress_style']?>">
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  TV Shows</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <input type="text" placeholder="Enter your TV Shows" class="dsbo-fom-1" name="join_tv_shows" id="join_tv_shows" value="<?=$recData['reg_tv_shows']?>">
      </div>
      </div>
      
       </div>
         <div class="clearfix"></div>
       </div> 
        <h3 onClick="validateAll('Like')" id="contact-spot"> Contact Details<span class="arrow-r"></span></h3>
					<div>
                    
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf1">
       <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <span class="font-red">*</span>Mobile No</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <input type="text" maxlength="10" placeholder="Enter your Mobile No" class="dsbo-fom-1"  name="join_member_mobile" id="join_member_mobile"  value="<?=$recData['reg_mobile_no']?>" readonly>
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <span class="font-red">&nbsp;</span>Alternate No.</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <input type="text" maxlength="10" placeholder="Enter your Alternate No." class="dsbo-fom-1" name="join_member_alt_mobile" id="join_member_alt_mobile"   value="<?=$recData['reg_member_alt_mobile']?>">
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <span class="font-red">*</span>Email Id</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <input type="text" placeholder="Enter your Email Id" class="dsbo-fom-1" name="join_member_email" id="join_member_email"   value="<?php if($recData['reg_for']=='Self'){echo $recData['reg_email'];}else{echo $recData['reg_member_email'];}?>" <?php if($recData['reg_for']=='Self'){?> readonly <?php }else{}?>>
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <span class="font-red">*</span>Suitable time to call</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  <input type="text" placeholder="Enter your Suitable time to call" class="dsbo-fom-1" name="join_member_call_time" id="join_member_call_time"   value="<?=$recData['reg_member_call_time']?>">
      </div>
      </div>


       </div>
         <div class="clearfix"></div>
       </div>
        <h3 onClick="validateAll('Contact')" id="about-myself-spot">A Few Words About Myself<span class="arrow-r"></span></h3>
					<div>
                    
                    <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>

       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bgmsf1">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-msof">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
 <span class="font-red">*</span>About Me</div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      
<textarea onkeydown="textCounter(document.getElementById('join_mem_myself'),document.getElementById('remLen'),100);" onkeyup="textCounter(document.getElementById('join_mem_myself'),document.getElementById('remLen'),100); "  class="dsbo-fom-1 tex-area" name="join_mem_myself" id="join_mem_myself" placeholder="Prospective matches would like to know what you are like, as a person. Write about yourself. "><?=$recData['reg_mem_myself']?></textarea>

<p class="abt-me">
<span id="lbl-count-abt"><input name="remLen" type="text" id="remLen" value="0" readonly style="border:none; color:#DD0000; font-weight:bold; width:35px;margin:5px 0 0 0;text-align:center" />Characters</span>
<span class="pull-right"><span class="font-red">Note:</span> Minimum Character 100</span>
</p>
      
      
      </div>
      </div>
       </div>
       
         <div class="clearfix"></div>
         
       </div>
       
       
       
				</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ptop5">
                
<a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1 " href="Javascript:void(0)" onClick="validateAll('Myself')"  >Next <i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></a>                
                
               <!-- <a href="#" class="btn-sbmt pd02" onClick="update_myself_details('nxt');saveAllDetail('nxt');">Next <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>-->

<a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1 ml10 " href="Javascript:void(0)" onClick="saveAllDetailSkip();" >Skip & Save <i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></a>                

<!--
                <a href="#" class="btn-sbmt pd02" onClick="update_myself_details('skip');saveAllDetail('skip')">Skip & Save</a>-->
        <!--<input type="submit" value="Create Profile" class="btn-sbmt">-->
        <!--<input type="reset" value="Reset" class="btn-Resetd">-->
        </div>
                

         
        </div>
        <!---end-images--->
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd_3 mp_2mso">
       <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg_1">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <h2>Recently Joined</h2>
      </div>
      
      </div>
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg">
     
<?php
$recJoined=db_query("select reg_id,reg_profile_photo,reg_age,reg_height from tbl_registration where reg_status='Active' and reg_profile_photo!='' order by reg_id desc limit 10");
while($recRow=mysqli_fetch_array($recJoined)){?>
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00 stb-bg">
    
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center sr-mpp">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Sui">
    <a href=""><img src="<?=SITE_WS_PATH?>/upload_images/<?=$recRow['reg_profile_photo']?>" class="img-seq"></a>
    </div> </div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 Sui-cnt">
    <h5><a href="" class="Sui-name">(R<?=$recRow['reg_id']?>)</a></h5>
    <p><?=$recRow['reg_age']?> Yrs, <?=$recRow['reg_height']?>"</p>
  
    </div>
    </div>
    
<?php }?>

 
      
    </div>
    </div>
    
    
<!--    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd_3 mp_2mso">
       <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg_1">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <h2>Visitors(100)</h2>
      </div>
      </div>
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sb-db-hdg">
     
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_db_00 stb-bg-reph">
      <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3 sr-mpp">
	 <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12  text-center Sui-dsr1">
        <img src="images/visible.jpg" class="img-seq2" title="View Profile">
      </div></div>
       <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3 sr-mpp">
	 <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12  text-center Sui-dsr1">
       <img src="images/15.jpg" class="img-seq2" title="View Profile">
      </div></div>
      <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3 sr-mpp">
	 <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12  text-center Sui-dsr1">
       <img src="images/profile1.jpg" class="img-seq2" title="View Profile">
      </div></div>
      <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3 sr-mpp">
	 <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12  text-center Sui-dsr1">
       <img src="images/visible.jpg" class="img-seq2" title="View Profile">
      </div></div>
       
       </div>
      <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 mp_db_00 box-sdo">
                   <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 next-prv text-center">
                   <p>2 of 8 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
                   </div>
                  </div>
      </div>
    </div>-->
    
      
      <!----------->
    </div>
     
    </div> 
    </div>
    </div>
</section> 

  <footer class="main-footer">
    <div class="footer-bottom">
      <div class="auto-container">
        <div class="copyright">All rights reserved &copy; 2023 Thebestweddinghub. &ensp;<span class="fa fa-heart" style="color:#fff;"></span>&ensp; Designed by : <a href="http://www.webkeyindia.com/" target="_blank">WebKeyIndia.Com - Best SEO Company In India</a></div>
    </div>
  </div>
</footer>
</div>
<style>

#myBtn {
  display: none;
  position: fixed;
  bottom: 140px;
  right: 27px;
  z-index: 99;
  font-size: 20px;
  border: none;
  outline: none;
  background-color: #00bbd4;
  color: white;
  cursor: pointer;
  padding-top:0px;
  border-radius: 100%; width:45px; height:45px;
}

#myBtn:hover {
  background-color: #555;
}
		@media (min-width:320px) and (max-width:767px) 
{
#myBtn {
bottom:40px;
right:15px;}}
</style>
<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>
<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>
<script src="<?=SITE_WS_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_WS_PATH?>/js/script.js"></script>
<script src="<?=SITE_WS_PATH?>/js/menuzord.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jPushMenu.js"></script>
<script src="<?=SITE_WS_PATH?>/js/owl.js"></script>
<script src="<?=SITE_WS_PATH?>/js/customcollection.js"></script>
<script src="<?=SITE_WS_PATH?>/js/custom1.js"></script>
<!-----left-accordian--------->
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible.js"></script> 
<script>
/* For date field */
var d = new Date();
var currYear=d.getFullYear();
var check_male;
var year_male;
var year_female;
  $( function() {
    $('#join_gender_male').click(function(){
     var male=$(this).val();
     check_male=male;
     year_male=currYear-21;

    $( ".dob").datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: "1900:"+year_male,
	  dateFormat: "dd/mm/yy"
    });
  });

     $('#join_gender_female').click(function(){
     var female=$(this).val();
     check_female=female;
     year_female=currYear-18;
     
    $( ".dob").datepicker({
      changeMonth: true,
      changeYear: true,
    yearRange: "1900:"+year_female,
    dateFormat: "dd/mm/yy"
    });
  });
});

/* Collapse Control */
$('#collapse-menu').collapsible({
  contentOpen:["0",""]
});


/* Calculating age from dob. */
$('#join_dob').on('change', function () {
				
var dob=$('#join_dob').val();
var dateString = dob.match(/^(\d{2})\/(\d{2})\/(\d{4})$/);
var dob = new Date( dateString[3], dateString[2]-1, dateString[1] );

var d = new Date();
var month = d.getMonth()+1;
var day = d.getDate();

var currDate = (month<10 ? '0' : '') + month + '/' + (day<10 ? '0' : '') + day +'/' + d.getFullYear();
var currDate = new Date(currDate);
var dob = new Date(dob);
	
var a = currDate.getDate() + (currDate.getMonth() + (currDate.getFullYear() - 1700) * 16) * 32;
var b = dob.getDate() + (dob.getMonth() + (dob.getFullYear() - 1700) * 16) * 32;
var x = Math.floor((a - b) / 32 / 16);
var age= x < 0 ? null : x;
	
		
      if (age) {        
      	$("#join_age").val(age);
        var gen_male=document.getElementById('join_gender_male');
        var gen_female=document.getElementById('join_gender_female');
        if(gen_male.checked){
         if(age<'21'){
          alert('You are not eligible');
          $("#join_age").val("");      
          return false;
         }
        }else if(gen_female.checked){
        if(age<'18'){
          alert('You are not eligible');
          $("#join_age").val("");      
          return false;
         }
        } 
      } else {
        $("#join_age").val("");   
      }      
	  
});

/* Checking Blanck Space */ 
function trim_input(str){return str.replace(/^\s*|\s*$/g,'');}

</script>


<input type="hidden" name="validCond" id="validCond" value="0" />
<input type="hidden" name="vCount" id="vCount" value="0" />

<script>
function validateAll(reqFrom){
// Basic Details

var radios = document.getElementsByName("join_gender");
    var formValid = false;

    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    }
	
	var radios_disability = document.getElementsByName("join_is_any_disability");
    var disabilityValid = false;

    var j = 0;
    while (!disabilityValid && j < radios_disability.length) {
        if (radios_disability[j].checked) disabilityValid = true;
        j++;        
    }
	
///////////////////////	

var evHeight = document.getElementById("join_height");
        var optionSelIndexHeight = evHeight.options[evHeight.selectedIndex].value;
        var optionSelectedTextHeight = evHeight.options[evHeight.selectedIndex].text;
		
var evMarital = document.getElementById("join_marital_status");
        var optionSelIndexMarital = evMarital.options[evMarital.selectedIndex].value;
        var optionSelectedTextMarital = evMarital.options[evMarital.selectedIndex].text;
		
var evTongue = document.getElementById("join_mother_tongue");
        var optionSelIndexTongue = evTongue.options[evTongue.selectedIndex].value;
        var optionSelectedTextTongue = evTongue.options[evTongue.selectedIndex].text;
		
var evProfile = document.getElementById("join_profile_manage_by");
        var optionSelIndexProfile = evProfile.options[evProfile.selectedIndex].value;
        var optionSelectedTextProfile = evProfile.options[evProfile.selectedIndex].text;
		
var evCountry = document.getElementById("join_country");
        var optionSelIndexCountry = evCountry.options[evCountry.selectedIndex].value;
        var optionSelectedTextCountry = evCountry.options[evCountry.selectedIndex].text;



var evState= document.getElementById("join_state");
        var optionSelIndexState = evState.options[evState.selectedIndex].value;
        var optionSelectedTextState = evState.options[evState.selectedIndex].text;		


if(reqFrom=="Basic"){   // Conditional Updation

if(trim_input(document.getElementById('join_name').value)==""){
alert("Enter Your Full Name !");
document.getElementById('join_name').focus();
return false;	
}else if (!document.getElementById('join_name').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){
alert("Please enter only alphabets !");
document.getElementById('join_name').focus();
return false;
}else if(!formValid){
alert("Please choose a gender !");
document.getElementById("join_gender_male").focus();	   
return false;
}else if(trim_input(document.getElementById('join_dob').value)==""){
alert("Enter Your DOB !");
document.getElementById('join_dob').focus();
return false;	
}else if(trim_input(document.getElementById('join_age').value)==""){
alert("You are not eligible !");
return false; 
}else if (optionSelIndexHeight == 0) {
			alert("Please choose your height !");
		    document.getElementById("join_height").focus();
			return false;
}else if (optionSelIndexMarital == 0) {
			alert("Please choose your marital status !");
			document.getElementById("join_marital_status").focus();
			return false;
}else if (optionSelIndexTongue == 0) {
			alert("Please choose your mother tongue !");
			document.getElementById("join_mother_tongue").focus();
			return false;
}else if(!disabilityValid){
alert("Please choose a physical status !");
document.getElementById("join_is_any_disability_yes").focus();	   
return false;
}else if (optionSelIndexProfile == 0) {
			alert("Please choose your profile management option !");
			document.getElementById("join_profile_manage_by").focus();
			return false;
}else {
// Main code start //


var join_name=document.getElementById('join_name').value;

var join_gender;

if(document.getElementById('join_gender_male').checked){
join_gender=document.getElementById('join_gender_male').value;
}

if(document.getElementById('join_gender_female').checked){
join_gender=document.getElementById('join_gender_female').value;
}

var join_dob=document.getElementById('join_dob').value;
var join_age=document.getElementById('join_age').value;
var join_height=document.getElementById('join_height').value;
var join_marital_status=document.getElementById('join_marital_status').value;
var join_mother_tongue=document.getElementById('join_mother_tongue').value;


var join_is_any_disability;

if(document.getElementById('join_is_any_disability_yes').checked){
join_is_any_disability=document.getElementById('join_is_any_disability_yes').value;
}

if(document.getElementById('join_is_any_disability_no').checked){
join_is_any_disability=document.getElementById('join_is_any_disability_no').value;
}

//var join_is_any_disability=document.getElementById('join_is_any_disability').value;

var join_aadhar_number=document.getElementById('join_aadhar_number').value;
var join_profile_manage_by=document.getElementById('join_profile_manage_by').value;
var join_blood_group=document.getElementById('join_blood_group').value;
var regID=document.getElementById('regID').value;

//$("#sec-2").removeClass("hideDiv");
///// FOR GENDER ///////

	
var param="join_name="+join_name+"&join_gender="+join_gender+"&join_dob="+join_dob+"&join_age="+join_age+"&join_height="+join_height+"&join_marital_status="+join_marital_status+"&join_mother_tongue="+join_mother_tongue+"&join_is_any_disability="+join_is_any_disability+"&join_aadhar_number="+join_aadhar_number+"&join_profile_manage_by="+join_profile_manage_by+"&join_blood_group="+join_blood_group+"&regID="+regID;	
	
//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=basic&"+param;
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

// Location Detail Start
if(reqFrom=="Location"){  // Conditional Updation

if(optionSelIndexCountry == 0) {	
            alert("Please choose your country !");
			document.getElementById("join_country").focus();
			return false;
}else if(optionSelIndexState == 0) {
            alert("Please choose your state !");
			document.getElementById("join_state").focus();
			return false;
}else{

var join_country=document.getElementById('join_country').value;
var join_state=document.getElementById('join_state').value;
var join_city=document.getElementById('join_city').value;
var regID=document.getElementById('regID').value;


var param="join_country="+join_country+"&join_state="+join_state+"&join_city="+join_city+"&regID="+regID;	

var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=location&"+param;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

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
        scrollTop: $("#family-spot").offset().top-50
}, 1000);


}

}



if(reqFrom=="Family"){  // Conditional Updation

var evFather = document.getElementById("join_father_status");
        var optionSelIndexFather = evFather.options[evFather.selectedIndex].value;
        var optionSelectedTextFather = evFather.options[evFather.selectedIndex].text;


var evMother = document.getElementById("join_mother_status");
        var optionSelIndexMother = evMother.options[evMother.selectedIndex].value;
        var optionSelectedTextMother = evMother.options[evMother.selectedIndex].text;


var evSiblingsBro = document.getElementById("join_siblings_bro");
        var optionSelIndexSiblingsBro = evSiblingsBro.options[evSiblingsBro.selectedIndex].value;
        var optionSelectedTextSiblingsBro = evSiblingsBro.options[evSiblingsBro.selectedIndex].text;
		
		
var evSiblingsSis = document.getElementById("join_siblings_sis");
        var optionSelIndexSiblingsSis = evSiblingsSis.options[evSiblingsSis.selectedIndex].value;
        var optionSelectedTextSiblingsSis = evSiblingsSis.options[evSiblingsSis.selectedIndex].text;		


if (optionSelIndexFather == 0) {
alert("Please choose your father status !");
document.getElementById("join_father_status").focus();
return false;
}else if (optionSelIndexMother == 0) {
alert("Please choose your mother status !");
document.getElementById("join_mother_status").focus();
return false;
}else if (optionSelIndexSiblingsBro == "") {
alert("Please choose your siblings status !");
document.getElementById("join_siblings_bro").focus();
return false;
}else if (optionSelIndexSiblingsSis == "") {
alert("Please choose your siblings status !");
document.getElementById("join_siblings_sis").focus();
return false;
}else{

var join_father_status=document.getElementById('join_father_status').value;
var join_mother_status=document.getElementById('join_mother_status').value;
var join_siblings_bro=document.getElementById('join_siblings_bro').value;
var join_siblings_sis=document.getElementById('join_siblings_sis').value;
var join_siblings_marital_status_bro=document.getElementById('join_siblings_marital_status_bro').value;
var join_siblings_marital_status_sis=document.getElementById('join_siblings_marital_status_sis').value;
var join_family_status=document.getElementById('join_family_status').value;
var join_family_type=document.getElementById('join_family_type').value;
var join_family_values=document.getElementById('join_family_values').value;
var join_annual_income=document.getElementById('join_annual_income').value;
var join_family_living_in=document.getElementById('join_family_living_in').value;
var regID=document.getElementById('regID').value;
	
var param="join_father_status="+join_father_status+"&join_mother_status="+join_mother_status+"&join_siblings_bro="+join_siblings_bro+"&join_siblings_sis="+join_siblings_sis+"&join_siblings_marital_status_bro="+join_siblings_marital_status_bro+"&join_siblings_marital_status_sis="+join_siblings_marital_status_sis+"&join_family_status="+join_family_status+"&join_family_type="+join_family_type+"&join_family_values="+join_family_values+"&join_annual_income="+join_annual_income+"&join_family_living_in="+join_family_living_in+"&regID="+regID;

//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=family&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{	
document.getElementById('area-title').innerHTML='Family Detail';	
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
        scrollTop: $("#edu-spot").offset().top-50
}, 1000);

}
}



if(reqFrom=="Edu"){  // Conditional Updation

// Education & Career
var ev_highest_edu = document.getElementById("join_highest_edu");
var optionSelIndex_highest_edu = ev_highest_edu.options[ev_highest_edu.selectedIndex].value;
var optionSelectedText_highest_edu = ev_highest_edu.options[ev_highest_edu.selectedIndex].text;


var ev_occupation = document.getElementById("join_occupation");
var optionSelIndex_occupation = ev_occupation.options[ev_occupation.selectedIndex].value;
var optionSelectedText_occupation = ev_occupation.options[ev_occupation.selectedIndex].text;


if (optionSelIndex_highest_edu == 0) {
alert("Please choose your heighest education !");
document.getElementById("join_highest_edu").focus();
return false;
}else if (optionSelIndex_occupation == 0) {
alert("Please choose your occupation !");
document.getElementById("join_occupation").focus();
return false;
}else{
	
var join_highest_edu=document.getElementById('join_highest_edu').value;
var join_edu_detail=document.getElementById('join_edu_detail').value;
var join_occupation=document.getElementById('join_occupation').value;
var join_member_annual_income=document.getElementById('join_member_annual_income').value;
var join_organization_name=document.getElementById('join_organization_name').value;
var join_working_location=document.getElementById('join_working_location').value;
var regID=document.getElementById('regID').value;
			
var param="join_highest_edu="+join_highest_edu+"&join_edu_detail="+join_edu_detail+"&join_occupation="+join_occupation+"&join_member_annual_income="+join_member_annual_income+"&join_organization_name="+join_organization_name+"&join_working_location="+join_working_location+"&regID="+regID;

//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=edu&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Education & Career';	
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



if(reqFrom=="Religion"){  // Conditional Updation

// Religious Background

var evReligion = document.getElementById("join_religion");
var optionSelIndexReligion = evReligion.options[evReligion.selectedIndex].value;
var optionSelectedTextReligion = evReligion.options[evReligion.selectedIndex].text;


//alert(optionSelIndexReligion)

var evCast= document.getElementById("join_cast");
var optionSelIndexCast = evCast.options[evCast.selectedIndex].value;
var optionSelectedTextCast = evCast.options[evCast.selectedIndex].text;

var evNamaz = document.getElementById("join_namaz");
var optionSelIndexNamaz = evNamaz.options[evNamaz.selectedIndex].value;
var optionSelectedTextNamaz = evNamaz.options[evNamaz.selectedIndex].text;


//////////  FOR ZAKAAT ///////////
var radios_zakaat = document.getElementsByName("join_zakaat");
var zakaatValid = false;

var i = 0;
while (!zakaatValid && i < radios_zakaat.length) {
if (radios_zakaat[i].checked) zakaatValid = true;
i++;        
}
////////////////////////////////


//////////  FOR FASTING ///////////
var radios_fasting = document.getElementsByName("join_fasting");
var fastingValid = false;

var i = 0;
while (!fastingValid && i < radios_fasting.length) {
if (radios_fasting[i].checked) fastingValid = true;
i++;        
}
////////////////////////////////


//////////  FOR Dosh Hindu ///////////
var radios_dosh_hindu = document.getElementsByName("join_dosh_hindu");
var doshValidHindu = false;

var i = 0;
while (!doshValidHindu && i < radios_dosh_hindu.length) {
if (radios_dosh_hindu[i].checked) doshValidHindu = true;
i++;        
}
////////////////////////////////



//////////  FOR Star ///////////
var radios_star_hindu = document.getElementsByName("join_star_hindu");
var starValidHindu = false;

var i = 0;
while (!starValidHindu && i < radios_star_hindu.length) {
if (radios_star_hindu[i].checked) starValidHindu = true;
i++;        
}
////////////////////////////////




//////////  FOR Dosh Jain ///////////
var radios_dosh_jain = document.getElementsByName("join_dosh_jain");
var doshValidJain = false;

var i = 0;
while (!doshValidJain && i < radios_dosh_jain.length) {
if (radios_dosh_jain[i].checked) doshValidJain = true;
i++;        
}
////////////////////////////////



//////////  FOR Star JAIN ///////////
var radios_star_jain = document.getElementsByName("join_star_jain");
var starValidJain = false;

var i = 0;
while (!starValidJain && i < radios_star_jain.length) {
if (radios_star_jain[i].checked) starValidJain = true;
i++;        
}
////////////////////////////////







//////////  FOR Wearing Dastar/Pagg  ///////////
var radios_dastar = document.getElementsByName("join_dastar");
var dastarValid = false;

var i = 0;
while (!dastarValid && i < radios_dastar.length) {
if (radios_dastar[i].checked) dastarValid = true;
i++;        
}
////////////////////////////////


if (optionSelIndexReligion == 0) {
alert("Please choose your religion !");
document.getElementById("join_religion").focus();
return false;
}else if (optionSelIndexCast == 0) {
alert("Please choose your community !");
document.getElementById("join_cast").focus();
return false;
}/*else if(trim_input(document.getElementById('join_sub_cast').value)==""){
alert("Enter Your Sub Community !");
document.getElementById('join_sub_cast').focus();
return false;	
}else if (!document.getElementById('join_sub_cast').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){
alert("Please enter only alphabets !");
document.getElementById('join_sub_cast').focus();
return false;
}*/
/*else if (optionSelIndexNamaz == 0 && optionSelIndexReligion=="Muslim") {   ////////  ========
alert("Please choose your namaz status!");
document.getElementById("join_namaz").focus();
return false;
}else if((!zakaatValid) && optionSelIndexReligion=="Muslim"){
alert("Please choose zakaat status !");
document.getElementById("join_zakaat").focus();	   
return false;
}else if((!fastingValid) && optionSelIndexReligion=="Muslim"){
alert("Please choose fasting status !");
document.getElementById("join_fasting").focus();	   
return false;
}else if(trim_input(document.getElementById('join_gotra_hindu').value)==""  && optionSelIndexReligion=="Hindu"){
alert("Enter Your Gotra!");
document.getElementById('join_gotra_hindu').focus();
return false;	
}else if (!document.getElementById('join_gotra_hindu').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/) && optionSelIndexReligion=="Hindu" ){
alert("Please enter only alphabets !");
document.getElementById('join_gotra_hindu').focus();
return false;
}else if(trim_input(document.getElementById('join_gotra_jain').value)==""  && optionSelIndexReligion=="Jain"){
alert("Enter Your Gotra!");
document.getElementById('join_gotra_jain').focus();
return false;	
}else if (!document.getElementById('join_gotra_jain').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/) && optionSelIndexReligion=="Jain" ){
alert("Please enter only alphabets !");
document.getElementById('join_gotra_jain').focus();
return false;
}else if((!doshValidHindu) && (optionSelIndexReligion=="Hindu")){
alert("Please choose dosh status !");
document.getElementById("join_dosh_hindu").focus();	   
return false;
}else if((!starValidHindu) && (optionSelIndexReligion=="Hindu")){
alert("Please choose star status !");
document.getElementById("join_star_hindu").focus();	   
return false;
}else if((!doshValidJain) && (optionSelIndexReligion=="Jain")){
alert("Please choose dosh status !");
document.getElementById("join_dosh_jain").focus();	   
return false;
}else if((!starValidJain) && (optionSelIndexReligion=="Jain")){
alert("Please choose star status !");
document.getElementById("join_dosh_jain").focus();	   
return false;
}else if((!dastarValid) && (optionSelIndexReligion=="Sikh")){
alert("Please choose dastar/pagg status !");
document.getElementById("join_dastar").focus();	   
return false;
}*/else{


var join_religion=document.getElementById('join_religion').value;
var join_cast=document.getElementById('join_cast').value;
var join_sub_cast=document.getElementById('join_sub_cast').value;

//var join_gotra=document.getElementById('join_gotra').value;

var join_gotra;
if(document.getElementById('join_gotra_hindu').value!=""){
join_gotra=document.getElementById('join_gotra_hindu').value;
}

if(document.getElementById('join_gotra_jain').value!=""){
join_gotra=document.getElementById('join_gotra_jain').value;
}


var join_namaz=document.getElementById('join_namaz').value;
//var join_zakaat=document.getElementById('join_zakaat').value;
//var join_fasting=document.getElementById('join_fasting').value;
var regID=document.getElementById('regID').value;

/// FOR ZAKAAT
var join_zakaat;
if(document.getElementById('join_zakaat_yes').checked){
join_zakaat=document.getElementById('join_zakaat_yes').value;
}

if(document.getElementById('join_zakaat_no').checked){
join_zakaat=document.getElementById('join_zakaat_no').value;
}

// FOR FASTING
var join_fasting;

if(document.getElementById('join_fasting_yes').checked){
join_fasting=document.getElementById('join_fasting_yes').value;
}

if(document.getElementById('join_fasting_no').checked){
join_fasting=document.getElementById('join_fasting_no').value;
}


// FOR DOSH Hindu
var join_dosh;

if(document.getElementById('join_dosh_hindu_yes').checked){
join_dosh=document.getElementById('join_dosh_hindu_yes').value;
}

if(document.getElementById('join_dosh_hindu_no').checked){
join_dosh=document.getElementById('join_dosh_hindu_no').value;
}

if(document.getElementById('join_dosh_jain_yes').checked){
join_dosh=document.getElementById('join_dosh_jain_yes').value;
}

if(document.getElementById('join_dosh_jain_no').checked){
join_dosh=document.getElementById('join_dosh_jain_no').value;
}



// FOR STAR
var join_star;

if(document.getElementById('join_star_hindu_yes').checked){
join_star=document.getElementById('join_star_hindu_yes').value;
}

if(document.getElementById('join_star_hindu_no').checked){
join_star=document.getElementById('join_star_hindu_no').value;
}


if(document.getElementById('join_star_jain_yes').checked){
join_star=document.getElementById('join_star_jain_yes').value;
}

if(document.getElementById('join_star_jain_no').checked){
join_star=document.getElementById('join_star_jain_no').value;
}


// FOR dastar
var join_dastar;

if(document.getElementById('join_dastar_yes').checked){
join_dastar=document.getElementById('join_dastar_yes').value;
}

if(document.getElementById('join_dastar_no').checked){
join_dastar=document.getElementById('join_dastar_no').value;
}


var param="join_religion="+join_religion+"&join_cast="+join_cast+"&join_sub_cast="+join_sub_cast+"&join_namaz="+join_namaz+"&join_zakaat="+join_zakaat+"&join_fasting="+join_fasting+"&join_dosh="+join_dosh+"&join_star="+join_star+"&join_dastar="+join_dastar+"&join_gotra="+join_gotra+"&regID="+regID;

	
//var param="join_religion="+join_religion+"&join_cast="+join_cast+"&join_sub_cast="+join_sub_cast+"&join_namaz="+join_namaz+"&join_zakaat="+join_zakaat+"&join_fasting="+join_fasting+"&regID="+regID;


var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=religion&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

//alert(req.responseText)

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Religious Background';	
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




if(reqFrom=="Life"){  // Conditional Updation


//// Life Style & Habits
var evAppearance = document.getElementById("join_appearance");
var optionSelIndexAppearance = evAppearance.options[evAppearance.selectedIndex].value;
var optionSelectedTextAppearance = evAppearance.options[evAppearance.selectedIndex].text;

var ev_physical_status = document.getElementById("join_physical_status");
var optionSelIndex_physical_status = ev_physical_status.options[ev_physical_status.selectedIndex].value;
var optionSelectedText_physical_status = ev_physical_status.options[ev_physical_status.selectedIndex].text;


if (optionSelIndexAppearance == 0) {
alert("Please choose your appearance!");
document.getElementById("join_appearance").focus();
return false;
}else if (optionSelIndex_physical_status == 0) {
alert("Please choose your physical status!");
document.getElementById("join_physical_status").focus();
return false;
}else{

var join_appearance=document.getElementById('join_appearance').value;
var join_living_status=document.getElementById('join_living_status').value;
var join_physical_status=document.getElementById('join_physical_status').value;
var join_eating_habits=document.getElementById('join_eating_habits').value;
var join_smoking_habits=document.getElementById('join_smoking_habits').value;
var join_drinking_habits=document.getElementById('join_drinking_habits').value;
var regID=document.getElementById('regID').value;


		
var param="join_appearance="+join_appearance+"&join_living_status="+join_living_status+"&join_physical_status="+join_physical_status+"&join_eating_habits="+join_eating_habits+"&join_smoking_habits="+join_smoking_habits+"&join_drinking_habits="+join_drinking_habits+"&regID="+regID;

//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=lifestyle&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Lifestyle And Habits';	
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
        scrollTop: $("#like-spot").offset().top-50
}, 1000);


}

}




if(reqFrom=="Like"){  // Conditional Updation


var evAppearance = document.getElementById("join_appearance");
var optionSelIndexAppearance = evAppearance.options[evAppearance.selectedIndex].value;
var optionSelectedTextAppearance = evAppearance.options[evAppearance.selectedIndex].text;

var ev_physical_status = document.getElementById("join_physical_status");
var optionSelIndex_physical_status = ev_physical_status.options[ev_physical_status.selectedIndex].value;
var optionSelectedText_physical_status = ev_physical_status.options[ev_physical_status.selectedIndex].text;


if (optionSelIndexAppearance == 0) {
alert("Please choose your appearance!");
document.getElementById("join_appearance").focus();
return false;
}else if (optionSelIndex_physical_status == 0) {
alert("Please choose your physical status!");
document.getElementById("join_physical_status").focus();
return false;
}else{
	
var join_hobbies=document.getElementById('join_hobbies').value;
var join_interests=document.getElementById('join_interests').value;
var join_favourite_music=document.getElementById('join_favourite_music').value;
var join_favourite_book=document.getElementById('join_favourite_book').value;
var join_dress_style=document.getElementById('join_dress_style').value;
var join_tv_shows=document.getElementById('join_tv_shows').value;
var regID=document.getElementById('regID').value;



var param="join_hobbies="+join_hobbies+"&join_interests="+join_interests+"&join_favourite_music="+join_favourite_music+"&join_favourite_book="+join_favourite_book+"&join_dress_style="+join_dress_style+"&join_tv_shows="+join_tv_shows+"&regID="+regID;

//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=likes&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Likes & Interests';	
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
        scrollTop: $("#contact-spot").offset().top-50
}, 1000);

}
}



if(reqFrom=="Contact"){  // Conditional Updation

// Contact Detail
var mobno=trim_input(document.getElementById('join_member_mobile').value);
var alt_mobno=trim_input(document.getElementById('join_member_alt_mobile').value);
var email=trim_input(document.getElementById('join_member_email').value);
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


if(trim_input(document.getElementById('join_member_mobile').value)==""){
	alert("Enter your mobile no.!");
	document.getElementById('join_member_mobile').focus();
	return false;
}else if(isNaN(document.getElementById('join_member_mobile').value)){
	alert("Mobile no. should be no.!");
	document.getElementById('join_member_mobile').focus();
	return false;
}else if(mobno.length < 10){
	alert("Mobile no. should be 10 digit long !");
	document.getElementById('join_member_mobile').focus();
	return false;
}else if(email==''){
	  alert('Please Enter Member Email address');
	  document.getElementById('join_member_email').focus();
	  return false;
}else if(!email.match(mailformat)){
alert("You have entered an invalid email address!");
document.getElementById('join_member_email').focus();
return false;
}else if(trim_input(document.getElementById('join_member_call_time').value)==""){
alert("Enter suitable time to call !");
document.getElementById('join_member_call_time').focus();
return false;	
}else{

var join_member_mobile=document.getElementById('join_member_mobile').value;
var join_member_alt_mobile=document.getElementById('join_member_alt_mobile').value;
var join_member_email=document.getElementById('join_member_email').value;
var join_member_call_time=document.getElementById('join_member_call_time').value;
var regID=document.getElementById('regID').value;



		
var param="join_member_mobile="+join_member_mobile+"&join_member_alt_mobile="+join_member_alt_mobile+"&join_member_email="+join_member_email+"&join_member_call_time="+join_member_call_time+"&regID="+regID;

//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=contact&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Contact Details';	
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
        scrollTop: $("#about-myself-spot").offset().top-50
}, 1000);

}
}


if(reqFrom=="Myself"){  // Conditional Updation

var my_self=trim_input(document.getElementById('join_mem_myself').value);
var res = my_self.toLowerCase();
if(trim_input(document.getElementById('join_member_call_time').value)==""){
alert("Enter previous detail !");
document.getElementById('join_member_call_time').focus();
return false;	
}else{

if(trim_input(document.getElementById('join_mem_myself').value)==""){
alert("Enter few words about myself !");
document.getElementById('join_mem_myself').focus();
return false;
}else if(trim_input(document.getElementById('join_mem_myself').value).length<100){
alert("Enter enter at least 100 character about myself !");
document.getElementById('join_mem_myself').focus();
return false;
}else if(res.match(/[0-9]/g)){
alert("Numbers are not allowed !");
document.getElementById('join_mem_myself').focus();
return false;
}else if(res.match(/one/g) || res.match(/two/g) || res.match(/three/g) || res.match(/four/g) || res.match(/five/g) || res.match(/six/g) || res.match(/seven/g) || res.match(/eight/g) || res.match(/nine/g) || res.match(/ten/g) || res.match(/eleven/g) || res.match(/twelve/g) || res.match(/thirteen/g) || res.match(/fourteen/g) || res.match(/fifteen/g) || res.match(/sixteen/g) || res.match(/seventeen/g) || res.match(/eighteen/g) || res.match(/nineteen/g) || res.match(/twenty/g)){
      alert('Invalid characters !');
document.getElementById('join_mem_myself').focus();
      return false; 
    }else{

var join_mem_myself=document.getElementById('join_mem_myself').value;
var regID=document.getElementById('regID').value;
	
var param="join_mem_myself="+join_mem_myself+"&regID="+regID;
//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=myself&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{


document.getElementById('area-title').innerHTML='About Myself';	
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
        scrollTop: $("#about-myself-spot").offset().top-50
}, 1000);


}

window.location='upload-photo.php';

}

}

//if(act=='nxt'){
//window.location='upload-photo.php';	
//}else if(act=='skip'){
//window.location='welcome.php';		
//}


}
</script>

<script>
function saveAllDetailSkip(){

// Basic Details
var join_name=document.getElementById('join_name').value;

var join_gender;

if(document.getElementById('join_gender_male').checked){
join_gender=document.getElementById('join_gender_male').value;
}

if(document.getElementById('join_gender_female').checked){
join_gender=document.getElementById('join_gender_female').value;
}

var join_dob=document.getElementById('join_dob').value;
var join_age=document.getElementById('join_age').value;
var join_height=document.getElementById('join_height').value;
var join_marital_status=document.getElementById('join_marital_status').value;
var join_mother_tongue=document.getElementById('join_mother_tongue').value;


var join_is_any_disability;

if(document.getElementById('join_is_any_disability_yes').checked){
join_is_any_disability=document.getElementById('join_is_any_disability_yes').value;
}

if(document.getElementById('join_is_any_disability_no').checked){
join_is_any_disability=document.getElementById('join_is_any_disability_no').value;
}

//var join_is_any_disability=document.getElementById('join_is_any_disability').value;

var join_aadhar_number=document.getElementById('join_aadhar_number').value;
var join_profile_manage_by=document.getElementById('join_profile_manage_by').value;
var join_blood_group=document.getElementById('join_blood_group').value;
var regID=document.getElementById('regID').value;

//$("#sec-2").removeClass("hideDiv");
///// FOR GENDER ///////

	
var param="join_name="+join_name+"&join_gender="+join_gender+"&join_dob="+join_dob+"&join_age="+join_age+"&join_height="+join_height+"&join_marital_status="+join_marital_status+"&join_mother_tongue="+join_mother_tongue+"&join_is_any_disability="+join_is_any_disability+"&join_aadhar_number="+join_aadhar_number+"&join_profile_manage_by="+join_profile_manage_by+"&join_blood_group="+join_blood_group+"&regID="+regID;	
	
//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=basic&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}


} 
}
}
req.open("GET",str,true);
req.send(null);

// Location Detail Start

var join_country=document.getElementById('join_country').value;
var join_state=document.getElementById('join_state').value;
var join_city=document.getElementById('join_city').value;
var regID=document.getElementById('regID').value;

var param="join_country="+join_country+"&join_state="+join_state+"&join_city="+join_city+"&regID="+regID;	

var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=location&"+param;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}

} 

}
}

req.open("GET",str,true);
req.send(null);

//Family

var join_father_status=document.getElementById('join_father_status').value;
var join_mother_status=document.getElementById('join_mother_status').value;
var join_siblings=document.getElementById('join_siblings').value;
var join_siblings_marital_status=document.getElementById('join_siblings_marital_status').value;
var join_family_status=document.getElementById('join_family_status').value;
var join_family_type=document.getElementById('join_family_type').value;
var join_family_values=document.getElementById('join_family_values').value;
var join_annual_income=document.getElementById('join_annual_income').value;
var join_family_living_in=document.getElementById('join_family_living_in').value;
var regID=document.getElementById('regID').value;
	
var param="join_father_status="+join_father_status+"&join_mother_status="+join_mother_status+"&join_siblings="+join_siblings+"&join_siblings_marital_status="+join_siblings_marital_status+"&join_family_status="+join_family_status+"&join_family_type="+join_family_type+"&join_family_values="+join_family_values+"&join_annual_income="+join_annual_income+"&join_family_living_in="+join_family_living_in+"&regID="+regID;

//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=family&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}

} 
}


}

req.open("GET",str,true);
req.send(null);

// Education & Career
var join_highest_edu=document.getElementById('join_highest_edu').value;
var join_edu_detail=document.getElementById('join_edu_detail').value;
var join_occupation=document.getElementById('join_occupation').value;
var join_member_annual_income=document.getElementById('join_member_annual_income').value;
var join_organization_name=document.getElementById('join_organization_name').value;
var join_working_location=document.getElementById('join_working_location').value;
var regID=document.getElementById('regID').value;
			
var param="join_highest_edu="+join_highest_edu+"&join_edu_detail="+join_edu_detail+"&join_occupation="+join_occupation+"&join_member_annual_income="+join_member_annual_income+"&join_organization_name="+join_organization_name+"&join_working_location="+join_working_location+"&regID="+regID;

//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=edu&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}
} 
}
}
req.open("GET",str,true);
req.send(null);

// Religious Background
var join_religion=document.getElementById('join_religion').value;
var join_cast=document.getElementById('join_cast').value;
var join_sub_cast=document.getElementById('join_sub_cast').value;
var join_namaz=document.getElementById('join_namaz').value;
var regID=document.getElementById('regID').value;

var join_zakaat;

if(document.getElementById('join_zakaat_yes').checked){
join_zakaat=document.getElementById('join_zakaat_yes').value;
}

if(document.getElementById('join_zakaat_no').checked){
join_zakaat=document.getElementById('join_zakaat_no').value;
}


var join_fasting;

if(document.getElementById('join_fasting_yes').checked){
join_fasting=document.getElementById('join_fasting_yes').value;
}

if(document.getElementById('join_fasting_no').checked){
join_fasting=document.getElementById('join_fasting_no').value;
}


	
var param="join_religion="+join_religion+"&join_cast="+join_cast+"&join_sub_cast="+join_sub_cast+"&join_namaz="+join_namaz+"&join_zakaat="+join_zakaat+"&join_fasting="+join_fasting+"&regID="+regID;


var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=religion&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){


if(req.responseText==0){
alert('Unable to save this detail.');
}


} 
}
}
req.open("GET",str,true);
req.send(null);




//// Life Style & Habits

var join_appearance=document.getElementById('join_appearance').value;
var join_living_status=document.getElementById('join_living_status').value;
var join_physical_status=document.getElementById('join_physical_status').value;
var join_eating_habits=document.getElementById('join_eating_habits').value;
var join_smoking_habits=document.getElementById('join_smoking_habits').value;
var join_drinking_habits=document.getElementById('join_drinking_habits').value;
var regID=document.getElementById('regID').value;


		
var param="join_appearance="+join_appearance+"&join_living_status="+join_living_status+"&join_physical_status="+join_physical_status+"&join_eating_habits="+join_eating_habits+"&join_smoking_habits="+join_smoking_habits+"&join_drinking_habits="+join_drinking_habits+"&regID="+regID;

//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=lifestyle&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}


} 
}
}
req.open("GET",str,true);
req.send(null);




var join_hobbies=document.getElementById('join_hobbies').value;
var join_interests=document.getElementById('join_interests').value;
var join_favourite_music=document.getElementById('join_favourite_music').value;
var join_favourite_book=document.getElementById('join_favourite_book').value;
var join_dress_style=document.getElementById('join_dress_style').value;
var join_tv_shows=document.getElementById('join_tv_shows').value;
var regID=document.getElementById('regID').value;



var param="join_hobbies="+join_hobbies+"&join_interests="+join_interests+"&join_favourite_music="+join_favourite_music+"&join_favourite_book="+join_favourite_book+"&join_dress_style="+join_dress_style+"&join_tv_shows="+join_tv_shows+"&regID="+regID;

//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=likes&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}


} 
}
}
req.open("GET",str,true);
req.send(null);



// Contact Detail
var join_member_mobile=document.getElementById('join_member_mobile').value;
var join_member_alt_mobile=document.getElementById('join_member_alt_mobile').value;
var join_member_email=document.getElementById('join_member_email').value;
var join_member_call_time=document.getElementById('join_member_call_time').value;
var regID=document.getElementById('regID').value;

		
var param="join_member_mobile="+join_member_mobile+"&join_member_alt_mobile="+join_member_alt_mobile+"&join_member_email="+join_member_email+"&join_member_call_time="+join_member_call_time+"&regID="+regID;

//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=contact&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}

} 
}
}
req.open("GET",str,true);
req.send(null);



var join_mem_myself=document.getElementById('join_mem_myself').value;
var regID=document.getElementById('regID').value;
	
var param="join_mem_myself="+join_mem_myself+"&regID="+regID;
//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=myself&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}

} 
}
}
req.open("GET",str,true);
req.send(null);

window.location='welcome.php?id='+regID;		
	
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

<script>
function byReligion(religion){

if(religion=="Hindu"){

$("#jain").hide();	
$("#muslim").hide();
$("#sikh").hide();	
$("#community_load_area").show();		

document.getElementById('hindu').style.display='block'


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community.php?religion="+religion;
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
var str="<?=SITE_WS_PATH?>/fill-community.php?religion="+religion;

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
var str="<?=SITE_WS_PATH?>/fill-community.php?religion="+religion;

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
var str="<?=SITE_WS_PATH?>/fill-community.php?religion="+religion;

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
var str="<?=SITE_WS_PATH?>/fill-community.php?religion="+religion;
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
	
}
</script>

<script>
function toggleBroSis(){

var siblingsCountBro=$("#join_siblings_bro").val();
var siblingsCountSis=$("#join_siblings_sis").val();

if(siblingsCountBro>0 || siblingsCountSis>0){
$("#show-bro-sis").slideDown("fast");

$('#show-bro-sis').fadeOut('slow').load('load-bro-sis.php?siblingsCountBro='+siblingsCountBro+"&siblingsCountSis="+siblingsCountSis).fadeIn("slow");
}else{
$("#show-bro-sis").slideUp("fast");	
}

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

<!---------------------------->
<script>
// Get the modaldolly
var modaldolly = document.getElementById("mymodaldollychat1");

// Get the button that opens the modaldolly
var btn = document.getElementById("myBtn2");

// Get the <span> element that closechat2s the modaldolly
var span = document.getElementsByClassName("closechat2")[0];

// When the user clicks the button, open the modaldolly 
btn.onclick = function() {
  modaldolly.style.display = "block";
}

// When the user clicks on <span> (x), closechat2 the modaldolly
span.onclick = function() {
  modaldolly.style.display = "none";
}

// When the user clicks anywhere outside of the modaldolly, closechat2 it
window.onclick = function(event) {
  if (event.target == modaldolly) {
    modaldolly.style.display = "none";
  }
}
</script>