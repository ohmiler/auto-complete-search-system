<?php 

    const DBHOST = 'localhost';
    const DBUSER = 'root';
    const DBPASS = 'root';
    const DBNAME = 'search_db';

    $dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME . '';
    $conn = null;

    try {
        $conn = new PDO($dsn, DBUSER, DBPASS);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        die("Error : " . $e->getMessage());
    }


?>