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
        <div class="page-header">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="title text-success">
                <h4>Perfil Empleado</h4>
              </div>
            </div>

          </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                <div class="pd-20 card-box height-100-p">
                    <div class="profile-photo">
                        <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                        <img src="vendors/images/photo1.jpg" alt="" class="avatar-photo">
                        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body pd-5">
                                        <div class="img-container">
                                            <img id="image" src="vendors/images/photo2.jpg" alt="Picture">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" value="Update" class="btn btn-primary">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-center h5 mb-0">Carlos F. Mead</h5>
                    <div class="profile-info">
                        <h5 class="mb-20 h5 text-blue">Datos Personales</h5>
                        <ul>
                            <li>
                                <span>Num. de Identidad:</span>
                                0801-1999-20187
                            </li>
                            <li>
                                <span>Edad:</span>
                                22
                            </li>
                            <li>
                                <span>Fecha de Nacimiento:</span>
                                04-02-1999
                            </li>
                            <li>
                                <span>Género:</span>
                                Masculino
                            </li>
                            <li>
                                <span>Correo Electrónico:</span>
                                FerdinandMChilds@test.com
                            </li>
                            <li>
                                <span>Teléfono:</span>
                                9867-2897
                            </li>
                            <li>
                                <span>Dirección:</span>
                                1807 Holden Street<br>
                                San Diego, CA 92115
                            </li>
                        
                        </ul>
                    </div>
                   
                  
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-tab height-100-p">
                        <div class="tab height-100-p">
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#Datos" role="tab">Datos</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Editar" role="tab">Editar</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!-- Timeline Tab start -->
                                <div class="tab-pane fade show active" id="Datos" role="tabpanel">
                                    <div class="pd-20">
                                        <div class="profile-info">
                                            <h5 class="mb-20 h5 text-blue">Datos Empleo</h5>
                                            <ul>
                                                <li>
                                                    <span>Salario:</span>
                                                    Lps. 9,500
                                                </li>
                                                <li>
                                                    <span>Cargo:</span>
                                                    Cajero
                                                </li>
                                                <li>
                                                    <span>Tipo de Empleado:</span>
                                                    Permanente
                                                </li>
                                                <li>
                                                    <span>Fecha de Ingreso:</span>
                                                    04-02-1999
                                                </li>
                                                <li>
                                                    <span>Fecha de Salida:</span>
                                                    04-02-1999
                                                </li>
                                                <li>
                                                    <span>Estatus:</span>
                                                    Activo
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Timeline Tab End -->
                                <!-- Tasks Tab start -->
                                
                                <!-- Tasks Tab End -->
                                <!-- Setting Tab start -->
                                <div class="tab-pane fade height-100-p" id="Editar" role="tabpanel">
                                    <div class="profile-setting">
                                        <form>
                                            <ul class="profile-edit-list row">
                                                <!--Tabla Personas-->
                                                <li class="weight-500 col-md-6">
                                                    <h4 class="text-blue h5 mb-20">Datos Personales</h4>
                                                    <div class="form-group">
                                                        <label for="nombre">Nombre:</label>
                                                        <input class="form-control form-control-lg" type="text" id="nombre">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="apellido">Apellido:</label>
                                                        <input type="text" class="form-control form-control-lg" id="apellido">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="identidad">Num. Identidad:</label>
                                                        <input type="text" class="form-control form-control-lg" id="identidad">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="edad">Edad:</label>
                                                        <input type="number" value="" class="form-control form-control-lg" id="edad">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nacimiento">Fecha de Nacimiento:</label>
                                                        <input type="date" class="form-control form-control-lg" id="nacimiento">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="genero">Género:</label>
                                                        <select class="form-control form-control-lg" id="genero" name="sellist1">
                                                          <option></option>
                                                          <option>Femenino</option>
                                                          <option>Masculino</option>
                                                          <option>Otro</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="correo">Correo Electrónico: </label>
                                                        <input type="email" class="form-control form-control-lg" id="correo">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="telefono">Teléfono: </label>
                                                        <input type="text" class="form-control form-control-lg" id="telefono">
                                                      </div>
                                                    <div class="form-group">                   
                                                        <label for="direccion">Dirección:</label>
                                                        <textarea class="form-control" rows="5" id="direccion"></textarea>
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <input type="submit" class="btn btn-success" value="Guardar">
                                                    </div>           
                                                </li>
                                                <!--Tabla Empleados-->
                                                <li class="weight-500 col-md-6">
                                                    <h4 class="text-blue h5 mb-20">Datos Empleo</h4>
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
                                                  <h4 class="text-blue h5 mb-20">Cambio de Contraseña</h4>
                                                  <div class="form-group">
                                                    <label for="Actual">Contraseña Actual: </label>
                                                    <input type="text" class="form-control form-control-lg" id="Actual">
                                                 </div>    
                                                 <div class="form-group">
                                                    <label for="Nueva">Contraseña Nueva: </label>
                                                    <input type="text" class="form-control form-control-lg" id="Nueva">
                                                 </div>  
                                                 <div class="form-group">
                                                  <label for="R_Nueva">Repertir Contraseña Nueva: </label>
                                                  <input type="text" class="form-control form-control-lg" id="R_Nueva">
                                                 </div>
                                                                                                                                                                                                                                                   
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <!-- Setting Tab End -->
                            </div>
                        </div>
                    </div>
                </div>
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
</body>

</html>