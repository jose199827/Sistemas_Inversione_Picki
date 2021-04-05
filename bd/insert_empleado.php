<?php

   include_once "conexion.php";

   $Cod_Empleado = $_POST["EstudianteHrsvoae"];
   $Nombre_empleado = $_POST["nombreEmpleado"];
   $Apellido_empleado = $_POST["apellido"];
   $Identidad_empleado = $_POST["identidad"];
   $Edad_empleado = $_POST["edad"];
   $Nacimiento_empleado = $_POST["nacimiento"];
   $Genero_empleado = $_POST["genero"];
   $Correo_empleado = $_POST["correo"];
   $Telefono_empleado = $_POST["telefono"];
   $Direccion_empleado = $_POST["direccion"];
   $Salario_empleado = $_POST["salario"];
   $Cargo_empleado = $_POST["cargo"];
   $Tipo_empleado = $_POST["tipo"];
   $Ingreso_empleado = $_POST["ingreso"];
   $Salida_empleado = $_POST["salida"];
   $Status_empleado = $_POST["estatus"];
   $Foto_empleado = $_POST["foto"];
   $id_rol = $_POST[""];
   $Usuario_empleado = $_POST["usuario"];
   $Paswsword_empleado = $_POST["password"];
   $Pregunta1_empleado = $_POST["pregunta1"];
   $Pregunta2_empleado = $_POST["pregunta2"];
  

   $Insert_Empleado= "INSERT INTO `personas`(`num_id_persona`, `nom_persona`, `ape_persona`, `eda_persona`, `fec_na_persona`, `gen_persona`, `fec_registro`, `usr_registro`) 
                      VALUES ($Identidad_empleado,$Nombre_empleado, $Apellido_empleado,$Edad_empleado,$Nacimiento_empleado,$Genero_empleado,now(),usr_registro_);
                      SELECT @id_persona := MAX(id_persona) FROM `personas`;
   
                      INSERT INTO `correos`(`correo`, `fec_registro`, `usr_registro`) 
                      VALUES ($Correo_empleado,now(),usr_registro_);
                      SELECT @id_correo := MAX(id_correo) FROM `correos`;
                      INSERT INTO `rel_correos_persona`(`id_correo`, `id_persona`) 
                      VALUES (@id_correo,@id_persona);
   
                      INSERT INTO `telefonos`(`telefono`, `fec_registro`, `usr_registro`)
                      VALUES ( $Telefono_empleado,now(),usr_registro_);
                      SELECT @id_telefono := MAX(id_telefono) FROM `telefonos`;
                      INSERT INTO `rel_telefonos_persona`(`id_telefono`, `id_persona`) 
                      VALUES (@id_telefono,@id_persona);
   
                      INSERT INTO `direcciones`(`direccion`, `fec_registro`, `usr_registro`) 
                      VALUES ( $Direccion_empleado,now(),usr_registro_);
                      SELECT @id_direccion := MAX(id_direccion) FROM `direcciones`;
                      INSERT INTO `rel_direcciones_persona`(`id_direccion`, `id_persona`) 
                      VALUES (@id_direccion,@id_persona);
   
                      INSERT INTO `empleados`(`id_persona`,`fot_empleado`, `sal_empleado`, `id_cargo`, `id_tip_empleado`, `fec_ingreso`, `fec_salida`,`est_empleado`,`fec_registro`,`usr_registro`)   
                      VALUES(@id_persona,$Foto_empleado,$Salario_empleado,$Cargo_empleado, $Tipo_empleado, $Ingreso_empleado, $Salida_empleado,$Status_empleado,now(),usr_registro_);
   
                     INSERT INTO `usuario`(`id_persona`,`id_rol`, `nom_usuario`, `pass_usuario`, `last_session`, `activacion`, `token`, `token_password`, `pass_request`, `fec_registro`, `usr_registro`) 
                     VALUES (@id_persona,id_rol_,$Usuario_empleado,$Paswsword_empleado,last_session_,activacion_,token_,token_password_,pass_request_,now(),usr_registro_);
                     
                     INSERT INTO `preguntas_seguridad`(`id_preg_seg`, `pregunta_1`, `pregunta_2`, `pregunta_3`) VALUES ([value-1],[value-2],[value-3],[value-4]);
                     ";
    
    $resultado = $conexion->prepare($Insert_empleado);
    $resultado->execute();

    header("Location:../HrsVOAE.php");

?>