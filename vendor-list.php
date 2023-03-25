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
          <?php 
         $db = mysqli_connect('localhost','thediann_bestweddinghub','!+.ub,fL$O7Y','thediann_bestweddinghub') or die("Connection Failed");
         
         $sql = "SELECT `service_cat`,`city` FROM `mediator_list`";
       
        ?>


<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?=db_scalar("SELECT site_pages_meta_title FROM tbl_site_pages WHERE  site_pages_link='about-us' AND site_pages_status='Active'")?></title>
<meta name="description" content="<?=db_scalar("SELECT site_pages_meta_description FROM tbl_site_pages WHERE  site_pages_link='about-us' AND site_pages_status='Active'")?>">
<meta name="keywords" content="<?=db_scalar("SELECT site_pages_meta_keyword FROM tbl_site_pages WHERE  site_pages_link='about-us' AND site_pages_status='Active'")?>">
<meta name="robots" content="index, follow" />
<!-- Stylesheets -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
	.bd1
	{
	    margin-bottom:20px !important;
	    
	}
	@media (max-width: 767px) and (min-width: 320px)
{
	.bd1
	{
	    padding:15px; margin-bottom:0px !important;
	    
	}
.main-header .header-lower .logo 
{
text-align:center!important;
	}
	.main-header .header-lower {
    padding: 0px 0px 10px 0px;
	}
	.auto-container {
    padding: 0 15px 0px 22px;
}
}

.vendor-form
		{
			box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
/*			background: red;*/
			/*width: 700px;*/
			justify-content: center;
			margin: auto;
			margin-top: 50px;
			margin-bottom:50px;
		}
		.input-field
		{
			padding: 8px;

		}
		.input-field input
		{
			padding: 5px;
			width: 100%;
/*			border: none;*/
			outline: none;
			background:#dbdbdb;
			color:black;


		}
		::placeholder {
  color: black;
}
		.input-field select
		{
			padding: 5px;
			width: 100%;
			/*border: none;*/
			outline: none;
			background:#dbdbdb;
			color:black;
		}
		.input-file input
		{
			background: whitesmoke;
			margin-top: 8px;
	
			width: 100%;
/*			height: 33px;*/
			padding: 2px;
		}
		
		.btn {
    background: #d45149 !important;
    color: #fff !important;
    margin: 10px !important;
    border:1px solid #d45149;
}
#myBtnContainer
{
  overflow: auto;
  white-space: nowrap;
  /*justify-content:center;*/
    margin-left:30px;
    margin-right:30px;
  margin-top:20px;
  margin-bottom:50px;
  background:black;
}

#myBtnContainer button
{
	 display: inline-block;
}
.filterDiv {
  float: left;
    background-color: #d45149;
    color: #ffffff;
    width: 434px;
    height: 266px;
    margin: 0px;
    padding: 20px;
    border: 2px solid;
    box-shadow: 2px 3px 5px 5px white;
    display: none;
}

.show {
  display: block;
}

.vendor-container {
  margin-top: 20px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  /*background-color: #f1f1f1;*/
  cursor: pointer;
}

.btn:hover {
  background-color:;
  color:black;
}

.btn.active {
  background-color: #666;
  color: black;
}
.fa-brands
{
    margin-left:10px;
    color:white;
}
.location a
{
    color:white;
    text-decoration:none;
    text-transform:uppercase;
}
.filter-box
{
    margin-top:80px;
    margin-left:100px;
}
		
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!----------->
</head>
<body id="amitabh">
<div class="page-wrapper" >
  <div class="preloader"></div>
  <?php include("site-header.php"); ?>
  <!---important-style--->
  
  <section style="background:url(images/bg1.jpg) no-repeat center; background-size:cover; padding:20px;">
   <div class="container">
      <div class="col-md-12 text-center bg_1">
        <h2>Vendor List</h2>
        <p><a href="<?=SITE_WS_PATH?>">Home</a> | Vendor List
      </div>
   </div>
 </section>

 <!--Vendor Resgistration Start-->
 
    <div class="container-fluid">

<div class="row">
    <div class="col-md-4">
        <div class=" card filter-box">
            <ul>
                <li><input type="checkbox" value ="Photographer"></li>
                <li><input type="checkbox" value ="Pandits"></li>
                <li><input type="checkbox" value ="DJ"></li>
                <li><input type="checkbox" value ="Musician"></li>
            </ul>
        </div>
    </div>
    <div class="col-md-8">
<div id="myBtnContainer">
  <button style ="text-transform:uppercase; color:white;" class="btn active" onclick="filterSelection('all')">show all</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('photographer')">photographer</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('pandits')">pandits</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection(' jewellery')">jewellery</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('planner')">Event planner</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('makeup')">makeup</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('mehndi')">mehndi</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('dj')">dj</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('Tents')">Tents</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('flower-decoration')">Flower Decoration</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('lighting')">lighting</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('musician')">musician</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('foji-band')">Foji Band</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('wedding-dress')">Wedding Dress</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('caters')">caters</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('halwai')">halwai</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('choreographer')">choreographer</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('wedding-car')">wedding car</button>
  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('resort-palace')">Resort/Palace</button>
