<?php
require_once("./layouts/header.php");
?>
<h1>Propietarios</h1>

<h1 class="text-center">EDITAR</h1>
<form action="" method="get">
    <?php
    foreach ($dato as $key => $value) :
        foreach ($value as $v) :
    ?>
            <input type="text" value="<?php echo $v['nombre'] ?>" name="nombre"> <br>
            <input type="text" value="<?php echo $v['precio'] ?>" name="precio"> <br>
            <input type="hidden" value="<?php echo $v['id'] ?>" name="id"> <br>
            <div class="flex-row">
                <input type="submit" class="btn" name="btn" value="ACTUALIZAR"> <br>
                <input type="hidden" name="m" value="actualizar">
                <a href="propietario.php" class="btn btn-gray">Atras</a>
            </div>
    <?php
        endforeach;
    endforeach;
    ?>
</form>

<?php
require_once("./layouts/footer.php");
