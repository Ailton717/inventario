<?php

// Las funciones de validación devuelven true si el valor es válido, o el
// código del error si no lo es. El texto que ve el usuario vive en index.php,
// asociado a ese mismo código, para no duplicar mensajes.

function validarNombre($nombre) {
    $nombre = trim($nombre);

    if ($nombre === "") {
        return "nombre_vacio";
    }

    if (mb_strlen($nombre) < 3) {
        return "nombre_corto";
    }

    return true;
}

function validarCantidad($cantidad) {
    if (!is_numeric($cantidad)) {
        return "cantidad_invalida";
    }

    $cantidad = (int) $cantidad;

    if ($cantidad <= 0) {
        return "cantidad_cero";
    }

    return true;
}
