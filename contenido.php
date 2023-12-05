<?php
session_start(); //Cada vez que se quiera trabajar con sesiones en un documento hay que utilizar "session_start()".
if (empty($_SESSION["usuario"])) { //Se esta preguntando si la sesi�n existe.
    header("Location: login.php");
    exit(); //Finaliza el Script (No se lee nada mas que este abajo de esta isntrucci�n).
}

//Aca van las instrucciones que se ejecutar�n en caso de que la sesi�n si exista.
echo "Bienvenido: " . $_SESSION["usuario"];
echo "<a href='logout.php'>Cerrar Sesion</a>";
?>