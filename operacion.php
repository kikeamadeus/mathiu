<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if(isset($_POST['operacion'])) {
    if($_POST['operacion'] == "sum") {
        $res = $num1 + $num2;
        echo "El resultado de la suma es: ".$res;
    }
    else if($_POST['operacion'] == "res") {
        $res = $num1 - $num2;
        echo "El resultado de la resta es: ".$res;
    }
    else if($_POST['operacion'] == "mul") {
        $res = $num1 * $num2;
        echo "El resultado de la multiplicación es: ".$res;
    }
    else if($_POST['operacion'] == "div") {
        $res = $num1 / $num2;
        echo "El resultado de la división es: ".$res;
    }
}
else {
    echo "No selecciono una operacion matemática";
}