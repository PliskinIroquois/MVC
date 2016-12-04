<?php
/*** CLASE USUARIO****/

class usuarioM{
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
		$columnas= array('NIF','idUser','nombreU','apellidos','clave','userType','telefono','email');
		$valores = array($this->NIF,$this->idUser,$this->nombre, $this->apellidos, $this->clave, $this->tipoUsuario,$this->telefono, $this->email);
		$filtros=array('idUser'=>$this->idUser!= null);
		if (is_numeric($this->idUser) && $this->idUser > 0) {
			$bd->update(self::$tabla, $columnas, $valores, $filtros);
		} else {
			$bd->insert(self::$tabla, $columnas, $valores);
		}


	}

	public function delete() {
		$bd = BaseDatos::getInstance();
		$bd->delete(self::$tabla, array('idUser' => $this->idUser));
	}

	public static function find($idUser) {
		$bd = BaseDatos::getInstance();
		$bd->conectar();
		$columnas= array('NIF','idUser','nombreU','apellidos','clave','userType','telefono','email');
		$filtros = array('idUser' => $idUser);
		$datos = $bd->select(self::$tabla, $columnas, $filtros);
		$usuario = new usuarioM();
		foreach ($datos as $item) {
			$usuario->NIF = $item['NIF'];
			$usuario->idUser = $item['idUser'];
			$usuario->nombre = $item['nombreU'];
			$usuario->apellidos = $item['apellidos'];
			$usuario->clave = $item['clave'];
			$usuario->userType = $item['userType'];
			$usuario->telefono = $item['telefono'];
			$usuario->email = $item['email'];
			break;
		}
		$bd->desconectar();
		return $usuario;
	}

	public static function findAll() {
		$bd = BaseDatos::getInstance();
		$bd->conectar();
		$columnas= array('NIF','idUser','nombreU','apellidos','clave','userType','telefono','email');
		$datos = $bd->select(self::$tabla, $columnas);
		$usuarios= array();
		foreach ($datos as $item) {
			$usuario->NIF = $item['NIF'];
			$usuario->idUser = $item['idUser'];
			$usuario->nombre = $item['nombreU'];
			$usuario->apellidos = $item['apellidos'];
			$usuario->clave = $item['clave'];
			$usuario->userType = $item['userType'];
			$usuario->telefono = $item['telefono'];
			$usuario->email = $item['email'];
			array_push($usuarios, $usuario);
		}
		$bd->desconectar();
		return $usuarios;
	}


}