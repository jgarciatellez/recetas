<?php
$servidor="localhost";
$usuario="alumno";
$pass="alumno";
$base_datos="recetas";

// Conexión al servidor de bbdd
$descriptor=mysqli_connect($servidor,$usuario,$pass,$base_datos)
or die("Imposible conectar");
?>
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