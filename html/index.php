<?php

use \Controllers\CoursesController;
use \Controllers\UsersController;
use \Autoload\Autoloader;

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('DS', DIRECTORY_SEPARATOR);

require('Autoload/Autoloader.php');
Autoloader::register();

$url = explode('?', $_SERVER['REQUEST_URI'])[0];
$data = explode('/', $url);
$page = $data[1];

$users = new UsersController();
$courses = new CoursesController();

switch ($page) 
{
    case '':
        include('./views/index/index.php');
        break;
    case 'cours':
        if (!empty($data[2])) {
            $courses->course($data[2]);
            break;
        }
        $courses->allCourses();
        break;
    case 'cours/id':
        $courses->course(4);
        break;
    case 'professeurs':
        $users->getUsers();
        break;
    case 'professeur':
        $users->getUser($data[2]);
        break;
}