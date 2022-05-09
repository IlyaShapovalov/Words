<?php
session_start();

require_once './app/app.php';

$view_bag = [
    'title' => 'Graceful words'
];

view ('index', form_data());

echo CONFIG ['data_file'];


