<?php

require_once __DIR__ . '/../funciones.php';

// Las funciones de validacion devuelven true si el dato es valido,
// o un texto con el mensaje de error si no lo es.
$casos = [
    [ "validarNombre", "nombre válido: Teclado", "Teclado", true ],
    [ "validarNombre", "nombre vacío", "", false ],
    [ "validarNombre", "nombre con espacios", "   ", false ],
    [ "validarNombre", "nombre muy corto", "PC", false ],
    [ "validarNombre", "nombre válido: Mouse", "Mouse", true ],

    [ "validarCantidad", "cantidad válida: 5", "5", true ],
    [ "validarCantidad", "cantidad cero", "0", false ],
    [ "validarCantidad", "cantidad negativa", "-3", false ],
    [ "validarCantidad", "cantidad no numérica", "abc", false ],
];

$correctas = 0;
$fallidas = 0;

foreach ($casos as [$funcion, $descripcion, $entrada, $esperado]) {

    $resultado = $funcion($entrada);
    $obtenido = ($resultado === true);

    if ($obtenido === $esperado) {
        echo "Prueba exitosa: $descripcion\n";
        $correctas++;
    } else {
        echo "FAIL - $descripcion\n";
        echo "Esperado valido: " . var_export($esperado, true) . "\n";
        echo "Obtenido: " . var_export($resultado, true) . "\n";
        $fallidas++;
    }
}

echo "\nResumen de pruebas:\n";
echo "Total de pruebas: " . count($casos) . "\n";
echo "Pruebas correctas: $correctas\n";
echo "Pruebas fallidas: $fallidas\n";
exit($fallidas > 0 ? 1 : 0);
