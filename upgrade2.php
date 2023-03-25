<?php require_once("includes/dbsmain.inc.php");?>
<?php include("site-main-query.php") ?>
<!doctype html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>ApniMatrimony</title>
<meta name="robots" content="index, follow" />
<!-- Stylesheets -->
<link href="<?=SITE_WS_PATH?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style1.css" rel="stylesheet">


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
<!--------pie-chart-----skill------>
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/progress-circle.css">
<!----------------->
	 <link rel="stylesheet" href="css/lilo-accordionupg.min.css">
  <!---<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">----->
</head>
<!--------->
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
 
	<!--------------==================----------->
	<style>
.accordionupg {
  background-color: #fff;
  color: #b10a0a;
  cursor: pointer;
  padding:30px 18px !important;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 28px;
  transition: 0.4s; margin-bottom:0px; 
 border-left-radius:5px !important;
}

.active, .accordionupg:hover {
  /***background-color: #ccc;*****/
}

.accordionupg:after {
 
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}
.active:after {
    content: "\2212";
	display: none;
}


.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    top: -10px;
    transition: max-height 0.2s ease-out;
   
    width: 98%;
    margin: auto; 
}
		.set-br{border:solid 1px #ccc; width:60%; height: 40px; border-radius:5px; font-size:20px; }
		
		.bnft li{list-style-type:square; padding:0px; font-size:12px;}
		  .bnft{margin:0px; padding:0px;}
		.bnft{padding-bottom:20px;}
		.dv-sty h3{font-size:18px; padding:5px 0px; color:#03c1ed;
    font-weight: bold; margin-top:0px;}
		.dv-sty{border-top:solid 1px;}
		.accordionupg{font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";}
		.set-br{text-align: center !important;}
		
</style>
	<!------------------->
	<section style="padding:50px 0px; background-color:#eee">
		  <div class="container">
			   <div class="row">
				    <div class="col-md-12" style="border:solid 1px #ccc; margin-bottom:25px; background-color:#fff; border-radius:5px;">
						<div style="position:absolute; left:25%; width:860px; text-center; background-color:#fff; height:83px!important;; border-left-radius:5px !important;">
							<div style="margin-top:25px;">
					    <div class="col-md-4 text-center">
						<select class="set-br">
  <option value="">Select Months</option>
  <option value="">3 Months</option>
  <option value="">4 Months</option>
  <option value="">5 Months</option>
  <option value="">6 Months</option>
</select></div>
							<div class="col-md-5 text-center"><p style="color:#000; font-size:25px !important;"><i class="fa fa-rupee"></i> 900/- &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-rupee"></i> <del> 1000/-</del> </p></div>
							<div class="col-md-3 text-center"><a href="#" clas="btn-mpy" style="background-color:#03c1ed!important; color:#000!important; padding:10px 5px; display:block; border-radius:5px; font-size:20px;">Make Payment</a></div>
							</div></div>
						<div class="clearfix"></div>
						<button class="accordionupg" style="width:25%;"><input type="radio"> Basic Packages</button>
						
				   
<div class="panel">
  <p><div class="col-md-12 dv-sty">
	  <h3>Benefits</h3>
	  <div class="col-md-4">
	   <ul class=bnft>
		     <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
		   <li>Lorem Ipsum has been the industry's standard dummy text ever since the</li>
		  <li> when an unknown printer took a galley of </li>
	   </ul>
		  </div>
	  <div class="col-md-4">
	  <ul class=bnft>
		     <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
		   <li>Lorem Ipsum has been the industry's standard dummy text ever since the</li>
		    <li> when an unknown printer took a galley of </li>
	   </ul>
		  </div>
		  <div class="col-md-4">
	   <ul class=bnft>
		     <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
		   <li>Lorem Ipsum has been the industry's standard dummy text ever since the</li>
		   <li> when an unknown printer took a galley of </li>
	   </ul>
		  </div>
	  </div></p>
</div>
</div>
			  <div class="col-md-12" style="border:solid 1px #ccc; margin-bottom:25px; background-color:#fff; border-radius:5px;">
						<div style="position:absolute; left:25%; width:860px; text-center; background-color:#fff; height:83px!important;; border-left-radius:5px !important;">
							<div style="margin-top:25px;">
					    <div class="col-md-4 text-center">
						<select class="set-br">
  <option value="">Select Months</option>
  <option value="">3 Months</option>
  <option value="">4 Months</option>
  <option value="">5 Months</option>
  <option value="">6 Months</option>
</select></div>
							<div class="col-md-5 text-center"><p style="color:#000; font-size:25px !important;"><i class="fa fa-rupee"></i> 900/- &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-rupee"></i> <del> 1000/-</del> </p></div>
							<div class="col-md-3 text-center"><a href="#" clas="btn-mpy" style="background-color:#03c1ed!important; color:#000!important; padding:10px 5px; display:block; border-radius:5px; font-size:20px;">Make Payment</a></div>
							</div></div>
						<div class="clearfix"></div>
						<button class="accordionupg" style="width:25%;"><input type="radio"> Delight Packages</button>
						
				   
<div class="panel">
  <p><div class="col-md-12 dv-sty">
	  <h3>Benefits</h3>
	  <div class="col-md-4">
	   <ul class=bnft>
		     <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
		   <li>Lorem Ipsum has been the industry's standard dummy text ever since the</li>
		  <li> when an unknown printer took a galley of </li>
	   </ul>
		  </div>
	  <div class="col-md-4">
	  <ul class=bnft>
		     <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
		   <li>Lorem Ipsum has been the industry's standard dummy text ever since the</li>
		    <li> when an unknown printer took a galley of </li>
	   </ul>
		  </div>
		  <div class="col-md-4">
	   <ul class=bnft>
		     <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
		   <li>Lorem Ipsum has been the industry's standard dummy text ever since the</li>
		   <li> when an unknown printer took a galley of </li>
	   </ul>
		  </div>
	  </div></p>
</div>
</div>
		<div class="col-md-12" style="border:solid 1px #ccc; margin-bottom:25px; background-color:#fff; border-radius:5px;">
						<div style="position:absolute; left:25%; width:860px; text-center; background-color:#fff; height:83px!important;; border-left-radius:5px !important;">
							<div style="margin-top:25px;">
					    <div class="col-md-4 text-center">
						<select class="set-br">
  <option value="">Select Months</option>
  <option value="">3 Months</option>
  <option value="">4 Months</option>
  <option value="">5 Months</option>
  <option value="">6 Months</option>
</select></div>
							<div class="col-md-5 text-center"><p style="color:#000; font-size:25px !important;"><i class="fa fa-rupee"></i> 900/- &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-rupee"></i> <del> 1000/-</del> </p></div>
							<div class="col-md-3 text-center"><a href="#" clas="btn-mpy" style="background-color:#03c1ed!important; color:#000!important; padding:10px 5px; display:block; border-radius:5px; font-size:20px;">Make Payment</a></div>
							</div></div>
						<div class="clearfix"></div>
						<button class="accordionupg" style="width:25%;"><input type="radio"> Delight Silver</button>
						
				   
<div class="panel">
  <p><div class="col-md-12 dv-sty">
	  <h3>Benefits</h3>
	  <div class="col-md-4">
	   <ul class=bnft>
		     <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
		   <li>Lorem Ipsum has been the industry's standard dummy text ever since the</li>
		  <li> when an unknown printer took a galley of </li>
	   </ul>
		  </div>
	  <div class="col-md-4">
	  <ul class=bnft>
		     <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
		   <li>Lorem Ipsum has been the industry's standard dummy text ever since the</li>
		    <li> when an unknown printer took a galley of </li>
	   </ul>
		  </div>
		  <div class="col-md-4">
	   <ul class=bnft>
		     <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
		   <li>Lorem Ipsum has been the industry's standard dummy text ever since the</li>
		   <li> when an unknown printer took a galley of </li>
	   </ul>
		  </div>
	  </div></p>
</div>
</div>
		
				   </div>
			  </div>
		</div>
	</section>	


<script>
var acc = document.getElementsByClassName("accordionupg");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
	<!-------------------->

  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="js/jquery.lilo.accordionupg.min.js"></script>
  <script>
    $('.your-class').liloaccordionupg({
  onlyOneActive: true,
  initFirstActive: true,
  hideControl: false,
  openNextOnClose: true

});
  </script>
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</section>	
  <!--------------=================------------>
<?php include("site-footer.php"); ?>

<!-------register----->
<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>
<script>
$(document).ready(function(e) {


//////// CONTACT DETAIL EDIT START /////////    
$("#edit-btn").on("click",function(){

$("#contact-detail").hide("fast");
$("#contact-detail-edit").show("fast");
$("#edit-btn").hide("fast");	
$("#save-btn").show("fast");	
	
});	


$("#edit-contact-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#contact-detail').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#contact-detail-edit").hide("fast");
$("#edit-btn").show("fast");	
$("#save-btn").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// CONTACT DETAIL EDIT END /////////  


//////// MEMBER MYSELF EDIT START /////////    
$("#edit-btn-myself").on("click",function(){

$("#member-myself").hide("fast");
$("#member-myself-edit").show("fast");
$("#edit-btn-myself").hide("fast");	
$("#save-btn-myself").show("fast");	
	
});	


$("#edit-member-myself-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-myself').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-myself-edit").hide("fast");
$("#edit-btn-myself").show("fast");	
$("#save-btn-myself").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// MEMBER MYSELF EDIT END /////////    



//////// MEMBER BASIC EDIT START ///////// 
   
$("#edit-btn-basic").on("click",function(){

$("#member-basic-detail").hide("fast");
$("#member-basic-detail-edit").show("fast");
$("#edit-btn-basic").hide("fast");	
$("#save-btn-basic").show("fast");	
	
});	


$("#edit-member-basic-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-basic-detail').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-basic-detail-edit").hide("fast");
$("#edit-btn-basic").show("fast");	
$("#save-btn-basic").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// MEMBER BASIC EDIT END /////////    


//////// MEMBER LOCATION EDIT START ///////// 
   
$("#edit-btn-location").on("click",function(){

$("#member-location").hide("fast");
$("#member-location-edit").show("fast");
$("#edit-btn-location").hide("fast");	
$("#save-btn-location").show("fast");	
	
});	


$("#edit-member-location-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-location').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-location-edit").hide("fast");
$("#edit-btn-location").show("fast");	
$("#save-btn-location").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// MEMBER LOCATION EDIT END /////////   


//////// MEMBER FAMILY EDIT START ///////// 
   
$("#edit-btn-family").on("click",function(){

$("#member-family").hide("fast");
$("#member-family-edit").show("fast");
$("#edit-btn-family").hide("fast");	
$("#save-btn-family").show("fast");	
	
});	


$("#edit-member-family-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-family').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-family-edit").hide("fast");
$("#edit-btn-family").show("fast");	
$("#save-btn-family").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER FAMILY EDIT END /////////  


//////// MEMBER EDUCATION EDIT START ///////// 
   
$("#edit-btn-edu").on("click",function(){

$("#member-edu").hide("fast");
$("#member-edu-edit").show("fast");
$("#edit-btn-edu").hide("fast");	
$("#save-btn-edu").show("fast");	
	
});	


$("#edit-member-edu-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-edu').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-edu-edit").hide("fast");
$("#edit-btn-edu").show("fast");	
$("#save-btn-edu").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER EDUCATION EDIT END /////////  



//////// MEMBER RELIGION EDIT START ///////// 
   
$("#edit-btn-religion").on("click",function(){

$("#member-religion").hide("fast");
$("#member-religion-edit").show("fast");
$("#edit-btn-religion").hide("fast");	
$("#save-btn-religion").show("fast");	
	
});	


$("#edit-member-religion-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-religion').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-religion-edit").hide("fast");
$("#edit-btn-religion").show("fast");	
$("#save-btn-religion").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER RELIGION EDIT END /////////  


//////// MEMBER LIFESTYLE EDIT START ///////// 
   
$("#edit-btn-lifestyle").on("click",function(){

$("#member-lifestyle").hide("fast");
$("#member-lifestyle-edit").show("fast");
$("#edit-btn-lifestyle").hide("fast");	
$("#save-btn-lifestyle").show("fast");	
	
});	


$("#edit-member-lifestyle-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-lifestyle').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-lifestyle-edit").hide("fast");
$("#edit-btn-lifestyle").show("fast");	
$("#save-btn-lifestyle").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER LIFESTYLE EDIT END /////////    


//////// MEMBER LIKE EDIT START ///////// 
   
$("#edit-btn-like").on("click",function(){

$("#member-like").hide("fast");
$("#member-like-edit").show("fast");
$("#edit-btn-like").hide("fast");	
$("#save-btn-like").show("fast");	
	
});	


$("#edit-member-like-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-like').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-like-edit").hide("fast");
$("#edit-btn-like").show("fast");	
$("#save-btn-like").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER LIKE EDIT END /////////   



//////// MEMBER PARTNER MYSELF EDIT START ///////// 
   
$("#edit-btn-partner-myself").on("click",function(){

$("#member-partner-myself").hide("fast");
$("#member-partner-myself-edit").show("fast");
$("#edit-btn-partner-myself").hide("fast");	
$("#save-btn-partner-myself").show("fast");	
	
});	


$("#edit-member-partner-myself-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-myself').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-myself-edit").hide("fast");
$("#edit-btn-partner-myself").show("fast");	
$("#save-btn-partner-myself").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER PARTNER MYSELF EDIT END /////////  


//////// MEMBER PARTNER BASIC DETAIL EDIT START ///////// 
   
$("#edit-btn-partner-basic").on("click",function(){

$("#member-partner-basic").hide("fast");
$("#member-partner-basic-edit").show("fast");
$("#edit-btn-partner-basic").hide("fast");	
$("#save-btn-partner-basic").show("fast");	
	
});	


$("#edit-member-partner-basic-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-basic').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-basic-edit").hide("fast");
$("#edit-btn-partner-basic").show("fast");	
$("#save-btn-partner-basic").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER PARTNER BASIC DETAIL EDIT END /////////   



//////// MEMBER RELIGION PARTNER EDIT START ///////// 
   
$("#edit-btn-partner-religion").on("click",function(){

$("#member-partner-religion").hide("fast");
$("#member-partner-religion-edit").show("fast");
$("#edit-btn-partner-religion").hide("fast");	
$("#save-btn-partner-religion").show("fast");	
	
});	


$("#edit-member-partner-religion-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-religion').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-religion-edit").hide("fast");
$("#edit-btn-partner-religion").show("fast");	
$("#save-btn-partner-religion").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER RELIGION PARTNER EDIT END ///////// 




//////// MEMBER PARTNER LOCATION EDIT START ///////// 
   
$("#edit-btn-partner-location").on("click",function(){

$("#member-partner-location").hide("fast");
$("#member-partner-location-edit").show("fast");
$("#edit-btn-partner-location").hide("fast");	
$("#save-btn-partner-location").show("fast");	
	
});	


$("#edit-member-partner-location-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-location').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-location-edit").hide("fast");
$("#edit-btn-partner-location").show("fast");	
$("#save-btn-partner-location").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// MEMBER PARTNER LOCATION EDIT END ///////// 


//////// MEMBER PARTNER LIFESTYLE EDIT START ///////// 
   
$("#edit-btn-partner-lifestyle").on("click",function(){

$("#member-partner-lifestyle").hide("fast");
$("#member-partner-lifestyle-edit").show("fast");
$("#edit-btn-partner-lifestyle").hide("fast");	
$("#save-btn-partner-lifestyle").show("fast");	
	
});	


$("#edit-member-partner-lifestyle-frm").on('submit',(function(e) {



e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-lifestyle').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-lifestyle-edit").hide("fast");
$("#edit-btn-partner-lifestyle").show("fast");	
$("#save-btn-partner-lifestyle").hide("fast");	

},
error: function(){alert('error')} 	        

});
}));



	
//});	

//////// MEMBER PARTNER LIFESTYLE EDIT END ///////// 
  


//////// MEMBER PARTNER PROFFESION EDIT START ///////// 
   
$("#edit-btn-partner-professional").on("click",function(){

$("#member-partner-professional").hide("fast");
$("#member-partner-professional-edit").show("fast");
$("#edit-btn-partner-professional").hide("fast");	
$("#save-btn-partner-professional").show("fast");	
	
});	


$("#edit-member-partner-professional-frm").on('submit',(function(e) {

e.preventDefault();
$.ajax({
url: "update-member-profile.php",
type: "POST",
data:  new FormData(this),
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#member-partner-professional').fadeOut('slow').html(data).fadeIn("slow");

}

//$("#contact-detail").show("fast");
$("#member-partner-professional-edit").hide("fast");
$("#edit-btn-partner-professional").show("fast");	
$("#save-btn-partner-professional").hide("fast");	

},
error: function(){} 	        

});
}));



	
//});	

