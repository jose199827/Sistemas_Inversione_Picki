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
                <h4>Productos</h4>
              </div>
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                </ol>
              </nav>
            </div>

          </div>
        </div>
        <!-- Inicio del Contenido -->
        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
          <!-- Simple Datatable start -->
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="card-box mb-30">
                <div class="pd-20">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="text-blue h4">Tabla de Marcas</h4>
                    </div>
                    <div class="col-6 text-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">Agregar</button>
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
                      <tr>
                        <td class="table-plus">1</td>
                        <td>Samsung</td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-plus">2</td>
                        <td>LG</td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="card-box mb-30">
                <div class="pd-20">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="text-blue h4">Tabla de Categorias</h4>
                    </div>
                    <div class="col-6 text-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">Agregar</button>
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
                      <tr>
                        <td class="table-plus">1</td>
                        <td>
                          Hogar
                        </td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-plus">2</td>
                        <td>Niños</td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
          <!-- Simple Datatable start -->
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="card-box mb-30">
                <div class="pd-20">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="text-blue h4">Tabla de Grupos</h4>
                    </div>
                    <div class="col-6 text-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">Agregar</button>
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
                      <tr>
                        <td class="table-plus">1</td>
                        <td>Samsung</td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-plus">2</td>
                        <td>LG</td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="card-box mb-30">
                <div class="pd-20">

                  <div class="pd-20">
                    <div class="row">
                      <div class="col-6">
                        <h4 class="text-blue h4">Tabla de Unidades Medidas</h4>
                      </div>
                      <div class="col-6 text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">Agregar</button>
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
                        <tr>
                          <td class="table-plus">1</td>
                          <td>
                            Hogar
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="table-plus">2</td>
                          <td>Niños</td>
                          <td>
                            <div class="dropdown">
                              <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
          <!-- Simple Datatable start -->
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="card-box mb-30">
                <div class="pd-20">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="text-blue h4">Tabla de Impuestos</h4>
                    </div>
                    <div class="col-6 text-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#small-modal">Agregar</button>
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
                      <tr>
                        <td class="table-plus">1</td>
                        <td>Impuesto Sobre la venta (15%)</td>
                        <td>15</td>
                        <td>
                          <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="card-box mb-30">
          <div class="pd-20">
            <h4 class="text-blue h4">Registrar Marca</h4>
            <form>
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <!-- Nombre del producto -->
                  <div class="form-group">
                    <label>Marca: <span class="text-red-50">*</span> </label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="pd-20">
            <h4 class="text-blue h4">Registrar Categorias</h4>
            <form>
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <!-- Nombre del producto -->
                  <div class="form-group">
                    <label>Categorias: <span class="text-red-50">*</span> </label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="pd-20">
            <h4 class="text-blue h4">Registrar Grupo</h4>
            <form>
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <!-- Nombre del producto -->
                  <div class="form-group">
                    <label>Grupo: <span class="text-red-50">*</span> </label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="pd-20">
            <h4 class="text-blue h4">Registrar Unidad de Medida</h4>
            <form>
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <!-- Nombre del producto -->
                  <div class="form-group">
                    <label>Unidad: <span class="text-red-50">*</span> </label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="pd-20">
            <h4 class="text-blue h4">Registrar Impuestos</h4>
            <form>
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <!-- Nombre del producto -->
                  <div class="form-group">
                    <label>Nombre de Impuesto: <span class="text-red-50">*</span> </label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Porcentaje Impuesto: <span class="text-red-50">*</span> </label>
                    <input type="number" class="form-control" min="0" max="100">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 mb-30">
          <div class="pd-20 card-box height-100-p">
            <h5 class="h4">Small ASDASDADASDS</h5>
            <a href="#" class="btn-block" data-toggle="modal" data-target="#small-modal" type="button">
              <img src="vendors/images/modal-img3.jpg" alt="modal">
            </a>
            <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Registrar Impuestos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <!-- Nombre del producto -->
                          <div class="form-group">
                            <label>Nombre de Impuesto: <span class="text-red-50">*</span> </label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Porcentaje Impuesto: <span class="text-red-50">*</span> </label>
                            <input type="number" class="form-control" min="0" max="100">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
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
    </script>
</body>
</body>

</html>