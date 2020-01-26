<?php 
	require_once "../php/conexion.php";
	$conn = conexion();

	// mostrar datos de la bd
	$sql = " SELECT * FROM personas ";
	$result = mysqli_query($conn,$sql);
			
?>

<div class="row">
	<div class="col-sm-12">
	<h2>Tabla dinamica </h2>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Email</td>
				<td>Telefono</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<?php while($ver = mysqli_fetch_row($result)){ 
				$datos = $ver[0] . "||" .
						 $ver[1] . "||" .
						 $ver[2] . "||" .
						 $ver[3] . "||" .
						 $ver[4] ;
				?>
			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2]  ?></td>
				<td><?php echo $ver[3]  ?></td>
				<td><?php echo $ver[4]  ?></td>
				<td>
					<button  class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" id="traedatos" onclick="traerDatos('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" id="remover" onclick="borrarSino('<?php echo $ver[0] ?>')"></button>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>