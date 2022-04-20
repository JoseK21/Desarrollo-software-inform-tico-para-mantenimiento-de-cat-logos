<?php
require_once("../modelo/login.php");
class loginController
{
    public $model;
    public function __construct()
    {
        $this->model = new Login();
    }

    static function validar()
    {
        $id = $_REQUEST['id'];
        $pass = $_REQUEST['pass'];

        $condition = "id='" . $id . "' AND password='" . $pass . "'";

        $login = new Login();
        $login->login("login", $condition);

        if ($_SESSION['userValid']) {
            header("location:" . "propietario.php");
        }
    }
}

if (isset($_POST)) {
    if (isset($_POST["Ingresar"]) and $_REQUEST and $_REQUEST['id'] and $_REQUEST['pass']) {
        loginController::validar();
    }
}
