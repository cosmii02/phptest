<?php
//lisab vormist saadud andmed muutujasse
$b1 = $_POST['b1'];
$b2 = $_POST['b2'];
$h = $_POST['h'];

$b1=32; $b2=12;
$a = ($b1+ $b2)/2*$h;
echo sprintf("\nArea of Trapezoid : %f ",$a);
?>