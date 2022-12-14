<?php
require_once "Controlador.php";
class ControleRemoto implements Controlador{
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    //Métodos especiais
    public function __construct(){
        $this-> volume = 0;
        $this-> ligado = false;
        $this-> tocando = false;
    }
    private function getVolume(){
        return $this-> volume;
    }
    private function getLigado(){
        return $this-> ligado;
    }
    private function getTocando(){
        return $this-> tocando;
    }
    private function setVolume($volume){
        $this-> volume = $volume;
    }
    private function setLigado($ligado){
        $this-> ligado = $ligado;
    }
    private function setTocando($tocando){
        $this-> tocando = $tocando;
    }
    public function ligar(){
        $this-> setLigado(true);
    }
    public function desligar(){
        $this-> setDesligado(true);
    }
    public function abrirMenu(){
        echo "<br>Está ligado?:" . ($this->getLigado()?"Sim":"Não");
        echo "<br>Está tocando?:" . ($this->getTocando()?"Sim":"Não:");
        echo "<br>Volume: " . $this->getVolume();
         
    }
    public function fecharMenu(){
        echo "Fechando menu...";
    }
    public function maisVolume(){
        if ($this->getLigado() == true){
            $this->setVolume($this->getVolume() + 10);
        }
    }
    public function menosVolume(){
        if ($this->getLigado() == true){
            $this->setVolume($this->getVolume() - 10);
        }
    }
    public function ligarMudo(){
        if ($this->getLigado() && $this->getVolume() > 0){
            $this-> setVolume(0); 
        }
    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if ($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }

    }
    public function pause(){
        if ($this->getLigado() && !($this->getTocando())){
            $this->setTocando(false);
    }
    }
}