<?php

require_once __DIR__ . '/../funciones.php';

$casosNombre = [
    [ "nombre válido: Teclado", "Teclado", true ],
    [ "nombre vacío", "", false ],
    [ "nombre con espacios", "   ", false ],
    [ "nombre válido: Mouse", "Mouse", true ],
];

$casosCantidad = [
    [ "cantidad válida: 5", 5, true ],
    [ "cantidad válida: 1", 1, true ],
    [ "cantidad cero", 0, false ],
    [ "cantidad no numérica", "abc", false ],
    [ "cantidad vacía", "", false ],
];

$correctas = 0;
$fallidas = 0;

foreach ($casosNombre as [$descripcion, $entrada, $esperado]) {
    $resultado = validarNombre($entrada);
    $obtenido = ($resultado === true);

    if ($obtenido === $esperado) {
        echo "Prueba exitosa: $descripcion\n";
        $correctas++;
    } else {
        echo "FAIL - $descripcion\n";
        echo "Esperado: " . var_export($esperado, true) . "\n";
        echo "Obtenido: " . var_export($resultado, true) . "\n";
        $fallidas++;
    }
}

foreach ($casosCantidad as [$descripcion, $entrada, $esperado]) {
    $resultado = validarCantidad($entrada);
    $obtenido = ($resultado === true);

    if ($obtenido === $esperado) {
        echo "Prueba exitosa: $descripcion\n";
        $correctas++;
    } else {
        echo "FAIL - $descripcion\n";
        echo "Esperado: " . var_export($esperado, true) . "\n";
        echo "Obtenido: " . var_export($resultado, true) . "\n";
        $fallidas++;
    }
}

$total = count($casosNombre) + count($casosCantidad);

echo "\nResumen de pruebas:\n";
echo "Total de pruebas: $total\n";
echo "Pruebas correctas: $correctas\n";
echo "Pruebas fallidas: $fallidas\n";
exit($fallidas > 0 ? 1 : 0);