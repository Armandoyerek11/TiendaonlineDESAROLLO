<?php
session_start();
require 'funciones.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Universidad de artes</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
  </head>

  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="instrumentos.php">Universidad de artes</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li class="active">
              <a href="instrumentos.php" class="btn">Instrumentos</a>
            </li>
              <li>
                <a href="eventos.php" class="btn">Eventos</a>
              </li>
              <li>
                <a href="ubicasion.php" class="btn">ubicasion</a>
              </li>
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"> </span></a> 
                <ul class="dropdown-menu">
                    <li><a href="login.php" class="btn">Login</a></li>
                    <li><a href="register.php" class="btn">Registrarse</a></li>
                </ul>
          </ul>
        </div>
    </nav>
    <h1>UNIVERSIDAD DE ARTES</h1>
    <div class="container" id="main">
			  <h1>consulta nuestra ubicasion aqui..</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59234.749789116264!2d-102.34647606874996!3d21.88945680000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee6b80566fb7%3A0x27ff6e870cfe191b!2sUniversidad%20de%20las%20Artes!5e0!3m2!1ses-419!2smx!4v1670195767421!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>