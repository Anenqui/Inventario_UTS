<?php

$servidor = 'nombre del servidor';
$baseDatos = 'nombre de la bd';
$usuario = 'usuario de la bd';
$contrasena = 'contraseña';

try {
    $conexion = new PDO(
        "mysql:host=$servidor;dbname=$baseDatos;charset=utf8mb4",
        $usuario,
        $contrasena
    );

    $conexion->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
} catch (PDOException $error) {
    die(
        'No fue posible conectarse con la base de datos: '
        . $error->getMessage()
    );
}
