<?php 
require_once("includes/dbsmain.inc.php");
$sql="SELECT reg_member_verified_mobile FROM  tbl_registration WHERE reg_id='$_SESSION[regID]'";
$MemMobile=db_scalar($sql);
//header
if(!empty($MemMobile)){
echo "1";	
}else{
echo "0";		
}
?>

<?php //header?>

