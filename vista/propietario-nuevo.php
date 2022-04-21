<?php
require_once("./layouts/header.php");

require_once("../controlador/propietarios.php");

?>
<h1>Catálogo de Propietarios - Nuevo</h1>

<form method="post">
    <label for="">Nomber:</label><br>
    <input class="mv-5" type="text" placeholder="Ingrese Nombre:" name="name" require> <br>
    <label for="">Cédula:</label><br>
    <input class="mv-5" type="number" placeholder="Ingrese Cédula:" name="id" maxlength="9" require> <br>
    <label for="">Teléfono:</label><br>
    <input class="mv-5" type="phone" placeholder="Ingrese Teléfono:" name="phone" require> <br>
    <label for="">Género:</label><br>
    <input class="mv-5" type="text" placeholder="Ingrese Género:" name="gender" require> <br>
    <div class="flex-row">
        <input type="submit" class="btn" value="GUARDAR" name="NuevoPropietario"> <br>
        <a href="propietario.php" class="btn btn-gray">Atras</a>
    </div>
</form>
