<?php

class Dashboard extends Controller{

    function __construct() {
        
        parent::__construct();
        Auth::checkedLogged();
        /*
         * Checking the SESSION variables which are set
         */
        //print_r($_SESSION);
        //
        //Setting a JavaScript variable to the view
        $this->view->js = array('dashboard/js/default.js');
    }

    function index(){
        /*
         *require 'models/login_model.php';
         *$model = new Login_Model;
         */
        
        $this->view->welcomeMsg = 'Access:'.' '.$_SESSION['role'];
        $this->view->render('dashboard/index');
    }
    
    function logout(){
        session::destroy();
        header('location: ../login');
        /*
         * In Tutorial MVC, the header is
         *      header('location: ' . URL . 'login');
         */
        exit();
    }
    
    //xhr(XML Http Request) = AJAX
    function xhrInsert(){
        $this->model->RunXhrInsert();
    }
    
    function xhrGetListings(){
        $this->model->RunXhrGetListings();
    }
    
    function xhrDeleteListing(){
        $this->model->RunXhrDeleteListing();
    }
    
    function projectDetails(){
        
        $data = array();
        $data['proj_name'] = $_POST['proj_name'];
        $data['departments'] = serialize($_POST['departments']);
        $data['proj_num'] = $_POST['proj_num'];
        $data['proj_start'] = $_POST['proj_start'];
        $data['offshore'] = $_POST['offshore'];
        $data['prod_support'] = $_POST['prod_support'];
        $data['offshore_lead'] = $_POST['offshore_lead'];
        $data['offshore_team'] = serialize($_POST['offshore_team']);
        $data['proj_lead'] = $_POST['proj_lead'];
        $data['onshore_team'] = serialize($_POST['onshore_team']);
        $data['proj_dur'] = $_POST['proj_dur'];
        $data['end_date'] = $_POST['end_date'];
        
        $this->model->InsertProjDetails($data);
    }
}


