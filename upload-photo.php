<?php require_once("includes/dbsmain.inc.php");?>
<!doctype html>
<head>
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
                  <a href="<?=SITE_WS_PATH?>/index.php"><img class="img-responsive" src="<?=SITE_WS_PATH?>/images/logo1.png" alt=""></a>
            </div>
                          
              <div class="appoinment-btn">
               <a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1" href="<?=SITE_WS_PATH?>/login.php"><i class="fa fa-user"></i> LOGIN</a>
                  <!-- Modal: donate now Starts -->
                  <a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1" href="<?=SITE_WS_PATH?>/register.php"><i class="fa fa-paint-brush"></i> REGISTER FREE</a>
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
$sql="SELECT reg_member_mobile,reg_member_email,reg_member_verified_mobile,reg_profile_photo FROM  tbl_registration WHERE reg_id='$_SESSION[regID]'";
$dataRegd=db_query($sql);
$recData=mysqli_fetch_array($dataRegd);
?>  
  <section style="background-color:#f1f1f2;">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 all-sec">
         
      <div class="col-md-9 mp_db_00" style="margin-bottom:20px !important;">
      <div class="clearfix"></div>

          
  <div id="collapse-menu" class="collapse-container" style="border:solid 1px #e4e4e4;">

					<h3 id="photo-spot">Upload Photo<span class="arrow-r"></span></h3>

<div>
<p class="fld-mntr">( <span class="font-red">*</span> Mandatory Fields )</p>
<div class="clearfix"></div>
<div class="col-md-9 bgmsf1">
<form action="" method="post" id="frmPick" name="frmPick" enctype="multipart/form-data">
<div class="col-md-12 pd-msof">
<div class="col-md-3">Upload Photo</div>
<div class="col-md-9">
<input type="file" placeholder="Enter Full Name" name="join_profile_photo" id="join_profile_photo" class="dsbo-fom-1">

<input type="hidden" name="regID" value="<?=$_SESSION['regID']?>" />

<button type="submit" class="btn btn-danger bold" id="btn-photo-upload" onClick="">Upload</button>

</div>
</div>    

<?php if($currLocation=="India"){ ?>
<div class="col-md-12 pd-msof">
<div class="col-md-3"><span class="font-red">*</span>Enter&nbsp;Mobile&nbsp;No.</div>
<div class="col-md-9">
<input type="text" placeholder="Enter Mobile No." name="join_member_verified_mobile" id="join_member_verified_mobile" value="<?=$recData['reg_member_mobile']?>"  class="dsbo-fom-1">

<span id="btn-send-otp-area">
<i class="fa fa-mobile fa-lg font-theme"></i> <button type="button" class="btn btn-link " id="btn-send-otp"  >SEND OTP</button>
</span>

<span class="err" id="resend_otp_area" style="display:none">
<span style='white-space: nowrap;'><i class="fa fa-mobile fa-lg font-theme"></i> <a href='Javascript:void(0)'  id='resend-otp' style='color:green;text-decoration:underline;' >RESEND OTP</a></span>
</span> 

</div>
</div>    
<?}else{?>

<div class="col-md-12 pd-msof">
<div class="col-md-3"><span class="font-red">*</span>Email&nbsp;Address</div>
<div class="col-md-9">
<input type="text" placeholder="Enter Email Address" name="join_member_verified_email" id="join_member_verified_email" value="<?=$recData['reg_member_email']?>"  class="dsbo-fom-1">
<span id="btn-send-otp-area-email">
<i class="fa fa-envelope-o fa-lg font-theme"></i> <button type="button" class="btn btn-link " id="btn-send-otp-by-email"  style=" font-size: 11px; font-weight: bold; margin: 0 0 0 0; padding: 0 0 0 0;">SEND OTP</button>
</span>

<span class="err" id="resend_otp_area-email" style="display:none">
<span style='white-space: nowrap;'>
    <i class="fa fa-envelope-o fa-lg font-theme"></i> 
    <a href='Javascript:void(0)'  id='resend-otp-by-email' style='color:green;text-decoration:underline; font-size: 11px; font-weight: bold; margin: 0 0 0 0; padding: 0 0 0 0;' >RESEND OTP</a></span>
</span> 

</div>
</div> 

<?}?>
<div class="col-md-12 pd-msof hide-after-verify">
<div class="col-md-3"><!--<span class="font-red">*</span>-->Enter OTP</div>
<div class="col-md-9">
<input type="text" <?php if($currLocation=="India"){ ?>placeholder="Mobile Verification"<?}else{?>placeholder="Email Verification"<?}?> name="join_member_verification_code" id="join_member_verification_code" class="dsbo-fom-1">

