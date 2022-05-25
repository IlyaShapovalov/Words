<?php

session_start();

require_once './app/app.php';

view (APP_ROOT . '/views/index', Data::form_data());




