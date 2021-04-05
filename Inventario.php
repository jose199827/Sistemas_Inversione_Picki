<!--   CONEXION A LA BASE DE DATOS -->
<?php
include_once "bd/conexion.php"
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic Page Info -->
  <meta charset="utf-8">
  <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

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
  <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
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
                <h4>Inventarios</h4>
              </div>
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html"></a></li>
                  
                </ol>
              </nav>
            </div>

          </div>
        </div>
        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
          <!--TABLA DE INVETARIO-->
        	<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Registro de Inventario</h4>
					</div>
					<div class="pb-20">
						<table class="table hover  data-table-export nowrap">
							<thead>
								<tr>
                  <th>N°</th>
									<th class="table-plus datatable-nosort">Producto</th>
									<th>Concepto</th>
									<th>Entradas</th>
									<th>Salidas</th>
									<th>Cantidad</th>
                  <th class="datatable-nosort">Acciones</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
                  <td class="table-plus">Zapato deportivo Nike</td>
									<td>Compra a proveedor</td>
									<td>10 </td>
									<td>---</td>
									<td>10</td>
                  <td><div class="dropdown">
                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                      <i class="dw dw-more"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

                      <a class="dropdown-item" href="#Editar" data-toggle="modal" data-target="#small-modal" type="button"><i class="dw dw-edit2"></i> Editar</a>
                      <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Eliminar</a>
                    </div>
                  </div></td>
								</tr>
								<tr>
									<td>1</td>
                  <td class="table-plus">Zapato deportivo Nike</td>
									<td>Venta</td>
									<td>--- </td>
									<td>2</td>
									<td>8</td>
                  <td><div class="dropdown">
                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                      <i class="dw dw-more"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                      <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Editar</a>
                      <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Eliminar</a>
                    </div>

                  <!--MODAL DE EDITAR-->
                <!--  <div class="col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                      <h5 class="h4">Small modal</h5>  -->
                      <a href="#Editar" class="btn-block" data-toggle="modal" data-target="#small-modal" type="button">
                        
                      </a>
                      <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title" id="myLargeModalLabel">Editar Producto</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-12 col-sm-12">
                                  <!-- Nombre del producto -->
                                  <div class="form-group">
                                    <label>Producto: <span class="text-red-50">*</span> </label>
                                    <input type="text" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label>Concepto: <span class="text-red-50">*</span> </label>
                                    <input type="number" class="form-control  min="0 max="100">
                                  </div>
                                </div>
                              </div>
                              <div class="text-right">
                              <button type="button" class="btn btn-success"> Guardar</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal" >Cerrar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--FINAL DEL MODAL-->

								</div>
							</div>
						</div>
					</div>
                </td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
				</div>
				<!-- Simple Datatable End -->
     <!--   <div class="col-md-4 col-sm-12 mb-30">
          <div class="pd-20 card-box height-100-p">
            <h5 class="h4">Success modal</h5> -->
            <a href="#" class="btn-block" data-toggle="modal" data-target="#success-modal" type="button">
            </a>
            <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-body text-center font-18">
                    <h3 class="mb-20">Completado</h3>
                    <div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
                   ¡Producto editado exitosamente!
                  </div>
                  <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary"  href="#editar" class="btn-block" data-toggle="modal"  data-target ="#bd-example-modal-lg" type="button" data-dismiss="ModalEditar">Listo</button>
                  </div>
                </div>
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
	<script src="vendors/scripts/datatable-setting.js"></script></body>
  
</body>


</html>