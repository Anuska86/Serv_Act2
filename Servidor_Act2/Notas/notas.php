<html>

<head>
    <meta charset="utf-8">
    <h2>Notas</h2>
    <h5>Comprueba la nota más alta, la más baja y la media de las notas, así como los nombres de todos los alumnos con sus notas ordenadas de forma ascendente. </h5>
</head>

<body>

</body>

</html>

<?php

/*1.2.	Escribe un programa en el que se declare un array asociativo para guardar las notas de unos alumnos. 
Las claves del array serán los nombres de los alumnos y los valores serán las notas de cada uno.
El programa deberá hacer las operaciones necesarias para mostrar los siguientes mensajes 
(los datos que se muestran son de ejemplo, los tuyos cambiarán en función de los valores del array):
La nota más alta es la de David con un 9.
La nota más baja es la de Sandra con un 3.
La nota media de la clase es 6.4.
Además, se mostrarán los nombres de los alumnos, acompañados de su nota, ordenados por esta última (ascendentemente).
*/


$students = array("David" => 10, "Isabel" => 8, "Joel" => 9, "Laura" => 6, "Miriam" => 2, "Estibaliz" => 5, "Fernando" => 4);

$aritM = array_sum($students) / count($students);

//Imprimir la nota más alta: 


$max = max(array_keys($students));

echo "La nota más alta es la de " . array_search(max($students), $students) . " con un " . max($students) . "<br/>";

//Imprimir la nota más baja: 

$min = min(array_keys($students));

echo "La nota más baja es la de " . array_search(min($students), $students) . " con un " . min($students) . "<br/>";

//Calcular la nota media: 


echo "La media de las notas es: " . round($aritM, 2) . "<br/>";

//Nombres de los alumnos con su nota ordenadas por esta de manera ascendente: 

asort($students);
echo "Lista de notas:<br/>" ;
foreach ($students as $name => $mark) {
    echo "$name: $mark<br/>";
}

?>
