<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="img/png" href="favicon.png">
    <title>Tienda | inicio</title>

    <!-- Bootstrap core CSS-->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- web CSS-->
    <link href="carousel.css" rel="stylesheet">
    <!--fontawesome -->
    <script type="text/javascript" src="fontawesome/js/fontawesome-all.js"></script>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> -->

    <!-- FLICKETY-->
    <script type="text/javascript" src="flickity.pkgd.js"></script>
    <link rel="stylesheet" href="flickity-docs.css?4" media="screen">
    <!-- Component styles -->
    <link rel="stylesheet" href="styles.css">

  </head>
  <body>

    <?php include_once('navbar.php')  ?>

    <!-- carrousel -->
  <main role="main" class="main">
          <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom:0!important;">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="first-slide" src="10.jpg" alt="First slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Formá Parte!</h1>
                    <p>Disfruta de todos los beneficios que te brinda el ser miembro de una de las comunidades mas grandes de compra y venta de chirimbolos, cosos, y cositos.</p>
                    <p><a class="btn btn-lg btn-primary" href="crear-cuenta.php" role="button">Unite aca</a></p>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                  </div>
                </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>



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

          <!-- carrousel2 -->
      <section class="carrousel2">
                <div class="example__demo duo__cell">
                  <div class="carousel carousel--cell-selector carru" data-flickity="{&quot;initialIndex&quot;: 2,  &quot;cellSelector&quot;: &quot;.carousel-cell&quot;, &quot;pageDots&quot;: false, &quot;wrapAround&quot;: true }">
                    <div class="static-banner static-banner1">Ultimos productos</div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                  </div>
                </div>

      </section>
    </main>



    <footer>
      <ul>
        <li><a href="faq.php">FAQ |</a></li>
        <li><a href="singin.php">Crear cuenta |</a></li>
        <li><a href="login.php">Iniciar sesión</a></li>
      </ul>
      <ul class="redesfoot">
        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-tumblr-square"></a></i></li>
      </ul>
    </footer>

  </body>
</html>
