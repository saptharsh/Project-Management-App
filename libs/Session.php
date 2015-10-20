<?php

class Session{
    
    public static function init(){
        @session_start();//Placing an @ symbol will stop the php giving notices in the browser's page
    }

    public static function set($key,$value){
        $_SESSION[$key] = $value;    
    }
    
    public static function get($key){
        /*
         * we would get an error saying undefined index 'loggedIn' when we visit index page
         */
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }
    }
    
    public static function destroy(){
        //unset($_SESSION);
        session_destroy();
    }
}

