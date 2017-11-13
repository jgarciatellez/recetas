<?php
$servidor="localhost";
$usuario="alumno";
$pass="alumno";
$base_datos="recetas";

// Conexión al servidor de bbdd
$descriptor=mysqli_connect($servidor,$usuario,$pass,$base_datos)
or die("Imposible conectar");
?>
Conexión establecida