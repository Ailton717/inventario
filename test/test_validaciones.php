<?php

require_once __DIR__ . '/../funciones.php';

$casos = [
    [ "nombre válido: Teclado", "Teclado", true ],
    [ "nombre vacío", "", false ],
    [ "nombre con espacios", "   ", false ],
    [ "nombre válido: Mouse", "Mouse", true ],
];

$correctas = 0;
$fallidas = 0;

foreach ($casos as [$descripcion, $entrada, $esperado]) {

    // validarNombre devuelve true, o el mensaje de error en texto.
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

echo "\nResumen de pruebas:\n";
echo "Total de pruebas: " . count($casos) . "\n";
echo "Pruebas correctas: $correctas\n";
echo "Pruebas fallidas: $fallidas\n";
exit($fallidas > 0 ? 1 : 0);
