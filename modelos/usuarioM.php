<?php
/*** CLASE USUARIO****/

class usuarioM{
	public $NIF;
	public $username;
	public $nombre;
	public $apellidos;
	public $telefono;
	public $email;
	public $clave;
	public $tipoUsuario;
	private static $tabla = 'usuarios';

	public function __construct(){
		$this->NIF='';
		$this->username='';
		$this->nombre='';
		$this->apellidos='';
		$this->telefono='';
		$this->email='';
		$this->clave='';
		$this->tipoUsuario='';
		

	}

	public function save(){ //--esta funcion puede hacer el update tambien
		$bd=baseDatos::getInstance();
		$bd=new baseDatos(BD_USUARIO, BD_CONTRASENA, BD_NOMBRE_BD, BD_SERVIDOR);
		$bd->connect();
		$columnas= array('NIF','username','nombreUsuario','apellidos','telefono','email','clave','userType');
		$valores = array($this->NIF,$this->username,$this->nombre, $this->apellidos,$this->telefono, $this->email, $this->clave, $this->tipoUsuario);
		$filtros=array('NIF'=>$this->NIF!= null);
			$bd->insert(self::$tabla, $columnas, $valores);
			$bd->disconnect();

	}
	
	public function edit(){ //--esta funcion puede hacer el update tambien
		$bd=baseDatos::getInstance();
		$bd=new baseDatos(BD_USUARIO, BD_CONTRASENA, BD_NOMBRE_BD, BD_SERVIDOR);
		$bd->connect();
		$columnas= array('NIF','username','nombreUsuario','apellidos','telefono','email','clave','userType');
		$valores = array($this->NIF,$this->username,$this->nombre, $this->apellidos,$this->telefono, $this->email, $this->clave, $this->tipoUsuario);
		$filtros=array('NIF'=>$this->NIF!= null);
			$bd->update(self::$tabla, $columnas, $valores, $filtros);
			$bd->disconnect();
	}

	public function delete() {
		$bd = BaseDatos::getInstance();
		$bd->delete(self::$tabla, array('NIF' => $this->NIF));
	}

	public static function find($idUser) {
		$bd = BaseDatos::getInstance();
		$bd->conectar();
		$columnas= array('NIF','username','nombreUsuario','apellidos','telefono','email','clave','userType');
		$filtros = array('idUser' => $idUser);
		$datos = $bd->select(self::$tabla, $columnas, $filtros);
		$usuario = new usuarioM();
		foreach ($datos as $item) {
			$usuario->NIF = $item['NIF'];
			$usuario->username = $item['username'];
			$usuario->nombre = $item['nombreUsuario'];
			$usuario->apellidos = $item['apellidos'];
			$usuario->telefono = $item['telefono'];
			$usuario->email = $item['email'];
			$usuario->clave = $item['clave'];
			$usuario->tipoUsuario = $item['userType'];
			break;
		}
		$bd->desconectar();
		return $usuario;
	}

	public static function findAll() {
		$bd = BaseDatos::getInstance();
		$bd->conectar();
		$columnas= array('NIF','username','nombreUsuario','apellidos','telefono','email','clave','userType');
		$datos = $bd->select(self::$tabla, $columnas);
		$usuarios= array();
		foreach ($datos as $item) {
			$usuario->NIF = $item['NIF'];
			$usuario->username = $item['username'];
			$usuario->nombre = $item['nombreUsuario'];
			$usuario->apellidos = $item['apellidos'];
			$usuario->telefono = $item['telefono'];
			$usuario->email = $item['email'];
			$usuario->clave = $item['clave'];
			$usuario->tipoUsuario = $item['userType'];
			array_push($usuarios, $usuario);
		}
		$bd->desconectar();
		return $usuarios;
	}


}