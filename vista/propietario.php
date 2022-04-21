<?php
require_once("./layouts/header.php");

require_once("../controlador/propietarios.php");

?>
<h1>Catálogo de Propietarios</h1>

<a href="propietario-nuevo.php" class="btn">Agregar Propietario</a>

<table>
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>ACCIONES</td>
    </tr>
    <tbody>
        <?php
        if (!empty($dato)) :
            foreach ($dato as $key => $value) : ?>
                <tr>
                    <td><?php echo $value['id'] ?> </td>
                    <td><?php echo $value['name'] ?> </td>
                    <td>
                        <form method="post" action=<?php echo 'propietario-editar.php?id=' . $value['id'] ?>>
                            <input type="submit" class="btn" value="Editar" name="EditarPropietario">
                            <input type="submit" class="btn" value="Eliminar" onclick="return confirm('Esta seguro? el cambio es irreversible!');" name="EliminarPropietario">
                            <a class="btn" href=<?php echo 'propiedad.php?ownerId=' . $value['id'] ?>>Añadir proviedad</a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="3" class="empty">NO HAY REGISTROS</td>
            </tr>
        <?php endif ?>
    </tbody>
</table>
