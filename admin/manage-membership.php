<?php
require_once("../includes/dbsmain.inc.php");


$reg_sql=db_query("select * from tbl_registration where 1 and reg_id='".$_REQUEST['user_id']."' and  reg_membership>'0'");
if(mysqli_num_rows($reg_sql)>0){
	   $recData=mysqli_fetch_array($reg_sql);
	    @extract($recData);
     }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Apnimatrimony : Admin Panel</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="../fevicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
<link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrapa.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- Emojionearea -->
      <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
      <!-- End page Label Plugins 
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>

      <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
      
      <style>
	span.count-num {
    float: right;
    margin: -16px 13px 0 0;
    font-size: 18px;
    background: red;
    padding: 1px 6px 1px 6px;
    color: #fff;
    border-radius: 15px;
}
	  </style>
      
<link href="<?=SITE_WS_PATH?>/css/collapsible1.css" rel="stylesheet" type="text/css">    
<style>
 div#update-popup-box {
    background: #b10a0a;
    color: #fff;
    top: 108px;
    box-shadow: 1px 1px 50px 24px #b10a0aa6;
}


.up-img {
    width: 100%;
    border: solid 1px #ccc;
    height: 170px;
	margin-bottom:5px;
}

button#btn-photo-upload {
    position: absolute;
    margin: 0 0 0 0;
    right: 19px;
    top: 3px;
}

button#btn-verify-otp {
    position: absolute;
    margin: 0 0 0 0;
    right: 19px;
    top: 3px;
}

button#btn-send-otp {
    font-size: 11px;
    font-weight: bold;
    margin: 0 0 0 0;
    padding: 0 0 0 0;
}

.mp_03 {
    margin: 0px;
    padding: 0px;
}

.pd-msof {
    margin-bottom: 20px;
}

.dsbo-fom-1{width:100%; height:40px; border-radius:5px; padding:5px; border:solid 1px #ccc;    background-color: #337ab733;}

.fld-mntr {
    color: #d3168c;
    float: right;
    margin: 5px 29px 5px 0;
    padding: 5px;
    font-size: 13px;
}


  .arrow-r {
    margin-top: 1%;
}
.collapse-container>:nth-child(even) {padding: 0px 0px; }
.bgmsf1 {
   margin: 0px 0px 0px 0px !important;
}
.sb-db-hdg h2 {
    background-color: #d6d6d9;
    padding: 7px 10px !important;
    font-size: 16px;
    color: #525252 !important;
}
.collapse-container>:nth-child(odd) {
    padding: 6px 10px !important;}
	
	.bgmsf1{background-color:#FFF !important; padding: 0px 0px 10px 0px; }
	.img-seq{height:90px !important;}
	.ftsze{font-size:12px;}
	.clrd-str{color:#F00 !important;}
	.Suid img{margin:0px !important; padding-left:0px !important;}
	.Suid{padding-left:0px !important;}
  </style>        
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td  id="pageHead" colspan="2"><div class="col-lg-12  bg-primary bold" style="padding:6px;font-size:16px;height:40px">
<span class="pull-left"><i class="fa fa-user-circle-o font-black fa-lg"></i>&nbsp;Update Membership</span>




<span class="pull-right mr10"><?=$recData['reg_name']?> <span class="font-black">(<?=$recData['reg_email']?>)</span></span>


</div></td>
  </tr>
</table>

<br>

<a href="addedit-user-membership.php?user_id=<?=$_REQUEST['user_id']?>" class="btn btn-info">Update Membership</a>

<br><br>
<?php
if(mysqli_num_rows($reg_sql)>0){?>
<div class="col-lg-12 update-profile-holder ">

<table class="table">

<tbody>
<?php

$parentPackName=db_scalar("select package_title from tbl_upgrade_packages where package_id='$recData[reg_membership]'");
$price=db_scalar("select discount_price from tbl_upgrade_packages_detail where package_parent_id='$recData[reg_membership]' and package_month='$recData[reg_membership_duration]'");
?>       
<tr><td>Package Name</td><td><?=$parentPackName?></td></tr>
<tr><td>Package Price</td><td><?=$price?></td></tr>
<tr><td>Start Date</td><td><?=$recData['reg_membership_start_date']?></td></tr>
<tr><td>Expiry Date</td><td><?=$recData['reg_membership_expiry_date']?></td></tr>
<tr><td>Duration</td><td><?=$recData['reg_membership_duration']?></td></tr>
     
</tbody>
  </table>

</div>
<?php }?>

</body>
</html>
