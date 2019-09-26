<html>

<head>
	<title>Calcular equació segon grau:</title>
</head>
<body>
	<img src="https://images.cooltext.com/5328841.png" width="600" height="50">
	<h4>Introdueix les variables:</h4>
	<form action="" method="get">
		<p> 
			<p  style="float: right;"> 
				<font color="white">-------------------------------</font>
			   </p>

			<img src="http://matematicas.relatividad.org/ec-2-g-regla.png" style="float:right;width:250px;height:200px;">

  		A:<br>
  		<input type="text" name="a">
  		<br>
  		B:<br>
  		<input type="text" name="b">
	    <br>
  		C:<br>
	    <input type="text" name="c">
	    <br><br>
	    </p>
	    <input type="submit" value="Submit">
	</form> 
	<?php
		
		
		if ((isset($_GET['a'])) && (isset($_GET['b'])) && (isset($_GET['c']))){
			$a=$_GET["a"];
			$b=$_GET["b"];
			$c=$_GET["c"];
		}
		if ((empty($a)) ||(empty($b)) || ( empty($c))){
			echo "Error:Campos vacios";

		}else{
			$x = ($b**2)-(4*$a*$c);
			if($x==0){

			}
			elseif($x<=0){
				echo "ERROR: La solució només es pot donar en numeros complexos.";
			} else{
				$x1=(-$b + sqrt($x))/(2*$a);
				$x2=(-$b - sqrt($x))/(2*$a);
				echo "Els dos valors de l'equacio de segon grau son: <b> $x1 $x2 </b>\n";

			}
		}
	
	
		
	  ?>
</body>
</html>


