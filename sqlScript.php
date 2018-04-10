<?php

class sqler {
    public $host = '';
    public $user = '';
    public $pass = '';
    public $dbname = '';
    public $connect = false;
    public $result = false;
    public $select = false;
    public $err = '';
    public $exec = null;
    public $ready = false;
    public $access = '';

    public function connect(){
        switch($this->access){
            case 'local':
                $this->host = 'localhost';
                $this->user = 'root';
                $this->pass = 'root';
                break;
            case 'global':
                break;
        }
    }

    function initialize($dbname, $a){
        $this->access = $a;
        $this->connect();

        $this->connect = mysql_connect($this->host, $this->user, $this->pass);
        if(!$this->connect){
            $this->err = 'mysql_connect failed';
            $this->ready =false;
        }else{
            $this->err = 'mysql_connect saccess';
            $this->ready = true;
        }
        $this->select = mysql_select_db($dbname);
        if(!$this->select){
            $this->err = 'mysql_select_db failed';
            $this->ready = false;
        }else{
            $this->err = 'mysql_select_db saccess';
            $this->ready = true;
        }
        if(!$this->ready){
            return false;
        }else{
            return true;
        }
    }
    function sendquery($query){
        $this->result = mysql_query($query);
        if(!$this->result){
            $this->err = 'mysql_query failed';
            $this->ready = false;
        }else{
            $this->err = 'mysql_query saccess';
            $this->ready = true;
        }
        $arr = [];
        while($row = mysql_fetch_assoc($this->result)){
            foreach($row as $value){
                array_push($arr, $value);
            }
        }
        if($arr !== null){
            $this->err = 'execute saccess';
            $this->exec = $arr;
            $this->ready = true;
        }else{
            $this->err = 'execute failed';
            $this->ready = false;
        }
        if(!$this->ready){
            return false;
        }else{
            return true;
        }
    }
    function quit(){
        mysql_close($this->connect);
    }
}