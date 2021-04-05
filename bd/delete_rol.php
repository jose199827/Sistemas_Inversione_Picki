<?php
require_once "conexion.php";

if (isset($_GET["id_rol"])) {
    $Borrar_rol = $_GET["id_rol"];

    $conexion->query("DELETE  FROM `tipo_rol` WHERE `id_rol`=$Borrar_rol");
    
};

header("Location:../cargo.php");


?>