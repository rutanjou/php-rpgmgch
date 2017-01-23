<?php 
require_once "Product.php";
class Cloth extends Product{
	private $brand;
	public function __construct($id,$name,$price,$brand){
		$this->brand = $brand;
		parent:: __construct($id,$name,$price);
	}
	public function getBrand(){
		return $this->brand;
	}
	public function setBrand(){
		$this->brand = $brand;
	}
	public function try(){
	}
 }
