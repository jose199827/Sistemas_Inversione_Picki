<?php

define('servidor', '142.44.161.115');
define('nombre_bd', 'PI-INVERPIKY');
define('usuario_bd', 'INPIKI2');
define('password_bd', 'eGZTD5Kx6ZrAzhxk##30');
$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
try {
    $conexion = new PDO("mysql:host=" . servidor . "" . ";dbname=" . nombre_bd, usuario_bd, password_bd, $opciones);
    //$conexion = new PDO("mysql:host=127.0.0.1;port=3308;charset=utf8;dbname=p4e2", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conexion;
} catch (PDOException $e) {
    die("El error de la Conexión es : " . $e->getMessage());
    echo "en la línea" . $e->getLine();
}

