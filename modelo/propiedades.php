<?php
class Propiedades
{
    private $db;
    private $datos;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=mantenimiento', "root", "");
    }
    public function insertar($tabla, $data)
    {
        $consulta = "insert into " . $tabla . " values(" . $data . ")";

        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function mostrar($tabla, $condicion)
    {
        if (!empty($condicion)) {
            $consul = "select * from " . $tabla . " where " . $condicion . ";";
        } else {
            $consul = "select * from " . $tabla . ";";
        }

        $resu = $this->db->query($consul);
        while ($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->datos[] = $filas;
        }
        return $this->datos;
    }

    public function actualizar($tabla, $data, $condicion)
    {
        $consulta = "update " . $tabla . " set " . $data . " where " . $condicion;
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    public function eliminar($tabla, $condicion)
    {
        $eli = "delete from " . $tabla . " where " . $condicion;
        $res = $this->db->query($eli);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
}
