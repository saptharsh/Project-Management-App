<?php

class Note_Model extends Model{
    
    public function __construct() {
        parent::__construct();
        
        // Check the $_SESSION vars which are set
        // print_r($_SESSION);
    }
    
    public function noteList(){
        
        return $this->db->select('SELECT * FROM note WHERE user_id = :user_id', 
                array('user_id' => $_SESSION['userid']));
        /*
        $sth = $this->db->prepare('SELECT id,login,role FROM users');
        $sth->execute();
        return $sth->fetchAll();
        */
    }
    
    
    public function getNote($id){
        
        return $this->db->select('SELECT * FROM note WHERE user_id = :user_id AND id = :id',
                array('user_id' => $_SESSION['userid'], ':id' => $id));
        
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
    
    public function RunCreate($data){
        
        $this->db->insert('note', array(
            'title' => $data['title'],
            'user_id' => $_SESSION['userid'],
            'content' => $data['content'],
            'date_added' => ''
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
        
        
        $this->db->delete('users', "id = $id AND user_id = {$_SESSION['userid']}");
        /*
        $sth = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $sth->execute(array(
            ":id" => $id
        ));
        */
        
    }
    
    
    
    //Update
    public function RunEditSave($data){
        
        //print_r($data);
        
        $postData = array(
            'title' => $data['title'],
            'content' => $data['content'],
          
        );
        
        //Wasn't working for a while when the "id" was not surrounded by BACKTICKS
        $this->db->update('users', $postData , "`id` = {$data['id']} 
                                AND user_id = {$_SESSION['userid']}");
        
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















