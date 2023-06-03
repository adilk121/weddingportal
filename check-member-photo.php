<?php 
require_once("includes/dbsmain.inc.php");
$sql="SELECT reg_profile_photo FROM  tbl_registration WHERE reg_id='$_SESSION[regID]'";
$MemPhoto=db_scalar($sql);
if(!empty($MemPhoto)){
  //header
echo "1";	
}else{
echo "0";		
}
?>

