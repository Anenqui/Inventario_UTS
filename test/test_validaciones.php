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
$aprobadas = 0;

foreach ($casos as [$entrada,$esperado]){
    $obtenido = validarNombreProducto($entrada);
    $resultado = $obtenido === $esperado ? "PASS" : "FAIL";
    echo 'La prueba ' . json_encode($entrada, JSON_UNESCAPED_UNICODE) . ' resultó en: ' . $resultado . "\n";

    if ($resultado === "PASS") {
        $aprobadas++;
    } else {
        $fallos++;
    }
}

foreach ($casosCantidad as [$entrada, $esperado]) {
    $obtenido = validarCantidadProducto($entrada);
    $resultado = $obtenido === $esperado ? "PASS" : "FAIL";
    echo 'La prueba ' . json_encode($entrada, JSON_UNESCAPED_UNICODE) . ' resultó en: ' . $resultado . "\n";

    if ($resultado === "PASS") {
        $aprobadas++;
    } else {
        $fallos++;
    }
}

echo "\nTotal PASS: $aprobadas\n";
echo "Total FAIL: $fallos\n";

exit($fallos === 0 ? 0 : 1);