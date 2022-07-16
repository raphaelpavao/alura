<?php
    require 'src\Conta.php';
    require 'src\Titular.php';
    require 'src\Cpf.php';

    $cpf1 = new Cpf('456');
    $cpf2 = new Cpf('321');

    $t1 = new Titular($cpf1,'Raphael');
    $t2 = new Titular($cpf2,'Isabella');

    $c1 = new Conta($t1);
    $c2 = new Conta($t2);

    $c1->depositar = 900;
    $c2->depositar = 200;

    $c1->depositar(400);
    $c1->transferir(100,$c2);

    echo $c1->recuperarCpf().PHP_EOL;
    echo $c2->recuperarCpf().PHP_EOL;

    echo $c1->recuperarNome().PHP_EOL;
    echo $c2->recuperarNome().PHP_EOL;

    echo $c1->recuperarSaldo().PHP_EOL;
    echo $c2->recuperarSaldo().PHP_EOL;
    echo Conta::recuperarNumeroContas().PHP_EOL;
?>