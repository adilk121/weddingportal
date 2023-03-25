<?php
ob_start();
require_once("includes/dbsmain.inc.php"); 
?>
<?php
if(!empty($_SESSION['userLoginId'])){
header("location:dashboard.php");	
exit;
}
?>
<?php
if(isset($_REQUEST['btn_feedback'])){

$sql="INSERT INTO tbl_enquiry SET
enquiry_name='$enquiry_name',
enquiry_mobile='$enquiry_mobile',
enquiry_email='$enquiry_email',
enquiry_detail='$enquiry_detail',
enquiry_source='Feedback',
enquiry_add_date='".date("Y-m-d")."'
";

$res=db_query($sql);
if($res){
$_SESSION['msg_feed']="Your feedback is sent successfully.";	
header("location:feedback.php");
exit;	
}
	
}
?>
<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Thebestweddinghub.Com Matrimony Portal in India - Give Us Your Feedback</title>
  <meta name="keywords" content="ApniMatrimony.Com Matrimony Portal in India - Give Us Your Feedback" />
    <meta name="description" content="ApniMatrimony.Com Matrimony Portal in India - Give Us Your Feedback" />
<meta name="robots" content="index, follow" />

<!-- Stylesheets -->

<link href="<?=SITE_WS_PATH?>/css/bootstrap.min.css" rel="stylesheet">
<!--------->
<link href="<?=SITE_WS_PATH?>/css/responsive.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style-res-nav.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style-client.css" rel="stylesheet" >
<link href="<?=SITE_WS_PATH?>/css/style-res-nav.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/jPushMenu.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/jquery.fancybox.css" rel="stylesheet">
<!---------------->
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/style-customizer-rgt.css"/>
<!---social----->
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/style-social-1.css">
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/styd1.css">
<link href="<?=SITE_WS_PATH?>/css/style.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/collapsible1.css" rel="stylesheet" type="text/css">
<link href="<?=SITE_WS_PATH?>/css/style1.css" rel="stylesheet">
<!---------------->
<style>
@media (max-width: 767px) and (min-width: 320px)
{.main-header .header-lower .logo {
text-align:center!important;
	}
	.main-header .header-lower {
    padding: 0px 0px 10px 0px;
	}
	.auto-container {
    padding: 0 15px 0px 22px;
}
	}
</style>
<!---------------->
</head>
<body id="amitabh">
<div class="page-wrapper" >
  <div class="preloader"></div>
  <?php include("site-header.php"); ?>
  <!---important-style--->
  
  <section style="background:url(images/bg1.jpg) no-repeat center; background-size:cover; padding:20px;">
   <div class="container">
      <div class="col-md-12 text-center bg_1">
        <h2>Feedback</h2>
        <p><a href="<?=SITE_WS_PATH?>">Home</a> | Feedback
      </div>
   </div>
 </section>
  
  <section style="background-color:#f1f1f2;">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 all-sec">
         
      <div class="col-md-8 mp_db_00" style="margin-bottom:20px !important;">
      <div class="clearfix"></div>

<?php if(!empty($_SESSION['msg_feed'])){?>
<div class="col-sm-12 text-center text-success bold" style="margin:10px 0 0 0"><?=$_SESSION['msg_feed']?></div>
<?php 
unset($_SESSION['msg_feed']);
}
?>
          
  <div id="collapse-menu" class="collapse-container" style="border:solid 1px #e4e4e4;">
					<h2 style="text-align:center; font-size:30px;"></h2>
					<div>
                     <p class="fld-mntr">(All Fields are Mandatory. )</p>
