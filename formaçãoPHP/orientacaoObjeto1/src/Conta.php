<?php
    class Conta
    {
        //Atributos
        private Titular $titular;
        private float  $saldo;
        private static $numeroDeContas = 0;


        //Métodos
        //Construtor
        public function __construct(Titular $titular){
            $this->titular = $titular;
            $this->saldo = 0;
            self::$numeroDeContas++;
        }

        //Destrutor
        public function __destruct()
        {
            self::$numeroDeContas--;
            echo 'Conta excluída'.PHP_EOL;
        }

        //Modificadores
        public function sacar(float $valorSaque) : void {
            if($valorSaque > $this -> saldo){
                echo "Saldo indisponível";
                return;
            };
            $this -> saldo -= $valorSaque;
        }

        public function depositar(float $valorDeposito) : void {
            if($valorDeposito < 0){
                echo "Valor a depositar deve ser positivo";
                return;
            };
            $this -> saldo += $valorDeposito;
        }

        public function transferir(float $valorTransferir, Conta $contaDestino) : void {
            if($valorTransferir > $this -> saldo){
                echo "Saldo indisponível";
                return;
            };
            $this -> sacar($valorTransferir);
            $contaDestino -> depositar($valorTransferir);
        }
        
        //Acessos
        public function recuperarCpf() : string{
            return $this->titular->recuperarCpf();
        }

        public function recuperarCidade() : string{
            return $this->titular->recuperarCidade();
        }

        public function recuperarBairro() : string{
            return $this->titular->recuperarBairro();
        }

        public function recuperarRua() : string{
            return $this->titular->recuperarRua();
        }

        public function recuperarNumero() : string{
            return $this->titular->recuperarNumero();
        }

        public function recuperarNome() : string{
            return $this->titular->recuperarNome();
        }

        public function recuperarSaldo() : float{
            return $this->saldo;
        }

        public static function recuperarNumeroContas(): int
        {
            return self::$numeroDeContas;
        }
    };
?>