//////// MEMBER PARTNER PROFFESION EDIT END ///////// 
	
});
</script>
<script>
function showstate(stateid){
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/"+"findstate-profile.php?id="+stateid;
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){
document.getElementById('constate').innerHTML=req.responseText;
  } 
 }
}
req.open("GET",str,true);
req.send(null);
}
</script>







<script>
function byReligion(religion){
	
//alert(religion)	
	
if(religion=="Hindu"){


$("#jain").hide();	
$("#muslim").hide();
$("#sikh").hide();	
$("#community_load_area").show();

document.getElementById('hindu').style.display='block'


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	

//$("#show-hide-sub-community").show();			
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////


}else if(religion=="Muslim"){

$("#hindu").hide();	
$("#jain").hide();	
$("#sikh").hide();	
$("#community_load_area").show();	



document.getElementById('muslim').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	
$("#show-hide-sub-community").show();	
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Jain"){

$("#hindu").hide();	
$("#muslim").hide();	
$("#sikh").hide();	
$("#community_load_area").show();


document.getElementById('jain').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	
$("#show-hide-sub-community").hide();		
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Sikh"){

$("#hindu").hide();	
$("#muslim").hide();	
$("#jain").hide();	
$("#community_load_area").show();


document.getElementById('sikh').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	
$("#show-hide-sub-community").hide();			
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Parsi" || religion=="Buddhist" || religion=="Jewish"){

$("#hindu").hide();	
$("#muslim").hide();	
$("#jain").hide();	
$("#sikh").hide();	
$("#community_load_area").hide();	
$("#show-hide-sub-community").hide();		
	
	
}else{

$("#hindu").hide();	
$("#muslim").hide();	
$("#jain").hide();	
$("#sikh").hide();	
$("#community_load_area").show();	


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area').innerHTML=req.responseText;	
$("#show-hide-sub-community").hide();		
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////


	
}
	
}
</script>




