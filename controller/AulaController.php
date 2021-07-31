<?php
class AulaController{

    public function create(){

        echo $_POST["aula_id"];
    }

    public function update(){}
        
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

