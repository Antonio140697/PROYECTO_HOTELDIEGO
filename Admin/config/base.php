<?php
 $host="localhost";
 $usuario="root";
 $bd="hoteldiegob_bd";
 $contra="";
 try{

   $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contra);
   if($conexion){
       
   }
 }catch(Exception $ex){
     echo $ex->getMessage(); 

 }
 



?>