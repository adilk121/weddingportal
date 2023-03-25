<?php require_once("includes/dbsmain.inc.php");?>
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
select.ui-datepicker-month {
    color: #000;
}

select.ui-datepicker-year {
    color: #000;
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
<input type="hidden" name="regID" id="regID"  value="<?=$_SESSION['regID']?>" />



          
<div id="collapse-menu" class="collapse-container" style="border:solid 1px #e4e4e4;">

<h3>Basic Details    <span class="arrow-r"></span></h3>
<div>
<p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
<div class="col-md-12 bgmsf1">
<div class="col-md-12 pd-msof">
<div class="col-md-3"><span class="font-red">*</span>Full Name</div>
<div class="col-md-9">
   <input type="text" placeholder="Enter Full Name" name="join_name" id="join_name" value="<?=$recData['reg_name']?>" class="dsbo-fom-1">
  </div>
  </div>                   
  <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Gender</div>
  <div class="col-md-3">
<input type="radio" name="join_gender" id="join_gender_male" value="Male" <?php if($recData['reg_gender']=="Male"){?> checked <?php }?>> Male
  </div>
  
  <div class="col-md-2">
<input type="radio" name="join_gender" id="join_gender_female" value="Female" <?php if($recData['reg_gender']=="Female"){?> checked <?php }?>> Female 
  </div>
<div class="col-md-4">
  &nbsp;
</div>
      </div>
  <div class="col-md-12 pd-msof">
  <div class="col-md-3"><span class="font-red">*</span>Date of birth</div>
  <div class="col-md-9">

   <div class='input-group date' >
<input type='text' name="join_dob" class="form-control" placeholder=" Enter your date of birth" id="join_dob" value="<?php if($recData['reg_dob']!="" && $recData['reg_dob']!="0000-00-00"){echo date("d/m/Y",strtotime($recData['reg_dob']));}?>" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                
                
                
  <?php /*?><input type="date" data-date-format="DD/MM/YYYY"  placeholder="Enter Date of birth" name="join_dob" id="join_dob" value="<?=$recData['reg_dob']?>" class="dsbo-fom-1"><?php */?>
  </div>
  </div>
       <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Age</div>
  <div class="col-md-9 mp_03">
  <div class="col-md-5">
  
<input type="text" placeholder="Enter your age" name="join_age" id="join_age" value="<?=$recData['reg_age']?>" class="dsbo-fom-1">  
  
<?php /*?><select class="dsbo-fom-1" name="join_age" id="join_age">


<?php for($i=18;$i<=70;$i++){?>      
<option value="<?=$i?>" <?php if($recData['reg_age']==$i){?> selected <?php }?>      ><?=$i?></option>
<?php }?>       
</select><?php */?>
      </div>
      <div class="col-md-2 text-center mp_db_00 frm-hdg_db">
      <span class="font-red">*</span>Height
      </div>
      
<div class="col-md-5">
<select class="dsbo-fom-1" name="join_height" id="join_height">
<option value="0" selected="selected">----Select Height----</option>
<option value="4' 5'' - 134cm" <?php if($recData['reg_height']=="4' 5'' - 134cm"){?> selected <?php }?> >
4' 5'' - 134cm</option>
<option value="4' 6'' - 137cm" <?php if($recData['reg_height']=="4' 6'' - 137cm"){?> selected <?php }?> >
4' 6'' - 137cm</option>
<option value="4' 7'' - 139cm" <?php if($recData['reg_height']=="4' 7'' - 139cm"){?> selected <?php }?> >
4' 7'' - 139cm</option>
<option value="4' 8'' - 142cm" <?php if($recData['reg_height']=="4' 8'' - 142cm"){?> selected <?php }?> >
4' 8'' - 142cm</option>
<option value="4' 9'' - 144cm" <?php if($recData['reg_height']=="4' 9'' - 144cm"){?> selected <?php }?> >
4' 9'' - 144cm</option>
<option value="4' 10'' - 147cm" <?php if($recData['reg_height']=="4' 10'' - 147cm"){?> selected <?php }?> >
4' 10'' - 147cm</option>
<option value="4' 11'' - 149cm" <?php if($recData['reg_height']=="4' 11'' - 149cm"){?> selected <?php }?> >
4' 11'' - 149cm</option>
<option value="5' - 152cm" <?php if($recData['reg_height']=="5' - 152cm"){?> selected <?php }?> >
5' - 152cm</option>
<option value="5' 1'' - 154cm" <?php if($recData['reg_height']=="5' 1'' - 154cm"){?> selected <?php }?> >
5' 1'' - 154cm</option>
<option value="5' 2'' - 157cm" <?php if($recData['reg_height']=="5' 2'' - 157cm"){?> selected <?php }?> >
5' 2'' - 157cm</option>
<option value="5' 3'' - 160cm" <?php if($recData['reg_height']=="5' 3'' - 160cm"){?> selected <?php }?> >
5' 3'' - 160cm</option>
<option value="5' 4'' - 162cm" <?php if($recData['reg_height']=="5' 4'' - 162cm"){?> selected <?php }?> >
5' 4'' - 162cm</option>
<option value="5' 5'' - 165cm" <?php if($recData['reg_height']=="5' 5'' - 165cm"){?> selected <?php }?> >
5' 5'' - 165cm</option>
<option value="5' 6'' - 167cm" <?php if($recData['reg_height']=="5' 6'' - 167cm"){?> selected <?php }?> >
5' 6'' - 167cm</option>
<option value="5' 7'' - 170cm" <?php if($recData['reg_height']=="5' 7'' - 170cm"){?> selected <?php }?> >
5' 7'' - 170cm</option>
<option value="5' 8'' - 172cm" <?php if($recData['reg_height']=="5' 8'' - 172cm"){?> selected <?php }?> >
5' 8'' - 172cm</option>
<option value="5' 9'' - 175cm" <?php if($recData['reg_height']=="5' 9'' - 175cm"){?> selected <?php }?> >
5' 9'' - 175cm</option>
<option value="5' 10'' - 177cm" <?php if($recData['reg_height']=="5' 10'' - 177cm"){?> selected <?php }?> >
5' 10'' - 177cm</option>
<option value="5' 11'' - 180cm" <?php if($recData['reg_height']=="5' 11'' - 180cm"){?> selected <?php }?> >
5' 11'' - 180cm</option>
<option value="6' - 182cm" <?php if($recData['reg_height']=="6' - 182cm"){?> selected <?php }?> >
6' - 182cm</option>
<option value="6' 1'' - 185cm" <?php if($recData['reg_height']=="6' 1'' - 185cm"){?> selected <?php }?> >
6' 1'' - 185cm</option>
<option value="6' 2'' - 187cm" <?php if($recData['reg_height']=="6' 2'' - 187cm"){?> selected <?php }?> >
6' 2'' - 187cm</option>
<option value="6' 3'' - 190cm" <?php if($recData['reg_height']=="6' 3'' - 190cm"){?> selected <?php }?> >
6' 3'' - 190cm</option>
<option value="6' 4'' - 193cm" <?php if($recData['reg_height']=="6' 4'' - 193cm"){?> selected <?php }?> >
6' 4'' - 193cm</option>
<option value="6' 5'' - 195cm" <?php if($recData['reg_height']=="6' 5'' - 195cm"){?> selected <?php }?> >
6' 5'' - 195cm</option>
<option value="6' 6'' - 198cm" <?php if($recData['reg_height']=="6' 6'' - 198cm"){?> selected <?php }?> >
6' 6'' - 198cm</option>
<option value="6' 7'' - 200cm" <?php if($recData['reg_height']=="6' 7'' - 200cm"){?> selected <?php }?> >
6' 7'' - 200cm</option>
<option value="6' 8'' - 203cm" <?php if($recData['reg_height']=="6' 8'' - 203cm"){?> selected <?php }?> >
6' 8'' - 203cm</option>
<option value="6' 9'' - 205cm" <?php if($recData['reg_height']=="6' 9'' - 205cm"){?> selected <?php }?> >
6' 9'' - 205cm</option>
<option value="6' 10'' - 208cm" <?php if($recData['reg_height']=="6' 10'' - 208cm"){?> selected <?php }?> >
6' 10'' - 208cm</option>
<option value="6' 11'' - 210cm" <?php if($recData['reg_height']=="6' 11'' - 210cm"){?> selected <?php }?> >
6' 11'' - 210cm</option>
</select>
      </div>
      <div class="clearfix"></div>
      </div>
      </div>
      
      <!-------->
     
       
       <div class="col-md-12 pd-msof">
  <div class="col-md-3"><span class="font-red">*</span>Marital Status</div>
  <div class="col-md-9">
   <select class="dsbo-fom-1" name="join_marital_status" id="join_marital_status" >

<option value="0" selected="selected">----Select Marital Status----</option>
<option value="Doesn't Matter" <?php if($recData['reg_marital_status']=="Doesn't Matter"){?> selected <?php }?> >Doesn't Matter</option>
<option value="Never Married"  <?php if($recData['reg_marital_status']=="Never Married"){?> selected <?php }?>>Never Married</option>
<option value="Divorced" <?php if($recData['reg_marital_status']=="Divorced"){?> selected <?php }?> >Divorced</option>
<option value="Widowed" <?php if($recData['reg_marital_status']=="Widowed"){?> selected <?php }?>>Widowed</option>
<option value="Awaiting Divorce" <?php if($recData['reg_marital_status']=="Awaiting Divorce"){?> selected <?php }?>>Awaiting Divorce</option>
<option value="Annulled" <?php if($recData['reg_marital_status']=="Annulled"){?> selected <?php }?> >Annulled</option>
      </select>
  </div>
  </div>
       
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Mother Tongue</div>
  <div class="col-md-9">
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
      
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Any Disability</div>
  <div class="col-md-3">
  <input type="radio" name="join_is_any_disability" id="join_is_any_disability_yes" value="No" <?php if($recData['reg_is_any_disability']=="No"){?> checked <?php }?>> Normal
  </div>
<div class="col-md-6">
  <input type="radio" name="join_is_any_disability" id="join_is_any_disability_no" value="Yes" <?php if($recData['reg_is_any_disability']=="Yes"){?> checked <?php }?>> Physically Challenged
</div>

      </div>
      
      <div class="col-md-12 pd-msof">
   <div class="col-md-3">Aadhar Number</div>
  <div class="col-md-9">
  <input type="text" placeholder="Enter Aadhar Number" name="join_aadhar_number" id="join_aadhar_number" class="dsbo-fom-1" value="<?=$recData['reg_aadhar_number']?>" >
  </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Profile&nbsp;Management&nbsp;by</div>
  <div class="col-md-9">
  <select class="dsbo-fom-1" name="join_profile_manage_by" id="join_profile_manage_by" >
  <option value="0">----Select Profile Management by----</option>
<option value="Self" <?php if($recData['reg_profile_manage_by']=="Self"){?> selected <?php }?> >Self</option>
<option value="Sibling" <?php if($recData['reg_profile_manage_by']=="Sibling"){?> selected <?php }?>  >Sibling</option>
<option value="Parent" <?php if($recData['reg_profile_manage_by']=="Parent"){?> selected <?php }?> >Parent</option>
<option value="Friend" <?php if($recData['reg_profile_manage_by']=="Friend"){?> selected <?php }?>  >Friend</option>
    </select>
  </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3">Blood Group</div>
  <div class="col-md-9">
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
<h3 id="location-spot" onClick="update_basic_details('req_next')">Location Details<span class="arrow-r"></span></h3>
					<div id="sec-2">
                     <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
       <div class="col-md-12 bgmsf1">
        <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Country</div>
  <div class="col-md-9">
<select class="dsbo-fom-1" name="join_country" id="join_country" onChange="showstate(this.value);">
<option value="0" selected="selected">----Select Country----</option>
<?php
$sql_country=db_query("select * from tbl_country_master where 1 and status='Active'");
if(mysqli_num_rows($sql_country)>0){
while($data=mysqli_fetch_array($sql_country)){
@extract($data);
?>
<option value="<?=$data['contId']?>" <?php if($recData['reg_country_id']==$data['contId']){?> selected <?php }?>>
<?=$data['contName']?>
</option>
<?
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
<select class="dsbo-fom-1" name="join_state" id="join_state">
<option value="0" selected="selected">----Select State----</option>
<option value="<?=$recData['reg_state_id']?>" <?php if($recData['reg_state_id']!=""){?> selected <?php }?>>
<?=$recData['reg_state_name']?>
</option>
</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  District/City</div>
  <div class="col-md-9">
      <input type="text" placeholder="Enter your city" name="join_city" id="join_city" value="<?=$recData['reg_city']?>" class="dsbo-fom-1">

      </div>
      </div>
       
       </div>
       <div class="clearfix"></div>
       </div>
                     <!------------------->
       
       <h3 id="family-spot" onClick="update_location_details('req_next')">Famliy Details<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
 <span class="font-red">*</span> Father's Status</div>
  <div class="col-md-9">
<select class="dsbo-fom-1" name="join_father_status" id="join_father_status">
<option  value="0">----Select Father's Status----</option>
<option value="Any" <?php if($recData['reg_father_status']=="Any"){?> selected<?php }?> >Any</option>
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
<option value="Retired" <?php if($recData['reg_father_status']=="Retired"){?> selected<?php }?> >Retired</option>
<option value="Others" <?php if($recData['reg_father_status']=="Others"){?> selected<?php }?> >Others</option>
<option value="Business" <?php if($recData['reg_father_status']=="Business"){?> selected<?php }?>>Business</option>
<option value="Not working" <?php if($recData['reg_father_status']=="Not working"){?> selected<?php }?> >Not working</option>
<option value="Doctor" <?php if($recData['reg_father_status']=="Doctor"){?> selected<?php }?> >Doctor</option>
<option value="Engineer" <?php if($recData['reg_father_status']=="Engineer"){?> selected<?php }?> >Engineer</option>
</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
 <span class="font-red">*</span>Mother's Status</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_mother_status" id="join_mother_status" >
       <option  value="0">----Select Mother's Status----</option>
<option value="Any" <?php if($recData['reg_mother_status']=="Any"){?> selected<?php }?> >Any</option>
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
<option value="Retired" <?php if($recData['reg_mother_status']=="Retired"){?> selected<?php }?> >Retired</option>
<option value="Others" <?php if($recData['reg_mother_status']=="Others"){?> selected<?php }?> >Others</option>
<option value="Business" <?php if($recData['reg_mother_status']=="Business"){?> selected<?php }?>>Business</option>
<option value="Not working" <?php if($recData['reg_mother_status']=="Not working"){?> selected<?php }?> >Not working</option>
<option value="Doctor" <?php if($recData['reg_mother_status']=="Doctor"){?> selected<?php }?> >Doctor</option>
<option value="Engineer" <?php if($recData['reg_mother_status']=="Engineer"){?> selected<?php }?> >Engineer</option>

</select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
 <span class="font-red">*</span>Siblings Status</div>
<div class="col-md-9">

<select class="dsbo-fom-1" name="join_siblings" id="join_siblings" >
<option  value="0" selected >----Select Siblings Status----</option>
<option  value="0" >None</option>
<?php for($i=1;$i<=20;$i++){ ?>
<option  value="<?=$i?>" <?php if($recData['reg_siblings']==$i){?> selected <?php }?> ><?=$i?></option>
<?php }?>
</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
 Siblings Maritial Status</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_siblings_marital_status" id="join_siblings_marital_status" >
<option  value="">----Select Siblings Maritial Status----</option>

<option value="Doesn't Matter" <?php if($recData['reg_siblings_marital_status']=="Doesn't Matter"){?> selected<?php }?>  >Doesn't Matter</option>
<option value="Never Married" <?php if($recData['reg_siblings_marital_status']=="Never Married"){?> selected<?php }?>>Never Married</option>
<option value="Divorced" <?php if($recData['reg_siblings_marital_status']=="Divorced"){?> selected<?php }?> >Divorced</option>
<option value="Widowed" <?php if($recData['reg_siblings_marital_status']=="Widowed"){?> selected<?php }?>  >Widowed</option>
<option value="Awaiting Divorce" <?php if($recData['reg_siblings_marital_status']=="Awaiting Divorce"){?> selected<?php }?> >Awaiting Divorce</option>
<option value="Annulled" <?php if($recData['reg_siblings_marital_status']=="Annulled"){?> selected<?php }?> >Annulled</option>
</select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">Family Status</div>
  <div class="col-md-9">
   <select class="dsbo-fom-1" name="join_family_status" id="join_family_status">
   <option value="0" >----Select Family Status----</option>

<option value="Middle class" <?php if($recData['reg_family_status']=="Middle class"){?> selected<?php }?> >Middle class</option>
<option value="Upper middle class" <?php if($recData['reg_family_status']=="Upper middle class"){?> selected<?php }?> >Upper middle class</option>
<option value="Rich" <?php if($recData['reg_family_status']=="Rich"){?> selected<?php }?> >Rich</option>
<option value="Affluent" <?php if($recData['reg_family_status']=="Affluent"){?> selected<?php }?>>Affluent</option>
</select>
  </div>
  </div>
  <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Family type</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_family_type" id="join_family_type">
<option  value="0">----Select Family type----</option>
<option  value="Joint Family" <?php if($recData['reg_family_type']=="Joint Family"){?> selected <?php }?>>Joint Family</option>
<option  value="Nuclear Family" <?php if($recData['reg_family_type']=="Nuclear Family"){?> selected <?php }?> >Nuclear Family</option>
<option  value="Others" <?php if($recData['reg_family_type']=="Others"){?> selected <?php }?> >Others</option>

      </select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Family Values</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_family_values" id="join_family_values">
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
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
 Annual income</div>
  <div class="col-md-9">
<select class="dsbo-fom-1" name="join_annual_income" id="join_annual_income">
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
      </select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
 Family living in</div>
  <div class="col-md-9">
      <input type="text" placeholder="Enter Family living in" name="join_family_living_in" id="join_family_living_in" value="<?=$recData['reg_family_living_in']?>" class="dsbo-fom-1">
      </div>
      </div>
      
       </div>
         <div class="clearfix"></div>
       </div>	
                    
         <!----------3rd----------->
					<h3 id="edu-spot" onClick="update_family_details('req_next');">Education & Career<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Highest Education</div>
  <div class="col-md-9">
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
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
 Educational Details</div>
  <div class="col-md-9">
      <input type="text" placeholder="Enter Educational Details" name="join_edu_detail" id="join_edu_detail" value="<?=$recData['reg_edu_detail']?>" class="dsbo-fom-1">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Occupation</div>
  <div class="col-md-9">
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
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
 Annual income</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_member_annual_income" id="join_member_annual_income">
       <option  value="0">----Select Annual income----</option>
<option  value="Any" <?php if($recData['reg_member_annual_income']=="Any"){?> selected <?php }?> >Any</option>
<option  value="Less than Rs.50 thousand" <?php if($recData['reg_member_annual_income']=="Less than Rs.50 thousand"){?> selected <?php }?> >Less than Rs.50 thousand</option>
<option  value="Rs.50 thousand" <?php if($recData['reg_member_annual_income']=="Rs.50 thousand"){?> selected <?php }?> >Rs.50 thousand</option>
<option  value="Rs 1 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 1 Lakh"){?> selected <?php }?> >Rs 1 Lakh</option>
<option  value="Rs 2 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 2 Lakh"){?> selected <?php }?>  >Rs 2 Lakh</option>
<option  value="Rs 3 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 3 Lakh"){?> selected <?php }?>>Rs 3 Lakh</option>
<option  value="Rs 4 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 4 Lakh"){?> selected <?php }?> >Rs 4 Lakh</option>
<option  value="Rs 5 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 5 Lakh"){?> selected <?php }?>>Rs 5 Lakh</option>
<option  value="Rs 6 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 6 Lakh"){?> selected <?php }?>>Rs 6 Lakh</option>
<option  value="Rs 7 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 7 Lakh"){?> selected <?php }?>>Rs 7 Lakh</option>
<option  value="Rs 8 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 8 Lakh"){?> selected <?php }?>>Rs 8 Lakh</option>
<option  value="Rs 9 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 9 Lakh"){?> selected <?php }?>>Rs 9 Lakh</option>
<option  value="Rs 10 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 10 Lakh"){?> selected <?php }?>>Rs 10 Lakh</option>
<option  value="Rs 11 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 11 Lakh"){?> selected <?php }?>>Rs 11 Lakh</option>
<option  value="Rs 12 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 12 Lakh"){?> selected <?php }?>>Rs 12 Lakh</option>
<option  value="Rs 13 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 13 Lakh"){?> selected <?php }?>>Rs 13 Lakh</option>
<option  value="Rs 14 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 14 Lakh"){?> selected <?php }?>>Rs 14 Lakh</option>
<option  value="Rs 15 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 15 Lakh"){?> selected <?php }?>>Rs 15 Lakh</option>
<option  value="Rs 16 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 16 Lakh"){?> selected <?php }?>>Rs 16 Lakh</option>
<option  value="Rs 17 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 17 Lakh"){?> selected <?php }?>>Rs 17 Lakh</option>
<option  value="Rs 18 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 18 Lakh"){?> selected <?php }?>>Rs 18 Lakh</option>
<option  value="Rs 19 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 19 Lakh"){?> selected <?php }?> >Rs 19 Lakh</option>
<option  value="Rs 20 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 20 Lakh"){?> selected <?php }?> >Rs 20 Lakh</option>
<option  value="Rs 25 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 25 Lakh"){?> selected <?php }?>>Rs 25 Lakh</option>
<option  value="Rs 30 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 30 Lakh"){?> selected <?php }?>>Rs 30 Lakh</option>
<option  value="Rs 35 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 35 Lakh"){?> selected <?php }?>>Rs 35 Lakh</option>
<option  value="Rs 40 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 40 Lakh"){?> selected <?php }?>>Rs 40 Lakh</option>
<option  value="Rs 45 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 45 Lakh"){?> selected <?php }?> >Rs 45 Lakh</option>
<option  value="Rs 50 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 50 Lakh"){?> selected <?php }?> >Rs 50 Lakh</option>
<option  value="Rs 55 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 55 Lakh"){?> selected <?php }?>>Rs 55 Lakh</option>
<option  value="Rs 60 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 60 Lakh"){?> selected <?php }?>>Rs 60 Lakh</option>
<option  value="Rs 65 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 65 Lakh"){?> selected <?php }?>>Rs 65 Lakh</option>
<option  value="Rs 70 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 70 Lakh"){?> selected <?php }?>>Rs 70 Lakh</option>
<option  value="Rs 75 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 75 Lakh"){?> selected <?php }?>>Rs 75 Lakh</option>
<option  value="Rs 80 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 80 Lakh"){?> selected <?php }?> >Rs 80 Lakh</option>
<option  value="Rs 90 Lakh" <?php if($recData['reg_member_annual_income']=="Rs 90 Lakh"){?> selected <?php }?>>Rs 90 Lakh</option>
<option  value="Rs 1 Crore" <?php if($recData['reg_member_annual_income']=="Rs 1 Crore"){?> selected <?php }?>>Rs 1 Crore</option>
<option  value="Rs 1 Crore & Above" <?php if($recData['reg_member_annual_income']=="Rs 1 Crore & Above"){?> selected <?php }?>>Rs 1 Crore & Above</option>
      </select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Organization Name</div>
  <div class="col-md-9">
