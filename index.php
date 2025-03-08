<?php

  session_start(); /* Starts the session */

  if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
    header("location:login.php");
	  exit;
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show media in folder</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="inc/style.css">
    <link rel="shortcut icon" type="image/png" href="inc/favicon.png"/>
    <!-- style for media insertion -->
    <link rel="stylesheet" type="text/css" href="inc/ins-media.css">
</head>
<body>
    <header><div><h1>Show all media in my folder</h1></div></header>
    <div class="jumbotron">
        <h1>Status: logged in</h1>
        <p class="lead">And just like that you've created your first password protected area with PHP and a little knowledge of HTML. Change the username and password in login.php for your own and give it a try!</p>
        <p><a class="btn btn-lg btn-success" href="logout.php" role="button">Log out</a></p>
      </div>
    <!-- media insertion -->
    <?php include ('inc/ins-media.php'); ?>

    <footer><div>PHP MS </footer>
</body>
</html>
