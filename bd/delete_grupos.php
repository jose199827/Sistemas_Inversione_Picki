<?php
require_once "conexion.php";

if (isset($_GET["id_grupo"])) {
    $Borrar_grupos = $_GET["id_grupo"];

    $conexion->query("DELETE  FROM `grupos` WHERE `id_grupo`=$Borrar_grupos");
    
};

header("Location:../confiProducto.php");


?>