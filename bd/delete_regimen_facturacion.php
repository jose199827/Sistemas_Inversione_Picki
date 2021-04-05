<?php
require_once "conexion.php";

if (isset($_GET["id_regi_fact"])) {
    $Borrar_regimen = $_GET["id_regi_fact"];

    $conexion->query("DELETE  FROM `regimen_facturacion` WHERE `id_regi_fact`=$Borrar_regimen");
    
};

header("Location:../confiFactura.php");


?>