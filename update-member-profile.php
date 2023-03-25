<?php 
ob_start();
require_once("includes/dbsmain.inc.php"); 
include("site-main-query.php");
?>
<?php
if($_REQUEST['edit_contact']=="edit-contact"){

$sql="UPDATE tbl_registration SET 
reg_member_mobile='$reg_member_mobile',
reg_member_alt_mobile='$reg_member_alt_mobile',
reg_member_email='$reg_member_email',
reg_member_call_time='$reg_member_call_time'
WHERE reg_id='$userDATA[reg_id]'
";

$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<img src="images/verfied.png" alt="Verified" title="Verified" class="vrfyd">

<div class="col-md-12 mp_1">
<div class="col-md-4 agd">
<h5>Mobile No.</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-7 mp_1">
<p><?=$mem_data['reg_member_mobile']?></p>
</div>
</div>
<div class="col-md-12 mp_1">
<div class="col-md-4 agd">
<h5>Alternate No.</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-7 mp_1">
<p><?=$mem_data['reg_member_alt_mobile']?></p>
</div>
</div>
<div class="col-md-12 mp_1">
<div class="col-md-4 agd">
<h5>Email Id</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-7 mp_1">
<p><?=$mem_data['reg_member_email']?></p>
</div>
</div>
<div class="col-md-12 mp_1">
<div class="col-md-4 agd">
<h5 style="font-size:11px;white-space:nowrap">Suitable time to call</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-7 mp_1">
<p><?=$mem_data['reg_member_call_time']?></p>
</div>
</div>
<?php
}else{
echo "0";		
}

}
?>


<?php
if($_REQUEST['edit_myself1']=="edit-myself"){
	$res=$_REQUEST['res'];
$sql="UPDATE tbl_registration SET reg_mem_myself='$res' WHERE reg_id='$userDATA[reg_id]'";
$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<p style="text-align:justify;"><?=$mem_data['reg_mem_myself']?></p>
<?php
}else{
echo "0";		
}

}
?>


<?php
if($_REQUEST['edit_basic']=="edit-basic"){

$reg_dob=date("Y-m-d",strtotime($reg_dob));

$sql="UPDATE tbl_registration SET 
reg_name='$reg_name',
reg_gender='$reg_gender',
reg_dob='$reg_dob',
reg_age='$reg_age',
reg_height='$reg_height',
reg_marital_status='$reg_marital_status',
reg_is_any_disability='$reg_is_any_disability',
reg_aadhar_number='$reg_aadhar_number',
reg_profile_manage_by='$reg_profile_manage_by',
reg_blood_group='$reg_blood_group'
WHERE reg_id='$userDATA[reg_id]'
";

$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<div class="col-md-6 col-xs-6 mp_1">
<div class="col-md-5 col-xs-5 agd">
<h5>Full Name</h5>
</div>
<div class="col-md-1 col-xs-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 col-xs-6 mp_1">
<p><?=$mem_data['reg_name']?></p>
</div>
</div>
       
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Gender</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><a href="" class="sthvr"><?=$mem_data['reg_gender']?></a></p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Date of birth</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=date("d-m-Y",strtotime($mem_data['dob']))?></p>
</div>
</div>


<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Age</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_age']?></p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Height</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_height']?></p>
</div>
</div>


<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Marital Status</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_marital_status']?></p>
</div>
</div>
       
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Any Disability</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_is_any_disability']?></p>
</div>
</div>
       
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Aadhar Number</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_aadhar_number']?></p>
</div>
</div>


<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Profile Management by</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_profile_manage_by']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Blood Group</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_blood_group']?></p>
</div>
</div>
<?php
}else{
echo "0";		
}

}
?>



<?php
if($_REQUEST['edit_location']=="edit-location"){

$reg_country_name=db_scalar("SELECT contName FROM tbl_country_master WHERE contId='$reg_country_name'");
$reg_state_name=db_scalar("SELECT state FROM tbl_state WHERE state_id='$reg_state_name'");

$sql="UPDATE tbl_registration SET 
reg_country_name='$reg_country_name',
reg_state_name='$reg_state_name',
reg_city='$reg_city'
WHERE reg_id='$userDATA[reg_id]'
";

$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Country</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_country_name']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>State</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_state_name']?></p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>District/City</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_city']?></p>
</div>
</div>
<?php
}else{
echo "0";		
}

}
?>


