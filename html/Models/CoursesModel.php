<?php

namespace Models;

class CoursesModel extends Model
{
    public function courses()
    {
        $sql = "SELECT
            c.id,
            c.code,
            c.title,
            c.img,
            c.alt,
            u.trigram
            FROM courses AS c
            LEFT JOIN users AS u ON u.id = c.idUser
        ";
        
        return $this->fetchAll($sql);
    }

    public function course(int $id)
    {
        $sql = "SELECT
            c.code,
            c.title,
            c.img,
            c.alt,
            c.description,
            u.firstname,
            u.lastname,
            u.trigram
            FROM `courses` AS c
            LEFT JOIN users AS u ON u.id = c.idUser
            WHERE c.id = :id
        ";

        return $this->fetch($sql, [':id' => $id]);
    }
}