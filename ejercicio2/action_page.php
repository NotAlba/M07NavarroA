<!DOCTYPE html>
<html>
<head>
	<title>Registre d'susuaris</title>
</head>
<body>
	<form action="" method="get">
		<h2>Registre d'usuaris</h2>
		<h4>Introdueix les dades:</h4>
		Nom:<br>
  		<input type="text" name="nom">
  		<br>
  		Cognom:<br>
  		<input type="text" name="cognom">
	    <br>
  		Email:<br>
	    <input type="text" name="email">
	    <br><br>
	    </p>
	    <input type="submit" value="Submit">
	</form>
		<?php

		
		
		$fichero= 'registre_usuaris.txt';
		
		
		if ((isset($_GET['nom'])) && (isset($_GET['cognom'])) && (isset($_GET['email']))){
			$nom=$_GET['nom'];
			$cognom=$_GET["cognom"];
			$email=$_GET["email"];
			$usuari="$nom\t $cognom \t$email \n";
		}
			if ((empty($nom)) ||(empty($cognom)) ||(empty($email))){
				
				echo "ERROR: Falten dades a introduir";
			}else{
				file_put_contents($fichero, $usuari, FILE_APPEND);}
			
		


		?>


</body>
</html>