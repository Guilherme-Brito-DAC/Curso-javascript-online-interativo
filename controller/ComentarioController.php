<?php
class ComentarioController{

    public function create(){
/*       $obj = new Comentario();
        $usuario = new Usuario();
        $obj -> setAula_id();
        $obj -> setUsuario_id($usuario->getId());
        $obj -> setMensagem($_POST["comentario"]);
        $obj -> setData_postagem(date("d/m/Y H:i"));
        $obj -> create();
*/
        echo $_POST["aula_id"];
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
        session_start();

        if( !isset($_SESSION["id"]) )
        {
            echo "Id não informado";
            header("Location: ./view/perfil.php");
            exit;
        }

        if( !isset($_POST["senha"]) )
        {
            echo "Senha não informado";
            header("Location: ./view/perfil.php");
            exit;
        }

        try
        {
        $obj = new Usuario();

        $con = $obj->getCon();

        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
            
        $user = $con->prepare($query);

            $user->execute(
                    array(
                        'email' => $_SESSION["email"],
                        'senha' => $_POST["senha"]
                    )
                );

        $count = $user->rowCount();

        if($count > 0)
        {
            $obj->setId($_SESSION["id"]);
            $obj->delete();  
        }
        else
        {
            echo "Senha incorreta";
        }

        }
        catch(PDOException $error)
        {
            echo $error->getMessage();
        }
    }
}

