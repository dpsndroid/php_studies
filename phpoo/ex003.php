<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <a href="ex002.php">Exercício 01</a>
    <a href="ex004.php">Exercício 03</a>
    <h1>PHP orientado a objetos</h1>
    <?php
       class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC"){
                $this->setSaldo(50);
            } elseif ($t == "CP"){
                $this->setSaldo(150);
            }
        }
        
        public function fecharConta(){
            if ($this->getSaldo() > 0) {
                echo "Conta ainda tem dinheiro. Não posso fechar";
            } elseif ($this->getSaldo() < 0){
                echo "Conta está em débito, impossível encerrar";
            } else {
                $this->setStatus(false);
            }
        }
        
        public function depositar($v){
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $v);
                echo "Depósito de R$ $v na conta de" .$this->getDono(). "<br>";
            } else {
                echo "Conta fechada. Não consigo depositar";
            }
        }
        
        public function sacar($v){
            if ($this->getStatus()){
                if ($this->getSaldo() > $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "Saque de R$ $v autorizado na conta de" .$this->getDono(). "<br>";
                } else {
                    echo "Saldo insuficiente para saque";
                }

            } else {
                echo "Não posso sacar de uma conta fechada";
            }
        }

        public function pagarMensal($v) {
            if ($this->getTipo() == "CC"){
                $v = 12;
            } else if ($this->getTipo() == "CP"){
                $v = 20;
            }
            if ($this->getStatus()){
                $this->setSaldo ($this->getSaldo() - $v);
                echo "Mensalidade de R$ $v debitada na conta de" .$this->getDono(). "<br><br>.";
            } else {
                echo "Problemas com a conta. Não posso cobrar";
            }
        }
        
        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "Conta criada com sucesso<br>";             
        }
        
        public function getnumConta(){
            return $this->numConta;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function getDono() {
            return $this->dono;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function getStatus() {
            return $this->status;
        }





        public function setnumConta($numConta){
            $this->numConta = $numConta;
        } 

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function setDono($dono) {
            $this->dono = $dono;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function setStatus($status) {
            $this->status = $status;
        }
        }
    
    ?>
</body>
</html>