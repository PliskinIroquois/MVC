<?php
/*** CLASE TOUR****/

class tour{
	
	public $nombre;
	public $descripcion;
	public $empresa;
	public $telefono;
	public $email;
	private static $tabla = 'tours';
	
	public function __construct(){
		$this->nombre='';
		$this->descripcion='';
		$this->empresa='';
		$this->telefono='';
		$this->email='';
		
	}
	
	public function save(){ //--esta funcion puede hacer el update tambien
		$db=baseDatos::getInstance();
		$columnas= array('nombreT','descripcion','empresa','telefono','email');
		$filtros=array('nombreT'=>$this->nombre!= null);
		
		
	}
	
	
}