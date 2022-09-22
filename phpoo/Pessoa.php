<?php

class Pessoa {
    private $nome;
    private $idade;
    private $sexo;

    public function fazerAniversario(){
        $this->idade ++;
    }

# contrutor ------------------------------

    function __construct($nom, $ida, $sex){
        $this->nome = $nom;
        $this->idade = $ida;
        $this->sexo = $sex;
    }

# getters ---------------------------------

    function getNome(){
        return $this->nome;
    }
    function getIdade(){
        return $this->idade;
    }
    function getSexo(){
        return $this->sexo;
    }
    function getfazerAniversario(){
        return $this->fazerAniversario;
    }

#setters ----------------------------------

    function setNome($nome){
        $this->nome = $Nome;
    }
    function setIdade($idade){
        $this->idade = $idade;
    }
    function setSexo($sexo){
        $this->sexo = $sexo;
    }
    function setfazerAniversario($fazerAniversario){
        $this->fazerAniversario = $fazerAniversario;
    }

}