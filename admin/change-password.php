<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<?php
if(is_post_back()) {
if($changepass!=$confirmpass) {
$_SESSION['msg'] = "Password and retype password do not match ?";
$_SESSION['msg_type']="error";
}else if($password==$changepass){
$_SESSION['msg'] = "New Password should be different from old password ?";
$_SESSION['msg_type']="error";  
}else{
$pass=db_scalar("select admin_password from tbl_admin where 1 and admin_id='".$_SESSION['sess_admin_login_id']."'");
  if($pass == $password) {
	   $sql2=db_query("update tbl_admin set admin_password='$changepass' where 1 and admin_id='".$_SESSION['sess_admin_login_id']."'");
		$_SESSION['msg'] = "Password Changed Successfully.";
		$_SESSION['msg_type']="success";
	} else{
   $_SESSION['msg'] = "Invalid old password ?";
   $_SESSION['msg_type']="error";
  }
 }
} 
?>

         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-gears"></i>
               </div>
               <div class="header-title">
                  <h1>Change Password</h1>
                  <small>Change Paassword Setting</small>
               </div>
          

        </section>
        <!-- Main content -->
        <section class="content">
        <div class="row">
        <!-- Form controls -->
        <div class="col-sm-12">
        
        <?php if($_SESSION["msg"]!="" && $_SESSION["msg_type"]=="error"){?>     
        
        <div class="alert alert-danger alert-dismissable fade in text-center" style="background-color:rgba(187,33,36,1);border:none; color:#FFF;margin:10px 0 10px 0">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!&nbsp;&nbsp;&nbsp;</strong> <?=$_SESSION["msg"]?>.
        </div>
<?php 
}else if($_SESSION["msg"]!="" && $_SESSION["msg_type"]=="success"){?>
    
        <div class="alert alert-success alert-dismissable fade in text-center" style="background-color:rgba(34,187,51,.8);border:none; color:#FFF;margin:10px 0 10px 0">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!&nbsp;&nbsp;&nbsp;</strong> <?=$_SESSION["msg"]?>.
        </div>

<?php }
unset($_SESSION["msg"]);
unset($_SESSION["msg_type"]);
?> 
                  
                     <div class="panel panel-bd lobidrag" data-edit-title='false' data-close='false' data-reload='false'>
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4 style="color:black">Password Settings</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-8 col-lg-offset-2" action="" method="post" name="form1" id="form1" onsubmit="return passValidation();">
                              
                              <div class="form-group col-lg-12">
                                 <label>Old Password</label>
<input type="password" class="form-control" placeholder="Enter your old password" value="" name="password" id="password">
                              </div>
                              
                              
                              <div class="form-group col-lg-12">
                                 <label>New Password</label>
<input type="password" class="form-control" placeholder="Enter your new password" name="changepass" id="changepass" value="">
                              </div>
                              
                              
                              <div class="form-group col-lg-12">
                                 <label>Re-enter Password</label>
<input type="password" class="form-control" placeholder="Re-enter your new password" name="confirmpass" id="confirmpass" value="">
                              </div>
                              
                              
                            
                              
                              
                              <div class="col-lg-12 reset-button text-center" >
                              <button type="submit" name="Update"  class="btn btn-add">Update</button>
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
<script type="text/javascript">
function passValidation(){
function trim(str){				
 return str.replace(/^\s*|\s*$/g,'');
}
if(trim(document.getElementById('password').value)==0){		
  alert("Please enter old password !");
  document.getElementById('password').focus();
  return false;
 }
if(trim(document.getElementById('changepass').value)==0){		
  alert("Please enter new password !");
  document.getElementById('changepass').focus();
  return false;
 }
 if(trim(document.getElementById('confirmpass').value)==0){		
  alert("Please confirm new password !");
  document.getElementById('confirmpass').focus();
  return false;
 }
}
</script>