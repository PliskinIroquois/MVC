<?php
require_once ROOT_PATH . '/Vistas/_commons/header.php';
?>

<h1>Lista de hoteles</h1>
<div class="user-index-container">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th></th>
        </tr>
        <?php foreach ($hoteles as $hotel): ?>
            <tr>
                <td>
                    <a href="../hotel.php?action=show&id=<?php echo $persona->id; ?>">
                        <?php echo ($hotel->nombre); ?>
                    </a>
                </td>
                <td><?php echo $hotel->descripcion; ?></td>
                <td>
                    <a href="../hotel.php?action=edit&id=<?php echo $persona->id; ?>">Editar</a>
                    &nbsp; | &nbsp;
                    <a href="../hotel.php?action=delete&id=<?php echo $persona->id; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php
require_once ROOT_PATH . '/Vistas/_commons/footer.php';
?>