<?php 
//all the necessary files go here
require_once('config/db.php');
include("classes/Login.php");
$login = new Login();
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
?>
<head><title><?php echo WEBSITE_NAME; ?> </title></head>

<link href="assets/default/css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="assets/default/css/bootstrap.min.css" type="text/css" rel="stylesheet">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><?php echo '<img src="assets/default/images/sample-watermark.png" width="200" height="200"></img>'; ?></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="aboutme.php"><img src="assets/default/images/aboutme.png"></img> <span class="sr-only">(current)</span></a></li>
        <li><a href="hireme.php"><img src="assets/default/images/hireme.png"></img></a></li>
		<li><a href="logos.php"><img src="assets/default/images/logos.svg"></img></a></li>
		<li><a href="banners.php"><img src="assets/default/images/banners.svg"></img></a></li>
		<li><a href="posters.php"><img src="assets/default/images/posters.svg"></img></a></li>
		
      </ul>
      
	  <?php
	  

	  if ($login->isUserLoggedIn() == true) {
		  
		 
		  echo '<ul class="nav navbar-nav navbar-right">
		  
		  <li><a href="profile.php"><img src="assets/default/images/profile.png"></img></a></li>
		  <li><a href="?logout"><img src="assets/default/images/logout.png"></img></a></li>
		  
		  </ul>';
	
		  if($_SESSION['user_name'] == "Hardik")
		  {
			 echo '<ul class="nav navbar-nav navbar-right">
		  <li><a href="admin.php">Admin</a></li>
		 
		  </ul>'; 
		  }
	  }
	  else
	  {
      echo '<ul class="nav navbar-nav navbar-right">
        <li><a href="login_form.php"><img src="assets/default/images/login.png"></img></a></li>
		<li><a href="registration_form.php"><img src="assets/default/images/register.png"></a></li>
      </ul>';
	  }
	  ?>
    </div>
  </div>
  </nav>












