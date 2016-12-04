<title>Editando Usuario</title>

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

<h1>Editar Usuario</h1>
<br />
<br />";
foreach ($usuarios as $usuario):
echo "<form action='(WEB_PATH . '../../usuario.php?action=edit&id=' . $usuario->NIF)' method='POST' enctype='multipart/form-data'>

<table align='center' bgcolor ='#CCCCCC' border='0' cellpadding='5' cellspacing='0' width='32%' >


<tr>
       	<td width='80%' bgcolor='#CCCCCC'><font size=4>Identificacion:</font></td>
   	<td width='50%'><input required name='NIF' type='text' size='46' value='$usuario->NIF' onKeyPress='if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;'></td>
   	</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Nombre:</font></td>
<td width='50%'><input required name='nombre' type='text' size='46' value='$usuario->nombre'></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Apellidos:</font></td>
<td width='50%'><input required name='apellidos' type='text' size='46' value='$usuario->apellidos' ></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Email:</font></td>
<td width='50%'><input required name='email' type='text' size='46' value='$usuario->email'></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Telefono:</font></td>
<td width='50%'><input required name='telefono' type='text' size='46' value='$usuario->telefono'></td>
</tr>

	<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Username:</font></td>
<td width='50%'><input required name='username' type='text' size='46' value='$usuario->username'></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Password:</font></td>
<td width='50%'><input type='password' required name='clave' type='text' size='46'value='$usuario->clave'></td>
</tr>

<tr>
<td width='80%' bgcolor='#CCCCCC'><font size=4>Repetir Password:</font></td>
<td width='50%'><input type='password' required name='clave2' type='text' size='46' ></td>
</tr>";
if($usuario->tipoUsuario=="Administrador"){
echo "<tr align='left'>
		<td width='50%'>Tipo de Usuario</td>
        <td width='80%'><select name='op1' id='op1'>
  <option value='Administrador' selected>Administrador</option>
  <option value='GestionadorContenido'>Gestionador de Contenido</option>
  <option value='UserWeb'>User Web</option>
</select></td>
 	</tr>";
}else if($usuario->tipoUsuario=="GestionadorContenido"){
echo "<tr align='left'>
		<td width='50%'>Tipo de Usuario</td>
        <td width='80%'><select name='op1' id='op1'>
  <option value='Administrador'>Administrador</option>
  <option value='GestionadorContenido' selected>Gestionador de Contenido</option>
  <option value='UserWeb'>User Web</option>
</select></td>
 	</tr>";
}else if($usuario->tipoUsuario=="UserWeb"){
echo "<tr align='left'>
		<td width='50%'>Tipo de Usuario</td>
        <td width='80%'><select name='op1' id='op1'>
  <option value='Administrador'>Administrador</option>
  <option value='GestionadorContenido'>Gestionador de Contenido</option>
  <option value='UserWeb' selected>User Web</option>
</select></td>
 	</tr>";
}

echo "<tr>
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


