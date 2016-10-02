<?php

namespace Acme;

use PDO;

class QueryBuilder {

    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function fetchAll($tableName)
    {
        return $this->connection->query("SELECT * FROM {$tableName}")->fetchAll(PDO::FETCH_CLASS);
    }

    public function query($sql, $parameters)
    {
        return $this->connection->prepare($sql)->execute($parameters);
    }

}
