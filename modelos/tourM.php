<?php
/*** CLASE TOUR****/

class tourM{

	public $id;
	public $nombre;
	public $descripcion;
	public $empresa;
	public $telefono;
	public $email;
	private static $tabla = 'tours';

	public function __construct(){
		$this->id='';
		$this->nombre='';
		$this->descripcion='';
		$this->empresa='';
		$this->telefono='';
		$this->email='';

	}

	public function save(){ //--esta funcion puede hacer el update tambien
		$db=baseDatos::getInstance();
		$columnas= array('idT','nombreT','descripcion','empresa','telefono','email');
		$valores = array($this->id,$this->nombre, $this->descripcion, $this->empresa,$this->telefono, $this->email);
		$filtros=array('idT'=>$this->id!= null);
		if (is_numeric($this->id) && $this->id > 0) {
			$bd->update(self::$tabla, $columnas, $valores, $filtros);
		} else {
			$bd->insert(self::$tabla, $columnas, $valores);
		}

	}

	public function delete() {
		$bd = BaseDatos::getInstance();
		$bd->delete(self::$tabla, array('idT' => $this->id));
	}

	public static function find($id) {
		$bd = BaseDatos::getInstance();
		$bd->conectar();
		$columnas= array('idT','nombreT','descripcion','empresa','telefono','email');
		$filtros = array('idT' => $id);
		$datos = $bd->select(self::$tabla, $columnas, $filtros);
		$tour = new tourM();
		foreach ($datos as $item) {
			$tour->id = $item['idT'];
			$tour->nombre = $item['nombreT'];
			$tour->descripcion = $item['descripcion'];
			$tour->cantidadEstrellas = $item['empresa'];
			$tour->telefono = $item['telefono'];
			$tour->email = $item['email'];
			break;
		}
		$bd->desconectar();
		return $tour;
	}

	public static function findAll() {
		$bd = BaseDatos::getInstance();
		$bd->conectar();
		$columnas= array('idT','nombreT','descripcion','empresa','telefono','email');
		$datos = $bd->select(self::$tabla, $columnas);
		$toures= array();
		foreach ($datos as $item) {
			$tour = new tourM();
			$tour->id = $item['idT'];
			$tour->nombre = $item['nombreT'];
			$tour->descripcion = $item['descripcion'];
			$tour->direccion = $item['empresa'];
			$tour->telefono = $item['telefono'];
			$tour->email = $item['email'];
			array_push($toures, $tour);
		}
		$bd->desconectar();
		return $toures;
	}



}