<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<?php $this->load->view('head'); ?>	
</head>
<body>
	<?php $this->load->view('header'); ?>	
	<!-- cases -->
<?php 
	
	if(isset($_GET['menu'])){
	    $menu=$_GET['menu'];
	    switch($menu){        

	        /* añadir */
	        case 'addactivos':	 $this->load->view('includes/activos/addactivos'); break; 			/* añadir activos */
	        case 'addusuarios':  $this->load->view('includes/usuarios/addusuarios'); break; 		/* añadir usuario */       
	        case 'addpersonal':  $this->load->view('includes/personal/addpersonal'); break; 		/* añadir personal */
	        case 'adddepart':	 $this->load->view('includes/departamentos/adddepart'); break;		/* añadir departamento */
	        case 'addrespon':	 $this->load->view('includes/responsables/addrespon'); break; 		/* añadir responsables */
	        case 'addmante':	 $this->load->view('includes/mantenimientos/addmante'); break; 		/* añadir mantenimiento */
	        case 'addtransfer':	 $this->load->view('includes/transferencias/addtranfer'); break;	/* añadir transferencias */

	        /* listas */
	        case 'lttransfer':	 $this->load->view('includes/transferencias/lttransfer'); break; 	/* lista transferencias */
	        case 'ltmante':		 $this->load->view('includes/mantenimientos/ltmante'); break;		/* lista mantenimiento */
	        case 'ltrespon':     $this->load->view('includes/responsables/ltrespon'); break; 		/* lista responsables */    
	        case 'ltdepart':	 $this->load->view('includes/departamentos/ltdepart'); break; 		/* lista departamentos */
	        case 'ltpersonal':	 $this->load->view('includes/personal/ltpersonal'); break;			/* lista personal */
	        case 'ltusuarios':	 $this->load->view('includes/usuarios/ltusuarios'); break;			/* lista usuarios */      
	        case 'ltactivos':    $this->load->view('includes/activos/ltactivos'); break; 			/* lista activos */               

	    }
	}else{
	     $this->load->view('includes/main');
	}
?>
	<!-- end of cases -->

	<?php $this->load->view('fscript'); ?>
</body>
</html>