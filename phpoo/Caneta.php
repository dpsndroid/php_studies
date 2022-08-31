<?php
class Caneta {
    public $modelo;  # qualquer um tem acesso
    public $cor;     
    private $ponta;     # só eu tenho acesso
    protected $carga;       # só o pai e os filhos tem acesso
    protected $tampada;

    public function rabiscar() {
        if ($this->tampada == true){
            echo "<p>Erro! Não posso rabiscar";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
        
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->destampada = false;
    }
}

?>