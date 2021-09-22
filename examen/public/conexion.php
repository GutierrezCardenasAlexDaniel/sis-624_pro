<?php
//creacion de coneccion
$conexion = mysqli_connect("db_pro:3306","root","magic","mysql_data");

if(!$conexion){
   die("conexion fallida" .mysql_connect_error());
}
echo"conexion exitosa";
?>
