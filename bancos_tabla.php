<!--   CONEXION A LA BASE DE DATOS -->
<?php
include_once "bd/conexion.php"
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic Page Info -->
  <meta charset="utf-8">
  <title>Bancos</title>

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
<?php
  $tamano_pagina = 5;
  if (isset($_GET["pagina"])) {
      if ($_GET["pagina"] == 1) {
          header("Location:http://localhost/Sistemas_Inversione_Picki2/bancos_tabla.php");
      } else {
          $pagina = $_GET["pagina"];
      }

      
  } else {

      $pagina = 1;
  }
  $empezar_desde = ($pagina - 1) * $tamano_pagina;
  $sql_total = "SELECT * FROM `entidad_banco`";
  $resultado = $conexion->prepare($sql_total);
  $resultado->execute(array());
  $num_filas = $resultado->rowCount();
  $total_paginas = ceil($num_filas / $tamano_pagina);
  //************END PAGINADOR***************** */
  //************Select Para personas***************** */
  $registro_bancos = $conexion->query("SELECT * FROM `entidad_banco` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
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
								<h4>Sistema Inversiones Picki</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
									<li class="breadcrumb-item active" aria-current="page">Bancos</li>
								</ol>
							</nav>
						</div>          
          <div class="pd-20">				
             <div class="pull-right">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#small-modaladdbanco">Agregar</button>
				 </div>
				 </div>
        </div>
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Tabla Bancos</h4>
					</div>

					<div class="pd-20">

						<div class="row">
                </div>
					<div class="pb-20">
						
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">N.°</th>
									<th>Nombre Banco</th>
									<th >Abreviatura</th>
									<th class="datatable-nosort">Acciones</th>
								</tr>
							</thead>
							<tbody>
              <?php foreach ($registro_bancos as $bancos) : ?>
								<tr>
									<td class="table-plus"><?php echo $bancos->id_banco?></td>
									<td><?php echo $bancos->nom_banco?></td>
									<td><?php echo $bancos->abr_banco?></td>
									<td>
									 <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                              <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                              <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                              <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                              <a class="dropdown-item" href="bd/delete_bancos.php?id_banco=<?php echo $bancos->id_banco?>"><i class="dw dw-delete-3"></i> Delete</a>
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
				<!-- Export Datatable End -->


		
            <div class="modal fade" id="small-modaladdbanco" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Registrar Banco</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                  <form id="Agregarbanco" action="bd/insert_bancos.php" id="formBanco" name="formBanco" method="POST">
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <!-- Nombre del banco-->
                          <div class="form-group">
                            <label for="nombre">Nombre del Banco: <span class="text-red-50">*</span> </label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label for="abr">Abreviatura: <span class="text-red-50">*</span> </label>
                            <input type="text" id="abr" name="abr" class="form-control" required>
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
</html>