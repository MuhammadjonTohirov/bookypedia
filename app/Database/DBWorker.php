<?php

/**
 * Created by PhpStorm.
 * User: M_hacker
 * Date: 11.05.2017
 * Time: 16:29
 */
class DBWorker
{
    private $user = 'root';
    private $password = '';
    private $connection;
    private $dbcon;

    function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=book_store', $this->user, $this->password);
        $this->dbcon = new PDO('mysql:host=localhost;dbname=users', $this->user, $this->password);
    }
    public function getBookStoreConnection(){

        return $this->connection;
    }
}