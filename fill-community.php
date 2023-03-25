<?php 
require_once("includes/dbsmain.inc.php");

$sql="SELECT * FROM  tbl_registration WHERE reg_id='$_SESSION[regID]'";
$dataRegd=db_query($sql);
$recData=mysqli_fetch_array($dataRegd);


$religion=$_REQUEST['religion'];

if(!empty($religion)){

$rID=db_scalar("SELECT c_id FROM tbl_community WHERE c_title='$religion'");	

if(!empty($rID)){

$sql="SELECT * FROM tbl_community WHERE c_parent_id='$rID' AND c_status='Active'";
$data=db_query($sql);
$count=mysqli_num_rows($data);
?>

<div class="col-lg-12 " id="community_load_area">

<div class="col-md-12 pd-msof no-padd">

<div class="col-md-3"><span class="font-red">*</span>Community</div>
<div class="col-md-9">
<?php if($count){?>
<select class="dsbo-fom-1" name="join_cast" id="join_cast">
<?php while($rec=mysqli_fetch_array($data)){?>
<option  value="<?=$rec['c_title']?>"><?=$rec['c_title']?></option>      
<?php }?>
</select>
<?php }?>   
      

</div>
</div>




<div class="col-md-12 pd-msof no-padd ">
<div class="col-md-3">
Sub Community</div>
<div class="col-md-9">
<input type="text" placeholder="Enter Sub Community" name="join_sub_cast" id="join_sub_cast" value="<?=$recData['reg_sub_cast']?>" class="dsbo-fom-1">
</div>
</div>


</div>
<?php	
}	
}
?>