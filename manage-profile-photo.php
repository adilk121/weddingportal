<?php require_once("includes/dbsmain.inc.php");?>
<?php include("site-main-query.php") ?>
<?php require_once ('includes/photoshop.php');?>
<?php

function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
}
if(is_post_back()) {
	
if (isset($_POST['submit'])) {
for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
$imgName=$_FILES['file']['name'][$i];
$gTitle=$_POST['title'][$i];

//**** Change Duplicate Image name Start Here****//
$uploadedfile = $_FILES['file']['tmp_name'][$i]; 
$filename = stripslashes($_FILES['file']['name'][$i]); 	
$extension = getExtension($filename);
$extension = strtolower($extension);		
$imgNAME = substr(md5($imgName.time().rand(1,10)),0,14).".".$extension;	
move_uploaded_file($_FILES['file']['tmp_name'][$i],"upload_images/$imgNAME");	

$sql="update tbl_registration set reg_profile_photo='$imgNAME' where reg_id='$memId' ";
/*

$sql = "insert into tbl_member_image set 
mem_image_cat_id='$memId',
mem_image_status='Active',
mem_image_name='$imgNAME',
mem_image_add_date='".date("Y-m-d")."'";*/
db_query($sql);	
						  

}

?>

<?php						   
$_SESSION["msg_photo"]="<span class='text-success bold'>Photo is uploaded successfully !</span>";
header("Location: my-profile.php");
exit;
}
}
?>
<!doctype html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>ApniMatrimony</title>
<meta name="robots" content="index, follow" />
<!-- Stylesheets -->
<link href="<?=SITE_WS_PATH?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style.css" rel="stylesheet">
<link href="<?=SITE_WS_PATH?>/css/style1.css" rel="stylesheet">


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
<!--------pie-chart-----skill------>
<link rel="stylesheet" href="<?=SITE_WS_PATH?>/css/progress-circle.css">
<!----->

<style>

td:nth-of-type(1):before {
    content: "" !important;
}

.v-middle {
vertical-align:middle !important;

}

div#formdiv {
    background: #8e32a23b;
    padding: 15px;
}

div#formdiv input {
    background: #3f3c3c;
    border: solid thin #3f3c3c;
    color: #fff;
    padding: 5px 8px 5px 8px;
    border-radius: 5px;
    font-weight: 600;
}

div#formdiv input[type="button"] {
    background: #FF5722;
    border: solid thin #FF5722;
    color: #fff;
    padding: 5px 8px 5px 8px;
    border-radius: 5px;
    font-weight: 600;
}

div#formdiv input[type="submit"] {
    background: #FF5722;
    border: solid thin #FF5722;
    color: #fff;
    padding: 5px 8px 5px 8px;
    border-radius: 5px;
    font-weight: 600;
}




</style>
</head>
<body>
<h1 style="background: #b10a0a;color: #fff;padding: 4px 0;margin: 0 0 12px 0;">Add Profile Photo</h1>

<?php if(!empty($_SESSION["msg_photo"])){?>
<div class="col-sm-12 text-center"><?=$_SESSION["msg_photo"]?></div>
<div class="clearfix"></div>
<?php 
unset($_SESSION["msg_photo"]);
}?>

<?/*
<div class="table-responsive pt-20">
<?php
$sql="select * from  tbl_member_image where 1 and mem_image_cat_id='".$_REQUEST['memId']."'";		
$sql_fetch = db_query($sql);
$cntDATA=mysqli_num_rows($sql_fetch);
if($cntDATA > 0){	
while($DATA = mysqli_fetch_array($sql_fetch)) {
@extract($DATA);		 
?>
<div class="col-sm-3 text-center" style="margin-bottom:10px">
<img src="member_images/<?=$DATA['mem_image_name']?>" class="img-thumbnail" style="width:140px;height:140px" />

<div class="col-lg-12 text-center" style="margin-top:10px" ><a href="manage-photo.php?DelID=<?=$DATA['mem_image_id']?>&memId=<?=$_REQUEST['memId']?>"><i class="fa fa-trash fa-2x" style="color:#F00"></i></a></div>
</div>		  
<? }} ?>

</div>
*/
?>

<div class="col-sm-12 text-center" style="text-align:-webkit-center">
<table width="55%"  border="0" align="center" cellpadding="0" cellspacing="0" class="tableForm" style="border:1px solid  #8e32a23b; margin-top:20px; margin-bottom:10px;">
<tr>
<td class="tdLabel" style="padding:8px;">
<div id="maindiv">
<div id="formdiv">
<form enctype="multipart/form-data" action="" method="post">
<div id="filediv">
<input name="file[]" type="file" id="file"/>
</div>
<br/>
<!--<input type="button" id="add_more" class="upload" value="Add More Files"/>-->
<input type="submit" value="Upload File" name="submit" id="upload" class="upload"/>
</form>
<br/>
</div>
</div></td>
</tr>
</table>
</div>
<script>
window.onunload = refreshParent;
function refreshParent() {
window.opener.location.reload();
window.close();
}
</script>
</body>
</html>

<script src="<?=SITE_WS_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_WS_PATH?>/js/script.js"></script>
<script src="<?=SITE_WS_PATH?>/js/menuzord.js"></script>
<script src="<?=SITE_WS_PATH?>/js/jPushMenu.js"></script>
<script src="<?=SITE_WS_PATH?>/js/owl.js"></script>
<!-- validate -->
<script src="<?=SITE_WS_PATH?>/js/customcollection.js"></script>
<script src="<?=SITE_WS_PATH?>/js/custom1.js"></script>
<!-------------->
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="<?=SITE_WS_PATH?>/js/jquery.collapsible.js"></script> 
<!------pie---------->
<script src="<?=SITE_WS_PATH?>/js/scriptari.js"></script>