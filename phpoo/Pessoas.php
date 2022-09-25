<?php

class Pessoas {
    private $nome;
    private $idade;
    private $sexo;

    public function fazniver(){
        $this->idade ++ ;
    }

    # getters -----------------------------------------------

    public function getNome(){
        return $this-> nome;        
    }
    public function getIdade(){
        return $this-> idade;        
    }
    public function getSexo(){
        return $this-> sexo;        
    }

    #setters ------------------------------------------------

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setIdade($Idade){
        $this->idade = $Idade;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    
}