<?php
require_once('../Models/UsersModel.php');

class UsersController
{
    public function __construct()
    {
        $users = new UsersModel();
    }

    public function getUsers()
    {

    }

    public function getUser($id)
    {
        
    }
}