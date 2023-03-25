<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<style>

div#add-edit-benefit {
    background: #2a3f54;
    padding-top: 15px;
    padding-bottom: 15px;
    margin: -14px 0 16px 0;
}

.v-middle {
vertical-align:middle !important;
}

span.home-lbl {
    background: #FFEB3B;
    padding: 1px 15px 1px 15px;
    font-size: 11px;
    font-weight: 600;
    color: red;
    border: solid thin #f0df4d;
    position: relative;
    top: 5px;
}</style>
<?php
# ADD 
if(isset($_REQUEST['add_benefit'])){
$sql="INSERT INTO tbl_membership_benefit SET b_description='$b_description',b_mem_id='$mem_id' ";
$res=db_query($sql);	

if($res){
$_SESSION['msg']="Benefit is added successfully.";	
header("location:membership-benefits.php?mem_id=$mem_id");
exit;
}

}

# EDIT
if(isset($_REQUEST['edit_benefit'])){
$sql="UPDATE tbl_membership_benefit SET b_description='$b_description',b_mem_id='$mem_id' WHERE b_id='$editID' ";
$res=db_query($sql);	

if($res){
$_SESSION['msg']="Benefit is edited successfully.";	
header("location:membership-benefits.php?mem_id=$mem_id");
exit;
}

}


?>
<?php
if($st!=""){
$st=$_REQUEST['st'];
$bID=$_REQUEST['pid'];

if($st==1){
$sql="UPDATE   tbl_membership_benefit SET b_status='Inactive' WHERE b_id='$bID' ";	
$res=db_query($sql);	
if($res>0){
$_SESSION["msg"]="Selected benefit is deactivated successfully.";	
}	
}else{
$sql="UPDATE   tbl_membership_benefit SET b_status='Active' WHERE b_id='$bID' ";	
$res=db_query($sql);	
if($res>0){
$_SESSION["msg"]="Selected benefit is activated successfully.";	
}	
	
}

header("location:membership-benefits.php?mem_id=$mem_id");
exit;
}


# CHECK NOT CHECK

if($st2!=""){
$st2=$_REQUEST['st2'];
$bID=$_REQUEST['pid'];

if($st2==1){
$sql="UPDATE   tbl_membership_benefit SET b_is_ok='No' WHERE b_id='$bID' ";	
$res=db_query($sql);	
if($res>0){
$_SESSION["msg"]="Selected benefit is unmarked successfully.";	
}	
}else{
$sql="UPDATE tbl_membership_benefit SET b_is_ok='Yes' WHERE b_id='$bID' ";	
$res=db_query($sql);	
if($res>0){
$_SESSION["msg"]="Selected benefit is marked successfully.";	
}	
	
}

header("location:membership-benefits.php?mem_id=$mem_id");
exit;
}



if(is_post_back()) {
	$arr_ids = $_REQUEST['arr_ids'];
	if(is_array($arr_ids)) {
		$str_ids = implode(',', $arr_ids); 
		if(isset($_REQUEST['Activate']) || isset($_REQUEST['Activate_x']) ) {
			db_query("update  tbl_membership_benefit set b_status='Active' where b_id in ($str_ids)");
			$_SESSION["msg"]="selected benefits are activated. ";
		}else if(isset($_REQUEST['Deactivate']) || isset($_REQUEST['Deactivate_x']) ) {
			db_query("update  tbl_membership_benefit set b_status='Inactive' where b_id in ($str_ids)");
						$_SESSION["msg"]="selected benefits are deactivated. ";
		}else if(isset($_REQUEST['Delete']) || isset($_REQUEST['Delete_x'])){
			db_query("DELETE FROM tbl_membership_benefit where b_id in ($str_ids)");
		    $_SESSION["msg"]="selected benefits are deleted. ";			
		}
		
		
		
		
	}
	
	header("Location: ".$_SERVER['HTTP_REFERER']);
	exit;
}


$start = intval($start);
$pagesize = intval($pagesize)==0?$pagesize=DEF_PAGE_SIZE:$pagesize;

