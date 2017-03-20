<?php
    session_start();

    if(isset($_POST['login'])) {
        include_once("db.php");
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $username = stripslashes($username);
        $password = stripslashes($password);

        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);

        $password = md5($password);

        $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);
        $id = $row['id'];
        $db_password = $row['password'];


        if($password == $db_password) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header("Location: index.php");
        } else {
            echo "You didn't enter the correct details!";
        }

      }
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
  	<title>Fife College Foundation | Log in</title>
  	<!-- Bootstrap Stylesheet -->
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  	<!-- Custom Stylesheet -->
  	<link href="login.css" rel="stylesheet">
  	<!-- Loads Source Sans font from Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700,900" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
  </head>
<body>
  <img class="animated fadeInDown img-responsive center-block" src=" ../assets/img/logo.png" width="13%;" alt="Logo" style="margin-top: 150px;">
  <div class="login">
  <div class="login-triangle"></div>

  <h2 class="login-header">Log in</h2>
    <form class="login-container" action="login.php" method="post" enctype="multipart/form-data">
        <p><input type="text" placeholder="Username" name="username"></p>
          <p><input placeholder="Password" name="password" type="password"></p>
          <p><input name="login" type="submit" value="Log in">
    </form>
  </form>
</div>
</body>
</html>
