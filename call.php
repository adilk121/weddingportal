<?php //header?><!--Call back section--><?php
$flag_mail=0;
 if(isset($_POST['Enq'])){
	 
	//heder

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
          enquiry_name='$unamecc',
  		  enquiry_email='$uemailcc',
  		  enquiry_comp_name='$ucompanycc',
	      enquiry_mobile='$uphonecc',
		  enquiry_detail='$umessagecc',
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
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$unamecc</td>
    </tr>
  
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Mobile </strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$uphonecc</td>
    </tr>
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Email-Id</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$uemailcc</td>
    </tr>
    
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Company Name</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ucompanycc</td>
    </tr>
  
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Detail  </strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$umessagecc</td>
    </tr>    
  </tbody>
</table>
</body>
</html>";
//$toEmail = "saim.tradekeyindia@gmail.com";

$toEmail = "$compDATA[admin_email]";
$subject = "Enquiry from $hostName";
		        $from="$uemailcc";
				$Headers1 = "From: $unamecc<$from>\n";
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
$sender_admin =$uemailcc;		
$headers_admin  = "MIME-Version: 1.0" . "\r\n";
$headers_admin .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers_admin .= "from: ".$sender_admin."\n";
if($uemailcc){
@mail($mail_to_admin,$sub_admin,$mail_admin_body,$headers_admin);
$flag_mail=1;
?>

    
<!--Whatsapp script-->
<script>
  //  alert("Enquiry form submitted successfully, We will contact you soon.");
    //window.location.href="whatsapp://send?text=<?=$w_text?>&phone=+919958276296";</script>

    
  <?  
}

 }
?>

<style type="text/css">    #wh-widget-send-button {        margin: 0 !important;        padding: 0 !important;        position: fixed !important;        z-index: 16000160 !important;        bottom: 0 !important;        text-align: center !important;        height: 90px;        width: 60px;        visibility: visible;        transition: none !important;    }    #wh-widget-send-button.wh-widget-right {        right: 0;    }    #wh-widget-send-button.wh-widget-left {        left: 10px;    }    #wh-widget-send-button iframe {        width: 100%;        height: 100%;        border: 0;    }div.clear {    clear: both;}


