<?php

require_once "inc/config.php";
require_once "controller/UsuarioController.php";
require_once "model/Usuario.php";

$app = new UsuarioController();

if ( isset($_GET['acao']) ){

    switch ($_GET['acao']) {
        case 'create':
            $app->create();
            break;

        case 'update':
            $app->update();
            break;

        case 'delete':
            $app->delete();
            break;
        
        case 'login':
            $app->login();
            break;    

        default:
            $app->start();
            break;
    }
}
else{
    $app->start();
}
