<?php


class Usuario{
  private $id;
  private $name;
  private $email;
  private $pass;
  private $avatar;

  public function __construct ($name, $email, $pass, $avatar){
    $this->name = $name;
    $this->email= strtolower($email);
    $this->pass= $pass;
    $this->avatar= $avatar;
  }

  public function setId ($id){
    $this->id= $id;
  }

  public function setName ($name){
    $this->name= $name;
  }

  public function setEmail ($email){
    $this->email= $email;
  }
  public function setPass ($pass){
    $this->pass= $pass;
  }
  public function setAvatar ($avatar){
    $this->avatar= $avatar;
  }


  public function getId (){
    return $this->id;
  }
  public function getName (){
    return $this->name;
  }

  public function getEmail (){
    return $this->email;
  }
  public function getPass (){
    return $this->pass;
  }
  public function getAvatar (){
    return $this->avatar;
  }
}

?>
