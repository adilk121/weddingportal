<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<link href="assets/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-toggle/bootstrap-toggle.min.css" rel="stylesheet" type="text/css"/>
<?php

$rID="";
if($_GET['editID']!=""){
	
$rID=$_GET['editID'];

$sql="SELECT * FROM tbl_registration WHERE 1 AND reg_id='$rID'";
$dataRegd=db_query($sql);
$recData=mysqli_fetch_array($dataRegd);

}

//else{
//
//
//$rID=$_SESSION['regIDadmin'];
//
//$sql="SELECT * FROM tbl_registration WHERE 1 AND reg_id='$rID'";
//$dataRegd=db_query($sql);
//$recData=mysqli_fetch_array($dataRegd);
//}
?>


         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-user-plus"></i>
               </div>
               <div class="header-title">
                  <h1>Add/Edit User</h1>
                  <small>Add/Edit user information</small>
                  

<a href="manage-registration.php"><button id="btn-go-back" type="button" class="btn btn-labeled btn-inverse m-b-5 pull-right">
<span class="btn-label" ><i class="fa fa-chevron-circle-left"></i></span>Go Back
</button></a>

                  
               </div>
               
         
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

.dsbo-fom-1{width:100%; height:40px; border-radius:5px; padding:5px; border:solid 1px #ccc}

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
            </section>
            <!-- Main content -->
<!--<script src="../ckeditor/ckeditor.js"></script>  -->          
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag" data-edit-title='false' data-close='false' data-reload='false'>
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4 class="font-black"><i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>
&nbsp;User Information</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        
<?php if($_SESSION['msg']!=""){?>
          <div class="col-lg-12 text-center" id="error-msg"><?=$_SESSION['msg']?></div>
          <?php 
		  unset($_SESSION['msg']);
		  }
		  ?>
          
          
                                  
<div class="col-lg-12 update-profile-holder ">
<div class="col-md-12 text-center mt10 mb10">
                
               
<input type="button" value="SAVE MEMBER INFORNATION" style="width:50%;border-radius:5px" class="btn btn-success btn-sbmt pd02 btn-lg ml20 bold" onClick="saveAllDetail('')" >
        <!--<input type="reset" value="Reset" class="btn-Resetd">-->
        </div>  
        
<section style="background-color:#2a3f54;padding:20px 0">
    <div class="container">
    
 
            
      <div class="row">
        <div class="col-md-10 col-md-offset-1 all-sec">
<form action="" method="post" name="regd-short-form" id="regd-short-form" enctype="multipart/form-data" onSubmit="return FreeRegdValidation()" >         
      <div class="col-md-10 mp_db_00" style="margin-bottom:20px !important;">
      <div class="clearfix"></div>
      
      
<input type="hidden" name="regIDadmin" id="regIDadmin"  value="<?=$rID?>" />
<?php unset($_SESSION['regIDadmin']);?>
          
  <div id="collapse-menu" class="collapse-container" style="border:solid 1px #e4e4e4;">

<h3>Login Details    <span class="arrow-r"></span></h3>
<div>
                     <p class="fld-mntr">( <span class="font-red">*</span>Mandatory Fields. )</p>
						<div class="col-md-12 bgmsf1">
     <div class="col-md-12 pd-msof">
  <div class="col-md-3"><span class="font-red">*</span>Email</div>
  <div class="col-md-9">
   <input type="text" placeholder="Enter Email ID" name="join_email" id="join_email" value="<?=$recData['reg_email']?>" onBlur="check_member_email()" autocomplete="off" class="dsbo-fom-1">

<span id="info-area"></span>   
   
  </div>
  </div>
  
  
  
  <div class="col-md-12 pd-msof">
  <div class="col-md-3"><span class="font-red">*</span>Password</div>
  <div class="col-md-9">
<input type="text" placeholder="Enter Password" name="join_pass" id="join_pass" autocomplete="off" value="<?=$recData['reg_pass']?>" class="dsbo-fom-1">
  </div>
  </div>  
  
  <div class="col-md-12 pd-msof">
  <div class="col-md-3"><span class="font-red">*</span>Creating Profile For </div>
  <div class="col-md-9">
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
  <div class="col-md-3"><span class="font-red">*</span>Contact&nbsp;Person&nbsp;Mobile</div>
  <div class="col-md-9">
   <input type="text" placeholder="Enter mobile number" name="join_mobile" id="join_mobile" value="<?=$recData['reg_mobile_no']?>" class="dsbo-fom-1">
  </div>
  </div>    
      
</form>
</div>
       <div class="clearfix"></div>
      
					</div>
                    
                    
<h3 id="basic-detail-spot" <?php if($_REQUEST['editID']!=""){?> onClick="update_regStart('edit')"<?php }else{?>onClick="update_regStart('add')"<?php }?> >Basic Details    <span class="arrow-r"></span></h3>

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
                     <p class="fld-mntr">&nbsp;</p>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
 <span class="font-red">*</span>About Me</div>
  <div class="col-md-9">
      <textarea class="dsbo-fom-1 tex-area" name="join_mem_myself" id="join_mem_myself" placeholder="Prospective matches would like to know what you are like, as a person. Write about yourself. "><?=$recData['reg_mem_myself']?></textarea>

<p class="abt-me">
              
      </p>
      
      
      </div>
      </div>
       </div>
       
         <div class="clearfix"></div>
         
       </div>
       
      

<h3 id="photo-spot" onClick="update_myself_details('')">Upload Photo<span class="arrow-r"></span></h3>
<form action="" method="post" id="frmPick" name="frmPick" enctype="multipart/form-data">
<div>
<p class="fld-mntr">(All Fields are Mandatory. )</p>
<div class="clearfix"></div>
<div class="col-md-9 bgmsf1">

<div class="col-md-12 pd-msof pt25">
<div class="col-md-3">Upload Photo</div>
<div class="col-md-9">
<input type="file" placeholder="Enter Full Name" name="join_profile_photo" id="join_profile_photo" class="dsbo-fom-1">
<p style="color:red; font-weight:bold; font-size:9px;">Image Size: Height:200px, Width:200px; </p>


<button type="submit" class="btn btn-danger bold" id="btn-photo-upload" onClick="update_photo('')">Upload</button>

</div>
</div>    


<div class="col-md-12 pd-msof">
<div class="col-md-3">Verified&nbsp;Mobile&nbsp;No.</div>
<div class="col-md-9">
<input type="text" placeholder="Enter Mobile No." name="join_member_verified_mobile" id="join_member_verified_mobile" value="<?=$recData['reg_member_verified_mobile']?>"  class="dsbo-fom-1">

</div>
</div>       

</div>
<div class="col-md-3">
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

					<h3 id="partner-spot" onClick="update_verified_mobile();"  >Partner Basic Details<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">(All Fields are Mandatory. )</p>
						<div class="col-md-12 bgmsf1">
   

   
  <div class="col-md-12 pd-msof">
  <div class="col-md-3">Marital Status</div>
  <div class="col-md-9">
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
  <div class="col-md-3">
  Age</div>
  <div class="col-md-9 mp_03">
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
   <div class="col-md-3">Mother Tongue</div>
  <div class="col-md-9">
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
   <div class="col-md-3">Religion</div>
  <div class="col-md-9">
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
  <div class="col-md-3">
  Gotra</div>
  <div class="col-md-9">
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
  <div class="col-md-3">
  Namaaz / Salaah</div>
  <div class="col-md-9">
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
   <div class="col-md-3">Zakaat</div>
   <div class="col-md-6">
  <input type="radio" name="join_preference_zakaat" id="join_preference_zakaat" value="Yes" <?php if($recData['reg_preference_zakaat']="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3">
  <input type="radio" name="join_zakaat" id="join_zakaat" value="No" <?php if($recData['reg_preference_zakaat']=="No"){?> checked <?php }?>> No
  </div>
      </div>
      <div class="col-md-12 pd-msof">
   <div class="col-md-3">Fasting in Ramadan</div>
  
 <div class="col-md-6">
  <input type="radio" name="join_preference_fasting" id="join_preference_fasting" value="Yes" <?php if($recData['reg_preference_fasting']="Yes"){?> checked <?php }?> > Yes
</div>
  <div class="col-md-3">
  <input type="radio" name="join_fasting" id="join_fasting" value="No" 
  <?php if($recData['reg_preference_fasting']=="No"){?> checked <?php }?>> No
  </div>
  
      </div>
      </div>
            
       
       
          <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Caste</div>
  <div class="col-md-9">
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
  <div class="col-md-3">
  Sub Caste</div>
  <div class="col-md-9">
<input type="text" placeholder="Sub Caste" name="join_preference_sub_cast" id="join_preference_sub_cast" value="<?=$recData['reg_preference_sub_cast']?>" class="dsbo-fom-1">
      </div>
      </div>
      
       </div>
       <div class="clearfix"></div>
      
					</div>
                     <h3 onClick="update_preference_basic_details()" id="partner-location-spot" >Partner Location Preference<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">(All Fields are Mandatory. )</p>
       <div class="col-md-12 bgmsf1">
        <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Country</div>
  <div class="col-md-9">
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
  <div class="col-md-3">
  State</div>
  <div class="col-md-9" id="constate_preference">
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
  <div class="col-md-3">
  District/City</div>
  <div class="col-md-9">
      <input type="text" placeholder="Enter your city" name="join_preference_city" id="join_preference_city" value="<?=$recData['reg_preference_city']?>" class="dsbo-fom-1">

      </div>
      </div>
       
       </div>
       <div class="clearfix"></div>
       </div>
                     <!------------------->
   
                    
         <!----------3rd----------->
<h3 onClick="update_preference_location_details()" id="professional-spot" >Partner Professional Preference<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">(All Fields are Mandatory. )</p>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Highest Education</div>
  <div class="col-md-9">
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
  <div class="col-md-3">
  Occupation</div>
  <div class="col-md-9">
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
  <div class="col-md-3">
 Annual income</div>
  <div class="col-md-9">
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
      
<h3 onClick="update_preference_professional_details()" id="lifestyle-spot">Partner Lifestyle<span class="arrow-r"></span></h3>
					<div>
       <div class="col-md-12 bgmsf1">
       <p class="fld-mntr">(All Fields are Mandatory. )</p>
       
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Appearance </div>
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
  Physical Status</div>
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
       
       <h3 onClick="update_preference_lifestyle_details()" id="habits-spot">Partner Habits<span class="arrow-r"></span></h3>
					<div>
       <div class="col-md-12 bgmsf1">
       <p class="fld-mntr">(All Fields are Mandatory. )</p>
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Eating Habits</div>
  <div class="col-md-9">
      <select class="dsbo-fom-1" name="join_preference_eating_habits" id="join_preference_eating_habits">
       <option  value="0">----Select Eating Habits--</option>
<option  value="Veg" <?php if($recData['reg_preference_eating_habits']=="Veg"){?> selected <?php }?>>Veg</option>
<option  value="Non-Veg" <?php if($recData['reg_preference_eating_habits']=="Non-Veg"){?> selected <?php }?>>Non-Veg</option>
      </select>
      </div>
      </div>
      
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
  Smoking Habits</div>
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
  Drinking Habits</div>
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
      
        <h3 onClick="update_preference_about_details()" id="about-spot">A Few Words About My Partner Preference<span class="arrow-r"></span></h3>
					<div>
                     <p class="fld-mntr">&nbsp;</p>
       <div class="col-md-12 bgmsf1">
      <div class="col-md-12 pd-msof">
  <div class="col-md-3">
 About My Partner Preference</div>
  <div class="col-md-9">
<textarea class="dsbo-fom-1 tex-area" name="join_preference_mem_myself" id="join_preference_mem_myself" placeholder="Prospective matches would like to know what you are like, as a person. Write About My Partner Preference. "><?=$recData['reg_preference_mem_myself']?></textarea>
      </div>
      </div>
       </div>
       
         <div class="clearfix"></div>
         
       </div>         
         
       </div>
       
    <div class="col-md-12 text-center mt10">
                
               
<input type="button" value="SAVE MEMBER INFORNATION" style="width:50%;border-radius:5px" class="btn btn-success btn-sbmt pd02 btn-lg ml20 bold" onClick="saveAllDetail('')" >        <!--<input type="reset" value="Reset" class="btn-Resetd">-->
        </div>            

         
        </div>
        <!---end-images--->
      
     
    </div> 
    </div>
    </div>
</section>




</div> 
</div>
       
                        
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
<?php require_once("footer.php"); ?>

<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible-admin.js"></script> 
<script src="js/member.js"></script> 
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
</script>  
  
<script>
$('#collapse-menu').collapsible({
  contentOpen:["0",""]
});
</script>
<script type="text/javascript" language="javascript">
function textCounter(field, countfield, maxlimit) {
	
if (field.value.length > maxlimit) // if the current length is more than allowed
field.value =field.value.substring(0, maxlimit); // don't allow further input
else
countfield.value = maxlimit - field.value.length;} // set the display field to remaining number

</script>
<a data-toggle="modal" data-target="#update-popup" id="for-update-popup"></a>
<div class="modal fade" id="update-popup" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="update-popup-box">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle" aria-hidden="true" id="close-popup"></i>

</button>
      <div class="modal-header" style="border-bottom:none">
        <h4 class="modal-title text-center font-black"><span id="area-title">Detail</span> is updated and saved.</h4>
      </div>
      
      
      
   
    </div>
  </div>
</div>