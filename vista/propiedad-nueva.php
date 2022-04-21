<?php
require_once("./layouts/header.php");

require_once("../controlador/propiedades.php");

?>

<h1>Catálogo de Propiedades - Nueva : <?php echo $_REQUEST['ownerId'] ?></h1>

<form method="post">
    <label>Provincia:</label> <br>
    <input class="mv-5" type="text" placeholder="Ingrese Provincia:" name="province"> <br>
    <label>Canton:</label> <br>
    <input class="mv-5" type="text" placeholder="Ingrese Canton:" name="canton"> <br>
    <label>Distrito:</label> <br>
    <input class="mv-5" type="text" placeholder="Ingrese Distrito:" name="district"> <br>
    <label>Valor ($):</label> <br>
    <input class="mv-5" type="number" placeholder="Ingrese Valor ($):" name="price"> <br>
    <label>Area (m2):</label> <br>
    <input class="mv-5" type="text" placeholder="Ingrese Area (m2):" name="area"> <br>
    <label>Fecha de actualización:</label> <br>
    <input class="mv-5" type="date" placeholder="Ingrese Fecha:" name="lastDateUpdated"> <br>

    <input type="hidden" value="<?php echo $_REQUEST['ownerId'] ?>" name="ownerId">

    <label>Descripción:</label> <br>
    <textarea name="description" rows="4" cols="50"> </textarea> <br>

    <div class="flex-row">
        <input type="submit" class="btn" name="NuevoPropiedad" value="GUARDAR"> <br>
        <a href=<?php echo 'propiedad.php?ownerId=' . $_REQUEST['ownerId'] ?> class="btn btn-gray">Atras</a>
    </div>
</form>

