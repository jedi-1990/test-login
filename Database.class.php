<?php

class Database {
    public $connection;

    public function __construct($config,$username = 'root',$password = '') {
        // Get connection
        $dsn = 'mysql:'.http_build_query($config,'',';');
        $this->connection = new PDO($dsn,$username,$password,[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
    }
    // function query for easy execute
    public function query($query,$params = []){
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}