<?php
session_start();

if($_SESSION['logged_in']==true)
{
  header('Location: index.php?action=logged_in');
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
    <div id="formLogin"></div>
<?php
  if($_GET['action']=='not_logged_in')
  {
    echo "<div id='inFoMsg'>You are not logged in! Please login.</div>";
  }
  if($_POST)
  {
  $username = 'Admin';
  $password = 'Admin123';

  if($_POST['password']==$password)
  {
    $_SESSION['logged_in'] = true;
    header('Location: index.php');
  }
  else
  {
    echo "<div id='failedMsg'>Access Denied :(</div>";
  }
}
?>
<form action="login.php" method="post">
  <div id=="formHead">Please enter PIN to access the website.</div>
  
  <div id="formBody">

<div class="formField">
  <input type="password" name="password" placeholder="PIN">
</div>
<br>
<input type="submit" value="Enter" class="btn-class"/>
  </div>
</div>

<div id="userNotes">
  <div>Pin: Admin123</div>
  <div><a href="index.php">Go to Main Page</div>
</div>

</form>
</div>

</body>
</html>