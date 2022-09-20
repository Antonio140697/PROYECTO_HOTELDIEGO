

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Diego</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/js/bootstrap.min.js">
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">

</head>

<body>
<?php $url=$_SERVER['HTTP_HOST']."/Hotel_Diego" ?>
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
              <a class="nav-link active" aria-current="page" href="home.php">IN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active"  aria-current="page" href="<?php echo $url;?>/galeria.php">GALERIA</a>
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
          invitado
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          
            <li><a class="dropdown-item" href="controlacceso.php">ACCEDER</a></li>
          </ul>
        </li>


          </ul>
          



          <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="BUSCAR" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">BUSCAR</button>
          </form> -->

        </div>
      </div>
    </nav>

  </header>
  
</body>

</html>
 