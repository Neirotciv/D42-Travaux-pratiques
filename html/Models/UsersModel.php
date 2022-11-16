<?php
require_once('Model.php');

class UsersModel extends Model
{
    public function users()
    {
        $sql = "SELECT
            id,
            firstname,
            lastname,
            avatar,
            address,
            phone,
            trigram
            FROM users;
        ";
        
        $this->database->fetch($sql);
    }

    public function user(int $id)
    {
        $sql = "SELECT
            id,
            firstname,
            lastname,
            avatar,
            address,
            phone,
            trigram
            FROM users
            WHERE id = :id
        ";

        $this->database->fetch($sql, [':id' => $id]);
    }
}