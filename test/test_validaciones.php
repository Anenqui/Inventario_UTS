<?php

require_once __DIR__ . '/../src/validaciones.php';

$casos =[
    ["Teclado", true],
    ["",false],
    ["   ",false],
    ["Mouse",true]
];

$casosCantidad = [
    [-1, false],
    [5, true],
    ["", false],
    ["abc", false]
];

$fallos = 0;

foreach ($casos as [$entrada,$esperado]){
    $obtenido = validarNombreProducto($entrada);
    if ($obtenido === $esperado){
        echo "PASS\n";
    }else{
        echo "FAIL\n";
        $fallos++;
    }
}

foreach ($casosCantidad as [$entrada, $esperado]) {
    $obtenido = validarCantidadProducto($entrada);
    if ($obtenido === $esperado) {
        echo "PASS\n";
    } else {
        echo "FAIL\n";
        $fallos++;
    }
}

exit($fallos === 0 ? 0 : 1);