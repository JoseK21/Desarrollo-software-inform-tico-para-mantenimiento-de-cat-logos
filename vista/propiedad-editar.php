<?php
require_once("./layouts/header.php");

require_once("../controlador/propiedades.php");

?>

<h1>Catálogo de Propiedade - Editar : <?php echo $_REQUEST['ownerId'] ?></h1>

<form method="post">
    <?php
    if (!empty($dato)) :
        foreach ($dato as $key => $value) :
    ?>
            <label>Provincia:</label> <br>
            <input class="mv-5" type="text" value="<?php echo $value['province'] ?>" placeholder="Ingrese Provincia:" name="province"> <br>
            <label>Canton:</label> <br>
            <input class="mv-5" type="text" value="<?php echo $value['canton'] ?>" placeholder="Ingrese Canton:" name="canton"> <br>
            <label>Distrito:</label> <br>
            <input class="mv-5" type="text" value="<?php echo $value['district'] ?>" placeholder="Ingrese Distrito:" name="district"> <br>
            <label>Valor ($):</label> <br>
            <input class="mv-5" type="number" value="<?php echo $value['price'] ?>" placeholder="Ingrese Valor ($):" name="price"> <br>
            <label>Area (m2):</label> <br>
            <input class="mv-5" type="text" value="<?php echo $value['area'] ?>" placeholder="Ingrese Area (m2):" name="area"> <br>
            <label>Fecha de actualización:</label> <br>
            <input class="mv-5" type="date" value="<?php
                                                    $d = strtotime($value['lastDateUpdated']);
                                                    echo date("Y-m-d", $d); ?>" placeholder="Ingrese Fecha:" name="lastDateUpdated"> <br>

            <input type="hidden" value="<?php echo $_REQUEST['ownerId'] ?>" name="ownerId">
            <input type="hidden" value="<?php echo $_REQUEST['id'] ?>" name="id">


            <label>Descripción:</label> <br>
            <textarea name="description" rows="4" cols="50"><?php echo $value['description'] ?></textarea> <br>

            <div class="flex-row">
                <input type="submit" class="btn" name="ActualizarPropiedad" value="ACTUALIZAR"> <br>
                <input type="hidden" name="m" value="actualizar">
                <a href=<?php echo 'propiedad.php?ownerId=' . $_REQUEST['ownerId'] ?> class="btn btn-gray">Atras</a>
            </div>
        <?php
        endforeach;   ?>
    <?php else : ?>
        <tr>
            <td colspan="3" class="empty">Error</td>
        </tr>
    <?php endif ?>
</form>

<?php
require_once("./layouts/footer.php");
