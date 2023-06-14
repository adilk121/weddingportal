<?php 
ob_start();
require_once("includes/dbsmain.inc.php"); 
include("site-main-query.php");
?>
<?php

  //header
if(!empty($_SESSION['userLoginId'])){
header("location:dashboard.php");	
exit;
}
?>
<?php
# SEARCHING URL
if(isset($_REQUEST['Search_Matches'])){

$url="search_for=$search_for&search_age_from=$search_age_from&search_age_to=$search_age_to&search_marital_status=$search_marital_status&search_religion=$search_religion&search_state=$search_state";
header("location:profile-listing.php?$url");	
exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Best Life Partner, Matchmaking Portal,No.1 Marriage Portal</title>
<meta name="keywords" content="best life partner in delhi india, matchmaking portal in delhi india, matrimony portal in delhi india, no 1 matrimony portal in delhi india, best matrimonial portal in delhi india, no 1 matrimony site in delhi india, trusted matrimony portal in delhi india, online matrimony service in delhi india, marriage search portal in delhi india, better half matrimony portal in delhi india" />
<meta name="description" content="Thebestweddinghub is India’s No 1 Trusted Matrimony Portal so feel free to register & find your perfect match, multi-level profile checked & verified." />
<?php if($compDATA['admin_site_verification_code']!=''){ ?>
<meta name="google-site-verification" content="<?=$compDATA['admin_site_verification_code']?>" />
<? } ?>

<!-- Stylesheets -->
<link href="<?=SITE_WS_PATH?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style1.css" rel="stylesheet">
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
<style>
	.idfl-resp{display:block;}
	@media (min-width:320px) and (max-width:767px) 
  {.idfl-resp{display:none;}
	.main-header .header-lower {
padding: 0px 0px 12px 08px;}}
</style>
<?php if($compDATA['admin_google_analytic_code']!=''){
 echo $compDATA['admin_google_analytic_code'];
}?>

</head>
<body id="amitabh">
	
	<!-------------->
<?php include("popup-register-form.php"); ?>
<div style="position:absolute; z-index:-0; width:100%;">
<div class="page-wrapper">
<div class="preloader"></div>  
<?php include("site-header.php"); ?>

  <!--End Main Header -->
  <div class="clearfix"></div>
  <section class="mnsld"  style="background:url(images/main-slider/slider1.jpg) no-repeat center; background-size:cover;">
<div style="position:fixed; z-index:999; top:97px;" class="idfl-resp">
<?php include("index-filters.php") ?>
</div>
<?php include("vendor-registration-btn.php") ?>
	  <div class="dspfnrs">
	<?php include("index-filters-responsive.php"); ?></div>
	  
    <div class="container pd-mn60">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 hom-sld-frm">
          <h2><!---&nbsp;We bring people together.
            Love unites them...----></h2>

<div class="col-md-10 col-md-offset-1"> 
<form action="" method="post" enctype="multipart/form-data" onSubmit="return validate_search()" >
<!--<div class="col-md-10 mp0s">
<input type="text" placeholder="Search Any...." class="hm-form-sty1d">
</div>
<div class="col-md-2 mp0s">
<button type="submit" class="hm-form-sty1d sr-btn1d" style="cursor:default"><i class="fa fa-search"></i></button>
</div>-->
<div class="clearfix"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mp_bt20">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 frm-cnt1 mps_0">
Looking For
</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mps_0">
<select class="sle-opt" name="search_for" id="search_for" >
<option value="0">Select Looking For</option>
<option value="Bride">Bride</option>
<option value="Groom">Groom</option>

</select>
</div>
</div>
<div class="clearfix"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_bt20">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 frm-cnt1 mps_0">
Age
</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mps_0">
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 mps_0">
<select class="sle-opt" name="search_age_from" id="search_age_from" >
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
</select>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mps_0 to-sty">
to
</div>
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 mps_0">
<select class="sle-opt"  name="search_age_to" id="search_age_to"  >
<option>50</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
</select>
</div>
</div>
</div>
<div class="clearfix"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_bt20">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  frm-cnt1 mps_0">
Marital Status
</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12  mps_0">
<select class="sle-opt" name="search_marital_status" id="search_marital_status"  >
<?php
$marital_status=db_query("select * from tbl_marital where m_status='Active'");
while($marital=mysqli_fetch_array($marital_status)){?>
<option value="<?=$marital['m_title']?>"><?=$marital['m_title']?></option>    
<?php }?>    
</select>
</div>
</div>
<div class="clearfix"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mp_bt20">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  frm-cnt1 mps_0">
Religion
</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12  mps_0">
<select class="sle-opt" name="search_religion" id="search_religion">
<option value="0">Select Religion</option>
<?php
$sql="SELECT * FROM tbl_community WHERE c_status='Active' AND c_parent_id='0'";
$dataCommunity=db_query($sql);
$countCommunity=mysqli_num_rows($dataCommunity);
if($countCommunity){
while($recCommunity=mysqli_fetch_array($dataCommunity)){	
?>
<option value="<?=$recCommunity['c_title']?>" >
<?=$recCommunity['c_title']?></option>
<?php
}
}
?>

</select>
</div>
</div>
<div class="clearfix"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mp_bt20">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  frm-cnt1 mps_0">
State
</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12  mps_0">
<select class="sle-opt" name="search_state" id="search_state" >
<option value="0" >Select State</option>
<?php
$sql="SELECT * FROM tbl_search_state WHERE m_status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
while($recMarital=mysqli_fetch_array($dataMarital)){	
?>
<option><?=$recMarital['m_title']?></option>
<?php
}
}
?>
</select>
</div>
</div>
<div class="clearfix"></div>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 "></div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
<input type="submit" value="Search" name="Search_Matches" class="sehbtn">
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-right cld-bnr"><!--<a href="#">Search by Profile ID</a> | --><a href="profile-listing.php">Other Search Option</a></div>
</form>
</div>

