<title>Editando Tour</title>

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

<h1>Editar Tour</h1>
<br />
<br />";
foreach ($toures as $tour):
echo "<form action='(WEB_PATH . '../../tour.php?action=edit&id=' . $tour->id)' method='post' enctype='multipart/form-data'>

<table align='center' bgcolor ='#CCCCCC' border='0' cellpadding='5' cellspacing='0' width='32%' >

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>ID del Tour:</font></td>
<td width='50%'><input required name='idTour' type='text' size='46' value='$tour->id'></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Nombre del Tour:</font></td>
<td width='50%'><input required name='nombreTour' type='text' size='46' value='$tour->nombre'></td>
</tr>

<tr>
   	<td width='50%' bgcolor='#CCCCCC'>Descripcion: </td>
  	 
<td width='50%' ><textarea maxlength='255' value='$tour->descripcion' name='descripcion' rows='4' cols='48' ></textarea>
   	</td>
 	</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Empresa:</font></td>
<td width='50%'><input required name='empresa' type='text' size='46' value='$tour->empresa' ></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Telefono:</font></td>
<td width='50%'><input required name='telefono' type='text' size='46' value='$tour->telefono' ></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Email:</font></td>
<td width='50%'><input required name='email' type='text' size='46' value='$tour->email' ></td>
</tr>

<tr>
<td></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>__________________</font></td>
<td width='50%' bgcolor='#CCCCCC'><font size=4>___________________________________</font></td>
</tr>

<tr>
   	<td width='50%' bgcolor='#CCCCCC'>Ubicacion del Tour: </td>
  	 
<td width='50%' ><textarea maxlength='255' value='$tour->ubicacionTour' name='ubicacionTour' rows='4' cols='48'></textarea>
   	</td>
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


