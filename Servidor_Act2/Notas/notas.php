<html>

<head>
    <meta charset="UTF-8" />
    <title>Notas</title>
</head>

<body>

<?php
/*
1.2.	Escribe un programa en el que se declare un array asociativo para guardar las notas de unos alumnos. Las claves del array serán los nombres de los alumnos y los valores serán las notas de cada uno.
El programa deberá hacer las operaciones necesarias para mostrar los siguientes mensajes (los datos que se muestran son de ejemplo, los tuyos cambiarán en función de los valores del array):
La nota más alta es la de David con un 9.
La nota más baja es la de Sandra con un 3.
La nota media de la clase es 6.4.
Además, se mostrarán los nombres de los alumnos, acompañados de su nota, ordenados por esta última (ascendentemente).

*/

$notas=array("David"=>10, "Isabel"=>8,"Joel"=>9,"Laura"=>6,"Miriam"=>2,"Estibaliz"=>5,"Fernando"=>4);

//Imprimir la nota más alta: 

echo max(array("David"=>10, "Isabel"=>8,"Joel"=>9,"Laura"=>6,"Miriam"=>2,"Estibaliz"=>5,"Fernando"=>4));
echo $max=max($notas);
//Imprimir la nota más baja: 
echo min(array("David"=>10, "Isabel"=>8,"Joel"=>9,"Laura"=>6,"Miriam"=>2,"Estibaliz"=>5,"Fernando"=>4));
echo $min=max($notas);

//Calcular la nota media: 

$suma=0;

foreach($notas as $valor){
    $suma=$suma+$valor;
};

$mediaNotas=$suma/7; 
echo "La media de las notas es: " + $mediaNotas;

?>

</body>

</html>