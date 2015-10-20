<?php

class Users extends Controller{

    public function __construct() {
        
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        $role = session::get('role');
        if( $logged == false || $role != 'owner') {
            Session::destroy();
            header('location: login');
            /*
             * For example, If the user tries to enter the enter withour loggin in: http://localhost:7770/mvc/dashboard
             *      The user would be directed to http://localhost:7770/login
             *      Hence, changed the header method
             * header('location: ../login');
             */
            exit();
        }
        /*
         * Checking the SESSION variables which are set
         */
        //print_r($_SESSION);
        //Setting a JavaScript variable to the view
        $this->view->js = array('users/js/jqueryui.js');
        
    }

    public function index(){
        /*
         *require 'models/login_model.php';
         *$model = new Login_Model;
         */
        $this->view->welocmeMsg = $_SESSION['role'];
        $this->view->msg = "CRUD without AJAX</br>";
        $this->view->title = "Add new users to the Application<br/>";
        $this->view->usersList = $this->model->usersList();//Controller grabbing from Model and giving it to View
        $this->view->render('users/index');
    }
    
    public function create(){
        //echo 'Check Form Action';
        
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = Hash::create('sha256', $_POST['password'], HASH_KEY);
        $data['role'] = $_POST['role'];
        
        //Do the Error checking
        
        $this->model->RunCreate($data);
        /*
         * After we Post the user info to create, the header is refereshed so that the data appears dynamically 
         *  below in the users list
         */
        header('location: ' . URL . 'users');
    }
    
    public function edit($id){
        //fetch users individually
        $this->view->msg = "Properties of the User which you can edit<br/>";
        $this->view->user = $this->model->getUser($id);
        //print_r($this->model->getUser($id));
        /*
         * fetchAll() return a multi - dimentional array 
         * Array ( [0] => Array ( [id] => 1 [login] => sappy [role] => owner ) )
         */
        
        $this->view->render('users/edit');
    }
    
    public function editSave($id){
        
        //Form is posted from the Edit page, Do the Error check
        
        $data = array();
        $data['id'] = $id;
        $data['login'] = $_POST['login'];
        $data['password'] = Hash::create('sha256', $_POST['password'], HASH_KEY);
        $data['role'] = $_POST['role'];
        
        //Do the Error checking
        
        $this->model->RunEditSave($data);
        
        header('location: ' . URL . 'users');
    }

    public function delete($id){
        $this->model->RunDelete($id);
        header('location: ' . URL . 'users');
    }
}








