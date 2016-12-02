<title>Editando Hotel</title>

<?php
echo"<script>
function atras(){
history.go(-1);
}
</script>";

$var = $_POST['hotel'];

if($var==1){

echo "<head>
<link href='css/MenuP.css' rel='stylesheet' type='text/css' />
</head>

<body>

<center>

<h1>Editar Hotel</h1>
<br />
<br />

<form action='' method='POST' enctype='multipart/form-data'>

<table align='center' bgcolor ='#CCCCCC' border='0' cellpadding='5' cellspacing='0' width='32%' >

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Nombre del Hotel:</font></td>
<td width='50%'><input required name='HOTEL[]' type='text' size='46' placeholder='Hotel'></td>
</tr>

<tr>
   	<td width='50%' bgcolor='#CCCCCC'>Descripcion: </td>
  	 
<td width='50%' ><textarea maxlength='255' placeholder='Descripcion' name='HOTEL[]' rows='4' cols='48'></textarea>
   	</td>
 	</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Cantidad de estrellas:</font></td>
<td width='50%'><input required name='HOTEL[]' type='text' size='46' placeholder='Estrellas' ></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Cuidad:</font></td>
<td width='50%'><input required name='HOTEL[]' type='text' size='46' placeholder='Cuidad' ></td>
</tr>

<tr>
   	<td width='50%' bgcolor='#CCCCCC'>Direccion: </td>
  	 
<td width='50%' ><textarea maxlength='255' placeholder='Direccion' name='HOTEL[]' rows='4' cols='48'></textarea>
   	</td>
 	</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Telefono:</font></td>
<td width='50%'><input required name='HOTEL[]' type='text' size='46' placeholder='Telefono' ></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Email:</font></td>
<td width='50%'><input required name='HOTEL[]' type='text' size='46' placeholder='Email' ></td>
</tr>

<tr align='center'>
<td width='80%' bgcolor='#CCCCCC'>Seleccionar Archivo: </td>
<td bgcolor='#CCCCCC'><input required type='file' name='imagen' accept='file/*'></td>
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
<br />

<tr align='left'>
        <td width='50%'><input name='safe' type='button' value='Atras' onclick='atras()'/></td>
      	<td width='50%'><input name='safe' type='submit' value='Guardar Datos'/></td>
        <td width='50%'><input name='safe' type='reset' value='Cancelar'/></td>
 	</tr>
</form>
</center>

</body>";
}else{
	
	echo "<script>
alert('No existe un hotel con ese nombre');
history.go(-1);
</script>";
	
	}



?>


