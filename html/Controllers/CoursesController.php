<?php
require_once('./Models/CoursesModel.php');

class CoursesController
{
    private $model;

    public function __construct()
    {
        $this->model = new CoursesModel();
    }

    public function allCourses()
    {
        $courses = $this->model->courses();

    }

    public function course(int $id)
    {
        return $this->model->course($id);
    }
}