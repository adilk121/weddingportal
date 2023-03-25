<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<style>
.v-middle {
vertical-align:middle !important;
}
</style>


<?php
$del_id=$_GET['del_id'];
if($del_id!=""){

$sql="UPDATE tbl_order SET ord_is_deleted='Yes' WHERE ord_id='$del_id'";
$res=db_query($sql);


if($res>0){
$_SESSION["msg"]="Selected order is deleted successfully.";	

}

header("location:manage-order.php");
exit;
}
?>




<?php
if(is_post_back()) {

$arr_ids = $_REQUEST['arr_ids'];
	
	if(is_array($arr_ids)) {
		$str_ids = implode(',', $arr_ids); 
		if(isset($_REQUEST['Delete']) || isset($_REQUEST['Delete_x']) ) {
			
		
			
			$res=db_query("UPDATE tbl_order SET ord_is_deleted='Yes' WHERE  ord_id in ($str_ids)");
             
			 if($res>0){
			 $_SESSION["msg"]="Selected orders are deleted successfully.";						 
			 }
			
			
	  
		}else if($_REQUEST['changeStatus']!=""){
			
			$status=$_REQUEST['changeStatus'];
			$res=db_query("update tbl_order set ord_status = '$status' WHERE ord_id in ($str_ids) ");

	
		}
	}

	//header("Location: ".$_SERVER['HTTP_REFERER']);
	//exit;
}

//////////////////// FILTER BY USER ///////////////////////
$uid=$_REQUEST['uid'];
$cond="";

if($uid!=""){
$cond=" AND ord_reg_id='$uid'";	
}


//////////////////// FILTER BY RESELLER ///////////////////////
$rID=$_REQUEST['rID'];
$cond2="";

if($rID!=""){
$cond2=" AND ord_refer_id='$rID'";	
}



//////////////////// FILTER BY PAYMENT STATUS ///////////////////////
$paySt=$_REQUEST['paySt'];
$cond2="";

if($paySt!=""){
$cond2=" AND order_payment_status='$paySt'";	
}


//////////////////////////////////////////////////////////




$start = intval($start);
$pagesize = intval($pagesize)==0?$pagesize=DEF_PAGE_SIZE:$pagesize;

$order_by == '' ? $order_by = 'ord_status' : true;
$order_by2 == '' ? $order_by2 = 'asc' : true;
 
$sql = "select * from   tbl_order  where 1 AND ord_is_deleted='Yes'   $cond $cond2";
$sql = apply_filter($sql, $reg_name, 'like','ord_id');
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
                  <i class="fa fa-cart-plus" aria-hidden="true"></i>

               </div>
               <div class="header-title">
                  <h1>Order History
                  

                  
                  </h1>
                  <small>Order History</small>
                  
                  
                  
                  
<select class="form-control " id="buyer-ord" onChange="filterbyuser(this.value)" >
<option value="0">Filter By Buyer</option>
<?php
$sql="SELECT * FROM tbl_registration WHERE reg_status='Active'";
$data=db_query($sql);
$count=mysqli_num_rows($data);
if($count){
while($rec=mysqli_fetch_array($data)){	
?>                  
<option value="<?=$rec['reg_id']?>"><?=$rec['reg_email']?> (<?=$rec['reg_name']?>)</option>
<?php
}
}
?>

</select>



<select class="form-control " id="resller-ord" onChange="filterbyreseller(this.value)" >
<option value="0">Filter By Reseller</option>
<?php
$sql="SELECT * FROM tbl_resellers WHERE reseller_status='Active'";
$data=db_query($sql);
$count=mysqli_num_rows($data);
if($count){
while($rec=mysqli_fetch_array($data)){	
?>                  
<option value="<?=$rec['reseller_id']?>"><?=$rec['reseller_email']?> (<?=$rec['reseller_name']?>)</option>
<?php
}
}
?>

</select>
             
             
             
