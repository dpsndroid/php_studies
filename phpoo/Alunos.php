<?php

require_once "Pessoas.php";

class Alunos extends Pessoas{
    private $matricula;
    private $curso;

    public function cancelMat(){
        $this-> matricula = false;
    }

    # getters ---------------------------------------------

    public function getMatricula(){
        return $this-> matricula;
    }
    public function getCurso(){
        return $this-> curso;
    }
    
    # setters ----------------------------------------------

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }



}