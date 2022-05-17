<?php

class MysqlDataBridge extends DataProvider  {

    private function connect () {
        try {
            return new PDO($this -> data_source, CONFIG['db_user'], CONFIG['db_password']); 
        } catch (PDOException $e) {
            echo $e -> getMessage();
            return null;
        }
    }

    public function form_data() {
        $db = $this -> connect();

        if ($db == null) {
            return [];
        }
        
        $query = $db -> query('SELECT * FROM terms');
        $data = $query -> fetchAll(PDO::FETCH_CLASS, 'TermItem');
        return $data;
    }

    public function get_term($term) {
        $db = $this -> connect();

        if ($db == null) {
            return [];
        }


       
    }

    public function add_term ($term, $definition) {
        $db = $this -> connect();

        if ($db == null) {
            return;
        }
       
        $sql = 'INSERT INTO terms (term, definition) VALUES (:term, :definition)';
        $statement = $db -> prepare($sql);
        $statement -> execute ([
            ':term' => $term,
            ':definition' => $definition
        ]);

        $statement = null;
        $db = null;
        
    }

    public function delete_term ($term) {
        $db = $this -> connect();
        if ($db == null) {
            return;
        }

        $sql = 'DELETE FROM terms WHERE term = :term'; 
        $statement = $db -> prepare($sql);
        $statement -> execute([
            ':term' => $term
        ]);
        $statement = null;
        $db = null;
        redirect('/admin/admin.php');

      
    }

    public function edit_term ($term) {
     
    }
    
    public function search_results($search) {
     
    }
}
