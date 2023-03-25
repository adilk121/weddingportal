<!--Call back section-->

<?php
$flag_mail=0;
 if(isset($_POST['EnqSubmit1'])){

  @extract($_POST);
  
    /*
       $short_msg=substr($uemailcc,0,50);
       $varUserName="t1webkey";
      $varPWD="105658508";
      $varSenderID="NEWREG";
        $msg_body="Client Name : $unamecc \n Client Email : $uemailcc \n Client Mobile : $uphonecc \n Enquiry Detail : $short_msg";
      
      $varMSG=urlencode("$msg_body");
      $url="http://sms4power.com/api/swsendSingle.asp?";//
      $data="username=$varUserName&password=$varPWD&sender=$varSenderID&sendto=9958276296&message=$varMSG";
     
  
  function postdata($url,$data)
    {
    //The function uses CURL for posting data to
      $objURL = curl_init($url);
      curl_setopt($objURL, CURLOPT_RETURNTRANSFER,1); 
      curl_setopt($objURL,CURLOPT_POST,1);
      curl_setopt($objURL, CURLOPT_POSTFIELDS,$data);
      $retval = trim(curl_exec($objURL));
      curl_close($objURL);
      return $retval;
    }
  $sendSMS = postData($url,$data);*/
   

  $sql="insert into tbl_enquiry set
          enquiry_name='$unamedd',
        enquiry_email='$uemaildd',
        enquiry_comp_name='$ucompanydd',
        enquiry_mobile='$uphonedd',
      enquiry_detail='$umessagedd',
      enquiry_source='Call Back Enquiry',
      enquiry_add_date=now()";
      db_query($sql);
       ///////////////****** Mailer to client start here **********************//////////////
  $hostName = $_SERVER['HTTP_HOST'];          
      $msgmail="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>TradeKeyIndia.com-Largest B2B Portal In India</title>
 </head>
<body>      
   <table align='center' cellSpacing='0' cellPadding='0' width='87%' border='1' style='border:1px solid #e61938'>
  <tbody>
    <tr>
      <td vAlign='top' style='background-color:#e61938; padding:10px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:#ffffff; text-align:center; font-weight:bold;' colspan='3' >Enquiry From $hostName</td>
    </tr>
     <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Name</strong> </td>
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$unamedd</td>
    </tr>
  
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Mobile </strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$uphonedd</td>
    </tr>
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Email-Id</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$uemaildd</td>
    </tr>
    
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Company Name</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ucompanydd</td>
    </tr>
  
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Detail  </strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$umessagedd</td>
    </tr>    
  </tbody>
</table>
</body>
</html>";
//$toEmail = "saim.tradekeyindia@gmail.com";

$toEmail = "$compDATA[admin_email]";
$subject = "Enquiry from $hostName";
            $from="$uemaildd";
        $Headers1 = "From: $unamedd<$from>\n";
        $Headers1 .= "X-Mailer: PHP/". phpversion();
        $Headers1 .= "X-Priority: 3 \n";
        $Headers1 .= "MIME-version: 1.0\n";
        $Headers1 .= "Content-Type: text/html; charset=iso-8859-1\n"; 
        @mail("$toEmail", "$subject", "$msgmail","$Headers1","-fenquiry@tradekeyindia.com");
        
         $toEmail."<br>";
///////////////****** Mailer to client end here **********************//////////////
///////////////// Mail To Admin //////////////////////////////////

$mail_to_admin="client_enquiry@tradekeyindia.com";
$sub_admin="Business Enquiry From $hostName";
$mail_admin_body = "$msgmail";  
$sender_admin =$uemaildd;   
$headers_admin  = "MIME-Version: 1.0" . "\r\n";
$headers_admin .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers_admin .= "from: ".$sender_admin."\n";
if($uemaildd){
@mail($mail_to_admin,$sub_admin,$mail_admin_body,$headers_admin);
echo "<script>alert('Enquiry form submitted successfully, We will contact you soon.');</script>";
?>

    
<!--Whatsapp script-->
<script>
/*alert("Enquiry form submitted successfully, We will contact you soon.");
window.location.href="whatsapp://send?text=<?=$w_text?>&phone=+919958276296";*/
</script>

    
  <?  
}

 }
