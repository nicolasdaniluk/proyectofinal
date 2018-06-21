<?php
namespace('objetos/usuario')

class Usuario{
  private $id;
  private $name;
  private $email;
  private $pass;
  private $avatar;

  public function __construct ($name, $email, $pass, $avatar){
    $this->name = $name;
    $this->email= strtolower($email);
    $this->pass= password_hash($pass, PASSWORD_DEFAULT);
    $this->avatar= $avatar;

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
  public function getName ($name){
    return $this->name;
  }

  public function getEmail ($email){
    return $this->email;
  }
  public function getPass ($pass){
    return $this->pass;
  }
  public function getAvatar ($avatar){
    return $this->avatar;
  }
}

?>