$order_by == '' ? $order_by = 'c_order_by' : true;
$order_by2 == '' ? $order_by2 = 'asc' : true;
 
$sql = "select * from   tbl_membership_benefit   where 1  and b_mem_id='$mem_id'";
$sql = apply_filter($sql, $b_description, 'like','b_description');
$sql .= " order by b_mem_id ";
$sql .= " limit $start, $pagesize ";
//echo $sql;
$pager = new midas_pager_sql($sql, $pagesize, $start);
if($pager->total_records) {
	$result = db_query($sql);
}
?>

<script language="JavaScript" type="text/javascript" src="../includes/general.js"></script>

         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-globe" aria-hidden="true"></i>

               </div>
               <div class="header-title">
                  <h1>Manage Membership Benefits</h1>
                  <small>Membership Benefits List</small>
                  
                
<a href="membership-list.php" class="btn btn-info pull-right" style="margin-top:-20px"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Go Back</a>                 
                 
<span class="count-num">Total : <?=db_scalar("SELECT COUNT(b_id) FROM  tbl_membership_benefit WHERE 1 ")?></span>
                  
               </div>


           
               
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">

<?php
$sql="SELECT * FROM tbl_membership_benefit WHERE b_id='$editID'";
$dataEdit=db_query($sql);
$recEdit=mysqli_fetch_array($dataEdit);
?>


<div class="col-sm-12" id="add-edit-benefit">
<form action="" method="post" enctype="multipart/form-data">
<table style="width:100%">
<tr>

<td style="width:10%;text-align:right;font-weight:bold;padding-right:10px;font-size:16px;color:#fff">
Benefit : 
</td>

<td style="width:70%">
<input type="text" name="b_description" id="b_description" value="<?=$recEdit['b_description']?>" placeholder=" Enter benefit description" class="form-control" />
</td>



<td style="width:20%">

<input type="hidden" name="mem_id" value="<?=$mem_id?>" />


<?php if(!empty($editID)){?>
<button type="submit" name="edit_benefit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Benefits</button>

<a href="membership-benefits.php?mem_id=<?=$mem_id?>" class="btn btn-link font-white"><i class="fa fa-refresh"></i> Clear</a>

<?php }else{?>
<button type="submit" name="add_benefit" class="btn btn-primary"><i class="fa fa-plus"></i> Add Benefits</button>
<?php }?>




</td>

</tr>
</table>
</form>
</div>


<?php if(!empty($_SESSION['msg'])){?>
<div class="col-sm-12 bold text-center text-success">
<?=$_SESSION['msg']?>
</div>
<?php 
unset($_SESSION['msg']);
}
?>




<?php if($_SESSION["msg"]!=""){?>               
<div class="alert alert-success alert-dismissable fade in text-center" style="background-color:#dff0d8;border:none; color:#000;margin:10px 0 0 0">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!&nbsp;&nbsp;&nbsp;</strong> <?=$_SESSION["msg"]?>
  </div>
<?php 
unset($_SESSION["msg"]);
}?>     

<div class="col-lg-12">

<? if($pager->total_records!=0) {?>
<div class="col-lg-4 text-left" >
<? $pager->show_displaying()?>
</div>

<div class="col-lg-4 text-center pb10 " >

</div>

<div class="col-lg-4 text-right" >Records Per Page:
<?=pagesize_dropdown('pagesize', $pagesize);?>
</div>
<?php
}
?>

</div>


                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag" data-edit-title='false' data-close='false' data-reload='false'>
                        
                        
                           
                        
                        
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4 class="font-black">Membership Benefits List</h4>
                              </a>
                           </div>
                        </div>
                        
                        



                        
                        <div class="panel-body">
                       
