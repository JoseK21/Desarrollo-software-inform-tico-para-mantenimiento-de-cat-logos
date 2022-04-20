<?php
require_once("./layouts/header.php");

require_once("../controlador/propietarios.php");

$dato = propietariosController::editar();

?>
<h1>Catálogo de Propietarios - Editar</h1>

<form method="post">
    <?php
    if (!empty($dato)) :
        foreach ($dato as $key => $value) :
    ?>
            <label for="">Nomber:</label><br>
            <input type="text" value="<?php echo $value['name'] ?>" name="name"> <br>
            <label for="">Teléfono:</label><br>
            <input type="phone" value="<?php echo $value['phone'] ?>" name="phone"> <br>
            <label for="">Género:</label><br>
            <input type="text" value="<?php echo $value['gender'] ?>" name="gender"> <br>
            <input type="hidden" value="<?php echo $value['id'] ?>" name="id"> <br>
            <div class="flex-row">
                <input type="submit" class="btn" value="ACTUALIZAR" name="ActualizarPropietario"> <br>
                <a href="propietario.php" class="btn btn-gray">Atras</a>
            </div>
        <?php
        endforeach;
        ?>
    <?php else : ?>
        <tr>
            <td colspan="3" class="empty">Error</td>
        </tr>
    <?php endif ?>
</form>

<?php
require_once("./layouts/footer.php");
