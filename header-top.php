<?php
$page_name=basename($_SERVER['PHP_SELF'],'.php');
include("site-main-query.php");
include("geo_location.php");
//echo $currLocation;
$currLocation="India";
?>
<style>
	.dsp-toprd{}
	@media (min-width:320px) and (max-width:767px) 
{.dsp-toprd{display: none;}}
</style>
<div class="header-top dsp-toprd">
      <div class="auto-container clearfix">
        <div class="top-left">
          <ul class="clearfix">
            <li><a href="index.php"><span class="fa fa-circle"></span>Welcome 
            <?php if(!empty($_SESSION['userLoginId'])){?>
            <span class="bold"><?=$_SESSION['userLoginName']?> !&nbsp;</span>
            <?php }?>
              to <?=$compDATA['admin_company_name']?></a></li>
          </ul>
        </div>
        <div class="top-right">
          <ul class="clearfix">
            <li><a href="tel:<?=$compDATA['admin_mobile']?>"><span class="fa fa-phone"></span><?=$compDATA['admin_mobile']?></a></li>
            <li><a href="mailto:<?=$compDATA['admin_email']?>"><span class="fa fa-envelope"></span> <?=$compDATA['admin_email']?></a></li>
            <li><a href="contact-us.php"><span class="fa fa-map-marker"></span> Find us on 
              map</a></li>
<?php if(!empty($_SESSION['userLoginId'])){?> 
<li><a href="<?=SITE_WS_PATH?>/my-profile.php"><span class="fa fa-angle-down"></span>My Account </a></li>             
<li><a href="<?=SITE_WS_PATH?>/logout.php"><span class="fa fa-power-off"> Logout</span> </a></li>
<?php }?>                            
          </ul>
        </div>
      </div>
    </div>
<script>
function getXMLHTTP() {
var xmlhttp=false;	
try{
xmlhttp=new XMLHttpRequest();
}
catch(e){
try{	
xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
}
catch(e){
try{
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
}
catch(e1){
xmlhttp=false;
}
}
}
return xmlhttp;
}
</script>