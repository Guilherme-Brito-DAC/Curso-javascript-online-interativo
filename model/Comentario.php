<?php
class Comentario{

    private $id;
    private $aula_id;
    private $usuario_id;
    private $mensagem;

    public function __construct()
    {
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function create()
    {
        $sql = $this->con->prepare("INSERT INTO comentario (aula_id, usuario_id ,data_postagem ,mensagem) VALUES (?,?,now(),?)");

        $sql->execute([$this->getAula_id(),$this->getUsuario_id(),$this->getMensagem(),]);

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
        $sql = $this->con->prepare("SELECT * FROM comentario WHERE aula_id=?");
        $sql->execute([$this->getAula_Id()]);
        $row = $sql->fetchObject();

        return $row;		
	}

	public function delete()
    {
		$sql = $this->con->prepare("DELETE FROM comentario WHERE id=?");
		$sql->execute([$this->getId()]);

	}

	public function getAula_id()
	{
		return $this->aula_id;
	}

	public function setAula_id($aula_id)
	{
		$this->aula_id = $aula_id;

		return $this;
	}

	public function getUsuario_id()
	{
		return $this->usuario_id;
	}

	public function setUsuario_id($usuario_id)
	{
		$this->usuario_id = $usuario_id;

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

    public function getMensagem()
	{
		return $this->mensagem;
	}

	public function setMensagem($mensagem)
	{
		$this->mensagem = $mensagem;

		return $this;
	}

    public function getCon()
	{
		return $this->con;
    }
}