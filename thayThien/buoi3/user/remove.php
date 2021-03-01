<?php
require_once '../User.php';

$id = $_GET['id'];
// var_dump($id);
// die;
User::destroy($id);
header("location: index.php");

// echo "<pre>";
// var_dump($users);


?>