<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	<form action="procesar.php" method="GET">
		<label for="rut">Rut</label><br/>
		<input type="text" name="rut"/><br/>
		
		<label for="clave">Clave</label><br/>
		<input type="text" name="clave"/><br/>
		
		<input type="submit" name="ingresar" value="Ingersar"/>
	</form>
</body>
</html>