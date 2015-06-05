<?php 
/*$servidor="localhost";
$usuario="root";
$clave="alex";
$BaseDatos="servicioslibres";*/

$servidor="sql302.260mb.net";
$usuario="n260m_15974075";
$clave="vwb1z56r";
$BaseDatos="n260m_15974075_servicios";
$conexion=mysql_connect($servidor,$usuario,$clave)or die("Error al establecer la conexión: ".mysql_error());

mysql_select_db($BaseDatos,$conexion);

?>