<?php
if($_REQUEST['edit_family']=="edit-family"){

$sql="UPDATE tbl_registration SET 
reg_father_status='$reg_father_status',
reg_mother_status='$reg_mother_status',
reg_siblings_bro='$reg_siblings_bro',
reg_siblings_sis='$reg_siblings_sis',
reg_siblings_marital_status_bro='$reg_siblings_marital_status_bro',
reg_siblings_marital_status_sis='$reg_siblings_marital_status_sis',
reg_family_status='$reg_family_status',
reg_family_type='$reg_family_type',
reg_family_values='$reg_family_values',
reg_annual_income='$reg_annual_income',
reg_family_living_in='$reg_family_living_in'
WHERE reg_id='$userDATA[reg_id]'
";

$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Father's Status</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_father_status']?></p>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Mother's Status</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_mother_status']?></p>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Siblings Status</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_siblings_bro']." <span style='font-size:12px; color:#333'>(Brother)</span>".", ".$mem_data['reg_siblings_sis']." <span style='font-size:12px; color:#333'>(Sister)</span>"?></p>
</div>
</div>

<div class="clearfix"></div>
<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Siblings Maritial Status</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_siblings_marital_status_bro']." <span style='font-size:12px; color:#333'>(Brother)</span>".", ".$mem_data['reg_siblings_marital_status_sis']." <span style='font-size:12px; color:#333'>(Sister)</span>"?> </p>
</div>
</div>

<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Family Status</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_family_status']?></p>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Family type</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_family_type']?></p>
</div>
</div>

<div class="clearfix"></div>
<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Family Values</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_family_values']?></p>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Annual income</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_annual_income']?></p>
</div>
</div>

<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Family living in</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_family_living_in']?></p>
</div>
</div>
<?php
}else{
echo "0";		
}

}
?>



<?php
if($_REQUEST['edit_edu']=="edit-edu"){

$sql="UPDATE tbl_registration SET 
reg_highest_edu='$reg_highest_edu',
reg_edu_detail='$reg_edu_detail',
reg_occupation='$reg_occupation',
reg_annual_income='$reg_annual_income',
reg_organization_name='$reg_organization_name',
reg_working_location='$reg_working_location'
WHERE reg_id='$userDATA[reg_id]'
";

$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Highest&nbsp;Education</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_highest_edu']?></p>
</div
>
</div>
<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Educational&nbsp;Details</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_edu_detail']?></p>
</div
>
</div>
<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Occupation</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_occupation']?></p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Annual&nbsp;income</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_annual_income']?></p>
</div>
</div>

<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Organization&nbsp;Name</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_organization_name']?></p>
</div>
</div>

<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Working&nbsp;Location</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_working_location']?></p>
</div>
</div>
<?php
}else{
echo "0";		
}

}
?>


