<?php
require_once("../modelo/propietarios.php");

class propietariosController
{
    public function __construct()
    {
    }

    // Recuperar los propietarios
    static function leer()
    {
        $producto   = new Propietario();
        $dato       =   $producto->mostrar("owner", "")[0];

        return $dato;
    }

     // Crear un nuevo propietario
    static function guardar()
    {
        $name = $_REQUEST['name'];
        $id = $_REQUEST['id'];
        $phone = $_REQUEST['phone'];
        $gender = $_REQUEST['gender'];

        $condition = "'" . $id . "','" . $name . "','" . $phone . "','" . $gender . "'";
        $propietario = new Propietario();
        $dato = $propietario->insertar("owner", $condition);

        if ($dato) {
            $message = 'Propietario agregado';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        } else {
            $message = 'Error: Verificar que las casillas tenga el formato correcto!';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        }
    }

    // Obtiene la informacion del propietario por su ID 
    static function editar()
    {
        $id = $_REQUEST['id'];
        $propietario = new Propietario();

        if (empty($propietario->mostrar("owner", "id=" . $id))) {
            header("location:" . "propietario.php");
        }
        return $propietario->mostrar("owner", "id=" . $id)[0];
    }

    // Actualiza el propietario seleccionado
    static function actualizar()
    {
        $name = $_REQUEST['name'];
        $id = $_REQUEST['id'];
        $phone = $_REQUEST['phone'];
        $gender = $_REQUEST['gender'];

        $data = "id='" . $id . "',name='" . $name . "',phone='" . $phone . "',gender='" . $gender . "'";

        $propietario = new Propietario();
        $resultUpdate = $propietario->actualizar("owner", $data, "id='" . $id . "'");

        if ($resultUpdate) {
            $message = 'Propietario actualizado';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        } else {
            $message = 'Error: Verificar que las casillas tenga el formato correcto!';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        }
    }

    // Elimina el propietario seleccionado
    static function eliminar()
    {
        $id = $_REQUEST['id'];
        $propietario = new Propietario();
        $dato = $propietario->eliminar("owner", "id=" . $id);

        if ($dato) {
            $message = 'Propietario eliminado';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        } else {
            $message = 'Error: Verificar que las casillas tenga el formato correcto!';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        }
    }
}


$dato = propietariosController::leer();

// Consulta por cambios en la url por el metodo post de los Formularios
if (isset($_POST)) {
    if (isset($_POST["NuevoPropietario"])) {
        if ($_REQUEST and $_REQUEST['name'] and $_REQUEST['id'] and $_REQUEST['phone'] and $_REQUEST['gender']) {
            propietariosController::guardar();
        } else {
            $message = 'Error, complete todas las casillas y vuelva a internarlo!';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        }
    }

    if (isset($_POST["ActualizarPropietario"])) {
        if ($_REQUEST and $_REQUEST['name'] and $_REQUEST['id'] and $_REQUEST['phone'] and $_REQUEST['gender']) {
            propietariosController::actualizar();
        } else {
            $message = 'Error, complete todas las casillas y vuelva a internarlo!';
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    if (isset($_POST["EditarPropietario"])) {
        $dato = propietariosController::editar();
    }

    if (isset($_POST["EliminarPropietario"])) {
        $dato = propietariosController::eliminar();
    }
}
