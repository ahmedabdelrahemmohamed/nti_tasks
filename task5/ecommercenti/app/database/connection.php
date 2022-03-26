<?php
          namespace app\database;
          use mysqli;
          class connection {
              private $hostname = 'localhost';
              private $username = 'root';
              private $password = '';
              private $database = 'task4_int';
             protected $con;
        public function  __construct() {
            $this->con = new mysqli($this->hostname,$this->username,$this->password, $this->database);    
        
     if($this->con->connect_error){
            die('connection faild :'.$this->con->connect_error);
         }
         echo "connection successfully";
    }
}
new connection;
?>