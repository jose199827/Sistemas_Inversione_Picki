<?php
  include_once "conexion.php";
 
  $marca = $_POST["marca"];
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

     $Ins_marcas = "INSERT INTO `marcas`
     (
     `marca`, 
    `fec_registro`, 
    `usr_registro`)
      VALUES (:marca,
      :Fecha,
      :Usr); ";

    $resultado = $conexion->prepare($Ins_marcas);
    $resultado->execute(array(
 ":marca" =>$marca,
 ":Fecha"=>$Fecha, 
 ":Usr"=>$Usr));

    header("Location:../confiProducto.php");

?>
