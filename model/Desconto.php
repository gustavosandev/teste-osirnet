<?php

require_once 'Banco.php';

class Desconto extends Banco{

    protected $table = 'descontos';
	private $id;
    private $motivoDesconto;
   
    public function insert() {

        $sql = "INSERT INTO $this->table (motivoDesconto) VALUES (:motivoDesconto)";
        $stmt = Banco::prepare($sql);
        $stmt->bindParam(':motivoDesconto', $this->motivoDesconto);
        return $stmt->execute();
    }
    

    public function update($id) {

        $sql = "UPDATE $this->table SET motivoDesconto=:motivoDesconto WHERE id = :id";
        $stmt = Banco::prepare($sql);
        $stmt->bindParam(':motivoDesconto', $this->motivoDesconto);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
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
    public function getMotivoDesconto()
    {
        return $this->motivoDesconto;
    }
    /*
     * @return self
     */
    public function setMotivoDesconto($motivoDesconto)
    {
        $this->motivoDesconto = $motivoDesconto;
        return $this;
    }

}