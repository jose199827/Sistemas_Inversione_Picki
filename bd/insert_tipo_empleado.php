<?php
  include_once "conexion.php";
 
  $tipo_empleado = $_POST["tipo_empleado"];
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

     $Ins_tipo_empleado = "INSERT INTO `tipos_empleado`
     (
    `tipo_empleado`, 
    `fec_registro`, 
    `usr_registro`)
      VALUES (:tipo_empleado,
      :Fecha,
      :Usr); ";

    $resultado = $conexion->prepare($Ins_tipo_empleado);
    $resultado->execute(array(
 ":tipo_empleado" =>$tipo_empleado,
 ":Fecha"=>$Fecha, 
 ":Usr"=>$Usr));

    header("Location:../cargo.php");

?>
