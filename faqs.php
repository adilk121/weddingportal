<?php
ob_start();
require_once("includes/dbsmain.inc.php"); 
?>
<?php
if(!empty($_SESSION['userLoginId'])){
//header
header("location:dashboard.php");	
exit;
}
?>
<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>thebestweddinghub.Com No 1 Matrimony Portal in India- Faqs</title>

  <meta name="keywords" content="ApniMatrimony.Com No 1 Matrimony Portal in India- Faqs" />
    <meta name="description" content="ApniMatrimony.Com No 1 Matrimony Portal in India- Faqs" />
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
	.fqs-tyd0 h4{margin-top:10px; color: #000;}
	.pd-tb {
    padding: 10px 0px;
}
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
</head>
<body id="amitabh">
<div class="page-wrapper" >
  <div class="preloader"></div>
  <?php include("site-header.php"); ?>
  <!---important-style--->
  <section style="background:url(images/bg1.jpg) no-repeat center; background-size:cover; padding:20px;">
   <div class="container">
      <div class="col-md-12 text-center bg_1">
        <h2>Faqs</h2>
        <p><a href="<?=SITE_WS_PATH?>">Home</a> | Faqs
      </div>
   </div>
 </section>
 <section class="pd-tb">
   <div class="container">
      <div class="row">
           <div class="col-md-12 fqs-tyd0">
			   <h4>Lorem ipsum dolor sit amet</h4>
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel sem nec turpis consequat iaculis et quis dolor. Phasellus rutrum consequat dolor. Aenean lacinia elit ac dolor ultrices elementum. Donec eget magna faucibus, tincidunt mi et, mattis nisi. Etiam facilisis mi at vulputate tempus. In ornare nibh in mi lacinia, id dignissim velit malesuada.</p></div>
		      <div class="col-md-12 fqs-tyd0">
			      <h4>Lorem ipsum dolor sit amet</h4>
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel sem nec turpis consequat iaculis et quis dolor. Phasellus rutrum consequat dolor. Aenean lacinia elit ac dolor ultrices elementum. Donec eget magna faucibus, tincidunt mi et, mattis nisi. Etiam facilisis mi at vulputate tempus. In ornare nibh in mi lacinia, id dignissim velit malesuada. </p>
      </div>
		  
		   <div class="col-md-12 fqs-tyd0">
			      <h4>Lorem ipsum dolor sit amet</h4>
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel sem nec turpis consequat iaculis et quis dolor. Phasellus rutrum consequat dolor. Aenean lacinia elit ac dolor ultrices elementum. Donec eget magna faucibus, tincidunt mi et, mattis nisi. Etiam facilisis mi at vulputate tempus. In ornare nibh in mi lacinia, id dignissim velit malesuada. </p>
      </div>
		  
		   <div class="col-md-12 fqs-tyd0">
			      <h4>Lorem ipsum dolor sit amet</h4>
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel sem nec turpis consequat iaculis et quis dolor. Phasellus rutrum consequat dolor. Aenean lacinia elit ac dolor ultrices elementum. Donec eget magna faucibus, tincidunt mi et, mattis nisi. Etiam facilisis mi at vulputate tempus. In ornare nibh in mi lacinia, id dignissim velit malesuada. </p>
      </div>
	   
	   
	   </div>
   </div>
 </section>

<?/******php if($compDATA['admin_contactus_map_link']!=""){?>
<section>
<?=$compDATA['admin_contactus_map_link']?>  
</section>
<?php }********/?>
   
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



