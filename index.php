<?php
$servidor="localhost";
$usuario="alumno";
$pass="alumno";
$base_datos="recetas";

// Conexión al servidor de bbdd
$descriptor=mysqli_connect($servidor,$usuario,$pass,$base_datos)
or die("Imposible conectar");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Recetas</title>
	<style>
	   h1{color:red; padding:5px; border:2px yellow solid;}
	   table{border:2px green solid;}
	   th{background-color:red; font-weight:bold;}
	   td{padding:5px;}
	</style>
</head>
<body>
    <h1>Recetas de cocina española</h1>
    
    <?php
    // Obtenemos la lista de recetas de la base de datos
    $consulta=mysqli_query($descriptor,"SELECT * FROM recetas");
    $recetas=mysqli_fetch_all($consulta,MYSQLI_ASSOC);
    ?>
    <table>
    	<tr>
    		<th>Título</th>
    		<th>Fecha</th>
    	</tr>
    	<?php foreach ($recetas as $receta):?>
    	<tr>
    		<td><?=$receta['titulo']?></td>
    		<td><?=$receta['fecha']?></td>
    	</tr>
    	<?php endforeach;?>		
    </table>
</body>
</html>