<?php
if($_REQUEST['edit_religion']=="edit-religion"){

$sql="UPDATE tbl_registration SET 
reg_religion='$reg_religion',
reg_cast='$reg_cast',
reg_sub_cast='$reg_sub_cast',
reg_gotra='$reg_gotra',
reg_dosh='$reg_dosh',
reg_star='$reg_star',
reg_dastar='$reg_dastar',
reg_namaz='$reg_namaz',
reg_zakaat='$reg_zakaat',
reg_fasting='$reg_fasting'
WHERE reg_id='$userDATA[reg_id]'
";

$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Religion</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p>
<?=$mem_data['reg_religion']?>
</p>
</div
>
</div>


<div class="col-md-8 mp_1" id="community_load_area" 
<?php if($mem_data['reg_religion']=="Parsi" || $mem_data['reg_religion']=="Buddhist" || $mem_data['reg_religion']=="Jewish" ){?> style="display:none" <?php }?>  >

<div class="col-sm-6">
<div class="col-md-5 agd">
<h5>Community</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>

<div class="col-md-6 mp_1">
<?=$mem_data['reg_cast']?>
</div>
</div>


<div class="col-md-6 pd-msof no-padd " id="show-hide-sub-community">
<div class="col-md-5 agd">
<h5><span class="font-red">*</span>Sub&nbsp;Community</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>

<div class="col-md-6 mp_1">

<?=$mem_data['reg_sub_cast']?>

</div>
</div>

</div>


<div class="clearfix"></div>
<div <?php if(!empty($mem_data['reg_religion']) && $mem_data['reg_religion']=="Muslim"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="muslim">      


<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5><span class="font-red">*</span>Namaaz(Salah)</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_namaz']?>
</div>
</div>

<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5><span class="font-red">*</span>Zakaat</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_zakaat']?>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5><span class="font-red">*</span>Fasting&nbsp;in&nbsp;Ramadan</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">&nbsp;&nbsp;:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_fasting']?>
</div>

</div>
</div>



<div <?php if(!empty($mem_data['reg_religion']) && $mem_data['reg_religion']=="Hindu"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="hindu">      


<div class="col-md-4 mp_1">
<div class="col-md-5 agd"><h5>Gotra</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_gotra_hindu']?>
</div>
</div>



<div class="col-md-4 mp_1">
<div class="col-md-5 agd"><h5>Dosh</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_dosh_hindu']?>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd"><h5>Star</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>

<div class="col-md-6 mp_1">
<?=$mem_data['reg_star_hindu']?>
</div>

</div>




</div>

<div <?php if(!empty($mem_data['reg_religion']) && $mem_data['reg_religion']=="Sikh"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="sikh">      

<div class="col-md-6 mp_1">
<div class="col-md-5 agd"><h5>Wearing&nbsp;Dastar/Pagg</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_dastar']?>
</div>
</div>

</div>


<div <?php if(!empty($mem_data['reg_religion']) && $mem_data['reg_religion']=="Jain"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> id="jain">      



<div class="col-md-4 mp_1">
<div class="col-md-5 agd"><h5>Gotra</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_gotra_jain']?>
</div>
</div>



<div class="col-md-4 mp_1">
<div class="col-md-5 agd"><h5>Dosh</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_dosh_jain']?>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd"><h5>Star</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>

<div class="col-md-6 mp_1">
<?=$mem_data['reg_star_jain']?>
</div>

</div>


</div>
<?php
}else{
echo "0";		
}

}
?>



<?php
if($_REQUEST['edit_lifestyle']=="edit-lifestyle"){

$sql="UPDATE tbl_registration SET 
reg_appearance='$reg_appearance',
reg_living_status='$reg_living_status',
reg_physical_status='$reg_physical_status',
reg_eating_habits='$reg_eating_habits',
reg_smoking_habits='$reg_smoking_habits',
reg_drinking_habits='$reg_drinking_habits'
WHERE reg_id='$userDATA[reg_id]'
";

$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<div class="col-sm-12 no-padd" id="member-lifestyle">
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Appearance</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_appearance']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Living Status</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_living_status']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Physical Status</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_physical_status']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Eating Habits</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_eating_habits']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Smoking Habits</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_smoking_habits']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Drinking Habits</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_drinking_habits']?></p>
</div>
</div>
</div>
<?php
}else{
echo "0";		
}

}
?>




<?php
if($_REQUEST['edit_like']=="edit-like"){

$sql="UPDATE tbl_registration SET 
reg_hobbies='$reg_hobbies',
reg_interests='$reg_interests',
reg_favourite_music='$reg_favourite_music',
reg_favourite_book='$reg_favourite_book',
reg_dress_style='$reg_dress_style',
reg_tv_shows='$reg_tv_shows'
WHERE reg_id='$userDATA[reg_id]'
";

$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Hobbies</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_hobbies']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Interests</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_interests']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Favourite Music</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_favourite_music']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Favourite Book</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_favourite_book']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Dress Style</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_dress_style']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>TV Shows</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_tv_shows']?></p>
</div>
</div>
<?php
}else{
echo "0";		
}

}
?>




<?php
if($_REQUEST['edit_partner_myself1']=="edit-partner-myself"){
$res=$_REQUEST['res'];
$sql="UPDATE tbl_registration SET reg_preference_mem_myself='$res' WHERE reg_id='$userDATA[reg_id]'";
$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<p style="text-align:justify;"><?=$mem_data['reg_preference_mem_myself']?></p>
<?php
}else{
echo "0";		
}

}
?>


