<?php

class calc {
	public $tax = 0;
	public $result = 0;
	
	function __construct(){
		$this->tax = 1.8;
	}

	function cResult($price){
		if($price > 0){
			$this->result = $price * $this->tax;
			return '金額は'.$this->result.'です';
		}else{
			return '商品が決まっていません';
		}
	}
}
