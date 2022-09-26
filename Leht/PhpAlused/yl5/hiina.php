<!--Franco Kikkas IS21-->
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
	$array = array("瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
"思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
"璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美");
	sort($array);
	echo implode(", ", $array);
	echo "<br>";
	echo "<br>";
	echo $array[0];
	echo "<br>";
	echo $array[count($array) -1 ]
?>
