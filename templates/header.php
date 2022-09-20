<?php
session_start();
if (!isset($_SESSION['txtNomusuario'])){
  header("Location:invitado/home.php");
}

$usuario=$_SESSION['txtNomusuario'];
$tipo=$_SESSION['txtTipoUsuario'];

echo $usuario;
echo $tipo;

$sql = "SELECT id,txtcontra,txtNomusuario,txtTipoUsuario  FROM clientesreg WHERE txtNomusuario='$usuario'";
$mysqli = new mysqli('localhost', 'root', '', 'hoteldiegob_bd');
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Diego</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/js/bootstrap.min.js">
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">

</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand mx-3" href="#">
          <img src="assets/img/logo10.png " alt="" width="200" height="130" class="d-inline-block align-text-top">
    
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galeria.php">GALERIA</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="reservacion.php">RESERVACION</a>
            </li>
           
              
            <li class="nav-item">
              <a class="nav-link" href="acercade.php">ACERCA DE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto.php">CONTACTANOS</a>
            </li>
            <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           
              <?php echo utf8_decode($row['txtNomusuario']);?>
              <?php echo utf8_decode($row['txtTipoUsuario']);?>

             </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="#">reservaciones</a></li>
            <li><a class="dropdown-item" href="login.php">ACCEDER</li>
            <li><a class="dropdown-item" href="logout.php">cerrar seccion</a></li>
          </ul>
        </li>


          </ul>
          



          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="BUSCAR" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">BUSCAR</button>
          </form> 

        </div>
      </div>
    </nav>

  </header>
  
</body>

</html>
 