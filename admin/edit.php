<?php

session_start();

require_once ( '../app/app.php');

ensure_user_is_auth();

$view_bag = [
    'title' => 'Edit term'
];

Data::edit_term($_GET['key']);

view(APP_ROOT . '/views/admin/edit');
