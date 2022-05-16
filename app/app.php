<?php

define('APP_ROOT', $_SERVER['DOCUMENT_ROOT']);

require 'config.php';
require 'functions.php'; 
require 'data/data.class.php';
require 'data/filedatabridge.class.php';
require 'data/mysqldatabridge.class.php';

$_SESSION ['data_source'] = $_POST['source_switch'] ?? $_SESSION ['data_source'] ?? 'db';

if ($_SESSION ['data_source'] == 'db') {
    Data::start(new MysqlDataBridge(CONFIG['dsn']));
}
elseif ($_SESSION ['data_source'] == 'json') {
    Data::start(new FileDataBridge(CONFIG['data_file']));  
}