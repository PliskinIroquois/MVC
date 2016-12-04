<?php

foreach ($toures as $tour):

echo"<h1>Lista de Tours Registrados</h1>";

echo "<form>
<table border='1'><tr><td>ID Tour<td>Nombre<td>Descripcion<td>Empresa<td>Telefono<td>Email</tr>";
foreach ($toures as $tour):
echo"<tr><td>$tour->id</td>
<td>$tour->nombre</td>
<td>$descripcion</td>
<td>$tour->empresa</td>
<td>$tour->telefono</td>
<td>$tour->email</td>
<td>$tour->ubicacionTour</td>
<tr>";
endforeach;

echo "</table>
		<br>
		<td width='50%'><input name='safe' type='button' value='Menu Principal' onclick='MenuPrincipal.php'/></td>
</form>";


?>