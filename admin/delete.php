<?php

session_start();

require_once ( '../app/app.php');

$data = form_data();

ensure_user_is_auth();

if (isset($_POST['delete'])) {
    for ($i = 0; $i < count($data); $i++) { 
        if ($data[$i]->term === $_POST['deleted-term']) {
            unset($data[$i]);
            break;   
        }
    }

    $new_data = array_values($data);
    
    set_data ($new_data);
    redirect( '/admin/admin.php');
}

$view_bag = [
    'title' => 'Edit term'
];

view(APP_ROOT . '/views/admin/delete', $data);
