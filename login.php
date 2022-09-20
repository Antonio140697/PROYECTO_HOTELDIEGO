<style>
  body{
    background-color: red !important;
  }
  </style>

<title>Hotel Diego</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/js/bootstrap.min.js">
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">


  <section class="login container mt-5 ">
      <div class="container-xs m-5" >
    <div class="main row justify-content-md-center">
      <div class="col col-lg-2">
        <img src="assets/img/logo10.png" width="200" height="180" class="img-fluid my-5">
      </div>
      <div class="col col-md-auto">
        <form  method="POST" action="accesoCliente.php">
          <div class="mb-3 mt-3">
            <label for="text" class="form-label">USUARIO:</label>
            <input type="text" class="form-control" id="txtNomusuario" placeholder="Ingrese Usuario" name="txtNomusuario">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">CONTRESEÑA:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Ingrese contraseña" name="txtcontra">
          </div>
          
          <div class="mb-3">
          <a class="nav-link" href="registrarce.php">crea una cuenta</a>
          <a class="nav-link" href="home.php">cinicioa</a>
             </div>
         
          <button type="submit" class="btn btn-primary" >ACCEDER</button>
        </form>
      </div>

        
    </div>
  </section>
 
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>


  