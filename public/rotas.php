<?php

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rota_ = explode('/',$dados_url['path'],2);
$rota = str_replace('rotas.php','',$rota_[1]);


/* Rota para listagem de clientes */
if($rota == "buscaClientes") {

   $clienteFisica1 = new OOCodeeducation\Clientes\Types\ClienteFisicaType();

   $clienteFisica1->setId(1)
        ->setNome('Guilherme Ferreira')
        ->setCpf('000.000.000-01')
        ->setEndereco('Rua A')
        ->setCidade('Montes Claros')
        ->setTipoCliente('Pessoa Fisica')
        ->setClassificacaoCliente(2);


   $cliente [0]= array(
        'id'            => $clienteFisica1->getId(),
        'nome'          => $clienteFisica1->getNome(),
        'cpf'           => $clienteFisica1->getCpf(),
        'endereco'      => $clienteFisica1->getEndereco(),
        'cidade'        => $clienteFisica1->getCidade(),
        'tipo_cliente'  => $clienteFisica1->getTipoCliente(),
        'classificacao' => $clienteFisica1->getClassificacaoCliente()
    );

    echo json_encode($cliente);


}