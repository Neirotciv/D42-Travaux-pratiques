<?php

namespace Models;

use \Database\Database;

/**
 * Parent class for all model
 * Includes standard fetch methods
 */
class Model 
{
    private object $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->connect();
    }

    /**
     * Retrieves the remaining rows of a result set
     * @param string $sql   The sql query
     * @param array $params Parameters for a prepared statement [':key' => value]
     * @return array An array of objects
     */
    protected function fetchAll(string $sql, array $params = []): array
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(\PDO::FETCH_CLASS);
    }

    /**
     * Retrieves a row from a result set associated with the PDOStatement object
     * @param string $sql   The sql query
     * @param array $params Parameters for a prepared statement [':key' => value]
     * @return object An anonymous object with property names
     */
    protected function fetch(string $sql, array $params = []): object
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute($params);
        return $sth->fetch(\PDO::FETCH_OBJ);
    }
}