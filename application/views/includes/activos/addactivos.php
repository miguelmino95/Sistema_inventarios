<head>
	<title>Agregar Activos | Sistema de control de Inventarios</title>	
</head>
<body>
<div class="container">
	<div class="formulario">
		<div class="panel panel-success" >		
			<div class="panel-heading">
				<center><h1>Añadir activos</h1></center>
			</div>
			<div class="panel-body">			
			<form>
			  <fieldset class="form-group">
			    <label for="id_act">Código: </label>
			    <input name="id_act" type="number" class="form-control" id="id_act" placeholder="Ingresa el Código del activo">    
			  </fieldset>	
			  <fieldset class="form-group">
			    <label for="nombre_act">Nombre: </label>
			    <input name="nombre_act" type="text" class="form-control" id="nombre_act" placeholder="Ingresa el nombre del activo">    
			  </fieldset>
			  <fieldset class="form-group">
			    <label for="marca_act">Marca: </label>
			    <input type="text" class="form-control" id="marca_act" name="marca_act" placeholder="Ingresa la marca del activo (opcional)">
			  </fieldset>
			  <fieldset class="form-group">
			    <label for="modelo_act">Modelo: </label>
			    <input type="text" class="form-control" id="modelo_act" name="modelo_act" placeholder="Ingresa el modelo del activo (opcional)">
			  </fieldset>
			  <fieldset class="form-group">
			    <label for="numfactura_act">N° Factura: </label>
			    <input type="text" class="form-control" id="numfactura_act" name="numfactura_act" placeholder="Ingresa el Número de la factura del activo (opcional)">
			  </fieldset>
			  <fieldset class="form-group">
			    <label for="detalle_act">Detalle: </label>
			    <textarea class="form-control" id="detalle_act" name="detalle_act" rows="3" placeholder="Ingrese un breve detalle del activo"></textarea>
			  </fieldset>
			  <button type="submit" class="btn btn-success">Ingresar</button>			  
			</form>		
			</div>
		</div>
	</div>
</div>
</body>