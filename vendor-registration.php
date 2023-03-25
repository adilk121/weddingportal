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
$db = mysqli_connect('localhost','thebestw_bestwedding','!+.ub,fL$O7Y','thebestw_bestwedding') or die("Connection Failed");

if(isset($_POST['submit']))
{
 $s_image = $_FILES['image'];
 move_uploaded_file($_FILES['image']['tmp_name'],'./img/'.$_FILES['image']['name']);
 $upload_image = $_FILES['image']['name'];

$name = $_POST['name']; 
$product_brand = $_POST['product_brand'];
$price = $_POST['price'];
$state = $_POST['state'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$fb_link = $_POST['fb_link'];
$insta_link = $_POST['insta_link'];
$map_link = $_POST['map_link'];
$alt_phone = $_POST['alt_phone'];
$product_status =$_POST['product_status'];



$sql= "INSERT INTO `product`( `name`, `product_brand`, `price`, `state`, `city`, `phone`, `email`, `fb_link`, `insta_link`, `map_link`, `product_image`, `product_status`) VALUES ('$name','$product_brand','$price','$state','$city',$phone','$email','$fb_link','$insta_link','$map_link','$upload_image','$product_status')";
$result = mysqli_query($db, $sql) or die("Query unsuccessful");

if($result){
echo ("<script>
window.alert('Succesfully Added the Information');
window.location.href='index.php';
</script>");
mysqli_close($db);
}else{
echo "Not Successfull";
}
}

?>

<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?=db_scalar("SELECT site_pages_meta_title FROM tbl_site_pages WHERE  site_pages_link='about-us' AND site_pages_status='Active'")?></title>
<meta name="description" content="<?=db_scalar("SELECT site_pages_meta_description FROM tbl_site_pages WHERE  site_pages_link='about-us' AND site_pages_status='Active'")?>">
<meta name="keywords" content="<?=db_scalar("SELECT site_pages_meta_keyword FROM tbl_site_pages WHERE  site_pages_link='about-us' AND site_pages_status='Active'")?>">
<meta name="robots" content="index, follow" />
<!-- Stylesheets -->

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
		
</style>
<!----------->
</head>
<body id="amitabh">
<div class="page-wrapper" >
  <!--<div class="preloader"></div>-->
  <?php include("site-header.php"); ?>
  <!---important-style--->
  
  <section style="background:url(images/bg1.jpg) no-repeat center; background-size:cover; padding:20px;">
   <div class="container">
      <div class="col-md-12 text-center bg_1">
        <h2>Vendor Regsitration</h2>
        <p><a href="<?=SITE_WS_PATH?>">Home</a> | Vendor Registration
      </div>
   </div>
 </section>

 <!--Vendor Resgistration Start-->
 

   <div class="container">
		<div class="row">
			<div class="vendor-form">
				<center><strong><h1>Vendor Registration</h1></strong></center>
				<form  method="POST" action="" enctype='multipart/form-data'>
					<div class="container">
						<div class="row">
							<div class="col-md-6 input-field">
								<input type="text" name="name" placeholder="Profile Name" required ="require">
							</div>

							<div class="col-md-6 input-field">
								<input type="text" name="business_name" placeholder="Business Name" required ="require">
							</div>
							</div>
                            <div clas="row">
							<div class="col-md-6 input-field">
								<select name="product_brand">
									<option> Select your service Category</option>
									               <?php 
$db = mysqli_connect('localhost','thebestw_bestwedding','!+.ub,fL$O7Y','thebestw_bestwedding') or die("Connection Failed");
         
         $sql = "SELECT * FROM `service`";
        // "SELECT * FROM user";
        $run = mysqli_query($db,$sql) or die("Query Not run");
        while($data = mysqli_fetch_assoc($run)){
        ?>
									<option style="text-transform:uppercase;" value="<?php echo $data['service_name']?>"><?php echo $data['service_name']?></option>
									                      <?php
}
    ?>
								
									
								</select>
							</div>

							<div class="col-md-6 input-field">
								<input type="phone" name="phone" placeholder="Contact Number" required ="require">
								<input type ="hidden" name="product_status" value="1" readonly>
							</div>
							
							</div>
                                
                            <div class="row">


							<div class="col-md-6 input-field">
								<input type="email" name="email" placeholder="Email id" required ="require">
							</div>
							
							   <div class="col-md-6 input-field">
								<input type="text" name="price" placeholder="Your Service Charge ex:-(1500-3500)" required ="require">
							</div>
							</div>
                            
                
					

						<div class="row">
							<div class="col-md-4 input-field">
							    
								<select name="state" required>
									<option> Select your State</option>
				

									<option style="text-transform:uppercase;" value="punjab">punjab</option>
									<option style="text-transform:uppercase;" value=" rajasthan">rajasthan</option>
									<option style="text-transform:uppercase;" value="delhi">delhi</option>
									<option style="text-transform:uppercase;" value=" delhi-ncr">delhi ncr</option>
									<option style="text-transform:uppercase;" value="haryana">haryana</option>
									
								</select>
							</div>

							<div class="col-md-4 input-field">
								<input type="text" name="city" placeholder="City">
							</div>


							<div class="col-md-4 input-field">
								<input type="text" name="pin_code" placeholder="Area Pin Code" >
							</div>
							</div>
							
						   
						   <div class="row">
							    
							<div class="col-md-4 input-field">
								<input type="text" name="insta_link" placeholder="Add Your Instagram Profile">
							</div>
							
						
							
							<div class="col-md-4 input-field">
								<input type="text" name="fb_link" placeholder="Add Your Facebook Profile ">
							</div>
							<div class="col-md-4 input-field">
								<input type="text" name="map_link" placeholder="Add Your Map Link">
							</div>

						   </div>

							<div class="row">
								<button class="btn btn-success p-2 m-3" type="submit" name="submit">Register</button>
							</div>

					</div>
				</form>
				
			</div>
		</div>
	</div>  

  <!--Vendor Resgistration End-->
  

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