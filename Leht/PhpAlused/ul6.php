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
	for($i = 1; $i != 101; $i++){
		if($i % 10 == 0){
			echo "${i}. <br>";
		}else{
			echo "${i}. ";
			}
	}
	
	echo "<br><br>";
	
	for($i = 1; $i != 21; $i++){
		if($i % 5 == 0){
			echo "* <br>";
		}else{
			echo "* ";
			}
		}
	echo "<br><br>";
	
	for($i = 10; $i != 0; $i--){
		echo "${i} <br>";
		}
		
	echo "<br><br>";
	
	for($i = 1; $i != 101; $i++){
		if($i % 3 == 0){
			echo "${i}, ";
		}
	}
?>