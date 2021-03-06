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
  <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
  <link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">


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
          <!-- Menu Clientes -->
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-group"></span><span class="mtext">Clientes</span>
            </a>
            <ul class="submenu">
              <li><a href="index.html">Dashboard style 1</a></li>
              <li><a href="index2.html">Dashboard style 2</a></li>
              <li><a href="index3.html">Dashboard style 3</a></li>
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
      
        <div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<h4 class="text-blue h4">Registrar Empleados</h4>
					</div>
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard">
							<h5>Información Personal</h5>
							<section>
								<div class="row">
									<div class="col-md-6">		 
                    <div class="form-group">
                      <label for="nombre">Nombre:</label>
                      <input class="form-control form-control-lg" type="text" id="nombre">
                  </div>
									</div>
									<div class="col-md-6">
                    <div class="form-group">
                      <label for="apellido">Apellido:</label>
                      <input type="text" class="form-control form-control-lg" id="apellido">
                  </div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
                    <div class="form-group">
                      <label for="identidad">Num. Identidad:</label>
                      <input type="text" class="form-control form-control-lg" id="identidad">
                  </div>
									</div>
									<div class="col-md-6">
                    <div class="form-group">
                      <label for="edad">Edad:</label>
                      <input type="number" value="" class="form-control form-control-lg" id="edad">
                  </div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
                    <div class="form-group">
                      <label for="nacimiento">Fecha de Nacimiento:</label>
                      <input type="date" class="form-control form-control-lg" id="nacimiento">
                  </div>
									</div>
									<div class="col-md-6">
                    <div class="form-group">
                      <label for="genero">Género:</label>
                      <select class="form-control form-control-lg" id="genero" name="sellist1">
                        <option></option>
                        <option>Femenino</option>
                        <option>Masculino</option>
                        <option>Otro</option>
                      </select>
                  </div> 
									</div>
								</div>
							</section>
							<!-- Step 2 -->
							<h5>Información de Contacto</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
                    <div class="form-group">
                      <label for="correo">Correo Electrónico: </label>
                      <input type="email" class="form-control form-control-lg" id="correo">
                  </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                      <label for="telefono">Teléfono: </label>
                      <input type="text" class="form-control form-control-lg" id="telefono">
                    </div>
									</div>
									<div class="col-md-12">
                    <div class="form-group">                   
                      <label for="direccion">Dirección:</label>
                      <textarea class="form-control" rows="5" id="direccion"></textarea>
                  </div>
									</div>
								</div>
							</section>
							<!-- Step 3 -->
							<h5>Datos de Empleo</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
                    <div class="form-group">
                      <label for="salario">Salario: </label>
                      <input type="text" class="form-control form-control-lg" id="salario">
                    </div>
                    <div class="form-group">
                      <label for="cargo">Cargo:</label>
                      <select class="form-control form-control-lg" id="cargo" name="sellist1">
                          <option></option>
                          <option>Cajero</option>
                          <option>Dependienta</option>
                          <option>Bodeguero</option>
                          <option>Gerente</option>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="tipo">Tipo de Empleado:</label>
                      <select class="form-control form-control-lg" id="tipo" name="sellist1">
                         <option></option>
                         <option>Permanente</option>
                         <option>Por contrato</option>
                         <option>Por Horas</option>
                         <option>4</option>
                     </select>
                   </div>
                   <div class="form-group">
                    <label for="ingreso">Fecha de Ingreso: </label>
                    <input type="date" class="form-control form-control-lg" id="ingreso">
                   </div>

									</div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="salida">Fecha de Salida: </label>
                      <input type="date" class="form-control form-control-lg" id="salida">
                   </div>
                   <div class="form-group">
                       <label for="estatus">Estatus:</label>
                       <select class="form-control form-control-lg" id="estatus" name="sellist1">
                          <option></option>
                          <option>Activo</option>
                          <option>Inactivo</option>                    
                       </select>
                   </div>
                   <div class="form-group">
                    <label for="foto">Foto: </label>
                    <input type="file" class="form-control-file border form-control-lg" name="foto">
                  </div>
                  </div>
								</div>
							</section>
							<!-- Step 4 -->
							<h5>Usuario</h5>
							<section>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="usuario">Nombre de Usuario: </label>
                      <input type="text" class="form-control form-control-lg" id="usuario">
                    </div>                
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password">Password: </label>
                      <input type="text" class="form-control form-control-lg" id="password">
                    </div>   
                  </div>
                </div>
               
							 
							</section>
						</form>
					</div>
				</div>
      </div>
      <div class="footer-wrap pd-20 mb-20 card-box">
        DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit
          Hingarajiya</a>
      </div>
    </div>
  </div>
  <!-- js -->
  <script src="vendors/scripts/core.js"></script>
  <script src="vendors/scripts/script.min.js"></script>
  <script src="vendors/scripts/process.js"></script>
  <script src="vendors/scripts/layout-settings.js"></script>
  <script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script
</body>

</html>