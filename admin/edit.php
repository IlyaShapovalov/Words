<?php

session_start();

require_once ( '../app/app.php');

Data::edit_term($_GET['key']);

view(APP_ROOT . '/views/admin/edit');