<script>
function byReligionPartner(religion){
	
//alert(religion)	
	
if(religion=="Hindu"){


$("#jain-partner").hide();	
$("#muslim-partner").hide();
$("#sikh-partner").hide();	
$("#community_load_area_partner").show();

document.getElementById('hindu-partner').style.display='block'


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	

//$("#show-hide-sub-community").show();			
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////


}else if(religion=="Muslim"){

$("#hindu-partner").hide();	
$("#jain-partner").hide();	
$("#sikh-partner").hide();	
$("#community_load_area_partner").show();	



document.getElementById('muslim-partner').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	
$("#show-hide-sub-community-partner").show();	
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Jain"){

$("#hindu-partner").hide();	
$("#muslim-partner").hide();	
$("#sikh-partner").hide();	
$("#community_load_area_partner").show();


document.getElementById('jain-partner').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	
$("#show-hide-sub-community-partner").hide();		
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Sikh"){

$("#hindu-partner").hide();	
$("#muslim-partner").hide();	
$("#jain-partner").hide();	
$("#community_load_area_partner").show();


document.getElementById('sikh-partner').style.display='block'
//$("#muslim").show();	
//alert("Muslim")

/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	
$("#show-hide-sub-community-partner").hide();			
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////




}else if(religion=="Parsi" || religion=="Buddhist" || religion=="Jewish"){

$("#hindu-partner").hide();	
$("#muslim-partner").hide();	
$("#jain-partner").hide();	
$("#sikh-partner").hide();	
$("#community_load_area_partner").hide();	
$("#show-hide-sub-community-partner").hide();		
	
	
}else{

$("#hindu-partner").hide();	
$("#muslim-partner").hide();	
$("#jain-partner").hide();	
$("#sikh-partner").hide();	
$("#community_load_area_partner").show();	


/////////////////////   LOAD BY INPUT /////////////////////////
var req=new getXMLHTTP();
var str="<?=SITE_WS_PATH?>/fill-community-profile-partner.php?religion="+religion;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('community_load_area_partner').innerHTML=req.responseText;	
$("#show-hide-sub-community-partner").hide();		
}


} 
}
}
req.open("GET",str,true);
req.send(null);

