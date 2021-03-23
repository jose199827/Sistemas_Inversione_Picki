<!DOCTYPE html>
<html>
<head>
  <!-- Basic Page Info -->
  <meta charset="utf-8">
  <title>Agregar Cliente</title>

  <!-- Site favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

</head>
<body>
   <!-- Parte del menu principal -->
     <?php require("partes/parteMenu.php"); ?>
     <!-- Fin Parte del menu principal -->

  
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
                  <li class="breadcrumb-item"><a href="clientes.php">Clientes</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Agregar Clientes</li>
                </ol>
              </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">

              <a href="Tablacontrol_clientes.php"><input type="button" class="btn btn-primary btn-lg" value="Ver Clientes"></a>
                    
                </div>
              </div>
            </div>
      

        <div class="pd-20 card-box mb-30">
          <div class="clearfix">
            <h4 class="text-blue h4">Agregar Nuevo Cliente</h4>
          </div>
          <div class="wizard-content">
            <form class="tab-wizard wizard-circle wizard">
              <h5>Persona</h5>
              <section>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label >Nombre de la Persona:</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label >Apellido de la Persona :</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label >Edad :</label>
                      <input type="text" class="form-control">
                    </div>
                  </div> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label >Fecha de Nacimiento :</label>
                      <input type="text" class="form-control date-picker" placeholder="Seleccione Fecha">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Genero :</label>
                      <select class="custom-select form-control">
                        <option value="">Seleccione</option>
                        <option value="Amsterdam">Femenino</option>
                        <option value="Berlin">Masculino</option>
                        <option value="Frankfurt">Otro</option>
                      </select>
                    </div>
                  </div>
      
              </div>
            </section>

              <!-- Step 2 -->
              <h5>Correo</h5>
              <section>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Correo Electronico :</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
              </section>

              <!-- Step 3 -->
              <h5>Telefono</h5>
              <section>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Telefono :</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
              </section>

              <!-- Step 4 -->
              <h5>Tipo</h5>
              <section>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Tipo de Cliente :</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
              </section>

              <!-- Step 5 -->
              <h5>Informacion del Cliente</h5>
              <section>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>RTN Empresa :</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nombre de la Empresa:</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </section>
            </form>
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
  <script src="src/plugins/jquery-steps/jquery.steps.js"></script>
  <script src="vendors/scripts/steps-setting.js"></script>
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