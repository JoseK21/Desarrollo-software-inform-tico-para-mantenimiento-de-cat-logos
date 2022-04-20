<?php
require_once("./layouts/header.php");
?>
<h1>Propietarios</h1>

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
            foreach ($dato as $key => $value)
                foreach ($value as $v) : ?>
                <tr>
                    <td><?php echo $v['id'] ?> </td>
                    <td><?php echo $v['nombre'] ?> </td>
                    <td>
                        <a class="btn" href="propietario-editar.php">EDITAR</a>
                        <a class="btn" href="propietario-eliminar.php" onclick="return confirm('ESTA SEGURO'); false">ELIMINAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="3">NO HAY REGISTROS</td>
            </tr>
        <?php endif ?>
    </tbody>
</table>

<br>
    <a href="propiedad.php" class="btn">2. Agregar Propiedad</a>
<?php
require_once("./layouts/footer.php");
