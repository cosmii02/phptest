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
<h1>Salajane</h1>
<p>salajane</p>
<form action="_logout.php" method="post">
 <input type="submit" value="Logi välja" name="logout">
</form>

<?php
session_start();
if (!isset($_SESSION['tuvastamine'])) {
  header('Location: _login.php');
  exit();
  }
?>