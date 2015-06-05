<?php
include "conexion.php";
$id=$_POST["Id"];


$sql="DELETE FROM bancos where Id_Servicio='$id'";

$resultado=mysql_query($sql,$conexion);

if($resultado){

   
    
       
    echo " Datos eliminado satisfactoriamente";
}else{
    echo "Error al guardar los datos: ".mysql_error();
    
}
mysql_close($conexion);

?>