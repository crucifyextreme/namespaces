<?php

require __DIR__.'/../autoload.php';

use SON\Pdo\Configuracao;
use SON\Clientes\Types\ClienteFisicaType;
use SON\Clientes\Types\ClienteJuridicaType;

$pdo = new Configuracao();


/*$pdo    = $config->Conecta(); */

echo "######## Removendo Tabela ########## \n";

$pdo->query("DROP TABLE IF EXISTS clientes");

echo "######## Criando Tabela ############ \n";

$pdo->query("CREATE TABLE clientes (
  id_cliente INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(150) NULL,
  documento VARCHAR(50) NULL,
  endereco VARCHAR(180) NULL,
  cidade VARCHAR(150) NULL,
  tipo_cliente VARCHAR(50) NULL,
  classificacao INT NULL,
  PRIMARY KEY (id_cliente));");

echo "######## Tabela Criada com Sucesso ######## \n";


echo "######## Inserindo Dados ######## \n";

$smt = $pdo->prepare("INSERT INTO clientes(nome,documento,endereco,cidade,tipo_cliente,classificacao) VALUE
            (:nome,:documento,:endereco,:cidade,:tipo_cliente,:classificacao);");
$smt->bindValue(':nome','Guilherme');
$smt->bindValue(':documento','000.000.000-01');
$smt->bindValue(':endereco','Rua A');
$smt->bindValue(':cidade','Montes Claros');
$smt->bindValue(':tipo_cliente','Pessoa Fisica');
$smt->bindValue(':classificacao',5);

$smt->execute();

echo "######## Dados Inseridos com Sucesso ######## \n";

$clienteFisica1 = new ClienteFisicaType();

$clienteFisica1->setId(1)
    ->setNome('Guilherme Ferreira')
    ->setCpf('000.000.000-01')
    ->setEndereco('Rua A')
    ->setCidade('Montes Claros')
    ->setTipoCliente('Pessoa Fisica')
    ->setClassificacaoCliente(2);

print_r( $clienteFisica1);
//$pdo->persist($clienteFisica1);
