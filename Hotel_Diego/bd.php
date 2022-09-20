 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db="hoteldiegob_bd";

// Create connection
$conexion = mysqli_connect($servername, $username, $password) or die("error");

// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}
//echo "Connected successfully";
?> 