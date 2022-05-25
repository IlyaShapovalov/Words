<?php

session_start();

require_once ( '../app/app.php');

Data::edit_term($_GET['key']);

if (isset($_POST['cancel'])) {
    redirect('admin.php');
}

view(APP_ROOT . '/views/admin/edit');
