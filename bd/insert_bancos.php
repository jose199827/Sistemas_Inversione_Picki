<?php
  include_once "conexion.php";
 
  $nombre = $_POST["nombre"];
  $abr = $_POST["abr"];
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

     $Ins_bancos = "INSERT INTO `entidad_banco`
     (
    `nom_banco`,
    `abr_banco`, 
    `fec_registro`, 
    `usr_registro`)
      VALUES (:nombre,
      :abr,
      :Fecha,
      :Usr); ";

    $resultado = $conexion->prepare($Ins_bancos);
    $resultado->execute(array(
 ":nombre" =>$nombre,
 ":abr" =>$abr,
 ":Fecha"=>$Fecha, 
 ":Usr"=>$Usr));

    header("Location:../bancos_tabla.php");

?>