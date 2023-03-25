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

<div class="col-lg-6 mp_1" >

<div class="col-md-5 agd">
<h5>Community</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>
<div class="col-md-6 mp_1">

<?php if($count){?>
<select  name="reg_cast" id="reg_cast">
<?php while($rec=mysqli_fetch_array($data)){?>
<option  value="<?=$rec['c_title']?>"><?=$rec['c_title']?></option>      
<?php }?>
</select>
<?php }?>   
      

</div>
</div>




<div class="col-md-6 pd-msof no-padd " id="show-hide-sub-community">
<div class="col-md-5 agd">
<h5><span class="font-red">*</span>Sub&nbsp;Community</h5>
</div>
<div class="col-md-1 ft-wgt mp_1">:</div>

<div class="col-md-6 mp_1">
<input type="text" placeholder="Enter Sub Community" name="reg_sub_cast" id="reg_sub_cast" value="<?=$recData['reg_sub_cast']?>" >
</div>
</div>


<?php	
}	
}
?>