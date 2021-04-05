<?php
require_once "conexion.php";

if (isset($_GET["id_cargo"])) {
    $Borrar_cargos = $_GET["id_cargo"];

    $conexion->query("DELETE  FROM `cargos` WHERE `id_cargo`=$Borrar_cargos");
    
};

header("Location:../cargo.php");


?>