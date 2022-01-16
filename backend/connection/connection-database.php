<?php
class db {
    private $dbhost="localhost";
    private $dbuser="root";
    private $dbpass="";
    private $dbname="tasks";
    public function conectar(){
        return $conn = mysqli_connect($this->dbhost,$this->dbuser, $this->dbpass,$this->dbname);
    }
}
    
?>