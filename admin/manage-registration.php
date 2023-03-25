<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<style>
.v-middle {
vertical-align:middle !important;
}

p.lbl-credit {
    background: #8BC34A;
    color: #000;
    margin: 10px 0 0 0;
    font-weight: 600;
}

#ul_tag{
    list-style:none;
}
#li_tag{
    display:inline;
    padding:10px;
    font-size:17px;
}
</style>


<?php
if($st!=""){
$st=$_REQUEST['st'];
$pageID=$_REQUEST['pid'];

if($st==1){
$sql="UPDATE tbl_registration SET reg_status='Inactive' WHERE reg_id='$pageID' ";	
$res=db_query($sql);	
if($res>0){
$_SESSION["msg"]="Selected user is deactivated successfully.";	
}	
}else{
$sql="UPDATE tbl_registration SET reg_status='Active' WHERE reg_id='$pageID' ";	
$res=db_query($sql);	
if($res>0){
$_SESSION["msg"]="Selected user is activated successfully.";	
}	
	
}

header("location:manage-registration.php");
exit;
}
?>

<?php
$del_id=$_GET['del_id'];
if($del_id!=""){

$sql="DELETE FROM tbl_registration  WHERE reg_id='$del_id' ";	
$res=db_query($sql);	
if($res>0){
$_SESSION["msg"]="Selected user is deleted successfully.";	

}

header("location:manage-registration.php");
exit;
}
?>




<?php
if(is_post_back()) {
	$arr_ids = $_REQUEST['arr_ids'];
	if(is_array($arr_ids)) {
		$str_ids = implode(',', $arr_ids); 
		if(isset($_REQUEST['Delete']) || isset($_REQUEST['Delete_x']) ) {
			db_query("delete from  tbl_registration where reg_id in ($str_ids)");
		} else if(isset($_REQUEST['Activate']) || isset($_REQUEST['Activate_x']) ) {
			$res=db_query("update  tbl_registration set reg_status = 'Active' where reg_id in ($str_ids)");
			  
			  if($res>0){
			  $_SESSION["msg"]="Selected user is actived successfully.";	
			  }
			  
		} else if(isset($_REQUEST['Deactivate']) || isset($_REQUEST['Deactivate_x']) ) {
			$res=db_query("update  tbl_registration set reg_status = 'Inactive' where reg_id in ($str_ids)");
			
			 if($res>0){
			  $_SESSION["msg"]="Selected user is deactivated successfully.";	
			  }
			  
		}
	}

	header("Location: ".$_SERVER['HTTP_REFERER']);
	exit;
}

/* Searching Code */
$search_cond="";
$status_cond="";
if(isset($_REQUEST['btn_search'])){
    
$search_cond="and (reg_member_mobile LIKE '%$_REQUEST[search_keyword]%' OR reg_email LIKE '%$_REQUEST[search_keyword]%' OR reg_name LIKE '%$_REQUEST[search_keyword]%')";    
}
if(isset($_REQUEST['status'])){
 if($_REQUEST['status']=="Active"){
   $status_cond="and reg_status='Active'";  
 }else if($_REQUEST['status']=="Inactive"){
   $status_cond="and reg_status='Inactive'"; 
 }else if($_REQUEST['status']=="All"){
   $status_cond="";  
 }    
     
}


$start = intval($start);
$pagesize = intval($pagesize)==0?$pagesize=DEF_PAGE_SIZE:$pagesize;

$order_by == '' ? $order_by = 'reg_id' : true;
$order_by2 == '' ? $order_by2 = 'desc' : true;
 
$sql = "select * from  tbl_registration where 1 $search_cond $status_cond";
$sql = apply_filter($sql, $reg_name, 'like','reg_name');
$sql .= " order by $order_by $order_by2 ";
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
      <i class="fa fa-user-circle-o" aria-hidden="true"></i>

   </div>
   <div class="header-title">
      <h1>Member
      
<a href="add-user.php"><button class="btn btn-success pull-right bold " ><i class="fa fa-user-circle-o fa-lg font-black"></i> Add Member</button></a>

      </h1>
      <small>Member List</small>

   </div>

</section>

<!--*** SEARCH SECTION START ***-->

<div class="container">
 <div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
   <div class="well" style="width:95%;">
     <center>
     <form action="" method="get">
      <div class="input-group" style="width:40%;">
        <input type="text" class="form-control" placeholder="Search" style="height:39px;" name="search_keyword" id="search_keyword" required>
        <div class="input-group-btn">
         
          <button class="btn btn-default" type="submit" name="btn_search">
            <i class="glyphicon glyphicon-search" style="font-size:20px;"></i>
          </button>
        </div>
      </div>
    </form> </center>  
<br><br>
<center>
<ul id="ul_tag">
 <li id="li_tag"><a href="manage-registration.php?status=Active&search_keyword=<?=$_REQUEST['search_keyword']?>" style="color:green;">Active</a> <i class="fa fa-angle-double-right"></i></li> 
 <li id="li_tag"><a href="manage-registration.php?status=Inactive&search_keyword=<?=$_REQUEST['search_keyword']?>">Inactive</a> <i class="fa fa-angle-double-right"></i></li> 
 <li id="li_tag"><a href="manage-registration.php?status=All&search_keyword=<?=$_REQUEST['search_keyword']?>" style="color:darkblue;">All</a> <i class="fa fa-angle-double-right"></i></li> 
