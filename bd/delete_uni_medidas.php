<?php
require_once "conexion.php";

if (isset($_GET["id_uni_medida"])) {
    $Borrar_uni_medidas = $_GET["id_uni_medida"];

    $conexion->query("DELETE  FROM `unidades_medidas` WHERE `id_uni_medida`=$Borrar_uni_medidas");
    
};

header("Location:../confiProducto.php");


?>