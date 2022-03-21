<?php
function divisao($num1, $num2) {
    if($num1 == 0 || $num2 == 0 || is_null($num1) || is_null($num2))
        throw new Exception("Numero Invalido");
    
    $resultado = $num1/$num2;
    return $resultado;
}
$resultado = 0;

try {
    $resultado = divisao(4, 0);
}
catch (Exception $e) {
    echo $e;
    die();
}
finally {
    echo $resultado;
}
echo "\n ------ TEste";