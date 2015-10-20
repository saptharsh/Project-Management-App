<?php

class Login extends Controller{

    function __construct() {
        parent::__construct();
    }

    function index(){
        /*
         * calling the Hash class in Libs
         * The Salt can be anything, but some salt has to be passed.(Longer the better)
         */
        $this->view->msg='This is the Login page! Welcome';//First the message has to be set, then view has to be rendered.
        /*
         * Checking if the hash is working fine
         * $hashed = Hash::create('md5', 'awesome', HASH_KEY);
         * $this->view->echo = $hashed;
         */
        $this->view->render('login/index');
    }
    
    function run(){
        $this->model->run();//calling the run() in the _model.php
    }
    
}

