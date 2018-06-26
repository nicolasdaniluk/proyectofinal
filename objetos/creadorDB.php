<?php

/**
 *
 */
class creadorDB
{
  private $dsn;
  private $username;
  private $password;
  private $db;

  function __construct()
  {
    $this->dsn = 'mysql:host=localhost;charset=utf8mb4;port=3306';
    $this->username = 'root';
    $this->password = 'root';
    $options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
     try {
       $db = new PDO ($this->dsn, $this->username, $this->password, $options);
       $this->db = $db;
     }
     catch(PDOException $e){
       echo "Error de conexión".$e->getMessage();
       exit;
     }


    $sql =
    "
    CREATE SCHEMA `woodsales`;
    CREATE TABLE `woodsales`.`tipo_usuario` (
    `idtipo_usuario` INT NOT NULL AUTO_INCREMENT,
    `descripcion` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id_tipo_usuario`),
    UNIQUE INDEX `idtipo_usuario_UNIQUE` (`idtipo_usuario` ASC),
    UNIQUE INDEX `descripcion_UNIQUE` (`descripcion` ASC));

    CREATE TABLE `woodsales`.`usuarios` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(45) NOT NULL,
    `mail` VARCHAR(45) NOT NULL,
    `clave` VARCHAR(100) NOT NULL,
    `avatar` VARCHAR(50) NULL,
    `tipo_usuario` INT NULL,
    PRIMARY KEY (`idusuario`),
    UNIQUE INDEX `idusuario_UNIQUE` (`idusuario` ASC),
    UNIQUE INDEX `mail_UNIQUE` (`mail` ASC),
    INDEX `idtipo_usuario_idx` (`tipousuario` ASC),
    CONSTRAINT `idtipo_usuario`
    FOREIGN KEY (`tipousuario`)
    REFERENCES `woodsales`.`tipo_usuario` (`idtipo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);";

    $consulta = $this->db->query($sql);


  //VER LA FORMA PARA QUE ANTE UN ERROR, LO INFORME CON UN RETURN BOOLEANO

  }
}
