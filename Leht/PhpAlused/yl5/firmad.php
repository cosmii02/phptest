
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    html { color-scheme: dark; }
    body { width: 35em; margin: 0 auto;
      font-family: Tahoma, Verdana, Arial, sans-serif; }
  </style>
</head>


<body>
  <?php 
	
	session_start();
	
	$nimi = array();
	if($_SESSION['nimi'] != "."){
		$nimi = $_SESSION['nimi'];
		}
	
	
	$firms = array("Kimia", "Mynte" ,"Voomm", "Twiyo" ,"Layo", "Talane", "Gigashots", "Tagchat", "Quaxo", "Voonyx", "Kwilith", "Edgepulse", "Eidel", "Eadel", "Jaloo", "Oyope", "Jamia");
	
	sort($firms);
	
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
          array_push($nimi, $_POST["nimi"]);
		  $_SESSION['nimi'] = $nimi;
		  
		  if(isset($_POST["Reset"])){ 
		  	$nimi = array();
			$_SESSION['nimi'] = ".";
			}
        };
	
	foreach($nimi as $name){
	if(in_array(ucfirst(strtolower($name)), $firms)){
		$pos = array_search(ucfirst(strtolower($name)), $firms);
		unset($firms[$pos]);
		$firms = array_values($firms);
		}}
	
?>
  <h1>Firmad</h1>
  <h2>Firmade eemaldamine</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  
    Nimi <input type="text" name="nimi"><br>
    <input type="submit" value="Eemalda">
    <input type="submit" name="Reset" value="Reset">

</form>
<?php 
	echo "<br>";
	echo (implode(", ", $firms));
	echo "<br>";
	
?>

<p><a href="https://yuuna.cc/Leht/PhpAlused">Tagasi..</a>
<p></body>
</html>


