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
            <a class="dropdown-item" href="javascript:;" data-toggle="right-sidebar"><i class="dw dw-paint-palette"></i>
              Diseño</a>
            <a class="dropdown-item" href="login.html"><i class="dw dw-logout-1"></i> Cerrar sesión</a>
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
        <i class="icon-copy dw dw-cancel"></i>
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
            <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
            <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
            <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
            <label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
          </div>
        </div>

        <h4 class="weight-600 font-18 pb-10">Icono de lista de menú</h4>
        <div class="sidebar-radio-group pb-30 mb-10">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
            <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
            <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
            <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
            <label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
            <label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
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

  <!-- Inicio del Menu derecho -->
  <div class="left-side-bar">
    <div class="brand-logo">
      <a href="index.html">
        <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
        <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
      </a>
      <div class="close-sidebar" data-toggle="left-sidebar-close">
        <i class="icon-copy dw dw-cancel"></i>
      </div>
    </div>
    <div class="menu-block customscroll">
      <div class="sidebar-menu">
        <ul id="accordion-menu">
          <!-- Menu Inicio -->
          <li>
            <a href="index.html" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-house1"></span><span class="mtext">Inicio</span>
            </a>
          </li>
          <!-- Menu Facturación -->
          <li>
            <a href="facturacion.php" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-house1"></span><span class="mtext">Facturación</span>
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
          <li>
            <a href="TablaProveedores.php" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-truck"></span><span class="mtext">Proveedores</span>
            </a>
          </li>          <!-- Menu Empleados -->
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-id-card1"></span><span class="mtext">Empleados</span>
            </a>
            <ul class="submenu">
              <li><a href="empleados.php">Empleados</a></li>
              <li><a href="add_empleado.php">Agregar Empleado</a></li>
              <li><a href="perfil_empleado.php">Perfil Empleado</a></li>
            </ul>
          </li>
          <!-- Menu Usuarios -->
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-id-card1"></span><span class="mtext">Usuarios</span>
            </a>
            <ul class="submenu">
              <li><a href="basic-table.html">empleados.php</a></li>
              <li><a href="datatable.html">DataTables</a></li>
            </ul>
          </li>
          <!-- Menu Inventario -->
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-book1"></span><span class="mtext">Inventario</span>

            </a>
            <ul class="submenu">
              <li><a href="Inventario.php">Inventario</a></li>
              <li><a href="productos.php">Agregar Producto</a></li>
            </ul>
          </li>
          <!-- Menu Reportes -->
          <li>
            <a href="calendar.html" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-layers"></span><span class="mtext">Reportes</span>
            </a>
          </li>
          <!-- Menu Configuracion -->
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-settings2"></span><span class="mtext">Configuración</span>
            </a>
            <ul class="submenu">
              <li><a href="confiProducto.php">Configuracion de Productos</a></li>
              <li><a href="datatable.html">DataTables</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </div>
  <!-- Fin del Menu derecho -->
  <div class="mobile-menu-overlay"></div>