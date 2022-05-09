<?php

session_start();

require_once ( '../app/app.php');

$data = form_data();

ensure_user_is_auth();

$view_bag = [
    'title' => 'Edit term'
];

if (isset($_POST['edit'])) {
    foreach ($data as $object) {
        if ($object->term == $_POST['original-term']) {
            $object->term = $_POST['edited-term'];
            $object->definition = $_POST['edited-description'];
            break;
        }
    }
    set_data ($data);
    redirect('./admin.php');
}

if (isset($_GET['key'])) {
    foreach ($data as $object) {
        if ($object->term == $_GET['key']) {
            $view_bag['term'] = $object->term;
            $view_bag['def'] = $object->definition;
            break;
        }
    }
}

view( APP_ROOT . '/views/admin/edit');
