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
if($count){
?>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Cast</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

<select class="dsbo-fom-1" name="search_cast" id="search_cast">
<?php while($rec=mysqli_fetch_array($data)){?>
<option  value="<?=$rec['c_title']?>"><?=$rec['c_title']?></option>      
<?php }?>
</select>
<?php }?>   
      
</div>


<?php	
}}
?>