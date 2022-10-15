<html>

<head>
    <meta charset="UTF-8" />
</head>

<body>

<?php
$result = "";
class calculator
{
    var $a;
    var $b;

    function mathoperation($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Operación incorrecta";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->mathoperation($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['op1'],$_POST['op2'],$_POST['+'],$_POST['-'],$_POST['x'],$_POST['÷']);
}

?>
</body>

</html>
