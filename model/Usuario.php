<?php
class Usuario{

    private $id;
    private $email;
    private $nome;
    private $img;
    private $senha;
    private $nivel;
    private $con;

    public function __construct()
    {
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function create()
    {
        $sql = $this->con->prepare("INSERT INTO usuario (email, nome ,senha ,img_id , nivel) VALUES (?,?,?,1,?)");
        $sql->execute([$this->getEmail(), $this->getNome(),$this->getSenha(),$this->getNivel()]);
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
	}

	public function updateSenha($senha)
	{
		$sql = $this->con->prepare("UPDATE usuario SET senha=? WHERE id=?");
		$sql->execute([$senha,  $this->getId()]);
	}

	public function delete()
    {
		$sql = $this->con->prepare("DELETE FROM usuario WHERE id=?");
		$sql->execute([$this->getId()]);
	}

	public function updateIMG($img_id)
	{
		$sql = $this->con->prepare("UPDATE usuario SET img_id=? WHERE id=?");
		$sql->execute([$img_id,  $this->getId()]);
		$this->setImg($img_id);
	}

	public function getInfo(){

		$sql = $this->con->prepare("SELECT * FROM usuario WHERE email=?");
        $sql->execute([$this->getEmail()]);
        $row = $sql->fetchAll(PDO::FETCH_CLASS);

        return $row[0];	
	}

	public function getNivel()
	{
		return $this->nivel;
	}

	public function setNivel($nivel)
	{
		$this->nivel = $nivel;

		return $this;
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