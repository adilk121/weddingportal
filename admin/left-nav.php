<!--<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
<aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  
                 
                  
                  
<li class="">
<a href="<?=SITE_WS_PATH?>" target="_blank"><i class="fa fa-globe"></i><span>Visit Website</span>
<span class="pull-right-container">
</span>
</a>
</li>                  


                 

<li class="">
<a href="manage-registration.php">
<i class="fa fa-user-circle-o" aria-hidden="true"></i>
<span>Manage Member</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>                     
</li>  

<?php
 if($_SESSION['sess_admin_type']=="Admin"){?>
    <li class="">
<a href="manage_seo.php">
<i class="fa fa-envelope" aria-hidden="true"></i>
<span>Manage SEO</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>                     
</li> 
<?php }?>

<li class="">
<a href="enquiry-list.php">
<i class="fa fa-envelope" aria-hidden="true"></i>
<span>Mng. Inquiry/Feedback</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>                     
</li>


<li class="">
<a href="static_page_list.php">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<span>Manage Page Contents</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>                     
</li>

<!--<li >
<a href="manage-order.php">
<i class="fa fa-cart-plus"></i><span>Manage Order</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>

</li>-->
                  
                                   
<?php /*?><li class="">
                     <a href="category_list.php">
                     <i class="fa fa-list" aria-hidden="true"></i>
<span>Manage Category</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>                     
                  </li>  
                  
  
<li >
                     <a href="manage-order.php">
                     <i class="fa fa-cart-plus"></i><span>Manage Order</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                    
                  </li>
                  
     
                  <li class="">
                     <a href="static_page_list.php">
                     <i class="fa fa-file-text-o" aria-hidden="true"></i>
<span>Manage Page Contents</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>                     
                  </li>
                  
                  

                  <li class="">
                     <a href="enquiry-list.php">
                     <i class="fa fa-envelope" aria-hidden="true"></i>
<span>Manage Enquiry</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>                     
                  </li>
     
                  <li class="">
                     <a href="manage-header-flash.php">
                     <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Manage Header Flash</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>                     
                  </li>  
                  
                  
 <li class="">
                     <a href="manage-slider.php">
                     <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Manage Home Banner</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>                     
                  </li>    
                  
                  
 <!--<li class="">
                     <a href="manage-slider.php?position=Left">
                     <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Manage Left Slider</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>                     
                  </li>    -->                 
                                  
                  
                  <li class="">
                     <a href="client-list.php">
                     <i class="fa fa-users" aria-hidden="true"></i> <span>Manage Partner</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>                     
                  </li>    
                  <?php */?>
                  

<li class="">
<a href="religion_list.php">
<i class="fa fa-users" aria-hidden="true"></i>
<span>Mng Religion/Community</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>                     
</li>

<li class="">
<a href="country-list.php">
<i class="fa fa-globe" aria-hidden="true"></i>
<span>Manage Country/State</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>                     
</li>

  <li class="">
     <a href="testimonial-list.php">
     <i class="fa fa-comments" aria-hidden="true"></i> <span>Manage Testimonials</span>
     <span class="pull-right-container">
     <i class="fa fa-angle-left pull-right"></i>
     </span>
     </a>                     
  </li>   


  <li class="">
     <a href="contact_update.php">
     <i class="fa fa-gears" aria-hidden="true"></i> <span>General Setting</span>
     <span class="pull-right-container">
     <i class="fa fa-angle-left pull-right"></i>
     </span>
     </a>                     
  </li>  
                  
                  
   <li class="">
     <a href="manage_social_links.php">
     <i class="fa fa-share-alt" aria-hidden="true"></i> <span>Manage Social Links</span>
     <span class="pull-right-container">
     <i class="fa fa-angle-left pull-right"></i>
     </span>
     </a>                     
  </li> 
  
   <li class="">
     <a href="manage_upgrade_package.php">
     <i class="fa fa-share-alt" aria-hidden="true"></i> <span>Manage Membership</span>
     <span class="pull-right-container">
     <i class="fa fa-angle-left pull-right"></i>
     </span>
     </a>                     
  </li> 
                  
          
          
           <?php /*?><li class="">
                     <a href="subscriber-list.php">
                     <i class="fa fa-envelope" aria-hidden="true"></i>
<span>Manage Subscriber</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>                     
                  </li><?php */?>




<!--<li class="">
<a href="membership-list.php">
<i class="fa fa-money" aria-hidden="true"></i>
<span>Manage Membership</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>                     
</li>-->  

                            

<li class="treeview">
<a href="#">
<i class="fa fa-list"></i><span>Mng Search Filter</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">
<li><a href="manage-marital-status.php">Marital Status</a></li>
<li><a href="manage-mother-toung.php">Mother Toung</a></li>
<li><a href="manage-state.php">State</a></li>
<li><a href="manage-search-city.php">City</a></li>
<li><a href="manage-profession.php">Profession</a></li>
<li><a href="manage-profile-created_by.php">Profile Created By</a></li>
</ul>
</li>


<li class="">
<a href="change-password.php">
<i class="fa fa-key" aria-hidden="true"></i> <span>Change Password</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>                     
</li>                  
                                    
                  
                  
<li class="" style="margin-bottom:42px !important;">
<a href="logout.php">
<i class="fa fa-sign-out" aria-hidden="true"></i>
<span>Logout</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>                     
</li>  
 

</ul>
</div>
<!-- /.sidebar -->
</aside>