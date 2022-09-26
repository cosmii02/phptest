
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
	$palgad = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);
	
	$keskmine = 0;
	foreach($palgad as $palk){
		$keskmine += $palk;
		}
	
	$keskmine = $keskmine / count($palgad);
	echo "keskmine palk oli ${keskmine}";
	
	
?>