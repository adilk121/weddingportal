<?php
  include "config.php";

  session_start();
  if(!isset($_SESSION['username'])){
    header("Location:{$hostname}/admin");
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN Panel</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="../css/font-awesome.css">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <!-- HEADER -->
        <div id="header-admin">
            <!-- container -->
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <a href="post.php"><img class="logo" src="images/wedding-final-1213-1.png"></a>
                    </div>
                    <!-- /LOGO -->
                      <!-- LOGO-Out -->
                    <div class="col-md-offset-6  col-md-4">
                        
                            <p style="color:black; font-size:20px; font-weight:bold;">
                                Hello, welcome <span style=" text-transform:uppercase;"><?php echo $_SESSION['username'] ?></span> 
                            </p>
                            <p>
                            <span style="color:black;" id="time"></span>
                            </p>
                        
                            
                    </div>
                    <!-- /LOGO-Out -->
                </div>  
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar" class="scrollmenu">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                       <ul class="admin-menu">
                            <li>
                                <a href="post.php">Post</a>
                            </li>
                           <?php if($_SESSION['user_role']==1){ ?>
                            <li>
                                <a href="category.php">Category</a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="users.php">Users</a>-->
                            <!--</li>-->
                            <li>
                                <a href="settings.php">Settings</a>
                            </li>
                            <?php  }  ?>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 ">
                        <a style="color:#010b1a; font-weight:bold; padding-top:5px; font-size:18px" href="logout.php" class="admin-logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
<script>
  // Access the browser's Date object
  var date = new Date();
  // Get the current time and date
  var time = date.toLocaleTimeString();
  var day = date.toLocaleDateString();
  // Display the time and date on the page
  document.getElementById("time").innerHTML = " Current Time is: " + time + "<br>" + "Toady date: " + day;
</script>
        <!-- /Menu Bar -->
