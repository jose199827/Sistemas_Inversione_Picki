<?php
include "../config.php";
class MySQL
{
  private $oConBD = null;
  public function __construct()
  {
    global $usuarioBD, $passBD, $ipBD;

    $this->usuarioBD = $usuarioBD;
    $this->passBD = $passBD;
    $this->ipBD = $ipBD;
  }
  public function conBDPDO()
  {
    try {
      $this->oConBD = new PDO("mysql:host=" . $this->ipBD, $this->usuarioBD, $this->passBD);

      echo "Conexion exitosa";
      return true;
    } catch (PDOException $e) {
      echo "Error al conectar a la base de datos: " . $e->getMessage() . "\n";
      echo "En la linea: " . $e->getLine() . "\n";
      return false;
    }
  }
}



