<?php
require_once("../modelo/login.php");
class loginController
{
    public function __construct() { }

    // Validos los credenciales del usuario con la Base de Datos
    static function validar()
    {
        $id = $_REQUEST['id'];
        $pass = $_REQUEST['pass'];

        $condition = "id='" . $id . "' AND password='" . $pass . "'";

        $login = new Login();
        $login->login("login", $condition);

        // Uso de variables de session posterior al login
        if ($_SESSION['userValid']) {
            header("location:" . "propietario.php");
        }
    }
}

// Consulta por cambios en la url por el metodo post de Formulario
if (isset($_POST)) {
    if (isset($_POST["Ingresar"]) and $_REQUEST and $_REQUEST['id'] and $_REQUEST['pass']) {
        loginController::validar();
    }
}
