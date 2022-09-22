<?php

require_once "Pessoa.php";

class Livro {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes(){
        echo "<hr>Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br>Páginas: " . $this->totPaginas . " atual: " .$this->pagAtual;
        echo "<br>Sendo lido por: " . $this->leitor->getNome();
    }

    public function abrir(){

    }
    public function fechar(){
        $this->aberto = false;
    }
    public function folhear($p){
        if($p > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    public function avancarPag(){
        $this->pagAtual ++;
    }
    public function voltarPag(){
        $this->pagAtual --;
    }

# Construtor ----------------------------------------------

    function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;

# getters ------------------------------------------------
        function getTitulo(){
            return $this->titulo;
        }
        function getAutor(){
            return $this->autor;
        }
        function totPaginas(){
            return $this->totPaginas;
        }
        function pagAtual(){
            return $this->pagAtual;
        }
        function aberto(){
            return $this->aberto;
        }
        function leitor(){
            return $this->leitor;
        }
        function abrir(){
            return $this->abrir;
        }
        function fechar(){
            return $this->fechar;
        }
        function folhear(){
            return $this->folhear;
        }

# setters ------------------------------------------

        function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        function setAutor($autor){
            $this->autor = $autor;
        }
        function settotPaginas($totPaginas){
            $this->totPaginas = $totPaginas;
        }
        function setpagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }
        function setAberto($aberto){
            $this->aberto = $aberto;
        }
        function setLeitor($leitor){
            $this->leitor = $leitor;
        }
        function setAbrir($abrir){
            $this->abrir = $abrir;
        }
        function setFechar($fechar){
            $this->fechar = $fechar;
        }
        function setFolhear($folhear){
            $this->folhear = $folhear;
        }

    }
}