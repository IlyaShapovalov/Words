<?php

session_start();

require_once ( '../app/app.php');

ensure_user_is_auth();

if (isset($_POST['delete'])) {
    Data::delete_term($_POST['deleted-term']);
}

$view_bag = [
    'title' => 'Edit term'
];

view(APP_ROOT . '/views/admin/delete');
