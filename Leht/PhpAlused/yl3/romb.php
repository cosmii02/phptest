<!--Franco Kikkas IS21-->
<h1>Romb</h1>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
html { color-scheme: dark; }
body { width: 35em; margin: 0 auto;
font-family: Tahoma, Verdana, Arial, sans-serif; }
</style>
</head>
<?php
 //lisab vormist saadud andmed muutujasse
 $toode1 = $_POST['b'];
 
 $p = $toode1 * 4;
 
 echo 'Ümbermõõt: '.$p.'cm<br>';
?>