<?php require_once("includes/dbsmain.inc.php");?>
<?php include("site-main-query.php") ?>
<?php
$p_id=$_REQUEST['selectedMonth'];

$fetch_price=db_query("select * from tbl_upgrade_packages_detail where package_id='$p_id'");
while($price=mysqli_fetch_array($fetch_price)){
    
echo $price['discount_price'];
	
 }
 ?>