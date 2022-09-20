<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/bootstrap.min">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../js/bootstrap.min.js">
<link rel="stylesheet" href="../css/bootstrap-reboot.css.map">

<?php include ("../templates/cabecera.php");

?>
<?php
  $id_recamara=(isset($_POST['id_recamara']))?$_POST['id_recamara']:"";
  $TipoRecamara=(isset($_POST['TipoRecamara']))?$_POST['TipoRecamara']:"";
  $DescripcionRec=(isset($_POST['DescripcionRec']))?$_POST['DescripcionRec']:"";
  $Servicio1=(isset($_POST['Servicio1']))?$_POST['Servicio1']:"";
  $Servicio2=(isset($_POST['Servicio2']))?$_POST['Servicio2']:"";
  $Servicio3=(isset($_POST['Servicio3']))?$_POST['Servicio3']:"";
  $Servicio4=(isset($_POST['Servicio4']))?$_POST['Servicio4']:"";
  $Servicio5=(isset($_POST['Servicio5']))?$_POST['Servicio5']:"";
  $Precio=(isset($_POST['Precio']))?$_POST['Precio']:"";
  $Disponibilidad=(isset($_POST['Disponibilidad']))?$_POST['Disponibilidad']:"";
  $imagen=(isset($_FILES['imagen']['name']))?$_FILES['imagen'] ['name']:"";
  $accion=(isset($_POST['accion']))?$_POST['accion']:"";

 include("../config/base.php");

  switch($accion){
    case"Agregar":

      $sentenciaSQL=$conexion->prepare(" INSERT INTO recamaras (id_recamara, TipoRecamara, DescripcionRec, Servicio1, Servicio2, Servicio3, Servicio4, Servicio5, Precio, Disponibilidad, imagen) 
                                          VALUES (:id_recamara,:TipoRecamara,:DescripcionRec,:Servicio1,:Servicio2,:Servicio3,:Servicio4,:Servicio5,:Precio,:Disponibilidad,:imagen);");
      $sentenciaSQL->bindParam(':id_recamara',$id_recamara);
      $sentenciaSQL->bindParam(':TipoRecamara',$TipoRecamara);
      $sentenciaSQL->bindParam(':DescripcionRec',$DescripcionRec);
      $sentenciaSQL->bindParam(':Servicio1',$Servicio1);
      $sentenciaSQL->bindParam(':Servicio2',$Servicio2);
      $sentenciaSQL->bindParam(':Servicio3',$Servicio3);
      $sentenciaSQL->bindParam(':Servicio4',$Servicio4);
      $sentenciaSQL->bindParam(':Servicio5',$Servicio5);
      $sentenciaSQL->bindParam(':Precio',$Precio);
      $sentenciaSQL->bindParam(':Disponibilidad',$Disponibilidad); 

      $fecha=new DateTime();
      $nombreArchivo=($imagen!="")?$fecha->getTimestamp()."_".$_FILES["imagen"]["name"]:"imagen.jpg";
      $tmpimagen=$_FILES["imagen"]["tmp_name"];

      if($tmpimagen!=""){
        move_uploaded_file($tmpimagen,"../../assets/img/".$nombreArchivo);

      }
      $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
      $sentenciaSQL->execute();   
      
      


      header("Location:Recamaras.php");                       
        break;
        

    case"Modificar":
      $sentenciaSQL=$conexion->prepare("UPDATE  recamaras SET TipoRecamara=:TipoRecamara, DescripcionRec=:DescripcionRec,Servicio1=:Servicio1,Servicio2=:Servicio2,
                                                                  Servicio3=:Servicio3,Servicio4=:Servicio4,Servicio5=:Servicio5,Precio=:Precio,Disponibilidad=:Disponibilidad WHERE id_recamara=:id_recamara" );
      $sentenciaSQL->bindParam(':id_recamara',$id_recamara);
      $sentenciaSQL->bindParam(':TipoRecamara',$TipoRecamara);
      $sentenciaSQL->bindParam(':DescripcionRec',$DescripcionRec);
      $sentenciaSQL->bindParam(':Servicio1',$Servicio1);
      $sentenciaSQL->bindParam(':Servicio2',$Servicio2);
      $sentenciaSQL->bindParam(':Servicio3',$Servicio3);
      $sentenciaSQL->bindParam(':Servicio4',$Servicio4);
      $sentenciaSQL->bindParam(':Servicio5',$Servicio5);
      $sentenciaSQL->bindParam(':Precio',$Precio); 
      $sentenciaSQL->bindParam(':Disponibilidad',$Disponibilidad);
      $sentenciaSQL->execute(); 

      if($imagen!=""){

        $fecha=new DateTime();
      $nombreArchivo=($imagen!="")?$fecha->getTimestamp()."_".$_FILES["imagen"]["name"]:"imagen.jpg";
      $tmpimagen=$_FILES["imagen"]["tmp_name"];
      move_uploaded_file($tmpimagen,"../../assets/img/".$nombreArchivo);

      $sentenciaSQL=$conexion->prepare("SELECT imagen FROM recamaras WHERE id_recamara=:id_recamara" );
      $sentenciaSQL->bindParam(':id_recamara',$id_recamara);
      $sentenciaSQL->execute(); 
      $Recamara=$sentenciaSQL->fetch(PDO::FETCH_LAZY); 


      if(isset($Recamara["imagen"]) && ($Recamara["imagen"]!="imagen.jpg")){
          if(file_exists("../../assets/img/".$Recamara["imagen"])){
              unlink("../../assets/img/".$Recamara["imagen"] );

          }

      }
    

        

       $sentenciaSQL=$conexion->prepare("UPDATE  recamaras SET imagen=:imagen WHERE id_recamara=:id_recamara" );
       $sentenciaSQL->bindParam(':id_recamara',$id_recamara);
       $sentenciaSQL->bindParam(':imagen',$nombreArchivo);  
       $sentenciaSQL->execute(); 
      }
      header("Location:Recamaras.php");
         //   echo "PRESIONADO BOTON mod";
            break;
    
        case"Cancelar":
          header("Location:Recamaras.php");
       //  echo '<script>window.location="seccion/Recamaras.php<script>';
          //  echo "PRESIONADO BOTON can";
            break;

        case"Seleccionar":

            $sentenciaSQL=$conexion->prepare("SELECT * FROM recamaras WHERE id_recamara=:id_recamara" );
            $sentenciaSQL->bindParam(':id_recamara',$id_recamara);
            $sentenciaSQL->execute(); 
            $Recamara=$sentenciaSQL->fetch(PDO::FETCH_LAZY); 

           $id_recamara=$Recamara['id_recamara'];
           $TipoRecamara=$Recamara['TipoRecamara'];
           $DescripcionRec=$Recamara['DescripcionRec'];
           $Servicio1=$Recamara['Servicio1'];
           $Servicio2=$Recamara['Servicio2'];
           $Servicio3=$Recamara['Servicio3'];
           $Servicio4=$Recamara['Servicio4'];
           $Servicio5=$Recamara['Servicio5'];
           $Precio=$Recamara['Precio'];
           $Disponibilidad=$Recamara['Disponibilidad'];
           $imagen=$Recamara['imagen'];
           
  






           // echo "PRESIONADO BOTON seleccionar";
            break;
        case"Borrar":

            $sentenciaSQL=$conexion->prepare("SELECT imagen FROM recamaras WHERE id_recamara=:id_recamara" );
            $sentenciaSQL->bindParam(':id_recamara',$id_recamara);
            $sentenciaSQL->execute(); 
            $Recamara=$sentenciaSQL->fetch(PDO::FETCH_LAZY); 


            if(isset($Recamara["imagen"]) && ($Recamara["imagen"]!="imagen.jpg")){
                if(file_exists("../../assets/img/".$Recamara["imagen"])){
                    unlink("../../assets/img/".$Recamara["imagen"] );

                }

            }


           $sentenciaSQL=$conexion->prepare("DELETE FROM recamaras WHERE id_recamara=:id_recamara" );
            $sentenciaSQL->bindParam(':id_recamara',$id_recamara);
            $sentenciaSQL->execute();     
            header("Location:Recamaras.php");
            break;
// echo "PRESIONADO BOTON Borrar";
            }
    
    $sentenciaSQL=$conexion->prepare("SELECT * FROM recamaras");
    $sentenciaSQL->execute(); 
    $listaRecamaras=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>

<div class="container-fluid">
    <div class="main row">
        <div class="col-md-3">
            <div class="card m-2" style="width: 22rem;">
                <div class="card-header">
                    Datos de la Recamara
                </div>
                <div class="card-body card-responsive   ">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="id_recamara" class="form-label">ID</label>
                            <input type="text" value="<?php echo $id_recamara;?>" class="form-control"
                                name="id_recamara" id="id_recamara" placeholder="Numero de recamara">
                        </div>

                        <div class="form-group mb-3 ">
                            <label for="TipoRecamara" class="form-label">TIPO DE RECAMARA</label>
                            <input type="text" value="<?php echo $TipoRecamara;?>" class="form-control" name="TipoRecamara" id="TipoRecamara" placeholder="Tipo de Recamara ">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="DescripcionRec" class="form-label">DESCRIPCION</label>
                            <input type="text" value="<?php echo $DescripcionRec;?>" class="form-control" name="DescripcionRec" id="DescripcionRec" placeholder="DESCRIPCION">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="Servicio1" class="form-label">SERVICIO</label>
                            <input type="text" value="<?php echo $Servicio1;?>" class="form-control" name="Servicio1" id="Servicio1" placeholder="Servicio">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="Servicio2" class="form-label">SERVICIO</label>
                            <input type="text" value="<?php echo $Servicio2;?>" class="form-control" name="Servicio2" id="Servicio2" placeholder="Servicio">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="Servicio3" class="form-label">SERVICIO</label>
                            <input type="text" value="<?php echo $Servicio3;?>" class="form-control" name="Servicio3" id="Servicio3" placeholder="Servicio">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="Servicio4" class="form-label">SERVICIO</label>
                            <input type="text" value="<?php echo $Servicio4;?>" class="form-control" name="Servicio4" id="Servicio4" placeholder="Servicio">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="Servicio5" class="form-label">SERVICIO</label>
                            <input type="text" value="<?php echo $Servicio5;?>" class="form-control" name="Servicio5" id="Servicio5" placeholder="Servicio">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="Precio" class="form-label">PRECIO</label>
                            <input type="text" value="<?php echo $Precio;?>" class="form-control" name="Precio" id="Precio" placeholder="Precio">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="Disponibilidad" class="form-label">DISPONIBILIDAD</label>
                            <input type="text" value="<?php echo $Disponibilidad;?>" class="form-control" name="Disponibilidad" id="Disponibilidad" placeholder="Disponibliidad">
                        </div>
                        
                        <div class="form-group mb-3 ">
                            <label for="imagen" class="form-label">imagen</label>
                  <br/>
                       <?php if($imagen!=""){ ?>

                        <img  class="img-thumbnail rounded" src="../../assets/img/<?php echo $imagen?>" width="100" alt="">

                      <?php }?>




                            <input type="file" class="form-control" name="imagen" id="imagen" multiple placeholder="Disponibliidad">
                        </div>

                        <div class="btn-group" role="group" aria-label="">
                            <button type="submit" name="accion" <?php echo($accion=="Seleccionar")?"disabled":"";?> value="Agregar" class="btn btn-success">AGREGAR</button>
                            <button type="submit" name="accion" <?php echo($accion!="Seleccionar")?"disabled":"";?> value="Modificar" class="btn btn-warning">MODIFICAR</button>
                            <button type="submit" name="accion" <?php echo($accion!="Seleccionar")?"disabled":"";?> value="Cancelar" class="btn btn-danger">CANCELAR</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

<br/>
        <div class="col-md-9 table-responsive mt-2">
            <table class="table bg-light table-bordered ">
                <thead class="table-danger">
                    <tr>

                        <th scope="col">N. recamara</th>
                        <th scope="col">T. Recamara</th>
                        <th scope="col">DescripcionRec</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Precios</th>
                        <th scope="col">Disponibilidad</th>
                        <th scope="col">imagen</th>
                        <th scope="col">ACCIONES</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $listaRecamaras as $recamara){?>
                    <tr>
                        <th scope="row"><?php echo $recamara['id_recamara'];?></th>
                        <td><?php echo $recamara['TipoRecamara'];?></td>
                        <td><?php echo $recamara['DescripcionRec'];?></td>
                        <td><?php echo $recamara['Servicio1'];?></td>
                        <td><?php echo $recamara['Servicio2'];?></td>
                        <td><?php echo $recamara['Servicio3'];?></td>
                        <td><?php echo $recamara['Servicio4'];?></td>
                        <td><?php echo $recamara['Servicio5'];?></td>
                        <td><?php echo $recamara['Precio'];?></td>
                        <td><?php echo $recamara['Disponibilidad'];?></td>

                        
                        <td>
                        <img class="img-thumbnail rounded"  src="../../assets/img/<?php echo $recamara['imagen'];?>" width="80" alt="">
                        </td>
                        <td>

                            <form method="POST">

                                <input type="hidden" name="id_recamara" id="id_recamara" value="<?php echo $recamara['id_recamara'];?>">
                                <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary">
                                <input type="submit" name="accion" value="Borrar" class="btn btn-danger m-1">

                            </form>



                        </td>

                    </tr>
                    <?php }?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
</body>

</html>