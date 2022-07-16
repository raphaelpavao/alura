<?php
    class Funcionario extends Pessoa
    {
        //Atributos
        private $cargo;

        //Métodos
        //Construtor
        public function __construct(string $nome, Cpf $cpf, string $cargo){
            parent::__construct($nome,$cpf);
            $this->cargo = $cargo;
        }

          //Destrutor
          public function __destruct(){
            echo 'Funcionário excluído'.PHP_EOL;
        }

        //Acessos
         function recuperarCargo():string{
            return $this->cargo;
        }
    }
?>