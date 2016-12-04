<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<script>
function atras(){
history.go(-1);
}
</script>
</head>

<body>

<center>

<h1>Acceso a Usuarios Registrados</h1>
<br />
<br />

<form action="/login/login.php" method="post" enctype="multipart/form-data">

<table align="center" bgcolor ="#CCCCCC" border="0" cellpadding="5" cellspacing="0" width="32%" >
    
    <tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>ID Usuario:</font></td>
<td width="50%"><input required name="username" type="text" size="46" placeholder="ID Usuario"></td>
</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>Contraseña:</font></td>
<td width="50%"><input type="password" required name="password" type="text" size="46" placeholder="ContraseÃ±a" ></td>
</tr>

<tr>
<td width="80%" bgcolor="#CCCCCC"><font size=4>_________________</font></td>
<td width="80%" bgcolor="#CCCCCC"><font size=4>___________________________________</font></td>
</tr>

</table>
<br />
<br />

<tr align="left">
      	<td width="50%"><input name="safe" type="submit" value="Ingresar"/></td>
        <td width="50%"><input name="safe" type="reset" value="Restablecer"/></td>
 	</tr>

</form>
</center>

</body>
</html>