<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<?php require_once ('../includes/photoshop.php');?>
<?php
$subcatid=trim($_REQUEST['subcatid']);
$category_id=trim($_REQUEST['id']);
$categoryID = trim($_GET['catid']);

if($_REQUEST['delImage']!=""){
$delImage=$_REQUEST['delImage'];
$isDel=db_query("UPDATE  tbl_category SET  category_image_name='' WHERE 1 and category_id = '$category_id'");	
@unlink("../uploaded_files/$delImage");
@unlink("../uploaded_files/home_cat_thumb/$delImage");
@unlink("../uploaded_files/prd_thumb/$delImage");

header("location:addedit-product.php?id=$category_id&subcatid=$subcatid&catid=$catid");
}

if(is_post_back()){
//*************** UPDATE EXISTING CATEGORY START ************************//
$imgNAME ="";

if($_REQUEST['id']!='0') {
$category_url=ami_crete_url($category_name);
////////////****************** IMAGE RESIZING START HERE *****************************//
//********** Code Created By Amitabh Kumar Sinha : Web Developer : Webkey Network Pvt. Ltd. *****************//
//**********  DATE : 31:07:2014 *****************//
//------------FUNCTION TO GET IMAGE EXTENSION START---------------//
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 //------------FUNCTION TO GET IMAGE EXTENSION END---------------//
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
$image =$_FILES["file"]["name"];
$imgToDel=db_scalar("SELECT category_image_name FROM tbl_category WHERE  category_id='$category_id'");	

if($image){

@unlink("../uploaded_files/$imgToDel");
@unlink("../uploaded_files/home_cat_thumb/$imgToDel");
@unlink("../uploaded_files/prd_thumb/$imgToDel");

	
	$uploadedfile = $_FILES['file']['tmp_name']; 
    $filename = stripslashes($_FILES['file']['name']); 	
	$extension = getExtension($filename);
	$extension = strtolower($extension);		
	$imgNAME = substr(md5($category_url.time().rand(1,10)),0,14).".".$extension;	
	move_uploaded_file($_FILES['file']['tmp_name'],"../uploaded_files/$imgNAME");

///////////////////////////// FOR SMALL  THUMB AND LARGE IMAGE /////////////////////////
$image = new Zebra_Image(); 
$image->source_path = '../uploaded_files/'.$imgNAME; 
$ext = substr($image->source_path, strrpos($image->source_path, '.') + 1);
// indicate a target image
$image->target_path = '../uploaded_files/home_cat_thumb/'.$imgNAME;
// resize
// and if there is an error, show the error message
if (!$image->resize(358, 358, ZEBRA_IMAGE_NOT_BOXED, -1)) show_error($image->error, $image->source_path, $image->target_path);
////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////// FOR SMALL  PRODUCT THUMB //////////////////////////////
$image = new Zebra_Image(); 
$image->source_path = '../uploaded_files/'.$imgNAME; 
$ext = substr($image->source_path, strrpos($image->source_path, '.') + 1);
// indicate a target image
$image->target_path = '../uploaded_files/prd_thumb/'.$imgNAME;
// resize
// and if there is an error, show the error message
if (!$image->resize(100, 100, ZEBRA_IMAGE_BOXED, -1)) show_error($image->error, $image->source_path, $image->target_path);
////////////////////////////////////////////////////////////////////////////////////////



}else{
$imgNAME=$imgToDel;
}

}

////////////****************** IMAGE RESIZING END HERE *****************************//

$sql = "update tbl_category set        
				category_name='$category_name',
				category_real_price='$category_real_price',
				category_discount_price='$category_discount_price',
				category_in_stock='$category_in_stock',
				category_qnty='$category_qnty',
				category_color='$category_color',
				category_size='$category_size',		
				category_shared_count='$category_shared_count',												
				category_image_name='$imgNAME',
				category_description = '$category_description', 	
				category_meta_title='$category_meta_title',
				category_meta_description='$category_meta_description',
				category_meta_keywords='$category_meta_keywords',
				category_is_product='Yes',
				category_url='$category_url',
				category_add_date='$curr_date',
				category_status='$category_status'
				where category_id = '$category_id' ";

db_query($sql);
$_SESSION["msg"]="Product Updated Successfully !";
header("Location:addedit-product.php?id=$category_id&subcatid=$subcatid&catid=$catid");
exit;
//*************** UPDATE EXISTING CATEGORY END ************************//
}else{
$category_url=ami_crete_url($category_name);
//*************** INSERT NEW CATEGORY START ************************//
////////////****************** IMAGE RESIZING START HERE *****************************//
//********** Code Created By Amitabh Kumar Sinha : Web Developer : Webkey Network Pvt. Ltd. *****************//
//**********  DATE : 31:07:2014 *****************//
//------------FUNCTION TO GET IMAGE EXTENSION START---------------//
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 //------------FUNCTION TO GET IMAGE EXTENSION END---------------//
 if($_SERVER["REQUEST_METHOD"] == "POST"){


	
 	$image =$_FILES["file"]["name"];
	

if($image){
	
	$uploadedfile = $_FILES['file']['tmp_name']; 
    $filename = stripslashes($_FILES['file']['name']); 	
	$extension = getExtension($filename);
	$extension = strtolower($extension);		
	$imgNAME = substr(md5($category_url.time().rand(1,10)),0,14).".".$extension;	
	move_uploaded_file($_FILES['file']['tmp_name'],"../uploaded_files/$imgNAME");

///////////////////////////// FOR SMALL  THUMB AND LARGE IMAGE /////////////////////////
$image = new Zebra_Image(); 
$image->source_path = '../uploaded_files/'.$imgNAME; 
$ext = substr($image->source_path, strrpos($image->source_path, '.') + 1);
// indicate a target image
$image->target_path = '../uploaded_files/home_cat_thumb/'.$imgNAME;
// resize
// and if there is an error, show the error message
if (!$image->resize(358, 358, ZEBRA_IMAGE_BOXED, -1)) show_error($image->error, $image->source_path, $image->target_path);
///////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////// FOR SMALL  PRODUCT THUMB //////////////////////////////
$image = new Zebra_Image(); 
$image->source_path = '../uploaded_files/'.$imgNAME; 
$ext = substr($image->source_path, strrpos($image->source_path, '.') + 1);
// indicate a target image
$image->target_path = '../uploaded_files/prd_thumb/'.$imgNAME;
// resize
// and if there is an error, show the error message
if (!$image->resize(100, 100, ZEBRA_IMAGE_BOXED, -1)) show_error($image->error, $image->source_path, $image->target_path);
////////////////////////////////////////////////////////////////////////////////////////




}else{
$imgNAME=$imgToDel;
}


	 
	 
}

////////////****************** IMAGE RESIZING END HERE *****************************//
$sql = "insert into tbl_category set 
                category_name='$category_name',
				category_real_price='$category_real_price',
				category_discount_price='$category_discount_price',
				category_color='$category_color',
				category_size='$category_size',		
				category_shared_count='$category_shared_count',						
				category_in_stock='$category_in_stock',	
				category_qnty='$category_qnty',							
				category_parent_id='$subcatid',
				category_image_name='$imgNAME',
				category_description='$category_description', 	
				category_meta_title='$category_meta_title',
				category_meta_description='$category_meta_description',
				category_meta_keywords='$category_meta_keywords',
				category_is_product='Yes',
				category_url='$category_url',
				category_add_date='$curr_date',
				category_status='$category_status'";
db_query($sql);
$_SESSION["msg"]="Product added successfully !";
header("Location:addedit-product.php?id=$category_id&subcatid=$subcatid&catid=$catid");
exit;
//*************** INSERT NEW CATEGORY END ************************//
 }
}

