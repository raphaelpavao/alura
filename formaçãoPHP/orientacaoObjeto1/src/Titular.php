<?php
    class Titular extends Pessoa
    {
        //Atributos
        private Endereco $endereco;     
                
        //Métodos
        //Construtor
        public function __construct(Cpf $cpfTitular, string $nomeTitular, Endereco $endereco){
            $this->validarNome($nomeTitular);
            $this->cpf = $cpfTitular;
            $this->nome = $nomeTitular;
            $this->endereco = $endereco;
        }        

        //Destrutor
        public function __destruct(){
            echo 'Titular excluído'.PHP_EOL;
        }

        //Acessos
        function recuperarCidade():string{
            return $this->endereco->recuperarCidade();
        }

        function recuperarBairro():string{
            return $this->endereco->recuperarBairro();
        }

        function recuperarRua():string{
            return $this->endereco->recuperarRua();
        }

        function recuperarNumero():string{
            return $this->endereco->recuperarNumero();
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