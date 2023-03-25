<link href="<?=SITE_WS_PATH?>/css/style-res.css" rel="stylesheet">
<meta name="robots" content="index, follow" />
<?php
include("site-main-query.php");

if(isset($_REQUEST['btnLoginHome'])){

if(!empty($loginID) &&  !empty($loginPwd)){

$sql="SELECT * FROM tbl_registration WHERE (reg_email='$loginID' OR reg_mobile_no='$loginID') AND reg_pass='$loginPwd' AND reg_status='Active' ";

$dataLoginHome=db_query($sql);
$countLogin=mysqli_num_rows($dataLoginHome);

if($countLogin){
$recLogin=mysqli_fetch_array($dataLoginHome);	
db_query("UPDATE tbl_registration SET reg_is_login='Yes',reg_last_login='".date("Y-m-d H:i:s")."' WHERE reg_id='$recLogin[reg_id]'");	
$_SESSION['userLoginId']=$recLogin['reg_id'];
$_SESSION['userLoginName']=$recLogin['reg_name'];
$_SESSION['userMembership']=$recLogin['reg_membership'];
?>
<script>
    window.location.href="my-profile.php";
</script>
<?php
}else{
$_SESSION["login_msg"]="Entered login credential is not valid.";
?>

<?php
}
}}?>

<link rel="shortcut icon" href="<?=SITE_WS_PATH?>/<?=$compDATA['admin_favicon']?>" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php /*if($compDATA['admin_index_follow']=='Yes'){ ?>
<meta name="robots" content="index, follow" />
<? }else{ ?>
<meta name="robots" content="noindex, nofollow" />
<? } */?>
<?php if($compDATA['admin_meta_fb_id']!=''){ ?>
<meta property="fb:page_id" content="<?=$compDATA['admin_meta_fb_id']?>" />
<? } ?>
<?php if($compDATA['admin_meta_alexa_id']!=''){ ?>
<meta name="alexaVerifyID" content="<?=$compDATA['admin_meta_alexa_id']?>"/>
<? } ?>
<?php if($compDATA['admin_meta_msvalidate_id']!=''){ ?>
<meta name="msvalidate.01" content="<?=$compDATA['admin_meta_msvalidate_id']?>" />
<? } ?>
<?php /*if($compDATA['admin_site_verification_code']!=''){ ?>
<meta name="google-site-verification" content="<?=$compDATA['admin_site_verification_code']?>" />
<? } ?>
<?php if($compDATA['admin_google_analytic_code']!=''){
 echo $compDATA['admin_google_analytic_code'];
}*/?>

<style>
	.dsp-log1{display: block;}
	.dsp-log2{display: none;}
		@media (min-width:320px) and (max-width:767px) 
		{.dsp-log2{display: block;}
			.dsp-log1{display: none;}
			.main-header .header-lower .logo {
    padding:0px 0px;
}
	}
p#for-login-area {
	position: relative;
	line-height: 1.9em;
	font-weight: 400;
	font-size: 16px;
}
.dropdown-el{top:.2em !important; margin-top:10px !important;}
.pos-fom{position:relative; top:14px;}
.iq-customizer {top:98px !important;}
.sle-opt{padding:10px;}
</style>
<header class="main-header" id="main-header" >
<?php include("header-top.php"); ?>    
<div class="clearfix"></div>
	<style>
		.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
	</style>
    <div  id="myHeader">
    <div class="header-lower">
      <div class="auto-container clearfix" style="background-color:#fff;">
        <div class="outer-box">
        
          <div class="fixed-header logo"> <a href="index.php"><img class="img-responsive" src="images/wedding-final-1213-1.png" alt=""></a> </div>
<?php if(empty($_SESSION['userLoginId'])){?> 


         
<form action="" method="post" name="HomeLoginFrm" id="HomeLoginFrm" enctype="multipart/form-data">


<div class="pos-fom">

<?php if(!empty($_SESSION["login_msg"])){?>
<span id="login-error">
<?=$_SESSION["login_msg"]?>
</span>
<br>
<?php 
}
unset($_SESSION["login_msg"]);
?>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mp0s">
                        
              <input type="text" placeholder="Email Id / Mobile No." autofocus class="hm-form-sty" name="loginID" id="loginID" autocomplete="off" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mp0s">
              <input type="password" name="loginPwd" id="loginPwd" placeholder="Password" class="hm-form-sty" required>
             <p class="pd-02 dsp-log1" id="for-login-area"><a href="Javascript:void(0)" onclick="open_password_model()" id="myImg" class="prd-pw" >Forgot Password</a></p>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 mp0s text-center">
				<div class="clerafix"></div>
				<center><p class="pd-02 dsp-log2" id="for-login-area"><a href="Javascript:void(0)" onclick="open_password_model()" id="myImg" class="prd-pw" >Forgot Password</a></p></center>
				<div class="clerafix"><button type="submit" class="sr-btn" name="btnLoginHome" id="btnLoginHome" style="cursor:default">Sign In</button>
				</div>
                
                <div style="margin:10px" id="google_translate_element"></div>
                </div>
            </div>
</form>
<?php }?>
      
      

<?php if(empty($_SESSION['userLoginId'])){?> 

<!--<div class="appoinment-btn hidden-xs"> <span class="dropdown-el">
<input type="radio" name="sortType" value="Relevance" checked="checked" id="sort-relevance">
<label for="sort-relevance"><i class="fa fa-facebook so-std" style="background-color:#3b5999"></i> Sign in with Facebook</label>
<input type="radio" name="sortType" value="Popularity" id="sort-best">
<label for="sort-best"><i class="fa fa-twitter so-std" style="background-color:#55acef"></i> Sign in with Twitter</label>
<input type="radio" name="sortType" value="PriceIncreasing" id="sort-low">
<label for="sort-low"><i class="fa fa-google-plus so-std" style="background-color:#de4b39"></i> Sign in with Google</label>
<input type="radio" name="sortType" value="PriceDecreasing" id="sort-high">
<label for="sort-high"><i class="fa fa-linkedin so-std" style="background-color:#007bb6"></i> Sign in with LinkedIn</label>
</span> 
</div>-->
<?php }?>

        </div>
      </div>
		<div class="clearfix"></div>
    </div>
		</div>
  </header>
<?php include("forgot-password-popup.php"); ?> 





<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>


<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>