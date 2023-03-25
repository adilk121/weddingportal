<?php include 'socialmedia.php';?> 
  <div class="clearfix"></div>
  <footer class="main-footer">
    <div class="footer-upper">
      <div class="go-up">
        <div class="curve scroll-to-target" data-target="#main-header"><span class="icon fa fa-arrow-up"></span></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center brd-bom"><?=db_scalar("SELECT site_pages_description FROM tbl_site_pages WHERE  site_pages_link='Footer Text' AND site_pages_status='Active'")?>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 column">
            <div class="footer-widget links">
              <h2>More</h2>
              <ul>
                <li><a href="profile-listing.php">Hindu Matrimony</a></li>
                <li><a href="profile-listing.php">Sikh Matrimony</a></li>
                <!--<li><a href="#">Christian Matrimony</a></li>-->
                <!--<li><a href="#">Jain Matrimony</a></li>-->
                <!--<li><a href="#">Paris Matrimony</a></li>-->
                <!--<li><a href="#">Buddhist Matrimony</a></li>-->
                
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 column">
            <div class="footer-widget links">
              <h2>Need Help?</h2>
              <ul>
                <li><a href="contact-us.php">Contact Us</a></li>
                <li><a href="feedback.php">Feedback</a></li>
               <!-- <li><a href="javsscript:void(0);" onClick="javascript:document.getElementById('loginID').focus();">Login</a></li>-->
                
                
                 
                
                
                <li class="iq-customizer1"><a href="#" class="opener1">Sign Up</a></li>
                <li><a href="faqs.php">Faqs</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 column">
            <div class="footer-widget links">
              <h2>Terms Of Use</h2>
              <ul>
                <li><a href="policy.php">Privacy Policy</a></li>
                <li><a href="terms-and-conditions.php">Terms & Conditions</a></li>
                <li><a href="about-us.php">About Us</a></li>
                
              </ul>
            </div>
            <div class="footer-widget links appd">
              <h2>Download Mobile App</h2>
                <a target="_blank" href="https://play.google.com/store"><img src="images/Download-Mobile-App1.png"></a>
               <a target="_blank" href="https://www.apple.com/in/ios/app-store/"><img src="images/Download-Mobile-App2.png"></a>
            </div>
            
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-12 column">
            <div class="footer-widget links">
            
              <h2>Follow Us</h2>
               <div class="social-links"> 
               

<?php if($compDATA['admin_facebook_link']!=''){ ?>
<a  title="Connect us on Facebook" target="_blank" href="<?=$compDATA['admin_facebook_link']?>"  rel="nofollow" class="icon fa fa-facebook-f fb-sty"></a>
<? } ?>


<?php if($compDATA['admin_twitter_link']!=''){ ?>
<a title="Connect us on Twitter" target="_blank" href="<?=$compDATA['admin_twitter_link']?>" class="icon fa fa-twitter tw-sty"></a>
<? } ?>

<?php if($compDATA['admin_linkedin_link']!=''){ ?>
<a title="Connect us on Linkedin" target="_blank" href="<?=$compDATA['admin_linkedin_link']?>" class="icon fa fa-linkedin lnk-sty"></a>
<?php }?>

<?php if($compDATA['admin_instagram_link']!=''){ ?>
<a title="Connect us on Instagram" target="_blank" href="<?=$compDATA['admin_instagram_link']?>" class="icon fa fa-instagram ins-sty"></a>
<?php }?>

<?php if($compDATA['admin_pinterest_link']!=''){ ?>
<a title="Connect us on Pinterest" target="_blank" href="<?=$compDATA['admin_pinterest_link']?>" class="icon fa fa-pinterest pin-sty"></a>
<?php }?>

