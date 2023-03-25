<?php 
ob_start();
date_default_timezone_set("asia/kolkata");
require_once("includes/dbsmain.inc.php"); 
include("site-main-query.php");

$MemID=$_REQUEST['MemID'];
$userid=$_REQUEST['userid'];
            $chk_photo_req=db_scalar("SELECT request_to FROM tbl_request WHERE request_to='$MemID'");
            $gender=db_scalar("SELECT reg_gender FROM tbl_registration WHERE reg_id='$MemID'");
            if(empty($chk_photo_req)){?>
        	
        <div class="col-md-12 col-xs-12 pro-bg" style="background-color:#333232;">
        <div class="col-md-12 col-xs-12 text-center mp03"><a href="Javascript:void(0)" onClick="photo_req('<?=$MemID?>','<?=$userid?>');" class="view-sty"><i class="fa fa-camera"></i> Photo Request</a></div>
       </div>
           <?php }else if(!empty($chk_photo_req)){
           	if($gender=="Female"){?>
            <img src="<?=SITE_WS_PATH?>/images/1.ico">
           <?php }else if($gender=="Male"){?>
           	<img src="<?=SITE_WS_PATH?>/images/2.png">
           <?php }?>

        <div class="col-md-12 col-xs-12 pro-bg" style="background-color:#333232;">
        <div class="col-md-12 col-xs-12 text-center mp03"><a href="Javascript:void(0)" class="view-sty"><i class="fa fa-camera"></i> Photo Requested</a></div>
       </div>
           <?php }?>
