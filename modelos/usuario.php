<?php
/*** CLASE USUARIO****/

class usuario{
	public $NIF;
	public $idUser;
	public $nombre;
	public $apellidos;
	public $clave;
	public $tipoUsuario;
	public $telefono;
	public $email;
	private static $tabla = 'usuarios';
	
	public function __construct(){
		$this->NIF='';
		$this->idUser='';
		$this->nombre='';
		$this->apellidos='';
		$this->clave='';
		$this->tipoUsuario='';
		$this->telefono='';
		$this->email='';
		
	}
	
	public function save(){ //--esta funcion puede hacer el update tambien
		$db=baseDatos::getInstance();
		$columnas= array('NIF','idUser','nombreU','apellidos','telefono','email','clave','userType');
		$filtros=array('nombre'=>$this->nombre!= null);
		
		
	}
	
	
	//	nombre,	descripción,	cantidad	de	estrellas,	ciudad,	dirección,	teléfono,	dirección	de	correo	electrónico,	1	foto.	
	
	
}