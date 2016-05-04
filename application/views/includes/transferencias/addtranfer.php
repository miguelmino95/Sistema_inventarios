<head>
	<title>Agregar Transferencia | Sistema de control de Inventarios</title>	
</head>
<body>
<div class="container">
	<div class="formulario">
    <div class="panel panel-success" >    
      <div class="panel-heading">
        <center><h1>Registrar Transferencia de Activo</h1></center>
      </div>
      <div class="panel-body">  
        <form>
          <fieldset class="form-group">
            <label for="idpersonal_trans">Personal Encargado: </label>
            <select name="idpersonal_trans" class="form-control" id="idpersonal_trans">
              <option>Seleccione Personal</option>	
              <option>Personal 1</option>
              <option>Personal 2</option>
              <option>Personal 3</option>
              <option>Personal 4</option>
              <option>Personal 5</option>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <label for="idactivo_resp">Activos: </label>
            <select name="idactivo_resp" class="form-control" id="idactivo_resp">
              <option>Asignar un activo</option>	
              <option>Activo 1</option>
              <option>Activo 2</option>
              <option>Activo 3</option>
              <option>Activo 4</option>
              <option>Activo 5</option>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <label for="dep_ant_resp">Departamento anterior: </label>
            <select name="dep_ant_resp" class="form-control" id="dep_ant_resp">
              <option>Seleccione el Departamento anterior</option>	
              <option>Departamento 1</option>
              <option>Departamento 2</option>
              <option>Departamento 3</option>
              <option>Departamento 4</option>
              <option>Departamento 5</option>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <label for="iddep_resp">Departamento nuevo: </label>
            <select name="iddep_resp" class="form-control" id="iddep_resp">
              <option>Asignar un Departamento nuevo</option>	
              <option>Departamento 1</option>
              <option>Departamento 2</option>
              <option>Departamento 3</option>
              <option>Departamento 4</option>
              <option>Departamento 5</option>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <label for="detalle_resp">Observación: </label>
            <textarea class="form-control" id="detalle_resp" name="detalle_resp" rows="3" placeholder="Ingrese una observación (opcional)"></textarea>
          </fieldset>
          <button type="submit" class="btn btn-success">Ingresar</button>
        </form>
      </div>
      </div>
    </div>
</div>
</div>
</body>