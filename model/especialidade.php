<?php

class Especialidade{

    private $id_especialidade;
    private $especialidade;
    private $valor_dia;

    function 


    



    /**
     * Get the value of id_especialidade
     */ 



    public function getId_especialidade()
    {
        return $this->id_especialidade;
    }

    /**
     * Set the value of id_especialidade
     *
     * @return  self
     */ 
    public function setId_especialidade($id_especialidade)
    {
        $this->id_especialidade = $id_especialidade;

        return $this;
    }

    /**
     * Get the value of especialidade
     */ 
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * Set the value of especialidade
     *
     * @return  self
     */ 
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    /**
     * Get the value of valor_dia
     */ 
    public function getValor_dia()
    {
        return $this->valor_dia;
    }

    /**
     * Set the value of valor_dia
     *
     * @return  self
     */ 
    public function setValor_dia($valor_dia)
    {
        $this->valor_dia = $valor_dia;

        return $this;
    }


    public function add()
    {
        try {
            require_once("dao.php");
            $sql = "insert into paciente(especialidade, valor_dia) value (:especilidade, :valor)";
            $dao = new Dao;
            $stman = $dao->conecta()->prepare($sql);
            $stman->bindParam(":especialidade", $this->nome);
            $stman->bindParam(":valor", $this->email);
            $stman->execute();
            aviso("Salvo com sucesso!");
        } catch (Exception $e) {
            erro("Erro: " .  $e->getMessage());
        }
    }


 function listALL(){
     $result = null;

    try{
        $sql = "select * from  especialidade";
        require_once("dao.php");
        $dao = new Dao;
        $stman = $dao->conecta()->prepare($sql);
        $stman->execute();  
        $result = $stman->fetchAll(PDO::FETCH_OBJ);

    } catch(Exception $e){
        erro("Erro ao listar! " . $e->getMessage());

    }

    return $result;
 }


}