<?php
	include 'lib/seguridad.php';
	$seguridad = new seguridad();
	if ($seguridad->getUsuario()== null){
		header('Location: index.php');
		exit;
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
	
	<h1>MI PERFIL</h1><hr>
	Estoy dentro.
	</body>
	</html>