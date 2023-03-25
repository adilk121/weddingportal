<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<?php require_once ('../includes/photoshop.php');?>

<?php
$package_id=trim($_REQUEST['id']);
$categoryID = trim($_GET['package_id']);
date_default_timezone_set("asia/kolkata");

/*if($_REQUEST['delImage']!=""){

$delImage=$_REQUEST['delImage'];	
$isDel=db_query("UPDATE  tbl_upgrade_packages SET  test_image_name='' WHERE 1 and package_id = '$categoryID'");	
@unlink("../uploaded_files/$delImage");
@unlink("../uploaded_files/home_cat_thumb/$delImage");

header("location:add-edit-package.php?id=$categoryID");
}*/

if(is_post_back()){
//*************** UPDATE EXISTING CATEGORY START ************************//
$imgNAME ="";
if($_REQUEST['id']!='0') {
$category_url=ami_crete_url($test_given_by);
////////////****************** IMAGE RESIZING START HERE *****************************//
//********** Code Created By Amitabh Kumar Sinha : Web Developer : Webkey Network Pvt. Ltd. *****************//
//**********  DATE : 31:07:2014 *****************//

$my_date=date("Y-m-d");
$sql = "update tbl_upgrade_packages set        
				package_title='$package_title',
				package_description='$editor1',
				package_add_date='$my_date',
				package_status='$package_status'
				where package_id = '$package_id' ";

db_query($sql);


$_SESSION["msg"]="Package updated successfully !";
header("Location:add-edit-package.php?id=$_REQUEST[id]");
exit;
//*************** UPDATE EXISTING CATEGORY END ************************//
}else{
$category_url=ami_crete_url($test_given_by);
//*************** INSERT NEW CATEGORY START ************************//
////////////****************** IMAGE RESIZING START HERE *****************************//
//********** Code Created By Amitabh Kumar Sinha : Web Developer : Webkey Network Pvt. Ltd. *****************//
//**********  DATE : 31:07:2014 *****************//


$my_date=date("Y-m-d");
$sql = "insert into tbl_upgrade_packages set 
                package_title='$package_title',
				package_description='$editor1',
				package_add_date='$my_date',
				package_status='$package_status'";
db_query($sql);
$_SESSION["msg"]="Package added successfully !";
header("Location:add-edit-package.php?id=$_REQUEST[id]");
exit;
//*************** INSERT NEW CATEGORY END ************************//
 }
}

if($package_id!='') {
	$result = db_query("select * from tbl_upgrade_packages where package_id = '$package_id'");
	if ($line_raw = mysqli_fetch_array($result)) {
	 @extract($line_raw);
	}
}
?>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-comments" aria-hidden="true"></i>

               </div>
               <div class="header-title">
                  <h1>Add/Edit Package</h1>
                  <small>Add/Edit package content</small>
                  
                  
<a href="manage_upgrade_package.php"><button id="btn-go-back" type="button" class="btn btn-labeled btn-inverse m-b-5 pull-right">
<span class="btn-label" ><i class="fa fa-chevron-circle-left"></i></span>Go Back
</button></a>

                  
               </div>
               
               
            </section>
            <!-- Main content -->
<script src="../ckeditor/ckeditor.js"></script>            
            <section class="content">
            
            <?php if($_SESSION["msg"]!=""){?>               
<div class="alert alert-success alert-dismissable fade in text-center" style="background-color:#dff0d8;border:none; color:#000;margin:10px 0 10px 0">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!&nbsp;&nbsp;&nbsp;</strong> <?=$_SESSION["msg"]?>
  </div>
<?php 
unset($_SESSION["msg"]);
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
<form name="form1" method="post" onsubmit="return formValidation()" enctype="multipart/form-data" class="col-sm-12" >
                      

<div class="clearfix"></div>
<div class="form-group col-lg-6">
<label>Package Title </label>
<input type="text" class="form-control" placeholder="Enter Package Title " name="package_title" id="package_title"  value="<?=$package_title?>" required>
</div>
                                       
                                         
<div class="form-group col-lg-12">
<label>Package Description</label>

<textarea class="form-control" name="editor1" rows="3" placeholder="Enter Package Description" id="editor1" style="width:50%" required><?=$package_description?></textarea>

<script>
    CKEDITOR.replace( 'editor1' );
</script>
</div>
      

<div class="form-group col-lg-3">
 <label>Status</label>
 
<select name="package_status" class="form-control" >
  <option value="Active" <?php if($package_status=='Active'){ ?> selected="selected" <? } ?>>Active</option>
  <option value="Inactive" <?php if($package_status=='Inactive'){ ?> selected="selected" <? } ?>>Inactive</option>
</select>

</div>                             

<div class="col-lg-12 reset-button">
                                     
     <button type="submit" class="btn btn-add">Submit</button>
    
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


 