<?php

$idHotel = $_POST['hotel'];

if($idHotel<>0){
	header("Location: ../hotel.php?action=deletet&id=$idHotel");
}else{
	
	echo "<script>
			hisotory.go(-1);
			alert('No es valido el id ingresado!!');
			</script>";
}