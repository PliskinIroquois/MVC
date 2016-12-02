<?php
/*** CLASE HOTEL****/

class hotel{

	public $id;
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
		$this->id='';
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
		$columnas= array('idH','nombre','descripcion','cantidadEstrellas','ciudad','direccion','telefono','email','ubicacionFotografia');
		$valores = array($this->id,$this->nombre, $this->descripcion, $this->cantidadEstrellas, $this->ciudad, $this->direccion, $this->telefono, $this->email, $this->ubicacionFotografia);
		$filtros=array('idH'=>$this->id!= null);
		if (is_numeric($this->id) && $this->id > 0) {
			$bd->update(self::$tabla, $columnas, $valores, $filtros);
		} else {
			$bd->insert(self::$tabla, $columnas, $valores);
		}


	}


	public function delete() {
		$bd = BaseDatos::getInstance();
		$bd->delete(self::$tabla, array('idH' => $this->id));
	}

	public static function find($id) {
		$bd = BaseDatos::getInstance();
		$bd->conectar();
		$columnas= array('idH','nombre','descripcion','cantidadEstrellas','ciudad','direccion','telefono','email','ubicacionFotografia');
		$filtros = array('idH' => $id);
		$datos = $bd->select(self::$tabla, $columnas, $filtros);
		$hotel = new hotel();
		foreach ($datos as $item) {
			$hotel->id = $item['idH'];
			$hotel->nombre = $item['nombre'];
			$hotel->descripcion = $item['descripcion'];
			$hotel->cantidadEstrellas = $item['cantidadEstrellas'];
			$hotel->direccion = $item['direccion'];
			$hotel->telefono = $item['telefono'];
			$hotel->email = $item['email'];
			$hotel->ubicacionFotografia = $item['ubicacionFotografia'];
			break;
		}
		$bd->desconectar();
		return $hotel;
	}

	public static function findAll() {
		$bd = BaseDatos::getInstance();
		$bd->conectar();
		$columnas= array('idH','nombre','descripcion','cantidadEstrellas','ciudad','direccion','telefono','email','ubicacionFotografia');
		$datos = $bd->select(self::$tabla, $columnas);
		$hoteles= array();
		foreach ($datos as $item) {
			$hotel = new hotel();
			$hotel->id = $item['idH'];
			$hotel->nombre = $item['nombre'];
			$hotel->descripcion = $item['descripcion'];
			$hotel->cantidadEstrellas = $item['cantidadEstrellas'];
			$hotel->direccion = $item['direccion'];
			$hotel->telefono = $item['telefono'];
			$hotel->email = $item['email'];
			$hotel->ubicacionFotografia = $item['ubicacionFotografia'];
			array_push($hoteles, $hotel);
		}
		$bd->desconectar();
		return $hoteles;
	}



}