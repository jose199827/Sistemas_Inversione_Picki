<?php
  include_once "conexion.php";
 
  $categoria = $_POST["categoria"];
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

     $Ins_categoria = "INSERT INTO `categorias` 
     (
        `categoria`,
    `fec_registro`, 
    `usr_registro`)
      VALUES (:categoria,
      :Fecha,
      :Usr); ";

    $resultado = $conexion->prepare($Ins_categoria);
    $resultado->execute(array(
 ":categoria" =>$categoria,
 ":Fecha"=>$Fecha, 
 ":Usr"=>$Usr));

    header("Location:../confiProducto.php");

?>