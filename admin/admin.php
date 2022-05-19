<?php

session_start();

require_once ( '../app/app.php');

$view_bag = [
    'title' => 'Admin page'
];

view(APP_ROOT . '/views/admin/admin', Data::form_data());