<button class="btn btn-danger bold" id="btn-verify-otp">Verify</button>
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

</div>

                    
                     <!------------------->
				</div>
<div class="col-md-12 text-center mt-10">
<!--<a href="partner-preference.html" class="btn btn-sbmt pd02">Create Profile</a>-->                

<a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1 " href="Javascript:void(0)" onClick="window.location='register.php'" ><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
 Go Back</a>
 

 
  <a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1 " href="Javascript:void(0)" onClick="update_photo('skip');" ><i class="fa fa-floppy-o" aria-hidden="true"></i>
 Skip & Save</a>   
 
 <a class="thm-btn sec-paddingj55 margin-top5 letter-spacing-1 " href="Javascript:void(0)" onClick="update_photo('nxt')" ></i>
 Next <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>                


<!--<button type="button" class="btn-sbmt pd02" onClick="window.location='register.php'"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
 Go Back</button>-->
<!--<button class="btn-sbmt pd02" onClick="update_photo('skip');">Skip & Save</button>-->
<!--<button type="submit" class="btn-sbmt pd02" onClick="update_photo('nxt')">Next <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
</button>-->
</form>
<!--<button type="submit" name="btn-photo" id="btn-photo" class="btn btn-sbmt pd02">Create Profile</button>-->
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
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible.js"></script> 
<!-----left-accordian--------->
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible.js"></script> 
<script>
$('#collapse-menu').collapsible({
  contentOpen:["0",""]
});
</script>
 </body>
</html>
<input type="text" name="validCond" id="validCond" value="0" />
<input type="text" name="validCondMobile" id="validCondMobile" value="0" />

<script>

  



function trim_input(str){return str.replace(/^\s*|\s*$/g,'');}
////////////////////// SENDING OTP /////////////////////////


$("#btn-send-otp").on("click",function(){
	
var mobile=$("#join_member_verified_mobile").val();

	
$.ajax({

type:"GET",	
url:"send-member-otp.php?"+"mobile="+mobile+"&regID="+<?=$_SESSION['regID']?>,
success: function(result){
//alert(result)
//if(result==1){
if(result>0){	
alert(result)
	
$("#btn-send-otp-area").hide();
$("#resend_otp_area").show();
	
}else{
$("#error_msg").html(result);

}

	
	
}
	
	
})	

});


$("#btn-send-otp-by-email").on("click",function(){
	
var email=$("#join_member_verified_email").val();

if(email==""){

alert("Please enter your email");
$("#join_member_verified_email").focus();
return false;            
}else if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){

alert("Please enter valid email address !");
$("#join_member_verified_email").focus();
return false;
}else{


$.ajax({

type:"GET",	
url:"send-member-otp-by-email.php?"+"email="+email+"&regID="+<?=$_SESSION['regID']?>,
success: function(result){
//alert(result)
//if(result==1){
if(result>0){	
//alert(result)

document.getElementById('area-title').innerHTML='OTP is sent on '+email;	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 3000);
	
$("#btn-send-otp-area-email").hide();
$("#resend_otp_area-email").show();
	
}else{
$("#error_msg").html(result);

}

	
	
}
	
	
})	

}

});


////////////////////////  RESEND OTP  MAIL//////////////////////////////

$("#resend_otp_area-email").on("click","a#resend-otp-by-email",function(){

var email=$("#join_member_verified_email").val();
if(email==""){

alert("Please enter your email");
$("#join_member_verified_email").focus();
return false;            
}else if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){

alert("Please enter valid email address !");
$("#join_member_verified_email").focus();
return false;
}else{
$.ajax({

type:"GET",	
url:"send-member-otp-by-email.php?resend=yes"+"&email="+email+"&regID="+<?=$_SESSION['regID']?>,
success: function(result){
//alert(result)
//if(result==1){

if(result>1){
	
//alert(result)	
document.getElementById('area-title').innerHTML='New OTP is sent on '+email;	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 3000);
}
	
	
}
	
	
})	
}


})
//////////////////////////   RESEND OTP END MAIL  ////////////////////////////

