
<h1>Trapets</h1>
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
 $toode1 = $_POST['b1'];
 $toode2 = $_POST['b2'];
 $toode3 = $_POST['h'];
 
 echo 'Alus 1: '.$toode1.'cm<br>';
 echo 'Alus 2: '.$toode2.'cm<br>';
 echo 'Kõrgus: '.$toode3.'cm<br>';
 
 $keskjoon = $toode1 + $toode2 / 2;
 
 $pindala = $keskjoon * $toode3;
 $umbermoot = $keskjoon * 2 + $toode3 * 2;
 
 echo 'Pindala: '.$pindala.'cm²<br>';
 echo 'Ümbermõõt: '.$umbermoot.'cm<br>';
?>