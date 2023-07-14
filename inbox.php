<?php require_once("includes/dbsmain.inc.php");?>
<?php include("site-main-query.php");
if(empty($_SESSION['userLoginId'])){//header
  header("location:index.html");  
}
$check_user=db_scalar("select reg_id from tbl_registration where reg_id='$_SESSION[userLoginId]' ");
$check_user_status=db_scalar("select reg_status from tbl_registration where reg_id='$_SESSION[userLoginId]' ");
if(empty($check_user) || $check_user_status=="Inactive"){
    unset($_SESSION['userLoginId'],$_SESSION['userLoginName']);
    session_destroy();
    header("location:index.php");
    exit;
}
?>
<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>The Best Wedding Hub</title>
<meta name="robots" content="index, follow" />

<!-- Stylesheets -->
<link href="<?=SITE_WS_PATH?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style1.css" rel="stylesheet">
<!--------->
<link href="<?=SITE_WS_PATH?>/css/responsive.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style-res-nav.css" rel="stylesheet">
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/style-client.css">
<link href="<?=SITE_WS_PATH?>/css/style-res-nav.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/jPushMenu.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/jquery.fancybox.css" rel="stylesheet">
<!---------------->
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/style-customizer-rgt.css"/>
<!---social----->
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/style-social-1.css">
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/font-awesome/css/font-awesome.min.css">
<link href="<?=SITE_WS_PATH?>/css/collapsible1.css" rel="stylesheet" type="text/css">
<!---button--->
  <style>
