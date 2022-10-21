<?php

/* 1.1.	Crea una aplicación que parta de un formulario en que se pida al usuario dos valores: inicio y fin. 
El programa mostrará por pantalla todos los valores que hay entre los dos introducidos, ordenados crecientemente.
Por ejemplo, si el usuario introduce los valores 5 y 10, el programa mostrará 6 7 8 9.
*/


$ans = 'Sin resultado';
$letters = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E');
if (isset($_POST['sub'])) {
	$first_number = intval($_POST['n1']);
	$second_number = intval($_POST['n2']);
	$ans =  implode(' ', range($first_number + 1, $second_number - 1));
} ?>
<html>

<head>
	<meta charset="utf-8">
	<h2>Formulario de valores</h2>
	<h5>Introduce dos valores aleatorios y recibe los valores intermedios</h5>
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
		<form method="post" action="">
			<h1>Formulario</h1>
			<br>
			Introduce el primer número:<input name="n1" value="">
			<br>
			<br>
			Introduce el segundo número:<input name="n2" value="">
			<br>
			<input type="submit" name="sub" value="Calcular">
			<br>
			<br>El rango es: <input type='text' value="<?php echo $ans; ?>"><br>
		</form>
	</div>
</body>

</html>