<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<?php
$cID=trim($_REQUEST['cID']);
$cID = trim($cID);

$rID=trim($_REQUEST['rID']);
$rID = trim($rID);


if(is_post_back()){
//*************** UPDATE EXISTING CATEGORY START ************************//

if($_REQUEST['scID']!='0') {

////////////****************** IMAGE RESIZING END HERE *****************************//

$sql = "update tbl_community set        
				c_title='$c_title',
				c_desc = '$c_desc', 	
				c_add_date='$curr_date',
				c_status='$c_status',
				c_parent_id='$cID'
				where c_id = '$c_id' ";



db_query($sql);

$_SESSION["msg"]="Community Updated Successfully !";
header("Location:addedit-subcommunity.php?scID=0&rID=$rID&cID=$cID");
exit;
//*************** UPDATE EXISTING CATEGORY END ************************//
}else{

////////////****************** IMAGE RESIZING END HERE *****************************//
echo $sql = "insert into tbl_community set 
				c_title='$c_title',
				c_desc = '$c_desc', 	
				c_add_date='$curr_date',
				c_status='$c_status',
				c_parent_id='$cID'";
		
db_query($sql);
$_SESSION["msg"]="Community added successfully !";
header("Location:addedit-subcommunity.php?scID=0&rID=$rID&cID=$cID");
exit;
//*************** INSERT NEW CATEGORY END ************************//
 }
}

if($c_id!='') {
	$result = db_query("select * from tbl_community where c_id = '$c_id'");
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
                  <h1>Add/Edit Sub Community</h1>
                  <small>Add/Edit Sub Community</small>
                  
                  
<a href="subcommunity_list.php?rID=<?=$rID?>&cID=<?=$cID?>"><button id="btn-go-back" type="button" class="btn btn-labeled btn-inverse m-b-5 pull-right">
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
<input type="text" class="form-control" placeholder="Enter Name" name="c_title" id="c_title"  value="<?=$c_title?>">
                              </div>
                                         

                                         
                                         

                             
                             <div class="form-group col-lg-12">
                                 <label>Description</label>
 <textarea class="form-control" name="c_desc" rows="3" id="editor1"><?=$c_desc?></textarea>
                              </div>
                             
<script>

// Replace the <textarea id="editor"> with an CKEditor
// instance, using default configurations.
CKEDITOR.replace( 'editor1');

</script>
                           
                           
<div class="form-group col-lg-3">
 <label>Status</label>
 
<select name="c_status" class="form-control" >
                      <option value="Active" <?php if($c_status=='Active'){ ?> selected="selected" <? } ?>>Active</option>
                      <option value="Inactive" <?php if($c_status=='Inactive'){ ?> selected="selected" <? } ?>>Inactive</option>
                    </select>


</div>                             
       


<?php /*?><div class="col-lg-12" style="padding:0;background-color:#e8f1f3;margin:20px 0 50px 0">
                           <div class="btn-group" id="buttonexport">
                              <a href="#" >
                                 <h4 style="color:#000;font-weight:600;padding:5px">SEO Related Information</h4>
                              </a>
                           </div>
                        </div>                             
                             
                             
                              <div class="form-group col-lg-12">
                                 <label>Category Meta Title</label>
<textarea class="form-control" rows="3" name="category_meta_title" id="category_meta_title" placeholder="Enter category meta title here" ><?=$category_meta_title?></textarea>
                              </div>
                              <div class="form-group col-lg-12">
                                 <label>Category Meta Description</label>
<textarea class="form-control" rows="3" placeholder="Enter category meta description here" name="category_meta_description" id="category_meta_description"><?=$category_meta_description?></textarea>
                              </div>
                              <div class="form-group col-lg-12">
                                 <label>Category Meta Keyword</label>
<textarea class="form-control" rows="3" name="category_meta_keywords" placeholder="Enter category meta keywords here" id="category_meta_keywords"><?=$category_meta_keywords?></textarea>
                              </div><?php */?>
                              
                              
<input type="hidden" name="rID" value="<?=$rID?>" />                               
<input type="hidden" name="cID" value="<?=$cID?>" />
<input type="hidden" name="scID" value="<?=$scID?>" /> 

                             
                              
                              
                             
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