.btn-gryes a{display:block; background-color:#f1f1f2; color:#000; font-size:14px; padding:0px 2px; border:solid 1px #eaeaeb; text-align:center;  /*width:99%; */transition:all 1.5s;}
.btn-gryes a:hover{background-color:#fff; border:solid 1px #000; color:#000; transition:all 1.5s;}
.btn-gryes{margin:5px 5px 5px 0px; padding:0px; /*width:49%;*/}  
 </style>
 <!------------>

</head>
<body id="amitabh">
<div class="page-wrapper">
  <div class="preloader"></div>
  <?php 
if($_SESSION['userLoginId']==""){
include("site-header.php");
}else{
include("site-header-login.php"); 
}
?> 

  <section style="background-color:#f1f1f2;">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 all-sec">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mp-iboxd20"> <!---<h4 class="hdg-box"><img src="images/inbox.png" class="box-img"> Inbox</h4>---->
            <div>
  <?php include("inbox-links.php");?>
 
          </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 addv" style="margin-top:20px;">
        <img src="images/marr-banner1.png">
        </div>
      <!----------->
    </div>
      <!---end-images--->
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12  mp_db_00">
<section class="sec-bg">
<input type="radio" id="profile" value="s" name="tractor" checked='checked' />    
<input type="radio" id="settings" value="2" name="tractor" /> 
  
  <nav class="navd_1">   
  <label class="msg-box" for="profile">Accepted by me</label>
  <label class="msg-box" for="settings">Accepted by desired partner</label>
  </nav>
  
  <article class='uno'>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="accepted-by-me-load-area">

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_from_mem_id  WHERE r.reg_status='Active' AND mb.msg_to_mem_id='$userDATA[reg_id]' AND mb.msg_status='Accepted'";

$dataMemberAccepted=db_query($sql);
$countMemberAccepted=mysqli_num_rows($dataMemberAccepted);
if($countMemberAccepted){
while($recMemberAccepted=mysqli_fetch_array($dataMemberAccepted)){  
?>  
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d" > 

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
<div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>"><?=$recMemberAccepted['reg_name']?> <span class="spn-sty1">(<?="R".$recMemberAccepted['reg_id']?>)</span></a></h2>
</div>
<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<?php
$waiting_time= $recMemberAccepted['msg_req_sent_date']." ".$recMemberAccepted['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMemberAccepted['msg_id']?>','Accepted-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>

</div>
</div>
	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12  mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">
          <?php 
        $check_photo=$recMemberAccepted['reg_profile_photo'];
        if(empty($check_photo) && $recMemberAccepted['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMemberAccepted['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMemberAccepted['reg_profile_photo']?>" class="img-inbox">
       <?php }?>
	</div></div>

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mp-btm1 mp_0bx">
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMemberAccepted['reg_last_login']))?></a></p>
Age : <?=$recMemberAccepted['reg_age']?> Yrs | Height : <?=$recMemberAccepted['reg_height']?> | Sect : <?=$recMemberAccepted['reg_cast']?> | Division : <?=$recMemberAccepted['reg_religion']?> - <?=$recMemberAccepted['reg_sub_cast']?> | Location : <?=$recMemberAccepted['reg_city']?>, <?=$recMemberAccepted['reg_state_name']?>, <?=$recMemberAccepted['reg_country_name']?> | Education : <?=$recMemberAccepted['reg_highest_edu']?> | Occupation : <?=$recMemberAccepted['reg_occupation']?><div class="clearfix"></div>

<a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>" class="btn-ace-pro">View Full Profile</a>
	
<a onClick="change_status('<?=$recMemberAccepted['msg_id']?>','Accepted-Declined')" class="btn-decl-box">Decline</a>
 <div class="clearfix"></div>

</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
<div class="clearfix"></div>

<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 btn-gryes mp-top2"><a href="#">Send Mail</a></div>
<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 btn-gryes"><a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>">View Contact</a></div>
 
</div>
</div>
<?php
}
}else{
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>

</div>  
  
  
  
  
  
  
<!--<div class="col-md-12 next-prv1 text-right ">
<p>1 2 3 4 5 6 7 of 100 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
 </div>-->
   
  </article>
  
<article class='dos'>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padd" id="accepted-by-other-load-area">

<?php
$sql="SELECT * FROM tbl_registration AS r INNER JOIN tbl_msg_box AS mb ON r.reg_id=mb.msg_to_mem_id  WHERE r.reg_status='Active' AND mb.msg_from_mem_id='$userDATA[reg_id]' AND mb.msg_status='Accepted'";

$dataMemberAccepted=db_query($sql);
$countMemberAccepted=mysqli_num_rows($dataMemberAccepted);
if($countMemberAccepted){
while($recMemberAccepted=mysqli_fetch_array($dataMemberAccepted)){  
?>  
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mp_1d"> 

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
<div class="col-lg-8 col-md-8 col-sm-7 col-xs-7" style="margin:0px; padding:0px;">
<h2 class="nm-acep"><a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>"><?=$recMemberAccepted['reg_name']?> <span class="spn-sty1">(<?="R".$recMemberAccepted['reg_id']?>)</span></a></h2>
</div>
<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 text-rig-inbo">
<?php
$waiting_time= $recMemberAccepted['msg_req_sent_date']." ".$recMemberAccepted['msg_req_sent_time'];?>       
<span class="spn-sty"><?=time_elapsed_string($waiting_time)?></span>
<a href="Javascript:void(0)" onClick="change_status('<?=$recMemberAccepted['msg_id']?>','Accepted-Other-Delete')" title="Delete" class="cancl-btn-sty">
<i class="fa fa-times"></i>
</a>

</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12  mp_bx_rt text-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mp-inbox">

          <?php 
        $check_photo=$recMemberAccepted['reg_profile_photo'];
        if(empty($check_photo) && $recMemberAccepted['reg_gender']=="Female"){?>
        <img src="<?=SITE_WS_PATH?>/images/1.ico" class="img-inbox">
       <?php }else if(empty($check_photo) && $recMemberAccepted['reg_gender']=="Male"){?>
        <img src="<?=SITE_WS_PATH?>/images/2.png" class="img-inbox">
       <?php }else if(!empty($check_photo)){?>
 <img src="<?=SITE_WS_PATH?>/upload_images/<?=$recMemberAccepted['reg_profile_photo']?>" class="img-inbox">
       <?php }?>

</div></div>

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mp-btm1 mp_0bx">
<p class="mp_0bx">
<a href="#" class="molcht onl-sty">
<i class="fa fa-commenting-o" aria-hidden="true"></i> Last Online <?=date("d-M-y",strtotime($recMemberAccepted['reg_last_login']))?></a></p>
Age : <?=$recMemberAccepted['reg_age']?> Yrs | Height : <?=$recMemberAccepted['reg_height']?> | Sect : <?=$recMemberAccepted['reg_cast']?> | Division : <?=$recMemberAccepted['reg_religion']?> - <?=$recMemberAccepted['reg_sub_cast']?> | Location : <?=$recMemberAccepted['reg_city']?>, <?=$recMemberAccepted['reg_state_name']?>, <?=$recMemberAccepted['reg_country_name']?> | Education : <?=$recMemberAccepted['reg_highest_edu']?> | Occupation : <?=$recMemberAccepted['reg_occupation']?><div class="clearfix"></div>

<a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>" class="btn-ace-pro">View Full Profile</a>
<a onClick="change_status('<?=$recMemberAccepted['msg_id']?>','Accepted-Other-Cancelled')" class="btn-decl-box">Cancel</a>
 

</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
<div class="clearfix"></div>

<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 btn-gryes mp-top2"><a href="#">Send Mail</a></div>
<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 btn-gryes"><a target="_blank" href="other-profile.php?mem=<?=$recMemberAccepted['reg_id']?>">View Contact</a></div>
 
</div>
</div>
<?php
}
}else{
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mp_1d text-center text-danger"> No record(s) found.</div>
<?php
}
?>

</div>



<!--<div class="col-md-12 next-prv1 text-right ">
<p>1 2 3 4 5 6 7 of 100 <a href="#"><i class="fa fa-caret-square-o-left"></i> </a> <a href="#"><i class="fa fa-caret-square-o-right"></i> </a>
</div>-->
</article>
</section>
    </div> 
    </div>
    </div>
    </div>
</section> 
  <!--Main Footer-->
	<?php include("site-footer.php"); ?>
	
</div>
<!-- Side Menu-->

<!-------register----->
<script src="<?=SITE_WS_PATH?>/js/jquery-latest.js"></script>
<script>
function change_status(msgID,act){

$(document).ready(function(e) {
//alert(memID)
$.ajax({
  
url: "member-change-status.php?msgID="+msgID+"&act="+act,
type: "POST",
contentType: false,
processData:false,
success: function(data){

if(data!=0){

if(act=="Accepted-Delete"){
$("#accepted-by-me-load-area").html(data);	
document.getElementById('action-msg').innerHTML='Selected request is deleted.';		
}

if(act=="Accepted-Declined"){
$("#accepted-by-me-load-area").html(data);	
document.getElementById('action-msg').innerHTML='Selected request is declined.';		
}

if(act=="Accepted-Other-Delete"){
$("#accepted-by-other-load-area").html(data); 
document.getElementById('action-msg').innerHTML='Selected request is deleted.';   
}

if(act=="Accepted-Other-Cancelled"){
$("#accepted-by-other-load-area").html(data);		
document.getElementById('action-msg').innerHTML='Selected request is cancelled';		
}

if(act=="Declined"){
$("#accepted-by-other-load-area").html(data);   
document.getElementById('action-msg').innerHTML='Selected request is declined';   
}

document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);
  

}else{
alert('Unable to sent request now, try again later.');  
}

},
error: function(){}                
  
});
    
});

}
</script>
<script src="<?=SITE_WS_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_WS_PATH?>/js/script.js"></script>
<script src="<?=SITE_WS_PATH?>/js/menuzord.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jPushMenu.js"></script>
<script src="<?=SITE_WS_PATH?>/js/owl.js"></script>
<!-- validate -->
<script src="<?=SITE_WS_PATH?>/js/customcollection.js"></script>
<script src="<?=SITE_WS_PATH?>/js/custom1.js"></script>
<!-------------->
<!--<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> -->
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible.js"></script> 
<!-----left-accordian--------->
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible-normal.js"></script> 
<script>
$('#collapse-menu').collapsible({
  contentOpen:["0","1"]
});
</script>

<!----slider------------->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
 <script language="javascript" src="<?=SITE_WS_PATH?>/js/index-tab.js"></script>
 </body>
</html>
<a data-toggle="modal" data-target="#update-popup" id="for-update-popup"></a>
<div class="modal fade" id="update-popup" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="update-popup-box">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle" aria-hidden="true" id="close-popup"></i>

</button>
      <div class="modal-header" style="border-bottom:none">
        <h4 class="modal-title text-center"> <span id="action-msg"></span>.</h4>
      </div>
      
      
      
   
    </div>
  </div>
</div>
