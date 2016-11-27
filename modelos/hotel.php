<?php
/*** CLASE HOTEL****/

class hotel{
	
	public $nombre;
	public $descripcion;
	public $cantidadEstrellas;
	public $ciudad;
	public $direccion;
	public $telefono;
	public $email;
	public $ubicacionFotografia;
	private static $tabla = 'hoteles';
	
	public function __construct(){
		$this->nombre='';
		$this->descripcion='';
		$this->cantidadEstrellas='';
		$this->ciudad='';
		$this->direccion='';
		$this->telefono='';
		$this->email='';
		$this->ubicacionFotografia='';
		
	}
	
	public function save(){ //--esta funcion puede hacer el update tambien
		$db=baseDatos::getInstance();
		$columnas= array('nombre','descripcion','cantidadEstrellas','ciudad','direccion','telefono','email','ubicacionFotografia');
		$filtros=array('nombre'=>$this->nombre!= null);
		
		
	}
	
	
	//	nombre,	descripción,	cantidad	de	estrellas,	ciudad,	dirección,	teléfono,	dirección	de	correo	electrónico,	1	foto.	
	
	
}