<?php

class Formm_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function RunInsert($data) {
        
        $this->db->insert('person', array(
            'name' => $data['name'],
            'age' => $data['age'],
            'gender' => $data['gender']
        ));
     
        return TRUE;
    }
    
}
