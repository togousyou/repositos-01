<?php

session_start();
$connect = mysqli_connect("localhost","root","","test");

if(isset($_POST["user"]) && isset($_POST["pass"])){
  $user = mysqli_real_escape_string($connect, $_POST["user"]);
  $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
  $sql = "SELECT user FROM usuario WHERE (user='$user' OR email='$user') AND pass='$pass'";
  $result = mysqli_query($connect, $sql);
  $num_row = mysqli_num_rows($result);
  if ($num_row == "1") {
    $data = mysqli_fetch_array($result);
    $_SESSION["user"] = $data["user"];
      echo "<script> parent.location.href='login/';</script>";
  } else {
   
   
     echo "<script> parent.location.href='index.php';</script>";
  }
} else {
  
}



/*

//Conexión a la base de datos 
$servidor = "localhost"; //Nombre del servidor 
$usuario = "root"; //Nombre de usuario en tu servidor 
$password = ""; //Contraseña del usuario 
$base = "test"; //Nombre de la BD 
$conexion = mysqli_connect($servidor, $usuario, $password) or die("Error al conectarse al servidor"); 
mysqli_select_db($conexion, $base) or die("Error al conectarse a la base de datos"); 

$buscar = mysqli_query($conexion, "SELECT * FROM usuario"); 
if (mysqli_num_rows($buscar) > 0) { 
?> 
<table border = "1" width = "100%"> 
<tr> 
<th>Nick</th> 
<th>ID</th> 
<th>Mail</th> 
</tr> 
<?php 
while ($datos = mysqli_fetch_array($buscar)){ 
?> 
<tr> 
<td> <?=$datos["id"]?> </td> 
<td> <?=$datos["usuario"]?> </td> 
<td> <?=$datos["descripcion"]?> </td> 
</tr> 
<?php 
} 
mysqli_free_result($buscar); 
?> 
</table> 
<?php 
} else { 
echo "No se encontraron datos en la base de datos"; 
} */

?>