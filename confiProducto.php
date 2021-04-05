<!--   CONEXION A LA BASE DE DATOS -->
<?php
include_once "bd/conexion.php"
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
  <style>
    .error {
      background-color: #ff9184;
      font-size: 12px;
      padding: 10px;
    }

    .correcto {
      background-color: #a0dea7;
      font-size: 12px;
      padding: 10px;
    }
  </style>
</head>

<body>
<!--**********SELECT DE LA BASE DE DATOS**********-->
<?php
  $tamano_pagina = 5;
  if (isset($_GET["pagina"])) {
      if ($_GET["pagina"] == 1) {
          header("Location:http://localhost/Sistemas_Inversione_Picki/confiProducto.php");
      } else {
          $pagina = $_GET["pagina"];
      }

      
  } else {

      $pagina = 1;
  }
  $empezar_desde = ($pagina - 1) * $tamano_pagina;
  $sql_total = "SELECT * FROM `marcas`";
  $sql_total = "SELECT * FROM `categorias`";
  $sql_total = "SELECT * FROM `grupos`";
  $sql_total = "SELECT * FROM `unidades_medidas`";
  $sql_total = "SELECT * FROM `tipos_impuestos`";
  $resultado = $conexion->prepare($sql_total);
  $resultado->execute(array());
  $num_filas = $resultado->rowCount();
  $total_paginas = ceil($num_filas / $tamano_pagina);
  //************END PAGINADOR***************** */
  //************Select Para personas***************** */
  $registro_marcas = $conexion->query("SELECT * FROM `marcas` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
  $registro_categorias = $conexion->query("SELECT * FROM `categorias` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
  $registro_grupos = $conexion->query("SELECT * FROM `grupos` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
  $registro_unidades_medidas = $conexion->query("SELECT * FROM `unidades_medidas` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
  $registro_impuestos = $conexion->query("SELECT * FROM `tipos_impuestos` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
  ?>

  <!-- Parte del menu principal -->
  <?php require("partes/parteMenu.php"); ?>
  <!-- Fin Parte del menu principal -->

  <div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
      <div class="min-height-200px">
        <div class="page-header">
          <div class="row">
            <div class="col-6">
              <div class="title">
                <h4>Configuración</h4>
              </div>
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Configuración</a></li>
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
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#marca-modal">Marca</a>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#categoria-modal">Categoria</a>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#grupo-modal">Grupo</a>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#unidadMedida-modal">Unidad Medida</a>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#impuesto-modal">Impuesto</a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- Inicio del Contenido -->
        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
          <!-- Simple Datatable start -->
          <!-- TABLA DE MARCAS-->
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="card-box mb-30">
                <div class="pd-20">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="text-blue h4">Tabla de Marcas</h4>
                    </div>
                    <div class="col-6 text-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#marca-modal">Agregar</button>
                    </div>
                  </div>
                </div>
                <div class="pb-20">
                  <table class="data-table table stripe hover nowrap">
                    <thead>
                      <tr>
                        <th class="table-plus">N.º</th>
                        <th>Marca</th>
                        <th class="datatable-nosort">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($registro_marcas as $marcas) : ?>
                      <tr>
                        <td class="table-plus"><?php echo $marcas->id_marca?></td>
                        <td><?php echo $marcas->marca?></td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> Vista</a>
                              <a class="dropdown-item" href="bd/update_marca.php" id="<?php echo $marcas->id_marca?>"><i class="dw dw-edit2"></i> Editar</a>
                              <a class="dropdown-item" href="bd/delete_marcas.php?id_marca=<?php echo $marcas->id_marca?>"><i class="dw dw-delete-3"></i>Eliminar</a>
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
            <!--TABLE DE CATEGORIAS-->
            <div class="col-md-6 col-sm-12">
              <div class="card-box mb-30">
                <div class="pd-20">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="text-blue h4">Tabla de Categorias</h4>
                    </div>
                    <div class="col-6 text-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoria-modal">Agregar</button>
                    </div>
                  </div>

                </div>
                <div class="pb-20">
                  <table class="data-table table stripe hover nowrap">
                    <thead>
                      <tr>
                        <th class="table-plus">N.º</th>
                        <th>Categoria</th>
                        <th class="datatable-nosort">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($registro_categorias as $categorias) : ?>
                      <tr>
                        <td class="table-plus"><?php echo $categorias->id_categoria?></td>
                        <td>
                        <?php echo $categorias->categoria?>
                        </td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                              <a class="dropdown-item" href="bd/delete_categoria.php?id_categoria=<?php echo $categorias->id_categoria?>"><i class="dw dw-delete-3"></i>Eliminar</a>
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
          <!-- Simple Datatable start -->
          <!--TABLA DE GRUPOS -->
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="card-box mb-30">
                <div class="pd-20">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="text-blue h4">Tabla de Grupos</h4>
                    </div>
                    <div class="col-6 text-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#grupo-modal">Agregar</button>
                    </div>
                  </div>
                </div>
                <div class="pb-20">
                  <table class="data-table table stripe hover nowrap">
                    <thead>
                      <tr>
                        <th class="table-plus">N.º</th>
                        <th>Grupo</th>
                        <th class="datatable-nosort">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($registro_grupos as $grupos) : ?>
                      <tr>
                        <td class="table-plus"><?php echo $grupos->id_grupo?></td>
                        <td><?php echo $grupos->grupo?></td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                              <a class="dropdown-item" href="bd/delete_grupos.php?id_grupo=<?php echo $grupos->id_grupo?>"><i class="dw dw-delete-3"></i> Delete</a>
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
            <!--TABLA UNIDADES MEDIDAS-->
            <div class="col-md-6 col-sm-12">
              <div class="card-box mb-30">
                <div class="pd-20">
                  <div class="pd-20">
                    <div class="row">
                      <div class="col-6">
                        <h4 class="text-blue h4">Tabla de Unidades Medidas</h4>
                      </div>
                      <div class="col-6 text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#unidadMedida-modal">Agregar</button>
                      </div>
                    </div>
                  </div>
                  <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                      <thead>
                        <tr>
                          <th class="table-plus">N.º</th>
                          <th>Unidad</th>
                          <th class="datatable-nosort">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($registro_unidades_medidas as $unidades_medidas) : ?>
                        <tr>
                          <td class="table-plus"><?php echo $unidades_medidas->id_uni_medida?></td>
                          <td>
                          <?php echo $unidades_medidas->uni_medida?>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="bd/delete_uni_medidas.php?id_uni_medida=<?php echo $unidades_medidas->id_uni_medida?>"><i class="dw dw-delete-3"></i> Delete</a>
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
        </div>
        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
          <!-- TABLA DE IMPUESTOS -->
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="card-box mb-30">
                <div class="pd-20">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="text-blue h4">Tabla de Impuestos</h4>
                    </div>
                    <div class="col-6 text-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#impuesto-modal">Agregar</button>
                    </div>
                  </div>
                </div>
                <div class="pb-20">
                  <table class="data-table table stripe hover nowrap">
                    <thead>
                      <tr>
                        <th class="table-plus">N.º</th>
                        <th>Nombre Impuestos</th>
                        <th>Porcentaje</th>
                        <th class="datatable-nosort">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($registro_impuestos as $impuestos) : ?>
                      <tr>
                        <td class="table-plus"><?php echo $impuestos->id_tip_impuestos?></td>
                        <td><?php echo $impuestos->nom_isv?></td>
                        <td><?php echo $impuestos->porcentaje?></td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                              <a class="dropdown-item" href="bd/delete_impuestos.php?id_tip_impuestos=<?php echo $impuestos->id_tip_impuestos?>"><i class="dw dw-delete-3"></i> Delete</a>
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
        </div>

        <!-- Apartado de modales -->
        <!-- Modal de Marca -->
        <div class="modal fade" id="marca-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Registrar Marca</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" novalidate action="bd/insert_marcas.php" id="formMarca" name="formMarca" method="POST">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label for="marca">Marca: <span class="text-red-50">*</span> </label>
                        <input type="text" id="marca" name="marca" class="form-control" required>
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

        <!-- Modal de Categoria -->
        <div class="modal fade" id="categoria-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Registrar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" novalidate action="bd/insert_categoria.php" id="fromCategoria" name="fromCategoria" method="POST">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label for="categoria">Categorias: <span class="text-red-50">*</span> </label>
                        <input type="text" id="categoria" name="categoria" class="form-control" required>
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

        <!-- Modal de Grupo -->
        <div class="modal fade" id="grupo-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Registrar Grupo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" novalidate action="bd/insert_grupos.php" id="formGrupo" name="formGrupo" method="POST">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label for="grupo" >Grupo: <span class="text-red-50">*</span> </label>
                        <input type="text" class="form-control" id="grupo" name="grupo" required>
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

        <!-- Modal de Unidad Medida -->
        <!-- Modal de Unidad Medida -->
        <div class="modal fade" id="unidadMedida-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Registrar Unidad Medida</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" novalidate id="formMedida" name="formMedida" action="bd/insert_uni_medidas.php" method="POST">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label for="uni_medida">Unidad: <span class="text-red-50">*</span> </label>
                        <input type="text" class="form-control" id="uni_medida" name="uni_medida" required>
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

        <!-- Modal de Impuestos -->
        <div class="modal fade" id="impuesto-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Registrar Impuestos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" novalidate action="bd/insert_impuestos.php" id="formImpuesto" name="formImpuesto" method="POST">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <!-- Nombre del producto -->
                      <div class="form-group">
                        <label for="nom_isv">Nombre de Impuesto: <span class="text-red-50">*</span> </label>
                        <input type="text" id="nom_isv" name="nom_isv" class="form-control" required>
                        <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, rellena el campo</div>

                      </div>
                      <div class="form-group">
                        <label for="porcentaje">Porcentaje Impuesto: <span class="text-red-50">*</span> </label>
                        <input type="number" id="porcentaje" name="porcentaje" class="form-control" min="0" max="100" required>
                        <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, valores mayores a 0</div>

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
        <!-- Fin apartado de modales -->


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
    <!-- add sweet alert js & css in footer -->
    <link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css">
    <script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
    <script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>

    <!-- Datatable Setting js -->
    <script src="vendors/scripts/datatable-setting.js"></script>
    <script src="vendors/scripts/validaciones_modal.js"></script> 
    
</body>
</body>

</html>