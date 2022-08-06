<?php
    session_start();

    if(empty($_SESSION['logged_in']))
    {
        header('Location: login.php?action=not_logged_in');
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Login with GET Method PHP.">
    <meta name="author" content="Axel">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page w/o Database - Fumioo</title>
  </head>
<body>
    <?php
    $action = $_GET['action'];

    if($action=='logout')
    {
        session_destroy();
        header('Location: login.php');
    }

    else if($action=='logged_in')
    {
        echo "<div id='infoMsg'>You are already Logged In.</div>";
    }
    ?>
<div id='successMsg'>Successfully Logged In.</div>
<div id='actions'>
    <a href='index.php?action=logout'>Logout</a> / <a href='login.php'>Go to login page.</a>
</div>

</body>
</html>