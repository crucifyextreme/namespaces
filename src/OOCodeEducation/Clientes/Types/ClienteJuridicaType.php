<?php

namespace OOCodeeducation\Clientes\Types;

use OOCodeeducation\Clientes\ClienteGenerica;

class ClienteJuridica extends ClienteGenerica {

    private $cnpj;

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

}