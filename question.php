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

     <div class="principal">
      <section>
        <h2>Preguntas Frecuentes</h2>
        <article class="pregunta">
          <div class="q_img">
            <i class="fas fa-lock"></i>
          </div>
          <h3>Seguridad</h3>
          <div class="texto">
            <p>Te garantizamos seguridad de principio a fin. Queremos que te sientas seguro comprando, por eso creamos herramientas de seguridad para cuidarte en cada paso de tu compra.</p>
            <hr>
            <br>
          </div>
        </article>
        <article class="pregunta">
          <div class="q_img">
            <i class="far fa-credit-card"></i>
          </div>
          <h3>Medios de Pago</h3>
          <div class="texto">
            <p>Podes pagar en cuotas sin interés con tu tarjeta de crédito; al contado con tu tarjeta de débito o en efectivo en puntos de pago.<br><strong>Efectivo: </strong>cuando compres te daremos un código para que puedas pagar en cualquier sucursal adherida.</p>
            <hr>
            <br>
          </div>
        </article>
        <article class="pregunta">
          <div class="q_img">
            <i class="fas fa-user-secret"></i>
          </div>
          <h3>Privacidad</h3>
          <div class="texto">
            <p>Privacidad en toda la información que manejamos.<br><strong>Recordá que tus datos siempre están seguros.</strong></p>
            <hr>
            <br>
          </div>
        </article>
        <article class="pregunta">
          <div class="q_img">
            <i class="fas fa-shipping-fast"></i>
          </div>
          <h3>Envio</h3>
          <div class="texto">
            <p>Si elegis nuestro Shipping, acordamos un día y hora de entrega. Además, podes seguir tu compra hasta que llegue a tus manos o podes elegir una sucursal del correo más cercano.</p>
            <hr>
            <br>
          </div>
        </article>
        <article class="pregunta">
          <div class="q_img">
            <i class="fas fa-exchange-alt"></i>
          </div>
          <h3>Cambios</h3>
          <div class="texto">
            <p><strong>Sos libre de cambiar de opinión.</strong><br> Si te equivocaste al comprar o no era lo que esperabas, tenes 10 días para devolverlo y te reintegramos el dinero de inmediato.</p>
            <hr>
            <br>
          </div>
        </article>
        <article class="pregunta">
          <div class="q_img">
            <i class="fas fa-exclamation"></i>
          </div>
          <h3>Reclamos</h3>
          <div class="texto">
            <p><strong>Si tenes algún problema. </strong>¡No dudes en avisarnos!.<br>Lo primero que tienes que hacer es iniciar un reclamo o comunicarte con nuestro centro de atención.<br>Tenes 10 días desde que recibiste el producto para reclamar si no te llegó lo que esperabas o 21 días desde la fecha de compra, sino lo recibiste.</p>
            <hr>
            <br>
          </div>
        </article>
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
