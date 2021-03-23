<?php
include("abrir_conexion.php");
session_start();
if (isset($_SESSION['id_usuario'])){
  header("Location: login.php");
}
//login
if (!empty($_POST)){
$usuario = mysqli_real_escape_string($conexion,$_POST['user']);
$password = mysqli_real_escape_string($conexion,$_POST['pass']);
$sql = "SELECT id_usuarios FROM usuario
         WHERE nom_usuario = '$usuario' AND pass_usuario = '$password' ";
$resultado = $conexion->query($sql);
$rows = $resultado->num_rows;
if ($rows > 0){
  $row = $resultado->fetch_assoc();
  $_SESSION['id_usuario'] = $row["id_usuarios"];
  header("location: index.php");
}else{
  echo "<script>
       alert('Usuario o Password Incorrecto');
       window.location = 'login.php';
       </script>";
}

//Registrar usuario
if (isset($_POST["registrar"])){
$nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
$correo = mysqli_real_escape_string($conexion,$_POST['correo']);
$usuario = mysqli_real_escape_string($conexion,$_POST['user']);
$password = mysqli_real_escape_string($conexion,$_POST['pass']);
$password_encriptada = sha1($password);
$sqluser = "SELECT idusuarios FROM usuarios
                 WHERE usuario = '$usuario'";
$resultadouser = $conexion->query($sqluser);
$filas = $resultadouser->num_rows;
if ($filas > 0) {
  echo "<script>
       alert('El usuario ya existe');
       window.location = 'index.php';
       </script>";
     }else{
      //insertar informacion del usuario
      $sqlusuario = "INSERT INTO usuarios(Nombre,Correo,Usuario,Password)
      VALUES ('$nombre','$correo','$usuario','$password_encriptada')";
      $resultadousuario = $conexion->query($sqlusuario);

      if ($resultadousuario > 0){

        echo "<script>
       alert('Registro Exitoso');
       window.location = 'index.php';
       </script>";
      }else{
        echo "<script>
       alert('Error al Registrarse');
       window.location = 'index.php';
       </script>";
      }
    }
    }
}

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

<body class="login-page">

  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-lg-7">
          <img src="vendors/images/login-page-img.png" alt="">
        </div>
        <div class="col-md-6 col-lg-5">
          <div class="login-box bg-white box-shadow border-radius-10">
            <div class="login-title">
              <h2 class="text-center text-primary">Inicio de Sección</h2>
            </div>
            <form>
              <div class="select-role">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn active">
                    <input type="radio" name="options" id="admin">
                    <div class="icon"><img src="vendors/images/briefcase.svg" class="svg" alt=""></div>
                    <span>Soy</span>
                    Gerente
                  </label>
                  <label class="btn">
                    <input type="radio" name="options" id="user">
                    <div class="icon"><img src="vendors/images/person.svg" class="svg" alt=""></div>
                    <span>Soy</span>
                    Empleado
                  </label>
                </div>
              </div>
              <div class="input-group custom">
                <input type="text" class="form-control form-control-lg" placeholder="Usuario">
                <div class="input-group-append custom">
                  <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                </div>
              </div>
              <div class="input-group custom">
                <input type="password" class="form-control form-control-lg" placeholder="**********">
                <div class="input-group-append custom">
                  <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                </div>
              </div>
              <div class="row pb-30">
                <div class="col-6">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Recuerdame</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="forgot-password"><a href="forgot-password.html">¿Has olvidado tu contraseña?</a></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="input-group mb-0">
                    <!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
                    <a class="btn btn-primary btn-lg btn-block" href="index.html">Iniciar Sección</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
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