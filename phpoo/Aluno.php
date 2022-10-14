<?php
require_once "Pessoa2.php";
class Aluno extends Pessoa2{
    private $matricula;
    private $curso;
    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do Aluno $this->nome</p>";
    }

    function getMatricula(){
        return $this->matricula;
    }
    
    function getCurso() {
        return $this->curso;
    }
    
    function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    
    function setCurso($curso){
        $this->curso = $curso;
    }
}