<select class="dsbo-fom-1" name="join_organization_name" id="join_organization_name" >
<option  value="0">----Select Organization Name----</option>
<option  value="Government" <?php if($recData['reg_organization_name']=="Government"){?> selected <?php }?>>Government</option>
<option  value="Private" <?php if($recData['reg_organization_name']=="Private"){?> selected <?php }?>>Private</option>
<option  value="Business" <?php if($recData['reg_organization_name']=="Business"){?> selected <?php }?>>Business</option>
<option  value="Defence" <?php if($recData['reg_organization_name']=="Defence"){?> selected <?php }?>>Defence</option>
<option  value="Self Employed" <?php if($recData['reg_organization_name']=="Self Employed"){?> selected <?php }?>>Self Employed</option>
<option  value="Not working" <?php if($recData['reg_organization_name']=="Not working"){?> selected <?php }?>>Not working</option>
</select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Working Location</div>
  <div class="col-md-9">
  <input type="text" placeholder="----Enter Working Location----" name="join_working_location" id="join_working_location" value="<?=$recData['reg_working_location']?>" class="dsbo-fom-1">
      </div>
      </div>
      
       </div>
         <div class="clearfix"></div>
       </div>
       <!----------->
       <h3 id="religious-spot" onClick="update_edu_details('req_next');">Religious Background <span class="arrow-r"></span></h3>
					<div>
                  <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Religion</div>
  <div class="col-md-9">
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
       
