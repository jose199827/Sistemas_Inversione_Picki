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
          header("Location:http://localhost/Sistemas_Inversione_Picki2/confiFactura.php");
      } else {
          $pagina = $_GET["pagina"];
      }

      
  } else {

      $pagina = 1;
  }
  $empezar_desde = ($pagina - 1) * $tamano_pagina;
  $sql_total = "SELECT * FROM `empresas`";
  $sql_total = "SELECT * FROM `regimen_facturacion`";
  $resultado = $conexion->prepare($sql_total);
  $resultado->execute(array());
  $num_filas = $resultado->rowCount();
  $total_paginas = ceil($num_filas / $tamano_pagina);
  //************END PAGINADOR***************** */
  //************Select Para personas***************** */
  $registro_empresas = $conexion->query("SELECT * FROM  `empresas` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
  $registro_regimen = $conexion->query("SELECT * FROM `regimen_facturacion` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
  ?>
  <!-- Parte del menu principal -->
  <?php require("partes/parteMenu.php"); ?>
  <!-- Fin Parte del menu principal -->

  <div class="mobile-menu-overlay"></div>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
		<div class="page-header d-flex justify-content-between align-items-center">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Configuración de Factura</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									
								</ol>
							</nav>
						</div>          
          <div class="pd-20">				
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
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Régimen de Facturación</h4>
                        <div class="pull-right">
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#small-modaladdbanco">Agregar</button>
				     </div>
					</div>
                      
					<div class="pd-20">

						<div class="row">
                </div>
					<div class="pb-20">
						
						<table class="table hover data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">N.°</th>
									<th>CAI</th>
									<th>Correlativo Inicial</th>
                                    <th>Correlativo Final</th>
                                    <th>Fecha límite Emisión</th>
									<th class="datatable-nosort">Acciones</th>
								</tr>
							</thead>
							<tbody>
                              <?php foreach ($registro_regimen as $regimen) : ?>
								<tr>
									<td class="table-plus"><?php echo $regimen->id_regi_fact?></td>
									<td><?php echo $regimen->cai?></td>
                                    <td><?php echo $regimen->cor_inic?></td>
									<td><?php echo $regimen->cor_fin?></td>
                                    <td><?php echo $regimen->fec_lim_emi?></td>
									<td>
									 <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Editar</a>
                              <a class="dropdown-item" href="bd/delete_regimen_facturacion.php?id_regi_fact=<?php echo $regimen->id_regi_fact?>"><i class="dw dw-delete-3"></i> Eliminar</a>
                            </div>
                          </div>
                      </td>
								</tr>
                   <?php endforeach; ?>
							</tbody>
						</table>
					<div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1-10 of 12 entries</div>
					</div>

				</div>
				

		
            <div class="modal fade" id="small-modaladdbanco" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Registrar Código CAI</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                  <form class="needs-validation" novalidate action="bd/insert_regimen_facturacion.php" id="formRegimen" name="formRegimen" method="POST">
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <!-- Nombre del banco-->
                          <div class="form-group">
                            <label for="cai">CAI: <span class="text-red-50">*</span> </label>
                            <input type="text" id="cai" name="cai" class="form-control" required>
                            <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, rellena el campo</div>
                          </div>
                          <div class="form-group">
                            <label for="cor_inicial">Correlativo Inicial: <span class="text-red-50">*</span> </label>
                            <input type="text" id="cor_inicial" name="cor_inicial" class="form-control" required>
                            <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, rellena el campo</div>
                          </div>
                          <div class="form-group">
                            <label for="cor_final">Correlativo Final: <span class="text-red-50">*</span> </label>
                            <input type="text" id="cor_final" name="cor_final" class="form-control" required>
                            <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, rellena el campo</div>
                          </div>
                            <div class="form-group">
                             <label for="fecha_limite">Fecha Límite:<span class="text-red-50">*</span></label>
                             <input class="form-control" type="date"name="fecha_limite" id="fecha_limite" placeholder:="00/00/000"  id="example-date-input" required>
                             <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, rellena el campo</div>
                            </div>
                            </div>
                        </div>

                      </div>
                      <div class="text-right">
                      <button id="btnActionForm" type="submit" class="btn btn-success"><span id="btnTex">Registrar</span></button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal" >Cerrar</button>
                      </div>
                    </form>
                  </div>
                  
                </div>
              </div>
            </div>
            <!--TABLA DE EMPRESAS-->
            <div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Empresas</h4>
                        <div class="pull-right">
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#small-modaladdEmpresa">Agregar</button>
				     </div>
					</div>
                      
					<div class="pd-20">

						<div class="row">
                </div>
					<div class="pb-20">
						
						<table class="table hover data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">N.°</th>
									<th>RTN Empresa</th>
									<th>Empresa</th>
									<th class="datatable-nosort">Acciones</th>
								</tr>
							</thead>
							<tbody>
              <?php foreach ($registro_empresas as $empresas) : ?>
								<tr>
									<td class="table-plus"><?php echo $empresas->id_empresa?></td>
									<td><?php echo $empresas->rtn_empresa?></td>
                                    <td><?php echo $empresas->nom_empresa?></td>
									<td>
									 <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Editar</a>
                              <a class="dropdown-item" href="bd/delete_empresas.php?id_empresa=<?php echo $empresas->id_empresa?>"><i class="dw dw-delete-3"></i> Eliminar</a>
                            </div>
                          </div>
                      </td>
								</tr>
                <?php endforeach; ?>
							</tbody>
						</table>
					<div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1-10 of 12 entries</div>
					</div>

				</div>

    <!--MODAL DE EMPRESAS-->
      </div>
      <div class="modal fade" id="small-modaladdEmpresa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Registrar Empresa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                  <form class="needs-validation" novalidate action="bd/insert_empresa.php" id="formEmpresa" name="formEmpresa" method="POST">
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <!-- Nombre del banco-->
                          <div class="form-group">
                            <label for="RTN">RTN Empresa: <span class="text-red-50">*</span> </label>
                            <input type="text" id="RTN" name="RTN" class="form-control" required>
                            <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, rellena el campo</div>
                          </div>
                          <div class="form-group">
                            <label for="empresa">Empresa: <span class="text-red-50">*</span> </label>
                            <input type="text" id="empresa" name="empresa" class="form-control" required>
                            <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, rellena el campo</div>
                          </div>
                        </div>

                      </div>
                      <div class="text-right">
                      <button id="btnActionForm" type="submit" class="btn btn-success"><span id="btnTex">Registrar</span></button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal" >Cerrar</button>
                      </div>
                    </form>
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
  <script src="vendors/scripts/validaciones_modal.js"></script> 
</html>