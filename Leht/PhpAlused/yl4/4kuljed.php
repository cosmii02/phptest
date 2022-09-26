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

	if(!empty($_POST['a'])){$arv1 = $_POST['a'];}else{exit("külg 1 lahter on tühi...");}
	
	if(!empty($_POST['b'])){$arv2 = $_POST['b'];}else{exit("külg 2 lahter on tühi...");}
	
	if ($arv1 == $arv2){
		
		echo("tegemist on ruuduga");
		
		}else{
			echo("tegemist on ristkülikuga");
			}

?>