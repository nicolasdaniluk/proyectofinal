<?php
class autenticador {
  static public function estaLogueado() {
      return isset($_SESSION['id']);
  }

  static public function loguear($usuario) {
    $_SESSION['id'] = $usuario['id'];
    header('location: bienvenida.php');
    exit;
  }

  static public function logout(){
    setcookie('id', '', time() -10);
  	session_destroy();
  	header('location: index.php');
  	exit;
  }
}