</div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
	  <!----------->
	<div>
		<?php include("pr1.php") ?> 
	</div>
	<!------------>
  
   <div class="clearfix"></div>
   
<?php
$sql="SELECT * FROM tbl_testimonial WHERE 1 AND test_status='Active'";
$dataTest=db_query($sql);
$countTest=mysqli_num_rows($dataTest);
$tc=0;
if($countTest){
?>   
   <section class="tsml-home1">
    <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
          <!-- Carousel Slides / Quotes -->
          <div class="carousel-inner text-center">
            <!-- Quote 1 -->
<?php 
while($recTest=mysqli_fetch_array($dataTest)){ 
$tc++;
?>            
            <div class="item <?php if($tc==1){?> active <?php }?>">
              <blockquote class="tsml-home">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <p><?=$recTest['test_description']?></p>
                    <small><?=$recTest['test_given_by']?><?php if($recTest['test_comp_name']!=""){echo ", ".$recTest['test_comp_name']; }?></small> </div>
                </div>
              </blockquote>
            </div>
<?php }?>            

</div>

<?php
$sql_img="SELECT * FROM tbl_testimonial WHERE 1 AND test_status='Active'";
$dataTestImg=db_query($sql_img);
$countTestImg=mysqli_num_rows($dataTestImg);
$tc_img=0;
if($countTestImg){
?>  
          <!-- Bottom Carousel Indicators -->
          <ol class="carousel-indicators">
<?php 
while($recTestImg=mysqli_fetch_array($dataTestImg)){ 
?>
<li data-target="#quote-carousel" data-slide-to="<?=$tc_img?>" <?php if($tc_img==0){?> class="active" <?php }?>><img class="img-responsive " src="<?=SITE_WS_PATH?>/test_images/<?=$recTestImg['test_image_name']?>" alt="<?=$recTestImg['test_given_by']?>"> </li>
<?php 
$tc_img++;	
}?>
</ol>
<?php }?>

<!-- Carousel Buttons Next/Prev -->
<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a> <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a> </div>
</div>
</div>
</div>
</section>
<?php }?>  
<?php include("site-footer.php"); ?>
<!-------register----->
<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>

<script>
$(document).ready(function (e) {
	$("#btnForgetPass").on('click',(function(e) {
		
var loginCre=$("#login_credential").val();
if(loginCre!=""){

		e.preventDefault();
		$.ajax({
        	url:"send-password-reset-link.php?loginCre="+loginCre,
			type: "GET",
			contentType: false,
    	    processData:false,
			success: function(data){

if(data==1){
$("#pass-sent").show("fast")

setTimeout(function(){
$("#pass-sent").hide("fast")	
},3000);

}else{
   $("#pass-notsent").show("fast")

setTimeout(function(){
$("#pass-notsent").hide("fast")	
},3000); 
}
			},
		  	error: function() 
	    	{

	    	} 	        
	   });
	   
	}else{
	    alert("Please enter your registered email");
	    $("#login_credential").focus();
	}  
	}));
});
</script>


