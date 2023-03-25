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
  <?php include("site-header.php"); ?>
  
<?php
$regID=$_REQUEST['id'];
$sql="SELECT * FROM tbl_registration WHERE reg_id='$regID'";
$dataMember=db_query($sql);
$recMember=mysqli_fetch_array($dataMember);

$msg_body="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' /><title>Apnimatrimony.Com-Largest Matrimony Network In India</title></head><body><div style='width: 100%;background-color: #b11a0a38;text-align: -webkit-center;border-top: solid thin #b11a0a73;border-bottom: solid thin #b11a0a73;padding: 14px 0 14px 0;'><table style='width: 700px;background-color: #fff;box-shadow: 1px 1px 35px 8px #b11a0a85;border: solid 14px #b11a0a;'><tr><td style='text-align:center;padding-top:20px'><img src='http://webkey.co.in/2.0-demo/apnimatrimony/images/logo1.png' /></td></tr><tr><td><h1 style='color:#000;text-align:center;'>Welcome to Apnimatrimony.Com</h1></td></tr><tr><td><p style='font-size: 15px;text-align: center;color: #333;'>Dear ".$recMember['reg_name'].", your profile details are updated successfully. Login credential is given below</p><table style='width: 408px;margin: 28px 0 34px 34px;' ><tr><td style='width:30%;font-weight:600;color:#000;font-size: 14px;'>User ID</td><td style='width:10%'>:</td><td style='width:60%;font-size: 15px;'>".$recMember['reg_email']."</td></tr><tr><td style='font-weight:600;color:#000;font-size: 14px;'>Password</td><td>:</td><td style='font-size: 15px;'>".$recMember['reg_pass']."</td></tr></table></td></tr><tr><td style='padding:0 0 20px 30px; color:#333; '><p style='font-size:15px'>Apnimatrimony.Com welcomes you and wish to a very successfull relation.</p><p><h2 style='font-size:20px;font-weight:600'>Apnimatrimony Team</h2></p></td></tr></table></div></body></html>";


$mail_to_client="$recMember[reg_email]";
$sub_client="Apnimatrimony Registration";
$mail_client_body ="$msg_body";
$sender_client ="noreply@tradekeyindia.in";
$headers_client  = "MIME-Version: 1.0" . "\r\n";
$headers_client .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers_client .= "from: ".$sender_client."\n";
if($mail_to_client!=''){
@mail($mail_to_client,$sub_client,$mail_client_body,$headers_client);
} 
	
?>  
  <!---important-style--->
  <section style="background:url(images/bg1.jpg) no-repeat center; background-size:cover; padding:20px;">
   <div class="container">
      <div class="col-md-12 text-center bg_1">
        <h2>Welcome</h2>
        <p><a href="#">Home</a> | Welcome
      </div>
   </div>
 </section>
 <section class="pd-tb">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="col-md-4 col-xs-12 adr-dtl">
              
              <img src="images/welcome.png" class="img-responsive" />
              
              
            </div>
            <div class="col-md-8 col-xs-12 adr-dtl">
              
              <ul id="welcome-text" class="text-left">
              <li>Team <b>ApniMatrimony.Com</b> heartly welcomes you.</ll>
              <li>The information provided by you will go for further verification process.</ll>
              <li>After verification process, your account will be activated.</ll>              
              <li>For any query or support, please send a email on <a href="mailto:help@apnimatrimony.com">help@apnimatrimony.com</a></ll>    
 <li>Team <b>ApniMatrimony.Com</b> wish a very happy wedding in advance for you.</ll>                            
              </ul>
              
              
              
            </div>
           
         </div>
      </div>
   </div>
 </section>

<footer class="main-footer fotr-sty">
    <div class="footer-upper">
      <div class="go-up">
        <div class="curve scroll-to-target" data-target="#main-header"><span class="icon fa fa-arrow-up"></span></div>
    </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center footr-brd">
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum, nibh et sagittis vehicula, mi velit dictum mi, vel vestibulum tortor nibh a felis. Ut accumsan hendrerit metus ut imperdiet. Nunc tempor sem sed ullamcorper faucibus. Ut auctor, lectus at gravida ultrices, sem dui sodales tortor, nec imperdiet mi risus vitae leo. Sed pulvinar imperdiet consectetur. Curabitur at erat massa. Quisque mauris orci, commodo nec libero in, faucibus euismod orci.</p>
        </div>
          <div class="col-md-3 col-sm-6 col-xs-12 column">
            <div class="footer-widget links">
              <h2>More</h2>
              <ul>
                <li><a href="#">Hindu Matrimony</a></li>
                <li><a href="#">Muslim Matrimony</a></li>
                <li><a href="#">Christian Matrimony</a></li>
                <li><a href="#">Jain Matrimony</a></li>
                <li><a href="#">Paris Matrimony</a></li>
                <li><a href="#">Buddhist Matrimony</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 column">
            <div class="footer-widget links">
              <h2>Need Help?</h2>
              <ul>
                <li><a href="contact-us.html">Contact Us</a></li>
                <li><a href="feedback.html">Feedback</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Faqs</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 column">
            <div class="footer-widget links">
              <h2>Terms Of Use</h2>
              <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
              </ul>
            </div>
            <div class="footer-widget links appd">
              <h2>Download Mobile App</h2>
             
                <a href="#"><img src="images/Download-Mobile-App1.png"></a>
               <a href="#"><img src="images/Download-Mobile-App2.png"></a>
            </div>
            
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-12 column">
            <div class="footer-widget links">
            
              <h2>Follow Us</h2>
             
               <div class="social-links"> <a href="#" class="icon fa fa-facebook-f fb-sty"></a>
                <a href="#" class="icon fa fa-twitter tw-sty"></a> 
                
                <a href="#" class="icon fa fa-google-plus gp-sty"></a> 
                 <a href="#" class="icon fa fa-linkedin lnk-sty"></a> 
                </div>
               
             
                <div class="appd">
                 <h2>Call Us Anytime</h2>
             
                <p class="info"><i class="fa fa-mobile ft-sz"></i> <a href="tel:91-80103 83103" class="emld"> 91-80103 83103</a></p>
                </div>
                <div class="appd">
                 <h2>Email Us At</h2>
             
                <p class="info"><i class="fa fa-envelope"></i> <a href="mailto:info@ApniMatrimony.com" class="emld">info@ApniMatrimony.com</a></p>
                </div>
             
            </div>
           
          </div>
      </div>
       
    </div>
  </div>
    <div class="footer-bottom">
      <div class="auto-container">
        <div class="copyright">All rights reserved &copy; 2017 ApniMatrimony. &ensp;<span class="fa fa-heart hrt-sty"></span>&ensp; Designed by : <a href="http://www.webkeyindia.com/" target="_blank">WebKeyIndia.Com - Best SEO Company In India</a></div>
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
<?php unset($_SESSION['regID']);?>
 </body>
</html>