<?php

require 'termitem.class.php';

class DataProvider  {

    public $data_source;

    function __construct($data_source) {
        $this -> data_source = $data_source;    
    }
}