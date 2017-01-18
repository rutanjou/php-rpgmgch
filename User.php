<?php

class User {
  private $_id;
  private $_email;
  private $_createdAt;

  // Constructor
  public function __construct($id, $email, $createdAt){
    $this->setId($id);
    $this->setEmail($email);
    $this->setCreatedAt($createdAt);
  }

  // Getters
  public function getId(){
    return $this->_id;
  }

  public function getEmail(){
    return $this->_email;
  }

  public function getCreatedAt(){
    return $this->_createdAt;
  }

  // Setters
  public function setId($id){
    $this->_id = $id;
  }

  public function setEmail($email){
    $this->_email = $email;
  }

  public function setCreatedAt($createdAt){
    $this->_createdAt = $createdAt;
  }
}
// Je teste
// $date = date('d/m/Y', time());
// var_dump($date);
// $user = new User("monId", "maxime@simplon.co", $date);
// var_dump($user);
