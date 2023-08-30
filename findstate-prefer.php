<?php //header ?><?php
include("includes/dbsmain.inc.php");
//hheader?>
<?php
$country=$_REQUEST['id'];
//if($country=='India'){
$query="select * from tbl_state where 1 and country_id='$country'";
$result=db_query($query);
$countState=mysqli_num_rows($result);
?>
<select class="dsbo-fom-1" name="join_preference_state_id" id="join_preference_state_id">
 <option value="0" >---- Choose Your State ----</option>
<? 
if($countState>0){
while($statedata=mysqli_fetch_array($result)) { 
?>
 <option value="<?=$statedata['state_id']?>" ><?=$statedata['state']?></option>
<? 
}
}else{
?>
<option value="0" >No State Found</option>
<?php }?>
</select>