<div class="col-lg-12 no-padd" id="community_load_area">

<div class="col-md-12 pd-msof">

<div class="col-lg-12 no-padd" >

<div class="col-md-3">
<span class="font-red">*</span>Community</div>
<div class="col-md-9">
<select class="dsbo-fom-1" name="join_cast" id="join_cast">
<option  value="0">----Select Community----</option>      
<?php if(!empty($recData['reg_cast'])){?>
<option value="<?=$recData['reg_cast']?>" selected><?=$recData['reg_cast']?></option>
<?php }?>
</select>
</div>
</div>

</div>




<div class="col-md-12 pd-msof">
<div class="col-md-3">
<span class="font-red">*</span>Sub Community</div>
<div class="col-md-9">
<input type="text" placeholder="--- Sub Community ---" name="join_sub_cast" id="join_sub_cast" value="<?=$recData['reg_sub_cast']?>" class="dsbo-fom-1">
</div>
</div>
</div>
      
<?php /*?><div  <?php if($recData['reg_namaz']!=""){?> class="col-lg-12 dsp-block"  <?php }else{?> class="col-lg-12 dsp-non" <?php }?>  id="muslim">      
<?php */?>      


<div   style="display:none" id="muslim">      


<div class="col-md-12 pd-msof" >
  <div class="col-md-3">
  <span class="font-red">*</span>Namaaz / Salaah</div>
  <div class="col-md-9">