</ul>   
</center> 
    
   </div>
  </div>    
 </div>    
</div>    

<!--*** SEARCH SECTION END ***-->

<!-- Main content -->
<section class="content">
   <div class="row">

<?php if($_SESSION["msg"]!=""){?>               
<div class="alert alert-success alert-dismissable fade in text-center" style="background-color:#dff0d8;border:none; color:#000;margin:10px 0 0 0">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!&nbsp;&nbsp;&nbsp;</strong> <?=$_SESSION["msg"]?>.
  </div>
<?php 
unset($_SESSION["msg"]);
}?>     

<div class="col-lg-12">

<? if($pager->total_records!=0) {?>
<div class="col-lg-6 text-left" >
<? $pager->show_displaying()?>
</div>
<div class="col-lg-6 text-right" >Records Per Page:
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
                                 <h4 class="font-black">Member List</h4>
                              </a>
                           </div>
                        </div>
                        
                        



                        
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
<? if($pager->total_records>0) {?>                           
                           
                           <div class="table-responsive">
<form action="" method="post" enctype="multipart/form-data">                           
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">                                      
                                       <th class="text-center" style="width:5%">S.No.</th>            
                                       <th class="text-center" style="width:40%" >User Info.</th>                                       
                                       <th class="text-center" style="width:15%" >Add Date</th>                                       
                                       <th class="text-center" style="width:15%" >Status</th>
                                       <th class="text-center" style="width:15%" >Action</th>
                                       <th class="text-center" style="width:10%" ><input name="check_all" type="checkbox" id="check_all" value="1" onclick="checkall(this.form)" /></th>
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


<td class="text-center v-middle"><?=++$cnt?></td>

<td class="text-left v-middle">

<p><?=$line_raw["reg_name"]?></p>

<p><?="<strong>Mb : </strong>".$line_raw["reg_mobile_no"]?></p>
<p><?="<strong>UID : </strong>".$line_raw["reg_email"]?></p>                                       
<p>                                                                        
<span style="display:none;" id="pass_<?=$cnt?>" onMouseOut="this.style.display='none';document.getElementById('star_<?=$cnt?>').style.display='block'"><?="<strong>Pass : </strong>".$line_raw["reg_pass"]?></span>
<span  style="cursor:pointer"  id="star_<?=$cnt?>" onMouseOver="this.style.display='none';document.getElementById('pass_<?=$cnt?>').style.display='block'"><strong>Pass : </strong><span style="font-size:10px"><i class="fa fa-star fa-spin"></i><i class="fa fa-star fa-spin"></i><i class="fa fa-star fa-spin"></i><i class="fa fa-star fa-spin"></i><i class="fa fa-star fa-spin"></i></span></span>
</p>


</td>

<td class="text-center v-middle">


<p class="bg-yellow bold"><?=date("d M y",strtotime($line_raw["reg_add_date"]))?></p>

<p><a class="btn btn-primary" href="javascript:void(0);" onClick ="PopupWindowCenter('manage-membership.php?user_id=<?=$reg_id?>&user_type=<?=$reg_user_type?>', 'PopupWindowCenter',1000,400)" ><i class="fa fa-edit"></i> Manage Membership</a></p>

</td>
<td class="text-center v-middle">
<?php if($line_raw["reg_status"]=="Active"){?>
<a href="manage-registration.php?st=1&pid=<?=$line_raw["reg_id"]?>"><span class="label-custom label label-default">Active</span></a>
<?php }else{?>
<a href="manage-registration.php?st=0&pid=<?=$line_raw["reg_id"]?>"><span class="label-danger label label-default">Inactive</span></a>
<?php }?>


<p class="lbl-credit">CREDIT : <span class="font-red"><?=$line_raw["reg_membership_view_credit"]?></span></p>

</td>
<td class="text-center v-middle">






<p><a href="javascript:void(0);" onClick ="PopupWindowCenter('registration_detail.php?user_id=<?=$reg_id?>&user_type=<?=$reg_user_type?>', 'PopupWindowCenter',1000,600)"><strong style="font-size:12px;"><button type="button" class="btn btn-view btn-sm" ><i class="fa fa-search"></i></button></strong></a>                                         
</p>

<p><a href="add-user.php?editID=<?=$line_raw["reg_id"]?>"><button type="button" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></button>
</a> </p>

<p><a href="manage-registration.php?del_id=<?=$line_raw["reg_id"]?>"><button type="button" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></button>
</a> </p>                                         
</td>
<td class="text-center v-middle"><input name="arr_ids[]" type="checkbox" id="arr_ids[]" value="<?=$reg_id?>" /></td>                                           

</tr>
<?php
}
?>

<tr> <td colspan="6">

<button class="btn btn-danger pull-left" type="submit" name="Delete"><i class="fa fa-trash-o"></i>&nbsp;Delete</button>

<button type="submit" name="Deactivate"  class="btn btn-warning pull-right " >Make Inactive</button>

<button type="submit" name="Activate" class="btn btn-success pull-right mr5" >Make Active</button>
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
               <!-- customer Modal1 -->
               
               <!-- /.modal -->
               <!-- Modal -->    
               <!-- Customer Modal2 -->
               
               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>
<?php require_once("footer.php"); ?>