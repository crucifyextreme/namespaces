<?php

namespace SON\Pdo;
use SON\Clientes\ClienteGenerica;
use SON\Clientes\Types;

class Configuracao extends \PDO {

    private $dsn = "mysql:host=localhost:3306;dbname=code_education";
    private $username = "root";
    private $password = '';

    public $handle;

    public function __construct()
    {
        try {
            $dataBase = parent::__construct($this->dsn, $this->username, $this->password);
            $this->handle = $dataBase;
            return $this->handle;

        } catch(\PDOException $e) {
            echo $e->getMessage() . "\n";
            echo $e->getTraceAsString() . "\n";
        }
    }

    public function persist($cliente) {

       /* $stmt = $this->handle->prepare("INSERT INTO clientes(nome,documento,endereco,cidade,tipo_cliente,classificacao) VALUE
            (:nome,:documento,:endereco,:cidade,:tipo_cliente,:classificacao);");
        $stmt->bindValue(':nome', $cliente->getNome());
        $stmt->bindValue(':documentto', $cliente->get());*/
        echo $cliente['id'];

    }


}