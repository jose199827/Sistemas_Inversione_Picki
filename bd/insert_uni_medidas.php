<?php
  include_once "conexion.php";
 
  $uni_medida = $_POST["uni_medida"];
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

     $Ins_uni_medida = "INSERT INTO `unidades_medidas`
     (
        `uni_medida`, 
    `fec_registro`, 
    `usr_registro`)
      VALUES (:uni_medida,
      :Fecha,
      :Usr); ";

    $resultado = $conexion->prepare($Ins_uni_medida);
    $resultado->execute(array(
 ":uni_medida" =>$uni_medida,
 ":Fecha"=>$Fecha, 
 ":Usr"=>$Usr));

    header("Location:../confiProducto.php");

?>