<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'constantes.php';
require_once 'login/chequea_login.php';
require_once 'Librerias/BaseDatos.php';
require_once 'Librerias/Request.php';
require_once 'controladores/usuarioController.php';
require_once 'modelos/usuarioM.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : 0;

$controller = new tourController($_SERVER['REQUEST_METHOD']);

switch ($action) {
	case 'index':
		$controller->index();
		break;
	case 'show':
		$controller->show();
		break;
	case 'create':
		$request = new Request($_POST);
		$controller->create($request);
		break;
	case 'edit':
		$request = new Request($_POST);
		$controller->edit($id, $request);
		break;
	case 'showEdit':
		$controller->findByID($id);
		break;
	case 'delete':
		$controller->delete($id);
		break;
}