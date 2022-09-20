<title>Hotel Diego</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/js/bootstrap.min.js">
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">
<?php
include("bd.php");

?>

  <section class="login container mt-5 ">
      <div class=" m-5" >
    <div class="main row ">
      <div class="col col-md-10">
        <form action="validarclientes.php" method="post" class="form">
          <div class="mb-3 mt-3">
            <label for="text" class="form-label">Nombre :</label>
            <input type="text" class="form-control" id="" placeholder="Ingrese Usuario" name="txtNomcliente">
          </div>
          <div class="mb-3 mt-3">
            <label for="text" class="form-label">Apellido :</label>
            <input type="text" class="form-control" id="" placeholder="Ingrese Usuario" name="txtApcliente">
          </div>
          <div class="mb-3 mt-3">
            <label for="text" class="form-label">Telefono :</label>
            <input type="text" class="form-control" id="" placeholder="Ingrese Usuario" name="txtTelcliente">
          </div>
          <div class="mb-3 mt-3">
            <label for="gmail" class="form-label">correo :</label>
            <input type="gmail" class="form-control" id="" placeholder="Ingrese Usuario" name="txtCorreocliente">
          </div>
          <div class="mb-3 mt-3">
            <label for="text" class="form-label">usuario :</label>
            <input type="text" class="form-control" id="id" placeholder="Ingrese Usuario" name="txtNomusuario">
          </div>

          <div class="mb-3">
            <label for="pwd" class="form-label">contraseña:</label>
            <input type="password" class="form-control" id="" placeholder="Ingrese contraseña" name="txtcontra">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label"> confirma tu contraseña:</label>
            <input type="password" class="form-control" id="" placeholder="Ingrese contraseña" name="txtValcontra">
          </div>
          <div class="mb-3">
          <a class="nav-link" href="index.php">incio</a>
             </div>
         
          <input type="submit" class="btn btn-primary" name="registrar" value="registracer"></input>
        </form>
      </div>

        
    </div>
  </section>
 
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>


  