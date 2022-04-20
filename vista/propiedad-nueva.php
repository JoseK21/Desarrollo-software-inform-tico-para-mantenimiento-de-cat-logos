<?php
require_once("./layouts/header.php");
?>

<h1>Propiedades</h1>

<h1 class="text-center">NUEVO</h1>
<form action="" method="get">
    <input class="mv-5" type="text" placeholder="INGRESE NOMBRE:" name="nombre"> <br>
    <input class="mv-5" type="text" placeholder="INGRESE CÉDULA:" name="precio"> <br>
    <input class="mv-5" type="text" placeholder="INGRESE TELÉFONO:" name="phone"> <br>
    <input class="mv-5" type="text" placeholder="INGRESE GÉNERO:" name="gender"> <br>
    <div class="flex-row">
        <input type="submit" class="btn" name="btn" value="GUARDAR"> <br>
        <a href="propiedad.php" class="btn btn-gray">Atras</a>
    </div>
</form>

<?php
require_once("./layouts/footer.php");