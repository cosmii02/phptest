<?php
//lisab vormist saadud andmed muutujasse
$b = $_POST['b'];
$h2 = $_POST['h2'];

$a = ($b* $h2);
echo sprintf("\nRombi ümbermõõt : %f ",$a);
?>