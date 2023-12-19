<?php 
    require_once('connect.php');

    class UserController{
        public $cont;
        public function __construct()
        {   
             $this->cont = new Connect;
             echo $this->cont->dbconnect();           
        }

        public function test()
        {
           
        }
    }
?>