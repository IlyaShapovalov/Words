<?php

require_once './app/app.php';

$term = $_GET['term'];

$view_bag = [
    'title' => 'Detail page for ' . $term
];

view ('detail', get_term($term));


