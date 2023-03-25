<?php 
ob_start();
require_once("includes/dbsmain.inc.php"); 
include("site-main-query.php");
?>
<?php
if($_REQUEST['msgID']!=""){


//////////  MAKING Cancelled START ///////////
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Cancelled"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="UPDATE tbl_msg_box SET msg_status='$act' WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_to_mem_id WHERE r.reg_status='Active' AND mb.msg_from_mem_id='$userDATA[reg_id]' AND (mb.msg_status='Pending' OR mb.msg_status='PendingAgain')";

$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
while($recMember=mysqli_fetch_array($dataMember)){	
?>   
<div class="col-md-12 mp_1d"> 
<div class="col-md-12 pd-0">
<div class="col-md-8" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>"><?=$recMember['reg_name']?> <span class="spn-sty1">(<?="R".$recMember['reg_id']?>)</span></a></h2>
</div>
<div class="col-md-4 text-right">
<?php
$waiting_time= $recMember['msg_req_sent_date']." ".$recMember['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','Pending-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
 <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
</div></div>

<div class="col-md-10 mp-btm1 mp_0bx">
Age : <?=$recMember['reg_age']?> Yrs | Height : <?=$recMember['reg_height']?> | Sect : <?=$recMember['reg_cast']?> | Division : <?=$recMember['reg_religion']?> - <?=$recMember['reg_sub_cast']?> | Location : <?=$recMember['reg_city']?>, <?=$recMember['reg_state_name']?>, <?=$recMember['reg_country_name']?> | Education : <?=$recMember['reg_highest_edu']?> | Occupation : <?=$recMember['reg_occupation']?>
<div class="clearfix"></div>
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMember['reg_last_login']))?></a></p>

<a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>" class="btn-ace-pro">View Full Profile</a>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','Cancelled')" class="btn-decl-box">Cancel</a>


</div>

</div>
<?php
}
}else{
?>
<div class="col-md-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING Cancelled END ///////////



//////////  MAKING ACCEPTED OTHER CANCELLED START ///////////
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Accepted-Other-Cancelled"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="UPDATE tbl_msg_box SET msg_status='Cancelled' WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_to_mem_id  WHERE r.reg_status='Active' AND mb.msg_from_mem_id='$userDATA[reg_id]' AND mb.msg_status='Accepted'";

$dataMemberAccepted=db_query($sql);
$countMemberAccepted=mysqli_num_rows($dataMemberAccepted);
if($countMemberAccepted){
while($recMemberAccepted=mysqli_fetch_array($dataMemberAccepted)){  
?>  
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
<div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>"><?=$recMemberAccepted['reg_name']?> <span class="spn-sty1">(<?="R".$recMemberAccepted['reg_id']?>)</span></a></h2>
</div>
<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<?php
$waiting_time= $recMemberAccepted['msg_req_sent_date']." ".$recMemberAccepted['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMemberAccepted['msg_id']?>','Accepted-Other-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>

</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12  mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">

          <?php 
        $check_photo=$recMemberAccepted['reg_profile_photo'];
        if(empty($check_photo) && $recMemberAccepted['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMemberAccepted['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMemberAccepted['reg_profile_photo']?>" class="img-inbox">
       <?php }?>

</div></div>

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mp-btm1 mp_0bx">
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMemberAccepted['reg_last_login']))?></a></p>
Age : <?=$recMemberAccepted['reg_age']?> Yrs | Height : <?=$recMemberAccepted['reg_height']?> | Sect : <?=$recMemberAccepted['reg_cast']?> | Division : <?=$recMemberAccepted['reg_religion']?> - <?=$recMemberAccepted['reg_sub_cast']?> | Location : <?=$recMemberAccepted['reg_city']?>, <?=$recMemberAccepted['reg_state_name']?>, <?=$recMemberAccepted['reg_country_name']?> | Education : <?=$recMemberAccepted['reg_highest_edu']?> | Occupation : <?=$recMemberAccepted['reg_occupation']?><div class="clearfix"></div>

<a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>" class="btn-ace-pro">View Full Profile</a>
<a onClick="change_status('<?=$recMemberAccepted['msg_id']?>','Accepted-Other-Cancelled')" class="btn-decl-box">Cancel</a>
 

</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
<div class="clearfix"></div>

<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 btn-gryes mp-top2"><a href="#">Send Mail</a></div>
<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 btn-gryes"><a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>">View Contact</a></div>
 
</div>
</div>
<?php
}
}else{
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>

<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING ACCEPTED OTHER CANCELLED END ///////////



//////////  MAKING Pending START ///////////
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Pending"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="UPDATE tbl_msg_box SET msg_status='$act' WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_to_mem_id  WHERE r.reg_status='Active' AND mb.msg_from_mem_id='$userDATA[reg_id]' AND mb.msg_status='Cancelled'";

$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
while($recMember=mysqli_fetch_array($dataMember)){	
?>   
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
<div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>"><?=$recMember['reg_name']?> <span class="spn-sty1">(<?="R".$recMember['reg_id']?>)</span></a></h2>
</div>
<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<?php
$waiting_time= $recMember['msg_req_sent_date']." ".$recMember['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','Cancelled-Delete')"  title="Cancelled" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
          <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
</div></div>

<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 mp-btm1 mp_0bx">
Age : <?=$recMember['reg_age']?> Yrs | Height : <?=$recMember['reg_height']?> | Sect : <?=$recMember['reg_cast']?> | Division : <?=$recMember['reg_religion']?> - <?=$recMember['reg_sub_cast']?> | Location : <?=$recMember['reg_city']?>, <?=$recMember['reg_state_name']?>, <?=$recMember['reg_country_name']?> | Education : <?=$recMember['reg_highest_edu']?> | Occupation : <?=$recMember['reg_occupation']?>
<div class="clearfix"></div>
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMember['reg_last_login']))?></a></p>

<a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>" class="btn-ace-pro">View Full Profile</a>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','Pending')" class="btn-decl-box">Send Again</a>


</div>

</div>
<?php
}
}else{
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING Pending END ///////////


//////////  MAKING PendingAgain START ///////////
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="PendingAgain"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="UPDATE tbl_msg_box SET msg_status='$act' WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_to_mem_id  WHERE r.reg_status='Active' AND mb.msg_from_mem_id='$userDATA[reg_id]' AND mb.msg_status='Cancelled'";

$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
while($recMember=mysqli_fetch_array($dataMember)){	
?>   
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
<div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>"><?=$recMember['reg_name']?> <span class="spn-sty1">(<?="R".$recMember['reg_id']?>)</span></a></h2>
</div>
<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<?php
$waiting_time= $recMember['msg_req_sent_date']." ".$recMember['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','Cancelled-Delete')"  title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
          <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
</div></div>

<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 mp-btm1 mp_0bx">
Age : <?=$recMember['reg_age']?> Yrs | Height : <?=$recMember['reg_height']?> | Sect : <?=$recMember['reg_cast']?> | Division : <?=$recMember['reg_religion']?> - <?=$recMember['reg_sub_cast']?> | Location : <?=$recMember['reg_city']?>, <?=$recMember['reg_state_name']?>, <?=$recMember['reg_country_name']?> | Education : <?=$recMember['reg_highest_edu']?> | Occupation : <?=$recMember['reg_occupation']?>
<div class="clearfix"></div>
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMember['reg_last_login']))?></a></p>

