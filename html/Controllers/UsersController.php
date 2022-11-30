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
     * getUsers Get all users in databases and display in view
     * @return void
     */
    public function allUsers(): void
    {
        $users = $this->model->users();
        include('../html/views/users/allUsers.php');
    }
    
    /**
     * getUser Get the user identified by the id in database and display in view
     * @param  mixed $id The id of the user we want to get
     * @return void
     */
    public function getUser(int $id): void
    {
        $user = $this->model->user($id);
        include('../html/views/users/user.php');
    }
}