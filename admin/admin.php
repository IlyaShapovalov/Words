<?php

session_start();

require_once ( '../app/app.php');

$data = form_data();

ensure_user_is_auth();

$view_bag = [
    'title' => 'Admin page'
];

view(APP_ROOT . '/views/admin/admin', $data);



