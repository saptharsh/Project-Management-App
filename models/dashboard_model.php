<?php

class Dashboard_Model extends Model {

    function __construct() {
        parent::__construct();
        
    }

    function RunXhrInsert(){
        //echo $_POST['textInsert'];checking in the Firebug before we insert
        
        $text = $_POST['textInsert'];//Sanitize the text before inserting
        $this->db->insert('savedata', array('textdata' => $text));
        
        //$stmntHandler = $this->db->prepare('INSERT INTO savedata (textdata) VALUES (:text)');
        /*
         * In $stmntHandler we execute the SQL
         */
        //$stmntHandler->execute(array(':text' => $text));
        
        //in order to get the response of the text inserted into DB in response window of console
        $data = array('textdata' => $text, 'id' => $this->db->lastInsertId());
        echo json_encode($data);
    }
    
    function RunXhrGetListings(){
        
        $result = $this->db->select('SELECT * FROM savedata');
        echo json_encode($result); 
        /*
        $stmntHandler = $this->db->prepare('SELECT * FROM savedata');
        $stmntHandler->setFetchMode(PDO::FETCH_ASSOC);
        $stmntHandler->execute();
        //echo $stmntHandler->fetchAll();//echo's as ARRAY() is the fetch was successful
        $data = $stmntHandler->fetchAll();
        echo json_encode($data);
        */
    }
    
    function RunXhrDeleteListing(){
        $id = (int) $_POST['id']; /* Type casting, from which user can't inject any harmful SQL */
        
        $this->db->delete('savedata', "id = '$id'");//Delete() doesn't have a prepared statement
        
        /*
        $stmnt = $this->db->prepare('DELETE FROM savedata WHERE id ="'.$id.'"');
        $stmnt->execute();
         * 
         */
    }
}




