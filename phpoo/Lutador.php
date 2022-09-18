<?php
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function apresentar(){
        echo "<p>--------------------------------------</p>";
        echo "CHEGOU A HORA! O lutador " . $this->getNome();
        echo ", veio diretamente de " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "kg";
        echo "<br>Ele tem " . $this->getVitorias() . " vitória(s) ";
        echo $this->getDerrotas() . " derrota(s) e " . $this->getEmpates() . " empate(s)";

    }
    
    public function status(){
        echo "<p>----------------------------------</p>";
        echo $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vez(es), ";
        echo "perdeu " . $this->getDerrotas() . " vez(es) e ";
        echo "empatou " . $this->getEmpates() . " vez(es)!";
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

// Construtor ------------------------------------

    function __construct ($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

// getters ----------------------------------------

    function getNome(){
        return $this->nome;
    }

    function getNacionalidade(){
        return $this->nacionalidade;
    }
    
    function getIdade(){
        return $this->idade;
    }

    function getAltura(){
        return $this->altura;
    }

    function getPeso(){
        return $this->peso;
    }

    function getCategoria(){
        return $this->categoria;
    }


    function getVitorias(){
        return $this->derrotas;
    }

    function getEmpates(){
        return $this->empates;
    }

    function getDerrotas(){
        return $this->derrotas;
    }

// setters ---------------------------------------

    function setNome($nome){
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }

    function setAltura($altura){
        $this->altura = $altura;
    }

    function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria(){
       if ($this->peso < 52.2) {
        $this->categoria = "Inválido";
       } elseif ($this->peso <= 70.3){
        $this->categoria = "Leve";
       } elseif ($this->peso <= 83.9){
        $this->categoria = "Médio";
       } elseif ($this->peso <= 120.2){
        $this->categoria = "Pesado";
       } else {
        $this->categoria = "Inválido";
       }
    }

    function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates){
        $this->empates = $empates;
    }



}
?>