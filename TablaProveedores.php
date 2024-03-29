<!--   CONEXION A LA BASE DE DATOS -->
<?php
include_once "bd/conexion.php"
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic Page Info -->
  <meta charset="utf-8">
  <title>Proveedores</title>

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
            header("Location:http://localhost/Sistemas_Inversione_Picki/TablaProveedores.php");
        } else {
            $pagina = $_GET["pagina"];
        }

        
    } else {

        $pagina = 1;
    }

    $empezar_desde = ($pagina - 1) * $tamano_pagina;
    $sql_total = "SELECT * FROM `proveedores`";
    $resultado = $conexion->prepare($sql_total);
    $resultado->execute(array());
    $num_filas = $resultado->rowCount();
    $total_paginas = ceil($num_filas / $tamano_pagina);
    //************END PAGINADOR***************** */
    //************Select Para proveedores***************** */
    $registro_proveedores = $conexion->query("SELECT `id_proveedor`,`rtn_empresa`,`nom_empresa`, `con_empresa`, `id_banco`,`num_cuenta` FROM `proveedores` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
  ?>
  <!-- Insert -->

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
	<li class="breadcrumb-item active" aria-current="page">Proveedores</li>
	</ol>
	</nav>
	</div>    
	<div class="pull-right">
    <a href="addproveedores.php"> <button type="button" class="btn btn-primary" data-toggle="modal" >Agregar</button></a>
	</div>      
    </div>
    <div class="card-box mb-30">
    <div class="pd-20">
    <h4 class="text-blue h4">Tabla Proveedores</h4>
    <div class="row">
    </div>
    <div class="pb-20">
    <table class="table hover multiple-select-row data-table-export nowrap">
    <thead>
    <tr>
    <th class="table-plus datatable-nosort">N.°</th>
    <th>Rtn </th>
    <th>Nombre </th>
    <th>contacto</th>
    <th>banco</th>
    <th>cuenta</th>
    <th class="datatable-nosort">Acciones</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($registro_proveedores as $proveedores) : ?>
    <tr>
    <td class="table-plus">
    <?php echo $proveedores->id_proveedor ?>
	</td>
	<td>
	<?php echo $proveedores->rtn_empresa ?>
	</td>
	<td>
	<?php echo $proveedores->nom_empresa ?>
	</td>
	<td>
	<?php echo $proveedores->con_empresa ?>
	</td>
	<td>
	<?php echo $proveedores->id_banco ?>
	</td>
	<td>
    <?php echo $proveedores->num_cuenta ?>
	</td>
	<td>
    <div class="dropdown">
	<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
	<i class="dw dw-more"></i>
	</a>
	<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
	<a class="dropdown-item" href="TablaProveedores.php"><i class="dw dw-eye"></i> Vista</a>
	<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i>Editar</a>
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