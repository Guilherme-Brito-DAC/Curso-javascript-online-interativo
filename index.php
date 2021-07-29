<?php

require_once "inc/config.php";
require_once "controller/UsuarioController.php";
require_once "model/Usuario.php";
require_once "controller/ComentarioController.php";
require_once "model/Comentario.php";

$app = new UsuarioController();
$Comm = new ComentarioController();

if ( isset($_GET['acao']) ){

    switch ($_GET['acao']) {
        
        case 'create':
            $app->create();
            break;
        
        case 'create_comment':
            $Comm->create();
            break;

        case 'update':
            $app->update();
            break;

        case 'updateSenha':
            $app->updateSenha();
            break;

        case 'delete':
            $app->delete();
            break;
        
        case 'login':
            $app->login();
            break;    

        case 'updateIMG':
            $app->update_img();
            break;    

        default:
            $app->start();
            break;
    }

}
else
{
    $app->start();
}
