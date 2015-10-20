<?php
//From validation
class Val {

    public function __construct() {
        
    }

    public function minlength($data, $arg) {
        
        if(strlen($data) < $arg){
            return "The entered value should be $arg chaters long";
        }
    }
    
    public function maxlength($data, $arg) {
        
        if(strlen($data) > $arg){
            return "The entered value can only be $arg chaters long";
        }
    }
    
    public function integerVal($data) {
        
        if(ctype_digit($data) == false){
            return "The entered value can only be a digit";
        }
    }
    
    public function __call($name, $arguments) {
        throw new Exception("$name does not exist inside of: ". __CLASS__);
    }
    
}








