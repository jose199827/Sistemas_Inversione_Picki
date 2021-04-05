<?php
  include_once "conexion.php";
 
  $rol = $_POST["rol"];
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

     $Ins_rol = "INSERT INTO `tipo_rol`
     (
      `rol`, 
    `fec_registro`, 
    `usr_registro`)
      VALUES (:rol,
      :Fecha,
      :Usr); ";

    $resultado = $conexion->prepare($Ins_rol);
    $resultado->execute(array(
 ":rol" =>$rol,
 ":Fecha"=>$Fecha, 
 ":Usr"=>$Usr));

    header("Location:../cargo.php");

?>