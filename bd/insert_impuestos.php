<?php
  include_once "conexion.php";
 
  $nom_isv = $_POST["nom_isv"];
  $porcentaje = $_POST["porcentaje"];
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

     $Ins_impuestos = "INSERT INTO `tipos_impuestos`
     (
        `nom_isv`,
        `porcentaje`, 
    `fec_registro`, 
    `usr_registro`)
      VALUES (:nom_isv,
      :porcentaje,
      :Fecha,
      :Usr); ";

    $resultado = $conexion->prepare($Ins_impuestos);
    $resultado->execute(array(
 ":nom_isv"=>$nom_isv,
 ":porcentaje"=>$porcentaje,
 ":Fecha"=>$Fecha, 
 ":Usr"=>$Usr));

    header("Location:../confiProducto.php");

?>
