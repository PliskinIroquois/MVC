<?php
/*** CLASE TOUR****/

class tourM{

	public $id;
	public $nombre;
	public $descripcion;
	public $empresa;
	public $telefono;
	public $email;
	Public $ubicacionTour;
	private static $tabla = 'tours';

	public function __construct(){
		$this->id='';
		$this->nombre='';
		$this->descripcion='';
		$this->empresa='';
		$this->telefono='';
		$this->email='';
		$this->ubicacionTour='';
	}

	public function save(){ //--esta funcion puede hacer el update tambien
		$bd=baseDatos::getInstance();
		$bd=new baseDatos(BD_USUARIO, BD_CONTRASENA, BD_NOMBRE_BD, BD_SERVIDOR);
		$bd->connect();
		if($this->id<>null){
		$columnas= array('idTour','nombreTour','descripcionTour','empresa','telefono','email','ubicacionTour');
		$valores = array($this->id,$this->nombre, $this->descripcion, $this->empresa,$this->telefono, $this->email, $this->ubicacionTour);
		$filtros=array('idTour'=>$this->id!= null);
		if (is_numeric($this->id) && $this->id > 0) {
			$bd->update(self::$tabla, $columnas, $valores, $filtros);
		} else {
			$bd->insert(self::$tabla, $columnas, $valores);
		}
		
		}else{
			$columnas= array('nombreTour','descripcionTour','empresa','telefono','email','ubicacionTour');
			$valores = array($this->nombre, $this->descripcion, $this->empresa,$this->telefono, $this->email, $this->ubicacionTour);
			$filtros=array('idTour'=>$this->id!= null);
			if (is_numeric($this->id) && $this->id > 0) {
				$bd->update(self::$tabla, $columnas, $valores, $filtros);
			} else {
				$bd->insert(self::$tabla, $columnas, $valores);
			}
			
		}$bd->disconnect();
		
	}

	public function delete() {
		$bd = BaseDatos::getInstance();
		$bd->delete(self::$tabla, array('idTour' => $this->id));
	}

	public static function find($id) {
		$bd = BaseDatos::getInstance();
		$bd->conectar();
		$columnas= array('idTour','nombreTour','descripcionTour','empresa','telefono','email','ubicacionTour');
		$filtros = array('idT' => $id);
		$datos = $bd->select(self::$tabla, $columnas, $filtros);
		$tour = new tourM();
		foreach ($datos as $item) {
			$tour->id = $item['idTour'];
			$tour->nombre = $item['nombreTour'];
			$tour->descripcion = $item['descripcionTour'];
			$tour->cantidadEstrellas = $item['empresa'];
			$tour->telefono = $item['telefono'];
			$tour->email = $item['email'];
			$tour->ubicacionTour = $item['ubicacionTour'];
			break;
		}
		$bd->desconectar();
		return $tour;
	}

	public static function findAll() {
		$bd = BaseDatos::getInstance();
		$bd->conectar();
		$columnas= array('idTour','nombreTour','descripcionTour','empresa','telefono','email','ubicacionTour');
		$datos = $bd->select(self::$tabla, $columnas);
		$toures= array();
		foreach ($datos as $item) {
			$tour = new tourM();
			$tour->id = $item['idTour'];
			$tour->nombre = $item['nombreTour'];
			$tour->descripcion = $item['descripcionTour'];
			$tour->cantidadEstrellas = $item['empresa'];
			$tour->telefono = $item['telefono'];
			$tour->email = $item['email'];
			$tour->ubicacionTour = $item['ubicacionTour'];
			array_push($toures, $tour);
		}
		$bd->desconectar();
		return $toures;
	}



}