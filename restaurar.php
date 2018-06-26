<?php

require_once('autoload.php');
  if ($_POST) {
    $repo= new creadorDB;
    echo "<h1>un poco bien</h1>";
  }
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="img/png" href="favicon.png">
    <title>Tienda | Restaurar</title>

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
    <?php include_once('navbar.php') ?>
    <br><br>
    <form  action="restaurar.php" method="post">
      <input type="submit" name="creo_bd" value="CrearBD">

      <input type="submit" name="restauro_usuarios" value="Restaurar usuarios">
    </form>

  <body>
