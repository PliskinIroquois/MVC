<?php


echo"<h1>Lista de Hoteles Registrados</h1>";

echo "<form>
<table border='1'><tr><td>ID Hotel<td>Nombre<td>Descripcion<td>Estrellas<td>Cuidad<td>Direccion<td>Telefono<td>Email<td>Imagen</tr>";
foreach ($hoteles as $hotel):
echo"<tr><td>$hotel->id</td>
<td>$hotel->nombre</td>
<td>$hotel->descripcion</td>
<td>$hotel->cantidadEstrellas</td>
<td>$hotel->cuidad</td>
<td>$hotel->direccion</td>
<td>$hotel->telefono</td>
<td>$hotel->email</td>
<td><img width='400' height='400' src='$hotel->ubicacionFotografia'</td></tr>";

endforeach;
echo "</table>
		<br>
		<td width='50%'><input name='safe' type='button' value='Menu Principal' onclick='MenuPrincipal.php'/></td>
</form>";


?>