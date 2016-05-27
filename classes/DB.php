<?php


class DB
{
    public $db;
    
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=test','root','');
        
    }

    public function query($sql, $class ='stdClass')
    {
        $stmt = $this->db->query($sql);
        $res = [];
        while ($row = $stmt->fetchObject($class)){
            $res[] = $row;
        };
        return $res;
    }

    public function __destruct()
    {
        $this->db = NULL;
    }

}