<select class="dsbo-fom-1"  name="join_namaz" id="join_namaz">
    
<option  value="0">----Select Namaaz / Salaah----</option>
<option value="Five times" label="Five times" <?php if($recData['reg_namaz']=="Five times"){?> selected<?php }?>   >Five times</option>
<option value="Only on Jummah" label="Only on Jummah" <?php if($recData['reg_namaz']=="Only on Jummah"){?> selected<?php }?>>Only on Jummah</option>
<option value="During Ramadan" label="During Ramadan" <?php if($recData['reg_namaz']=="During Ramadan"){?> selected<?php }?> >During Ramadan</option>
<option value="Occasionally" label="Occasionally" <?php if($recData['reg_namaz']=="Occasionally"){?> selected<?php }?>  >Occasionally</option>

</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Zakaat</div>
   <div class="col-md-6">
  <input type="radio" name="join_zakaat" id="join_zakaat_yes" value="Yes" <?php if($recData['reg_zakaat']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3">
  <input type="radio" name="join_zakaat" id="join_zakaat_no" value="No" <?php if($recData['reg_zakaat']=="No"){?> checked <?php }?>> No
  </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3"><span class="font-red">*</span>Fasting in Ramadan</div>
  
 <div class="col-md-6">
  <input type="radio" name="join_fasting" id="join_fasting_yes" value="Yes" <?php if($recData['reg_fasting']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3">
  <input type="radio" name="join_fasting" id="join_fasting_no" value="No" <?php if($recData['reg_fasting']=="No"){?> checked <?php }?>> No
  </div>
  
      </div>
      </div>
  <div class="clearfix"></div>
       </div>
       <!--------->
       
       					<h3 id="lifestyle-spot" onClick="update_religious_details('req_next')">Lifestyle And Habits<span class="arrow-r"></span></h3>
					<div>
       <div class="col-md-12 bgmsf1">
      <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
       
       
       <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Appearance </div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_appearance" id="join_appearance">
       <option  value="0">----Select Appearance----</option>
       <option  value="Fair"  <?php if($recData['reg_appearance']=="Fair"){?> selected <?php }?>  >Fair</option>
       <option  value="Wheatis" <?php if($recData['reg_appearance']=="Wheatis"){?> selected <?php }?> >Wheatis</option>
       <option  value="Dark" <?php if($recData['reg_appearance']=="Dark"){?> selected <?php }?>  > Dark</option>
      </select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Living Status</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_living_status" id="join_living_status">
       <option  value="0">----Select Living Status----</option>
<option  value="Traditional" <?php if($recData['reg_living_status']=="Traditional"){?> selected <?php }?>>Traditional</option>
<option  value="Moderate" <?php if($recData['reg_living_status']=="Moderate"){?> selected <?php }?>>Moderate</option>
<option  value="Liberal" <?php if($recData['reg_living_status']=="Liberal"){?> selected <?php }?>>Liberal</option>
      </select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Physical Status</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_physical_status" id="join_physical_status" >
       <option  value="0">----Select Physical Status----</option>
       <option  value="Slim" <?php if($recData['reg_physical_status']=="Slim"){?> selected <?php }?> >Slim</option>
       <option  value="Average/Athletic" <?php if($recData['reg_physical_status']=="Average/Athletic"){?> selected <?php }?> >Average/Athletic</option>
       <option  value="Heavy" <?php if($recData['reg_physical_status']=="Heavy"){?> selected <?php }?>>Heavy</option>
      </select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Eating Habits</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_eating_habits" id="join_eating_habits">
       <option  value="0">----Select Eating Habits--</option>
       <option  value="Veg" <?php if($recData['reg_eating_habits']=="Veg"){?> selected <?php }?>>Veg</option>
       <option  value="Non-Veg" <?php if($recData['reg_eating_habits']=="Non-Veg"){?> selected <?php }?>>Non-Veg</option>
      </select>
      </div>
      </div>
      
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Smoking Habits</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_smoking_habits" id="join_smoking_habits">
       <option  value="0" >----Select Smoking Habits----</option>
       <option  value="Non-smoker" <?php if($recData['reg_smoking_habits']=="Non-smoker"){?> selected <?php }?>>Non-smoker</option>
       <option  value="Regular smoker" <?php if($recData['reg_smoking_habits']=="Regular smoker"){?> selected <?php }?>>Regular smoker</option>
      </select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Drinking Habits</div>
  <div class="col-md-9">
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

       
            
     <h3 onClick="update_lifestyle_details('req_next')" id="like-spot">Likes & Interests<span class="arrow-r"></span></h3>
					<div>
                    
       <div class="col-md-12 bgmsf1">
       <p class="fld-mntr"><!--(All Fields are Mandatory. )-->&nbsp;</p>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Hobbies</div>
  <div class="col-md-9">
  <input type="text" placeholder="Enter your Hobbies" name="join_hobbies" id="join_hobbies" value="<?=$recData['reg_hobbies']?>" class="dsbo-fom-1">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Interests</div>
  <div class="col-md-9">
  <input type="text" placeholder="Enter your Interests" name="join_interests" id="join_interests" value="<?=$recData['reg_interests']?>" class="dsbo-fom-1">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Favourite Music</div>
  <div class="col-md-9">
  <input type="text" placeholder="Enter your Favourite Music" name="join_favourite_music" id="join_favourite_music" value="<?=$recData['reg_favourite_music']?>" class="dsbo-fom-1">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Favourite Book</div>
  <div class="col-md-9">
  <input type="text" placeholder="Enter your Favourite Book" class="dsbo-fom-1" name="join_favourite_book" id="join_favourite_book" value="<?=$recData['reg_favourite_book']?>">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Dress Style</div>
  <div class="col-md-9">
  <input type="text" placeholder="Enter your Dress Style" class="dsbo-fom-1" name="join_dress_style" id="join_dress_style" value="<?=$recData['reg_dress_style']?>">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  TV Shows</div>
  <div class="col-md-9">
  <input type="text" placeholder="Enter your TV Shows" class="dsbo-fom-1" name="join_tv_shows" id="join_tv_shows" value="<?=$recData['reg_tv_shows']?>">
      </div>
      </div>
      
       </div>
         <div class="clearfix"></div>
       </div> 
        <h3 onClick="update_likes_details('req_next')" id="contact-spot"> Contact Details<span class="arrow-r"></span></h3>
					<div>
                    
       <div class="col-md-12 bgmsf1">
       <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Mobile No</div>
  <div class="col-md-9">
  <input type="text" placeholder="Enter your Mobile No" class="dsbo-fom-1"  name="join_member_mobile" id="join_member_mobile"   value="<?=$recData['reg_member_mobile']?>">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Alternate No.</div>
  <div class="col-md-9">
  <input type="text" placeholder="Enter your Alternate No." class="dsbo-fom-1" name="join_member_alt_mobile" id="join_member_alt_mobile"   value="<?=$recData['reg_member_alt_mobile']?>">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Email Id</div>
  <div class="col-md-9">
  <input type="text" placeholder="Enter your Email Id" class="dsbo-fom-1" name="join_member_email" id="join_member_email"   value="<?=$recData['reg_member_email']?>">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  <span class="font-red">*</span>Suitable time to call</div>
  <div class="col-md-9">
  <input type="text" placeholder="Enter your Suitable time to call" class="dsbo-fom-1" name="join_member_call_time" id="join_member_call_time"   value="<?=$recData['reg_member_call_time']?>">
      </div>
      </div>


       </div>
         <div class="clearfix"></div>
       </div>
        <h3 onClick="update_contact_details('req_next')" id="about-myself-spot">A Few Words About Myself<span class="arrow-r"></span></h3>
					<div>
                    
                    <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>

       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
 <span class="font-red">*</span>About Me</div>
  <div class="col-md-9">
      <textarea onkeydown="textCounter(document.getElementById('join_mem_myself'),document.getElementById('remLen'),100);" onkeyup="textCounter(document.getElementById('join_mem_myself'),document.getElementById('remLen'),100); "  class="dsbo-fom-1 tex-area" name="join_mem_myself" id="join_mem_myself" placeholder="Prospective matches would like to know what you are like, as a person. Write about yourself. "><?=$recData['reg_mem_myself']?></textarea>

<p class="abt-me">
              <input name="remLen" type="text" id="remLen" value="100" readonly style="border:none; color:#DD0000; font-weight:bold; width:35px;margin:5px 0 0 0" />Characters Remaining
              
      <span class="pull-right"><span class="font-red">Note:</span> Maximum Character 100</span>
      </p>
      
      
      </div>
      </div>
       </div>
       
         <div class="clearfix"></div>
         
       </div>
       
       
       
				</div>
                <div class="col-md-12 text-center ptop5">
                
<a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1 " href="Javascript:void(0)" onClick="saveAllDetail('nxt','req_next');" >Next <i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></a>                
                
               <!-- <a href="#" class="btn-sbmt pd02" onClick="update_myself_details('nxt');saveAllDetail('nxt');">Next <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>-->

<a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1 ml10 " href="Javascript:void(0)" onClick="saveAllDetailSkip('skip','req_next');" >Skip & Save <i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></a>                

<!--
                <a href="#" class="btn-sbmt pd02" onClick="update_myself_details('skip');saveAllDetail('skip')">Skip & Save</a>-->
        <!--<input type="submit" value="Create Profile" class="btn-sbmt">-->
        <!--<input type="reset" value="Reset" class="btn-Resetd">-->
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
    <div class="col-md-12 bg-clrd_3 mp_2mso">
       <div  class="col-md-12 sb-db-hdg_1">
       <div class="col-md-12">
      <h2>Visitors(100)</h2>
      </div>
      </div>
       <div class="col-md-12 sb-db-hdg">
     
      <div class="col-md-12 mp_db_00 stb-bg">
      <div class="col-md-3 Suid">
        <img src="images/visible.jpg" class="img-seq2" title="View Profile">
      </div>
      <div class="col-md-3 Suid">
       <img src="images/15.jpg" class="img-seq2" title="View Profile">
      </div>
      <div class="col-md-3 Suid">
       <img src="images/profile1.jpg" class="img-seq2" title="View Profile">
      </div>
      <div class="col-md-3 Suid">
       <img src="images/visible.jpg" class="img-seq2" title="View Profile">
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
        <div class="copyright">All rights reserved &copy; 2017 ApniMatrimony. &ensp;<span class="fa fa-heart" style="color:#fff;"></span>&ensp; Designed by : <a href="http://www.webkeyindia.com/" target="_blank">WebKeyIndia.Com - Best SEO Company In India</a></div>
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
<!-----left-accordian--------->
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible.js"></script> 

<input type="hidden" name="validCond" id="validCond" value="" />
<input type="hidden" name="validSource" id="validSource" value="" />
<input type="hidden" name="skip_form" id="skip_form" value="no" />



<script>
var d = new Date();
var currYear=d.getFullYear();

  $( function() {
    $( "#join_dob").datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: "1700:"+currYear,
	  dateFormat: "dd/mm/yy"
    });
  } );
  </script>
