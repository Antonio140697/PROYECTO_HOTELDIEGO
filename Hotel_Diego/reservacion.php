<?php include ("templates/header.php");?>
<?php include ("Admin/config/base.php");

$sentenciaSQL=$conexion->prepare("SELECT * FROM recamaras");
$sentenciaSQL->execute(); 
$listaRecamaras=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>

<section class=" container-fluid mt-4">

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
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
                        <input type="number" class="form-control" placeholder="Niños" aria-label="Niños">
                    </div>
                    <div class="col-sm-2">
                        <input type="submit" value="Disponibilidad" class="form-control btn btn-success"
                            aria-label="Disponibilidad">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="reser_inicio">
    <div class="container-sm pt-3">
        <div class="main row">
            <div class="col-12">
                <h1>RESERVAR</h1>
                <p>En este hotel le ofrecemos los mejores servicios en hospedaje, excelentes y cómodas habitaciones así
                    como
                    un buen ambiente para disfrutar de un buen descanso, además de contar con los servicios de
                    facturación,
                    estacionamiento y wifi de calidad, todo esto solo lo encuentras con nosotros en el Hotel Diego .</p>
            </div>
        </div>

        <?php foreach($listaRecamaras as $Recamara){?>
        <div class="container-sm ">
            <div class="main row ">
                <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="card border-2 border-dark">
                        <img src="assets/img/<?php echo $Recamara['imagen']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $Recamara['TipoRecamara']?>
                            </h5>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <p class="card-text">
                                <?php echo $Recamara['DescripcionRec']?>
                            </p>
                        </div>
                        <ul class=" list-group list-group-flush">
                            <li class="list-group-item "><i class="m-2 fa fa-television"></i>
                                <?php echo $Recamara['Servicio1']?>
                            </li>
                            <li class="list-group-item"><i class=" m-2 fa fa-wifi"></i>
                                <?php echo $Recamara['Servicio2']?>
                            </li>
                            <li class="list-group-item"><i class="m-2 fa fa-toilet"></i>
                                <?php echo $Recamara['Servicio3']?>
                            </li>
                            <li class="list-group-item"><i class="m-2 fa fa-toilet"></i>
                                <?php echo $Recamara['Servicio4']?>
                            </li>
                            <li class="list-group-item"><i class="m-2 fa fa-toilet"></i>
                                <?php echo $Recamara['Servicio4']?>
                            </li>
                        </ul>
                        <div class="card-body text-end">
                            <h3>
                                <?php echo $Recamara['Precio']?><span> <br> Por Noche </span>
                            </h3>
                            <h3>
                                <?php echo $Recamara['Disponibilidad']?><span> <br></span>
                            </h3>
                            <button class="btn btn-primary">reservar Ahora</button>
                        </div>
                    </div>
                </div>
            </div>

            <?php }?>
        </div>
    </div>
</section>
<?php include ("templates/footer.php");?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>