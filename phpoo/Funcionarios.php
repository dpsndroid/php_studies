<?php

require_once "Pessoas.php";

class Funcionarios extends Pessoas {
    private $setor;
    private $trabalhando;

    public function mudarTrab(){
        $this-> trabalhando =  ! $this-> trabalhando;
    }

    # getters ----------------------------------------------

    public function getSetor(){
        return $This-> setor;
    }
    public function getTrabalhando(){
        return $This-> trabalhando;
    }

    # setters ----------------------------------------------

    public function setSetor($setor){
        $this-> setor = $setor;
    }
    public function setTrabalhando($trabalhando){
        $this-> trabalhando = $trabalhando;
    }
}