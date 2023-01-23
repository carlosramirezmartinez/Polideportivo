<html>
	<head>
		<title>Formulario De Contacto</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<div class="form1">
<?php
//Definimos nuestra conexion a la base de datos
	$db_host="localhost";
	$db_nombre="poli";
	$db_usuario="root";
	$db_contra="";
	
	
//conectamos Con el servidor
	$conectar=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

	//definimos las variables

	$hora=$_POST['time'];
	$dia=$_POST['date']; 
	$reserva=$_POST['reserva'];
	$nombre=$_POST['nombre']; 
	$telefono=$_POST['telefono']; 
	$correo=$_POST['correo'];
	$deportes=$_POST['deportes'];
	$mensaje=$_POST['mensaje'];
	//metemos los datos al PHPMyAdmin
	$consulta="REPLACE INTO poli VALUES('$hora',
								   '$dia',
								   '$reserva',
								   '$nombre',
								   '$telefono',
								   '$correo',
								   '$deportes',
								   '$mensaje')"
	or die ("Fallo en el insertado del usuario");

	$resultados=mysqli_query($conectar, $consulta);
	//verificamos la ejecucion
	echo "<h1>Datos introducidos correctamente por:</br> $nombre</h1>";
	echo "<h2>Nos vemos el $dia a las $hora en la pista $deportes ;)</h2>";
	
	//Cerramos la conexion
	mysqli_close($conectar);
	?>
				</form>
		</div>
	</body>
</html>