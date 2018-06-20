<?php

    session_start();
    // Chequeo si está la cookie seteada y se la paso a session para auto-logueo
    if (isset($_COOKIE['id'])) {
        $_SESSION['id'] = $_COOKIE['id'];
}

    require_once(objetos/usuario.php);
    require_once(objetos/validador.php);
    require_once(objetos/repositorio.php);
    require_once(objetos/autenticador.php);
