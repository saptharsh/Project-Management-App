<?php

class Auth {
    
    // So that we don't have to initialize the class to call this method
    public static function checkedLogged() {
        
        Session::init();
        $logged = Session::get('loggedIn');
        
        if( $logged == false ) {
            Session::destroy();
            header('location: error');
            /*
             * For example, If the user tries to enter the enter withour loggin in: http://localhost:7770/mvc/dashboard
             *      The user would be directed to http://localhost:7770/login
             *      Hence, changed the header method
             * header('location: ../login');
             */
            //exit();
        }
        
    }
}