</div>

<!--filter by location-->
<!--<div id="locationBtnContainer">-->
<!--  <button style ="text-transform:uppercase; color:white;" class="btn active" onclick="filterSelection('all')">show all</button>-->
<!--  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('delhi')">delhi</button>-->
<!--  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('delhi-ncr')">delhi ncr</button>-->
<!--  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection(' rajasthan')">rajasthan</button>-->
<!--  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection(' punjab')">Punjab</button>-->
<!--  <button style ="text-transform:uppercase; color:white;" class="btn" onclick="filterSelection('haryana')">haryana</button>-->
<!--</div>-->



<div class="vendor-container">
    
    
  <!---star-->  
      
               <?php 
$db = mysqli_connect('localhost','thediann_bestweddinghub','!+.ub,fL$O7Y','thediann_bestweddinghub') or die("Connection Failed");
         
         $sql = "SELECT * FROM `mediator_list` WHERE id";
        // "SELECT * FROM user";
        $run = mysqli_query($db,$sql) or die("Query Not run");
        while($data = mysqli_fetch_assoc($run)){
        ?>       
 <div class="filterDiv <?php echo $data['service_cat']?> <?php echo $data['state']?>">
      <div class ="container">
          <div class ="row">
              
              <!-- start-->
              <div class="col-md-6 col-lg-6  d-flex flex-row">
                  <input type="hidden" value="<?php echo $data['id']?>">
                <!--<div clas="vendor-profile m-2">-->
                <!--    <img class ="img-fluid mt-2" width="113px" src ="images/2.jpg">-->
                <!--</div>-->
                
                <div class="vendor-info m-2">
                    <p>
                        <span><strong>Name:- <?php echo $data['name']?></strong></span><br>
                        <span>Company:-<?php echo $data['business_name']?></span><br>
                        <span>Contact:-<?php echo $data['phone']?></span><br>
                        <span>Email:- <?php echo $data['email']?></span><br>
                        <span class="location">Location:- <a href="<?php echo $data['map_link']?>"> <?php echo $data['state']?></a></span><br>
                        <span>Price :- Rs. <?php echo $data['price']?></span>
                        <div>
                            <span><a href="<?php echo $data['insta_link']?>"><i class="fa-brands fa-3x fa-instagram"></i></a></span>
                            <span><a href="<?php echo $data['fb_link']?>"><i class="fa-brands fa-3x fa-facebook"></i></a></span>
                            <span><a href="<?php echo $data['phone']?>"><i class="fa-brands fa-3x fa-whatsapp"></i></a></span>
                        </div>
                    </p>
                </div>
              </div
              <!-- End-->
          </div>
      </div>
  </div>
                      <?php
}
    ?>
       

  <!---End--> 

  
 
</div>
</div>
</div>


  <!--Vendor list End-->
  

<?php include("site-footer.php"); ?>  
<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>
<script>
$(document).ready(function (e) {
	$("#btnForgetPass").on('click',(function(e) {
		
var loginCre=$("#login_credential").val();


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

}
			},
		  	error: function() 
	    	{

	    	} 	        
	   });
	   
	   
	}));
});
</script>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script>
function trim_input(str){
 return str.replace(/^\s*|\s*$/g,'');
}

function validate_feedback(){

if(trim(document.getElementById('enquiry_name').value)==0){    
alert("Please enter your name !");
document.getElementById('enquiry_name').focus();
return false;
}

var mobno=trim(document.getElementById('enquiry_mobile').value);
if(trim(document.getElementById('enquiry_mobile').value)==""){
	alert("Enter your mobile no.!");
	document.getElementById('enquiry_mobile').focus();
	return false;
}
if(isNaN(document.getElementById('enquiry_mobile').value)){
	alert("Mobile no. should be no.!");
	document.getElementById('enquiry_mobile').focus();
	return false;
}
if(mobno.length < 10){
    alert("Mobile no. should be 10 digit long !");
	document.getElementById('enquiry_mobile').focus();
	return false;
}


var email=trim(document.getElementById('enquiry_email').value);
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email=='')
  {
	  alert('Please Enter Email Id');
	  document.getElementById('enquiry_email').focus();
	  return false;
  }else if(!email.match(mailformat)){
alert("You have entered an invalid email address!");
document.getElementById('enquiry_email').focus();
return false;
}


if(trim(document.getElementById('enquiry_detail').value)==0){    
alert("Please enter detail !");
document.getElementById('enquiry_detail').focus();
return false;
}

	
}
</script>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  } 
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


<!--filter by location -->
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  } 
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("locationBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

