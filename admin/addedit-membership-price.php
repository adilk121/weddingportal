<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<?php
$mdID=trim($_REQUEST['id']);
$memID= trim($mem);


if(is_post_back()){
//*************** UPDATE EXISTING CATEGORY START ************************//

if($_REQUEST['id']!='0') {

////////////****************** IMAGE RESIZING END HERE *****************************//

$sql = "update tbl_membership_detail set 
				md_mem_id='$mem',
				md_duration='$md_duration',
				md_contact_view='$md_contact_view',
				md_duration_type='$md_duration_type',
				md_price='$md_price',				
				md_discount_percentage='$md_discount_percentage',								
				md_tag_line='$md_tag_line',
				md_status='$md_status',
				md_add_date=".date("Y-m-d")."												
				where md_id = '$mdID' 
				";		


db_query($sql);


$_SESSION["msg"]="Membership price is Updated Successfully !";
header("Location:addedit-membership-price.php?id=$mdID&mem=$mem");
exit;
//*************** UPDATE EXISTING CATEGORY END ************************//
}else{

////////////****************** IMAGE RESIZING END HERE *****************************//
$sql = "insert into tbl_membership_detail set 
				md_mem_id='$mem',
				md_duration='$md_duration',
				md_contact_view='$md_contact_view',				
				md_duration_type='$md_duration_type',
				md_price='$md_price',				
				md_discount_percentage='$md_discount_percentage',								
				md_tag_line='$md_tag_line',
				md_status='$md_status',
				md_add_date=".date("Y-m-d")."												
				";
				
db_query($sql);
$_SESSION["msg"]="Membership price is added successfully !";
header("Location:addedit-membership-price.php?id=0&mem=$mem");
exit;
//*************** INSERT NEW CATEGORY END ************************//
 }
}

if($mdID!='') {
	$result = db_query("select * from tbl_membership_detail where md_id = '$mdID'");
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
                  <h1>Add/Edit Membership</h1>
                  <small>Add/Edit Membership</small>
                  
                  
<a href="membership-detail.php?mem=<?=$_REQUEST['mem']?>"><button id="btn-go-back" type="button" class="btn btn-labeled btn-inverse m-b-5 pull-right">
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


<div class="form-group col-lg-4">
<label>Membership Duration</label>
<input type="text" class="form-control" placeholder="Enter Membership Duration In Number" name="md_duration" id="md_duration"  value="<?=$md_duration?>">
</div>
                                         


                                         
<div class="form-group col-lg-3">
<label>Duration Type</label>
<br>

<input type="radio" class="ml10" name="md_duration_type" id="md_duration_type" value="Month" <?php  if($md_duration_type=="Month"){?> checked<?php }?>  /> Month

<input type="radio" class="ml10" name="md_duration_type" id="md_duration_type" value="Year" <?php  if($md_duration_type=="Year"){?> checked<?php }?>  /> Year

</div>


<div class="form-group col-lg-5">
<label>Contact View Credit</label>
<br>

<input type="text" class="form-control" placeholder="Enter contact view credit" name="md_contact_view" id="md_contact_view"  value="<?=$md_contact_view?>">


</div>
                                        

                             
                            
<div class="clearfix"></div>      


<div class="form-group col-lg-6">
<label>Price</label>
<input type="text" class="form-control" placeholder="Enter Membership Price" name="md_price" id="md_price"  value="<?=$md_price?>">
</div>


<div class="form-group col-lg-6">
<label>Discount(%)</label>
<input type="text" class="form-control" placeholder="Enter Discount Percentage" name="md_discount_percentage" id="md_discount_percentage"  value="<?=$md_discount_percentage?>">
</div>
        
 
<div class="form-group col-lg-6">
<label>Tag Line</label>
<input type="text" class="form-control" placeholder="Enter Tag Line" name="md_tag_line" id="md_tag_line"  value="<?=$md_tag_line?>">
</div>
               
                     
                           
<div class="form-group col-lg-3">
<label>Status</label>

<select name="md_status" id="md_status" class="form-control" >
<option value="Active" <?php if($md_status=='Active'){ ?> selected="selected" <? } ?>>Active</option>
<option value="Inactive" <?php if($md_status=='Inactive'){ ?> selected="selected" <? } ?>>Inactive</option>
</select>

</div>                             



                             
                              <div class="col-lg-12 reset-button">
                                      
<input type="hidden" name="mem" value="<?=$_REQUEST['mem']?>" />                                      
                                                                 
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
 