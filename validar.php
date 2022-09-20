<?php
include('bd.php');
$txtusuario=$_POST['txtusuario'];
$txtcontra=$_POST['txtcontra'];
session_start();
$_SESSION['txtusuario']=$txtusuario;

$conexion=mysqli_connect("localhost","root","","hoteldiegob_bd");
$consulta="SELECT*FROM recep where txtusuario='$txtusuario' and txtcontra='$txtcontra'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:galeria.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);