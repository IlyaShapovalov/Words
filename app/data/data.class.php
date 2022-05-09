<?php

class Data {

    static private $box;
    
    static public function start ($provider) {
        return self::$box = $provider;
    }
    static public function get_data() {
        return self::$box -> get_data();
    }

    static public function set_data ($data) {
        return self::$box -> set_data();
      }

    static public function form_data() {
        return self::$box -> form_data();
    }

    static public function get_term($term) {
        return self::$box -> get_term($term);
    }

    static public function search_results($search) {
        return self::$box -> search_results($search);
    }

}