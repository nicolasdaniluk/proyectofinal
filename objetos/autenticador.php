<?php
class autenticador {
  static public function estaLogueado() {
      return isset($_SESSION['id']);
  }

  public static function loguear($usuario) {
    $_SESSION['id'] = $usuario->getId();
    header('location:bienvenida.php');
    exit;
  }

  static public function logout(){
    setcookie('id', '', time() -10);
  	session_destroy();
  	header('location: index.php');
  	exit;
  }
}
