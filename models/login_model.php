<?php

class Login_Model extends Model{
    
    public function __construct() {
        parent::__construct();
        //echo md5('sappy');
    }
    
    public function run(){
        /*
         * md5 is a 32 bit hash
         */
        $statement = $this->db->prepare("SELECT id, role FROM users WHERE login = :user AND password = :pass");
        $statement->execute(array(
            ':user' => $_POST['user'],
            ':pass' => Hash::create('sha256', $_POST['pass'], HASH_KEY)
        ));
        
        /*
         * The Obj returned by $statement was 'Array of Arrays'
         */
        
        $result = $statement->fetchAll();//$statement returns an Array of objects 
        //print_r($result);
        //echo '</br>';
        $data = $result['0'];
        //print_r($data);
        //echo '</br>role='.$data['role']; 

        $count = $statement->rowCount();
        if($count > 0){
            //log in the user
            Session::init();
            Session::set('userid', $data['id']);
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            header('location: ../dashboard');
        } else {
            //show an error
            header('location: ../login');
        }
        
    }
}
