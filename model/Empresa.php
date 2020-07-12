<?php

require_once 'Banco.php';

class Empresa extends Banco{

    protected $table = 'empresas';
	private $id;
    private $nomeEmpresa;
   
    public function insert() {

        $sql = "INSERT INTO $this->table (nomeEmpresa) VALUES (:nomeEmpresa)";
        $stmt = Banco::prepare($sql);
        $stmt->bindParam(':nomeEmpresa', $this->nomeEmpresa);
        return $stmt->execute();
    }

    public function update($id) {

        $sql = "UPDATE $this->table SET nomeEmpresa=:nomeEmpresa WHERE id = :id";
        $stmt = Banco::prepare($sql);
        $stmt->bindParam(':nomeEmpresa', $this->nomeEmpresa);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
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
    public function getNomeEmpresa()
    {
        return $this->nomeEmpresa;
    }
    /*
     * @return self
     */
    public function setNomeEmpresa($nomeEmpresa)
    {
        $this->nomeEmpresa = $nomeEmpresa;
        return $this;
    }

}