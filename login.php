<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Login</title>
</head>
<body>
	<form action="verificar_sesion.php" method="GET">
		
		<label for="rut">Rut</label><br/>
		<input type="text" name="rut"/><br/>
		
		<label for="clave">Clave</label><br/>
		<input type="text" name="clave"/><br/>
		
		<input type="submit" name="ingresar" value="Ingersar"/>
	</form>
	
</body>
</html>