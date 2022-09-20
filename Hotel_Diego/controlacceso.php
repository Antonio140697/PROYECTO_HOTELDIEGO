<title>Hotel Diego</title>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/js/bootstrap.min.js">
<link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">


<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
      role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
      role="tab" aria-controls="pills-profile" aria-selected="false">CLIENTE</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button"
      role="tab" aria-controls="pills-contact" aria-selected="false">ADMINISTRADOR</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"></div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

    <title>Hotel Diego</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/js/bootstrap.min.js">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">


    <section class="login container mt-5 ">
      <div class="container-xs m-5">
        <div class="main row justify-content-md-center">
          <div class="col col-lg-2">
            <img src="assets/img/logo10.png" width="200" height="180" class="img-fluid my-5">
          </div>
          <div class="col col-md-auto">
            <form action="accesoCliente.php" method="post">
              <div class="mb-3 mt-3">
                <label for="text" class="form-label">USUARIO:</label>
                <input type="text" class="form-control" id="txtNomusuario" placeholder="Ingrese Usuario"
                  name="txtNomusuario">
              </div>
              <div class="mb-3">
                <label for="pwd" class="form-label">CONTRESEÑA:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Ingrese contraseña" name="txtcontra">
              </div>
              <div class="mb-3">
                <a class="nav-link" href="registrarce.php">crea una cuenta</a>
              </div>

              <button type="submit" class="btn btn-primary">ACCEDER</button>
            </form>
          </div>


        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>




  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <?php  
 
 if(isset($_SESSION["usuario"]))  
 {  
      header("location:galeria.php");  
 }  
 
 ?>
    <title>Hotel Diego</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/js/bootstrap.min.js">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">


    <section class="login container mt-5 ">
      <div class="container-xs m-5">
        <div class="main row justify-content-md-center">
          <div class="col col-lg-2">
            <img src="assets/img/logo10.png" width="200" height="180" class="img-fluid my-5">
          </div>
          <div class="col col-md-auto">
            <form action="Admin/accesoadm.php" method="post">
              <div class="mb-3 mt-3">
                <label for="text" class="form-label">INGRE SU USUARIO:</label>
                <input type="text" class="form-control" id="txtusuario" placeholder="Ingrese Usuario" name="txtusuario">
              </div>
              <div class="mb-3">
                <label for="pwd" class="form-label">CONTRESEÑA:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Ingrese contraseña" name="txtcontra">
              </div>
                           <button type="submit" class="btn btn-primary">ACCEDER</button>
            </form>
          </div>


        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>



  </div>
</div>