/////////////////////   LOAD BY INPUT END /////////////////////////


	
}
	
}
</script>

<script>
function select_membership(mdID,memID){

$("#select_"+mdID).addClass("active-membership");
$("div:not(#select_"+mdID+")").removeClass("active-membership");


$(document).ready(function(e) {

$.ajax({
type:"GET",	
url:"load-price.php?mdID="+mdID+"&memID="+memID,
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#btn-pay').fadeOut('slow').html(data).fadeIn("slow");

}

}
	
	
})

    
	
});

	
}


function fetch_benefits(memID){

$(document).ready(function(e) {

$.ajax({
type:"GET",	
url:"load-benefits.php?memID="+memID,
contentType: false,
processData:false,
success: function(data){

if(data!=0){

$('#benefit-load-area').fadeOut('slow').html(data).fadeIn("slow");

}

}
	
	
})

    
	
});

	
}
</script>



<script src="<?=SITE_WS_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_WS_PATH?>/js/script.js"></script>
<script src="<?=SITE_WS_PATH?>/js/menuzord.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jPushMenu.js"></script>
<script src="<?=SITE_WS_PATH?>/js/owl.js"></script>
<!-- validate -->
<script src="<?=SITE_WS_PATH?>/js/customcollection.js"></script>
<script src="<?=SITE_WS_PATH?>/js/custom1.js"></script>
<!-------------->
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible.js"></script> 
<!------pie---------->


