<?php

class ConnectDb
{
    private $host = 'localhost';
    private $dbname = 'antagosoft';
    private $username = 'root';
    private $password = '';

    /**
     * @var PDO
     */
    public $con;

    function __construct()
    {

        $this->connect();
    }

    function connect()
    {

        try {

            $this->con = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {

        }

    }

}