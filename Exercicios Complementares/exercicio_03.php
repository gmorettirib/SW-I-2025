<?php
    class funcionario{
        private $nome;
        private $salario;

        public function __construct($nome_novo, $salario_novo){
            $this->nome = $nome_novo;
            $this->salario = $salario_novo;
        }

        public function getnome(){
            return $this->nome;
        }
        
        public function aumentarsalario($porcentagem){
            $aumento = $this->salario * ($porcentagem / 100);
            $this->salario += $aumento;
            echo "Salário atualizado: R$" . number_format($this->salario, 2, ',', '.') . "<br>";

        }


        public function exibirinformaçoes(){
            echo "Nome do funcionário: " . $this->nome . "<br>";
            echo "Salário atual: R$" . number_format($this->salario, 2, ',', '.') . "<br>";
        }

    }


?>