<?php


echo"<h1>Lista de Hoteles Registrados</h1>";

echo "<form action='vistas/MenuPrincipal.php'>
<table border='1'><tr><td>ID Hotel<td>Nombre<td>Descripcion<td>Estrellas<td>Direccion<td>Telefono<td>Email<td>Imagen</tr>";
foreach ($hoteles as $hotel):
echo"<tr><td>$hotel->id</td>
<td>$hotel->nombre</td>
<td>$hotel->descripcion</td>
<td>$hotel->cantidadEstrellas</td>
<td>$hotel->direccion</td>
<td>$hotel->telefono</td>
<td>$hotel->email</td>
<td><img width='100' height='100' src='$hotel->ubicacionFotografia'</td></tr>";

endforeach;
echo "</table>
		<br>
		<td width='50%'><input name='safe' type='submit' value='Menu Principal' onclick='vistas/MenuPrincipal.php'/></td>
</form>";


?>