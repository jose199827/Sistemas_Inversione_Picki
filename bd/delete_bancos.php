<?php
require_once "conexion.php";

if (isset($_GET["id_banco"])) {
    $Borrar_Bancos = $_GET["id_banco"];

    $conexion->query("DELETE  FROM `entidad_banco` WHERE `id_banco`=$Borrar_Bancos");
    
};

header("Location:../bancos_tabla.php");


?>