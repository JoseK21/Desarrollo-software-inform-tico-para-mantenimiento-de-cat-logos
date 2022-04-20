<?php
require_once("../modelo/login.php");
class loginController
{
    public $model;
    public function __construct()
    {
        $this->model = new Login();
    }

    //validar
    static function validar()
    {
        if (isset($_POST["Ingresar"]) AND $_REQUEST AND $_REQUEST['id'] AND $_REQUEST['pass']) {

            $id = $_REQUEST['id'];
            $pass = $_REQUEST['pass'];

            $condition = "id='" . $id . "' AND password='" . $pass . "'";

            $login = new Login();
            $isValid = $login->login("login", $condition);

            if ($_SESSION['userValid']) {
                header("location:" . "propietario.php");
            }
        }
    }
}

if (isset($_POST)) {
    loginController::validar();
}
