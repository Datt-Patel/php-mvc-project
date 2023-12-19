<?php 
    require_once('Config/config.php');

    class Connect{
        public $conn;
        public function dbconnect(){
         $this->conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            if($this->conn->connect_error){
                echo "connection error".$this->conn->connect_error;
            }
        echo "Connection successfull";
        return $this->conn;
        }
    }
?>