<?php
class Usuario{

    private $id;
    private $email;
    private $nome;
    private $img;
    private $senha;
    private $con;

    public function __construct()
    {
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all()
    {
        $sql = $this->con->prepare("SELECT * FROM usuario");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    public function create()
    {
        $sql = $this->con->prepare("INSERT INTO usuario (email, nome ,senha ,img_id ) VALUES (?,?,?,1)");
        $sql->execute([$this->getEmail(), $this->getNome(),$this->getSenha()]);

        if($sql->errorCode()!='00000')
        {
            echo $sql->errorInfo()[2];
        }
        else
        {
			header("Location: ./");
   	 	}
    }

	public function read()
    {
        $sql = $this->con->prepare("SELECT * FROM usuario WHERE id=?");
        $sql->execute([$this->getId()]);
        $row = $sql->fetchObject();

        return $row;		
	}

	public function update($email,$nome)
    {
		$sql = $this->con->prepare("UPDATE usuario SET email=?, nome=? WHERE id=?");
		$sql->execute([$email, $nome, $this->getId()]);

		if($sql->errorCode()!='00000')
		{
            echo $sql->errorInfo()[2];
        }
		else
		{
            $this->setEmail($email);
            $this->setNome($nome);
            $_SESSION["email"] = $email;
            $_SESSION["nome"] = $nome;

           header("Location: ./view/perfil.php");
		}
	}

	public function updateSenha($senha)
	{
		$sql = $this->con->prepare("UPDATE usuario SET senha=? WHERE id=?");
		$sql->execute([$senha,  $this->getId()]);

		if($sql->errorCode()!='00000')
		{
            echo $sql->errorInfo()[2];
        }
		else
		{
		   session_destroy();
           header("Location: ./view/login.php");
		   exit();
		}
	}

	public function delete()
    {
		$sql = $this->con->prepare("DELETE FROM usuario WHERE id=?");
		$sql->execute([$this->getId()]);

		if($sql->errorCode()!='00000')
        {
            echo $sql->errorInfo()[2];
        }
        else
        {
			session_destroy();
			header("Location: ./view/login.php");
			exit();
		}
	}

	public function updateIMG($img_id)
	{
		$sql = $this->con->prepare("UPDATE usuario SET img_id=? WHERE id=?");
		$sql->execute([$img_id,  $this->getId()]);
		$this->setImg($img_id);

		if($sql->errorCode()!='00000')
		{
            echo $sql->errorInfo()[2];
        }	
		else
		{
           header("Location: ./view/perfil.php");
		}
	}

	public function getIdBD()
	{
		$sql = $this->con->prepare("SELECT id FROM usuario WHERE email=?");
        $sql->execute([$this->getEmail()]);
        $row = $sql->fetchObject();

        return $row->id;	
	}

	public function getImgBD()
	{
		$sql = $this->con->prepare("SELECT img_id FROM usuario WHERE email=?");
        $sql->execute([$this->getEmail()]);
        $row = $sql->fetchAll(PDO::FETCH_CLASS);

		$this->setImg($row->img_id);
		$_SESSION['img'] = $row->img_id;

        return $row[0]->img_id;	
	}

	public function getNomeBD()
	{
		$sql = $this->con->prepare("SELECT nome FROM usuario WHERE email=?");
        $sql->execute([$this->getEmail()]);
        $row = $sql->fetchAll(PDO::FETCH_CLASS);

        return $row[0]->nome;	
	}

	public function getImg()
	{
		return $this->img;
	}

	public function setImg($img)
	{
		$this->img = $img;

		return $this;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

    public function getSenha()
	{
		return $this->senha;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;

		return $this;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}

    public function getCon()
	{
		return $this->con;
    }
}