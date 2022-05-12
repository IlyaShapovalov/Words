<?php

require 'dataprovider.class.php';

class Data {

    static private $box;
    
    static public function start (DataProvider $provider) {
        return self::$box = $provider;
    }

    static public function get_data() {
        return self::$box -> get_data();
    }

    static public function set_data ($data) {
        return self::$box -> set_data($data);
      }

    static public function form_data() {
        return self::$box -> form_data();
    }

    static public function get_term($term) {
        return self::$box -> get_term($term);
    }

    static public function add_term($term, $definition) {
        return self::$box -> add_term($term, $definition);
    }

    static public function delete_term ($term) {
        return self::$box -> delete_term($term);
    }

    static public function edit_term ($term) {
        return self::$box -> edit_term($term);
    }

    static public function search_results($search) {
        return self::$box -> search_results($search);
    }

}