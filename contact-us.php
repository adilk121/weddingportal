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
<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Thebestweddinghub.Com Portal - Contact us Free Online Support</title>
  <meta name="keywords" content="contact ApniMatrimony for marriage solution, customer care support of ApniMatrimony.Com, 24/7 online support ApniMatrimony.Com" />
    <meta name="description" content="Contact us via email, phone, address, and Get the complete details about our matrimony portal ApniMatrimony.Com, feel free to contact us we are always there for you and congratulation for your better life." />
<meta name="robots" content="index, follow" />

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
	.adr-dtl{margin-bottom:20px !important;}
	.pd-tb {
    padding: 5px 0px;
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
        <h2>Contact Us</h2>
        <p><a href="<?=SITE_WS_PATH?>">Home</a> | Contact Us
      </div>
   </div>
 </section>
 <section class="pd-tb">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="col-md-4 col-xs-12 adr-dtl">
               <i class="fa fa-map-marker"></i>
               <h2>Address</h2>
               <p><?=$compDATA['admin_address']?> </p>
            </div>
            <div class="col-md-4 col-xs-12 adr-dtl">
               <i class="fa fa-mobile"></i>
               <h2>Mobile No</h2>
               <p><?=$compDATA['admin_mobile']?></p>
               <p><?=$compDATA['admin_phone']?></p>
            </div>
            <div class="col-md-4 col-xs-12 adr-dtl">
               <i class="fa fa-envelope"></i>
               <h2>Email Id</h2>
               <p><?=$compDATA['admin_email']?></p>
                 <p><?=$compDATA['admin_alt_email']?></p>
            </div>
         </div>
      </div>
   </div>
 </section>

<?php if($compDATA['admin_contactus_map_link']!=""){?>
<section>
<?=$compDATA['admin_contactus_map_link']?>  
</section>
<?php }?>
   
<?php include("site-footer.php"); ?>


<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>
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



