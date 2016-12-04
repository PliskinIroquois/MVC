<?php

$idHotel = $_POST['hotel'];

if($idHotel<>0){
	
	echo "<script language='javascript'>window.location='('../hotel.php?action=deletet&id=' . $idHotel)'</script>";
	
}else{
	
	echo "<script>
			hisotory.go(-1);
			alert('No es valido el id ingresado!!');
			</script>";
}