<form action="" method="post" enctype="multipart/form-data" onSubmit="return validate_feedback()" >
<div class="col-md-12 bgmsf1">
     <div class="col-md-12 pd-msof">
  <div class="col-md-3">Full Name </div>
  <div class="col-md-9">
   <input type="text" placeholder="Enter Full Name" name="enquiry_name" id="enquiry_name" class="dsbo-fom-1">
  </div>
  </div> 
  <div class="col-md-12 pd-msof">
  <div class="col-md-3">Mobile No</div>
  <div class="col-md-9">
   <input type="text" placeholder="Enter Mobile No" name="enquiry_mobile" id="enquiry_mobile" class="dsbo-fom-1">
  </div>
  </div>  
  <div class="col-md-12 pd-msof">
  <div class="col-md-3">Email Id</div>
  <div class="col-md-9">
   <input type="text" placeholder="Enter Email Id" name="enquiry_email" id="enquiry_email" class="dsbo-fom-1">
  </div>
  </div> 
  <div class="col-md-12 pd-msof">
  <div class="col-md-3">Enquiry Details</div>
  <div class="col-md-9">
  <textarea placeholder="----Enter Enquiry Details----" name="enquiry_detail" id="enquiry_detail" class="dsbo-fom-1 hdg_4"></textarea>
  </div>
  <div class="col-md-12 text-center">
        <input type="submit" value="Submit" name="btn_feedback" class="btn-sbmt">
        <!--<input type="reset" value="Reset" class="btn-Resetd">-->
        </div>
  </div>               
      
       </div>
</form>
       <div class="clearfix"></div>
      
					</div>
				</div>
                
        </div>
        <!---end-images--->
<div class="col-md-4">
<div class="col-md-12 addv">
<img src="<?=SITE_WS_PATH?>/images/feedback.jpg">
</div>
<!----------->
</div>
     
    </div> 
    </div>
    </div>
</section> 
<?php include("site-footer.php"); ?>  
<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>

<script>
$(document).ready(function (e) {
	$("#btnForgetPass").on('click',(function(e) {
		
var loginCre=$("#login_credential").val();


		e.preventDefault();
		$.ajax({
        	url:"send-password-reset-link.php?loginCre="+loginCre,
			type: "GET",
			contentType: false,
    	    processData:false,
			success: function(data){

if(data==1){
$("#pass-sent").show("fast")

setTimeout(function(){
$("#pass-sent").hide("fast")	
},3000);

}
			},
		  	error: function() 
	    	{

	    	} 	        
	   });
	   
	   
	}));
});
</script>


<script src="<?=SITE_WS_PATH?>/js/jquery-min-form.js"></script>
<script src="<?=SITE_WS_PATH?>/js/style-customizer-form.js"></script>
<script src="<?=SITE_WS_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_WS_PATH?>/js/script.js"></script>
<script src="<?=SITE_WS_PATH?>/js/menuzord.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jPushMenu.js"></script>
<script src="<?=SITE_WS_PATH?>/js/owl.js"></script>
<script src="<?=SITE_WS_PATH?>/js/customcollection.js"></script>
<script src="<?=SITE_WS_PATH?>/js/custom1.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible.js"></script>


<script>
function trim_input(str){
 return str.replace(/^\s*|\s*$/g,'');
}

function validate_feedback(){

if(trim(document.getElementById('enquiry_name').value)==0){    
alert("Please enter your name !");
document.getElementById('enquiry_name').focus();
return false;
}

var mobno=trim(document.getElementById('enquiry_mobile').value);
if(trim(document.getElementById('enquiry_mobile').value)==""){
	alert("Enter your mobile no.!");
	document.getElementById('enquiry_mobile').focus();
	return false;
}
if(isNaN(document.getElementById('enquiry_mobile').value)){
	alert("Mobile no. should be no.!");
	document.getElementById('enquiry_mobile').focus();
	return false;
}
if(mobno.length < 10){
    alert("Mobile no. should be 10 digit long !");
	document.getElementById('enquiry_mobile').focus();
	return false;
}


var email=trim(document.getElementById('enquiry_email').value);
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email=='')
  {
	  alert('Please Enter Email Id');
	  document.getElementById('enquiry_email').focus();
	  return false;
  }else if(!email.match(mailformat)){
alert("You have entered an invalid email address!");
document.getElementById('enquiry_email').focus();
return false;
}


if(trim(document.getElementById('enquiry_detail').value)==0){    
alert("Please enter detail !");
document.getElementById('enquiry_detail').focus();
return false;
}

	
}
</script>