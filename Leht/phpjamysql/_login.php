<!--Franco Kikkas IS21-->
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    html { color-scheme: dark; }
    body { width: 35em; margin: 0 auto;
      font-family: Tahoma, Verdana, Arial, sans-serif; }
  </style>
</head>
<body>
<?php
 session_start();
 if (isset($_SESSION['tuvastamine'])) {
   header('Location: _admin.php');
   exit();
   }
 if (!empty($_POST['login']) && !empty($_POST['pass'])) {
 $login = $_POST['login'];
 $pass = $_POST['pass'];
 if ($login=='admin' && $pass=='admin') {
 $_SESSION['tuvastamine'] = 'misiganes';
 header('Location: _admin.php');
 }
 }
?>
<h1>Login</h1>
<form action="" method="post">
 Login: <input type="text" name="login"><br>
 Password: <input type="password" name="pass"><br>
 <input type="submit" value="Logi sisse">
</form>