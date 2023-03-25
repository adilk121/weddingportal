<?php
require_once("../includes/dbsmain.inc.php");

if(isset($_REQUEST['update'])){
	
$startDate=date("Y-m-d",strtotime($reg_membership_start_date));
$endDate=date("Y-m-d",strtotime($reg_membership_expiry_date));

/*$sql="SELECT md_duration FROM tbl_membership_detail WHERE md_id='$reg_membership_duration'";*/
$membershipDuration=$reg_membership_duration;

$sql="SELECT contact_view_credits FROM tbl_upgrade_packages_detail WHERE package_month='$reg_membership_duration'";
$membershipContactView=db_scalar($sql);

	
$sql="UPDATE tbl_registration SET 
reg_membership='$reg_membership',
reg_membership_duration='$membershipDuration',
reg_membership_view_credit='$membershipContactView',
reg_membership_start_date='$startDate',
reg_membership_expiry_date='$endDate'
WHERE reg_id='$user_id'
";	
$res=db_query($sql);

if($res){
$_SESSION['msg']="Membership is updated successfully.";	
}

}


$reg_sql=db_query("select * from tbl_registration where 1 and reg_id='".$_REQUEST['user_id']."'");
if(mysqli_num_rows($reg_sql)>0){
	   $recData=mysqli_fetch_array($reg_sql);
	    @extract($recData);
     }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Apnimatrimony : Admin Panel</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="../fevicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
<link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrapa.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- Emojionearea -->
      <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
      <!-- End page Label Plugins 
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>

      <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
      
      <style>
	span.count-num {
    float: right;
    margin: -16px 13px 0 0;
    font-size: 18px;
    background: red;
    padding: 1px 6px 1px 6px;
    color: #fff;
    border-radius: 15px;
}
	  </style>
      
<link href="<?=SITE_WS_PATH?>/css/collapsible1.css" rel="stylesheet" type="text/css">    
<style>
 div#update-popup-box {
    background: #b10a0a;
    color: #fff;
    top: 108px;
    box-shadow: 1px 1px 50px 24px #b10a0aa6;
}


.up-img {
    width: 100%;
    border: solid 1px #ccc;
    height: 170px;
	margin-bottom:5px;
}

button#btn-photo-upload {
    position: absolute;
    margin: 0 0 0 0;
    right: 19px;
    top: 3px;
}

button#btn-verify-otp {
    position: absolute;
    margin: 0 0 0 0;
    right: 19px;
    top: 3px;
}

button#btn-send-otp {
    font-size: 11px;
    font-weight: bold;
    margin: 0 0 0 0;
    padding: 0 0 0 0;
}

.mp_03 {
    margin: 0px;
    padding: 0px;
}

.pd-msof {
    margin-bottom: 20px;
}

