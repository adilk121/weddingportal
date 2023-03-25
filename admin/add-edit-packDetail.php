<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<?php require_once ('../includes/photoshop.php');?>
<?php
$package_id=trim($_REQUEST['id']);
$categoryID = trim($_GET['package_id']);
$p_id=$_REQUEST['p_id'];
date_default_timezone_set("asia/kolkata");

if(isset($_REQUEST['update'])) {
$check_exist_month=db_scalar("select package_month from tbl_upgrade_packages_detail where package_parent_id='$p_id' and package_month='$package_month' and package_id!='$package_id'");

if(empty($check_exist_month)){
    
$my_date=date("Y-m-d");
$sql = "update tbl_upgrade_packages_detail set        
				package_parent_id='$p_id',
                package_month='$package_month',
				price='$package_price',
				discount_price='$package_discount_price',
				package_add_date='$my_date',
				contact_view_credits='$contact_view_credits',
				package_detail_status='$package_detail_status'
				where package_id = '$package_id' ";

db_query($sql);

$_SESSION["msg"]="Package detail updated successfully !";
$_SESSION["msg_type"]="success";
header("Location:add-edit-packDetail.php?id=$package_id&p_id=$_REQUEST[p_id]");
exit;
}else{
 $_SESSION["msg"]="Package Month already exist !";
 $_SESSION["msg_type"]="error";
header("Location:add-edit-packDetail.php?id=$package_id&p_id=$_REQUEST[p_id]");
exit; 
}
}else if(isset($_REQUEST['submit'])){
$check_exist_month=db_scalar("select package_month from tbl_upgrade_packages_detail where package_parent_id='$p_id' and package_month='$package_month'");
if(empty($check_exist_month)){
    
$my_date=date("Y-m-d");
$sql = "insert into tbl_upgrade_packages_detail set 
                package_parent_id='$p_id',
                package_month='$package_month',
				price='$package_price',
				discount_price='$package_discount_price',
				package_add_date='$my_date',
				contact_view_credits='$contact_view_credits',
				package_detail_status='$package_detail_status'";
db_query($sql);
$_SESSION["msg"]="Package detail added successfully !";
$_SESSION["msg_type"]="success";
header("Location:add-edit-packDetail.php?id=$package_id&p_id=$_REQUEST[p_id]");
exit;
}else{
 $_SESSION["msg"]="Package Month already exist !";
 $_SESSION["msg_type"]="error";
header("Location:add-edit-packDetail.php?id=$package_id&p_id=$_REQUEST[p_id]");
exit;   
}
//*************** INSERT NEW CATEGORY END ************************//
 }


if($package_id!='') {
	$result = db_query("select * from tbl_upgrade_packages_detail where package_id = '$_REQUEST[id]'");
	if ($line_raw = mysqli_fetch_array($result)) {
	 @extract($line_raw);
	}
}
?>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-comments" aria-hidden="true"></i>

               </div>
               <div class="header-title">
                  <h1>Add/Edit Package Detail</h1>
                  <small>Add/Edit package detail content</small>
                  
                  
<a href="manage_packDetail.php?p_id=<?=$_REQUEST['p_id']?>"><button id="btn-go-back" type="button" class="btn btn-labeled btn-inverse m-b-5 pull-right">
<span class="btn-label" ><i class="fa fa-chevron-circle-left"></i></span>Go Back
</button></a>

</div>
</section>
            <!-- Main content -->
<script src="../ckeditor/ckeditor.js"></script>            
<section class="content">

<?php if($_SESSION["msg"]!="" && $_SESSION["msg_type"]=="success"){?>               
<div class="alert alert-success alert-dismissable fade in text-center" style="background-color:#dff0d8;border:none; color:#000;margin:10px 0 10px 0">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Success!&nbsp;&nbsp;&nbsp;</strong> <?=$_SESSION["msg"]?>
</div>
<?php 
unset($_SESSION["msg"]);
unset($_SESSION["msg_type"]);
}?>

<!--FOR ERROR-->

<?php if($_SESSION["msg"]!="" && $_SESSION["msg_type"]=="error"){?>             <center>  
<div class="alert alert-danger alert-dismissable fade in text-center" style="border:none; color:#FFF;margin:10px 0 10px 0;width:50%">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Warning!&nbsp;&nbsp;&nbsp;</strong> <?=$_SESSION["msg"]?>
</div></center>
<?php 
unset($_SESSION["msg"]);
unset($_SESSION["msg_type"]);
}?>

   <div class="row">
      <!-- Form controls -->
      <div class="col-sm-12">
         <div class="panel panel-bd lobidrag" data-edit-title='false' data-close='false' data-reload='false'>
            <div class="panel-heading">
               <div class="btn-group" id="buttonexport">
                  <a href="#">
                     <h4 style="color:black;">General Information</h4>
                  </a>
               </div>
            </div>
<div class="panel-body">
<form name="form1" method="post" action="" onsubmit="return formValidation()" enctype="multipart/form-data" class="col-sm-12" >
                      

<div class="clearfix"></div>
<div class="form-group col-lg-4">
<label>Package Duration <span style="color:#6b0026;font-weight:normal;">(e.g:- 2 , 15 , 10)</span> </label>
<input type="number" class="form-control input_num" placeholder="Enter Package Month " name="package_month" id="package_month" value="<?=$package_month?>" min="0" required>
</div>
                                       
<!--<div class="form-group col-lg-6">
<label>Package Price</label>
<input type="text" class="form-control" placeholder="Enter Package Price " name="package_price" id="package_price"  value="<?=$price?>">
</div>-->



<div class="form-group col-lg-4">
<label>Package Price</label>
<input type="number" class="form-control input_num" placeholder="Enter Package Price " name="package_discount_price" id="package_discount_price"  value="<?=$discount_price?>" min="0" required>
</div>

<div class="form-group col-lg-3">
 <label>Contact View Credits</label>
 
<input type="number" name="contact_view_credits" id="contact_view_credits" class="form-control input_num" value="<?=$contact_view_credits?>" min="0" required/>

</div>
      
<div class="form-group col-lg-3">
 <label>Status</label>
 
<select name="package_detail_status" class="form-control" >
  <option value="Active" <?php if($package_detail_status=='Active'){ ?> selected="selected" <? } ?>>Active</option>
  <option value="Inactive" <?php if($package_detail_status=='Inactive'){ ?> selected="selected" <? } ?>>Inactive</option>
</select>

</div>                             

<div class="col-lg-12 reset-button">
    <?php
    
     if(empty($_REQUEST['id'])){?>
         <button type="submit" name="submit" class="btn btn-add">Submit</button>
    <?php }else{?>
         <button type="submit" name="update" class="btn btn-add">Update</button>
    <?php }?>                                 
     
    
  </div>
</form>
</div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
<?php require_once("footer.php"); ?>
<script>
    $(document).ready(function(){
        // Code To Accept Only Numeric 
  $(".input_num").on("keypress",function (event) {    
      $(this).val($(this).val().replace(/[^\d].+/, ""));
      if ((event.which < 48 || event.which > 57)) {
          event.preventDefault();
      }
  });
    });
</script>
 