if($category_id!='') {
	$result = db_query("select * from tbl_category where category_id = '$category_id'");
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
                  <h1>Add/Edit Product</h1>
                  <small>Add/Edit product content</small>
                  
                  
<a href="product_list.php?subcatid=<?=$subcatid?>&catid=<?=$catid?>"><button id="btn-go-back" type="button" class="btn btn-labeled btn-inverse m-b-5 pull-right">
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
                                 <h4>General Information
                                 
                                 <i class="fa fa-angle-double-right" ></i>
                                 
<span style="margin-left:5px; font-size:16px;color:#8e32a2c7"><?=db_scalar("SELECT category_name FROM tbl_category WHERE 1 AND category_id='$catid'")?>&nbsp;&nbsp;<i class="fa fa-angle-double-right" ></i><span style="margin-left:5px; font-size:16px;color:#8e32a2c7"><?=db_scalar("SELECT category_name FROM tbl_category WHERE 1 AND category_id='$subcatid'")?></span>

&nbsp;&nbsp;<i class="fa fa-angle-double-right" ></i><span style="margin-left:5px; font-size:16px;color:#8e32a2c7"><?=db_scalar("SELECT category_name FROM tbl_category WHERE 1 AND category_id='$category_id'")?></span>
                                 
                                 
                                 </h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
<form name="form1" method="post" onsubmit="return formValidation()" enctype="multipart/form-data" class="col-sm-12" >
                              


                            
<div class="form-group col-lg-3">
<label>Product Image</label>
<?php if($category_image_name!=""){ ?>
<img src="../uploaded_files/home_cat_thumb/<?=$category_image_name?>" class="form-control" style="width:150px;height:150px" />
<?php }else{?>
<img src="assets/dist/img/no-image.jpg" class="form-control" style="width:120px;height:150px" />
<?php }?>

<?php if($category_image_name!=""){ ?>
<div class="col-lg-12 " ><a href="addedit-product.php?delImage=<?=$category_image_name?>&id=<?=$category_id?>&subcatid=<?=$subcatid?>&catid=<?=$catid?>" style="font-weight:600;margin-left:15px;text-decoration:underline" >Remove Image</a>                  
</div>
<?php }?>

</div>

<div class="form-group col-lg-9" style="padding-top:100px">
<input type="file" name="file" id="file" />
</div>


<div class="form-group col-lg-12">
                                 <label>Product Name</label>
<input type="text" class="form-control" placeholder="Enter Name" name="category_name" id="category_name"  value="<?=$category_name?>">
                              </div>
                                       
                                       
                                       

                                                                                
                                         
                                         
<div class="form-group col-lg-6">
                                 <label> Real Price </label>
<input type="text" class="form-control" placeholder="Enter product price" name="category_real_price" id="category_real_price"  value="<?=$category_real_price?>">
                              </div>
                              
                              
                              
                              
<div class="form-group col-lg-6">
                                 <label> Discount Price </label>
<input type="text" class="form-control" placeholder="Enter discount price" name="category_discount_price" id="category_discount_price"  value="<?=$category_discount_price?>">
                              </div>                              
                              
                              
                              
                              
<div class="form-group col-lg-6">
                                 <label> Color </label>
<input type="text" class="form-control" placeholder="Enter product color" name="category_color" id="category_color"  value="<?=$category_color?>">
                              </div>
                              
                              
                              
                              
<div class="form-group col-lg-6">
                                 <label> Size </label>
<input type="text" class="form-control" placeholder="Enter product size" name="category_size" id="category_size"  value="<?=$category_size?>">
                              </div>                              
                                                            
                              
                              
                                                                                                   
                            
                             
                             <div class="form-group col-lg-12">
                                 <label>Product Description</label>
 <textarea class="form-control" name="category_description" rows="3" id="editor1"><?=$category_description?></textarea>
                              </div>
                             
<script>

// Replace the <textarea id="editor"> with an CKEditor
// instance, using default configurations.
CKEDITOR.replace( 'editor1');

</script>
                           
                           
<div class="form-group col-lg-3">
 <label>Status</label>
 
<select name="category_status" class="form-control" >
                      <option value="Active" <?php if($category_status=='Active'){ ?> selected="selected" <? } ?>>Active</option>
                      <option value="Inactive" <?php if($category_status=='Inactive'){ ?> selected="selected" <? } ?>>Inactive</option>
                    </select>


</div> 

<div class="form-group col-lg-3">
 <label>In Stock</label>

<select name="category_in_stock" class="form-control" >
                      <option value="Yes" <?php if($category_in_stock=='Yes'){ ?> selected="selected" <? } ?>>Yes</option>
                      <option value="No" <?php if($category_in_stock=='No'){ ?> selected="selected" <? } ?>>No</option>
                    </select>
                     



</div>                             
       
       
       <div class="form-group col-lg-3">
 <label>Quantity</label>
 
<input type="text" class="form-control" placeholder="Enter product quantity" name="category_qnty" id="category_qnty"  value="<?=$category_qnty?>">



</div>                             
       

<?php /*?>
<div class="col-lg-12" style="padding:0;background-color:#e8f1f3;margin:20px 0 50px 0">
                           <div class="btn-group" id="buttonexport">
                              <a href="#" >
                                 <h4 style="color:#000;font-weight:600;padding:5px">SEO Related Information</h4>
                              </a>
                           </div>
                        </div>                             
                             
                             
                              <div class="form-group col-lg-12">
                                 <label>Product Meta Title</label>
<textarea class="form-control" rows="3" name="category_meta_title" id="category_meta_title" placeholder="Enter category meta title here" ><?=$category_meta_title?></textarea>
                              </div>
                              <div class="form-group col-lg-12">
                                 <label>Product Meta Description</label>
<textarea class="form-control" rows="3" placeholder="Enter category meta description here" name="category_meta_description" id="category_meta_description"><?=$category_meta_description?></textarea>
                              </div>
                              <div class="form-group col-lg-12">
                                 <label>Product Meta Keyword</label>
<textarea class="form-control" rows="3" name="category_meta_keywords" placeholder="Enter category meta keywords here" id="category_meta_keywords"><?=$category_meta_keywords?></textarea>
                              </div>
                              <?php */?>
                              
                             
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
 