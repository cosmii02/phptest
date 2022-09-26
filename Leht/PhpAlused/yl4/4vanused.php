
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

	if(!empty($_POST['a'])){$vanus1 = $_POST['a'];}else{exit("vanus 1 lahter on tühi...");}
	
	if(!empty($_POST['b'])){$vanus2 = $_POST['b'];}else{exit("vanus 2 lahter on tühi...");}
	
	if ($vanus1 == $vanus2){
		echo("inimesd on sama vanad...");
		}else if($vanus1 > $vanus2){
			echo("esimene inimene on vanem kui teine...");
			}else{
				echo("teine inimene on vanem kui esimene...");
				}

?>