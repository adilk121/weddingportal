<?php
$page_name=basename($_SERVER['PHP_SELF'],'.php');
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_from_mem_id  WHERE r.reg_status='Active' AND mb.msg_to_mem_id='$userDATA[reg_id]' AND mb.msg_status='Pending'";
$dataRecievedPending=db_query($sql);
$countRecievedPending=mysqli_num_rows($dataRecievedPending);
?>  
<div id="collapse-menu" class="collapse-container left-nv-bx">
<h3>Invitation<span class="arrow-r"></span></h3>
<div class="pro-typ1">
<p><a href="inbox.php" <?php if($page_name=="inbox"){?> class="actvd_inv" <?php }?>><i class="fa fa-angle-double-right"></i> Accepted</a></p>
<p><a href="pending.php" <?php if($page_name=="pending"){?> class="actvd_inv" <?php }?>><i class="fa fa-angle-double-right"></i> Pending (<?=$countRecievedPending?>)</a></p>
<p><a href="cancelled-declined.php" <?php if($page_name=="cancelled-declined"){?> class="actvd_inv" <?php }?>><i class="fa fa-angle-double-right"></i> Cancelled/Declined </a></p>
<p><a href="requests.php" <?php if($page_name=="requests"){?> class="actvd_inv" <?php }?>><i class="fa fa-angle-double-right"></i> Photo Requests </a></p>
</div>
</div>


<h4 class="hdg-box bg-styd"><a href="shortlisted-profile.php">Who Shortlisted my Profile</a></h4>
<h4 class="hdg-box bg-styd"><a href="viewed-profile.php">Who viewed my profile</a></h4>
<h4 class="hdg-box bg-styd"><a href="viewed-contacts.php">Who viewed my number</a></h4> 