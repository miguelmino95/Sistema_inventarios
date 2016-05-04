<nav class="navbar navbar-inverse" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a style="padding-left:2em;" class="navbar-brand" href="#"><span><img style="width:50%; height:150%;" src="<?= base_url()?>dist/img/icon/res/mipmap-hdpi/ic_launcher.png"></span></a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?= base_url()?>index.php/home/menu"><span>Inicio</span></a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span>Activos</span> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url()?>index.php/home/menu?menu=addactivos">Añadir Activos</a></li>
          <li><a href="<?= base_url()?>index.php/home/menu?menu=ltactivos">Listar Activos</a></li>          
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span>Personal</span> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url()?>index.php/home/menu?menu=addpersonal">Añadir Personal</a></li>
          <li><a href="<?= base_url()?>index.php/home/menu?menu=ltpersonal">Listar Personal</a></li>          
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span>Departamentos</span> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url()?>index.php/home/menu?menu=adddepart">Añadir Departamentos</a></li>
          <li><a href="<?= base_url()?>index.php/home/menu?menu=ltdepart">Listar Departamentos</a></li>        
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span>Responsables</span> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url()?>index.php/home/menu?menu=addrespon">Añadir Responsables</a></li>
          <li><a href="<?= base_url()?>index.php/home/menu?menu=ltrespon">Listar Responsables</a></li>        
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span>Transferencias</span> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url()?>index.php/home/menu?menu=addtransfer">Añadir Transferencias</a></li>
          <li><a href="<?= base_url()?>index.php/home/menu?menu=lttransfer">Listar Transferencias</a></li>          
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span>Mantenimientos</span> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url()?>index.php/home/menu?menu=addmante">Añadir Mantenimientos</a></li>
          <li><a href="<?= base_url()?>index.php/home/menu?menu=ltmante">Listar Mantenimientos</a></li>          
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span>Usuarios</span> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url()?>index.php/home/menu?menu=addusuarios">Añadir Usuarios</a></li>
          <li><a href="<?= base_url()?>index.php/home/menu?menu=ltusuarios">Listar Usuarios</a></li>          
        </ul>
      </li>
    </ul>
 
    <ul class="nav navbar-nav navbar-right">      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span></span> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Conf</a></li>            
          <li class="divider"></li>
          <li><a href="#">Cerrar Sesión</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>