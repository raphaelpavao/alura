<?php
    class Endereco
    {
        //Atributos
        private string $cidade;
        private string $bairro;
        private string $rua;
        private string $numero;

        //Métodos
        //Construtor
        public function __construct(string $cidade, string $bairro, string $rua, string $numero){
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->rua = $rua;
            $this->numero = $numero;
        }

        //Destrutor
        public function __destruct()
        {
            echo 'Endereço excluído'.PHP_EOL;
        }

        //Modificadores
        
        //Acessos

        function recuperarCidade(){
            return $this->cidade;
        }

        function recuperarBairro(){
            return $this->bairro;
        }
        
        function recuperarRua(){
            return $this->rua;
        }

        function recuperarNumero(){
            return $this->numero;
        }
    };
?>