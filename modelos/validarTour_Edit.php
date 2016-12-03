<?php

$idTour = $_POST['tour'];

if($idTour<>""){
	
	echo (WEB_PATH . '../../tour.php?action=showEdit&id=' . $idTour);
	
}else{
	
	echo "<script>
			hisotory.go(-1);
			alert('No es valido el id ingresado!!');
			</script>";
}