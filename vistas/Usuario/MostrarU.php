<?php

echo"<h1>Lista de Usuarios Registrados</h1>";

echo "<form>
<table border='1'><tr><td>User Name<td>Tipo Usuario<td>NIF<td>Nombre<td>Apellidos<td>Telefono<td>Email</tr>";
foreach ($usuarios as $usuario):
echo"<tr><td>$usuario->username</td>
<td>$usuario->tipoUsuario</td>
<td>$usuario->NIF</td>
<td>$usuario->nombre</td>
<td>$usuario->apellidos</td>
<td>$usuario->telefono</td>
<td>$usuario->email</td></tr>";
endforeach;

echo "</table>
		<br>
		<td width='50%'><input name='safe' type='button' value='Menu Principal' onclick='MenuPrincipal.php'/></td>
</form>";


?>