
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
	$tydrukud = array('Helena', 'Jasmine', 'Phoebe', 'Aysha', 'Madeleine', 'Christina', 'Melissa', 'Marie', 'Tamara', 'Freya');
	
	var_dump($tydrukud);
	
	sort($tydrukud);
	
	foreach($tydrukud as $nimi){
 	echo "$nimi <br>";}
	
	echo"tydrukud II <br><br>";
	
	// esimesed 3 nime
	for($i = 0; $i < 3; $i++){
		echo $tydrukud[$i]."<br>";
		}
	
	echo "<br>".$tydrukud[count($tydrukud) - 1]."<br><br>";
	
	// random name
	echo $tydrukud[rand(0,(count($tydrukud) - 1))];
	
?>
