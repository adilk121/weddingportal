<?php 
ob_start();
require_once("includes/dbsmain.inc.php"); 
include("site-main-query.php");
?>
<?php
$memID=$_REQUEST['memID'];
$memshipName=db_scalar("SELECT mem_name FROM tbl_membership WHERE mem_id='$memID'");

#PRICE
$memshipPrice=db_scalar("SELECT md_price FROM tbl_membership_detail WHERE md_mem_id='$memID' ORDER BY md_price DESC LIMIT 1");
?>
<div class="col-sm-12 membership-name"><?=$memshipName?> Benefits</div>
<div class="clearfix"></div>
<?php
$sql="SELECT * FROM tbl_membership_benefit WHERE b_status='Active' AND b_mem_id='$memID' ";
$dataBenefits=db_query($sql);
$countBenefits=mysqli_num_rows($dataBenefits);

if($countBenefits){
?>
<ul class="membership-benefit-list">
<?
while($recBenefits=mysqli_fetch_array($dataBenefits)){
?>

<li <?php if($recBenefits['b_is_ok']=="No"){?> class="benefit-no"<?php }?>  >


<?php if($recBenefits['b_is_ok']=="Yes"){?>
<i class="fa fa-check mr5 ml5" aria-hidden="true"></i>
<?php }else{?>
<i class="fa fa-times mr5 ml5" aria-hidden="true"></i>
<?php }?>

<?=$recBenefits['b_description']?>
</li>
<?php	
}	
?>
</ul>
<?php
}
?>
<div class="col-sm-12 btn btn-default" id="btn-pay"><i class="fa fa-inr"></i> <?=$memshipPrice?> | Upgrade</div>