<!--   CONEXION A LA BASE DE DATOS -->
<?php
include_once "bd/conexion.php"
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic Page Info -->
  <meta charset="utf-8">
  <title>Sistema de Facturación Inversiones Picky</title>

  <!-- Site favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-119386393-1');
  </script>
</head>

<body>
<!--**********SELECT DE LA BASE DE DATOS**********-->
<?php
  $tamano_pagina = 5;
  if (isset($_GET["pagina"])) {
      if ($_GET["pagina"] == 1) {
          header("Location:http://localhost/Sistemas_Inversione_Picki2/cargo.php");
      } else {
          $pagina = $_GET["pagina"];
      }

      
  } else {

      $pagina = 1;
  }
  $empezar_desde = ($pagina - 1) * $tamano_pagina;
  $sql_total = "SELECT * FROM `cargos`";
  $sql_total = "SELECT * FROM `tipos_empleado`";
  $sql_total = "SELECT * FROM `tipo_rol`";
  $resultado = $conexion->prepare($sql_total);
  $resultado->execute(array());
  $num_filas = $resultado->rowCount();
  $total_paginas = ceil($num_filas / $tamano_pagina);
  //************END PAGINADOR***************** */
  //************Select Para personas***************** */
  $registro_cargos = $conexion->query("SELECT * FROM `cargos` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
  $registro_tipos_empleado = $conexion->query("SELECT * FROM `tipos_empleado` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
  $registro_rol = $conexion->query("SELECT * FROM `tipo_rol` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
  ?>
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
                <h4>Configuración de Usuario</h4>
              </div>
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                </ol>
              </nav>
            </div>
            <div class="col-6 text-right">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  Agregar
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-item dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item " href="#" data-toggle="modal" data-target="#marca-modal">Jose</a>
                  </div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#small-modaladdbanco">Regimen de Facturación</a>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#small-modaladdEmpresa">Empresa</a>
              </div>
            </div>
          </div>
          </div>
        </div>
        <!-- Inicio del Contenido -->
        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
          <!-- TABLA CARGOS -->
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="card-box mb-30">
                <div class="pd-20">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="text-blue h4">Cargos</h4>
                    </div>
                    <div class="col-6 text-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCargo">Agregar</button>
                    </div>
                  </div>
                </div>
                <div class="pb-20">
                  <table class="data-table table stripe hover nowrap">
                    <thead>
                      <tr>
                        <th class="table-plus">N.º</th>
                        <th>Cargo</th>
                        <th class="datatable-nosort">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($registro_cargos as $cargos) : ?>
                      <tr>
                        <td class="table-plus"><?php echo $cargos->id_cargo?></td>
                        <td><?php echo $cargos->cargo?></td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Editar</a>
                              <a class="dropdown-item" href="bd/delete_cargo.php?id_cargo=<?php echo $cargos->id_cargo?>"><i class="dw dw-delete-3"></i>Eliminar</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--TIPOS EMPLEADOS-->
            <div class="col-md-6 col-sm-12">
              <div class="card-box mb-30">
                <div class="pd-20">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="text-blue h4">Tipos de Empleados</h4>
                    </div>
                    <div class="col-6 text-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTipoEm">Agregar</button>
                    </div>
                  </div>

                </div>
                <div class="pb-20">
                  <table class="data-table table stripe hover nowrap">
                    <thead>
                      <tr>
                        <th class="table-plus">N.º</th>
                        <th>Tipo de Empleado</th>
                        <th class="datatable-nosort">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($registro_tipos_empleado as $tipos_empleados) : ?>
                      <tr>
                        <td class="table-plus"><?php echo $tipos_empleados->id_tip_empleado?></td>
                        <td>
                        <?php echo $tipos_empleados->tipo_empleado?>
                        </td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Editar</a>
                              <a class="dropdown-item" href="bd/delete_tip_empleados.php?id_tip_empleado=<?php echo $tipos_empleados->id_tip_empleado?>"><i class="dw dw-delete-3"></i>Eliminar</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>        
        </div>
        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
        <!--TIPOS ROLES-->
        <div class="col-md-6 col-sm-12">
              <div class="card-box mb-30">
                <div class="pd-20">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="text-blue h4">Tipos de Roles</h4>
                    </div>
                    <div class="col-6 text-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalRol">Agregar</button>
                    </div>
                  </div>

                </div>
                <div class="pb-20">
                  <table class="data-table table stripe hover nowrap">
                    <thead>
                      <tr>
                        <th class="table-plus">N.º</th>
                        <th>Rol</th>
                        <th class="datatable-nosort">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($registro_rol as $tipo_rol) : ?>
                      <tr>
                        <td class="table-plus"><?php echo $tipo_rol->id_rol?></td>
                        <td>
                        <?php echo $tipo_rol->rol?>
                        </td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Editar</a>
                              <a class="dropdown-item" href="bd/delete_rol.php?id_rol=<?php echo $tipo_rol->id_rol?>"><i class="dw dw-delete-3"></i>Eliminar</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
           </div>
        <!--MODAL CARGO-->
          <div class="modal fade" id="modalCargo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Registrar cargo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" novalidate action="bd/insert_cargo.php" id="formCargo" name="formCargo" method="POST">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label for="cargo" >Cargo: <span class="text-red-50">*</span> </label>
                        <input type="text" class="form-control" id="cargo" name="cargo" required>
                        <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, rellena el campo</div>

                      </div>
                    </div>
                  </div>
                  <div class="text-right">
                    <button id="btnActionForm" type="submit" class="btn btn-success"><span id="btnTex">Registrar</span></button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--MODAL TIPO DE EMPLEADO-->
        <div class="modal fade" id="modalTipoEm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Registrar cargo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" novalidate action="bd/insert_tipo_empleado.php" id="formTipoEmpleado" name="formTipoEmpleado" method="POST">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label for="tipo_empleado" >Tipo de Empleado: <span class="text-red-50">*</span> </label>
                        <input type="text" class="form-control" id="tipo_empleado" name="tipo_empleado" required>
                        <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, rellena el campo</div>

                      </div>
                    </div>
                  </div>
                  <div class="text-right">
                    <button id="btnActionForm" type="submit" class="btn btn-success"><span id="btnTex">Registrar</span></button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
         <!--MODAL TIPO ROL-->
         <div class="modal fade" id="modalRol" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Registrar Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" novalidate  id="Agregargrupo" action="bd/insert_rol.php" id="formRol" name="formRol" method="POST">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label for="rol" >Rol: <span class="text-red-50">*</span> </label>
                        <input type="text" class="form-control" id="rol" name="rol" required>
                        <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, rellena el campo</div>
                      </div>
                    </div>
                  </div>
                  <div class="text-right">
                    <button id="btnActionForm" type="submit" class="btn btn-success"><span id="btnTex">Registrar</span></button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit
            Hingarajiya</a>
        </div>
     </div>
  </div>           
  <!-- js -->
  <script src="vendors/scripts/core.js"></script>
  <script src="vendors/scripts/script.min.js"></script>
  <script src="vendors/scripts/process.js"></script>
  <script src="vendors/scripts/layout-settings.js"></script>
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
  <script src="vendors/scripts/validaciones_modal.js"></script> 
</body>

</html>