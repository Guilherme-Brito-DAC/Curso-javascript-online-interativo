<?php
class ComentarioController{

    public function create(){
        $obj = new Comentario();

        $obj -> setAula_id($_POST["aula_id"]);

        session_start();

        $obj -> setUsuario_id($_SESSION["id"]);

        $obj -> setNome($_SESSION["nome"]);

        $obj -> setMensagem($_POST["comentario"]);

        $obj -> create();

        $this -> read();

        header("Location: ./view/aula/aula.php?aula=" .$_POST["aula_id"]);
    }

    public function read(){

        $obj = new Comentario();

        $_SESSION["comentarios"] = $obj -> read();
    }

    public function update(){
        
        $obj = new Comentario;
        $obj -> setId($_POST["id"]);
        $obj -> setMensagem($_POST["mensagem"]);
        $obj -> update();

        session_start();
        
        $this -> read();

        header("Location: ./view/aula/aula.php?aula=" .$_POST["aula_id"]);
        
    }

    public function delete()
    {
        $obj = new Comentario;
        $obj -> setId($_POST["id"]);
        $obj -> delete();

        session_start();
        
        $this -> read();

        header("Location: ./view/aula/aula.php?aula=" .$_POST["aula_id"]);
    }
}

