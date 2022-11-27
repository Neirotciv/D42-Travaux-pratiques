<?php

use \Router\Router;
use \Autoload\Autoloader;
use \Controllers\UsersController;
use \Controllers\CoursesController;

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('DS', DIRECTORY_SEPARATOR);

require('Autoload/Autoloader.php');
Autoloader::register();

$url = explode('?', $_SERVER['REQUEST_URI'])[0];
$data = explode('/', $url);
$page = $data[1];

$users = new UsersController();
$courses = new CoursesController();
$router = new Router();

// $router->get('/', 'index');
// $router->get('/professeurs', 'users.allUsers');
// $router->get('/professeurs/:id', 'users.getUser');
// $router->get('/cours', 'courses.allCourses');
// $router->get('/cours/id', 'courses.getCourse');

// $router->useRoute();

switch ($page) {
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
    case 'utilisateurs':
        $users->allUsers();
        break;
    case 'utilisateur':
        $users->getUser($data[2]);
        break;
}