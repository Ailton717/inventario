<?php

require_once __DIR__ . '/../funciones.php';

// Las funciones de validacion devuelven true si el dato es valido, o el codigo
// del error si no lo es. Cada caso espera el codigo exacto, para que index.php
// y funciones.php no se desincronicen: si un codigo cambia aqui se nota.
$casos = [
    [ "validarNombre", "nombre válido: Teclado", "Teclado", true ],
    [ "validarNombre", "nombre vacío", "", "nombre_vacio" ],
    [ "validarNombre", "nombre con espacios", "   ", "nombre_vacio" ],
    [ "validarNombre", "nombre muy corto", "PC", "nombre_corto" ],
    [ "validarNombre", "nombre con espacios alrededor", "  Teclado  ", true ],
    [ "validarNombre", "nombre válido: Mouse", "Mouse", true ],

    [ "validarCantidad", "cantidad válida: 5", "5", true ],
    [ "validarCantidad", "cantidad cero", "0", "cantidad_cero" ],
    [ "validarCantidad", "cantidad negativa", "-3", "cantidad_cero" ],
    [ "validarCantidad", "cantidad no numérica", "abc", "cantidad_invalida" ],
    [ "validarCantidad", "cantidad vacía", "", "cantidad_invalida" ],
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
