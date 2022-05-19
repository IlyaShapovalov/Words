<?php

require 'dataprovider.class.php';

class Data {

    static private $bridge;
    
    static public function start (DataProvider $provider) {
        return self::$bridge = $provider;
    }

    static public function get_data() {
        return self::$bridge -> get_data();
    }

    static public function set_data ($data) {
        return self::$bridge -> set_data($data);
      }

    static public function form_data() {
        return self::$bridge -> form_data();
    }

    static public function add_term($term, $definition) {
        return self::$bridge -> add_term($term, $definition);
    }

    static public function delete_term ($term) {
        return self::$bridge -> delete_term($term);
    }

    static public function edit_term ($term) {
        return self::$bridge -> edit_term($term);
    }

    static public function search_results($search) {
        return self::$bridge -> search_results($search);
    }
}