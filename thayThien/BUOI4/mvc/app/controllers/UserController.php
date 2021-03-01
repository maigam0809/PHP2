<?php
namespace App\Controllers;

use App\Models\User;
class UserController {
    public function index(){
        $users = User::all();
        include_once './app/views/user/list.php';
    }
    public function create(){
        include_once './app/views/user/create.php';
    }
}