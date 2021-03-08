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
  <!-- Inicio del Precaargador -->
  <div class="pre-loader">
    <div class="pre-loader-box">
      <div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
      <div class='loader-progress' id="progress_div">
        <div class='bar' id='bar1'></div>
      </div>
      <div class='percent' id='percent1'>0%</div>
      <div class="loading-text">
        Cargando...
      </div>
    </div>
  </div>
  <!-- Fin del Precaargador -->

  <!-- Inicio del Menu Principal -->
  <div class="header">
    <div class="header-left">
      <div class="menu-icon dw dw-menu"></div>
    </div>
    <div class="header-right">
      <div class="dashboard-setting user-notification">
        <div class="dropdown">
          <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
            <i class="dw dw-settings"></i>
          </a>
        </div>
      </div>
      <div class="user-info-dropdown">
        <div class="dropdown">
          <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
            <span class="user-icon">
              <img src="vendors/images/photo1.jpg" alt="">
            </span>
            <span class="user-name">Ricardo Peralta</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
            <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Perfil</a>
            <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Configuración</a>
            <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Ayuda</a>
            <a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Cerrar sesión</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin del Menu Principal -->

  <!-- Inicio del Menu lateral de diseño -->
  <div class="right-sidebar">
    <div class="sidebar-title">
      <h3 class="weight-600 font-16 text-blue">
        Opciones de Diseño
        <span class="btn-block font-weight-400 font-12">Configuración de la Interfaz de Usuario</span>
      </h3>
      <div class="close-sidebar" data-toggle="right-sidebar-close">
        <i class="icon-copy ion-close-round"></i>
      </div>
    </div>
    <div class="right-sidebar-body customscroll">
      <div class="right-sidebar-body-content">
        <h4 class="weight-600 font-18 pb-10">Fondo del Encabezado</h4>
        <div class="sidebar-btn-group pb-30 mb-10">
          <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">Blanco</a>
          <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Negro</a>
        </div>

        <h4 class="weight-600 font-18 pb-10">Fondo de la barra lateral</h4>
        <div class="sidebar-btn-group pb-30 mb-10">
          <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">Blanco</a>
          <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Negro</a>
        </div>

        <h4 class="weight-600 font-18 pb-10">Icono de menú desplegable</h4>
        <div class="sidebar-radio-group pb-10 mb-10">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
              value="icon-style-1" checked="">
            <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
              value="icon-style-2">
            <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
              value="icon-style-3">
            <label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
          </div>
        </div>

        <h4 class="weight-600 font-18 pb-10">Icono de lista de menú</h4>
        <div class="sidebar-radio-group pb-30 mb-10">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input"
              value="icon-list-style-1" checked="">
            <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input"
              value="icon-list-style-2">
            <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                aria-hidden="true"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input"
              value="icon-list-style-3">
            <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input"
              value="icon-list-style-4" checked="">
            <label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input"
              value="icon-list-style-5">
            <label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input"
              value="icon-list-style-6">
            <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
          </div>
        </div>

        <div class="reset-options pt-30 text-center">
          <button class="btn btn-danger" id="reset-settings">Reiniciar ajustes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin del Menu lateral de diseño -->

  <div class="left-side-bar">
    <div class="brand-logo">
      <a href="index.html">
        <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
        <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
      </a>
      <div class="close-sidebar" data-toggle="left-sidebar-close">
        <i class="ion-close-round"></i>
      </div>
    </div>
    <div class="menu-block customscroll">
      <div class="sidebar-menu">
        <ul id="accordion-menu">
          <!-- Menu Inicio -->
          <li>
            <a href="calendar.html" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-house1"></span><span class="mtext">Inicio</span>
            </a>
          </li>
              <!-- Menu facturas -->
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-group"></span><span class="mtext">facturacion</span>
            </a>
            <ul class="submenu">
              <li><a href="facturacion.php">facturacion</a></li>
              <!--<li><a href="index2.html">Dashboard style 2</a></li>
              <li><a href="index3.html">Dashboard style 3</a></li> -->
            </ul>
          </li>
          <!-- Menu Proveedores -->
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-user-11"></span><span class="mtext">Proveedores</span>
            </a>
            <ul class="submenu">
              <li><a href="form-basic.html">Form Basic</a></li>
              <li><a href="advanced-components.html">Advanced Components</a></li>
              <li><a href="form-wizard.html">Form Wizard</a></li>
              <li><a href="html5-editor.html">HTML5 Editor</a></li>
              <li><a href="form-pickers.html">Form Pickers</a></li>
              <li><a href="image-cropper.html">Image Cropper</a></li>
              <li><a href="image-dropzone.html">Image Dropzone</a></li>
            </ul>
          </li>
          <!-- Menu Usuarios -->
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-id-card1"></span><span class="mtext">Usuarios</span>
            </a>
            <ul class="submenu">
              <li><a href="basic-table.html">Basic Tables</a></li>
              <li><a href="datatable.html">DataTables</a></li>
            </ul>
          </li>
          <!-- Menu Configuracion -->
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-settings2"></span><span class="mtext">Configuración</span>
            </a>
            <ul class="submenu">
              <li><a href="basic-table.html">Basic Tables</a></li>
              <li><a href="datatable.html">DataTables</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  	</div>

	<div class="mobile-menu-overlay"></div>

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
            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1-10 of 12 entries</div>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
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