<?php

 include_once "bd/conexion.php";
 
 $tamano_pagina = 10 ;
 if (isset($_GET["pagina"])) {
     if ($_GET["pagina"] == 1) {
         header("Location:HrsVOAE.php");
     }else {
         $pagina = $_GET["pagina"];
     }
 } else {
     $pagina = 1;
 }
 $empezar_desde = ($pagina - 1) * $tamano_pagina;
 $sql_total = "SELECT * FROM `cargos`";
 $resultado = $conexion->prepare($sql_total);
 $resultado->execute(array());
 $num_filas = $resultado->rowCount();
 $total_paginas = ceil($num_filas / $tamano_pagina);
 //************END PAGINADOR***************** */
 //************Select Para personas***************** */
 $registro_Cargo = $conexion->query("SELECT * FROM `cargos` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
 
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic Page Info -->
  <meta charset="utf-8">
  <title>Sistema de Facturación Picki</title>

  <!-- Site favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- CSS para la tabla -->
  <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
</head>

<body>

   
  <!-- Parte del menu principal -->
  <?php require("partes/parteMenu.php"); ?>
  <!-- Fin Parte del menu principal -->

  <div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
      <div class="min-height-200px">
        <div class="page-header">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="title">
                <h4>Empleados</h4>
              </div>
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
									<li class="breadcrumb-item active" aria-current="page">Agregar Empleado</li>
                </ol>
              </nav>
            </div>

          </div>
        </div>
       
        <!-- Simple Datatable End -->
        <div class="card-box mb-30">
          <div class="pd-20">
            <h4 class="text-blue h4">Registrar Empleado</h4>
            <form class="needs-validation" novalidate action="bd/insert_empleado.php" id="formEmpleado" name="formEmpleado" method="POST" >
              <div class="row">
                <div class="col-md-4 col-sm-12">
                    <p>Información Personal</p>
                  <!-- Nombre -->
                  <div class="form-group">
                  <label for="nombreEmpleado">Nombre: <span class="danger">*</span></label>
                      <input class="form-control form-control-lg" type="text" id="nombreEmpleado" name="nombreEmpleado">
                      <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, rellena el campo</div>
                   </div>
                  <!-- Apellido -->
                  <div class="form-group">
                      <label for="apellido">Apellido:</label>
                      <input type="text" class="form-control form-control-lg" id="apellido" name="apellido">
                      <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, rellena el campo</div>
                   </div>
                  <!-- Num ID -->
                  <div class="form-group">
                      <label for="identidad">Num. Identidad:</label>
                      <input type="text" class="form-control form-control-lg" id="identidad" name="identidad">
                   </div>
                  <!-- Edad -->
                  <div class="form-group">
                      <label for="edad">Edad:</label>
                      <input type="number" value="" class="form-control form-control-lg" id="edad" name="edad">
                   </div>
                  <!-- Fecha Nacimiento -->
                  <div class="form-group">
                      <label for="nacimiento">Fecha de Nacimiento:</label>
                      <input type="date" class="form-control form-control-lg" id="nacimiento" name="nacimiento">
                   </div>
                  <!-- Genero -->
                  <div class="form-group">
                      <label for="genero">Género:</label>
                      <select class="form-control form-control-lg" id="genero" name="genero">
                        <option></option>
                        <option>Femenino</option>
                        <option>Masculino</option>
                        <option>Otro</option>
                      </select>
                   </div> 
                
                  <!--Correo -->
                  <div class="form-group">
                      <label for="correo">Correo Electrónico: </label>
                      <input type="email" class="form-control form-control-lg" id="correo" name="correo">
                   </div>
                  <!-- Telefono -->
                  <div class="form-group">
                      <label for="telefono">Teléfono: </label>
                      <input type="text" class="form-control form-control-lg" id="telefono" name="telefono">
                 </div>
                  <!-- Direccion -->
                  <div class="form-group">                   
                      <label for="direccion">Dirección:</label>
                      <textarea class="form-control" name="direccion" id="direccion" cols="30" rows="10" style="resize:vertical; height: 140px;"></textarea>
                   </div>
                </div>
                <div class="col-md-4 col-sm-12">
                 
                   <p>Información de Empleo</p>

                  <!-- Salario -->
                  <div class="form-group">
                      <label for="salario">Salario: </label>
                      <input type="text" class="form-control form-control-lg" id="salario" name="salario">
                 </div>
                  <!-- Cargo -->
                  <div class="form-group">
                    <div class="form-group">
                      <label for="cargo">Cargo:</label>
                      <select class="form-control form-control-lg" id="cargo" name="cargo">
                      <option selected=""></option>
                      <?php

                        $Cod_cargo = $conexion->query("SELECT * FROM `cargos`")->fetchAll(PDO::FETCH_OBJ);
                        foreach($Cod_cargo as $Cargo) : 

                          echo '<option value = " '.$Cargo->id_cargo.' ">' .$Cargo->cargo. '</option>';
                        endforeach;
                        
                      ?>
                     </select>
                     </div>
                  </div>
                  <!-- Tipo Empleado -->
                  <div class="form-group">
                    <label for="tipo">Tipo de Empleado:</label>
                      <select class="form-control form-control-lg" id="tipo" name="tipo">
                         <option selected=""></option>
                         <!--Jalar datos de db -->
                         <?php

                            $Cod_Empleado = $conexion->query("SELECT * FROM `tipos_empleado`")->fetchAll(PDO::FETCH_OBJ);
                            foreach($Cod_Empleado as $Tipo_empleado) : 

                            echo '<option value = " '.$Tipo_empleado->id_tip_empleado.' ">' .$Tipo_empleado->tipo_empleado. '</option>';
                           endforeach;
                        
                          ?>
                     </select>
                  </div>
                   <!-- Fecha Ingreso -->
                   <div class="form-group">
                      <label for="ingreso">Fecha de Ingreso: </label>
                      <input type="date" class="form-control form-control-lg" id="ingreso" name="ingreso">
                   </div>
                    <!-- Fecha Salida -->
                   <div class="form-group">
                      <label for="salida">Fecha de Salida: </label>
                      <input type="date" class="form-control form-control-lg" id="salida" name="salida">
                   </div>
                   <!-- Estatus -->
                   <div class="form-group">
                      <label for="estatus">Estatus:</label>
                      <select class="form-control form-control-lg" id="estatus" name="estatus">
                       <option selected=""></option>
                          <option value="1">Activo</option>
                          <option value="2">Inactivo</option>                    
                      </select>
                   </div>
                   <!-- Foto -->
                   <div class="form-group">
                     <label for="foto">Foto: </label>
                     <input type="file" class="form-control-file border form-control-lg" name="foto" id="foto">
                  </div>
                 
                </div>
                <div class="col-md-4 col-sm-12">
                  <p>Usuario</p>
                   <!-- Rol -->
                   <div class="form-group">
                      <label for="rol">Rol de Usuario:</label>
                      <select class="form-control form-control-lg" id="rol" name="rol">
                        <option selected=""></option>
                        <!--Jalar datos de db -->                      
                        <?php

                          $Cod_Rol = $conexion->query("SELECT * FROM `tipo_rol`")->fetchAll(PDO::FETCH_OBJ);
                          foreach($Cod_Rol as $Rol) : 

                          echo '<option value = " '.$Rol->id_rol.' ">' .$Rol->rol. '</option>';
                          endforeach;

                        ?>
                     </select>
                   </div>
                  <!-- Usuario -->
                  <div class="form-group">
                     <label for="usuario">Nombre de Usuario: </label>
                     <input type="text" class="form-control form-control-lg" id="usuario" name="usuario">
                 </div> 
                 <!-- Contraseña -->
                 <div class="form-group">
                     <label for="password">Password: </label>
                     <input type="text" class="form-control form-control-lg" id="password" name="password">
                 </div> 
                 <!--Pregunta 1 -->
                 <div class="form-group">
                     <label for="pregunta1">Pregunta de Seguridad 1:</label>
                     <select class="form-control form-control-lg" id="pregunta1" name="pregunta1">
                       <option selected=""></option>
                        <!--Jalar datos de db -->                      
                        <?php

                          $Cod_Preguntas = $conexion->query("SELECT * FROM `preguntas_seguridad`")->fetchAll(PDO::FETCH_OBJ);
                          foreach($Cod_Preguntas as $Preguntas) : 

                          echo '<option value = " '.$Preguntas->id_preg_seg.' ">' .$Preguntas->preguntas. '</option>';
                          endforeach;

                        ?>
                     </select>
                   </div> 
                   <div class="form-group">
                      <label for="Respuesta1">Respuesta 1: </label>
                      <input type="text" class="form-control form-control-lg" id="Respuesta1" name="Respuesta1">
                  </div>
                   
                 <!--Pregunta 2 -->
                 <div class="form-group">
                     <label for="pregunta2">Pregunta de Seguridad 2:</label>
                     <select class="form-control form-control-lg" id="pregunta2" name="pregunta2">
                        <option selected=""></option>
                        <!--Jalar datos de db -->                      
                        <?php

                          $Cod_Preguntas = $conexion->query("SELECT * FROM `preguntas_seguridad`")->fetchAll(PDO::FETCH_OBJ);
                          foreach($Cod_Preguntas as $Preguntas) : 

                          echo '<option value = " '.$Preguntas->id_preg_seg.' ">' .$Preguntas->preguntas. '</option>';
                          endforeach;


                        ?>
                     </select>
                 </div> 
                 <div class="form-group">
                      <label for="Respuesta2">Respuesta 2: </label>
                      <input type="text" class="form-control form-control-lg" id="Respuesta1" name="Respuesta2">
                  </div>
                  <div class="centrado">
                     <input type="submit" class="btn btn-success" value="Guardar">
                 </div>
                </div>
               
              </div>
            </form>
            
          </div>
        </div>
      </div>
      <!-- Inicio de footer -->
      <?php require("partes/parteFooter.php"); ?>
      <!-- Fin de footer -->
    </div>
  </div>

  <!-- js -->
  <script src="vendors/scripts/core.js"></script>
  <script src="vendors/scripts/script.min.js"></script>
  <script src="vendors/scripts/process.js"></script>
  <script src="vendors/scripts/layout-settings.js"></script>
  <!-- js para la tabla -->
  <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
  <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
  <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
  <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
  <!-- buttons for Export datatable -->
  <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
  <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
  <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
  <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
  <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
  <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
  <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
  <!-- Datatable Setting js -->
  <script src="vendors/scripts/datatable-setting.js"></script>
      <!-- add sweet alert js & css in footer -->
      <link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css">
    <script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
    <script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>

    <!-- Datatable Setting js -->
    <script src="vendors/scripts/datatable-setting.js"></script>
    <script src="vendors/scripts/validaciones_modal.js"></script> 
  </script>
</body>
</body>

</html>