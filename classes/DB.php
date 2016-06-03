<?php


class DB
{
    private $dsn;
    private $className = 'stdClass';
    
    public function __construct()
    {
        $this->dsn = new PDO('mysql:host=localhost;dbname=test','root','');
    }

    
    public function query($sql, $params = [])
    {
        $stmt = $this->dsn->prepare($sql);
        $stmt->execute($params);
        $res = $stmt->fetchAll(PDO::FETCH_CLASS, $this->className);
        return $res;
    }

    public function execute($sql, $params = [])
    {
        $stmt = $this->dsn->prepare($sql);
        $res = $stmt->execute($params);
        return $res;
    }
    
    public function lastInsertId()
    {
        return $this->dsn->lastInsertId();
    }

        
    public function setClassName($className){
        $this->className = $className;
    }

    public function __destruct()
    {
        $this->dsn = NULL;
    }

}