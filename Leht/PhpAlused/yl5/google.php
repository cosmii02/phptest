<!--Franco Kikkas IS21-->
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

	
?>
  <h1>Google</h1>
  <h2>Kas nimi on listis</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  
    Nimi <input type="text" name="nimi"><br>
    <input type="submit" value="kas on">


</form>
<?php 

		
	$nimi = "";
	
	$firms = array(
"Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett","
Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
"Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
"Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
"Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes");
	
	sort($firms);

	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nimi = $_POST["nimi"];
        };
	

	if(in_array(ucfirst(strtolower($nimi)), $firms)){
		echo "jah ${nimi} on listis";
		
		}else{
			echo "ei ${nimi} ei ole listis";
		
			}
	
	echo "<br>";
	echo (implode(", ", $firms));
	echo "<br>";
	
?>

<p><a href="http://localhost/Leht/PhpAlused">Tagasi..</a>
<p></body>
</html>


