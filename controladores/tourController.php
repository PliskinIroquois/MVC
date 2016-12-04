<?php
class tourController {

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
		$hoteles = tourM::findAll();
		require_once ROOT_PATH . 'Tour/MostrarT.php';
	}
	
	public function findByID($id) {
		$toures = tourM::find($id);
		if($toures<>null){
		require_once ROOT_PATH . 'Tour/EditarT.php';
		}else{
			echo"<script>
					history.go(-1);
					alert('No se encontro un tour con ese ID!!');
					</script>";
		}
	}

	public function create(Request $request) {
		if ($this->requestMethod == Request::POST) {
			$tour = new tourM();
			$tour->nombre = $request->input('nombre');
			$tour->descripcion = $request->input('descripcion');
			$tour->empresa = $request->input('empresa');
			$tour->telefono = $request->input('telefono');
			$tour->email = $request->input('email');
			$tour->ubicacionTour = $request->input('ubicacionTour');
			$tour->save();
			header('Location: ' . WEB_PATH . '/vistas/MenuPrincipal.php');
		} else {
			require_once ROOT_PATH . 'Tour/AgregarT.php';
		}
	}

	public function edit($id, Request $request) {
		$tour = tourM::find($id);
		if (($this->requestMethod == Request::POST)&&($this->requestMethod == Request::FILES)) {

			$tour->id = $request->input('idTour');
			$tour->nombre = $request->input('nombre');
			$tour->Descripcion = $request->input('descripcion');
			$tour->empresa = $request->input('empresa');
			$tour->telefono = $request->input('telefono');
			$tour->email = $request->input('email');
			$tour->ubicacionTour = $request->input('ubicacionTour');
			$tour->save();
			
			header('Location: ' . WEB_PATH . '../../tour.php?action=index');
		} else {
			require_once ROOT_PATH . 'Tour/Pre_EditarT.php';
		}
	}

	public function delete($id) {
		$tour = tourM::find($id);
		$tour->delete();
		header('Location: ' . WEB_PATH . '../../tour.php?action=index');
	}

}

?>