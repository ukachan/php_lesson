<?php

class sqler{
	public $host = '';
	public $username = '';
	public $password = '';
	public $ready = false;
	public $mysqli;

	function __construct(){
		$this->host = 'localhost';
		$this->username = 'root';
		$this->password = 'root';
	}
	function initialize($dbname){
		$this->mysqli = new mysqli($this->host, $this->username, $this->password, $dbname);
		if($this->mysqli->connect_error){
			error_log($this->mysqli->connect_error);
			echo $this->mysqli->connect_error;
			exit;
		}
	}
	function exe($query){
		if($this->mysqli->query($query)){
			echo "クエリ成功";
		}else{
			echo $this->mysqli->error.'<br>';
			echo $query.'<br>';
			echo "クエリ失敗";
		}
	}
}
