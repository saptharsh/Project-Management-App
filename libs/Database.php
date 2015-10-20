<?php

/*
 * The use of BACKTICKS in MYSQL
 * use backticks(`) around column names when you use reserved keywords in query:
 * INSERT INTO users (`name`,`group`) VALUES ('John', '9')
 */


class Database extends PDO{

    function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS) {
        /*
         * parent::__construct('mysql:host=localhost;dbname=mvc','root','root');
         */
        parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME,$DB_USER,$DB_PASS);
        
        //By extending PDO we can set many attributes, on how to deal with database
        //parent::setAttribute($attribute, $value)
        //parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTIONS);
    }
    
    /**
     * SELECT
     * @param type $sql - an SQL string
     * @param type $array - Parameters to bind
     * @param constant $fetchMode - A PDO fetch mode
     * @return type - mixed
     */
    
    
    //$array - default empty
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC){
        
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }
        
        $sth->execute();
        
        return $sth->fetchAll($fetchMode);
        
    }
 
    //By default, the limit to delete an item is one
    /**
     * 
     * @param string $table
     * @param string $where
     * @param int $limit
     * @return int - Affected number rows 
     */
    public function delete($table, $where, $limit = 1){
        
        return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit"); 
        
    }


    



























    /**
     * 
     * @param string $table, A name of table to insert into 
     * @param string $data, An associative array 
     */
    public function insert($table, $data){
        
        //Sorting by keys
        ksort($data);
        
        //print_r($data);
        
        $fieldNames = implode('`,`', array_keys($data));
        /*
         * implode(',', array_keys($data)), if no backticks around the ","
         *      INSERT INTO users (`login,password,role`) VALUES (:login, :password, :role)
         * If backticks? then: INSERT INTO users (`login`,`password`,`role`) VALUES (:login, :password, :role)
         */
        $fieldValues = ':'. implode(', :', array_keys($data));
        
        //echo $fieldNames;
        //echo '<br/>';
        //echo $fieldValues;
        
        //echo "INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)";
        //die;//check the values you are getting before inserting
        
        //Double coutes around the Query, parses the $table variable without concatetnation
        $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");
        
        //Binding the values array
        foreach ($data as $key => $value) {
            //echo "$value <br/>";
            $sth->bindValue(":$key", $value);
        }
        
        $sth->execute();
        
    }
    
    /**
     * 
     * @param string $table, A name of table to insert into 
     * @param string $data, An associative array
     * @param string $where, A WHERE clouse in a query 
     */
    
    public function update($table, $data, $where){
        
        //Sorting by keys
        ksort($data);
        print_r($data);
        $fieldDetails = NULL;
        foreach ($data as $key => $value) {
            $fieldDetails .= "`$key` = :$key,";
        }
        
        $fieldDetailss = rtrim($fieldDetails, ',');
        
        //echo $fieldDetailss;
        
        //Double coutes around the Query, parses the $table variable without concatetnation
        $sth = $this->prepare("UPDATE $table SET $fieldDetailss WHERE $where");
        
        //Binding the values array
        foreach ($data as $key => $value) {
            //echo "$value <br/>";
            $sth->bindValue(":$key", $value);
        }
        
        $sth->execute();
        
    }

}
















