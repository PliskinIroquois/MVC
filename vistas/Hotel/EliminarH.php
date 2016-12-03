<title>Eliminando Hotel</title>

<?php

echo "<script>
function atras(){
history.go(-1);
}
</script>";

echo "<body>

<center>

<h1>Eliminar Hotel</h1>
<br />
<br />

<form action='../../modelos/validarHotel_Delete.php' method='post' enctype='multipart/form-data'>

<table align='center' bgcolor ='#CCCCCC' border='0' cellpadding='5' cellspacing='0' width='32%' >

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>ID del Hotel:</font></td>
<td width='50%'><input required name='hotel' type='text' size='46' placeholder='Hotel'></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>==================</font></td>
<td width='80%' bgcolor='#CCCCCC'><font size=4>===================================</font></td>
</tr>

</table>
<br />
<br />

<tr align='left'>
        <td width='50%'><input name='safe' type='button' value='Atras' onclick='atras()'/></td>
      	<td width='50%'><input name='safe' type='submit' value='Eliminar Hotel'/></td>
        <td width='50%'><input name='safe' type='reset' value='Cancelar'/></td>
 	</tr>
</form>
</center>

</body>";




?>

