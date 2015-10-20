<?php

class Index extends Controller{

    function __construct() {
        parent::__construct();

    }
    //default page
    function index(){
        //echo Hash::create('sha256', 'insertFeature', HASH_KEY);
        $this->view->msg='This is the main page! Welcome';//First the message has to be set, then view has to be rendered.
        $this->view->render('index/index');
    }

}
