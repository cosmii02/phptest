
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

	if(!empty($_POST['a'])){$arv1 = $_POST['a'];}else{exit("Palun sisestage sünniaasta ja proovige uuesti");}
	
	$arv1 = 2022 - $arv1;
	if ($arv1 % 10 == 0){
		
		echo("Tegemist on juubeliga");
		
		}else{
			echo("Tegemist ei ole juubeliga");
			}

?>