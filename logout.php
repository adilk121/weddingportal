<?php 
session_start();
require_once("includes/dbsmain.inc.php");
db_scalar("update tbl_registration set reg_is_login='No' where reg_id='$_SESSION[userLoginId]' ");
unset($_SESSION['userLoginId'],$_SESSION['userLoginName']);
session_destroy();
header("location:index.php");
exit;
?>