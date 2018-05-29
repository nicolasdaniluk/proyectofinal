<?php

session_start();

if (!estaLogueado) {
  header('location:login.php');
  exit;
}
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles.css">
    <!--fontawesome -->
    <script type="text/javascript" src="fontawesome/js/fontawesome-all.js"></script>
      <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> -->
  <title>Proyecto X</title>
  </head>
  <body>
          <?php include_once('navbar.php')  ?>


     <div class="principal">
      <section>
        <h2>Hola <?=getDato($_SESSION['id'],"name")?> ¡Bienvenid@ de vuelta!</h2>
        <article >
            <h3>Tus ultimas acciones fueron:</h3>
            <ul>
              <li>Accion 1</li>
              <li>Accion 2</li>
              <li>Accion 3</li>
              <li>Accion 4</li>
            </ul>
        </article>
        <br><br>
        <article >
            <h3>Tus ultimas compras fueron:</h3>
            <ul>
              <li>Compra 1</li>
              <li>Compra 2</li>
              <li>Compra 3</li>
              <li>Compra 4</li>
            </ul>
        </article>
        <br><br>
        <article >
            <h3>Tus ultimas ventas fueron:</h3>
            <ul>
              <li>Venta 1</li>
              <li>Venta 2</li>
              <li>Venta 3</li>
              <li>Venta 4</li>
            </ul>
        </article>
     </section>
     </div>
     <footer>
      <ul>
        <li><a href="faq.php">FAQ |</a></li>
        <li><a href="singin.php">Crear cuenta |</a></li>
        <li><a href="login.php">Iniciar sesión</a></li>
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