///////////////////  SENDING OTP END /////////////////////////

////////////////////////  VERIFY OTP START ////////////////////////////

$("#btn-verify-otp").on("click",function(){

var vMobile=$("#join_member_verified_mobile").val();


var otp=$("#join_member_verification_code").val();

<?php if($currLocation=="India"){ ?>

$.ajax({

type:"GET",	
url:"check-otp.php?"+"otp="+otp+"&vMobile="+vMobile+"&regID="+<?=$_SESSION['regID']?>,
success: function(result){

//alert("Load : "+result)

if(result==1){

//$("#join_member_verified_mobile").val('');
//$("#join_member_verification_code").val('');

//alert(vMobile)
			
document.getElementById('area-title').innerHTML='Your given mobile number '+vMobile+' has been verified.';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 3000);
//window.location='upload-photo.php'
$(".hide-after-verify").hide();
$("#resend_otp_area").hide();
$("#btn-send-otp-area").hide();
}else{
//Error
$('#resend_otp_area').html("<span class='font-theme' style='font-size: 12px;white-space: nowrap;'>Sorry ! Entered OTP is not correct. <a href='Javascript:void(0)'  id='resend-otp' style='color:green;text-decoration:underline;' >Resend OTP</a></span>")	
}

	
	
}
	
	
});

<?}else{?>
var vEmail=$("#join_member_verified_email").val();
if(vEmail==""){
alert("Please enter your email");
$("#join_member_verified_email").focus();
return false;            
}else if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(vEmail)){

alert("Please enter valid email address !");
$("#join_member_verified_email").focus();
return false;
}else if(otp=="")
{
alert("Please enter OTP !");
$("#join_member_verification_code").focus();
return false;
    
}else{
$.ajax({

type:"GET",	
url:"check-otp-by-email.php?"+"otp="+otp+"&vEmail="+vEmail+"&regID="+<?=$_SESSION['regID']?>,
success: function(result){

//alert("Load : "+result)

if(result==1){

//$("#join_member_verified_mobile").val('');
//$("#join_member_verification_code").val('');

//alert(vMobile)
			
document.getElementById('area-title').innerHTML='Your given email address '+vEmail+' has been verified.';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 3000);
$(".hide-after-verify").hide();
$("#resend_otp_area-email").hide();
$("#btn-send-otp-area-email").hide();

//window.location='upload-photo.php'

}else{
//Error
//$('#resend_otp_area-email').html("<span class='font-theme' style='font-size: 12px;white-space: nowrap;'>Sorry ! Entered OTP is not correct. <a href='Javascript:void(0)'  id='resend-otp-by-email' style='color:green;text-decoration:underline; font-size: 11px; font-weight: bold; margin: 0 0 0 0; padding: 0 0 0 0;' >Resend OTP</a></span>")	
  alert("Sorry ! Entered OTP is not correct. Please enter correct OTP !");  
}


}
	
});
}

<?}?>
	


})
//////////////////////////  VERIFY OTP END //////////////////////////


////////////////////////  RESEND OTP //////////////////////////////

$("#resend_otp_area").on("click","a#resend-otp",function(){

var mobile=$("#join_member_verified_mobile").val();

$.ajax({

type:"GET",	
url:"send-member-otp.php?resend=yes"+"&mobile="+mobile+"&regID="+<?=$_SESSION['regID']?>,
success: function(result){
//alert(result)
//if(result==1){

if(result>1){
	
alert(result)	
document.getElementById('area-title').innerHTML='New otp is sent on '+vMobile;	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 3000);
}
	
	
}
	
	
})	



})
//////////////////////////   RESEND OTP END  ////////////////////////////


//////////////////////  PHOTO UPDATE ///////////////////////

