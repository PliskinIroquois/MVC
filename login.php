<?php
	session_start();
	include_once("constantes.php"); 
	include_once 'librerias/baseDatos.php5';
	
	$error = ""; 
	
	
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"]))
		{
			$error = "Ambos campos son requeridos!.";
		}else
		{
			
			$verificar=baseDatos::getInstance();
			
		
			/*
			 * define('BD_USUARIO', 'root');
define('BD_CONTRASENA', 'root');
define('BD_NOMBRE_BD', 'proyecto_p4');
define('BD_SERVIDOR', 'localhost');
			 * 
			 * 
			 */
			$verificar=new baseDatos(BD_USUARIO, BD_CONTRASENA, BD_NOMBRE_BD, BD_SERVIDOR);
			
			
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			//para evitar injecciones de SQL
			//$username = stripslashes($username);
			//$password = stripslashes($password);
			
			//"SELECT uid FROM users WHERE username='$username' and password='$password'";
			$filtros = array($username,md5($password)); //cambio de pass a md5
			$campos=array("username","clave");
			$verificar->connect();
			$resultado=$verificar->select('usuarios', $filtros, $campos, true);
			
			
			
			if(mysqli_fetch_array($resultado)<>null){
				session_start();
				$_SESSION['nombreUsuario']=$username;
				header("location:vistas/MenuPrincipal.php");
				$verificar->disconnect();
			}
			else
			{
				$error="Password o Nombre de Usuario Incorrectos";
			}
			
			
		}
	}