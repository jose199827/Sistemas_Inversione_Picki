<?php

include_once "conexion.php";

  $proveedor = $_POST["proveedor"];
  $marca = $_POST["marca"];
  $categoria = $_POST["categorias"];
  $grupo = $_POST["grupo"];
  $tip_impuesto = $_POST["isv"];
  $uni_medida = $_POST["uni_medida"];
  $nom_producto = $_POST["nomproducto"];
  $des_producto = $_POST["descripcion"];
  $fot_producto = $_POST["foto"];
  $pre_compra = $_POST["pre_compra"];
  $pre_venta = $_POST["pre_venta"];
  $pre_reventa = $_POST["pre_reventa"];
  $sto_minimo = $_POST["sto_minimo"];
  $sto_maximo = $_POST["sto_maximo"];
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

     $Insert_productos = "INSERT INTO `productos`(`id_proveedor`, `id_marca`, `id_categoria`, `id_grupo`, `id_tip_impuesto`, `id_uni_medida`, `nom_producto`, `des_producto`, `fot_producto`, `pre_compra`, `pre_venta`, `pre_reventa`, `sto_minimo`,`sto_maximo`, `fec_registro`, `usr_registro`) 
     VALUES (:proveedor,:marca,:categoria,:grupo,:tip_impuesto,:uni_medida,:nom_producto,:des_producto,:fot_producto,:pre_compra,:pre_compra,:pre_venta,:sto_minimo,:sto_maximo,:Fecha,:Usr);
     SELECT @id_producto:=MAX(id_producto) FROM `productos`; ";

    $resultado = $conexion->prepare($Insert_productos);
    $resultado->execute(array(
      ":proveedor" => $proveedor,
      ":marca" => $marca,
      ":categoria" => $categoria,
      ":grupo" => $grupo,
      ":tip_impuesto" => $tip_impuesto,
      ":uni_medida" => $uni_medida,
      ":nom_producto" => $nom_producto,
      ":des_producto" => $des_producto,
      ":fot_producto" => $fot_producto,
      ":pre_compra" => $pre_compra,
      ":pre_venta" => $pre_venta,
      ":pre_reventa" => $pre_reventa,
      ":sto_minimo" => $sto_minimo,
      ":sto_maximo" => $sto_maximo,
      ":Fecha"=>$Fecha, 
      ":Usr"=>$Usr)); 

    echo "<h1> Succesfull Operation.  </h1>";

?>