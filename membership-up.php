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
if(isset($_POST["proceedpayment"])){
  
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, 'https://api.instamojo.com/v2/payment_requests/');
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER,
                   array("X-Api-Key:0026015872c6b619ade4a6deca91abf6",
                         "X-Auth-Token:7b3c9b251032b224fd5b7ba1fcd3c6d9"));
  
  $payload = Array(
    'purpose' => 'FIFA 16',
    'amount' => '2500',
    'buyer_name' => 'John Doe',
    'email' => 'foo@example.com',
    'phone' => '9999999999',
    'redirect_url' => 'http://www.example.com/redirect/',
    'send_email' => 'True',
    'webhook' => 'http://www.example.com/webhook/',
    'allow_repeated_payments' => 'False',);

  
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
  $response = curl_exec($ch);
  curl_close($ch); 
  echo $response;
}
  
    //    // echo "Hello";exit;
    //      $last_id_q =db_scalar("select reg_id from tbl_registration where reg_id='$_SESSION[userLoginId]' ");
    //  //  $sql_ID =mysqli_fetch_array($last_id_q);
    //     //$last_id = $sql_ID['id'];
        
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, 'https://api.instamojo.com/v2/payment_requests/');
    //     curl_setopt($ch, CURLOPT_HEADER, FALSE);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    //     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER,
    //                 array("X-Api-Key:RFyplMYdcFflBwcUaELHK12yiKJff3XFpMYCdUga",
    //                       "X-Auth-Token:k5CV2pzIpXzxaRbJh0LKJB759TSzsekkALQWAjPCrLackGXdYhZltpLKEInAAbzH15scRHk33P8lqsBnRPQUnH1YM1OEj69SJSX69pxg1coas7NNjmZsFtV5YVsT6XwM"));
    //     $payload = Array(
    //         'purpose' => 'Admission',
    //         'amount' => '350',
    //         'phone' => '9045474818',
    //         'buyer_name' => 'AdilKhan',
    //         'redirect_url' => 'https://thebestweddinghub.com/thanks.php',
    //         'send_email' => false,
    //         'send_sms' => false,
    //         'email' => 'sam@gmail.com',
    //         'allow_repeated_payments' => false
    //     );
       
    //         curl_setopt($ch, CURLOPT_POST, true);
    //         curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
    //         $response = curl_exec($ch);
    //         curl_close($ch); 
    //        echo $response;
            
       // mysqli_close($db);
    
