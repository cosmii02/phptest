
<?php 
	$pildid = array("img/prentice.jpg","img/freeland.jpg","img/peterus.jpg","img/devlin.jpg","img/gabriel.jpg","img/pete.jpg");


?>
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
<body>
<img src="<?php echo $pildid[0]; ?>" />
<img src="<?php echo $pildid[1]; ?>" />
<img src="<?php echo $pildid[2]; ?>" />
<img src="<?php echo $pildid[3]; ?>" />
<img src="<?php echo $pildid[4]; ?>" />
<img src="<?php echo $pildid[5]; ?>" />

</body>
</html>