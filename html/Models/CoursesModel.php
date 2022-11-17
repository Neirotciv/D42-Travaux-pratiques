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
            id,
            code,
            title,
            img,
            description
            FROM courses
            WHERE id = :id;
        ";

        return $this->fetch($sql, [':id' => $id]);
    }
}