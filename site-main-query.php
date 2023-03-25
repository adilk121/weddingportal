<?php
///////////////////////////// ADMIN/OWNER INFORMATION /////////////////////////////
$sql_comp_detail=db_query("select * from tbl_admin where 1");
 if(mysqli_num_rows($sql_comp_detail)>0){
  $compDATA=mysqli_fetch_array($sql_comp_detail);
}
?>
<?php
/////////////////////////////// USER INFORMATION /////////////////////////////
if(!empty($_SESSION['userLoginId'])){

$sql_user_detail=db_query("select * from  tbl_registration where reg_id='$_SESSION[userLoginId]'");
 if(mysqli_num_rows($sql_user_detail)>0){
  $userDATA=mysqli_fetch_array($sql_user_detail);
}

}
?>
<?php
/////////////////////////////// USER INFORMATION /////////////////////////////
if(!empty($_SESSION['userLoginId'])){
$sql="select reg_preference_marital_status,reg_preference_age,reg_preference_height,reg_preference_mother_tongue,reg_preference_religion,reg_preference_gotra,reg_preference_namaz,reg_preference_zakaat,reg_preference_fasting,reg_preference_dosh,reg_preference_star,reg_preference_dastar,reg_preference_cast,reg_preference_sub_cast,reg_preference_country_name,reg_preference_state_name,reg_preference_city,reg_preference_highest_edu,reg_preference_occupation,reg_preference_member_annual_income,reg_preference_working_location,reg_preference_appearance,reg_preference_living_status,reg_preference_physical_status,reg_preference_eating_habits,reg_preference_smoking_habits,reg_preference_drinking_habits from  tbl_registration where reg_id='$_SESSION[userLoginId]'";
$sql_user_prefer_detail=db_query($sql);
$countPreferData=mysqli_num_rows($sql_user_prefer_detail);
$countPrefer=mysqli_num_fields($sql_user_prefer_detail);
if($countPreferData>0){
$userPreferDATA=mysqli_fetch_array($sql_user_prefer_detail); 
}
//print_r($userPreferDATA);
}
?>