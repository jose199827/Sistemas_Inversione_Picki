<?php
  include_once "conexion.php";
 
  $cargo = $_POST["cargo"];
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

     $Ins_cargos = "INSERT INTO `cargos`
     (
     `cargo`, 
    `fec_registro`, 
    `usr_registro`)
      VALUES (:cargo,
      :Fecha,
      :Usr); ";

    $resultado = $conexion->prepare($Ins_cargos);
    $resultado->execute(array(
 ":cargo" =>$cargo,
 ":Fecha"=>$Fecha, 
 ":Usr"=>$Usr));

    header("Location:../cargo.php");

?>