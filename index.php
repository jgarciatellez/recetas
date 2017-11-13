<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.js">
	</script>
	<title>Recetas</title>
</head>
<body>
	<div class="container-fluid">
    <h1>Recetas de cocina española</h1>
    
    <?php
    // Obtenemos la lista de recetas de la base de datos
    $consulta=mysqli_query($descriptor,"SELECT * FROM recetas");
    $recetas=mysqli_fetch_all($consulta,MYSQLI_ASSOC);
    ?>
    <table class="table table-striped table-hover">
    	<tr>
    		<th>Título</th>
    		<th>Descripción</th>
    		<th>Fecha</th>
    	</tr>
    	<?php foreach ($recetas as $receta):?>
    	<tr>
    		<td><?=$receta['titulo']?></td>
    		<td><?=$receta['descripcion']?></td>
    		<td><?=$receta['fecha']?></td>
    	</tr>
    	<?php endforeach;?>		
    </table>
    </div>
</body>
</html>