<?php 
ob_start();
date_default_timezone_set("asia/kolkata");
require_once("includes/dbsmain.inc.php"); 
include("site-main-query.php");

	//header
$MemID=$_POST['MemID'];
$userid=$_POST['userid'];
$add_date=date("Y-m-d");
$add_time=date("H:i:s");
$req_insert=db_query("INSERT INTO tbl_request(request_from,request_to,request_add_date,request_add_time) VALUES ('$userid','$MemID','$add_date','$add_time')");
echo "Photo Request Sent";

 ?>
