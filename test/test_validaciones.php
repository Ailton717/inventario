<?php

require_once __DIR__ . '/../funciones.php';

// Cada caso declara la función a probar, la entrada y el resultado esperado:
// true si el valor es válido, o el código de error que debe devolver.
$casos = [
    [ "validarNombre", "nombre válido: Teclado", "Teclado", true ],
    [ "validarNombre", "nombre válido: Mouse", "Mouse", true ],
    [ "validarNombre", "nombre con espacios alrededor", "  Teclado  ", true ],
    [ "validarNombre", "nombre vacío", "", "nombre_vacio" ],
    [ "validarNombre", "nombre solo con espacios", "   ", "nombre_vacio" ],
    [ "validarNombre", "nombre demasiado corto", "TV", "nombre_corto" ],

    [ "validarCantidad", "cantidad válida: 10", "10", true ],
    [ "validarCantidad", "cantidad válida: 1", 1, true ],
    [ "validarCantidad", "cantidad no numérica", "diez", "cantidad_invalida" ],
    [ "validarCantidad", "cantidad vacía", "", "cantidad_invalida" ],
    [ "validarCantidad", "cantidad cero", "0", "cantidad_cero" ],
    [ "validarCantidad", "cantidad negativa", "-5", "cantidad_cero" ],
];

$correctas = 0;
$fallidas = 0;

foreach ($casos as [$funcion, $descripcion, $entrada, $esperado]) {

    $obtenido = $funcion($entrada);

    if ($obtenido === $esperado) {
        echo "Prueba exitosa: $descripcion\n";
        $correctas++;
    } else {
        echo "FAIL - $descripcion\n";
        echo "Esperado: " . var_export($esperado, true) . "\n";
        echo "Obtenido: " . var_export($obtenido, true) . "\n";
        $fallidas++;
    }
}

echo "\nResumen de pruebas:\n";
echo "Total de pruebas: " . count($casos) . "\n";
echo "Pruebas correctas: $correctas\n";
echo "Pruebas fallidas: $fallidas\n";
exit($fallidas > 0 ? 1 : 0);
