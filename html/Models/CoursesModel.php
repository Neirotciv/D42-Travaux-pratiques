<?php

namespace Models;

/**
 * Queries on the course table
 */
class CoursesModel extends Model
{
    /**
     * Get all courses
     * @return array An object array of courses with teachers info
     */
    public function courses(): array
    {
        $sql = "SELECT
            c.id,
            c.code,
            c.img,
            c.title,
            c.alt,
            u.trigram
            FROM courses AS c
            LEFT JOIN users AS u ON u.id = c.idUser
        ";
        
        return $this->fetchAll($sql);
    }

    /**
     * Get one course from $id
     * @param integer $id A course's identifier
     * @return object Course data as an object
     */
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