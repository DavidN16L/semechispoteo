<head lang="es" title="Spanish" >
	<link rel="stylesheet" type="text/css" href="../layout/nav.css">
</head>
<a href="../admn/index.php">Clic Para Volver</a>
<h1>OPINIONES SEMECHISPOTEO:</h1>

<?php 
 require '../admn/conexion.php';
			 
	$awa = "SELECT nameopi, tituopi, opi FROM opis ";  
	$result = mysqli_query($conectar, $awa);

	while($opinions = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		

?>

<div style="background-color: #f7f7f7;">
<hr>
	<div style="margin-left: 20px;">
	<b>De:</b> <p style="color: gray;"><?php echo $opinions['nameopi']; ?></p>
	<b><h2><?php echo $opinions['tituopi']; ?></h2></b>

	<h5><?php echo $opinions['opi']; ?></h5>
	</div>
<hr>
</div>
<br>
<br>

<?php } ?>
