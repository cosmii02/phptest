
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

<?php 

	echo date('d.m.Y G:i' , time()); 

?>

<?php
	
	$aasta = 0;
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $aasta = $_POST["aasta"];

        };



	
?>
  <h2>Mis aastal sa sündisid?</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  
    Aasta <input type="text" name="aasta"><br>
    <input type="submit" value="submit">


</form>
<?php 
	echo "<br>";
	if($aasta != 0){echo date('Y') - $aasta;}
	echo "<br>";
	
?>