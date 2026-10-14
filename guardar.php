<?php

require_once __DIR__ . '/config/conexion.php';
require_once "funciones.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$nombre = trim($_POST['nombre'] ?? '');
$cantidad = $_POST['cantidad'] ?? '';

$errorNombre = validarNombre($nombre);

if ($errorNombre !== true) {
    header('Location: index.php?estado=' . $errorNombre);
    exit;
}

$errorCantidad = validarCantidad($cantidad);

if ($errorCantidad !== true) {
    header('Location: index.php?estado=' . $errorCantidad);
    exit;
}

$sentencia = $conexion->prepare(
    'INSERT INTO productos (nombre, cantidad)
     VALUES (:nombre, :cantidad)'
);

$sentencia->execute([
    'nombre' => $nombre,
    'cantidad' => (int) $cantidad
]);

header('Location: index.php?estado=guardado');
exit;
