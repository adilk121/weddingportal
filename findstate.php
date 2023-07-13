<?php
include("includes/dbsmain.inc.php");//hheader
?>
<?php
$country=$_REQUEST['id'];
$cont_id=db_scalar("select contId from tbl_country_master where contName='$country'");
//if($country=='India'){
$query="select * from tbl_state where 1 and country_id='$cont_id'";
$result=db_query($query);
$countState=mysqli_num_rows($result);
?>
<select class="dsbo-fom-1" name="join_state" id="join_state">
<option value="0" >---- Choose Your State ----</option>
<? 
if($countState>0){
while($statedata=mysqli_fetch_array($result)) { 
?>
<option value="<?=$statedata['state']?>" ><?=$statedata['state']?></option>
<? 
}
}else{
?>
<option value="0" >No State Found</option>
<?php }?>
</select>
