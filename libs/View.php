<?php

class View {

    function __construct() {

    }   
    
    public function render($name, $dontInclude = false){
        
        if($dontInclude == true){
            /*
             * If we wanna include some page with different design from the website
             * $this->view->render('SomeFolderInViewsDir/diffPage',1);
             */
            require 'views/' .$name. '.php';
        } else{
            require 'views/newHeader.php';
            require 'views/' .$name. '.php';
            require 'views/newFooter.php';

        }
    }
    
}

