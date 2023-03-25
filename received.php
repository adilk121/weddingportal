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
?>
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
<!---button--->
  <style>
.btn-gryes a{display:block; background-color:#f1f1f2; color:#000; font-size:14px; padding:0px 2px; border:solid 1px #eaeaeb; text-align:center;  /*width:99%; */transition:all 1.5s;}
.btn-gryes a:hover{background-color:#fff; border:solid 1px #000; color:#000; transition:all 1.5s;}
.btn-gryes{margin:5px 5px 5px 0px; padding:0px; /*width:49%;*/}  
 </style>
 <!------------>
</head>
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

  <section style="background-color:#f1f1f2;">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 all-sec">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mp-iboxd20"> <h4 class="hdg-box"><img src="images/inbox.png" class="box-img"> Inbox</h4>
            <div>
            <?php include("inbox-links.php");?>
            </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 addv" style="margin-top:20px;">
        <img src="images/marr-banner1.png">
        </div>
      <!----------->
    </div>
      <!---end-images--->
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mp_db_00">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-rev">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
   <div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
   <h2 class="nm-acep"><a href="#">Sone Royaa <span class="spn-sty1">(001122345s0)</span></a></h2>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<span class="spn-sty">Date : 3-30-2018</span>
   <a href="#" title="Cancelled" class="cancl-btn-sty">
   <i class="fa fa-times"></i>
   </a>
   </div>
 </div>
 	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
 <img src="images/15.jpg" class="img-inbox">
 </div></div>

  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12  mp-btm1 mp_0bx">
   <p class="mp_0bx">
   <a href="#" class="molcht onl-sty">
   <i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online 27-Mar-18</a></p>
    <p>Age : 30 Yrs | Height : 5 ft 5 in / 165 cm | Sect : Sunni | Division : Muslim - Sheikh</p>
      <p><img src="images/quotation.png" class="img-cnt"> Hi, We found your profile to be interesting and would like to connect with you.</p>

       <div class="clearfix"></div>
       
 <a href="#" class="btn-ace-pro">View Full Profile</a>
 <a href="#" class="btn-decl-box re-btn">Send Again</a>
  <a href="#" class="btn-decl-box">Declined</a>
               
          
          </div>
<!--<div class="col-md-2">
<div class="clearfix"></div>

              <div class="col-md-12 btn-gryes mp-top2"><a href="#">Send Mail</a></div>
            <div class="col-md-12 btn-gryes"><a href="#">View Contact</a></div>
               
         </div>-->
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
   <div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
   <h2 class="nm-acep"><a href="#">Rani Kumari <span class="spn-sty1">(So001122345s0)</span></a></h2>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<span class="spn-sty">Date : 3-30-2018</span>
   <a href="#" title="Cancelled" class="cancl-btn-sty">
   <i class="fa fa-times"></i>
   </a>
   </div>
 </div>
 <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
 <img src="images/16.jpg" class="img-inbox">
 </div></div>

  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 mp-btm1 mp_0bx">
   <p class="mp_0bx">
   <a href="#" class="molcht onl-sty">
   <i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online 27-Mar-18</a></p>
    <p>Age : 30 Yrs | Height : 5 ft 5 in / 165 cm | Sect : Sunni | Division : Muslim - Sheikh</p>
      <p><img src="images/quotation.png" class="img-cnt"> Hi, We found your profile to be interesting and would like to connect with you.</p>

       <div class="clearfix"></div>
       
 <a href="#" class="btn-ace-pro">View Full Profile</a>
 <a href="#" class="btn-decl-box re-btn">Send Again</a>
  <a href="#" class="btn-decl-box">Declined</a>
               
          
          </div>

  </div>
  
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  pd-0">
   <div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
   <h2 class="nm-acep"><a href="#">Sone Royaa <span class="spn-sty1">(001122345s0)</span></a></h2>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<span class="spn-sty">Date : 3-30-2018</span>
   <a href="#" title="Cancelled" class="cancl-btn-sty">
   <i class="fa fa-times"></i>
   </a>
   </div>
 </div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
 <img src="images/visible.jpg" class="img-inbox">
 </div> </div>

  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 mp-btm1 mp_0bx">
   <p class="mp_0bx">
   <a href="#" class="molcht onl-sty">
   <i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online 27-Mar-18</a></p>
    <p>Age : 30 Yrs | Height : 5 ft 5 in / 165 cm | Sect : Sunni | Division : Muslim - Sheikh</p>
      <p><img src="images/quotation.png" class="img-cnt"> Hi, We found your profile to be interesting and would like to connect with you.</p>

       <div class="clearfix"></div>
       
 <a href="#" class="btn-ace-pro">View Full Profile</a>
 <a href="#" class="btn-decl-box re-btn">Send Again</a>
  <a href="#" class="btn-decl-box">Declined</a>
               
          
          </div>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
   <div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
   <h2 class="nm-acep"><a href="#">Rani Kumari <span class="spn-sty1">(So001122345s0)</span></a></h2>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<span class="spn-sty">Date : 3-30-2018</span>
   <a href="#" title="Cancelled" class="cancl-btn-sty">
   <i class="fa fa-times"></i>
   </a>
   </div>
 </div>
 <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
 <img src="images/profile1.jpg" class="img-inbox">
 </div> </div>
<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12  mp-btm1 mp_0bx">
   <p class="mp_0bx">
   <a href="#" class="molcht onl-sty">
   <i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online 27-Mar-18</a></p>
    <p>Age : 30 Yrs | Height : 5 ft 5 in / 165 cm | Sect : Sunni | Division : Muslim - Sheikh</p>
      <p><img src="images/quotation.png" class="img-cnt"> Hi, We found your profile to be interesting and would like to connect with you.</p>

       <div class="clearfix"></div>
       
 <a href="#" class="btn-ace-pro">View Full Profile</a>
 <a href="#" class="btn-decl-box re-btn">Send Again</a>
  <a href="#" class="btn-decl-box">Declined</a>
               
          
          </div>
  </div>
<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 next-prv1 text-right ">
<p>1 2 3 4 5 6 7 of 100 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
 </div>-->
      </div>

    </div> 
    </div>
    </div>
    </div>
</section> 
  <!--Main Footer-->
  <?php include("site-footer.php"); ?>
</div>
<!-- Side Menu-->

<!-------register----->
<script src="js/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="js/menuzord.js"></script>
<script src="js/jPushMenu.js"></script>
<script src="js/owl.js"></script>
<!-- validate -->
<script src="js/customcollection.js"></script>
<script src="js/custom1.js"></script>
<!-------------->
<!--<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> -->
<script src="js/jquery.collapsible.js"></script> 
<!-----left-accordian--------->
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="js/jquery.collapsible.js"></script> 
<script>
$('#collapse-menu').collapsible({
  contentOpen:["0","1"]
});
</script>

<!----slider------------->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
 <script language="javascript" src="js/index-tab.js"></script>
 </body>
</html>