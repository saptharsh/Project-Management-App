<?php

class Projects extends Controller {
    
    public function __construct() {
        parent::__construct();
        Auth::checkedLogged();
    }
    
    public function index() {
        
        $this->view->render('projects/index');
    }
    
    public function getproject($id) {
        
        $this->view->projectDetails = $this->model->getprojectDetails($id);
        //print_r($this->view->projectDetails);
        $this->view->render('projects/index');
    }
}

