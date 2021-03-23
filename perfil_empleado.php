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
    <style>
     .error{
     background-color: #FF9185;
     font-size: 12px;
     padding: 10px;
     }
     .correcto{
     background-color: #FF9185;
     font-size: 12px;
     padding: 10px;
    }   
  </style>
</head>

<body>
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
                                        <form  action="perfil_empleado.php" method="POST">
                                           <?php
                                                if (isset($_POST['nombre'])) {
                                                 $nombre = $_POST['nombre'];
                                                 $apellido = $_POST['apellido'];
                                                 $identidad = $_POST['identidad'];
                                                 $edad = $_POST['edad'];
                                                 $nacimiento = $_POST['nacimiento'];
                                                 $genero = $_POST['genero'];
                                                 $correo = $_POST['correo'];
                                                 $telefono = $_POST['telefono'];
                                                 $direccion = $_POST['direccion'];
                                                 $password = $_POST['password'];

                                                 $campos = array();

                                                 if ($nombre == "") {
                                                     array_push($campos, "Nombre obligatorio");
                                                   }
                                                 if ($apellido == "") {
                                                     array_push($campos, "Apellido obligatorio");
                                                    }
                                                 if ($identidad == "") {
                                                     array_push($campos, "Núm. de Identidad obligatorio");
                                                    } 
                                                 if ($edad == "" || strlen($edad) < 6) {
                                                     array_push($campos, "Edad obligatorio");
                                                    } 
                                                 if ($nacimiento == "") {
                                                     array_push($campos, "Fecha de nacimiento obligatorio");
                                                    } 
                                                 if ($correo == "" || strops($correo, "@") === false) {
                                                     array_push($campos, "Correo obligatorio");
                                                    }
                                                 if ($telefono == "") {
                                                        array_push($campos, "Telefono obligatorio");
                                                    } 
                                                 if ($direccion == "") {
                                                     array_push($campos, "Dirección obligatorio");
                                                    } 
                                                 if ($password == "" || strlen($password) < 6) {
                                                     array_push($campos, "Campo obligatorio");
                                                   }
                                                 if (count($campos) > 0) {
                                                     echo "<div class='error'>";
                                                     for ($i=0; $i < count($campos) ; $i++) { 
                                                         echo "<li>".$campos[$i]."</i>";
                                                        }
                                                    }else {
                                                     echo "<div class='correcto'>
                                                     Datos correctos";
                                                    }
                                                  echo "</div>";
                                                }
                                          ?>
                                            <ul class="profile-edit-list row">
                                                <!--Tabla Personas-->
                                                <li class="weight-500 col-md-6">
                                                    <h4 class="text-blue h5 mb-20">Datos Personales</h4>
                                                    <div class="form-group">
                                                        <label for="nombre">Nombre:</label>
                                                        <input class="form-control form-control-lg" type="text" id="nombre" name="nombre">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="apellido">Apellido:</label>
                                                        <input type="text" class="form-control form-control-lg" id="apellido" name="apellido">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="identidad">Num. Identidad:</label>
                                                        <input type="text" class="form-control form-control-lg" id="identidad" name="identidad">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="edad">Edad:</label>
                                                        <input type="number" value="" class="form-control form-control-lg" id="edad" name="edad">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nacimiento">Fecha de Nacimiento:</label>
                                                        <input type="date" class="form-control form-control-lg" id="nacimiento" name="nacimiento">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="genero">Género:</label>
                                                        <select class="form-control form-control-lg" id="genero" name="genero">
                                                          <option></option>
                                                          <option>Femenino</option>
                                                          <option>Masculino</option>
                                                          <option>Otro</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="correo">Correo Electrónico: </label>
                                                        <input type="email" class="form-control form-control-lg" id="correo" name="correo">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="telefono">Teléfono: </label>
                                                        <input type="text" class="form-control form-control-lg" id="telefono" name="telefono">
                                                      </div>
                                                    <div class="form-group">                   
                                                        <label for="direccion">Dirección:</label>
                                                        <textarea class="form-control" rows="5" id="direccion" name="direccion"></textarea>
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
                                                    <input type="text" class="form-control form-control-lg" id="Actual" name="Actual">
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
</body>

</html>