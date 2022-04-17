<?php
require_once("config.php");
require_once("controlador/index.php");

if (isset($_GET['m'])) :
    if (method_exists("modeloController", $_GET['m'])) :
        $message = $_GET['m'];
        echo "<script type='text/javascript'>alert('$message');</script>";
        modeloController::{$_GET['m']}();
    endif;
else :
    $message = 'index';
    echo "<script type='text/javascript'>alert('$message');</script>";
    modeloController::index();
endif;
