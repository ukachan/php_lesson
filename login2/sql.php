<?php
// php5.6に対応する様に

class sqler{
    public $host = '';
    public $user = '';
    public $pass = '';
    public $dbname = '';

    public function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = 'root';
    }

    public function initialize($dbname){
        $this->dbname = $dbname;
        $mysqli = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if($mysqli->connect_error){
            die($mysqli->connect_error);
        }else{
            $mysqli->set_charset('utf8');
        }
    }

}