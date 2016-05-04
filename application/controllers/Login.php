<?php

class Login extends CI_Controller {
	
	public function index()	{
		$usuario	= $this->input->post('usuario');
		$clave		= $this->input->post('clave');		

		$this->load->model('usuarios');
		
		$data = $this->usuarios->getUser($usuario);

		/*echo $data['nombre_u'];

		echo $data->$clave_u;*/

		/*if ($fila != null) {
			if ($fila->clave == $clave) {
					$data = array(
						'usuario' => $usuario,
						'id' => $fila->id, 			
						'login' => TRUE
					);

					$this->session->set_userdata($data);
					$this->load->view('main.php');
						
			}else {
				$this->load->view('vlogin');
				

		}
					
		}else{
			$this->load->view('welcome_message');
		}*/

		
	}
}

?>