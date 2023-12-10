<?php
session_start(); //Cada vez que se quiera trabajar con sesiones en un documento hay que utilizar "session_start()".
if (empty($_SESSION["usuario"])) { //Se esta preguntando si la sesión existe.
    header("Location: login.php");
    exit(); //Finaliza el Script (No se lee nada mas que este abajo de esta isntrucción).
}

//Aca van las instrucciones que se ejecutarán en caso de que la sesión si exista.
echo "Bienvenido: " . $_SESSION["usuario"];
echo "<a href='logout.php'>Cerrar Sesion</a>";
?>