<script>
$('#collapse-menu').collapsible({
  contentOpen:["0",""]
});
</script>
<script>
function trim_input(str){return str.replace(/^\s*|\s*$/g,'');}
//listener on date of birth field

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
      } else {
        $("#join_age").val('');   
      }      
	  
	  
 });


//var errFrm=0;	

var errFrmBasic=1;	
var errFrmLocation=1;	
var errFrmFamily=1;	
var errFrmEdu=1;	
var errFrmReligion=1;	
var errFrmLifestyle=1;	
var errFrmLikes=1;	
var errFrmContact=1;	
var errFrmAbout=1;	


function update_basic_details(reqFrom){

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

skip_form=document.getElementById('skip_form').value;

if(skip_form=='no'){


if(trim_input(document.getElementById('join_name').value)==""){
errFrmBasic=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

alert("Enter Your Full Name !");
document.getElementById('join_name').focus();
return false;	
}else{
errFrmBasic=0;

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}



if (!document.getElementById('join_name').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){
errFrmBasic=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;


alert("Please enter only alphabets !");
document.getElementById('join_name').focus();
return false;
}else{
errFrmBasic=0;

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

			
}

if(!formValid){
errFrmBasic=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;


alert("Please choose a gender !");
document.getElementById("join_gender_male").focus();	   
return false;
}else{
errFrmBasic=0;

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

			
}

if(trim_input(document.getElementById('join_dob').value)==""){
errFrmBasic=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;


alert("Enter Your DOB !");
document.getElementById('join_dob').focus();
return false;	
}else{
errFrmBasic=0;

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

			
}


var ev = document.getElementById("join_height");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmBasic=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;


			alert("Please choose your height !");
		    document.getElementById("join_height").focus();
			return false;
}else{
errFrmBasic=0;

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

			
}



var ev = document.getElementById("join_marital_status");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmBasic=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;


			alert("Please choose your marital status !");
			document.getElementById("join_marital_status").focus();
			return false;
}else{
errFrmBasic=0;

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

			
}

