<?php

/*1.4.	Escribe un programa que simule un candado como el de la siguiente imagen:
 
 En nuestra programa, el candado vendrá representado por un array de 8 posiciones, todas ellas con el valor “false” inicialmente. Nuestro candado empezará con el botón 0 y acabará con el 7.
 El usuario introducirá en un formulario la secuencia de botones que pulsa, separados por coma. Por ejemplo, una secuencia correcta seria: 1,2,3,4,4,4,4,3,5.
 El programa mostrará el estado del candado después de que el usuario haya introducido la secuencia. Para la secuencia anterior, el resultado sería: false, true, true, false, false, true, false, false.
 Quizás esta función te puede ser útil: explode.
 */


$ans = 'Sin resultado';
$initial_position = array('false', 'false', 'false', 'false', 'false', 'false', 'false', 'false');
if (isset($_POST['sub'])) {
	$arr = explode(',', $_POST['n1']);
	for ($x = 0; $x < count($arr); $x++) {
		if ($initial_position[$arr[$x]] == 'false') {
			$initial_position[$arr[$x]] = 'true';
		} else {
			$initial_position[$arr[$x]] = 'false';
		}
	}
	$ans = implode(",", $initial_position);
} ?>
<html>

<head>
	<meta charset="utf-8">
	<h2>Candado</h2>
	<h5>Pulsa los valores del candado separados por comas y comprueba su estado posterior</h5>
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
			<h1>Candado</h1>
			<br>
			Introduce la combinación:<input name="n1" value="">
			<br>
			<input type="submit" name="sub" value="Lanzar">
			<br>
			<br>Resultado: <input type='text' value="<?php echo $ans; ?>"><br>
		</form>
	</div>
</body>

</html>