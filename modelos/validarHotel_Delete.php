<?php

$idHotel = $_POST['hotel'];

if($idHotel<>0){
	
	echo (WEB_PATH . '/hotel.php?action=deletet&id=' . $idHotel);
	
}else{
	
	echo "<script>
			hisotory.go(-1);
			alert('No es valido el id ingresado!!');
			</script>";
}