<?php
require_once("../includes/dbsmain.inc.php");
$reg_sql=db_query("select * from tbl_registration where 1 and reg_id='".$_REQUEST['user_id']."'");
if(mysqli_num_rows($reg_sql)>0){
	   $recData=mysqli_fetch_array($reg_sql);
	    @extract($recData);
     }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ThariChoice : Admin Panel</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="../fevicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
<link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrapa.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- Emojionearea -->
      <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
      <!-- End page Label Plugins 
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>

      <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
      
      <style>
	span.count-num {
    float: right;
    margin: -16px 13px 0 0;
    font-size: 18px;
    background: red;
    padding: 1px 6px 1px 6px;
    color: #fff;
    border-radius: 15px;
}
	  </style>
      
<link href="<?=SITE_WS_PATH?>/css/collapsible1.css" rel="stylesheet" type="text/css">    
<style>
 div#update-popup-box {
    background: #b10a0a;
    color: #fff;
    top: 108px;
    box-shadow: 1px 1px 50px 24px #b10a0aa6;
}


.up-img {
    width: 100%;
    border: solid 1px #ccc;
    height: 170px;
	margin-bottom:5px;
}

button#btn-photo-upload {
    position: absolute;
    margin: 0 0 0 0;
    right: 19px;
    top: 3px;
}

button#btn-verify-otp {
    position: absolute;
    margin: 0 0 0 0;
    right: 19px;
    top: 3px;
}

button#btn-send-otp {
    font-size: 11px;
    font-weight: bold;
    margin: 0 0 0 0;
    padding: 0 0 0 0;
}

.mp_03 {
    margin: 0px;
    padding: 0px;
}

.pd-msof {
    margin-bottom: 20px;
}

