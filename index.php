<?php
session_start();

require_once './app/app.php';

view ('index', Data::form_data());




