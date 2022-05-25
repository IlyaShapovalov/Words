<?php

class FileDataBridge extends DataProvider  {

    public function get_data() {
        $fname = $this -> data_source;
        $json = '';
        if (!file_exists($fname)) {
            file_put_contents($fname, '');
        } else {
            $json = file_get_contents($fname);
        }
        return $json;
    }

    public function set_data ($data) {
        $json = json_encode($data);
        file_put_contents($this -> data_source, $json);
      }

    public function form_data() {
        $json = $this -> get_data();
        return json_decode($json);
    }

    public function add_term ($term, $definition) {
        $data = $this -> form_data();
        $new_term = new TermItem;
        $new_term -> term = $term;
        $new_term -> definition = $definition;
        $data[] = $new_term;
        $this -> set_data ($data);
        redirect( '/admin/admin.php');
    }

    public function delete_term ($term) {
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

    public function edit_term ($term) {
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
    
    public function search_results($search) {
        $data = $this -> form_data();
        if ($search) {
            $search_result = array_filter($data, function ($item) use ($search) {
                if (stripos($item->term, $search) !== false || stripos($item->definition, $search) !== false ) {
                return true;
                }
            });
            return $search_result;
        }
        else return ($data); 
    }
}