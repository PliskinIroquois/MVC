<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregando Hotel</title>
<script>
function atras(){
history.go(-1);
}
</script>
<link href="css/MenuP.css" rel="stylesheet" type="text/css" />
</head>

<body>

<center>

<h1>Agregar Hotel</h1>
<br />
<br />

<form action="../../hotel.php?action=create" method="post" enctype="multipart/form-data">

<table align="center" bgcolor ="#CCCCCC" border="0" cellpadding="5" cellspacing="0" width="32%" >

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>Nombre del Hotel:</font></td>
<td width="50%"><input required name="nombre" type="text" size="46" placeholder="Hotel"></td>
</tr>

<tr>
   	<td width="50%" bgcolor="#CCCCCC">Descripcion: </td>
  	 
<td width="50%" ><textarea maxlength="255" placeholder="Descripcion" name="descripcion" rows="4" cols="48"></textarea>
   	</td>
 	</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>Cantidad de estrellas:</font></td>
<td width="50%"><input required name="estrellas" type="text" size="46" placeholder="Estrellas" ></td>
</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>Cuidad:</font></td>
<td width="50%"><input required name="ciudad" type="text" size="46" placeholder="Ciudad" ></td>
</tr>

<tr>
   	<td width="50%" bgcolor="#CCCCCC">Direccion: </td>
  	 
<td width="50%" ><textarea maxlength="255" placeholder="Direccion" name="direccion" rows="4" cols="48"></textarea>
   	</td>
 	</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>Telefono:</font></td>
<td width="50%"><input required name="telefono" type="text" size="46" placeholder="Telefono" ></td>
</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>Email:</font></td>
<td width="50%"><input required name="email" type="text" size="46" placeholder="Email" ></td>
</tr>

<tr align="center">
<td width="80%" bgcolor="#CCCCCC">Seleccionar Archivo: </td>
<td bgcolor="#CCCCCC"><input required type="file" name="imagen" accept="file/*"></td>
</tr>
<tr>
<td></td>
</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>__________________</font></td>
<td width="80%" bgcolor="#CCCCCC"><font size=4>___________________________________</font></td>
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