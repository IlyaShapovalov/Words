<?php

function get_data() {
  $fname = CONFIG['data_file'];
  $json = '';
  if (!file_exists($fname)) {
    file_put_contents($fname, '');
  } else {
    $json = file_get_contents($fname);
  }
  return $json;
}

function form_data() {
  $json = get_data();
  return json_decode($json);
}

function get_term($term) {
  $data = form_data();
  foreach ($data as $objekt) {
      if ($objekt->term == $term ) {
          return ($objekt->term . ': ' . $objekt -> definition);
      }
  }
}

function add_term ($term, $definition) {
  $data[] = new TermItem ($term, $definition);
  return $data;
}

function search_results($search) {
  $data = form_data();
  $search_result = array_filter($data, function ($item) use ($search) {
    if (strpos($item->term, $search) !== false || strpos($item->definition, $search) !== false ) {
      return true;
    }
  });
  return $search_result;
}

function set_data ($data) {
  $json = json_encode($data);
  file_put_contents(CONFIG['data_file'], $json);
}