<?php
    class livro{
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor, $disponivel = true) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = $disponivel;

    }    
        public function exibirstatus() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "{$this->titulo} está disponível <br>";
        } else {
            echo "{$this->titulo} não está disponível <br>";
        }
    }
}