var ev = document.getElementById("join_mother_tongue");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmBasic=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;


			alert("Please choose your mother tongue !");
			document.getElementById("join_mother_tongue").focus();
			return false;
}else{
errFrmBasic=0;

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

			
}


if(!disabilityValid){
errFrmBasic=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;


alert("Please choose a physical status !");
document.getElementById("join_is_any_disability_yes").focus();	   
return false;
}else{
errFrmBasic=0;

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

			
}

var ev = document.getElementById("join_profile_manage_by");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmBasic=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;


			alert("Please choose your profile management option !");
			document.getElementById("join_profile_manage_by").focus();
			return false;
}else{
errFrmBasic=0;

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}


}




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



if(reqFrom=='req_next'){
	
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


$('html, body').animate({
        scrollTop: $("#location-spot").offset().top-50
}, 1000);

}





}



//////////////////////  LOCATION DETAIL ///////////////////////

function update_location_details(reqFrom){

// Location Detail
if(errFrmBasic!=0){
update_basic_details('req_other');

}else{

skip_form=document.getElementById('skip_form').value;


if(skip_form=='no'){
	
var ev = document.getElementById("join_country");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmLocation=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

	
            alert("Please choose your country !");
			document.getElementById("join_country").focus();
			return false;
}else{
errFrmLocation=0;

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

			
}

var ev = document.getElementById("join_state");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmLocation=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

	
            alert("Please choose your state !");
			document.getElementById("join_state").focus();
			return false;
}else{
errFrmLocation=0;

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

			
}
}


if(errFrmLocation==0){
	
	
var join_country=document.getElementById('join_country').value;
var join_state=document.getElementById('join_state').value;
var join_city=document.getElementById('join_city').value;
var regID=document.getElementById('regID').value;




if(reqFrom=='req_next'){

var param="join_country="+join_country+"&join_state="+join_state+"&join_city="+join_city+"&regID="+regID;	
	
//alert(myImageId);
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=location&"+param;
//alert(str);
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

$('html, body').animate({
        scrollTop: $("#family-spot").offset().top-50
}, 1000);


}
}

}
}

//////////////////////  FAMILY DETAIL ///////////////////////

function update_family_details(reqFrom){

if(errFrmBasic!=0){
update_basic_details('req_other');

}else if(errFrmBasic==0 && errFrmLocation!=0){
update_location_details('req_other');	

}else{
// Family Detail

skip_form=document.getElementById('skip_form').value;

if(skip_form=='no'){

var ev = document.getElementById("join_father_status");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmFamily=1;
			document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;
	
            alert("Please choose your father status !");
			document.getElementById("join_father_status").focus();
			return false;
}else{
errFrmFamily=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}


var ev = document.getElementById("join_mother_status");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmFamily=1;	
			document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

            alert("Please choose your mother status !");
			document.getElementById("join_mother_status").focus();
			return false;
}else{
errFrmFamily=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}

var ev = document.getElementById("join_siblings");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmFamily=1;	
			document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

            alert("Please choose your siblings status !");
			document.getElementById("join_siblings").focus();
			return false;
}else{
errFrmFamily=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}
}


if(errFrmFamily==0){

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



	


if(reqFrom=='req_next'){

	
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

$('html, body').animate({
        scrollTop: $("#edu-spot").offset().top-50
}, 1000);


}
}
}

}

//////////////////////  EDUCATION & CAREER DETAIL ///////////////////////