<? if($pager->total_records>0) {?>                       
                       
                           <div class="table-responsive">
<form action="" method="post" enctype="multipart/form-data">                           
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
<thead>
<tr class="info">                                      
<th class="text-center">S.No.</th>            
<th class="text-center">Description</th>                                      
<th class="text-center">Status</th>
<!--<th class="text-center">Order By</th>-->
<th class="text-center">Type</th>
<th class="text-center">Edit</th>
<th class="text-center"><input name="check_all" type="checkbox" id="check_all" value="1" onclick="checkall(this.form)" /></th>
</tr>
</thead>
                                 
<tbody>
                                   
<?
$cnt=0;
while ($line_raw = mysqli_fetch_array($result)) {
	$line = ms_display_value($line_raw);
	@extract($line);
	$css = ($css=='trOdd')?'trEven':'trOdd';
?>                                   
                                    <tr>
                            
                            
                            <td class="text-center v-middle" ><?=++$cnt?></td>
                            
<td class="text-left v-middle pl25"><?=$line_raw["b_description"]?></a>

</td>
                                     


<td class="text-center v-middle">
<?php if($line_raw["b_status"]=="Active"){?>
<a href="membership-benefits.php?st=1&pid=<?=$line_raw["b_id"]?>&mem_id=<?=$mem_id?>"><span class="label-custom label label-default">Active</span></a>
<?php }else{?>
<a href="membership-benefits.php?st=0&pid=<?=$line_raw["b_id"]?>&mem_id=<?=$mem_id?>"><span class="label-danger label label-default">Inactive</span></a>
<?php }?>

</td>


<?php /*?><td class="v-middle" align="center">
<input type="text" name="c_order_by[<?=$contId?>]" id="c_order_by[<?=$contId?>]"  value="<?=$c_order_by?>" class="form-control" style="width:40px"  />
</td><?php */?>


<td class="text-center v-middle">

<?php if($line_raw["b_is_ok"]=="Yes"){?>
<a href="membership-benefits.php?st2=1&pid=<?=$line_raw["b_id"]?>&mem_id=<?=$mem_id?>"><span class="label-custom label label-default">
<i class="fa fa-check" aria-hidden="true"></i>
</span></a>
<?php }else{?>
<a href="membership-benefits.php?st2=0&pid=<?=$line_raw["b_id"]?>&mem_id=<?=$mem_id?>"><span class="label-danger label label-default"><i class="fa fa-times" aria-hidden="true"></i>
</span></a>
<?php }?>

                                        
</td>



<td class="text-center v-middle">
<a href="membership-benefits.php?editID=<?=$line_raw["b_id"]?>&mem_id=<?=$mem_id?>"><button type="button" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></button>
</a>                                          
</td>


<td class="text-center v-middle"><input name="arr_ids[]" type="checkbox" id="arr_ids[]" value="<?=$line_raw["b_id"]?>" /></td>                                           
                                       
                                    </tr>
<?php
}
?>
                                    
<tr> <td colspan="8">


 <?php if($_SESSION['sess_admin_type']=='Admin'){ ?>

<button  style="background-color:#CA0000;border:none" type="submit" name="Delete" onClick="return select_chk()"  class="btn btn-primary pull-left ml5 " >Delete</button>
<? } ?>



<!--<button type="submit" name="set_home" class="btn btn-default pull-left mr5 ml10" >Set For Home</button>

<button type="submit" name="remove_home"  class="btn btn-black pull-left mr5" >Remove From Home</button>-->




<!--<button type="submit" name="Update"  class="btn btn-primary pull-right ml5 " >Update Order</button>-->

<!--<button type="submit" name="Deactivate"  class="btn btn-danger pull-right mr5" >Make Inactive</button>

<button type="submit" name="Activate" class="btn btn-success pull-right mr5" >Make Active</button>

<button type="submit" name="remove_popular"  class="btn btn-black pull-right mr5" >Remove Popular</button>

<button type="submit" name="make_popular" class="btn btn-default pull-right mr5 " >Make Popular</button>-->

</td></tr>                                    
                                    
                                    
                                 </tbody>
</form>
                              </table>
                              
<? $pager->show_pager();?>
                                             
                              
                           </div>
<?php }else{?>
<div class="col-lg-12 msg text-center">Sorry, no records found.</div>
<?php }?>
                                  
                           
                        </div>
                     </div>
                  </div>
               </div>
              
            </section>

         </div>
<?php require_once("footer.php"); ?>