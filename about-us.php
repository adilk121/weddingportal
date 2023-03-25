<?php
ob_start();
//header files
require_once("includes/dbsmain.inc.php"); 
?>
<?php
if(!empty($_SESSION['userLoginId'])){
header("location:dashboard.php");	
exit;
}
?>
<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?=db_scalar("SELECT site_pages_meta_title FROM tbl_site_pages WHERE  site_pages_link='about-us' AND site_pages_status='Active'")?></title>
<meta name="description" content="<?=db_scalar("SELECT site_pages_meta_description FROM tbl_site_pages WHERE  site_pages_link='about-us' AND site_pages_status='Active'")?>">
<meta name="keywords" content="<?=db_scalar("SELECT site_pages_meta_keyword FROM tbl_site_pages WHERE  site_pages_link='about-us' AND site_pages_status='Active'")?>">
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
	.bd1{margin-bottom:20px !important;}
	@media (max-width: 767px) and (min-width: 320px)
{
	.bd1{padding:15px; margin-bottom:0px !important;}
.main-header .header-lower .logo {
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
<!----------->
</head>
<body id="amitabh">
<div class="page-wrapper" >
  <div class="preloader"></div>
  <?php include("site-header.php"); ?>
  <!---important-style--->
  
  <section style="background:url(images/bg1.jpg) no-repeat center; background-size:cover; padding:20px;">
   <div class="container">
      <div class="col-md-12 text-center bg_1">
        <h2>About Us</h2>
        <p><a href="<?=SITE_WS_PATH?>">Home</a> | About Us
      </div>
   </div>
 </section>
  
  <section style="background-color:#fff;">
    <div class="container">
      <div class="row">
        <div class="col-md-12  all-sec">
         
      <div class="col-md-8 mp_db_00 bd1">
      <div class="clearfix"></div>

<?=db_scalar("SELECT site_pages_description FROM tbl_site_pages WHERE  site_pages_link='about-us' AND site_pages_status='Active'")?>
          
  
                
        </div>
        
        <div class="col-md-4" style="margin-top:35px;">

<?php $img=db_scalar("SELECT site_pages_image_name FROM tbl_site_pages WHERE  site_pages_link='about-us' AND site_pages_status='Active'");?>
<img src="<?=SITE_WS_PATH?>/static_files/<?=$img?>" width="100%" height="100%">

          
  
                
        </div>
        
        <!---end-images--->

     
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