.dsbo-fom-1{width:100%; height:40px; border-radius:5px; padding:5px; border:solid 1px #ccc;    background-color: #337ab733;}

.fld-mntr {
    color: #d3168c;
    float: right;
    margin: 5px 29px 5px 0;
    padding: 5px;
    font-size: 13px;
}


  .arrow-r {
    margin-top: 1%;
}
.collapse-container>:nth-child(even) {padding: 0px 0px; }
.bgmsf1 {
   margin: 0px 0px 0px 0px !important;
}
.sb-db-hdg h2 {
    background-color: #d6d6d9;
    padding: 7px 10px !important;
    font-size: 16px;
    color: #525252 !important;
}
.collapse-container>:nth-child(odd) {
    padding: 6px 10px !important;}
	
	.bgmsf1{background-color:#FFF !important; padding: 0px 0px 10px 0px; }
	.img-seq{height:90px !important;}
	.ftsze{font-size:12px;}
	.clrd-str{color:#F00 !important;}
	.Suid img{margin:0px !important; padding-left:0px !important;}
	.Suid{padding-left:0px !important;}
  </style>        
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td  id="pageHead" colspan="2"><div class="col-lg-12  bg-primary bold" style="padding:6px;font-size:16px;height:40px">
<span class="pull-left"><i class="fa fa-user-circle-o font-black fa-lg"></i>&nbsp;Update Membership</span>




<span class="pull-right mr10"><?=$recData['reg_name']?> <span class="font-black">(<?=$recData['reg_email']?>)</span></span>


</div></td>
  </tr>
</table>

<div class="col-lg-12 update-profile-holder ">

<?php if(!empty($_SESSION['msg'])){?>
<div class="col-sm-12 text-center text-success bold"><?=$_SESSION['msg']?></div>
<?php 
unset($_SESSION['msg']);
}
?>

<section style="background-color:#fff;padding:20px 0">
    <div class="container no-padd">
    
 
            
      <div class="row">
        <div class="col-md-12  all-sec">
<form action="" method="post" name="regd-short-form" id="regd-short-form" enctype="multipart/form-data" onSubmit="return FreeRegdValidation()" >         
      <div class="col-md-12 mp_db_00" style="margin-bottom:20px !important;">
      <div class="clearfix"></div>
      
      
<input type="hidden" name="regIDadmin" id="regIDadmin"  value="<?=$rID?>" />
<?php unset($_SESSION['regIDadmin']);?>
          
       
<div class="col-md-12 text-center mt10">
                
<div class="col-sm-6 text-left">
<label>Membership</label>
<select  class="form-control" name="reg_membership" id="reg_membership" onchange="fill_duration(this.value)" >
<option>Choose Membership</option>
<?php
$sql="SELECT * FROM tbl_upgrade_packages WHERE package_status='Active' ORDER BY package_id";
$dataMem=db_query($sql);
while($recMem=mysqli_fetch_array($dataMem)){
?>
<option value="<?=$recMem['package_id']?>" <?php  if($recData['reg_membership']==$recMem['package_id']){?> selected="selected" <?php }?> ><?=$recMem['package_title']?></option>
<?php
}
?>
</select>
</div>


<div class="col-sm-6 text-left">
<label>Duration</label>
<div class="col-sm-12 no-padd" id="load-area">
<?php
$sql="SELECT * FROM tbl_upgrade_packages_detail WHERE package_detail_status='Active' AND  package_month='$recData[reg_membership_duration]'  ORDER BY package_id";
$dataMemDetail=db_query($sql);
?>
<select name="reg_membership_duration" id="reg_membership_duration"  class="form-control" >
<option>Choose Duration</option>
<?php
while($recMemDetail=mysqli_fetch_array($dataMemDetail)){
?>
<option value="<?=$recMemDetail['package_month']?>" <?php  if($recData['reg_membership_duration']==$recMemDetail['package_month']){?> selected="selected"<?php }?> ><?=$recMemDetail['package_month']?> </option>
<?php
}
?>
</select></div>
</div>



<div class="col-sm-6 text-left mt20">
<label>Start Date</label>
<input type="date" name="reg_membership_start_date" id="reg_membership_start_date" 
value="<?php if($reg_membership_start_date!="" && $reg_membership_start_date!="0000-00-00"){
echo date("Y-m-d",strtotime($reg_membership_start_date));
}
?>" class="form-control" />
</div>


<div class="col-sm-6 text-left mt20">
<label>End Date</label>
<input type="date" name="reg_membership_expiry_date" id="reg_membership_expiry_date" value="<?php if($reg_membership_expiry_date!="" && $reg_membership_expiry_date!="0000-00-00"){
echo date("Y-m-d",strtotime($reg_membership_expiry_date));
}
?>" class="form-control" />
</div>

<input type="hidden" name="user_id" value="<?=$_REQUEST['user_id']?>" />

<div class="col-sm-12 text-center mt20">
<button class="btn btn-primary" name="update">Update</button>
</div>


<div class="clearfix"></div>
<div class="col-sm-12 text-right" style="margin-top:20px"><a href="javascript:self.close()" class="btn btn-danger"><strong style="font-size:16px;"><i class="fa fa-times-circle-o"></i> Close</strong></a>
</div>               
        </div>            
</form>
         
        </div>
        <!---end-images--->
      
     
    </div> 
    </div>
    </div>
</section>




</div>

</body>
</html>
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script>
function fill_duration(v){	

$(document).ready(function(e) {
    
$.ajax({
type:"POST",
url :"load-duration.php?mem="+v,
success: function(data){
	
$("#load-area").html(data);
	
}
	
})
	
});

}
</script>