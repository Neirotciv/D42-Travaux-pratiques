<?php

namespace Models;

class CoursesModel extends Model
{
    public function courses()
    {
        $sql = "SELECT
            id,
            code,
            title,
            img,
            description
            FROM courses
        ";
        
        return $this->fetchAll($sql);
    }

    public function course(int $id)
    {
        $sql = "SELECT
            c.id,
            c.code,
            c.title,
            c.img,
            c.description
            FROM courses AS c
            LEFT JOIN users AS u ON c.idUser = u.id
            WHERE c.id = :id;
        ";

        return $this->fetch($sql, [':id' => $id]);
    }
}