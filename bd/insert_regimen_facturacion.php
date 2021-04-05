<?php
  include_once "conexion.php";
 
  $cai = $_POST["cai"];
  $cor_inicial = $_POST["cor_inicial"];
  $cor_final = $_POST["cor_final"];
  $fecha_limite = $_POST["fecha_limite"];
 

     $Ins_regimen = "INSERT INTO `regimen_facturacion`
     (
     `cai`, 
     `cor_inic`,
     `cor_fin`,
     `fec_lim_emi`
    )
      VALUES (:cai,
      :cor_inicial,
      :cor_final,
      :fecha_limite
      ); ";

    $resultado = $conexion->prepare($Ins_regimen);
    $resultado->execute(array(
 ":cai" =>$cai,
 ":cor_inicial" =>$cor_inicial,
 ":cor_final" =>$cor_final,
 ":fecha_limite"=>$fecha_limite
 ));

    header("Location:../confiFactura.php");

?>
