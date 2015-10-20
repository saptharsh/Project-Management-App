<?php

class Users_Model extends Model{
    
    public function __construct() {
        parent::__construct();
        //echo 'Db connection worked in Users_model which extends Model Obj</br>';
    }
    
    public function usersList(){
        
        return $this->db->select('SELECT id,login,role FROM users');
        /*
        $sth = $this->db->prepare('SELECT id,login,role FROM users');
        $sth->execute();
        return $sth->fetchAll();
        */
    }
    
    public function RunCreate($data){
        
        $this->db->insert('users', array(
            'login' => $data['login'],
            'password' => $data['password'],
            'role' => $data['role']
        ));
        
        //die;
        /*
        $sth = $this->db->prepare('INSERT INTO users (`login`,`password`,`role`) '
                . 'VALUES (:login, :password, :role)');
        $sth->execute(array(
            ':login' => $data['login'],
            ':password' => $data['password'],
            ':role' => $data['role']
        ));
         * 
         */
    }
    
    public function RunDelete($id){
        
        $result = $this->db->select('SELECT role FROM users WHERE id = :id',array(":id" => $id));
        
        /*
        $sth = $this->db->prepare('SELECT role FROM users WHERE id = :id');
        $sth->execute(array(
            ":id" => $id
        ));
        
        //die();
        //$result = $sth->fetch(); /* Doesn't give array of arrays, multi - dimentional array */
        //print_r($result);
        /* */
        
        if($result[0]['role'] == owner){
            //echo '<script> alert(\' Owner cannnot be deleted \'); </script>';
            return false;
        }
        //die();
        
        $this->db->delete('users', "id = $id");
        /*
        $sth = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $sth->execute(array(
            ":id" => $id
        ));
        */
        
    }
    
    public function getUser($id){
        
        return $this->db->select('SELECT id,login,role FROM users WHERE id = :id',array(':id' => $id));
        
        /*
        $sth = $this->db->prepare('SELECT id,login,role FROM users WHERE id = :id');
        $sth->execute(array(
            ":id" => $id
        ));
         * 
         */
        /*
         * Fetching single row
         */
        //return $sth->fetch();
        
    }
    
    //Update
    public function RunEditSave($data){
        
        //print_r($data);
        
        $postData = array(
                        'login' => $data['login'],
                        'password' => $data['password'],
                        'role' => $data['role']
                        );
        
        //Wasn't working for a while when the "if" was not surrounded by BACKTICKS
        $this->db->update('users', $postData , "`id` = {$data['id']}");
        
        /*
        $sth = $this->db->prepare('UPDATE users SET `login` = :login, `password` = :password, `role` = :role'
                . ' WHERE id = :id');
        
        $sth->execute(array(
            //This is called binding the array
            ':id' => $data['id'],
            ':login' => $data['login'],
            ':password' => $data['password'],
            ':role' => $data['role']
        ));
         * 
         */
    }
    
}















