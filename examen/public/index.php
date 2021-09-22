<?php
include("conexion.php");
$estudiante= "SELECT * FROM estudiante";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>FORMULARIO DE REGISTRO</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<div class="container-table">
  <div class="table__title">Datos</div>
  <div class="table__header">ID</div>
  <div class="table__header">NOMBRE</div>
  <div class="table__header">APELLIDO</div>
  <div class="table__header">EDAD</div>
    <?php $resultado = mysqli_query($conexion,$estudiante);
    while($row=mysqli_fetch_assoc($resultado)){?>
      <div class="table__item"><?php echo $row["id"] ?></div>
      <div class="table__item"><?php echo $row["nombre"] ?></div>
      <div class="table__item"><?php echo $row["apellido"] ?></div>
      <div class="table__item"><?php echo $row["edad"] ?></div>
    <?php }?>
</div>




<script>
alert("entrando al sistema de php ");
</script>
</body>
</html>
