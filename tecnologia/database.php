<?php
class Database {
    private $_connection;
    private static $_instance; //The single instance
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_database = "tecnologia";

    public static function getInstance() {
        if(!self::$_instance) { // si no hay instancia la creo
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    // Constructor
    private function __construct() {
        $this->_connection = new mysqli($this->_host, $this->_username,
            $this->_password, $this->_database);

        //  Manejo de Errores
        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
                 E_USER_ERROR);
        }
    }
    // este metodo previene la conacion de la instancia
    private function __clone() { }
    // get de la conexion
    public function getConnection() {
        return $this->_connection;
    }
}
?>
