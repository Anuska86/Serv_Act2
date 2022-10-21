<!DOCTYPE html>

<!-- 1.3.	Realizar una aplicación que simule una calculadora.
 Constará de una página HTML con dos campos de texto para introducir los dos operadores, y 4 RadioButtons para seleccionar la operación: suma, resta, multiplicación y división. 
 Se mostrará el resultado de la operación en una segunda página con la frase “El resultado de la suma/resta/multiplicación/división es XXX”.
Hacer el programa usando un formulario de tipo POST.
-->

<html lang='en'>

<head>
    <meta charset='utf-8' />
    <title>Calculadora</title>
    <h2>Calculadora</h2>
    <h5>Introduce dos valores y selecciona la operación deseada</h5>
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
        <form method="post" class="form">

            <label>Primer valor <input type="text" name="value1" placeholder=""></label>
            <br>
            <label>Segundo valor <input type="text" name="value2" placeholder=""></label>


            <h1>Elige un operador </h1>
            <input type="radio" name="operator" value="add">+
            <br>
            <input type="radio" name="operator" value="sub">-
            <br>
            <input type="radio" name="operator" value="mul">*
            <br>
            <input type="radio" name="operator" value="div">/
            <br>

            <input type="submit" class="btn btn-success" value="Calcular">
        </form>
    </div>
    <?php
    if (isset(
        $_POST['value1'],
        $_POST['value2'],
        $_POST['operator']
    )) {

        $value_1 = (float)$_POST['value1'];
        $value_2 = (float)$_POST['value2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case 'add':
                $symbol = '+';
                $res = round($value_1 + $value_2);
                break;
            case 'sub':
                $symbol = '-';
                $res = round($value_1 - $value_2);
                break;
            case 'mul':
                $symbol = '*';
                $res = round($value_1 * $value_2);
                break;
            case 'div':
                $symbol = '/';
                $res = round($value_1 / $value_2);
                break;
        }

        printf('El resultado de la suma/resta/multiplicación/división es ');
        printf(
            '%d %s %s = %f',
            $value_1,
            $symbol,
            $value_2,
            $res
        );
    }
    ?>
</body>

</html>