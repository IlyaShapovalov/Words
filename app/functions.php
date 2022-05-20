<?php

function redirect ($page){
  header( "Location: $page");
  die();
}

function view($name, $model = '') {
  global $view_bag;
  require (APP_ROOT . "/views/layout.view.php");
}

function source_switch ($source) {
  $source = ($source == 'db') ? 'json' : 'db';
  return $source;
}

function current_page() {
  $current_page = basename($_SERVER['PHP_SELF'], ".php");
  return $current_page;
}
