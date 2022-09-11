<?php
//aritmeetilised operaatorid
$x = 8;
$y = 2;
$liitm = $x + $y;
$lahut = $x - $y;
$korru = $x * $y;
$jagam = $x / $y;
$jaak = $x % $y;
echo "Vastused: $liitm, $lahut, $korru, $jagam, $jaak";
// seperate a line


$i = 7.26;
$j = 2.369;
$k = $i / $j;
$vormindatud = sprintf('Vastuse: %0.3f', $k);
echo $vormindatud;
?>