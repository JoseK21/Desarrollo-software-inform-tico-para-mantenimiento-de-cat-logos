<?php
require_once("./layouts/header.php");

require_once("../controlador/propietarios.php");

?>
<h1>Catálogo de Propietarios - Nuevo</h1>

<form method="post">
    <input class="mv-5" type="text" placeholder="INGRESE NOMBRE:" name="name" require> <br>
    <input class="mv-5" type="number" placeholder="INGRESE CÉDULA:" name="id" maxlength="9" require> <br>
    <input class="mv-5" type="phone" placeholder="INGRESE TELÉFONO:" name="phone" require> <br>
    <input class="mv-5" type="text" placeholder="INGRESE GÉNERO:" name="gender" require> <br>
    <div class="flex-row">
        <input type="submit" class="btn" value="GUARDAR" name="NuevoPropietario"> <br>
        <a href="propietario.php" class="btn btn-gray">Atras</a>
    </div>
</form>

<?php
require_once("./layouts/footer.php");
