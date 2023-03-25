<link rel="shortcut icon" href="<?=SITE_WS_PATH?>/<?=$compDATA['admin_favicon']?>" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php if($compDATA['admin_index_follow']=='Yes'){ ?>
<meta name="robots" content="index, follow" />
<? }else{ ?>
<meta name="robots" content="noindex, nofollow" />
<? } ?>
<?php if($compDATA['admin_meta_fb_id']!=''){ ?>
<meta property="fb:page_id" content="<?=$compDATA['admin_meta_fb_id']?>" />
<? } ?>
<?php if($compDATA['admin_meta_alexa_id']!=''){ ?>
<meta name="alexaVerifyID" content="<?=$compDATA['admin_meta_alexa_id']?>"/>
<? } ?>
<?php if($compDATA['admin_meta_msvalidate_id']!=''){ ?>
<meta name="msvalidate.01" content="<?=$compDATA['admin_meta_msvalidate_id']?>" />
<? } ?>
<?php if($compDATA['admin_site_verification_code']!=''){ ?>
<meta name="google-site-verification" content="<?=$compDATA['admin_site_verification_code']?>" />
<? } ?>
<?php if($compDATA['admin_google_analytic_code']!=''){
 echo $compDATA['admin_google_analytic_code'];
}?>
<header class="main-header" id="main-header">
<?php include("header-top.php"); 
?>
<div class="header-lower">
<div class="auto-container clearfix">

<div class="outer-box">
<!----------->
<style>
.dspn-res1{display:none;}
@media (min-width:320px) and (max-width:767px) 
{.dspn-res1{display:block; border-bottom:solid 1px #ccc;}
.main-header .header-lower .logo {
text-align:center !important;
}
.header-lower .auto-container {
    background-color: #ffff;
}
.dsp-res2 {
    width: 70% !important;
}
.main-header .header-lower .logo {
margin-bottom: 5px !important;
}
}
</style>
<div class="container dspn-res1">
<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 text-right">
            <a href="index.php"><span class="fa fa-circle"></span><!---Welcome---->
            <?php if(!empty($_SESSION['userLoginId'])){?>
            <span class="bold"><?=$_SESSION['userLoginName']?> !&nbsp;</span>
            <?php }?>
              <!---to----> <?/***=$compDATA['admin_company_name']****/?></a>
</div>
<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 text-right"><a href="<?=SITE_WS_PATH?>/logout.php"><span class="fa fa-power-off"> Logout</span> </a></div>
</div>
<!------------->
	
<div class="logo">
<a href="index.php"><img class="img-responsive" src="images/logo1.png" alt=""></a>
	
</div>
<?php include("menu-responsive.php"); ?>	
	
<nav class="main-menu pos-fxd ds-shl-vr">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="navbar-collapse collapse clearfix">
<ul class="navigation">
<li ><a href="dashboard.php">My Dashboard</a></li>
<li><a href="my-profile.php">My Profile</a></li>

<li><a href="inbox.php">Inbox</a>
<ul class="sb-nav">
<li><a href="inbox.php">Invitation</a></li>
<li><a href="shortlisted-profile.php">Who Shortlisted my Profile</a></li>
<li><a href="viewed-profile.php">Who viewed my profile</a></li>
<li><a href="viewed-contacts.php">Who viewed my number</a></li>                                       
  </ul>


</li>
<li><a href="my-matches.php">Matches</a>
<ul class="sb-nav">

<li><a href="match-profile-listing.php?match=suitable-match">Suitable Matches for You</a></li>
<li><a href="match-profile-listing.php?match=recommendation">Daily Recommendation</a></li>
<li><a href="match-profile-listing.php?match=new">New Matches</a></li>
<li><a href="match-profile-listing.php?match=recent">Recently Updated Profiles</a></li>
<li><a href="match-profile-listing.php?match=mutual">Mutual Matches</a></li>
<li><a href="match-profile-listing.php?match=premium_member">Premium Member</a></li>
<li><a href="match-profile-listing.php?match=short">Shortlisted Profile</a></li>
  </ul>

</li>
<li><a href="search.php">Search</a>
<!-----
 <ul class="sb-nav">

<li><a href="search.php"> Advanced Search</a></li>
<li><a href="search.php">Search By Profile ID</a></li>
<li><a href="search.php">Search by Name </a></li>
<li><a href="search.php">Search By Keyword</a></li>
</ul>
------>
</li>

 <li><a href="upgrade.php">UPGRADE</a></li>


 <li><a href="help.php">Help</a></li>
</ul>
</div>
</nav>
</div>
</div>
</div>
</header>