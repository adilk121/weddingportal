<?php 
ob_start();
require_once("includes/dbsmain.inc.php"); 

$loginCre=$_REQUEST['loginCre'];
$sql="SELECT reg_id FROM tbl_registration WHERE reg_email='$loginCre'";
$res=db_scalar($sql);

if($res){
	
$sql="SELECT * FROM tbl_registration WHERE reg_email='$loginCre'";
$dataMember=db_query($sql);
$recMember=mysqli_fetch_array($dataMember);	

$msg_body="<div style='width: 100%;background-color: #b11a0a38;text-align: -webkit-center;border-top: solid thin #b11a0a73;border-bottom: solid thin #b11a0a73;padding: 14px 0 14px 0;'><table style='width: 700px;background-color: #fff;box-shadow: 1px 1px 35px 8px #b11a0a85;border: solid 14px #b11a0a;'><tr><td style='text-align:center;padding-top:20px'><img src='http://webkey.co.in/2.0-demo/apnimatrimony/images/logo1.png' /></td></tr><tr><td><h1 style='color:#000;text-align:center;font-size:32px'>thebestweddinghub.com Account Recovery</h1></td></tr><tr><td><p style='font-size: 15px;text-align: center;color: #333;'>Dear ".$recMember['reg_name'].", your login credential is given below</p><table style='width: 408px;margin: 28px 0 34px 34px;' ><tr><td style='width:30%;font-weight:600;color:#000;font-size: 14px;'>User ID</td><td style='width:10%'>:</td><td style='width:60%;font-size: 15px;'>".$recMember['reg_email']."</td></tr><tr><td style='font-weight:600;color:#000;font-size: 14px;'>Password</td><td>:</td><td style='font-size: 15px;'>".$recMember['reg_pass']."</td></tr></table></td></tr><tr><td style='padding:0 0 20px 30px; color:#333; '><p style='font-size:15px'>Apnimatrimony.Com welcomes you and wish to a very successfull relation.</p><p><h2 style='font-size:20px;font-weight:600'>Apnimatrimony Team</h2></p></td></tr></table></div>";


$mail_to_client="$recMember[reg_email]";
$sub_client="Apnimatrimony Login Detail";
$mail_client_body ="$msg_body";
$sender_client ="noreply@tradekeyindia.in";
$headers_client  = "MIME-Version: 1.0" . "\r\n";
$headers_client .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers_client .= "from: ".$sender_client."\n";
if($mail_to_client!=''){
@mail($mail_to_client,$sub_client,$mail_client_body,$headers_client);
}

echo 1;		
}else{
echo 0;		
}
?>
