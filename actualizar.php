<?php                                                      
include "conexion.php";
$id=$_POST["id"];
$nom=$_POST["nombre"];
$dir=$_POST["dir"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$lat=$_POST["lat"];
$long=$_POST["long"];



$sql="UPDATE  bancos SET Nombre='$nom', Direccion='$dir', Telefono='$tel'
,Email='$email', Latitud='$lat',Longitud='$long' where Id_Servicio='$id'";

$resultado=mysql_query($sql,$conexion);

if($resultado){

    echo " Datos guardados satisfactoriamente";
}else{
    echo "Error al guardar los datos: ".mysql_error();
    
}
mysql_close($conexion);

?>