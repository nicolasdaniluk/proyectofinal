<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <title>Proyecto X</title>
  </head>
  <body>

    <?php 
      require_once('navbar.php'); 
      require_once('funciones.php');
    ?>

    <div class="carrousel">
      CARROUSEL
      <img src="" alt="">
    </div>
    <div class="main">
      <section>
        <h2>¿Qué nos caracteriza?</h2>
        <article class="atributo">
          <div class="atr_img">
            <img src="circle.png" alt="">
          </div>
          <div class="atr_p">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </article>
        <article class="atributo">
          <div class="atr_img">
            <img src="circle.png" alt="">
          </div>
          <div class="atr_p">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </article>
        <article class="atributo">
          <div class="atr_img">
            <img src="circle.png" alt="">
          </div>
          <div class="atr_p">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </article>
      </section>
      <section class="carrousel2">
        <div class="producto">
          <i class="fas fa-camera"></i>
        </div>
        <div class="producto">
          <i class="fas fa-camera"></i>
        </div>
        <div class="producto">
          <i class="fas fa-camera"></i>
        </div>
        <div class="producto">
          <i class="fas fa-camera"></i>
        </div>
        <div class="izq">
          <i class="fas fa-angle-left"></i>
        </div>
        <div class="der">
          <i class="fas fa-angle-right"></i>
        </div>
      </section>
    </div>
    <footer>
      <ul>
        <li><a href="#">FAQ |</a></li>
        <li><a href="#">Crear cuenta |</a></li>
        <li><a href="#">Iniciar sesión</a></li>
      </ul>
      <ul class="redesfoot">
        <li><i class="fab fa-facebook-square"></i></li>
        <li><i class="fab fa-twitter-square"></i></li>
        <li><i class="fab fa-instagram"></i></li>
        <li><i class="fab fa-tumblr-square"></i></li>
      </ul>
    </footer>

  </body>
</html>
