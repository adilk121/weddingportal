<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<style>



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
if($st!=""){
$st=$_REQUEST['st'];
$catID=$_REQUEST['pid'];

if($st==1){
$sql="UPDATE  tbl_country_master SET status='Inactive' WHERE contId='$catID' ";	
$res=db_query($sql);	
if($res>0){
$_SESSION["msg"]="Selected country is deactivated successfully.";	
}	
}else{
$sql="UPDATE  tbl_country_master SET status='Active' WHERE contId='$catID' ";	
$res=db_query($sql);	
if($res>0){
$_SESSION["msg"]="Selected country is activated successfully.";	
}	
	
}

header("location:country-list.php");
exit;
}




if(is_post_back()) {
	$arr_ids = $_REQUEST['arr_ids'];
	if(is_array($arr_ids)) {
		$str_ids = implode(',', $arr_ids); 
		if(isset($_REQUEST['Activate']) || isset($_REQUEST['Activate_x']) ) {
			db_query("update  tbl_country_master set status='Active' where contId in ($str_ids)");
			$_SESSION["msg"]="selected countries are activated. ";
		} else if(isset($_REQUEST['Deactivate']) || isset($_REQUEST['Deactivate_x']) ) {
			db_query("update  tbl_country_master set status='Inactive' where contId in ($str_ids)");
						$_SESSION["msg"]="selected countries are deactivated. ";
		}else if(isset($_REQUEST['Delete']) || isset($_REQUEST['Delete_x'])){
			db_query("DELETE FROM tbl_country_master where contId in ($str_ids)");
						$_SESSION["msg"]="selected countries are deleted. ";
			
		}
		
		
	}
	
	header("Location: ".$_SERVER['HTTP_REFERER']);
	exit;
}


$start = intval($start);
$pagesize = intval($pagesize)==0?$pagesize=DEF_PAGE_SIZE:$pagesize;

$order_by == '' ? $order_by = 'c_order_by' : true;
$order_by2 == '' ? $order_by2 = 'asc' : true;
 
$sql = "select * from   tbl_country_master   where 1 ";
$sql = apply_filter($sql, $contName, 'like','contName');
$sql .= " order by contName ";
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
                  <h1>Country</h1>
                  <small>Country List</small>
                  
                  

        


                  
 
                 
                 
                 <a href="addedit-country.php?id=0"><button id="btn-go-back" type="button" class="btn btn-labeled btn-inverse m-b-5 pull-right">
<span class="btn-label"><i class="fa fa-plus" aria-hidden="true"></i>
</span>Add Country
</button></a>

<span class="count-num">Total : <?=db_scalar("SELECT COUNT(contId) FROM  tbl_country_master WHERE 1 ")?></span>
                  
               </div>


           
               
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">

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
<form method="get" name="form2" id="form2-search" onsubmit="return confirm_submit(this)">
<div class="col-lg-10 " style="padding:0"><input name="contName" class="form-control" type="text" id="contName" placeholder=" Find Country" value="">
<input name="pagesize" type="hidden" id="pagesize" value="20"></div>

<div class="col-lg-2"><button type="submit" name="findCntry" class="btn btn-primary"><i class="fa fa-search"></i> Find </button></div>

</form>
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
                                 <h4 class="font-black">Country List</h4>
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
                                       <th class="text-center">Country Name</th>                                       
                                       <th class="text-center">Add</th>                                       
                                       <th class="text-center">Status</th>
                                       <!--<th class="text-center">Order By</th>-->
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
                            
                            
                            <td class="text-center v-middle" ><?=++$cnt?></td>
                            
<td class="text-left v-middle pl25"><a href="state-list.php?catID=<?=$line_raw["contId"]?>"><?=$line_raw["contName"]?> <i class="fa fa-arrow-right"></i></a>

                                    

</td>
                                     
<td class="text-center v-middle">

<a href="addedit-state.php?id=0&cntyID=<?=$line_raw["contId"]?>"><button type="button" class="btn btn-info btn-outline w-md m-b-5 bold"><i class="fa fa-plus font-black">&nbsp;&nbsp;</i></span>Add State</button></a>



</td>


<td class="text-center v-middle">
<?php if($line_raw["status"]=="Active"){?>
<a href="country-list.php?st=1&pid=<?=$line_raw["contId"]?>"><span class="label-custom label label-default">Active</span></a>
<?php }else{?>
<a href="country-list.php?st=0&pid=<?=$line_raw["contId"]?>"><span class="label-danger label label-default">Inactive</span></a>
<?php }?>

</td>


<?php /*?><td class="v-middle" align="center">
<input type="text" name="c_order_by[<?=$contId?>]" id="c_order_by[<?=$contId?>]"  value="<?=$c_order_by?>" class="form-control" style="width:40px"  />
</td><?php */?>



<td class="text-center v-middle">
<a href="addedit-country.php?id=<?=$line_raw["contId"]?>"><button type="button" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></button>
</a>                                          
</td>


<td class="text-center v-middle"><input name="arr_ids[]" type="checkbox" id="arr_ids[]" value="<?=$contId?>" /></td>                                           
                                       
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

<button type="submit" name="Deactivate"  class="btn btn-danger pull-right mr5" >Make Inactive</button>

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
              
            </section>

         </div>
<?php require_once("footer.php"); ?>