function update_edu_details(reqFrom){


if(errFrmBasic!=0){
update_basic_details('req_other');

}else if(errFrmBasic==0 && errFrmLocation!=0){
update_location_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily!=0){
update_family_details('req_other');	

}else{
	
// Education & Career

skip_form=document.getElementById('skip_form').value;

if(skip_form=='no'){

var ev = document.getElementById("join_highest_edu");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmEdu=1;	
			document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

            alert("Please choose your heighest education !");
			document.getElementById("join_highest_edu").focus();
			return false;
}else{
errFrmEdu=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}


var ev = document.getElementById("join_occupation");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmEdu=1;	
			document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

            alert("Please choose your occupation !");
			document.getElementById("join_occupation").focus();
			return false;
}else{
errFrmEdu=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}
}




var join_highest_edu=document.getElementById('join_highest_edu').value;
var join_edu_detail=document.getElementById('join_edu_detail').value;
var join_occupation=document.getElementById('join_occupation').value;
var join_member_annual_income=document.getElementById('join_member_annual_income').value;
var join_organization_name=document.getElementById('join_organization_name').value;
var join_working_location=document.getElementById('join_working_location').value;
var regID=document.getElementById('regID').value;





if(reqFrom=='req_next'){
			
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

$('html, body').animate({
        scrollTop: $("#lifestyle-spot").offset().top-50
}, 1000);

}
}
}



//////////////////////  Religion DETAIL ///////////////////////

function update_religious_details(reqFrom){


if(errFrmBasic!=0){
	
update_basic_details('req_other');

}else if(errFrmBasic==0 && errFrmLocation!=0){
	
update_location_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily!=0){

update_family_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily==0 && errFrmEdu!=0){

update_edu_details('req_other');	

}else{

// Religious Background

skip_form=document.getElementById('skip_form').value;

if(skip_form=='no'){

var ev = document.getElementById("join_religion");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmReligion=1;	
			document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

            alert("Please choose your religion !");
			document.getElementById("join_religion").focus();
			return false;
}else{
errFrmReligion=0;	

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}


var ev = document.getElementById("join_cast");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmReligion=1;	
			document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;
		
            alert("Please choose your community !");
			document.getElementById("join_cast").focus();
			return false;
}else{
errFrmReligion=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}



if(trim_input(document.getElementById('join_sub_cast').value)==""){
errFrmReligion=1;	
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;
		
alert("Enter Your Sub Community !");
document.getElementById('join_sub_cast').focus();
return false;	
}else{
errFrmReligion=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}


if (!document.getElementById('join_sub_cast').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){
errFrmReligion=1;	
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;
		
alert("Please enter only alphabets !");
document.getElementById('join_sub_cast').focus();
return false;
}else{
errFrmReligion=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}


var ev = document.getElementById("join_namaz");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmReligion=1;	
			document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;
		
            alert("Please choose your namaz status!");
			document.getElementById("join_namaz").focus();
			return false;
}else{
errFrmReligion=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}



var radios_zakaat = document.getElementsByName("join_zakaat");
var zakaatValid = false;

var i = 0;
while (!zakaatValid && i < radios_zakaat.length) {
if (radios_zakaat[i].checked) zakaatValid = true;
i++;        
}


if(!zakaatValid){
errFrmReligion=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;
	
alert("Please choose zakaat status !");
document.getElementById("join_zakaat").focus();	   
return false;
}else{
errFrmReligion=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}



var radios_fasting = document.getElementsByName("join_fasting");
var fastingValid = false;

var i = 0;
while (!fastingValid && i < radios_fasting.length) {
if (radios_fasting[i].checked) fastingValid = true;
i++;        
}


if(!fastingValid){
errFrmReligion=1;	
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

alert("Please choose fasting status !");
document.getElementById("join_fasting").focus();	   
return false;
}else{
errFrmReligion=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}

}
	

//if(errFrmReligion==0){


var join_religion=document.getElementById('join_religion').value;
var join_cast=document.getElementById('join_cast').value;
var join_sub_cast=document.getElementById('join_sub_cast').value;
//var join_gotra=document.getElementById('join_gotra').value;
var join_namaz=document.getElementById('join_namaz').value;
//var join_zakaat=document.getElementById('join_zakaat').value;
//var join_fasting=document.getElementById('join_fasting').value;
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

//var param="join_religion="+join_religion+"&join_cast="+join_cast+"&join_sub_cast="+join_sub_cast+"&join_gotra="+join_gotra+"&join_namaz="+join_namaz+"&join_zakaat="+join_zakaat+"&join_fasting="+join_fasting+"&regID="+regID;



if(reqFrom=='req_next'){

	
var param="join_religion="+join_religion+"&join_cast="+join_cast+"&join_sub_cast="+join_sub_cast+"&join_namaz="+join_namaz+"&join_zakaat="+join_zakaat+"&join_fasting="+join_fasting+"&regID="+regID;


//alert(param);


var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/update-regd-details.php?type=religion&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){


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

$('html, body').animate({
        scrollTop: $("#lifestyle-spot").offset().top-50
}, 1000);



}
}
}
//}




//////////////////////  Life Style DETAIL ///////////////////////

function update_lifestyle_details(reqFrom){


if(errFrmBasic!=0){
	
update_basic_details('req_other');

}else if(errFrmBasic==0 && errFrmLocation!=0){
	
update_location_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily!=0){

update_family_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily==0 && errFrmEdu!=0){

update_edu_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily==0 && errFrmEdu==0 && errFrmReligion!=0){

update_religious_details('req_other');	

}else{

//// Life Style & Habits

skip_form=document.getElementById('skip_form').value;

if(skip_form=='no'){

var ev = document.getElementById("join_appearance");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmLifestyle=1;	
			document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

            alert("Please choose your appearance!");
			document.getElementById("join_appearance").focus();
			return false;
}else{
errFrmLifestyle=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}



var ev = document.getElementById("join_physical_status");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
			errFrmLifestyle=1;	
			document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

            alert("Please choose your physical status!");
			document.getElementById("join_physical_status").focus();
			return false;
}else{
errFrmLifestyle=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}
}


//if(errFrmLifestyle==0){


var join_appearance=document.getElementById('join_appearance').value;
var join_living_status=document.getElementById('join_living_status').value;
var join_physical_status=document.getElementById('join_physical_status').value;
var join_eating_habits=document.getElementById('join_eating_habits').value;
var join_smoking_habits=document.getElementById('join_smoking_habits').value;
var join_drinking_habits=document.getElementById('join_drinking_habits').value;
var regID=document.getElementById('regID').value;




if(reqFrom=='req_next'){
		
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

$('html, body').animate({
        scrollTop: $("#like-spot").offset().top-50
}, 1000);


}
}
}
//}

//////////////////////  LIKE DETAIL ///////////////////////

