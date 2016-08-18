<?php

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
}
