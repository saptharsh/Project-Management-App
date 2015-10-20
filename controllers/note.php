<?php

class Note extends Controller{

    public function __construct() {
        
        parent::__construct();
        Auth::checkedLogged();
        
        // Checking the SESSION variables which are set
        //print_r($_SESSION);
        
        //Setting a JavaScript variable to the view
        $this->view->js = array('users/js/jqueryui.js');
        
    }

    public function index(){
        
        $this->view->notesList = $this->model->noteList();//Controller grabbing from Model and giving it to View
        $this->view->render('note/index');
    }
    
    public function create(){
        //echo 'Check Form Action';
        
        $data = array(
            'title' => $_POST['title'],
            'content' => $_POST['content']
        );
        
        
        //Do the Error checking
        
        $this->model->RunCreate($data);
        /*
         * After we Post the user info to create, the header is refereshed so that the data appears dynamically 
         *  below in the users list
         */
        header('location: ' . URL . 'note');
    }
    
    public function edit($id){
        //fetch users individually
        $this->view->note = $this->model->getNote($id);
        //print_r($this->model->getUser($id));
        /*
         * fetchAll() return a multi - dimentional array 
         * Array ( [0] => Array ( [id] => 1 [login] => sappy [role] => owner ) )
         */
        
        $this->view->render('note/edit');
    }
    
    public function editSave($id){
        
        //Form is posted from the Edit page, Do the Error check
        
        $data = array(
            'title' => $_POST['title'],
            'content' => $_POST['content']
        );
        
        //Do the Error checking
        
        $this->model->RunEditSave($data);
        
        header('location: ' . URL . 'users');
    }

    public function delete($id){
        $this->model->RunDelete($id);
        header('location: ' . URL . 'users');
    }
}








