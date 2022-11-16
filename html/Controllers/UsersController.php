<?php
require_once('./Models/UsersModel.php');

class UsersController
{
    public function __construct()
    {
        $this->users = new UsersModel();
    }

    public function getUsers()
    {

    }

    public function getUser(int $id)
    {
        
    }
}