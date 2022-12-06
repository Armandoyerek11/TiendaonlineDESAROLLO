<?php

session_start();

if($_SERVER['REQUEST_METHOD'] ==='POST'){

    require 'funciones2.php';
    require '../vendor/autoload.php';

    if(isset($_SESSION['carrito2']) && !empty($_SESSION['carrito2'])){
        $cliente = new ArmandoYerek\Cliente;
    
        $_params = array(
            'nombre' => $_POST['nombre'],
            'apellidos' => $_POST['apellidos'],
            'email' => $_POST['email'],
            'telefono' => $_POST['telefono'],
            'comentario' => $_POST['comentario']
        );
    
        $cliente_id = $cliente->registrar($_params);
    
        $pedido = new ArmandoYerek\Pedido2;
    
        $_params = array(
            'cliente_id'=>$cliente_id,
            'total' => calcularTotal2(),
            'fecha' => date('Y-m-d')
        );
        
        $pedido_id =  $pedido->registrar($_params);

        foreach($_SESSION['carrito2'] as $indice => $value){
            $_params = array(
                "pedido_id" => $pedido_id,
                "evento_id" => $value['id'],
                "precio" => $value['precio'],
                "cantidad" => $value['cantidad'],
            );

            $pedido->registrarDetalle($_params);
        }

        $_SESSION['carrito2'] = array();

        header('Location: gracias.php');

    }

}