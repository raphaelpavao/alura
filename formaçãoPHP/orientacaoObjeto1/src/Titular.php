<?php
    class Titular
    {
        //Atributos
        private Cpf $cpf;
        private string $nome;       
                
        //Métodos
        //Construtor
        public function __construct(Cpf $cpfTitular, string $nomeTitular,){
            $this->validarNome($nomeTitular);
            $this->cpf = $cpfTitular;
            $this->nome = $nomeTitular;
        }

        //Destrutor
        public function __destruct(){
            echo 'Titular excluído'.PHP_EOL;
        }

        //Acessos
        function recuperarCpf(){
            return $this->cpf->recuperarCpf();
        }

        function recuperarNome(){
            return $this->nome;
        }

        //Atribuidores

        //Validações
        function validarNome($nome){
            if(strlen($nome)<5){
                echo 'Erro: O nome precisa ter no mínimo 5 caracteres. Conta não criada';
                exit();
            };
        }
    };
?>