<head>
	<title>Listar Personal | Sistema de control de Inventarios</title>	
</head>
<body>
<div class="container">
<center><h1>Lista de Personal</h1></center>
<div class="table-responsive">
 	<table class="table table-striped">
 		<thead>
	 		<tr>
	 			<th>Nombres</th>	 			
	 			<th>Apellidos</th>
	 			<th>DNI</th>	 			
	 			<th>Cargo</th>
	 			<th>Teléfono</th>
	 			<th>Dirección</th>
	 			<th>Opciones</th>
	 		</tr>
 		</thead>
 		<tbody>

 			<?php /*while($row=$resultado->fetch_assoc()){ ?>
	 		<tr>
	 			<td>
	 				<?php echo $row['nombre_u'];?>
				</td>
				<td>
					<?php echo $row['clave_u'];?>
				</td>
				<td>
					<?php echo $row['fecha_u'];?>
				</td>
				<td><a class="btn btn-warning btn-sm boton" href="modificaruser.php?idusuario=<?php echo $row['idusuario'];?>">/</a>&nbsp;
				<a class="btn btn-danger btn-sm boton" href="eliminaruser.php?idusuario=<?php echo $row['idusuario'];?>">X</a></td>

	 		</tr>
	 		<?php } */?>
 		</tbody>
 
 	</table>
 	</div>
 </div>	
</body>