<select class="form-control " id="resller-ord" onChange="filterbypay(this.value)" >
<option value="0">Pay Status</option>
<option value="Paid">Paid</option>
<option value="Unpaid">Unpaid</option>
</select>
                          
                  
                  
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
                                 <h4>Order List</h4>
                              </a>
                           </div>
                        </div>
                        
                        



                        
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
<? if($pager->total_records>0) {?>                           
                           
                           <div class="table-responsive">
<form action="" id="frm_ord" name="frm_ord" method="post" enctype="multipart/form-data">                           
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">                                      
                                       <th class="text-center">S.No.</th>            
                                       <th class="text-center">Order Information</th>                                       
                                       <th class="text-center">Order Date</th>                                       

                                       <th class="text-center">View</th>
                                       
                                       <th class="text-center">Invoice</th>
                                       
                                    </tr>
                                 </thead>
                                 
<tbody>
                                   
<?
$cnt=0;
while ($line_raw = mysqli_fetch_array($result)) {
	$line = ms_display_value($line_raw);
	@extract($line);
	$css = ($css=='trOdd')?'trEven':'trOdd';
	
$sql="SELECT * FROM tbl_registration WHERE reg_id='$line_raw[ord_reg_id]'";
$dataReg=db_query($sql);
$recReg=mysqli_fetch_array($dataReg);
?>                                   
<tr>
<td class="text-center v-middle"><?=++$cnt?></td>

<td class="text-left v-middle">
<p>
<a href="javascript:void(0);" onClick ="PopupWindowCenter('view-order-detail.php?user_id=<?=$recReg['reg_id']?>&ord_id=<?=$line_raw["ord_id"]?>', 'PopupWindowCenter',1000,500)">
<span class="bold" style="color:#06C"><?="#TCORD".$line_raw['ord_id']?></span> (<?=$recReg["reg_email"]?>)</a>

<?php if($line_raw["order_payment_status"]=="Paid"){?>
<span class="label-custom label label-default" style="text-transform:uppercase;background-color:#06F !important;border:solid thin #06F !important" >Paid</span>
<?php }else if($line_raw["order_payment_status"]=="Unpaid"){?>
<span class="label-danger label label-default" style="text-transform:uppercase;background-color:#F00;border:solid thin #F00" >Unpaid</span>
<?php }?>


    </p>                                       
</td>
                                     
<td class="text-center v-middle">

<p class="bg-yellow bold"><?=date("d M y",strtotime($line_raw["ord_date"]))?></p>
</td>



<td class="text-center v-middle">

<p><a href="javascript:void(0);" onClick ="PopupWindowCenter('view-order-detail.php?user_id=<?=$recReg['reg_id']?>&ord_id=<?=$line_raw["ord_id"]?>', 'PopupWindowCenter',1000,500)"><strong style="font-size:12px;"><button type="button" class="btn btn-view btn-sm" ><i class="fa fa-search"></i></button></strong></a>                                         
</p>
</td>


<td class="text-center v-middle">
<a href="../print-invoice.php?ordID=<?=$line_raw["ord_id"]?>" title="Generate invoice" target="_blank" ><strong style="font-size:12px;"><button type="button" class="btn  btn-sm btn-default" ><i class="fa fa-print fa-lg"></i></button></strong>
</a>
</td>




                                       
                                    </tr>
<?php
}
?>
                                    
                                    
                                    
                                    
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
<script>
function change_status(st){

if(validateChecks()==true){

$(document).ready(function(e) {
$("#frm_ord").submit();    
});

}else{
alert('Please select at least one order.');
document.getElementById("changeStatus").selectedIndex = 0; //Option 10
return false;	
}

}
</script>

<script>
function validateChecks() {
		var chks = document.getElementsByName('arr_ids[]');
		var checkCount = 0;
		for (var i = 0; i < chks.length; i++) {
			if (chks[i].checked) {
				checkCount++;
			}
		}
		if (checkCount < 1) {
			return false;
		}
		return true;
	}
</script>
<script>
function filterbyuser(uid){
window.location="order-history.php?uid="+uid;	
}
</script>
<script>
function filterbyreseller(uid){
window.location="order-history.php?rID="+uid;	
}
</script>
<script>
function filterbypay(pay_st){
window.location="order-history.php?paySt="+pay_st;	
}
</script>