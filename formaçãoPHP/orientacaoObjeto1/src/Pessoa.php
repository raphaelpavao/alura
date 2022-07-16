<?php
    class Pessoa
    {
        //Atributos
        private $nome;
        private $cpf;
                
        //Métodos
        //Construtor
        public function __construct(string $nome,Cpf $cpf){
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        //Destrutor
        public function __destruct(){
            echo 'Pessoa excluída'.PHP_EOL;
        }

        //Acessos
        function recuperarNome():string{
            return $this->nome;
        }
        function recuperarCpf():string{
            return $this->cpf->recuperarCpf();
        }

        //Atribuidores

        //Validações
        
    };
?>