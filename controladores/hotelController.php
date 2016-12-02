<?php
class hotelController {

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
		//$hoteles = hotel::findAll();
		require_once ROOT_PATH . '/vistas/MenuPrincipal.php';
	}

	public function show() {
		$hoteles = hotel::findAll();
		require_once ROOT_PATH . '\MVC\vistas\Hotel/MostrarH.php';
	}

	public function create(Request $request) {
		if (($this->requestMethod == Request::POST)&&($this->requestMethod == Request::FILES)) {
			$hotel = new hotel();
			$hotel->id = $request->input('idH');
			$hotel->nombre = $request->input('nombre');
			$hotel->apellidos = $request->input('descripcion');
			$hotel->cantidadEstrellas = $request->input('estrellas');
			$hotel->cuidad = $request->input('cuidad');
			$hotel->direccion = $request->input('direccion');
			$hotel->telefono = $request->input('telefono');
			$hotel->email = $request->input('email');
			$archivo = $request->input('imagen')['tmp_name'];
			$destino = $request->input('imagen')['name'];
			move_uploaded_file($archivo, $destino);
			$hotel->ubicacionFotografia = $destino;
			$hotel->save();
			// Redirige a pagina index de Persona
			header('Location: ' . WEB_PATH . '/hotel.php');
		} else {
			require_once ROOT_PATH . '/vistas/hotel/AgregarH.php';
		}
	}

	public function edit($id, Request $request) {
		$hotel = hotel::find($id);
		if (($this->requestMethod == Request::POST)&&($this->requestMethod == Request::FILES)) {

			$hotel->id = $request->input('idH');
			$hotel->nombre = $request->input('nombre');
			$hotel->apellidos = $request->input('descripcion');
			$hotel->cantidadEstrellas = $request->input('estrellas');
			$hotel->cuidad = $request->input('cuidad');
			$hotel->direccion = $request->input('direccion');
			$hotel->telefono = $request->input('telefono');
			$hotel->email = $request->input('email');
			$archivo = $request->input('imagen')['tmp_name'];
			$destino = $request->input('imagen')['name'];
			move_uploaded_file($archivo, $destino);
			$hotel->ubicacionFotografia = $destino;
			$hotel->save();
			// Redirige a pagina index de Persona
			header('Location: ' . WEB_PATH . '/hotel.php?action=index');
		} else {
			require_once ROOT_PATH . '/vistas/hotel/Pre_Editar.php';
		}
	}

	public function delete($id) {
		$hotel = hotel::find($id);
		$hotel->delete();
		// Redirige a pagina index de Persona
	}

}

?>