<?php
require_once 'Banco.php';


class Tecnico extends Banco{

    protected $table = 'tecnicos';
	private $id;
    private $nomeTecnico;
    private $idEmpresa;
   
    public function insert() {

        $sql = "INSERT INTO $this->table (nomeTecnico, idEmpresa) VALUES (:nomeTecnico, :idEmpresa)";
        $stmt = Banco::prepare($sql);
        $stmt->bindParam(':nomeTecnico', $this->nomeTecnico);
        $stmt->bindParam(':idEmpresa', $this->idEmpresa);
        return $stmt->execute();
    }
    

    public function update($id) {

        $sql = "UPDATE $this->table SET nomeTecnico=:nomeTecnico   WHERE id = :id";
        $stmt = Banco::prepare($sql);
        $stmt->bindParam(':nomeTecnico', $this->nomeTecnico);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function select($id){
        $sql  = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = Banco::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
   
    public function selectAll(){
        $sql  = "SELECT * FROM $this->table";
        $stmt = Banco::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($id){
        $sql  = "DELETE FROM $this->table WHERE id = :id";
        $stmt = Banco::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute(); 
    }


    

    /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
    /**
    * @return mixed
    */
    public function getTable()
    {
        return $this->table;

    }

    /**
     * @param mixed $table
     *
     * @return self
     */
    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeTecnico()
    {
        return $this->nomeTecnico;
    }

    /**
     * @param mixed $nomeTecnico
     *
     * @return self
     */
    public function setNomeTecnico($nomeTecnico)
    {
        $this->nomeTecnico = $nomeTecnico;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * @param mixed $idEmpresa
     *
     * @return self
     */
    public function setIdEmpresa($idEmpresa)
    {
        $this->idEmpresa = $idEmpresa;
        return $this;
    }

 }
    