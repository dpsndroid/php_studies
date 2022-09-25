<?php

require_once "Pessoas.php";

class Professores extends Pessoas {
    private $especialidade;
    private $salario;

    public function recebAumento($aum){
        $this->salario += $aum;
    }

    # getters ----------------------------------------------

    public function getEspecialidade(){
        return $this-> especialidade;
    }
    public function getSalario(){
        return $this-> salario;
    }

    # setters -----------------------------------------------

    public function setEspecialidade($especialidade){
        $this-> especialdade = $especialidade;
    }
    public function setSalario($salario){
        $this-> salario = $salario;
    }

    
}