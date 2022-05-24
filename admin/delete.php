<?php

session_start();

require_once ( '../app/app.php');

if (isset($_POST['delete'])) {
    Data::delete_term($_POST['deleted-term']);
}

view(APP_ROOT . '/views/admin/delete');