.cp-widget-button{display:inline-block;position:fixed;bottom:80px;left:20px;z-index:999999}
.cp-widget-button__inner{height:50px;width:50px;background:#00abec;border-radius:50%;text-align:center;cursor:pointer;padding:25%; box-shadow:1px 1px 10px #000;}
.call-pop1 p{font-size:20px;padding:20px 50px 0}
.text-center1 {
    z-index: 999999;
    padding-top: 100px;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.8);
}
.close1 {
    float: right;
    font-size: 31px !important;
    font-weight: bold;
    line-height: 1;
    color: #fff;
    text-shadow: 0 1px 0 #fff;
     opacity:4; 
    filter: alpha(opacity=20); background-color:#26c5ef; padding:13px;
}
/**********pop************/
.bg_pof {
    background: #FFF;
    padding: 0px;
    z-index: 999; box-shadow:1px 1px 50px #0b4575;
}
.bg-clrd_f {
    color: #fff;
    text-align: center;
    border: solid 1px red;
    background-color: #26c5ef;
    margin: 0px 0px 20px 0px;
   /* padding: 0px;*/  padding:12px 0px;
}
.form-control{width:100%; height:40px; margin-bottom:10px; border:solid 1px #ccc;}
.site-button1 {
    font-weight:bold;
    font-size:16px;
    background-color: #B10A0A !important;
    color: #fff !important;
    padding: 5px 10px;
    border: solid 1px red;
    text-align: center; margin-bottom:30px; 
    transition:all 1s;
}
.site-button1:hover{
    background-color: #fff !important;
    color: #B10A0A !important;
}

textarea{resize:none;}
.bg-clrd_f{text-align:left; font-size:16px; padding:15px 10px;}
/* The close1 Button */
.close1 {
    position: absolute;
    top: -8px;
    right: -1px;
    color: #f1f1f1;
    font-weight: bold;
    transition: 0.3s;
}

.close1:hover,
.close1:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}
@media (min-width:320px) and (max-width:767px) 
{
.cp-widget-button{z-index:0;}
.cp-widget-button__inner{animation:bounce 1s infinite alternate;-webkit-animation:bounce 1s infinite alternate}
.cp-widget-button__inner img{ width: 20px; height: 20px;}
.cat-textformat h2{color:#1178ba!important}
.cat-textformat p{text-align:left;word-wrap:break-word}
.cat-textformat ul{width:auto;height:auto;padding:0;margin:15px 0 0 0}
.cat-textformat ul li{background:url(../images/right-icon.png) 0 0 no-repeat;width:auto;height:auto;padding:0 0 0 36px;margin:10px 0 10px;line-height:25px}
.call-pop1 p{padding:33px 64px}
.call-pop1 p{font-size:24px;padding:46px 33px}
.bg-clrd_f {
    font-size: 15px !important;
}
.close1 {
    position: absolute;
    top: -9px !important;
     right:0px !important; 
}
/*.modalgd{padding-top:18px !important; z-index: 1035 !important; }*/
.modalgd {
    padding-top: 0px !important;
    z-index: 1050 !important;
    margin-top: 0px;
}
.modalgd-content{width:80% !important;}
.form-control {
    width: 100%;
    /*height: 30px;*/
    margin-bottom: 5px;
    border: solid 1px #171616;
}
}
</style>
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/styd-2.css" type="text/css">
<div id="loading-area"></div>
<div id="mymodalgd1ap" class="modalgd">
 
  <div class="modalgd-content" id="img01">
  <div class="col-md-12 bg_pof">
  
   <?php
   if($flag_mail!=0)
   {
   ?>
  <h2 class="bg-clrd_f" style="background-color:#006400;">Thank you for your interest, we will contact you soon. <span class="close1" style="background-color:#006400;">&times;</span></h2>
   <?}else{?>
    <h2 class="bg-clrd_f" style="background-color:#B10A0A;">Would you like us to call you back? <span class="close1" style="background-color:#B10A0A;">&times;</span></h2>
   <?}?>
   <!---------->
   
   <style>
     
#error_style_callback{
    color:white; 
    font-size:13px;
    font-family:arial;
    background-color:#c32323;
    border-radius:7px; 
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    box-sizing: border-box;
    padding:7px;
}

.error_name_callback{
       display:none;
}
.error_email_callback{
       display:none;
}
.error_company_callback{
       display:none;
}

.error_phone_callback{
       display:none;
}
.error_message_callback{
       display:none;
}

