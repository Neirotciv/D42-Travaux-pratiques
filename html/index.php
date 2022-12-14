<?php

use \Router\Router;
use \Autoload\Autoloader;
use \Controllers\UsersController;
use \Controllers\CoursesController;

// Constant for server root
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('DS', DIRECTORY_SEPARATOR);

require('Autoload/Autoloader.php');
Autoloader::register();

// Make basic routing with the request uri
$url = explode('?', $_SERVER['REQUEST_URI'])[0];
$data = explode('/', $url);
$page = $data[1];

$users = new UsersController();
$courses = new CoursesController();

// Check the request
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