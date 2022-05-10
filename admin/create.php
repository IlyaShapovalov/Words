<?php

session_start();

require_once ( '../app/app.php');

ensure_user_is_auth();

if (isset($_POST['create'])) {
    Data::add_term ($_POST['term'], $_POST['description']);
}

$view_bag = [
    'title' => 'Add new term'
];

view(APP_ROOT . '/views/admin/create');
