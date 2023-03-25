<?php 
ob_start();
require_once("includes/dbsmain.inc.php"); 
include("site-main-query.php");

$sql="SELECT md_price FROM tbl_membership_detail WHERE md_id=$mdID";
$mPrice=db_scalar($sql);
?>
<i class="fa fa-inr"></i> <?=$mPrice?> | Upgrade