<?php
include "bd.php";
error_reporting(0);
session_start();
if(isset($_SECCION["txtNomusuario"]) ){
    header("Location:registrarce.php");
}

if (!empty($_POST["registrar"])){
    if (empty($_POST["txtNomcliente"]) or empty($_POST["txtApcliente"])or empty($_POST["txtTelcliente"])
        or empty($_POST["txtCorreocliente"]) or empty($_POST["txtNomusuario"]) or empty($_POST["txtcontra"])
         or empty($_POST["txtValcontra"])){
            echo"<script>alert('campos basiso')</script> ";
            

    } else{
        $txtNomcliente=$_POST["txtNomcliente"];
        $txtApcliente=$_POST["txtApcliente"];
        $txtTelcliente=$_POST["txtTelcliente"];
        $txtCorreocliente=$_POST["txtCorreocliente"];
        $txtNomusuario=$_POST["txtNomusuario"];
        $txtcontra=$_POST["txtcontra"];
        $txtValcontra=$_POST["txtValcontra"];
        

        

        $conexion= new mysqli('localhost','root','','hoteldiegob_bd');
        if($txtcontra==$txtValcontra){
            $sql="SELECT * FROM clientesreg WHERE txtCorreocliente='$txtCorreocliente'";
            $result=mysqli_query($conexion,$sql);
            if(!$result->num_rows>0){
        
        $sql=$conexion->query("INSERT INTO clientesreg(txtNomcliente,
        txtApcliente,
        txtTelcliente,
        txtCorreocliente,
        txtNomusuario,
        txtcontra)
        VALUES('$txtNomcliente',
        '$txtApcliente',
        '$txtTelcliente','$txtCorreocliente','$txtNomusuario','$txtcontra')");
              if ($result){
               
                echo"<script>alert('USUARIO REGISTRADO')</script> ";
             
           //     header("Location:controlacceso.php");
             
            

              }else{

                echo"<script>alert('hay un error')</script> ";
              }
                                
}else{
    echo"<script>alert('el correo ya existe')</script> ";
}

        }else{
            echo"<script>alert('contraseña no coinciden')</script> ";
        }
    }
    }
    



?>