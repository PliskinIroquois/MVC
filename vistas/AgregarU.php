<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregando Usuario</title>
<script>
function atras(){
history.go(-1);
}
</script>
</head>

<body>

<center>

<h1>Agregar Usuario</h1>
<br />
<br />

<form action="" method="POST" enctype="multipart/form-data">

<table align="center" bgcolor ="#CCCCCC" border="0" cellpadding="5" cellspacing="0" width="32%" >

    	<tr>
       	<td width="80%" bgcolor="#CCCCCC"><font size=4>Identificacion:</font></td>
   	<td width="50%"><input required name="USUARIO[]" type="text" size="46" placeholder="Identificacion" onKeyPress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"></td>
   	</tr>
    
    <tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>ID Usuario:</font></td>
<td width="50%"><input required name="USUARIO[]" type="text" size="46" placeholder="ID Usuario"></td>
</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>Nombre:</font></td>
<td width="50%"><input required name="USUARIO[]" type="text" size="46" placeholder="Nombre"></td>
</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>Apellidos:</font></td>
<td width="50%"><input required name="USUARIO[]" type="text" size="46" placeholder="Apellidos" ></td>
</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>Email:</font></td>
<td width="50%"><input required name="USUARIO[]" type="text" size="46" placeholder="Email" ></td>
</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>Telefono:</font></td>
<td width="50%"><input required name="USUARIO[]" type="text" size="46" placeholder="Telefono" ></td>
</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>Contraseña:</font></td>
<td width="50%"><input type="password" required name="USUARIO[]" type="text" size="46" placeholder="Contraseña" ></td>
</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>Repetir contraseña:</font></td>
<td width="50%"><input type="password" required name="USUARIO[]" type="text" size="46" placeholder="Repetir contraseña" ></td>
</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>_________________</font></td>
<td width="80%" bgcolor="#CCCCCC"><font size=4>___________________________________</font></td>
</tr>

<tr align="left">
		<td width="50%">Escoger el tipo de Usuario</td>
        <td width="50%">Administrador<input name="op1" type="radio" value="1"/><br /><br /> Generador de Contenido<input name="op1" type="radio" value="2"/><br /><br /> Usuario Web<input name="op1" type="radio" value="3"/></td>
        <td width="50%"></td>
 	</tr>

</table>
<br />
<br />

<tr align="left">
        <td width="50%"><input name="safe" type="button" value="Atras" onclick="atras()"/></td>
      	<td width="50%"><input name="safe" type="submit" value="Agregar Datos"/></td>
        <td width="50%"><input name="safe" type="reset" value="Restablecer"/></td>
 	</tr>

</form>
</center>

</body>
</html>