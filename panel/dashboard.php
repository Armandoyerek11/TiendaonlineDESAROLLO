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
          <a class="navbar-brand" href="dashboard.php">Universidad de artes</a>
        </div>
        <ul class="nav navbar-nav pull-right">

            <li class="dropdown, active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Instrumentos <span class="caret"> </span></a> 
                <ul class="dropdown-menu">
                    <li class="active"><a href="../panel/dashboard.php ">Ultimos Pedidos de Instrumentos</a></li>
                    <li><a href="pedidos/index.php">Todos los Pedidos de Instrumentos</a></li>
                    <li><a href="../panel/instrumentos/index.php"> Instrumentos</a></li>
                </ul>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eventos <span class="caret"> </span></a> 
                <ul class="dropdown-menu">
                    <li><a href="../panel/dashboard2.php">Ultimos Pedidos de Eventos</a></li>
                    <li><a href="pedidos2/index.php">Todos los Pedidos de Eventos</a></li>
                    <li><a href="../panel/eventos/index.php"> Eventos</a></li>
                </ul>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Admin <span class="caret"> </span></a> 
                <ul class="dropdown-menu">
                    <li><a href="register.php" class="btn">Registrar Administrador</a></li>
                    <li><a href="register2.php" class="btn">Registrar Usuario</a></li>
                    <li><a href="a??adircategoria.php" class="btn">A??adir categoria</a></li>
                </ul>

            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Usuario <span class="caret"> </span></a>
                <ul class="dropdown-menu">
                    <li><a href="cerrar_sesion.php ">Cerrar Sesi??n</a></li>
                </ul>
            </li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
    <div class="row">
          <div class="col-md-12">
             <fieldset>
              <legend>Listado de los 10 ??ltimos Pedidos de Instrumentos</legend>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Cliente</th>
                      <th>N.?? Pedido</th>
                      <th>Total</th>
                      <th>Fecha</th>
                      <th>Tel??fono</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody> 
                    <?php
                      require '../vendor/autoload.php';
                      $pedido = new ArmandoYerek\Pedido;
                      $info_pedido = $pedido->mostrarUltimos();
                   
                      $cantidad = count($info_pedido);
                      if($cantidad > 0){
                        $c=0;
                      for($x =0; $x < $cantidad; $x++){
                        $c++;
                        $item = $info_pedido[$x];
                    ?>

                    <tr>
                      <td><?php print $c?></td>
                      <td><?php print $item['nombre'].' '.$item['apellidos']?></td>
                      <td><?php print $item['id']?></td>
                      <td><?php print $item['total']?> MXN</td>
                      <td><?php print $item['fecha']?></td>
                      <td><?php print $item['telefono']?></td>                     
                      <td class="text-center">
                        <a href="pedidos/ver.php?id=<?php print $item['id'] ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a>
                      
                      </td>
                    
                    </tr>

                    <?php
                      }
                    }else{

                    ?>
                    <tr>
                      <td colspan="6">NO HAY REGISTROS</td>
                    </tr>

                    <?php }?>
                                    
                  </tbody>

                </table>
             </fieldset>
          </div>
        </div>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

  </body>
</html>