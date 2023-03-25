<?php
require_once("includes/dbsmain.inc.php");
/////////////////   FOR RESELLER REGISTRATION /////////////////////////////

$mobile=$_GET['mobile'];
$resend=$_GET['resend'];
$regID=$_REQUEST['regID'];

if($mobile!=""){


$otp_code=rand(1000,9000);
$sql="INSERT INTO tbl_otp SET otp_code='$otp_code',
							  otp_reg_id='$regID',
							  otp_rec_date='$currDate',
							  otp_rec_time='$currTime'
							  ";	
$res=db_query($sql);
/*

////////////////////////////////   SENDING OTP ///////////////////////////////


//$msgmail = '<center><div style="background-color:#ffcc18;width:600px;padding:2px 2px 2px 2px;font-family:Arial, Helvetica, sans-serif;text-align:left;font-size:14px;border-radius:5px;border:1px solid #ffcc18;" ><div style="border:1px solid #ffcc18;background-color:#fff;padding:3px 4px 5px 5px;"><div style="text-align:center;border-bottom:1px solid #ffcc18;padding:2px;"><img src="'.SITE_WS_PATH.'/images/logo.png"  border="0" alt="tharichoice.com"></div><div style="margin-top:20px;text-align:center"><span style="font-weight:bold;">OTP from ThariChoice.Com, Enter this otp and continue.</span></div><br><div style="background-color:#faf9f8; border-radius:10px; padding:10px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody style="background:#FFFFFF; border-radius:10px;"><tr><td width="100%" style="line-height:45px;font-size:40px;text-align:center" ><strong> '.$otp_code.'</strong></td></tr></tbody></table></div><br><div style="padding-top:5px;" ><p style="margin-top:15px;font-weight:bold; color:#FF0000;font-size:10px;text-align:center"><strong>(*PLEASE RESEND OTP IN THE CASE THE OTP DID NOT MATCH.) </strong></p><p style="border-top:1px solid #ffcc18;padding-top:10px;"><strong>Customer Care Team</strong><br>Tharichoice.Com<br><a href="'.SITE_WS_PATH.'" target="_blank" style="color:#00f;">www.tharichoice.com</a><br>Email: <a href="mailto:info@tharichoice.com"  style="color:#00f;">info@tharichoice.com</a></p><div style="font-family:Arial, Helvetica, sans-serif;font-size:12px;background-color:#fcfcfc;color:#666;text-align:justify">Note: This is a system-generated mail, dont reply to this. Please add this info@tharichoice.com to your address book to ensure delivery into your inbox</div></div></div></div></center>';
$msgmail="<p>OTP from ApniMatrimony.Com, Enter this otp and continue.</p><h2 style='text-align:center'>$otp_code</h2>";
$toEmail=$email;
$subject = "Reseller registration OTP from ApniMatrimony.Com";
$from="info@apnimatrimony.com";
$Headers1 = "From: ApniMatrimony.Com<$from>\n";
$Headers1 .= "X-Mailer: PHP/". phpversion();
$Headers1 .= "X-Priority: 3 \n";
$Headers1 .= "MIME-version: 1.0\n";
$Headers1 .= "Content-Type: text/html; charset=iso-8859-1\n"; 
@mail("$toEmail", "$subject", "$msgmail","$Headers1","-fenquiry@tradekeyindia.in");
///////////////////////////////////////////////////////////////////////////////
//echo 1;
*/
echo $otp_code;
}
?>