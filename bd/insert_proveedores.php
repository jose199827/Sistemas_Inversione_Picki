<?php

include_once "conexion.php";

  $rtn_empresa = $_POST["rtnempresa"];
  $nom_empresa = $_POST["nomempresa"];
  $con_empresa = $_POST["conempresa"];
  $banco = $_POST["banco"];
  $num_cuenta = $_POST["numcuenta"];
  $correo = $_POST["correo"];
  $telefono = $_POST["telefono"];
  $direccion = $_POST["direccion"];
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

     $Insert_proveedores = "INSERT INTO `proveedores`(`rtn_empresa`, `nom_empresa`, `con_empresa`, `id_banco`, `num_cuenta`, `fec_registro`, `usr_registro`) 
     VALUES (:rtn_empresa,:nom_empresa,:con_empresa,:banco,:num_cuenta,:Fecha,:Usr);
     SELECT @id_proveedor:=MAX(id_proveedor) FROM `proveedores`; 

     INSERT INTO `correos`(`correo`, `fec_registro`, `usr_registro`) 
     VALUES (:correo,:Fecha,:Usr);
     SELECT @id_correo := MAX(id_correo) FROM `correos`;
     INSERT INTO `rel_correo_proveedores`(`id_correo`, `id_proveedor`) 
     VALUES (@id_correo,@id_proveedor);

     INSERT INTO `telefonos`(`telefono`, `fec_registro`, `usr_registro`)
     VALUES ( :telefono,:Fecha,:Usr);
     SELECT @id_telefono := MAX(id_telefono) FROM `telefonos`;
     INSERT INTO `rel_telefonos_proveedores`(`id_telefono`, `id_proveedor`) 
     VALUES (@id_telefono,@id_proveedor);

     INSERT INTO `direcciones`(`direccion`, `fec_registro`, `usr_registro`) 
     VALUES (:direccion,:Fecha,:Usr);
     SELECT @id_direccion := MAX(id_direccion) FROM `direcciones`;
     INSERT INTO `rel_direcciones_proveedores`(`id_direccion`, `id_proveedor`) 
     VALUES (@id_direccion,@id_proveedor);";

    $resultado = $conexion->prepare($Insert_proveedores);
    $resultado->execute(array(
      ":rtn_empresa" => $rtn_empresa,
      ":nom_empresa" => $nom_empresa,
      ":con_empresa" => $con_empresa,
      ":banco" => $banco,
      ":num_cuenta" => $num_cuenta,
      ":correo" => $correo,
      ":telefono" => $telefono,
      ":direccion" => $direccion,
      ":Fecha"=>$Fecha, 
      ":Usr"=>$Usr)); 

    header("Location:../TablaProveedores.php");
    echo "<h1> Succesfull Operation.  </h1>";

?>