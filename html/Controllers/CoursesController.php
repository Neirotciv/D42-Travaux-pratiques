<?php
require_once('../Models/CoursesModel.php');

class CoursesController
{
    public function __construct()
    {
        $courses = new CoursesModel();
    }

    public function getCourses()
    {

    }

    public function getCourse(int $id)
    {

    }
}