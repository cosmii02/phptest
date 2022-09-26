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
<body>
<?php 
	function tervitus(){
		return "Hommik päiksekiireke, on aeg jooma hakkata";
		}
	
	echo "<br>";
	echo tervitus();
	
?>


<?php
	
	$nimi = "";
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nimi = $_POST["nimi"];

        };
	if($nimi != ""){
		$nimi = "${nimi}@vikk.ee";
		}
	

	
?>
  <h2>Kasutajanimi</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  
    Nimi <input type="text" name="nimi"><br>
    <input type="submit" value="submit">


</form>
<?php 
	echo "<br>";
	echo $nimi;
	echo "<br>";
	
?>

<?php
	
	$a = 0; $b = 0; $c = 0;
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $a = $_POST["a"];
		  $b = $_POST["b"];
		  $c = $_POST["c"];

        };
	function numbrid($a, $b, $c){
		for($i = $a; $i < $b; $i += $c){
			echo "${i}, ";
			}
		}
	

	
?>
  <h2>Numbrid</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  
    number 1 <input type="text" name="a"><br>
    number 2 <input type="text" name="b"><br>
    number 3 <input type="text" name="c"><br>
    <input type="submit" value="submit">


</form>
<?php 
	echo "<br>";
	if($a != 0 && $b != 0 && $c != 0){
		echo numbrid($a, $b, $c);
		}else{
			echo "";
			}
	
	echo "<br>";
	
	
?>


</body>
</html>