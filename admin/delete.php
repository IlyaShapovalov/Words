<?php

session_start();

require_once ( '../app/app.php');

$data = form_data();

ensure_user_is_auth();

if (isset($_POST['delete'])) {
    Data::delete_term($_POST['deleted-term']);
}

$view_bag = [
    'title' => 'Edit term'
];

view(APP_ROOT . '/views/admin/delete', $data);
