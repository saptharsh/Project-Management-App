<?php
/**
 * 
 * When users fill out a FORM
 *  - POST to PHP
 *  - Sanitize Data
 *  - Validate Data
 *  - Return Data
 *  - Write to Database
 * 
 */
//require 'Form/Val.php';

class Form {

    /** @var array, $_currentItem, The immediate posted item */
    private $_currentItem = null;

    /** @var array, $_postData, stores all the posted data in the FORM */
    private $_postData = array();
    
    /** @var Object, $_val, The validator object */
    private $_val = array();
    
    /** @var array, $_error, Holds the current Form errors */
    private $_error = array();
    
    //Constructing the Validator Object
    public function __construct() {
        $this->_val = new Val();
    }

    /**
     * post - This is to run $_POST
     * 
     * @param string $field - The HTML fieldName to post
     */
    // Setter
    public function post($field) {
        
        $this->_postData[$field] = $_POST[$field];
        $this->_currentItem = $field;
        return $this;
    }
    
    /**
     * fetch() - retuns the posted data
     * @param mixed $fieldName
     * @return mixed String or array
     */
    // Getter
    public function fetch($fieldName = false) {
        
        if($fieldName){
            if(isset($this->_postData[$fieldName]))
                return $this->_postData[$fieldName];
            
            else
                return false;
        } else{
            return $this->_postData;
        }
        
        return $this->_postData;
    }
    
    /**
     * 
     * @param mixed $typeOfValidator - A method from the Form/Val class
     * @param string $arg - A property to validate against
     * @return \Form
     */
    public function val($typeOfValidator, $arg = NULL) {
        
        if($arg == NULL){
            $error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem]);
        } else{
            $error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem], $arg);
        }
        
        if($error){
            //Storing the error in the _error array Object (_currentItem => fieldName (key), $error (value))
            $this->_error[$this->_currentItem] = $error;
        }
        
        /*
         * Good way for debugging
         */
        //echo '<pre>';
        //print_r($this->_error);
        
        return $this;
    }
    
    /**
     * submit - Handles the Form, and throws an exception upon error
     * @return boolean
     * @throws Exception
     */
    public function submit() {
        
        if(empty($this->_error)){
            return true;
        } else{
            $str = '';
            foreach ($this->_error as $key => $value) {
                $str .= $key .' : '.$value.' </br> ';
                
            }
            throw new Exception($str);
        }
    }    
    
    
    
}











