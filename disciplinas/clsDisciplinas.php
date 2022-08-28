<?php
include 'banco/conexao.php';

class clsDisciplinas{
    private $periodo, $curso, $disciplina;

//------------------------------------------
    public function getPeriodo(){
        return $this->periodo;
    }
    public function setPeriodo($periodo){
        $this->periodo = $periodo;
    }
//------------------------------------------
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }
//------------------------------------------
    public function getDisciplina(){
        return $this->disciplina;
    }
    public function setDisciplina($disciplina){
        $this->disciplina = $disciplina;
    }
//------------------------------------------

    public function mostraPeriodo(){
        $bd = new Conexao();
		$conexao = $bd->getConexao();

        $select = $conexao->prepare('select distinct periodo from disciplinas');
        $select->execute();

        if($select->rowCount()>0){
            $resultado = json_encode($select->fetchAll());
         }
        else{
            $resultado = "erro";
        }
        echo $resultado;
    }

    public function mostraCurso(){
        $bd = new Conexao();
		$conexao = $bd->getConexao();

        $select = $conexao->prepare('select distinct curso from disciplinas where periodo = ?');
        $select->bindParam(1,$this->periodo);
        $select->execute();

        if($select->rowCount()>0){
            $resultado = json_encode($select->fetchAll());
         }
        else{
            $resultado = "erro";
        }
        echo $resultado;
    }

    public function mostraDisciplina(){
        $bd = new Conexao();
		$conexao = $bd->getConexao();

        $select = $conexao->prepare('select disciplina from disciplinas where periodo = ? and curso = ?');
        $select->bindParam(1,$this->periodo);
        $select->bindParam(2,$this->curso);
        $select->execute();

        if($select->rowCount()>0){
            $resultado = json_encode($select->fetchAll());
         }
        else{
            $resultado = "erro";
        }
        echo $resultado;
    }
}

?>