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
          <div class="card-box mb-30">
            <div class="pd-20">
              <h4 class="text-blue h4">Tabla de Productos</h4>
            </div>
            <div class="pb-20">
              <table class="table hover multiple-select-row data-table-export nowrap">
                <thead>
                  <tr>
                    <th class="table-plus">N.º</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th class="datatable-nosort">Foto</th>
                    <th>Precio</th>
                    <th class="datatable-nosort">Aciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="table-plus">Aspiradora</td>
                    <td>Aspiradora Multiuso Truper 110V 8 Galones</td>
                    <td>
                      <img src="vendors/images/product-1.jpg" width="40" height="40" alt="">
                    </td>
                    <td>3100</td>
                    <td>
                      <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                          <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                          <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> Ver</a>
                          <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Editar</a>
                          <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Eliminar</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="table-plus">Aceite de Barba</td>
                    <td>Aceite de Barba Hush en envase de 240ml.</td>
                    <td>
                      <img src="vendors/images/product-2.jpg" width="40" height="40" alt="">
                    </td>
                    <td>150</td>
                    <td>
                      <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                          <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                          <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> Ver</a>
                          <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Editar</a>
                          <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Eliminar</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Simple Datatable End -->
        <div class="card-box mb-30">
          <div class="pd-20">
            <h4 class="text-blue h4">Registrar Producto</h4>
            <form>
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <!-- Nombre del producto -->
                  <div class="form-group">
                    <label>Nombre de Producto: <span class="text-red-50">*</span> </label>
                    <input type="text" class="form-control">
                  </div>
                  <!-- Descripción -->
                  <div class="form-group">
                    <label>Descripción: </label>
                    <textarea class="form-control" name="" id="" cols="30" rows="10" style="resize:vertical; height: 140px;"></textarea>
                  </div>
                  <!-- Proveedor -->
                  <div class="form-group">
                    <label>Proveedor: <span class="text-red-50">*</span></label>
                    <select class="form-control" name="" id=""></select>
                  </div>
                  <!-- Marca -->
                  <div class="form-group">
                    <label>Marca: <span class="text-red-50">*</span></label>
                    <select class="form-control" name="" id=""></select>
                  </div>
                  <!-- Categoria -->
                  <div class="form-group">
                    <label>Categoria: </label>
                    <select class="form-control" name="" id=""></select>
                  </div>
                  <!-- Grupo -->
                  <div class="form-group">
                    <label>Grupo: </label>
                    <select class="form-control" name="" id=""></select>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12">
                  <!-- Precio Compra del producto -->
                  <div class="form-group">
                    <label>Precio de costo: <span class="text-red-50">*</span> </label>
                    <input type="number" min="1" class="form-control">
                  </div>
                  <!-- Precio Venta del producto -->
                  <div class="form-group">
                    <label>Precio de Venta: <span class="text-red-50">*</span> </label>
                    <input type="number" min="1" class="form-control">
                  </div>
                  <!-- Isv -->
                  <div class="form-group">
                    <label>Isv: <span class="text-red-50">*</span></label>
                    <select class="form-control" name="" id=""></select>
                  </div>
                  <!-- Precio Bruto del producto -->
                  <div class="form-group">
                    <label>Precio de Bruto (con isv): <span class="text-red-50">*</span> </label>
                    <input type="text" class="form-control" disabled>
                  </div>
                  <!-- Stock Minimo del producto -->
                  <div class="form-group">
                    <label>Stock Minimo: </label>
                    <input type="number" min="1" class="form-control">
                  </div>
                  <!-- Stock Maximo del producto -->
                  <div class="form-group">
                    <label>Stock Maximo: </label>
                    <input type="number" min="1" class="form-control">
                  </div>
                  <!-- Unidad de medida -->
                  <div class="form-group">
                    <label>Unidad de medida: </label>
                    <select class="form-control" name="" id=""></select>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12">
                  <img src="vendors/images/product-1.jpg" alt="">
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
  </script>
</body>
</body>

</html>