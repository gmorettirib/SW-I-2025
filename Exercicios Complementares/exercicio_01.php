<?php
    class aluno{
        private $nome;
        private $nota1;
        private $nota2;

        public function __construct($nome_novo, $nota1_nova, $nota2_nova){
            $this->nome = $nome_novo;
            $this->nota1 = $nota1_nova;
            $this->nota2 = $nota2_nova;
        }

        public function getnome(){
            return $this->nome;
        }
        
        public function setnome($nome_novo){
             $this->nome = $nome_novo;
        }


        public function verificarsituacao($nota1, $nota2, $nome ){
            $media = ($nota1 + $nota2) / 2;
            echo"Aluno:".$this->nome. "<br>";
            if ($media >= 7){
                echo "APROVADO" , "<br>";
            }else
            echo "REPROVADO" , "<br>"; 
            echo"Media do aluno:".$media. "<br>";
        }

    }


?>