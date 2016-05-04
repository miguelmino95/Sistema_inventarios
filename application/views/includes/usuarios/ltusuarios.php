<head>
	<title>Listar Usuarios | Sistema de control de Inventarios</title>	
</head>
<body>
<div class="container">
<center><h1>Lista de Usuarios</h1></center>
<div class="table-responsive">
 	<table class="table table-striped">
 		<thead>
	 		<tr>
	 			<th>Nombre</th>	 			
	 			<th>Clave</th>
	 			<th>Fecha</th>	 			
	 			<th>Detalle</th>	
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