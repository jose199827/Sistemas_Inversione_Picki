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
      
         <div class="pd-20 card-box mb-30">
			 <div class="clearfix">
			     <h4 class="text-blue h4">Registrar Empleados</h4>
		     </div>
		     <div class="wizard-content">
		        	<form class="tab-wizard wizard-circle wizard" class="needs-validation" novalidate>
							<h5>Información Personal</h5>
							<section>
								<div class="row">
									<div class="col-md-6">		 
                                    <div class="form-group">
                            <label >Nombres de la Persona:</label>
                      <input type="text" name="nombre" maxlength="50" class="form-control" required pattern="^[A-Za-z ]*$">
                      <span class="msj"></span>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Por favor, rellena el campo</div>
                    </div>

									</div>
									<div class="col-md-6">
                    <div class="form-group">
                      <label for="apellido">Apellido:</label>
                      <input type="text" class="form-control form-control-lg" id="apellido" name="apellido">
                   </div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
                    <div class="form-group">
                      <label for="identidad">Num. Identidad:</label>
                      <input type="text" class="form-control form-control-lg" id="identidad" name="identidad">
                   </div>
									</div>
									<div class="col-md-6">
                    <div class="form-group">
                      <label for="edad">Edad:</label>
                      <input type="number" value="" class="form-control form-control-lg" id="edad" name="edad">
                   </div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
                    <div class="form-group">
                      <label for="nacimiento">Fecha de Nacimiento:</label>
                      <input type="date" class="form-control form-control-lg" id="nacimiento" name="nacimiento">
                   </div>
									</div>
									<div class="col-md-6">
                    <div class="form-group">
                      <label for="genero">Género:</label>
                      <select class="form-control form-control-lg" id="genero" name="genero">
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
                      <input type="email" class="form-control form-control-lg" id="correo" name="correo">
                   </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                      <label for="telefono">Teléfono: </label>
                      <input type="text" class="form-control form-control-lg" id="telefono" name="telefono">
                    </div>
									</div>
									<div class="col-md-12">
                    <div class="form-group">                   
                      <label for="direccion">Dirección:</label>
                      <textarea class="form-control" rows="5" id="direccion" name="direccion"></textarea>
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
                       <input type="text" class="form-control form-control-lg" id="password" name="password">
                     </div>   
                   </div>
                 </div>
                 <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label for="pregunta1">Preguntas de Seguridad:</label>
                         <select class="form-control form-control-lg" id="genero" name="pregunta1">
                           <option></option>
                           <option>Nombre de tu mascota de la infancia</option>
                           <option>Masculino</option>
                           <option>Otro</option>
                         </select>
                       </div> 
                     </div>
                    
                     <div class="col-md-6">
                        <div class="form-group">
                          </br>
                            <input type="text" class="form-control form-control-lg" id="password">
                         </div>   
                     </div>
                   </div>	 
                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label for="pregunta1"></label>
                         <select class="form-control form-control-lg" id="genero" name="pregunta1">
                           <option></option>
                           <option>Nombre de tu mascota de la infancia</option>
                           <option>Masculino</option>
                           <option>Otro</option>
                         </select>
                       </div> 
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                          <label for="pregunta1"></label>
                            <input type="text" class="form-control form-control-lg" id="password">
                         </div>   
                     </div>
                   </div>	 
				</section>
				</form>
                <script>
                // Disable form submissions if there are invalid fields
                (function() {
                  'use strict';
                  window.addEventListener('load', function() {
                    // Get the forms we want to add validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                      form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                      }, false);
                    });
                  }, false);
                })();
              </script>

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
  <script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>