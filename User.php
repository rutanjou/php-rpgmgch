<?php 
class User{
private $id = "";
private $email = "";
private $createdAt = "";
public function __construct($id,$mail,$date){
	$this->id = $id;
	$this->email = $mail;
	$this->createdAt = $date;
}
public function getId(){
	return $this->id;
}
public function setId(){
	$this->id = $id;
}
public function getEmail(){
	return $this->email;
}
public function setEmail(){
	$this->email = $mail;
}
public function getCreatedat(){
	return $this->createdAt;
}
public function setCreatedat(){
	$this->createdAt = $date;
}
}
