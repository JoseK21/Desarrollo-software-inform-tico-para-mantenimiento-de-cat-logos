<?php
require_once("../modelo/propiedades.php");
class propiedadesController
{
    private $model;
    public function __construct()
    {
        $this->model = new Modelo();
    }

    //guardar
    static function guardar()
    {
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $data = "'" . $nombre . "'," . $precio;
        $producto = new Modelo();
        $dato = $producto->insertar("productos", $data);
        header("location:" . "http://localhost/mantenimiento/");
    }

    //editar
    static function editar()
    {
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->mostrar("productos", "id=" . $id);
        require_once("vista/propiedades/editar.php");
    }
    //actualizar
    static function actualizar()
    {
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $data = "nombre='" . $nombre . "',precio=" . $precio;
        $producto = new Modelo();
        $dato = $producto->actualizar("productos", $data, "id=" . $id);
        header("location:" . "http://localhost/mantenimiento/");
    }

    //eliminar
    static function eliminar()
    {
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->eliminar("productos", "id=" . $id);
        header("location:" . "http://localhost/mantenimiento/");
    }
}