<script>
$(document).ready(function (e) {

	$("form#regd-short-form").on('submit',(function(eve) {
		
		eve.preventDefault();
    var ev = document.getElementById("join_for");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
            alert("Please choose the option you are making for !");
      document.getElementById("join_for").focus();
      return false;
}
    
var mobno=trim(document.getElementById('join_mobile').value);
if(trim(document.getElementById('join_mobile').value)==""){
  alert("Enter your mobile no.!");
  document.getElementById('join_mobile').focus();
  return false;
}
if(isNaN(document.getElementById('join_mobile').value)){
  alert("Mobile no. should be no.!");
  document.getElementById('join_mobile').focus();
  return false;
}
if(mobno.length < 10){
    alert("Mobile no. should be 10 digit long !");
  document.getElementById('join_mobile').focus();
  return false;
}

var re = /[0-9]/;
var re2 = /[a-z]/;
var re3 = /[A-Z]/;
var email=trim(document.getElementById('join_email').value);
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email=='')
  {
    alert('Please Enter Email Id');
    document.getElementById('join_email').focus();
    return false;
  }else if(!email.match(mailformat)){
alert("You have entered an invalid email address!");
document.getElementById('join_email').focus();
return false;
}

    
var pass=document.getElementById('join_pass');  
if(pass.value=='')
{
  alert("Enter your password !");
  pass.focus();
  return false;
 }
else if(pass.value.length<8){
  alert("Password must be in 8 character !");
  pass.focus();
  return false;
}
 
else if(!re.test(pass.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        pass.focus();
        return false;
      }

else if(!re2.test(pass.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        pass.focus();
        return false;
      }

else if(!re3.test(pass.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        pass.focus();
        return false;
      }

		$.ajax({
        	url: "short-register.php",			
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    processData:false,
			success: function(data){
				
				
if(data>0){
window.location="<?=SITE_WS_PATH?>/register.php";
}else if(data=="no"){
alert("This email id is already exist.");
}

			},
		  	error: function() 
	    	{
	    	} 	        
	   });



	   
	   
	   
	   
	   
	}));
	
	
});
</script>

<script src="<?=SITE_WS_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_WS_PATH?>/js/script.js"></script>
<script src="<?=SITE_WS_PATH?>/js/menuzord.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jPushMenu.js"></script>
<script src="<?=SITE_WS_PATH?>/js/owl.js"></script>
<!-- validate -->
<script src="<?=SITE_WS_PATH?>/js/customcollection.js"></script>
<script src="<?=SITE_WS_PATH?>/js/custom1.js"></script>
<!-------------switch--->
<script src="<?=SITE_WS_PATH?>/js/jquery-min-form.js"></script>
<script src="<?=SITE_WS_PATH?>/js/style-customizer-form.js"></script>
--------------social-----
<script src="<?=SITE_WS_PATH?>/js/jquery.min.js"></script>
<script  src="<?=SITE_WS_PATH?>/js/index.js"></script>



<!----------change-pws-------->
<?php /*?><script>
var modal = document.getElementById('myModal');
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
</script><?php */?>









<div class="side-toggle-menu visible-xs hidden-md"> <a class="side-menu-btn toggle-menu menu-right"><i class="fa fa-bars"></i></a>
  <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right"> <a class="side-menu-btn-close pull-right"><i class="fa fa-close"></i></a> <a class="logo" href="index.html"><img src="images/logo-footer.png" alt="" title=""  style="padding:5px; width:195px;"></a>
    <ul class="nav-stacked">
      <li class="sidemenu-dropdown"> <a>Matrial Status<span class="caret"></span></a>
        <ul class="sidemenu-dropdown-active">
<li><a href="#"> All</a></li>
 <li><a href="#">Never Married</a></li>
 <li><a href="#">Divorced</a></li>
 <li><a href="#">Widowed</a></li>
        </ul>
      </li>
      
      <li class="sidemenu-dropdown"> <a>Mother tongue<span class="caret"></span></a>
        <ul class="sidemenu-dropdown-active">
 <li><a href="#">Hindi</a></li>
                    <li><a href="#"> Marathi</a></li>
                    <li><a href="#">UP</a></li>
                    <li><a href="#">Punjabi</a></li>
                    <li><a href="#">Telugu</a></li>
                    <li><a href="#">Bengali</a></li>
                    <li><a href="#">Tamil</a></li>
                    <li><a href="#">Gujarati</a></li>
                    <li><a href="#">Malayalam</a></li>
                    <li><a href="#">Kannada</a></li>
                    <li><a href="#">Bihari</a></li>
                    <li><a href="#">Rajasthani</a></li>
                    <li><a href="#">Oriya</a></li>
                    <li><a href="#">Konkani</a></li>
                    <li><a href="#">Himachali</a></li>
                    <li><a href="#">Haryanvi</a></li>
                    <li><a href="#">Assamese</a></li>
                    <li><a href="#">Kashmiri</a></li>
                    <li><a href="#"> Hindi</a></li>
        </ul>
      </li>
      <li class="sidemenu-dropdown"> <a>State<span class="caret"></span></a>
        <ul class="sidemenu-dropdown-active">
  <li><a href="#"> Maharashtra</a></li>
   <li><a href="#"> Uttar Pradesh</a></li>
    <li><a href="#">Karnataka</a></li>
    <li><a href="#">Andhra Pradesh</a></li>
   <li><a href="#"> Tamil Nadu</a></li>
   <li><a href="#"> West Bengal</a></li>
   <li><a href="#"> Madhya Pradesh</a></li>
   <li><a href="#"> Gujarat</a></li>
   <li><a href="#"> Haryana</a></li>
  <li><a href="#">  Bihar</a></li>
    <li><a href="#">Kerala</a></li>
    <li><a href="#">Rajasthan</a></li>
    <li><a href="#">Punjab</a></li>
   <li><a href="#"> Orissa</a></li>
    <li><a href="#">Assam</a></li>
   <li><a href="#"> Jammu & Kashmir</a></li>
   <li><a href="#"> Goa</a></li>
   <li><a href="#"> Himachal Pradesh</a></li>
    <li><a href="#">Arunachal Pradesh</a></li>
    <li><a href="#">Mizoram</a></li>
   <li><a href="#"> Pondicherry</a></li>
    <li><a href="#">Sikkim</a></li>
   <li><a href="#"> Tripura</a></li>
   <li><a href="#"> Jharkhand</a></li>
   <li><a href="#"> Chhattisgarh</a></li>
    <li><a href="#">Uttarakhand</a></li>
        </ul>
      </li>
      <li class="sidemenu-dropdown"> <a>City<span class="caret"></span></a>
        <ul class="sidemenu-dropdown-active">
 <li><a href="#">Hindi</a></li>
                   <li><a href="#">New Delhi</a></li>
    <li><a href="#">Mumbai</a></li>
    <li><a href="#">Bangalore</a></li>
    <li><a href="#">Pune</a></li>
    <li><a href="#">Hyderabad</a></li>
   <li><a href="#"> Kolkata</a></li>
    <li><a href="#">Chennai</a></li>
   <li><a href="#"> Lucknow</a></li>
    <li><a href="#">Ahmedabad</a></li>
    <li><a href="#">Chandigarh</a></li>
    <li><a href="#">Nagpur</a></li>
    <li><a href="#">Jaipur</a></li>
    <li><a href="#">Gurgaon</a></li>
    <li><a href="#">Bhopal</a></li>
   <li><a href="#"> Noida</a></li>
    <li><a href="#">Indore</a></li>
    <li><a href="#">Patna</a></li>
    <li><a href="#">Bhubaneshwar</a></li>
    <li><a href="#">Ghaziabad</a></li>
    <li><a href="#">Kanpur</a></li>
    <li><a href="#">Faridabad</a></li>
    <li><a href="#">Ludhiana</a></li>
    <li><a href="#">Thane</a></li>
    <li><a href="#">Alabama</a></li>
   <li><a href="#"> Arizona</a></li>
    <li><a href="#">Arkansas</a></li>
    <li><a href="#">California</a></li>
    <li><a href="#">Colorado</a></li>
    <li><a href="#">Connecticut</a></li>
   <li><a href="#"> Delaware</a></li>
   <li><a href="#"> District Columbia</a></li>
    <li><a href="#">Florida</a></li>
    <li><a href="#">Indiana</a></li>
   <li><a href="#"> Iowa</a></li>
    <li><a href="#">Kansas</a></li>
    <li><a href="#">Kentucky</a></li>
    <li><a href="#">Massachusetts</a></li>
   <li><a href="#"> Michigan</a></li>
    <li><a href="#">Minnesota</a></li>
    <li><a href="#">Mississippi</a></li>
   <li><a href="#"> New Jersey</a></li>
   <li><a href="#">New York</a></li>
    <li><a href="#">North Carolina</a></li>
    <li><a href="#">North Dakota</a></li>
   <li><a href="#"> Ohio</a></li>
    <li><a href="#">Oklahoma</a></li>
    <li><a href="#">Oregon</a></li>
    <li><a href="#">Pennsylvania</a></li>
    <li><a href="#">South Carolina</a></li>
    <li><a href="#">Tennessee</a></li>
   <li><a href="#"> Texas</a></li>
   <li><a href="#"> Virginia</a></li>
   <li><a href="#"> Washington</a></li>
   <li><a href="#"> Mangalorean</a></li>

        </ul>
      </li>
      <li class="sidemenu-dropdown"> <a>Profession<span class="caret"></span></a>
        <ul class="sidemenu-dropdown-active">
  <li><a href="#">IT Software</a></li>
    <li><a href="#">Teacher</a></li>
    <li><a href="#">CA/Accountant</a></li>
    <li><a href="#">Businessman</a></li>
    <li><a href="#">Doctors/Nurse</a></li>
    <li><a href="#">Govt. Services</a></li>
    <li><a href="#">Lawyers</a></li>
    <li><a href="#">Defence</a></li>
   <li><a href="#"> IAS</a></li>
        </ul>
      </li>
      <li class="sidemenu-dropdown"> <a>Country<span class="caret"></span></a>
        <ul class="sidemenu-dropdown-active">
  <li><a href="#">Afghanistan</a></li>
                  <li><a href="#">Albania</a></li>
                   <li><a href="#">Algeria</a></li>
                   <li><a href="#">American Samoa</a></li>
                   <li><a href="#">Andorra</a></li>
                  <li><a href="#">Angola</a></li>
                  <li><a href="#">Anguilla</a></li>
                  <li><a href="#">Antarctica</a></li>
                  <li><a href="#">Antigua and Barbuda</a></li>
                   <li><a href="#">Argentina</a></li>
                  <li><a href="#">Armenia</a></li>
                  <li><a href="#">Aruba</a></li>
                  <li><a href="#">Australia</a></li>
                   <li><a href="#">Austria</a></li>
                  <li><a href="#">Azerbaijan</a></li>
                  <li><a href="#">Bahamas</a></li>
                  <li><a href="#">Bahrain</a></li>

        </ul>
      </li>
      <li class="sidemenu-dropdown"> <a>Profile Created By<span class="caret"></span></a>
        <ul class="sidemenu-dropdown-active">
  <li><a href="#">Afghanistan</a></li>
<li><a href="#">Self</a></li>
<li><a href="#"> Siblings</a></li>
<li><a href="#"> parents</a></li>
 <li><a href="#">Friends</a></li>
 <li><a href="#">Relatives</a></li>
 <li><a href="#">Other</a></li>
        </ul>
      </li>

    </ul>
  </nav>
</div>

<script>
function trim_input(str){
 return str.replace(/^\s*|\s*$/g,'');
}

function validate_search(){

if(trim(document.getElementById('search_for').value)==0){    
alert("Please specify looking for !");
document.getElementById('search_for').focus();
return false;
}


if(trim(document.getElementById('search_age_from').value)==0){    
alert("Please specify starting age !");
document.getElementById('search_age_from').focus();
return false;
}

if(trim(document.getElementById('search_age_to').value)==0){    
alert("Please specify maximum age !");
document.getElementById('search_age_to').focus();
return false;
}

if(trim(document.getElementById('search_marital_status').value)==0){    
alert("Please specify marital status !");
document.getElementById('search_marital_status').focus();
return false;
}


if(trim(document.getElementById('search_religion').value)==0){    
alert("Please specify religion !");
document.getElementById('search_religion').focus();
return false;
}

	

//search_religion
//search_state	
	
}
</script>