.dsbo-fom-1{width:100%; height:40px; border-radius:5px; padding:5px; border:solid 1px #ccc;    background-color: #337ab733;}

.fld-mntr {
    color: #d3168c;
    float: right;
    margin: 5px 29px 5px 0;
    padding: 5px;
    font-size: 13px;
}

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
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td  id="pageHead" colspan="2"><div class="col-lg-12 text-center bg-primary bold" style="padding:6px;font-size:16px"><i class="fa fa-user-circle-o font-black fa-lg"></i>&nbsp;Member Detail</div></td>
  </tr>
</table>

<div class="col-lg-12 update-profile-holder ">

<section style="background-color:#2a3f54;padding:20px 0">
    <div class="container no-padd">
    
 
            
      <div class="row">
        <div class="col-md-12  all-sec">
<form action="" method="post" name="regd-short-form" id="regd-short-form" enctype="multipart/form-data" onSubmit="return FreeRegdValidation()" >         
      <div class="col-md-12 mp_db_00" style="margin-bottom:20px !important;">
      <div class="clearfix"></div>
      
      
<input type="hidden" name="regIDadmin" id="regIDadmin"  value="<?=$rID?>" />
<?php unset($_SESSION['regIDadmin']);?>
          
  <div id="collapse-menu" class="collapse-container" style="border:solid 1px #e4e4e4;">

<h3>Login Details    <span class="arrow-r"></span></h3>
<div>
                     <p class="fld-mntr">(All Fields are Mandatory. )</p>
						<div class="col-md-12 bgmsf1">
     <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">Email</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
   <input type="text" placeholder="Enter Email ID" name="join_email" id="join_email" value="<?=$recData['reg_email']?>"  autocomplete="off" class="dsbo-fom-1">

<span id="info-area"></span>   
   
  </div>
  </div>
  
  
  
  <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">Password</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
<input type="text" placeholder="Enter Password" name="join_pass" id="join_pass" autocomplete="off" value="<?=$recData['reg_pass']?>" class="dsbo-fom-1">
  </div>
  </div>  
  
  <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">Creating Profile For </div>
  <div class="col-md-9 col-sm-9 col-xs-9">
<select class="dsbo-fom-1" name="join_for" id="join_for"  >
<option value="0"> Select </option>
<option value="Self" <?php if($recData['reg_for']=="Self"){ ?> selected <?php }?> >Self</option>
<option value="Son" <?php if($recData['reg_for']=="Son"){ ?> selected <?php }?>>Son</option>
<option value="Daughter" <?php if($recData['reg_for']=="Daughter"){ ?> selected <?php }?>>Daughter</option>
<option value="Brother" <?php if($recData['reg_for']=="Brother"){ ?> selected <?php }?>>Brother</option>
<option value="Sister" <?php if($recData['reg_for']=="Sister"){ ?> selected <?php }?>>Sister</option>
<option value="Friend" <?php if($recData['reg_for']=="Friend"){ ?> selected <?php }?>>Friend</option>
<option value="Relative" <?php if($recData['reg_for']=="Relative"){ ?> selected <?php }?>>Relative</option>          
</select>
  </div>
  </div>                   

    <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">Contact Person Mobile</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
   <input type="text" placeholder="Enter mobile number" name="join_mobile" id="join_mobile" value="<?=$recData['reg_mobile_no']?>" class="dsbo-fom-1">
  </div>
  </div>    
      

</div>
       <div class="clearfix"></div>
      
					</div>
                    
                    
<h3 id="basic-detail-spot"  >Basic Details    <span class="arrow-r"></span></h3>

<div>
<p class="fld-mntr">(All Fields are Mandatory. )</p>
<div class="col-md-12 bgmsf1">
<div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">Full Name</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
   <input type="text" placeholder="Enter Full Name" name="join_name" id="join_name" value="<?=$recData['reg_name']?>" class="dsbo-fom-1">
  </div>
  </div>                   
  <div class="col-md-12 pd-msof">
   <div class="col-md-3 col-sm-3- col-xs-3">Gender</div>
  <div class="col-md-3 col-sm-3- col-xs-3">
<input type="radio" name="join_gender" id="join_gender" value="Male" <?php if($recData['reg_gender']=="Male"){?> checked <?php }?>> Male
  </div>
  
  <div class="col-md-2">
<input type="radio" name="join_gender" id="join_gender" value="Female" <?php if($recData['reg_gender']=="Female"){?> checked <?php }?>> Female 
  </div>
<div class="col-md-4">
  &nbsp;
</div>
      </div>
  <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">Date of birth</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="date" placeholder="Enter Date of birth" name="join_dob" id="join_dob" value="<?=$recData['reg_dob']?>" class="dsbo-fom-1">
  </div>
  </div>
       <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Age</div>
  <div class="col-md-9 col-sm-9 col-xs-9 mp_03">
  <div class="col-md-5">
<select class="dsbo-fom-1" name="join_age" id="join_age">


<?php for($i=18;$i<=40;$i++){?>      
<option value="<?=$i?>" <?php if($recData['reg_age']==$i){?> selected <?php }?>      ><?=$i?></option>
<?php }?>       
</select>
      </div>
      <div class="col-md-2 text-center mp_db_00 frm-hdg_db">
      Height
      </div>
      
      <div class="col-md-5">
    <select class="dsbo-fom-1" name="join_height" id="join_height">

    <option value="<?=$recData['reg_height']?>" <?php if($recData['reg_height']!=""){?> selected <?php }?> ><?=$recData['reg_height']?></option>

    <option value="4' 5'' - 134cm" >4' 5'' - 134cm</option>
    <option value="4' 6'' - 137cm">4' 6'' - 137cm</option>
    <option value="4' 7'' - 139cm">4' 7'' - 139cm</option>
    <option value="4' 8'' - 142cm" >4' 8'' - 142cm</option>
    <option value="4' 9'' - 144cm">4' 9'' - 144cm</option>
    <option value="4' 10'' - 147cm">4' 10'' - 147cm</option>
    <option value="4' 11'' - 149cm" >4' 11'' - 149cm</option>
    <option value="5' - 152cm">5' - 152cm</option>
    <option value="5' 1'' - 154cm">5' 1'' - 154cm</option>
    <option value="5' 2'' - 157cm">5' 2'' - 157cm</option>
    <option value="5' 3'' - 160cm">5' 3'' - 160cm</option>
    <option value="5' 4'' - 162cm">5' 4'' - 162cm</option>
    <option value="5' 5'' - 165cm">5' 5'' - 165cm</option>
    <option value="5' 6'' - 167cm">5' 6'' - 167cm</option>
    <option value="5' 7'' - 170cm" >5' 7'' - 170cm</option>
    <option value="5' 8'' - 172cm">5' 8'' - 172cm</option>
    <option value="5' 9'' - 175cm">5' 9'' - 175cm</option>
    <option value="5' 10'' - 177cm">5' 10'' - 177cm</option>
    <option value="5' 11'' - 180cm">5' 11'' - 180cm</option>
    <option value="6' - 182cm">6' - 182cm</option>
    <option value="6' 1'' - 185cm">6' 1'' - 185cm</option>
    <option value="6' 2'' - 187cm">6' 2'' - 187cm</option>
    <option value="6' 3'' - 190cm">6' 3'' - 190cm</option>
    <option value="6' 4'' - 193cm">6' 4'' - 193cm</option>
    <option value="6' 5'' - 195cm">6' 5'' - 195cm</option>
    <option value="6' 6'' - 198cm">6' 6'' - 198cm</option>
    <option value="6' 7'' - 200cm">6' 7'' - 200cm</option>
    <option value="6' 8'' - 203cm">6' 8'' - 203cm</option>
    <option value="6' 9'' - 205cm">6' 9'' - 205cm</option>
    <option value="6' 10'' - 208cm">6' 10'' - 208cm</option>
    <option value="6' 11'' - 210cm">6' 11'' - 210cm</option>
      </select>
      </div>
      <div class="clearfix"></div>
      </div>
      </div>
      
      <!-------->
     
       
       <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">Marital Status</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
   <select class="dsbo-fom-1" name="join_marital_status" id="join_marital_status" >

<option value="0" selected="selected">----Select Marital Status----</option>
<option value="<?=$recData['reg_marital_status']?>" <?php if($recData['reg_marital_status']!=""){?> selected <?php }?> ><?=$recData['reg_marital_status']?></option>   
    <option value="Doesn't Matter">Doesn't Matter</option>
    <option value="Never Married">Never Married</option>
    <option value="Divorced" >Divorced</option>
    <option value="Widowed">Widowed</option>
    <option value="Awaiting Divorce">Awaiting Divorce</option>
    <option value="Annulled">Annulled</option>
      </select>

  </div>
  </div>
       
      <div class="col-md-12 pd-msof">
   <div class="col-md-3 col-sm-3- col-xs-3">Mother Tongue</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
   <select class="dsbo-fom-1" name="join_mother_tongue" id="join_mother_tongue">
 <option value="0">----Select Mother Tongue----</option>
<?php if($recData['reg_mother_tongue']!=""){?>
<option value="<?=$recData['reg_mother_tongue']?>"  selected  ><?=$recData['reg_mother_tongue']?></option>       
<?php }?>
	<option value="Bengali">Bengali</option>
    <option value="Hindi">Hindi</option>
	<option value="Telugu">Telugu</option>
	<option value="Marathi">Marathi</option>
	<option value="Tamil">Tamil</option>
	<option value="Urdu">Urdu</option>
	<option value="Gujarati">Gujarati</option>
	<option value="Kannada">Kannada</option>
	<option value="Malayalam">Malayalam</option>
	<option value="Odia">Odia</option>
	<option value="Punjabi">Punjabi</option>	
	<option value="Assamese">Assamese</option>
	<option value="Maithili">Maithili</option>
	<option value="Bhili/Bhilodi">Bhili/Bhilodi</option>
	<option value="Santali">Santali</option>
	<option value="Kashmiri">Kashmiri</option>
	<option value="Nepali">Nepali</option>
	<option value="Gondi">Gondi</option>	
	<option value="Sindhi">Sindhi</option>
	<option value="Konkani">Konkani</option>	
	<option value="Dogri">Dogri</option>	
	<option value="Khandeshi">Khandeshi</option>	
	<option value="Kurukh">Kurukh</option>
	<option value="Tulu">Tulu</option>
	<option value="Meitei(Manipuri)">Meitei(Manipuri)</option>
	<option value="Bodo">Bodo</option>
	<option value="Khasi">Khasi</option>
	<option value="Mundari">Mundari</option>	
    </select>
  </div>

      </div>
      
      <div class="col-md-12 pd-msof">
   <div class="col-md-3 col-sm-3- col-xs-3">Any Disability</div>
  <div class="col-md-3 col-sm-3- col-xs-3">
  <input type="radio" name="join_is_any_disability" id="join_is_any_disability" value="No" <?php if($recData['reg_is_any_disability']=="No"){?> checked <?php }?>> Normal
  </div>
<div class="col-md-6">
  <input type="radio" name="join_is_any_disability" id="join_is_any_disability" value="Yes" <?php if($recData['reg_is_any_disability']=="Yes"){?> checked <?php }?>> Physically Challenged
</div>

      </div>
      
      <div class="col-md-12 pd-msof">
   <div class="col-md-3 col-sm-3- col-xs-3">Aadhar Number</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="Enter Aadhar Number" name="join_aadhar_number" id="join_aadhar_number" class="dsbo-fom-1" value="<?=$recData['reg_aadhar_number']?>" >
  </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3 col-sm-3- col-xs-3">Profile Management by</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <select class="dsbo-fom-1" name="join_profile_manage_by" id="join_profile_manage_by" >
  <option value="0">----Select Profile Management by----</option>
<option value="<?=$recData['reg_profile_manage_by']?>" <?php if($recData['reg_profile_manage_by']!=""){?> selected <?php }?> ><?=$recData['reg_profile_manage_by']?></option>  
    <option value="Self">Self</option>
<option value="Sibling">Sibling</option>
<option value="Parent">Parent</option>
<option value="Friend">Friend</option>
    </select>
  </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3 col-sm-3- col-xs-3">Blood Group</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
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
                     <h3 id="location-spot" >Location Details<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">(All Fields are Mandatory. )</p>
       <div class="col-md-12 bgmsf1">
        <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Country</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
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
  <div class="col-md-3 col-sm-3- col-xs-3">
  State</div>
  <div class="col-md-9 col-sm-9 col-xs-9" id="constate">
<select class="dsbo-fom-1" name="join_state" id="join_state">
<option value="" selected="selected">----Select State----</option>
<option value="<?=$recData['reg_state_id']?>" <?php if($recData['reg_state_id']!=""){?> selected <?php }?>>
<?=$recData['reg_state_name']?>
</option>
</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  District/City</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <input type="text" placeholder="Enter your city" name="join_city" id="join_city" value="<?=$recData['reg_city']?>" class="dsbo-fom-1">

      </div>
      </div>
       
       </div>
       <div class="clearfix"></div>
       </div>
                     <!------------------->
       
       <h3 id="family-spot" >Famliy Details<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">(All Fields are Mandatory. )</p>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Father's Status</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
<select class="dsbo-fom-1" name="join_father_status" id="join_father_status">
<option  value="0">----Select Father's Status----</option>

<?php if($recData['reg_father_status']!=""){?>
<option value="<?=$recData['reg_father_status']?>"  selected  ><?=$recData['reg_father_status']?></option>
<?php }?>  
<option value="Any">Any</option>
  <option value="Software Professional">Software Professional</option>
  <option value="Hardware Professional">Hardware Professional</option>
  <option value="Engineer - Non IT">Engineer - Non IT</option>
  <option value="Teaching / Academician">Teaching / Academician</option>
 <option value="Professor / Lecturer">Professor / Lecturer</option>
<option value="Education Professional">Education Professional</option>
 <option value="Chartered Accountant">Chartered Accountant</option>
 <option value="Accounts/Finance Professional">Accounts/Finance Professional</option>
  <option value="Auditor">Auditor</option>
 <option value="Company Secretary">Company Secretary</option>
 <option value="Doctor">Doctor</option>
  <option value="Nurse">Nurse</option>
 <option value="Health Care Professional">Health Care Professional</option>
 <option value="Paramedical Professional">Paramedical Professional</option>
<option value="Banking Service Professional">Banking Service Professional</option>
 <option value="Lawyer & Legal Professional">Lawyer & Legal Professional</option>

  <option value="Law Enforcement Officer">Law Enforcement Officer</option>
  <option value="Architect">Architect</option>
 <option value="Interior Designer">Interior Designer</option>
 <option value="Advertising / PR Professional">Advertising / PR Professional</option>
  <option value="Media Professional">Media Professional</option>
 <option value="Entertainment Professional">Entertainment Professional</option>
 <option value="Fashion Designer">Fashion Designer</option>
 <option value="Event Management Professional">Event Management Professional</option>
 <option value="Journalist">Journalist</option>
  <option value="Air Hostess">Air Hostess</option>
 <option value="Airline Professional">Airline Professional</option>
  <option value="Pilot">Pilot</option>
<option value="Mariner / Merchant Navy">Mariner / Merchant Navy</option>
  <option value="Beautician">Beautician</option>
  <option value="Hotel / Hospitality Professional">Hotel / Hospitality Professional</option>
 <option value="Scientist / Researcher">Scientist / Researcher</option>
<option value="Social Worker">Social Worker</option>
 <option value="Agriculture &amp; Farming Professional">Agriculture & Farming Professional</option>
 <option value="Arts &amp; Craftsman">Arts & Craftsman</option>
 <option value="Administrative Professional">Administrative Professional</option>
  <option value="Customer Care Professional">Customer Care Professional</option>
 <option value="CXO / President, Director, Chairman">CXO / President, Director, Chairman</option>
  <option value="Marketing Professional">Marketing Professional</option>
  <option value="Sales Professional">Sales Professional</option>
  <option value="Technician">Technician</option>
  <option value="Consultant">Consultant</option>
  <option value="Clerk">Clerk</option>
 <option value="Officer">Officer</option>
  <option value="Supervisor">Supervisor</option>
 <option value="Manager">Manager</option>
  <option value="Executive">Executive</option>
  <option value="Sportsman">Sportsman</option>
 <option value="Civil Services (IAS/IPS/IRS/IES/IFS)">Civil Services (IAS/IPS/IRS/IES/IFS)</option>
  <option value="Army">Army</option>
  <option value="Navy">Navy</option>
  <option value="Airforce">Airforce</option>
  <option value="Human Resources Professional">Human Resources Professional</option>
 <option value="Financial Analyst / Planning">Financial Analyst / Planning</option>
  <option value="Designer - IT & Engineering">Designer - IT & Engineering</option>
 <option value="Designer - Media & Entertainment">Designer - Media & Entertainment</option>
 <option value="Student">Student</option>
 <option value="Librarian">Librarian</option>
 <option value="Financial Accountant">Financial Accountant</option>
  <option value="Business Analyst">Business Analyst</option>
  <option value="Business Owner / Entrepreneur">Business Owner / Entrepreneur</option>
 <option value="Retired">Retired</option>
  <option value="Others">Others</option>
 <option value="Business">Business</option>
 <option value="Not working">Not working</option>
<option value="Doctor">Doctor</option>
<option value="Engineer">Engineer</option>
</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
 Mother's Status</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_mother_status" id="join_mother_status" >
       <option  value="0">----Select Mother's Status----</option>
<?php if($recData['reg_mother_status']!=""){?>
<option value="<?=$recData['reg_mother_status']?>"  selected  ><?=$recData['reg_mother_status']?></option>
<?php }?>     
<option value="Any">Any</option>
  <option value="Software Professional">Software Professional</option>
  <option value="Hardware Professional">Hardware Professional</option>
  <option value="Engineer - Non IT">Engineer - Non IT</option>
  <option value="Teaching / Academician">Teaching / Academician</option>
 <option value="Professor / Lecturer">Professor / Lecturer</option>
<option value="Education Professional">Education Professional</option>
 <option value="Chartered Accountant">Chartered Accountant</option>
 <option value="Accounts/Finance Professional">Accounts/Finance Professional</option>
  <option value="Auditor">Auditor</option>
 <option value="Company Secretary">Company Secretary</option>
 <option value="Doctor">Doctor</option>
  <option value="Nurse">Nurse</option>
 <option value="Health Care Professional">Health Care Professional</option>
 <option value="Paramedical Professional">Paramedical Professional</option>
<option value="Banking Service Professional">Banking Service Professional</option>
 <option value="Lawyer & Legal Professional">Lawyer & Legal Professional</option>
  <option value="Law Enforcement Officer">Law Enforcement Officer</option>
  <option value="Architect">Architect</option>
 <option value="Interior Designer">Interior Designer</option>
 <option value="Advertising / PR Professional">Advertising / PR Professional</option>
  <option value="Media Professional">Media Professional</option>
 <option value="Entertainment Professional">Entertainment Professional</option>
 <option value="Fashion Designer">Fashion Designer</option>
 <option value="Event Management Professional">Event Management Professional</option>
 <option value="Journalist">Journalist</option>
  <option value="Air Hostess">Air Hostess</option>
 <option value="Airline Professional">Airline Professional</option>
  <option value="Pilot">Pilot</option>
<option value="Mariner / Merchant Navy">Mariner / Merchant Navy</option>
  <option value="Beautician">Beautician</option>
  <option value="Hotel / Hospitality Professional">Hotel / Hospitality Professional</option>
 <option value="Scientist / Researcher">Scientist / Researcher</option>
<option value="Social Worker">Social Worker</option>
 <option value="Agriculture &amp; Farming Professional">Agriculture & Farming Professional</option>
 <option value="Arts &amp; Craftsman">Arts & Craftsman</option>
 <option value="Administrative Professional">Administrative Professional</option>
  <option value="Customer Care Professional">Customer Care Professional</option>
 <option value="CXO / President, Director, Chairman">CXO / President, Director, Chairman</option>
  <option value="Marketing Professional">Marketing Professional</option>
  <option value="Sales Professional">Sales Professional</option>
  <option value="Technician">Technician</option>
  <option value="Consultant">Consultant</option>
  <option value="Clerk">Clerk</option>
 <option value="Officer">Officer</option>
  <option value="Supervisor">Supervisor</option>
 <option value="Manager">Manager</option>
  <option value="Executive">Executive</option>
  <option value="Sportsman">Sportsman</option>
 <option value="Civil Services (IAS/IPS/IRS/IES/IFS)">Civil Services (IAS/IPS/IRS/IES/IFS)</option>
  <option value="Army">Army</option>
  <option value="Navy">Navy</option>
  <option value="Airforce">Airforce</option>
  <option value="Human Resources Professional">Human Resources Professional</option>
 <option value="Financial Analyst / Planning">Financial Analyst / Planning</option>
  <option value="Designer - IT & Engineering">Designer - IT & Engineering</option>
 <option value="Designer - Media & Entertainment">Designer - Media & Entertainment</option>
 <option value="Student">Student</option>
 <option value="Librarian">Librarian</option>
 <option value="Financial Accountant">Financial Accountant</option>
  <option value="Business Analyst">Business Analyst</option>
  <option value="Business Owner / Entrepreneur">Business Owner / Entrepreneur</option>
 <option value="Retired">Retired</option>
  <option value="Others">Others</option>
 <option value="Business">Business</option>
 <option value="Not working">Not working</option>
<option value="Doctor">Doctor</option>
<option value="Engineer">Engineer</option>
</select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
 Siblings Status</div>
<div class="col-md-9 col-sm-9 col-xs-9">

<select class="dsbo-fom-1" name="join_siblings" id="join_siblings" >
<option  value="0">----Select Siblings Status----</option>
<?php for($i=0;$i<=20;$i++){ ?>
<option  value="<?=$i?>" <?php if($recData['reg_siblings']==$i){?> selected <?php }?> ><?=$i?></option>
<?php }?>
</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
 Siblings Maritial Status</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_siblings_marital_status" id="join_siblings_marital_status" >
<option  value="">----Select Siblings Maritial Status----</option>
<?php if($recData['reg_siblings_marital_status']!=""){?> 
<option value="<?=$recData['reg_siblings_marital_status']?>" selected >
<?=$recData['reg_siblings_marital_status']?></option>   
<?php }?> 

    <option value="Doesn't Matter">Doesn't Matter</option>
    <option value="Never Married">Never Married</option>
    <option value="Divorced" >Divorced</option>
    <option value="Widowed">Widowed</option>
    <option value="Awaiting Divorce">Awaiting Divorce</option>
    <option value="Annulled">Annulled</option>
      </select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">Family Status</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
   <select class="dsbo-fom-1" name="join_family_status" id="join_family_status">
   <option value="0" >----Select Family Status----</option>
<?php if($recData['reg_family_status']!=""){?> 
<option value="<?=$recData['reg_family_status']?>" selected >
<?=$recData['reg_family_status']?></option>   
<?php }?> 
   
    <option value="Middle class">Middle class</option>
    <option value="Upper middle class">Upper middle class</option>
    <option value="Rich" >Rich</option>
    <option value="Affluent">Affluent</option>
   
      </select>
  </div>
  </div>
  <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Family type</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_family_type" id="join_family_type">
<option  value="0">----Select Family type----</option>
<option  value="Joint Family" <?php if($recData['reg_family_type']=="Joint Family"){?> selected <?php }?>>Joint Family</option>
<option  value="Nuclear Family" <?php if($recData['reg_family_type']=="Nuclear Family"){?> selected <?php }?> >Nuclear Family</option>
<option  value="Others" <?php if($recData['reg_family_type']=="Others"){?> selected <?php }?> >Others</option>

      </select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Family Values</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_family_values" id="join_family_values">
<option  value="Traditional" <?php if($recData['reg_family_values']=="Traditional"){?> selected <?php }?>>Traditional</option>
<option  value="Moderate" <?php if($recData['reg_family_values']=="Moderate"){?> selected <?php }?>>Moderate</option>
<option  value="Liberal" <?php if($recData['reg_family_values']=="Liberal"){?> selected <?php }?>>Liberal</option>
      </select>
      </div>
      </div>
     
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
 Annual income</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
<select class="dsbo-fom-1" name="join_annual_income" id="join_annual_income">
<option  value="0">----Select Annual income----</option>
<?php if($recData['reg_annual_income']!=""){?> 
<option value="<?=$recData['reg_annual_income']?>" selected >
<?=$recData['reg_annual_income']?></option>   
<?php }?> 
<option  value="Any">Any</option>
<option  value="Less than Rs.50 thousand">Less than Rs.50 thousand</option>
<option  value="Rs.50 thousand">Rs.50 thousand</option>
<option  value="Rs 1 Lakh">Rs 1 Lakh</option>
<option  value="Rs 2 Lakh">Rs 2 Lakh</option>
<option  value="Rs 3 Lakh">Rs 3 Lakh</option>
<option  value="Rs 4 Lakh">Rs 4 Lakh</option>
<option  value="Rs 5 Lakh">Rs 5 Lakh</option>
<option  value="Rs 6 Lakh">Rs 6 Lakh</option>
<option  value="Rs 7 Lakh">Rs 7 Lakh</option>
<option  value="Rs 8 Lakh">Rs 8 Lakh</option>
<option  value="Rs 9 Lakh">Rs 9 Lakh</option>
<option  value="Rs 11 Lakh">Rs 11 Lakh</option>
<option  value="Rs 12 Lakh">Rs 12 Lakh</option>
<option  value="Rs 13 Lakh">Rs 13 Lakh</option>
<option  value="Rs 14 Lakh">Rs 14 Lakh</option>
<option  value="Rs 15 Lakh">Rs 15 Lakh</option>
<option  value="Rs 16 Lakh">Rs 16 Lakh</option>
<option  value="Rs 17 Lakh">Rs 17 Lakh</option>
<option  value="Rs 18 Lakh">Rs 18 Lakh</option>
<option  value="Rs 19 Lakh">Rs 19 Lakh</option>
<option  value="Rs 20 Lakh">Rs 20 Lakh</option>
<option  value="Rs 25 Lakh">Rs 25 Lakh</option>
<option  value="Rs 30 Lakh">Rs 30 Lakh</option>
<option  value="Rs 35 Lakh">Rs 35 Lakh</option>
<option  value="Rs 40 Lakh">Rs 40 Lakh</option>
<option  value="Rs 45 Lakh">Rs 45 Lakh</option>
<option  value="Rs 50 Lakh">Rs 50 Lakh</option>
<option  value="Rs 55 Lakh">Rs 55 Lakh</option>
<option  value="Rs 60 Lakh">Rs 60 Lakh</option>
<option  value="Rs 65 Lakh">Rs 65 Lakh</option>
<option  value="Rs 70 Lakh">Rs 70 Lakh</option>
<option  value="Rs 75 Lakh">Rs 75 Lakh</option>
<option  value="Rs 80 Lakh">Rs 80 Lakh</option>
<option  value="Rs 90 Lakh">Rs 90 Lakh</option>
<option  value="Rs 1 Crore">Rs 1 Crore</option>
<option  value="Rs 1 Crore & Above">Rs 1 Crore & Above</option>
      </select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
 Family living in</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <input type="text" placeholder="Enter Family living in" name="join_family_living_in" id="join_family_living_in" value="<?=$recData['reg_family_living_in']?>" class="dsbo-fom-1">
      </div>
      </div>
      
       </div>
         <div class="clearfix"></div>
       </div>	
                    
         <!----------3rd----------->
					<h3 id="edu-spot" >Education & Career<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">(All Fields are Mandatory. )</p>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Highest Education</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
<select class="dsbo-fom-1" name="join_highest_edu" id="join_highest_edu">
<?php if($recData['reg_highest_edu']!=""){?>
<option value="<?=$recData['reg_highest_edu']?>"  selected  ><?=$recData['reg_highest_edu']?></option>
<?php }?> 
<option value="0" >-- Select Highest Education--</option>
<optgroup label="Engineering/Design">
<option value="B.E/B.Tech">-  B.E/B.Tech</option>
<option value="B.E/B.Tech">-  B.E/B.Tech</option>
<option value="B.Pharma">-  B.Pharma</option>
<option value="M.E/M.Tech">-  M.E/M.Tech</option>
<option value="M.Pharma">-  M.Pharma</option>
<option value="M.S. (Engineering)">-  M.S. (Engineering)</option>
<option value="B.Arch">-  B.Arch</option>
<option value="M.Arch">-  M.Arch</option>
<option value="B.Des">-  B.Des</option>
<option value="M.Des">-  M.Des</option>
      
    </optgroup>
    <optgroup label="Computers:">
     <option value="MCA/PGDCA">-  MCA/PGDCA</option>
      <option value="BCA">-  BCA</option>
      <option value="B.IT">-  B.IT</option>
    </optgroup>
    
     </optgroup>
    <optgroup label="Finance/Commerce:">
      <option value="B.Com">-   B.Com</option>
       <option value="CA">-  CA</option>
       <option value="CS">-   CS</option>
       <option value="ICWA">-  ICWA</option>
       <option value="M.Com">-   M.Com</option>
      <option value="CFA">-  CFA</option>
    </optgroup>
    <optgroup label="Management:">
       <option value="MBA/PGDM">-  MBA/PGDM</option>
     <option value="BBA">-   BBA</option>
       <option value="BHM">-   BHM</option>
    </optgroup>
    <optgroup label="Medicine:">
      <option value="MBBS">-  MBBS</option>
       <option value="M.D.">-   M.D.</option>
       <option value="BAMS">-  BAMS</option>
       
         <option value="BHMS">-  BHMS</option>
       <option value="BDS">-  BDS</option>
       <option value="M.S. (Medicine)">-  M.S. (Medicine)</option>
         <option value="MVSc.">-  MVSc.</option>
       <option value="BVSc.">-  BVSc.</option>
        <option value="MDS">-  MDS</option>
         <option value="BPT">-   BPT</option>
       <option value="MPT">-   MPT</option>
        <option value="DM">-  DM</option>
       <option value="MCh">-  MCh</option>
    </optgroup>
     <optgroup label="Law:">
      <option value="BL /LLB">-   BL /LLB</option>
       <option value="ML/LLM">-  ML/LLM</option>
       </optgroup>
    <optgroup label="Arts/Science:">
      <option value="B.A.">-   B.A.</option>
       <option value="B.Sc">-  B.Sc</option>
       <option value="M.Sc">-  M.Sc</option>
         <option value="B.Ed">-   B.Ed</option>
       <option value="M.Ed">-  M.Ed</option>
        <option value="MSW">-  MSW</option>
        
         <option value="BFA">-   BFA</option>
       <option value="MFA">-  MFA</option>
        <option value="BJMC">-  BJMC</option>
         <option value="MJMC">-  MJMC</option>
    </optgroup>
    
      <optgroup label="Doctorate:">
      <option value="Ph. D">-   Ph. D</option>
       <option value="M.Phil">-  M.Phil</option>
    </optgroup>
    
     <optgroup label="Non-Graduate:">
      <option value="Diploma">-   Diploma</option>
       <option value="High School">-  High School</option>
        <option value="Trade School">-   Trade School</option>
       <option value="Other">-  Other</option>
    </optgroup>
  
  </select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
 Educational Details</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <input type="text" placeholder="Enter Educational Details" name="join_edu_detail" id="join_edu_detail" value="<?=$recData['reg_edu_detail']?>" class="dsbo-fom-1">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Occupation</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_occupation" id="join_occupation">
       <option  value="">----Select Occupation----</option>
<?php if($recData['reg_occupation']!=""){?>
<option value="<?=$recData['reg_occupation']?>"  selected  ><?=$recData['reg_occupation']?></option>
<?php }?>     
<option value="Any">Any</option>
  <option value="Software Professional">Software Professional</option>
  <option value="Hardware Professional">Hardware Professional</option>
  <option value="Engineer - Non IT">Engineer - Non IT</option>
  <option value="Teaching / Academician">Teaching / Academician</option>
 <option value="Professor / Lecturer">Professor / Lecturer</option>
<option value="Education Professional">Education Professional</option>
 <option value="Chartered Accountant">Chartered Accountant</option>
 <option value="Accounts/Finance Professional">Accounts/Finance Professional</option>
  <option value="Auditor">Auditor</option>
 <option value="Company Secretary">Company Secretary</option>
 <option value="Doctor">Doctor</option>
  <option value="Nurse">Nurse</option>
 <option value="Health Care Professional">Health Care Professional</option>
 <option value="Paramedical Professional">Paramedical Professional</option>
<option value="Banking Service Professional">Banking Service Professional</option>
 <option value="Lawyer & Legal Professional">Lawyer & Legal Professional</option>
  <option value="Law Enforcement Officer">Law Enforcement Officer</option>
  <option value="Architect">Architect</option>
 <option value="Interior Designer">Interior Designer</option>
 <option value="Advertising / PR Professional">Advertising / PR Professional</option>
  <option value="Media Professional">Media Professional</option>
 <option value="Entertainment Professional">Entertainment Professional</option>
 <option value="Fashion Designer">Fashion Designer</option>
 <option value="Event Management Professional">Event Management Professional</option>
 <option value="Journalist">Journalist</option>
  <option value="Air Hostess">Air Hostess</option>
 <option value="Airline Professional">Airline Professional</option>
  <option value="Pilot">Pilot</option>
<option value="Mariner / Merchant Navy">Mariner / Merchant Navy</option>
  <option value="Beautician">Beautician</option>
  <option value="Hotel / Hospitality Professional">Hotel / Hospitality Professional</option>
 <option value="Scientist / Researcher">Scientist / Researcher</option>
<option value="Social Worker">Social Worker</option>
 <option value="Agriculture &amp; Farming Professional">Agriculture & Farming Professional</option>
 <option value="Arts &amp; Craftsman">Arts & Craftsman</option>
 <option value="Administrative Professional">Administrative Professional</option>
  <option value="Customer Care Professional">Customer Care Professional</option>
 <option value="CXO / President, Director, Chairman">CXO / President, Director, Chairman</option>
  <option value="Marketing Professional">Marketing Professional</option>
  <option value="Sales Professional">Sales Professional</option>
  <option value="Technician">Technician</option>
  <option value="Consultant">Consultant</option>
  <option value="Clerk">Clerk</option>
 <option value="Officer">Officer</option>
  <option value="Supervisor">Supervisor</option>
 <option value="Manager">Manager</option>
  <option value="Executive">Executive</option>
  <option value="Sportsman">Sportsman</option>
 <option value="Civil Services (IAS/IPS/IRS/IES/IFS)">Civil Services (IAS/IPS/IRS/IES/IFS)</option>
  <option value="Army">Army</option>
  <option value="Navy">Navy</option>
  <option value="Airforce">Airforce</option>
  <option value="Human Resources Professional">Human Resources Professional</option>
 <option value="Financial Analyst / Planning">Financial Analyst / Planning</option>
  <option value="Designer - IT & Engineering">Designer - IT & Engineering</option>
 <option value="Designer - Media & Entertainment">Designer - Media & Entertainment</option>
 <option value="Student">Student</option>
 <option value="Librarian">Librarian</option>
 <option value="Financial Accountant">Financial Accountant</option>
  <option value="Business Analyst">Business Analyst</option>
  <option value="Business Owner / Entrepreneur">Business Owner / Entrepreneur</option>
 <option value="Retired">Retired</option>
  <option value="Others">Others</option>
 <option value="Business">Business</option>
 <option value="Not working">Not working</option>
<option value="Doctor">Doctor</option>
<option value="Engineer">Engineer</option>
</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
 Annual income</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_member_annual_income" id="join_member_annual_income">
       <option  value="0">----Select Annual income----</option>
<?php if($recData['reg_member_annual_income']!=""){?> 
<option value="<?=$recData['reg_member_annual_income']?>" selected >
<?=$recData['reg_member_annual_income']?></option>   
<?php }?> 
<option  value="Any">Any</option>
<option  value="Less than Rs.50 thousand">Less than Rs.50 thousand</option>
<option  value="Rs.50 thousand">Rs.50 thousand</option>
<option  value="Rs 1 Lakh">Rs 1 Lakh</option>
<option  value="Rs 2 Lakh">Rs 2 Lakh</option>
<option  value="Rs 3 Lakh">Rs 3 Lakh</option>
<option  value="Rs 4 Lakh">Rs 4 Lakh</option>
<option  value="Rs 5 Lakh">Rs 5 Lakh</option>
<option  value="Rs 6 Lakh">Rs 6 Lakh</option>
<option  value="Rs 7 Lakh">Rs 7 Lakh</option>
<option  value="Rs 8 Lakh">Rs 8 Lakh</option>
<option  value="Rs 9 Lakh">Rs 9 Lakh</option>
<option  value="Rs 11 Lakh">Rs 11 Lakh</option>
<option  value="Rs 12 Lakh">Rs 12 Lakh</option>
<option  value="Rs 13 Lakh">Rs 13 Lakh</option>
<option  value="Rs 14 Lakh">Rs 14 Lakh</option>
<option  value="Rs 15 Lakh">Rs 15 Lakh</option>
<option  value="Rs 16 Lakh">Rs 16 Lakh</option>
<option  value="Rs 17 Lakh">Rs 17 Lakh</option>
<option  value="Rs 18 Lakh">Rs 18 Lakh</option>
<option  value="Rs 19 Lakh">Rs 19 Lakh</option>
<option  value="Rs 20 Lakh">Rs 20 Lakh</option>
<option  value="Rs 25 Lakh">Rs 25 Lakh</option>
<option  value="Rs 30 Lakh">Rs 30 Lakh</option>
<option  value="Rs 35 Lakh">Rs 35 Lakh</option>
<option  value="Rs 40 Lakh">Rs 40 Lakh</option>
<option  value="Rs 45 Lakh">Rs 45 Lakh</option>
<option  value="Rs 50 Lakh">Rs 50 Lakh</option>
<option  value="Rs 55 Lakh">Rs 55 Lakh</option>
<option  value="Rs 60 Lakh">Rs 60 Lakh</option>
<option  value="Rs 65 Lakh">Rs 65 Lakh</option>
<option  value="Rs 70 Lakh">Rs 70 Lakh</option>
<option  value="Rs 75 Lakh">Rs 75 Lakh</option>
<option  value="Rs 80 Lakh">Rs 80 Lakh</option>
<option  value="Rs 90 Lakh">Rs 90 Lakh</option>
<option  value="Rs 1 Crore">Rs 1 Crore</option>
<option  value="Rs 1 Crore & Above">Rs 1 Crore & Above</option>
      </select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Organization Name</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_organization_name" id="join_organization_name" >
<?php if($recData['reg_organization_name']!=""){?> 
<option value="<?=$recData['reg_organization_name']?>" selected >
<?=$recData['reg_organization_name']?></option>   
<?php }?>      
       <option  value="0">----Select Organization Name----</option>
        <option  value="Government">Government</option>
         <option  value="Private">Private</option>
          <option  value="Business">Business</option>
          <option  value="Defence">Defence</option>
          <option  value="Self Employed">Self Employed</option>
          <option  value="Not working">Not working</option>
      </select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Working Location</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="----Enter Working Location----" name="join_working_location" id="join_working_location" value="<?=$recData['reg_working_location']?>" class="dsbo-fom-1">
      </div>
      </div>
      
       </div>
         <div class="clearfix"></div>
       </div>
       <!----------->
       <h3 id="religious-spot" >Religious Background <span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">(All Fields are Mandatory. )</p>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
   <div class="col-md-3 col-sm-3- col-xs-3">Religion</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
   <select class="dsbo-fom-1" name="join_religion" id="join_religion" onChange="byReligion(this.value)">
   
<?php if($recData['reg_religion']!=""){?> 
<option value="<?=$recData['reg_religion']?>" selected >
<?=$recData['reg_religion']?></option>   
<?php }?>      
       <option value="0">----Select Religion----</option>
        <option value="Hindu">Hindu</option>
         <option value="Muslim">Muslim</option>
         <option value="Christian">Christian</option>
         <option value="Sikh">Sikh</option>
           <option value="Jain">Jain</option>
             <option value="Buddhist">Buddhist</option>
               <option value="Parsi">Parsi</option>
                 <option value="Jewish">Jewish</option>
                     <option value="Other">Other</option>
      </select>

  </div>
      </div>

      
      
       </div>
       
          <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Caste</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_cast" id="join_cast">
<?php if($recData['reg_cast']!=""){?> 
<option value="<?=$recData['reg_cast']?>" selected >
<?=$recData['reg_cast']?></option>   
<?php }?>  
      
       <option  value="0">----Select Caste----</option>
       <option value="Brahmin">Brahmin</option>
                 <option value="Sunni">Sunni</option>
                    <option value="Kayastha">Kayastha</option>
                   <option value="Rajput">Rajput</option>
                    <option value="Maratha">Maratha</option>
                    <option value="Khatri">Khatri</option>
                    <option value="Aggarwal">Aggarwal</option>
                    <option value="Arora">Arora</option>
                    <option value="Kshatriya">Kshatriya</option>
                    <option value="Shwetambar">Shwetambar</option>
                    <option value="Yadav">Yadav</option>
                    <option value="Sindhi">Sindhi</option>
                    <option value="Bania">Bania</option>
                    <option value="Scheduled Caste">Scheduled Caste</option>
                    <option value="Nair">Nair</option>
                    <option value="Lingayat">Lingayat</option>
                   <option value="Jat">Jat</option>
                    <option value="Catholic Roman">Catholic Roman</option>
                    <option value="Patel">Patel</option>
                    <option value="Digamber">Digamber</option>
                   <option value="Sikh Jat">Sikh Jat</option>
                    <option value="Gupta">Gupta</option>
                    <option value="Catholic">Catholic</option>
                    <option value="Teli">Teli</option>
                    <option value="Vishwakarma">Vishwakarma</option>
                   <option value="Brahmin Iyer">Brahmin Iyer</option>
                   <option value="Vaishnav">Vaishnav</option>
                   <option value="Laiswal">Laiswal</option>
                    <option value="Guiiar">Guiiar</option>
                    <option value="Svrian">Svrian</option>
                          </select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Sub Caste</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="Sub Caste" name="join_sub_cast" id="join_sub_cast" value="<?=$recData['reg_sub_cast']?>" class="dsbo-fom-1">
      </div>
      </div>
      
      <div class="col-md-12  <?php if($recData['reg_religion']=="Hindu"){?> dsp-block<?php }else{?>dsp-non<?php }?>" id="hindu">
     
      <div class="col-md-12 no-padd pd-msof "  >
  <div class="col-md-3 col-sm-3- col-xs-3">
  Gotra</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_gotra" id="join_gotra">
<?php if($recData['reg_gotra']!="" && $recData['reg_gotra']!="0"){?> 
<option value="<?=$recData['reg_gotra']?>" selected >
<?=$recData['reg_gotra']?></option>   
<?php }?>        
    <option  value="0">----Select Gotra----</option>
    <option value="Aatharvas" label="Aatharvas">Aatharvas</option>
    <option value="Agasthi" label="Agasthi">Agasthi</option>
    <option value="Ahabhunasa" label="Ahabhunasa">Ahabhunasa</option>
    <option value="Airan" label="Airan">Airan</option>
    <option value="Alampayana" label="Alampayana">Alampayana</option>
    <option value="Angiras" label="Angiras">Angiras</option>
    <option value="Arrishinimi" label="Arrishinimi">Arrishinimi</option>
    <option value="Athreyasya / Athreyasa" label="Athreyasya / Athreyasa">Athreyasya / Athreyasa</option>
    <option value="Atri" label="Atri">Atri</option>
    <option value="Attarishi" label="Attarishi">Attarishi</option>
    <option value="Aukshanas" label="Aukshanas">Aukshanas</option>
    <option value="Aushanas" label="Aushanas">Aushanas</option>
    <option value="Babrahvya" label="Babrahvya">Babrahvya</option>
    <option value="Badarayana" label="Badarayana">Badarayana</option>
    <option value="Baijvayas" label="Baijvayas">Baijvayas</option>
    <option value="Bansal" label="Bansal">Bansal</option>
    <option value="Bashan" label="Bashan">Bashan</option>
    <option value="Bhandal" label="Bhandal">Bhandal</option>
    <option value="Bharadwaj" label="Bharadwaj">Bharadwaj</option>
    <option value="Bhargava/Bhargav" label="Bhargava/Bhargav">Bhargava/Bhargav</option>
    <option value="Bhasyan" label="Bhasyan">Bhasyan</option>
    <option value="Bhrigu" label="Bhrigu">Bhrigu</option>
    <option value="Bindal" label="Bindal">Bindal</option>
    <option value="Birthare" label="Birthare">Birthare</option>
    <option value="Bodhaaynas" label="Bodhaaynas">Bodhaaynas</option>
    <option value="Chandratri" label="Chandratri">Chandratri</option>
    <option value="Chikithasa" label="Chikithasa">Chikithasa</option>
    <option value="Chyavanasa" label="Chyavanasa">Chyavanasa</option>
    <option value="Daksa" label="Daksa">Daksa</option>
    <option value="Dalabhya" label="Dalabhya">Dalabhya</option>
    <option value="Darbhas" label="Darbhas">Darbhas</option>
    <option value="Devrata" label="Devrata">Devrata</option>
    <option value="Dhananjaya" label="Dhananjaya">Dhananjaya</option>
    <option value="Dhanvantri" label="Dhanvantri">Dhanvantri</option>
    <option value="Dhara Gautam" label="Dhara Gautam">Dhara Gautam</option>
    <option value="Dharan" label="Dharan">Dharan</option>
    <option value="Dharanas" label="Dharanas">Dharanas</option>
    <option value="Dixit" label="Dixit">Dixit</option>
    <option value="Duttatreyas" label="Duttatreyas">Duttatreyas</option>
    <option value="Galiva" label="Galiva">Galiva</option>
    <option value="Ganganas" label="Ganganas">Ganganas</option>
    <option value="Gangyanas" label="Gangyanas">Gangyanas</option>
    <option value="Gardhmukh Sandilya" label="Gardhmukh Sandilya">Gardhmukh Sandilya</option>
    <option value="Garg" label="Garg">Garg</option>
    <option value="Garga / Gargya" label="Garga / Gargya">Garga / Gargya</option>
    <option value="Gargya Sainasa" label="Gargya Sainasa">Gargya Sainasa</option>
    <option value="Gautam / Gouthama" label="Gautam / Gouthama">Gautam / Gouthama</option>
    <option value="Ghrit Kaushika" label="Ghrit Kaushika">Ghrit Kaushika</option>
    <option value="Gowri Veetham" label="Gowri Veetham">Gowri Veetham</option>
    <option value="Goyal" label="Goyal">Goyal</option>
    <option value="Goyan" label="Goyan">Goyan</option>
    <option value="Haritasya / Harithasa / Haritha" label="Haritasya / Harithasa / Haritha">Haritasya / Harithasa / Haritha</option>
    <option value="Jaiminiyas" label="Jaiminiyas">Jaiminiyas</option>
    <option value="Jamadagni" label="Jamadagni">Jamadagni</option>
    <option value="Jatukarna" label="Jatukarna">Jatukarna</option>
    <option value="Jindal" label="Jindal">Jindal</option>
    <option value="Kaakavas" label="Kaakavas">Kaakavas</option>
    <option value="Kabi" label="Kabi">Kabi</option>
    <option value="Kalabouddasa" label="Kalabouddasa">Kalabouddasa</option>
    <option value="Kalpangeerasa" label="Kalpangeerasa">Kalpangeerasa</option>
    <option value="Kamakayana Vishwamitra" label="Kamakayana Vishwamitra">Kamakayana Vishwamitra</option>
    <option value="Kamsa" label="Kamsa">Kamsa</option>
    <option value="Kanav" label="Kanav">Kanav</option>
    <option value="Kansal" label="Kansal">Kansal</option>
    <option value="Kanva" label="Kanva">Kanva</option>
    <option value="Kapi" label="Kapi">Kapi</option>
    <option value="Kapila Baradwaj" label="Kapila Baradwaj">Kapila Baradwaj</option>
    <option value="Kapinjal" label="Kapinjal">Kapinjal</option>
    <option value="Kapishthalas" label="Kapishthalas">Kapishthalas</option>
    <option value="Kaplish" label="Kaplish">Kaplish</option>
    <option value="Kashish" label="Kashish">Kashish</option>
    <option value="Kashyapa / Kaashyapa" label="Kashyapa / Kaashyapa">Kashyapa / Kaashyapa</option>
    <option value="Katyayan / Katyan" label="Katyayan / Katyan">Katyayan / Katyan</option>
    <option value="Kaundinya / Koundanya / Kaundilya" label="Kaundinya / Koundanya / Kaundilya">Kaundinya / Koundanya / Kaundilya</option>
    <option value="Kaunsa" label="Kaunsa">Kaunsa</option>
    <option value="Kaushal" label="Kaushal">Kaushal</option>
    <option value="Kaushika / Kaushik / Kausikasa" label="Kaushika / Kaushik / Kausikasa">Kaushika / Kaushik / Kausikasa</option>
    <option value="Keshoryas" label="Keshoryas">Keshoryas</option>
    <option value="Koushika Visvamitrasa" label="Koushika Visvamitrasa">Koushika Visvamitrasa</option>
    <option value="Krishnatrey" label="Krishnatrey">Krishnatrey</option>
    <option value="Kucchal" label="Kucchal">Kucchal</option>
    <option value="Kusa" label="Kusa">Kusa</option>
    <option value="Kutsa / Kutsas / Kutsasa" label="Kutsa / Kutsas / Kutsasa">Kutsa / Kutsas / Kutsasa</option>
    <option value="Laakshmanas" label="Laakshmanas">Laakshmanas</option>
    <option value="Laugakshi" label="Laugakshi">Laugakshi</option>
    <option value="Lavania" label="Lavania">Lavania</option>
    <option value="Lodwan" label="Lodwan">Lodwan</option>
    <option value="Lohit" label="Lohit">Lohit</option>
    <option value="Lokaakhyas" label="Lokaakhyas">Lokaakhyas</option>
    <option value="Lomasha" label="Lomasha">Lomasha</option>
    <option value="Madelia" label="Madelia">Madelia</option>
    <option value="Madhukul" label="Madhukul">Madhukul</option>
    <option value="Maitraya" label="Maitraya">Maitraya</option>
    <option value="Manava" label="Manava">Manava</option>
    <option value="Mandavya" label="Mandavya">Mandavya</option>
    <option value="Mangal" label="Mangal">Mangal</option>
    <option value="Marica" label="Marica">Marica</option>
    <option value="Markendeya" label="Markendeya">Markendeya</option>
    <option value="Maudlas" label="Maudlas">Maudlas</option>
    <option value="Maunas" label="Maunas">Maunas</option>
    <option value="Mihir" label="Mihir">Mihir</option>
    <option value="Mittal" label="Mittal">Mittal</option>
    <option value="Moudgalya" label="Moudgalya">Moudgalya</option>
    <option value="Mouna Bhargava" label="Mouna Bhargava">Mouna Bhargava</option>
    <option value="Munish" label="Munish">Munish</option>
    <option value="Mythravaruna" label="Mythravaruna">Mythravaruna</option>
    <option value="Naagal" label="Naagal">Naagal</option>
    <option value="Nagasya" label="Nagasya">Nagasya</option>
    <option value="Naidrupa Kashyapa" label="Naidrupa Kashyapa">Naidrupa Kashyapa</option>
    <option value="Narayanas" label="Narayanas">Narayanas</option>
    <option value="Nithyandala" label="Nithyandala">Nithyandala</option>
    <option value="Paaniyas" label="Paaniyas">Paaniyas</option>
    <option value="Pachori" label="Pachori">Pachori</option>
    <option value="Paing" label="Paing">Paing</option>
    <option value="Parashar / Parashara" label="Parashar / Parashara">Parashar / Parashara</option>
    <option value="Parthivasa" label="Parthivasa">Parthivasa</option>
    <option value="Paulastya" label="Paulastya">Paulastya</option>
    <option value="Poothamanasa" label="Poothamanasa">Poothamanasa</option>
    <option value="Pourugutsa" label="Pourugutsa">Pourugutsa</option>
    <option value="Prachinas" label="Prachinas">Prachinas</option>
    <option value="Raghuvanshi" label="Raghuvanshi">Raghuvanshi</option>
    <option value="Rajoria" label="Rajoria">Rajoria</option>
    <option value="Rathitar" label="Rathitar">Rathitar</option>
    <option value="Rohinya" label="Rohinya">Rohinya</option>
    <option value="Rohita" label="Rohita">Rohita</option>
    <option value="Sakalya" label="Sakalya">Sakalya</option>
    <option value="Sakhyanasa" label="Sakhyanasa">Sakhyanasa</option>
    <option value="Salankayanasa" label="Salankayanasa">Salankayanasa</option>
    <option value="Sankash" label="Sankash">Sankash</option>
    <option value="Sankha-Pingala-Kausta" label="Sankha-Pingala-Kausta">Sankha-Pingala-Kausta</option>
    <option value="Sankrut" label="Sankrut">Sankrut</option>
    <option value="Sankyanasa" label="Sankyanasa">Sankyanasa</option>
    <option value="Savanaka" label="Savanaka">Savanaka</option>
    <option value="Savarana / Sabarna / Savarna / Sraborno" label="Savarana / Sabarna / Savarna / Sraborno">Savarana / Sabarna / Savarna / Sraborno</option>
    <option value="Shaalaksha" label="Shaalaksha">Shaalaksha</option>
    <option value="Shadamarshana / Shatamarshanam" label="Shadamarshana / Shatamarshanam">Shadamarshana / Shatamarshanam</option>
    <option value="Shakhanas" label="Shakhanas">Shakhanas</option>
    <option value="Shalavatsa" label="Shalavatsa">Shalavatsa</option>
    <option value="Shandilya / Sandilyasa" label="Shandilya / Sandilyasa">Shandilya / Sandilyasa</option>
    <option value="Sharkaras" label="Sharkaras">Sharkaras</option>
    <option value="Sharkvas" label="Sharkvas">Sharkvas</option>
    <option value="Shaunak" label="Shaunak">Shaunak</option>
    <option value="Shravanesya" label="Shravanesya">Shravanesya</option>
    <option value="Shrimukh Shandilya" label="Shrimukh Shandilya">Shrimukh Shandilya</option>
    <option value="Shukla Atreyas" label="Shukla Atreyas">Shukla Atreyas</option>
    <option value="Sigidha" label="Sigidha">Sigidha</option>
    <option value="Singhal" label="Singhal">Singhal</option>
    <option value="Sri Vatsa / Vatsa / Vats / Vacchas" label="Sri Vatsa / Vatsa / Vats / Vacchas">Sri Vatsa / Vatsa / Vats / Vacchas</option>
    <option value="Srungi Bharadwajasa" label="Srungi Bharadwajasa">Srungi Bharadwajasa</option>
    <option value="Suparnasa" label="Suparnasa">Suparnasa</option>
    <option value="Swathantra Kapisa" label="Swathantra Kapisa">Swathantra Kapisa</option>
    <option value="Tayal" label="Tayal">Tayal</option>
    <option value="Tharakayanam" label="Tharakayanam">Tharakayanam</option>
    <option value="Thingal" label="Thingal">Thingal</option>
    <option value="Titwal" label="Titwal">Titwal</option>
    <option value="Tushar" label="Tushar">Tushar</option>
    <option value="Udbahu" label="Udbahu">Udbahu</option>
    <option value="Udhalaka" label="Udhalaka">Udhalaka</option>
    <option value="Uditha Gautham" label="Uditha Gautham">Uditha Gautham</option>
    <option value="Udithya" label="Udithya">Udithya</option>
    <option value="Upamanyu Vasishtasa" label="Upamanyu Vasishtasa">Upamanyu Vasishtasa</option>
    <option value="Upamanyu" label="Upamanyu">Upamanyu</option>
    <option value="Upathya" label="Upathya">Upathya</option>
    <option value="Vadoola / Vadulasa" label="Vadoola / Vadulasa">Vadoola / Vadulasa</option>
    <option value="Vainya" label="Vainya">Vainya</option>
    <option value="Vardheyasa" label="Vardheyasa">Vardheyasa</option>
    <option value="Vashishtha" label="Vashishtha">Vashishtha</option>
    <option value="Veethahavya" label="Veethahavya">Veethahavya</option>
    <option value="Vishnordhageerasa" label="Vishnordhageerasa">Vishnordhageerasa</option>
    <option value="Vishnu Vridhha" label="Vishnu Vridhha">Vishnu Vridhha</option>
    <option value="Vishwamitra" label="Vishwamitra">Vishwamitra</option>
    <option value="Yaska" label="Yaska">Yaska</option>
    <option value="Others" label="Others">Others</option>
    <option value="Don't know" label="Don't know">Don't know</option>
</select>   
      </div>
      </div>
      </div>
      
<div class="col-md-12 no-padd  <?php if($recData['reg_namaz']!="" && $recData['reg_religion']=="Muslim" &&  $_REQUEST['editID']!=""){?> dsp-block  <?php }else{?> dsp-non <?php }?>" id="muslim">      
      <div class="col-md-12 pd-msof" >
  <div class="col-md-3 col-sm-3- col-xs-3">
  Namaaz / Salaah</div>
  <div class="col-md-9 col-sm-9 col-xs-9">

<select class="dsbo-fom-1"  name="join_namaz" id="join_namaz">
<?php if($recData['reg_namaz']!=""){?> 
<option value="<?=$recData['reg_namaz']?>" selected >
<?=$recData['reg_namaz']?></option>   
<?php }?> 
      
    <option  value="0">----Select Namaaz / Salaah----</option>
    <option value="Five times" label="Five times">Five times</option>
    <option value="Only on Jummah" label="Only on Jummah">Only on Jummah</option>
    <option value="During Ramadan" label="During Ramadan">During Ramadan</option>
    <option value="Occasionally" label="Occasionally">Occasionally</option>
</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3 col-sm-3- col-xs-3">Zakaat</div>
   <div class="col-md-6">
  <input type="radio" name="join_zakaat" id="join_zakaat" value="Yes" <?php if($recData['reg_zakaat']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3 col-sm-3- col-xs-3">
  <input type="radio" name="join_zakaat" id="join_zakaat" value="No" <?php if($recData['reg_zakaat']=="No"){?> checked <?php }?>> No
  </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3 col-sm-3- col-xs-3">Fasting in Ramadan</div>
  
 <div class="col-md-6">
  <input type="radio" name="join_fasting" id="join_fasting" value="Yes" <?php if($recData['reg_fasting']=="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3 col-sm-3- col-xs-3">
  <input type="radio" name="join_fasting" id="join_fasting" value="No" <?php if($recData['reg_fasting']=="No"){?> checked <?php }?>> No
  </div>
  
      </div>
      </div>
  <div class="clearfix"></div>
       </div>
       <!--------->
       
       					<h3 id="lifestyle-spot" >Lifestyle And Habits<span class="arrow-r"></span></h3>
					<div>
       <div class="col-md-12 bgmsf1">
       <p class="fld-mntr">(All Fields are Mandatory. )</p>
       
       
       <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Appearance </div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_appearance" id="join_appearance">
       <option  value="0">----Select Appearance----</option>
       <option  value="Fair"  <?php if($recData['reg_appearance']=="Fair"){?> selected <?php }?>  >Fair</option>
       <option  value="Wheatis" <?php if($recData['reg_appearance']=="Wheatis"){?> selected <?php }?> >Wheatis</option>
       <option  value="Dark" <?php if($recData['reg_appearance']=="Dark"){?> selected <?php }?>  > Dark</option>
      </select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Living Status</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_living_status" id="join_living_status">
       <option  value="0">----Select Living Status----</option>
<option  value="Traditional" <?php if($recData['reg_living_status']=="Traditional"){?> selected <?php }?>>Traditional</option>
<option  value="Moderate" <?php if($recData['reg_living_status']=="Moderate"){?> selected <?php }?>>Moderate</option>
<option  value="Liberal" <?php if($recData['reg_living_status']=="Liberal"){?> selected <?php }?>>Liberal</option>
      </select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Physical Status</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_physical_status" id="join_physical_status" >
       <option  value="0">----Select Physical Status----</option>
       <option  value="Slim" <?php if($recData['reg_physical_status']=="Slim"){?> selected <?php }?> >Slim</option>
       <option  value="Average/Athletic" <?php if($recData['reg_physical_status']=="Average/Athletic"){?> selected <?php }?> >Average/Athletic</option>
       <option  value="Heavy" <?php if($recData['reg_physical_status']=="Heavy"){?> selected <?php }?>>Heavy</option>
      </select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Eating Habits</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_eating_habits" id="join_eating_habits">
       <option  value="0">----Select Eating Habits--</option>
       <option  value="Veg" <?php if($recData['reg_eating_habits']=="Veg"){?> selected <?php }?>>Veg</option>
       <option  value="Non-Veg" <?php if($recData['reg_eating_habits']=="Non-Veg"){?> selected <?php }?>>Non-Veg</option>
      </select>
      </div>
      </div>
      
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Smoking Habits</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_smoking_habits" id="join_smoking_habits">
       <option  value="0" >----Select Smoking Habits----</option>
       <option  value="Non-smoker" <?php if($recData['reg_smoking_habits']=="Non-smoker"){?> selected <?php }?>>Non-smoker</option>
       <option  value="Regular smoker" <?php if($recData['reg_smoking_habits']=="Regular smoker"){?> selected <?php }?>>Regular smoker</option>
      </select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Drinking Habits</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
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

       
            
     <h3  id="like-spot">Likes & Interests<span class="arrow-r"></span></h3>
					<div>
                    
       <div class="col-md-12 bgmsf1">
       <p class="fld-mntr">(All Fields are Mandatory. )</p>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Hobbies</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="Enter your Hobbies" name="join_hobbies" id="join_hobbies" value="<?=$recData['reg_hobbies']?>" class="dsbo-fom-1">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Interests</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="Enter your Interests" name="join_interests" id="join_interests" value="<?=$recData['reg_interests']?>" class="dsbo-fom-1">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Favourite Music</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="Enter your Favourite Music" name="join_favourite_music" id="join_favourite_music" value="<?=$recData['reg_favourite_music']?>" class="dsbo-fom-1">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Favourite Book</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="Enter your Favourite Book" class="dsbo-fom-1" name="join_favourite_book" id="join_favourite_book" value="<?=$recData['reg_favourite_book']?>">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Dress Style</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="Enter your Dress Style" class="dsbo-fom-1" name="join_dress_style" id="join_dress_style" value="<?=$recData['reg_dress_style']?>">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  TV Shows</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="Enter your TV Shows" class="dsbo-fom-1" name="join_tv_shows" id="join_tv_shows" value="<?=$recData['reg_tv_shows']?>">
      </div>
      </div>
      
       </div>
         <div class="clearfix"></div>
       </div> 
        <h3  id="contact-spot"> Contact Details<span class="arrow-r"></span></h3>
					<div>
                    
       <div class="col-md-12 bgmsf1">
       <p class="fld-mntr">(All Fields are Mandatory. )</p>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Mobile No</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="Enter your Mobile No" class="dsbo-fom-1"  name="join_member_mobile" id="join_member_mobile"   value="<?=$recData['reg_member_mobile']?>">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Alternate No.</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="Enter your Alternate No." class="dsbo-fom-1" name="join_member_alt_mobile" id="join_member_alt_mobile"   value="<?=$recData['reg_member_alt_mobile']?>">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Email Id</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="Enter your Email Id" class="dsbo-fom-1" name="join_member_email" id="join_member_email"   value="<?=$recData['reg_member_email']?>">
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Suitable time to call</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="Enter your Suitable time to call" class="dsbo-fom-1" name="join_member_call_time" id="join_member_call_time"   value="<?=$recData['reg_member_call_time']?>">
      </div>
      </div>


       </div>
         <div class="clearfix"></div>
       </div>
        <h3  id="about-myself-spot">A Few Words About Myself<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">&nbsp;</p>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
 About Me</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <textarea class="dsbo-fom-1 tex-area" name="join_mem_myself" id="join_mem_myself" placeholder="Prospective matches would like to know what you are like, as a person. Write about yourself. "><?=$recData['reg_mem_myself']?></textarea>
      <p class="abt-me"><span class="nt-styd">Note:</span> Maximum Character 100</p>
      </div>
      </div>
       </div>
       
         <div class="clearfix"></div>
         
       </div>
       
      

					<h3 id="photo-spot" >Upload Photo<span class="arrow-r"></span></h3>
<form action="" method="post" id="frmPick" name="frmPick" enctype="multipart/form-data">
<div>
<p class="fld-mntr">(All Fields are Mandatory. )</p>
<div class="clearfix"></div>
<div class="col-md-9 col-sm-9 col-xs-9 bgmsf1">

<div class="col-md-12 pd-msof" style="margin-top:50px">
<div class="col-md-3 col-sm-3- col-xs-3">Verified&nbsp;Mobile&nbsp;No.</div>
<div class="col-md-9 col-sm-9 col-xs-9">
<input type="text" placeholder="Enter Mobile No." name="join_member_verified_mobile"  id="join_member_verified_mobile" value="<?=$recData['reg_member_verified_mobile']?>"  class="dsbo-fom-1">

</div>
</div>       

</div>
<div class="col-md-3 col-sm-3- col-xs-3">
<div class="no-padd" id="profile-image-area">
<?php if($recData['reg_profile_photo']!=""){?>
<img src="<?=SITE_WS_PATH?>/upload_images/<?=$recData['reg_profile_photo']?>" class="up-img">
<?php }else{?>
<img src="<?=SITE_WS_PATH?>/images/thumbnail.png" class="up-img">
<?php }?>

</div>
</div>
<div class="clearfix"></div>
</form>
</div>




<!--<div class="col-lg-12 text-center">Partner Prefrences</div>-->

					<h3 id="partner-spot"  >Partner Basic Details<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">(All Fields are Mandatory. )</p>
						<div class="col-md-12 bgmsf1">
   

   
  <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">Marital Status</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
   <select class="dsbo-fom-1" name="join_preference_marital_status" id="join_preference_marital_status" >

<option value="0" selected="selected">----Select Marital Status----</option>
<?php if($recData['reg_preference_marital_status']!=""){?>
<option value="<?=$recData['reg_preference_marital_status']?>"  selected  ><?=$recData['reg_preference_marital_status']?></option>   
<?php }?>

    <option value="Doesn't Matter">Doesn't Matter</option>
    <option value="Never Married">Never Married</option>
    <option value="Divorced" >Divorced</option>
    <option value="Widowed">Widowed</option>
    <option value="Awaiting Divorce">Awaiting Divorce</option>
    <option value="Annulled">Annulled</option>
      </select>
  </div>
  </div>
       <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Age</div>
  <div class="col-md-9 col-sm-9 col-xs-9 mp_03">
  <div class="col-md-5">
      <select class="dsbo-fom-1" name="join_preference_age" id="join_preference_age">


<?php for($i=18;$i<=40;$i++){?>      
<option value="<?=$i?>" <?php if($recData['reg_preference_age']==$i){?> selected <?php }?>      ><?=$i?></option>
<?php }?>       
</select>
      </div>
      <div class="col-md-2 text-center mp_db_00 frm-hdg_db">
      Height
      </div>
      
      <div class="col-md-5">
      <select class="dsbo-fom-1" name="join_preference_height" id="join_preference_height">

<?php if($recData['reg_preference_height']!=""){?>
<option value="<?=$recData['reg_preference_height']?>"  selected  ><?=$recData['reg_preference_height']?></option>
<?php }?>

    <option value="4' 5'' - 134cm" >4' 5'' - 134cm</option>
    <option value="4' 6'' - 137cm">4' 6'' - 137cm</option>
    <option value="4' 7'' - 139cm">4' 7'' - 139cm</option>
    <option value="4' 8'' - 142cm" >4' 8'' - 142cm</option>
    <option value="4' 9'' - 144cm">4' 9'' - 144cm</option>
    <option value="4' 10'' - 147cm">4' 10'' - 147cm</option>
    <option value="4' 11'' - 149cm" >4' 11'' - 149cm</option>
    <option value="5' - 152cm">5' - 152cm</option>
    <option value="5' 1'' - 154cm">5' 1'' - 154cm</option>
    <option value="5' 2'' - 157cm">5' 2'' - 157cm</option>
    <option value="5' 3'' - 160cm">5' 3'' - 160cm</option>
    <option value="5' 4'' - 162cm">5' 4'' - 162cm</option>
    <option value="5' 5'' - 165cm">5' 5'' - 165cm</option>
    <option value="5' 6'' - 167cm">5' 6'' - 167cm</option>
    <option value="5' 7'' - 170cm" >5' 7'' - 170cm</option>
    <option value="5' 8'' - 172cm">5' 8'' - 172cm</option>
    <option value="5' 9'' - 175cm">5' 9'' - 175cm</option>
    <option value="5' 10'' - 177cm">5' 10'' - 177cm</option>
    <option value="5' 11'' - 180cm">5' 11'' - 180cm</option>
    <option value="6' - 182cm">6' - 182cm</option>
    <option value="6' 1'' - 185cm">6' 1'' - 185cm</option>
    <option value="6' 2'' - 187cm">6' 2'' - 187cm</option>
    <option value="6' 3'' - 190cm">6' 3'' - 190cm</option>
    <option value="6' 4'' - 193cm">6' 4'' - 193cm</option>
    <option value="6' 5'' - 195cm">6' 5'' - 195cm</option>
    <option value="6' 6'' - 198cm">6' 6'' - 198cm</option>
    <option value="6' 7'' - 200cm">6' 7'' - 200cm</option>
    <option value="6' 8'' - 203cm">6' 8'' - 203cm</option>
    <option value="6' 9'' - 205cm">6' 9'' - 205cm</option>
    <option value="6' 10'' - 208cm">6' 10'' - 208cm</option>
    <option value="6' 11'' - 210cm">6' 11'' - 210cm</option>
      </select>
      </div>
      <div class="clearfix"></div>
      </div>
      </div>
      
      <!-------->
     
       
       
       
      <div class="col-md-12 pd-msof">
   <div class="col-md-3 col-sm-3- col-xs-3">Mother Tongue</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
   <select class="dsbo-fom-1" name="join_preference_mother_tongue" id="join_preference_mother_tongue">
 <option value="0">----Select Mother Tongue----</option>
<?php if($recData['reg_preference_mother_tongue']!=""){?>
<option value="<?=$recData['reg_preference_mother_tongue']?>"  selected  ><?=$recData['reg_preference_mother_tongue']?></option>       
<?php }?>
	<option value="Bengali">Bengali</option>
	<option value="Telugu">Telugu</option>
	<option value="Marathi">Marathi</option>
	<option value="Tamil">Tamil</option>
	<option value="Urdu">Urdu</option>
	<option value="Gujarati">Gujarati</option>
	<option value="Kannada">Kannada</option>
	<option value="Malayalam">Malayalam</option>
	<option value="Odia">Odia</option>
	<option value="Punjabi">Punjabi</option>	
	<option value="Assamese">Assamese</option>
	<option value="Maithili">Maithili</option>
	<option value="Bhili/Bhilodi">Bhili/Bhilodi</option>
	<option value="Santali">Santali</option>
	<option value="Kashmiri">Kashmiri</option>
	<option value="Nepali">Nepali</option>
	<option value="Gondi">Gondi</option>	
	<option value="Sindhi">Sindhi</option>
	<option value="Konkani">Konkani</option>	
	<option value="Dogri">Dogri</option>	
	<option value="Khandeshi">Khandeshi</option>	
	<option value="Kurukh">Kurukh</option>
	<option value="Tulu">Tulu</option>
	<option value="Meitei(Manipuri)">Meitei(Manipuri)</option>
	<option value="Bodo">Bodo</option>
	<option value="Khasi">Khasi</option>
	<option value="Mundari">Mundari</option>	
    </select>
  </div>

      </div>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
   <div class="col-md-3 col-sm-3- col-xs-3">Religion</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
   <select class="dsbo-fom-1" name="join_preference_religion" id="join_preference_religion" onChange="byReligion(this.value)">
   
<?php if($recData['reg_preference_religion']!=""){?> 
<option value="<?=$recData['reg_preference_religion']?>" selected >
<?=$recData['reg_preference_religion']?></option>   
<?php }?>      
       <option value="0">----Select Religion----</option>
        <option value="Hindu">Hindu</option>
         <option value="Muslim">Muslim</option>
         <option value="Christian">Christian</option>
         <option value="Sikh">Sikh</option>
           <option value="Jain">Jain</option>
             <option value="Buddhist">Buddhist</option>
               <option value="Parsi">Parsi</option>
                 <option value="Jewish">Jewish</option>
                     <option value="Other">Other</option>
      </select>

  </div>
      </div>

      
      
       </div>
       
       
<div class="dsp-non" id="hindu">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Gotra</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_preference_gotra" id="join_preference_gotra">
<?php if($recData['reg_preference_gotra']!=""){?> 
<option value="<?=$recData['reg_preference_gotra']?>" selected >
<?=$recData['reg_preference_gotra']?></option>   
<?php }?>        
    <option  value="0">----Select Gotra----</option>
    <option value="Aatharvas" label="Aatharvas">Aatharvas</option>
    <option value="Agasthi" label="Agasthi">Agasthi</option>
    <option value="Ahabhunasa" label="Ahabhunasa">Ahabhunasa</option>
    <option value="Airan" label="Airan">Airan</option>
    <option value="Alampayana" label="Alampayana">Alampayana</option>
    <option value="Angiras" label="Angiras">Angiras</option>
    <option value="Arrishinimi" label="Arrishinimi">Arrishinimi</option>
    <option value="Athreyasya / Athreyasa" label="Athreyasya / Athreyasa">Athreyasya / Athreyasa</option>
    <option value="Atri" label="Atri">Atri</option>
    <option value="Attarishi" label="Attarishi">Attarishi</option>
    <option value="Aukshanas" label="Aukshanas">Aukshanas</option>
    <option value="Aushanas" label="Aushanas">Aushanas</option>
    <option value="Babrahvya" label="Babrahvya">Babrahvya</option>
    <option value="Badarayana" label="Badarayana">Badarayana</option>
    <option value="Baijvayas" label="Baijvayas">Baijvayas</option>
    <option value="Bansal" label="Bansal">Bansal</option>
    <option value="Bashan" label="Bashan">Bashan</option>
    <option value="Bhandal" label="Bhandal">Bhandal</option>
    <option value="Bharadwaj" label="Bharadwaj">Bharadwaj</option>
    <option value="Bhargava/Bhargav" label="Bhargava/Bhargav">Bhargava/Bhargav</option>
    <option value="Bhasyan" label="Bhasyan">Bhasyan</option>
    <option value="Bhrigu" label="Bhrigu">Bhrigu</option>
    <option value="Bindal" label="Bindal">Bindal</option>
    <option value="Birthare" label="Birthare">Birthare</option>
    <option value="Bodhaaynas" label="Bodhaaynas">Bodhaaynas</option>
    <option value="Chandratri" label="Chandratri">Chandratri</option>
    <option value="Chikithasa" label="Chikithasa">Chikithasa</option>
    <option value="Chyavanasa" label="Chyavanasa">Chyavanasa</option>
    <option value="Daksa" label="Daksa">Daksa</option>
    <option value="Dalabhya" label="Dalabhya">Dalabhya</option>
    <option value="Darbhas" label="Darbhas">Darbhas</option>
    <option value="Devrata" label="Devrata">Devrata</option>
    <option value="Dhananjaya" label="Dhananjaya">Dhananjaya</option>
    <option value="Dhanvantri" label="Dhanvantri">Dhanvantri</option>
    <option value="Dhara Gautam" label="Dhara Gautam">Dhara Gautam</option>
    <option value="Dharan" label="Dharan">Dharan</option>
    <option value="Dharanas" label="Dharanas">Dharanas</option>
    <option value="Dixit" label="Dixit">Dixit</option>
    <option value="Duttatreyas" label="Duttatreyas">Duttatreyas</option>
    <option value="Galiva" label="Galiva">Galiva</option>
    <option value="Ganganas" label="Ganganas">Ganganas</option>
    <option value="Gangyanas" label="Gangyanas">Gangyanas</option>
    <option value="Gardhmukh Sandilya" label="Gardhmukh Sandilya">Gardhmukh Sandilya</option>
    <option value="Garg" label="Garg">Garg</option>
    <option value="Garga / Gargya" label="Garga / Gargya">Garga / Gargya</option>
    <option value="Gargya Sainasa" label="Gargya Sainasa">Gargya Sainasa</option>
    <option value="Gautam / Gouthama" label="Gautam / Gouthama">Gautam / Gouthama</option>
    <option value="Ghrit Kaushika" label="Ghrit Kaushika">Ghrit Kaushika</option>
    <option value="Gowri Veetham" label="Gowri Veetham">Gowri Veetham</option>
    <option value="Goyal" label="Goyal">Goyal</option>
    <option value="Goyan" label="Goyan">Goyan</option>
    <option value="Haritasya / Harithasa / Haritha" label="Haritasya / Harithasa / Haritha">Haritasya / Harithasa / Haritha</option>
    <option value="Jaiminiyas" label="Jaiminiyas">Jaiminiyas</option>
    <option value="Jamadagni" label="Jamadagni">Jamadagni</option>
    <option value="Jatukarna" label="Jatukarna">Jatukarna</option>
    <option value="Jindal" label="Jindal">Jindal</option>
    <option value="Kaakavas" label="Kaakavas">Kaakavas</option>
    <option value="Kabi" label="Kabi">Kabi</option>
    <option value="Kalabouddasa" label="Kalabouddasa">Kalabouddasa</option>
    <option value="Kalpangeerasa" label="Kalpangeerasa">Kalpangeerasa</option>
    <option value="Kamakayana Vishwamitra" label="Kamakayana Vishwamitra">Kamakayana Vishwamitra</option>
    <option value="Kamsa" label="Kamsa">Kamsa</option>
    <option value="Kanav" label="Kanav">Kanav</option>
    <option value="Kansal" label="Kansal">Kansal</option>
    <option value="Kanva" label="Kanva">Kanva</option>
    <option value="Kapi" label="Kapi">Kapi</option>
    <option value="Kapila Baradwaj" label="Kapila Baradwaj">Kapila Baradwaj</option>
    <option value="Kapinjal" label="Kapinjal">Kapinjal</option>
    <option value="Kapishthalas" label="Kapishthalas">Kapishthalas</option>
    <option value="Kaplish" label="Kaplish">Kaplish</option>
    <option value="Kashish" label="Kashish">Kashish</option>
    <option value="Kashyapa / Kaashyapa" label="Kashyapa / Kaashyapa">Kashyapa / Kaashyapa</option>
    <option value="Katyayan / Katyan" label="Katyayan / Katyan">Katyayan / Katyan</option>
    <option value="Kaundinya / Koundanya / Kaundilya" label="Kaundinya / Koundanya / Kaundilya">Kaundinya / Koundanya / Kaundilya</option>
    <option value="Kaunsa" label="Kaunsa">Kaunsa</option>
    <option value="Kaushal" label="Kaushal">Kaushal</option>
    <option value="Kaushika / Kaushik / Kausikasa" label="Kaushika / Kaushik / Kausikasa">Kaushika / Kaushik / Kausikasa</option>
    <option value="Keshoryas" label="Keshoryas">Keshoryas</option>
    <option value="Koushika Visvamitrasa" label="Koushika Visvamitrasa">Koushika Visvamitrasa</option>
    <option value="Krishnatrey" label="Krishnatrey">Krishnatrey</option>
    <option value="Kucchal" label="Kucchal">Kucchal</option>
    <option value="Kusa" label="Kusa">Kusa</option>
    <option value="Kutsa / Kutsas / Kutsasa" label="Kutsa / Kutsas / Kutsasa">Kutsa / Kutsas / Kutsasa</option>
    <option value="Laakshmanas" label="Laakshmanas">Laakshmanas</option>
    <option value="Laugakshi" label="Laugakshi">Laugakshi</option>
    <option value="Lavania" label="Lavania">Lavania</option>
    <option value="Lodwan" label="Lodwan">Lodwan</option>
    <option value="Lohit" label="Lohit">Lohit</option>
    <option value="Lokaakhyas" label="Lokaakhyas">Lokaakhyas</option>
    <option value="Lomasha" label="Lomasha">Lomasha</option>
    <option value="Madelia" label="Madelia">Madelia</option>
    <option value="Madhukul" label="Madhukul">Madhukul</option>
    <option value="Maitraya" label="Maitraya">Maitraya</option>
    <option value="Manava" label="Manava">Manava</option>
    <option value="Mandavya" label="Mandavya">Mandavya</option>
    <option value="Mangal" label="Mangal">Mangal</option>
    <option value="Marica" label="Marica">Marica</option>
    <option value="Markendeya" label="Markendeya">Markendeya</option>
    <option value="Maudlas" label="Maudlas">Maudlas</option>
    <option value="Maunas" label="Maunas">Maunas</option>
    <option value="Mihir" label="Mihir">Mihir</option>
    <option value="Mittal" label="Mittal">Mittal</option>
    <option value="Moudgalya" label="Moudgalya">Moudgalya</option>
    <option value="Mouna Bhargava" label="Mouna Bhargava">Mouna Bhargava</option>
    <option value="Munish" label="Munish">Munish</option>
    <option value="Mythravaruna" label="Mythravaruna">Mythravaruna</option>
    <option value="Naagal" label="Naagal">Naagal</option>
    <option value="Nagasya" label="Nagasya">Nagasya</option>
    <option value="Naidrupa Kashyapa" label="Naidrupa Kashyapa">Naidrupa Kashyapa</option>
    <option value="Narayanas" label="Narayanas">Narayanas</option>
    <option value="Nithyandala" label="Nithyandala">Nithyandala</option>
    <option value="Paaniyas" label="Paaniyas">Paaniyas</option>
    <option value="Pachori" label="Pachori">Pachori</option>
    <option value="Paing" label="Paing">Paing</option>
    <option value="Parashar / Parashara" label="Parashar / Parashara">Parashar / Parashara</option>
    <option value="Parthivasa" label="Parthivasa">Parthivasa</option>
    <option value="Paulastya" label="Paulastya">Paulastya</option>
    <option value="Poothamanasa" label="Poothamanasa">Poothamanasa</option>
    <option value="Pourugutsa" label="Pourugutsa">Pourugutsa</option>
    <option value="Prachinas" label="Prachinas">Prachinas</option>
    <option value="Raghuvanshi" label="Raghuvanshi">Raghuvanshi</option>
    <option value="Rajoria" label="Rajoria">Rajoria</option>
    <option value="Rathitar" label="Rathitar">Rathitar</option>
    <option value="Rohinya" label="Rohinya">Rohinya</option>
    <option value="Rohita" label="Rohita">Rohita</option>
    <option value="Sakalya" label="Sakalya">Sakalya</option>
    <option value="Sakhyanasa" label="Sakhyanasa">Sakhyanasa</option>
    <option value="Salankayanasa" label="Salankayanasa">Salankayanasa</option>
    <option value="Sankash" label="Sankash">Sankash</option>
    <option value="Sankha-Pingala-Kausta" label="Sankha-Pingala-Kausta">Sankha-Pingala-Kausta</option>
    <option value="Sankrut" label="Sankrut">Sankrut</option>
    <option value="Sankyanasa" label="Sankyanasa">Sankyanasa</option>
    <option value="Savanaka" label="Savanaka">Savanaka</option>
    <option value="Savarana / Sabarna / Savarna / Sraborno" label="Savarana / Sabarna / Savarna / Sraborno">Savarana / Sabarna / Savarna / Sraborno</option>
    <option value="Shaalaksha" label="Shaalaksha">Shaalaksha</option>
    <option value="Shadamarshana / Shatamarshanam" label="Shadamarshana / Shatamarshanam">Shadamarshana / Shatamarshanam</option>
    <option value="Shakhanas" label="Shakhanas">Shakhanas</option>
    <option value="Shalavatsa" label="Shalavatsa">Shalavatsa</option>
    <option value="Shandilya / Sandilyasa" label="Shandilya / Sandilyasa">Shandilya / Sandilyasa</option>
    <option value="Sharkaras" label="Sharkaras">Sharkaras</option>
    <option value="Sharkvas" label="Sharkvas">Sharkvas</option>
    <option value="Shaunak" label="Shaunak">Shaunak</option>
    <option value="Shravanesya" label="Shravanesya">Shravanesya</option>
    <option value="Shrimukh Shandilya" label="Shrimukh Shandilya">Shrimukh Shandilya</option>
    <option value="Shukla Atreyas" label="Shukla Atreyas">Shukla Atreyas</option>
    <option value="Sigidha" label="Sigidha">Sigidha</option>
    <option value="Singhal" label="Singhal">Singhal</option>
    <option value="Sri Vatsa / Vatsa / Vats / Vacchas" label="Sri Vatsa / Vatsa / Vats / Vacchas">Sri Vatsa / Vatsa / Vats / Vacchas</option>
    <option value="Srungi Bharadwajasa" label="Srungi Bharadwajasa">Srungi Bharadwajasa</option>
    <option value="Suparnasa" label="Suparnasa">Suparnasa</option>
    <option value="Swathantra Kapisa" label="Swathantra Kapisa">Swathantra Kapisa</option>
    <option value="Tayal" label="Tayal">Tayal</option>
    <option value="Tharakayanam" label="Tharakayanam">Tharakayanam</option>
    <option value="Thingal" label="Thingal">Thingal</option>
    <option value="Titwal" label="Titwal">Titwal</option>
    <option value="Tushar" label="Tushar">Tushar</option>
    <option value="Udbahu" label="Udbahu">Udbahu</option>
    <option value="Udhalaka" label="Udhalaka">Udhalaka</option>
    <option value="Uditha Gautham" label="Uditha Gautham">Uditha Gautham</option>
    <option value="Udithya" label="Udithya">Udithya</option>
    <option value="Upamanyu Vasishtasa" label="Upamanyu Vasishtasa">Upamanyu Vasishtasa</option>
    <option value="Upamanyu" label="Upamanyu">Upamanyu</option>
    <option value="Upathya" label="Upathya">Upathya</option>
    <option value="Vadoola / Vadulasa" label="Vadoola / Vadulasa">Vadoola / Vadulasa</option>
    <option value="Vainya" label="Vainya">Vainya</option>
    <option value="Vardheyasa" label="Vardheyasa">Vardheyasa</option>
    <option value="Vashishtha" label="Vashishtha">Vashishtha</option>
    <option value="Veethahavya" label="Veethahavya">Veethahavya</option>
    <option value="Vishnordhageerasa" label="Vishnordhageerasa">Vishnordhageerasa</option>
    <option value="Vishnu Vridhha" label="Vishnu Vridhha">Vishnu Vridhha</option>
    <option value="Vishwamitra" label="Vishwamitra">Vishwamitra</option>
    <option value="Yaska" label="Yaska">Yaska</option>
    <option value="Others" label="Others">Others</option>
    <option value="Don't know" label="Don't know">Don't know</option>
</select>   
      </div>
      </div>
      </div>
             
 
 
 <div class="dsp-non" id="muslim">      
      <div class="col-md-12 pd-msof" >
  <div class="col-md-3 col-sm-3- col-xs-3">
  Namaaz / Salaah</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
<select class="dsbo-fom-1" name="join_preference_namaz" id="join_preference_namaz">
<?php if($recData['reg_preference_namaz']!=""){?> 
<option value="<?=$recData['reg_preference_namaz']?>" selected >
<?=$recData['reg_preference_namaz']?></option>   
<?php }?> 
      
    <option  value="0">----Select Namaaz / Salaah----</option>
    <option value="Five times" label="Five times">Five times</option>
    <option value="Only on Jummah" label="Only on Jummah">Only on Jummah</option>
    <option value="During Ramadan" label="During Ramadan">During Ramadan</option>
    <option value="Occasionally" label="Occasionally">Occasionally</option>
</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3 col-sm-3- col-xs-3">Zakaat</div>
   <div class="col-md-6">
<?=$recData['reg_preference_zakaat']?>
</div>
  <div class="col-md-3 col-sm-3- col-xs-3">
  
  </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3 col-sm-3- col-xs-3">Fasting in Ramadan</div>
  
 <div class="col-md-6">
 <?=$recData['reg_preference_fasting']?>
 
 
  </div>
  
      </div>
      </div>
            
       
       
          <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Caste</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_preference_cast" id="join_preference_cast">
<?php if($recData['reg_preference_cast']!=""){?> 
<option value="<?=$recData['reg_preference_cast']?>" selected >
<?=$recData['reg_preference_cast']?></option>   
<?php }?>  
      
       <option  value="0">----Select Caste----</option>
       <option value="Brahmin">Brahmin</option>
                 <option value="Sunni">Sunni</option>
                    <option value="Kayastha">Kayastha</option>
                   <option value="Rajput">Rajput</option>
                    <option value="Maratha">Maratha</option>
                    <option value="Khatri">Khatri</option>
                    <option value="Aggarwal">Aggarwal</option>
                    <option value="Arora">Arora</option>
                    <option value="Kshatriya">Kshatriya</option>
                    <option value="Shwetambar">Shwetambar</option>
                    <option value="Yadav">Yadav</option>
                    <option value="Sindhi">Sindhi</option>
                    <option value="Bania">Bania</option>
                    <option value="Scheduled Caste">Scheduled Caste</option>
                    <option value="Nair">Nair</option>
                    <option value="Lingayat">Lingayat</option>
                   <option value="Jat">Jat</option>
                    <option value="Catholic Roman">Catholic Roman</option>
                    <option value="Patel">Patel</option>
                    <option value="Digamber">Digamber</option>
                   <option value="Sikh Jat">Sikh Jat</option>
                    <option value="Gupta">Gupta</option>
                    <option value="Catholic">Catholic</option>
                    <option value="Teli">Teli</option>
                    <option value="Vishwakarma">Vishwakarma</option>
                   <option value="Brahmin Iyer">Brahmin Iyer</option>
                   <option value="Vaishnav">Vaishnav</option>
                   <option value="Laiswal">Laiswal</option>
                    <option value="Guiiar">Guiiar</option>
                    <option value="Svrian">Svrian</option>
                          </select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Sub Caste</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
<input type="text" placeholder="Sub Caste" name="join_preference_sub_cast" id="join_preference_sub_cast" value="<?=$recData['reg_preference_sub_cast']?>" class="dsbo-fom-1">
      </div>
      </div>
      
       </div>
       <div class="clearfix"></div>
      
					</div>
                     <h3  id="partner-location-spot" >Partner Location Preference<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">(All Fields are Mandatory. )</p>
       <div class="col-md-12 bgmsf1">
        <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Country</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
<select class="dsbo-fom-1" name="join_preference_country_id" id="join_preference_country_id" onChange="showstateprefer(this.value);">
<option value="0" >----Select Country----</option>
<?php
$sql_country=db_query("select * from tbl_country_master where 1 and status='Active'");
if(mysqli_num_rows($sql_country)>0){
while($data=mysqli_fetch_array($sql_country)){
@extract($data);
?>
<option value="<?=$data['contId']?>" <?php if($recData['reg_preference_country_id']==$data['contId']){?> selected <?php }?>>
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
  <div class="col-md-3 col-sm-3- col-xs-3">
  State</div>
  <div class="col-md-9 col-sm-9 col-xs-9" id="constate_preference">
<select class="dsbo-fom-1" name="join_preference_state_id" id="join_preference_state_id">
<option value="0" >----Select State----</option>
<?php if($recData['reg_preference_state_id']!="" && $recData['reg_preference_state_id']!=0){?> 
<option value="<?=$recData['reg_preference_state_id']?>" selected >
<?=$recData['reg_preference_state_name']?>
</option>
<?php }?>
</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  District/City</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <input type="text" placeholder="Enter your city" name="join_preference_city" id="join_preference_city" value="<?=$recData['reg_preference_city']?>" class="dsbo-fom-1">

      </div>
      </div>
       
       </div>
       <div class="clearfix"></div>
       </div>
                     <!------------------->
   
                    
         <!----------3rd----------->
<h3  id="professional-spot" >Partner Professional Preference<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">(All Fields are Mandatory. )</p>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Highest Education</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
<select class="dsbo-fom-1" name="join_preference_highest_edu" id="join_preference_highest_edu">
<?php if($recData['reg_preference_highest_edu']!=""){?>
<option value="<?=$recData['reg_preference_highest_edu']?>"  selected  ><?=$recData['reg_preference_highest_edu']?></option>
<?php }?> 
<option value="0" >-- Select Highest Education--</option>
<optgroup label="Engineering/Design">
<option value="B.E/B.Tech">-  B.E/B.Tech</option>
<option value="B.E/B.Tech">-  B.E/B.Tech</option>
<option value="B.Pharma">-  B.Pharma</option>
<option value="M.E/M.Tech">-  M.E/M.Tech</option>
<option value="M.Pharma">-  M.Pharma</option>
<option value="M.S. (Engineering)">-  M.S. (Engineering)</option>
<option value="B.Arch">-  B.Arch</option>
<option value="M.Arch">-  M.Arch</option>
<option value="B.Des">-  B.Des</option>
<option value="M.Des">-  M.Des</option>
      
    </optgroup>
    <optgroup label="Computers:">
     <option value="MCA/PGDCA">-  MCA/PGDCA</option>
      <option value="BCA">-  BCA</option>
      <option value="B.IT">-  B.IT</option>
    </optgroup>
    
     </optgroup>
    <optgroup label="Finance/Commerce:">
      <option value="B.Com">-   B.Com</option>
       <option value="CA">-  CA</option>
       <option value="CS">-   CS</option>
       <option value="ICWA">-  ICWA</option>
       <option value="M.Com">-   M.Com</option>
      <option value="CFA">-  CFA</option>
    </optgroup>
    <optgroup label="Management:">
       <option value="MBA/PGDM">-  MBA/PGDM</option>
     <option value="BBA">-   BBA</option>
       <option value="BHM">-   BHM</option>
    </optgroup>
    <optgroup label="Medicine:">
      <option value="MBBS">-  MBBS</option>
       <option value="M.D.">-   M.D.</option>
       <option value="BAMS">-  BAMS</option>
       
         <option value="BHMS">-  BHMS</option>
       <option value="BDS">-  BDS</option>
       <option value="M.S. (Medicine)">-  M.S. (Medicine)</option>
         <option value="MVSc.">-  MVSc.</option>
       <option value="BVSc.">-  BVSc.</option>
        <option value="MDS">-  MDS</option>
         <option value="BPT">-   BPT</option>
       <option value="MPT">-   MPT</option>
        <option value="DM">-  DM</option>
       <option value="MCh">-  MCh</option>
    </optgroup>
     <optgroup label="Law:">
      <option value="BL /LLB">-   BL /LLB</option>
       <option value="ML/LLM">-  ML/LLM</option>
       </optgroup>
    <optgroup label="Arts/Science:">
      <option value="B.A.">-   B.A.</option>
       <option value="B.Sc">-  B.Sc</option>
       <option value="M.Sc">-  M.Sc</option>
         <option value="B.Ed">-   B.Ed</option>
       <option value="M.Ed">-  M.Ed</option>
        <option value="MSW">-  MSW</option>
        
         <option value="BFA">-   BFA</option>
       <option value="MFA">-  MFA</option>
        <option value="BJMC">-  BJMC</option>
         <option value="MJMC">-  MJMC</option>
    </optgroup>
    
      <optgroup label="Doctorate:">
      <option value="Ph. D">-   Ph. D</option>
       <option value="M.Phil">-  M.Phil</option>
    </optgroup>
    
     <optgroup label="Non-Graduate:">
      <option value="Diploma">-   Diploma</option>
       <option value="High School">-  High School</option>
        <option value="Trade School">-   Trade School</option>
       <option value="Other">-  Other</option>
    </optgroup>
  
  </select>

      </div>
      </div>
      
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Occupation</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_preference_occupation" id="join_preference_occupation">
       <option  value="">----Select Occupation----</option>
<?php if($recData['reg_preference_occupation']!=""){?>
<option value="<?=$recData['reg_preference_occupation']?>"  selected  ><?=$recData['reg_preference_occupation']?></option>
<?php }?>     
<option value="Any">Any</option>
  <option value="Software Professional">Software Professional</option>
  <option value="Hardware Professional">Hardware Professional</option>
  <option value="Engineer - Non IT">Engineer - Non IT</option>
  <option value="Teaching / Academician">Teaching / Academician</option>
 <option value="Professor / Lecturer">Professor / Lecturer</option>
<option value="Education Professional">Education Professional</option>
 <option value="Chartered Accountant">Chartered Accountant</option>
 <option value="Accounts/Finance Professional">Accounts/Finance Professional</option>
  <option value="Auditor">Auditor</option>
 <option value="Company Secretary">Company Secretary</option>
 <option value="Doctor">Doctor</option>
  <option value="Nurse">Nurse</option>
 <option value="Health Care Professional">Health Care Professional</option>
 <option value="Paramedical Professional">Paramedical Professional</option>
<option value="Banking Service Professional">Banking Service Professional</option>
 <option value="Lawyer & Legal Professional">Lawyer & Legal Professional</option>
  <option value="Law Enforcement Officer">Law Enforcement Officer</option>
  <option value="Architect">Architect</option>
 <option value="Interior Designer">Interior Designer</option>
 <option value="Advertising / PR Professional">Advertising / PR Professional</option>
  <option value="Media Professional">Media Professional</option>
 <option value="Entertainment Professional">Entertainment Professional</option>
 <option value="Fashion Designer">Fashion Designer</option>
 <option value="Event Management Professional">Event Management Professional</option>
 <option value="Journalist">Journalist</option>
  <option value="Air Hostess">Air Hostess</option>
 <option value="Airline Professional">Airline Professional</option>
  <option value="Pilot">Pilot</option>
<option value="Mariner / Merchant Navy">Mariner / Merchant Navy</option>
  <option value="Beautician">Beautician</option>
  <option value="Hotel / Hospitality Professional">Hotel / Hospitality Professional</option>
 <option value="Scientist / Researcher">Scientist / Researcher</option>
<option value="Social Worker">Social Worker</option>
 <option value="Agriculture &amp; Farming Professional">Agriculture & Farming Professional</option>
 <option value="Arts &amp; Craftsman">Arts & Craftsman</option>
 <option value="Administrative Professional">Administrative Professional</option>
  <option value="Customer Care Professional">Customer Care Professional</option>
 <option value="CXO / President, Director, Chairman">CXO / President, Director, Chairman</option>
  <option value="Marketing Professional">Marketing Professional</option>
  <option value="Sales Professional">Sales Professional</option>
  <option value="Technician">Technician</option>
  <option value="Consultant">Consultant</option>
  <option value="Clerk">Clerk</option>
 <option value="Officer">Officer</option>
  <option value="Supervisor">Supervisor</option>
 <option value="Manager">Manager</option>
  <option value="Executive">Executive</option>
  <option value="Sportsman">Sportsman</option>
 <option value="Civil Services (IAS/IPS/IRS/IES/IFS)">Civil Services (IAS/IPS/IRS/IES/IFS)</option>
  <option value="Army">Army</option>
  <option value="Navy">Navy</option>
  <option value="Airforce">Airforce</option>
  <option value="Human Resources Professional">Human Resources Professional</option>
 <option value="Financial Analyst / Planning">Financial Analyst / Planning</option>
  <option value="Designer - IT & Engineering">Designer - IT & Engineering</option>
 <option value="Designer - Media & Entertainment">Designer - Media & Entertainment</option>
 <option value="Student">Student</option>
 <option value="Librarian">Librarian</option>
 <option value="Financial Accountant">Financial Accountant</option>
  <option value="Business Analyst">Business Analyst</option>
  <option value="Business Owner / Entrepreneur">Business Owner / Entrepreneur</option>
 <option value="Retired">Retired</option>
  <option value="Others">Others</option>
 <option value="Business">Business</option>
 <option value="Not working">Not working</option>
<option value="Doctor">Doctor</option>
<option value="Engineer">Engineer</option>
</select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
 Annual income</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_preference_member_annual_income" id="join_preference_member_annual_income">
       <option  value="0">----Select Annual income----</option>
<?php if($recData['reg_preference_member_annual_income']!=""){?> 
<option value="<?=$recData['reg_preference_member_annual_income']?>" selected >
<?=$recData['reg_preference_member_annual_income']?></option>   
<?php }?> 
<option  value="Any">Any</option>
<option  value="Less than Rs.50 thousand">Less than Rs.50 thousand</option>
<option  value="Rs.50 thousand">Rs.50 thousand</option>
<option  value="Rs 1 Lakh">Rs 1 Lakh</option>
<option  value="Rs 2 Lakh">Rs 2 Lakh</option>
<option  value="Rs 3 Lakh">Rs 3 Lakh</option>
<option  value="Rs 4 Lakh">Rs 4 Lakh</option>
<option  value="Rs 5 Lakh">Rs 5 Lakh</option>
<option  value="Rs 6 Lakh">Rs 6 Lakh</option>
<option  value="Rs 7 Lakh">Rs 7 Lakh</option>
<option  value="Rs 8 Lakh">Rs 8 Lakh</option>
<option  value="Rs 9 Lakh">Rs 9 Lakh</option>
<option  value="Rs 11 Lakh">Rs 11 Lakh</option>
<option  value="Rs 12 Lakh">Rs 12 Lakh</option>
<option  value="Rs 13 Lakh">Rs 13 Lakh</option>
<option  value="Rs 14 Lakh">Rs 14 Lakh</option>
<option  value="Rs 15 Lakh">Rs 15 Lakh</option>
<option  value="Rs 16 Lakh">Rs 16 Lakh</option>
<option  value="Rs 17 Lakh">Rs 17 Lakh</option>
<option  value="Rs 18 Lakh">Rs 18 Lakh</option>
<option  value="Rs 19 Lakh">Rs 19 Lakh</option>
<option  value="Rs 20 Lakh">Rs 20 Lakh</option>
<option  value="Rs 25 Lakh">Rs 25 Lakh</option>
<option  value="Rs 30 Lakh">Rs 30 Lakh</option>
<option  value="Rs 35 Lakh">Rs 35 Lakh</option>
<option  value="Rs 40 Lakh">Rs 40 Lakh</option>
<option  value="Rs 45 Lakh">Rs 45 Lakh</option>
<option  value="Rs 50 Lakh">Rs 50 Lakh</option>
<option  value="Rs 55 Lakh">Rs 55 Lakh</option>
<option  value="Rs 60 Lakh">Rs 60 Lakh</option>
<option  value="Rs 65 Lakh">Rs 65 Lakh</option>
<option  value="Rs 70 Lakh">Rs 70 Lakh</option>
<option  value="Rs 75 Lakh">Rs 75 Lakh</option>
<option  value="Rs 80 Lakh">Rs 80 Lakh</option>
<option  value="Rs 90 Lakh">Rs 90 Lakh</option>
<option  value="Rs 1 Crore">Rs 1 Crore</option>
<option  value="Rs 1 Crore & Above">Rs 1 Crore & Above</option>
      </select>

      </div>
      </div>
      
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Working Location</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
  <input type="text" placeholder="----Enter Working Location----" name="join_preference_working_location" id="join_preference_working_location" value="<?=$recData['reg_preference_working_location']?>" class="dsbo-fom-1">
      </div>
      </div>
      
       </div>
         <div class="clearfix"></div>
       </div>
       <!----------->
      
<h3  id="lifestyle-spot">Partner Lifestyle<span class="arrow-r"></span></h3>
					<div>
       <div class="col-md-12 bgmsf1">
       <p class="fld-mntr">(All Fields are Mandatory. )</p>
       
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Appearance </div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_preference_appearance" id="join_preference_appearance">
       <option  value="0">----Select Appearance----</option>
       <option  value="Fair"  <?php if($recData['reg_preference_appearance']=="Fair"){?> selected <?php }?>  >Fair</option>
       <option  value="Wheatis" <?php if($recData['reg_preference_appearance']=="Wheatis"){?> selected <?php }?> >Wheatis</option>
       <option  value="Dark" <?php if($recData['reg_preference_appearance']=="Dark"){?> selected <?php }?>  > Dark</option>
      </select>
      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Living Status</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_preference_living_status" id="join_preference_living_status">
       <option  value="0">----Select Living Status----</option>
<option  value="Traditional" <?php if($recData['reg_preference_living_status']=="Traditional"){?> selected <?php }?>>Traditional</option>
<option  value="Moderate" <?php if($recData['reg_preference_living_status']=="Moderate"){?> selected <?php }?>>Moderate</option>
<option  value="Liberal" <?php if($recData['reg_preference_living_status']=="Liberal"){?> selected <?php }?>>Liberal</option>
      </select>

      </div>
      </div>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Physical Status</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
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
       
       <h3  id="habits-spot">Partner Habits<span class="arrow-r"></span></h3>
					<div>
       <div class="col-md-12 bgmsf1">
       <p class="fld-mntr">(All Fields are Mandatory. )</p>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Eating Habits</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_preference_eating_habits" id="join_preference_eating_habits">
       <option  value="0">----Select Eating Habits--</option>
<option  value="Veg" <?php if($recData['reg_preference_eating_habits']=="Veg"){?> selected <?php }?>>Veg</option>
<option  value="Non-Veg" <?php if($recData['reg_preference_eating_habits']=="Non-Veg"){?> selected <?php }?>>Non-Veg</option>
      </select>
      </div>
      </div>
      
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Smoking Habits</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
      <select class="dsbo-fom-1" name="join_preference_smoking_habits" id="join_preference_smoking_habits">
       <option  value="0" >----Select Smoking Habits----</option>
       <option  value="Non-smoker" <?php if($recData['reg_preference_smoking_habits']=="Non-smoker"){?> selected <?php }?>>Non-smoker</option>
       <option  value="Regular smoker" <?php if($recData['reg_preference_smoking_habits']=="Regular smoker"){?> selected <?php }?>>Regular smoker</option>
      </select>
      </div>
      </div>
      
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
  Drinking Habits</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
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
      
        <h3  id="about-spot">A Few Words About My Partner Preference<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">&nbsp;</p>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3 col-sm-3- col-xs-3">
 About My Partner Preference</div>
  <div class="col-md-9 col-sm-9 col-xs-9">
<textarea class="dsbo-fom-1 tex-area" name="join_preference_mem_myself" id="join_preference_mem_myself" placeholder="Prospective matches would like to know what you are like, as a person. Write About My Partner Preference. "><?=$recData['reg_preference_mem_myself']?></textarea>
      <p class="abt-me"><span class="nt-styd">Note:</span> Maximum Character 100</p>
      </div>
      </div>
       </div>
       
         <div class="clearfix"></div>
         
       </div>         
         
       </div>
       
    <div class="col-md-12 text-center mt10">
                
<a href="javascript:self.close()" class="btn btn-danger"><strong style="font-size:16px;"><i class="fa fa-times-circle-o"></i> Close</strong></a>
               
        </div>            
</form>
         
        </div>
        <!---end-images--->
      
     
    </div> 
    </div>
    </div>
</section>




</div>

</body>
</html>
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script>
$('#regd-short-form input').attr('readonly', 'readonly');
$('#regd-short-form select').attr('disabled', 'disabled');
$('#regd-short-form textarea').attr('readonly', 'readonly');
</script>