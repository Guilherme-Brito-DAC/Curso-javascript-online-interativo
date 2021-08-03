<?php
class AulaController{

    public function create()
    {
        $obj = new Aula();
        $obj -> setTitulo($_POST["titulo"]);
        $obj -> setDescricao($_POST["descricao"]);
        $obj -> setTexto($_POST["texto"]);
        session_start();
        $obj -> setProfessor_id($_SESSION["id"]);
        $obj -> create();
        $aulas = $obj->read();
        $_SESSION["aulas"] = $aulas;
        header('Location: view/usuario/home.php');
    }

    public function read()
    {
        $obj = new Aula();
        $aulas = $obj->read();
        $Comm = new ComentarioController();
        $Comm->read();

        $_SESSION["aulas"] = $aulas;

        header('Location: view/usuario/home.php');
    }

    public function update()
    {
        $obj = new Aula();
        $obj -> setTitulo($_POST["titulo"]);
        $obj -> setDescricao($_POST["descricao"]);
        $obj -> setTexto($_POST["texto"]);
        $obj -> setId($_POST["id"]);
        session_start();
        $obj -> update();
        $this->read();
    }
        
    public function delete()
    {
        $obj = new Aula();
        $obj->setId($_POST["aula_id"]);
        session_start();
        $obj->delete();
        $this->read();
    }
}

