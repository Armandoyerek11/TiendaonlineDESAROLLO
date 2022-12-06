<?php
session_start();

require '../vendor/autoload.php';

$evento = new ArmandoYerek\Evento;

if($_SERVER['REQUEST_METHOD'] ==='POST'){

    if ($_POST['accion']==='Registrar'){

        if(empty($_POST['nombre_eventos']))
            exit('Completar nombre_eventos');
        
        if(empty($_POST['descripcion']))
            exit('Completar descripcion');

        if(empty($_POST['categoria_id']))
            exit('Seleccionar una Categoría');

        if(!is_numeric($_POST['categoria_id']))
            exit('Seleccionar una Categoría válida');

        $_params = array(
            'nombre_eventos'=>$_POST['nombre_eventos'],
            'descripcion'=>$_POST['descripcion'],
            'foto'=> subirFoto(),
            'precio'=>$_POST['precio'],
            'categoria_id'=>$_POST['categoria_id'],
            'fecha'=> date('Y-m-d')
        );

        $rpt = $evento->registrar($_params);

        if($rpt)
            header('Location: eventos/index.php');
        else
            print 'Error al registrar una evento';

    }

    if ($_POST['accion']==='Actualizar'){

        if(empty($_POST['nombre_eventos']))
        exit('Completar nombre_eventos');
    
    if(empty($_POST['descripcion']))
        exit('Completar descripcion');

    if(empty($_POST['categoria_id']))
        exit('Seleccionar una Categoría');

    if(!is_numeric($_POST['categoria_id']))
        exit('Seleccionar una Categoría válida');

    
    $_params = array(
        'nombre_eventos'=>$_POST['nombre_eventos'],
        'descripcion'=>$_POST['descripcion'],
        'precio'=>$_POST['precio'],
        'categoria_id'=>$_POST['categoria_id'],
        'fecha'=> date('Y-m-d'),
        'id'=>$_POST['id'],
    );

    if(!empty($_POST['foto_temp']))
        $_params['foto'] = $_POST['foto_temp'];
    
    if(!empty($_FILES['foto']['name']))
        $_params['foto'] = subirFoto();

    $rpt = $evento->actualizar($_params);
    if($rpt)
        header('Location: eventos/index.php');
    else
        print 'Error al actualizar una evento';

    }

}

if($_SERVER['REQUEST_METHOD'] ==='GET'){

    $id = $_GET['id'];

    $rpt = $evento->eliminar($id);
    
    if($rpt)
        header('Location: eventos/index.php');
    else
        print 'Error al eliminar una evento';

}

function subirFoto() {

    $carpeta = __DIR__.'/../upload/';

    $archivo = $carpeta.$_FILES['foto']['name'];

    move_uploaded_file($_FILES['foto']['tmp_name'],$archivo);

    return $_FILES['foto']['name'];

}