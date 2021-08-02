<?php

require_once "inc/config.php";
require_once "controller/UsuarioController.php";
require_once "controller/ComentarioController.php";
require_once "controller/AulaController.php";
require_once "model/Usuario.php";
require_once "model/Aula.php";
require_once "model/Comentario.php";


$app = new UsuarioController();
$Comm = new ComentarioController();
$Aula = new AulaController();

if (isset($_GET['acao'])) {

    switch ($_GET['acao']) {

        case 'create':
            $app->create();
            break;

        case 'create_comment':
            $Comm->create();
            break;

        case 'delete_comment':
            $Comm->delete();
            break;

        case 'update_comment':
            $Comm->update();
            break;

        case 'create_aula':
            $Aula->create();
            break;

        case 'read_aula':
            $Comm->read();
            $Aula->read();
            break;

        case 'delete_aula':
            $Aula->delete();
            break;

        case 'update_aula':
            $Aula->update();
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
} else {
    $app->start();
}
