<?php
class AulaController{

    public function create()
    {

    }

    public function read()
    {
        $obj = new Aula();
        
        $aulas = $obj->read();

        session_start();

        $_SESSION["aulas"] = $aulas;

        header('Location: view/usuario/home.php');
    }

    public function update()
    {

    }
        
    public function delete()
    {
        
    }
}

