<?php
class UsuarioController{

    public function start()
    {
        header('Location: view/usuario/Landing.php');
    }

    public function login()
    {
        $obj = new Usuario();

        $con = $obj->getCon();

        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

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
                $info = $obj->getInfo();

                $id = $info->id;
                $nome = $info->nome;
                $nivel = $info->nivel;
                $img = $info->img_id;

                $_SESSION["email"] = $_POST["email"];
                $_SESSION["senha"] = $_POST["senha"];
                $_SESSION["id"] = $id;
                $_SESSION["nome"] = $nome;
                $_SESSION["nivel"] = $nivel;
                $_SESSION["img"] = $img;

                $obj->setSenha($_POST["senha"]);
                $obj->setId($id);
                $obj->setNome($nome);
                $obj->setImg($img);
                $obj->setNivel($nivel);

                $aula = new AulaController();
                $aula->read();
            }
            else
            {
                session_start();
                $_SESSION ['alert']= 'Invalido';
                header("Location: view/usuario/login.php");
            }
    }

    public function create(){
        $obj = new Usuario();
           
           if($_POST['senha'] == $_POST['confirmar_senha']){
    
                $emailDuplicado = $obj->VerificaEmailDuplicado($_POST["email"]);
    
                if( $emailDuplicado == true )
                {
                    session_start();
                    $_SESSION ['alert']= 'Email';
                    header("Location:view/usuario/cadastro.php");
                }
                else
                {
                    session_start();

                    $obj->setEmail($_POST['email']);
                    $obj->setNome($_POST['nome']);
                    $obj->setSenha($_POST['senha']);
                    $obj->setNivel($_POST['rad']);
                    
                    $_SESSION["login"] = "first";
                    $_SESSION["email"] = $_POST["email"];
                    $_SESSION["senha"] = $_POST["senha"];
                    $_SESSION["nome"] = $_POST['nome'];
                    $_SESSION["nivel"] = $_POST['rad'];
        
                    $obj->create();

                    $info = $obj->getInfo();
                    $id = $info->id;

                    $_SESSION["id"] = $id;

                    $aula = new AulaController();
                    $aula->read();
                }     
            }

            else
            {
                session_start();
                $_SESSION ['alert'] = 'Senha';
                header("Location:view/usuario/cadastro.php");
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
                $emailDuplicado = $obj->VerificaEmailDuplicado($_POST["email"]);
    
                if( $emailDuplicado == true )
                {
                    echo "Email já cadastrado!";
                    header("Location: view/usuario/cadastro.php");
                }
                else
                {
                    session_start();
                    $obj->setId($_SESSION["id"]);
                    $obj->update($_POST["email"],$_POST["nome"]);
                }    
        }
        header("Location: view/usuario/perfil.php");
    }

    public function updateSenha(){
        
        $obj = new Usuario;
        session_start();

        if($_POST['senhaOld'] == $_SESSION['senha'])
        {
            if($_POST['senhaOld'] == $_POST['senhaNew'])
            {
                echo "A senha nova não pode ser igual à anterior";
                header("Location: view/usuario/perfil.php");
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
                    header("Location: view/usuario/perfil.php");
                }
            }
        }
        else
        {
            echo "Senha antiga não confere";
            header("Location: view/usuario/perfil.php");
        }
    }

    public function delete()
    {
        session_start();

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
            header("Location: ./view/usuario/login.php");
            session_destroy();
        }
        else
        {
            header("Location: ./view/usuario/perfil.php");
        }
    }
    
    public function update_img()
    {
        $obj = new Usuario();
        session_start();
        $obj->setId($_SESSION["id"]);
        $obj->updateIMG($_GET['img']);
        $_SESSION["img"]=$obj->getImg();
        header("Location: ./view/usuario/perfil.php");
    }
}

