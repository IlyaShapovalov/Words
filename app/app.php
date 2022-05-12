<?php

define('APP_ROOT', $_SERVER['DOCUMENT_ROOT']);

require 'config.php';
require 'functions.php'; 
require 'data/data.class.php';
require 'data/filedatabridge.class.php';
require 'data/mysqldatabridge.class.php';


Data::start(new MysqlDataBridge(CONFIG['dsn'])); 