?>

<style>
  
body {font-family: Arial, Helvetica, sans-serif;}
  {cursor:default !important;}

/* The modalform (background) */
.modalform {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* modalform Content */
  
.modalform-contentform {
  background-color: #006699;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width:100%; margin-top:-5px;
}

/* The closechatform Button */
.closechatform {
    color: #fff;
    float: right;
    font-size: 30px;
    font-weight: bold;
    /* background-color: #0b68aa; */
    padding: 5px 11px;
    top: 116px;
    /* margin-top: 10px; */
    position: absolute;
    right: 8px;
   /**** box-shadow: 1px 1px 10px #000;****/
    border-radius: 5px;
    z-index: 999;
}

.closechatform:hover,
.closechatform:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
  .form-controld{width:100%; height:40px; margin-bottom:5px; border-radius:5px; padding:8px; border:solid 1px #189de0;}
  .btn {
    background: #189de0;
    color: #fff;}
</style>

<div id="mymodalformchat" class="modalform" style="z-index:999;">

  <!-- modalform content -->
  <div class="modalform-contentform" style="width:100%; background-color:#B10A0A;">
    <span class="closechatform">&times;</span>
    <div class="clearfix"></div>
    <style>
#error_style_res{
    color:white; 
    font-size:15px;
    font-family:arial;
    background-color:#c32323;
    border-radius:7px; 
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    box-sizing: border-box;
    padding:7px;
}

.error_name_res{
       display:none;
}
.error_email_res{
       display:none;
}
.error_company_res{
       display:none;
}

.error_phone_res{
       display:none;
}
.error_message_res{
       display:none;
}

.error_captcha_res{
       display:none;
}

</style>
    
    
    <form method="post" action="" onSubmit="return checkValidationdd()">
  <div class="col-md-12">

            <h3 class="white-clr amihtwo text-center" style="font-size:22px !important; padding:0px; margin-top:10px; position:relative; top:5px; color:#fff;">Need a Consultant</h3>

            <h2 align="center" style="color: !important;">

            </h2>

                <div class="col-md-12">
                  <input type="text" maxlength="100" class="form-controld" name="unamedd" id="unamedd" style="position:relative;" onkeyup="errName();" placeholder="Name *">
                <p id="error_style_res" class="error_name_res"></p>
                </div>
        <div class="clearfix"></div>

                <div class="col-md-12">

                  <input type="text"  maxlength="100" class="form-controld" name="uemaildd" id="uemaildd" style="position:relative;" onkeyup="errEmail();" placeholder="Email *">
 <p id="error_style_res" class="error_email_res"></p>
                </div>
                <div class="clearfix"></div>

                <div class="col-md-12">
                  <input type="text" class="form-controld" name="ucompanydd" id="ucompanydd" style="position:relative;" onkeyup="errCompany();" placeholder="Company (Optional)">
 <p id="error_style_res" class="error_company_res"></p>
                </div>

                <div class="col-md-12">


                  <input type="text"  maxlength="10" class="form-controld" name="uphonedd" id="uphonedd" style="position:relative;" onkeyup="errPhone();" placeholder="Phone Number *">
 <p id="error_style_res" class="error_phone_res"></p>
                </div>

            <div class="clearfix"></div>
                <div class="col-md-12">
                  <textarea  class="form-controld" name="umessagedd" id="umessagedd" style="resize:none;position:relative; height:65px;" onkeyup="errMsg();" placeholder="Message *"></textarea>
 <p id="error_style_res" class="error_message_res"></p>
                </div>

             <div class="clearfix"></div>
                
            <div class="col-md-12">

            <input placeholder="Captcha" type="text" id="captcha" maxlength="4" class="form-controld" style="position:relative;" onkeyup="errCaptcha();"/>
             <p id="error_style_res" class="error_captcha_res"></p>
                  <input type="text" readonly placeholder="Captcha" id="txtCaptcha" 
            style="background-image:url(images/captcha-images.jpg); text-align:center; border:none;
            font-weight:bold; font-family:Modern; font-size:28px; width:100px;" />
            &nbsp;&nbsp;&nbsp;<i style="color:darkgrey;font-size:18px; cursor:pointer;" class="fa fa-refresh" onclick="DrawCaptcha();"><b style="color:black;">reload Captcha</b></i>

                </div>
          <div class="clearfix"></div>
                <div class="col-md-12">
                  <button type="submit" name="EnqSubmit1" class="btn btn-primary btn-lg" style="margin-top:10px; background-color:darkorange;">Send Message</button>

                </div>

              </div>

</form>
  </div>

</div>


<style>
.modalwki {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* modalwki Content */
.modalwki-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width:100%;
}

/* The closechatwki Button */
.closechatwki {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    position: relative;
    right: 8px;
    top: 5px;
}

.closechatwki:hover,
.closechatwki:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<div id="mymodalwkichatwki" class="modalwki" style="top:-50px; z-index:999;">
  <!-- modalwki content -->
	 <span class="closechatwki">&times;</span>
  <div class="modalwki-content" style="width:100%;">
   
    <p><iframe src="<?=$compDATA['admin_live_chat_code']?>"  height="500" frameborder="0" marginheight="0" marginwidth="0" style="height:500px;">Loading...</iframe></p>
  </div>

</div>
<style>
  
  .bg-brd-sty{margin: 0px; padding: 05px; background-color:#B10A0A;}
  .bg-brd-sty i{color:#fff; font-size:17px; text-align: center;}
  .bg-brd-sty p a{font-size: 12px !important; color:#fff;}
  .bg-brd-sty p{padding:0px; margin:0px; font-size:12px;}
  .bg-brd-sty{border:solid 1px #ccc; height:32px;}
  .fx-sec {
   position: fixed;
   left: 0px;
   bottom: -20px;
   width: 100%;
   /****background-color:#2B2B2B;****/
   color: white;
   text-align: center; z-index:1;
}
  @media (min-width:320px) and (max-width:767px) 
{
  .main-bar .nav {
    display: none;
    position: absolute;
    /****top: 157px !important;****/
    left: 0;
    z-index: 999;
    width: 100%;
}
  .top-btm-bg {
    float: right;
    /* margin-bottom: -50px; */
    top: -33px;
    position: relative;
}
  
  .navbar-header{height:70px !important;}
}
</style>
<div class="fx-sec">
<section class="res-comp text-center visible-xs">
      <div class="container">
         <div class="row">
             <?php
if($compDATA['admin_whatsapp_option']=="Yes")
{?>
       <div class="col-xs-3 bg-brd-sty" style="border-right:solid 0px #FFF; background-color:#4dc247;">
                 <?php if($compDATA['admin_whatsapp_number']=="" || empty($compDATA['admin_whatsapp_number'])){ ?>
                 <p style="background-color:#4dc247;"><a href="#" style="color:#fff;"> <i class="fa fa-whatsapp" style="font-size:15px;"></i> WhatsApp</a></p>
                   <?}else{?>
             <p style="background-color:#4dc247;"><a href="https://wa.me/+91<?=$compDATA['admin_whatsapp_number']?>" style="color:#fff;"> 
             <i class="fa fa-whatsapp"></i> WhatsApp</a></p>
             <?}?>
           </div>
           <?}?>
           
           
           
           <?php
if($compDATA['admin_callback_option']=="Yes")
{?>
           <div class="col-xs-3 bg-brd-sty">
             
             <p> <a href="#" id="myBtnform"><i class="fa fa-envelope" style="font-size:12px;"></i> Enquiry</a></p>
           </div>
           <?}?>
           
        
                      <?php
if($compDATA['admin_live_chat_code']!="")
{?>
       <div class="col-xs-3 bg-brd-sty">
               
             <p><a href="#" id="myBtnwki"> <i class="fa fa-comments"></i> Live Chat</a></p>
            
           </div>
           <?}?>
           
           
           
                      <?php
if($compDATA['admin_call_now_option']=="Yes")
{?>
           <div class="col-xs-3 bg-brd-sty">
               
             <p><a href="tel:+91<?=$compDATA['admin_call_now_number']?>"><i class="fa fa-mobile"></i> Call Now</a></p>
           </div>
           <?}?>
            
           
           
         </div>
      </div>
   </section>
</div>
  
  <script>
// Get the modalwki
var modalwki = document.getElementById("mymodalwkichatwki");

// Get the button that opens the modalwki
var btn = document.getElementById("myBtnwki");

// Get the <span> element that closechatwkis the modalwki
var span = document.getElementsByClassName("closechatwki")[0];

// When the user clicks the button, open the modalwki 
btn.onclick = function() {
  modalwki.style.display = "block";
}

// When the user clicks on <span> (x), closechatwki the modalwki
span.onclick = function() {
  modalwki.style.display = "none";
}

// When the user clicks anywhere outside of the modalwki, closechatwki it
window.onclick = function(event) {
  if (event.target == modalwki) {
    modalwki.style.display = "none";
  }
}
</script>
  
  
  <script>
// Get the modalform
var modalform = document.getElementById("mymodalformchat");

// Get the button that opens the modalform
var btn = document.getElementById("myBtnform");

// Get the <span> element that closechatforms the modalform
var span = document.getElementsByClassName("closechatform")[0];

// When the user clicks the button, open the modalform 
btn.onclick = function() {
  modalform.style.display = "block";
}

// When the user clicks on <span> (x), closechatform the modalform
span.onclick = function() {
  modalform.style.display = "none";
}

// When the user clicks anywhere outside of the modalform, closechatform it
window.onclick = function(event) {
  if (event.target == modalform) {
    modalform.style.display = "none";
  }
}
</script>

<!----------------------->
<script>
 
    //Created / Generates the captcha function    
    function DrawCaptcha()
    {
       /* var a = Math.ceil(Math.random() * 10)+ '';
        var b = Math.ceil(Math.random() * 10)+ '';       
        var c = Math.ceil(Math.random() * 10)+ '';  
        var d = Math.ceil(Math.random() * 10)+ '';  
        var e = Math.ceil(Math.random() * 10)+ '';  
        var f = Math.ceil(Math.random() * 10)+ '';  
        var g = Math.ceil(Math.random() * 10)+ '';  
        var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;*/
        
         var code = Math.floor(1000 + Math.random() * 9000);
        document.getElementById("txtCaptcha").value = code
    }

   
    // Remove the spaces from the entered and generated code
    function removeSpaces(string)
    {
        return string.split(' ').join('');
    }
 
 $(document).ready(function(){
     DrawCaptcha();
 });
 
    function trimfield(str) 
        { 
            return str.replace(/^\s+|\s+$/g,''); 
        }
    function checkValidationdd(){
        var i=0,flag=0;
        var name=document.getElementById("unamedd");
        var company=document.getElementById("ucompanydd");
        var phone=document.getElementById("uphonedd");
        var email=document.getElementById("uemaildd");
        var message=document.getElementById("umessagedd");
        //var captcha=document.getElementById("captcha");
        var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
        var captcha = removeSpaces(document.getElementById('captcha').value);
    
        if(name.value==""){
            $('#unamedd').css({"border-color":"red"});
            $("#unamedd").animate({left: "-5px"},"fast");
            $("#unamedd").animate({left: "5px"},"fast");
            $("#unamedd").animate({left: "-5px"},"fast");
            $("#unamedd").animate({left: "5px"},"fast");
            $("#unamedd").animate({left: "-5px"},"fast");
            $("#unamedd").animate({left: "5px"},"fast");
            $("#unamedd").animate({left: "0px"},"fast");
            name.focus();
              $(".error_name_res").html("Please enter your name");
            $('.error_name_res').fadeIn('slow');
            return false;
        }if(name.value.length<=3){
             $('#unamedd').css({"border-color":"red"});
            $("#unamedd").animate({left: "-5px"},"fast");
            $("#unamedd").animate({left: "5px"},"fast");
            $("#unamedd").animate({left: "-5px"},"fast");
            $("#unamedd").animate({left: "5px"},"fast");
            $("#unamedd").animate({left: "-5px"},"fast");
            $("#unamedd").animate({left: "5px"},"fast");
            $("#unamedd").animate({left: "0px"},"fast");
            name.focus();
             $(".error_name_res").html("Name should be greater than 3 alphabet");
            $('.error_name_res').fadeIn('slow');
            return false;
        }if (/[0-9]/g.test(name.value)) {
                 $('#unamedd').css({"border-color":"red"});
            $("#unamedd").animate({left: "-5px"},"fast");
            $("#unamedd").animate({left: "5px"},"fast");
            $("#unamedd").animate({left: "-5px"},"fast");
            $("#unamedd").animate({left: "5px"},"fast");
            $("#unamedd").animate({left: "-5px"},"fast");
            $("#unamedd").animate({left: "5px"},"fast");
            $("#unamedd").animate({left: "0px"},"fast");
                name.focus();
                  $(".error_name_res").html("Use alphabet only");
            $('.error_name_res').fadeIn('slow');
                return false;
        }if (!/[A-Za-z\s]/g.test(company.value) && company.value!="") {
            $('#ucompanydd').css({"border-color":"red"});
            $("#ucompanydd").animate({left: "-5px"},"fast");
            $("#ucompanydd").animate({left: "5px"},"fast");
            $("#ucompanydd").animate({left: "-5px"},"fast");
            $("#ucompanydd").animate({left: "5px"},"fast");
            $("#ucompanydd").animate({left: "-5px"},"fast");
            $("#ucompanydd").animate({left: "5px"},"fast");
            $("#ucompanydd").animate({left: "0px"},"fast");
                company.focus();
                 $(".error_company_res").html("Value should not be numeric");
        $('.error_company_res').fadeIn('slow');
                return false;
        }
        if(email.value==""){
             $('#uemaildd').css({"border-color":"red"});
            $("#uemaildd").animate({left: "-5px"},"fast");
            $("#uemaildd").animate({left: "5px"},"fast");
            $("#uemaildd").animate({left: "-5px"},"fast");
            $("#uemaildd").animate({left: "5px"},"fast");
            $("#uemaildd").animate({left: "-5px"},"fast");
            $("#uemaildd").animate({left: "5px"},"fast");
            $("#uemaildd").animate({left: "0px"},"fast");
            email.focus();
             $(".error_email_res").html("Please enter your email");
            $('.error_email_res').fadeIn('slow');
            return false;            
        }if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)){
             $('#uemaildd').css({"border-color":"red"});
            $("#uemaildd").animate({left: "-5px"},"fast");
            $("#uemaildd").animate({left: "5px"},"fast");
            $("#uemaildd").animate({left: "-5px"},"fast");
            $("#uemaildd").animate({left: "5px"},"fast");
            $("#uemaildd").animate({left: "-5px"},"fast");
            $("#uemaildd").animate({left: "5px"},"fast");
            $("#uemaildd").animate({left: "0px"},"fast");
            email.focus();
             $(".error_email_res").html("Please enter valid email address");
            $('.error_email_res').fadeIn('slow');
            return false;
        }if(phone.value==""){
             $('#uphonedd').css({"border-color":"red"});
            $("#uphonedd").animate({left: "-5px"},"fast");
            $("#uphonedd").animate({left: "5px"},"fast");
            $("#uphonedd").animate({left: "-5px"},"fast");
            $("#uphonedd").animate({left: "5px"},"fast");
            $("#uphonedd").animate({left: "-5px"},"fast");
            $("#uphonedd").animate({left: "5px"},"fast");
            $("#uphonedd").animate({left: "0px"},"fast");
            phone.focus();
             $(".error_phone_res").html("Please enter phone number");
            $('.error_phone_res').fadeIn('slow');
            return false;
        }if(isNaN(phone.value)){
             $('#uphonedd').css({"border-color":"red"});
            $("#uphonedd").animate({left: "-5px"},"fast");
            $("#uphonedd").animate({left: "5px"},"fast");
            $("#uphonedd").animate({left: "-5px"},"fast");
            $("#uphonedd").animate({left: "5px"},"fast");
            $("#uphonedd").animate({left: "-5px"},"fast");
            $("#uphonedd").animate({left: "5px"},"fast");
            $("#uphonedd").animate({left: "0px"},"fast");
            phone.focus();
            $(".error_phone_res").html("Please enter numeric value");
            $('.error_phone_res').fadeIn('slow');
            return false;
        }if(phone.value.length<10 || phone.value.length>10){
             $('#uphonedd').css({"border-color":"red"});
            $("#uphonedd").animate({left: "-5px"},"fast");
            $("#uphonedd").animate({left: "5px"},"fast");
            $("#uphonedd").animate({left: "-5px"},"fast");
            $("#uphonedd").animate({left: "5px"},"fast");
            $("#uphonedd").animate({left: "-5px"},"fast");
            $("#uphonedd").animate({left: "5px"},"fast");
            $("#uphonedd").animate({left: "0px"},"fast");
            phone.focus();
             $(".error_phone_res").html("Phone number should be 10 digit long !");
            $('.error_phone_res').fadeIn('slow');
            return false;
            
        }if(trimfield(message.value)==""){
             $('#umessagedd').css({"border-color":"red"});
            $("#umessagedd").animate({left: "-5px"},"fast");
            $("#umessagedd").animate({left: "5px"},"fast");
            $("#umessagedd").animate({left: "-5px"},"fast");
            $("#umessagedd").animate({left: "5px"},"fast");
            $("#umessagedd").animate({left: "-5px"},"fast");
            $("#umessagedd").animate({left: "5px"},"fast");
            $("#umessagedd").animate({left: "0px"},"fast");
            message.focus();
             $(".error_message_res").html("Please leave your message");
            $('.error_message_res').fadeIn('slow');
            return false;
        }if(captcha==""){
            $('#captcha').css({"border-color":"red"});
            $("#captcha").animate({left: "-5px"},"fast");
            $("#captcha").animate({left: "5px"},"fast");
            $("#captcha").animate({left: "-5px"},"fast");
            $("#captcha").animate({left: "5px"},"fast");
            $("#captcha").animate({left: "-5px"},"fast");
            $("#captcha").animate({left: "5px"},"fast");
            $("#captcha").animate({left: "0px"},"fast");
            $("#captcha").focus();
            $(".error_captcha_res").html("Please enter captcha code");
            $('.error_captcha_res').fadeIn('slow');
            return false;
        }if (str1 != captcha){
            $('#captcha').css({"border-color":"red"});
            $("#captcha").animate({left: "-5px"},"fast");
            $("#captcha").animate({left: "5px"},"fast");
            $("#captcha").animate({left: "-5px"},"fast");
            $("#captcha").animate({left: "5px"},"fast");
            $("#captcha").animate({left: "-5px"},"fast");
            $("#captcha").animate({left: "5px"},"fast");
            $("#captcha").animate({left: "0px"},"fast");
            $("#captcha").focus();
            $(".error_captcha_res").html("Please enter correct captcha code");
            $('.error_captcha_res').fadeIn('slow');
            return false;
        }
    }
    
    function errName(){
        $('#unamedd').css({"border-color":"#49aecc"});
        $('.error_name_res').css({"display":"none"});
    }
    function errEmail(){
        $('#uemaildd').css({"border-color":"#49aecc"});
         $('.error_email_res').css({"display":"none"});
    }
    function errCompany(){
        $('#ucompanydd').css({"border-color":"#49aecc"});
         $('.error_company_res').css({"display":"none"});
    }
    function errPhone(){
        $('#uphonedd').css({"border-color":"#49aecc"});
        $('.error_phone_res').css({"display":"none"});
    }
    function errMsg(){
        $('#umessagedd').css({"border-color":"#49aecc"});
         $('.error_message_res').css({"display":"none"});
    }
    function errCaptcha(){
        $('#captcha').css({"border-color":"#49aecc"});
         $('.error_captcha_res').css({"display":"none"});
    }
</script>
