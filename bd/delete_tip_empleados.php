<?php
require_once "conexion.php";

if (isset($_GET["id_tip_empleado"])) {
    $Borrar_tip_empleado = $_GET["id_tip_empleado"];

    $conexion->query("DELETE  FROM `tipos_empleado` WHERE `id_tip_empleado`=$Borrar_tip_empleado");
    
};

header("Location:../cargo.php");


?>