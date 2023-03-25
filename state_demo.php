<!-- <select class="dsbo-fom-1 boot-multiselect-demo" multiple="multiple" name="join_preference_state_id" id="join_preference_state_id">
<?php
  if($recData['reg_preference_state_id']=="" || empty($recData['reg_preference_state_id']))
  { 
  $state_fetch=db_query("SELECT * FROM tbl_state WHERE country_id=98");
  if(mysqli_num_rows($state_fetch)>0){
    while($state=mysqli_fetch_array($state_fetch)){
      ?>
      <option value="<?=$state['state_id']?>"><?=$state['state']?></option>
    <?php }
  }}else{ 
 ?>
 <option value="<?=$recData['reg_preference_state_id']?>" <?php if($recData['reg_preference_state_id']!="" && $recData['reg_preference_state_id']!=0){?> selected <?php }?>>
<?=$recData['reg_preference_state_name']?>

  <?php }?></option>
</select> -->