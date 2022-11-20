<?php

namespace Models;

class UsersModel extends Model
{
    public function users(): array
    {
        $sql = "SELECT
            id,
            firstname,
            lastname,
            avatar,
            alt,
            role
            FROM users;
        ";
        
        return $this->fetchAll($sql);
    }

    public function user(int $id): object
    {
        $sql = "SELECT
            id,
            firstname,
            lastname,
            avatar,
            alt,
            address,
            phone
            FROM users
            WHERE id = :id
        ";

        return $this->fetch($sql, [':id' => $id]);
    }
}