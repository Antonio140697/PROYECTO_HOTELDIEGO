<?php include ("../invitado/headerinvitado.php");?>
<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="css/bootstrap-reboot.css.map">

  <section class="contacto pt-4">
    <div class="container-sm">
      <div class="section-header">
        <p>CONTACTANOS</p>

      </div>
      <div class="main row">
        <div class="col-md-6">
          <h1>ESTAMOS PARA ATENDERTE</h1>
          <form class="pt-3">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">ingrese su nombre completo</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">TELEFONO</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">CORREO</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">ESCRIBA SUS MENSAJE</label>

              <textarea class="form-control" id="exampleInputPassword1" placeholder="Escriba aqui.."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">ENVIAR</button>
          </form>
        </div>
        <div class="col-md-6 ">
          <h1>MAS INFORMACION</h1>
          <div class="accordion accordion-flush " id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  DIRECCION
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class=" accordion-body">
                  <p class="text-justify-content"><i class="fa fa-map-marker-alt"></i>BARRIO CRUZ GRANDE, AVENIDA
                    CENTRAL NORTE #209, COMITAN DE
                    DOMINGUEZ CHIAPAS, C.P. 30019</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  TELEFONO
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p><i class="fa fa-phone-alt"></i> [+52]963 100 01 66 </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  CORREO
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p><i class="fa fa-envelope"></i>hoteldiegocomitan@gmail.com</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingford">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseford" aria-expanded="false" aria-controls="flush-collapseThree">
                  REDES SOCIALES
                </button>
              </h2>
              <div id="flush-collapseford" class="accordion-collapse collapse" aria-labelledby="flush-headingford"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="footer-social">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-whatsapp"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>


  <section class="container-sm pt-5">
    <h1>UBICANOS</h1>

    <div class="col">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3830.2222176788973!2d-92.14993318582768!3d16.260377538607532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858d475ede655c29%3A0xbf1c1e8fcd0cbb35!2sHotel%20Diego!5e0!3m2!1ses-419!2smx!4v1658365984227!5m2!1ses-419!2smx"
        width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
  </section>
  <?php include ("templates/footer.php");?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>

</body>

</html>