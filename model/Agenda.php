<?php

require_once 'Banco.php';

class Agenda extends Banco{

    protected $table = 'agenda';
	private $id;
    private $nomeCliente;
    private $dataAgendamento;
    private $turno;
    private $protocoloSolicitacao;
    private $idTecnico;
    private $idDesconto;

   
    public function insert() {

        $sql = "INSERT INTO $this->table (nomeCliente, dataAgendamento, turno, protocoloSolicitacao, idTecnico, idDesconto) VALUES (:nomeCliente, :dataAgendamento, :turno, :protocoloSolicitacao, :idTecnico, :idDesconto)";
        $stmt = Banco::prepare($sql);
        $stmt->bindParam(':nomeCliente', $this->nomeCliente);
        $stmt->bindParam(':dataAgendamento', $this->dataAgendamento);
        $stmt->bindParam(':turno', $this->turno);
        $stmt->bindParam(':protocoloSolicitacao', $this->protocoloSolicitacao);
        $stmt->bindParam(':idTecnico', $this->idTecnico);
        $stmt->bindParam(':idDesconto', $this->idDesconto);
        return $stmt->execute();
    }
    

    public function select($idEmpresa, $dataInicio, $dataFinal){
        $sql  = "SELECT * FROM agenda 
        JOIN tecnicos
        ON tecnicos.id = agenda.idTecnico
        JOIN empresas
        ON empresas.id = tecnicos.idEmpresa
        JOIN descontos
        ON descontos.id = agenda.idDesconto
        WHERE tecnicos.idEmpresa = :idEmpresa
        AND dataAgendamento BETWEEN :dataInicio AND :dataFinal";
        

        $stmt = Banco::prepare($sql);
        $stmt->bindParam(':idEmpresa', $idEmpresa, PDO::PARAM_INT);
        $stmt->bindParam(':dataInicio', $dataInicio);
        $stmt->bindParam(':dataFinal', $dataFinal);
        $stmt->execute();
        return $stmt->fetchAll();
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
    public function getDataAgendamento()
    {
        return $this->dataAgendamento;
    }
    /*
     * @return self
     */
    public function setDataAgendamento($dataAgendamento)
    {
        $this->dataAgendamento = $dataAgendamento;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getTurno()
    {
        return $this->turno;
    }
    /*
     * @return self
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }
    /*
     * @return self
     */
    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getProtocoloSolicitacao()
    {
        return $this->protocoloSolicitacao;
    }
    /*
     * @return self
     */
    public function setProtocoloSolicitacao($protocoloSolicitacao)
    {
        $this->protocoloSolicitacao = $protocoloSolicitacao;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getIdTecnico()
    {
        return $this->idTecnico;
    }
    /*
     * @return self
     */
    public function setIdTecnico($idTecnico)
    {
        $this->idTecnico = $idTecnico;
        return $this;
    }
     /**
     * @return mixed
     */
    public function getIdDesconto()
    {
        return $this->idDesconto;
    }
    /*
     * @return self
     */
    public function setIdDesconto($idDesconto)
    {
        $this->idDesconto = $idDesconto;
        return $this;
    }

}