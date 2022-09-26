<!--Franco Kikkas IS21-->
<?php
/*
Ülesanne 2
Franco Kikkas IS21
*/
//aritmeetilised operaatorid
$x = 8;
$y = 2;
$liitm = $x + $y;
$lahut = $x - $y;
$korru = $x * $y;
$jagam = $x / $y;
$jaak = $x % $y;

echo "2 + 8 = $liitm <br>2 - 8 = $lahut <br>2 * 8 = $korru<br>2 / 8 = $jagam<br>2 % 8 = $jaak<br><br>";
// seperate a line


$mm = 1200; // mm
$cm = $mm / 10; // cm
$m = $cm / 100; //m

$vormindatud = sprintf("${mm}mm = ${cm}cm = %0.2fm<br><br>", $m);
echo $vormindatud;


$a = 4;
$b = 8;
$c = sqrt(($a * $a)+($b * $b));
$s = ($a * $b) / 2;
$p = $a + $b + $c;

echo sprintf("Täisnurkse kolmnurga mille üks külg on ${a}cm ja teine on ${b}cm pindala on ${s}cm ning ümbermõõt on %0.0fcm", $p) ;
?>