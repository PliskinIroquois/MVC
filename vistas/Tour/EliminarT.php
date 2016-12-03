<title>Eliminando Tour</title>

<?php

echo "<script>
function atras(){
history.go(-1);
}
</script>";

echo "<body>

<center>

<h1>Eliminar Tour</h1>
<br />
<br />

<form action='../../modelos/validarTour_Delete.php' method='POST' enctype='multipart/form-data'>

<table align='center' bgcolor ='#CCCCCC' border='0' cellpadding='5' cellspacing='0' width='32%' >

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>ID del Tour:</font></td>
<td width='50%'><input required name='tour' type='text' size='46' placeholder='Tour'></td>
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
      	<td width='50%'><input name='safe' type='submit' value='Eliminar Tour'/></td>
        <td width='50%'><input name='safe' type='reset' value='Cancelar'/></td>
 	</tr>
</form>
</center>

</body>";




?>

