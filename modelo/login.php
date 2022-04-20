<?php
class Login
{
    private $db;
    public $isValid = false;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=mvc', "root", "");
    }

    public function login($tabla, $condicion)
    {
        $consul = "select * from " . $tabla . " where " . $condicion . ";";
        $resu = $this->db->query($consul);

        $row = $resu->FETCHALL(PDO::FETCH_ASSOC);

        if(is_array($row) && !empty($row)) {
            $_SESSION['userValid'] = true;
            $_SESSION['username'] = $row[0]['username'];
            $_SESSION['id'] = $row[0]['id'];
            return true;
        } else {
            $_SESSION['userValid'] = false;
            $_SESSION['username'] = '';
            $_SESSION['id'] = '';
            return false;
        }
    }
}
