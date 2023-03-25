<?php
require_once("../includes/dbsmain.inc.php");

$mem=$_REQUEST['mem'];
?>
<select class="form-control" name="reg_membership_duration" id="reg_membership_duration"  >
<option>Choose Duration</option>
<?php
$sql="SELECT * FROM tbl_upgrade_packages_detail WHERE package_parent_id='$mem' AND package_detail_status='Active'";
$dataMemDetail=db_query($sql);
while($recMemDetail=mysqli_fetch_array($dataMemDetail)){
?>
<option value="<?=$recMemDetail['package_month']?>"><?=$recMemDetail['package_month']?> Month(s)</option>
<?php
}
?>
</select>
