<?php



echo"<h1>Lista de hoteles</h1>
<div class='user-index-container'>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th></th>
        </tr>";
        foreach ($hoteles as $hotel): 
            echo"<tr>
                <td>
                    <a href='../hotel.php?action=show&id=$hotel->id'>
                       ($hotel->nombre);
                    </a>
                </td>
                <td>$hotel->descripcion</td>
                <td>
                    <a href='../hotel.php?action=edit&id=$hotel->id'>Editar</a>
                    &nbsp; | &nbsp;
                    <a href='../hotel.php?action=delete&id=$hotel->id'>Eliminar</a>
                </td>
            </tr>";
        endforeach;
    echo"</table>
    </div>";



?>