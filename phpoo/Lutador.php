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
        echo "CHEGOU A HORA! O lutador " . $this->getnome();
        echo ", veio diretamente de " . $this->getnacionalidade();
        echo "tem " . $this->getidade() . " anos e pesa " . $this->getpeso() . "kg";
        echo "<br>Ele tem " . $this->getvitorias() . " vitória(s) ";
        echo $this->getderrotas() . " derrota(s) e " . $this->getempates() . " empate(s)";

    }
    
    public function status(){
        echo "<p>----------------------------------</p>";
        echo $this->getnome() . " é um peso " . $this->getcategoria();
        echo " e já ganhou " . $this->getvitorias() . " vez(es), ";
        echo "perdeu " . $this->getderrotas() . " vez(es) e ";
        echo "empatou " . $this->getempates() . " vez(es)!";
    }

    public function ganharLuta(){
        $this->setvitorias($this->getvitorias() + 1);
    }

    public function perderLuta(){
        $this->setderrotas($this->getderrotas() + 1);
    }

    public function empatarLuta(){
        $this->setempates($this->getempates() + 1);
    }

// Construtor ------------------------------------

    function __construct ($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setpeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

// getters ----------------------------------------

    function getnome(){
        return $this->nome;
    }

    function getnacionalidade(){
        return $this->nacionalidade;
    }
    
    function getidade(){
        return $this->idade;
    }

    function getaltura(){
        return $this->altura;
    }

    function getpeso(){
        return $this->peso;
    }

    function getcategoria(){
        return $this->categoria;
    }


    function getvitorias(){
        return $this->derrotas;
    }

    function getempates(){
        return $this->empates;
    }

    function getderrotas(){
        return $this->derrotas;
    }

// setters ---------------------------------------

    function setnome($nome){
        $this->nome = $nome;
    }

    function setnacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    function setidade($idade){
        $this->idade = $idade;
    }

    function setaltura($altura){
        $this->altura = $altura;
    }

    function setpeso($peso){
        $this->peso = $peso;
        $this->setcategoria();
    }

    private function setcategoria(){
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

    function setvitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    function setderrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    function setempates($empates){
        $this->empates = $empates;
    }



}
?>