<?php require_once("includes/dbsmain.inc.php");?>
<?php include("site-main-query.php") ?>
<?php 
if(isset($_REQUEST['send']) && isset($_REQUEST['user'])){
$fetch_name=db_query("SELECT * FROM tbl_registration INNER JOIN tbl_msg_box ON tbl_registration.reg_id=tbl_msg_box.msg_to_mem_id");
$name=mysqli_fetch_array($fetch_name);
$reg_name=$name['reg_name'];	
$sql=db_query("UPDATE tbl_msg_box SET msg_status='PendingAgain' WHERE (msg_from_mem_id='$_REQUEST[user]' AND msg_to_mem_id='$_REQUEST[send]')");
header("location:search-result.php?send=$reg_name");
}

 ?>