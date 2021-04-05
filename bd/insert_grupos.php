<?php
  include_once "conexion.php";
 
  $grupo = $_POST["grupo"];
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

     $Ins_grupo = "INSERT INTO `grupos` 
     (
        `grupo`,
    `fec_registro`, 
    `usr_registro`)
      VALUES (:grupo,
      :Fecha,
      :Usr); ";

    $resultado = $conexion->prepare($Ins_grupo);
    $resultado->execute(array(
 ":grupo" =>$grupo,
 ":Fecha"=>$Fecha, 
 ":Usr"=>$Usr));

    header("Location:../confiProducto.php");

?>

