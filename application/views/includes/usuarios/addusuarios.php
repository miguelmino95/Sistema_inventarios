<head>
	<title>Agregar Usuarios | Sistema de control de Inventarios</title>	
</head>
<body>
<div class="container">
	<div class="formulario">
    <div class="panel panel-success" >    
      <div class="panel-heading">
          <center><h1>Añadir Usuarios</h1></center>
        </div>
        <div class="panel-body">
          <form>
            <fieldset class="form-group">
              <label for="nombre_u">Nombre de usuario: </label>
              <input name="nombre_u" type="text" class="form-control" id="nombre_u" placeholder="Ingresa el nombre de usuario">    
            </fieldset>
            <fieldset class="form-group">
              <label for="clave_u">clave de usuario: </label>
              <input name="clave_u" type="password" class="form-control" id="clave_u" placeholder="Ingresa la clave de usuario">    
            </fieldset>
            <fieldset class="form-group">
              <label for="fecha_u">Fecha: </label>
              <input name="fecha_u" type="date" class="form-control" id="fecha_u" placeholder="aaaa/mm/dd">    
            </fieldset>
            <fieldset class="form-group">
              <label for="detalle_u">Observación: </label>
              <textarea class="form-control" id="detalle_u" name="detalle_u" rows="3" placeholder="Ingrese una observación (opcional)"></textarea>
            </fieldset>
            <button type="submit" class="btn btn-success">Ingresar</button>
          </form>
        </div>
        </div>
    </div>
</div>
</div>
</body>