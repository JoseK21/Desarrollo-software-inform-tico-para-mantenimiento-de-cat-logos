<?php
require_once("./layouts/header.php");

require_once("../controlador/login.php");

?>
<div class="center">
    <h1>Login</h1>
    <form method="post">
        <label for="id">Cédula:</label><br>
        <input type="number" id="id" name="id" value="303330333" maxlength="9"><br>
        <label for="pass">Contraseña:</label><br>
        <input type="password" id="pass" name="pass" value="2022"><br><br>
        <input type="submit" value="Ingresar" name="Ingresar">
    </form>

    
    <?php if (isset($_SESSION) AND $_SESSION['userValid'] === false) : ?>
        <h4 class="red">Cédula y/o contraseña invalida.</h3>
    <?php endif; ?>
</div>

<?php

$_SESSION['userValid'] = false;
$_SESSION['username'] = '';
$_SESSION['id'] = '';

?>

<?php
require_once("./layouts/footer.php");

