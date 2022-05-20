<?php

define('APP_ROOT', $_SERVER['DOCUMENT_ROOT']);

require 'config.php';
require 'functions.php'; 
require 'data/data.class.php';
require 'data/filedatabridge.class.php';
require 'data/mysqldatabridge.class.php';

$_SESSION ['data_source'] = $_POST['source_switch'] ?? $_SESSION ['data_source'] ?? 'db';

if (isset($_POST['switch'])) {
    $_SESSION['data_source'] = source_switch($_SESSION['data_source']);
}

if ($_SESSION ['data_source'] == 'db') {
    Data::start(new MysqlDataBridge(CONFIG['dsn']));
    $view_bag = ['data_source' => 'db'];
}
elseif ($_SESSION ['data_source'] == 'json') {
    Data::start(new FileDataBridge(CONFIG['data_file']));
    $view_bag = ['data_source' => 'json'];
}