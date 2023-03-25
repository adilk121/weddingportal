<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<?php
$m_id=trim($_REQUEST['id']);
$m_id = trim($m_id);


if(is_post_back()){
//*************** UPDATE EXISTING CATEGORY START ************************//

if($_REQUEST['id']!='0') {

////////////****************** IMAGE RESIZING END HERE *****************************//

$sql = "update   tbl_search_profile_managed_by set        
				m_title='$m_title',
				m_status='$m_status'
				where m_id = '$m_id' ";

db_query($sql);


$_SESSION["msg"]="Record Is Updated Successfully !";
header("Location:addedit-profile-managed-by.php?id=$_REQUEST[id]");
exit;
//*************** UPDATE EXISTING CATEGORY END ************************//
}else{

////////////****************** IMAGE RESIZING END HERE *****************************//
$sql = "insert into   tbl_search_profile_managed_by set 
				m_title='$m_title',
				m_status='$m_status'
				";
				
db_query($sql);
$_SESSION["msg"]="Record Is added successfully !";
header("Location:addedit-profile-managed-by.php?id=$_REQUEST[id]");
exit;
//*************** INSERT NEW CATEGORY END ************************//
 }
}

if($m_id!='') {
	$result = db_query("select * from   tbl_search_profile_managed_by where m_id = '$m_id'");
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
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

               </div>
               <div class="header-title">
                  <h1>Add/Edit Profile Managed By</h1>
                  <small>Add/Edit Profile Managed By</small>
                  
                  
<a href="manage-profile-created_by.php"><button id="btn-go-back" type="button" class="btn btn-labeled btn-inverse m-b-5 pull-right">
<span class="btn-label" ><i class="fa fa-chevron-circle-left"></i></span>Go Back
</button></a>

                  
               </div>
               
               
            </section>
            <!-- Main content -->
<!--<script src="../ckeditor/ckeditor.js"></script>-->            
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
                              
                                 <h4 class="font-black">General Information</h4>
                              
                           </div>
                        </div>
                        <div class="panel-body">
<form name="form1" method="post" onsubmit="return formValidation()" enctype="multipart/form-data" class="col-sm-12" >
                              


                            


<div class="form-group col-lg-12">
<label>Title</label>
<input type="text" class="form-control" placeholder="Enter Name" name="m_title" id="m_title"  value="<?=$m_title?>">
</div>
                                         
                                         
                                         

                             
             
                           
<div class="form-group col-lg-3">
<label>Status</label>

<select name="m_status" class="form-control" >
<option value="Active" <?php if($m_status=='Active'){ ?> selected="selected" <? } ?>>Active</option>
<option value="Inactive" <?php if($m_status=='Inactive'){ ?> selected="selected" <? } ?>>Inactive</option>
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