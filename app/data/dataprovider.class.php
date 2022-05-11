<?php

require 'termitem.class.php';

class DataProvider  {

    public $file_path;
    
    function __construct($file_path) {
        $this -> file_path = $file_path; 
    }

    function get_data() {
        $fname = $this -> file_path;
        $json = '';
        if (!file_exists($fname)) {
            file_put_contents($fname, '');
        } else {
            $json = file_get_contents($fname);
        }
        return $json;
    }

    function set_data ($data) {
        $json = json_encode($data);
        file_put_contents($this -> file_path, $json);
      }

    function form_data() {
        $json = $this -> get_data();
        return json_decode($json);
    }

    function get_term($term) {
        $data = $this -> form_data();
        foreach ($data as $objekt) {
            if ($objekt->term == $term ) {
                return ($objekt->term . ': ' . $objekt -> definition);
            }
        }
    }

    function add_term ($term, $definition) {
        $data = $this -> form_data();
        $data[] = new TermItem ($term, $definition);
        $this -> set_data ($data);
        redirect( '/admin/admin.php');
    }

    function delete_term ($term) {
        $data = $this -> form_data();
        for ($i = 0; $i < count($data); $i++) { 
            if ($data[$i]->term === $term) {
                unset($data[$i]);
                break;   
            }
        }
        $new_data = array_values($data);
        $this -> set_data ($new_data);
        redirect( '/admin/admin.php');
    }

    function edit_term ($term) {
        global $view_bag;
        $data = $this -> form_data();
        if (isset($_POST['edit'])) {
            foreach ($data as $object) {
                if ($object->term == $_POST['original-term']) {
                    $object->term = $_POST['edited-term'];
                    $object->definition = $_POST['edited-description'];
                    break;
                }
            }
            $this -> set_data ($data);
            redirect('./admin.php');
        }
        
        if (isset($term)) {
            foreach ($data as $object) {
                if ($object->term == $_GET['key']) {
                    $view_bag['term'] = $object->term;
                    $view_bag['def'] = $object->definition;
                    break;
                }
            }
        }
    }
    
    function search_results($search) {
        $data = $this -> form_data();
        $search_result = array_filter($data, function ($item) use ($search) {
            if (strpos($item->term, $search) !== false || strpos($item->definition, $search) !== false ) {
            return true;
            }
        });
        return $search_result;
    }
}