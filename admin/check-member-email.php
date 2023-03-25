<?php 
require_once("../includes/dbsmain.inc.php");
@extract($_REQUEST);

if($join_email!=""){

$sql="SELECT reg_id FROM  tbl_registration WHERE reg_email='$join_email'";
$check=db_scalar($sql);

if($check){
echo "<span style='color:red;font-size:13px;font-weight:600'>This email id is already exist.</span>";	
}else{
echo "<span style='color:green;font-size:13px;font-weight:600'>You can use this email id.</span>";		
}

}
?>