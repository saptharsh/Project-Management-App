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
}