<a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>" class="btn-ace-pro">View Full Profile</a>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','PendingAgain')" class="btn-decl-box">Send Again</a>


</div>

</div>
<?php
}
}else{
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING PendingAgain END ///////////


//////////  MAKING Pending DELETE START ///////////
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Pending-Delete"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="DELETE FROM tbl_msg_box WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_to_mem_id  WHERE r.reg_status='Active' AND mb.msg_from_mem_id='$userDATA[reg_id]' AND (mb.msg_status='Pending' OR mb.msg_status='PendingAgain')";

$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
while($recMember=mysqli_fetch_array($dataMember)){	
?>   
<div class="col-md-12 mp_1d"> 
<div class="col-md-12 pd-0">
<div class="col-md-8" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>"><?=$recMember['reg_name']?> <span class="spn-sty1">(<?="R".$recMember['reg_id']?>)</span></a></h2>
</div>
<div class="col-md-4 text-right">
<?php
$waiting_time= $recMember['msg_req_sent_date']." ".$recMember['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a  href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','Pending-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
 <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
</div></div>

<div class="col-md-10 mp-btm1 mp_0bx">
Age : <?=$recMember['reg_age']?> Yrs | Height : <?=$recMember['reg_height']?> | Sect : <?=$recMember['reg_cast']?> | Division : <?=$recMember['reg_religion']?> - <?=$recMember['reg_sub_cast']?> | Location : <?=$recMember['reg_city']?>, <?=$recMember['reg_state_name']?>, <?=$recMember['reg_country_name']?> | Education : <?=$recMember['reg_highest_edu']?> | Occupation : <?=$recMember['reg_occupation']?>
<div class="clearfix"></div>
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMember['reg_last_login']))?></a></p>

<a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>" class="btn-ace-pro">View Full Profile</a>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','Cancelled')" class="btn-decl-box">Cancel</a>


</div>

</div>
<?php
}
}else{
?>
<div class="col-md-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING Pending DELETE END ///////////


//////////  MAKING VIEWED CONTACT DELETE START ///////////
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Contact-View-Delete"){
	
$checkReq=db_scalar("SELECT cv_id FROM tbl_contact_view WHERE cv_id='$msgID'");

if($checkReq){
$sql="DELETE FROM tbl_contact_view WHERE cv_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_contact_view WHERE cv_view_by_mem_id='$userDATA[reg_id]'";
$dataMemberAccepted=db_query($sql);
$countMemberAccepted=mysqli_num_rows($dataMemberAccepted);
if($countMemberAccepted>0){
while($recViewed=mysqli_fetch_array($dataMemberAccepted)){	

$sql="SELECT * FROM tbl_registration WHERE reg_id='$recViewed[cv_view_to_mem_id]' ";
$dataView=db_query($sql);
$recView=mysqli_fetch_array($dataView);
?>  
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
   <div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
    <h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recView['reg_id']?>">(R<?=$recView['reg_id']?>) </a></h2>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<!--<span class="spn-sty">Waiting for 9 days</span>-->
<a href="Javascript:void(0)" onClick="change_status('<?=$recViewed['cv_id']?>','Contact-View-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
   </div>
 </div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
          <?php 
        $check_photo=$recView['reg_profile_photo'];
        if(empty($check_photo) && $recView['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recView['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recView['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
 
 </div></div>

  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mp-btm1 mp_0bx">
  
         <p>Age : <?=$recView['reg_age']?> Yrs | Height : <?=$recView['reg_height']?> | Sect : <?=$recView['reg_cast']?> | Division : <?=$recView['reg_religion']?> - <?=$recView['reg_preference_sub_cast']?> | Location : <?=$recView['reg_city']?>, <?=$recView['reg_state_name']?>, <?=$recView['reg_country_name']?> | Education : <?=$recView['reg_highest_edu']?> | Occupation : <?=$recView['reg_occupation']?></p>
       <div class="clearfix"></div>
        
       <p><?=substr($recView['reg_mem_myself'],0,100)?></p>
       <p class="mp_0bx">
   <a style="cursor:default" href="javascript:void(0)" class="molcht onl-sty">
   <i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-Y",strtotime($recView['reg_last_login']))?></a></p>
       
    
          </div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 pdg_1">
<div class="clearfix"></div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn-gryes mp-top2"><a href="other-profile.php?mem=<?=$recView['reg_id']?>" class="f-btn"> Full Profile</a></div>
            
               
         </div>
  </div>
<?php
}
}else{
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING VIEWED CONTACT DELETE END ///////////



//////////  MAKING Cancelled DELETE START ///////////

$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Cancelled-Delete"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="DELETE FROM tbl_msg_box WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_to_mem_id  WHERE r.reg_status='Active' AND mb.msg_from_mem_id='$userDATA[reg_id]' AND mb.msg_status='Cancelled'";

$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
while($recMember=mysqli_fetch_array($dataMember)){	
?>   
<div class="col-md-12 mp_1d"> 
<div class="col-md-12 pd-0">
<div class="col-md-8" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>"><?=$recMember['reg_name']?> <span class="spn-sty1">(<?="R".$recMember['reg_id']?>)</span></a></h2>
</div>
<div class="col-md-4 text-right">
<?php
$waiting_time= $recMember['msg_req_sent_date']." ".$recMember['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','Cancelled-Delete')"  title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
          <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
</div></div>

<div class="col-md-10 mp-btm1 mp_0bx">
Age : <?=$recMember['reg_age']?> Yrs | Height : <?=$recMember['reg_height']?> | Sect : <?=$recMember['reg_cast']?> | Division : <?=$recMember['reg_religion']?> - <?=$recMember['reg_sub_cast']?> | Location : <?=$recMember['reg_city']?>, <?=$recMember['reg_state_name']?>, <?=$recMember['reg_country_name']?> | Education : <?=$recMember['reg_highest_edu']?> | Occupation : <?=$recMember['reg_occupation']?>
<div class="clearfix"></div>
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMember['reg_last_login']))?></a></p>

<a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>" class="btn-ace-pro">View Full Profile</a>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','PendingAgain')" class="btn-decl-box">Send Again</a>

</div>

</div>
<?php
}
}else{
?>
<div class="col-md-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING Cancelled DELETE END ///////////




//////////  MAKING Received DELETE START ///////////

$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Received-Delete"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="DELETE FROM tbl_msg_box WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_from_mem_id  WHERE r.reg_status='Active' AND mb.msg_to_mem_id='$userDATA[reg_id]' AND (mb.msg_status='Pending' OR mb.msg_status='PendingAgain')";

$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
while($recMemberRecieved=mysqli_fetch_array($dataMember)){	
?>   
<div class="col-md-12 mp_1d"> 
<div class="col-md-12 pd-0">
<div class="col-md-8" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMemberRecieved['reg_id']?>"><?=$recMemberRecieved['reg_name']?> <span class="spn-sty1">(<?="R".$recMemberRecieved['reg_id']?>)</span></a></h2>
</div>
<div class="col-md-4 text-right">
<?php
$waiting_time= $recMemberRecieved['msg_req_sent_date']." ".$recMemberRecieved['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMemberRecieved['msg_id']?>','Received-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
         <?php 
        $check_photo=$recMemberRecieved['reg_profile_photo'];
        if(empty($check_photo) && $recMemberRecieved['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMemberRecieved['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMemberRecieved['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
 </div> </div>

<div class="col-md-8 mp-btm1 mp_0bx">

<p>Age : <?=$recMemberRecieved['reg_age']?> Yrs | Height : <?=$recMemberRecieved['reg_height']?> | Sect : <?=$recMemberRecieved['reg_cast']?> | Division : <?=$recMemberRecieved['reg_religion']?> - <?=$recMemberRecieved['reg_sub_cast']?> | Location : <?=$recMemberRecieved['reg_city']?>, <?=$recMemberRecieved['reg_state_name']?>, <?=$recMemberRecieved['reg_country_name']?> | Education : <?=$recMemberRecieved['reg_highest_edu']?> | Occupation : <?=$recMemberRecieved['reg_occupation']?>
</p>
<div class="clearfix"></div>

<!--<p>I like your profile and I want to get in touch with you. Please accept if interested.</p>-->
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMemberRecieved['reg_last_login']))?></a></p>


</div>
<div class="col-md-2 pdg_1">
<div class="clearfix"></div>

<div class="col-md-12 btn-gryes mp-top2"><a target="_blank" href="other-profile.php?mem=<?=$recMemberRecieved['reg_id']?>" class="f-btn"> Full Profile</a></div>
<div class="col-md-12 btn-gryes"><a href="Javascript:void(0)" onClick="change_status('<?=$recMemberRecieved['msg_id']?>','Accepted')" class="a-btn">Accept</a></div>
<div class="col-md-12 btn-gryes"><a href="Javascript:void(0)" onClick="change_status('<?=$recMemberRecieved['msg_id']?>','Declined')" class="d-btn">Decline</a></div>

</div>

<?php
}
}else{
?>
<div class="col-md-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING Received DELETE END ///////////



//////////  MAKING Accepted  START ///////////

$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Accepted"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="UPDATE tbl_msg_box SET msg_status='$act' WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_from_mem_id  WHERE r.reg_status='Active' AND mb.msg_to_mem_id='$userDATA[reg_id]' AND (mb.msg_status='Pending' OR mb.msg_status='PendingAgain')";

$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
while($recMemberRecieved=mysqli_fetch_array($dataMember)){	
?>   
<div class="col-md-12 mp_1d"> 
<div class="col-md-12 pd-0">
<div class="col-md-8" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMemberRecieved['reg_id']?>"><?=$recMemberRecieved['reg_name']?> <span class="spn-sty1">(<?="R".$recMemberRecieved['reg_id']?>)</span></a></h2>
</div>
<div class="col-md-4 text-right">
<?php
$waiting_time= $recMemberRecieved['msg_req_sent_date']." ".$recMemberRecieved['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMemberRecieved['msg_id']?>','Received-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
         <?php 
        $check_photo=$recMemberRecieved['reg_profile_photo'];
        if(empty($check_photo) && $recMemberRecieved['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMemberRecieved['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMemberRecieved['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
 </div> </div>

<div class="col-md-8 mp-btm1 mp_0bx">

<p>Age : <?=$recMemberRecieved['reg_age']?> Yrs | Height : <?=$recMemberRecieved['reg_height']?> | Sect : <?=$recMemberRecieved['reg_cast']?> | Division : <?=$recMemberRecieved['reg_religion']?> - <?=$recMemberRecieved['reg_sub_cast']?> | Location : <?=$recMemberRecieved['reg_city']?>, <?=$recMemberRecieved['reg_state_name']?>, <?=$recMemberRecieved['reg_country_name']?> | Education : <?=$recMemberRecieved['reg_highest_edu']?> | Occupation : <?=$recMemberRecieved['reg_occupation']?>
</p>
<div class="clearfix"></div>

<!--<p>I like your profile and I want to get in touch with you. Please accept if interested.</p>-->
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMemberRecieved['reg_last_login']))?></a></p>


</div>
<div class="col-md-2 pdg_1">
<div class="clearfix"></div>

<div class="col-md-12 btn-gryes mp-top2"><a target="_blank" href="other-profile.php?mem=<?=$recMemberRecieved['reg_id']?>" class="f-btn"> Full Profile</a></div>
<div class="col-md-12 btn-gryes"><a href="javascript:void(0)" class="a-btn" onClick="change_status('<?=$recMemberRecieved['msg_id']?>','Accepted')">Accept</a></div>
<div class="col-md-12 btn-gryes"><a href="Javascript:void(0)" onClick="change_status('<?=$recMemberRecieved['msg_id']?>','Declined')" class="d-btn">Decline</a></div>

</div>

<?php
}
}else{
?>
<div class="col-md-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING Accepted END ///////////


//////////  MAKING Accepted Delete  START ///////////

$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Accepted-Delete"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="DELETE FROM tbl_msg_box WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_from_mem_id  WHERE r.reg_status='Active' AND mb.msg_to_mem_id='$userDATA[reg_id]' AND mb.msg_status='Accepted'";

$dataMemberAccepted=db_query($sql);
$countMemberAccepted=mysqli_num_rows($dataMemberAccepted);
if($countMemberAccepted){
while($recMemberAccepted=mysqli_fetch_array($dataMemberAccepted)){
?>   
<div class="col-md-12 mp_1d" > 

<div class="col-md-12 pd-0">
<div class="col-md-8" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>"><?=$recMemberAccepted['reg_name']?> <span class="spn-sty1">(<?="R".$recMemberAccepted['reg_id']?>)</span></a></h2>
</div>
<div class="col-md-4 text-right">
<?php
$waiting_time= $recMemberAccepted['msg_req_sent_date']." ".$recMemberAccepted['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMemberAccepted['msg_id']?>','Accepted-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>

</div>
</div>
	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12  mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
          <?php 
        $check_photo=$recMemberAccepted['reg_profile_photo'];
        if(empty($check_photo) && $recMemberAccepted['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMemberAccepted['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMemberAccepted['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
	</div></div>

<div class="col-md-8 mp-btm1 mp_0bx">
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMemberAccepted['reg_last_login']))?></a></p>
Age : <?=$recMemberAccepted['reg_age']?> Yrs | Height : <?=$recMemberAccepted['reg_height']?> | Sect : <?=$recMemberAccepted['reg_cast']?> | Division : <?=$recMemberAccepted['reg_religion']?> - <?=$recMemberAccepted['reg_sub_cast']?> | Location : <?=$recMemberAccepted['reg_city']?>, <?=$recMemberAccepted['reg_state_name']?>, <?=$recMemberAccepted['reg_country_name']?> | Education : <?=$recMemberAccepted['reg_highest_edu']?> | Occupation : <?=$recMemberAccepted['reg_occupation']?><div class="clearfix"></div>

<a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>" class="btn-ace-pro">View Full Profile</a>
<a onClick="change_status('<?=$recMemberAccepted['msg_id']?>','Accepted-Declined')" class="btn-decl-box">Decline</a>
 

</div>
<div class="col-md-2">
<div class="clearfix"></div>

<div class="col-md-12 btn-gryes mp-top2"><a href="#">Send Mail</a></div>
<div class="col-md-12 btn-gryes"><a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>">View Contact</a></div>
 
</div>
</div>

<?php
}
}else{
?>
<div class="col-md-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING Accepted DELETE END ///////////



//////////  MAKING PHOTO REQUEST DELETE START ///////////

$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Photo-Request-Delete"){
	
$checkReq=db_scalar("SELECT request_id FROM tbl_request WHERE request_id='$msgID'");

if($checkReq){
$sql="DELETE FROM tbl_request WHERE request_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_request AS mb ON r.reg_id=mb.request_to  WHERE r.reg_status='Active' AND mb.request_from='$userDATA[reg_id]'";

$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
while($recMember=mysqli_fetch_array($dataMember)){  
?>   
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
<div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>"><?=$recMember['reg_name']?> <span class="spn-sty1">(<?="R".$recMember['reg_id']?>)</span></a></h2>
</div>
<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<?php
$waiting_time= $recMember['request_add_date']." ".$recMember['request_add_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMember['request_id']?>','Photo-Request-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
          <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
</div></div>

<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 mp-btm1 mp_0bx">
Age : <?=$recMember['reg_age']?> Yrs | Height : <?=$recMember['reg_height']?> | Sect : <?=$recMember['reg_cast']?> | Division : <?=$recMember['reg_religion']?> - <?=$recMember['reg_sub_cast']?> | Location : <?=$recMember['reg_city']?>, <?=$recMember['reg_state_name']?>, <?=$recMember['reg_country_name']?> | Education : <?=$recMember['reg_highest_edu']?> | Occupation : <?=$recMember['reg_occupation']?>
<div class="clearfix"></div>
<p class="mp_0bx">
<a style="cursor:default" href="javascript:void(0)" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMember['reg_last_login']))?></a></p>

</div>
<!--<div class="col-md-2">
<div class="clearfix"></div>

<div class="col-md-12 btn-gryes mp-top2"><a href="#">Send Mail</a></div>
<div class="col-md-12 btn-gryes"><a href="#">View Contact</a></div>

</div>-->
</div>
<?php
}
}else{
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>

<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING PHOTO REQUEST DELETE END ///////////


//////////  MAKING PROFILE VIEW DELETE START ///////////

$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Profile-View-Delete"){
	
$checkReq=db_scalar("SELECT pro_id FROM tbl_profile_view WHERE pro_id='$msgID'");

if($checkReq){
$sql="DELETE FROM tbl_profile_view WHERE pro_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_profile_view WHERE pro_view_by_mem_id='$userDATA[reg_id]'";
$dataMemberAccepted=db_query($sql);
$countMemberAccepted=mysqli_num_rows($dataMemberAccepted);
if($countMemberAccepted>0){
while($recViewed=mysqli_fetch_array($dataMemberAccepted)){	

$sql="SELECT * FROM tbl_registration WHERE reg_id='$recViewed[pro_view_to_mem_id]' ";
$dataView=db_query($sql);
$recView=mysqli_fetch_array($dataView);
?>  
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
   <div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
   <h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recView['reg_id']?>">(R<?=$recView['reg_id']?>) </a></h2>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<?php
$waiting_time= $recViewed['pro_date'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recViewed['pro_id']?>','Profile-View-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
   </div>
 </div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
          <?php 
        $check_photo=$recView['reg_profile_photo'];
        if(empty($check_photo) && $recView['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recView['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recView['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
 
 </div></div>

  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mp-btm1 mp_0bx">
  
         <p>Age : <?=$recView['reg_age']?> Yrs | Height : <?=$recView['reg_height']?> | Sect : <?=$recView['reg_cast']?> | Division : <?=$recView['reg_religion']?> - <?=$recView['reg_preference_sub_cast']?> | Location : <?=$recView['reg_city']?>, <?=$recView['reg_state_name']?>, <?=$recView['reg_country_name']?> | Education : <?=$recView['reg_highest_edu']?> | Occupation : <?=$recView['reg_occupation']?></p>
       <div class="clearfix"></div>
        
       <p><?=substr($recView['reg_mem_myself'],0,100)?></p>
       <p class="mp_0bx">
   <a style="cursor:default" href="javascript:void(0)" class="molcht onl-sty">
   <i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-Y",strtotime($recView['reg_last_login']))?></a></p>
       
    
          </div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 pdg_1">
<div class="clearfix"></div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn-gryes mp-top2"><a href="other-profile.php?mem=<?=$recView['reg_id']?>" class="f-btn"> Full Profile</a></div>
            
               
         </div>
  </div>
<?php
}
}else{
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING PROFILE VIEW DELETE END ///////////


//////////  MAKING PROFILE SHORTLISTED DELETE START ///////////

$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Shortlisted-Delete"){
	
$checkReq=db_scalar("SELECT sl_id FROM tbl_shortlist WHERE sl_id='$msgID'");

if($checkReq){
$sql="DELETE FROM tbl_shortlist WHERE sl_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_shortlist WHERE sl_by='$userDATA[reg_id]'";
$dataMemberAccepted=db_query($sql);
$countMemberAccepted=mysqli_num_rows($dataMemberAccepted);
if($countMemberAccepted>0){
while($recViewed=mysqli_fetch_array($dataMemberAccepted)){	

$sql="SELECT * FROM tbl_registration WHERE reg_id='$recViewed[sl_mem]' ";
$dataView=db_query($sql);
$recView=mysqli_fetch_array($dataView);
?>  
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
   <div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
   <h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recView['reg_id']?>">(R<?=$recView['reg_id']?>) </a></h2>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<?php
$waiting_time= $recViewed['sl_date'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recViewed['sl_id']?>','Shortlisted-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
   </div>
 </div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
          <?php 
        $check_photo=$recView['reg_profile_photo'];
        if(empty($check_photo) && $recView['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recView['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recView['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
 
 </div></div>

  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mp-btm1 mp_0bx">
  
         <p>Age : <?=$recView['reg_age']?> Yrs | Height : <?=$recView['reg_height']?> | Sect : <?=$recView['reg_cast']?> | Division : <?=$recView['reg_religion']?> - <?=$recView['reg_preference_sub_cast']?> | Location : <?=$recView['reg_city']?>, <?=$recView['reg_state_name']?>, <?=$recView['reg_country_name']?> | Education : <?=$recView['reg_highest_edu']?> | Occupation : <?=$recView['reg_occupation']?></p>
       <div class="clearfix"></div>
        
       <p><?=substr($recView['reg_mem_myself'],0,100)?></p>
       <p class="mp_0bx">
   <a href="#" class="molcht onl-sty">
   <i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-Y",strtotime($recView['reg_last_login']))?></a></p>
       
    
          </div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 pdg_1">
<div class="clearfix"></div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn-gryes mp-top2"><a href="other-profile.php?mem=<?=$recView['reg_id']?>" class="f-btn"> Full Profile</a></div>
            
               
         </div>
  </div>
<?php
}
}else{
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING PROFILE SHORTLISTED DELETE END ///////////


//////////  MAKING Accepted-Other-Delete  START ///////////

$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Accepted-Other-Delete"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="DELETE FROM tbl_msg_box WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_to_mem_id  WHERE r.reg_status='Active' AND mb.msg_from_mem_id='$userDATA[reg_id]' AND mb.msg_status='Accepted'";

$dataMemberAccepted=db_query($sql);
$countMemberAccepted=mysqli_num_rows($dataMemberAccepted);
if($countMemberAccepted){
while($recMemberAccepted=mysqli_fetch_array($dataMemberAccepted)){
?>   
<div class="col-md-12 mp_1d" > 

<div class="col-md-12 pd-0">
<div class="col-md-8" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>"><?=$recMemberAccepted['reg_name']?> <span class="spn-sty1">(<?="R".$recMemberAccepted['reg_id']?>)</span></a></h2>
</div>
<div class="col-md-4 text-right">
<?php
$waiting_time= $recMemberAccepted['msg_req_sent_date']." ".$recMemberAccepted['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMemberAccepted['msg_id']?>','Accepted-Other-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>

</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12  mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">

          <?php 
        $check_photo=$recMemberAccepted['reg_profile_photo'];
        if(empty($check_photo) && $recMemberAccepted['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMemberAccepted['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMemberAccepted['reg_profile_photo']?>" class="img-inbox">
       <?php }?>

</div></div>

<div class="col-md-8 mp-btm1 mp_0bx">
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMemberAccepted['reg_last_login']))?></a></p>
Age : <?=$recMemberAccepted['reg_age']?> Yrs | Height : <?=$recMemberAccepted['reg_height']?> | Sect : <?=$recMemberAccepted['reg_cast']?> | Division : <?=$recMemberAccepted['reg_religion']?> - <?=$recMemberAccepted['reg_sub_cast']?> | Location : <?=$recMemberAccepted['reg_city']?>, <?=$recMemberAccepted['reg_state_name']?>, <?=$recMemberAccepted['reg_country_name']?> | Education : <?=$recMemberAccepted['reg_highest_edu']?> | Occupation : <?=$recMemberAccepted['reg_occupation']?><div class="clearfix"></div>

<a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>" class="btn-ace-pro">View Full Profile</a>
<a onClick="change_status('<?=$recMemberAccepted['msg_id']?>','Accepted-Other-Cancelled')" class="btn-decl-box">Cancel</a>
 

</div>
<div class="col-md-2">
<div class="clearfix"></div>

<div class="col-md-12 btn-gryes mp-top2"><a href="#">Send Mail</a></div>
<div class="col-md-12 btn-gryes"><a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>">View Contact</a></div>
 
</div>
</div>

<?php
}
}else{
?>
<div class="col-md-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING Accepted DELETE END ///////////

//////////  MAKING Declined ACCEPTED START PAGE(cancelled-declined.php) ///////////
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Declined-Accepted"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="UPDATE tbl_msg_box SET msg_status='Accepted' WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_from_mem_id  WHERE r.reg_status='Active' AND mb.msg_to_mem_id='$userDATA[reg_id]' AND mb.msg_status='Declined'";

$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
while($recMember=mysqli_fetch_array($dataMember)){	
?>  
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
<div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>"><?=$recMember['reg_name']?> <span class="spn-sty1">(<?="R".$recMember['reg_id']?>)</span></a></h2>
</div>
<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<?php
$waiting_time= $recMember['msg_req_sent_date']." ".$recMember['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','Declined-Delete')"  title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
            <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
	</div></div>

<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 mp-btm1 mp_0bx"> Age : <?=$recMember['reg_age']?> Yrs | Height : <?=$recMember['reg_height']?> | Sect : <?=$recMember['reg_cast']?> | Division : <?=$recMember['reg_religion']?> - <?=$recMember['reg_sub_cast']?> | Location : <?=$recMember['reg_city']?>, <?=$recMember['reg_state_name']?>, <?=$recMember['reg_country_name']?> | Education : <?=$recMember['reg_highest_edu']?> | Occupation : <?=$recMember['reg_occupation']?>

      <div class="clearfix"></div>
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMember['reg_last_login']))?></a></p>

<a onClick="change_status('<?=$recMember['msg_id']?>','Declined-Accepted')" class="btn-ace-pro">Accept</a>
</div>

</div>
<?php
}
}else{
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>

<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING Declined ACCEPTED END PAGE(cancelled-declined.php) ///////////

//////////  MAKING Declined START ///////////
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Declined"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="UPDATE tbl_msg_box SET msg_status='$act' WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
 $sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_from_mem_id  WHERE r.reg_status='Active' AND mb.msg_to_mem_id='$userDATA[reg_id]' AND (mb.msg_status='Pending' OR mb.msg_status='PendingAgain')";

$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
while($recMember=mysqli_fetch_array($dataMember)){	
?>   
<div class="col-md-12 mp_1d"> 
<div class="col-md-12 pd-0">
<div class="col-md-8" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>"><?=$recMember['reg_name']?> <span class="spn-sty1">(<?="R".$recMember['reg_id']?>)</span></a></h2>
</div>
<div class="col-md-4 text-right">
<?php
$waiting_time= $recMember['msg_req_sent_date']." ".$recMember['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','Received-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
         <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
 </div> </div>

<div class="col-md-8 mp-btm1 mp_0bx">

<p>Age : <?=$recMember['reg_age']?> Yrs | Height : <?=$recMember['reg_height']?> | Sect : <?=$recMember['reg_cast']?> | Division : <?=$recMember['reg_religion']?> - <?=$recMember['reg_sub_cast']?> | Location : <?=$recMember['reg_city']?>, <?=$recMember['reg_state_name']?>, <?=$recMember['reg_country_name']?> | Education : <?=$recMember['reg_highest_edu']?> | Occupation : <?=$recMember['reg_occupation']?>
</p>
<div class="clearfix"></div>

<!--<p>I like your profile and I want to get in touch with you. Please accept if interested.</p>-->
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMember['reg_last_login']))?></a></p>


</div>
<div class="col-md-2 pdg_1">
<div class="clearfix"></div>

<div class="col-md-12 btn-gryes mp-top2"><a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>" class="f-btn"> Full Profile</a></div>
<div class="col-md-12 btn-gryes"><a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','Accepted')" class="a-btn">Accept</a></div>
<div class="col-md-12 btn-gryes"><a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','Declined')" class="d-btn">Decline</a></div>
 
</div>
</div>
<?php
}
}else{
?>
<div class="col-md-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING Declined END ///////////


//////////  MAKING ACCEPT Declined START ///////////
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Accepted-Declined"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="UPDATE tbl_msg_box SET msg_status='Declined' WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_from_mem_id  WHERE r.reg_status='Active' AND mb.msg_to_mem_id='$userDATA[reg_id]' AND mb.msg_status='Accepted'";

$dataMemberAccepted=db_query($sql);
$countMemberAccepted=mysqli_num_rows($dataMemberAccepted);
if($countMemberAccepted){
while($recMemberAccepted=mysqli_fetch_array($dataMemberAccepted)){  
?>  
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d" > 

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
<div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>"><?=$recMemberAccepted['reg_name']?> <span class="spn-sty1">(<?="R".$recMemberAccepted['reg_id']?>)</span></a></h2>
</div>
<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<?php
$waiting_time= $recMemberAccepted['msg_req_sent_date']." ".$recMemberAccepted['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMemberAccepted['msg_id']?>','Accepted-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>

</div>
</div>
	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12  mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
          <?php 
        $check_photo=$recMemberAccepted['reg_profile_photo'];
        if(empty($check_photo) && $recMemberAccepted['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMemberAccepted['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMemberAccepted['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
	</div></div>

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mp-btm1 mp_0bx">
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMemberAccepted['reg_last_login']))?></a></p>
Age : <?=$recMemberAccepted['reg_age']?> Yrs | Height : <?=$recMemberAccepted['reg_height']?> | Sect : <?=$recMemberAccepted['reg_cast']?> | Division : <?=$recMemberAccepted['reg_religion']?> - <?=$recMemberAccepted['reg_sub_cast']?> | Location : <?=$recMemberAccepted['reg_city']?>, <?=$recMemberAccepted['reg_state_name']?>, <?=$recMemberAccepted['reg_country_name']?> | Education : <?=$recMemberAccepted['reg_highest_edu']?> | Occupation : <?=$recMemberAccepted['reg_occupation']?><div class="clearfix"></div>

<a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>" class="btn-ace-pro">View Full Profile</a>
	
<a onClick="change_status('<?=$recMemberAccepted['msg_id']?>','Accepted-Declined')" class="btn-decl-box">Decline</a>
 <div class="clearfix"></div>

</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
<div class="clearfix"></div>

<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 btn-gryes mp-top2"><a href="#">Send Mail</a></div>
<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 btn-gryes"><a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>">View Contact</a></div>
 
</div>
</div>
<?php
}
}else{
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>


<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING ACCEPT Declined END ///////////


//////////  MAKING Declined DELETE START ///////////
$msgID=$_REQUEST['msgID'];
$act=$_REQUEST['act'];

if($act=="Declined-Delete"){
	
$checkReq=db_scalar("SELECT msg_id FROM tbl_msg_box WHERE msg_id='$msgID'");

if($checkReq){
$sql="DELETE FROM tbl_msg_box WHERE msg_id='$msgID' ";
$res=db_query($sql);

if($res){
?>

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_from_mem_id  WHERE r.reg_status='Active' AND mb.msg_to_mem_id='$userDATA[reg_id]' AND mb.msg_status='Declined'";

$dataMember=db_query($sql);
$countMember=mysqli_num_rows($dataMember);
if($countMember){
while($recMember=mysqli_fetch_array($dataMember)){	
?>  
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
<div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMember['reg_id']?>"><?=$recMember['reg_name']?> <span class="spn-sty1">(<?="R".$recMember['reg_id']?>)</span></a></h2>
</div>
<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<?php
$waiting_time= $recMember['msg_req_sent_date']." ".$recMember['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMember['msg_id']?>','Declined-Delete')"  title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
            <?php 
        $check_photo=$recMember['reg_profile_photo'];
        if(empty($check_photo) && $recMember['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMember['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMember['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
	</div></div>

<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 mp-btm1 mp_0bx"> Age : <?=$recMember['reg_age']?> Yrs | Height : <?=$recMember['reg_height']?> | Sect : <?=$recMember['reg_cast']?> | Division : <?=$recMember['reg_religion']?> - <?=$recMember['reg_sub_cast']?> | Location : <?=$recMember['reg_city']?>, <?=$recMember['reg_state_name']?>, <?=$recMember['reg_country_name']?> | Education : <?=$recMember['reg_highest_edu']?> | Occupation : <?=$recMember['reg_occupation']?>

      <div class="clearfix"></div>
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMember['reg_last_login']))?></a></p>

<a onClick="change_status('<?=$recMember['msg_id']?>','Declined-Accepted')" class="btn-ace-pro">Accept</a>
</div>

</div>
<?php
}
}else{
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>

<?php 
}else{
echo "0";		
}

}

}
//////////  MAKING Declined DELETE END ///////////



}
?>