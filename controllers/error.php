<?php

class Error extends Controller{

    function __construct() {
        
        parent::__construct();

    }
    //default page
    function index(){
        ////First the message has to be set, then view has to be rendered.
        $this->view->msg = '(msg passed by error controller to \'view\'), this page doesn\'t exist </br>  '; 
        $this->view->render('error/index');
    }
    
}

