<?php
  include_once "conexion.php";
 
  $RTN = $_POST["RTN"];
  $empresa = $_POST["empresa"];
  

     $Ins_empresa = "INSERT INTO `empresas`
     (
     `rtn_empresa`, 
     `nom_empresa`)
      VALUES (:RTN,
      :empresa); ";

    $resultado = $conexion->prepare($Ins_empresa);
    $resultado->execute(array(
 ":RTN" =>$RTN,
 ":empresa"=>$empresa));

    header("Location:../confiFactura.php");

?>