<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<link href="assets/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-toggle/bootstrap-toggle.min.css" rel="stylesheet" type="text/css"/>
<?php
$header_flash_id = $_GET['header_flash_id'];

if($_REQUEST['delImage']!=""){
$isDel=db_query("UPDATE  tbl_header_flash SET  header_flash_image_name='' WHERE 1 and header_flash_id = '$header_flash_id'");	
@unlink("../flash_images/$_REQUEST[delImage]");
header("location:addedit-header-flash.php?header_flash_id=$header_flash_id");
}


if(isset($_REQUEST['update'])){
$ordBY=db_scalar("select MAX(header_flash_order_by) from tbl_header_flash where 1");
$ordBY=$ordBY+1;
	
//------------FUNCTION TO GET IMAGE EXTENSION START---------------//
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 //------------FUNCTION TO GET IMAGE EXTENSION END---------------//
 	$image =$_FILES["file"]["name"];
	$uploadedfile = $_FILES['file']['tmp_name']; 
 	if ($image) { 	
	    $DelImage=db_scalar("select header_flash_image_name from tbl_header_flash where 1 and header_flash_id = '$header_flash_id'");
	    @unlink("../flash_images/$DelImage");
 		$filename = stripslashes($_FILES['file']['name']); 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);		
		$imgNAME = substr(md5($filename.rand(1,9).time()),0,15).".".$extension;

move_uploaded_file($_FILES['file']['tmp_name'],"../flash_images/$imgNAME");
}else{
$imgNAME=db_scalar("select header_flash_image_name from tbl_header_flash where 1 and header_flash_id = '$header_flash_id'");
}

////////////****************** IMAGE RESIZING END HERE *****************************//
 $sqlupdate = "update tbl_header_flash set 
						 header_flash_image_name='$imgNAME',
						 header_flash_type='Main',
						 header_flash_status='$header_flash_status'  
						 where header_flash_id = '$header_flash_id' ";
			
	
		                 db_query($sqlupdate);
						 set_session_msg("Flash image updated successfully !");
}


if(isset($_REQUEST['submit'])){
//------------FUNCTION TO GET IMAGE EXTENSION START---------------//
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 //------------FUNCTION TO GET IMAGE EXTENSION END---------------//
 	$image =$_FILES["file"]["name"];
	$uploadedfile = $_FILES['file']['tmp_name']; 
 	if ($image) { 	
 		$filename = stripslashes($_FILES['file']['name']); 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
		$imgNAME = substr(md5($filename.rand(1,9).time()),0,15).".".$extension;

move_uploaded_file($_FILES['file']['tmp_name'],"../flash_images/$imgNAME");
}

////////////****************** IMAGE RESIZING END HERE *****************************//
	  $dupliDataCount=db_scalar("select count(*) from tbl_header_flash where 1 and header_flash_title='$header_flash_title'");

		  $sqlinsert = "insert into tbl_header_flash set 
						 header_flash_image_name='$imgNAME',
						 header_flash_type='Main',						 
						 header_flash_status='$header_flash_status'  
						 ";
						 
						
		                 db_query($sqlinsert);
						 
						 
						 set_session_msg("Flash image added successfully !");
						 
		           

	header("Location: manage-header-flash.php");
	exit;


  }
	


if($header_flash_id!=''){
	$sql="select * from tbl_header_flash where header_flash_id = '$header_flash_id'";	
	$result = db_query($sql);
	if ($line_raw = mysqli_fetch_array($result)) {
		$line = ms_form_value($line_raw);
		@extract($line);
	}
}
?>


         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-file-text"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Flash</h1>
                  <small>Edit Flash Content</small>
                  
                  
<a href="manage-header-flash.php"><button id="btn-go-back" type="button" class="btn btn-labeled btn-inverse m-b-5 pull-right">
<span class="btn-label" ><i class="fa fa-chevron-circle-left"></i></span>Go Back
</button></a>

                  
               </div>
               
               
            </section>
            <!-- Main content -->
<script src="../ckeditor/ckeditor.js"></script>            
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag" data-edit-title='false' data-close='false' data-reload='false'>
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>General Information</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
<form name="form1" method="post" onsubmit="return formValidation()" enctype="multipart/form-data" class="col-sm-12" >
                             
                             

                            
<div class="form-group col-lg-6">
<label>Flash Image</label>
<?php if($header_flash_image_name!=""){ ?>
<img src="../flash_images/<?=$header_flash_image_name?>" class="form-control" style="width:360px;height:200px" />
<?php }else{?>
<img src="assets/dist/img/no-image.jpg" class="form-control" style="width:360px;height:200px" />
<?php }?>

<?php if($header_flash_image_name!=""){ ?>
<div class="col-lg-12 " ><a href="addedit-header-flash.php?delImage=<?=$header_flash_image_name?>&header_flash_id=<?=$header_flash_id?>" style="font-weight:600;margin-left:15px;text-decoration:underline;margin-top:20px" >Remove Image</a>                  
</div>
<?php }?>

</div>

<div class="form-group col-lg-6" style="padding-top:100px">
<input type="file" name="file" id="file" />

<p class="img-size">Widh : 1356px, Height : 650px</p>
</div>


                             
                             
<?php /*?><div class="form-group col-lg-12">
<label>Flash Title</label>
<input type="text" class="form-control" placeholder="Enter Title" name="header_flash_title" id="header_flash_title" value="<?=$header_flash_title?>" >
                             </div>
                             


 <div class="form-group col-lg-12">
                                 <label>Flash Description</label>
 <textarea class="form-control" name="header_flash_description" rows="3" id="header_flash_description"><?=$header_flash_description?></textarea>
                              </div><?php */?>
                             
                                            
                             
                             

                                                          
                            
                             
                            
                           
<div class="form-group col-lg-3">
<select name="header_flash_status" class="form-control" >
                      <option value="Active" <?php if($header_flash_status=='Active'){ ?> selected="selected" <? } ?>>Active</option>
                      <option value="Inactive" <?php if($header_flash_status=='Inactive'){ ?> selected="selected" <? } ?>>Inactive</option>
                    </select>


</div>                             
       


                             
                             
                             
                           
                              
                             
                              <div class="col-lg-12 reset-button">
                                                                 
 <?php if($header_flash_id!=""){?>
 
<button type="submit" name="update" class="btn btn-add">Update</button>
<?php }else{?>                                 
                                
<button type="submit" name="submit" class="btn btn-add">Update</button>
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