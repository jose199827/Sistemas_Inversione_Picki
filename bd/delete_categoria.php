<?php
require_once "conexion.php";

if (isset($_GET["id_categoria"])) {
    $Borrar_categoria = $_GET["id_categoria"];

    $conexion->query("DELETE  FROM `categorias` WHERE `id_categoria`=$Borrar_categoria");
    
};

header("Location:../confiProducto.php");


?>