<?php
require_once("includes/dbsmain.inc.php");
date_default_timezone_set("asia/kolkata");
$date_time=date("Y-m-d H:i:s");
//header time and date
db_query("insert into tbl_contact_view set
cv_view_by_mem_id='$_REQUEST[view_by_memid]',
cv_view_to_mem_id='$_REQUEST[view_to_memid]',
cv_date='$date_time'");

db_query("update tbl_registration set reg_membership_view_credit=reg_membership_view_credit-1 where reg_id='$_REQUEST[view_by_memid]'");

echo db_scalar("select reg_member_verified_mobile from tbl_registration where reg_id='$_REQUEST[view_to_memid]'");

?>
