<?php

session_start();

require_once ( '../app/app.php');

if (isset($_POST['delete'])) {
    Data::delete_term($_POST['deleted-term']);
} elseif (isset($_POST['cancel'])) {
    redirect('admin.php');
}

view(APP_ROOT . '/views/admin/delete');
