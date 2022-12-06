<?php
session_start();

require '../vendor/autoload.php';

$instrumentos = new ArmandoYerek\Instrumento;

if($_SERVER['REQUEST_METHOD'] ==='POST'){

    if ($_POST['accion']==='Registrar'){

        if(empty($_POST['nombre_instrumento']))
            exit('Completar nombre_instrumento');
        
        if(empty($_POST['descripcion']))
            exit('Completar descripcion');

        if(empty($_POST['categoria_id']))
            exit('Seleccionar una Categoría');

        if(!is_numeric($_POST['categoria_id']))
            exit('Seleccionar una Categoría válida');
        
        $_params = array(
            'nombre_instrumento'=>$_POST['nombre_instrumento'],
            'descripcion'=>$_POST['descripcion'],
            'foto'=> subirFoto(),
            'precio'=>$_POST['precio'],
            'categoria_id'=>$_POST['categoria_id'],
            'fecha'=> date('Y-m-d')
        );

        $rpt = $instrumentos->registrar($_params);

        if($rpt)
            header('Location: instrumentos/index.php');
        else
            print 'Error al registrar un instrumentos';       

    }

    if ($_POST['accion']==='Actualizar'){

        if(empty($_POST['nombre_instrumento']))
        exit('Completar nombre_instrumento');
    
    if(empty($_POST['descripcion']))
        exit('Completar descripcion');

    if(empty($_POST['categoria_id']))
        exit('Seleccionar una Categoría');

    if(!is_numeric($_POST['categoria_id']))
        exit('Seleccionar una Categoría válida');

    
    $_params = array(
        'nombre_instrumento'=>$_POST['nombre_instrumento'],
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

    $rpt = $instrumentos->actualizar($_params);
    if($rpt)
        header('Location: instrumentos/index.php');
    else
        print 'Error al actualizar un instrumentos';

    }

}

if($_SERVER['REQUEST_METHOD'] ==='GET'){

    $id = $_GET['id'];

    $rpt = $instrumentos->eliminar($id);
    
    if($rpt)
        header('Location: instrumentos/index.php');
    else
        print 'Error al eliminar un instrumentos';

}

function subirFoto() {

    $carpeta = __DIR__.'/../upload/';

    $archivo = $carpeta.$_FILES['foto']['name'];

    move_uploaded_file($_FILES['foto']['tmp_name'],$archivo);

    return $_FILES['foto']['name'];

}