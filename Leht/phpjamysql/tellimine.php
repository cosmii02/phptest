
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
<h1>Tellimine</h1>

<?php
 //lisab vormist saadud andmed muutujasse
 $toode1 = $_GET['t1'];
 $toode2 = $_GET['t2'];
 $toode3 = $_GET['t3'];
 
 echo 'Toode 1: '.$toode1.'tk<br>';
 echo 'Toode 2: '.$toode2.'tk<br>';
 echo 'Toode 3: '.$toode3.'tk<br>';
?>