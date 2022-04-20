<?php
require_once("./layouts/header.php");
?>

<h1>Propiedades</h1>

<div class="betweeen">
    <a href="propiedad-nueva.php" class="btn">Agregar Propiedad</a>
    <a href="propietario.php" class="btn btn-gray">Atras</a>
</div>

<table>
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>ACCIONES</td>        
    </tr>
    <tbody>
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <tr>
                        <td><?php echo $v['id'] ?> </td>
                        <td><?php echo $v['nombre'] ?> </td>
                        <td>
                            <a class="btn" href="propiedad-editar.php">EDITAR</a>
                            <a class="btn" href="propiedad-eliminar.php" onclick="return confirm('ESTA SEGURO'); false">ELIMINAR</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">NO HAY REGISTROS</td>
                </tr>
            <?php endif ?>
    </tbody>
</table>
<?php
require_once("./layouts/footer.php");