<?php if($compDATA['admin_youtube_link']!=''){ ?>
<a title="Connect us on Youtube" target="_blank" href="<?=$compDATA['admin_youtube_link']?>" class="icon fa fa-youtube you-sty"></a>
<?php }?>

               
               
               
               <?php /*?><a href="#" class="icon fa fa-facebook-f fb-sty"></a>
                <a href="#" class="icon fa fa-twitter tw-sty"></a> 
                <!--<a href="#" class="icon fa fa-pinterest tw-pi"></a>--> 
                <a href="#" class="icon fa fa-google-plus gp-sty"></a> 
                 <a href="#" class="icon fa fa-linkedin lnk-sty"></a> <?php */?>
                <!--<a href="#" class="icon fa fa-youtube-play"></a> 
                <a href="#" class="icon fa fa-envelope"></a>--> </div>
                <div class="appd">
                 <h2>Call Us Anytime</h2>
             
                <p class="info"><i class="fa fa-mobile ft-sz"></i> <a href="tel:<?=$compDATA['admin_mobile']?>" class="emld"> <?=$compDATA['admin_mobile']?></a></p>
                </div>
                <div class="appd">
                 <h2>Email Us At</h2>
             
                <p class="info"><i class="fa fa-envelope"></i> <a href="mailto:<?=$compDATA['admin_email']?>" class="emld"><?=$compDATA['admin_email']?></a></p>
                </div>
             
            </div>
          
          </div>
        </div>
        
      </div>
    </div>
    <div class="footer-bottom">
      <div class="auto-container">
        <div class="copyright">All rights reserved &copy; 2017-<?=date("Y")?> thebestweddinghub
 &ensp;<span class="fa fa-heart" style="color:#fff;"></span>&ensp; Designed by : <a href="http://www.webkeyindia.com/" target="_blank">WebKeyIndia.Com - Best SEO Company In India</a></div>
      </div>
    </div>
  </footer>
</div>
<!-- Side Menu- responsive---->

<script  src="js/custom-validations.js"></script>
<?php if($_SESSION['userLoginId']==""){?>
<div tabindex="-1" class="iq-customizer closed dspsty" id="sildeRegdBox" >
  <div class="buy-button"> 
  <a class="opener" href="#">Register Free</a> 
  </div>
  <div class="clearfix content-chooser amitabh">
    <h3 class="reg-hdg">Welcome! Find Your Perfect Matches Here.</h3>
  
<form action="" method="post" name="regd-short-form" id="regd-short-form" enctype="multipart/form-data" >
<div class="col-md-12 frmst0d">
<p><span class="font-red">*</span>Create Profile for</p>
<select class="sgn-frm" name="join_for" id="join_for"  style="border:solid 1px #8c1919;">
<option value="0"> Select </option>
<option value="Self">Self</option>
<option value="Son">Son</option>
<option value="Daughter">Daughter</option>
<option value="Brother">Brother</option>
<option value="Sister">Sister</option>
<option value="Friend">Friend</option>
<option value="Relative">Relative</option>          
</select>
</div>
<div class="col-md-12 frmst0d">
<p><span class="font-red">*</span>Mobile No.</p>
<input type="text" placeholder="Mobile No." name="join_mobile" id="join_mobile" class="sgn-frm" maxlength="10">
</div>
<div class="col-md-12 frmst0d">
<p><span class="font-red">*</span>Enter your email id</p>
<input type="text" placeholder="Email Id" autocomplete="off" name="join_email" id="join_email" class="sgn-frm">
</div>
<div class="col-md-12 frmst0d">
<p><span class="font-red">*</span>Create a Password</p>
<input type="password" placeholder="Password" name="join_pass" id="join_pass" class="sgn-frm">
</div>

<div class="col-md-12 frmst0d">

<button type="submit" placeholder="Continue" class="btnsibg" id="regd-entry-point"  >Continue</button>
</div>
</form>
  </div>
</div>
<?php }?>

</div>
<style>

#myBtn {
  display: none;
  position: fixed;
  bottom: 140px;
  right: 27px;
  z-index: 99;
  font-size: 20px;
  border: none;
  outline: none;
  background-color: #00bbd4;
  color: white;
  cursor: pointer;
  padding-top:0px;
  border-radius: 100%; width:45px; height:45px;
}

#myBtn:hover {
  background-color: #555;
}
		@media (min-width:320px) and (max-width:767px) 
{
#myBtn {
bottom:40px;
right:15px;}}
</style>
<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>




