<?php
require_once "conexion.php";

if (isset($_GET["id_empresa"])) {
    $Borrar_empresas = $_GET["id_empresa"];

    $conexion->query("DELETE  FROM `empresas` WHERE `id_empresa`= $Borrar_empresas");
    
};

header("Location:../confiFactura.php");


?>