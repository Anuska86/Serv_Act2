<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>formDniPHP</title>
</head>

<body>
    <h1>Cálculo de la letra del DNI</h1>

    <?php
    $n = $_POST['numdni'];
    $rest = $n % 23;
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    echo $n."<b>".$letters{$rest}."</b>";
    ?>
    <br><br>
    <p>
        <a href="dni.html">Volver a dni.html</a>
    </p>
</body>

</html>