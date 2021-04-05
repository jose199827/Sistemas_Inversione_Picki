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
  <?php
    
	
    //*************PAGINADOR**************** */
    $tamano_pagina = 5;
    if (isset($_GET["pagina"])) {
        if ($_GET["pagina"] == 1) {
            header("Location:http://localhost:8080/Sistemas_Inversione_Picki/empleados.php");
        } else {
            $pagina = $_GET["pagina"];
        }

        
    } else {

        $pagina = 1;
    }

    $empezar_desde = ($pagina - 1) * $tamano_pagina;
    $sql_total = "SELECT * FROM `personas`";
    $resultado = $conexion->prepare($sql_total);
    $resultado->execute(array());
    $num_filas = $resultado->rowCount();
    $total_paginas = ceil($num_filas / $tamano_pagina);
    //************END PAGINADOR***************** */
    //************Select Para personas***************** */
    $registro_personas = $conexion->query("SELECT `id_persona`,`num_id_persona`, `nom_persona`, `ape_persona`,`eda_persona`, `gen_persona` FROM `personas` WHERE `id_persona` IN (SELECT `id_persona` FROM `empleados`) LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
  ?>

   <!-- Parte del menu principal -->
   <?php require("partes/parteMenu.php"); ?>
  <!-- Fin Parte del menu principal -->

  <div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
      <div class="min-height-200px">
      <div class="page-header d-flex justify-content-between align-items-center">
		  <div class="col-md-6 col-sm-12">
              <div class="title">
                <h4>Perfil Empleado</h4>
              </div>
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                </ol>
              </nav>
              
            </div>
            <div class="pull-right">
               <a href="add_empleado.php"> <button type="button" class="btn btn-primary" data-toggle="modal" >Agregar</button></a>
				  	 </div>
        </div>
        <!--TABLA-->
        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
        <div class="card-box mb-30">
            </br>    
              
					<div class="pb-20">
          </br> 
						<table class="table hover data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">N.º</th>
                                    <th>Num. Identidad</th>
									<th>Nombre</th>
									<th>Edad</th>
									<th>Género</th>
									<th class="datatable-nosort">Acciones</th>
								</tr>
							</thead>
							<tbody>
							  <?php foreach ($registro_personas as $personas) : ?>
								<tr>
									<td class="table-plus">
								     	<?php echo $personas->id_persona ?>
									</td>
									<td>
									   <?php echo $personas->num_id_persona ?>
									</td>
									<td>
									  <?php echo $personas->nom_persona . " " . $personas->ape_persona ?>
									</td>
									<td>
									  <?php echo $personas->eda_persona ?>
									</td>
									<td>
									  <?php echo $personas->gen_persona ?>
									</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="perfil_empleado.php"><i class="dw dw-eye"></i> Vista</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Editar</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Eliminar</a>
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
	<script src="vendors/scripts/datatable-setting.js"></script>
</body>

</html>