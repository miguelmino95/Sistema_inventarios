<head>
	<title>Agregar Mantenimiento | Sistema de control de Inventarios</title>	
</head>
<body>
<div class="container">
	<div class="formulario">
    <div class="panel panel-success" >    
          <div class="panel-heading">
          <center><h1>Añadir Mantenimiento</h1></center>
          </div>
          <div class="panel-body">
          <form>
            <fieldset class="form-group">
              <label for="fecha_mant">Fecha: </label>
              <input name="fecha_mant" type="date" class="form-control" id="fecha_mant" placeholder="aaaa/mm/dd">    
              <small class="text-muted">La fecha ingresada es la fecha en que se realizó el mantenimiento.</small>
            </fieldset>
            <fieldset class="form-group">
              <label for="idactivo_mant">Activos: </label>
              <select name="idactivo_mant" class="form-control" id="idactivo_mant">
                <option>Seleccione un activo</option>	
                <option>Activo 1</option>
                <option>Activo 2</option>
                <option>Activo 3</option>
                <option>Activo 4</option>
                <option>Activo 5</option>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="idpersonal_mant">Personal Encargado: </label>
              <select name="idpersonal_mant" class="form-control" id="idpersonal_mant">
                <option>Seleccione Personal</option>	
                <option>Personal 1</option>
                <option>Personal 2</option>
                <option>Personal 3</option>
                <option>Personal 4</option>
                <option>Personal 5</option>
              </select>
            </fieldset>  
            <fieldset class="form-group">
              <label for="detalle_mant">Detalle: </label>
              <textarea class="form-control" id="detalle_mant" name="detalle_mant" rows="3" placeholder="Ingrese un breve detalle del Mantenimiento"></textarea>
            </fieldset>   
            <button type="submit" class="btn btn-success">Ingresar</button>
          </form>
        </div>
    </div>
</div>
</div>
</body>