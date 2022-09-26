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
	
	class auto{
		var $värv;
		var $tootja;
		var $kiirus = 0;
		var $maxKiirus = 100;
		
		function kiirendus(){
			if ($this -> kiirus < $this -> maxKiirus){
				$this -> kiirus += 10;
				echo 'Kiirus: '.$this -> kiirus.' Km/h'.'<br>';				
				}
			else{
				echo 'Kiirus: '.$this -> kiirus.' Km/h'.'<br>';	
					}
			}
		}
		
	$suzuki = new auto;
		$suzuki -> värv = 'Must';
		$suzuki -> tootja = 'Suzuki';
		$suzuki -> maxKiirus = 300;
		
	echo 'Minu uus '.$suzuki -> tootja.' on '.$suzuki -> värv.'<br><br>';
		
	for($i = 0; $i <= 40; $i++){
			$suzuki -> kiirendus();
		}
		
?>