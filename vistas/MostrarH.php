<?php

$nombreH=0;
$descripcion=0;
$estrellas=0;
$cuidad=0;
$direccion=0;
$telefono=0;
$email=0;
$Img=0;

echo"<h1>Lista de Hoteles Registrados</h1>";

echo "<form>
<table border='1'><tr><td>Nombre<td>Descripcion<td>Estrellas<td>Cuidad<td>Direccion<td>Telefono<td>Email<td>Imagen</tr>";

echo"<tr><td>$nombreH</td>
<td>$descripcion</td>
<td>$estrellas</td>
<td>$cuidad</td>
<td>$direccion</td>
<td>$telefono</td>
<td>$email</td>
<td><img width='400' height='400' src='$Img'</td></tr>";


echo "</table>
</form>";


?>