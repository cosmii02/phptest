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
if (!isset($_SESSION['tuvastamine'])) {
 header('Location: _login.php');
 exit();
}
if(isset($_POST['logout'])){
 session_destroy();
 header('Location: _admin.php');
 exit();
}
?>