<!---------------->
<style>
	.wp-styd {
    position: fixed;
    z-index: 999;
    bottom:20px;
    left: 20px;
	display:block;
}
	.wp-styd img{display: block;}
	.wp-styd1 {
    position: fixed;
    z-index: 999;
    bottom:15px;
    right: 20px;
	display:block;
	height:40px;
}
	.wp-styd1 img{display: block;}
	
	@media (min-width:320px) and (max-width:767px) 
{
	.wp-styd img{display:none;}
	.wp-styd1 img{display:none;}
	.wtys{display: none;}
	.wp-styd{display:none;}
	.footer-bg{background-color:#dedddd;}
	.footer-bg p{color:#000;}
	.menu-list-items{background-color: #fff !important;}
	.nopadding{text-align:center;}
	.footer-bottom p {
    margin-bottom: 0;
    padding: 0px 0px 23px 0px !important;
}
/*#footer { padding-bottom: 50px !important;
padding-top: 30px !important;
    
}*/
.dsp{display:none;}
	
}
	.dsp-stys1{display: none;}
	.dsp-stys{display: block;}
	@media (min-width:320px) and (max-width:767px) 
{
		.dsp-stys{display: none;}
	.dsp-stys1{display: block;}
}
.float{
	position:fixed;
	width:47px;
	height:49px;
	bottom:80px;
	right:22px;
	background-color:#00Aff0;
	color:#FFF;
	border-radius:100px;
	text-align:center;
  font-size:30px;

  z-index:100;
}

.my-float{
	margin-top:9px;
	color:white;
}
.my-float:hover{
/*	color:#673AB7;*/
}
.float:hover{
/*	color:#673AB7;*/
}
</style>

<?php
if($compDATA['admin_skype_option']=="Yes")
{?>
<a href="https://web.skype.com/" class="float dsp-stys" target="_blank" style="bottom:80px;right:22x;">
<i class="fa fa-skype my-float" ></i>
</a>
<?}?>
<div class="">
<?php
if($compDATA['admin_skype_option']=="Yes")
{?>
<a href="https://web.skype.com/" class="float dsp-stys1" target="_blank" style="float: left !important; left:12px; bottom: 36px;">
<i class="fa fa-skype my-float" ></i>
</a>
<?}?>
</div>



<?php
if($compDATA['admin_whatsapp_option']=="Yes")
{?>
<div class="wp-styd">
    <?php if($compDATA['admin_whatsapp_number']=="" || empty($compDATA['admin_whatsapp_number'])){ ?>
    <a href="#" ><img src="images/wp1.png" style="width:52px;"></a>
    <?}else{?>
	<a href="https://wa.me/+91<?=$compDATA['admin_whatsapp_number']?>" target="_blank"><img src="images/wp1.png" style="width:52px;"></a>
	<?}?>
	</div>
	<?}?>
	
	
<?php
if($compDATA['admin_callback_option']=="Yes")
{?>
<div class="hidden-xs">
<?php include 'call.php' ?>
</div>
<?}?>

<div class="clearfix"></div>
<?php
if($compDATA['admin_live_chat_code']!="")
{?>
<div class="hidden-xs">
<?php include 'chatsty.php' ?>
</div>
<?}?>
	
<div class="visible-xs">
<?php include 'test31.php' ?>
</div>
    


</body>
</html>
<script>
function PopupWindowCenter(URL, title,w,h){
var left = (screen.width/2)-(w/2);
var top = '20px';
var newWin = window.open (URL, title, 'toolbar=no, location=no,directories=no, status=no, menubar=no, scrollbars=no, resizable=no,copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
</script>

<script>

$(document).mouseup(function(e) 
{
    var container = $("#sildeRegdBox");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        //container.hide();
		
		$(".iq-customizer.opened").removeClass("opened");
            $(".iq-customizer").addClass("closed");
            style_switcher.animate({
                "right": '-' + panelWidth

	
});
}

});
</script>

<script>
//// TO OPEN POPUP /////////
var modal2 = document.getElementById('myModalPassword');

function open_password_model(){
modal2.style.display = "block";
}

//// TO CLOSE POPUP /////////
var span2 = document.getElementById("close_password_popup");

span2.onclick = function() { 
modal2.style.display = "none";
}
</script>




<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


<script>
    function setFavicons(favImg)
    {
        let headTitle=document.querySelector('head');
        let setFavicon=document.createElement('link');
        setFavicon.setAttribute('rel','shortcut icon');
        setFavicon.setAttribute('href',favImg);
        headTitle.appendChild(setFavicon);
    }
    
    setFavicons('images/favicon.png');
    
</script>
