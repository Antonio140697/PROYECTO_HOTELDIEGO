
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
            <small> BIENVENIDO</small>
           
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="#">reservaciones</a></li>
            <li><a class="dropdown-item" href="login.php">ACCEDER</li>
            <li><a class="dropdown-item" href="logout.php">cerrar seccion</a></li>
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
  
  <section class="container-fluid inicio pt-3">
    <div class="row justify-content-center">
      <div class="col-12"> 
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" autoplayTimeout: 100>
              <img class="rouned mx-auto img-fluid" src="assets/img/nuevas/fachada.jpeg"  width="100%" height="50px" alt="...">
            </div>
            <div class="carousel-item ">
              <img class="rouned mx-auto img-fluid" src="assets/img/nuevas/pas2.jpeg" width="100%" height="50px" alt="...">
            </div>
            <div class="carousel-item ">
              <img class="rouned mx-auto img-fluid" src="assets/img/nuevas/recep.jpeg"  width="100%" height="50px" alt="...">
            </div>
            <div class="carousel-item ">
              <img class="rouned mx-auto img-fluid" src="assets/img/nuevas/pas_gra1.jpeg"  width="100%" height="50px" alt="...">
            </div>
          </div>
        </div>

      </div>
    </div>

    
  </section>

  <div class="home-uno container-sm pt-5">
    <section class="main row">
      <article class="col-xs-12 col-sm-10 col-md-9 col-lg-6">
        <h1>HOTEL DIEGO</h1>
        <p class="">
          Actualmente el Hotel Diego sirve a la sociedad y p??blico en general en brindarles servicios de hospedaje, con
          diferentes comodidades y precios accesibles para sus clientes, contiene algunos contratos con servicios de
          transporte, trabaja las 24 horas de la semana, y cuenta con un alto personal en mantenimiento para poder
          brindarles calidad y cuartos limpios.
        </p>
        <a type="button" href="acercade.html" class="btn btn-outline-success btn-lg">leer mas...</a>
      </article>
      <aside class="col-xs-12 col-sm-2 col-md-3 col-lg-6">

        <img class="rouned mx-auto img-fluid mt-2" src="assets/img/nuevas/recep.jpeg" alt="">
      </aside>
  </div>

  </section>
  <!-- <section class="form-cons container-fluid mt-4">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h1><span>RESERVE</span> SUS HABITACIONES</h1>
        </div>
        <form action="">
          <div class="row g-5">
            <div class="col-sm-3 pb-2">
              <input type="date" class="form-control" placeholder="ingreso" aria-label="ingreso">
            </div>
            <div class="col-sm-3">
              <input type="date" class="form-control" placeholder="Salida" aria-label="Salida">
            </div>
            <div class="col-sm-2">
              <input type="number" class="form-control" placeholder="Adultos" aria-label="Adultos">
            </div>
            <div class="col-sm-2">
              <input type="number" class="form-control" placeholder="Ni??os" aria-label="Ni??os">
            </div>
            <div class="col-sm-2">
              <input type="submit" value="Disponibilidad" class="form-control btn btn-success"
                aria-label="Disponibilidad">
            </div>
          </div>
        </form>
      </div>
    </div>
  </section> -->

  <section class="servicios mt-5">
    <div class="container-sm pt-3">
      <div class="main row justify-content-center">
                <div class="col-8">
          <h1 class="">SERVICIOS</h1>
          <p>En este hotel le ofrecemos los mejores servicios en hospedaje, excelentes y c??modas habitaciones as?? como
            un buen ambiente para disfrutar de un buen descanso, adem??s de contar con los servicios de facturaci??n,
            estacionamiento y wifi de calidad, todo esto solo lo encuentras con nosotros en el Hotel Diego .</p>
        </div>
      </div>
      <div class="row-lo row">
        <article class=" col-xs-12 col-sm-10 col-md-9 col-lg-6">
          <div class="row g-2">
            <div class="row-lop  col-6 ">
              <div class="bj p-3 border rounded border-4 ">
                <i class="fa-solid fa-square-parking"></i>
                <h3>ESTACIONAMIENTO</h3>
              </div>
            </div>
            <div class="row-lop col-6">
              <div class="p-3 border rounded border-5 bj">
                <i class="fa-solid fa-wifi"></i>
                <h3>WI-FI</h3>
              </div>
            </div>
            <div class=" row-lop col-6">
              <div class="p-3 border rounded border-5 bj">
                <i class="fa-solid fa-file-signature"></i>
                <h3>FACTURACION</h3>
              </div>
            </div>
            <div class="row-lop col-6">
              <div class="p-3 border rounded border-5 bj">
                <i class="fa-solid fa-building-user"></i>
                <h3>RESERVACION</h3>
              </div>
            </div>
          </div>
        </article>
        <aside class="col-xs-12 col-sm-2 col-md-3 col-lg-6">
          <img class="rouned mb-5 img-fluid" src="assets/img/logo10.png" alt="">
        </aside>
      </div>
    </div>
  </section>

  <section class="reser_inicio">
    <div class="container-sm pt-3">
      <div class="main row justify-content-center">
      <div class="col-8">
        <h1>RESERVAR</h1>
        <p>Contamos con un sistema de reservaci??n 
          de nuetras habitaciones facilitando a nuestros clientes la reservaci??n de una forma r??pida y eficiente. <br> Usted puede elegir la habitacion que mas se acomodes o guste en cualquier momento.</p>
      </div>
    </div>
      <div class="row justify-content-md-center">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="card">
            <img src="assets/img/nuevas/nv1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">HABITACION DOBLE</h5>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <p class="card-text">Habiatacion Doble: la habitaci??n doble cuenta con 2 camas ideal para 4 personas.
              </p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="m-2 fa fa-television"></i>TV A COLOR</li>
                <li class="list-group-item"><i class="m-2 fa fa-wifi"></i>WI-FI</li>
                <li class="list-group-item"><i class="m-2 fa fa-toilet"></i>BA??O</li>
              </ul>
            </div>
            <div class="card-body text-end">
              <h3>$500 <span> <br> Por Noche </span> </h3>
              <button class="btn btn-primary">RESERVAR</button>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="card">
            <img src="assets/img/nuevas/nv3.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">HABITACION INDIVIDUAL</h5>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <p class="card-text">Habitaci??n Individual: la habitaci??n individual cuenta con 1 cama ideal para 2 personas. </p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="m-2 fa fa-television"></i>TV A COLOR</li>
                <li class="list-group-item"><i class="m-2 fa fa-wifi"></i>WI-FI</li>
                <li class="list-group-item"><i class="m-2 fa fa-toilet"></i>BA??O</li>
              </ul>
            </div>
            <div class="card-body text-end">
              <h3>$300 <span> <br> Por Noche </span> </h3>
              <button class="btn btn-primary">RESERVAR</button>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="card border-2 border-dark">
            <img src="assets/img/nuevas/nv4.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">HABITACION DOBLE</h5>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <p class="card-text">Habiatacion Doble: la habitaci??n doble cuenta con 2 camas ideal para 4 personas.</p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="m-2 fa fa-television"></i>TV A COLOR</li>
                <li class="list-group-item"><i class="m-2 fa fa-wifi"></i>WI-FI</li>
                <li class="list-group-item"><i class="m-2 fa fa-toilet"></i>BA??O</li>
              </ul>
            </div>
            <div class="card-body text-end">
              <h3>$500 <span> <br> Por Noche </span> </h3>
              <button class="btn btn-primary">RESERVAR</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid calificacion mt-5">
    <div class=" main row justify-content-center">
    <div class="col-8">
      <h1>CONOCENOS</h1>
      <p>En el Hotel Diego nos caracterizamos del resto por las principales razones de la calidad de nuestros servicios, asi como tambi??n fomentar algunos valores morales y personales que nos distingues y que creemos que son de suma importancia fomentar en nuestros servicios y principalmente con nuestros clientes.</p>
    
    <div class="wrapper">
      <div class="container">
          <h2>AMABILIDAD</h2>
          <div class="loading-bar bar_uno">
         <span style="width: 100%"></span>
       </div>
      <h2>RESPONSABILIDAD</h2>
       <div class="loading-bar bar_dos">
         <span style="width: 100%"></span>
       </div>
      <h2>EFICIENCIA</h2>
       <div class="loading-bar bar_tres">
         <span style="width: 100%"></span>
       </div>
      <h2>SERVICIO</h2>
       <div class="loading-bar bar_cuatro">
         <span style="width: 100%"></span>
       </div>
      </div>
   </div>
  </div>