function update_likes_details(reqFrom){


if(errFrmBasic!=0){
	
update_basic_details('req_other');

}else if(errFrmBasic==0 && errFrmLocation!=0){
	
update_location_details('req_other');

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily!=0){

update_family_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily==0 && errFrmEdu!=0){

update_edu_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily==0 && errFrmEdu==0 && errFrmReligion!=0){

update_religious_details('req_other');	

}else{

var join_hobbies=document.getElementById('join_hobbies').value;
var join_interests=document.getElementById('join_interests').value;
var join_favourite_music=document.getElementById('join_favourite_music').value;
var join_favourite_book=document.getElementById('join_favourite_book').value;
var join_dress_style=document.getElementById('join_dress_style').value;
var join_tv_shows=document.getElementById('join_tv_shows').value;
var regID=document.getElementById('regID').value;




if(reqFrom=='req_next'){

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

$('html, body').animate({
        scrollTop: $("#contact-spot").offset().top-50
}, 1000);


}
}
}


//////////////////////  CONTACT DETAIL ///////////////////////

function update_contact_details(reqFrom){

if(errFrmBasic!=0){
	
update_basic_details('req_other');

}else if(errFrmBasic==0 && errFrmLocation!=0){
	
update_location_details('req_other');

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily!=0){

update_family_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily==0 && errFrmEdu!=0){

update_edu_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily==0 && errFrmEdu==0 && errFrmReligion!=0){

update_religious_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily==0 && errFrmEdu==0 && errFrmReligion==0 && errFrmLifestyle!=0){

update_lifestyle_details('req_other');	

}else{
// Contact Detail

skip_form=document.getElementById('skip_form').value;

if(skip_form=='no'){

var mobno=trim_input(document.getElementById('join_member_mobile').value);
if(trim_input(document.getElementById('join_member_mobile').value)==""){
	errFrmContact=1;
	document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

	alert("Enter your mobile no.!");
	document.getElementById('join_member_mobile').focus();
	return false;
}else{
errFrmContact=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}

if(isNaN(document.getElementById('join_member_mobile').value)){
	errFrmContact=1;
	document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

	alert("Mobile no. should be no.!");
	document.getElementById('join_member_mobile').focus();
	return false;
}else{
errFrmContact=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}

if(mobno.length < 10){
    errFrmContact=1;
	document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

	alert("Mobile no. should be 10 digit long !");
	document.getElementById('join_member_mobile').focus();
	return false;
}else{
errFrmContact=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}



var mobno=trim_input(document.getElementById('join_member_alt_mobile').value);
if(trim_input(document.getElementById('join_member_alt_mobile').value)==""){
	errFrmContact=1;
	document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

	alert("Enter your alternate mobile no.!");
	document.getElementById('join_member_alt_mobile').focus();
	return false;
}else{
errFrmContact=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}

if(isNaN(document.getElementById('join_member_alt_mobile').value)){
	errFrmContact=1;
	document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

	alert("Mobile no. should be no.!");
	document.getElementById('join_member_alt_mobile').focus();
	return false;
}else{
errFrmContact=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}

if(mobno.length < 10){
    errFrmContact=1;
	document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

	alert("Mobile no. should be 10 digit long !");
	document.getElementById('join_member_alt_mobile').focus();
	return false;
}else{
errFrmContact=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}



var email=trim_input(document.getElementById('join_member_email').value);
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email==''){
	  errFrmContact=1;
	  document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

	  alert('Please Enter Member Email address');
	  document.getElementById('join_member_email').focus();
	  return false;
  }else if(!email.match(mailformat)){
errFrmContact=1;	  
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

alert("You have entered an invalid email address!");
document.getElementById('join_member_email').focus();
return false;
}else{
errFrmContact=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}




if(trim_input(document.getElementById('join_member_call_time').value)==""){
errFrmContact=1;	
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

alert("Enter suitable time to call !");
document.getElementById('join_member_call_time').focus();
return false;	
}else{
errFrmContact=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}
}

//if(errFrmContact==0){

var join_member_mobile=document.getElementById('join_member_mobile').value;
var join_member_alt_mobile=document.getElementById('join_member_alt_mobile').value;
var join_member_email=document.getElementById('join_member_email').value;
var join_member_call_time=document.getElementById('join_member_call_time').value;
var regID=document.getElementById('regID').value;




if(reqFrom=='req_next'){
		
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

$('html, body').animate({
        scrollTop: $("#about-myself-spot").offset().top-50
}, 1000);

}
}

}
//}



//////////////////////  MYSELF DETAIL ///////////////////////

//function update_myself_details(act){
function saveAllDetail(act,reqFrom){

if(errFrmBasic!=0){
	
update_basic_details('req_other');

}else if(errFrmBasic==0 && errFrmLocation!=0){
	
update_location_details('req_other');

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily!=0){

update_family_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily==0 && errFrmEdu!=0){

update_edu_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily==0 && errFrmEdu==0 && errFrmReligion!=0){

update_religious_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily==0 && errFrmEdu==0 && errFrmReligion==0 && errFrmLifestyle!=0){

update_lifestyle_details('req_other');	

}else if(errFrmBasic==0 && errFrmLocation==0 && errFrmFamily==0 && errFrmEdu==0 && errFrmReligion==0 && errFrmLifestyle==0 && errFrmContact!=0 ){

update_contact_details('req_other');	

}else{	
	
// About my self

skip_form=document.getElementById('skip_form').value;

if(skip_form=='no'){

if(trim_input(document.getElementById('join_mem_myself').value)==""){
errFrmAbout=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

alert("Enter few words about myself !");
document.getElementById('join_mem_myself').focus();
return false;
}else{
errFrmAbout=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}


if(trim_input(document.getElementById('join_mem_myself').value).length<50){
errFrmAbout=1;
document.getElementById("validSource").value='req_other';
document.getElementById("validCond").value=0;

alert("Enter enter at least 50 character about myself !");
document.getElementById('join_mem_myself').focus();
return false;
}else{
errFrmAbout=0;			

if(reqFrom=='req_next'){
document.getElementById("validSource").value='req_next';
document.getElementById("validCond").value=1;
}

}
}


var join_mem_myself=document.getElementById('join_mem_myself').value;
var regID=document.getElementById('regID').value;




if(reqFrom=='req_next'){
	
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

if(act=='nxt'){
window.location='upload-photo.php';	
}else if(act=='skip'){
window.location='welcome.php';		
}

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
  }
}


function saveAllDetailSkip(act,reqFrom){

document.getElementById('skip_form').value='yes'

update_basic_details('req_next');
update_location_details('req_next');
update_family_details('req_next');
update_edu_details('req_next');
update_religious_details('req_next');
update_lifestyle_details('req_next');
update_likes_details('req_next');
update_contact_details('req_next');

var join_mem_myself=document.getElementById('join_mem_myself').value;
var regID=document.getElementById('regID').value;




if(reqFrom=='req_next'){
	
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

if(act=='nxt'){
window.location='upload-photo.php';	
}else if(act=='skip'){
window.location='welcome.php';		
}

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


function byReligion(religion){
	

if(religion=="Hindu"){
//$("#hindu").show();	
$("#muslim").hide();	

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
//$("#hindu").hide();	

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




}
	
}
</script>
<script type="text/javascript" language="javascript">
function textCounter(field, countfield, maxlimit) {
	
if (field.value.length > maxlimit) // if the current length is more than allowed
field.value =field.value.substring(0, maxlimit); // don't allow further input
else
countfield.value = maxlimit - field.value.length;} // set the display field to remaining number

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