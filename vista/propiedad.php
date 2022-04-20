<?php
require_once("./layouts/header.php");

require_once("../controlador/propiedades.php");

?>

<h1>Catálogo de Propiedades : <?php echo $_REQUEST['ownerId'] ?></h1>

<div class="betweeen">
    <a href=<?php echo 'propiedad-nueva.php?ownerId=' . $_REQUEST['ownerId'] ?> class="btn">Agregar Propiedad</a>
    <a href="propietario.php" class="btn btn-gray">Atras</a>
</div>

<table>
    <tr>
        <td>ID</td>
        <td>PROVINCIA</td>
        <td>VALOR</td>
        <td>ACCIONES</td>
    </tr>
    <tbody>
        <?php
        if (!empty($dato)) :
            foreach ($dato as $key => $value) : ?>
                <tr>
                    <td><?php echo $value['id'] ?> </td>
                    <td><?php echo $value['province'] ?> </td>
                    <td>$ <?php echo $value['price'] ?> </td>
                    <td>
                        <form method="post" action=<?php echo 'propiedad-editar.php?id=' . $value['id'].'&ownerId=' . $value['ownerId'] ?>>
                            <input type="submit" class="btn" value="Editar" name="EditarPropiedad">
                            <input type="submit" class="btn" value="Eliminar" onclick="return confirm('Esta seguro? el cambio es irreversible!');" name="EliminarPropiedad">
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
<?php
require_once("./layouts/footer.php");
