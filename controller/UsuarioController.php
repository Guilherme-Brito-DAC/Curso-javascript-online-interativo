<?php
class UsuarioController{

    public function start()
    {
        include 'view/login.php';
    }

    public function login()
    {
        $obj = new Usuario();

        try
        {

        $con = $obj->getCon();

        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        if($_POST['email'] != "" || $_POST['senha'] != "" ){

            $query = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
            
            $user = $con->prepare($query);

            $user->execute(
                    array(
                        'email' => $_POST["email"],
                        'senha' => $_POST["senha"]
                    )
                );

            $count = $user->rowCount();

            if( $count > 0 )
            {
                session_start();
                $_SESSION["email"] = $_POST["email"];
                header("Location: view/home.php");
            }
            else
            {
                echo 'Email ou senha inválidos';
                include 'view/login.php';
            }

        }
        else
        {
            echo "Complete todos os campos!";
            include 'view/login.php';
        }
       
        }
        catch(PDOException $error)
        {
            echo $error->getMessage();
        }

    }

    public function create(){
        $obj = new Usuario();

        if($_POST['email'] != "" && $_POST['nome'] != "" && $_POST['senha'] != "" && $_POST['confirmar_senha'] != "" ){
           
           if($_POST['senha'] == $_POST['confirmar_senha']){

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
                    echo "<div class='alert alert-dismissible alert-warning'>Email já cadastrado!</div>";

                    include 'view/login.php';
                }
                else
                {
                    $obj->setEmail($_POST['email']);
                    $obj->setNome($_POST['nome']);
                    $obj->setSenha($_POST['senha']);
                    $obj->create();
                }     
            }
            catch(PDOException $error)
            {
                echo $error->getMessage();
            }

            }
            else
            {
                echo "<div class='alert alert-dismissible alert-danger'>Atenção, senhas incompatíveis! </div>";

                include 'view/login.php';
            }
            
        }
        else
        {
            session_start();
            $_SESSION ['alert']= 'Campos';
            include 'view/login.php';
        }  
    }

    public function read(){

    }

    public function update(){

    }

    public function delete(){

        if( !isset($_GET['id']) ){
            echo "Id não informado";
            exit;
        }

        $obj = new Usuario();
        $obj->setId($_GET['id']);
        $obj->delete();       
    }

}