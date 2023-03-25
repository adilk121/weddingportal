<?php 
include("includes/dbsmain.inc.php");
$siblingsCountBro=$_REQUEST['siblingsCountBro'];
$siblingsCountSis=$_REQUEST['siblingsCountSis'];
?>
<div class="col-md-3">
 Siblings Maritial Status</div>
      
<div class="col-md-9">
<div class="col-lg-6 no-padd">
<span class="b bro-sis-num">No. of brother married</span>
<select class="dsbo-fom-1" name="join_siblings_marital_status_bro" id="join_siblings_marital_status_bro" style="width:98%" >
<option  value="0" selected >---- Brother ----</option>
<option  value="0" >0</option>
<?php for($i=1;$i<=$siblingsCountBro;$i++){ ?>
<option  value="<?=$i?>" <?php if($recData['reg_siblings_marital_status_bro']==$i){?> selected <?php }?> ><?=$i?></option>
<?php }?>
</select>
</div>

<div class="col-lg-6 no-padd">
<span class="b bro-sis-num">No. of sister married</span>
<select class="dsbo-fom-1" name="join_siblings_marital_status_sis" id="join_siblings_marital_status_sis" style="width:98%" >
<option  value="0" selected >---- Sister ----</option>
<option  value="0" >0</option>
<?php for($i=1;$i<=$siblingsCountSis;$i++){ ?>
<option  value="<?=$i?>" <?php if($recData['reg_siblings_marital_status_sis']==$i){?> selected <?php }?> ><?=$i?></option>
<?php }?>
</select>
</div>

</div>