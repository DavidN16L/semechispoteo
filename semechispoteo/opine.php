<!DOCTYPE html>
<html>
<head>
	<title>Se Me Chispoteo</title>
	<link rel="stylesheet" type="text/css" href="layout/nav.css?v=<?php echo time();?>">
	<link rel="shortcut icon" href="media/favicon.png">
	<link rel="stylesheet" type="text/css" href="admn/admin.css?v=<?php echo time();?>">
</head>
<body style="background-color:rgb(233, 233, 233);"> 

	<div id="all">
	<!--NAV-->
		<?php require_once("layout/nav.php"); ?>	
	<!--NAV-->
	</div>

	<div style="" id="general">
		<br>
		<br>
		  <form name="form-work" style="background-color: #ffd687;" method="POST" action="opi/sentopi.php">
      <h1>Enviar Opinión</h1>

      <label for="">Nombre:</label>
      <input type="text" name="nameopi">
      <label for="">Titulo:</label>
      <input type="text" name="titopi">
      <label for="">Opinión: </label>
      <input id="op" type="text" name="opi">
      <input style="background-color: #ffba36;" type="submit" name="envopi">



    </form>
    <br>
    <br>
	</div>
</body>
</html>