<?php

namespace OOCodeeducation\Clientes\Types;

use OOCodeeducation\Clientes\ClienteGenerica;

class ClienteFisicaType extends ClienteGenerica
{

    private $cpf;

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }


} 