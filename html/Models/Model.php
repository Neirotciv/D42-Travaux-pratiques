<?php

namespace Models;

use \Database\Database;

class Model 
{
    private object $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->connect();
    }

    protected function fetchAll(string $sql, array $params = []): array
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(\PDO::FETCH_CLASS);
    }

    protected function fetch(string $sql, array $params = []): object
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute($params);
        return $sth->fetch(\PDO::FETCH_OBJ);
    }
}