<!--   CONEXION A LA BASE DE DATOS -->
<?php
include_once "bd/conexion.php"
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Agregar Proveedores</title>

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
		<div class="page-header d-flex justify-content-between align-items-center">
		<div class="col-md-6 col-sm-12">
	    <div class="title">
		<h4>Sistema Inversiones Picki</h4>
	</div>
	<nav aria-label="breadcrumb" role="navigation">
	<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
	<li class="breadcrumb-item active" aria-current="addProveedores.php">addProveedores</li>
	</ol>
	</nav>
	</div>          
    </div>
	<div class="pd-20 card-box mb-30">
    <div class="clearfix">
	<h4 class="text-blue h4">Agregar nuevo proveedor</h4>
	</div>
	<p>	
	</p>
	<p>	
	</p>
	<div class="col-md-12" align="right">
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#small-modaladdbanco">Agregar banco</button>  </div>
     <div class="modal fade" id="small-modaladdbanco" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-sm modal-dialog-centered">
     <div class="modal-content">
     <div class="modal-header">
     <h5 class="modal-title" id="myLargeModalLabel">Registrar Banco</h5>
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body">
     <form id="Agregarbanco" class="needs-validation" novalidate action="bd/insert_bancos.php" id="formBanco" name="formBanco" method="POST">
     <div class="row">
     <div class="col-md-12 col-sm-12">
      <!-- Nombre del banco-->
     <div class="form-group">
     <label for="nombre">Nombre del Banco: <span class="text-red-50">*</span> </label>
     <input type="text" id="nombre" name="nombre" placeholder="Ficohsa" minlength="6" maxlength="30" pattern="[a-zA-Z ]+" class="form-control" required>
      <div class="valid-feedback">Valido</div>
        <div class="invalid-feedback">Por favor, rellena el campo</div>
        </div>
         <div class="form-group">
          <label for="abr">Abreviatura: <span class="text-red-50">*</span> </label>
          <input type="text" id="abr" name="abr" placeholder="Fic" minlength="3" maxlength="8" pattern="[a-zA-Z ]+" class="form-control" required>
           <div class="valid-feedback">Valido</div>
          <div class="invalid-feedback">Por favor, rellena el campo</div>
           </div>
           </div>
           </div>
           <div class="text-right">
           <button id="btnActionForm" type="submit" class="btn btn-success"><span id="btnTex">Registrar</span></button>
           <button type="button" class="btn btn-danger" data-dismiss="modal" >Cerrar</button>
           </div>
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
             </form>
             </div>
             </div>
             </div>
             </div>
			  <form method="post" action="bd/insert_proveedores.php" class="needs-validation" novalidate>
			  <h5>Banco</h5>
			 <div class="row">
			 <div class="col-md-6">
		     <div class="form-group">
			<label for="banco" >seleccionar banco:</label>
            <select class="form-control form-control-lg" id="banco" name="banco" required>
            <option selected=""></option>
            <!--halar datos de db -->
            <?php
            $Cod_banco = $conexion->query("SELECT * FROM `entidad_banco`")->fetchAll(PDO::FETCH_OBJ);
             foreach($Cod_banco as $nombre_banco) : 
             echo '<option value = " '.$nombre_banco->id_banco.' ">' .$nombre_banco->nom_banco. '</option>';
              endforeach;
            ?>
            </select>
            <div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Por favor, rellena el campo</div>
		    </div>
			</div>
		    <div class="col-md-6">
	        <div class="form-group">
		    <label for="numcuenta">Numero de Cuenta :</label>
			<input type="text" class="form-control" name="numcuenta" id="numcuenta" required placeholder="2001345134" minlength="8" maxlength="30" pattern="[0-9]+">
			<div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Por favor, rellena el campo</div>
			</div>
			</div>
			</div>
			<!-- Step 2 -->
			<h5>Contacto empresa</h5>
		    <div class="row">
			<div class="col-md-6">
			<div class="form-group">
			<label for="conempresa">Nombre del Contacto :</label>
			<input type="text" class="form-control" required name="conempresa" id="conempresa" maxlength="50" placeholder="Jose mejia" minlength="3" pattern="[a-zA-Z ]+">
			<div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Por favor, rellena el campo</div>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
			<label for="nomempresa">Nombre de la empresa :</label>
			<input type="text" class="form-control" required name="nomempresa" id="nomempresa" maxlength="50" placeholder="Maxibodegas" minlength="3" pattern="[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9- ]+(?:\.[a-zA-Z0-9-]+)*$]+">
			<div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Por favor, rellena el campo</div>
			</div>
			</div>
		    <div class="col-md-6">
			<div class="form-group">
			<label for="rtnempresa">RTN de la empresa :</label>
			<input type="text" class="form-control" required name="rtnempresa" id="rtnempresa" maxlength="14" placeholder="2454343533" minlength="14" pattern="[0-9]+">
			<div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Por favor, rellena el campo</div>
			</div>
			</div>
			</div>
			<!-- Step 3 -->
			<h5>Informacion Empresa</h5>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
			<label for="telefono">Telefono :</label>
			<input type="text" class="form-control" required name="telefono" id="telefono" maxlength="12" placeholder="99442199"minlength="8" pattern="[0-9]+">
			<div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Por favor, rellena el campo</div>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
			<label for="direccion">Direccion:</label>
			<input type="text" class="form-control" required name="direccion" id="direccion" maxlength="250" placeholder="Col.kennedy, calle 3"pattern="[[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9- ]+(?:\.[a-zA-Z0-9-]+)*$]+">
			<div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Por favor, rellena el campo</div>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
			<label for="correo">Correo Electronico :</label>
			<input type="text" class="form-control" placeholder="Maxibodegas@gmail.com" required name="correo" id="correo" minlength="10" maxlength="40" pattern="[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9- ]+(?:\.[a-zA-Z0-9-]+)*$]+">
			<div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Por favor, rellena el campo</div>
			</div>
			</div>
			</div>
			<div class="text-center">
			<input type="submit" class="btn btn-primary" name="guardar" id="guardar">
			</div>
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
		     </form>
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