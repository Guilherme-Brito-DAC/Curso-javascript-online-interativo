<?php
class UsuarioController{

    public function start()
    {
        header('Location: view/Landing.php');
    }

    public function imgSelect()
    {
        $obj = new Usuario(); 
        $obj->setEmail($_SESSION['email']);
        $img_id = $obj->getImgBD();

        $img = "1.jpg";   
        switch ($img_id) {
            case 1:
                $img = '1.jpg';  
                break;
            case 2:
                $img = '2.jpg';  
                break;
            case 3:
                $img = '3.jpg';  
                break;
            case 4:
                $img = '4.jpg';  
                break;
            case 5:
                $img = '5.jpg';  
                break;
            case 6:
                $img = '6.jpg';  
                break;
            case 7:
                $img = '7.jpg';  
                break;
            case 8:
                $img = '8.jpg';  
                break;
            case 9:
                $img = '9.jpg';  
                break;
            case 10:
                $img = '10.jpg';  
                break;
            case 11:
                $img = '11.jpg';  
                break;
            case 13:
                $img = '13.jpg';  
                break;
            case 14:
                $img = '14.jpg';  
                break;
            case 15:
                $img = '15.jpg';  
                break;
            case 16:
                $img = '16.jpg';  
                break;
            case 17:
                $img = '17.jpg';  
                break;
            case 18:
                $img = '18.jpg';  
                break;
            case 19:
                $img = '19.jpg';  
                break;
            case 20:
                $img = '20.jpg';  
                break;
            case 21:
                $img = '21.jpg';  
                break;
            case 22:
                $img = '22.jpg';  
                break;
            case 23:
                $img = '23.jpg';  
                break;
        }
    
        $obj->setImg($img);
        $_SESSION['img'] = $img;
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
                $obj->setEmail($_POST["email"]);
                $id = $obj->getIdBD();
                $nome = $obj->getNomeBD();

                $_SESSION["email"] = $_POST["email"];
                $_SESSION["senha"] = $_POST["senha"];
                $_SESSION["login"] = "first";
                $_SESSION["id"] = $id;
                $_SESSION["nome"] = $nome;

                $obj->setSenha($_POST["senha"]);
                $obj->setId($id);
                $obj->setNome($nome);
                $obj->getImgBD();
   
                $this->imgSelect();
                header("Location: view/home.php");
            }
            else
            {
                session_start();
                $_SESSION ['alert']= 'Senha_Inválida';
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
                    session_start();
                    $_SESSION ['alert']= 'Email';
                    include 'view/login.php';
                }
                else
                {
                    session_start();

                    $obj->setEmail($_POST['email']);
                    $obj->setNome($_POST['nome']);
                    $obj->setSenha($_POST['senha']);

                    $_SESSION["login"] = "first";
                    $_SESSION["email"] = $_POST["email"];
                    $_SESSION["senha"] = $_POST["senha"];
                    $_SESSION["nome"] = $_POST['nome'];


                    $obj->create();

                    $id = $obj->getIdBD();
                    $_SESSION["id"] = $id;
                    $obj->getImgBD();

                    $this->imgSelect();
                    header("Location: view/home.php");
                }     
            }
            catch(PDOException $error)
            {
                echo $error->getMessage();
            }

            }
            else
            {
                session_start();
                $_SESSION ['alert'] = 'Senha';
                include 'view/login.php';
            }
            
        }
        else
        {
            session_start();
            $_SESSION ['alert'] = 'Campos';
            include 'view/login.php';
        }  
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

    public function updateSenha(){
        
        $obj = new Usuario;
        session_start();

        if($_POST['senhaOld'] == $_SESSION['senha'])
        {
            if($_POST['senhaOld'] == $_POST['senhaNew'])
            {
                echo "A senha nova não pode ser igual à anterior";
                header("Location: ./view/perfil.php");
            }
            else
            {
                if($_POST['senhaNew'] == $_POST['senhaCon'])
                {
                    $obj->setId($_SESSION["id"]);
                    $obj->updateSenha($_POST["senhaNew"]);
                }
                else
                {
                    echo "As senhas novas não coincidem";
                    header("Location: ./view/perfil.php");
                }
            }
        }
        else
        {
            echo "Senha antiga não confere";
            header("Location: ./view/perfil.php");
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
    
    public function update_img()
    {
        if(isset($_GET['img']))
        {
            session_start();
            $obj = new Usuario();
            $obj->setId($_SESSION['id']);
            $obj->updateIMG($_GET['img']);
            $this->imgSelect();
        }
        else
        {
            header("location: ./view/perfil.php");
        }
    }

    public function exit()
    {
        $obj = new Usuario(); 
        $item = null;
    
        $obj->setId($item);
        $obj->setEmail($item);
        $obj->setSenha($item);
        $obj->setNome($item);
    
        session_start(); 
        session_destroy(); 
        header("location: ./");
        exit();
    }
}

