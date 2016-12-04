<?php
	session_start();
	include("../constantes.php"); 
	include_once ROOT_PATH .'liberias/baseDatos.php5';
	
	$error = ""; 
	
	
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"]))
		{
			$error = "Ambos campos son requeridos!.";
		}else
		{
			$verificar=baseDatos::getInstance();
			$verificar= new baseDatos(DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_SERVER);
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			//para evitar injecciones de SQL
			$username = stripslashes($username);
			$password = stripslashes($password);
			
			//"SELECT uid FROM users WHERE username='$username' and password='$password'";
			$filtros = array($username,md5($password)); //cambio de pass a md5
			$campos=array("username","password");
			$verificar->connect();
			$resultado=$verificar->select('usuarios', $filtros, $campos, true);
			
			$verificar->disconnect();
			
			if(mysqli_fetch_array($resultado)){
				session_start();
				$_SESSION['nombreUsuario']=$username;
				header("location:../MenuPrincipal.php");
			}
			else
			{
				$error="Password o Nombre de Usuario Incorrectos";
			}
			
			
		}
	}