<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=   , initial-scale=1.0">
    <title>Administrador </title>
    <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="css/bootstrap-reboot.css.map">
 
</head>
<body>


  <section class=" container mt-5 ">
      <div class="container-xs m-5" >
    <div class="main row justify-content-md-center">
      <div class=" col-lg-2">
        <img src="img/logo10.png" width="200" height="180" class="img-fluid my-5">
      </div>
      <div class="col col-md-auto">
        <form  method="POST" action="accesoadm.php">
          <div class="mb-3 mt-3">
            <label for="text" class="form-label">USUARIO:</label>
            <input type="text" class="form-control" id="txtusuario" placeholder="Ingrese Usuario" name="txtusuario">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">CONTRESEÑA:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Ingrese contraseña" name="txtcontra">
          </div>
          
         
          <button type="submit" class="btn btn-primary" >ACCEDER</button>
        </form>
      </div>

        
    </div>
  </secti on>

</body>
</html>