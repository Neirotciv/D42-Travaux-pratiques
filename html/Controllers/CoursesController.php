<?php

namespace Controllers;

use \Models\CoursesModel;

class CoursesController extends Controller
{
    private object $model;
    
    public function __construct()
    {
        $this->model = new CoursesModel();
    }
    
    /**
     * allCourses Get all the courses and display in view
     * @return void
     */
    public function allCourses(): void
    {
        $courses = $this->model->courses();
        include('views/courses/allCourses.php');
    }
    
    /**
     * course Get the course identified by the id and display in view
     * @param  mixed $id The id of the course we want to get
     * @return void
     */
    public function course(int $id): void
    {
        $course = $this->model->course($id);
        include('../html/views/courses/course.php');
    }
}