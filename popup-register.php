<?php 
require_once("includes/dbsmain.inc.php");
session_start();

@extract($_POST);
$currDate=date("Y-m-d");
if(!empty($join_for_popup) && !empty($join_mobile_popup) && !empty($join_email_popup) && !empty($join_password_popup) ){
$sql="SELECT * FROM  tbl_registration WHERE reg_email='$_POST[join_email_popup]'";
$dataJoin=db_query($sql);
$dataCount=mysqli_num_rows($dataJoin);

if($dataCount){
echo "no";	
}else{
$sql="INSERT INTO tbl_registration SET 
reg_for='$join_for_popup',
reg_mobile_no='$join_mobile_popup',
reg_email='$join_email_popup',
reg_pass='$join_password_popup',
reg_add_date='".date("Y-m-d")."'
";	

$res=db_query($sql);
$inserID=mysqli_insert_id($GLOBALS['dbcon']);

if($inserID){
$_SESSION['regID']=$inserID;	
echo "$inserID";	
}else{
echo "0";	
}

}	
}else{
echo "0";	
}
?>