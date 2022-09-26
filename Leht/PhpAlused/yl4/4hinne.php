
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

	if(!empty($_POST['a'])){$arv1 = $_POST['a'];}else{exit("Palun sisestage hinne ja proovige uuesti");}
	
	switch($arv1){
		case (9 >= $arv1 and $arv1 >= 5):echo("TEHTUD");
		break;
		case ($arv1 >= 10):echo("SUPER!");
		break;
		case ($arv1 < 5):echo("KASIN!");
		break;
		default: echo("SISESTA OMA PUNKTID!");
		break;
		
		}

?>