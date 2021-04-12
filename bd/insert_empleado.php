<?php

   include_once "conexion.php";

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
   $rol = $_POST["rol"];
   $Usuario_empleado = $_POST["usuario"];
   $Password_empleado = $_POST["password"];
   $Pregunta1 = $_POST["pregunta1"];
   $Respuesta1 = $_POST["Respuesta1"];
   $Pregunta2 = $_POST["pregunta2"];
   $Respuesta2 = $_POST["Respuesta2"];
   $Fecha = date("Y-m-d H:i:s");
   $Usr = "Root--HELLEN";
  

   $Insert_Empleado= "INSERT INTO `personas`(`num_id_persona`, `nom_persona`, `ape_persona`, `eda_persona`, `fec_na_persona`, `gen_persona`, `fec_registro`, `usr_registro`) 
                      VALUES (:Identidad_empleado,:Nombre_empleado, :Apellido_empleado,:Edad_empleado,:Nacimiento_empleado,:Genero_empleado,:Fecha,:Usr);
                      SELECT @id_persona := MAX(id_persona) FROM `personas`;

                      INSERT INTO `correos`(`correo`, `fec_registro`, `usr_registro`) 
                      VALUES (:Correo_empleado,:Fecha,:Usr);
                      SELECT @id_correo := MAX(id_correo) FROM `correos`;
                      INSERT INTO `rel_correos_persona`(`id_correo`, `id_persona`) 
                      VALUES (@id_correo,@id_persona);

                      INSERT INTO `telefonos`(`telefono`, `fec_registro`, `usr_registro`)
                      VALUES ( :Telefono_empleado,:Fecha,:Usr);
                      SELECT @id_telefono := MAX(id_telefono) FROM `telefonos`;
                      INSERT INTO `rel_telefonos_persona`(`id_telefono`, `id_persona`) 
                      VALUES (@id_telefono,@id_persona);

                     INSERT INTO `direcciones`(`direccion`, `fec_registro`, `usr_registro`) 
                     VALUES (:Direccion_empleado,:Fecha,:Usr);
                     SELECT @id_direccion := MAX(id_direccion) FROM `direcciones`;
                     INSERT INTO `rel_direcciones_persona`(`id_direccion`, `id_persona`) 
                     VALUES (@id_direccion,@id_persona); 

                     INSERT INTO `empleados`(`id_persona`,`fot_empleado`, `sal_empleado`, `id_cargo`, `id_tip_empleado`, `fec_ingreso`, `fec_salida`,`est_empleado`,`fec_registro`,`usr_registro`)   
                     VALUES(@id_persona,:Foto_empleado,:Salario_empleado,:Cargo_empleado, :Tipo_empleado, :Ingreso_empleado,:Salida_empleado,:Status_empleado,:Fecha,:Usr);
                                         
                     INSERT INTO `usuario`(`id_persona`,`id_rol`, `nom_usuario`, `pass_usuario`, `fec_registro`, `usr_registro`) 
                     VALUES (@id_persona,:rol,:Usuario_empleado,:Password_empleado,:Fecha,:Usr);
                     SELECT @id_usuario := MAX(id_usuario) FROM `usuario`;
                     
                     INSERT INTO `respuestas_seguridad`(`id_usuario`, `id_preg_seg`, `respuesta`) 
                     VALUES (@id_usuario,:Pregunta1,:Respuesta1); 

                     INSERT INTO `respuestas_seguridad`(`id_usuario`, `id_preg_seg`, `respuesta`) 
                     VALUES (@id_usuario,:Pregunta2,:Respuesta2); ";

    $resultado = $conexion->prepare($Insert_Empleado);
    $resultado->execute(array(
    ":Identidad_empleado" => $Identidad_empleado,
    ":Nombre_empleado" =>  $Nombre_empleado,
    ":Apellido_empleado" =>  $Apellido_empleado,
    ":Edad_empleado" =>  $Edad_empleado,
    ":Nacimiento_empleado" => $Nacimiento_empleado,
    ":Genero_empleado" => $Genero_empleado,
    ":Correo_empleado" => $Correo_empleado,
    ":Telefono_empleado" => $Telefono_empleado,
    ":Direccion_empleado" => $Direccion_empleado,
    ":Foto_empleado" =>  $Foto_empleado,
    ":Salario_empleado" => $Salario_empleado,
    ":Cargo_empleado" =>  $Cargo_empleado,
    ":Tipo_empleado" => $Tipo_empleado,
    ":Ingreso_empleado" => $Ingreso_empleado,
    ":Salida_empleado" => $Salida_empleado,
    ":Status_empleado" => $Status_empleado,
    ":rol" => $rol,
    ":Usuario_empleado" => $Usuario_empleado,
    ":Password_empleado" => $Password_empleado,
    ":Pregunta1" => $Pregunta1,
    ":Respuesta1" =>  $Respuesta1,
    ":Pregunta2" => $Pregunta2,
    ":Respuesta2" =>  $Respuesta2,
    ":Fecha"=>$Fecha, 
    ":Usr"=>$Usr));

    header("Location:../add_empleado.php");

?>