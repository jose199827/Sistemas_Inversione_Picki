<?php
require_once "conexion.php";

if (isset($_GET["id_tip_impuestos"])) {
    $Borrar_impuestos = $_GET["id_tip_impuestos"];

    $conexion->query("DELETE  FROM `tipos_impuestos` WHERE `id_tip_impuestos`=$Borrar_impuestos");
    
};

header("Location:../confiProducto.php");


?>