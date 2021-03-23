<?php
    $user = "INPIKI2";
    $pass = "eGZTD5Kx6ZrAzhxk##30";
    $host = "localhost";
    $db = "PI-INVERPIKY";

    $tabla_db1 = "usuario";

    error_reporting(0);

    $conexion = new mysqli($host,$user,$pass,$db);

    if ($conexion->connect_errno) {
        echo "Nuestro sitio experimenta fallos...";
        exit();
    }
?>