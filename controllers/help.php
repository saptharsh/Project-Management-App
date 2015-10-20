<?php

class Help extends Controller{

    function __construct() {
        parent::__construct();

    }
    //custom function for the default view of the page
    function index(){
        $this->view->msg='This is the help page! Welcome';//First the message has to be set, then view has to be rendered.
        $this->view->render('help/index');
        //$this->view->render('help/index',1);//$dontInclude = 1(true), gives just the help's index page without CSS
    }

    
    public function other($arg = false) {
        echo 'We are in Help\'s other()<br/>';
        echo 'Optional param:' .$arg .'</br>';
        //the CSS design is lost when the http header becomes, http://localhost:7770/mvc/help/other
        //In order to solve it, we defined a constant(URL) in 'paths.php' and echo the constant in header.php
        $this->view->msg='This is the help page\'s other()  Welcome';//First the message has to be set, then view has to be rendered.
        $this->view->render('help/index');//CSS view for http://localhost:7770/mvc/help/other was missing without this
        require 'models/help_model.php';
        $model = new Help_Model();
        $this->view->blah = $model->blah();//not sure what this does
    }
}
