<nav class="main-menu no-resd-nv">
<div class="navbar-collapse collapse clearfix">
<ul class="navigation">
<li class="dropdown"><a href="#" class="serh-pro">Search Profile By</a>
<ul>
<?php
  //header
$sql="SELECT * FROM tbl_marital WHERE m_status='Active'";
$dataMarital=db_query($sql);//header
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<li class="dropdown"><a href="Javascript:void(0)">Matrial Status</a>
<ul  class="nv-sty1">
<li><a href="profile-listing.php?filter=All"> All</a></li>

<?php while($recMarital=mysqli_fetch_array($dataMarital)){ ?>
<li><a href="profile-listing.php?filter=<?=$recMarital['m_title']?>&filter_type=marital"><?=$recMarital['m_title']?></a></li>
<?php }?>

</ul>
</li>
<?php 
}
?>


<?php
$sql="SELECT * FROM tbl_toung WHERE m_status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<li class="dropdown"><a href="Javascript:void(0)">Mother Tongue</a>
<ul  class="nv-sty1">
<li><a href="profile-listing.php?filter=All"> All</a></li>

<?php while($recMarital=mysqli_fetch_array($dataMarital)){ ?>
<li><a href="profile-listing.php?filter=<?=$recMarital['m_title']?>&filter_type=toung"><?=$recMarital['m_title']?></a></li>
<?php }?>

</ul>
</li>
<?php 
}
?>


<?php
$sql="SELECT * FROM tbl_search_state WHERE m_status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<li class="dropdown"><a href="Javascript:void(0)">State</a>
<ul  class="nv-sty1">
<li><a href="profile-listing.php?filter=All"> All</a></li>

<?php while($recMarital=mysqli_fetch_array($dataMarital)){ ?>
<li><a href="profile-listing.php?filter=<?=$recMarital['m_title']?>&filter_type=state"><?=$recMarital['m_title']?></a></li>
<?php }?>

</ul>
</li>
<?php 
}
?>



<?php
$sql="SELECT * FROM tbl_search_city WHERE m_status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<li class="dropdown"><a href="Javascript:void(0)">City</a>
<ul  class="nv-sty1">
<li><a href="profile-listing.php?filter=All"> All</a></li>

<?php while($recMarital=mysqli_fetch_array($dataMarital)){ ?>
<li><a href="profile-listing.php?filter=<?=$recMarital['m_title']?>&filter_type=city"><?=$recMarital['m_title']?></a></li>
<?php }?>

</ul>
</li>
<?php 
}
?>



<?php
$sql="SELECT * FROM  tbl_search_profession WHERE m_status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<li class="dropdown"><a href="Javascript:void(0)">Profession</a>
<ul  class="nv-sty1">
<li><a href="profile-listing.php?filter=All"> All</a></li>

<?php while($recMarital=mysqli_fetch_array($dataMarital)){ ?>
<li><a href="profile-listing.php?filter=<?=$recMarital['m_title']?>&filter_type=profession"><?=$recMarital['m_title']?></a></li>
<?php }?>

</ul>
</li>
<?php 
}
?>



<?php
$sql="SELECT * FROM  tbl_country_master WHERE status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<li class="dropdown"><a href="Javascript:void(0)">Country</a>
<ul  class="nv-sty1">
<li><a href="profile-listing.php?filter=All"> All</a></li>

<?php while($recMarital=mysqli_fetch_array($dataMarital)){ ?>
<li><a href="profile-listing.php?filter=<?=$recMarital['contName']?>&filter_type=country"><?=$recMarital['contName']?></a></li>
<?php }?>

</ul>
</li>
<?php 
}
?>




<?php
$sql="SELECT * FROM  tbl_search_profile_managed_by WHERE m_status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<li class="dropdown"><a href="Javascript:void(0)">Profile Created By</a>
<ul  class="nv-sty1">
<li><a href="profile-listing.php?filter=All"> All</a></li>

<?php while($recMarital=mysqli_fetch_array($dataMarital)){ ?>
<li><a href="profile-listing.php?filter=<?=$recMarital['m_title']?>&filter_type=profile-by"><?=$recMarital['m_title']?></a></li>
<?php }?>

</ul>
</li>
<?php 
}
?>




</ul>
</li>
</ul>
</div>
</nav>
