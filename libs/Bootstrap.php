<?php

class Bootstrap {

    function __construct() {
                
        $urlll = '';
        //$url = isset($_GET['url']) ? $_GET['url']: null; 
        
        if (isset($_GET['url']) && is_string($_GET['url'])) {
            $url = $_GET['url']; // name in $_GET['url'] is ok, so you can set it
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $urll = rtrim($url, '/');//right trim if there are more than on /
            $urlll = explode('/', $urll);
        }
        /*
         *print_r($urlll);//for debugging
         *echo '<br/>';
         */
                
        //when there is empty url
        if(empty($urlll[0])){
           //echo 'bootstrap initiating Main Index page, \'controllers/Index.php\'</br>'; 
           require 'controllers/index.php';
           $controller = new Index();
           $controller->index();
           return false;//the remaining below code is not executed
        }
        
        $file = 'controllers/'. $urlll[0] .'.php';//never user controllers, instead use config.ini
        
        if(file_exists($file)){//checking if url exists
            //incude the file
            require $file;
        }else{
            $this->error();
            return false;//stops the execution of code and returns
        }
        
        //initializes the class of the 'included' controller
        $controller = new $urlll[0];//redirecting to the controller's php file
        $controller->loadModel($urlll[0]);
        
        if(isset($urlll[2])){
            if (method_exists($controller, $urlll[1])) {
		$controller->{$urlll[1]}($urlll[2]);//function(param)
            } else {
                $this->error();
            }
        }  else {
            if(isset($urlll[1])) {
                if (method_exists($controller, $urlll[1])) {
                    $controller->{$urlll[1]}();//function()
                } else {
                    $this->error();
                }
            } else {
                $controller->index();
            }
        }
        
    }//end of construct()
    
    function error(){
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index();
        return false;//stops the execution of code and returns
    }
    
}//end of class
