<link rel="stylesheet" type="text/css" href="admin.css">

<?php
 require '../admn/conexion.php';
  
$name = $_POST['nameopi'];
$titu = $_POST['tituopi'];
$opin = $_POST['opi'];


$inseropi = "INSERT INTO opis(nameopi, tituopi, opi) VALUES ('$name','$titu','$opin')";

$query = mysqli_query($conectar, $inseropi);

?>

<a href="../opine.php">Clic aqui para volver</a>