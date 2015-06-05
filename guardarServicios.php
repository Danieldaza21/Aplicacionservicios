<?php
include "conexion.php";

$nom=$_POST["nombre"];
$dir=$_POST["dir"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$lat=$_POST["lat"];
$long=$_POST["long"];
$ruta="imagenes/".$nom.".jpg";

$sql="INSERT INTO bancos (Id_Servicio, Nombre, Direccion, Telefono, Foto, Email, Latitud, Longitud) VALUES
('','$nom','$dir','$tel','$ruta','$email','$lat','$long')";
$insercion=mysql_query($sql, $conexion);

if($insercion){
  echo "Datos almacenados correctamente";  
}else{
  echo "Error al registrar los datos: ".mysql_error();
}
mysql_close($conexion);
?>
 
