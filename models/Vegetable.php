<?php 
require_once ("Product.php");
class Vegetable extends Product{
	private $productorName;
	private $expiresAt;
	public function __construct($id,$name,$price,$productorName,$expiresAt){
		$this->productorName = $productorName;
		$this->expiresAt = $expiresAt;
		parent:: __construct($id,$name,$price);
	}
	public function getProductorName(){
		return $this->productorName;
	}
	public function setProductorName(){
		$this->productorName = $productorName;
	}
	public function getExpiresAt(){
		return $this->expiresAt;
	}
	public function setExpiresAt(){
		$this->expiresAt = $expiresAt;
	}

	public function isFresh(){
	
	}
}
