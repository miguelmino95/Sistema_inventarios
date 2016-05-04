
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login | Sistema de Control de Inventarios</title>
    <?php $this->load->view('head'); ?> <!-- Aqui va cargado todos los css -->
  </head>

  <body class="body">

   <!-- BEGIN # BOOTSNIP INFO -->
<div class="container">
  <div class="row">
    <h1 class="text-center">Sistema de Gestión de Inventarios 2016</h1>
        <p class="text-center"><a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal">Ingresa</a></p>
  </div>
</div>
<!-- END # BOOTSNIP INFO -->

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" align="center">
          <img class="img-circle" id="img_logo" src="<?= base_url()?>dist/img/icon/icon.png">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
        </div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form" role="form" action="<?= base_url() ?>index.php/Login" method="POST">
                    <div class="modal-body">
                <div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Escribe tu Usuario y Clave.</span>
                            </div>
                <input id="login_username" name="usuario" class="form-control" type="text" placeholder="Usuario (type ERROR for error effect)" required>
                <input id="login_password" name="clave" class="form-control" type="password" placeholder="Clave" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                  </div>
                <div class="modal-footer">
                            <div>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Entrar">
                            </div>
                  <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Perdió su Clave?</button>                                
                            </div>
                </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;" action="cLogin.php" method="POST">
                  <div class="modal-body">
                <div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Escribe tu email</span>
                            </div>
                <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Ingresar</button>                                
                            </div>
                </div>
                    </form>
                    <!-- End | Lost Password Form -->                      
                    
                </div>
                <!-- End # DIV Form -->
                
      </div>
    </div>
  </div>
    <!-- END # MODAL LOGIN -->
    <?php $this->load->view('fscript'); ?>

    
  </body>
</html>
