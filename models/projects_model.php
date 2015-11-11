<?php

class Projects_model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getprojectDetails($id) {

        return $this->db->select('SELECT * FROM project_details WHERE serialid = :id', array(':id' => $id));
    }

}
