<?php

$idUsuario = $_POST['user'];

if($idTour<>""){
	
	echo (WEB_PATH . '../../usuario.php?action=deletet&id=' . $idUsuario);
	
}else{
	
	echo "<script>
			hisotory.go(-1);
			alert('No es valido el id ingresado!!');
			</script>";
}