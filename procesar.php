<?php
//Los datos correctos se deben traer de una base de datos.
$rutCorrecto = "19.757.106-3";
$claveCorrecta = "123";

$rutRecibido = $_REQUEST["rut"];
$claveRecibida = $_REQUEST["clave"];

if ($rutRecibido === $rutCorrecto && $claveRecibida === $claveCorrecta) {
    session_start(); //Cada vez que se quiera trabajar con sesiones en un documento hay que utilizar "session_start()".
    $_SESSION["usuario"] = $rutRecibido; //Se crea una sesion.
    header("Location: contenido.php"); //Se redirige al usuario a el documento "Contenido.php".
}
else {
    echo "Usuario Y/O clave no valido";
    echo "<a href='login.php'>Volver al Login</a>";
}
?>