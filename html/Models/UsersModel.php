<?php

namespace Models;

/**
 * Queries on the users table
 */
class UsersModel extends Model
{   
    /**
     * Get all users
     * @return array An object array of users
     */
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

    /**
     * Get one user from $id
     * @param integer $id A user's identifier
     * @return object User data as an object
     */
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