?>
<!doctype html><head>
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
<!--------->
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
  <style>
	  .pro-bg1{background-color:#f1f7f0; margin:0px; padding: 0px; box-shadow: 1px 1px 10px #ccc; height: 302px!important; width:100%!important; padding:5px; vertical-align: middle; display: table-cell;}
	  
  .pro-bg1 img{width:auto; height:auto;}
	  .view-sty {
    display: block;
    color: #000 !important;
    font-size: 14px;
}
	  .my-pro img{border: solid 0px #efefef;}
	  /***.my-pro img {
    width: 100%;
    border: solid 1px #efefef;
    box-shadow: 1px 1px 10px #ccc;****/
		  

	  .syb {
    font-size: 20px;
    color: #000 !important;
}
	  .mp0myp2{margin:0px; padding:0px;}
	  .mpsd3pr{margin:0px; padding:0px;}
	  .mpsd4pr{}
@media (min-width:320px) and (max-width:767px) 
{
.pro-bg1 {
    height:auto !important;
		width: auto;}
	 .pro-bg1 img{width:auto; height:auto;}
	 .mpsd3pr{margin:auto; padding:15px;}
	.mpsd4pr{margin:0; padding:0px; margin-top:10px;}
 .mp0myp2{margin: 0px; padding-right: 0px !important; padding:15px;}
	.bg-clrd2 h4 {
    padding: 8px 0px 0px 0px;
    font-size: 17px;
}
.mp0myp, .mp0myp1{margin:0px !important; padding:0px !important;}
	.mp03-mfres {
    margin-right:0px !important;
}
	.progress-circle {right:15px;}
	.vrfyd {
		left: 230px;}
	.wd-btn{margin:0; padding:0px;}
	.edit-btn {left: 0px; font-size: 10px;}
}
 </style>
  <section style="background-color:#f1f1f2;">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 all-sec">
			
			
			
    
      <!---end-images--->
      
       <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mpsd3pr">
       
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bg-wth b-dtl" style="margin-top:0px; margin-right:0px; padding-top:2px;">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="border-right:solid 1px #efefef; margin-bottom:8px;">
       <h3 style="padding:10px; color:#009aae; padding:0px 0px; margin:0px;"><?=$userDATA['reg_name']?></h3>
    </div>
      
        
       
        <div class="clearfix"></div>
      
  </div>
  
  <!--Profile Completion calculation Start-->
  
        
  
  <!--Profile Completion calculation End-->
  

        <!----------->
   
      
      
        <div class="clearfix"></div>
</div>
   </div>
      
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-wth b-dtl" style="padding:0px; padding-bottom:3px;">
<form id="" method="post" enctype="multipart/form-data">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-clrd1">
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 mrg0">
<h4><i class="fa fa-mobile"></i> Contact Details</h4>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 wd-btn">



</div>
</div>
<!------------>
<style type="text/css">
.vrfyd {
    height: 65px;
    width:20%;
    padding: 1px;
    position: absolute;
    left: 275px;
    top: -6px;
    z-index:1;
}
</style>
<!------------->


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp00_2" style="padding:5px 0px;" id="contact-detail">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Amount: </h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>

<input type="text"  name="reg_amount" id="reg_amount" value="2000" readonly/> </p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Name: </h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>

<input type="text"  name="reg_name" id="reg_name" value="<?=$userDATA['reg_name']?>" readonly/> </p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Purpose: </h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>

<input type="text"  name="reg_purpose" id="reg_purpose" value="Upgrade" readonly/> </p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Mobile No.</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>

<input type="text"  name="reg_member_mobile" id="reg_member_mobile" value="<?=$userDATA['reg_member_mobile']?>" readonly/> </p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Email Id</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_member_email" id="reg_member_email" value="<?=$userDATA['reg_member_email']?>" readonly/></p>
</div>
</div>

</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp00_2" style="padding:5px 0px;display:none" id="contact-detail-edit">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Mobile No.</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p>

<input type="text"  name="reg_member_mobile" id="reg_member_mobile" value="<?=$userDATA['reg_member_mobile']?>" /> </p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Alternate No.</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_member_alt_mobile" id="reg_member_alt_mobile" value="<?=$userDATA['reg_member_alt_mobile']?>" /></p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5>Email Id</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_member_email" id="reg_member_email" value="<?=$userDATA['reg_member_email']?>" /></p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 agd">
<h5 style="font-size:11px;">Suitable time to call</h5>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ft-wgt mp_1">:</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mp_1">
<p><input type="text"  name="reg_member_call_time" id="reg_member_call_time" value="<?=$userDATA['reg_member_call_time']?>" /></p>
</div>
</div>
</div>

<input type="submit" name="proceedpayment" class="edit-btn" style="position:relative; left:50px; top:2px;" value="Proceed Payment">

</form>      
  </div>

  </div>
      
      
     </div>
         <!------------>
         
</div>      
      
      <?php /*?><div class="col-md-12 bg-wth b-dtl bg-mrg sdow">
      <div class="col-md-12 bg-clrd2">
      <div class="col-md-10 col-xs-10 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>Lifestyle</h4>
  </div>
      <div class="col-md-2 col-xs-2 wd-btn"><a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> </div>
  </div>
      <div class="col-md-6 mp_1">
        <div class="col-md-5 agd">
          <h5>Appearance</h5>
    </div>
        <div class="col-md-1 ft-wgt mp_1">:</div>
        <div class="col-md-6 mp_1">
          <p><?=$userDATA['reg_preference_appearance']?></p>
  </div>
  </div>
        <div class="col-md-6 mp_1">
        <div class="col-md-5 agd">
          <h5>Living Status</h5>
    </div>
        <div class="col-md-1 ft-wgt mp_1">:</div>
        <div class="col-md-6 mp_1">
          <p><?=$userDATA['reg_preference_living_status']?></p>
  </div>
    </div>
        <div class="col-md-6 mp_1">
        <div class="col-md-5 agd">
          <h5>Physical Status</h5>
    </div>
        <div class="col-md-1 ft-wgt mp_1">:</div>
        <div class="col-md-6 mp_1">
          <p><?=$userDATA['reg_preference_physical_status']?></p>
  </div>
    </div>
       
  </div><?php */?>
  
  
  <?php /*?><div class="col-md-12 bg-wth b-dtl bg-mrg sdow">
      <div class="col-md-12 bg-clrd2">
      <div class="col-md-10 col-xs-10 mrg0">
      <img src="images/paper_pin.png" class="pin-styd">
      <h4>Habits</h4>
  </div>
      <div class="col-md-2 col-xs-2 wd-btn"><a href="#" class="edit-btn"><i class="fa fa-pencil-square-o"></i> Edit</a> </div>
  </div>
      <div class="col-md-6 mp_1">
        <div class="col-md-5 agd">
          <h5>Eating Habits</h5>
    </div>
        <div class="col-md-1 ft-wgt mp_1">:</div>
        <div class="col-md-6 mp_1">
          <p><?=$userDATA['reg_preference_eating_habits']?></p>
  </div>
  </div>
        <div class="col-md-6 mp_1">
        <div class="col-md-5 agd">
          <h5>Smoking Habits</h5>
    </div>
        <div class="col-md-1 ft-wgt mp_1">:</div>
        <div class="col-md-6 mp_1">
          <p><?=$userDATA['reg_preference_smoking_habits']?></p>
  </div>
    </div>
        <div class="col-md-6 mp_1">
        <div class="col-md-5 agd">
          <h5>Drinking Habits</h5>
    </div>
        <div class="col-md-1 ft-wgt mp_1">:</div>
        <div class="col-md-6 mp_1">
          <p><?=$userDATA['reg_preference_drinking_habits']?></p>
  </div>
    </div>
       
  </div><?php */?>
  
  </div>
        <!----life-style------->
      
 </div>
     
  </div>
  </div> 
  </div>
</section> 
<?php include("site-footer.php"); ?>

<!-------register----->
<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>
<script>


	
//});	

//////// MEMBER MYSELF EDIT END /////////    



//////// MEMBER BASIC EDIT START ///////// 
   






	
//});	

//////// MEMBER BASIC EDIT END /////////    


//////// MEMBER LOCATION EDIT START ///////// 
   
$("#edit-member-location-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-location').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-location-edit").hide("fast");
$("#edit-btn-location").show("fast");	
$("#save-btn-location").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// MEMBER LOCATION EDIT END /////////   


//////// MEMBER FAMILY EDIT START ///////// 
   
$("#edit-btn-family").on("click",function(){

$("#member-family").hide("fast");
$("#member-family-edit").show("fast");
$("#edit-btn-family").hide("fast");	
$("#save-btn-family").show("fast");	
	
});	


$("#edit-member-family-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-family').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-family-edit").hide("fast");
$("#edit-btn-family").show("fast");	
$("#save-btn-family").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER FAMILY EDIT END /////////  


//////// MEMBER EDUCATION EDIT START ///////// 
   
$("#edit-btn-edu").on("click",function(){

$("#member-edu").hide("fast");
$("#member-edu-edit").show("fast");
$("#edit-btn-edu").hide("fast");	
$("#save-btn-edu").show("fast");	
	
});	


$("#edit-member-edu-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-edu').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-edu-edit").hide("fast");
$("#edit-btn-edu").show("fast");	
$("#save-btn-edu").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER EDUCATION EDIT END /////////  



//////// MEMBER RELIGION EDIT START ///////// 
   
$("#edit-btn-religion").on("click",function(){

$("#member-religion").hide("fast");
$("#member-religion-edit").show("fast");
$("#edit-btn-religion").hide("fast");	
$("#save-btn-religion").show("fast");	
	
});	


$("#edit-member-religion-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-religion').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-religion-edit").hide("fast");
$("#edit-btn-religion").show("fast");	
$("#save-btn-religion").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER RELIGION EDIT END /////////  


//////// MEMBER LIFESTYLE EDIT START ///////// 
   
$("#edit-btn-lifestyle").on("click",function(){

$("#member-lifestyle").hide("fast");
$("#member-lifestyle-edit").show("fast");
$("#edit-btn-lifestyle").hide("fast");	
$("#save-btn-lifestyle").show("fast");	
	
});	


$("#edit-member-lifestyle-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-lifestyle').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-lifestyle-edit").hide("fast");
$("#edit-btn-lifestyle").show("fast");	
$("#save-btn-lifestyle").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER LIFESTYLE EDIT END /////////    


//////// MEMBER LIKE EDIT START ///////// 
   
$("#edit-btn-like").on("click",function(){

$("#member-like").hide("fast");
$("#member-like-edit").show("fast");
$("#edit-btn-like").hide("fast");	
$("#save-btn-like").show("fast");	
	
});	


$("#edit-member-like-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-like').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-like-edit").hide("fast");
$("#edit-btn-like").show("fast");	
$("#save-btn-like").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER LIKE EDIT END /////////   



//////// MEMBER PARTNER MYSELF EDIT START ///////// 
   
$("#edit-btn-partner-myself").on("click",function(){

$("#member-partner-myself").hide("fast");
$("#member-partner-myself-edit").show("fast");
$("#edit-btn-partner-myself").hide("fast");	
$("#save-btn-partner-myself").show("fast");	
	
});	


$(".sbt").on('click',function(){
 var my_self=$('#reg_preference_mem_myself').val();
 var res=my_self.toLowerCase();
 var edit_partner_myself1="edit-partner-myself";
if(res==""){
alert("Enter few words about your preference  !");
}else if(res.length<50){
alert("Enter enter at least 50 character about your preference !");
}else if(res.match(/[0-9]/g)){
alert("Numbers are not allowed !");
}else if(res.match(/one/g) || res.match(/two/g) || res.match(/three/g) || res.match(/four/g) || res.match(/five/g) || res.match(/six/g) || res.match(/seven/g) || res.match(/eight/g) || res.match(/nine/g) || res.match(/ten/g) || res.match(/eleven/g) || res.match(/twelve/g) || res.match(/thirteen/g) || res.match(/fourteen/g) || res.match(/fifteen/g) || res.match(/sixteen/g) || res.match(/seventeen/g) || res.match(/eighteen/g) || res.match(/nineteen/g) || res.match(/twenty/g)){
      alert('Invalid characters !');
}else{
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  {edit_partner_myself1:edit_partner_myself1,res:res},
success: function(data){

if(data!=0){

$('#member-partner-myself').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-myself-edit").hide("fast");
$("#edit-btn-partner-myself").show("fast"); 
$("#save-btn-partner-myself").hide("fast"); 

},
error: function(){alert('error')}                      

});
}

});



	
//});	

//////// MEMBER PARTNER MYSELF EDIT END /////////  


//////// MEMBER PARTNER BASIC DETAIL EDIT START ///////// 
   
$("#edit-btn-partner-basic").on("click",function(){

$("#member-partner-basic").hide("fast");
$("#member-partner-basic-edit").show("fast");
$("#edit-btn-partner-basic").hide("fast");	
$("#save-btn-partner-basic").show("fast");	
	
});	


$("#edit-member-partner-basic-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-basic').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-basic-edit").hide("fast");
$("#edit-btn-partner-basic").show("fast");	
$("#save-btn-partner-basic").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER PARTNER BASIC DETAIL EDIT END /////////   



//////// MEMBER RELIGION PARTNER EDIT START ///////// 
   
$("#edit-btn-partner-religion").on("click",function(){

$("#member-partner-religion").hide("fast");
$("#member-partner-religion-edit").show("fast");
$("#edit-btn-partner-religion").hide("fast");	
$("#save-btn-partner-religion").show("fast");	
	
});	


$("#edit-member-partner-religion-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-religion').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-religion-edit").hide("fast");
$("#edit-btn-partner-religion").show("fast");	
$("#save-btn-partner-religion").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER RELIGION PARTNER EDIT END ///////// 




//////// MEMBER PARTNER LOCATION EDIT START ///////// 
   
$("#edit-btn-partner-location").on("click",function(){

$("#member-partner-location").hide("fast");
$("#member-partner-location-edit").show("fast");
$("#edit-btn-partner-location").hide("fast");	
$("#save-btn-partner-location").show("fast");	
	
});	


$("#edit-member-partner-location-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-location').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-location-edit").hide("fast");
$("#edit-btn-partner-location").show("fast");	
$("#save-btn-partner-location").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// MEMBER PARTNER LOCATION EDIT END ///////// 


//////// MEMBER PARTNER LIFESTYLE EDIT START ///////// 
   
$("#edit-btn-partner-lifestyle").on("click",function(){

$("#member-partner-lifestyle").hide("fast");
$("#member-partner-lifestyle-edit").show("fast");
$("#edit-btn-partner-lifestyle").hide("fast");	
$("#save-btn-partner-lifestyle").show("fast");	
	
});	


$("#edit-member-partner-lifestyle-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-lifestyle').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-lifestyle-edit").hide("fast");
$("#edit-btn-partner-lifestyle").show("fast");	
$("#save-btn-partner-lifestyle").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER PARTNER LIFESTYLE EDIT END ///////// 
  


//////// MEMBER PARTNER PROFFESION EDIT START ///////// 
   
$("#edit-btn-partner-professional").on("click",function(){

$("#member-partner-professional").hide("fast");
$("#member-partner-professional-edit").show("fast");
$("#edit-btn-partner-professional").hide("fast");	
$("#save-btn-partner-professional").show("fast");	
	
});	


$("#edit-member-partner-professional-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-professional').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-professional-edit").hide("fast");
$("#edit-btn-partner-professional").show("fast");	
$("#save-btn-partner-professional").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// MEMBER PARTNER PROFFESION EDIT END ///////// 
	
});
</script>
<script>
function showstate(stateid){
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/"+"findstate-profile.php?id="+stateid;
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
	
//alert(religion)	
	
if(religion=="Hindu"){


$("#jain").hide();	
$("#muslim").hide();
$("#sikh").hide();	
$("#community_load_area").show();

document.getElementById('hindu').style.display='block'


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	

//$("#show-hide-sub-community").show();			
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
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	
$("#show-hide-sub-community").show();	
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
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	
$("#show-hide-sub-community").hide();		
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
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	
$("#show-hide-sub-community").hide();			
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
$("#show-hide-sub-community").hide();		
	
	
}else{

$("#hindu").hide();	
$("#muslim").hide();	
$("#jain").hide();	
$("#sikh").hide();	
$("#community_load_area").show();	


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	
$("#show-hide-sub-community").hide();		
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
function byReligionPartner(religion){
	
//alert(religion)	
	
if(religion=="Hindu"){


$("#jain-partner").hide();	
$("#muslim-partner").hide();
$("#sikh-partner").hide();	
$("#community_load_area_partner").show();

document.getElementById('hindu-partner').style.display='block'


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	

//$("#show-hide-sub-community").show();			
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////


}else if(religion=="Muslim"){

$("#hindu-partner").hide();	
$("#jain-partner").hide();	
$("#sikh-partner").hide();	
$("#community_load_area_partner").show();	



document.getElementById('muslim-partner').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	
$("#show-hide-sub-community-partner").show();	
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Jain"){

$("#hindu-partner").hide();	
$("#muslim-partner").hide();	
$("#sikh-partner").hide();	
$("#community_load_area_partner").show();


document.getElementById('jain-partner').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	
$("#show-hide-sub-community-partner").hide();		
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Sikh"){

$("#hindu-partner").hide();	
$("#muslim-partner").hide();	
$("#jain-partner").hide();	
$("#community_load_area_partner").show();


document.getElementById('sikh-partner').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	
$("#show-hide-sub-community-partner").hide();			
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Parsi" || religion=="Buddhist" || religion=="Jewish"){

$("#hindu-partner").hide();	
$("#muslim-partner").hide();	
$("#jain-partner").hide();	
$("#sikh-partner").hide();	
$("#community_load_area_partner").hide();	
$("#show-hide-sub-community-partner").hide();		
	
	
}else{

$("#hindu-partner").hide();	
$("#muslim-partner").hide();	
$("#jain-partner").hide();	
$("#sikh-partner").hide();	
$("#community_load_area_partner").show();	


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	
$("#show-hide-sub-community-partner").hide();		
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


<script src="<?=SITE_WS_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_WS_PATH?>/js/script.js"></script>
<script src="<?=SITE_WS_PATH?>/js/menuzord.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jPushMenu.js"></script>
<script src="<?=SITE_WS_PATH?>/js/owl.js"></script>
<!-- validate -->
<script src="<?=SITE_WS_PATH?>/js/customcollection.js"></script>
<script src="<?=SITE_WS_PATH?>/js/custom1.js"></script>
<!-------------->
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible.js"></script> 
<!------pie---------->


<!-------  Profile Photo ----------->
<style>
a.carousel-control.profile-photo{
background:none !important;	
}

span.glyphicon.glyphicon-chevron-left.profile-photo{
color:#b10a0a !important;
}

span.glyphicon.glyphicon-chevron-right.profile-photo{
color:#b10a0a !important;
}


.profile-photo{
background-color:#fff !important;	
}
</style>


<div class="modal fade" id="ProfilePhotoModal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-body">

<div id="myCarousel" class="carousel slide" >

<div class="carousel-inner">
   
   <div class="item   active profile-photo " style="text-align:-webkit-center">
<img src="<?=SITE_WS_PATH?>/upload_images/<?=$userDATA['reg_profile_photo']?>" style="width:354px;height:442px" />
</div>

<?php
$sql="select * from  tbl_member_image where 1 and mem_image_cat_id='".$userDATA['reg_id']."'";		
$sql_fetch = db_query($sql);
$cntDATA=mysqli_num_rows($sql_fetch);
$cnt=0;
if($cntDATA > 0){	
while($DATA = mysqli_fetch_array($sql_fetch)) {
$cnt++;	
?>
<div class="item profile-photo " style="text-align:-webkit-center">
<img src="member_images/<?=$DATA['mem_image_name']?>" style="width:354px;height:442px" />
</div>
<? }} 

 
?>    


</div>

    <!-- Left and right controls -->
    <a class="left carousel-control profile-photo" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left profile-photo"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control profile-photo " href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right profile-photo"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</div>
<div class="modal-footer" style="text-align:center">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>