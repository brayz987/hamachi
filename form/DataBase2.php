<?php 

class Database2 extends PDO {
    private $typeBase = 'mysql';
    private $host = '25.62.120.116';
    private $nombreBase = 'form2';
    private $usuario = 'root';
    private $contraseña = '';
    
    
    public function __construct(){
        try {
            parent::__construct("{$this->typeBase}:dbname={$this->nombreBase};host={$this->host};charset=utf8", $this->usuario, $this->contraseña );
        } catch (PDOException $e) {
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: '.$e->getMessage();
            exit;
        }
    }
}
?>