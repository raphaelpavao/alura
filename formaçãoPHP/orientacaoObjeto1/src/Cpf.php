<?php
    class Cpf
    {
        //Atributos    
                
        //Métodos
        //Construtor
        public function __construct(string $cpf){
            $this->cpf = $cpf;
        }

        //Destrutor
        public function __destruct(){
            echo 'CPF excluído'.PHP_EOL;
        }

        //Acessos
        public function recuperarCpf():string{
            return $this->cpf;
        }

        //Atribuidores

        //Validações
        
    };
?>