</div>
  </section>


  <footer>
    <div class="footer">
      <div class="container">
        <div class=" main row">
          <div class="col-md-6 col-lg-5">
            <div class="footer-link">
              <img class="rouned mx-auto img-fluid" src="assets/img/logo10.png" alt="">
                          <p class="text-align-justify">Entre sus catividades primordiales es la reservaci??n v??a llamada y de forma presencial que se 
                hacen para obtener la reservaci??n de un cuarto, dependiendo de la disponibilidad al 
                momento en el Hotel</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="footer-contact text-center">
              <h2>VISITANOS</h2>
              <p><i class="fa fa-map-marker-alt"></i>BARRIO CRUZ GRANDE, AVENIDA CENTRAL NORTE #209, COMITAN DE 
                                                      DOMINGUEZ CHIAPAS, C.P. 30019</p>
              <p><i class="fa fa-phone-alt"></i> [+52] 963 100 01 66</p>
              <p><i class="fa fa-envelope"></i>hoteldiegocomitan@gmail.com</p>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="footer-link">
              <h2>Link</h2>
              <a href="">Nosotros</a>
              <a href="">Contactanos</a>
              <a href="">Servicios</a>
              <a href="">Galeria</a>
              <a href="">Contact Us</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="footer-contact">
              <h2>REDES SOCIALES</h2>
                           <div class="footer-social">
               
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-whatsapp"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
               
              </div>
            </div>
          </div>

        
        </div>
      </div>

    </div>
    </div>
    </div>
    </div>

  </footer>
              </body>
              </html>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
