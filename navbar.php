<?php
require_once('funciones.php');
 ?>
<nav>
  <div class="logo">
    <a href="index.php">
      <img src="kiosco.png" alt="">
      <h1>Tienda</h1>
    </a>
  </div>
  <div class="menu">

    <label for="menu-icon" class="menu-icon">
      <i class="fas fa-bars"></i>
    </label>
    <input type="checkbox" id="menu-icon">

    <ul>
      <li><a href="faq.php">FAQ</a></li>
        <li>|</li>
        <?php if (isset($_SESSION['id'])): ?>
          <li><img class="ppnavbar" src="<?=getDato($_SESSION['id'],"foto")?>" alt="UserPic" style="width:30px;">   <?=getDato($_SESSION['id'],"name")?></li>
            <li>|</li>
          <li><a href="logout.php">Cerrar sesion</a></li>
        <?php else: ?>
         <li><a href="singin.php">Crear cuenta</a></li>
           <li>|</li>
         <li><a href="login.php">Iniciar sesión</a></li>
       <?php endif; ?>

    </ul>
  </div>
</nav>
