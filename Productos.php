<!--   CONEXION A LA BASE DE DATOS -->
<?php
include_once "bd/conexion.php"
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic Page Info -->
  <meta charset="utf-8">
  <title>Sistema de Facturación Picki</title>

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
  <!-- Parte del menu principal -->
  <?php require("partes/parteMenu.php"); ?>
  <!-- Fin Parte del menu principal -->
<?php
    
	
    //*************PAGINADOR**************** */
    $tamano_pagina = 5;
    if (isset($_GET["pagina"])) {
        if ($_GET["pagina"] == 1) {
            header("Location:http://localhost/Sistemas_Inversione_Picki/Productos.php");
        } else {
            $pagina = $_GET["pagina"];
        }

        
    } else {

        $pagina = 1;
    }

    $empezar_desde = ($pagina - 1) * $tamano_pagina;
    $sql_total = "SELECT * FROM `productos`";
    $resultado = $conexion->prepare($sql_total);
    $resultado->execute(array());
    $num_filas = $resultado->rowCount();
    $total_paginas = ceil($num_filas / $tamano_pagina);
    //************END PAGINADOR***************** */
    //************Select Para proveedores***************** */
    $registro_productos = $conexion->query("SELECT `id_producto`,`nom_producto`,`des_producto`, `fot_producto`, `pre_venta` FROM `productos` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
  ?>

  <div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
      <div class="min-height-200px">
        <div class="page-header">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="title">
                <h4>Productos</h4>
              </div>
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                </ol>
              </nav>
            </div>

          </div>
        </div>
        <!-- Inicio del Contenido -->
        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
          <!-- Simple Datatable start -->
          <div class="card-box mb-30">
            <div class="pd-20">
              <h4 class="text-blue h4">Tabla de Productos </h4>
            </div>
            <div class="pb-20">
              <table class="table hover data-table-export nowrap">
                <thead>
                  <tr>
                    <th class="table-plus">N.º</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th class="datatable-nosort">Foto</th>
                    <th>Precio</th>
                    <th class="datatable-nosort">Acciones</th>
                  </tr>
                </thead>
                <tbody>
    <?php foreach ($registro_productos as $productos) : ?>
    <tr>
    <td class="table-plus">
    <?php echo $productos->id_producto?>
	</td>
	<td>
	<?php echo $productos->nom_producto ?>
	</td>
	<td>
	<?php echo $productos->des_producto ?>
	</td>
	<td>
	<img src="vendors/images/product-2.jpg" class="rounded-circle" width="35">
	</td>
	<td>
	<?php echo $productos->pre_venta ?>
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
        <!-- Simple Datatable End -->
        <div class="card-box mb-30">
          <div class="pd-20">
            <h4 class="text-blue h4">Registrar Producto</h4>
            <form method="post" action="bd/insert_productos.php" class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <!-- Nombre del producto -->
                  <div class="form-group">
                    <label>Nombre de Producto: <span class="text-red-50">*</span> </label>
                    <input type="text" class="form-control" required name="nomproducto" id="nomproducto" maxlength="50" placeholder="zapatos nike" minlength="6" pattern="[a-zA-Z0-9 ]+">
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                  <!-- Descripción -->
                  <div class="form-group">
                    <label>Descripción: </label>
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="20" rows="10" style="resize:vertical; height: 140px;" required pattern="[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9- ]+(?:\.[a-zA-Z0-9-]+)*$]+" maxlength="250" minlength="10"></textarea>
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                  <!-- Foto del producto -->
                  <div class="form-group">
                    <label>Foto del producto</label>
                    <input type="file" class="form-control-file border form-control-lg" name="foto" id="foto" required>
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                  <!-- Proveedor -->
                  <div class="form-group">
                    <label>Proveedor: <span class="text-red-50">*</span></label>
                    <select class="form-control form-control-lg" id="proveedor" name="proveedor" required>
                    <option selected=""></option>
                    <!--halar datos de db -->
                    <?php
                    $Cod_proveedor = $conexion->query("SELECT * FROM `proveedores`")->fetchAll(PDO::FETCH_OBJ);
                    foreach($Cod_proveedor as $nombre_proveedor) : 
                    echo '<option value = " '.$nombre_proveedor->id_proveedor.' ">' .$nombre_proveedor->nom_empresa. '</option>';
                    endforeach;
                    ?>
                    </select>
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                  <!-- Marca -->
                  <div class="form-group">
                    <label>Marca: <span class="text-red-50">*</span></label>
                    <select class="form-control form-control-lg" id="marca" name="marca" required>
                    <option selected=""></option>
                    <!--halar datos de db -->
                    <?php
                    $Cod_marca = $conexion->query("SELECT * FROM `marcas`")->fetchAll(PDO::FETCH_OBJ);
                    foreach($Cod_marca as $nombre_marca) : 
                    echo '<option value = " '.$nombre_marca->id_marca.' ">' .$nombre_marca->marca. '</option>';
                    endforeach;
                    ?>
                    </select>
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                  <!-- Categoria -->
                  <div class="form-group">
                    <label>Categoria: </label>
                    <select class="form-control form-control-lg" id="categorias" name="categorias" required>
                    <option selected=""></option>
                    <!--halar datos de db -->
                    <?php
                    $Cod_categorias = $conexion->query("SELECT * FROM `categorias`")->fetchAll(PDO::FETCH_OBJ);
                    foreach($Cod_categorias as $nombre_categorias) : 
                    echo '<option value = " '.$nombre_categorias->id_categoria.' ">' .$nombre_categorias->categoria. '</option>';
                    endforeach;
                    ?>
                    </select>
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                  <!-- Grupo -->
                  <div class="form-group">
                    <label>Grupo: </label>
                    <select class="form-control form-control-lg" id="grupo" name="grupo" required>
                    <option selected=""></option>
                    <!--halar datos de db -->
                    <?php
                    $Cod_grupos = $conexion->query("SELECT * FROM `grupos`")->fetchAll(PDO::FETCH_OBJ);
                    foreach($Cod_grupos as $nombre_grupo) : 
                    echo '<option value = " '.$nombre_grupo->id_grupo.' ">' .$nombre_grupo->grupo. '</option>';
                    endforeach;
                    ?>
                    </select>
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12">
                  <!-- Precio Compra del producto -->
                  <div class="form-group">
                    <label>Precio de costo: <span class="text-red-50">*</span> </label>
                    <input type="number" min="1" class="form-control" id="pre_compra" name="pre_compra" required pattern="[0-9]+" placeholder="400">
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                  <!-- Precio Venta del producto -->
                  <div class="form-group">
                    <label>Precio de Venta: <span class="text-red-50">*</span> </label>
                    <input type="number" min="1" class="form-control" required id="pre_venta"  name="pre_venta" pattern="[0-9]+" placeholder="500">
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                  <!-- Isv -->
                  <div class="form-group">
                    <label>Isv: <span class="text-red-50">*</span></label>
                    <select class="form-control form-control-lg" id="isv" name="isv" required>
                    <option selected=""></option>
                    <!--halar datos de db -->
                    <?php
                    $Cod_isv = $conexion->query("SELECT * FROM `tipos_impuestos`")->fetchAll(PDO::FETCH_OBJ);
                    foreach($Cod_isv as $nombre_isv) : 
                    echo '<option value = " '.$nombre_isv->id_tip_impuestos.' ">' .$nombre_isv->porcentaje. '%</option>';
                    endforeach;
                    ?>
                    </select>
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                  <!-- Precio Bruto del producto -->
                  <div class="form-group">
                    <label>Precio Bruto (con isv): <span class="text-red-50">*</span> </label>
                    <input type="text" class="form-control" required id="pre_reventa" name="pre_reventa" readonly>
                    <script>
      function calc() {
        var precio = document.getElementById("preventa").value;
        var descuentoo = document.getElementById("isv").value;
        descuento = ((precio * descuentoo) / 100);
        var total = document.getElementById("pre_reventa");
        total.value = (precio + descuento);
      }
  </script>
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                  <!-- Stock Minimo del producto -->
                  <div class="form-group">
                    <label>Stock Minimo: </label>
                    <input type="number" min="1" class="form-control" required id="sto_minimo" name="sto_minimo" pattern="[0-9]+" placeholder="25">
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                  <!-- Stock Maximo del producto -->
                  <div class="form-group">
                    <label>Stock Maximo: </label>
                    <input type="number" min="1" class="form-control" required id="sto_maximo" name="sto_maximo" pattern="[0-9]+" placeholder="33">
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                  <!-- Unidad de medida -->
                  <div class="form-group">
                    <label>Unidad de medida: </label>
                    <select class="form-control form-control-lg" id="uni_medida" name="uni_medida" required>
                    <option selected=""></option>
                    <!--halar datos de db -->
                    <?php
                    $Cod_unidades_medidas = $conexion->query("SELECT * FROM `unidades_medidas`")->fetchAll(PDO::FETCH_OBJ);
                    foreach($Cod_unidades_medidas as $nombre_unidades_medidas) : 
                    echo '<option value = " '.$nombre_unidades_medidas->id_uni_medida.' ">' .$nombre_unidades_medidas->uni_medida. '</option>';
                    endforeach;
                    ?>
                    </select>
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Por favor, rellena el campo</div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12">
                  <img src="vendors/images/product-1.jpg" alt="">
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
  <!-- js para la tabla -->
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
  <script src="vendors/scripts/datatable-setting.js"></script>
  </script>
</body>
</body>

</html>