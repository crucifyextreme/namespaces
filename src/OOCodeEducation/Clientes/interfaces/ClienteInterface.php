<?php

namespace OOCodeeducation\Clientes\interfaces;


interface ClienteInterface
{

    public function getNome();
    public function getTelefone();
    public function getEndereco();
    public function getCidade();
    public function getClassificacaoCliente();

}