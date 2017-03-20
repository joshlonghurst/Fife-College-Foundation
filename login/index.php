<?php
session_start();

if(!isset($_SESSION['id'])) {
  header("Location: login.php");
}

include_once("db.php");
 ?>

 <?php

@mysql_connect('localhost','root','');
mysql_select_db('maindb');

$sql="SELECT * FROM applications ORDER BY id DESC";

$records=mysql_query($sql);
  ?>

  <!DOCTYPE html>
    <html lang="en">
    <!-- Start of head section -->
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="Fife College Foundation - Login Area">
    	<meta name="author" content="Fife College Foundation">
    	<meta content="width=device-width, initial-scale=1" name="viewport">
    	<title>Fife College Foundation | Applications</title>
    	<!-- Bootstrap Stylesheet -->
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    	<!-- Custom Stylesheet -->
    	<link href="dashboard.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    	<!-- Loads Source Sans font from Google Fonts -->
    	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700,900" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
    </head>
    <img class="animated fadeIn img-responsive center-block" src=" ../assets/img/logo.png" width="13%;" alt="Logo" style="margin-top: 20px;">
    <form action="logout.php">
        <input type="submit" value="Logout" class="logout-btn center-block" style="margin-top: 20px;" />
    </form>
  </div>
</div>
</div>

<h3 class="text-center" style="margin-top:30px;">Applications</h3><br>
<div class="container">
  <div class="row">
    <div class="col-md-12">

  <?php
while($applicant=@mysql_fetch_assoc($records)) {

  echo '<div class="animated fadeInUp" style="padding: 35px; margin-bottom: 50px;-webkit-box-shadow: 1px 1px 5px 0px rgba(50, 50, 50, 0.75); -moz-box-shadow:    1px 1px 5px 0px rgba(50, 50, 50, 0.75); box-shadow:         1px 1px 5px 0px rgba(50, 50, 50, 0.75);"';
  echo '<p><b>ID:</b> ' . $applicant['id'] . '</p>';
  echo '<p><b>Name:</b> ' . $applicant['name'] . '</p>';
  echo '<p><b>Email:</b> ' . $applicant['email'] . '</p>';
  echo '<p><b>Phone:</b> ' . $applicant['phone'] . '</p>';
  echo '<p><b>Message:</b> ' . $applicant['message'] . '</p>';
  echo '</div>';

} //end while

   ?>
 </div>
  </div>
</div>
<div class="container">
  <div class="row">
  <div class="col-md-12 text-center">

   <a href="#top"><i class="fa fa-arrow-up  fa-3x " aria-hidden="true"></i></a>
   </div>
 </div>
</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../js/aos.js"></script>
</script>
<script>
</script>
</body>
