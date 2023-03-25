<?php 
require_once("../includes/dbsmain.inc.php");
@extract($_REQUEST);
$regIDadmin=$_REQUEST['regIDadmin'];

$join_profile_photo=db_scalar("SELECT reg_profile_photo FROM tbl_registration WHERE  reg_id='$regIDadmin'");

if($regIDadmin!=""){
echo "<img src='".SITE_WS_PATH."/upload_images/$join_profile_photo' class='up-img'>";	
}
?>