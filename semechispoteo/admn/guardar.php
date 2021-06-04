<link rel="stylesheet" type="text/css" href="admin.css">

<?php
 require 'conexion.php';
  
 $productoimg  = $_POST['productoimg'];
 $productoid = $_POST['productoid'];
 $precio  = $_POST['precio'];
 $nombre = $_POST['nombre'];
 $descripcion = $_POST['descripcion'];


$insertar = "INSERT INTO eat(producto, precio, nombre, descripcion, productoid) VALUES ('$productoimg','$precio','$nombre','$descripcion','$productoid')";

$query = mysqli_query($conectar, $insertar);

?>

<a href="admin.php">Clic aqui para volver</a>