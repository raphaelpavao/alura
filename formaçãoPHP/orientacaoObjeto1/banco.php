<?php
    require 'src\Pessoa.php';
    require 'src\Conta.php';
    require 'src\Titular.php';    
    require 'src\Endereco.php';
    require 'src\Cpf.php';
    
    

    $cpf1 = new Cpf('298.440.348-76');
    $cpf2 = new Cpf('309.551.459-87');

    $endereco1 = new Endereco('Valinhos','Bairro dos Loucos','Rua da Bibi','08091980');
    $endereco2 = new Endereco('Vinhedo','Bairro da Bolinha','Rua do Lilão','15051981');

    $t1 = new Titular($cpf1,'Raphael',$endereco1);
    $t2 = new Titular($cpf2,'Isabella',$endereco2);

    $c1 = new Conta($t1);
    $c2 = new Conta($t2);

    $c1->depositar = 900;
    $c2->depositar = 200;

    $c1->depositar(400);
    $c1->transferir(100,$c2);

    echo(PHP_EOL);

    echo $c1->recuperarNome().PHP_EOL;
    echo $c1->recuperarCpf().PHP_EOL;
    echo $c1->recuperarSaldo().PHP_EOL;
    echo $c1->recuperarCidade().PHP_EOL;
    echo $c1->recuperarBairro().PHP_EOL;
    echo $c1->recuperarRua().PHP_EOL;
    echo $c1->recuperarNumero().PHP_EOL;

    echo(PHP_EOL);
    echo(PHP_EOL);

    echo $c2->recuperarNome().PHP_EOL;
    echo $c2->recuperarCpf().PHP_EOL;
    echo $c2->recuperarSaldo().PHP_EOL;
    echo $c2->recuperarCidade().PHP_EOL;
    echo $c2->recuperarNumero().PHP_EOL;

    echo(PHP_EOL);
    
    echo Conta::recuperarNumeroContas().PHP_EOL;
?>