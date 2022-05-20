<?php
session_start();

require_once './app/app.php';

$view_bag['title'] = 'Graceful words';

view ('index', Data::form_data());




