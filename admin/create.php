<?php

session_start();

require_once ( '../app/app.php');

$data = form_data();

ensure_user_is_auth();

if (isset($_POST['create'])) {

    $term = $_POST['term'];

    $data[] = new TermItem ($_POST['term'], $_POST['description']);

    set_data ($data);
    redirect( '/admin/admin.php');
}

$view_bag = [
    'title' => 'Add new term'
];

view(APP_ROOT . '/views/admin/create', $data);
