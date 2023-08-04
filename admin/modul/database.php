<?php
class Database
{
    private $host;
    private $user;
    private $pwd;
    private $dbase;
    public $conn;

    function __construct($host,$user,$pwd,$dbase)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->dbase = $dbase;
        
        $this->conn = new mysqli($this->host, $this->user, $this->pwd, $this->dbase) or die(mysqli_error());
        // $conn = mysqli_connect($host, $user, $pwd, $dbase);

        if ($this->conn)
        {
            return true;
        } else {
            return false;
        }
    }
}