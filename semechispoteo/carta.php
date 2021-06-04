
<html>
<head>
	<title>Se Me Chispoteo - Carta</title>
	<link rel="stylesheet" href="layout/nav.css?v=<?php echo time(); ?>" />
	<script src="/js/functions.js?v=<?php echo time(); ?>"></script>
	<link rel="shortcut icon" href="media/favicon.png">


</head>
<body> 

	<?php require('admn/conexion.php') ?>

	<div id="all">
	<!--NAV-->
		<?php require_once("layout/nav.php"); ?>	
	<!--NAV-->

		<div id="general" align="center">
			<br>
			<br>
			<div style="color: #3bffaa; text-shadow: 2px 2px 1px #949494;"><h1><strong>CARTA SEMECHISPOTEO</strong></h1></div>

			<hr>



						<?php 

			$categorias = "SELECT id, producto FROM eat_opt";

			$resultcartegorias = mysqli_query($conectar, $categorias);
			while ($rowcomidas = mysqli_fetch_array($resultcartegorias, MYSQLI_ASSOC)) {

			 ?>

			 <p style="font-size: 20px"><b><?php echo $rowcomidas['producto']; ?></b></p>

			





			<?php 
			$anom = "SELECT * FROM eat WHERE productoid = {$rowcomidas['id']}";  
			$resultado = mysqli_query($conectar, $anom);

				while($comids = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			?>
			<hr>
			<div id="comid">
				<div>
					<div style="float: left;">
						<img id="FOTOMENU" src="<?php echo $comids['producto']; ?>">
					</div>
						<br>

					<div style="float: right;" id="datc">
						<p style="color: gray;" align="center" class="dats" id="NOMBREMENU">
							<b><?php echo $comids['nombre']; ?></b>
						
						</p>

						<p align="center" class="dats" id="PRECIOMENU"><b>PRECIO:</b>
							<?php echo $comids['precio']; ?>
						
						</p>

						<p align="center" class="dats" id="DESCRMENU">
							<?php echo $comids['descripcion']; ?>
						</p>
					</div>
				</div>
			</div>
			<hr>
							 <?php 
				}}
				 ?>

		</div>

	</div>


</body>
</html>