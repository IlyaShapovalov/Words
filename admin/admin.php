<?php

session_start();

require_once ( '../app/app.php');

view(APP_ROOT . '/views/admin/admin', Data::form_data());



