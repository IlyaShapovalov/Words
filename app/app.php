<?php

define('APP_ROOT', $_SERVER['DOCUMENT_ROOT']);

require 'config.php';
require 'functions.php'; 
require 'data/file_functions.php';
require 'data/dataprovider.class.php';
require 'data/data.class.php';

Data::start(new DataProvider(CONFIG['data_file']));