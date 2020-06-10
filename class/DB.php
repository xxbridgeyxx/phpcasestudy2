<?php

class DB
{
    private $server = "i2cpbxbi4neiupid.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $user = "m93jl91jyplqicdr";
    private $pwd = "bj3txjw0ns0614qs";
    private $database = "iebdey321jcd2mhv";
    public $connection;

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->server, $this->user, $this->pwd, $this->database); //this --> his
        if ($this->connection->connect_error) {
            echo $this->connection->connect_error;
        }
    }
}
