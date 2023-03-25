<!--------------------->
<style>
	.sty-img {
    background-color: #fff;  border: solid 0px #9ea5a6;
}
	.styimggr{border: solid 1px #9ea5a6;
    padding: 2px;
    background-color: #fff;  vertical-align: middle; display: table-cell;}
	
	.pd-bgo{padding: 40px; 0px;}
	.fact-counter {
    position: relative;
    padding: 0px 0px 5px;
    color: #ffffff;
    background-color: #f0f0f0;
}
	.cnt-us p{color:#676767;}
	.cnt-us h2 a {
    color: #000000;
    transition: all 1.5s;
    text-shadow: 0px 0px 0px #000;
    font-size: 18px;
    font-weight: bold;
}
	#app_mobile{padding: 5px; height: 30px; border:solid 1px #ccc;}
	.cnt-us h2{font-size:18px; color: #00bbd4; font-weight: bold;
    padding: 10px 0px 5px 0px;}
	.inc a{cursor:default !important;}
	.btnapp {
    background: #00bbd4;
    color: #fff;
    padding: 5px 5px 4px 5px; border-radius:5px;
}
	.bg-app{padding: 40px 0px;}
	.goprd p{font-size:30px; padding-top:70px;}	 
	 .sohpl{color:#00bbd4; font-size:40px;}
	.mnsld{ height:600px;}
	.pd-mn60{padding-top:60px !important;}
	.hom-sld-frm h2 {
    padding-top: 10px;
}
	.tsml-home1 {
    height: 450px;
    background: #f0f0f0;
}
	.tsml-home {
    background-color: #f0f0f0 !important;
}
	.loagre {
    position: absolute;
    background: rgba(255, 255, 255, 0.8);
    width: 96%;
    text-align: center;
    z-index: 1;
    color: #000;
    bottom: 6px;
    /* text-shadow: 1px 1px 1px #000; */
}
	@media (min-width:320px) and (max-width:767px) 
{	.styimggr img{width:auto; height:auto;}
	.sohpl {
    font-size: 26px !important;
}
	.pd-bgo{padding:20px; 0px;}
	.mpmgg {
    width: 100% !important;
}
	.to-sty {
    padding: 13px;
}
	.mnsld{ /*****height:756px;*****/ height: 655px; margin-top: 45px;}
	.hom-sld-frm {
    padding: 10px 15px 93px 15px;
    border: solid 0px #730101;
}
	.pd-mn60{padding-top:0px !important;}
	.main-header .header-lower .logo {
    margin-bottom:0px;
}
	.fixed-header .header-lower .pos-fom {
    top: 1px;
    left:1px;
}
	.header-lower .logo {
    margin-bottom:10px;
}
	.mobile-app-img{width: 100%; padding-bottom: 30px;}
	 .sohpl{font-size:30px;}
		.bg-app{padding:10px 0px;}
	.goprd p {
    font-size: 25px;
    padding-top: 10px;
} 
	.side-toggle-menu .side-menu-btn{display: none;}
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
	.styimggr {
    overflow: hidden;
}
	.styimggr:hover img {
    transform: scale(1.2);
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
}
	.styimggr img {
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
}
	.styimggr img{width:auto; /***height:200px !important;***/}
	.mpmgg{margin:4px; padding:5px; width: 24%;}
	
	
</style>
<?php include("popup-register-form.php"); ?>
<div class="clearfix"></div>

<section class="bg-app" style="background:url('images/bg2.png') no-repeat center; background-size:cover;">
<div class="container">
<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<h2 class="sohpl">Find Your Soulmate Happily</h2>
</div>

<?php
$fetch_paid_brides=db_query("select reg_id,reg_profile_photo,reg_city,reg_age,reg_religion,reg_membership,reg_gender from tbl_registration where reg_status='Active' and reg_gender='Female' and reg_profile_photo!='' order by reg_membership desc limit 4"); 
if(mysqli_num_rows($fetch_paid_brides)>0){?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center pd-bgo">
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 goprd">
<p>BRIDE</p>
</div>

<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
  
<?php
//Fetching Brides Paid Member
 
while($fetch_brides=mysqli_fetch_array($fetch_paid_brides)){?>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mpmgg text-center styimggr">
<div class="loagre"><?=$fetch_brides['reg_city']?>, <?=$fetch_brides['reg_age']?>, <?=$fetch_brides['reg_religion']?></div>
<div class="sty-mrgd">

<a <?php if($_SESSION['userLoginId']==""){?> onClick="open_register_model()" href="javascript:void(0)" <?php }else{?> href="<?=SITE_WS_PATH?>/other-profile.php?mem=<?=$fetch_brides['reg_id']?>" <?}?>>
<!--<a href="<?=SITE_WS_PATH?>/other-profile.php?mem=<?=$fetch_brides['reg_id']?>">-->
	<cenetr><img src="<?=SITE_WS_PATH?>/upload_images/<?=$fetch_brides['reg_profile_photo']?>" class="sty-img"></cenetr></a>
</div></div> 

<?php }?> 
    
</div> </div>
<?php }?>

<?php
$fetch_paid_grooms=db_query("select reg_id,reg_profile_photo,reg_city,reg_age,reg_religion,reg_membership,reg_gender from tbl_registration where reg_status='Active' and reg_gender='Male' and reg_profile_photo!='' order by reg_membership desc limit 4"); 
if(mysqli_num_rows($fetch_paid_grooms)>0){?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center pd-bgo">
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 goprd">
<p>GROOM</p>
</div>

<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
  
<?php
//Fetching Grooms Paid Member
 
while($fetch_grooms=mysqli_fetch_array($fetch_paid_grooms)){?>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mpmgg  text-center styimggr">
<div class="loagre"><?=$fetch_grooms['reg_city']?>, <?=$fetch_grooms['reg_age']?>, <?=$fetch_grooms['reg_religion']?></div>
<div class="sty-mrgd">
<!--<a href="<?=SITE_WS_PATH?>/other-profile.php?mem=<?=$fetch_grooms['reg_id']?>">-->
<a <?php if($_SESSION['userLoginId']==""){?> onClick="open_register_model()" href="javascript:void(0)" <?php }else{?> href="<?=SITE_WS_PATH?>/other-profile.php?mem=<?=$fetch_grooms['reg_id']?>" <?}?>>
	<cenetr><img src="<?=SITE_WS_PATH?>/upload_images/<?=$fetch_grooms['reg_profile_photo']?>" class="sty-img"></cenetr></a>
</div></div> 

<?php }?> 
    
</div> </div>
<?php }?>
</div>
</div>
</section>

	<section class="fact-counter bg-app">
  <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center cnt-us">
      <div class="inc">
       <a href="#"> <img src="images/m-p.png" style="height: 60px;"></a>
       </div>
       <h2>100% Verified Profile</h2>
      <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries </p></div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center cnt-us">
      <div class="inc">
       <a href="#"> <img src="images/v-p100.png" style="height: 60px;"></a>
       </div>
       <h2>Maximum Privacy</h2>
      <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries </p></div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center cnt-us">
      <div class="inc">
      <a href="#"> <img src="images/v-p.png" style="height: 60px;"></a>
       </div>
       <h2>Verified Phone Number</h2>
       <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries </p>
      </div>
      </div>
      
    </div>
  </div>
</section>
<!---------------------->



<!--<section class="bg-app" style="background:url('images/bg2.png') no-repeat center; background-size:cover;">-->
<!--<div class="container-fluid" id="mobile-app-area">-->
<!--<div class="row">-->
<!--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">-->
<!--<img src="images/android.png" alt="Get Portal App " class="mobile-app-img">-->
<!--</div>-->

<!--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
<!--<div id="get-app-mobile">-->
<!--<h3><b>Get SweetheartMatrimony App</b></h3>-->
<!--<span>( Coming Soon )</span>-->
<!--<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>-->
<!--	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum, nibh et sagittis vehicula, mi velit dictum mi, vel vestibulum tortor nibh a felis. Ut accumsan hendrerit metus ut imperdiet. Nunc tempor sem sed ullamcorper faucibus. Ut auctor, lectus at gravida ultrices, sem dui sodales tortor, nec imperdiet mi risus vitae leo. Sed pulvinar imperdiet consectetur. Curabitur at erat massa. Quisque mauris orci, commodo nec libero in, faucibus euismod orci.</p>-->
<!--<div id="send-link-to-mobile">-->
<!--<label>+91</label>-->
<!--<input type="text" placeholder=" Enter Mobile Number" id="app_mobile">-->
<!--<button id="send_app_link_mobile" class="btnapp btn-success btn-send-app">Let Me Install</button>-->
<!--<div id="app-msg"></div>-->
<!--<p>We will send you a link, open it on your phone to download and install the App</p>-->

<!--<a><img src="images/app_link.png" id="app_download"></a>-->
<!--</div>-->

<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</section>-->

<script>
    //// TO OPEN POPUP /////////
var modal = document.getElementById('myModal');

function open_register_model(){
modal.style.display = "block";
}

//// TO CLOSE POPUP /////////
var span = document.getElementById("close_register_popup");

span.onclick = function() { 
modal.style.display = "none";
}
</script>
