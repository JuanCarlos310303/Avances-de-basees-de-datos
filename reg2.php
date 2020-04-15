<?php 
$host="localhost";
$user="id13080142_productos22";
$pass="fx0cvOahW/A0cxg7";
$db="id13080142_productos2";

$con=mysqli_connect($host,$user,$pass,$db);

$ID= $_POST['ID'];
$Cantidad= $_POST['Cantidad'];
$insertar="INSERT INTO productos2 (ID,Cantidad) VALUES ('$ID','$Cantidad')";
$query=mysqli_query($con,$insertar);
if (!$query) {
	echo "Hubo algun error";
}
else
{
	echo "Datos guardados correctamente<br><a href='Productos_dentales.html'>Volver</a>";
}
 ?>