<?php

class DbConnector {

var $theQuery;
var $link;
    
    public function __construct() {
        ob_start();
  // Get the main settings from the array we just loaded
       // $host = 'localhost';
       // $db = 'capstone';
       // $user = 'root';
        //$pass = '';
        $host = 'remotemysql.com';
        $db = '3CTjHrjUyS';
        $user = '3CTjHrjUyS';
        $pass = 'gNOmy0VgtE';
        // Connect to the database
        $this->link = mysqli_connect($host, $user, $pass,$db);

    }
}

?>