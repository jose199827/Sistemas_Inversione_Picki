<?php
require_once "conexion.php";

if (isset($_GET["id_marca"])) {
    $Borrar_marcas = $_GET["id_marca"];

    $conexion->query("DELETE  FROM `marcas` WHERE `id_marca`=$Borrar_marcas");
    
};

header("Location:../confiProducto.php");


?>