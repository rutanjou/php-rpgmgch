<?php 
class User{
private $id;
private $email;
private $createdAt;
public function __construct($id,$email,$date){
	$this->id = $id;
	$this->email = $email;
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
public function getCreatedAt(){
	return $this->createdAt;
}
public function setCreatedAt(){
	$this->createdat = $date;
}
}
