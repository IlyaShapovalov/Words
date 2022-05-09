<?php
session_start();
session_unset();
session_destroy();
require_once './app/app.php';
redirect('index.php');

