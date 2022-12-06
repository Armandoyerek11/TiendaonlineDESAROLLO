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
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
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
                <a href="carrito.php" class="btn"><span class="badge"><span class="glyphicon glyphicon-shopping-cart"></span><?php print cantidadInstrumentos(); ?></span></a>
                </li>
                <li>
                <a href="cerrar_sesion.php" class="btn">Logout</a>
                </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <h1>UNIVERSIDAD DE ARTES</h1>
    <br></br>
          <div></div>
             <h2>Recuerda los intrumentos ,eventos y obras de arte son a fin del apollo economica de la universidad de artes para financiar otros eventos para los estudiantes </h2>
    <div class="container" id="main">
        <div class="row">
            <?php
              require '../vendor/autoload.php';
              $instrumentos = new ArmandoYerek\Instrumento;
              $info_instrumentos = $instrumentos->mostrar();
              $cantidad = count($info_instrumentos);
              if($cantidad > 0){
                for($x =0; $x < $cantidad; $x++){
                  $item = $info_instrumentos[$x];
            ?>
              <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h1 class="text-center nombre_instrumento-instrumentos"><?php print $item['nombre_instrumento'] ?></h1>  
                    </div>
                      <div class="panel-body">
                        <?php
                            $foto = '../upload/'.$item['foto'];
                            if(file_exists($foto)){
                          ?>
                            <img src="<?php print $foto; ?>" class="img-responsive">
                        <?php }else{?>
                          <img src="../assets/imagenes/not-found.jpg" class="img-responsive">
                        <?php }?>
                        <h5 class="text-center precio-instrumentos"><?php print $item['precio']?> MXN</h5>
                        <h5 class="text-center descripcion-instrumentos"><?php print $item['descripcion']?></h5>
                        <h5 class="text-center nombre-categoria"><?php print $item['nombre']?></h5>
                      </div>
                    <div class="panel-footer">
                        <a href="carrito.php?id=<?php print $item['id'] ?>" class="btn btn-success btn-block">
                          <span class="glyphicon glyphicon-shopping-cart"></span> Comprar
                        </a>
                    </div>
                  </div>
                   
              </div>
          <?php
                }
            }else{?>
              <h4>NO HAY REGISTROS</h4>

          <?php }?>

        </div>
        <h1>Consulta nuestra ubicasion en ...</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59234.749789116264!2d-102.34647606874996!3d21.88945680000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee6b80566fb7%3A0x27ff6e870cfe191b!2sUniversidad%20de%20las%20Artes!5e0!3m2!1ses-419!2smx!4v1670195767421!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          <style>
                  body {
                    background-image: url(https://previews.123rf.com/images/rolffimages/rolffimages1802/rolffimages180200056/95083908-pintura-abstracta-en-colores-suaves-luz-representaci%C3%B3n-3d.jpg);
                    background-position: center;
                    background-color: transparent;
                    background-repeat: no-repeat;
                    background-size: cover;
                  }
                </style>
          <h2></h2>

    </div> <!-- /container -->
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>