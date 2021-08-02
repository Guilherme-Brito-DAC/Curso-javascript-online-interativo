<?php
class ComentarioController{

    public function create(){
       $obj = new Comentario();
        $usuario = new Usuario();
        $obj -> setAula_id($_POST["aula_id"]);
        session_start();
        $obj -> setUsuario_id($_SESSION["id"]);
        $obj -> setMensagem($_POST["comentario"]);
        $obj -> create();

        header("Location: ./view/aula/aula.php?aula=" .$_POST["aula_id"]);
    }

    public function read(){
        $obj = new Comentario();
        session_start();
        header("../usuario/perfil.php");
        $_SESSION["comentarios"] = $obj -> read();
    }

    public function update(){
        
        $obj = new Usuario;
        session_start();

        if($_POST['email'] == $_SESSION['email']){

            $obj->setId($_SESSION["id"]);
            $obj->update($_POST["email"],$_POST["nome"]);

        }else
        {
            
            try
            {
    
            $con = $obj->getCon();
    
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
            $query = "SELECT * FROM usuario WHERE email = :email";
            
            $user = $con->prepare($query);

            $user->execute(array('email' => $_POST["email"]));
    
            $count = $user->rowCount();
    
                if( $count > 0 )
                {
                    echo "Email já cadastrado!";
                    header("Location: ./view/perfil.php");
                }
                else
                {
                    session_start();
                    $obj->setId($_SESSION["id"]);
                    $obj->update($_POST["email"],$_POST["nome"]);
                }     
            }
            catch(PDOException $error)
            {
                echo $error->getMessage();
            }
        }
    }

    public function delete()
    {
        $obj = new Comentario;
        $obj -> setId($_POST["id"]);
        $obj -> delete();
        header("./view/aula/aula.php");
    }
}

