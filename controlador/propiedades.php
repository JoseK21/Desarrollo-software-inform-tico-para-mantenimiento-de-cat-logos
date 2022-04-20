<?php
require_once("../modelo/propiedades.php");

class propiedadesController
{
    private $model;
    public function __construct()
    {
        $this->model = new Propiedades();
    }


    static function leer()
    {
        $ownerId = $_REQUEST['ownerId'];

        $newCondition = '';

        if (!empty($_REQUEST['id'])) {
            $newCondition = " AND id=" . $_REQUEST['id'];
        }

        $producto   = new Propiedades();

        if (empty($producto->mostrar("property",  "ownerId=" . $ownerId . $newCondition))) {
            $dato       =  [];
        } else {
            $dato       =   $producto->mostrar("property",  "ownerId=" . $ownerId . $newCondition)[0];
        }

        return $dato;
    }

    //guardar
    static function guardar()
    {
        $province = $_REQUEST['province'];
        $canton = $_REQUEST['canton'];
        $district = $_REQUEST['district'];
        $price = $_REQUEST['price'];
        $area = $_REQUEST['area'];
        $lastDateUpdated = $_REQUEST['lastDateUpdated'];
        $ownerId = $_REQUEST['ownerId'];
        $description = $_REQUEST['description'];

        $condition = "null,'" . $province . "','" . $canton . "','" . $district . "'," . $price . ",'" . $area . "','" . $lastDateUpdated . "','" . $description . "','" . $ownerId . "'";
        $propiedad = new Propiedades();
        $dato = $propiedad->insertar("property", $condition);

        if ($dato) {
            $message = 'Propiedad agregado';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        } else {
            $message = 'Error: Verificar que las casillas tenga el formato correcto!';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        }
    }

    //editar
    static function editar()
    {
        $id = $_REQUEST['id'];
        $ownerId = $_REQUEST['ownerId'];

        $propiedad = new Propiedades();

        if (empty($propiedad->mostrar("property", "id=" . $id . " AND ownerId=" . $ownerId))) {
            header("location:" . "propiedad.php?ownerId=" . $_REQUEST['ownerId']);
        }
        return $propiedad->mostrar("property", "id=" . $id . " AND ownerId=" . $ownerId)[0];
    }
    //actualizar
    static function actualizar()
    {
        $province = $_REQUEST['province'];
        $canton = $_REQUEST['canton'];
        $district = $_REQUEST['district'];
        $price = $_REQUEST['price'];
        $area = $_REQUEST['area'];
        $lastDateUpdated = $_REQUEST['lastDateUpdated'];
        $description = $_REQUEST['description'];

        $id = $_REQUEST['id'];
        $data = "province='" . $province . "',canton='" . $canton . "',district='" . $district . "',price='" . $price . "',area='" . $area . "',lastDateUpdated='" . $lastDateUpdated . "',description='" . $description . "'";

        $propiedad = new Propiedades();
        $resultUpdate = $propiedad->actualizar("property", $data, "id='" . $id . "'");

        if ($resultUpdate) {
            $message = 'Propiedad actualizado';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        } else {
            $message = 'Error: Verificar que las casillas tenga el formato correcto!';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        }
    }

    //eliminar
    static function eliminar()
    {
        $id = $_REQUEST['id'];
        $propiedad = new Propiedades();
        $dato = $propiedad->eliminar("property", "id=" . $id);

        if ($dato) {
            $message = 'Propiedad eliminada';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        } else {
            $message = 'Error: Verificar que las casillas tenga el formato correcto!';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        }

        header("location:" . "propiedad.php?ownerId=" . $_REQUEST['ownerId']);
    }
}

$dato = propiedadesController::leer();

if (isset($_POST)) {
    if (isset($_POST["NuevoPropiedad"])) {
        if ($_REQUEST and $_REQUEST['province'] and $_REQUEST['canton'] and $_REQUEST['district'] and $_REQUEST['price'] and $_REQUEST['area'] and $_REQUEST['lastDateUpdated'] and $_REQUEST['ownerId'] and $_REQUEST['description']) {
            propiedadesController::guardar();
        } else {
            $message = 'Error, complete todas las casillas y vuelva a internarlo!';
            echo "<script type='text/javascript'>confirm('$message');</script>";
        }
    }

    if (isset($_POST["ActualizarPropiedad"])) {
        if ($_REQUEST and $_REQUEST['province'] and $_REQUEST['canton'] and $_REQUEST['district'] and $_REQUEST['price'] and $_REQUEST['area'] and $_REQUEST['lastDateUpdated'] and $_REQUEST['ownerId'] and $_REQUEST['description']) {
            propiedadesController::actualizar();
        } else {
            $message = 'Error 2222, complete todas las casillas y vuelva a internarlo!';
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    if (isset($_POST["EditarPropiedad"])) {
        $dato = propiedadesController::editar();
    }

    if (isset($_POST["EliminarPropiedad"])) {
        $dato = propiedadesController::eliminar();
    }
}
