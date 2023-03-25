<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<style>
.v-middle {
vertical-align:middle !important;
}
</style>
<?php
if($st!=""){
$st=$_REQUEST['st'];
$pageID=$_REQUEST['pid'];

if($st==1){
$sql="UPDATE tbl_site_pages SET site_pages_status='Inactive' WHERE site_pages_id='$pageID' ";	
$res=db_query($sql);	
if($res>0){
$_SESSION["msg"]="Selected page is deactivated successfully.";	
}	
}else{
$sql="UPDATE tbl_site_pages SET site_pages_status='Active' WHERE site_pages_id='$pageID' ";	
$res=db_query($sql);	
if($res>0){
$_SESSION["msg"]="Selected page is activated successfully.";	
}	
	
}

header("location:static_page_list.php");
exit;
}

if(is_post_back()) {
	$arr_ids = $_REQUEST['arr_ids'];
	if(is_array($arr_ids)) {
		$str_ids = implode(',', $arr_ids); 
		if(isset($_REQUEST['Delete']) || isset($_REQUEST['Delete_x']) ) {
			db_query("delete from  tbl_site_pages where site_pages_id in ($str_ids)");
		} else if(isset($_REQUEST['Activate']) || isset($_REQUEST['Activate_x']) ) {
			$res=db_query("update  tbl_site_pages set site_pages_status = 'Active' where site_pages_id in ($str_ids)");
			  
			  if($res>0){
			  $_SESSION["msg"]="Selected page is actived successfully.";	
			  }
			  
		} else if(isset($_REQUEST['Deactivate']) || isset($_REQUEST['Deactivate_x']) ) {
			$res=db_query("update  tbl_site_pages set site_pages_status = 'Inactive' where site_pages_id in ($str_ids)");
			
			 if($res>0){
			  $_SESSION["msg"]="Selected page is deactivated successfully.";	
			  }
			  
		}else if(isset($_REQUEST['show_in_header']) || isset($_REQUEST['show_in_header_x']) ) {
			db_query("update  tbl_site_pages set site_pages_show_in_header='Yes' where site_pages_id in ($str_ids)");
		}else if(isset($_REQUEST['show_in_header_r']) || isset($_REQUEST['show_in_header_r_x']) ) {
			db_query("update  tbl_site_pages set site_pages_show_in_header='No' where site_pages_id in ($str_ids)");
		}else if(isset($_REQUEST['show_in_footer']) || isset($_REQUEST['show_in_footer_x']) ) {
			db_query("update  tbl_site_pages set site_pages_show_in_footer='Yes' where site_pages_id in ($str_ids)");
		}else if(isset($_REQUEST['show_in_footer_r']) || isset($_REQUEST['show_in_footer_r_x']) ) {
			db_query("update  tbl_site_pages set site_pages_show_in_footer='No' where site_pages_id in ($str_ids)");
		}
	}
	if(isset($_REQUEST['Update'])){
		foreach($site_pages_order_by as $key=>$value){
		db_query("update tbl_site_pages set site_pages_order_by='$value' where site_pages_id='$key'");
		}
	}
	header("Location: ".$_SERVER['HTTP_REFERER']);
	exit;
}

$start = intval($start);
$pagesize = intval($pagesize)==0?$pagesize=DEF_PAGE_SIZE:$pagesize;

$order_by == '' ? $order_by = 'site_pages_status' : true;
$order_by2 == '' ? $order_by2 = 'asc' : true;
 
$sql = "select * from  tbl_site_pages   where 1";
$sql = apply_filter($sql, $site_pages_name, 'like','site_pages_name');
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
                  <i class="fa fa-file-text-o" aria-hidden="true"></i>

               </div>
               <div class="header-title">
                  <h1>Pages</h1>
                  <small>Static Page List</small>
               </div>


           
               
            </section>
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
                                 <h4 style="color:black">Page List</h4>
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
                                       <th></th>            
                                       <th class="text-center">Title</th>                                       
                                       <th class="text-center">Live Url</th>                                       
                                       <th class="text-center">Status</th>
                                       <th class="text-center">Action</th>
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


<td class="text-center v-middle"><?=++$cnt?></td>

<td class="text-center v-middle"><?=$line_raw["site_pages_name"]?></td>

<td class="text-center v-middle">
<?php if($line_raw['site_pages_id']==27){?>
<a href="javascript:void(0)" class="btn btn-link">Click Here <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
<?php }else{?>
<a href="<?=SITE_WS_PATH?>/<?=$line_raw["site_pages_url"]?>.php" target="_blank" class="btn btn-link">Click Here <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
<?php }?>
</td>
<td class="text-center v-middle">
<?php if($line_raw["site_pages_status"]=="Active"){?>
<a href="static_page_list.php?st=1&pid=<?=$line_raw["site_pages_id"]?>"><span class="label-custom label label-default">Active</span></a>
<?php }else{?>
<a href="static_page_list.php?st=0&pid=<?=$line_raw["site_pages_id"]?>"><span class="label-danger label label-default">Inactive</span></a>
<?php }?>

</td>
                                       <td class="text-center v-middle">
<a href="static_page_f.php?site_pages_id=<?=$line_raw["site_pages_id"]?>"><button type="button" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></button>
</a>                                          
                                       </td>
<td class="text-center v-middle"><input name="arr_ids[]" type="checkbox" id="arr_ids[]" value="<?=$site_pages_id?>" /></td>                                           
                                       
                                    </tr>
<?php
}
?>
                                    
<tr> <td colspan="6">

<button type="submit" name="Deactivate"  class="btn btn-danger pull-right " >Make Inactive</button>

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
               <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-file-text-o m-r-5"></i> Update Page</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Customer Name:</label>
                                          <input type="text" placeholder="Customer Name" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Email:</label>
                                          <input type="email" placeholder="Email" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Mobile</label>
                                          <input type="number" placeholder="Mobile" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Address</label><br>
                                          <textarea name="address" rows="3"></textarea>
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">type</label>
                                          <input type="text" placeholder="type" class="form-control">
                                       </div>
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
               <!-- Modal -->    
               <!-- Customer Modal2 -->
               
               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>
<?php require_once("footer.php"); ?>