<?php
if($_REQUEST['edit_partner_basic']=="edit-partner-basic"){

if($reg_preference_age>$reg_preference_age_to){
$swap_age=$reg_preference_age;
$reg_preference_age=$reg_preference_age_to;
$reg_preference_age_to=$swap_age;
}
if($reg_preference_height>$reg_preference_height_to){
$swap_height=$reg_preference_height;
$reg_preference_height=$reg_preference_height_to;
$reg_preference_height_to=$swap_height;
}
$sql="UPDATE tbl_registration SET 
reg_preference_marital_status='$reg_preference_marital_status',
reg_preference_age='$reg_preference_age',
reg_preference_age_to='$reg_preference_age_to',
reg_preference_height='$reg_preference_height',
reg_preference_height_to='$reg_preference_height_to',
reg_preference_mother_tongue='$reg_preference_mother_tongue'
WHERE reg_id='$userDATA[reg_id]'
";

$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Marital Status</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_marital_status']?></p>
</div
>
</div>


<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Age</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_age']?> to <?=$mem_data['reg_preference_age_to']?> Years</p>
</div
>
</div>
<div class="clearfix"></div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Height</h5>
</div>
  <?php 
$user_height=$mem_data['reg_preference_height'];
$user_height_to=$mem_data['reg_preference_height_to'];
 ?>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=str_replace(".", "'", $user_height)?>" to <?=str_replace(".", "'", $user_height_to)?>"</p>
</div>
</div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Mother Tongue</h5>
</div>
<div class="col-md-1 text-left mp_1 ft-wgt">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_mother_tongue']?></p>
</div>
</div>
<?php
}else{
echo "0";		
}

}
?>


<?php
if($_REQUEST['edit_religion_partner']=="edit-religion-partner"){

$sql="UPDATE tbl_registration SET 
reg_preference_religion='$reg_preference_religion',
reg_preference_cast='$reg_preference_cast',
reg_preference_sub_cast='$reg_preference_sub_cast',
reg_preference_gotra='$reg_preference_gotra',
reg_preference_dosh='$reg_preference_dosh',
reg_preference_star='$reg_preference_star',
reg_preference_dastar='$reg_preference_dastar',
reg_preference_namaz='$reg_preference_namaz',
reg_preference_zakaat='$reg_preference_zakaat',
reg_preference_fasting='$reg_preference_fasting'
WHERE reg_id='$userDATA[reg_id]'
";

$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>Religion</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p>
<?=$userDATA['reg_preference_religion']?>
</p>
</div
>
</div>


<div class="col-md-8 mp_1" <?php if($mem_data['reg_preference_religion']=="Parsi" || $mem_data['reg_preference_religion']=="Buddhist" || $mem_data['reg_preference_religion']=="Jewish" ){?> style="display:none" <?php }?>  >

<div class="col-sm-6">
<div class="col-md-5 agd">
<h5>Community</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>

<div class="col-md-6 mp_1">
<?=$mem_data['reg_preference_cast']?>
</div>
</div>


<div class="col-md-6 pd-msof no-padd " id="show-hide-sub-community-partner">
<div class="col-md-5 agd">
<h5><span class="font-red">*</span>Sub&nbsp;Community</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>

<div class="col-md-6 mp_1">

<?=$mem_data['reg_preference_sub_cast']?>

</div>
</div>

</div>


<div class="clearfix"></div>
<div <?php if(!empty($mem_data['reg_preference_religion']) && $mem_data['reg_preference_religion']=="Muslim"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> >      


<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5><span class="font-red">*</span>Namaaz(Salah)</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_preference_namaz']?>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5>&nbsp;&nbsp;&nbsp;&nbsp;Zakaat</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_preference_zakaat']?>
</div>
</div>




<div class="col-md-4 mp_1">
<div class="col-md-5 agd">
<h5><span class="font-red">*</span>Fasting&nbsp;in&nbsp;Ramadan</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">&nbsp;&nbsp;:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_preference_fasting']?>
</div>

</div>
</div>



<div <?php if(!empty($mem_data['reg_preference_religion']) && $mem_data['reg_preference_religion']=="Hindu"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> >      


<div class="col-md-4 mp_1">
<div class="col-md-5 agd"><h5>Gotra</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_preference_gotra']?>
</div>
</div>



<div class="col-md-4 mp_1">
<div class="col-md-5 agd"><h5>Dosh</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_preference_dosh']?>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd"><h5>Star</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>

<div class="col-md-6 mp_1">
<?=$mem_data['reg_preference_star']?>
</div>

</div>




</div>

<div <?php if(!empty($mem_data['reg_preference_religion']) && $mem_data['reg_preference_religion']=="Sikh"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> >      

<div class="col-md-6 mp_1">
<div class="col-md-5 agd"><h5>Wearing&nbsp;Dastar/Pagg</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_preference_dastar']?>
</div>
</div>

</div>


<div <?php if(!empty($mem_data['reg_preference_religion']) && $mem_data['reg_preference_religion']=="Jain"){?>style="display:block"<?php }else{?>style="display:none"  <?php }?> >      



<div class="col-md-4 mp_1">
<div class="col-md-5 agd"><h5>Gotra</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_preference_gotra']?>
</div>
</div>



<div class="col-md-4 mp_1">
<div class="col-md-5 agd"><h5>Dosh</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<?=$mem_data['reg_preference_dosh']?>
</div>
</div>


<div class="col-md-4 mp_1">
<div class="col-md-5 agd"><h5>Star</h5></div>
<div class="col-md-1 ft-wgt mp_1">:</div>

<div class="col-md-6 mp_1">
<?=$mem_data['reg_preference_star']?>
</div>

</div>


</div>
<?php
}else{
echo "0";		
}

}
?>


<?php
if($_REQUEST['edit_partner_location']=="edit-partner-location"){

$reg_preference_country_name=db_scalar("SELECT contName FROM tbl_country_master WHERE contId='$reg_preference_country_name'");
$reg_preference_state_name=db_scalar("SELECT state FROM tbl_state WHERE state_id='$reg_preference_state_name'");

$sql="UPDATE tbl_registration SET 
reg_preference_country_name='$reg_preference_country_name',
reg_preference_state_name='$reg_preference_state_name',
reg_preference_city='$reg_preference_city'
WHERE reg_id='$userDATA[reg_id]'
";

$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Country</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_country_name']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>State</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_state_name']?></p>
</div>
</div>


<div class="clearfix"></div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>District/City</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_city']?></p>
</div>
</div>
<?php
}else{
echo "0";		
}

}
?>


