<link rel="stylesheet" type="text/css" href="assets/mega-menu-responsive-d/style.css">


<div class="container">
<a class="toggleMenu" href="#">Search Profile By</a>
<ul class="nav">
<?php
$sql="SELECT * FROM tbl_marital WHERE m_status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>    
<li class="test">
<a href="#">Matrial Status</a>
<ul>
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
<li><a href="#">Mother Tongue</a>
<ul>
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
<li><a href="#">State</a>
<ul>
<li><a href="profile-listing.php?filter=All"> All</a></li>

<?php while($recMarital=mysqli_fetch_array($dataMarital)){ ?>
<li><a href="profile-listing.php?filter=<?=$recMarital['m_title']?>&filter_type=state"><?=$recMarital['m_title']?></a></li>
<?php }?>

</ul>
</li>
<?php 
}?>


<?php
$sql="SELECT * FROM tbl_search_city WHERE m_status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<li><a href="#">City</a>
		<ul>
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
<li><a href="#">Profession</a>
<ul  class="">
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
<li><a href="#">Country</a>
		<ul>
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
<li><a href="#">Profile Created By</a>
		<ul>
<?php while($recMarital=mysqli_fetch_array($dataMarital)){ ?>
<li><a href="profile-listing.php?filter=<?=$recMarital['m_title']?>&filter_type=profile-by"><?=$recMarital['m_title']?></a></li>
<?php }?>

</ul>
</li>
<?php 
}
?>
	
</ul>
</div>	

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="assets/mega-menu-responsive-d/script.js"></script>