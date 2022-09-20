<?php include ("../invitado/headerinvitado.php");?>
<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="css/bootstrap-reboot.css.map">

  <section> 
    <div class="container-sm mt-5">
      <div class="gallery  border-2 p-3">
        <div class="image"><span><img src="../assets/img/nuevas/fachada.jpeg" alt=""></span></div>
        <div class="image"><span><img src="../assets/img/nuevas/recep.jpeg" alt=""></span></div>
        <div class="image"><span><img src="../assets/img/nuevas/pas1.jpeg" alt=""></span></div>
        <div class="image"><span><img src="../assets/img/nuevas/pas_gra1.jpeg" alt=""></span></div>
        <div class="image"><span><img src="../assets/img/nuevas/nv1.jpeg" alt=""></span></div>
        <div class="image"><span><img src=".//assets/img/nuevas/nv1_2.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv2.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv2_1.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv3.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv3_1.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv4.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv5_2.jpeg" alt=""></span></div>
        
        
      </div>
    </div>
    <div class="preview-box">
      <div class="details" data-bs-toggle="image-box" data-bs-target="#image-box">
        <span class="title">Image <p class="current-img"></p> of <p class="total-img"></p></span>
        <span class="icon fas fa-times"></span>
      </div>


      <div class="image-box">
      <div class="slide prev"><i class="fas fa-angle-left"></i></div>
        <div class="slide next"><i class="fas fa-angle-right"></i></div>
        <img src="" alt="">
      </div>
    </div>
    <div class="shadow"></div>

  </section>

  <section class="galeria container mt-5">
    <div class="contenedor top">
        <div class="cont_nosotros">
            <h1>FOTOS</h1>
           <p>Estas son algunas fotografías de nuestras habitaciones de los diferentes modalidades como lo es la doble y la individual.
        </div>
    </div>

    <div class="contain">
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div class="i">
                <div class="imagen">
                    <img src="assets/img/img3.jpeg" alt="">
                </div>
            </div>
            <div class="i">
                <div class="imagen">
                    <img src="assets/img/nuevas/nv1.jpeg" alt="">
                </div>
            </div>
            <div class="i">
                <div class="imagen">
                    <img src="assets/img/img4.jpeg" alt="">
                </div>
            </div>
            <div class="i">
                <div class="imagen">
                    <img src="assets/img/nuevas/nv5.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    $('.owl-carousel1').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
            },
            1000: {
                items: 3
            }
        }
    })
</script>


<?php include ("templates/footer.php");?>


  <script src="/assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>

</body>

</html>