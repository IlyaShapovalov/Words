<?php
session_start();

require_once './app/app.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if  ($_POST['email'] == USER_NAME && $_POST['password'] == PASSWORD) {
    $_SESSION ['email'] =  $_POST['email'];
    redirect('./admin/admin.php');
    }
}

$view_bag = [
    'title' => 'Login page'
];

view('login');

