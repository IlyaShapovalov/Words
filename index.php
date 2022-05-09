<?php
session_start();

require_once './app/app.php';

$view_bag = [
    'title' => 'Graceful words'
];

$data = new DataProvider (CONFIG['data_file']);

view ('index', $data->form_data());




