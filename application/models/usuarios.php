<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model{
	
	public function getUser($usuario = ''){
		
		$this->db->where('nombre_u',$usuario);
		$query = $this->db->get('usuarios');
        return $query->result();
	}
}

?>