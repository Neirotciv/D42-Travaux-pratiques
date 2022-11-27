<?php

namespace Controllers;

use \Models\UsersModel;

class UsersController
{
    private object $model;

    public function __construct()
    {
        $this->model = new UsersModel();
    }
    
    /**
     * getUsers
     *
     * @return void
     */
    public function allUsers(): void
    {
        $users = $this->model->users();
        $lines = (int)ceil(count($users) / 3);
        compact('users', 'lines');
        include('../html/views/users/allUsers.php');
    }
    
    /**
     * getUser Get the user in database and display in view
     *
     * @param  mixed $id The id of the user we want to get
     * @return void
     */
    public function getUser(int $id): void
    {
        $user = $this->model->user($id);
        compact('user');
        include('../html/views/users/user.php');
    }
}