<?php
if($_REQUEST['edit_partner_lifestyle']=="edit-partner-lifestyle"){

$sql="UPDATE tbl_registration SET 
reg_preference_appearance='$reg_preference_appearance',
reg_preference_living_status='$reg_preference_living_status',
reg_preference_physical_status='$reg_preference_physical_status',
reg_preference_eating_habits='$reg_preference_eating_habits',
reg_preference_smoking_habits='$reg_preference_smoking_habits',
reg_preference_drinking_habits='$reg_preference_drinking_habits'
WHERE reg_id='$userDATA[reg_id]'
";

$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<div class="col-sm-12 no-padd" id="member-lifestyle">
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Appearance</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_appearance']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Living Status</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_living_status']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Physical Status</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_physical_status']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Eating Habits</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_eating_habits']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Smoking Habits</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_smoking_habits']?></p>
</div>
</div>

<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Drinking Habits</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_drinking_habits']?></p>
</div>
</div>
</div>
<?php
}else{
echo "0";		
}

}
?>



<?php
if($_REQUEST['edit_partner_professional']=="edit-partner-professional"){

$sql="UPDATE tbl_registration SET 
reg_preference_highest_edu='$reg_preference_highest_edu',
reg_preference_occupation='$reg_preference_occupation',
reg_preference_member_annual_income='$reg_preference_member_annual_income',
reg_preference_working_location='$reg_preference_working_location'
WHERE reg_id='$userDATA[reg_id]'
";

$res=db_query($sql);

if($res){
	
$mem_data=db_query("select * from  tbl_registration where reg_id='$userDATA[reg_id]'");
 if(mysqli_num_rows($mem_data)>0){
  $mem_data=mysqli_fetch_array($mem_data);
}
	
?>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Highest Education</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_highest_edu']?></p>
</div >
</div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Occupation</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_occupation']?></p>
</div>
</div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Annual income</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_member_annual_income']?></p>
</div>
</div>
<div class="col-md-6 mp_1">
<div class="col-md-5 agd">
<h5>Working Location</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">
<p><?=$mem_data['reg_preference_working_location']?></p>
</div>
</div>
<?php
}else{
echo "0";		
}

}
?>
