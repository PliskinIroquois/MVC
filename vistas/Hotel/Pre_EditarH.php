<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editando Hotel</title>
<script>
function atras(){
history.go(-1);
}
</script>
</head>

<body>

<center>

<h1>Editar Hotel</h1>
<br />
<br />

<form action="EditarH.php" method="post" enctype="multipart/form-data">

<table align="center" bgcolor ="#CCCCCC" border="0" cellpadding="5" cellspacing="0" width="32%" >

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>Nombre del Hotel:</font></td>
<td width="50%"><input required name="hotel" type="text" size="46" placeholder="Hotel"></td>
</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>==================</font></td>
<td width="80%" bgcolor="#CCCCCC"><font size=4>===================================</font></td>
</tr>

</table>
<br />
<br />

<tr align="left">
        <td width="50%"><input name="safe" type="button" value="Atras" onclick="atras()"/></td>
      	<td width="50%"><input name="safe" type="submit" value="Buscar Hotel"/></td>
        <td width="50%"><input name="safe" type="reset" value="Restablecer"/></td>
 	</tr>
</form>
</center>

</body>
</html>