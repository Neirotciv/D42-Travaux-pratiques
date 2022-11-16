<?php

require_once('./Controllers/UsersController.php');
require_once('./Controllers/CoursesController.php');

$users = new UsersController();
$courses = new CoursesController();

$url = explode('?', $_SERVER['REQUEST_URI'])[0];
$data = explode('/', $url);
$page = $data[1];
echo $page;

switch ($page) 
{
    // '/' Index
    case '':
        echo 'index';
        break;
    // '/cours' Afficher tout les cours
    case 'cours':
        $courses->allCourses();
        break;
    // '/cours/:id' Afficher le cours sélectionné
    case 'cours':
        echo 'vue cours par id';
        $courses->allCourses();
        break;
    // '/professeurs' Afficher tout les professeurs
    case 'professeurs':
        echo 'vue professeurs';
        break;
    // '/professeur/:id' Afficher la fiche du professeur sélectionné
    case 'professeur':
        echo 'vue professeur par id';
        break;
}