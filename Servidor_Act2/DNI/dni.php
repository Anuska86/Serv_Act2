<?php

/*1.5.	Escribir un programa que nos pida un número de DNI y nos calcule la letra. 
El cálculo se realiza dividiendo el número entre 23 y el resto se sustituye por letra que corresponde mediante la siguiente tabla:
 
 Debes hacer uso de arrays asociativos.
 */

$ans = 'Sin resultado';
$letters = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E');
if (isset($_POST['sub'])) {
	$numeric_value = intval($_POST['n1']);
	$rest = $numeric_value % 23;
	$ans = $letters[$rest];
} ?>
<html>

<head>
	<meta charset="utf-8">
	<h2>DNI</h2>
	<h5>Introduce las letras de un DNI y genera su letra</h5>
	<style type="text/css">
		.container {
			left: 25%;
			padding: 100px;
			text-align: center;
			border: 1px solid green;

		}

		input,
		select {
			width: 40%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
	</style>
</head>

<body>
	<div class="container">
		<form method="post" action="dni.php">
			<h1>Cálculo de la letra del DNI</h1>
			<br>
			Introduce el número de DNI:<input name="n1" value="">
			<br>
			<input type="submit" name="sub" value="Calcular">
			<br>
			<br>La letra que correspone a ese DNI es: <input type='text' value="<?php echo $ans; ?>"><br>
		</form>
	</div>
</body>

</html>