<!-------  Profile Photo ----------->
<style>
a.carousel-control.profile-photo{
background:none !important;	
}

span.glyphicon.glyphicon-chevron-left.profile-photo{
color:#b10a0a !important;
}

span.glyphicon.glyphicon-chevron-right.profile-photo{
color:#b10a0a !important;
}


.profile-photo{
background-color:#fff !important;	
}
</style>


<div class="modal fade" id="ProfilePhotoModal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-body">

<div id="myCarousel" class="carousel slide" >

<div class="carousel-inner">
    
<?php
$sql="select * from  tbl_member_image where 1 and mem_image_cat_id='".$userDATA['reg_id']."'";		
$sql_fetch = db_query($sql);
$cntDATA=mysqli_num_rows($sql_fetch);
$cnt=0;
if($cntDATA > 0){	
while($DATA = mysqli_fetch_array($sql_fetch)) {
$cnt++;	
?>
<div class="item <?php if($cnt==1){?>  active <?php }?>profile-photo " style="text-align:-webkit-center">
<img src="member_images/<?=$DATA['mem_image_name']?>" style="width:354px;height:442px" />
</div>
<? }} ?>    


</div>

    <!-- Left and right controls -->
    <a class="left carousel-control profile-photo" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left profile-photo"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control profile-photo " href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right profile-photo"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</div>
<div class="modal-footer" style="text-align:center">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>
