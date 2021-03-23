<!DOCTYPE html>
<html>

<head>
  <!-- Basic Page Info -->
  <meta charset="utf-8">
  <title>Facturacion</title>

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
								<h4>Inversiones Picky</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
									<li class="breadcrumb-item active" aria-current="page">Facturas</li>
								</ol>
							</nav>
						</div>
                     </div>
                 </div>
                 <!-- Select-2 Start -->
        <div class="pd-20 card-box mb-30">
          <div class="clearfix">
            <div class="pull-left">
              <h4 class="text-blue h4">Nueva Factura</h4>
              <p class="mb-30">Ingresa una nueva factura</p>
            </div>
          </div>
          <form>
             <div class="text-center">
                <h2>Inversiones Picky<span class="label label-default"></span></h2>
                 <h6>David Ricardo Peralta Espinoza<span class="label label-default"></span></h6>
                  <h6>Residencial Bella Oriente, primera avenida casa 4402 Bloque D, Distrito Central<span class="label label-default"></span></h6>
                  <h6>Cel:33236075, correo:dape04@yahoo.com<span class="label label-default"></span></h6>  
                  <h6 align="left-sidebar-close">RTN:08011992189181<span class="label label-default"></span></h6>
                  </div>
                    <p></p>
                   <p></p>
                   <p></p>
                                                 <div class="row">
                                                 <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Fecha</label>
                                                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Cliente</label>
                                                       <select class="custom-select2 form-control" multiple="multiple" style="width: 100%; height: 38px;">
                                                        <optgroup label="Natural">
                                                        <option value="AK">Alex Montoya</option>
                                                        <option value="HI">Hawaii</option>
                                                        </optgroup>
                                                        <optgroup label="Juridico">
                                                        <option value="CA">Jose Pineda</option>
                                                        </optgroup>
                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>N. de Factura</label>
                                                       <input type="text" class="form-control" placeholder="Ejem:0002-0002-0001" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Rango CAI</label>
                                                        <input type="text" class="form-control" placeholder="Ejem:0002-0002-0001" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <div class="form-group">
                                                       <div class="form-group">
                                                       <label>Producto</label>
                                                       <select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
                                                       <optgroup label="Salud">
                                                       <option value="AK">Gel</option>
                                                       <option value="HI">Mascarillas</option>
                                                       </optgroup>
                                                       <optgroup label="Zapatos">
                                                       <option value="CA">Nike</option>
                                                       <option value="NV">Adidas</option>
                                                       <option value="OR">Balenciaga</option>
                                                       <option value="WA">Gucci</option>
                                                       </optgroup>
                                                       <optgroup label="Perfumes">
                                                       <option value="AZ">Hush</option>
                    
                                                       </optgroup>
                                                       </select>
                                                    </div>
                                                   </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Cantidad</label>
                                                       <div class="form-group">
                                                       <input id="demo3" type="text" value="000-000-000" name="demo3">
                                                       </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Descripcion</label>
                                                        <input type="text" class="form-control" placeholder="Ejem:Gel antibacterial" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label>Descuento</label>
                                                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                                        <option selected>10%</option>
                                                        <option value="1">20%</option>
                                                        <option value="2">30%</option>
                                                        <option value="3">40%</option>
                                                    </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Precio unitario</label>
                                                        <input type="text" class="form-control" placeholder="Ejem:500" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label>Total</label>
                                                        <input type="text" class="form-control" readonly >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="form-group">
                                                        <button id="addNewButton" class="btn btn-primary"><i class="icon-copy ion-ios-plus-outline"></i>   Añadir Producto  </button>
                                                    </div>
                                                    </div>
                                                      <div class="col-md-2">
                                                      <div class="form-group">
                                                        <label>importe exonerado</label>
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                    </div>
                                                      <div class="col-md-2">
                                                       <div class="form-group">
                                                        <label>Importe exento</label>
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                       <div class="form-group">
                                                        <label>Importe gravado 15</label>
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                       <div class="form-group">
                                                        <label>Importe gravado 18</label>
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                       <div class="form-group">
                                                        <label>ISV 15</label>
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                       <div class="form-group">
                                                        <label>ISV 18</label>
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Total Factura</label>
                                                        <input type="text" class="form-control" readonly >
                                                    </div>
                                                    </div>
            </div>
            <div class="text-center">
              <button type="button" class="btn btn-success"><i class="icon-copy fa fa-archive"></i>Guardar</button>
            <button type="button" class="btn btn-info"><i class="icon-copy fa fa-print" aria-hidden="true"></i>Mostrar</button>
            <button type="button" class="btn btn-danger"><i class="icon-copy fa fa-times-circle" aria-hidden="true"></i> Cancelar</button>
            </div>
          </form>
        </div>
        <!-- Select-2 end -->

					<!-- TERMINA MODAL -->
					<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Tabla Facturas</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
                  <p>
                  </p>
									<th class="table-plus datatable-nosort"></th>
									<th>cod_factura</th>
									<th>fecha</th>
									<th>descripcion</th>
									<th>cliente</th>
									<th>Usr Registro</th>
									<th class="datatable-nosort">Acción</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="dt-checkbox nowrap">
										<input type="checkbox" name="select_all" value="1" id="example-select-all">
										<span class="dt-checkbox-label"></span>
									</td>
									<td>1</td>
									<td>1/3/2021</td>
									<td>Zapatos nike</td>
									<td>2</td>
									<td>Admin</td>
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
									<td class="dt-checkbox">
										<input type="checkbox" name="select_all" value="1" id="example-select-all">
										<span class="dt-checkbox-label"></span>
									</td>
									<td>2</td>
									<td>2/3/2021</td>
									<td>mascarillas</td>
									<td>3</td>
									<td>admin</td>
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
				<!-- Export Datatable End -->
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
 <!-- bootstrap-touchspin js -->
  <script src="src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
  <script src="vendors/scripts/advanced-components.js"></script>
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