$("#frmPick").on("submit",function(e){	
    e.preventDefault();

var query_url="<?=SITE_WS_PATH?>/update-regd-details.php?type=photoUpload&regID="+<?=$_SESSION['regID']?>;	

    $.ajax({
		url: query_url,
		type: "POST",
		data:  new FormData(this),
		contentType: false,
   	    processData:false,		
        success : function(data){	
		

		
if(data==1){
			
document.getElementById('area-title').innerHTML='Photo is uploaded successfully.';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 2000);

$('#profile-image-area').fadeOut('slow').load('reload-profile-image.php?regID='+<?=$_SESSION['regID']?>).fadeIn("slow");
}
	
        }
    });
    return false;
});



var isError=0;

/// PHOTO UPLOAD

function update_photo(act){




<?php if($currLocation=="India"){ ?>
$.ajax({
		url: "check-member-photo.php?memID="+<?=$_SESSION['regID']?>,
		type: "POST",
		contentType: false,
   	    processData:false,		
        success : function(data){	
		
//alert(data);
		

$.ajax({
		url: "check-member-mobile.php?memID="+<?=$_SESSION['regID']?>,
		type: "POST",
		contentType: false,
   	    processData:false,		
        success : function(data){	
		
		
if(data==0){
alert("Please verify your mobile number!");
document.getElementById('join_member_verified_mobile').focus();
return false;
}else{
	
var mobno=trim_input(document.getElementById('join_member_verified_mobile').value);
if(trim_input(document.getElementById('join_member_verified_mobile').value)==""){
alert("Enter your mobile no.!");
document.getElementById('join_member_verified_mobile').focus();
return false;
}else{
isError=1;	
}

if(isNaN(document.getElementById('join_member_verified_mobile').value)){
alert("Mobile no. should be no.!");
document.getElementById('join_member_verified_mobile').focus();
return false;
}else{
isError=1;	
}

if(mobno.length < 10){
alert("Mobile no. should be 10 digit long !");
document.getElementById('join_member_verified_mobile').focus();
return false;
}else{
isError=1;

if(act=='nxt'){
window.location='partner-preference.php';	
}else if(act=='skip'){
window.location='welcome.php?id='+regID;
}
	
}

}
}

	
});
	

		
}

});




<?}else{?>

var email=$("#join_member_verified_email").val();

        
$.ajax({
		url: "check-member-photo.php?memID="+<?=$_SESSION['regID']?>,
		type: "POST",
		contentType: false,
   	    processData:false,		
        success : function(data){	
		
//alert(data);
if(data==1){

$.ajax({
		url: "check-member-email.php?memID="+<?=$_SESSION['regID']?>,
		type: "POST",
		contentType: false,
   	    processData:false,		
        success : function(data){	
		
		
if(data==0){
alert("Please verify your email!");
document.getElementById('join_member_verified_email').focus();
return false;
}else{
	
if(email==""){
alert("Please enter your email");
$("#join_member_verified_email").focus();
return false;
}else{
isError=1;	
}



if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
alert("Please enter valid email address !");
$("#join_member_verified_email").focus();
return false;
}else{
isError=1;

if(act=='nxt'){
window.location='partner-preference.php';	
}else if(act=='skip'){
window.location='welcome.php?id='+regID;
}
	
}

}
}

	
});
        }else{
alert("Please upload photo");
$("#join_profile_photo").focus();
return false;  
            
        }	

		
}

});

        

<?}?>

	



//alert(isError)

//if(isError==1){
//
//if(act=='nxt'){
//window.location='partner-preference.php';	
//}else if(act=='skip'){
//window.location='welcome.php';		
//}
//
//}
	

}

//function saveAllDetail(act){
//
//update_basic_details();
//update_location_details();
//update_family_details();
//update_edu_details();
//update_religious_details();
//update_lifestyle_details();
//update_likes_details();
//update_contact_details();
//update_myself_details(act);
//
//	
//}

</script>
<a data-toggle="modal" data-target="#update-popup" id="for-update-popup"></a>
<div class="modal fade" id="update-popup" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="update-popup-box">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle" aria-hidden="true" id="close-popup"></i>

</button>
      <div class="modal-header" style="border-bottom:none">
        <h4 class="modal-title text-center"><span id="area-title"></span></h4>
      </div>
      
      
      
   
    </div>
  </div>
</div>