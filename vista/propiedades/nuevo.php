<?php
require_once("vista/layouts/header.php");
?>
<h1 class="text-center">NUEVO</h1>
<form action="" method="get">
    <input class="mv-5" type="text" placeholder="INGRESE NOMBRE:" name="nombre"> <br>
    <input class="mv-5" type="text" placeholder="INGRESE CÉDULA:" name="precio"> <br>
    <input class="mv-5" type="text" placeholder="INGRESE TELÉFONO:" name="phone"> <br>
    <input class="mv-5" type="text" placeholder="INGRESE GÉNERO:" name="gender"> <br>
    <input type="submit" class="btn" name="btn" value="GUARDAR"> <br>
    <input type="hidden" name="m" value="guardar">
</form>

<?php
require_once("vista/layouts/footer.php");