<title>Editando Hotel</title>

<?php
echo"<script>
function atras(){
history.go(-1);
}
</script>";



echo "<head>
<link href='css/MenuP.css' rel='stylesheet' type='text/css' />
</head>

<body>

<center>

<h1>Editar Hotel</h1>
<br />
<br />";
foreach ($hoteles as $hotel):
echo"<form action='(WEB_PATH . '../../hotel.php?action=edit&id=' . $hotel->id)' method='POST' enctype='multipart/form-data'>


<table align='center' bgcolor ='#CCCCCC' border='0' cellpadding='5' cellspacing='0' width='32%' >

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>ID del Hotel:</font></td>
<td width='50%'><input required name='nombre' type='text' size='46' value='$hotel->id'></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Nombre del Hotel:</font></td>
<td width='50%'><input required name='idHotel' type='text' size='46'value='$hotel->nombre'></td>
</tr>

<tr>
   	<td width='50%' bgcolor='#CCCCCC'>Descripcion: </td>
  	 
<td width='50%' ><textarea maxlength='255' name='Descripcion' rows='4' cols='48' value='$hotel->descripcion'></textarea>
   	</td>
 	</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Cantidad de estrellas:</font></td>
<td width='50%'><input required name='estrellas' type='text' size='46' value='$hotel->cantidadEstrellas'></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Cuidad:</font></td>
<td width='50%'><input required name='cuidad' type='text' size='46' value='$hotel->cuidad'></td>
</tr>

<tr>
   	<td width='50%' bgcolor='#CCCCCC'>Direccion: </td>
  	 
<td width='50%' ><textarea maxlength='255' name='Direccion' rows='4' cols='48' value='$hotel->direccion'></textarea>
   	</td>
 	</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Telefono:</font></td>
<td width='50%'><input required name='telefono' type='text' size='46' value='$hotel->telefono'></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Email:</font></td>
<td width='50%'><input required name='email' type='text' size='46' value='$hotel->email'></td>
</tr>

<tr align='center'>
<td width='80%' bgcolor='#CCCCCC'>Seleccionar Archivo: </td>
<td bgcolor='#CCCCCC'><input required type='file' name='imagen' accept='file/*' value='$hotel->ubicacionFotografia'></td>
</tr>
<tr>
<td></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>__________________</font></td>
<td width='50%' bgcolor='#CCCCCC'><font size=4>___________________________________</font></td>
</tr>

</table>
<br />
<br />";
endforeach;
echo "<tr align='left'>
        <td width='50%'><input name='safe' type='button' value='Atras' onclick='atras()'/></td>
      	<td width='50%'><input name='safe' type='submit' value='Guardar Datos'/></td>
        <td width='50%'><input name='safe' type='reset' value='Cancelar'/></td>
 	</tr>
</form>
</center>

</body>";

?>


