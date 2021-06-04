<?php
class Usuario{

    private $id;
    private $email;
    private $nome;
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
        $sql = $this->con->prepare("INSERT INTO usuario (email, nome ,senha) VALUES (?,?,?)");
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

	public function update()
    {
		$sql = $this->con->prepare("UPDATE usuario SET email=?, nome=? WHERE id=?");
		$sql->execute([$this->getEmail(), $this->getNome(), $this->getId()]);

		if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
           header("Location: ./");
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
           header("Location: ./");
		}
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

    public function getCon(){
		return $this->con;
    }
}