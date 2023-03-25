<?php 
ob_start();
require_once("includes/dbsmain.inc.php"); 
include("site-main-query.php");
?>
<?php
if($_REQUEST['MemID']!=""){

$MemID=$_REQUEST['MemID'];

$checkReq=db_scalar("SELECT sl_id FROM tbl_shortlist WHERE sl_mem='$MemID' AND sl_by='$userDATA[reg_id]' ");

if(!$checkReq){
$sql="INSERT INTO tbl_shortlist SET sl_mem='$MemID',sl_by='$userDATA[reg_id]',sl_date='".date("Y-m-d H:i:s")."'";
$res=db_query($sql);

if($res){
?>
<a href="Javascript:void(0)" onClick="alert('Request is already sent.')"  ><i class="fa fa-check" aria-hidden="true"></i> Shorted</a>
<?php 
}else{
echo "0";		
}

}

}
?>