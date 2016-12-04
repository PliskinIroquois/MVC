<?php
class usuarioController {

	private $requestMethod;
	
	public function __construct($requestMethod) {
		if ($requestMethod === 'POST') {
			$this->requestMethod = Request::POST;
		} else if ($requestMethod === 'GET'){
			$this->requestMethod = Request::GET;
		}else{
			$this->requestMethod = Request::FILES;
		}
	}

	public function index() {
		require_once ROOT_PATH . '../MenuPrincipal.php';
	}

	public function show() {
		
		$usuarios = usuarioM::findAll();
		if($usuarios<>null){
		require_once ROOT_PATH . 'Usuario/MostrarU.php';
		}else{
			echo"<script>
					history.go(-1);
					alert('No se encontro un usuario con ese username!!');
					</script>";
		}
	}
	
	public function findByID($id) {
		$usuarios = usuarioM::find($id);
		if($usuarios<>null){
		require_once ROOT_PATH . 'Usuario/EditarU.php';
		}else{
			echo"<script>
					history.go(-1);
					alert('No se encontro un usuario con ese username!!');
					</script>";
		}
	}

	public function create(Request $request) {
		if ($this->requestMethod == Request::POST) {
			$usuario = new usuarioM();
			if($request->input('clave')==$request->input('clave2')){
			$usuario->NIF = $request->input('NIF');
			$usuario->username = $request->input('username');
			$usuario->nombre = $request->input('nombre');
			$usuario->apellidos = $request->input('apellidos');
			$usuario->telefono = $request->input('telefono');
			$usuario->email = $request->input('email');
			$usuario->clave = $request->input('clave');
			$usuario->tipoUsuario = $request->input('op1');
			$usuario->save();
			header('Location: ' . WEB_PATH . '/vistas/MenuPrincipal.php');
			}else{
				header('Location: history.go(-1);');
			}
		} else {
			require_once ROOT_PATH . 'Usuario/AgregarU.php';
		}
	}

	public function edit($id, Request $request) {
		$usuario = usuarioM::find($id);
		if (($this->requestMethod == Request::POST)&&($this->requestMethod == Request::FILES)) {

			$usuario->id = $request->input('NIF');
			$usuario->username = $request->input('username');
			$usuario->nombre = $request->input('nombre');
			$usuario->apellidos = $request->input('apellidos');
			$usuario->telefono = $request->input('telefono');
			$usuario->email = $request->input('email');
			$usuario->clave = $request->input('clave');
			$usuario->tipoUsuario = $request->input('op1');
			$usuario->save();
			
			header('Location: ' . WEB_PATH . '../../usuario.php?action=index');
		} else {
			require_once ROOT_PATH . 'Usuario/Pre_EditarU.php';
		}
	}

	public function delete($id) {
		$usuario = usuarioM::find($id);
		$usuario->delete();
		header('Location: ' . WEB_PATH . '../../usuario.php?action=index');
	}

}

?>