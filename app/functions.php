<?php

function redirect ($page){
  header( "Location: $page");
  die();
}

function is_user_auth() {
  return isset($_SESSION['email']);
}

function ensure_user_is_auth() {
  if (!is_user_auth())  {
    redirect('../index.php');
 }
} 

function view($name, $model = '') {
  global $view_bag;
  require (APP_ROOT . "/views/layout.view.php");
}

function source_switch ($source) {
  $source = ($source == 'db') ? 'json' : 'db';
  return $source;
}
