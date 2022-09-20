<?php
session_start();
include('../Admin/config/base.php');
$txtusuario=$_POST['txtusuario'];
$txtcontra=$_POST['txtcontra'];



$_SESSION['txtusuario']=$txtusuario;
$_SESSION['txtTipoUsuario']=$tipo;



$conexion=mysqli_connect("localhost","root","","hoteldiegob_bd");
$consulta="SELECT*FROM  recep where txtusuario='$txtusuario' and txtcontra='$txtcontra' ";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("Location:inicio.php");

}else{
    ?>
    
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);