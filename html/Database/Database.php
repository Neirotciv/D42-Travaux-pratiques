<?php

namespace Database;

/**
 * Use for connection between PHP and the database server
 */
class Database
{
    private $pdo;

    /**
     * Connection to database
     * Displays an error if there is a connection problem
     * @return object An instance of the PDO object
     */
    public function connect(): object
    {
        $dsn = 'mysql:host=mysql;dbname=dfs;charset=utf8';
        $username = 'user';
        $password = 'password';
        $options = [];

        try {
            $this->pdo = new \PDO($dsn, $username, $password, $options);
            return $this->pdo;
        } catch (\PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }
}