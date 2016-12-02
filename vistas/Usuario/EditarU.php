<title>Editando Usuario</title>

<?php
echo"<script>
function atras(){
history.go(-1);
}
</script>";

$var = $_POST['user'];

if($var==1){

echo "<head>
<link href='css/MenuP.css' rel='stylesheet' type='text/css' />
</head>

<body>

<center>

<h1>Editar Usuario</h1>
<br />
<br />

<form action='' method='POST' enctype='multipart/form-data'>

<table align='center' bgcolor ='#CCCCCC' border='0' cellpadding='5' cellspacing='0' width='32%' >


<tr>
       	<td width='80%' bgcolor='#CCCCCC'><font size=4>Identificacion:</font></td>
   	<td width='50%'><input required name='USUARIO[]' type='text' size='46' placeholder='Identificacion' onKeyPress='if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;'></td>
   	</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Nombre:</font></td>
<td width='50%'><input required name='USUARIO[]' type='text' size='46' placeholder='Nombre'></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Apellidos:</font></td>
<td width='50%'><input required name='USUARIO[]' type='text' size='46' placeholder='Apellidos' ></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Email:</font></td>
<td width='50%'><input required name='USUARIO[]' type='text' size='46' placeholder='Email' ></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Telefono:</font></td>
<td width='50%'><input required name='USUARIO[]' type='text' size='46' placeholder='Telefono' ></td>
</tr>

	<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>ID Usuario:</font></td>
<td width='50%'><input required name='USUARIO[]' type='text' size='46' placeholder='ID Usuario'></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Contraseña:</font></td>
<td width='50%'><input type='password' required name='USUARIO[]' type='text' size='46' placeholder='Contraseña' ></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Repetir Contraseña:</font></td>
<td width='50%'><input type='password' required name='USUARIO[]' type='text' size='46' placeholder='Contraseña' ></td>
</tr>

<tr>
<td></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>__________________</font></td>
<td width='50%' bgcolor='#CCCCCC'><font size=4>___________________________________</font></td>
</tr>

<tr align='left'>
		<td width='50%'>Escoger el tipo de Usuario</td>
        <td width='50%'>Administrador<input name='op1' type='radio' value='1'/><br /><br /> Generador de Contenido<input name='op1' type='radio' value='2'/><br /><br /> Usuario Web<input name='op1' type='radio' value='3'/></td>
        <td width='50%'></td>
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
alert('No existe un usuario con ese nombre');
history.go(-1);
</script>";
	
	}



?>


