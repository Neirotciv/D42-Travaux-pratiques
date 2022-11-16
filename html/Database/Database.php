<?php

class Database
{
    private $pdo;

    public function connect()
    {
        $dsn = 'mysql:host=mysql;dbname=dfs;charset=utf8';
        $username = 'user';
        $password = 'password';
        $options = [];

        try {
            $this->pdo = new PDO($dsn, $username, $password, $options);
            return $this->pdo;
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }
}