.error_captcha_callback{
       display:none;
}

   </style>

  <div class="col-md-12">
  <form name="ContactFrm"  id="call-pop_form" action="" method="post" enctype="multipart/form-data" onsubmit="return checkValidationcc();">
        <div class="form-style">
         
        <div class="col-md-12">
          
          <input type="text" maxlength="100" class="form-control" name="unamecc" id="unamecc" style="position:relative;" onkeyup="errName1();" placeholder="Name *"> 
           <p id="error_style_callback" class="error_name_callback"></p>
          </div>
          
          <div class="col-md-12">  
          
           <input type="text"  maxlength="100" class="form-control" name="uemailcc" id="uemailcc" style="position:relative;" onkeyup="errEmail1();" placeholder="Email *">
           <p id="error_style_callback" class="error_email_callback"></p>
          </div>
          
          <div class="col-md-12">  
          
          <input type="text" class="form-control" name="ucompanycc" id="ucompanycc" style="position:relative;" onkeyup="errCompany1();" placeholder="Company (Optional)">
           <p id="error_style_callback" class="error_company_callback"></p>
          </div>
          <div class="col-md-12">
              
          <input type="text"  maxlength="10" class="form-control" name="uphonecc" id="uphonecc" style="position:relative;" onkeyup="errPhone1();" placeholder="Phone Number *">
           <p id="error_style_callback" class="error_phone_callback"></p>
          </div>
          <div class="col-md-12">
          
          <textarea  class="form-control" name="umessagecc" id="umessagecc" style="resize:none;position:relative; height:80px;" onkeyup="errMsg1();" placeholder="Message *"></textarea>
           <p id="error_style_callback" class="error_message_callback"></p>
          </div>
          <div class="col-md-12">
                <div class="mdl-textfield mdl-js-textfield">
               <input placeholder="Captcha" type="text" maxlength="4" id="captcha1" class="form-control" style="position:relative;" onkeyup="errCaptcha1();"/>
               <p id="error_style_callback" class="error_captcha_callback"></p>
        <input type="text" readonly placeholder="Captcha" id="txtCaptcha1" 
        style="background-image:url(images/captcha-images.jpg); text-align:center; border:none;
        font-weight:bold; font-family:Modern; font-size:28px; width:100px;" />
            &nbsp;&nbsp;&nbsp;<i style="color:darkgrey;font-size:20px; cursor:pointer;" class="fa fa-refresh" onclick="DrawCaptcha1();"> <b style="color:black;">reload Captcha</b></i>
            </div>
              </div>
              <div class="clearfix"></div>
          <div class="col-md-12 col-xs-12 text-center" style="margin-top:5px;">
          <input type="submit" style="width:100%; background-color:#B10A0A;" id="email_number" value="Submit"  name="Enq" class="site-button1">   
          </div>               
        </div>
      </form>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
 
    //Created / Generates the captcha function    
    function DrawCaptcha1()
    {
        /*var a = Math.ceil(Math.random() * 10)+ '';
        var b = Math.ceil(Math.random() * 10)+ '';       
        var c = Math.ceil(Math.random() * 10)+ '';  
        var d = Math.ceil(Math.random() * 10)+ '';  
        var e = Math.ceil(Math.random() * 10)+ '';  
        var f = Math.ceil(Math.random() * 10)+ '';  
        var g = Math.ceil(Math.random() * 10)+ '';  
        var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
        */
        
           var code = Math.floor(1000 + Math.random() * 9000);
        document.getElementById("txtCaptcha1").value = code
    }

   
    // Remove the spaces from the entered and generated code
    function removeSpaces(string)
    {
        return string.split(' ').join('');
    }
 
 $(document).ready(function(){
     DrawCaptcha1();
 });
 
    function trimfield(str) 
        { 
            return str.replace(/^\s+|\s+$/g,''); 
        }
    function checkValidationcc(){
        var i=0,flag=0;
        var name=document.getElementById("unamecc");
        var company=document.getElementById("ucompanycc");
        var phone=document.getElementById("uphonecc");
        var email=document.getElementById("uemailcc");
        var message=document.getElementById("umessagecc");
        //var captcha=document.getElementById("captcha");
        var str1 = removeSpaces(document.getElementById('txtCaptcha1').value);
        var captcha = removeSpaces(document.getElementById('captcha1').value);
    
        if(name.value==""){
            $('#unamecc').css({"border-color":"red"});
            $("#unamecc").animate({left: "-5px"},"fast");
            $("#unamecc").animate({left: "5px"},"fast");
            $("#unamecc").animate({left: "-5px"},"fast");
            $("#unamecc").animate({left: "5px"},"fast");
            $("#unamecc").animate({left: "-5px"},"fast");
            $("#unamecc").animate({left: "5px"},"fast");
            $("#unamecc").animate({left: "0px"},"fast");
            
            name.focus();
            
             $(".error_name_callback").html("Please enter your name");
            $('.error_name_callback').fadeIn('slow');
            return false;
        }if(name.value.length<=3){
             $('#unamecc').css({"border-color":"red"});
            $("#unamecc").animate({left: "-5px"},"fast");
            $("#unamecc").animate({left: "5px"},"fast");
            $("#unamecc").animate({left: "-5px"},"fast");
            $("#unamecc").animate({left: "5px"},"fast");
            $("#unamecc").animate({left: "-5px"},"fast");
            $("#unamecc").animate({left: "5px"},"fast");
            $("#unamecc").animate({left: "0px"},"fast");
            name.focus();
            $(".error_name_callback").html("Name should be greater than 3 alphabet");
            $('.error_name_callback').fadeIn('slow');
            return false;
        }if (/[0-9]/g.test(name.value)) {
                 $('#unamecc').css({"border-color":"red"});
            $("#unamecc").animate({left: "-5px"},"fast");
            $("#unamecc").animate({left: "5px"},"fast");
            $("#unamecc").animate({left: "-5px"},"fast");
            $("#unamecc").animate({left: "5px"},"fast");
            $("#unamecc").animate({left: "-5px"},"fast");
            $("#unamecc").animate({left: "5px"},"fast");
            $("#unamecc").animate({left: "0px"},"fast");
                name.focus();
         $(".error_name_callback").html("Use alphabet only");
            $('.error_name_callback').fadeIn('slow');
                return false;
        }if (!/[A-Za-z\s]/g.test(company.value) && company.value!="") {
            $('#ucompanycc').css({"border-color":"red"});
            $("#ucompanycc").animate({left: "-5px"},"fast");
            $("#ucompanycc").animate({left: "5px"},"fast");
            $("#ucompanycc").animate({left: "-5px"},"fast");
            $("#ucompanycc").animate({left: "5px"},"fast");
            $("#ucompanycc").animate({left: "-5px"},"fast");
            $("#ucompanycc").animate({left: "5px"},"fast");
            $("#ucompanycc").animate({left: "0px"},"fast");
                company.focus();
        $(".error_company_callback").html("Value should not be numeric");
        $('.error_company_callback').fadeIn('slow');
                return false;
        }
        if(email.value==""){
             $('#uemailcc').css({"border-color":"red"});
            $("#uemailcc").animate({left: "-5px"},"fast");
            $("#uemailcc").animate({left: "5px"},"fast");
            $("#uemailcc").animate({left: "-5px"},"fast");
            $("#uemailcc").animate({left: "5px"},"fast");
            $("#uemailcc").animate({left: "-5px"},"fast");
            $("#uemailcc").animate({left: "5px"},"fast");
            $("#uemailcc").animate({left: "0px"},"fast");
            email.focus();
             $(".error_email_callback").html("Please enter your email");
            $('.error_email_callback').fadeIn('slow');
            return false;            
        }if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)){
             $('#uemailcc').css({"border-color":"red"});
            $("#uemailcc").animate({left: "-5px"},"fast");
            $("#uemailcc").animate({left: "5px"},"fast");
            $("#uemailcc").animate({left: "-5px"},"fast");
            $("#uemailcc").animate({left: "5px"},"fast");
            $("#uemailcc").animate({left: "-5px"},"fast");
            $("#uemailcc").animate({left: "5px"},"fast");
            $("#uemailcc").animate({left: "0px"},"fast");
            email.focus();
             $(".error_email_callback").html("Please enter valid email address");
            $('.error_email_callback').fadeIn('slow');
            return false;
        }if(phone.value==""){
             $('#uphonecc').css({"border-color":"red"});
            $("#uphonecc").animate({left: "-5px"},"fast");
            $("#uphonecc").animate({left: "5px"},"fast");
            $("#uphonecc").animate({left: "-5px"},"fast");
            $("#uphonecc").animate({left: "5px"},"fast");
            $("#uphonecc").animate({left: "-5px"},"fast");
            $("#uphonecc").animate({left: "5px"},"fast");
            $("#uphonecc").animate({left: "0px"},"fast");
            phone.focus();
            $(".error_phone_callback").html("Please enter phone number");
            $('.error_phone_callback').fadeIn('slow');
            return false;
        }if(isNaN(phone.value)){
             $('#uphonecc').css({"border-color":"red"});
            $("#uphonecc").animate({left: "-5px"},"fast");
            $("#uphonecc").animate({left: "5px"},"fast");
            $("#uphonecc").animate({left: "-5px"},"fast");
            $("#uphonecc").animate({left: "5px"},"fast");
            $("#uphonecc").animate({left: "-5px"},"fast");
            $("#uphonecc").animate({left: "5px"},"fast");
            $("#uphonecc").animate({left: "0px"},"fast");
            phone.focus();
             $(".error_phone_callback").html("Please enter numeric value");
            $('.error_phone_callback').fadeIn('slow');
            return false;
        }if(phone.value.length<10 || phone.value.length>10){
             $('#uphonecc').css({"border-color":"red"});
            $("#uphonecc").animate({left: "-5px"},"fast");
            $("#uphonecc").animate({left: "5px"},"fast");
            $("#uphonecc").animate({left: "-5px"},"fast");
            $("#uphonecc").animate({left: "5px"},"fast");
            $("#uphonecc").animate({left: "-5px"},"fast");
            $("#uphonecc").animate({left: "5px"},"fast");
            $("#uphonecc").animate({left: "0px"},"fast");
            phone.focus();
            $(".error_phone_callback").html("Phone number should be 10 digit long");
            $('.error_phone_callback').fadeIn('slow');
            return false;
            
        }if(trimfield(message.value)==""){
             $('#umessagecc').css({"border-color":"red"});
            $("#umessagecc").animate({left: "-5px"},"fast");
            $("#umessagecc").animate({left: "5px"},"fast");
            $("#umessagecc").animate({left: "-5px"},"fast");
            $("#umessagecc").animate({left: "5px"},"fast");
            $("#umessagecc").animate({left: "-5px"},"fast");
            $("#umessagecc").animate({left: "5px"},"fast");
            $("#umessagecc").animate({left: "0px"},"fast");
            message.focus();
             $(".error_message_callback").html("Please leave your message");
            $('.error_message_callback').fadeIn('slow');
            return false;
        }if(captcha==""){
            $('#captcha1').css({"border-color":"red"});
            $("#captcha1").animate({left: "-5px"},"fast");
            $("#captcha1").animate({left: "5px"},"fast");
            $("#captcha1").animate({left: "-5px"},"fast");
            $("#captcha1").animate({left: "5px"},"fast");
            $("#captcha1").animate({left: "-5px"},"fast");
            $("#captcha1").animate({left: "5px"},"fast");
            $("#captcha1").animate({left: "0px"},"fast");
            $("#captcha1").focus();
             $(".error_captcha_callback").html("Please enter captcha code");
            $('.error_captcha_callback').fadeIn('slow');
            return false;
        }if (str1 != captcha){
            $('#captcha1').css({"border-color":"red"});
            $("#captcha1").animate({left: "-5px"},"fast");
            $("#captcha1").animate({left: "5px"},"fast");
            $("#captcha1").animate({left: "-5px"},"fast");
            $("#captcha1").animate({left: "5px"},"fast");
            $("#captcha1").animate({left: "-5px"},"fast");
            $("#captcha1").animate({left: "5px"},"fast");
            $("#captcha1").animate({left: "0px"},"fast");
            $("#captcha1").focus();
             $(".error_captcha_callback").html("Please enter correct captcha code");
            $('.error_captcha_callback').fadeIn('slow');
            return false;
        }
    }
    
    function errName1(){
        $('#unamecc').css({"border-color":"#49aecc"});
          $('.error_name_callback').css({"display":"none"});
    }
    function errEmail1(){
        $('#uemailcc').css({"border-color":"#49aecc"});
        $('.error_email_callback').css({"display":"none"});
    }
    function errCompany1(){
        $('#ucompanycc').css({"border-color":"#49aecc"});
        $('.error_company_callback').css({"display":"none"});
    }
    function errPhone1(){
        $('#uphonecc').css({"border-color":"#49aecc"});
        $('.error_phone_callback').css({"display":"none"});
    }
    function errMsg1(){
        $('#umessagecc').css({"border-color":"#49aecc"});
        $('.error_message_callback').css({"display":"none"});
    }
    function errCaptcha1(){
        $('#captcha1').css({"border-color":"#49aecc"});
        $('.error_captcha_callback').css({"display":"none"});
    }
</script>


    </div>
      <div style="clear:both"></div>
        </div>
                               
    </div>
</div>
  <div class="cp-widget-button" id="myImgcall"  >
    <div data-brand-color="background"  onclick="show()" class="cp-widget-button__inner" style="background-color:#B10A0A;"> <img src="<?=SITE_WS_PATH?>/images/call1.png" alt="" style="width:25px;"> </div>
  </div>
 
  <!----------change-pws---->
 <script>
// Get the modalgd
<?php
if($flag_mail!=0)
{
?>
$(document).ready(function(){

    $("#mymodalgd1ap").show();
 
});
<?}?>
var modalgd = document.getElementById('mymodalgd1ap');

// Get the image and insert it inside the modalgd - use its "alt" text as a caption
var img = document.getElementById('myImgcall');
var modalgdImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modalgd.style.display = "block";
    modalgdImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modalgd
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modalgd
span.onclick = function() { 
    modalgd.style.display = "none";
}
</script>

