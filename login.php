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
                        <a href="index.php"><img class="img-responsive" src="<?=SITE_WS_PATH?>/images/logo1.png" alt=""></a>
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
<section class="pd-tb" style="background:url(images/bg1.jpg) no-repeat center; background-size:cover; padding:20px;">
   <div class="container">
      <div class="row">
         <div class="col-md-4 text-center">
            
            
<form method="post" class="" action="" onSubmit="return Validation_Login();"  >
<div class="row">
<div class="col-lg-12">
  
<div class="input-group m-b15">
<span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
<input type="text" class="form-control" id="login_id" name="login_id"  placeholder="Enter email address"  autocomplete="off" <?php if($_COOKIE['uid']!=""){?> value="<?=$_COOKIE['uid']?>" <?php }?>  >
</div>
</div>

<div class="col-lg-12">

<div class="input-group m-b15">
<span class="input-group-addon"><i class="fa fa-key fa-lg"></i></span>
<input class="form-control" id="password" name="password" type="password" placeholder="Enter email address" autocomplete="off" <?php if($_COOKIE['pass']!=""){?> value="<?=$_COOKIE['pass']?>" <?php }?> >
</div>
</div>
  
   
  
  <div class="col-lg-12">
  
  <label class="inline" id="remMe" for="rememberme">
              <input type="checkbox" <?php if($_COOKIE['uid']!="" && $_COOKIE['pass']!="" ){?> checked <?php }?> value="yes" id="rememberme" name="rememberme">
              Remember me </label>
      
      <button name="LoginSubmit" type="submit" value="Submit" class="site-button "> <span>Login Now  <i class="fa fa-sign-in" aria-hidden="true"></i></span> </button>

  </div>
  
  
<div class="regd-with-forget-pass">
<span class="forget-pass-login"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Forgot Password</a></span>
<span class="regd-with"><a href="register.php">Register with Alok Travel</a></span>
</div>                                    
  
  
</div>
</form>            
            
           
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