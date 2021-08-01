<?php
class Aula{

    private $id;
    private $titulo;
    private $descricao;
    private $texto;
    private $data_de_postagem;
    private $professor_id;

    public function __construct()
    {
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function create()
    {
        $sql = $this->con->prepare("INSERT INTO aula (titulo, descricao , texto , data_de_postagem ,professor_id) VALUES (?,?,?,now(),?)");
        $sql->execute([$this->getTitulo(),$this->getDescricao(),$this->getTexto(),$this->getProfessor_id(),]);
    }

	public function read()
    {
        $sql = $this->con->prepare("SELECT * FROM aula");
        $sql->execute();
        $row = $sql->fetchAll();

        return $row;		
	}

	public function update()
    {
        
	}

	public function delete()
    {
		$sql = $this->con->prepare("DELETE FROM aula WHERE id=?");
		$sql->execute([$this->getId()]);
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

	public function getTitulo()
	{
		return $this->titulo;
	}

	public function setTitulo($titulo)
	{
		$this->titulo = $titulo;

		return $this;
	}

	public function getDescricao()
	{
		return $this->descricao;
	}

	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;

		return $this;
	}

    public function getTexto()
	{
		return $this->texto;
	}

	public function setTexto($texto)
	{
		$this->texto = $texto;

		return $this;
	}

	public function getData_de_postagem()
	{
		return $this->data_de_postagem;
	}

	public function setData_de_postagem($data_de_postagem)
	{
		$this->data_de_postagem = $data_de_postagem;

		return $this;
	}

    public function getProfessor_id()
	{
		return $this->professor_id;
	}

    public function setProfessor_id($professor_id)
	{
		$this->professor_id = $professor_id;

		return $this;
	}

    public function getCon()
	{
		return $this->con;
    }
}