<?php  
require "bd.php";
 session_start();  
 if ($_POST){
  $usuario = $_POST['txtNomusuario'];
  $contra=$_POST['txtcontra'];
  $sql = "SELECT id,txtNomcliente,txtcontra,txtTipoUsuario FROM clientesreg WHERE txtNomusuario='$usuario'";
  $mysqli = new mysqli('localhost', 'root', '', 'hoteldiegob_bd');
  $resultado = $mysqli->query($sql);
  $num = $resultado->num_rows;
  if($num>0){
    $row=$resultado->fetch_assoc();
    $contra_bd = $row['txtcontra'];
    $pass_c = ($contra);
    if($contra_bd == $pass_c){
      $_SESSION['id'] = $row['id'];
      $_SESSION['txtNomcliente'] = $row['txtNomcliente'];
      $_SESSION['	txtTipoUsuario'] = $row['	txtTipoUsuario'];
      header("Location: index.php");
    }else{
      echo" las contraseña no coincide";
    }

  }else{
    echo"no exxirte el usuario";
  }
 }
 
 ?>